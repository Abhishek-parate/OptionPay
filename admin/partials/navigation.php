<?php
// admin/partials/navigation.php

// Get the current page filename to set the active link
$currentPage = basename($_SERVER['PHP_SELF']);

// Define the navigation links and their corresponding pages
$navLinks = [
    'pages.php'          => 'Pages',
    'homepage.php'       => 'Homepage',
    'aboutus.php'        => 'About Us',
    'contactus.php'      => 'Contact Us',
    'demo-requests.php'  => 'Demo Requests', // <-- New link added here
    'filemanager.php'    => 'File Manager'
];

// Define the CSS classes for active and inactive links for easy management
$activeClass = 'text-sm text-blue-600 font-medium';
$inactiveClass = 'text-sm text-gray-600 hover:text-gray-900';
?>

<nav class="bg-white shadow-sm border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-8">
                <h1 class="text-xl font-semibold text-gray-900">OptionPay Admin</h1>
                <div class="hidden md:flex space-x-4">
                    <?php foreach ($navLinks as $url => $title): ?>
                        <a href="<?= $url ?>" class="<?= ($currentPage == $url) ? $activeClass : $inactiveClass ?>">
                            <?= $title ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <span class="text-sm text-gray-700">Welcome, <?= htmlspecialchars($_SESSION['admin_username']) ?></span>
                <a href="logout.php" class="text-sm text-red-600 hover:text-red-700">Logout</a>
            </div>
        </div>
    </div>
</nav>