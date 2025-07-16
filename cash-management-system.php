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
  <title>Cash Management System | OptionPay</title>
  <meta name="description" content="Offer cash management services with OptionPay. Help businesses manage collections and payments efficiently.">

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

    <section class="relative overflow-hidden bg-white py-6 sm:py-8 md:py-6">
      

      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:py-12 relative z-10">
        <div class="rounded-xl overflow-hidden">
          <div class="flex flex-col md:flex-row md:items-center">
            <!-- Content - Always First -->
            <div class="p-4 md:p-8 lg:p-12 pt-8" data-aos="fade-right" data-aos-duration="1000"
              data-aos-once="true">
              <p class="font-bold text-primary-600 text-sm sm:text-base mt-2" data-aos="fade-up"
                data-aos-delay="100" data-aos-duration="800" data-aos-once="true"> Cash Management
                System (CMS)
              </p>
              <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500 mb-3" data-aos="fade-up"
                data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
                Transform Your <br class="hidden md:hidden lg:block">Business Banking
              </h1>
              <p class="black mb-6 sm:mb-8 text-sm sm:text-base" data-aos="fade-up" data-aos-delay="400"
                data-aos-duration="800" data-aos-once="true">
                Manage corporate transactions and collections<br class="hidden md:hidden lg:block">seamlessly with our advanced Cash Management System platform.
              </p>

              <a href="book-a-demo"
                class="inline-flex items-center justify-center px-4 sm:px-5 py-2 sm:py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-lg"
                data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
                Get Started Today!</a>

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
            <div class="relative mx-auto px-4 sm:px-0" data-aos="fade-left" data-aos-duration="1200"
              data-aos-once="true">
              <!-- Main Image -->
              <div class="relative z-20">
                <img src="assets/images/cash-management-system/table-tv.png" alt="Dashboard"
                  class="w-full h-96" />
                <div
                  class="absolute bottom-0 left-0 right-0 h-1/5 bg-gradient-to-t from-white to-transparent">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>


    <!-- hero section ends -->


    <!-- E-Governance Platform Services Section -->
    <!-- E-Governance Platform Services Section -->
    <section class="bg-secondary-100 py-10 px-4 md:px-24">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-primary-700 my-8 text-center" data-aos="fade-up">
          OptionPay CMS Platform
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
          <!-- Feature: Smart Collections -->
          <div data-aos="fade-up" data-aos-delay="100">
            <div class="text-left mb-2">
              <h2 class="text-xl font-semibold text-secondary-600">Smart Collections</h2>
            </div>
            <p class="text-grey-500 pt-2">
              Handle bulk collections from multiple sources through a single dashboard. Perfect for
              businesses managing high-volume daily transactions.
            </p>
          </div>

          <!-- Feature: Digital Payments -->
          <div data-aos="fade-up" data-aos-delay="200">
            <div class="text-left mb-2">
              <h2 class="text-xl font-semibold text-secondary-600">Digital Payments</h2>
            </div>
            <p class="text-grey-500 pt-2">
              Process vendor payments, salary disbursements, and utility bills digitally. Reduce manual
              work and paper-based processes.
            </p>
          </div>

          <!-- Feature: Real-time Tracking -->
          <div data-aos="fade-up" data-aos-delay="300">
            <div class="text-left mb-2">
              <h2 class="text-xl font-semibold text-secondary-600">Real-time Tracking</h2>
            </div>
            <p class="text-grey-500 pt-2">
              Monitor all transactions instantly with detailed reports and analytics. Stay updated on your
              business cash flow.
            </p>
          </div>

          <!-- Feature: Bank Integration -->
          <div data-aos="fade-up" data-aos-delay="400">
            <div class="text-left mb-2">
              <h2 class="text-xl font-semibold text-secondary-600">Bank Integration</h2>
            </div>
            <p class="text-grey-500 pt-2">
              Connect directly with leading banks for secure fund transfers and reconciliation. Maintain
              records automatically.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Banking Services Section -->
    <section class="py-10 px-4 md:px-24 flex items-center">
      <div class="container mx-auto px-4 md:px-6">
        <h2 class="text-3xl font-bold text-primary-700 mb-8 text-center">Benefits of CMS Platform</h2>

        <!-- Banking Services Tabs -->
        <div class="w-full" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <!-- Tab Content -->
          <div class="relative min-h-[350px] overflow-hidden lg:pl-24 pl-0">
            <!-- AePS Tab Content -->
            <div class="tab-pane block opacity-100 transition-opacity duration-300" id="aeps">
              <div class="flex flex-col md:flex-row items-center gap-8 text-primary-600">
                <!-- Merchant's Benefits -->
                <div class="w-full lg:w-1/2 md:w-1/2">
                  <div class="p-10 bg-secondary-100 rounded-2xl lg:w-4/5 sm:w-full">
                    <h3 class="text-2xl md:text-3xl font-semibold mb-8">For Merchants</h3>
                    <ul class="space-y-5 mb-8">
                      <?php
                      $Merchants = [
                        'Simplified cash flow management',
                        'Reduced operational costs',
                        'Better fund utilization',
                        'Quick payment processing',
                        'Enhanced security measures',
                        'Automated reconciliation',
                      ];

                      foreach ($Merchants as $Merchant) :
                      ?>
                        <li class="flex items-start">
                          <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                              <circle cx="12" cy="12" r="10" stroke="#22aa47" stroke-width="2" fill="none" />
                              <path d="M7 12.5L10 15.5L17 8.5" stroke="#22aa47" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </div>
                          <span class="ml-3"><?php echo $Merchant; ?></span>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>

                <!-- Consumer's Benefits -->
                <div class="w-full lg:w-1/2 md:w-1/2">
                  <h3 class="text-2xl md:text-3xl font-semibold mb-8">For Consumer</h3>
                  <ul class="space-y-5 mb-8">
                    <?php
                    $services = [
                      'New revenue streams',
                      'Expanded service portfolio',
                      'Minimal setup requirements',
                      'Competitive commission structure',
                      'Complete transaction visibility',
                      '24/7 technical support'
                    ];

                    foreach ($services as $service) :
                    ?>
                      <li class="flex items-start">
                        <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                            <circle cx="12" cy="12" r="10" stroke="#22aa47" stroke-width="2" fill="none" />
                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#22aa47" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </div>
                        <span class="ml-3"><?php echo $service; ?></span>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>

            <div class="relative z-10 flex justify-center items-center mt-3" data-aos="fade-up" data-aos-delay="400"></div>
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
            'question' => 'What is a Cash Management System?',
            'answer' => 'CMS is a digital platform that helps businesses manage their financial operations, including collections, payments, and reconciliation, through a single interface.',
            'isOpen' => true
          ],
          [
            'question' => 'How secure is the CMS platform?',
            'answer' => 'Our platform uses bank-grade security protocols and follows RBI guidelines for all transactions. Each transaction requires multi-factor authentication.',
            'isOpen' => false
          ],
          [
            'question' => 'Can I integrate CMS with my existing business software?',
            'answer' => 'Yes, our CMS platform offers API integration capabilities to connect with your accounting software and ERP systems.',
            'isOpen' => false
          ],
          [
            'question' => 'What types of businesses can benefit from CMS?',
            'answer' => 'Any business handling regular payments and collections can benefit, particularly  chains, educational institutions, and distribution networks.',
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

    <section class="relative py-10 px-4 sm:px-8 md:px-16 lg:px-20">
      <div class="container mx-auto">
        <div class="bg-gradient-to-br from-primary-700 to-primary-600 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
          data-aos="fade-up" data-aos-duration="1000">

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