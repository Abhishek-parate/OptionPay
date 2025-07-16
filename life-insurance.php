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
  <title>Life Insurance Services | OptionPay</title>
  <meta name="description" content="Offer life insurance policies with OptionPay. Provide term, whole life, and child plans to your customers.">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="./assets/css/style.css" rel="stylesheet">
  <link href="./assets/css/header.css" rel="stylesheet">
  <link href="./assets/css/text-scroll.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@3"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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


    <!-- Hero section with fixed gradients for mobile view -->
    <section class="bg-white relative overflow-hidden " data-aos="fade" data-aos-duration="1000" data-aos-once="true">
      

      <div class="max-w-7xl mx-auto py-12 relative z-10">
        <div class="rounded-xl overflow-hidden">
          <div class="flex flex-col md:flex-row md:items-center">
            <!-- Content - Always First -->
            <div class="p-4 md:p-8 lg:p-10 pt-8 md:w-2/5" data-aos="fade-right" data-aos-duration="1000"
              data-aos-once="true">
              <p class="font-bold text-primary-600 text-sm sm:text-base mb-2" data-aos="fade-up"
                data-aos-delay="100" data-aos-duration="800" data-aos-once="true">
                Life Insurance
              </p>
              <h1 class="text-4xl font-bold text-secondary-500 mb-3 sm:mb-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">Life Insurance Platform <br class="hidden md:hidden lg:block">Services</h1>
              <p class="text-black mb-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" data-aos-once="true">Secure your customer's future with our </br>comprehensive Life Insurance platform</p>
              <a href="book-a-demo"
                class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md"
                data-aos="zoom-in" data-aos-duration="800" data-aos-delay="500" data-aos-once="true">
                Book A Demo!
              </a>

              <div
                class="mt-4 flex items-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm shadow-sm"
                data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" data-aos-once="true">
                <div class="flex -space-x-2">
                  <img src="https://randomuser.me/api/portraits/men/1.jpg"
                    class="w-8 h-8 rounded-full border-2 border-white">
                  <img src="https://randomuser.me/api/portraits/women/2.jpg"
                    class="w-8 h-8 rounded-full border-2 border-white">
                  <img src="https://randomuser.me/api/portraits/men/3.jpg"
                    class="w-8 h-8 rounded-full border-2 border-white">
                  <img src="https://randomuser.me/api/portraits/women/4.jpg"
                    class="w-8 h-8 rounded-full border-2 border-white">
                </div>
                <span class="text-gray-600 text-sm">1 Lac+ partners across India</span>
              </div>
            </div>

            <div class="relative mx-auto px-4 sm:px-0" data-aos="fade-left" data-aos-duration="1200"
              data-aos-once="true">
              <div class="relative z-20 mt-6">
                <img
                  src="assets/images/life-insurance/banner.png"
                  alt="Dashboard"
                  class="max-h-[400px] w-auto object-contain mx-auto"
                  style="height: auto; max-height: 400px;" />
                <div class="absolute bottom-0 left-0 right-0 h-1/4 bg-gradient-to-t from-white to-transparent">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- hero section ends -->

    <div class="w-full overflow-hidden py-2 bg-primary-600 ">
      <div class="max-w-7xl mx-auto flex items-center space-x-6 px-4 py-12 text-white">
        <p class="font-semibold whitespace-nowrap">Why choose OptionPay <br> Life Insurance Platform</p>
        <div class="relative w-full overflow-hidden h-6">
          <div class="absolute flex whitespace-nowrap infinite-scroll">
            <!-- duplicated content set for seamless loop -->
            <div class="flex space-x-6">
              <span class="px-4 border-l border-white">Policy Comparison</span>
              <span class="px-4 border-l border-white">Quick Premium Calculation</span>
              <span class="px-4 border-l border-white">Real-time Status Updates</span>
              <span class="px-4 border-l border-white">24/7 Technical assistance</span>
            </div>
            <div class="flex space-x-6 ml-6">
              <span class="px-4 border-l border-white">Policy Comparison</span>
              <span class="px-4 border-l border-white">Quick Premium Calculation</span>
              <span class="px-4 border-l border-white">Real-time Status Updates</span>
              <span class="px-4 border-l border-white">24/7 Technical assistance</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- E-Governance Platform Services Section -->
    <section class="py-10 px-4 md:px-24" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-primary-700 mb-8 text-center" data-aos="fade-down" data-aos-duration="800" data-aos-once="true">Services</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
          <!-- PAN Card Services -->
          <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 p-8 transform hover:-translate-y-1 transition-transform"
            data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
            <!-- Icon and Title - Vertical Alignment -->
            <div class="text-left mb-2">
              <h2 class="text-xl font-semibold text-secondary-500">Term Life Insurance</h2>
            </div>
            <p>Our platform enables your customers to compare and choose from multiple term insurance plans. Simple documentation process with quick policy issuance.</p>
          </div>
          <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 p-8 transform hover:-translate-y-1 transition-transform"
            data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
            <!-- Icon and Title - Vertical Alignment -->
            <div class="text-left mb-2">
              <h2 class="text-xl font-semibold text-secondary-500">Whole Life Insurance</h2>
            </div>
            <p>Help customers build a financial safety net with whole life insurance plans that offer lifelong protection and savings benefits.</p>
          </div>
          <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 p-8 transform hover:-translate-y-1 transition-transform"
            data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
            <!-- Icon and Title - Vertical Alignment -->
            <div class="text-left mb-2">
              <h2 class="text-xl font-semibold text-secondary-500">Child Insurance Plans</h2>
            </div>
            <p>Offer specialized plans designed to secure children's future education and life goals, with flexible premium payment options.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Banking Services Section -->
    <section class="min-h-[350px] py-12 flex items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
      <div class="container mx-auto px-4 md:px-6">
        <!-- Banking Services Tabs -->
        <div class="w-full" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
          <!-- Tab Content -->
          <div class="relative min-h-[350px] overflow-hidden md:pl-24">
            <!-- AePS Tab Content -->
            <div class="tab-pane block opacity-100 transition-opacity duration-300" id="aeps">
              <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="w-full md:w-1/2 flex justify-center" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
                  <div class="relative flex justify-center">
                    <img src="assets/images/life-insurance/service.png" alt="AePS Banking">
                  </div>
                </div>
                <div class="w-full md:w-1/2" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200" data-aos-once="true">
                  <h3 class="text-2xl md:text-4xl font-bold mb-8 text-secondary-500" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">Benefits for Partners:</h3>
                  <ul class="space-y-5 mb-4">
                    <?php
                    $lifePlans = [
                      'Zero infrastructure cost',
                      'Higher commission rates',
                      'Quick customer onboarding',
                      'Easy claim support',
                      'Complete business analyticsg',
                      'Training and certification support'
                    ];

                    foreach ($lifePlans as $index => $plan) :
                      $delay = 400 + ($index * 100);
                    ?>
                      <li class="flex items-start" data-aos="fade-up" data-aos-duration="600" data-aos-delay="<?php echo $delay; ?>" data-aos-once="true">
                        <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center">
                          <svg width="19" height="25" viewBox="0 0 19 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2168_17923)">
                              <path d="M9.5 4C14.3731 4 18 7.62693 18 12.5C18 17.4003 14.4003 21 9.5 21C4.5997 21 1 17.4003 1 12.5C1 7.62693 4.62693 4 9.5 4Z" fill="#D3EDDA" stroke="#22aa47" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M5.57812 14.3943C7.20478 15.3973 7.84749 16.3676 7.84749 16.3676C7.84749 16.3676 8.77121 14.58 10.4029 12.5476C12.1604 10.3584 13.3887 9.47705 13.3887 9.47705" stroke="#22aa47" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                              <clipPath id="clip0_2168_17923">
                                <rect width="19" height="19" fill="white" transform="translate(0 3)" />
                              </clipPath>
                            </defs>
                          </svg>
                        </div>
                        <span class="ml-3 text-primary-500"><?php echo $plan; ?></span>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section class="min-h-[350px] pb-6 flex items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
      <div class="container mx-auto px-4 md:px-6">
        <!-- Banking Services Tabs -->
        <div class="w-full" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
          <!-- Tab Content -->
          <div class="relative min-h-[350px] overflow-hidden md:pl-24">
            <!-- AePS Tab Content -->
            <div class="tab-pane block opacity-100 transition-opacity duration-300" id="aeps">
              <div class="flex flex-col md:flex-row items-center gap-8">

                <!-- Image Section - Appears first on mobile, second on desktop -->
                <div class="w-full md:w-1/2 flex justify-center order-first md:order-last" data-aos="fade-left" data-aos-duration="1200" data-aos-once="true">
                  <div class="relative flex justify-center">
                    <img src="assets/images/life-insurance/features.png" alt="Life Insurance Features">
                  </div>
                </div>

                <!-- Content Section - Appears second on mobile, first on desktop -->
                <div class="w-full md:w-1/2 pl-0 md:pl-12 order-last md:order-first mt-8 md:mt-0" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200" data-aos-once="true">
                  <h3 class="text-2xl md:text-4xl font-bold mb-8 text-primary-500" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">Key Features:</h3>
                  <ul class="space-y-5 mb-4">
                    <?php
                    $features = [
                      'Multi-insurer integration',
                      'Real-time premium calculation',
                      'Digital documentation',
                      'Instant policy issuance',
                      'Claims assistance',
                      '24/7 support system'
                    ];

                    foreach ($features as $index => $feature) :
                      $delay = 400 + ($index * 100);
                    ?>
                      <li class="flex items-start" data-aos="fade-up" data-aos-duration="600" data-aos-delay="<?php echo $delay; ?>" data-aos-once="true">
                        <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center">
                          <svg width="19" height="25" viewBox="0 0 19 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2168_18692)">
                              <path d="M9.5 4C14.3731 4 18 7.62693 18 12.5C18 17.4003 14.4003 21 9.5 21C4.5997 21 1 17.4003 1 12.5C1 7.62693 4.62693 4 9.5 4Z" fill="#EDF0F7" stroke="#4B69B2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M5.57812 14.3943C7.20478 15.3973 7.84749 16.3676 7.84749 16.3676C7.84749 16.3676 8.77121 14.58 10.4029 12.5476C12.1604 10.3584 13.3887 9.47705 13.3887 9.47705" stroke="#4B69B2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                              <clipPath id="clip0_2168_18692">
                                <rect width="19" height="19" fill="white" transform="translate(0 3)" />
                              </clipPath>
                            </defs>
                          </svg>
                        </div>
                        <span class="ml-3 text-primary-500"><?php echo $feature; ?></span>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-10 max-w-3xl mx-auto px-4" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
      <!-- Section Title -->
      <div class="text-center mb-12" data-aos="fade-down" data-aos-duration="800" data-aos-once="true">
        <h2 class="text-4xl font-bold text-primary-800 mb-2">FAQ</h2>
      </div>

      <!-- FAQ Accordion -->
      <div class="space-y-4">
        <?php
        $faqItems = [
          [
            'question' => 'What documents are needed for life insurance?',
            'answer' => 'Basic KYC documents including identity proof, address proof, age proof, and income proof are required. Our platform simplifies document collection and verification.',
            'isOpen' => true
          ],
          [
            'question' => 'How long does policy issuance take?',
            'answer' => 'Through our digital platform, policies are typically issued within 24–48 hours after document verification.',
            'isOpen' => false
          ],
          [
            'question' => 'Can customers compare different insurance plans?',
            'answer' => 'Yes, our platform allows easy comparison of various life insurance plans from multiple providers.',
            'isOpen' => false
          ]
        ];


        foreach ($faqItems as $index => $item) :
          $isOpen = $item['isOpen'];
          $questionColor = $isOpen ? 'text-secondary-500' : 'text-primary-800';
          $iconColor = $isOpen ? 'text-secondary-500' : 'text-primary-800';
          $icon = $isOpen ? '−' : '+';
          $contentClass = $isOpen ? '' : 'hidden';
          $delay = 300 + ($index * 200);
        ?>
          <!-- FAQ Item -->
          <div class="border-b border-gray-200 pb-4" id="faq-item-<?php echo $index; ?>" data-aos="fade-up" data-aos-duration="800" data-aos-delay="<?php echo $delay; ?>" data-aos-once="true">
            <button class="flex justify-between items-center w-full text-left faq-toggle transition-all duration-300 hover:text-secondary-500">
              <h3 class="text-lg font-medium <?php echo $questionColor; ?>"><?php echo $item['question']; ?></h3>
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
          data-aos="fade-up" data-aos-duration="1000" data-aos-offset="200" data-aos-once="true">

          <!-- Stars Background SVG -->
          <div class="absolute z-0 opacity-30 right-0" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="300" data-aos-once="true">
            <img src="assets/images/home/svg/white-bg-dot-icon.svg" alt="background dots"
              class="w-full h-full object-cover">
          </div>

          <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-3 sm:mb-4 relative z-10"
              data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true">
              Join OptionPay Today
            </h1>

            <p class="text-base sm:text-lg text-gray-300 mb-2 sm:mb-2 relative z-10"
              data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true">
              Start for free — upgrade anytime.
            </p>

            <div class="relative z-10" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000" data-aos-once="true">
              <p class="text-gray-300 mb-4 sm:mb-6">
                <a href="book-a-demo" class="underline hover:text-white transition">
                  Joining as an organization? Contact Sales
                </a>
              </p>

              <a href="book-a-demo"
                class="inline-flex items-center bg-secondary-500 hover:bg-secondary-600 text-white px-5 sm:px-6 py-2 sm:py-3 rounded-lg font-semibold transition-all transform hover:scale-105"
                data-aos="zoom-in" data-aos-delay="800" data-aos-duration="1000" data-aos-once="true">
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