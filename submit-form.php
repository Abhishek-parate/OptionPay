<?php

ini_set('display_errors', 0);
error_reporting(0);

// submit-form.php
require_once 'admin/config/database.php';

header('Content-Type: application/json');

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

$db = getDB();
$errors = [];
$response = ['success' => false, 'message' => '', 'errors' => []];

try {
    // Get form configuration from database
    $stmt = $db->prepare("SELECT section_data FROM contactus_settings WHERE section_name = 'form_section'");
    $stmt->execute();
    $formConfig = $stmt->fetch();
    $config = $formConfig ? json_decode($formConfig['section_data'], true) : [];
    
    // Basic spam protection checks
    
    // 1. Honeypot field check
    if (!empty($_POST['website'])) {
        // Silently fail - looks like a bot
        echo json_encode(['success' => true]); // Fake success to not alert bots
        exit;
    }
    
    // 2. Form submission time check (minimum 3 seconds)
    $minFormFillTime = 3; // seconds
    $formStartTime = $_POST['form_start_time'] ?? 0;
    if ($formStartTime && (time() - $formStartTime < $minFormFillTime)) {
        $response['message'] = 'Submission too fast';
        echo json_encode($response);
        exit;
    }
    
    // 3. Rate limiting by IP
    $clientIP = $_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
    $stmt = $db->prepare("SELECT COUNT(*) as count FROM contact_submissions WHERE ip_address = ? AND submission_date > DATE_SUB(NOW(), INTERVAL 1 HOUR)");
    $stmt->execute([$clientIP]);
    $recentSubmissions = $stmt->fetch();
    
    if ($recentSubmissions['count'] >= 5) {
        $response['message'] = 'Too many submissions from this IP address';
        echo json_encode($response);
        exit;
    }
    
    // 4. Validate form fields based on configuration or use defaults
    $fields = $config['fields'] ?? [
        ['name' => 'name', 'label' => 'Name', 'required' => true, 'pattern' => '[A-Za-z ]{2,50}'],
        ['name' => 'email', 'label' => 'Email', 'required' => true, 'type' => 'email'],
        ['name' => 'mobile', 'label' => 'Mobile', 'required' => true, 'pattern' => '[6789][0-9]{9}'],
        ['name' => 'company', 'label' => 'Company', 'required' => true, 'minlength' => 2, 'maxlength' => 50]
    ];
    
    $validatedData = [];
    
    foreach ($fields as $field) {
        $fieldName = $field['name'];
        $fieldValue = trim($_POST[$fieldName] ?? '');
        
        // Required field validation
        if ($field['required'] && empty($fieldValue)) {
            $errors[$fieldName] = ($field['label'] ?? ucfirst($fieldName)) . ' is required';
            continue;
        }
        
        if (!empty($fieldValue)) {
            // Length validation
            if (!empty($field['minlength']) && strlen($fieldValue) < $field['minlength']) {
                $errors[$fieldName] = ($field['label'] ?? ucfirst($fieldName)) . ' must be at least ' . $field['minlength'] . ' characters';
                continue;
            }
            
            if (!empty($field['maxlength']) && strlen($fieldValue) > $field['maxlength']) {
                $errors[$fieldName] = ($field['label'] ?? ucfirst($fieldName)) . ' must be no more than ' . $field['maxlength'] . ' characters';
                continue;
            }
            
            // Pattern validation
            if (!empty($field['pattern']) && !preg_match('/' . $field['pattern'] . '/', $fieldValue)) {
                $errors[$fieldName] = 'Please enter a valid ' . strtolower($field['label'] ?? $fieldName);
                continue;
            }
            
            // Specific field type validations
            switch ($field['type'] ?? $field['name']) {
                case 'email':
                    if (!filter_var($fieldValue, FILTER_VALIDATE_EMAIL)) {
                        $errors[$fieldName] = 'Please enter a valid email address';
                    }
                    break;
                    
                case 'mobile':
                    if (!preg_match('/^[6789][0-9]{9}$/', $fieldValue)) {
                        $errors[$fieldName] = 'Please enter a valid 10-digit mobile number';
                    }
                    break;
            }
            
            $validatedData[$fieldName] = htmlspecialchars($fieldValue, ENT_QUOTES, 'UTF-8');
        }
    }
    
    // If there are validation errors, return them
    if (!empty($errors)) {
        $response['message'] = 'Please correct the errors below';
        $response['errors'] = $errors;
        echo json_encode($response);
        exit;
    }
    
    // 5. Prepare data for external services (with sanitization)
    $postData = [
        'name' => $validatedData['name'] ?? '',
        'email' => filter_var($validatedData['email'] ?? '', FILTER_SANITIZE_EMAIL),
        'mobile' => preg_replace('/[^0-9]/', '', $validatedData['mobile'] ?? ''),
        'company' => $validatedData['company'] ?? ''
    ];
    
    // Add URL parameters with sanitization
    if (!empty($_GET)) {
        foreach ($_GET as $key => $value) {
            $postData[$key] = htmlspecialchars(trim($value));
        }
    }
    
    // 6. Save to database first
    $stmt = $db->prepare("
        INSERT INTO contact_submissions (name, email, mobile, company, ip_address, user_agent) 
        VALUES (?, ?, ?, ?, ?, ?)
    ");
    
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    
    if (!$stmt->execute([
        $postData['name'],
        $postData['email'],
        $postData['mobile'],
        $postData['company'],
        $clientIP,
        $userAgent
    ])) {
        throw new Exception('Failed to save submission to database');
    }
    
    // 7. Send to external destinations (with error handling)
    $externalErrors = [];
    
    try {
        // Send to Google Sheet
        $ch2 = curl_init('https://script.google.com/macros/s/AKfycbzvZxmUkOztFtur52IfeHBeFVVleV_-uTQec6LZ0hHTborylgBqv8gZKqMIpHrXJVza/exec');
        curl_setopt_array($ch2, [
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_SSL_VERIFYPEER => true
        ]);
        $response2 = curl_exec($ch2);
        $httpCode2 = curl_getinfo($ch2, CURLINFO_HTTP_CODE);
        
        if (curl_error($ch2) || $httpCode2 !== 200) {
            $externalErrors[] = 'Google Sheets integration failed';
            error_log('Google Sheets error: ' . curl_error($ch2) . ' HTTP: ' . $httpCode2);
        }
        curl_close($ch2);
    } catch (Exception $e) {
        $externalErrors[] = 'Google Sheets integration error';
        error_log('Google Sheets exception: ' . $e->getMessage());
    }
    
    try {
        // Send to OptionPay
        $OptionPayPayload = [
            'name' => $postData['name'],
            'mobile' => $postData['mobile'],
            'email' => $postData['email'],
            'company' => $postData['company'],
            'source' => "OptionPay_webform",
            'accessKey' => "R2OYR1AFVS5CRZFXEQUAL00C96O2MV160QYYBD0I1OXQV3C2V1T5WE0YIGW4"
        ];
        
        $ch3 = curl_init('https://c4za7glq.OptionPaymoney.in/a4slqzperan5z/qascvghktrbcqplkmnska/webhook-s2pweb-5xplqizor');
        curl_setopt_array($ch3, [
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($OptionPayPayload),
            CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_SSL_VERIFYPEER => true
        ]);
        $response3 = curl_exec($ch3);
        $httpCode3 = curl_getinfo($ch3, CURLINFO_HTTP_CODE);
        
        if (curl_error($ch3) || $httpCode3 !== 200) {
            $externalErrors[] = 'OptionPay integration failed';
            error_log('OptionPay error: ' . curl_error($ch3) . ' HTTP: ' . $httpCode3);
        }
        curl_close($ch3);
    } catch (Exception $e) {
        $externalErrors[] = 'OptionPay integration error';
        error_log('OptionPay exception: ' . $e->getMessage());
    }
    
    // 8. Success response (even if external services failed, we saved to database)
    $response['success'] = true;
    $response['message'] = $config['success_message'] ?? 'Thank you for your submission!';
    
    // Log external errors but don't fail the submission
    if (!empty($externalErrors)) {
        error_log('External service errors: ' . implode(', ', $externalErrors));
    }
    
    // Optional: Send email notification
    if (function_exists('sendEmailNotification')) {
        try {
            sendEmailNotification($validatedData);
        } catch (Exception $e) {
            error_log('Email notification error: ' . $e->getMessage());
        }
    }
    
} catch (Exception $e) {
    error_log('Contact form error: ' . $e->getMessage());
    $response['message'] = $config['error_message'] ?? 'An error occurred while processing your submission';
}

echo json_encode($response);

// Optional: Email notification function
function sendEmailNotification($data) {
    // Configure your email settings here
    $to = 'sales@optionpayindia.com'; // Your email address
    $subject = 'New Contact Form Submission - ' . ($data['company'] ?? 'Unknown Company');
    
    $message = "
    New contact form submission received:
    
    Name: " . ($data['name'] ?? 'N/A') . "
    Email: " . ($data['email'] ?? 'N/A') . "
    Mobile: " . ($data['mobile'] ?? 'N/A') . "
    Company: " . ($data['company'] ?? 'N/A') . "
    
    Submitted on: " . date('Y-m-d H:i:s') . "
    IP Address: " . ($_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR']) . "
    ";
    
    $headers = [
        'From: noreply@optionpayindia.com',
        'Reply-To: ' . ($data['email'] ?? 'noreply@optionpayindia.com'),
        'Content-Type: text/plain; charset=UTF-8',
        'X-Mailer: PHP/' . phpversion()
    ];
    
    // Send email
    mail($to, $subject, $message, implode("\r\n", $headers));
}
?>