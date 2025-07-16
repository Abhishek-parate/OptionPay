<?php
// admin/filemanager.php
require_once 'config/database.php';
requireLogin();

// Security: Define allowed file extensions for editing
$editableExtensions = ['php', 'html', 'css', 'js', 'txt', 'md', 'json', 'xml', 'sql', 'htaccess'];
$imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp', 'ico'];
$allowedUploadExtensions = ['php', 'html', 'css', 'js', 'txt', 'md', 'json', 'xml', 'sql', 'htaccess', 'jpg', 'jpeg', 'png', 'gif', 'svg', 'webp', 'ico', 'pdf', 'zip', 'rar', '7z', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx'];
$maxFileSize = 5 * 1024 * 1024; // 5MB limit for editing
$maxUploadSize = 10 * 1024 * 1024; // 10MB limit for uploads

// Get the root directory (one level up from admin)
$rootDir = dirname(__DIR__);
$currentDir = isset($_GET['dir']) ? $_GET['dir'] : '';
$currentPath = $rootDir . ($currentDir ? '/' . $currentDir : '');

// Handle search
$searchQuery = isset($_GET['search']) ? trim($_GET['search']) : '';
$searchResults = [];
$isSearching = !empty($searchQuery);

// Security: Prevent directory traversal
$currentPath = realpath($currentPath);
if (!$currentPath || !str_starts_with($currentPath, $rootDir)) {
    $currentPath = $rootDir;
    $currentDir = '';
}

$error = '';
$success = '';
$fileContent = '';
$editingFile = '';

// Handle file operations
if ($_POST) {
    $action = $_POST['action'] ?? '';
    
    switch ($action) {
        case 'save_file':
            $fileName = $_POST['file_name'] ?? '';
            $content = $_POST['file_content'] ?? '';
            
            if ($fileName && $content !== '') {
                $filePath = $currentPath . '/' . $fileName;
                $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
                
                if (in_array($extension, $editableExtensions)) {
                    if (file_put_contents($filePath, $content) !== false) {
                        $success = "File '$fileName' saved successfully!";
                    } else {
                        $error = "Failed to save file '$fileName'";
                    }
                } else {
                    $error = "File type not allowed for editing";
                }
            }
            break;
            
        case 'create_file':
            $fileName = sanitize($_POST['new_file_name'] ?? '');
            if ($fileName) {
                $filePath = $currentPath . '/' . $fileName;
                if (!file_exists($filePath)) {
                    if (file_put_contents($filePath, '') !== false) {
                        $success = "File '$fileName' created successfully!";
                    } else {
                        $error = "Failed to create file '$fileName'";
                    }
                } else {
                    $error = "File '$fileName' already exists";
                }
            }
            break;
            
        case 'create_folder':
            $folderName = sanitize($_POST['new_folder_name'] ?? '');
            if ($folderName) {
                $folderPath = $currentPath . '/' . $folderName;
                if (!file_exists($folderPath)) {
                    if (mkdir($folderPath, 0755)) {
                        $success = "Folder '$folderName' created successfully!";
                    } else {
                        $error = "Failed to create folder '$folderName'";
                    }
                } else {
                    $error = "Folder '$folderName' already exists";
                }
            }
            break;
            
        case 'delete_item':
            $itemName = $_POST['item_name'] ?? '';
            if ($itemName) {
                $itemPath = $currentPath . '/' . $itemName;
                if (file_exists($itemPath)) {
                    if (is_dir($itemPath)) {
                        if (rmdir($itemPath)) {
                            $success = "Folder '$itemName' deleted successfully!";
                        } else {
                            $error = "Failed to delete folder '$itemName' (must be empty)";
                        }
                    } else {
                        if (unlink($itemPath)) {
                            $success = "File '$itemName' deleted successfully!";
                        } else {
                            $error = "Failed to delete file '$itemName'";
                        }
                    }
                } else {
                    $error = "Item '$itemName' not found";
                }
            }
            break;
    }
}

// Handle file upload
if ($_FILES && isset($_FILES['upload_files'])) {
    $uploadedFiles = $_FILES['upload_files'];
    $uploadResults = [];
    
    // Handle multiple files
    for ($i = 0; $i < count($uploadedFiles['name']); $i++) {
        $fileName = $uploadedFiles['name'][$i];
        $fileTmpName = $uploadedFiles['tmp_name'][$i];
        $fileSize = $uploadedFiles['size'][$i];
        $fileError = $uploadedFiles['error'][$i];
        
        if ($fileError === UPLOAD_ERR_OK) {
            $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            
            // Security checks
            if (in_array($extension, $allowedUploadExtensions)) {
                if ($fileSize <= $maxUploadSize) {
                    $targetPath = $currentPath . '/' . $fileName;
                    
                    // Check if file already exists
                    if (file_exists($targetPath)) {
                        $uploadResults[] = "File '$fileName' already exists";
                    } else {
                        if (move_uploaded_file($fileTmpName, $targetPath)) {
                            $uploadResults[] = "File '$fileName' uploaded successfully";
                        } else {
                            $uploadResults[] = "Failed to upload '$fileName'";
                        }
                    }
                } else {
                    $uploadResults[] = "File '$fileName' is too large (max " . formatFileSize($maxUploadSize) . ")";
                }
            } else {
                $uploadResults[] = "File type not allowed for '$fileName'";
            }
        } else {
            $uploadResults[] = "Upload error for '$fileName': " . getUploadErrorMessage($fileError);
        }
    }
    
    // Set success/error messages
    if (!empty($uploadResults)) {
        $successCount = count(array_filter($uploadResults, function($msg) {
            return strpos($msg, 'successfully') !== false;
        }));
        
        if ($successCount > 0) {
            $success = implode('<br>', $uploadResults);
        } else {
            $error = implode('<br>', $uploadResults);
        }
    }
}

// Handle file editing request
if (isset($_GET['edit'])) {
    $editingFile = $_GET['edit'];
    $filePath = $currentPath . '/' . $editingFile;
    $extension = strtolower(pathinfo($editingFile, PATHINFO_EXTENSION));
    
    if (file_exists($filePath) && in_array($extension, $editableExtensions)) {
        $fileSize = filesize($filePath);
        if ($fileSize <= $maxFileSize) {
            $fileContent = file_get_contents($filePath);
        } else {
            $error = "File too large to edit (max 5MB)";
        }
    } else {
        $error = "File not found or not editable";
    }
}

// Search functionality
function searchFiles($directory, $query, $rootDir, $maxResults = 100) {
    $results = [];
    $count = 0;
    
    if (empty($query) || $count >= $maxResults) {
        return $results;
    }
    
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($directory, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );
    
    foreach ($iterator as $file) {
        if ($count >= $maxResults) break;
        
        $fileName = $file->getFilename();
        $filePath = $file->getPathname();
        
        // Skip hidden files and system files
        if (str_starts_with($fileName, '.')) {
            continue;
        }
        
        // Check if filename contains search query (case-insensitive)
        if (stripos($fileName, $query) !== false) {
            $relativePath = str_replace($rootDir . '/', '', $filePath);
            $relativePath = str_replace('\\', '/', $relativePath); // Windows compatibility
            
            $results[] = [
                'name' => $fileName,
                'path' => $relativePath,
                'directory' => dirname($relativePath),
                'type' => $file->isDir() ? 'directory' : 'file',
                'size' => $file->isFile() ? $file->getSize() : 0,
                'modified' => $file->getMTime(),
                'extension' => $file->isFile() ? strtolower(pathinfo($fileName, PATHINFO_EXTENSION)) : ''
            ];
            $count++;
        }
    }
    
    return $results;
}

// Perform search if query is provided
if ($isSearching) {
    try {
        $searchResults = searchFiles($rootDir, $searchQuery, $rootDir);
    } catch (Exception $e) {
        $error = "Search error: " . $e->getMessage();
        $searchResults = [];
    }
}

// Get directory contents
function getDirContents($dir) {
    $items = [];
    if (is_dir($dir)) {
        $files = scandir($dir);
        foreach ($files as $file) {
            if ($file != '.' && $file != '..' && !str_starts_with($file, '.')) {
                $filePath = $dir . '/' . $file;
                $items[] = [
                    'name' => $file,
                    'type' => is_dir($filePath) ? 'directory' : 'file',
                    'size' => is_file($filePath) ? filesize($filePath) : 0,
                    'modified' => filemtime($filePath),
                    'extension' => is_file($filePath) ? strtolower(pathinfo($file, PATHINFO_EXTENSION)) : ''
                ];
            }
        }
    }
    
    // Sort: directories first, then files
    usort($items, function($a, $b) {
        if ($a['type'] == $b['type']) {
            return strcasecmp($a['name'], $b['name']);
        }
        return $a['type'] == 'directory' ? -1 : 1;
    });
    
    return $items;
}

$dirContents = $isSearching ? [] : getDirContents($currentPath);

// Helper functions
function formatFileSize($bytes) {
    if ($bytes == 0) return '0 Bytes';
    $k = 1024;
    $sizes = ['Bytes', 'KB', 'MB', 'GB'];
    $i = floor(log($bytes) / log($k));
    return round($bytes / pow($k, $i), 2) . ' ' . $sizes[$i];
}

function getFileIcon($item) {
    if ($item['type'] == 'directory') {
        return 'fas fa-folder text-blue-500';
    }
    
    global $imageExtensions, $editableExtensions;
    $ext = $item['extension'];
    
    if (in_array($ext, $imageExtensions)) {
        return 'fas fa-image text-green-500';
    } elseif ($ext == 'pdf') {
        return 'fas fa-file-pdf text-red-500';
    } elseif (in_array($ext, ['zip', 'rar', '7z'])) {
        return 'fas fa-file-archive text-purple-500';
    } elseif (in_array($ext, $editableExtensions)) {
        return 'fas fa-code text-orange-500';
    } else {
        return 'fas fa-file text-gray-500';
    }
}

function getBreadcrumbs($currentDir) {
    $breadcrumbs = [['name' => 'Root', 'path' => '']];
    if ($currentDir) {
        $parts = explode('/', $currentDir);
        $path = '';
        foreach ($parts as $part) {
            $path .= ($path ? '/' : '') . $part;
            $breadcrumbs[] = ['name' => $part, 'path' => $path];
        }
    }
    return $breadcrumbs;
}

function getUploadErrorMessage($error) {
    $messages = [
        UPLOAD_ERR_INI_SIZE => 'File exceeds upload_max_filesize',
        UPLOAD_ERR_FORM_SIZE => 'File exceeds MAX_FILE_SIZE',
        UPLOAD_ERR_PARTIAL => 'File was only partially uploaded',
        UPLOAD_ERR_NO_FILE => 'No file was uploaded',
        UPLOAD_ERR_NO_TMP_DIR => 'Missing temporary folder',
        UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk',
        UPLOAD_ERR_EXTENSION => 'File upload stopped by extension'
    ];
    return $messages[$error] ?? 'Unknown upload error';
}

function highlightSearchTerm($text, $searchTerm) {
    if (empty($searchTerm)) {
        return htmlspecialchars($text);
    }
    
    $highlighted = preg_replace(
        '/(' . preg_quote($searchTerm, '/') . ')/i',
        '<mark class="bg-yellow-200 px-1 rounded">$1</mark>',
        htmlspecialchars($text)
    );
    
    return $highlighted;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Manager - OptionPay Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.44.0/min/vs/loader.min.js"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        
        /* Fixed editor container styling */
        #editor-container {
            width: 100%;
            height: 600px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
        }
        
        #editor {
            width: 100%;
            height: 100%;
        }
        
        .file-item:hover { 
            background-color: #f8fafc; 
        }
        
        /* Ensure proper text wrapping in file list */
        .file-name {
            word-break: break-word;
            overflow-wrap: break-word;
        }
        
        /* Upload area styling */
        .upload-area {
            border: 2px dashed #d1d5db;
            border-radius: 8px;
            transition: all 0.3s ease;
            background-color: #f9fafb;
        }
        
        .upload-area.dragover {
            border-color: #3b82f6;
            background-color: #eff6ff;
        }
        
        .upload-area:hover {
            border-color: #6b7280;
        }
        
        .upload-progress {
            transition: width 0.3s ease;
        }
        
        /* Search styling */
        .search-result-path {
            font-size: 0.75rem;
            color: #6b7280;
            margin-top: 0.25rem;
        }
        
        .search-highlight {
            background-color: #fef3c7;
            padding: 0.125rem 0.25rem;
            border-radius: 0.25rem;
            font-weight: 500;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            #editor-container {
                height: 400px;
            }
            
            .file-actions {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .file-actions form,
            .file-actions a {
                width: 100%;
                text-align: center;
            }
        }
        
        /* Custom scrollbar for better UX */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 3px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <?php require_once 'partials/navigation.php'; ?>

    <div class="max-w-full mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900">File Manager</h2>
                    <p class="text-gray-600 mt-1">Browse, edit, and manage your website files</p>
                </div>
                
                <!-- Search Bar -->
                <div class="flex-shrink-0">
                    <form method="GET" action="" class="relative">
                        <div class="relative">
                            <input type="text" 
                                   name="search" 
                                   value="<?= htmlspecialchars($searchQuery) ?>"
                                   placeholder="Search files and folders..."
                                   class="w-full sm:w-80 pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400"></i>
                            </div>
                            <?php if ($isSearching): ?>
                                <a href="?dir=<?= urlencode($currentDir) ?>" 
                                   class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-times"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                        <input type="hidden" name="dir" value="<?= htmlspecialchars($currentDir) ?>">
                    </form>
                </div>
            </div>
        </div>

        <?php if ($error): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <?php if ($success): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                <?= $success ?>
            </div>
        <?php endif; ?>

        <!-- Search Results Info -->
        <?php if ($isSearching): ?>
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-medium text-blue-900">
                            <i class="fas fa-search mr-2"></i>
                            Search Results for "<?= htmlspecialchars($searchQuery) ?>"
                        </h3>
                        <p class="text-blue-700 mt-1">
                            Found <?= count($searchResults) ?> <?= count($searchResults) === 1 ? 'result' : 'results' ?>
                            <?= count($searchResults) >= 100 ? ' (showing first 100)' : '' ?>
                        </p>
                    </div>
                    <a href="?dir=<?= urlencode($currentDir) ?>" class="text-blue-600 hover:text-blue-800">
                        <i class="fas fa-times mr-1"></i>Clear Search
                    </a>
                </div>
            </div>
        <?php else: ?>
            <!-- Breadcrumbs -->
            <div class="bg-white rounded-lg shadow p-4 mb-6">
                <nav class="flex items-center space-x-2 text-sm overflow-x-auto">
                    <i class="fas fa-folder-open text-blue-500 flex-shrink-0"></i>
                    <?php foreach (getBreadcrumbs($currentDir) as $index => $crumb): ?>
                        <?php if ($index > 0): ?>
                            <i class="fas fa-chevron-right text-gray-400 flex-shrink-0"></i>
                        <?php endif; ?>
                        <a href="?dir=<?= urlencode($crumb['path']) ?>" 
                           class="<?= $index == count(getBreadcrumbs($currentDir)) - 1 ? 'text-gray-900 font-medium' : 'text-blue-600 hover:text-blue-700' ?> whitespace-nowrap">
                            <?= htmlspecialchars($crumb['name']) ?>
                        </a>
                    <?php endforeach; ?>
                </nav>
            </div>
        <?php endif; ?>

        <?php if ($editingFile): ?>
            <div class="bg-white rounded-lg shadow mb-6">
                <div class="border-b border-gray-200 px-6 py-4">
                    <div class="flex items-center justify-between flex-wrap gap-4">
                        <h3 class="text-lg font-medium text-gray-900">
                            <i class="fas fa-edit mr-2"></i>Editing: <span class="file-name"><?= htmlspecialchars($editingFile) ?></span>
                        </h3>
                        <a href="?dir=<?= urlencode($currentDir) ?>" class="text-sm text-gray-600 hover:text-gray-900">
                            <i class="fas fa-times mr-1"></i>Close Editor
                        </a>
                    </div>
                </div>
                
                <form method="POST" action="" class="h-full">
                    <input type="hidden" name="action" value="save_file">
                    <input type="hidden" name="file_name" value="<?= htmlspecialchars($editingFile) ?>">
                    
                    <div class="p-6">
                        <div id="editor-container">
                            <div id="editor"></div>
                        </div>
                        <textarea name="file_content" id="file_content" class="hidden"><?= htmlspecialchars($fileContent) ?></textarea>
                    </div>
                    
                    <div class="border-t border-gray-200 px-6 py-4 flex flex-col sm:flex-row justify-between items-center gap-4">
                        <div class="text-sm text-gray-600">
                            File size: <?= formatFileSize(strlen($fileContent)) ?>
                        </div>
                        <div class="flex space-x-3">
                            <button type="button" onclick="resetEditor()" class="bg-gray-500 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-600">
                                Reset
                            </button>
                            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                                <i class="fas fa-save mr-2"></i>Save File
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        <?php else: ?>
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                <!-- Sidebar - Hide during search -->
                <?php if (!$isSearching): ?>
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow p-4 sticky top-6 space-y-4">
                        <h3 class="text-lg font-medium text-gray-900">Actions</h3>
                        
                        <!-- Create File -->
                        <form method="POST" action="">
                            <input type="hidden" name="action" value="create_file">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Create File</label>
                            <div class="flex">
                                <input type="text" name="new_file_name" placeholder="filename.php" class="flex-1 px-3 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm" required>
                                <button type="submit" class="bg-green-600 text-white px-3 py-2 rounded-r-md hover:bg-green-700 flex-shrink-0">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </form>
                        
                        <!-- Create Folder -->
                        <form method="POST" action="">
                            <input type="hidden" name="action" value="create_folder">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Create Folder</label>
                            <div class="flex">
                                <input type="text" name="new_folder_name" placeholder="folder-name" class="flex-1 px-3 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm" required>
                                <button type="submit" class="bg-blue-600 text-white px-3 py-2 rounded-r-md hover:bg-blue-700 flex-shrink-0">
                                    <i class="fas fa-folder-plus"></i>
                                </button>
                            </div>
                        </form>
                        
                        <!-- Upload Files -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Upload Files</label>
                            <div class="upload-area p-4 text-center cursor-pointer" onclick="document.getElementById('file-input').click()">
                                <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                                <p class="text-sm text-gray-600 mb-1">Click to select files</p>
                                <p class="text-xs text-gray-500">or drag and drop here</p>
                                <p class="text-xs text-gray-400 mt-1">Max: <?= formatFileSize($maxUploadSize) ?> per file</p>
                            </div>
                            
                            <form method="POST" action="" enctype="multipart/form-data" id="upload-form" class="hidden">
                                <input type="file" id="file-input" name="upload_files[]" multiple accept="<?= implode(',', array_map(fn($ext) => '.' . $ext, $allowedUploadExtensions)) ?>">
                            </form>
                            
                            <!-- Upload Progress -->
                            <div id="upload-progress" class="mt-2 hidden">
                                <div class="bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full upload-progress" style="width: 0%"></div>
                                </div>
                                <p class="text-xs text-gray-600 mt-1">Uploading...</p>
                            </div>
                        </div>
                        
                        <div class="border-t pt-4">
                            <h4 class="text-sm font-medium text-gray-900 mb-2">Current Directory</h4>
                            <p class="text-xs text-gray-600 break-all"><?= htmlspecialchars($currentPath) ?></p>
                            <p class="text-xs text-gray-500 mt-1"><?= count($dirContents) ?> items</p>
                        </div>
                        
                        <div class="border-t pt-4">
                            <h4 class="text-sm font-medium text-gray-900 mb-2">Allowed File Types</h4>
                            <div class="flex flex-wrap gap-1">
                                <?php foreach (array_slice($allowedUploadExtensions, 0, 10) as $ext): ?>
                                    <span class="inline-block bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs"><?= $ext ?></span>
                                <?php endforeach; ?>
                                <?php if (count($allowedUploadExtensions) > 10): ?>
                                    <span class="inline-block bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">+<?= count($allowedUploadExtensions) - 10 ?> more</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Main Content Area -->
                <div class="<?= $isSearching ? 'lg:col-span-4' : 'lg:col-span-3' ?>">
                    <div class="bg-white rounded-lg shadow">
                        <div class="border-b border-gray-200 px-6 py-4">
                            <h3 class="text-lg font-medium text-gray-900">
                                <?= $isSearching ? 'Search Results' : 'Files & Folders' ?>
                            </h3>
                        </div>
                        
                        <div class="divide-y divide-gray-200 custom-scrollbar" style="max-height: 70vh; overflow-y: auto;">
                            <?php if ($isSearching): ?>
                                <!-- Search Results -->
                                <?php if (empty($searchResults)): ?>
                                    <div class="p-6 text-center text-gray-500">
                                        <i class="fas fa-search text-4xl mb-4"></i>
                                        <p class="text-lg font-medium">No results found</p>
                                        <p class="text-sm">Try adjusting your search terms</p>
                                    </div>
                                <?php else: ?>
                                    <?php foreach ($searchResults as $item): ?>
                                        <div class="file-item px-6 py-4 flex items-center justify-between hover:bg-gray-50 transition-colors">
                                            <div class="flex items-center flex-1 min-w-0">
                                                <i class="<?= getFileIcon($item) ?> mr-3 flex-shrink-0"></i>
                                                <div class="flex-1 min-w-0">
                                                    <?php if ($item['type'] == 'directory'): ?>
                                                        <a href="?dir=<?= urlencode($item['directory']) ?>" 
                                                           class="text-blue-600 hover:text-blue-700 font-medium file-name">
                                                            <?= highlightSearchTerm($item['name'], $searchQuery) ?>
                                                        </a>
                                                    <?php else: ?>
                                                        <span class="text-gray-900 font-medium file-name">
                                                            <?= highlightSearchTerm($item['name'], $searchQuery) ?>
                                                        </span>
                                                    <?php endif; ?>
                                                    <div class="search-result-path">
                                                        <i class="fas fa-folder-open text-xs mr-1"></i>
                                                        <?= htmlspecialchars($item['directory'] === '.' ? 'Root' : $item['directory']) ?>
                                                    </div>
                                                    <div class="text-sm text-gray-500 mt-1">
                                                        <?php if ($item['type'] == 'file'): ?>
                                                            <?= formatFileSize($item['size']) ?> • 
                                                        <?php endif; ?>
                                                        <?= date('M j, Y H:i', $item['modified']) ?>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="flex items-center space-x-2 flex-shrink-0 file-actions">
                                                <?php if ($item['type'] == 'directory'): ?>
                                                    <a href="?dir=<?= urlencode($item['directory']) ?>" 
                                                       class="text-blue-600 hover:text-blue-700 text-sm px-2 py-1 rounded hover:bg-blue-50">
                                                        <i class="fas fa-folder-open mr-1"></i>Open
                                                    </a>
                                                <?php else: ?>
                                                    <?php if (in_array($item['extension'], $editableExtensions)): ?>
                                                        <a href="?dir=<?= urlencode($item['directory']) ?>&edit=<?= urlencode($item['name']) ?>" 
                                                           class="text-blue-600 hover:text-blue-700 text-sm px-2 py-1 rounded hover:bg-blue-50">
                                                            <i class="fas fa-edit mr-1"></i>Edit
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if (in_array($item['extension'], $imageExtensions)): ?>
                                                        <a href="../<?= $item['path'] ?>" target="_blank"
                                                           class="text-green-600 hover:text-green-700 text-sm px-2 py-1 rounded hover:bg-green-50">
                                                            <i class="fas fa-eye mr-1"></i>View
                                                        </a>
                                                    <?php endif; ?>
                                                    <a href="?dir=<?= urlencode($item['directory']) ?>" 
                                                       class="text-gray-600 hover:text-gray-700 text-sm px-2 py-1 rounded hover:bg-gray-50">
                                                        <i class="fas fa-folder mr-1"></i>Go to Folder
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            <?php else: ?>
                                <!-- Regular Directory Listing -->
                                <?php if (empty($dirContents)): ?>
                                    <div class="p-6 text-center text-gray-500">
                                        <i class="fas fa-folder-open text-4xl mb-4"></i>
                                        <p>This directory is empty</p>
                                    </div>
                                <?php else: ?>
                                    <?php foreach ($dirContents as $item): ?>
                                        <div class="file-item px-6 py-4 flex items-center justify-between hover:bg-gray-50 transition-colors">
                                            <div class="flex items-center flex-1 min-w-0">
                                                <i class="<?= getFileIcon($item) ?> mr-3 flex-shrink-0"></i>
                                                <div class="flex-1 min-w-0">
                                                    <?php if ($item['type'] == 'directory'): ?>
                                                        <a href="?dir=<?= urlencode($currentDir . ($currentDir ? '/' : '') . $item['name']) ?>" 
                                                           class="text-blue-600 hover:text-blue-700 font-medium file-name">
                                                            <?= htmlspecialchars($item['name']) ?>
                                                        </a>
                                                    <?php else: ?>
                                                        <span class="text-gray-900 font-medium file-name"><?= htmlspecialchars($item['name']) ?></span>
                                                    <?php endif; ?>
                                                    <div class="text-sm text-gray-500 mt-1">
                                                        <?php if ($item['type'] == 'file'): ?>
                                                            <?= formatFileSize($item['size']) ?> • 
                                                        <?php endif; ?>
                                                        <?= date('M j, Y H:i', $item['modified']) ?>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="flex items-center space-x-2 flex-shrink-0 file-actions">
                                                <?php if ($item['type'] == 'file'): ?>
                                                    <?php if (in_array($item['extension'], $editableExtensions)): ?>
                                                        <a href="?dir=<?= urlencode($currentDir) ?>&edit=<?= urlencode($item['name']) ?>" 
                                                           class="text-blue-600 hover:text-blue-700 text-sm px-2 py-1 rounded hover:bg-blue-50">
                                                            <i class="fas fa-edit mr-1"></i>Edit
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if (in_array($item['extension'], $imageExtensions)): ?>
                                                        <a href="../<?= $currentDir . ($currentDir ? '/' : '') . $item['name'] ?>" target="_blank"
                                                           class="text-green-600 hover:text-green-700 text-sm px-2 py-1 rounded hover:bg-green-50">
                                                            <i class="fas fa-eye mr-1"></i>View
                                                        </a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                
                                                <form method="POST" action="" class="inline" 
                                                      onsubmit="return confirm('Are you sure you want to delete <?= addslashes($item['name']) ?>?')">
                                                    <input type="hidden" name="action" value="delete_item">
                                                    <input type="hidden" name="item_name" value="<?= htmlspecialchars($item['name']) ?>">
                                                    <button type="submit" class="text-red-600 hover:text-red-700 text-sm px-2 py-1 rounded hover:bg-red-50">
                                                        <i class="fas fa-trash mr-1"></i>Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <script>
        // Search functionality
        const searchInput = document.querySelector('input[name="search"]');
        let searchTimeout;
        
        // Auto-submit search with debounce
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                if (this.value.length >= 2 || this.value.length === 0) {
                    this.form.submit();
                }
            }, 500);
        });
        
        // Search keyboard shortcuts
        document.addEventListener('keydown', function(e) {
            // Ctrl+F or Cmd+F to focus search
            if ((e.ctrlKey || e.metaKey) && e.key === 'f') {
                e.preventDefault();
                searchInput.focus();
                searchInput.select();
            }
            
            // Escape to clear search
            if (e.key === 'Escape' && searchInput === document.activeElement) {
                if (searchInput.value) {
                    searchInput.value = '';
                    searchInput.form.submit();
                }
            }
        });

        // File upload handling
        const fileInput = document.getElementById('file-input');
        const uploadForm = document.getElementById('upload-form');
        const uploadArea = document.querySelector('.upload-area');
        const uploadProgress = document.getElementById('upload-progress');
        
        // Handle file selection
        if (fileInput) {
            fileInput.addEventListener('change', function() {
                if (this.files.length > 0) {
                    uploadFiles(this.files);
                }
            });
        }
        
        // Drag and drop functionality
        if (uploadArea) {
            uploadArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                this.classList.add('dragover');
            });
            
            uploadArea.addEventListener('dragleave', function(e) {
                e.preventDefault();
                this.classList.remove('dragover');
            });
            
            uploadArea.addEventListener('drop', function(e) {
                e.preventDefault();
                this.classList.remove('dragover');
                
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    fileInput.files = files;
                    uploadFiles(files);
                }
            });
        }
        
        function uploadFiles(files) {
            const formData = new FormData();
            
            for (let i = 0; i < files.length; i++) {
                formData.append('upload_files[]', files[i]);
            }
            
            // Show progress
            if (uploadProgress) {
                uploadProgress.classList.remove('hidden');
                const progressBar = uploadProgress.querySelector('.upload-progress');
                
                // Create XMLHttpRequest for progress tracking
                const xhr = new XMLHttpRequest();
                
                xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                        const percentComplete = (e.loaded / e.total) * 100;
                        progressBar.style.width = percentComplete + '%';
                    }
                });
                
                xhr.addEventListener('load', function() {
                    uploadProgress.classList.add('hidden');
                    progressBar.style.width = '0%';
                    
                    // Reload page to show results
                    window.location.reload();
                });
                
                xhr.addEventListener('error', function() {
                    uploadProgress.classList.add('hidden');
                    progressBar.style.width = '0%';
                    alert('Upload failed. Please try again.');
                });
                
                xhr.open('POST', window.location.href);
                xhr.send(formData);
            }
        }
        
        // File validation
        function validateFile(file) {
            const allowedExtensions = <?= json_encode($allowedUploadExtensions) ?>;
            const maxSize = <?= $maxUploadSize ?>;
            
            const extension = file.name.split('.').pop().toLowerCase();
            
            if (!allowedExtensions.includes(extension)) {
                return `File type .${extension} is not allowed`;
            }
            
            if (file.size > maxSize) {
                return `File size exceeds <?= formatFileSize($maxUploadSize) ?>`;
            }
            
            return null;
        }
        
        // Validate files before upload
        if (fileInput) {
            fileInput.addEventListener('change', function() {
                const files = Array.from(this.files);
                let hasErrors = false;
                
                files.forEach(file => {
                    const error = validateFile(file);
                    if (error) {
                        alert(`${file.name}: ${error}`);
                        hasErrors = true;
                    }
                });
                
                if (hasErrors) {
                    this.value = '';
                    return;
                }
            });
        }
    </script>

    <?php if ($editingFile): ?>
    <script>
        let editor;
        let originalContent = <?= json_encode($fileContent) ?>;
        
        require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.44.0/min/vs' }});
        require(['vs/editor/editor.main'], function () {
            const extension = <?= json_encode(strtolower(pathinfo($editingFile, PATHINFO_EXTENSION))) ?>;
            let language = 'plaintext';
            
            // Map file extensions to Monaco languages
            const languageMap = {
                'php': 'php',
                'html': 'html',
                'css': 'css',
                'js': 'javascript',
                'json': 'json',
                'xml': 'xml',
                'sql': 'sql',
                'md': 'markdown'
            };
            
            if (languageMap[extension]) {
                language = languageMap[extension];
            }
            
            editor = monaco.editor.create(document.getElementById('editor'), {
                value: originalContent,
                language: language,
                theme: 'vs-dark',
                automaticLayout: true,
                minimap: { enabled: false },
                scrollBeyondLastLine: false,
                fontSize: 14,
                lineNumbers: 'on',
                wordWrap: 'on',
                wordWrapColumn: 120,
                scrollbar: {
                    horizontal: 'auto',
                    vertical: 'auto',
                    horizontalScrollbarSize: 10,
                    verticalScrollbarSize: 10
                },
                tabSize: 4,
                insertSpaces: true,
                detectIndentation: true,
                renderLineHighlight: 'gutter',
                renderWhitespace: 'boundary',
                smoothScrolling: true,
                columnSelection: false,
                mouseWheelZoom: true,
                dimension: {
                    width: 0,
                    height: 0
                }
            });
            
            // Update hidden textarea when editor content changes
            editor.onDidChangeModelContent(() => {
                document.getElementById('file_content').value = editor.getValue();
            });
            
            // Handle window resize
            window.addEventListener('resize', () => {
                editor.layout();
            });
            
            // Force initial layout
            setTimeout(() => {
                editor.layout();
            }, 100);
        });
        
        function resetEditor() {
            if (editor && confirm('Are you sure you want to reset all changes?')) {
                editor.setValue(originalContent);
                editor.focus();
            }
        }
        
        // Keyboard shortcuts
        document.addEventListener('keydown', function(e) {
            if (e.ctrlKey && e.key === 's') {
                e.preventDefault();
                document.querySelector('form[method="POST"]').submit();
            }
            
            if (e.key === 'Escape' && editor) {
                editor.focus();
            }
        });
        
        // Show save indicator when content is modified
        let isModified = false;
        if (typeof editor !== 'undefined') {
            editor.onDidChangeModelContent(() => {
                isModified = editor.getValue() !== originalContent;
                updateSaveButton();
            });
        }
        
        function updateSaveButton() {
            const saveBtn = document.querySelector('button[type="submit"]');
            if (saveBtn) {
                if (isModified) {
                    saveBtn.classList.add('bg-orange-600', 'hover:bg-orange-700');
                    saveBtn.classList.remove('bg-blue-600', 'hover:bg-blue-700');
                    saveBtn.innerHTML = '<i class="fas fa-save mr-2"></i>Save Changes';
                } else {
                    saveBtn.classList.remove('bg-orange-600', 'hover:bg-orange-700');
                    saveBtn.classList.add('bg-blue-600', 'hover:bg-blue-700');
                    saveBtn.innerHTML = '<i class="fas fa-save mr-2"></i>Save File';
                }
            }
        }
    </script>
    <?php endif; ?>
</body>
</html>