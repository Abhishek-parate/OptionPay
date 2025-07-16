<?php

// demo-submit.php (Updated to show an HTML page, not JSON)

require_once 'admin/config/database.php';

// A simple function to display a message and a back button.
function show_message($message, $is_success = true) {
    $color = $is_success ? '#28a745' : '#dc3545';
    echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f4; margin: 0; }
        .container { text-align: center; padding: 40px; background-color: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .message { font-size: 22px; color: $color; margin-bottom: 20px; }
        .back-link { display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <p class="message">$message</p>
        <a href="javascript:history.back()" class="back-link">Go Back</a>
    </div>
</body>
</html>
HTML;
    exit;
}

// Check if it's a POST request.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    show_message("Error: Invalid request method.", false);
}

$db = getDB();

// Basic Validation
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$mobile = trim($_POST['Mobile'] ?? '');
$date = trim($_POST['date'] ?? '');
$notes = trim($_POST['notes'] ?? '');

if (empty($name) || empty($email) || empty($mobile) || empty($date) || empty($notes)) {
    show_message("Error: All fields are required.", false);
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    show_message("Error: Please provide a valid email address.", false);
}

try {
    // Save to database
    $stmt = $db->prepare(
        "INSERT INTO demo_submissions (name, email, mobile, preferred_date, notes, utm_source, utm_medium, utm_campaign, utm_term, utm_content, ip_address, user_agent) 
         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
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
        $_SERVER['REMOTE_ADDR'],
        $_SERVER['HTTP_USER_AGENT'] ?? ''
    ];

    if ($stmt->execute($params)) {
        show_message("Thank you! Your demo request has been submitted successfully.", true);
    } else {
        show_message("Error: Could not save your request. Please try again.", false);
    }
} catch (Exception $e) {
    error_log("Database Error in demo-submit.php: " . $e->getMessage());
    show_message("A server error occurred. We have been notified.", false);
}

?>