<?php
// admin/pages.php
require_once 'config/database.php';
requireLogin();

$db = getDB();
$error = '';
$success = '';

// Handle form submissions
if ($_POST) {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'create' || $action === 'update') {
        $title = sanitize($_POST['title']);
        $slug = generateSlug($_POST['slug'] ?: $title);
        $meta_title = sanitize($_POST['meta_title']);
        $meta_description = sanitize($_POST['meta_description']);
        $meta_keywords = sanitize($_POST['meta_keywords']);
        $content = $_POST['content']; // Don't sanitize HTML content
        $status = $_POST['status'] ?? 'active';
        
        if (empty($title) || empty($slug)) {
            $error = 'Title and slug are required';
        } else {
            if ($action === 'create') {
                // Check if slug already exists
                $stmt = $db->prepare("SELECT id FROM pages WHERE slug = ?");
                $stmt->execute([$slug]);
                if ($stmt->fetch()) {
                    $error = 'A page with this slug already exists';
                } else {
                    $stmt = $db->prepare("INSERT INTO pages (title, slug, meta_title, meta_description, meta_keywords, content, status) VALUES (?, ?, ?, ?, ?, ?, ?)");
                    if ($stmt->execute([$title, $slug, $meta_title, $meta_description, $meta_keywords, $content, $status])) {
                        $success = 'Page created successfully';
                    } else {
                        $error = 'Error creating page';
                    }
                }
            } else {
                $id = (int)$_POST['id'];
                // Check if slug already exists for other pages
                $stmt = $db->prepare("SELECT id FROM pages WHERE slug = ? AND id != ?");
                $stmt->execute([$slug, $id]);
                if ($stmt->fetch()) {
                    $error = 'A page with this slug already exists';
                } else {
                    $stmt = $db->prepare("UPDATE pages SET title = ?, slug = ?, meta_title = ?, meta_description = ?, meta_keywords = ?, content = ?, status = ? WHERE id = ?");
                    if ($stmt->execute([$title, $slug, $meta_title, $meta_description, $meta_keywords, $content, $status, $id])) {
                        $success = 'Page updated successfully';
                    } else {
                        $error = 'Error updating page';
                    }
                }
            }
        }
    } elseif ($action === 'delete') {
        $id = (int)$_POST['id'];
        $stmt = $db->prepare("DELETE FROM pages WHERE id = ?");
        if ($stmt->execute([$id])) {
            $success = 'Page deleted successfully';
        } else {
            $error = 'Error deleting page';
        }
    }
}

// Get all pages
$stmt = $db->query("SELECT * FROM pages ORDER BY created_at DESC");
$pages = $stmt->fetchAll();

// Get page for editing
$editPage = null;
if (isset($_GET['edit'])) {
    $editId = (int)$_GET['edit'];
    $stmt = $db->prepare("SELECT * FROM pages WHERE id = ?");
    $stmt->execute([$editId]);
    $editPage = $stmt->fetch();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pages Management - OptionPay Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .ck-editor__editable { min-height: 300px; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <?php require_once 'partials/navigation.php'; ?>

    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-900">Pages Management</h2>
                <p class="text-gray-600 mt-1">Create and manage your website pages</p>
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

            <div class="mb-6 flex justify-between items-center">
                <div class="flex space-x-3">
                    <button onclick="showCreateForm()" 
                            class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <i class="fas fa-plus mr-2"></i>Add New Page
                    </button>
                    <?php if ($editPage): ?>
                        <a href="pages.php" 
                           class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            <i class="fas fa-list mr-2"></i>View All Pages
                        </a>
                    <?php endif; ?>
                </div>
                <div class="text-sm text-gray-600">
                    Total Pages: <span class="font-semibold"><?= count($pages) ?></span>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-medium text-gray-900">
                                <?= $editPage ? 'Edit Page' : 'Create New Page' ?>
                            </h3>
                            <?php if ($editPage): ?>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    Editing: <?= htmlspecialchars($editPage['title']) ?>
                                </span>
                            <?php endif; ?>
                        </div>
                        
                        <form method="POST" action="">
                            <input type="hidden" name="action" value="<?= $editPage ? 'update' : 'create' ?>">
                            <?php if ($editPage): ?>
                                <input type="hidden" name="id" value="<?= $editPage['id'] ?>">
                            <?php endif; ?>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title *</label>
                                    <input type="text" id="title" name="title" required
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                           value="<?= htmlspecialchars($editPage['title'] ?? '') ?>">
                                </div>
                                
                                <div>
                                    <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">Slug *</label>
                                    <input type="text" id="slug" name="slug" required
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                           value="<?= htmlspecialchars($editPage['slug'] ?? '') ?>">
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label for="meta_title" class="block text-sm font-medium text-gray-700 mb-2">Meta Title</label>
                                <input type="text" id="meta_title" name="meta_title"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                       value="<?= htmlspecialchars($editPage['meta_title'] ?? '') ?>">
                            </div>
                            
                            <div class="mb-4">
                                <label for="meta_description" class="block text-sm font-medium text-gray-700 mb-2">Meta Description</label>
                                <textarea id="meta_description" name="meta_description" rows="3"
                                          class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"><?= htmlspecialchars($editPage['meta_description'] ?? '') ?></textarea>
                            </div>
                            
                            <div class="mb-4">
                                <label for="meta_keywords" class="block text-sm font-medium text-gray-700 mb-2">Meta Keywords</label>
                                <input type="text" id="meta_keywords" name="meta_keywords"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                       value="<?= htmlspecialchars($editPage['meta_keywords'] ?? '') ?>">
                            </div>
                            
                            <div class="mb-4">
                                <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                                <select id="status" name="status"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="active" <?= ($editPage['status'] ?? 'active') === 'active' ? 'selected' : '' ?>>Active</option>
                                    <option value="inactive" <?= ($editPage['status'] ?? '') === 'inactive' ? 'selected' : '' ?>>Inactive</option>
                                </select>
                            </div>
                            
                            <div class="mb-4">
                                <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Content</label>
                                <div class="mb-2">
                                    <button type="button" onclick="insertTemplate('basic')" 
                                            class="text-xs bg-gray-100 hover:bg-gray-200 px-2 py-1 rounded mr-2">Basic Template</button>
                                    <button type="button" onclick="insertTemplate('services')" 
                                            class="text-xs bg-gray-100 hover:bg-gray-200 px-2 py-1 rounded mr-2">Services Template</button>
                                    <button type="button" onclick="insertTemplate('contact')" 
                                            class="text-xs bg-gray-100 hover:bg-gray-200 px-2 py-1 rounded">Contact Template</button>
                                </div>
                                <textarea id="content" name="content"><?= htmlspecialchars($editPage['content'] ?? '') ?></textarea>
                            </div>
                            
                            <div class="flex justify-between items-center mb-6">
                                <div class="text-sm text-gray-600">
                                    <span class="font-medium">Preview URL:</span> 
                                    <span id="preview-url" class="text-blue-600"><?= $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI'], 2) ?>/<?= $editPage['slug'] ?? 'your-page-slug' ?></span>
                                </div>
                                <?php if ($editPage): ?>
                                    <a href="../<?= $editPage['slug'] ?>" target="_blank" 
                                       class="text-sm text-blue-600 hover:text-blue-700">
                                        <i class="fas fa-external-link-alt mr-1"></i>View Page
                                    </a>
                                <?php endif; ?>
                            </div>
                            
                            <div class="flex justify-end space-x-3">
                                <?php if ($editPage): ?>
                                    <a href="pages.php" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                                        <i class="fas fa-times mr-2"></i>Cancel
                                    </a>
                                <?php endif; ?>
                                <button type="submit" 
                                        class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <i class="fas fa-save mr-2"></i><?= $editPage ? 'Update Page' : 'Create Page' ?>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-medium text-gray-900">All Pages</h3>
                            <button onclick="refreshPagesList()" 
                                    class="text-sm text-gray-500 hover:text-gray-700">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                        </div>
                        
                        <?php if (empty($pages)): ?>
                            <div class="text-center py-8">
                                <i class="fas fa-file-alt text-4xl text-gray-300 mb-4"></i>
                                <p class="text-gray-500 mb-4">No pages created yet</p>
                                <button onclick="showCreateForm()" 
                                        class="text-sm text-blue-600 hover:text-blue-700">
                                    Create your first page
                                </button>
                            </div>
                        <?php else: ?>
                            <div class="space-y-3">
                                <?php foreach ($pages as $page): ?>
                                    <div class="border rounded-lg p-3 hover:bg-gray-50 <?= $editPage && $editPage['id'] == $page['id'] ? 'ring-2 ring-blue-500 bg-blue-50' : '' ?>">
                                        <div class="flex justify-between items-start">
                                            <div class="flex-1">
                                                <h4 class="text-sm font-medium text-gray-900"><?= htmlspecialchars($page['title']) ?></h4>
                                                <p class="text-xs text-gray-500 mt-1">
                                                    <i class="fas fa-link mr-1"></i>/<?= htmlspecialchars($page['slug']) ?>
                                                </p>
                                                <div class="flex items-center mt-2 space-x-2">
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                                        <?= $page['status'] === 'active' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' ?>">
                                                        <?= ucfirst($page['status']) ?>
                                                    </span>
                                                    <span class="text-xs text-gray-400">
                                                        <i class="fas fa-calendar mr-1"></i><?= date('M j', strtotime($page['created_at'])) ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex flex-col space-y-1 ml-2">
                                                <a href="?edit=<?= $page['id'] ?>" 
                                                   class="text-blue-600 hover:text-blue-700 text-xs">
                                                    <i class="fas fa-edit mr-1"></i>Edit
                                                </a>
                                                <a href="../<?= $page['slug'] ?>" target="_blank"
                                                   class="text-green-600 hover:text-green-700 text-xs">
                                                    <i class="fas fa-eye mr-1"></i>View
                                                </a>
                                                <form method="POST" action="" class="inline" 
                                                      onsubmit="return confirm('Are you sure you want to delete this page?')">
                                                    <input type="hidden" name="action" value="delete">
                                                    <input type="hidden" name="id" value="<?= $page['id'] ?>">
                                                    <button type="submit" class="text-red-600 hover:text-red-700 text-xs">
                                                        <i class="fas fa-trash mr-1"></i>Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script>
        let editor;
        
        ClassicEditor
            .create(document.querySelector('#content'))
            .then(newEditor => {
                editor = newEditor;
            })
            .catch(error => {
                console.error(error);
            });
            
        // Auto-generate slug from title
        document.getElementById('title').addEventListener('input', function() {
            const slugField = document.getElementById('slug');
            if (!slugField.value || <?= $editPage ? 'false' : 'true' ?>) {
                let slug = this.value.toLowerCase()
                    .replace(/[^\w\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-')
                    .trim('-');
                slugField.value = slug;
                updatePreviewUrl(slug);
            }
        });
        
        // Update preview URL
        document.getElementById('slug').addEventListener('input', function() {
            updatePreviewUrl(this.value);
        });
        
        function updatePreviewUrl(slug) {
            const baseUrl = '<?= $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI'], 2) ?>';
            document.getElementById('preview-url').textContent = baseUrl + '/' + (slug || 'your-page-slug');
        }
        
        // Show create form
        function showCreateForm() {
            if (<?= $editPage ? 'true' : 'false' ?>) {
                window.location.href = 'pages.php';
            } else {
                document.getElementById('title').focus();
            }
        }
        
        // Refresh pages list
        function refreshPagesList() {
            window.location.reload();
        }
        
        // Content templates
        function insertTemplate(type) {
            let content = '';
            
            switch(type) {
                case 'basic':
                    content = `<div class="max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold mb-4 text-gray-900">Welcome to Our Page</h2>
    <p class="text-gray-700 mb-4">This is a basic page template. You can customize this content as needed.</p>
    <p class="text-gray-700 mb-4">Add your content here and format it using the rich text editor.</p>
</div>`;
                    break;
                    
                case 'services':
                    content = `<div class="max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold mb-6 text-gray-900">Our Services</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="bg-gray-50 p-6 rounded-lg">
            <h3 class="text-lg font-semibold mb-3">Service 1</h3>
            <p class="text-gray-700">Description of your first service.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg">
            <h3 class="text-lg font-semibold mb-3">Service 2</h3>
            <p class="text-gray-700">Description of your second service.</p>
        </div>
    </div>
</div>`;
                    break;
                    
                case 'contact':
                    content = `<div class="max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold mb-6 text-gray-900">Contact Us</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h3 class="text-lg font-semibold mb-4">Get in Touch</h3>
            <p class="text-gray-700 mb-4">We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
            <div class="space-y-2">
                <p class="text-gray-700"><strong>Email:</strong> info@optionpay.com</p>
                <p class="text-gray-700"><strong>Phone:</strong> +91-9201010140</p>
            </div>
        </div>
        <div>
            <h3 class="text-lg font-semibold mb-4">Business Hours</h3>
            <div class="space-y-2">
                <p class="text-gray-700">Monday - Friday: 9:00 AM - 6:00 PM</p>
                <p class="text-gray-700">Saturday: 10:00 AM - 4:00 PM</p>
                <p class="text-gray-700">Sunday: Closed</p>
            </div>
        </div>
    </div>
</div>`;
                    break;
            }
            
            if (editor && content) {
                editor.setData(content);
            }
        }
    </script>
</body>
</html>