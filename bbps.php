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
  <title>BBPS Bill Payment Platform | OptionPay</title>
  <meta name="description" content="Become a BBPS agent with OptionPay. Offer utility bill payments for electricity, water, gas, and more.">
  <meta name="keywords" content="bbps service, OptionPay">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="./assets/css/style.css" rel="stylesheet">
  <link href="./assets/css/header.css" rel="stylesheet">
  <link href="./assets/css/text-scroll.css" rel="stylesheet">
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

    <!-- Utility Services Section -->
    <section class="relative overflow-hidden bg-white py-6 sm:py-8 md:py-10">
    

      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:py-12 relative z-10">
        <div class="rounded-xl overflow-hidden">
          <div class="flex flex-col md:flex-row md:items-center">
            <!-- Content - Always First -->
            <div class="p-4 md:p-8 lg:p-12 pt-8 md:w-1/2" data-aos="fade-right" data-aos-duration="1000"
              data-aos-once="true">
              <p class="font-bold text-primary-600 text-sm sm:text-base mt-2" data-aos="fade-up"
                data-aos-delay="100" data-aos-duration="800" data-aos-once="true">
                BBPS
              </p>
              <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500 mb-3 sm:mb-4" data-aos="fade-up"
                data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
                One-stop bill payment <br class="hidden md:hidden lg:block">platform for business growth </h1>
              <p class="text-gray-700 mb-6 sm:mb-8 text-sm sm:text-base" data-aos="fade-up"
                data-aos-delay="400" data-aos-duration="800" data-aos-once="true">
                Register for BBPS services to provide bill payment solutions. <br class="hidden md:hidden lg:block"> Help customers pay
                utility bills, education fees, and more <br class="hidden md:hidden lg:block"> through a single platform. </p>

              <a href="book-a-demo"
                class="inline-flex items-center justify-center px-4 sm:px-5 py-2 sm:py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-lg mb-4"
                data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
                Join the Platform </a>

              <div class="flex items-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm shadow-sm"
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

            <!-- Image - Always Second -->
            <div class="relative md:w-1/2 flex justify-center items-center mt-6 md:mt-0"
              data-aos="fade-left" data-aos-duration="1200" data-aos-once="true">
              <!-- Main Image -->
              <div class="relative z-20 w-full px-4 sm:px-0">
                <img src="assets/images/bbps/banner.png" alt="ONDC Credit Platform Dashboard"
                  class="w-full md:w-4/5 lg:w-3/4 h-auto mx-auto" />
                <div
                  class="absolute bottom-0 left-0 right-0 h-2/5 bg-gradient-to-t from-white to-transparent">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="w-full overflow-hidden py-2 bg-primary-600 ">
      <div class="max-w-7xl mx-auto flex items-center space-x-6 px-4 py-12 text-white">
        <p class="font-semibold whitespace-nowrap">Why choose us?</p>
        <div class="relative w-full overflow-hidden h-6">
          <div class="absolute flex whitespace-nowrap infinite-scroll">
            <!-- duplicated content set for seamless loop -->
            <div class="flex space-x-6">
              <span class="px-4 border-l border-white">Utility Bill Payments</span>
              <span class="px-4 border-l border-white">Education Fees</span>
              <span class="px-4 border-l border-white">Insurance Premiums</span>
              <span class="px-4 border-l border-white">Mobile/DTH Recharge</span>
              <span class="px-4 border-l border-white">Property Tax</span>
            </div>
            <div class="flex space-x-6 ml-6">
              <span class="px-4 border-l border-white">Utility Bill Payments</span>
              <span class="px-4 border-l border-white">Education Fees</span>
              <span class="px-4 border-l border-white">Insurance Premiums</span>
              <span class="px-4 border-l border-white">Mobile/DTH Recharge</span>
              <span class="px-4 border-l border-white">Property Tax</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="flex flex-col md:flex-row">
      <!-- Left Side - Navy Blue Panel -->
      <div class="bg-primary-800 text-white p-8 flex flex-col justify-center md:w-1/4">
        <h2 class="text-4xl font-bold mb-2">Key</h2>
        <h2 class="text-4xl font-bold">Features</h2>

        <div class="mt-6 text-3xl font-bold origin-left hidden md:block">
          <img src="assets/images/bbps/bharat.png" alt="Dashboard" class="w-24 h-auto" />
          <!-- Added w-24 class to make image smaller -->
        </div>
      </div>

      <!-- Right Side - Coral Panel with Grid -->
      <div class="bg-secondary-500 p-8 md:w-3/4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Bill Payments -->
          <div class="mb-6">
            <div class="flex items-center mb-4">
              <img src="assets/images/bbps/icon1.svg" alt="Dashboard" />
            </div>
            <h3 class="text-xl font-bold text-white mb-2">Bill Payments</h3>
            <p class="text-white">Let customers pay electricity, water,</br> gas, and other utility bills
              instantly.</br> Our BBPS platform ensures secure </br>transactions with real-time
              </br>confirmations.</p>
          </div>

          <!-- Education Fees -->
          <div class="mb-6">
            <div class="flex items-center mb-4">
              <img src="assets/images/bbps/icon2.svg" alt="Dashboard" />
            </div>
            <h3 class="text-xl font-bold text-white mb-2">Education Fees</h3>
            <p class="text-white">Enable parents to pay school and </br>college fees directly.
              Simplified</br> interface makes education fee </br>payments hassle-free.</p>
          </div>

          <!-- Tax Payments -->
          <div class="mb-6">
            <div class="flex items-center mb-4">
              <img src="assets/images/bbps/icon3.svg" alt="Dashboard" />
            </div>
            <h3 class="text-xl font-bold text-white mb-2">Tax Payments</h3>
            <p class="text-white">Provide property tax and other</br> municipal payment services. Quick
              </br>processing with digital receipts.</p>
          </div>

          <!-- Insurance Premiums -->
          <div class="mb-6">
            <div class="flex items-center mb-4">
              <img src="assets/images/bbps/icon4.svg" alt="Dashboard" />
            </div>
            <h3 class="text-xl font-bold text-white mb-2">Insurance Premiums</h3>
            <p class="text-white">Help customers manage insurance</br> premium payments. Support for life,
              </br>health, and motor insurance.</p>
          </div>

          <!-- Mobile/DTH Services -->
          <div class="mb-6">
            <div class="flex items-center mb-4">
              <img src="assets/images/bbps/icon5.svg" alt="Dashboard" />
            </div>
            <h3 class="text-xl font-bold text-white mb-2">Mobile/DTH Services</h3>
            <p class="text-white">Easy recharge options for prepaid</br> mobile and DTH services. Multiple
              </br>operator support across India.</p>
          </div>
        </div>
      </div>
    </section>


    <!-- Services Section with White Background -->
    <section class="bg-white py-10 px-4" data-aos="fade" data-aos-duration="800" data-aos-once="true">
      <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row">
          <!-- Left Column - Services List -->
          <div class="w-full md:w-1/2 pr-0 md:pr-8 mb-4 mt-4 md:mb-0" data-aos="fade-right"
            data-aos-duration="1000" data-aos-once="true">
            <h2 class="text-4xl font-bold text-primary-500 mb-8" data-aos="fade-up" data-aos-delay="100"
              data-aos-duration="800" data-aos-once="true">
              Benefits for BBPS Agents:
            </h2>

            <ul class="space-y-4">
              <!-- Service Item 1 -->
              <li class="flex items-start" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"
                data-aos-once="true">
                <div class="flex-shrink-0 h-6 w-6 rounded-full flex items-center justify-center mt-1"
                  data-aos="zoom-in" data-aos-delay="250" data-aos-duration="400"
                  data-aos-once="true">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                    <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none" />
                    <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <span class="ml-3 text-primary-500">Low investment, high returns</span>
              </li>

              <!-- Service Item 2 -->
              <li class="flex items-start" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600"
                data-aos-once="true">
                <div class="flex-shrink-0 h-6 w-6 rounded-full flex items-center justify-center mt-1"
                  data-aos="zoom-in" data-aos-delay="350" data-aos-duration="400"
                  data-aos-once="true">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                    <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none" />
                    <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <span class="ml-3 text-primary-500">Simple smartphone/computer setup</span>
              </li>

              <!-- Service Item 3 -->
              <li class="flex items-start" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600"
                data-aos-once="true">
                <div class="flex-shrink-0 h-6 w-6 rounded-full flex items-center justify-center mt-1"
                  data-aos="zoom-in" data-aos-delay="450" data-aos-duration="400"
                  data-aos-once="true">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                    <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none" />
                    <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <span class="ml-3 text-primary-500">Attractive commission per transaction</span>
              </li>

              <!-- Service Item 4 -->
              <li class="flex items-start" data-aos="fade-up" data-aos-delay="500" data-aos-duration="600"
                data-aos-once="true">
                <div class="flex-shrink-0 h-6 w-6 rounded-full flex items-center justify-center mt-1"
                  data-aos="zoom-in" data-aos-delay="550" data-aos-duration="400"
                  data-aos-once="true">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                    <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none" />
                    <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <span class="ml-3 text-primary-500">Quick processing under 60 seconds</span>
              </li>

              <!-- Service Item 5 -->
              <li class="flex items-start" data-aos="fade-up" data-aos-delay="600" data-aos-duration="600"
                data-aos-once="true">
                <div class="flex-shrink-0 h-6 w-6 rounded-full flex items-center justify-center mt-1"
                  data-aos="zoom-in" data-aos-delay="650" data-aos-duration="400"
                  data-aos-once="true">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                    <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none" />
                    <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <span class="ml-3 text-primary-500">Growing customer base</span>
              </li>

              <!-- Service Item 6 -->
              <li class="flex items-start" data-aos="fade-up" data-aos-delay="700" data-aos-duration="600"
                data-aos-once="true">
                <div class="flex-shrink-0 h-6 w-6 rounded-full flex items-center justify-center mt-1"
                  data-aos="zoom-in" data-aos-delay="750" data-aos-duration="400"
                  data-aos-once="true">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                    <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none" />
                    <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <span class="ml-3 text-primary-500">Regular income through bill payments</span>
              </li>
            </ul>
          </div>

          <!-- Right Column - Image -->
          <div class="w-full md:w-1/2" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
            <div class="p-4 rounded-xl">
              <img src="assets/images/bbps/benefits.png" alt="BBPS Agent Benefits" class="w-full h-auto"
                data-aos="zoom-in" data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
            </div>
          </div>
        </div>
      </div>
    </section>





    <!-- FAQ Section -->
    <section class="py-10 max-w-3xl mx-auto px-4">
      <!-- Section Title -->
      <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-primary-800 mb-2">FAQ</h2>
      </div>

      <!-- FAQ Accordion -->
      <div class="space-y-4">
        <?php
        $faqItems = [
          [
            'question' => 'What is BBPS?',
            'answer' => 'BBPS is a unified bill payment platform that lets customers pay various bills through a single point.',
            'isOpen' => true
          ],
          [
            'question' => 'What bills can customers pay through BBPS?',
            'answer' => 'Customers can pay utility bills, education fees, insurance premiums, property tax, and recharge mobile/DTH services.',
            'isOpen' => false
          ],
          [
            'question' => 'How do I start offering BBPS services?',
            'answer' => 'Register with OptionPay as a BBPS agent. We provide the necessary training and platform access.',
            'isOpen' => false
          ]
        ];

        foreach ($faqItems as $index => $item) :
          $isOpen = $item['isOpen'];
          $questionColor = $isOpen ? 'text-secondary-500' : 'text-primary-800';
          $iconColor = $isOpen ? 'text-secondary-500' : 'text-primary-800';
          $icon = $isOpen ? '−' : '+';
          $contentClass = $isOpen ? '' : 'hidden';
        ?>
          <!-- FAQ Item -->
          <div class="border-b border-gray-200 pb-4" id="faq-item-<?php echo $index; ?>">
            <button class="flex justify-between items-center w-full text-left faq-toggle">
              <h3 class="text-lg font-medium <?php echo $questionColor; ?>"><?php echo $item['question']; ?>
              </h3>
              <span class="<?php echo $iconColor; ?> text-2xl"><?php echo $icon; ?></span>
            </button>
            <div class="<?php echo $contentClass; ?> mt-3 text-gray-500 faq-content">
              <p><?php echo $item['answer']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
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

  <?php include_once('includes/footer.php'); ?>

  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/header.js"></script>
  <script src="./assets/js/faq.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>