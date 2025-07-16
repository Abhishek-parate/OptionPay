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
  <title>Insurance Services Platform | OptionPay</title>
  <meta name="description" content="Become an insurance agent with OptionPay. Offer motor, health, and life insurance to customers through our digital platform.">
  <meta name="keywords" content="insurance API, OptionPay">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="./assets/css/style.css" rel="stylesheet">
  <link href="./assets/css/header.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@3"></script>
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

 

  <?php include_once('includes/header.php'); ?>


  <main class="overflow-hidden">
    <section class="relative overflow-hidden bg-white py-6 sm:py-8 md:py-10">

      
     

      <div class="max-w-7xl mx-auto">
        <div class="rounded-xl overflow-hidden">
          <div class="flex flex-col items-center text-center">
            <!-- Left Content - Services List -->
            <div class="p-8 md:p-12  max-w-3xl">
              <h1 class="text-3xl md:text-5xl font-bold text-secondary-500 mt-3">Empower Your Business</h1>
              <h1 class="text-3xl md:text-5xl font-bold text-secondary-500 mb-4">With Insurance Solutions</h1>
              <p class="text-black mb-8">Offer comprehensive insurance services as part of your business offerings.</p>

              <a href="book-a-demo"
                class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md mb-4">
                Start Your Insurance Business
              </a>

              <div class="relative w-full max-w-4xl mx-auto ">
                <div class="relative z-20">
                  <img src="assets/images/insurance-platform-service/banner.png" alt="Dashboard" />

                </div>
              </div>
            </div>

            <!-- Main Dashboard Image -->

          </div>
        </div>
      </div>
      <div class="absolute bottom-0 left-0 right-0 h-2/5 bg-gradient-to-t from-primary-600 to-transparent"></div>

    </section>

    <!-- hero section ends -->

    <!-- Banking Overview Section with Split Background -->
    <section class="relative py-10">
      <!-- Top background - light blue -->
      <div class="absolute top-0 left-0 right-0 h-[60%] bg-secondary-100"></div>
      <!-- Bottom background - white -->
      <div class="absolute bottom-0 left-0 right-0 h-[40%] bg-white"></div>

      <!-- Content -->
      <div class="relative container mx-auto max-w-6xl px-4">
        <!-- Section Header -->
        <div class="text-center mb-12 z-10 relative" data-aos="fade-up">
          <h2 class="text-3xl md:text-4xl font-bold text-primary-800 mb-6">Overview</h2>
          <p class="text-black max-w-4xl mx-auto text-center leading-relaxed px-4">
            OptionPay's Insurance Platform provides businesses with the ability to integrate a variety of
            insurance services, including health, motor, life, and specialty coverage. With tools for
            digital policy management and claims processing, businesses can deliver a seamless insurance
            experience to their customers.
          </p>
        </div>

        <!-- Feature Cards positioned to straddle the boundary -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12 relative" style="top: calc(60% - 12rem);">
          <!-- Feature 1 -->
          <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100"
            data-aos="fade-up"
            data-aos-delay="100">
            <div class="flex items-start text-center">
              <p class="text-gray-600">
                Multi-product insurance offerings through a unified platform.
              </p>
            </div>
          </div>

          <!-- Feature 2 -->
          <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100"
            data-aos="fade-up"
            data-aos-delay="200">
            <div class="flex items-start text-center ">
              <p class="text-gray-600">
                Real-time policy issuance and claims tracking.
              </p>
            </div>
          </div>

          <!-- Feature 3 -->
          <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100"
            data-aos="fade-up"
            data-aos-delay="300">
            <div class="flex items-start text-center">
              <p class="text-gray-600">
                End-to-end support for managing policies and customer inquiries.
              </p>
            </div>
          </div>
        </div>

        <!-- CTA Button -->
        <div class="text-center relative" style="top: calc(60% - 12rem);" data-aos="fade-up" data-aos-delay="400">
          <a href="book-a-demo"
            class="inline-block bg-secondary-500 hover:bg-secondary-600 text-white font-medium py-3 px-8 rounded-md transition duration-300">
            Explore Insurance Solutions
          </a>
        </div>
      </div>
    </section>

    <!-- Join Section with Dark Blue Background -->
    <section class="relative py-10 px-4 sm:px-8 md:px-16 lg:px-20">
      <div class="container mx-auto">
        <!-- Join Panel with Starry Background -->
        <div class="bg-gradient-to-br from-secondary-600 to-secondary-600 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
          data-aos="fade-up" data-aos-duration="1000">

          <!-- Stars Background SVG -->
          <div class="absolute z-0 opacity-30 right-0">
            <img src="assets/images/home/svg/white-bg-dot-icon.svg" alt="background dots"
              class="w-full h-full object-cover">
          </div>

          <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-3 sm:mb-4 relative z-10"
              data-aos="fade-up" data-aos-delay="200">
              Join OptionPay Today
            </h1>

            <p class="text-base sm:text-lg text-white sm:mb-2 relative z-10" data-aos="fade-up"
              data-aos-delay="300">
              Start for free — upgrade anytime.
            </p>

            <div class="relative z-10" data-aos="fade-up" data-aos-delay="400">
              <p class="text-white mb-4 sm:mb-6">
                <a href="book-a-demo" class="underline hover:text-white transition">
                  Joining as an organization? Contact Sales
                </a>
              </p>

              <a href="book-a-demo"
                class="inline-flex items-center bg-secondary-500 hover:bg-secondary-600 text-white px-5 sm:px-6 py-2 sm:py-3 rounded-lg font-semibold transition-all transform hover:scale-105"
                data-aos="zoom-in" data-aos-delay="500">
                Sign up free<i class="fa-solid fa-arrow-right text-white ms-2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include_once('includes/footer.php'); ?>

  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/header.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>