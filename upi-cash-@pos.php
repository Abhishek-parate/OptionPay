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
  <title>UPI Cash Withdrawal Service | OptionPay</title>
  <meta name="description" content="Offer UPI cash withdrawals at your POS with OptionPay. Turn your shop into a cash point for customers.">
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
    <!-- hero section -->
    <section class="relative overflow-hidden bg-white py-6 sm:py-8 md:py-10 mt-6">
      

      

      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:py-12 relative z-10">
        <div class="rounded-xl overflow-hidden">
          <div class="flex flex-col md:flex-row md:items-center">
            <!-- Content - Always First -->
            <div class="p-4 md:p-8 lg:p-12 pt-8" data-aos="fade-right" data-aos-duration="1000"
              data-aos-once="true">
              <p class="font-bold text-primary-600 text-sm sm:text-base mb-2" data-aos="fade-up"
                data-aos-delay="100" data-aos-duration="800" data-aos-once="true">UPI Cash @POS
              </p>
              <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500 mb-3 sm:mb-4" data-aos="fade-up"
                data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
                Transform Your POS<br class="hidden md:hidden lg:block"> into a Cash Point
              </h1>
              <p class="black mb-6 sm:mb-8 text-sm sm:text-base" data-aos="fade-up" data-aos-delay="400"
                data-aos-duration="800" data-aos-once="true">
                Smart copy that connects with target audience in tier 2-3 cities Let<br class="hidden md:hidden lg:block"> your customers
                withdraw cash while they shop. Add UPI Cash<br class="hidden md:hidden lg:block"> withdrawal service to your POS
                terminal.</p>

              <a href="book-a-demo"
                class="inline-flex items-center justify-center px-4 sm:px-5 py-2 sm:py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-lg"
                data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
                Start Now</a>

              <div class="mt-6 md:mt-4 flex items-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm shadow-sm"
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
            <div class="w-full md:w-1/2 order-2" data-aos="fade-left" data-aos-duration="1200"
              data-aos-once="true">
              <!-- Main Dashboard Image -->
              <div class="relative z-20">
                <img src="assets/images/upi-cash/banner.png" alt="Dashboard"
                  class="w-full h-auto" />
                <div
                  class="absolute bottom-0 left-0 right-0 h-2/5 bg-gradient-to-t from-white to-transparent">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- Why Choose OptionPay DMT Platform Service -->
    <section class="py-12 mb-6 mt-6 bg-primary-100">
      <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-primary-700 mb-8" data-aos="fade-up" data-aos-duration="1000">Why Choose OptionPay UPI Cash @POS Platform</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <!-- Feature 1 - Secure Payments -->
          <div class="rounded-lg border bg-white p-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <h3 class="text-xl font-semibold text-secondary-500 mb-3">Cash Point</h3>
            <p class="text-gray-700">
              Turn your store into a neighborhood cash point. Let customers withdraw cash during regular purchases through UPI.
            </p>
          </div>

          <!-- Feature 2 - Simple Setup -->
          <div class="rounded-lg border p-6 bg-white" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <h3 class="text-xl font-semibold text-secondary-500 mb-3">Simple Process</h3>
            <p class="text-gray-700">
              Quick cash withdrawals through existing POS terminals. Customers pay via UPI and receive cash instantly.
            </p>
          </div>

          <!-- Feature 3 - Quick Settlements -->
          <div class="rounded-lg border p-6 bg-white" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
            <h3 class="text-xl font-semibold text-secondary-500 mb-3">Additional Income</h3>
            <p class="text-gray-700">
              Earn commission on each withdrawal transaction while providing an essential service to your community.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Life Insurance Solutions Section with AOS Animations -->
    <section class="w-full py-4" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">

      <div class="max-w-6xl mx-auto px-4 py-2">
        <div class="flex flex-col md:flex-row items-center gap-8">
          <!-- Image First on Mobile, Second on Desktop -->
          <div class="w-full md:w-1/2 order-1 md:order-2" data-aos="fade-left" data-aos-duration="1200"
            data-aos-once="true">
            <img src="assets/images/upi-cash/merchant.png" alt="Account Features"
              class="w-full h-auto">
          </div>
          <!-- Content Second on Mobile, First on Desktop -->
          <div class="w-full md:w-1/2 order-2 md:order-1" data-aos="fade-right" data-aos-duration="1200"
            data-aos-once="true">
            <h2 class="text-3xl font-bold text-secondary-500 mt-6 mb-4" data-aos="fade-up" data-aos-delay="100"
              data-aos-duration="800" data-aos-once="true">Benefits for Merchants</h2>
            <ul class="space-y-5 mb-8">
              <?php
              $benefits = [
                'No additional hardware needed - use your existing POS device',
                'Build customer loyalty through added services',
                'Regular settlement cycles',
                'Simple digital documentation',
                'Real-time transaction monitoring',
                'Dedicated support team',
              ];

              foreach ($benefits as $index => $benefit) :
                $delay = 300 + ($index * 100);
              ?>
                <li class="flex items-start" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>"
                  data-aos-duration="800" data-aos-once="true">
                  <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
                    <!-- SVG icon -->
                    <svg width="19" height="25" viewBox="0 0 19 25" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_1700_1996)">
                        <path
                          d="M9.5 4C14.3731 4 18 7.62693 18 12.5C18 17.4003 14.4003 21 9.5 21C4.5997 21 1 17.4003 1 12.5C1 7.62693 4.62693 4 9.5 4Z"
                          fill="#D3EDDA" stroke="#22aa47" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" />
                        <path
                          d="M5.57812 14.3943C7.20478 15.3973 7.84749 16.3676 7.84749 16.3676C7.84749 16.3676 8.77121 14.58 10.4029 12.5476C12.1604 10.3584 13.3887 9.47705 13.3887 9.47705"
                          stroke="#22aa47" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" />
                      </g>
                      <defs>
                        <clipPath id="clip0_1700_1996">
                          <rect width="19" height="19" fill="white" transform="translate(0 3)" />
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                  <span class="ml-3 text-primary-500"><?php echo $benefit; ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>

    </section>

    <section class="bg-primary-600 py-10 md:py-16" data-aos="fade" data-aos-duration="800" data-aos-once="true">
      <div class="container mx-auto px-4 sm:px-6">
        <!-- Section Title - Centered -->
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-12 md:mb-10 text-center" data-aos="fade-up"
          data-aos-duration="800" data-aos-once="true">How It Works :</h2>

        <!-- Steps Timeline -->
        <div class="relative max-w-6xl mx-auto">
          <!-- Timeline Line -->
          <div class="hidden md:block absolute top-6 left-0 right-0 h-0.5 border-t-2 border-dashed border-white z-10"
            data-aos="fade-right" data-aos-duration="1200" data-aos-delay="300" data-aos-once="true">
          </div>

          <!-- Steps Container - Now centered and responsive -->
          <div class="flex flex-col md:flex-row md:space-x-6 items-center md:items-start relative z-20">

            <!-- Step 1 -->
            <div class="flex flex-col items-center md:items-start text-center mb-12 md:mb-0 md:w-1/5" data-aos="fade-up"
              data-aos-delay="100" data-aos-duration="700" data-aos-once="true">
              <div class="bg-white border-2 border-secondary-500 self-center rounded-full h-12 w-12 flex items-center justify-center text-secondary-500 font-bold mb-4"
                data-aos="zoom-in" data-aos-delay="400" data-aos-duration="500" data-aos-once="true">
                1
              </div>
              <p class="text-white font-medium self-center">Customer requests</br>cash withdrawal</p>
            </div>

            <!-- Step 2 -->
            <div class="flex flex-col items-center md:items-start text-center mb-12 md:mb-0 md:w-1/5" data-aos="fade-up"
              data-aos-delay="200" data-aos-duration="700" data-aos-once="true">
              <div class="bg-white border-2 border-secondary-500 self-center rounded-full h-12 w-12 flex items-center justify-center text-secondary-500 font-bold mb-4"
                data-aos="zoom-in" data-aos-delay="600" data-aos-duration="500" data-aos-once="true">
                2
              </div>
              <p class="text-white font-medium self-center">Enter withdrawal amount</br>in POS</p>
            </div>

            <!-- Step 3 -->
            <div class="flex flex-col items-center md:items-start text-center mb-12 md:mb-0 md:w-1/5" data-aos="fade-up"
              data-aos-delay="300" data-aos-duration="700" data-aos-once="true">
              <div class="bg-white border-2 border-secondary-500 self-center rounded-full h-12 w-12 flex items-center justify-center text-secondary-500 font-bold mb-4"
                data-aos="zoom-in" data-aos-delay="800" data-aos-duration="500" data-aos-once="true">
                3
              </div>
              <p class="text-white font-medium self-center">Customer scans QR</br>or enters UPI ID</p>
            </div>

            <!-- Step 4 -->
            <div class="flex flex-col items-center md:items-start text-center mb-12 md:mb-0 md:w-1/5" data-aos="fade-up"
              data-aos-delay="400" data-aos-duration="700" data-aos-once="true">
              <div class="bg-white border-2 border-secondary-500 self-center self-center rounded-full h-12 w-12 flex items-center justify-center text-secondary-500 font-bold mb-4"
                data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="500" data-aos-once="true">
                4
              </div>
              <p class="text-white font-medium self-center">Verify transaction</br>completion</p>
            </div>

            <!-- Step 5 -->
            <div class="flex flex-col items-center md:items-start text-center md:w-1/5" data-aos="fade-up"
              data-aos-delay="500" data-aos-duration="700" data-aos-once="true">
              <div class="bg-white border-2 border-secondary-500 self-center rounded-full h-12 w-12 flex items-center justify-center text-secondary-500 font-bold mb-4"
                data-aos="zoom-in" data-aos-delay="1200" data-aos-duration="500" data-aos-once="true">
                5
              </div>
              <p class="text-white font-medium self-center">Hand over cash</br>to customer</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Enhanced Hero Section with Bidirectional AOS Animations -->
    <section class="relative overflow-hidden py-2 my-6 bg-white">
      <!-- Main Content -->
      <div class="container mx-auto relative z-20">
        <!-- Trusted By Section with Infinite Scroll -->
        <div class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" data-aos-mirror="true">
          <p class="text-gray-700 text-lg mb-6 md:mb-8">Backed by leading banks and financial institutions</p>
          <!-- Infinite Scroll Container -->
          <div class="relative overflow-hidden w-full ">
            <div class="logos-container flex whitespace-nowrap">
              <!-- First set of logos - will appear as one continuous stream -->
              <div class="logos-slide animate-scroll inline-flex items-center">
                <img src="./assets/images/home/hdfc.svg" alt="HDFC Bank"
                  class="h-8 md:h-10 w-auto mx-8" />
                <img src="./assets/images/home/idfc.svg" alt="IDFC Bank"
                  class="h-8 md:h-10 w-auto mx-8" />
                <img src="./assets/images/home/bom.svg" alt="Bank of Maharashtra"
                  class="h-8 md:h-10 w-auto mx-8" />
                <img src="./assets/images/home/sbi.svg" alt="SBI" class="h-8 md:h-10 w-auto mx-8" />
                <img src="./assets/images/home/ib.svg" alt="Indian Bank"
                  class="h-8 md:h-10 w-auto mx-8" />
                <img src="./assets/images/home/icici.svg" alt="ICICI Bank"
                  class="h-8 md:h-10 w-auto mx-8" />
                <img src="./assets/images/home/bob.svg" alt="Bank of Baroda"
                  class="h-8 md:h-10 w-auto mx-8" />
                <img src="./assets/images/home/sc.svg" alt="Standard Chartered"
                  class="h-8 md:h-10 w-auto mx-8" />

                <!-- Duplicated for seamless loop -->
                <img src="./assets/images/home/hdfc.svg" alt="HDFC Bank"
                  class="h-8 md:h-10 w-auto mx-8" />
                <img src="./assets/images/home/idfc.svg" alt="IDFC Bank"
                  class="h-8 md:h-10 w-auto mx-8" />
                <img src="./assets/images/home/bom.svg" alt="Bank of Maharashtra"
                  class="h-8 md:h-10 w-auto mx-8" />
                <img src="./assets/images/home/sbi.svg" alt="SBI" class="h-8 md:h-10 w-auto mx-8" />
                <img src="./assets/images/home/ib.svg" alt="Indian Bank"
                  class="h-8 md:h-10 w-auto mx-8" />
                <img src="./assets/images/home/icici.svg" alt="ICICI Bank"
                  class="h-8 md:h-10 w-auto mx-8" />
                <img src="./assets/images/home/bob.svg" alt="Bank of Baroda"
                  class="h-8 md:h-10 w-auto mx-8" />
                <img src="./assets/images/home/sc.svg" alt="Standard Chartered"
                  class="h-8 md:h-10 w-auto mx-8" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="w-full bg-primary-100 py-10 px-4">
      <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row items-start justify-between">
          <!-- Section Title -->
          <div class="text-primary-500 mb-8 md:mb-0 md:w-1/4 md:mr-8" data-aos="fade-right">
            <h2 class="text-3xl font-bold leading-tight uppercase">OUR OTHER SERVICES</h2>
          </div>

          <!-- Services Grid -->
          <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 md:w-3/4 w-full" data-aos="fade-left">
            <a href="aeps" class="flex flex-col items-center text-primary-500 font-medium uppercase" aria-label="AEPS service" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/images/pan-nsdl/icon1.svg" alt="AEPS icon" loading="lazy" />
              <span class="mt-2">AEPS</span>
            </a>

            <a href="dmt" class="flex flex-col items-center text-primary-500 font-medium uppercase" aria-label="DMT service" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/images/pan-nsdl/icon2.svg" alt="DMT icon" loading="lazy" />
              <span class="mt-2">DMT</span>
            </a>

            <a href="micro-atm" class="flex flex-col items-center text-primary-500 font-medium uppercase" aria-label="Micro ATM service" data-aos="fade-up" data-aos-delay="300">
              <img src="assets/images/pan-nsdl/icon3.svg" alt="Micro ATM icon" loading="lazy" />
              <span class="mt-2">Micro ATM</span>
            </a>

            <a href="upi-cash-@pos" class="flex flex-col items-center text-primary-500 font-medium uppercase" aria-label="mPOS service" data-aos="fade-up" data-aos-delay="400">
              <img src="assets/images/pan-nsdl/icon4.svg" alt="mPOS icon" loading="lazy" />
              <span class="mt-2">mPOS</span>
            </a>

            <a href="cash-management-system" class="flex flex-col items-center text-primary-500 font-medium uppercase" aria-label="CMS service" data-aos="fade-up" data-aos-delay="500">
              <img src="assets/images/pan-nsdl/icon5.svg" alt="CMS icon" loading="lazy" />
              <span class="mt-2">CMS</span>
            </a>
          </div>
        </div>
      </div>
    </section>

        <section class="w-full py-12 bg-secondary-600" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" id="impact-section"
      data-counters='{
    "partner": "100,000",
    "bank": "20 ",
    "customer": "150 ",
    "team": "15 "
  }'>
      <div class="text-center mb-10" data-aos="fade-down" data-aos-duration="800" data-aos-once="true">
        <h2 class="text-white text-2xl sm:text-3xl md:text-4xl font-bold">Service Coverage</h2>
      </div>
      <div
        class="max-w-7xl mx-auto grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 text-center text-white px-4">
        <!-- Business Partners -->
        <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
          <span class="text-4xl sm:text-5xl font-bold counter after:content-['+']" data-counter-key="partner">0</span>
          <p class="text-base sm:text-lg font-semibold text-white/90 mt-2">Districts across India</p>
        </div>

        <!-- Banking Partnerships -->
        <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
          <div class="text-4xl sm:text-5xl font-bold counter after:content-['Lakh+']" data-counter-key="bank">0</div>
          <p class="text-base sm:text-lg font-semibold text-white/90 mt-2">Points</p>
        </div>

        <!-- Satisfied Customers -->
        <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" data-aos-once="true">
          <div class="text-4xl sm:text-5xl font-bold counter after:content-['Cr+']" data-counter-key="customer">0</div>
          <p class="text-base sm:text-lg font-semibold text-white/90 mt-2">Daily Transactions</p>
        </div>

        <!-- Team Members -->
        <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" data-aos-once="true">
          <div class="text-4xl sm:text-5xl font-bold counter after:content-['Lakh+']" data-counter-key="team">0</div>
          <p class="text-base sm:text-lg font-semibold text-white/90 mt-2">Monthly Customers</p>
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
            'question' => 'What is UPI Cash @POS service?',
            'answer' => 'This service lets customers withdraw cash from merchant stores using UPI payments through POS terminals.',
            'isOpen' => true
          ],
          [
            'question' => 'What are the transaction limits?',
            'answer' => 'Daily withdrawal limit is ₹2000 per customer as per RBI guidelines.',
            'isOpen' => false
          ],
          [
            'question' => ' How do merchants receive settlement?',
            'answer' => 'Settlements happen automatically within 24-48 hours directly to your registered bank account.',
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
  <script src="./assets/js/home.js"></script>
  <script src="./assets/js/counter.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>