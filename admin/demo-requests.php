<?php
// admin/demo-requests.php
require_once 'config/database.php';
requireLogin();

$db = getDB();

// Get recent demo submissions with error handling
try {
    $stmt = $db->query("SELECT * FROM demo_submissions ORDER BY submission_timestamp DESC LIMIT 30");
    $submissions = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // If demo_submissions table doesn't exist, show an error message
    $submissions = [];
    $table_error = "Demo submissions table not found. Please run the database migration.";
}

// Get statistics
$stats = [
    'total' => 0,
    'new' => 0,
    'contacted' => 0,
    'completed' => 0,
    'spam' => 0
];

if (!empty($submissions)) {
    try {
        $stats_stmt = $db->query("
            SELECT 
                COUNT(*) as total,
                SUM(CASE WHEN status = 'new' THEN 1 ELSE 0 END) as new,
                SUM(CASE WHEN status = 'contacted' THEN 1 ELSE 0 END) as contacted,
                SUM(CASE WHEN status = 'completed' THEN 1 ELSE 0 END) as completed,
                SUM(CASE WHEN status = 'spam' THEN 1 ELSE 0 END) as spam
            FROM demo_submissions
        ");
        $stats = $stats_stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // If query fails, keep default stats
    }
}
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
        .status-badge {
            transition: all 0.2s ease;
        }
        .status-badge:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Navigation -->
    <?php include_once('partials/navigation.php'); ?>

    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <!-- Header -->
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-900">Demo Requests Management</h2>
                <p class="text-gray-600 mt-1">View and manage all "Book a Demo" submissions.</p>
            </div>

            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-6">
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="text-2xl font-bold text-gray-900"><?= number_format($stats['total']) ?></div>
                    <div class="text-sm text-gray-500">Total Submissions</div>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="text-2xl font-bold text-blue-600"><?= number_format($stats['new']) ?></div>
                    <div class="text-sm text-gray-500">New</div>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="text-2xl font-bold text-yellow-600"><?= number_format($stats['contacted']) ?></div>
                    <div class="text-sm text-gray-500">Contacted</div>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="text-2xl font-bold text-green-600"><?= number_format($stats['completed']) ?></div>
                    <div class="text-sm text-gray-500">Completed</div>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="text-2xl font-bold text-red-600"><?= number_format($stats['spam']) ?></div>
                    <div class="text-sm text-gray-500">Spam</div>
                </div>
            </div>

            <!-- Error Message for Missing Table -->
            <?php if (isset($table_error)): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <div>
                            <strong>Database Error:</strong> <?= htmlspecialchars($table_error) ?>
                            <br>
                            <small>Please run the SQL script to create the demo_submissions table.</small>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Demo Requests Table -->
            <div class="bg-white rounded-lg shadow">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Recent Demo Requests</h3>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Preferred Date</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Notes</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Submitted</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php if (empty($submissions)): ?>
                                <tr>
                                    <td colspan="7" class="text-center py-8 text-gray-500">
                                        <i class="fas fa-calendar-check text-4xl text-gray-300 mb-4 block"></i>
                                        <p>No demo requests yet.</p>
                                    </td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($submissions as $sub): ?>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900"><?= htmlspecialchars($sub['name']) ?></div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900"><?= htmlspecialchars($sub['email']) ?></div>
                                            <div class="text-sm text-gray-500"><?= htmlspecialchars($sub['mobile']) ?></div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <?= date('M j, Y', strtotime($sub['preferred_date'])) ?>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 max-w-xs">
                                            <div class="truncate" title="<?= htmlspecialchars($sub['notes']) ?>">
                                                <?= htmlspecialchars(substr($sub['notes'], 0, 50)) ?><?= strlen($sub['notes']) > 50 ? '...' : '' ?>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <?= date('M j, Y, g:i A', strtotime($sub['submission_timestamp'])) ?>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <span class="status-badge inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium cursor-pointer
                                                <?php 
                                                switch($sub['status']) {
                                                    case 'new': echo 'bg-blue-100 text-blue-800'; break;
                                                    case 'contacted': echo 'bg-yellow-100 text-yellow-800'; break;
                                                    case 'completed': echo 'bg-green-100 text-green-800'; break;
                                                    case 'spam': echo 'bg-red-100 text-red-800'; break;
                                                    default: echo 'bg-gray-100 text-gray-800';
                                                }
                                                ?>"
                                                onclick="updateStatus(<?= $sub['id'] ?>, '<?= $sub['status'] ?>')">
                                                <?= ucfirst($sub['status']) ?>
                                            </span>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                            <div class="flex space-x-2">
                                                <a href="mailto:<?= htmlspecialchars($sub['email']) ?>" 
                                                   class="text-blue-600 hover:text-blue-900" title="Send Email">
                                                    <i class="fas fa-envelope"></i>
                                                </a>
                                                <a href="tel:<?= htmlspecialchars($sub['mobile']) ?>" 
                                                   class="text-green-600 hover:text-green-900" title="Call">
                                                    <i class="fas fa-phone"></i>
                                                </a>
                                                <button onclick="showDetails(<?= htmlspecialchars(json_encode($sub)) ?>)" 
                                                        class="text-gray-600 hover:text-gray-900" title="View Details">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </div>
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

    <!-- Modal for Details -->
    <div id="detailsModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Demo Request Details</h3>
                <div id="modalContent" class="text-left"></div>
                <div class="items-center px-4 py-3">
                    <button onclick="closeModal()" class="px-4 py-2 bg-gray-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-gray-700">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showDetails(submission) {
            const modal = document.getElementById('detailsModal');
            const content = document.getElementById('modalContent');
            
            content.innerHTML = `
                <div class="space-y-3">
                    <div><strong>Name:</strong> ${submission.name}</div>
                    <div><strong>Email:</strong> ${submission.email}</div>
                    <div><strong>Mobile:</strong> ${submission.mobile}</div>
                    <div><strong>Preferred Date:</strong> ${new Date(submission.preferred_date).toLocaleDateString()}</div>
                    <div><strong>Notes:</strong><br>${submission.notes}</div>
                    <div><strong>IP Address:</strong> ${submission.ip_address || 'N/A'}</div>
                    <div><strong>Submitted:</strong> ${new Date(submission.submission_timestamp).toLocaleString()}</div>
                    ${submission.utm_source ? `<div><strong>UTM Source:</strong> ${submission.utm_source}</div>` : ''}
                    ${submission.utm_medium ? `<div><strong>UTM Medium:</strong> ${submission.utm_medium}</div>` : ''}
                    ${submission.utm_campaign ? `<div><strong>UTM Campaign:</strong> ${submission.utm_campaign}</div>` : ''}
                </div>
            `;
            
            modal.classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('detailsModal').classList.add('hidden');
        }

        function updateStatus(id, currentStatus) {
            const statuses = ['new', 'contacted', 'completed', 'spam'];
            const currentIndex = statuses.indexOf(currentStatus);
            const nextStatus = statuses[(currentIndex + 1) % statuses.length];
            
            // In a real application, you would make an AJAX call here
            // For now, just reload the page
            if (confirm(`Change status to "${nextStatus}"?`)) {
                // AJAX call would go here
                window.location.reload();
            }
        }
    </script>
</body>
</html>