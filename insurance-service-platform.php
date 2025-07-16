<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OptionPay - Banking Platform Services</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="./assets/css/style.css" rel="stylesheet">
  <link href="./assets/css/header.css" rel="stylesheet">
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

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQCF4VTL"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php include_once('includes/header.php'); ?>


  <main class="overflow-hidden">


    <!-- Utility Services Section -->
    <section class="bg-white px-4 sm:px-6 py-8 sm:py-12" data-aos="fade-up">
      <div class="max-w-7xl mx-auto">
        <div class="rounded-xl overflow-hidden">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-0">
            <!-- Left Content - Services List -->
            <div class="px-8 pt-8 md:px-12 md:pt-12 lg:px-16 lg:pt-16" data-aos="fade-right">
              <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500 leading-tight">
                Build Your Insurance<br>
                Business Portfolio
              </h1>
              <p class="text-gray-500 my-4 sm:mb-6 md:mb-8 text-sm sm:text-base">
                Join 10,000+ insurance partners offering <br> comprehensive coverage solutions.
              </p>
              <a href="book-a-demo"
                class="inline-flex items-center justify-center px-4 sm:px-5 py-2 sm:py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md w-full sm:w-auto sm:self-start"
                data-aos="zoom-in-up">
                Start Your Journey
              </a>
              <div class="mt-6 sm:mt-4 flex flex-wrap sm:flex-nowrap items-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm shadow-sm"
                data-aos="fade-up">
                <div class="flex -space-x-2 overflow-hidden ml-1">
                  <img src="https://randomuser.me/api/portraits/men/1.jpg"
                    class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white" alt="Partner">
                  <img src="https://randomuser.me/api/portraits/women/2.jpg"
                    class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white" alt="Partner">
                  <img src="https://randomuser.me/api/portraits/men/3.jpg"
                    class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white" alt="Partner">
                  <img src="https://randomuser.me/api/portraits/women/4.jpg"
                    class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white" alt="Partner">
                </div>
                <span class="text-gray-600 text-xs sm:text-sm ml-1">1 Lac+ partners across
                  India</span>
              </div>
            </div>

            <!-- Right Content - Image -->
            <div class="relative h-full" data-aos="fade-left">
              <div class="relative h-64 sm:h-80 md:h-full">
                <img src="assets/images/insurance/banner.png" alt="Travel Business"
                  class="w-full h-full object-cover object-center md:object-contain" />
                <div
                  class="absolute bottom-0 left-0 right-0 h-1/4 bg-gradient-to-t from-white to-transparent">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="bg-white" data-aos="fade-up" data-aos-duration="600">
      <div class="max-w-7xl mx-auto py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h2 class="text-2xl sm:text-3xl font-bold text-primary-700 mb-8 sm:mb-12">Our Insurance platform
            Features</h2>

          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
            <!-- Feature Card 1 -->
            <!-- Feature Card 1 -->
            <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
              data-aos="fade-up" data-aos-duration="600">
              <img src="assets/images/insurance/multi-insurance.png" alt="Real-Time Payment"
                class="w-full object-contain rounded-t-lg">
              <div class="p-4 text-left">
                <h3 class="text-primary-700 font-semibold text-xl my-4">Multi-Insurance</br> Products
                </h3>
                <p class="text-gray-600 text-sm">
                  Bank-grade protection with real-time monitoring and multi-level verification keeps
                  your transactions safe
                </p>
              </div>
            </div>

            <!-- Feature Card 2 -->
            <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
              data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
              <img src="assets/images/insurance/smart-commission.png" alt="Real-Time Payment"
                class="w-full object-contain rounded-t-lg">
              <div class="p-4 text-left">
                <h3 class="text-primary-700 font-semibold text-xl my-4">Smart Commission </br>Structure
                </h3>
                <p class="text-gray-600 text-sm">
                  Set precise access levels for your team members - from owners to field agents
                </p>
              </div>
            </div>

            <!-- Feature Card 3 -->
            <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
              data-aos="fade-up" data-aos-duration="600" data-aos-delay="400">
              <img src="assets/images/insurance/partner-support.png" alt="Real-Time Payment"
                class="w-full object-contain rounded-t-lg">
              <div class="p-4 text-left">
                <h3 class="text-primary-700 font-semibold text-xl my-4">Partner Support</br> System</h3>
                <p class="text-gray-600 text-sm">
                  Track every transaction with detailed reports and instant settlement updates
                </p>
              </div>
            </div>

            <!-- Feature Card 4 -->
            <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
              data-aos="fade-up" data-aos-duration="600" data-aos-delay="600">
              <img src="assets/images/insurance/digital-insurance.png" alt="Real-Time Payment"
                class="w-full object-contain rounded-t-lg">
              <div class="p-4 text-left">
                <h3 class="text-primary-700 font-semibold text-xl my-4">Digital Insurance </br>Tools
                </h3>
                <p class="text-gray-600 text-sm">
                  Built-in compliance features ensure your business meets all banking requirements
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>


    <!-- Life Insurance Solutions Section -->
    <!-- Life Insurance Solutions Section -->
    <section class="w-full py-12 bg-white">
      <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-8">
          <!-- Illustration Column -->
          <div class="w-full md:w-1/2" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <img src="assets/images/insurance/life-insurance.png" alt="Life Insurance Illustration"
              class="w-full h-auto object-contain rounded-lg shadow-md">
          </div>

          <!-- Content Column -->
          <div class="w-full md:w-1/2" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <!-- Section Title -->
            <h2 class="text-2xl md:text-3xl font-bold text-primary-600 mb-6">
              Life Insurance Solutions
            </h2>

            <!-- Plans List -->
            <ul class="space-y-4 mb-8">
              <?php
              $lifePlans = [
                'Term Plans that protect families',
                'Child Plans for future security',
                'Retirement Plans for golden years',
                'Savings Plans for wealth building'
              ];

              foreach ($lifePlans as $index => $plan) :
              ?>
                <li class="flex items-start group" data-aos="slide-up"
                  data-aos-delay="<?php echo $index * 100; ?>" data-aos-once="true">
                  <!-- Check Icon -->
                  <div class="flex-shrink-0 mt-1 mr-3">
                    <svg class="w-5 h-5 text-primary-500 group-hover:text-primary-600 transition-colors"
                      fill="none" stroke="currentColor" viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>

                  <!-- Plan Text -->
                  <span
                    class="text-gray-700 text-sm md:text-base group-hover:text-primary-700 transition-colors">
                    <?php echo htmlspecialchars($plan); ?>
                  </span>
                </li>
              <?php endforeach; ?>
            </ul>

            <!-- Call to Action Button -->
            <button class="bg-primary-500 hover:bg-primary-600 text-white font-medium 
                           py-2.5 px-6 rounded-md transition duration-300 
                           transform hover:scale-105 active:scale-95 
                           focus:outline-none focus:ring-2 focus:ring-secondary-300
                           flex items-center justify-center group" data-aos="zoom-in" data-aos-once="true">
              Choose Your Package
              <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13 7l5 5m0 0l-5 5m5-5H6" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Health Insurance Solutions Section -->
    <!-- Health Insurance Solutions Section -->
    <section class="w-full py-12 bg-white">
      <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col-reverse md:flex-row items-center gap-8">
          <!-- Content Column (Moved to order first on mobile) -->
          <div class="w-full md:w-1/2" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <!-- Section Title -->
            <h2 class="text-2xl md:text-3xl font-bold text-primary-600 mb-6">
              Health Insurance Solutions
            </h2>

            <!-- Health Plans List -->
            <ul class="space-y-4 mb-8">
              <?php
              $healthPlans = [
                'Family Health coverage',
                'Personal Health plans',
                'Senior Care solutions',
                'Group Health benefits'
              ];

              foreach ($healthPlans as $index => $plan) :
              ?>
                <li class="flex items-start group" data-aos="slide-up"
                  data-aos-delay="<?php echo $index * 100; ?>" data-aos-once="true">
                  <!-- Check Icon -->
                  <div class="flex-shrink-0 mt-1 mr-3">
                    <svg class="w-5 h-5 text-primary-500 group-hover:text-primary-600 transition-colors"
                      fill="none" stroke="currentColor" viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>

                  <!-- Plan Text -->
                  <span
                    class="text-gray-700 text-sm md:text-base group-hover:text-primary-700 transition-colors">
                    <?php echo htmlspecialchars($plan); ?>
                  </span>
                </li>
              <?php endforeach; ?>
            </ul>

            <!-- Call to Action Button -->
            <button class="bg-primary-500 hover:bg-primary-600 text-white font-medium 
                           py-2.5 px-6 rounded-md transition duration-300 
                           transform hover:scale-105 active:scale-95 
                           focus:outline-none focus:ring-2 focus:ring-primary-300
                           flex items-center justify-center group" data-aos="zoom-in" data-aos-once="true">
              Choose Your Package
              <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13 7l5 5m0 0l-5 5m5-5H6" />
              </svg>
            </button>
          </div>

          <!-- Illustration Column -->
          <div class="w-full md:w-1/2" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <img src="assets/images/insurance/health-insurance.png" alt="Health Insurance Illustration"
              class="w-full h-auto object-contain rounded-lg shadow-md">
          </div>
        </div>
      </div>
    </section>
    <!-- Life Insurance Solutions Section -->
    <!-- Motor Insurance Solutions Section -->
    <section class="w-full py-12 bg-white">
      <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-8">
          <!-- Illustration Column -->
          <div class="w-full md:w-1/2" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <img src="assets/images/insurance/motor-insurance.png" alt="Motor Insurance Vehicle Protection"
              class="w-full h-auto object-contain rounded-lg shadow-md">
          </div>

          <!-- Content Column -->
          <div class="w-full md:w-1/2" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <!-- Section Title -->
            <h2 class="text-2xl md:text-3xl font-bold text-primary-600 mb-6">
              Motor Insurance Solutions
            </h2>

            <!-- Motor Insurance Plans List -->
            <ul class="space-y-4 mb-8">
              <?php
              $motorPlans = [
                'Two-wheeler protection',
                'Four-wheeler coverage',
                'Commercial vehicle plans',
                'Quick claim settlements'
              ];

              foreach ($motorPlans as $index => $plan) :
              ?>
                <li class="flex items-start group" data-aos="slide-up"
                  data-aos-delay="<?php echo $index * 100; ?>" data-aos-once="true">
                  <!-- Check Icon -->
                  <div class="flex-shrink-0 mt-1 mr-3">
                    <svg class="w-5 h-5 text-secondary-500 group-hover:text-secondary-600 transition-colors"
                      fill="none" stroke="currentColor" viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>

                  <!-- Plan Text -->
                  <span
                    class="text-gray-700 text-sm md:text-base group-hover:text-secondary-700 transition-colors">
                    <?php echo htmlspecialchars($plan); ?>
                  </span>
                </li>
              <?php endforeach; ?>
            </ul>

            <!-- Call to Action Button -->
            <button class="bg-secondary-500 hover:bg-secondary-600 text-white font-medium 
                           py-2.5 px-6 rounded-md transition duration-300 
                           transform hover:scale-105 active:scale-95 
                           focus:outline-none focus:ring-2 focus:ring-secondary-300
                           flex items-center justify-center group" data-aos="zoom-in" data-aos-once="true">
              Choose Your Package
              <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13 7l5 5m0 0l-5 5m5-5H6" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Health Insurance Solutions Section -->
    <!-- Partnership Benefits Section -->
    <section class="w-full py-12 bg-white">
      <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col-reverse md:flex-row items-center gap-8">
          <!-- Content Column (Moved first on mobile) -->
          <div class="w-full md:w-1/2" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <!-- Section Title -->
            <h2 class="text-2xl md:text-3xl font-bold text-primary-600 mb-6">
              Partnership Benefits
            </h2>

            <!-- Partnership Benefits List -->
            <ul class="space-y-4 mb-8">
              <?php
              $partnershipBenefits = [
                'Instant policy issuance',
                'Digital documentation',
                'Real-time tracking',
                'Quick claim support'
              ];

              foreach ($partnershipBenefits as $index => $benefit) :
              ?>
                <li class="flex items-start group" data-aos="slide-up"
                  data-aos-delay="<?php echo $index * 100; ?>" data-aos-once="true">
                  <!-- Check Icon -->
                  <div class="flex-shrink-0 mt-1 mr-3">
                    <svg class="w-5 h-5 text-primary-500 group-hover:text-primary-600 transition-colors"
                      fill="none" stroke="currentColor" viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>

                  <!-- Benefit Text -->
                  <span
                    class="text-gray-700 text-sm md:text-base group-hover:text-primary-700 transition-colors">
                    <?php echo htmlspecialchars($benefit); ?>
                  </span>
                </li>
              <?php endforeach; ?>
            </ul>

            <!-- Call to Action Button -->
            <button class="bg-primary-500 hover:bg-primary-600 text-white font-medium 
                           py-2.5 px-6 rounded-md transition duration-300 
                           transform hover:scale-105 active:scale-95 
                           focus:outline-none focus:ring-2 focus:ring-primary-300
                           flex items-center justify-center group" data-aos="zoom-in" data-aos-once="true">
              Choose Your Package
              <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13 7l5 5m0 0l-5 5m5-5H6" />
              </svg>
            </button>
          </div>

          <!-- Illustration Column -->
          <div class="w-full md:w-1/2" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <img src="assets/images/insurance/partnership.png" alt="Partnership Benefits Illustration"
              class="w-full h-auto object-contain rounded-lg shadow-md">
          </div>
        </div>
      </div>
    </section>

    <section class="py-10 px-4">
      <div class="max-w-6xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
          <p class="text-sm font-bold tracking-wider text-primary-800 uppercase mb-2">PRICING</p>
          <h2 class="text-3xl font-bold text-primary-700 mb-4">Simple, transparent pricing</h2>
        </div>

        <!-- Toggle Switch -->
        <div class="flex items-center justify-center mb-12" data-aos="fade-up" data-aos-delay="100"
          data-aos-duration="800" data-aos-once="true">
          <span class="mr-3 text-gray-700 font-medium">Monthly</span>
          <div class="relative inline-block w-12 align-middle select-none">
            <input type="checkbox" id="billing-toggle"
              class="peer absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer checked:right-0 checked:border-primary-500 border-gray-300"
              style="top: 0; bottom: 0; margin: auto 0; transition: right 0.2s ease-in-out, border-color 0.2s ease-in-out;">
            <label for="billing-toggle"
              class="block h-6 overflow-hidden rounded-full bg-gray-300 cursor-pointer peer-checked:bg-primary-400"
              style="transition: background-color 0.2s ease-in-out;">
            </label>
          </div>
          <span class="ml-3 text-gray-700 font-medium">Annually</span>
        </div>

        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Plan 1 -->
          <div class="bg-white rounded-xl border-1 border-gray-100 shadow-xl overflow-hidden transform transition-all duration-300 hover:drop-shadow-2xl hover:-translate-y-1"
            data-aos="fade-up" data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
            <div class="p-8 flex flex-col h-full">
              <!-- Plan Icon and Title -->
              <div class="flex items-center mb-6">
                <div class="w-16 h-16 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                  <div
                    class="w-10 h-10  overflow-hidden flex">
                    <img src="assets/images/utility-services-page/icon1.png"
                      alt="Basic Partner Icon">
                  </div>
                </div>
                <h3 class="text-3xl font-semibold text-gray-900">Basic Partner</h3>
              </div>

              <!-- Plan Details -->
              <p class="text-sm text-gray-600 mb-6">For New Entrepreneurs</p>

              <!-- Features -->
              <h4 class="text-base font-semibold text-gray-800 mb-4">What's included</h4>
              <ul class="space-y-4 mb-6 flex-grow">
                <li class="flex items-start">
                  <div
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-primary-500 flex items-center justify-center text-white mt-0.5">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700">BBPS Integration</span>
                </li>
                <li class="flex items-start">
                  <div
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-primary-500 flex items-center justify-center text-white mt-0.5">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700">Mobile Platform Acccess</span>
                </li>
                <li class="flex items-start">
                  <div
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-primary-500 flex items-center justify-center text-white mt-0.5">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700">Automated Settlements</span>
                </li>
                <li class="flex items-start">
                  <div
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-primary-500 flex items-center justify-center text-white mt-0.5">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700">Basic Support Services</span>
                </li>
              </ul>

              <!-- Price -->
              <div class="mt-auto">
                <a href="book-a-demo"
                  class="block w-full py-3 px-4 bg-primary-500 hover:bg-primary-600 text-white font-medium text-center rounded-full transition-colors duration-300">
                  Get started
                </a>
              </div>
            </div>
          </div>

          <!-- Plan 2 - Featured -->
          <div class="bg-primary-500 rounded-xl drop-shadow-xl overflow-hidden transform transition-all duration-300 hover:drop-shadow-2xl hover:-translate-y-1 relative md:-mt-8 md:mb-8 md:z-10"
            data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
            <!-- Popular Badge -->
            <div class="absolute top-4 right-4">
              <span
                class="inline-block bg-white bg-opacity-20 text-white text-xs font-semibold px-3 py-1 rounded-full">
                Popular
              </span>
            </div>

            <div class="p-8 flex flex-col h-full">
              <!-- Plan Icon and Title -->
              <div class="flex items-center mb-6">
                <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mr-4">
                  <div
                    class="w-10 h-10 bg-gradient-to-r from-white to-primary-300 overflow-hidden flex">
                    <img src="assets/images/utility-services-page/icon2.png"
                      alt="Primium partner Icon">
                  </div>
                </div>
                <h3 class="text-3xl font-semibold text-white">Premium Partner</h3>
              </div>

              <!-- Plan Details -->
              <p class="text-sm text-white text-opacity-90 mb-6">For Growing Businesses</p>

              <!-- Features -->
              <h4 class="text-base font-semibold text-white mb-4">What's included</h4>
              <ul class="space-y-4 mb-6 flex-grow">
                <li class="flex items-start">
                  <div
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-white flex items-center justify-center text-primary-600 mt-0.5">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="ml-3 text-white">Handle multiple brands</span>
                </li>
                <li class="flex items-start">
                  <div
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-white flex items-center justify-center text-primary-600 mt-0.5">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="ml-3 text-white">Set custom commissions</span>
                </li>
                <li class="flex items-start">
                  <div
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-white flex items-center justify-center text-primary-600 mt-0.5">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="ml-3 text-white">API integration</span>
                </li>
                <li class="flex items-start">
                  <div
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-white flex items-center justify-center text-primary-600 mt-0.5">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="ml-3 text-white">Business insights</span>
                </li>
              </ul>

              <!-- Price -->
              <div class="mt-auto">
                <a href="book-a-demo"
                  class="block w-full py-3 px-4 bg-white hover:bg-gray-100 text-primary-600 font-medium text-center rounded-full transition-colors duration-300">
                  Get started
                </a>
              </div>
            </div>
          </div>

          <!-- Plan 3 -->
          <div class="bg-white rounded-xl border-1 border-gray-100 shadow-xl overflow-hidden transform transition-all duration-300 hover:drop-shadow-2xl hover:-translate-y-1"
            data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
            <div class="p-8 flex flex-col h-full">
              <!-- Plan Icon and Title -->
              <div class="flex items-center mb-6">
                <div class="w-16 h-16 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                  <div
                    class="w-10 h-10  overflow-hidden flex">
                    <img src="assets/images/utility-services-page/icon1.png"
                      alt="Enterprise Partner Icon">
                  </div>
                </div>
                <h3 class="text-3xl font-semibold text-gray-900">Enterprise Partner</h3>
              </div>

              <!-- Plan Details -->
              <p class="text-sm text-gray-600 mb-6">For Large Organizations</p>

              <!-- Features -->
              <h4 class="text-base font-semibold text-gray-800 mb-4">What's included</h4>
              <ul class="space-y-4 mb-6 flex-grow">
                <li class="flex items-start">
                  <div
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-primary-500 flex items-center justify-center text-white mt-0.5">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700">Tailored solutions</span>
                </li>
                <li class="flex items-start">
                  <div
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-primary-500 flex items-center justify-center text-white mt-0.5">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700">Priority support</span>
                </li>
                <li class="flex items-start">
                  <div
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-primary-500 flex items-center justify-center text-white mt-0.5">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700">API ecosystem</span>
                </li>
                <li class="flex items-start">
                  <div
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-primary-500 flex items-center justify-center text-white mt-0.5">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700">Fund management system</span>
                </li>
              </ul>

              <!-- Price -->
              <div class="mt-auto">
                <a href="book-a-demo"
                  class="block w-full py-3 px-4 bg-primary-500 hover:bg-primary-600 text-white font-medium text-center rounded-full transition-colors duration-300">
                  Get started
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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




  </main>

  <!-- Main Header Banner -->


  <?php include_once('includes/footer.php'); ?>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const billingToggle = document.getElementById("billing-toggle");
      const monthlyPrices = document.querySelectorAll(".monthly-price");
      const annualPrices = document.querySelectorAll(".annual-price");

      // Check if billing toggle exists before adding event listener
      if (billingToggle) {
        billingToggle.addEventListener("change", function() {
          if (this.checked) {
            // Annual pricing
            monthlyPrices.forEach((el) => el.classList.add("hidden"));
            annualPrices.forEach((el) => el.classList.remove("hidden"));
          } else {
            // Monthly pricing
            monthlyPrices.forEach((el) => el.classList.remove("hidden"));
            annualPrices.forEach((el) => el.classList.add("hidden"));
          }

          // Add pulse animation to prices
          const visiblePrices = this.checked ? annualPrices : monthlyPrices;
          visiblePrices.forEach((el) => {
            el.classList.add("animate-pulse-scale");
            setTimeout(() => {
              el.classList.remove("animate-pulse-scale");
            }, 400);
          });
        });
      }
    });
  </script>
  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/header.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>