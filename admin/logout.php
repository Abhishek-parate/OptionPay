<?php
// admin/logout.php
require_once 'config/database.php';

// Destroy session
session_destroy();

// Redirect to login page
header('Location: login.php');
exit;
?>