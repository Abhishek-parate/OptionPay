<?php
// demo-submit.php
// Start session before any output
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Include necessary files
require_once 'admin/config/database.php';

// Function to display messages
function show_message($message, $is_success = true) {
    $color = $is_success ? '#28a745' : '#dc3545';
    $icon = $is_success ? 'fa-check-circle' : 'fa-exclamation-triangle';
    $bg_color = $is_success ? '#d4edda' : '#f8d7da';
    
    echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Request Submission</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        body { 
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin: 0; 
        }
        .container { 
            text-align: center; 
            padding: 40px; 
            background-color: #fff; 
            border-radius: 12px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.2); 
            max-width: 500px;
            width: 90%;
        }
        .icon {
            font-size: 4rem;
            color: $color;
            margin-bottom: 20px;
        }
        .message { 
            font-size: 18px; 
            color: #333; 
            margin-bottom: 25px; 
            line-height: 1.6;
        }
        .back-link { 
            display: inline-block; 
            margin-top: 20px; 
            padding: 12px 30px; 
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: #fff; 
            text-decoration: none; 
            border-radius: 6px; 
            font-weight: 500;
            transition: transform 0.2s;
        }
        .back-link:hover {
            transform: translateY(-2px);
        }
        .additional-info {
            margin-top: 20px;
            padding: 15px;
            background-color: $bg_color;
            border-radius: 6px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <i class="fas $icon icon"></i>
        <div class="message">$message</div>
        <a href="book-a-demo" class="back-link">
            <i class="fas fa-arrow-left"></i> Back to Demo Request
        </a>
        <div class="additional-info">
            We'll contact you within 24 hours to schedule your personalized demo.
        </div>
    </div>
</body>
</html>
HTML;
    exit;
}

// Check if it's a POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    show_message("Error: Invalid request method.", false);
}

// Get database connection
try {
    $db = getDB();
} catch (Exception $e) {
    error_log("Database connection error: " . $e->getMessage());
    show_message("Database connection failed. Please try again later.", false);
}

// Basic Validation
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$mobile = trim($_POST['Mobile'] ?? '');
$date = trim($_POST['date'] ?? '');
$notes = trim($_POST['notes'] ?? '');

// Validation checks
if (empty($name) || empty($email) || empty($mobile) || empty($date) || empty($notes)) {
    show_message("Error: All fields are required.", false);
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    show_message("Error: Please provide a valid email address.", false);
}

if (!preg_match('/^[6-9]\d{9}$/', $mobile)) {
    show_message("Error: Please provide a valid 10-digit mobile number.", false);
}

// Validate date
$preferred_date = DateTime::createFromFormat('Y-m-d', $date);
if (!$preferred_date || $preferred_date < new DateTime('today')) {
    show_message("Error: Please select a valid future date.", false);
}

// Check for duplicate submissions (same email within 24 hours)
try {
    $duplicate_check = $db->prepare(
        "SELECT COUNT(*) FROM demo_submissions 
         WHERE email = ? AND submission_timestamp > DATE_SUB(NOW(), INTERVAL 24 HOUR)"
    );
    $duplicate_check->execute([$email]);
    
    if ($duplicate_check->fetchColumn() > 0) {
        show_message("You have already submitted a demo request in the last 24 hours. Please wait before submitting again.", false);
    }
} catch (PDOException $e) {
    // If table doesn't exist, continue (will be handled in insert)
}

try {
    // Prepare the insert statement
    $stmt = $db->prepare(
        "INSERT INTO demo_submissions (
            name, email, mobile, preferred_date, notes, 
            utm_source, utm_medium, utm_campaign, utm_term, utm_content, 
            ip_address, user_agent, status, submission_timestamp
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'new', NOW())"
    );

    $params = [
        $name,
        $email,
        $mobile,
        $date,
        $notes,
        $_POST['utm_source'] ?? null,
        $_POST['utm_medium'] ?? null,
        $_POST['utm_campaign'] ?? null,
        $_POST['utm_term'] ?? null,
        $_POST['utm_content'] ?? null,
        $_SERVER['REMOTE_ADDR'] ?? '',
        $_SERVER['HTTP_USER_AGENT'] ?? ''
    ];

    if ($stmt->execute($params)) {
        // Get the inserted ID for reference
        $submission_id = $db->lastInsertId();
        
        // Log successful submission
        error_log("Demo submission successful: ID {$submission_id}, Email: {$email}");
        
        show_message("Thank you, {$name}! Your demo request has been submitted successfully. Reference ID: #{$submission_id}", true);
    } else {
        error_log("Demo submission failed for email: {$email}");
        show_message("Error: Could not save your request. Please try again.", false);
    }
    
} catch (PDOException $e) {
    // Log the actual error for debugging
    error_log("Database Error in demo-submit.php: " . $e->getMessage());
    
    // Check if it's a table not found error
    if (strpos($e->getMessage(), "doesn't exist") !== false) {
        show_message("System configuration error. Please contact the administrator.", false);
    } else {
        show_message("A database error occurred. We have been notified and will fix this shortly.", false);
    }
} catch (Exception $e) {
    error_log("General Error in demo-submit.php: " . $e->getMessage());
    show_message("An unexpected error occurred. Please try again later.", false);
}
?>