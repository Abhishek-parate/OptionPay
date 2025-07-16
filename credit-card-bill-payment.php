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
  <title>Credit Card Bill Payment Platform | OptionPay</title>
  <meta name="description" content="Offer credit card bill payments with OptionPay. Support 50+ banks and provide instant processing for customers.">
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

  <!-- Utility Services Section -->
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
                Credit Card Bill Payment Platform</p>
              <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500 mb-3 sm:mb-4" data-aos="fade-up"
                data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
                Pay credit card bills<br class="hidden md:hidden lg:block"> instantly through our<br class="hidden md:hidden lg:block"> secure platform
              </h1>
              <p class="text-gray-700 mb-6 sm:mb-8 text-sm sm:text-base" data-aos="fade-up"
                data-aos-delay="400" data-aos-duration="800" data-aos-once="true">
                Enable your customers to pay credit card bills from multiple banks <br class="hidden md:hidden lg:block">through a single
                interface. Join our network of trusted partners.
              </p>

              <a href="book-a-demo"
                class="inline-flex items-center justify-center px-4 sm:px-5 py-2 sm:py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-lg"
                data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
                Start Now </a>

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
            <div class="relative md:w-1/2 flex justify-center items-center mt-6 md:mt-0"
              data-aos="fade-left" data-aos-duration="1200" data-aos-once="true">
              <!-- Main Image -->
              <div class="relative z-20 w-full px-4 sm:px-0">
                <img src="assets/images/credit-card-bill-payment/banner.png"
                  alt="ONDC Credit Platform Dashboard"
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

    <!-- Features & Functions Section -->
    <section class="bg-white px-4 md:px-24 my-12" data-aos="fade" data-aos-duration="800" data-aos-once="true">
      <div class="container mx-auto px-6 text-center">
        <!-- Updated grid with proper centering -->
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

          <!-- Feature Card 1 -->
          <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
            data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-once="true">
            <img src="assets/images/credit-card-bill-payment/multi.png" alt="Multi-Bank Support"
              class="w-full object-contain rounded-t-lg" data-aos="zoom-in" data-aos-delay="200"
              data-aos-duration="600" data-aos-once="true">
            <div class="p-6 text-left">
              <h3 class="text-primary-600 font-semibold text-xl mb-4">Multi-Bank Support</h3>
              <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li data-aos="fade-right" data-aos-delay="300" data-aos-duration="500"
                  data-aos-once="true">Process payments for 50+ credit card issuers</li>
                <li data-aos="fade-right" data-aos-delay="400" data-aos-duration="500"
                  data-aos-once="true">Real-time payment confirmation</li>
                <li data-aos="fade-right" data-aos-delay="500" data-aos-duration="500"
                  data-aos-once="true">Direct bank integration</li>
              </ul>
            </div>
          </div>

          <!-- Feature Card 2 -->
          <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
            data-aos="fade-up" data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
            <img src="assets/images/credit-card-bill-payment/simple.png" alt="Simple Process"
              class="w-full object-contain rounded-t-lg" data-aos="zoom-in" data-aos-delay="300"
              data-aos-duration="600" data-aos-once="true">
            <div class="p-6 text-left">
              <h3 class="text-primary-600 font-semibold text-xl mb-4">Simple Process</h3>
              <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li data-aos="fade-right" data-aos-delay="400" data-aos-duration="500"
                  data-aos-once="true">Two-step verification</li>
                <li data-aos="fade-right" data-aos-delay="500" data-aos-duration="500"
                  data-aos-once="true">Quick payment processing</li>
                <li data-aos="fade-right" data-aos-delay="600" data-aos-duration="500"
                  data-aos-once="true">Digital receipt generation</li>
              </ul>
            </div>
          </div>

          <!-- Feature Card 3 -->
          <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
            data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
            <img src="assets/images/credit-card-bill-payment/partner.png" alt="Partner Benefits"
              class="w-full object-contain rounded-t-lg" data-aos="zoom-in" data-aos-delay="400"
              data-aos-duration="600" data-aos-once="true">
            <div class="p-6 text-left">
              <h3 class="text-primary-600 font-semibold text-xl mb-4">Partner Benefits</h3>
              <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li data-aos="fade-right" data-aos-delay="500" data-aos-duration="500"
                  data-aos-once="true">Competitive commission structure</li>
                <li data-aos="fade-right" data-aos-delay="600" data-aos-duration="500"
                  data-aos-once="true">Instant settlement</li>
                <li data-aos="fade-right" data-aos-delay="700" data-aos-duration="500"
                  data-aos-once="true">Real-time transaction tracking</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Life Insurance Solutions Section with AOS and mobile-first image -->
    <section class="w-full py-12" data-aos="fade" data-aos-duration="800" data-aos-once="true">
      <div class="max-w-6xl mx-auto px-4">
        <!-- Changed from flex-col-reverse to flex-col for mobile (image first, then content) -->
        <div class="flex flex-col md:flex-row items-center gap-8">
          <!-- Image section (first on mobile) -->
          <div class="w-full md:w-1/2 mb-8 md:mb-0 order-1 md:order-2" data-aos="fade-left"
            data-aos-duration="1000" data-aos-once="true">
            <img src="assets/images/credit-card-bill-payment/benefits.png"
              alt="Credit Card Bill Payment Features" class="w-full h-auto" data-aos="zoom-in"
              data-aos-delay="150" data-aos-duration="800" data-aos-once="true">
          </div>

          <!-- Content section (second on mobile) -->
          <div class="w-full md:w-1/2 order-2 md:order-1" data-aos="fade-right" data-aos-duration="1000"
            data-aos-once="true">
            <h2 class="text-3xl font-bold text-primary-500 mb-6" data-aos="fade-up" data-aos-delay="100"
              data-aos-duration="800" data-aos-once="true">Features</h2>

            <ul class="space-y-5 mb-8">
              <?php
              $lifePlans = [
                'Auto-schedule payments ',
                'Payment history access',
                'Multi-card management',
                'Bank-grade security',
                '24/7 transaction support',
                'Digital receipt generation',
              ];

              foreach ($lifePlans as $index => $plan) :
                $delay = 200 + ($index * 100);
              ?>
                <li class="flex items-start" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>"
                  data-aos-duration="600" data-aos-once="true">
                  <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1"
                    data-aos="zoom-in" data-aos-delay="<?php echo $delay + 50; ?>"
                    data-aos-duration="400" data-aos-once="true">
                    <svg width="19" height="25" viewBox="0 0 19 25" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_2090_6342)">
                        <path
                          d="M9.5 4C14.3731 4 18 7.62693 18 12.5C18 17.4003 14.4003 21 9.5 21C4.5997 21 1 17.4003 1 12.5C1 7.62693 4.62693 4 9.5 4Z"
                          fill="#EDF0F7" stroke="#4B69B2" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" />
                        <path
                          d="M5.57812 14.3943C7.20478 15.3973 7.84749 16.3676 7.84749 16.3676C7.84749 16.3676 8.77121 14.58 10.4029 12.5476C12.1604 10.3584 13.3887 9.47705 13.3887 9.47705"
                          stroke="#4B69B2" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" />
                      </g>
                      <defs>
                        <clipPath id="clip0_2090_6342">
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

    <!-- Life Insurance Solutions Section -->
    <section class="w-full py-6 mb-12" data-aos="fade" data-aos-duration="800" data-aos-once="true">
      <div class="max-w-6xl mx-auto px-4">
        <!-- Changed to flex-col (normal order) for mobile -->
        <div class="flex flex-col md:flex-row items-center gap-8">
          <!-- Left side with illustration (first on mobile) -->
          <div class="w-full md:w-1/2 mb-8 md:mb-0 order-1 md:order-1" data-aos="fade-right"
            data-aos-duration="1000" data-aos-once="true">
            <img src="assets/images/credit-card-bill-payment/business.png" alt="Business Benefits"
              class="w-full h-auto" data-aos="zoom-in" data-aos-delay="150" data-aos-duration="800"
              data-aos-once="true">
          </div>

          <!-- Right side with content (second on mobile) -->
          <div class="w-full md:w-1/2 order-2 md:order-2" data-aos="fade-left" data-aos-duration="1000"
            data-aos-once="true">
            <h2 class="text-3xl font-bold text-secondary-500 mb-6" data-aos="fade-up" data-aos-delay="100"
              data-aos-duration="800" data-aos-once="true">Business Benefits</h2>

            <ul class="space-y-5 mb-8">
              <?php
              $lifePlans = [
                'Additional revenue stream ',
                'Zero infrastructure cost',
                'Instant merchant onboarding',
                'Real-time settlement',
                'Comprehensive reporting',
                'Dedicated support team',
              ];

              foreach ($lifePlans as $index => $plan) :
                $delay = 200 + ($index * 100);
              ?>
                <li class="flex items-start" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>"
                  data-aos-duration="600" data-aos-once="true">
                  <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1"
                    data-aos="zoom-in" data-aos-delay="<?php echo $delay + 50; ?>"
                    data-aos-duration="400" data-aos-once="true">
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
            'question' => 'What banks credit cards can be paid through this platform?',
            'answer' => 'Our platform supports credit card payments for all major banks including HDFC, SBI, ICICI, Axis, and more.',
            'isOpen' => true
          ],
          [
            'question' => 'How long does it take for payment processing?',
            'answer' => 'Payments are processed instantly with real-time confirmation.',
            'isOpen' => false
          ],
          [
            'question' => ' What are the documentation requirements for merchant registration?',
            'answer' => 'Basic KYC documents including PAN, Aadhaar, and business proof are required.',
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