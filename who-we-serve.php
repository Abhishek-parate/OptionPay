<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Who We Serve | OptionPay Fintech Solutions</title>
  <meta name="description" content="OptionPay supports startups to enterprises with tailored fintech solutions. Discover white label platforms for all business sizes.">
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


  <main>
    <!-- hero section -->
    <section class="relative overflow-hidden py-10 pt-20 md:pt-24 md:py-10 bg-white">
      
      <!-- Main Content -->
      <div class="container mx-auto px-4 sm:px-6 relative z-20">
        <div class="max-w-4xl mx-auto text-center mb-8 md:mb-12 lg:mb-16">
          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-bold mb-4 md:mb-6 text-gray-900 leading-tight"
            data-aos="fade-up" data-aos-duration="800" data-aos-mirror="true">
            <span class="text-secondary-500">Support for Every Business Size</span>
          </h1>
          <p class="text-base sm:text-lg md:text-xl mb-6 md:mb-8 max-w-3xl mx-auto" data-aos="fade-up"
            data-aos-duration="800" data-aos-delay="100" data-aos-mirror="true">
            Simplify your operations with a comprehensive platform offering essential financial, travel, and utility services tailored to your business needs.</p>
          <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-mirror="true">
            <a href="book-a-demo"
              class="inline-block bg-secondary-500 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-md text-lg font-medium hover:bg-secondary-600 transition-all duration-300 hover:shadow-lg hover:scale-105 transform z-10">
              View All Services
            </a>
          </div>
        </div>
      </div>
    </section>


    <section class="py-10 px-4 md:px-24 flex items-center">
      <div class="container mx-auto px-4 md:px-6">
        <h2 class="text-3xl font-bold text-primary-700 mb-8 text-center">We Cater to</h2>

        <div class="w-full" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <div class="relative min-h-[350px] overflow-hidden">
            <div class="tab-pane block opacity-100 transition-opacity duration-300" id="aeps">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-primary-600">
                <div class="p-10 bg-secondary-100 rounded-2xl">
                  <h3 class="text-2xl md:text-3xl font-semibold mb-8">Startups & Small Businesses</h3>
                  <ul class="space-y-5 mb-4">
                    <?php
                    $Merchants = [
                      'Quick setup in 7 days',
                      'Low investment options',
                      'Complete business toolkit',
                      'Growth-focused solutions'
                    ];

                    foreach ($Merchants as $Merchant) :
                    ?>
                      <li class="flex items-start">
                        <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none" />
                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </div>
                        <span class="ml-3 "><?php echo $Merchant; ?></span>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>

                <div class="p-10 rounded-2xl">
                  <h3 class="text-2xl md:text-3xl font-semibold mb-8">Enterprises</h3>
                  <ul class="space-y-5 mb-4">
                    <?php
                    $services = [
                      'Custom API integration',
                      'Scalable infrastructure',
                      'Virtual fund management',
                      'Dedicated support team'
                    ];

                    foreach ($services as $service) :
                    ?>
                      <li class="flex items-start">
                        <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none" />
                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </div>
                        <span class="ml-3 "><?php echo $service; ?></span>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>

            <div class="relative z-10 flex justify-center items-center mt-6" data-aos="fade-up" data-aos-delay="400">
              <a href="contact-us"
                class="inline-flex items-center bg-secondary-500 hover:bg-secondary-600 text-white px-5 sm:px-6 py-2 sm:py-3 rounded-lg font-semibold transition-all transform hover:scale-105"
                data-aos="zoom-in" data-aos-delay="500">
                Contact Sales <i class="fa-solid fa-arrow-right-long ml-2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

   

    <!-- FAQ Section -->
    <section class="py-16 max-w-3xl mx-auto px-4">
      <!-- Section Title -->
      <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-primary-800 mb-2">FAQ</h2>
      </div>

      <!-- FAQ Accordion -->
      <div class="space-y-4">
        <?php
        $faqItems = [
          [
            'question' => "Who can start a business with OptionPay's platform?",
            'answer' => "Individuals and businesses who want to offer financial services can partner with us. This includes aspiring entrepreneurs, existing shop owners, established businesses, and financial service providers. You don't need prior banking experience - we provide complete training and support.",
            'isOpen' => true
          ],
          [
            'question' => 'What kind of investment do I need to start? ',
            'answer' => "We offer different partnership options to suit various business sizes. Whether you're a small shop owner or a large enterprise, we have packages that fit your budget. Our team will help you choose the right option based on your business goals and investment capacity.",
            'isOpen' => false
          ],
          [
            'question' => "Do I need technical knowledge to use OptionPay's platform?",
            'answer' => "No, you don't need technical expertise. Our platform is built to be user-friendly, especially for businesses in smaller cities and towns. We provide complete training, and our support team is available 24/7 to help you with any questions.",
            'isOpen' => false
          ],
          [
            'question' => "How long does it take to start offering services through OptionPay?",
            'answer' => "Most of our partners start their operations within 7 days of completing documentation. This includes platform setup, branding customization, and basic training. Our team guides you through each step to ensure a smooth launch.",
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
        <div class="bg-gradient-to-br from-primary-600 to-primary-600 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
          data-aos="fade-up" data-aos-duration="1000">

          <!-- Stars Background SVG -->
          <div class="absolute z-0 opacity-30 right-0">
            <img src="assets/images/home/svg/white-bg-dot-icon.svg" alt="background dots"
              class="w-full h-full object-cover">
          </div>

          <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-3 sm:mb-4 relative z-10"
              data-aos="fade-up" data-aos-delay="200">
              Join India's Digital Commerce Revolution
            </h1>

            <p class="text-base sm:text-lg text-gray-300 mb-6 sm:mb-8 relative z-10" data-aos="fade-up"
              data-aos-delay="300">
              Ready to expand your local business? Partner with OptionPay's ONDC platform
            </p>

            <div class="relative z-10" data-aos="fade-up" data-aos-delay="400">
              <a href="#"
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

  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/header.js"></script>
  <script src="./assets/js/faq.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>