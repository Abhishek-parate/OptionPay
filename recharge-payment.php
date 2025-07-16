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
  <title>Mobile & DTH Recharge Platform | OptionPay</title>
  <meta name="description" content="Offer mobile and DTH recharges with OptionPay. Provide instant top-ups for all major operators from your shop.">
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


    <!-- Utility Services Section -->
    <section class="relative overflow-hidden bg-white py-6 sm:py-8 md:py-10">
      

      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:py-12 relative z-10">
        <div class="rounded-xl overflow-hidden">
          <div class="flex flex-col md:flex-row md:items-center">
            <!-- Content - Always First -->
            <div class="p-4 md:p-8 lg:p-12 pt-8" data-aos="fade-right" data-aos-duration="1000"
              data-aos-once="true">
              <p class="font-bold text-primary-600 text-sm sm:text-base mt-2" data-aos="fade-up"
                data-aos-delay="100" data-aos-duration="800" data-aos-once="true">Recharge & Payment </p>
              <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500 mb-3 sm:mb-4" data-aos="fade-up"
                data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
                Mobile & DTH Recharge<br class="hidden md:hidden lg:block"> Platform </h1>
              <p class="text-black mb-6 sm:mb-8 text-sm sm:text-base" data-aos="fade-up"
                data-aos-delay="400" data-aos-duration="800" data-aos-once="true">
                Join OptionPay's AEPS network to provide secure Aadhaar-based <br class="hidden md:hidden lg:block"> banking services in
                your area. Help your community access their <br class="hidden md:hidden lg:block"> bank accounts easily through
                fingerprint verification.</p>

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

            <!-- Image Section - Always Second - Larger Size -->
            <div class="relative mx-auto px-4 sm:px-0" data-aos="fade-left" data-aos-duration="1200"
              data-aos-once="true">
              <!-- Main Image -->
              <div class="relative z-20">
                <img src="assets/images/recharge-payment/banner.png" alt="Dashboard"
                  class="w-full md:h-96" />
                <div
                  class="absolute bottom-0 left-0 right-0 h-1/5 bg-gradient-to-t from-white to-transparent">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Features & Functions Section -->
    <section class="bg-white px-4 md:px-24 mb-12" data-aos="fade" data-aos-duration="800" data-aos-once="true">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-primary-700 mb-12" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">AePS Core Features</h2>

        <!-- Updated grid with proper centering -->
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

          <!-- Feature Card 1 -->
          <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
            data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-once="true">
            <img src="assets/images/recharge-payment/recharge.png" alt="Mobile Recharge"
              class="w-full object-contain rounded-t-lg" data-aos="zoom-in" data-aos-delay="150" data-aos-duration="600" data-aos-once="true">
            <div class="p-6 text-left">
              <h3 class="text-primary-600 font-semibold text-xl mb-4">Mobile Recharge</h3>
              <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-once="true">All major telecom operators supported</li>
                <li data-aos="fade-up" data-aos-delay="250" data-aos-duration="500" data-aos-once="true">Prepaid and postpaid bill payments</li>
                <li data-aos="fade-up" data-aos-delay="300" data-aos-duration="500" data-aos-once="true">Special recharge options</li>
                <li data-aos="fade-up" data-aos-delay="350" data-aos-duration="500" data-aos-once="true">Quick transaction processing</li>
              </ul>
            </div>
          </div>

          <!-- Feature Card 2 -->
          <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
            data-aos="fade-up" data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
            <img src="assets/images/recharge-payment/tatasky.png" alt="DTH Recharge"
              class="w-full object-contain rounded-t-lg" data-aos="zoom-in" data-aos-delay="250" data-aos-duration="600" data-aos-once="true">
            <div class="p-6 text-left">
              <h3 class="text-primary-600 font-semibold text-xl mb-4">DTH Recharge</h3>
              <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li data-aos="fade-up" data-aos-delay="300" data-aos-duration="500" data-aos-once="true">Multiple DTH service providers</li>
                <li data-aos="fade-up" data-aos-delay="350" data-aos-duration="500" data-aos-once="true">Pay-as-you-go packages</li>
                <li data-aos="fade-up" data-aos-delay="400" data-aos-duration="500" data-aos-once="true">Easy renewal process</li>
                <li data-aos="fade-up" data-aos-delay="450" data-aos-duration="500" data-aos-once="true">Instant activation</li>
              </ul>
            </div>
          </div>

          <!-- Feature Card 3 -->
          <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
            data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
            <img src="assets/images/recharge-payment/airtel.png" alt="Data Card Recharge"
              class="w-full object-contain rounded-t-lg" data-aos="zoom-in" data-aos-delay="350" data-aos-duration="600" data-aos-once="true">
            <div class="p-6 text-left">
              <h3 class="text-primary-600 font-semibold text-xl mb-4">Data Card Recharge</h3>
              <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li data-aos="fade-up" data-aos-delay="400" data-aos-duration="500" data-aos-once="true">All leading internet providers</li>
                <li data-aos="fade-up" data-aos-delay="450" data-aos-duration="500" data-aos-once="true">Flexible data plans</li>
                <li data-aos="fade-up" data-aos-delay="500" data-aos-duration="500" data-aos-once="true">Quick recharge confirmation</li>
                <li data-aos="fade-up" data-aos-delay="550" data-aos-duration="500" data-aos-once="true">Secure transactions</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Life Insurance Solutions Section -->
    <section class="w-full py-5 " data-aos="fade" data-aos-duration="800" data-aos-once="true">
      <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-8">
          <!-- Left side with illustration -->
          <div class="w-full md:w-1/2" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
            <img src="assets/images/recharge-payment/aadhar.png" alt="Business Partner Benefits" class="w-full h-auto">
          </div>

          <!-- Right side with content -->
          <div class="w-full md:w-1/2" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
            <h2 class="text-3xl font-bold text-secondary-500 mb-6 mt-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-once="true">
              Benefits for Business Partners
            </h2>

            <ul class="space-y-5 mb-8">
              <?php
              $lifePlans = [
                'Competitive commission structure ',
                'Real-time transaction status',
                '24/7 dedicated support',
                'Simple reconciliation process',
                'Fast settlement cycle',
              ];

              foreach ($lifePlans as $index => $plan) :
                $delay = 200 + ($index * 100);
              ?>
                <li class="flex items-start" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>" data-aos-duration="600" data-aos-once="true">
                  <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1"
                    data-aos="zoom-in" data-aos-delay="<?php echo $delay + 50; ?>" data-aos-duration="400" data-aos-once="true">
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
                  <span class="ml-3 text-gray-700"><?php echo $plan; ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </section>


    <!-- FAQ Section -->
    <section class="py-6 max-w-3xl mx-auto px-4">
      <!-- Section Title -->
      <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-primary-800 mb-2">FAQ</h2>
      </div>

      <!-- FAQ Accordion -->
      <div class="space-y-4">
        <?php
        $faqItems = [
          [
            'question' => 'How long does it take to process a recharge?',
            'answer' => 'Recharges are processed instantly upon successful payment completion.',
            'isOpen' => true
          ],
          [
            'question' => 'What payment methods can customers use?',
            'answer' => 'Customers can pay using UPI, wallet balance, or bank transfer.',
            'isOpen' => false
          ],
          [
            'question' => 'Is there a limit on recharge amounts?',
            'answer' => 'The platform supports recharges from ₹10 to ₹10,000 per transaction.',
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