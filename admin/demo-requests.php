<?php
require_once 'config/database.php';
requireLogin();

$db = getDB();

// Get recent demo submissions from the correct table
$stmt = $db->query("SELECT * FROM demo_submissions ORDER BY submission_timestamp DESC LIMIT 30");
$submissions = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Requests - OptionPay Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-8">
                    <h1 class="text-xl font-semibold text-gray-900">OptionPay Admin</h1>
                    <div class="flex space-x-4">
                        <a href="pages.php" class="text-sm text-gray-600 hover:text-gray-900">Pages</a>
                        <a href="homepage.php" class="text-sm text-gray-600 hover:text-gray-900">Homepage</a>
                        <a href="aboutus.php" class="text-sm text-gray-600 hover:text-gray-900">About Us</a>
                        <a href="contactus.php" class="text-sm text-gray-600 hover:text-gray-900">Contact Us</a>
                        <a href="demo-requests.php" class="text-sm text-blue-600 font-medium">Demo Requests</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-700">Welcome, <?= htmlspecialchars($_SESSION['admin_username']) ?></span>
                    <a href="logout.php" class="text-sm text-red-600 hover:text-red-700">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-900">Demo Requests Management</h2>
                <p class="text-gray-600 mt-1">View and manage all "Book a Demo" submissions.</p>
            </div>

            <div class="bg-white rounded-lg shadow">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Preferred Date</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Notes</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Submitted On</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php if (empty($submissions)): ?>
                                <tr>
                                    <td colspan="6" class="text-center py-8 text-gray-500">
                                        <i class="fas fa-calendar-check text-4xl text-gray-300 mb-4"></i>
                                        <p>No demo requests yet.</p>
                                    </td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($submissions as $sub): ?>
                                    <tr>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?= htmlspecialchars($sub['name']) ?></td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <div class="font-medium"><?= htmlspecialchars($sub['email']) ?></div>
                                            <div><?= htmlspecialchars($sub['mobile']) ?></div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"><?= date('M j, Y', strtotime($sub['preferred_date'])) ?></td>
                                        <td class="px-4 py-4 text-sm text-gray-500 max-w-xs" style="white-space: pre-wrap; word-wrap: break-word;"><?= htmlspecialchars($sub['notes']) ?></td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"><?= date('M j, Y, g:i A', strtotime($sub['submission_timestamp'])) ?></td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                                <?php 
                                                switch($sub['status']) {
                                                    case 'new': echo 'bg-blue-100 text-blue-800'; break;
                                                    case 'contacted': echo 'bg-yellow-100 text-yellow-800'; break;
                                                    case 'completed': echo 'bg-green-100 text-green-800'; break;
                                                    case 'spam': echo 'bg-red-100 text-red-800'; break;
                                                    default: echo 'bg-gray-100 text-gray-800';
                                                }
                                                ?>">
                                                <?= ucfirst($sub['status']) ?>
                                            </span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>