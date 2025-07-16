<?php
// admin/homepage.php
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
                    'subtitle' => sanitize($_POST['hero_subtitle']),
                    'cta_text' => sanitize($_POST['hero_cta_text']),
                    'cta_link' => sanitize($_POST['hero_cta_link']),
                    'dashboard_image' => sanitize($_POST['hero_dashboard_image'])
                ];
                break;
            
            case 'trusted_partners':
                $logos = array_filter(array_map('trim', explode("\n", $_POST['partner_logos'])));
                $section_data = [
                    'title' => sanitize($_POST['partner_title']),
                    'subtitle' => sanitize($_POST['partner_subtitle']),
                    'logos' => $logos
                ];
                break;
            
            case 'impact':
                $stats = [];
                for($i = 0; $i < 4; $i++) {
                    if(isset($_POST["stat_number_$i"]) && isset($_POST["stat_label_$i"])) {
                        $stats[] = [
                            'number' => sanitize($_POST["stat_number_$i"]),
                            'label' => sanitize($_POST["stat_label_$i"])
                        ];
                    }
                }
                
                $section_data = [
                    'left_panel' => [
                        'title' => sanitize($_POST['impact_left_title']),
                        'subtitle' => sanitize($_POST['impact_left_subtitle']),
                        'description' => sanitize($_POST['impact_left_description']),
                        'rocket_image' => sanitize($_POST['impact_rocket_image'])
                    ],
                    'right_panel' => [
                        'title' => sanitize($_POST['impact_right_title']),
                        'stats' => $stats,
                        'cta_text' => sanitize($_POST['impact_cta_text']),
                        'cta_link' => sanitize($_POST['impact_cta_link']),
                        'bg_pattern' => sanitize($_POST['impact_bg_pattern']),
                        'graph_image' => sanitize($_POST['impact_graph_image'])
                    ]
                ];
                break;
            
            case 'products':
                $products = [];
                for($i = 0; $i < 5; $i++) {
                    if(isset($_POST["product_name_$i"]) && !empty($_POST["product_name_$i"])) {
                        $features = array_filter(array_map('trim', explode("\n", $_POST["product_features_$i"] ?? '')));
                        $products[] = [
                            'name' => sanitize($_POST["product_name_$i"]),
                            'icon' => sanitize($_POST["product_icon_$i"]),
                            'active' => isset($_POST["product_active_$i"]) ? true : false,
                            'title' => sanitize($_POST["product_title_$i"]),
                            'description' => sanitize($_POST["product_description_$i"]),
                            'features' => $features,
                            'image' => sanitize($_POST["product_image_$i"])
                        ];
                    }
                }
                
                $section_data = [
                    'title' => sanitize($_POST['products_title']),
                    'subtitle' => sanitize($_POST['products_subtitle']),
                    'products' => $products
                ];
                break;
            
            case 'why_partner':
                $features = [];
                for($i = 0; $i < 4; $i++) {
                    if(isset($_POST["feature_title_$i"]) && !empty($_POST["feature_title_$i"])) {
                        $features[] = [
                            'title' => sanitize($_POST["feature_title_$i"]),
                            'description' => sanitize($_POST["feature_description_$i"]),
                            'bg_color' => sanitize($_POST["feature_bg_color_$i"]),
                            'image' => sanitize($_POST["feature_image_$i"])
                        ];
                    }
                }
                
                $section_data = [
                    'title' => sanitize($_POST['why_partner_title']),
                    'subtitle' => sanitize($_POST['why_partner_subtitle']),
                    'features' => $features
                ];
                break;
            
            case 'getting_started':
                $steps = [];
                for($i = 0; $i < 3; $i++) {
                    if(isset($_POST["step_title_$i"]) && !empty($_POST["step_title_$i"])) {
                        $steps[] = [
                            'title' => sanitize($_POST["step_title_$i"]),
                            'description' => sanitize($_POST["step_description_$i"]),
                            'icon' => sanitize($_POST["step_icon_$i"])
                        ];
                    }
                }
                
                $section_data = [
                    'title' => sanitize($_POST['getting_started_title']),
                    'subtitle' => sanitize($_POST['getting_started_subtitle']),
                    'steps' => $steps,
                    'cta_text' => sanitize($_POST['getting_started_cta_text']),
                    'cta_link' => sanitize($_POST['getting_started_cta_link'])
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
            
            case 'popup':
                $section_data = [
                    'enabled' => isset($_POST['popup_enabled']) ? true : false,
                    'title' => sanitize($_POST['popup_title']),
                    'content' => sanitize($_POST['popup_content']),
                    'image' => sanitize($_POST['popup_image']),
                    'cta_text' => sanitize($_POST['popup_cta_text']),
                    'cta_link' => sanitize($_POST['popup_cta_link']),
                    'show_delay' => intval($_POST['popup_show_delay'] ?? 3),
                    'bg_color' => sanitize($_POST['popup_bg_color']),
                    'text_color' => sanitize($_POST['popup_text_color']),
                    'close_button' => isset($_POST['popup_close_button']) ? true : false,
                    'overlay_close' => isset($_POST['popup_overlay_close']) ? true : false
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
            $stmt = $db->prepare("UPDATE homepage_settings SET section_data = ? WHERE section_name = ?");
            if ($stmt->execute([json_encode($section_data), $section])) {
                $success = ucfirst(str_replace('_', ' ', $section)) . ' updated successfully';
            } else {
                $error = 'Error updating ' . $section . ' section';
            }
        }
    }
}

// Get all sections
$stmt = $db->query("SELECT * FROM homepage_settings ORDER BY section_name");
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
    <title>Homepage Management - OptionPay Admin</title>
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
                <h2 class="text-2xl font-bold text-gray-900">Homepage Management</h2>
                <p class="text-gray-600 mt-1">Customize your homepage content and sections</p>
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
                            <button onclick="showSection('trusted_partners')" class="section-btn w-full text-left px-3 py-2 rounded-md text-sm hover:bg-gray-100" data-section="trusted_partners">
                                <i class="fas fa-handshake mr-2"></i>Trusted Partners
                            </button>
                            <button onclick="showSection('impact')" class="section-btn w-full text-left px-3 py-2 rounded-md text-sm hover:bg-gray-100" data-section="impact">
                                <i class="fas fa-chart-line mr-2"></i>Impact Section
                            </button>
                            <button onclick="showSection('products')" class="section-btn w-full text-left px-3 py-2 rounded-md text-sm hover:bg-gray-100" data-section="products">
                                <i class="fas fa-cube mr-2"></i>Products/Solutions
                            </button>
                            <button onclick="showSection('why_partner')" class="section-btn w-full text-left px-3 py-2 rounded-md text-sm hover:bg-gray-100" data-section="why_partner">
                                <i class="fas fa-star mr-2"></i>Why Partner
                            </button>
                            <button onclick="showSection('getting_started')" class="section-btn w-full text-left px-3 py-2 rounded-md text-sm hover:bg-gray-100" data-section="getting_started">
                                <i class="fas fa-play mr-2"></i>Getting Started
                            </button>
                            <button onclick="showSection('join_section')" class="section-btn w-full text-left px-3 py-2 rounded-md text-sm hover:bg-gray-100" data-section="join_section">
                                <i class="fas fa-users mr-2"></i>Join Section
                            </button>
                            <button onclick="showSection('popup')" class="section-btn w-full text-left px-3 py-2 rounded-md text-sm hover:bg-gray-100" data-section="popup">
                                <i class="fas fa-window-restore mr-2"></i>Popup Section
                                <?php if ($sections['popup']['enabled'] ?? false): ?>
                                    <span class="inline-block w-2 h-2 bg-green-500 rounded-full ml-2"></span>
                                <?php else: ?>
                                    <span class="inline-block w-2 h-2 bg-red-500 rounded-full ml-2"></span>
                                <?php endif; ?>
                            </button>
                            <button onclick="showSection('seo')" class="section-btn w-full text-left px-3 py-2 rounded-md text-sm hover:bg-gray-100" data-section="seo">
                                <i class="fas fa-search mr-2"></i>SEO Settings
                            </button>
                        </nav>
                        
                        <div class="mt-6 pt-4 border-t">
                            <a href="../" target="_blank" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 inline-flex items-center justify-center">
                                <i class="fas fa-external-link-alt mr-2"></i>View Homepage
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
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Main Title (use HTML for styling)</label>
                                    <textarea name="hero_title" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"><?= htmlspecialchars($sections['hero']['title'] ?? '') ?></textarea>
                                    <p class="text-xs text-gray-500 mt-1">You can use HTML like &lt;span class="text-secondary-500"&gt;text&lt;/span&gt; for styling</p>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Subtitle</label>
                                    <textarea name="hero_subtitle" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"><?= htmlspecialchars($sections['hero']['subtitle'] ?? '') ?></textarea>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">CTA Button Text</label>
                                        <input type="text" name="hero_cta_text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['hero']['cta_text'] ?? '') ?>">
                                    </div>
                                    
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">CTA Link</label>
                                        <input type="text" name="hero_cta_link" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['hero']['cta_link'] ?? '') ?>">
                                    </div>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Dashboard Image Path</label>
                                    <input type="text" name="hero_dashboard_image" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['hero']['dashboard_image'] ?? '') ?>">
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                                    Update Hero Section
                                </button>
                            </div>
                        </form>
                    </div>

                    <div id="trusted_partners-section" class="section-content bg-white rounded-lg shadow p-6 hidden">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Trusted Partners</h3>
                        <form method="POST" action="">
                            <input type="hidden" name="action" value="update_section">
                            <input type="hidden" name="section" value="trusted_partners">
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Section Title</label>
                                    <input type="text" name="partner_title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['trusted_partners']['title'] ?? '') ?>">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Subtitle</label>
                                    <input type="text" name="partner_subtitle" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['trusted_partners']['subtitle'] ?? '') ?>">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Logo Paths (one per line)</label>
                                    <textarea name="partner_logos" rows="8" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"><?= implode("\n", $sections['trusted_partners']['logos'] ?? []) ?></textarea>
                                    <p class="text-xs text-gray-500 mt-1">Enter image paths, one per line</p>
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                                    Update Partners Section
                                </button>
                            </div>
                        </form>
                    </div>

                    <div id="impact-section" class="section-content bg-white rounded-lg shadow p-6 hidden">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Impact Section</h3>
                        <form method="POST" action="">
                            <input type="hidden" name="action" value="update_section">
                            <input type="hidden" name="section" value="impact">
                            
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-medium text-gray-900 mb-3">Left Panel</h4>
                                    <div class="space-y-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                                            <input type="text" name="impact_left_title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['impact']['left_panel']['title'] ?? '') ?>">
                                        </div>
                                        
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Subtitle</label>
                                            <input type="text" name="impact_left_subtitle" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['impact']['left_panel']['subtitle'] ?? '') ?>">
                                        </div>
                                        
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                                            <textarea name="impact_left_description" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"><?= htmlspecialchars($sections['impact']['left_panel']['description'] ?? '') ?></textarea>
                                        </div>
                                        
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Rocket Image Path</label>
                                            <input type="text" name="impact_rocket_image" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['impact']['left_panel']['rocket_image'] ?? '') ?>">
                                        </div>
                                    </div>
                                </div>
                                
                                <div>
                                    <h4 class="font-medium text-gray-900 mb-3">Right Panel</h4>
                                    <div class="space-y-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                                            <input type="text" name="impact_right_title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['impact']['right_panel']['title'] ?? '') ?>">
                                        </div>
                                        
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Statistics</label>
                                            <?php for($i = 0; $i < 4; $i++): ?>
                                                <div class="grid grid-cols-2 gap-2 mb-2">
                                                    <input type="text" name="stat_number_<?= $i ?>" placeholder="Number" class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['impact']['right_panel']['stats'][$i]['number'] ?? '') ?>">
                                                    <input type="text" name="stat_label_<?= $i ?>" placeholder="Label" class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['impact']['right_panel']['stats'][$i]['label'] ?? '') ?>">
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                        
                                        <div class="grid grid-cols-2 gap-4">
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">CTA Text</label>
                                                <input type="text" name="impact_cta_text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['impact']['right_panel']['cta_text'] ?? '') ?>">
                                            </div>
                                            
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">CTA Link</label>
                                                <input type="text" name="impact_cta_link" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['impact']['right_panel']['cta_link'] ?? '') ?>">
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Background Pattern Path</label>
                                            <input type="text" name="impact_bg_pattern" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['impact']['right_panel']['bg_pattern'] ?? '') ?>">
                                        </div>
                                        
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Graph Image Path</label>
                                            <input type="text" name="impact_graph_image" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['impact']['right_panel']['graph_image'] ?? '') ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                                    Update Impact Section
                                </button>
                            </div>
                        </form>
                    </div>

                    <div id="products-section" class="section-content bg-white rounded-lg shadow p-6 hidden">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Products/Solutions Section</h3>
                        <form method="POST" action="">
                            <input type="hidden" name="action" value="update_section">
                            <input type="hidden" name="section" value="products">
                            
                            <div class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Section Title</label>
                                        <input type="text" name="products_title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['products']['title'] ?? '') ?>">
                                    </div>
                                    
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Section Subtitle</label>
                                        <input type="text" name="products_subtitle" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['products']['subtitle'] ?? '') ?>">
                                    </div>
                                </div>
                                
                                <div>
                                    <h4 class="font-medium text-gray-900 mb-3">Products (Max 5)</h4>
                                    <?php for($i = 0; $i < 5; $i++): 
                                        $product = $sections['products']['products'][$i] ?? [];
                                    ?>
                                        <div class="border rounded-lg p-4 mb-4">
                                            <h5 class="font-medium text-gray-900 mb-3">Product <?= $i + 1 ?></h5>
                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Name</label>
                                                    <input type="text" name="product_name_<?= $i ?>" class="w-full px-2 py-1 border border-gray-300 rounded text-sm" value="<?= htmlspecialchars($product['name'] ?? '') ?>">
                                                </div>
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Icon (FontAwesome class)</label>
                                                    <input type="text" name="product_icon_<?= $i ?>" class="w-full px-2 py-1 border border-gray-300 rounded text-sm" placeholder="fas fa-university" value="<?= htmlspecialchars($product['icon'] ?? '') ?>">
                                                </div>
                                                <div class="flex items-center">
                                                    <label class="flex items-center">
                                                        <input type="checkbox" name="product_active_<?= $i ?>" class="mr-2" <?= ($product['active'] ?? false) ? 'checked' : '' ?>>
                                                        <span class="text-xs font-medium text-gray-700">Active Tab</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Content Title</label>
                                                    <input type="text" name="product_title_<?= $i ?>" class="w-full px-2 py-1 border border-gray-300 rounded text-sm" value="<?= htmlspecialchars($product['title'] ?? '') ?>">
                                                </div>
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Description</label>
                                                    <textarea name="product_description_<?= $i ?>" rows="2" class="w-full px-2 py-1 border border-gray-300 rounded text-sm"><?= htmlspecialchars($product['description'] ?? '') ?></textarea>
                                                </div>
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Image Path</label>
                                                    <input type="text" name="product_image_<?= $i ?>" class="w-full px-2 py-1 border border-gray-300 rounded text-sm" value="<?= htmlspecialchars($product['image'] ?? '') ?>">
                                                </div>
                                                <div class="md:col-span-3">
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Features (one per line)</label>
                                                    <textarea name="product_features_<?= $i ?>" rows="4" class="w-full px-2 py-1 border border-gray-300 rounded text-sm"><?= implode("\n", $product['features'] ?? []) ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                                    Update Products Section
                                </button>
                            </div>
                        </form>
                    </div>

                    <div id="why_partner-section" class="section-content bg-white rounded-lg shadow p-6 hidden">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Why Partner With Us Section</h3>
                        <form method="POST" action="">
                            <input type="hidden" name="action" value="update_section">
                            <input type="hidden" name="section" value="why_partner">
                            
                            <div class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Section Title</label>
                                        <input type="text" name="why_partner_title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['why_partner']['title'] ?? '') ?>">
                                    </div>
                                    
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Section Subtitle</label>
                                        <input type="text" name="why_partner_subtitle" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['why_partner']['subtitle'] ?? '') ?>">
                                    </div>
                                </div>
                                
                                <div>
                                    <h4 class="font-medium text-gray-900 mb-3">Features (4 cards)</h4>
                                    <?php for($i = 0; $i < 4; $i++): 
                                        $feature = $sections['why_partner']['features'][$i] ?? [];
                                    ?>
                                        <div class="border rounded-lg p-4 mb-4">
                                            <h5 class="font-medium text-gray-900 mb-3">Feature <?= $i + 1 ?></h5>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Title</label>
                                                    <input type="text" name="feature_title_<?= $i ?>" class="w-full px-2 py-1 border border-gray-300 rounded text-sm" value="<?= htmlspecialchars($feature['title'] ?? '') ?>">
                                                </div>
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Background Color (CSS class)</label>
                                                    <select name="feature_bg_color_<?= $i ?>" class="w-full px-2 py-1 border border-gray-300 rounded text-sm">
                                                        <option value="bg-secondary-500" <?= ($feature['bg_color'] ?? '') === 'bg-secondary-500' ? 'selected' : '' ?>>Orange (bg-secondary-500)</option>
                                                        <option value="bg-blue-900" <?= ($feature['bg_color'] ?? '') === 'bg-blue-900' ? 'selected' : '' ?>>Blue (bg-blue-900)</option>
                                                        <option value="bg-primary-600" <?= ($feature['bg_color'] ?? '') === 'bg-primary-600' ? 'selected' : '' ?>>Primary Blue (bg-primary-600)</option>
                                                        <option value="bg-green-600" <?= ($feature['bg_color'] ?? '') === 'bg-green-600' ? 'selected' : '' ?>>Green (bg-green-600)</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Description</label>
                                                    <textarea name="feature_description_<?= $i ?>" rows="2" class="w-full px-2 py-1 border border-gray-300 rounded text-sm"><?= htmlspecialchars($feature['description'] ?? '') ?></textarea>
                                                </div>
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Image Path</label>
                                                    <input type="text" name="feature_image_<?= $i ?>" class="w-full px-2 py-1 border border-gray-300 rounded text-sm" value="<?= htmlspecialchars($feature['image'] ?? '') ?>">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                                    Update Why Partner Section
                                </button>
                            </div>
                        </form>
                    </div>

                    <div id="getting_started-section" class="section-content bg-white rounded-lg shadow p-6 hidden">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Getting Started Section</h3>
                        <form method="POST" action="">
                            <input type="hidden" name="action" value="update_section">
                            <input type="hidden" name="section" value="getting_started">
                            
                            <div class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Section Title</label>
                                        <input type="text" name="getting_started_title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['getting_started']['title'] ?? '') ?>">
                                    </div>
                                    
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Section Subtitle</label>
                                        <input type="text" name="getting_started_subtitle" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['getting_started']['subtitle'] ?? '') ?>">
                                    </div>
                                </div>
                                
                                <div>
                                    <h4 class="font-medium text-gray-900 mb-3">Steps (3 steps)</h4>
                                    <?php for($i = 0; $i < 3; $i++): 
                                        $step = $sections['getting_started']['steps'][$i] ?? [];
                                    ?>
                                        <div class="border rounded-lg p-4 mb-4">
                                            <h5 class="font-medium text-gray-900 mb-3">Step <?= $i + 1 ?></h5>
                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Title</label>
                                                    <input type="text" name="step_title_<?= $i ?>" class="w-full px-2 py-1 border border-gray-300 rounded text-sm" value="<?= htmlspecialchars($step['title'] ?? '') ?>">
                                                </div>
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Description</label>
                                                    <input type="text" name="step_description_<?= $i ?>" class="w-full px-2 py-1 border border-gray-300 rounded text-sm" value="<?= htmlspecialchars($step['description'] ?? '') ?>">
                                                </div>
                                                <div>
                                                    <label class="block text-xs font-medium text-gray-700 mb-1">Icon (SVG path)</label>
                                                    <textarea name="step_icon_<?= $i ?>" rows="2" class="w-full px-2 py-1 border border-gray-300 rounded text-sm" placeholder="SVG path for icon"><?= htmlspecialchars($step['icon'] ?? '') ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">CTA Button Text</label>
                                        <input type="text" name="getting_started_cta_text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['getting_started']['cta_text'] ?? '') ?>">
                                    </div>
                                    
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">CTA Link</label>
                                        <input type="text" name="getting_started_cta_link" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['getting_started']['cta_link'] ?? '') ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                                    Update Getting Started Section
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

                    <!-- Popup Section (NEW) -->
                    <div id="popup-section" class="section-content bg-white rounded-lg shadow p-6 hidden">
                        <h3 class="text-lg font-medium text-gray-900 mb-4 flex items-center">
                            Popup Section
                            <?php if ($sections['popup']['enabled'] ?? false): ?>
                                <span class="ml-3 px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full">Enabled</span>
                            <?php else: ?>
                                <span class="ml-3 px-2 py-1 bg-red-100 text-red-800 text-xs rounded-full">Disabled</span>
                            <?php endif; ?>
                        </h3>
                        <form method="POST" action="">
                            <input type="hidden" name="action" value="update_section">
                            <input type="hidden" name="section" value="popup">
                            
                            <div class="space-y-6">
                                <!-- Enable/Disable Toggle -->
                                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                                    <div class="flex items-center">
                                        <input type="checkbox" id="popup_enabled" name="popup_enabled" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" <?= ($sections['popup']['enabled'] ?? false) ? 'checked' : '' ?>>
                                        <label for="popup_enabled" class="ml-3 text-sm font-medium text-gray-900">
                                            Enable Popup on Homepage
                                        </label>
                                    </div>
                                    <p class="text-xs text-gray-600 mt-1 ml-7">Check this to show the popup on the homepage</p>
                                </div>

                                <!-- Basic Content -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Popup Title</label>
                                        <input type="text" name="popup_title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['popup']['title'] ?? '') ?>" placeholder="Special Offer!">
                                    </div>
                                    
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Show Delay (seconds)</label>
                                        <input type="number" name="popup_show_delay" min="0" max="30" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['popup']['show_delay'] ?? 3) ?>">
                                    </div>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Popup Content</label>
                                    <textarea name="popup_content" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your popup message here..."><?= htmlspecialchars($sections['popup']['content'] ?? '') ?></textarea>
                                    <p class="text-xs text-gray-500 mt-1">You can use HTML for formatting</p>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Image URL (optional)</label>
                                    <input type="text" name="popup_image" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['popup']['image'] ?? '') ?>" placeholder="https://example.com/image.jpg">
                                </div>
                                
                                <!-- CTA Button -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">CTA Button Text</label>
                                        <input type="text" name="popup_cta_text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['popup']['cta_text'] ?? '') ?>" placeholder="Get Started">
                                    </div>
                                    
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">CTA Link</label>
                                        <input type="text" name="popup_cta_link" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($sections['popup']['cta_link'] ?? '') ?>" placeholder="/book-a-demo">
                                    </div>
                                </div>
                                
                                <!-- Styling Options -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-medium text-gray-900 mb-3">Styling Options</h4>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Background Color</label>
                                            <select name="popup_bg_color" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                <option value="bg-white" <?= ($sections['popup']['bg_color'] ?? '') === 'bg-white' ? 'selected' : '' ?>>White</option>
                                                <option value="bg-primary-600" <?= ($sections['popup']['bg_color'] ?? '') === 'bg-primary-600' ? 'selected' : '' ?>>Primary Blue</option>
                                                <option value="bg-secondary-500" <?= ($sections['popup']['bg_color'] ?? '') === 'bg-secondary-500' ? 'selected' : '' ?>>Secondary Orange</option>
                                                <option value="bg-gradient-to-r from-primary-600 to-blue-700" <?= ($sections['popup']['bg_color'] ?? '') === 'bg-gradient-to-r from-primary-600 to-blue-700' ? 'selected' : '' ?>>Blue Gradient</option>
                                                <option value="bg-gradient-to-r from-secondary-500 to-orange-600" <?= ($sections['popup']['bg_color'] ?? '') === 'bg-gradient-to-r from-secondary-500 to-orange-600' ? 'selected' : '' ?>>Orange Gradient</option>
                                            </select>
                                        </div>
                                        
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Text Color</label>
                                            <select name="popup_text_color" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                <option value="text-gray-900" <?= ($sections['popup']['text_color'] ?? '') === 'text-gray-900' ? 'selected' : '' ?>>Dark</option>
                                                <option value="text-white" <?= ($sections['popup']['text_color'] ?? '') === 'text-white' ? 'selected' : '' ?>>White</option>
                                                <option value="text-primary-600" <?= ($sections['popup']['text_color'] ?? '') === 'text-primary-600' ? 'selected' : '' ?>>Primary Blue</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Behavior Options -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-medium text-gray-900 mb-3">Behavior Options</h4>
                                    
                                    <div class="space-y-3">
                                        <div class="flex items-center">
                                            <input type="checkbox" id="popup_close_button" name="popup_close_button" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" <?= ($sections['popup']['close_button'] ?? true) ? 'checked' : '' ?>>
                                            <label for="popup_close_button" class="ml-3 text-sm text-gray-700">
                                                Show close button (X)
                                            </label>
                                        </div>
                                        
                                        <div class="flex items-center">
                                            <input type="checkbox" id="popup_overlay_close" name="popup_overlay_close" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" <?= ($sections['popup']['overlay_close'] ?? true) ? 'checked' : '' ?>>
                                            <label for="popup_overlay_close" class="ml-3 text-sm text-gray-700">
                                                Allow closing by clicking outside popup
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Preview Button -->
                                <div class="border-t pt-4">
                                    <button type="button" onclick="previewPopup()" class="bg-gray-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-700 mr-3">
                                        <i class="fas fa-eye mr-2"></i>Preview Popup
                                    </button>
                                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                                        Update Popup Section
                                    </button>
                                </div>
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
        
        function previewPopup() {
            const title = document.querySelector('[name="popup_title"]').value;
            const content = document.querySelector('[name="popup_content"]').value;
            const image = document.querySelector('[name="popup_image"]').value;
            const ctaText = document.querySelector('[name="popup_cta_text"]').value;
            const ctaLink = document.querySelector('[name="popup_cta_link"]').value;
            const bgColor = document.querySelector('[name="popup_bg_color"]').value;
            const textColor = document.querySelector('[name="popup_text_color"]').value;
            const showCloseButton = document.querySelector('[name="popup_close_button"]').checked;
            
            // Create preview popup
            const overlay = document.createElement('div');
            overlay.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4';
            
            overlay.innerHTML = `
                <div class="relative ${bgColor} rounded-lg shadow-2xl max-w-md w-full mx-4 p-6 ${textColor} transform transition-all duration-300 scale-100">
                    ${showCloseButton ? `
                        <button onclick="this.closest('.fixed').remove()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors">
                            <i class="fas fa-times text-lg"></i>
                        </button>
                    ` : ''}
                    
                    ${image ? `<img src="${image}" alt="Popup Image" class="w-full h-32 object-cover rounded-lg mb-4">` : ''}
                    
                    ${title ? `<h3 class="text-xl font-bold mb-3">${title}</h3>` : ''}
                    
                    ${content ? `<div class="mb-4">${content}</div>` : ''}
                    
                    ${ctaText ? `
                        <a href="${ctaLink || '#'}" class="inline-block bg-secondary-500 hover:bg-secondary-600 text-white px-6 py-2 rounded-lg font-medium transition-colors">
                            ${ctaText}
                        </a>
                    ` : ''}
                    
                    <div class="text-xs text-gray-500 mt-4 opacity-70">Preview Mode</div>
                </div>
            `;
            
            // Close on overlay click
            overlay.addEventListener('click', (e) => {
                if (e.target === overlay) {
                    overlay.remove();
                }
            });
            
            document.body.appendChild(overlay);
        }
        
        // Initialize with hero section
        showSection('hero');
    </script>
</body>
</html>