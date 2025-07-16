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
  <title>OptionPay: Multi-Service Fintech Platform in India</title>
  <meta name="description" content="Launch multiple fintech services with OptionPay's platform. Offer banking, travel, utility payments, and more to millions in India. Start in 7 days.">
  <meta name="keywords" content="aeps service, banking solutions (implied), OptionPay">
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

  <main>
    <!-- hero section -->
    <section class="bg-white">
      <div class="max-w-7xl mx-auto md:py-12 pt-12  ">
        <div class="rounded-xl overflow-hidden  ">
          <div class="grid grid-cols-1 md:grid-cols-2 ">
            <!-- Content First on Mobile -->
            <div class="px-8 pt-8 md:px-12 md:pt-14 md:mt-12 lg:px-16 lg:pt-16 " data-aos="fade-right" data-aos-duration="1000"
              data-aos-once="true">
              <p class="font-bold text-primary-600 text-sm sm:text-base">Banking Platform Services</p>
              <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500 mt-2 mb-3 sm:mb-4">Turn Your Business Into a Banking Powerhouse</h1>
              <!-- <p class="text-black mb-6">Empower your business to create seamless shopping experiences
                for buyers.</p> -->

              <a href="book-a-demo"
                class="inline-flex items-center justify-center px-4 sm:px-5 py-2 sm:py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md"
                data-aos="fade-up" data-aos-delay="200" data-aos-once="true">
                Explore Banking Services</a>

              <div class="mt-6 md:mt-4 flex items-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm shadow-sm"
                data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
                <div class="flex -space-x-2">
                  <img src="https://randomuser.me/api/portraits/men/1.jpg"
                    class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white" alt="User">
                  <img src="https://randomuser.me/api/portraits/women/2.jpg"
                    class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white" alt="User">
                  <img src="https://randomuser.me/api/portraits/men/3.jpg"
                    class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white" alt="User">
                  <img src="https://randomuser.me/api/portraits/women/4.jpg"
                    class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white" alt="User">
                </div>
                <span class="text-gray-600 text-xs sm:text-sm">1 Lac+ partners across
                  India</span>
              </div>
            </div>

            <!-- Image Second on Mobile -->
            <div class="relative flex items-center justify-center mx-auto order-2 mt-4 lg:mt-0"
              data-aos="fade-left" data-aos-duration="1200" data-aos-once="true">
              <!-- Decorative Elements -->

              <!-- Main Dashboard Image -->
              <div class="relative z-10 w-full">
                <img src="assets/images/banking-platform-service/banner.png" alt="Dashboard"
                  class="h-64 sm:h-80 md:h-96 pt-6 object-contain" />
                <div
                  class="absolute bottom-0 left-0 right-0 h-1/4 bg-gradient-to-t from-white to-transparent">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- hero section ends -->

    <!-- Banking Overview Section with Split Background -->
    <section class="relative py-12 md:py-12">
      <!-- Top background - light blue -->
      <div class="absolute top-0 left-0 right-0 h-[60%] bg-primary-100"></div>
      <!-- Bottom background - white -->
      <div class="absolute bottom-0 left-0 right-0 h-[40%] bg-white"></div>

      <!-- Content -->
      <div class="relative container mx-auto max-w-6xl px-4 sm:px-6">
        <!-- Section Header -->
        <div class="text-center mb-8 md:mb-12 z-10 relative" data-aos="fade-up" data-aos-duration="800">
          <h2 class="text-3xl md:text-4xl font-bold text-primary-800 mb-4 md:mb-6">Banking overview</h2>
          <p class="text-black max-w-4xl mx-auto text-center leading-relaxed px-4">
            OptionPay's Banking Platform enables enterprises to integrate essential financial services into
            their
            business operations. By leveraging a range of solutions like AEPS, Aadhar Pay, Micro ATM, DMT,
            CMS, Account Opening, UPI Cash @POS, and INDO-NEPAL DMT, businesses can offer tailored
            banking services to their customers based on their chosen package.
          </p>
        </div>

        <!-- Feature Cards positioned to straddle the boundary -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6 mb-8 md:mb-12 relative"
          style="top: calc(60% - 12rem);">
          <!-- Feature 1 -->
          <div class="bg-white rounded-xl p-6 md:p-8 shadow-sm border text-center border-gray-100" data-aos="fade-up"
            data-aos-delay="100">
            <p class="text-gray-600">
              Seamless tools for cash withdrawals, money transfers, and account management.
            </p>
          </div>

          <!-- Feature 2 -->
          <div class="bg-white rounded-xl p-6 md:p-8 shadow-sm border text-center border-gray-100" data-aos="fade-up"
            data-aos-delay="200">
            <p class="text-gray-600">
              Flexible integration options with major banks for secure transactions.
            </p>
          </div>

          <!-- Feature 3 -->
          <div class="bg-white rounded-xl p-6 md:p-8 shadow-sm border text-center border-gray-100" data-aos="fade-up"
            data-aos-delay="300">
            <p class="text-gray-600">
              Comprehensive dashboards for transaction tracking and reporting.
            </p>
          </div>
        </div>

        <!-- CTA Button -->
        <div class="text-center relative" style="top: calc(60% - 12rem);" data-aos="zoom-in"
          data-aos-delay="400">
          <a href="book-a-demo"
            class="inline-block bg-secondary-500 hover:bg-secondary-600 text-white font-medium py-3 px-6 md:px-8 rounded-md transition duration-300">
            Discover More
          </a>
        </div>
      </div>
    </section>

    <!-- Join Section with Dark Blue Background -->
    <!-- Join Section with Dark Blue Background -->
    <section class="relative py-10 px-4 sm:px-8 md:px-16 lg:px-20">
      <div class="container mx-auto">
        <!-- Join Panel with Starry Background -->
        <div class="bg-gradient-to-br from-primary-700 to-primary-600 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
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

            <p class="text-base sm:text-lg text-white relative z-10" data-aos="fade-up"
              data-aos-delay="300">
              Start for free — upgrade anytime.
            </p>

            <div class="relative z-10" data-aos="fade-up" data-aos-delay="400">
              <p class="text-white mb-4 sm:mb-6">
                <a href="contact-us" class="underline hover:text-white transition">
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
    <!-- End of Join Section -->

  </main>

  <?php include_once('includes/footer.php'); ?>

  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/header.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

</body>

</html>