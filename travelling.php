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

<body class="bg-white font-inter">

 

  <?php include_once('includes/header.php'); ?>


  <main class=" overflow-hidden">

    <!-- hero section -->

    <section class=" bg-white">

      <div class="max-w-7xl mx-auto md:py-12 pt-12  ">
        <div class="rounded-xl overflow-hidden  ">
          <div class="grid grid-cols-1 md:grid-cols-2 ">
            <!-- Left Content - Services List -->
            <div class="p-8 md:p-12">
              <p class="font-semi-bolder text-primary-900"><span class="text-primary-500">Home / Multi Services Platform /</span> Traveling Solutions</p>
              <h1 class="text-3xl md:text-4xl font-bold text-secondary-500">Build Your</h1>
              <h1 class="text-3xl md:text-4xl font-bold text-secondary-500 mb-4">Travel Business</h1>
              <p class="text-black mb-5">Join 20,000+ travel ers earning through India's trusted B2B
                travel platform</p>

              <a href="book-a-demo"
                class="inline-flex items-center justify-center px-5 py-3 md:mb-4 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md">
                Start Your Journey

              </a>

              <div
                class="flex items-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm shadow-sm">
                <div class="flex -space-x-2 ">
                  <img src="https://randomuser.me/api/portraits/men/1.jpg"
                    class="w-6 h-6 sm:w-8 sm:h-8 md:w-8 md:h-8 rounded-full border-2 border-white">
                  <img src="https://randomuser.me/api/portraits/women/2.jpg"
                    class="w-6 h-6 sm:w-8 sm:h-8 md:w-8 md:h-8 rounded-full border-2 border-white">
                  <img src="https://randomuser.me/api/portraits/men/3.jpg"
                    class="w-6 h-6 sm:w-8 sm:h-8 md:w-8 md:h-8 rounded-full border-2 border-white">
                  <img src="https://randomuser.me/api/portraits/women/4.jpg"
                    class="w-6 h-6 sm:w-8 sm:h-8 md:w-8 md:h-8 rounded-full border-2 border-white">
                </div>
                <span class="text-gray-600 text-sm">1 Lac+ partners across India</span>
              </div>
            </div>
            <!-- Right Content - Image and Features -->
            <!-- Diagonal Shapes for Design -->

            <!-- Person Image -->


            <div class="relative max-w-5xl mx-auto  ">
              <!-- Main Dashboard Image -->
              <div class="relative z-20">
                <img src="assets/images/trevelling/hero.png" alt="Dashboard" class=" h-auto" />
                <div class="absolute bottom-0 left-0 right-0 h-1/5 bg-gradient-to-t from-white to-transparent">
                </div>
              </div>
            </div>
          </div>
    </section>

    <!-- hero section ends -->



    <section class=" bg-primary-800 py-10 px-6  md:px-24 mx-auto">
      <!-- Section Header -->
      <div class="max-w-md mb-10" data-aos="fade-up">
        <h2 class="text-2xl md:text-3xl text-white font-bold mb-2">Why Choose OptionPay Travel Platform?</h2>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        <!-- Left Column - Features List -->
        <div class="lg:col-span-7 space-y-5">
          <!-- Flight Bookings -->
          <div class="bg-white text-gray-800 rounded-lg p-4 flex" data-aos="fade-up" data-aos-delay="50">
            <div class="flex-shrink-0 mr-4">
              <img src="assets/images/trevelling/svg/flight.svg" alt="Flight" class="w-12 h-12 mt-3">
            </div>
            <div class="flex-grow">
              <h3 class="font-semibold text-base text-gray-800 mb-1">Flight Bookings</h3>
              <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-1 text-xs">
                <li class="flex items-start">
                  <span class="text-gray-500 mr-1">•</span>
                  <span>Domestic and int. flights</span>
                </li>
                <li class="flex items-start">
                  <span class="text-gray-500 mr-1">•</span>
                  <span>Web check-in assistance</span>
                </li>
                <li class="flex items-start">
                  <span class="text-gray-500 mr-1">•</span>
                  <span>Multi-city booking options</span>
                </li>
                <li class="flex items-start">
                  <span class="text-gray-500 mr-1">•</span>
                  <span>Fare calendar view</span>
                </li>
              </ul>
            </div>
          </div>

          <!-- Platform Features -->
          <div class="flex" data-aos="fade-up" data-aos-delay="100">
            <div class="flex-shrink-0 mr-4 bg-white rounded-lg p-2 self-start mt-4">
              <img src="assets/images/trevelling/svg/features.svg" alt="Platform" class="w-8 h-8">
            </div>
            <div class="flex-grow">
              <h3 class="font-semibold text-white mb-1">Platform Features</h3>
              <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-1 text-xs text-white/80">
                <li class="flex items-start">
                  <span class="mr-1">•</span>
                  <span>Train Tickets</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-1">•</span>
                  <span>Tatkal booking enabled</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-1">•</span>
                  <span>IRCTC authorized</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-1">•</span>
                  <span>Alternative train suggestions</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-1">•</span>
                  <span>Group booking support</span>
                </li>
              </ul>
            </div>
          </div>

          <!-- Quick Payments -->
          <div class="flex" data-aos="fade-up" data-aos-delay="150">
            <div class="flex-shrink-0 mr-4 bg-white rounded-lg p-2 self-start mt-4">
              <img src="assets/images/trevelling/svg/quick.svg" alt="Payments" class="w-8 h-8">
            </div>
            <div class="flex-grow">
              <h3 class="font-semibold text-white mb-1">Quick Payments</h3>
              <ul class="grid grid-cols-1 gap-y-1 text-xs text-white/80">
                <li class="flex items-start">
                  <span class="mr-1">•</span>
                  <span>Same-day settlement to your bank account</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-1">•</span>
                  <span>Hassle-free cancellation and refunds</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-1">•</span>
                  <span>Track earnings in real-time</span>
                </li>
              </ul>
            </div>
          </div>

          <!-- Smart Booking Management -->
          <div class="flex" data-aos="fade-up" data-aos-delay="200">
            <div class="flex-shrink-0 mr-4 bg-white rounded-lg p-2 self-start mt-4">
              <img src="assets/images/trevelling/svg/smart.svg" alt="Booking" class="w-8 h-8">
            </div>
            <div class="flex-grow">
              <h3 class="font-semibold text-white mb-1">Smart Booking Management</h3>
              <ul class="grid grid-cols-1 gap-y-1 text-xs text-white/80">
                <li class="flex items-start">
                  <span class="mr-1">•</span>
                  <span>Direct integration with IRCTC and top travel providers</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-1">•</span>
                  <span>Real-time ticket booking for trains, flights, and buses</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-1">•</span>
                  <span>Instant hotel reservations across India</span>
                </li>
              </ul>
            </div>
          </div>

          <!-- Bus Services -->
          <div class="flex" data-aos="fade-up" data-aos-delay="250">
            <div class="flex-shrink-0 mr-4 bg-white rounded-lg p-2 self-start mt-4">
              <img src="assets/images/trevelling/svg/bus.svg" alt="Bus" class="w-8 h-8">
            </div>
            <div class="flex-grow">
              <h3 class="font-semibold text-white mb-1">Bus Services</h3>
              <ul class="grid grid-cols-1 gap-y-1 text-xs text-white/80">
                <li class="flex items-start">
                  <span class="mr-1">•</span>
                  <span>Pan-India bus network</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-1">•</span>
                  <span>Standard and AC buses</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-1">•</span>
                  <span>Pick-up point selection</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-1">•</span>
                  <span>Seat layout view</span>
                </li>
              </ul>
            </div>
          </div>

          <!-- Hotel & Accommodation -->
          <div class="flex" data-aos="fade-up" data-aos-delay="300">
            <div class="flex-shrink-0 mr-4 bg-white rounded-lg p-2 self-start mt-4">
              <img src="assets/images/trevelling/svg/hotel.svg" alt="Hotel" class="w-8 h-8">
            </div>
            <div class="flex-grow">
              <h3 class="font-semibold text-white mb-1">Hotel & Accommodation</h3>
              <ul class="grid grid-cols-1 gap-y-1 text-xs text-white/80">
                <li class="flex items-start">
                  <span class="mr-1">•</span>
                  <span>Properties across India</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-1">•</span>
                  <span>Verified guest reviews</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-1">•</span>
                  <span>Early check-in option</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-1">•</span>
                  <span>Special corporate rates</span>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Right Column - Trip Card -->
        <div class="lg:col-span-5 flex justify-center" data-aos="fade-left" data-aos-delay="150">
          <div class="w-full max-w-sm">
            <img src="assets/images/trevelling/travel-platform.png" alt="">

          </div>
        </div>
      </div>
    </section>


    <!-- pricing -->
    <section class="py-10 px-4">
      <div class="max-w-6xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
          <p class="text-sm font-bold tracking-wider text-primary-800 uppercase mb-2">PRICING</p>
          <h2 class="text-3xl font-bold text-primary-700 mb-4">Simple, transparent pricing</h2>
        </div>

        <!-- Toggle Switch -->
        <div class="flex items-center justify-center mb-12">
          <span class="mr-3 text-gray-700 font-medium">Monthly</span>
          <div class="relative inline-block w-12 align-middle select-none">
            <input type="checkbox" id="billing-toggle"
              class="peer absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer checked:right-0 checked:border-secondary-500 border-gray-300"
              style="top: 0; bottom: 0; margin: auto 0; transition: right 0.2s ease-in-out, border-color 0.2s ease-in-out;">
            <label for="billing-toggle"
              class="block h-6 overflow-hidden rounded-full bg-gray-300 cursor-pointer peer-checked:bg-secondary-400"
              style="transition: background-color 0.2s ease-in-out;">
            </label>
          </div>
          <span class="ml-3 text-gray-700 font-medium">Annually</span>
        </div>

        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Plan 1 -->
          <div
            class="bg-white rounded-xl border-1 border-gray-100 shadow-xl overflow-hidden transform transition-all duration-300 hover:drop-shadow-2xl hover:-translate-y-1">
            <div class="p-8 flex flex-col h-full">
              <!-- Plan Icon and Title -->
              <div class="flex items-center mb-6">
                <div class="w-16 h-16 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                  <div
                    class="w-10 h-10  overflow-hidden flex">
                    <img src="assets/images/banking/icon1.png" alt="Whitelabel Partner Icon">
                  </div>
                </div>
                <h3 class="text-3xl font-semibold text-gray-900">Whitelabel Partner</h3>
              </div>

              <!-- Plan Details -->
              <p class="text-sm text-gray-600 mb-6">For New Entrepreneurs</p>

              <!-- Features -->
              <h4 class="text-base font-semibold text-gray-800 mb-4">What's included</h4>
              <ul class="space-y-4 mb-6 flex-grow">
                <li class="flex items-start">
                  <div
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-secondary-500 flex items-center justify-center text-white mt-0.5">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700">Build your brand identity</span>
                </li>
                <li class="flex items-start">
                  <div
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-secondary-500 flex items-center justify-center text-white mt-0.5">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700">Full banking suite access</span>
                </li>
                <li class="flex items-start">
                  <div
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-secondary-500 flex items-center justify-center text-white mt-0.5">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700">Create agent networks</span>
                </li>
                <li class="flex items-start">
                  <div
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-secondary-500 flex items-center justify-center text-white mt-0.5">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700">Mobile app included</span>
                </li>
              </ul>

              <!-- Price -->
              <div class="mt-auto">
                <a href="book-a-demo"
                  class="block w-full py-3 px-4 bg-secondary-500 hover:bg-secondary-600 text-white font-medium text-center rounded-full transition-colors duration-300">
                  Get started
                </a>
              </div>
            </div>
          </div>

          <!-- Plan 2 - Featured -->
          <div
            class="bg-secondary-500 rounded-xl drop-shadow-xl overflow-hidden transform transition-all duration-300 hover:drop-shadow-2xl hover:-translate-y-1 relative md:-mt-8 md:mb-8 md:z-10">
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
                  <div class="w-10 h-10   flex">
                    <img src="assets/images/banking/icon2.png" alt="Whitelabel Reseller Icon">
                  </div>
                </div>
                <h3 class="text-3xl font-semibold  text-white">Whitelabel Reseller</h3>
              </div>

              <!-- Plan Details -->
              <p class="text-sm text-white text-opacity-90 mb-6">For Growing Businesses</p>

              <!-- Features -->
              <h4 class="text-base font-semibold text-white mb-4">What's included</h4>
              <ul class="space-y-4 mb-6 flex-grow">
                <li class="flex items-start">
                  <div
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-white flex items-center justify-center text-secondary-500 mt-0.5">
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
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-white flex items-center justify-center text-secondary-500 mt-0.5">
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
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-white flex items-center justify-center text-secondary-500 mt-0.5">
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
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-white flex items-center justify-center text-secondary-500 mt-0.5">
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
                  class="block w-full py-3 px-4 bg-white hover:bg-gray-100 text-secondary-600 font-medium text-center rounded-full transition-colors duration-300">
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
                  <div
                    class="w-10 h-10  overflow-hidden flex">
                    <img src="assets/images/banking/icon1.png" alt="Enterprise Partner Icon">
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
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-secondary-500 flex items-center justify-center text-white mt-0.5">
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
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-secondary-500 flex items-center justify-center text-white mt-0.5">
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
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-secondary-500 flex items-center justify-center text-white mt-0.5">
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
                    class="flex-shrink-0 w-5 h-5 rounded-full bg-secondary-500 flex items-center justify-center text-white mt-0.5">
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
                  class="block w-full py-3 px-4 bg-secondary-500 hover:bg-secondary-600 text-white font-medium text-center rounded-full transition-colors duration-300">
                  Get started
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>


    </section>

   

    <!-- Join India's Growing -->
    <section class="bg-primary-700 text-white min-h-[300px] md:min-h-[400px]">
      <div class="container mx-auto px-4 md:px-24 py-10 lg:py-20">
        <div class="flex flex-col md:flex-row items-center">
          <!-- Left Column - Text and CTA -->
          <div class="w-full md:w-1/3 mb-10 md:mb-0">
            <h2 class="text-4xl font-bold text-white leading-tight mb-4">Join India's Growing Travel Network</h2>
            <p class="text-white text-lg mb-8">OptionPay Your Partner in Making Digital Business Growth Simple</p>
            <a href="book-a-demo" class="inline-block bg-secondary-500 hover:bg-secondary-600 text-white font-medium py-3 px-8 rounded-lg transition duration-300">
              Begin Your Journey
            </a>
          </div>

          <!-- Right Column - Stats Grid -->
          <div class="w-full md:w-2/3 grid grid-cols-2 gap-0 border-l border-gray-500/30 ml-0 md:ml-10">
            <!-- Stat Box 1 -->
            <div class="border-r border-b border-gray-500/30 p-8">
              <div class="text-center">
                <p class="text-4xl font-bold text-white mb-3">20,000+</p>
                <p class="text-white text-center">Active travel ers</p>
              </div>
            </div>

            <!-- Stat Box 2 -->
            <div class="border-b border-gray-500/30 p-8">
              <div class="text-center">
                <p class="text-4xl font-bold text-white mb-3">1000+</p>
                <p class="text-white text-center">B2B partners across india</p>
              </div>
            </div>

            <!-- Stat Box 3 -->
            <div class="border-r border-gray-500/30 p-8">
              <div class="text-center">
                <p class="text-4xl font-bold text-white mb-3">50+</p>
                <p class="text-white text-center">Cities Pan-India presence</p>
              </div>
            </div>

            <!-- Stat Box 4 (with orange background) -->
            <div class="bg-secondary-500 p-8">
              <div class="text-center">
                <p class="text-4xl font-bold text-white mb-3">24/7</p>
                <p class="text-white text-center">Customer Support team</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Travel Network Section -->


    <!-- Join Section with Dark Blue Background -->
    <section class="relative py-10 px-4 sm:px-8 md:px-16 lg:px-20">
      <div class="container mx-auto">
        <!-- Join Panel with Starry Background -->
        <div class="bg-gradient-to-br from-secondary-700 to-secondary-600 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
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