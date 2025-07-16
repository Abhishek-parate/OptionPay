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

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQCF4VTL"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php include_once('includes/header.php'); ?>


  <main class="overflow-hidden">

    <!-- hero section -->
    <section class="bg-white px-4 sm:px-6 pt-8 sm:pt-12" data-aos="fade-up">
      <div class="max-w-7xl mx-auto">
        <div class="rounded-xl overflow-hidden mt-8">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-0">
            <!-- Left Content - Services List -->
            <div class="p-6 sm:p-8 md:p-12 flex flex-col justify-center" data-aos="fade-right">
              <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500 leading-tight">
                Make Government Services <br>
                Simple for Your Community
              </h1>
              <p class="text-gray-500 my-4 sm:mb-6 md:mb-8 text-sm sm:text-base">
                Partner with us to provide digital government <br> services to 50,000+ citizens in your
                area.
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
                <img src="assets/images/e-governance/banner.png" alt="Travel Business"
                  class="w-full h-full object-cover object-center md:object-contain" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- hero section ends -->

    <section class="bg-primary-600 text-white py-10 min-h-[650px] flex items-center">
      <div class="container px-4 md:px-6 max-w-7xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-10" data-aos="fade-up" data-aos-duration="800">
          Features
          of E-Governance</h1>

        <!-- Banking Services Tabs -->
        <div class="w-full" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <!-- Tab Buttons -->
          <div class="flex flex-wrap mb-8 gap-2 md:gap-3">
            <button
              class="tab-btn px-5 py-3 bg-secondary-600 text-white border border-white/30 rounded-full cursor-pointer text-sm font-medium transition-all duration-300 outline-none active"
              data-tab="aeps">
              <span>Digital Service Access</span>
            </button>
            <button
              class="tab-btn px-5 py-3 bg-transparent text-white border border-white/30 rounded-full cursor-pointer text-sm font-medium transition-all duration-300 outline-none"
              data-tab="aadhaar-pay">
              <span>Real-time Processing</span>
            </button>
            <button
              class="tab-btn px-5 py-3 bg-transparent text-white border border-white/30 rounded-full cursor-pointer text-sm font-medium transition-all duration-300 outline-none"
              data-tab="micro-atm">
              <span>Smart Documentation</span>
            </button>
            <button
              class="tab-btn px-5 py-3 bg-transparent text-white border border-white/30 rounded-full cursor-pointer text-sm font-medium transition-all duration-300 outline-none"
              data-tab="money-transfer">
              <span>Compliance Management</span>
            </button>
          </div>

          <!-- Tab Content -->
          <div class="relative min-h-[350px] overflow-hidden ">
            <!-- AePS Tab Content -->
            <div class="tab-pane block opacity-100 transition-opacity duration-300" id="aeps">
              <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="w-full md:w-1/2">
                  <h3 class="text-2xl md:text-3xl font-semibold mb-8">Bring essential government <br class="hidden md:hidden lg:block">
                    services closer to citizens through
                    <br class="hidden md:hidden lg:block"> our secure platform
                  </h3>
                  <ul class="space-y-4 ">
                    <li class="flex items-center">
                      <img src="assets/icons/blue-tick.svg" class="mr-3" alt="">
                      PAN card applications and updates
                    </li>
                    <li class="flex items-center">
                      <img src="assets/icons/blue-tick.svg" class="mr-3" alt="">
                      Aadhaar modifications
                    </li>
                    <li class="flex items-center">
                      <img src="assets/icons/blue-tick.svg" class="mr-3" alt="">
                      GST registration and filing support
                    </li>
                    <li class="flex items-center">
                      <img src="assets/icons/blue-tick.svg" class="mr-3" alt="">
                      Document verification services
                    </li>
                  </ul>
                </div>
                <div class="w-full md:w-1/2 flex justify-center">
                  <div class="relative flex justify-center" data-aos="fade-left"
                    data-aos-duration="1000">
                    <img src="assets/images/e-governance/features.png" alt="AePS Banking"
                      class="max-w-full h-auto max-h-[400px]">
                  </div>
                </div>
              </div>
            </div>

            <!-- Aadhaar Pay Tab Content -->
            <div class="tab-pane hidden opacity-0 transition-opacity duration-300" id="aadhaar-pay">
              <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="w-full md:w-1/2">
                  <h3 class="text-2xl md:text-3xl font-semibold mb-4">Track application status
                    instantly and<br class="hidden md:hidden lg:block"> get updates at each processing stage</h3>
                  <ul class="space-y-4">
                    <li class="flex items-center">
                      <img src="assets/icons/blue-tick.svg" class="mr-3" alt="">
                      Status notification
                    </li>
                    <li class="flex items-center">
                      <img src="assets/icons/blue-tick.svg" class="mr-3" alt="">
                      Document varification tracking
                    </li>
                    <li class="flex items-center">
                      <img src="assets/icons/blue-tick.svg" class="mr-3" alt="">
                      NApplication progress monitoring
                    </li>
                    <li class="flex items-center">
                      <img src="assets/icons/blue-tick.svg" class="mr-3" alt="">
                      Digital copy access
                    </li>
                  </ul>
                </div>
                <div class="w-full md:w-1/2 flex justify-center">
                  <div class="relative flex justify-center" data-aos="fade-left"
                    data-aos-duration="1000">
                    <img src="assets/images/e-governance/Real-time.png" alt="Aadhaar Pay"
                      class="max-w-full h-auto max-h-[400px]">
                  </div>
                </div>
              </div>
            </div>

            <!-- Micro ATM Tab Content -->
            <div class="tab-pane hidden opacity-0 transition-opacity duration-300" id="micro-atm">
              <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="w-full md:w-1/2">
                  <h3 class="text-2xl md:text-3xl font-semibold mb-4">Manage document submissions
                    and<br class="hidden md:hidden lg:block"> verifications througn one platform</h3>
                  <ul class="space-y-4">
                    <li class="flex items-center">
                      <img src="assets/icons/blue-tick.svg" class="mr-3" alt="">
                      Digital form filling
                    </li>
                    <li class="flex items-center">
                      <img src="assets/icons/blue-tick.svg" class="mr-3" alt="">
                      Document Storage
                    </li>
                    <li class="flex items-center">
                      <img src="assets/icons/blue-tick.svg" class="mr-3" alt="">
                      Instant verification
                    </li>
                    <li class="flex items-center">
                      <img src="assets/icons/blue-tick.svg" class="mr-3" alt="">
                      Secure submissions
                    </li>
                  </ul>
                </div>
                <div class="w-full md:w-1/2 flex justify-center">
                  <div class="relative flex justify-center" data-aos="fade-left"
                    data-aos-duration="1000">
                    <img src="assets/images/e-governance/document.png" alt="Micro ATM Services"
                      class="max-w-full h-auto max-h-[400px]">
                  </div>
                </div>
              </div>
            </div>

            <!-- Money Transfer Tab Content -->
            <div class="tab-pane hidden opacity-0 transition-opacity duration-300" id="money-transfer">
              <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="w-full md:w-1/2">
                  <h3 class="text-2xl md:text-3xl font-semibold mb-4">Handle regulatory requirements
                    <br class="hidden md:hidden lg:block">with built-in compilance tools
                  </h3>
                  <ul class="space-y-4">
                    <li class="flex items-center">
                      <img src="assets/icons/blue-tick.svg" class="mr-3" alt="">
                      Automated validations
                    </li>
                    <li class="flex items-center">
                      <img src="assets/icons/blue-tick.svg" class="mr-3" alt="">
                      Document authenticity checks
                    </li>
                    <li class="flex items-center">
                      <img src="assets/icons/blue-tick.svg" class="mr-3" alt="">
                      Digital signature support
                    </li>
                    <li class="flex items-center">
                      <img src="assets/icons/blue-tick.svg" class="mr-3" alt="">
                      Regulatory updates integration
                    </li>
                  </ul>
                </div>
                <div class="w-full md:w-1/2 flex justify-center">
                  <div class="relative flex justify-center" data-aos="fade-left"
                    data-aos-duration="1000">
                    <img src="assets/images/e-governance/compliance-management.png" alt="Domestic Money Transfer"
                      class="max-w-full h-auto max-h-[400px]">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- E-Governance Platform Services Section -->
    <section class="bg-white py-10 px-4 md:px-24">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-primary-700 mb-8 text-center" data-aos="fade-up">Our E-Governance
          Platform Services</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
          <!-- PAN Card Services -->
          <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 p-8"
            data-aos="fade-up" data-aos-delay="100">
            <div class="text-left mb-4">
              <div class="text-red-500 mb-4">
                <img src="assets/images/e-governance/pan-icon.svg" alt="Pan Image">
              </div>
              <h2 class="text-xl font-semibold text-secondary-500">PAN Card Services</h2>
            </div>
            <ul class="space-y-2 text-left">
              <li class="flex items-start"><span class="text-gray-700 mr-2">•</span><span
                  class="text-gray-600">New applications</span></li>
              <li class="flex items-start"><span class="text-gray-700 mr-2">•</span><span
                  class="text-gray-600">Information updates</span></li>
              <li class="flex items-start"><span class="text-gray-700 mr-2">•</span><span
                  class="text-gray-600">Downloads</span></li>
              <li class="flex items-start"><span class="text-gray-700 mr-2">•</span><span
                  class="text-gray-600">Status verification</span></li>
            </ul>
          </div>

          <!-- GST Services -->
          <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 p-8"
            data-aos="fade-up" data-aos-delay="200">
            <div class="text-left mb-4">
              <div class="text-red-500 mb-4">
                <img src="assets/images/e-governance/gst-icon.svg" alt="GST Image">
              </div>
              <h2 class="text-xl font-semibold text-secondary-500">GST Services</h2>
            </div>
            <ul class="space-y-2 text-left">
              <li class="flex items-start"><span class="text-gray-700 mr-2">•</span><span
                  class="text-gray-600">Business registration</span></li>
              <li class="flex items-start"><span class="text-gray-700 mr-2">•</span><span
                  class="text-gray-600">Returns filing</span></li>
              <li class="flex items-start"><span class="text-gray-700 mr-2">•</span><span
                  class="text-gray-600">Payment processing</span></li>
              <li class="flex items-start"><span class="text-gray-700 mr-2">•</span><span
                  class="text-gray-600">Modification support</span></li>
            </ul>
          </div>

          <!-- Document Services -->
          <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 p-8"
            data-aos="fade-up" data-aos-delay="300">
            <div class="text-left mb-4">
              <div class="text-red-500 mb-4">
                <img src="assets/images/e-governance/document-icon.svg" alt="Document Image">
              </div>
              <h2 class="text-xl font-semibold text-secondary-500">Document Services</h2>
            </div>
            <ul class="space-y-2 text-left">
              <li class="flex items-start"><span class="text-gray-700 mr-2">•</span><span
                  class="text-gray-600">Aadhaar updates</span></li>
              <li class="flex items-start"><span class="text-gray-700 mr-2">•</span><span
                  class="text-gray-600">Certificate copies</span></li>
              <li class="flex items-start"><span class="text-gray-700 mr-2">•</span><span
                  class="text-gray-600">Form submission</span></li>
              <li class="flex items-start"><span class="text-gray-700 mr-2">•</span><span
                  class="text-gray-600">Status monitoring</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>



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
                  <div class="w-10 h-10  overflow-hidden flex">
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

    <!-- Join India's Growing -->
    <section class="bg-primary-700 text-white min-h-[300px] md:min-h-[400px] py-12 md:py-10">
      <div class="container mx-auto px-4 md:px-24">
        <div class="flex flex-col md:flex-row items-center space-y-10 md:space-y-0 md:space-x-10">
          <!-- Left Column - Text and CTA -->
          <div class="w-full md:w-1/3" data-aos="fade-right" data-aos-duration="800">
            <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight mb-4">
              Join India's Growing Travel Network
            </h2>
            <p class="text-white text-base md:text-lg mb-8 opacity-90">
              OptionPay Your Partner in Making Digital Business Growth Simple
            </p>
            <a href="book-a-demo"
              class="inline-block bg-secondary-500 hover:bg-secondary-600 text-white font-medium py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105 active:scale-95 focus:outline-none focus:ring-2 focus:ring-secondary-400">
              Begin Your Journey
            </a>
          </div>

          <!-- Right Column - Stats Grid -->
          <div class="w-full md:w-2/3 grid grid-cols-2 md:border-l border-gray-500/30"
            data-aos="fade-left" data-aos-duration="800">
            <!-- Stat Box 1 -->
            <div
              class="border border-gray-500/20 p-6 md:p-8 flex items-center justify-center">
              <p class="text-white text-center text-sm md:text-base leading-snug">
                Established network<br /> serving 1 Lac+ <br /> merchants
              </p>
            </div>

            <!-- Stat Box 2 -->
            <div
              class="bg-gradient-to-br from-indigo-500 to-red-400 p-6 md:p-8 flex items-center justify-center">
              <p class="text-white text-center text-sm md:text-base leading-snug">
                Partnerships with 20+<br /> government<br /> departments
              </p>
            </div>

            <!-- Stat Box 3 -->
            <div
              class="border border-gray-500/20 p-6 md:p-8 flex items-center justify-center">
              <p class="text-white text-center text-sm md:text-base leading-snug">
                Quick settlement<br /> cycles
              </p>
            </div>

            <!-- Stat Box 4 -->
            <div
              class="border border-gray-500/20 p-6 md:p-8 flex items-center justify-center">
              <p class="text-white text-center text-sm md:text-base leading-snug">
                24/7 Customer<br /> Support team
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

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
                <a href="/contact-us" class="underline hover:text-white transition">
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

    document.addEventListener('DOMContentLoaded', function() {
      // Tab functionality
      const tabButtons = document.querySelectorAll('.tab-btn');
      const tabPanes = document.querySelectorAll('.tab-pane');

      // Function to set active tab
      function setActiveTab(tabId) {
        // Update tab buttons
        tabButtons.forEach(btn => {
          if (btn.getAttribute('data-tab') === tabId) {
            // Active button styling
            btn.classList.remove('bg-transparent');
            btn.classList.add('bg-secondary-600');
            btn.classList.add('animate-pulse-scale');

            // Remove animation class after animation completes
            setTimeout(() => {
              btn.classList.remove('animate-pulse-scale');
            }, 400); // Match the animation duration
          } else {
            // Inactive button styling
            btn.classList.remove('bg-secondary-600');
            btn.classList.add('bg-transparent');
          }
        });

        // Show/hide tab panes with smooth transitions
        tabPanes.forEach(pane => {
          if (pane.id === tabId) {
            // First make it visible but with 0 opacity
            pane.classList.remove('hidden');

            // Force a reflow so the browser processes the display change
            void pane.offsetWidth;

            // Now fade it in
            setTimeout(() => {
              pane.classList.add('opacity-100');
              pane.classList.remove('opacity-0');
            }, 10);
          } else {
            // Fade out
            pane.classList.remove('opacity-100');
            pane.classList.add('opacity-0');

            // After fade out completes, hide it completely
            setTimeout(() => {
              pane.classList.add('hidden');
            }, 300); // Match the transition duration
          }
        });

        // Reinitialize AOS for newly visible elements
        if (typeof AOS !== 'undefined') {
          setTimeout(() => {
            AOS.refresh();
          }, 350);
        }
      }

      // Add click event listeners to tab buttons
      tabButtons.forEach(btn => {
        btn.addEventListener('click', function() {
          const tabId = this.getAttribute('data-tab');
          setActiveTab(tabId);
        });
      });

      // Initialize first tab as active if none are marked active
      const activeTabBtn = document.querySelector('.tab-btn.active');
      if (activeTabBtn) {
        const activeTabId = activeTabBtn.getAttribute('data-tab');
        setActiveTab(activeTabId);
      } else if (tabButtons.length > 0) {
        const firstTabId = tabButtons[0].getAttribute('data-tab');
        setActiveTab(firstTabId);
      }
    });
  </script>
  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/header.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>