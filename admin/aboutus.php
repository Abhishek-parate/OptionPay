<?php
// admin/aboutus.php
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
            case 'hero':
                $section_data = [
                    'title' => sanitize($_POST['hero_title']),
                    'description_1' => sanitize($_POST['hero_description_1']),
                    'description_2' => sanitize($_POST['hero_description_2'])
                ];
                break;
                
            case 'impact':
                $stats = [];
                for($i = 0; $i < 4; $i++) {
                    if(isset($_POST["stat_key_$i"]) && isset($_POST["stat_number_$i"]) && isset($_POST["stat_label_$i"])) {
                        $stats[] = [
                            'key' => sanitize($_POST["stat_key_$i"]),
                            'number' => sanitize($_POST["stat_number_$i"]),
                            'label' => sanitize($_POST["stat_label_$i"])
                        ];
                    }
                }
                
                $section_data = [
                    'title' => sanitize($_POST['impact_title']),
                    'stats' => $stats
                ];
                break;
                
            case 'life_at_optionpay':
                $section_data = [
                    'subtitle' => sanitize($_POST['life_subtitle']),
                    'title' => sanitize($_POST['life_title']),
                    'description' => sanitize($_POST['life_description']),
                    'image' => sanitize($_POST['life_image'])
                ];
                break;
                
            case 'vision':
                $section_data = [
                    'title' => sanitize($_POST['vision_title']),
                    'statement' => sanitize($_POST['vision_statement'])
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
            $stmt = $db->prepare("UPDATE aboutus_settings SET section_data = ? WHERE section_name = ?");
            if ($stmt->execute([json_encode($section_data), $section])) {
                $success = ucfirst(str_replace('_', ' ', $section)) . ' section updated successfully';
            } else {
                $error = 'Error updating ' . $section . ' section';
            }
        }
    }
}

// Get all sections
$stmt = $db->query("SELECT * FROM aboutus_settings ORDER BY section_name");
$sections = [];
while ($row = $stmt->fetch()) {
    $sections[$row['section_name']] = json_decode($row['section_data'], true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us Management - OptionPay Admin</title>
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
                <h2 class="text-2xl font-bold text-gray-900">About Us Page Management</h2>
                <p class="text-gray-600 mt-1">Customize your About Us page content and sections</p>
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
                            <button onclick="showSection('hero')" class="section-btn w-full text-left px-3 py-2 rounded-md text-sm hover:bg-gray-100" data-section="hero">
                                <i class="fas fa-home mr-2"></i>Hero Section
                            </button>
                            <button onclick="showSection('impact')" class="section-btn w-full text-left px-3 py-2 rounded-md text-sm hover:bg-gray-100" data-section="impact">
                                <i class="fas fa-chart-line mr-2"></i>Impact Section
                            </button>
                            <button onclick="showSection('life_at_optionpay')" class="section-btn w-full text-left px-3 py-2 rounded-md text-sm hover:bg-gray-100" data-section="life_at_optionpay">
                                <i class="fas fa-users mr-2"></i>Life at OptionPay
                            </button>
                            <button onclick="showSection('vision')" class="section-btn w-full text-left px-3 py-2 rounded-md text-sm hover:bg-gray-100" data-section="vision">
                                <i class="fas fa-eye mr-2"></i>Vision Section
                            </button>
                            <button onclick="showSection('join_section')" class="section-btn w-full text-left px-3 py-2 rounded-md text-sm hover:bg-gray-100" data-section="join_section">
                                <i class="fas fa-handshake mr-2"></i>Join Section
                            </button>
                            <button onclick="showSection('seo')" class="section-btn w-full text-left px-3 py-2 rounded-md text-sm hover:bg-gray-100" data-section="seo">
                                <i class="fas fa-search mr-2"></i>SEO Settings
                            </button>
                        </nav>
                        
                        <div class="mt-6 pt-4 border-t">
                            <a href="../about-us" target="_blank" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 inline-flex items-center justify-center">
                                <i class="fas fa-external-link-alt mr-2"></i>View About Us
                            </a>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3">
                    <div id="hero-section" class="section-content bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Hero Section</h3>
                        <form method="POST" action="">
                            <input type="hidden" name="action" value="update_section">
                            <input type="hidden" name="section" value="hero">
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Page Title</label>
                                    <input type="text" name="hero_title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['hero']['title'] ?? '') ?>">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Description 1</label>
                                    <textarea name="hero_description_1" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"><?= htmlspecialchars($sections['hero']['description_1'] ?? '') ?></textarea>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Description 2</label>
                                    <textarea name="hero_description_2" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"><?= htmlspecialchars($sections['hero']['description_2'] ?? '') ?></textarea>
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                                    Update Hero Section
                                </button>
                            </div>
                        </form>
                    </div>

                    <div id="impact-section" class="section-content bg-white rounded-lg shadow p-6 hidden">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Impact Section (Statistics)</h3>
                        <form method="POST" action="">
                            <input type="hidden" name="action" value="update_section">
                            <input type="hidden" name="section" value="impact">
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Section Title</label>
                                    <input type="text" name="impact_title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['impact']['title'] ?? '') ?>">
                                </div>
                                
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Statistics</label>
                                            <?php for($i = 0; $i < 4; $i++): ?>
                                                <div class="grid grid-cols-3 gap-2 mb-3 p-3 border rounded">
                                                    <input type="text" name="stat_key_<?= $i ?>" placeholder="Key (e.g., partner)" class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['impact']['stats'][$i]['key'] ?? '') ?>">
                                                    <input type="text" name="stat_number_<?= $i ?>" placeholder="Number (e.g., 1,000)" class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['impact']['stats'][$i]['number'] ?? '') ?>">
                                                    <input type="text" name="stat_label_<?= $i ?>" placeholder="Label (e.g., Business Partners)" class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['impact']['stats'][$i]['label'] ?? '') ?>">
                                                </div>
                                            <?php endfor; ?>
                                            <p class="text-xs text-gray-500 mt-1">Key is used for counter animation, Number is display value, Label is description</p>
                                        </div>
                            </div>
                            
                            <div class="mt-6">
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                                    Update Impact Section
                                </button>
                            </div>
                        </form>
                    </div>

                    <div id="life_at_optionpay-section" class="section-content bg-white rounded-lg shadow p-6 hidden">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Life at OptionPay Section</h3>
                        <form method="POST" action="">
                            <input type="hidden" name="action" value="update_section">
                            <input type="hidden" name="section" value="life_at_optionpay">
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Subtitle</label>
                                    <input type="text" name="life_subtitle" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['life_at_optionpay']['subtitle'] ?? '') ?>">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                                    <input type="text" name="life_title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['life_at_optionpay']['title'] ?? '') ?>">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                                    <textarea name="life_description" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"><?= htmlspecialchars($sections['life_at_optionpay']['description'] ?? '') ?></textarea>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Image Path</label>
                                    <input type="text" name="life_image" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['life_at_optionpay']['image'] ?? '') ?>">
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                                    Update Life at OptionPay Section
                                </button>
                            </div>
                        </form>
                    </div>

                    <div id="vision-section" class="section-content bg-white rounded-lg shadow p-6 hidden">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Vision Section</h3>
                        <form method="POST" action="">
                            <input type="hidden" name="action" value="update_section">
                            <input type="hidden" name="section" value="vision">
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Section Title</label>
                                    <input type="text" name="vision_title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['vision']['title'] ?? '') ?>">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Vision Statement</label>
                                    <textarea name="vision_statement" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"><?= htmlspecialchars($sections['vision']['statement'] ?? '') ?></textarea>
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                                    Update Vision Section
                                </button>
                            </div>
                        </form>
                    </div>

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
            // Hide all sections
            document.querySelectorAll('.section-content').forEach(section => {
                section.classList.add('hidden');
            });
            
            // Remove active class from all buttons
            document.querySelectorAll('.section-btn').forEach(btn => {
                btn.classList.remove('bg-blue-100', 'text-blue-700');
            });
            
            // Show selected section
            document.getElementById(sectionName + '-section').classList.remove('hidden');
            
            // Add active class to clicked button
            document.querySelector(`[data-section="${sectionName}"]`).classList.add('bg-blue-100', 'text-blue-700');
        }
        
        // Initialize with hero section
        showSection('hero');
    </script>
</body>
</html>