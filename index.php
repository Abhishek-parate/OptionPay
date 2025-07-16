<?php
require_once 'admin/config/database.php';

// Get all homepage sections
// index.php
$db = getDB();
$stmt = $db->query("SELECT * FROM homepage_settings");
$sections = [];
while ($row = $stmt->fetch()) {
    $sections[$row['section_name']] = json_decode($row['section_data'], true);
}

// Extract SEO data
$seo = $sections['seo'] ?? [];
$hero = $sections['hero'] ?? [];
$partners = $sections['trusted_partners'] ?? [];
$impact = $sections['impact'] ?? [];
$products = $sections['products'] ?? [];
$why_partner = $sections['why_partner'] ?? [];
$getting_started = $sections['getting_started'] ?? [];
$join_section = $sections['join_section'] ?? [];
$popup = $sections['popup'] ?? [];
?>
<?php
// Start session before any output
session_start();

// Include necessary files
require_once 'admin/config/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($seo['title'] ?? 'OptionPay: White Label Fintech Platform in India') ?></title>
  <meta name="description" content="<?= htmlspecialchars($seo['description'] ?? 'Launch fintech services in 7 days with OptionPay\'s white label platform. Serve millions in India\'s tier 2 & 3 cities. Join 1000+ businesses today.') ?>">
  <?php if (!empty($seo['keywords'])): ?>
  <meta name="keywords" content="<?= htmlspecialchars($seo['keywords']) ?>">
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

  <style>
    /* Popup Styles */
    .popup-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      padding: 1rem;
    }

    .popup-overlay.show {
      opacity: 1;
      visibility: visible;
    }

    .popup-content {
      position: relative;
      max-width: 500px;
      width: 100%;
      border-radius: 12px;
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
      transform: scale(0.9) translateY(20px);
      transition: all 0.3s ease;
      overflow: hidden;
    }

    .popup-overlay.show .popup-content {
      transform: scale(1) translateY(0);
    }

    .popup-close {
      position: absolute;
      top: 1rem;
      right: 1rem;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.1);
      border: none;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.2s ease;
      z-index: 10;
    }

    .popup-close:hover {
      background-color: rgba(255, 255, 255, 0.2);
      transform: scale(1.1);
    }

    .popup-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .popup-cta {
      display: inline-block;
      background-color: #f97316;
      color: white;
      padding: 12px 24px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.2s ease;
      border: none;
      cursor: pointer;
    }

    .popup-cta:hover {
      background-color: #ea580c;
      transform: translateY(-1px);
      box-shadow: 0 4px 12px rgba(249, 115, 22, 0.4);
    }

    @media (max-width: 768px) {
      .popup-content {
        margin: 1rem;
        max-width: calc(100% - 2rem);
      }
    }
  </style>
</head>

<body class="bg-white font-inter">

 

  <?php include_once('includes/header.php'); ?>

  <!-- Popup Section -->
  <?php if (($popup['enabled'] ?? false) && !empty($popup['title']) && !empty($popup['content'])): ?>
  <div id="homepage-popup" class="popup-overlay">
    <div class="popup-content <?= htmlspecialchars($popup['bg_color'] ?? 'bg-white') ?> <?= htmlspecialchars($popup['text_color'] ?? 'text-gray-900') ?>">
      <?php if ($popup['close_button'] ?? true): ?>
        <button class="popup-close" onclick="closePopup()">
          <i class="fas fa-times <?= htmlspecialchars($popup['text_color'] ?? 'text-gray-900') ?>"></i>
        </button>
      <?php endif; ?>
      
      <?php if (!empty($popup['image'])): ?>
        <img src="<?= htmlspecialchars($popup['image']) ?>" alt="Popup Image" class="popup-image">
      <?php endif; ?>
      
      <div class="p-6">
        <?php if (!empty($popup['title'])): ?>
          <h3 class="text-2xl font-bold mb-4"><?= htmlspecialchars($popup['title']) ?></h3>
        <?php endif; ?>
        
        <?php if (!empty($popup['content'])): ?>
          <div class="mb-6 text-base leading-relaxed">
            <?= $popup['content'] ?>
          </div>
        <?php endif; ?>
        
        <?php if (!empty($popup['cta_text'])): ?>
          <div class="flex flex-col sm:flex-row gap-3">
            <a href="<?= htmlspecialchars($popup['cta_link'] ?? '#') ?>" class="popup-cta text-center">
              <?= htmlspecialchars($popup['cta_text']) ?>
              <i class="fas fa-arrow-right ml-2"></i>
            </a>
            <button onclick="closePopup()" class="text-gray-500 hover:text-gray-700 px-4 py-2 text-sm transition-colors">
              Maybe Later
            </button>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <main>

    <!-- Hero Section -->
    <section class="relative overflow-hidden py-10 pt-16 md:pt-24 md:py-12 bg-white">
      <div class="container mx-auto px-4 sm:px-6 relative z-20">
        <!-- Hero Text with AOS animations -->
        <div class="max-w-4xl mx-auto text-center mb-8 md:mb-12 lg:mb-16 mt-2 md:mt-8">
          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6 text-gray-900 leading-tight"
            data-aos="fade-up" data-aos-duration="800" data-aos-mirror="true">
            <?php
            $title = $hero['title'] ?? 'Empowering <span class="text-secondary-500">MSMEs</span> to Deliver<br class="hidden lg:block"><span class="text-secondary-500">Financial</span> Freedom';
            echo $title;
            ?>
          </h1>
          <p class="text-base sm:text-lg md:text-xl mb-6 md:mb-8 text-black max-w-3xl mx-auto"
            data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-mirror="true">
            <?= htmlspecialchars($hero['subtitle'] ?? 'Join 1000+ businesses providing essential financial services to 1 lakh+ partners across India') ?>
          </p>
          <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-mirror="true">
            <a href="<?= htmlspecialchars($hero['cta_link'] ?? 'book-a-demo') ?>"
              class="inline-block bg-secondary-500 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-md text-lg font-medium hover:bg-secondary-600 transition-all duration-300 hover:shadow-lg hover:scale-105 transform z-50 relative">
              <?= htmlspecialchars($hero['cta_text'] ?? 'Start Your Journey Today') ?>
            </a>
          </div>
        </div>

        <!-- Dashboard Image with AOS animation -->
        <div class="relative max-w-5xl mx-auto overflow-hidden z-10" data-aos="zoom-in"
          data-aos-duration="1000" data-aos-delay="300" data-aos-mirror="true">
          <div class="relative z-20">
            <img src="<?= htmlspecialchars($hero['dashboard_image'] ?? './assets/images/home/dashboard.png') ?>" alt="Dashboard" class="w-full h-auto" />
            <div class="absolute bottom-0 left-0 right-0 h-2/5 bg-gradient-to-t from-white to-transparent">
            </div>
          </div>
        </div>

        <!-- Trusted By Section with Infinite Scroll -->
        <div class="mt-12 md:mt-16 text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400"
          data-aos-mirror="true">
          <p class="text-gray-700 font-bold text-3xl my-2"><?= htmlspecialchars($partners['title'] ?? 'Trusted Partnerships') ?></p>
          <p class="text-gray-600 text-lg mb-6 md:mb-8"><?= htmlspecialchars($partners['subtitle'] ?? 'Backed by India\'s Leading Financial Institutions') ?></p>

          <!-- Infinite Scroll Container -->
          <div class="relative overflow-hidden w-full">
            <div class="logos-container flex whitespace-nowrap">
              <div class="logos-slide animate-scroll inline-flex items-center">
                <?php if (!empty($partners['logos'])): ?>
                  <?php foreach ($partners['logos'] as $logo): ?>
                    <img src="<?= htmlspecialchars($logo) ?>" alt="Partner Logo" class="h-8 md:h-10 w-auto mx-8" />
                  <?php endforeach; ?>
                  <!-- Duplicated for seamless loop -->
                  <?php foreach ($partners['logos'] as $logo): ?>
                    <img src="<?= htmlspecialchars($logo) ?>" alt="Partner Logo" class="h-8 md:h-10 w-auto mx-8" />
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Impact Section -->
    <section class="py-10 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-col lg:flex-row gap-3 w-full">

          <!-- Left Panel - Our Impact with Rocket -->
          <div data-aos="fade-up" data-aos-duration="800"
            class="w-full lg:w-2/5 bg-gradient-to-br from-secondary-600 to-secondary-300 rounded-xl p-6 md:p-10 text-white relative overflow-hidden">
            <div class="max-w-md relative z-10 space-y-4">
              <h3 class="text-xl font-bold" data-aos="fade-right" data-aos-delay="100">
                <?= htmlspecialchars($impact['left_panel']['title'] ?? 'Our Impact') ?>
              </h3>
              <h4 class="text-md font-medium w-full md:w-4/5" data-aos="fade-right" data-aos-delay="200">
                <?= htmlspecialchars($impact['left_panel']['subtitle'] ?? 'Making Financial Services Accessible Since 2017') ?>
              </h4>
              <p class="text-white/90 w-[70%] md:w-[70%] sm:w-[100%] aos-init aos-animate"
                data-aos="fade-right" data-aos-delay="300">
                <?= htmlspecialchars($impact['left_panel']['description'] ?? 'From Banking services to Wealth management, we\'ve been making essential services accessible since 2017. Our network serves 1 crore+ customers through tech-enabled financial solutions.') ?>
              </p>
            </div>

            <!-- Rocket Illustration -->
            <div class="absolute -right-10 sm:-right-20 bottom-0 h-48 sm:h-64 w-48 sm:w-64 opacity-90"
              data-aos="zoom-in" data-aos-delay="400">
              <img src="<?= htmlspecialchars($impact['left_panel']['rocket_image'] ?? 'assets/images/home/svg/rocket.svg') ?>"
                alt="Rocket illustration" loading="lazy" decoding="async" />
            </div>
          </div>

          <!-- Right Panel - Statistics with Starry Background -->
          <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="200"
            class="w-full lg:w-3/5 bg-gradient-to-br from-primary-800 to-primary-600 rounded-xl p-6 md:p-10 text-white relative overflow-hidden lg:mt-0">
            <!-- Stars Background SVG -->
            <div class="absolute z-0 opacity-30 right-0 max-w-full pointer-events-none">
              <img src="<?= htmlspecialchars($impact['right_panel']['bg_pattern'] ?? 'assets/images/home/svg/white-bg-bot.svg') ?>"
                alt="Background pattern" class="w-full h-auto" loading="lazy" decoding="async" />
            </div>

            <div class="relative z-10 mb-6 md:mb-8 md:w-96 space-y-6">
              <h4 class="text-xl font-semibold" data-aos="fade-left" data-aos-delay="100">
                <?= htmlspecialchars($impact['right_panel']['title'] ?? 'Making Financial Services Accessible Since 2017') ?>
              </h4>

              <div class="grid grid-cols-2 gap-6">
                <?php if (!empty($impact['right_panel']['stats'])): ?>
                  <?php foreach ($impact['right_panel']['stats'] as $stat): ?>
                    <div class="flex flex-col">
                      <p class="text-2xl font-bold"><?= htmlspecialchars($stat['number']) ?></p>
                      <p class="text-blue-200/70 text-sm"><?= htmlspecialchars($stat['label']) ?></p>
                    </div>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
            </div>

            <!-- CTA Button -->
            <a href="<?= htmlspecialchars($impact['right_panel']['cta_link'] ?? 'book-a-demo') ?>"
              data-aos="fade-up" data-aos-delay="600"
              class="inline-flex items-center bg-secondary-500 hover:bg-secondary-600 text-white px-5 py-2 md:px-6 md:py-3 rounded-lg font-semibold transition-all">
              <?= htmlspecialchars($impact['right_panel']['cta_text'] ?? 'Join today for free') ?>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>

            <!-- Decorative Red Line/Graph -->
            <div class="absolute right-0 bottom-0 max-w-[50%] sm:max-w-full" data-aos="fade-up" data-aos-delay="700">
              <img src="<?= htmlspecialchars($impact['right_panel']['graph_image'] ?? 'assets/images/home/svg/red-graph.svg') ?>"
                alt="Graph illustration" class="w-full h-auto" loading="lazy" decoding="async" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Products Section -->
    <section class="py-10 bg-white px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-primary-800 mb-4"><?= htmlspecialchars($products['title'] ?? 'Our Product/Solutions') ?></h2>
        <p class="text-lg text-gray-700 max-w-3xl mx-auto"><?= htmlspecialchars($products['subtitle'] ?? 'Building trust through partnerships that last Creating a network that serves millions') ?></p>
      </div>
      
      <div class="max-w-7xl mx-auto">
        <div class="flex overflow-x-auto lg:overflow-x-visible scrollbar-hide lg:justify-center">
          <div class="flex lg:grid lg:grid-cols-5 lg:w-full gap-4 lg:gap-6 p-2 lg:mx-0">
            <?php if (!empty($products['products'])): ?>
              <?php foreach ($products['products'] as $index => $product): ?>
                <div class="product-tab <?= $product['active'] ? 'bg-secondary-500' : 'bg-white border border-gray-200' ?> rounded-lg shadow-md px-6 py-4 flex flex-col items-center justify-center flex-shrink-0 w-40 sm:w-auto h-24 lg:h-auto transform transition-all duration-300 hover:shadow-lg hover:-translate-y-1 overflow-hidden cursor-pointer" onclick="showProduct(<?= $index ?>)">
                  <div class="flex justify-center items-center mb-4">
                    <i class="<?= htmlspecialchars($product['icon']) ?> text-2xl <?= $product['active'] ? 'text-white' : 'text-primary-500' ?>"></i>
                  </div>
                  <h3 class="font-semibold text-sm <?= $product['active'] ? 'text-white' : 'text-primary-600' ?> text-center truncate w-full"><?= htmlspecialchars($product['name']) ?></h3>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <!-- Product Content -->
      <div>
        <?php if (!empty($products['products'])): ?>
          <?php foreach ($products['products'] as $index => $product): ?>
            <div id="product-<?= $index ?>" class="product-content max-w-7xl mx-auto py-4 animate-fade-in <?= !$product['active'] ? 'hidden' : '' ?>">
              <div class="rounded-xl overflow-hidden bg-secondary-100 shadow-md">
                <div class="grid grid-cols-1 md:grid-cols-2">
                  <div class="p-8 md:p-12">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4"><?= htmlspecialchars($product['title']) ?></h2>
                    <p class="text-gray-700 mb-4"><?= htmlspecialchars($product['description']) ?></p>

                    <div class="space-y-4">
                      <?php if (!empty($product['features'])): ?>
                        <?php foreach ($product['features'] as $feature): ?>
                          <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                              <div class="w-5 h-5 rounded-full bg-primary-600 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                              </div>
                            </div>
                            <span class="ml-3 text-gray-700 font-medium"><?= htmlspecialchars($feature) ?></span>
                          </div>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="relative h-auto md:h-auto">
                    <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['title']) ?>"
                      class="w-full h-auto object-contain md:object-contain md:absolute md:bottom-0 md:right-0 lg:bottom-0" />
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </section>

    <!-- Why Partner Section -->
    <section class="relative py-10 overflow-hidden bg-white">
      <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
          <div class="text-center mb-8 md:mb-12" data-aos="fade-up" data-aos-duration="800">
            <h2 class="text-3xl md:text-4xl font-bold mb-3 md:mb-4">
              <span class="text-primary-800">Why</span>
              <span class="text-secondary-500">Partner</span>
              <span class="text-primary-800">With Us</span>
            </h2>
            <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto">
              <?= htmlspecialchars($why_partner['subtitle'] ?? 'Building trust through partnerships that last. Creating a network that serves millions.') ?>
            </p>
          </div>

          <!-- Feature Cards Grid -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
            <?php if (!empty($why_partner['features'])): ?>
              <?php foreach ($why_partner['features'] as $index => $feature): ?>
                <div class="<?= htmlspecialchars($feature['bg_color']) ?> rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105 flex flex-col"
                  data-aos="fade-up" data-aos-duration="800" data-aos-delay="<?= ($index + 1) * 100 ?>">
                  <div class="p-4 text-white">
                    <h3 class="font-semibold text-xl mb-2 mt-2"><?= htmlspecialchars($feature['title']) ?></h3>
                    <p class="text-sm"><?= htmlspecialchars($feature['description']) ?></p>
                  </div>
                  <div class="h-48 overflow-hidden">
                    <img src="<?= htmlspecialchars($feature['image']) ?>" alt="<?= htmlspecialchars($feature['title']) ?>" class="w-full object-cover" />
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Getting Started Section -->
    <section class="bg-gradient-to-r from-primary-800 to-primary-600 py-16 text-white overflow-hidden">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4" data-aos="fade-down" data-aos-duration="800">
          <?= htmlspecialchars($getting_started['title'] ?? 'Getting Started') ?>
        </h2>
        <p class="text-lg text-blue-100 mb-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
          <?= htmlspecialchars($getting_started['subtitle'] ?? 'Three Simple Steps to Join:') ?>
        </p>

        <div class="flex flex-col md:flex-row items-center justify-center md:space-x-3 lg:space-x-8 mb-12">
          <?php if (!empty($getting_started['steps'])): ?>
            <?php foreach ($getting_started['steps'] as $index => $step): ?>
              <!-- Step -->
              <div class="flex flex-col items-center mb-8 md:mb-0" data-aos="fade-<?= $index === 0 ? 'right' : ($index === 2 ? 'left' : 'up') ?>" data-aos-duration="1000" data-aos-delay="<?= ($index + 2) * 100 ?>">
                <div class="bg-secondary-500 rounded-lg p-4 mb-4 w-16 h-16 flex items-center justify-center transform transition-transform hover:scale-110"
                  data-aos="zoom-in" data-aos-delay="<?= ($index + 3) * 100 ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= htmlspecialchars($step['icon']) ?>" />
                  </svg>
                </div>
                <h3 class="text-xl font-bold mb-2" data-aos="fade-up" data-aos-delay="<?= ($index + 4) * 100 ?>"><?= htmlspecialchars($step['title']) ?></h3>
                <p class="text-blue-100 text-center" data-aos="fade-up" data-aos-delay="<?= ($index + 4) * 100 + 50 ?>"><?= htmlspecialchars($step['description']) ?></p>
              </div>

              <!-- Arrow (between steps) -->
              <?php if ($index < count($getting_started['steps']) - 1): ?>
                <div class="hidden md:block" data-aos="fade-in" data-aos-delay="<?= ($index + 3) * 100 ?>" data-aos-duration="1200">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white opacity-70" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                  </svg>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>

        <!-- CTA Button -->
        <div class="flex justify-center" data-aos="zoom-in" data-aos-delay="800" data-aos-duration="1000">
          <a href="<?= htmlspecialchars($getting_started['cta_link'] ?? 'book-a-demo') ?>"
            class="bg-secondary-500 hover:bg-secondary-600 text-white px-8 py-3 rounded-lg font-medium inline-flex items-center transition-all transform hover:scale-105 hover:shadow-lg">
            <?= htmlspecialchars($getting_started['cta_text'] ?? 'Begin now') ?>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </section>

    <!-- Join Section with Dark Blue Background -->
    <section class="relative py-10 px-4 sm:px-8 md:px-6 lg:px-20">
      <div class="container mx-auto">
        <!-- Join Panel with Starry Background -->
        <div class="bg-gradient-to-br from-primary-700 to-primary-600 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
          data-aos="fade-up" data-aos-duration="1000">

          <!-- Stars Background SVG -->
          <div class="absolute z-0 opacity-30 right-0">
            <img src="<?= htmlspecialchars($join_section['bg_pattern'] ?? 'assets/images/home/svg/white-bg-dot-icon.svg') ?>" alt="background dots"
              class="w-full h-full object-cover">
          </div>

          <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-3 sm:mb-4 relative z-10"
              data-aos="fade-up" data-aos-delay="200">
              <?= htmlspecialchars($join_section['title'] ?? 'Join OptionPay Today') ?>
            </h1>

            <p class="text-base sm:text-lg text-gray-300 relative z-10" data-aos="fade-up" data-aos-delay="300">
              <?= htmlspecialchars($join_section['subtitle'] ?? 'Start for free — upgrade anytime.') ?>
            </p>

            <div class="relative z-10" data-aos="fade-up" data-aos-delay="400">
              <p class="text-gray-300 mb-4 sm:mb-6">
                <a href="<?= htmlspecialchars($join_section['contact_link'] ?? 'contact-us') ?>" class="underline hover:text-white transition">
                  <?= htmlspecialchars($join_section['contact_text'] ?? 'Joining as an organization? Contact Sales') ?>
                </a>
              </p>

              <a href="<?= htmlspecialchars($join_section['cta_link'] ?? 'book-a-demo') ?>"
                class="inline-flex items-center bg-secondary-500 hover:bg-secondary-600 text-white px-5 sm:px-6 py-2 sm:py-3 rounded-lg font-semibold transition-all transform hover:scale-105"
                data-aos="zoom-in" data-aos-delay="500">
                <?= htmlspecialchars($join_section['cta_text'] ?? 'Sign up free') ?><i class="fa-solid fa-arrow-right text-white ms-2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include_once('includes/footer.php'); ?>

  <script src="./assets/js/home.js"></script>
  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/header.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  
  <script>
    // Initialize AOS
    AOS.init();

    // Popup functionality
    <?php if (($popup['enabled'] ?? false) && !empty($popup['title']) && !empty($popup['content'])): ?>
    function showPopup() {
      const popup = document.getElementById('homepage-popup');
      if (popup) {
        popup.classList.add('show');
        document.body.style.overflow = 'hidden';
        
        // Track popup shown
        if (typeof gtag !== 'undefined') {
          gtag('event', 'popup_shown', {
            'event_category': 'engagement',
            'event_label': '<?= htmlspecialchars($popup['title']) ?>'
          });
        }
      }
    }

    function closePopup() {
      const popup = document.getElementById('homepage-popup');
      if (popup) {
        popup.classList.remove('show');
        document.body.style.overflow = '';
        
        // Set cookie to prevent showing again for 24 hours
        const expiryDate = new Date();
        expiryDate.setTime(expiryDate.getTime() + (24 * 60 * 60 * 1000)); // 24 hours
        document.cookie = `popup_closed=true; expires=${expiryDate.toUTCString()}; path=/`;
        
        // Track popup closed
        if (typeof gtag !== 'undefined') {
          gtag('event', 'popup_closed', {
            'event_category': 'engagement',
            'event_label': '<?= htmlspecialchars($popup['title']) ?>'
          });
        }
      }
    }

    // Check if popup should be shown
    function shouldShowPopup() {
      // Check if popup was already closed today
      const cookies = document.cookie.split(';');
      for (let cookie of cookies) {
        const [name, value] = cookie.trim().split('=');
        if (name === 'popup_closed' && value === 'true') {
          return false;
        }
      }
      return true;
    }

    // Show popup after delay
    if (shouldShowPopup()) {
      setTimeout(() => {
        showPopup();
      }, <?= intval($popup['show_delay'] ?? 3) * 1000 ?>);
    }

    // Close popup when clicking overlay (if enabled)
    <?php if ($popup['overlay_close'] ?? true): ?>
    document.getElementById('homepage-popup').addEventListener('click', function(e) {
      if (e.target === this) {
        closePopup();
      }
    });
    <?php endif; ?>

    // Close popup with Escape key
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') {
        closePopup();
      }
    });
    <?php endif; ?>

    // Product tabs functionality
    function showProduct(index) {
      // Hide all product contents
      document.querySelectorAll('.product-content').forEach(content => {
        content.classList.add('hidden');
      });
      
      // Show selected product content
      document.getElementById('product-' + index).classList.remove('hidden');
      
      // Update tab styles
      document.querySelectorAll('.product-tab').forEach((tab, i) => {
        if (i === index) {
          tab.classList.remove('bg-white', 'border', 'border-gray-200');
          tab.classList.add('bg-secondary-500');
          tab.querySelector('i').classList.remove('text-primary-500');
          tab.querySelector('i').classList.add('text-white');
          tab.querySelector('h3').classList.remove('text-primary-600');
          tab.querySelector('h3').classList.add('text-white');
        } else {
          tab.classList.remove('bg-secondary-500');
          tab.classList.add('bg-white', 'border', 'border-gray-200');
          tab.querySelector('i').classList.remove('text-white');
          tab.querySelector('i').classList.add('text-primary-500');
          tab.querySelector('h3').classList.remove('text-white');
          tab.querySelector('h3').classList.add('text-primary-600');
        }
      });
    }

    // Blog carousel functionality
    let currentSlide = 0;
    const slides = document.querySelectorAll('#blog-carousel > div');
    const totalSlides = slides.length - 2; // Adjust for visible slides
    
    function updateCarousel() {
      const carousel = document.getElementById('blog-carousel');
      if (carousel && slides.length > 0) {
        const slideWidth = slides[0].offsetWidth + 24; // width + gap
        carousel.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
        
        // Update indicators
        document.querySelectorAll('.indicator-btn').forEach((btn, index) => {
          if (index === currentSlide) {
            btn.classList.remove('w-2', 'h-2', 'bg-gray-300', 'rounded-full');
            btn.classList.add('w-8', 'h-1', 'bg-secondary-500', 'rounded');
          } else {
            btn.classList.remove('w-8', 'h-1', 'bg-secondary-500', 'rounded');
            btn.classList.add('w-2', 'h-2', 'bg-gray-300', 'rounded-full');
          }
        });
        
        // Update button states
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        if (prevBtn) prevBtn.disabled = currentSlide === 0;
        if (nextBtn) nextBtn.disabled = currentSlide >= totalSlides;
      }
    }

    // Navigation buttons
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    
    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        if (currentSlide > 0) {
          currentSlide--;
          updateCarousel();
        }
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        if (currentSlide < totalSlides) {
          currentSlide++;
          updateCarousel();
        }
      });
    }

    // Indicator buttons
    document.querySelectorAll('.indicator-btn').forEach((btn, index) => {
      btn.addEventListener('click', () => {
        currentSlide = index;
        updateCarousel();
      });
    });

    // Initialize carousel
    updateCarousel();

    // Auto-play carousel
    if (slides.length > 0) {
      setInterval(() => {
        if (currentSlide < totalSlides) {
          currentSlide++;
        } else {
          currentSlide = 0;
        }
        updateCarousel();
      }, 5000);
    }
  </script>
</body>

</html>