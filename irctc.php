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
  <title>IRCTC Agent Registration | OptionPay</title>
  <meta name="description" content="Become an IRCTC agent with OptionPay. Offer train ticket bookings and earn commissions from your shop.">

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

    <section class="relative overflow-hidden bg-white py-6 sm:py-8 md:py-10">
      <div class="hidden sm:block absolute -top-[20%] -right-[20%] w-[50%] h-[100%] rounded-full hidden md:block"
        style="background: radial-gradient(circle, rgba(126, 194, 240, 0.8) 0%, rgba(222, 242, 255, 0.4) 40%, rgba(255, 255, 255, 0) 50%);"
        data-aos="fade" data-aos-duration="1500" data-aos-delay="200" data-aos-once="true">
      </div>
      <div class="mx-auto px-4 md:py-12 relative z-10">
        <div class="rounded-xl overflow-hidden">
          <div class="flex flex-col md:flex-row md:items-center">
            <div class="p-4 md:p-8 lg:p-12 pt-8 z-30" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
              <p class="font-bold text-primary-600 text-sm sm:text-base mt-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-once="true"> IRCTC Agent ID </p>
              <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500 mb-3 sm:mb-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
                IRCTC Agent ID<br class="hidden md:hidden lg:block"> Platform
              </h1>
              <p class="black mb-6 sm:mb-8 text-sm sm:text-base" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800" data-aos-once="true">
                Partner with us to bring train ticket booking services <br class="hidden md:hidden lg:block">to your local community.
              </p>

              <a href="book-a-demo"
                class="inline-flex items-center justify-center px-4 sm:px-5 py-2 sm:py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-lg"
                data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
                Start Your Journey</a>

              <div class="mt-6 md:mt-4 flex items-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm shadow-sm"
                data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
                <div class="flex -space-x-2 ml-1">
                  <img src="https://randomuser.me/api/portraits/men/1.jpg" class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white">
                  <img src="https://randomuser.me/api/portraits/women/2.jpg" class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white">
                  <img src="https://randomuser.me/api/portraits/men/3.jpg" class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white">
                  <img src="https://randomuser.me/api/portraits/women/4.jpg" class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white">
                </div>
                <span class="text-gray-600 text-xs sm:text-sm">1 Lac+ partners across India</span>
              </div>
            </div>

            <!-- Updated container for image -->
            <div class="mx-auto sm:px-0 relative md:absolute right-0 md:transform md:-translate-y-1/2 bg-gradient-to-t from-white to-transparent" data-aos="fade-left" data-aos-duration="1200" data-aos-once="true">
              <div class="z-2">
                <img src="assets/images/irctc/banner.png" alt="Dashboard" class="w-84" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Support Promise Banner -->
    <style>

    </style>
    <div class="w-full overflow-hidden py-2 bg-secondary-600 ">
      <div class="max-w-7xl mx-auto flex items-center space-x-6 px-4 py-12 text-white">
        <p class="font-semibold whitespace-nowrap">Why choose us?</p>
        <div class="relative w-full overflow-hidden h-6">
          <div class="absolute flex whitespace-nowrap infinite-scroll">
            <!-- duplicated content set for seamless loop -->
            <div class="flex space-x-6">
              <span class="px-4 border-l border-white">Quick Ticket Booking</span>
              <span class="px-4 border-l border-white">Real-time PNR Status</span>
              <span class="px-4 border-l border-white">Instant Refunds</span>
              <span class="px-4 border-l border-white">Multi-city Support</span>
            </div>
            <div class="flex space-x-6 ml-6">
              <span class="px-4 border-l border-white">Quick Ticket Booking</span>
              <span class="px-4 border-l border-white">Real-time PNR Status</span>
              <span class="px-4 border-l border-white">Instant Refunds</span>
              <span class="px-4 border-l border-white">Multi-city Support</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- IRCTC Platform Features Section -->
    <section class="py-10 px-4 bg-white" data-aos="fade" data-aos-duration="800" data-aos-once="true">
      <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row items-center">
          <!-- Left Image Column -->
          <div class="w-full md:w-1/2 mb-8 md:mb-0 relative" data-aos="fade-right" data-aos-duration="1000"
            data-aos-once="true">
            <!-- Main photo -->
            <img src="assets\images\irctc\irctc.jpg" alt="E-commerce services" alt='E-commerce services placeholder'>
          </div>

          <!-- Right Content Column -->
          <div class="w-full md:w-1/2 md:pl-12" data-aos="fade-left" data-aos-duration="1000"
            data-aos-once="true">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-800 mb-8" data-aos="fade-up"
              data-aos-delay="100" data-aos-duration="800" data-aos-once="true">
              OptionPay IRCTC<br>Platfrom Features
            </h2>

            <div class="space-y-6">
              <!-- Feature 1: Train Booking -->
              <div class="flex items-start" data-aos="fade-up" data-aos-delay="200"
                data-aos-duration="700" data-aos-once="true">
                <div class="w-12 h-12 bg-primary-500 rounded-lg flex items-center justify-center text-white mr-4 flex-shrink-0"
                  data-aos="zoom-in" data-aos-delay="250" data-aos-duration="500"
                  data-aos-once="true">
                  <img src="assets/images/irctc/icon1.svg" alt="Train Booking">
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-primary-700 mb-1">Train Booking</h3>
                  <p class="text-gray-600 text-sm">
                    Process train reservations within minutes through our platform. Give your
                    customers the power to book tickets from any location, at any time.
                  </p>
                </div>
              </div>

              <!-- Feature 2: PNR Status -->
              <div class="flex items-start" data-aos="fade-up" data-aos-delay="300"
                data-aos-duration="700" data-aos-once="true">
                <div class="w-12 h-12 bg-primary-500 rounded-lg flex items-center justify-center text-white mr-4 flex-shrink-0"
                  data-aos="zoom-in" data-aos-delay="350" data-aos-duration="500"
                  data-aos-once="true">
                  <img src="assets/images/irctc/icon2.svg" alt="PNR Status">
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-primary-700 mb-1">PNR Status</h3>
                  <p class="text-gray-600 text-sm">
                    Help customers track their journey details instantly. Our platform provides
                    real-time updates on ticket confirmation, coach, and seat details.
                  </p>
                </div>
              </div>

              <!-- Feature 3: Refund Processing -->
              <div class="flex items-start" data-aos="fade-up" data-aos-delay="300"
                data-aos-duration="700" data-aos-once="true">
                <div class="w-12 h-12 bg-primary-500 rounded-lg flex items-center justify-center text-white mr-4 flex-shrink-0"
                  data-aos="zoom-in" data-aos-delay="350" data-aos-duration="500"
                  data-aos-once="true">
                  <img src="assets/images/irctc/icon3.svg" alt="Refund Processing">
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-primary-700 mb-1">Refund Processing</h3>
                  <p class="text-gray-600 text-sm">
                    Handle cancellations and refunds smoothly. Our system manages the entire
                    process, ensuring your customers receive their refunds quickly.
                  </p>
                </div>
              </div>

              <!-- Feature 4: Multi-city Support -->
              <div class="flex items-start" data-aos="fade-up" data-aos-delay="300"
                data-aos-duration="700" data-aos-once="true">
                <div class="w-12 h-12 bg-primary-500 rounded-lg flex items-center justify-center text-white mr-4 flex-shrink-0"
                  data-aos="zoom-in" data-aos-delay="350" data-aos-duration="500"
                  data-aos-once="true">
                  <img src="assets/images/irctc/icon4.svg" alt="Multi-city Support">
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-primary-700 mb-1">Multi-city Support</h3>
                  <p class="text-gray-600 text-sm">
                    Serve customers traveling between any stations across India. Our platform covers
                    all major and minor railway stations nationwide.
                  </p>
                </div>
              </div>
            </div>

            <!-- CTA Button -->
            <div class="mt-8" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800"
              data-aos-once="true">
              <a href="book-a-demo"
                class="inline-block bg-secondary-500 hover:bg-secondary-600 text-white font-medium py-3 px-8 rounded-lg transition duration-300">
                Start Your Journey
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Services Section with White Background -->
    <section class="bg-white py-10 px-4" data-aos="fade" data-aos-duration="800" data-aos-once="true">
      <div class="max-w-6xl mx-auto">
        <div class="flex flex-col-reverse md:flex-row">
          <!-- Left Column - Services List (second on mobile) -->
          <div class="w-full md:w-1/2 pr-0 md:pr-8 mt-8 md:mt-0" data-aos="fade-right"
            data-aos-duration="1000" data-aos-once="true">
            <h2 class="text-3xl md:text-4xl font-bold text-[#1F3262] mb-6 md:mb-8" data-aos="fade-up"
              data-aos-delay="100" data-aos-duration="800" data-aos-once="true">
              Benefits to IRCTC Agents:
            </h2>

            <ul class="space-y-4">
              <!-- Service Item 1 -->
              <li class="flex items-start" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600"
                data-aos-once="true">
                <div class="flex-shrink-0 h-6 w-6 rounded-full flex items-center justify-center mt-0.5"
                  data-aos="zoom-in" data-aos-delay="200" data-aos-duration="400"
                  data-aos-once="true">
                  <i class="fa-regular fa-circle-check text-xl text-[#5271B6]"></i>
                </div>
                <span class="ml-3 text-gray-700">Start with minimal setup costs</span>
              </li>

              <!-- Service Item 2 -->
              <li class="flex items-start" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"
                data-aos-once="true">
                <div class="flex-shrink-0 h-6 w-6 rounded-full flex items-center justify-center mt-0.5"
                  data-aos="zoom-in" data-aos-delay="250" data-aos-duration="400"
                  data-aos-once="true">
                  <i class="fa-regular fa-circle-check text-xl text-[#5271B6]"></i>
                </div>
                <span class="ml-3 text-gray-700">Regular commission on every booking</span>
              </li>

              <!-- Service Item 3 -->
              <li class="flex items-start" data-aos="fade-up" data-aos-delay="250" data-aos-duration="600"
                data-aos-once="true">
                <div class="flex-shrink-0 h-6 w-6 rounded-full flex items-center justify-center mt-0.5"
                  data-aos="zoom-in" data-aos-delay="300" data-aos-duration="400"
                  data-aos-once="true">
                  <i class="fa-regular fa-circle-check text-xl text-[#5271B6]"></i>
                </div>
                <span class="ml-3 text-gray-700">Simple digital platform for bookings</span>
              </li>

              <!-- Service Item 4 -->
              <li class="flex items-start" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600"
                data-aos-once="true">
                <div class="flex-shrink-0 h-6 w-6 rounded-full flex items-center justify-center mt-0.5"
                  data-aos="zoom-in" data-aos-delay="350" data-aos-duration="400"
                  data-aos-once="true">
                  <i class="fa-regular fa-circle-check text-xl text-[#5271B6]"></i>
                </div>
                <span class="ml-3 text-gray-700">Build trust in your community</span>
              </li>

              <!-- Service Item 5 -->
              <li class="flex items-start" data-aos="fade-up" data-aos-delay="350" data-aos-duration="600"
                data-aos-once="true">
                <div class="flex-shrink-0 h-6 w-6 rounded-full flex items-center justify-center mt-0.5"
                  data-aos="zoom-in" data-aos-delay="400" data-aos-duration="400"
                  data-aos-once="true">
                  <i class="fa-regular fa-circle-check text-xl text-[#5271B6]"></i>
                </div>
                <span class="ml-3 text-gray-700">Expand your service offerings</span>
              </li>

              <!-- Service Item 6 -->
              <li class="flex items-start" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600"
                data-aos-once="true">
                <div class="flex-shrink-0 h-6 w-6 rounded-full flex items-center justify-center mt-0.5"
                  data-aos="zoom-in" data-aos-delay="450" data-aos-duration="400"
                  data-aos-once="true">
                  <i class="fa-regular fa-circle-check text-xl text-[#5271B6]"></i>
                </div>
                <span class="ml-3 text-gray-700">Quick return on investment</span>
              </li>
            </ul>
          </div>

          <!-- Right Column - Image (first on mobile) -->
          <div class="w-full md:w-1/2" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
            <div class="p-4 md:p-8 rounded-xl">
              <img src="assets/images/irctc/benefits.png" alt="IRCTC Agent Benefits" class="w-full h-auto"
                onerror="this.onerror=null; this.src='/api/placeholder/550/350'; this.alt='IRCTC Agent Benefits placeholder'">
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
            'question' => 'What is an IRCTC agent ID?',
            'answer' => 'An IRCTC agent ID is your authorized access to book train tickets on behalf of customers through Indian Railways\' booking system.',
            'isOpen' => true
          ],
          [
            'question' => 'How can I become an IRCTC agent?',
            'answer' => 'Partner with OptionPay to receive your IRCTC agent credentials. We handle the registration process and provide complete platform access.',
            'isOpen' => false
          ],
          [
            'question' => 'What are the income opportunities?',
            'answer' => 'Earn commission on every ticket booking, with additional earnings through cancellations and modifications.',
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

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const accordionButtons = document.querySelectorAll('.faq-toggle');

        accordionButtons.forEach(button => {
          button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const isHidden = content.classList.contains('hidden');
            const plusMinus = button.querySelector('span');
            const question = button.querySelector('h3');

            // Close all
            document.querySelectorAll('.faq-content').forEach(div => {
              div.classList.add('hidden');
            });
            document.querySelectorAll('.faq-toggle span').forEach(span => {
              span.textContent = '+';
              span.classList.remove('text-secondary-500');
              span.classList.add('text-primary-800');
            });
            document.querySelectorAll('.faq-toggle h3').forEach(h3 => {
              h3.classList.remove('text-secondary-500');
              h3.classList.add('text-primary-800');
            });

            // Open current if it was closed
            if (isHidden) {
              content.classList.remove('hidden');
              plusMinus.textContent = '−';
              plusMinus.classList.remove('text-primary-800');
              plusMinus.classList.add('text-secondary-500');
              question.classList.remove('text-primary-800');
              question.classList.add('text-secondary-500');
            }
          });
        });
      });
    </script>



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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>