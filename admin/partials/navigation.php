<?php
// admin/partials/navigation.php
$current_page = basename($_SERVER['PHP_SELF'], '.php');

function isActive($page) {
    global $current_page;
    return $current_page === $page ? 'text-blue-600 font-medium' : 'text-gray-600 hover:text-gray-900';
}
?>

<nav class="bg-white shadow-sm border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-8">
                <h1 class="text-xl font-semibold text-gray-900">OptionPay Admin</h1>
                <div class="flex space-x-4">
                    <a href="pages.php" class="text-sm <?= isActive('pages') ?>">
                        <i class="fas fa-file-alt mr-1"></i>Pages
                    </a>
                    <a href="homepage.php" class="text-sm <?= isActive('homepage') ?>">
                        <i class="fas fa-home mr-1"></i>Homepage
                    </a>
                    <a href="aboutus.php" class="text-sm <?= isActive('aboutus') ?>">
                        <i class="fas fa-info-circle mr-1"></i>About Us
                    </a>
                    <a href="contactus.php" class="text-sm <?= isActive('contactus') ?>">
                        <i class="fas fa-envelope mr-1"></i>Contact Us
                    </a>
                    <a href="demo-requests.php" class="text-sm <?= isActive('demo-requests') ?>">
                        <i class="fas fa-calendar-check mr-1"></i>Demo Requests
                    </a>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <span class="text-sm text-gray-700">
                    <i class="fas fa-user mr-1"></i>Welcome, <?= htmlspecialchars($_SESSION['admin_username']) ?>
                </span>
                <a href="logout.php" class="text-sm text-red-600 hover:text-red-700">
                    <i class="fas fa-sign-out-alt mr-1"></i>Logout
                </a>
            </div>
        </div>
    </div>
</nav>