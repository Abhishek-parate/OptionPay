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
  <title>OptionPay - Banking Platform Services</title>
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
<style>
  .utility-bg {
    background-image: url('assets/images/utility-services-page/utility.png');
    background-repeat: no-repeat;
    background-size: contain;
    background-position-y: bottom;
  }
</style>

<body class="bg-white font-inter">

 


  <?php include_once('includes/header.php'); ?>


  <main class="overflow-hidden ">

    <!-- hero section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:py-12 py-6 relative z-10">
      <div class="rounded-xl overflow-hidden">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 items-center">
          <!-- Left Content - Services List -->
          <div class="p-4 md:p-8 lg:p-12 pt-8" data-aos="fade-right" data-aos-duration="1000"
            data-aos-once="true">
            <h1 class="text-3xl sm:text-4xl font-bold text-secondary-500 mb-3 sm:mb-4" data-aos="fade-up"
              data-aos-delay="100" data-aos-duration="800" data-aos-once="true">Make Bill <br class="hidden md:hidden lg:block">Payments Simple</h1>
            <p class="text-black mb-6 md:mb-8" data-aos="fade-up" data-aos-delay="300"
              data-aos-duration="800" data-aos-once="true">Join 1 lakh+ ers offering instant utility payments</p>

            <a href="book-a-demo"
              class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md"
              data-aos="fade-up" data-aos-delay="400" data-aos-duration="800" data-aos-once="true">
              Start Your Journey
            </a>

            <!-- User avatars & count - Improved mobile display -->
            <div class="mt-2 md:mt-4 flex items-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm shadow-sm"
              data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
              <div class="flex -space-x-2 ml-1">
                <img src="https://randomuser.me/api/portraits/men/1.jpg"
                  class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white">
                <img src="https://randomuser.me/api/portraits/women/2.jpg"
                  class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white">
                <img src="https://randomuser.me/api/portraits/men/3.jpg"
                  class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white">
                <img src="https://randomuser.me/api/portraits/women/4.jpg"
                  class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white">
              </div>
              <span class="text-gray-600 text-xs sm:text-sm">1 Lac+ partners across
                India</span>
            </div>
          </div>

          <!-- Right Content - Image -->
          <div class="relative mx-auto px-4 sm:px-0">
            <!-- Main Dashboard Image - Improved responsive handling -->
            <div class="relative z-20">
              <img src="assets/images/utility-services-page/hero.png" alt="Dashboard"
                class="w-full h-auto object-contain" />
              <div
                class="absolute bottom-0 left-0 right-0 h-1/5 bg-gradient-to-t from-white to-transparent">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- hero section ends -->




    <!-- Featuees & Function Section -->
    <section class="bg-white py-10 px-4 md:px-24">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-primary-700 mb-4" data-aos="fade-up" data-aos-duration="800"
          data-aos-once="true">Features &
          Functions</h2>
        <p class="text-gray-600 mb-12 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100"
          data-aos-duration="800" data-aos-once="true">
          Building trust through partnerships that last. Creating
          a network that serves millions.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Feature Card 1 -->
          <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
            data-aos="fade-up" data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
            <img src="assets/images/utility-servises/real-time.png" alt="Real-Time Payment"
              class="w-full object-contain rounded-t-lg">
            <div class="p-6 text-left">
              <h3 class="text-secondary-600 font-semibold text-xl mb-2">Real-Time
                Payment Status</h3>
              <p class="text-gray-600 text-sm">
                Track payments instantly with live status
                updates for electricity, gas, water, and
                internet bills.
              </p>
            </div>
          </div>

          <!-- Feature Card 2 -->
          <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
            data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
            <img src="assets/images/utility-servises/multi-support.png" alt="Multi-Operator Support"
              class="w-full object-contain rounded-t-lg">
            <div class="p-6 text-left">
              <h3 class="text-secondary-600 font-semibold text-xl mb-2">Multi-Operator
                Support</h3>
              <p class="text-gray-600 text-sm">
                Process payments for all major utility
                providers across India through a single
                dashboard.
              </p>
            </div>
          </div>

          <!-- Feature Card 3 -->
          <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
            data-aos="fade-up" data-aos-delay="400" data-aos-duration="800" data-aos-once="true">
            <img src="assets/images/utility-servises/auto.png" alt="Auto Settlement System"
              class="w-full object-contain rounded-t-lg">
            <div class="p-6 text-left">
              <h3 class="text-secondary-600 font-semibold text-xl mb-2">Auto
                Settlement System</h3>
              <p class="text-gray-600 text-sm">
                Get payments settled directly to your bank
                account with our reliable processing system.
              </p>
            </div>
          </div>

          <!-- Feature Card 4 -->
          <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
            data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
            <img src="assets/images/utility-servises/smart.png" alt="Smart Analytics Dashboard"
              class="w-full object-contain rounded-t-lg">
            <div class="p-6 text-left">
              <h3 class="text-secondary-600 font-semibold text-xl mb-2">Smart
                Analytics Dashboard</h3>
              <p class="text-gray-600 text-sm">
                Monitor transactions and gain insights to
                grow your business.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-secondary-100 py-10 px-4 sm:px-8 md:px-16 lg:px-20 utility-bg">
      <div class="container mx-auto px-4 md:px-6">
        <!-- Section Heading -->
        <h1 class="text-4xl font-bold mb-10 text-primary-500" data-aos="fade-up" data-aos-duration="800">
          Explore Utility Platform Services</h1>
        <!-- Tab Buttons -->
        <div class="flex flex-wrap mb-10 gap-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
          <button
            class="tab-btn px-5 py-3 bg-secondary-500 text-white rounded-full cursor-pointer text-sm font-medium transition-all duration-300 outline-none"
            data-tab="area-partner">
            <span>Essential Bills</span>
          </button>
          <button
            class="tab-btn px-5 py-3 bg-white text-primary-500 border border-gray-200 rounded-full cursor-pointer text-sm font-medium transition-all duration-300 outline-none"
            data-tab="multi-area-partner">
            <span>Mobile & DTH</span>
          </button>
          <button
            class="tab-btn px-5 py-3 bg-white text-primary-500 border border-gray-200 rounded-full cursor-pointer text-sm font-medium transition-all duration-300 outline-none"
            data-tab="city-partner">
            <span>FASTag Services</span>
          </button>
        </div>

        <!-- Content Area -->
        <div class="tab-content">
          <!-- Area Partner Content -->
          <div class="tab-pane" id="area-partner" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <div class="flex flex-col md:flex-row items-center gap-8">
              <div class="w-full md:w-1/3 p-6">
                <h3 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-800">Utility &
                  Essential Bills</h3>
                <p class="text-gray-600 mb-8 max-w-md">Earn money by paying your customers
                  </br>utility bill payments</p>
                <ul class="space-y-4">
                  <li class="flex items-center">
                    <span
                      class="inline-flex items-center justify-center w-6 h-6 bg-primary-600 text-white rounded-full mr-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </span>
                    <span class="text-gray-700">Electricity Bills</span>
                  </li>
                  <li class="flex items-center">
                    <span
                      class="inline-flex items-center justify-center w-6 h-6 bg-primary-600 text-white rounded-full mr-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </span>
                    <span class="text-gray-700">Gas Payments</span>
                  </li>
                  <li class="flex items-center">
                    <span
                      class="inline-flex items-center justify-center w-6 h-6 bg-primary-600 text-white rounded-full mr-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </span>
                    <span class="text-gray-700">Water Charges</span>
                  </li>
                  <li class="flex items-center">
                    <span
                      class="inline-flex items-center justify-center w-6 h-6 bg-primary-600 text-white rounded-full mr-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </span>
                    <span class="text-gray-700">Internet Bills</span>
                  </li>
                </ul>
              </div>
              <div class="w-full md:w-2/3 flex justify-center p-4">
              </div>
            </div>
          </div>

          <!-- Multi-Area Partner Content -->
          <div class="tab-pane hidden" id="multi-area-partner" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <div class="flex flex-col md:flex-row items-center gap-8">
              <div class="w-full md:w-1/2 p-6">
                <h3 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-800">Mobile & DTH
                  Services</h3>
                <p class="text-gray-600 mb-8 max-w-md">Earn money by paying your customers</be>
                  Mobile & DTH bill payments</p>

                <ul class="space-y-4">
                  <li class="flex items-center">
                    <span
                      class="inline-flex items-center justify-center w-6 h-6 bg-primary-600 text-white rounded-full mr-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </span>
                    <span class="text-gray-700">All Mobile Operators</span>
                  </li>
                  <li class="flex items-center">
                    <span
                      class="inline-flex items-center justify-center w-6 h-6 bg-primary-600 text-white rounded-full mr-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </span>
                    <span class="text-gray-700">DTH Recharge</span>
                  </li>
                  <li class="flex items-center">
                    <span
                      class="inline-flex items-center justify-center w-6 h-6 bg-primary-600 text-white rounded-full mr-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </span>
                    <span class="text-gray-700">Prepaid Top-up</span>
                  </li>
                  <li class="flex items-center">
                    <span
                      class="inline-flex items-center justify-center w-6 h-6 bg-primary-600 text-white rounded-full mr-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </span>
                    <span class="text-gray-700">Postpaid Bills</span>
                  </li>
                </ul>
              </div>
              <div class="w-full md:w-1/2 flex justify-center p-4">

              </div>
            </div>
          </div>

          <!-- City Partner Content -->
          <div class="tab-pane hidden" id="city-partner" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <div class="flex flex-col md:flex-row items-center gap-8">
              <div class="w-full md:w-1/2 p-6">
                <h3 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-800">FASTag Services
                </h3>
                <p class="text-gray-600 mb-8 max-w-md">Earn money by paying your
                  customers</br>utility bill payments</p>

                <ul class="space-y-4">
                  <li class="flex items-center">
                    <span
                      class="inline-flex items-center justify-center w-6 h-6 bg-primary-600 text-white rounded-full mr-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </span>
                    <span class="text-gray-700">Quick Recharge</span>
                  </li>
                  <li class="flex items-center">
                    <span
                      class="inline-flex items-center justify-center w-6 h-6 bg-primary-600 text-white rounded-full mr-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </span>
                    <span class="text-gray-700">Balance Check</span>
                  </li>
                  <li class="flex items-center">
                    <span
                      class="inline-flex items-center justify-center w-6 h-6 bg-primary-600 text-white rounded-full mr-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </span>
                    <span class="text-gray-700">Multiple Vehicals</span>
                  </li>
                  <li class="flex items-center">
                    <span
                      class="inline-flex items-center justify-center w-6 h-6 bg-primary-600 text-white rounded-full mr-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </span>
                    <span class="text-gray-700">Transaction History</span>
                  </li>
                </ul>
              </div>
              <div class="w-full md:w-1/2 flex justify-center p-4">

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        // Get all tab buttons
        const tabButtons = document.querySelectorAll('.tab-btn');
        // Get all tab panes
        const tabPanes = document.querySelectorAll('.tab-pane');

        // Add event listener to each tab button
        tabButtons.forEach(button => {
          button.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');

            // Remove the active class and hide all tab panes
            tabButtons.forEach(btn => {
              btn.classList.remove('bg-secondary-500', 'text-white');
              btn.classList.add('bg-white', 'text-primary-500');
            });
            tabPanes.forEach(pane => {
              pane.classList.add('hidden');
            });

            // Add active class to clicked button and show corresponding tab pane
            this.classList.remove('bg-white', 'text-primary-500');
            this.classList.add('bg-secondary-500', 'text-white');
            document.getElementById(targetTab).classList.remove('hidden');
          });
        });

        // Optionally, set the default active tab
        tabButtons[0].click();
      });
    </script>
    <!-- pricing -->
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
                  <div class="w-10 h-10  overflow-hidden flex">
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
                    <img src="assets/images/utility-services-page/icon2.png" alt="Primium partner Icon">
                  </div>
                </div>
                <h3 class="text-3xl font-semibold  text-white">Premium
                  Partner</h3>
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
          <div
            class="bg-white rounded-xl border-1 border-gray-100 shadow-xl overflow-hidden transform transition-all duration-300 hover:drop-shadow-2xl hover:-translate-y-1">
            <div class="p-8 flex flex-col h-full">
              <!-- Plan Icon and Title -->
              <div class="flex items-center mb-6">
                <div class="w-16 h-16 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                  <div class="w-10 h-10  overflow-hidden flex">
                    <img src="assets/images/utility-services-page/icon1.png" alt="Enterprise Partner Icon">
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

    <!-- End of Pricing Section -->


    <section class="bg-secondary-600 text-white min-h-[300px] md:min-h-[400px]">
      <div class="container mx-auto px-4 md:px-6 py-10 lg:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
          <div class="lg:col-span-5 space-y-6" data-aos="fade-right" data-aos-duration="800"
            data-aos-once="true">
            <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight">Why Partner</br>With OptionPay?</h1>
            <p class="text-lg text-white" data-aos="fade-up" data-aos-delay="100" data-aos-duration="600"
              data-aos-once="true">Interested in Growing Your Business?</p>
            <div class="pt-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"
              data-aos-once="true">
              <a href="book-a-demo"
                class="inline-block bg-white text-secondary-600 font-medium py-3 px-8 rounded-md transition duration-300 hover:bg-gray-100">Partner
                With Us</a>
            </div>
          </div>

          <div class="lg:col-span-7" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
            <div class="grid grid-cols-2 h-full">
              <div class="flex flex-col h-full">
                <div class="border-r border-l border-b border-white flex flex-col items-center justify-center py-6 md:py-12"
                  data-aos="fade-up" data-aos-delay="300" data-aos-duration="600"
                  data-aos-once="true">
                  <div class="text-center text-sm md:text-base mt-2 text-white">
                    Pan-India presence with 1 </br>lakh+ active ers
                  </div>
                </div>

                <div class="border-r border-l border-white flex flex-col items-center justify-center py-6 md:py-12"
                  data-aos="fade-up" data-aos-delay="500" data-aos-duration="600"
                  data-aos-once="true">
                  <div class="text-center text-sm md:text-base mt-2 text-white">
                    Dedicated support team
                  </div>
                </div>
              </div>

              <div class="flex flex-col h-full">
                <!-- Top Stat - White Background -->
                <div class="border-r border-b border-white flex flex-col items-center justify-center py-6 md:py-12 bg-white"
                  data-aos="fade-up" data-aos-delay="400" data-aos-duration="600"
                  data-aos-once="true">
                  <div class="text-center text-sm md:text-base mt-2 text-primary-700">
                    Multi-level commission structure
                  </div>
                </div>

                <div class="border-r border-t border-white flex flex-col items-center justify-center py-6 md:py-12"
                  data-aos="fade-up" data-aos-delay="600" data-aos-duration="600"
                  data-aos-once="true">
                  <div class="text-center text-sm md:text-base mt-2 text-white">
                    24/7 Customer Support team
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Travel Network Section -->

    <style>
      @keyframes scrollX {
        0% {
          transform: translateX(0%);
        }

        100% {
          transform: translateX(-50%);
        }
      }

      .infinite-scroll {
        animation: scrollX 15s linear infinite;
      }
    </style>
    <div class="w-full overflow-hidden py-2 bg-primary-600 ">
      <div class="max-w-7xl mx-auto flex items-center space-x-6 px-4 py-12 text-white">
        <p class="font-semibold whitespace-nowrap">Explore Other Services</p>
        <div class="relative w-full overflow-hidden h-6">
          <div class="absolute flex whitespace-nowrap infinite-scroll">
            <!-- duplicated content set for seamless loop -->
            <div class="flex space-x-6">
              <span class="px-4 border-l border-white">Banking Platform Services</span>
              <span class="px-4 border-l border-white">Travel Platform Services</span>
              <span class="px-4 border-l border-white">Insurance Platform Services</span>
              <span class="px-4 border-l border-white">E-Governance Platform Services</span>
            </div>
            <div class="flex space-x-6 ml-6">
              <span class="px-4 border-l border-white">Banking Platform Services</span>
              <span class="px-4 border-l border-white">Travel Platform Services</span>
              <span class="px-4 border-l border-white">Insurance Platform Services</span>
              <span class="px-4 border-l border-white">E-Governance Platform Services</span>
            </div>
          </div>
        </div>
      </div>
    </div>




    <!-- Join Section with Dark Blue Background -->
    <section class="relative py-10 px-4 sm:px-8 md:px-16 lg:px-20">
      <div class="container mx-auto">
        <!-- Join Panel with Starry Background -->
        <div class="bg-gradient-to-br from-primary-600 to-primary-500 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
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
    document.addEventListener("DOMContentLoaded", function() {
      // All testimonial data
      const testimonials = [{
          name: "Mike taylor",
          location: "Lahore, Pakistan",
          text: "On the Windows talking painted pasture yet its express parties use. Sure last upon he same as knew next. Of believed or diverted no.",
          profile: "https://randomuser.me/api/portraits/men/3.jpg",
        },
        {
          name: "Chris Thomas",
          location: "CEO of Red Button",
          text: "Smart homes are the future. The integration of IoT devices has transformed how we interact with our living spaces.",
          profile: "https://randomuser.me/api/portraits/women/3.jpg",
        },
        {
          name: "Sarah Johnson",
          location: "New York, USA",
          text: "The customer service was exceptional. They went above and beyond to ensure everything was set up perfectly.",
          profile: "https://randomuser.me/api/portraits/men/3.jpg",
        },
      ];

      // Elements
      const dots = document.querySelectorAll("#dots-container button");
      const profileImage = document.getElementById("profile-image");
      const prevArrow = document.getElementById("prev-arrow");
      const nextArrow = document.getElementById("next-arrow");

      let currentIndex = 0;

      // Function to update the active testimonial
      function updateTestimonial(newIndex) {
        // Ensure index is within bounds
        newIndex = (newIndex + testimonials.length) % testimonials.length;

        // Store the previous index
        const prevIndex = currentIndex;
        currentIndex = newIndex;

        // Update dots
        dots.forEach((dot, index) => {
          if (index === currentIndex) {
            dot.classList.remove("bg-gray-300");
            dot.classList.add("bg-secondary-500");
          } else {
            dot.classList.remove("bg-secondary-500");
            dot.classList.add("bg-gray-300");
          }
        });

        // Get all testimonial cards
        const testimonialCards = [];
        for (let i = 0; i < testimonials.length; i++) {
          testimonialCards.push(document.getElementById(`testimonial-${i}`));
        }

        // Hide previous active testimonial
        const prevCard = testimonialCards[prevIndex];
        prevCard.classList.remove(
          "opacity-100",
          "translate-y-0",
          "z-20",
          "bg-white",
          "shadow-lg"
        );
        prevCard.classList.add(
          "opacity-0",
          "translate-y-16",
          "bg-gray-100",
          "shadow-md"
        );

        // After a small delay, show the new one and hide the old one
        setTimeout(() => {
          // Hide all cards
          testimonialCards.forEach((card) => {
            card.classList.add("hidden");
          });

          // Show current card
          const currentCard = testimonialCards[currentIndex];
          currentCard.classList.remove(
            "hidden",
            "opacity-0",
            "translate-y-16",
            "bg-gray-100",
            "shadow-md"
          );
          currentCard.classList.add(
            "opacity-100",
            "translate-y-0",
            "z-20",
            "bg-white",
            "shadow-lg"
          );

          // Show next card below the current one (if there is a next card)
          const nextIndex = (currentIndex + 1) % testimonials.length;
          const nextCard = testimonialCards[nextIndex];
          if (nextCard) {
            nextCard.classList.remove("hidden", "opacity-0");
            nextCard.classList.add("opacity-95", "translate-y-16", "z-10");
          }

          // Update profile image
          profileImage.src = testimonials[currentIndex].profile;
          profileImage.alt = testimonials[currentIndex].name;
        }, 300);
      }

      // Add event listeners to dots
      dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
          updateTestimonial(index);
        });
      });

      // Add event listeners to navigation arrows
      nextArrow.addEventListener("click", function() {
        updateTestimonial(currentIndex + 1);
      });

      prevArrow.addEventListener("click", function() {
        updateTestimonial(currentIndex - 1);
      });

      // Show initial testimonial setup (second card visible but stacked)
      const secondCard = document.getElementById("testimonial-1");
      secondCard.classList.remove("hidden");
    });
  </script>
  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/header.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>