<?php
// Database configuration
// admin/config/database.php
define('DB_HOST', 'localhost');
define('DB_NAME', 'optionpay_cms');
define('DB_USER', 'root');
define('DB_PASS', '');

class Database {
    private $pdo;
    
    public function __construct() {
        try {
            $this->pdo = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8",
                DB_USER,
                DB_PASS,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                ]
            );
        } catch(PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
    
    public function getConnection() {
        return $this->pdo;
    }
}

// Helper function to get database connection
function getDB() {
    static $db = null;
    if ($db === null) {
        $db = new Database();
    }
    return $db->getConnection();
}

// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Helper function to check if user is logged in
function isLoggedIn() {
    return isset($_SESSION['admin_id']);
}

// Helper function to redirect if not logged in
function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: login.php');
        exit;
    }
}

// Helper function to sanitize input
function sanitize($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

// Helper function to generate slug
function generateSlug($string) {
    $slug = strtolower(trim($string));
    $slug = preg_replace('/[^a-z0-9-]/', '-', $slug);
    $slug = preg_replace('/-+/', '-', $slug);
    return trim($slug, '-');
}

// Helper function to check if path is for homepage
function isHomepage() {
    $current_path = $_SERVER['REQUEST_URI'];
    $script_name = $_SERVER['SCRIPT_NAME'];
    
    // Check if we're at root or index.php
    return $current_path === '/' || 
           $current_path === '/index.php' || 
           basename($script_name) === 'index.php';
}
?>