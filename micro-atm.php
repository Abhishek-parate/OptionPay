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
  <title>Micro ATM Service Provider | OptionPay</title>
  <meta name="description" content="Offer Micro ATM services with OptionPay. Provide cash withdrawals and balance checks via debit cards.">
  <meta name="keywords" content="micro atm service, OptionPay">
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
    <!-- Micro ATM Section -->
    <section class="relative overflow-hidden bg-white py-6 sm:py-8 md:py-10">
     
      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:py-12 relative z-10">
        <div class="rounded-xl overflow-hidden">
          <div class="grid grid-cols-1 md:grid-cols-2">
            <!-- Left Content - Services List -->
            <div class="px-2 pt-8 md:px-12 md:pt-12 lg:px-16 lg:pt-16" data-aos="fade-right"
              data-aos-duration="1000">
              <p class="font-semi-bolder text-primary-600 font-bold mt-2">Micro ATM</p>
              <h1 class="text-2xl md:text-4xl font-bold text-secondary-500">Turn Your Shop into a Bank
              </h1>
              <h1 class="text-2xl md:text-4xl font-bold text-secondary-500 mb-4">Branch with MicroATM</h1>
              <p class="text-black mb-5">Offer instant cash withdrawals and basic banking to your
                customers with our MicroATM services.</p>
              <a href="book-a-demo"
                class="inline-flex mb-3 items-center justify-center px-5 py-3 md:mb-4 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md">
                Start Your Journey
              </a>
              <div class="flex items-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm shadow-sm"
                data-aos="fade-up" data-aos-delay="200">
                <div class="flex -space-x-2">
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
            <div class="relative max-w-5xl mx-auto" data-aos="fade-left" data-aos-duration="1000">
              <!-- Main Dashboard Image -->
              <div class="relative z-20">
                <img src="assets/images/micro-atm/micro-atm-hero.png" alt="Dashboard" class="h-auto" />
                <div
                  class="absolute bottom-0 left-0 right-0 h-2/5 bg-gradient-to-t from-white to-transparent">
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>




    <!-- Key Features Section with Split Background -->
    <section class="flex flex-col md:flex-row mt-12">
      <!-- Left Side - Dark Blue Background with Title -->
      <div class="bg-primary-800 text-white py-10 px-8 md:w-1/4 flex flex-col items-start justify-center"
        data-aos="fade-right" data-aos-duration="1000">
        <h2 class="text-4xl text-white font-bold leading-tight mb-6">
          MicroATM<br>Platform
        </h2>

        <a href="book-a-demo"
          class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md">
          Read More
        </a>
      </div>

      <!-- Right Side - Red Background with Features -->
      <div class="bg-secondary-500 text-white py-12 px-8 md:w-3/4"
        data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Feature 1 -->
          <div data-aos="fade-up" data-aos-delay="300">
            <div class="mb-4">
              <img src="assets/images/micro-atm/icon1.svg" alt="Dashboard" class="mt-4 mb-2" />
            </div>
            <h3 class="text-xl font-bold mb-3 text-white">Card-based Transactions</h3>
            <ul class="space-y-2">
              <li class="flex items-start text-white"><span class="mr-2">•</span><span>Accept debit cards for cash withdrawals</span></li>
              <li class="flex items-start text-white"><span class="mr-2">•</span><span>Support for all major banks</span></li>
              <li class="flex items-start text-white"><span class="mr-2">•</span><span>Real-time balance checks</span></li>
            </ul>
          </div>

          <!-- Feature 2 -->
          <div data-aos="fade-up" data-aos-delay="400">
            <div class="mb-4">
              <img src="assets/images/micro-atm/icon2.svg" alt="Dashboard" class="mt-4 mb-2" />
            </div>
            <h3 class="text-xl font-bold mb-3 text-white">Simple Operations</h3>
            <ul class="space-y-2">
              <li class="flex items-start text-white"><span class="mr-2">•</span><span>Easy-to-use device interface</span></li>
              <li class="flex items-start text-white"><span class="mr-2">•</span><span>Quick transaction processing</span></li>
              <li class="flex items-start text-white"><span class="mr-2">•</span><span>Minimal training needed</span></li>
            </ul>
          </div>

          <!-- Feature 3 -->
          <div data-aos="fade-up" data-aos-delay="500">
            <div class="mb-4">
              <img src="assets/images/micro-atm/icon3.svg" alt="Dashboard" class="mt-4 mb-2" />
            </div>
            <h3 class="text-xl font-bold mb-3 text-white">Secure Payments</h3>
            <ul class="space-y-2">
              <li class="flex items-start text-white"><span class="mr-2">•</span><span>PIN-based authentication</span></li>
              <li class="flex items-start text-white"><span class="mr-2">•</span><span>End-to-end encryption</span></li>
              <li class="flex items-start text-white"><span class="mr-2">•</span><span>Bank-grade Security Standards</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>


    <!-- Life Insurance Solutions Section -->
    <section class="w-full py-12">
      <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-8">
          <!-- Left side with illustration -->
          <div class="w-full md:w-1/2" data-aos="fade-right">
            <img src="assets/images/micro-atm/microatm-balance.png" alt="Life Insurance">
          </div>

          <!-- Right side with content -->
          <div class="w-full md:w-1/2" data-aos="fade-left">
            <h2 class="text-3xl font-bold text-primary-600 mb-6 mt-6" data-aos="fade-up" data-aos-delay="100">
              MicroATM Agents
            </h2>

            <ul class="space-y-5 mb-8">
              <?php
              $microatms = [
                'Daily earnings through commission',
                'Low setup investment',
                'Simple smartphone/computer operation',
                'Transaction completion under 1 minute',
                'Build customer trust as local banker',
                'Regular cash flow management',
              ];
              $delay = 200;
              foreach ($microatms as $atm) :
              ?>
                <li class="flex items-start" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                  <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
                    <svg width="19" height="25" viewBox="0 0 19 25" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_1700_1996)">
                        <path
                          d="M9.5 4C14.3731 4 18 7.62693 18 12.5C18 17.4003 14.4003 21 9.5 21C4.5997 21 1 17.4003 1 12.5C1 7.62693 4.62693 4 9.5 4Z"
                          fill="#e6edf5" stroke="#0e3163" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" />
                        <path
                          d="M5.57812 14.3943C7.20478 15.3973 7.84749 16.3676 7.84749 16.3676C7.84749 16.3676 8.77121 14.58 10.4029 12.5476C12.1604 10.3584 13.3887 9.47705 13.3887 9.47705"
                          stroke="#0e3163" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" />
                      </g>
                      <defs>
                        <clipPath id="clip0_1700_1996">
                          <rect width="19" height="19" fill="white" transform="translate(0 3)" />
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700"><?php echo $atm; ?></span>
                </li>
              <?php
                $delay += 100;
              endforeach;
              ?>
            </ul>
          </div>
        </div>
      </div>
    </section>


    <!-- Platform Features Section -->
    <section class="max-w-7xl mx-auto px-4">
      <div class="bg-primary-500 rounded-3xl overflow-hidden relative">
        <!-- Content Container -->
        <div class="flex flex-col md:flex-row">
          <!-- Left side content -->
          <div class="p-4 md:p-4 lg:px-10 md:w-1/2 z-10">
            <!-- Section Heading -->
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-8 mt-12">
              Platform<br>Features
            </h2>

            <!-- Features List - Two Column Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-4 mb-8">
              <!-- Feature 1 -->
              <div class="flex items-start">
                <div class="flex-shrink-0 h-6 w-6 rounded-full  flex items-center justify-center">
                  <svg width="19" height="25" viewBox="0 0 19 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_335_5678)">
                      <path
                        d="M9.5 4C14.3731 4 18 7.62693 18 12.5C18 17.4003 14.4003 21 9.5 21C4.5997 21 1 17.4003 1 12.5C1 7.62693 4.62693 4 9.5 4Z"
                        fill="#24223E" fill-opacity="0.1" stroke="#EDF0F7" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                      <path
                        d="M5.57812 14.3943C7.20478 15.3973 7.84749 16.3676 7.84749 16.3676C7.84749 16.3676 8.77121 14.58 10.4029 12.5476C12.1604 10.3584 13.3887 9.47705 13.3887 9.47705"
                        stroke="#EDF0F7" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </g>
                    <defs>
                      <clipPath id="clip0_335_5678">
                        <rect width="19" height="19" fill="white" transform="translate(0 3)" />
                      </clipPath>
                    </defs>
                  </svg>

                </div>
                <span class="ml-3 text-white">Balance inquiry</span>
              </div>

              <!-- Feature 2 -->
              <div class="flex items-start">
                <div class="flex-shrink-0 h-6 w-6 rounded-full  flex items-center justify-center">
                  <svg width="19" height="25" viewBox="0 0 19 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_335_5678)">
                      <path
                        d="M9.5 4C14.3731 4 18 7.62693 18 12.5C18 17.4003 14.4003 21 9.5 21C4.5997 21 1 17.4003 1 12.5C1 7.62693 4.62693 4 9.5 4Z"
                        fill="#24223E" fill-opacity="0.1" stroke="#EDF0F7" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                      <path
                        d="M5.57812 14.3943C7.20478 15.3973 7.84749 16.3676 7.84749 16.3676C7.84749 16.3676 8.77121 14.58 10.4029 12.5476C12.1604 10.3584 13.3887 9.47705 13.3887 9.47705"
                        stroke="#EDF0F7" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </g>
                    <defs>
                      <clipPath id="clip0_335_5678">
                        <rect width="19" height="19" fill="white" transform="translate(0 3)" />
                      </clipPath>
                    </defs>
                  </svg>

                </div>
                <span class="ml-3 text-white">Fund transfers</span>
              </div>

              <!-- Feature 3 -->
              <div class="flex items-start">
                <div class="flex-shrink-0 h-6 w-6 rounded-full  flex items-center justify-center">
                  <svg width="19" height="25" viewBox="0 0 19 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_335_5678)">
                      <path
                        d="M9.5 4C14.3731 4 18 7.62693 18 12.5C18 17.4003 14.4003 21 9.5 21C4.5997 21 1 17.4003 1 12.5C1 7.62693 4.62693 4 9.5 4Z"
                        fill="#24223E" fill-opacity="0.1" stroke="#EDF0F7" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                      <path
                        d="M5.57812 14.3943C7.20478 15.3973 7.84749 16.3676 7.84749 16.3676C7.84749 16.3676 8.77121 14.58 10.4029 12.5476C12.1604 10.3584 13.3887 9.47705 13.3887 9.47705"
                        stroke="#EDF0F7" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </g>
                    <defs>
                      <clipPath id="clip0_335_5678">
                        <rect width="19" height="19" fill="white" transform="translate(0 3)" />
                      </clipPath>
                    </defs>
                  </svg>

                </div>
                <span class="ml-3 text-white">Cash withdrawals</span>
              </div>

              <!-- Feature 4 -->
              <div class="flex items-start">
                <div class="flex-shrink-0 h-6 w-6 rounded-full  flex items-center justify-center">
                  <svg width="19" height="25" viewBox="0 0 19 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_335_5678)">
                      <path
                        d="M9.5 4C14.3731 4 18 7.62693 18 12.5C18 17.4003 14.4003 21 9.5 21C4.5997 21 1 17.4003 1 12.5C1 7.62693 4.62693 4 9.5 4Z"
                        fill="#24223E" fill-opacity="0.1" stroke="#EDF0F7" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                      <path
                        d="M5.57812 14.3943C7.20478 15.3973 7.84749 16.3676 7.84749 16.3676C7.84749 16.3676 8.77121 14.58 10.4029 12.5476C12.1604 10.3584 13.3887 9.47705 13.3887 9.47705"
                        stroke="#EDF0F7" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </g>
                    <defs>
                      <clipPath id="clip0_335_5678">
                        <rect width="19" height="19" fill="white" transform="translate(0 3)" />
                      </clipPath>
                    </defs>
                  </svg>

                </div>
                <span class="ml-3 text-white">Card payments</span>
              </div>

              <!-- Feature 5 -->
              <div class="flex items-start">
                <div class="flex-shrink-0 h-6 w-6 rounded-full  flex items-center justify-center">
                  <svg width="19" height="25" viewBox="0 0 19 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_335_5678)">
                      <path
                        d="M9.5 4C14.3731 4 18 7.62693 18 12.5C18 17.4003 14.4003 21 9.5 21C4.5997 21 1 17.4003 1 12.5C1 7.62693 4.62693 4 9.5 4Z"
                        fill="#24223E" fill-opacity="0.1" stroke="#EDF0F7" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                      <path
                        d="M5.57812 14.3943C7.20478 15.3973 7.84749 16.3676 7.84749 16.3676C7.84749 16.3676 8.77121 14.58 10.4029 12.5476C12.1604 10.3584 13.3887 9.47705 13.3887 9.47705"
                        stroke="#EDF0F7" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </g>
                    <defs>
                      <clipPath id="clip0_335_5678">
                        <rect width="19" height="19" fill="white" transform="translate(0 3)" />
                      </clipPath>
                    </defs>
                  </svg>

                </div>
                <span class="ml-3 text-white">Mini statements</span>
              </div>
            </div>

            <!-- CTA Button -->
            <a href="book-a-demo" rel="noopener noreferrer"><button
                class="w-full sm:w-auto bg-secondary-500 hover:bg-secondary-600 text-white font-medium py-3 px-8 rounded-lg transition duration-300 mb-6">
                Get started
              </button></a>

            <!-- Partners Badge -->
            <div class="flex items-center bg-white rounded-full py-1 px-2 w-fit">
              <div class="flex -space-x-2 mr-2">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Partner"
                  class="w-6 h-6 rounded-full border-2 border-white">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Partner"
                  class="w-6 h-6 rounded-full border-2 border-white">
                <img src="https://randomuser.me/api/portraits/men/86.jpg" alt="Partner"
                  class="w-6 h-6 rounded-full border-2 border-white">
              </div>
              <span class="text-xs text-gray-600">1 Lac+ partners across India</span>
            </div>
          </div>

          <!-- Right side with POS machine illustration -->
          <div class="md:w-1/2 relative">
            <!-- Circular patterns -->

            <!-- Stars Background SVG -->
            <div class="absolute z-0 bottom-0 right-0 ">
              <img src="assets/images/micro-atm/bg-img.svg" alt="background dots"
                class="w-full h-full object-cover bottom-0 ">
            </div>



            <div class="relative flex justify-center items-end h-full px-8 z-10">
              <!-- Using a placeholder for the POS machine -->
              <div class="relative w-64 h-96 mx-auto mb-0 mt-auto">
                <!-- Phone body -->
                <img src="assets/images/micro-atm/pos-machine.png" alt="POS Machine"
                  class="max-w-xs md:max-w-sm lg:max-w-md mx-auto h-96 bottom-0">
              </div>
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
            'question' => 'What is MicroATM?',
            'answer' => 'A MicroATM is a device that lets shop owners provide basic banking services like cash withdrawal and balance checks using customers\' debit cards.',
            'isOpen' => true
          ],
          [
            'question' => 'How much can customers withdraw?',
            'answer' => 'Customers can withdraw up to ₹10,000 per transaction, subject to their bank\'s daily limits.',
            'isOpen' => false
          ],
          [
            'question' => 'What do I need to start?',
            'answer' => 'You need a smartphone/computer, internet connection, and our MicroATM device. We provide complete setup support.',
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
  <script src="./assets/js/faq.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>