<?php
// admin/contactus.php
require_once 'config/database.php';
requireLogin();

$db = getDB();
$error = '';
$success = '';

// Handle form submissions
if ($_POST) {
    $action = $_POST['action'] ?? '';
    $section = $_POST['section'] ?? '';
    
    if ($action === 'update_section' && !empty($section)) {
        $section_data = [];
        
        switch($section) {
            case 'form_section':
                $fields = [];
                $field_count = 4; // We have 4 form fields
                
                for($i = 0; $i < $field_count; $i++) {
                    $fields[] = [
                        'name' => sanitize($_POST["field_name_$i"]),
                        'label' => sanitize($_POST["field_label_$i"]),
                        'type' => sanitize($_POST["field_type_$i"]),
                        'placeholder' => sanitize($_POST["field_placeholder_$i"]),
                        'required' => isset($_POST["field_required_$i"]),
                        'pattern' => sanitize($_POST["field_pattern_$i"]),
                        'title' => sanitize($_POST["field_title_$i"]),
                        'minlength' => !empty($_POST["field_minlength_$i"]) ? (int)$_POST["field_minlength_$i"] : null,
                        'maxlength' => !empty($_POST["field_maxlength_$i"]) ? (int)$_POST["field_maxlength_$i"] : null
                    ];
                }
                
                $section_data = [
                    'title' => sanitize($_POST['form_title']),
                    'subtitle' => sanitize($_POST['form_subtitle']),
                    'form_action' => sanitize($_POST['form_action']),
                    'fields' => $fields,
                    'submit_button_text' => sanitize($_POST['submit_button_text']),
                    'success_message' => sanitize($_POST['success_message']),
                    'error_message' => sanitize($_POST['error_message'])
                ];
                break;
                
            case 'join_section':
                $section_data = [
                    'title' => sanitize($_POST['join_title']),
                    'subtitle' => sanitize($_POST['join_subtitle']),
                    'contact_text' => sanitize($_POST['join_contact_text']),
                    'contact_link' => sanitize($_POST['join_contact_link']),
                    'cta_text' => sanitize($_POST['join_cta_text']),
                    'cta_link' => sanitize($_POST['join_cta_link']),
                    'bg_pattern' => sanitize($_POST['join_bg_pattern'])
                ];
                break;
                
            case 'seo':
                $section_data = [
                    'title' => sanitize($_POST['seo_title']),
                    'description' => sanitize($_POST['seo_description']),
                    'keywords' => sanitize($_POST['seo_keywords'])
                ];
                break;
        }
        
        if (!empty($section_data)) {
            $stmt = $db->prepare("UPDATE contactus_settings SET section_data = ? WHERE section_name = ?");
            if ($stmt->execute([json_encode($section_data), $section])) {
                $success = ucfirst(str_replace('_', ' ', $section)) . ' updated successfully';
            } else {
                $error = 'Error updating ' . $section;
            }
        }
    }
}

// Get all sections
$stmt = $db->query("SELECT * FROM contactus_settings ORDER BY section_name");
$sections = [];
while ($row = $stmt->fetch()) {
    $sections[$row['section_name']] = json_decode($row['section_data'], true);
}

// Pagination logic for form submissions
$page = max(1, (int)($_GET['page'] ?? 1));
$per_page = max(10, min(100, (int)($_GET['per_page'] ?? 50))); // Default 50, min 10, max 100
$offset = ($page - 1) * $per_page;

// Get total count of submissions
$count_stmt = $db->query("SELECT COUNT(*) as total FROM contact_submissions");
$total_submissions = $count_stmt->fetch()['total'];
$total_pages = ceil($total_submissions / $per_page);

// Get submissions for current page
$stmt = $db->prepare("
    SELECT * FROM contact_submissions 
    ORDER BY submission_date DESC 
    LIMIT ? OFFSET ?
");
$stmt->execute([$per_page, $offset]);
$submissions = $stmt->fetchAll();

// Calculate pagination info
$start_record = $total_submissions > 0 ? $offset + 1 : 0;
$end_record = min($offset + $per_page, $total_submissions);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Management - OptionPay Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <?php require_once 'partials/navigation.php'; ?>

    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-900">Contact Us Page Management</h2>
                <p class="text-gray-600 mt-1">Customize your Contact Us page and manage form submissions</p>
            </div>

            <?php if ($error): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <?php if ($success): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    <?= htmlspecialchars($success) ?>
                </div>
            <?php endif; ?>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow p-4">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Sections</h3>
                        <nav class="space-y-2">
                            <button onclick="showSection('form_section')" class="section-btn w-full text-left px-3 py-2 rounded-md text-sm hover:bg-gray-100" data-section="form_section">
                                <i class="fas fa-wpforms mr-2"></i>Contact Form
                            </button>
                            <button onclick="showSection('join_section')" class="section-btn w-full text-left px-3 py-2 rounded-md text-sm hover:bg-gray-100" data-section="join_section">
                                <i class="fas fa-handshake mr-2"></i>Join Section
                            </button>
                            <button onclick="showSection('submissions')" class="section-btn w-full text-left px-3 py-2 rounded-md text-sm hover:bg-gray-100" data-section="submissions">
                                <i class="fas fa-inbox mr-2"></i>Form Submissions (<?= $total_submissions ?>)
                            </button>
                            <button onclick="showSection('seo')" class="section-btn w-full text-left px-3 py-2 rounded-md text-sm hover:bg-gray-100" data-section="seo">
                                <i class="fas fa-search mr-2"></i>SEO Settings
                            </button>
                        </nav>
                        
                        <div class="mt-6 pt-4 border-t">
                            <a href="../contact-us.php" target="_blank" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 inline-flex items-center justify-center">
                                <i class="fas fa-external-link-alt mr-2"></i>View Contact Us
                            </a>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3">
                    <!-- Form Section (unchanged) -->
                    <div id="form_section-section" class="section-content bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Contact Form Configuration</h3>
                        <form method="POST" action="">
                            <input type="hidden" name="action" value="update_section">
                            <input type="hidden" name="section" value="form_section">
                            
                            <div class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Form Title</label>
                                        <input type="text" name="form_title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['form_section']['title'] ?? '') ?>">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Form Subtitle</label>
                                        <input type="text" name="form_subtitle" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['form_section']['subtitle'] ?? '') ?>">
                                    </div>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Form Action URL</label>
                                    <input type="text" name="form_action" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['form_section']['form_action'] ?? '') ?>">
                                </div>
                                
                                <div>
                                    <h4 class="text-md font-medium text-gray-900 mb-3">Form Fields</h4>
                                    <?php 
                                    $fields = $sections['form_section']['fields'] ?? [];
                                    for($i = 0; $i < 4; $i++): 
                                        $field = $fields[$i] ?? [];
                                    ?>
                                        <div class="border rounded-lg p-4 mb-4">
                                            <h5 class="font-medium text-gray-900 mb-3">Field <?= $i + 1 ?></h5>
                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Name</label>
                                                    <input type="text" name="field_name_<?= $i ?>" class="w-full px-2 py-1 border border-gray-300 rounded text-sm" value="<?= htmlspecialchars($field['name'] ?? '') ?>">
                                                </div>
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Label</label>
                                                    <input type="text" name="field_label_<?= $i ?>" class="w-full px-2 py-1 border border-gray-300 rounded text-sm" value="<?= htmlspecialchars($field['label'] ?? '') ?>">
                                                </div>
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Type</label>
                                                    <select name="field_type_<?= $i ?>" class="w-full px-2 py-1 border border-gray-300 rounded text-sm">
                                                        <option value="text" <?= ($field['type'] ?? '') === 'text' ? 'selected' : '' ?>>Text</option>
                                                        <option value="email" <?= ($field['type'] ?? '') === 'email' ? 'selected' : '' ?>>Email</option>
                                                        <option value="tel" <?= ($field['type'] ?? '') === 'tel' ? 'selected' : '' ?>>Tel</option>
                                                        <option value="number" <?= ($field['type'] ?? '') === 'number' ? 'selected' : '' ?>>Number</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Placeholder</label>
                                                    <input type="text" name="field_placeholder_<?= $i ?>" class="w-full px-2 py-1 border border-gray-300 rounded text-sm" value="<?= htmlspecialchars($field['placeholder'] ?? '') ?>">
                                                </div>
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Pattern</label>
                                                    <input type="text" name="field_pattern_<?= $i ?>" class="w-full px-2 py-1 border border-gray-300 rounded text-sm" value="<?= htmlspecialchars($field['pattern'] ?? '') ?>">
                                                </div>
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Title</label>
                                                    <input type="text" name="field_title_<?= $i ?>" class="w-full px-2 py-1 border border-gray-300 rounded text-sm" value="<?= htmlspecialchars($field['title'] ?? '') ?>">
                                                </div>
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Min Length</label>
                                                    <input type="number" name="field_minlength_<?= $i ?>" class="w-full px-2 py-1 border border-gray-300 rounded text-sm" value="<?= $field['minlength'] ?? '' ?>">
                                                </div>
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Max Length</label>
                                                    <input type="number" name="field_maxlength_<?= $i ?>" class="w-full px-2 py-1 border border-gray-300 rounded text-sm" value="<?= $field['maxlength'] ?? '' ?>">
                                                </div>
                                                <div class="flex items-center">
                                                    <label class="flex items-center">
                                                        <input type="checkbox" name="field_required_<?= $i ?>" class="mr-2" <?= ($field['required'] ?? false) ? 'checked' : '' ?>>
                                                        <span class="text-xs font-medium text-gray-700">Required</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Submit Button Text</label>
                                        <input type="text" name="submit_button_text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['form_section']['submit_button_text'] ?? '') ?>">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Success Message</label>
                                        <input type="text" name="success_message" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['form_section']['success_message'] ?? '') ?>">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Error Message</label>
                                        <input type="text" name="error_message" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['form_section']['error_message'] ?? '') ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                                    Update Contact Form
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Join Section (unchanged) -->
                    <div id="join_section-section" class="section-content bg-white rounded-lg shadow p-6 hidden">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Join Section</h3>
                        <form method="POST" action="">
                            <input type="hidden" name="action" value="update_section">
                            <input type="hidden" name="section" value="join_section">
                            
                            <div class="space-y-4">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                                        <input type="text" name="join_title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['join_section']['title'] ?? '') ?>">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Subtitle</label>
                                        <input type="text" name="join_subtitle" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['join_section']['subtitle'] ?? '') ?>">
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Contact Text</label>
                                        <input type="text" name="join_contact_text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['join_section']['contact_text'] ?? '') ?>">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Contact Link</label>
                                        <input type="text" name="join_contact_link" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['join_section']['contact_link'] ?? '') ?>">
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">CTA Button Text</label>
                                        <input type="text" name="join_cta_text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['join_section']['cta_text'] ?? '') ?>">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">CTA Link</label>
                                        <input type="text" name="join_cta_link" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['join_section']['cta_link'] ?? '') ?>">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Background Pattern Path</label>
                                    <input type="text" name="join_bg_pattern" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['join_section']['bg_pattern'] ?? '') ?>">
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                                    Update Join Section
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Updated Submissions Section with Pagination -->
                    <div id="submissions-section" class="section-content bg-white rounded-lg shadow p-6 hidden">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-medium text-gray-900">Form Submissions</h3>
                            
                            <!-- Records per page selector -->
                            <div class="flex items-center space-x-2">
                                <label for="per_page" class="text-sm text-gray-600">Show:</label>
                                <select id="per_page" class="border border-gray-300 rounded px-2 py-1 text-sm" onchange="changePerPage(this.value)">
                                    <option value="25" <?= $per_page == 25 ? 'selected' : '' ?>>25</option>
                                    <option value="50" <?= $per_page == 50 ? 'selected' : '' ?>>50</option>
                                    <option value="100" <?= $per_page == 100 ? 'selected' : '' ?>>100</option>
                                </select>
                                <span class="text-sm text-gray-600">per page</span>
                            </div>
                        </div>
                        
                        <?php if (empty($submissions)): ?>
                            <div class="text-center py-8">
                                <i class="fas fa-inbox text-4xl text-gray-300 mb-4"></i>
                                <p class="text-gray-500">No form submissions yet</p>
                            </div>
                        <?php else: ?>
                            <!-- Pagination Info -->
                            <div class="mb-4 text-sm text-gray-600">
                                Showing <?= $start_record ?> to <?= $end_record ?> of <?= $total_submissions ?> entries
                            </div>
                            
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mobile</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Company</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">IP Address</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <?php foreach ($submissions as $submission): ?>
                                            <tr class="hover:bg-gray-50">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    <?= htmlspecialchars($submission['name']) ?>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    <a href="mailto:<?= htmlspecialchars($submission['email']) ?>" class="text-blue-600 hover:text-blue-800">
                                                        <?= htmlspecialchars($submission['email']) ?>
                                                    </a>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    <a href="tel:<?= htmlspecialchars($submission['mobile']) ?>" class="text-green-600 hover:text-green-800">
                                                        <?= htmlspecialchars($submission['mobile']) ?>
                                                    </a>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    <?= htmlspecialchars($submission['company']) ?>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    <div title="<?= date('Y-m-d H:i:s', strtotime($submission['submission_date'])) ?>">
                                                        <?= date('M j, Y', strtotime($submission['submission_date'])) ?><br>
                                                        <span class="text-xs text-gray-400"><?= date('g:i A', strtotime($submission['submission_date'])) ?></span>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                                        <?php 
                                                        switch($submission['status'] ?? 'new') {
                                                            case 'new': echo 'bg-blue-100 text-blue-800'; break;
                                                            case 'contacted': echo 'bg-yellow-100 text-yellow-800'; break;
                                                            case 'converted': echo 'bg-green-100 text-green-800'; break;
                                                            case 'spam': echo 'bg-red-100 text-red-800'; break;
                                                            default: echo 'bg-gray-100 text-gray-800';
                                                        }
                                                        ?>">
                                                        <?= ucfirst($submission['status'] ?? 'new') ?>
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    <span class="font-mono text-xs" title="<?= htmlspecialchars($submission['user_agent'] ?? '') ?>">
                                                        <?= htmlspecialchars($submission['ip_address'] ?? 'N/A') ?>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            
                            <!-- Pagination Controls -->
                            <?php if ($total_pages > 1): ?>
                                <div class="mt-6 flex items-center justify-between">
                                    <div class="flex items-center space-x-2">
                                        <?php if ($page > 1): ?>
                                            <a href="?page=1&per_page=<?= $per_page ?>#submissions" class="px-3 py-2 text-sm font-medium text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-md">
                                                <i class="fas fa-angle-double-left mr-1"></i>First
                                            </a>
                                            <a href="?page=<?= $page - 1 ?>&per_page=<?= $per_page ?>#submissions" class="px-3 py-2 text-sm font-medium text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-md">
                                                <i class="fas fa-angle-left mr-1"></i>Previous
                            </a>
                        <?php endif; ?>
                        
                        <?php
                        // Calculate page range to show
                        $start_page = max(1, $page - 2);
                        $end_page = min($total_pages, $page + 2);
                        
                        // Show first page if not in range
                        if ($start_page > 1): ?>
                            <a href="?page=1&per_page=<?= $per_page ?>#submissions" class="px-3 py-2 text-sm font-medium text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-md">1</a>
                            <?php if ($start_page > 2): ?>
                                <span class="px-3 py-2 text-sm text-gray-500">...</span>
                            <?php endif; ?>
                        <?php endif; ?>
                        
                        <?php for ($i = $start_page; $i <= $end_page; $i++): ?>
                            <a href="?page=<?= $i ?>&per_page=<?= $per_page ?>#submissions" 
                               class="px-3 py-2 text-sm font-medium rounded-md <?= $i == $page ? 'bg-blue-600 text-white' : 'text-gray-500 hover:text-gray-700 hover:bg-gray-100' ?>">
                                <?= $i ?>
                            </a>
                        <?php endfor; ?>
                        
                        <?php 
                        // Show last page if not in range
                        if ($end_page < $total_pages): ?>
                            <?php if ($end_page < $total_pages - 1): ?>
                                <span class="px-3 py-2 text-sm text-gray-500">...</span>
                            <?php endif; ?>
                            <a href="?page=<?= $total_pages ?>&per_page=<?= $per_page ?>#submissions" class="px-3 py-2 text-sm font-medium text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-md"><?= $total_pages ?></a>
                        <?php endif; ?>
                        
                        <?php if ($page < $total_pages): ?>
                            <a href="?page=<?= $page + 1 ?>&per_page=<?= $per_page ?>#submissions" class="px-3 py-2 text-sm font-medium text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-md">
                                Next<i class="fas fa-angle-right ml-1"></i>
                            </a>
                            <a href="?page=<?= $total_pages ?>&per_page=<?= $per_page ?>#submissions" class="px-3 py-2 text-sm font-medium text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-md">
                                Last<i class="fas fa-angle-double-right ml-1"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                    
                    <div class="text-sm text-gray-600">
                        Page <?= $page ?> of <?= $total_pages ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <!-- SEO Section (unchanged) -->
    <div id="seo-section" class="section-content bg-white rounded-lg shadow p-6 hidden">
        <h3 class="text-lg font-medium text-gray-900 mb-4">SEO Settings</h3>
        <form method="POST" action="">
            <input type="hidden" name="action" value="update_section">
            <input type="hidden" name="section" value="seo">
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Page Title</label>
                    <input type="text" name="seo_title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['seo']['title'] ?? '') ?>">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Meta Description</label>
                    <textarea name="seo_description" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"><?= htmlspecialchars($sections['seo']['description'] ?? '') ?></textarea>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Meta Keywords</label>
                    <input type="text" name="seo_keywords" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['seo']['keywords'] ?? '') ?>">
                </div>
            </div>
            
            <div class="mt-6">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                    Update SEO Settings
                </button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>

<script>
function showSection(sectionName) {
    document.querySelectorAll('.section-content').forEach(section => {
        section.classList.add('hidden');
    });
    document.querySelectorAll('.section-btn').forEach(btn => {
        btn.classList.remove('bg-blue-100', 'text-blue-700', 'font-semibold');
        btn.classList.add('text-gray-600');
    });
    
    const activeSection = document.getElementById(sectionName + '-section');
    if(activeSection) {
        activeSection.classList.remove('hidden');
    }
    
    const activeButton = document.querySelector(`[data-section="${sectionName}"]`);
    if(activeButton) {
        activeButton.classList.add('bg-blue-100', 'text-blue-700', 'font-semibold');
        activeButton.classList.remove('text-gray-600');
    }
}

function changePerPage(perPage) {
    const url = new URL(window.location);
    url.searchParams.set('per_page', perPage);
    url.searchParams.set('page', '1'); // Reset to first page
    url.hash = 'submissions';
    window.location = url.toString();
}

// Initialize with form section or based on URL hash
let initialSection = window.location.hash.substring(1) || 'form_section';
showSection(initialSection);

document.querySelectorAll('.section-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const sectionName = btn.getAttribute('data-section');
        showSection(sectionName);
        // Update URL hash
        window.location.hash = sectionName;
    });
});

// Auto-scroll to submissions if coming from pagination
if (window.location.hash === '#submissions') {
    setTimeout(() => {
        showSection('submissions');
    }, 100);
}
</script>
</body>
</html>