<?php
require_once 'admin/config/database.php';

// Get the slug from URL parameter
$slug = $_GET['slug'] ?? '';

if (empty($slug)) {
    http_response_code(404);
    include '404.php';
    exit;
}

// Fetch page from database
$db = getDB();
$stmt = $db->prepare("SELECT * FROM pages WHERE slug = ? AND status = 'active'");
$stmt->execute([$slug]);
$page = $stmt->fetch();

if (!$page) {
    http_response_code(404);
    include '404.php';
    exit;
}

// Set meta tags
$meta_title = $page['meta_title'] ?: $page['title'];
$meta_description = $page['meta_description'] ?: '';
$meta_keywords = $page['meta_keywords'] ?: '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($meta_title) ?> - OptionPay</title>
  
  <?php if ($meta_description): ?>
  <meta name="description" content="<?= htmlspecialchars($meta_description) ?>">
  <?php endif; ?>
  
  <?php if ($meta_keywords): ?>
  <meta name="keywords" content="<?= htmlspecialchars($meta_keywords) ?>">
  <?php endif; ?>
  
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="./assets/css/style.css" rel="stylesheet">
  <link href="./assets/css/header.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KQCF4VTL');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body class="bg-white font-inter">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQCF4VTL"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php include_once('includes/header.php'); ?>

  <main>
    <section class="relative overflow-hidden py-10 pt-20 md:pt-24 md:py-10 bg-white">
      <!-- Main Content -->
      <div class="container mx-auto px-4 sm:px-6 relative z-20">
        <div class="max-w-4xl mx-auto text-center mb-8 md:mb-12 lg:mb-16">
          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6 text-gray-900 leading-tight"
            data-aos="fade-up" data-aos-duration="800" data-aos-mirror="true">
            <span class="text-secondary-500"><?= htmlspecialchars($page['title']) ?></span>
          </h1>
        </div>
      </div>
    </section>

    <section class="py-10 px-4 md:px-8 lg:px-16 bg-white">
      <div class="max-w-4xl mx-auto">
        <div class="bg-white animate-fade-in-up">
          <div class="text-justify text-gray-800 leading-relaxed space-y-6">
            <?= $page['content'] ?>
          </div>

          <p class="text-center mt-8 text-sm text-gray-600">
            <a href="about-us" class="hover:underline text-blue-600">About Us</a> |
            <a href="privacy-policy" class="hover:underline text-blue-600">Privacy Policy</a> |
            <a href="cancellation-&-refund-policy" class="hover:underline text-blue-600">Refund &amp; Cancellation Policy</a> |
            Customer Care No. <a href="tel:+91-9201010140" class="hover:underline text-blue-600">+91-9201010140</a> |
            <a href="tel:+91-9201010150" class="hover:underline text-blue-600">+91-9201010150</a>
          </p>
        </div>
      </div>
    </section>

  </main>
  <?php include_once('includes/footer.php'); ?>

  <script src="./assets/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@3"></script>
</body>

</html>