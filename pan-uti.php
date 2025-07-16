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
  <title>PAN Card Services via UTI | OptionPay</title>
  <meta name="description" content="Offer PAN card applications and updates with OptionPay's UTI platform. Serve your community digitally.">
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
    <section class="relative overflow-hidden bg-white py-6 sm:py-8 md:py-10">
      

      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:py-12 relative z-10">
        <div class="rounded-xl overflow-hidden">
          <div class="flex flex-col md:flex-row md:items-center">
            <!-- Content - Always First -->
            <div class="p-4 md:p-8 lg:p-12 pt-8" data-aos="fade-right" data-aos-duration="1000"
              data-aos-once="true">
              <p class="font-bold text-primary-600 text-sm sm:text-base mt-2" data-aos="fade-up"
                data-aos-delay="100" data-aos-duration="800" data-aos-once="true">PAN UTI
              </p>
              <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500 mb-3 sm:mb-4" data-aos="fade-up"
                data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
                Your Trusted PAN Card<br class="hidden md:hidden lg:block"> Service Partner
              </h1>
              <p class="black mb-6 sm:mb-8 text-sm sm:text-base" data-aos="fade-up" data-aos-delay="400"
                data-aos-duration="800" data-aos-once="true">
                Register as a PAN UTI agent and provide essential PAN card <br class="hidden md:hidden lg:block">
                services to your customers</p>

              <a href="book-a-demo"
                class="inline-flex items-center justify-center px-4 sm:px-5 py-2 sm:py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-lg"
                data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
                Start Your Journey</a>

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
                <img src="assets/images/pan-uti/banner.png" alt="AEPS Banking Services"
                  class="w-auto md:h-96" />
                <div
                  class="absolute bottom-0 left-0 right-0 h-1/5 bg-gradient-to-t from-white to-transparent">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- features & function Section  -->

    <section class="bg-primary-600 py-10 px-4 md:px-24">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-primary-100 my-8 text-center" data-aos="fade-up">Features & Functions</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Feature Card 1 -->
          <div
            class="border border-gray-200 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
            data-aos="fade-up" data-aos-delay="100">
            <img src="assets/images/pan-uti/digital.png" alt="Digital PAN Applications"
              class="w-full object-contain rounded-t-lg ">
            <div class="p-6 text-left">
              <h3 class="text-secondary-600 font-semibold text-xl mb-2">Digital PAN Applications</h3>
              <p class="text-gray-600 text-sm">
                Help customers apply for new PAN cards through our digital platform. Our simple interface makes applications quick and error-free, with real-time status tracking.
              </p>
            </div>
          </div>

          <!-- Feature Card 2 -->
          <div
            class="border border-gray-200 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
            data-aos="fade-up" data-aos-delay="200">
            <img src="assets/images/pan-uti/pancard2.png" alt="PAN Card Updates"
              class="w-full object-contain rounded-t-lg">
            <div class="p-6 text-left">
              <h3 class="text-secondary-600 font-semibold text-xl mb-2">PAN Card Updates</h3>
              <p class="text-gray-600 text-sm">
                Support customers in updating their PAN card details, including name changes, address modifications, and demographic information updates.
              </p>
            </div>
          </div>

          <!-- Feature Card 3 -->
          <div
            class="border border-gray-200 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
            data-aos="fade-up" data-aos-delay="300">
            <img src="assets/images/pan-uti/corrections.png" alt="PAN Card Corrections"
              class="w-full object-contain rounded-t-lg">
            <div class="p-6 text-left">
              <h3 class="text-secondary-600 font-semibold text-xl mb-2">PAN Card Corrections</h3>
              <p class="text-gray-600 text-sm">
                Earn competitive commissions on every successful transaction. Watch your business grow with our tiered commission rates.
              </p>
            </div>
          </div>

          <!-- Feature Card 4 -->
          <div
            class="border border-gray-200 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
            data-aos="fade-up" data-aos-delay="400">
            <img src="assets/images/pan-uti/linking.png" alt="PAN-Aadhaar Linking"
              class="w-full object-contain rounded-t-lg">
            <div class="p-6 text-left">
              <h3 class="text-secondary-600 font-semibold text-xl mb-2">PAN-Aadhaar Linking</h3>
              <p class="text-gray-600 text-sm">
                Guide customers through PAN-Aadhaar linking requirements. Our platform simplifies the entire process while ensuring compliance.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- Life Insurance Solutions Section -->
    <section class="w-full py-12">
      <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-8">
          <!-- Left side with illustration -->
          <div class="w-full md:w-1/2" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/images/pan-uti/benefits.png" alt="Life Insurance">
          </div>

          <!-- Right side with content -->
          <div class="w-full md:w-1/2" data-aos="fade-left" data-aos-delay="200">
            <h2 class="text-3xl font-bold text-primary-600 mb-6 mt-6">Benefits to PAN UTI Agents</h2>

            <ul class="space-y-5 mb-12">
              <?php
              $dmts = [
                'Start with minimal setup costs',
                'Earn commission on each successful application',
                'Build trust in your community as an authorized agent',
                'Access detailed transaction reports',
                'Get real-time application status updates',
                'Dedicated support for query resolution',
              ];

              $delay = 300;
              foreach ($dmts as $dmt) :
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
                  <span class="ml-3 text-gray-700"><?php echo $dmt; ?></span>
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

    <section class="w-full bg-primary-500 py-10 px-4">
      <div class="max-w-6xl mx-auto">
        <div class="text-white flex flex-col md:flex-row items-start justify-between">
          <!-- Section Title -->
          <div class="text-secondary-500 mb-8 md:mb-0 md:w-1/4 md:mr-8" data-aos="fade-right">
            <h2 class="text-3xl font-bold text-white leading-tight uppercase">OUR OTHER SERVICES</h2>
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
            'question' => 'What documents are needed to apply for a PAN card?',
            'answer' => 'Applicants need proof of identity (Aadhaar/Passport/Driving License), proof of address, and a recent photograph. Our platform guides agents through required documentation.',
            'isOpen' => true
          ],
          [
            'question' => 'How long does PAN card processing take?',
            'answer' => 'Standard processing time is 7-10 working days. Agents can track application status through our dashboard.',
            'isOpen' => false
          ],
          [
            'question' => 'Can existing PAN cards be modified?',
            'answer' => 'Yes, modifications including name changes, address updates, and corrections can be processed through our platform.',
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

  <!-- faq -->
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

  <?php include_once('includes/footer.php'); ?>

  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/header.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>