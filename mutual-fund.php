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
  <title>Mutual Fund Distribution Platform | OptionPay</title>
  <meta name="description" content="Launch your mutual fund business with OptionPay. Offer investment solutions and help customers grow their wealth.">

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


  <main>

    <!-- hero section -->
    <section class="relative bg-white py-8 sm:py-10 md:py-12 overflow-hidden">
      

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6 md:py-8">
        <div class="rounded-xl overflow-hidden">
          <div class="flex flex-col md:flex-row gap-6 md:gap-8 items-center">
            <!-- Left Content - Always First -->
            <div class="w-full md:w-1/2 p-4 sm:p-6 md:p-8 lg:p-10 order-1" data-aos="fade-right"
              data-aos-duration="1200" data-aos-once="true">
              <p class="font-bold text-primary-600 mb-2 text-sm sm:text-base" data-aos="fade-up"
                data-aos-delay="100" data-aos-duration="800" data-aos-once="true">
                Mutual Fund Platform
              </p>
              <h1 class="text-3xl sm:text-4xl font-bold text-secondary-500" data-aos="fade-up"
                data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
                Launch Your Mutual Fund<br class="hidden md:hidden lg:block"> Distribution Business
              </h1>
              <p class="text-black mb-6 sm:mb-8" data-aos="fade-up" data-aos-delay="400"
                data-aos-duration="800" data-aos-once="true">
                Build wealth for your customers with India's trusted<br class="hidden md:hidden lg:block"> mutual fund platform for financial advisors.
              </p>

              <a href="book-a-demo"
                class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-lg"
                data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
                Start Your Journey
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                  fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
                </svg>
              </a>

              <div class="mt-6 sm:mt-4 flex items-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm shadow-sm"
                data-aos="fade-up" data-aos-delay="600" data-aos-duration="800" data-aos-once="true">
                <div class="flex -space-x-2">
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

            <!-- Right Content - Image Always Second -->
            <div class="w-full md:w-1/2 order-2 relative" data-aos="fade-left" data-aos-duration="1200"
              data-aos-once="true">
              <!-- Decorative Elements -->

              <!-- Main Dashboard Image with Custom Shadow -->
              <div class="relative z-20  overflow-hidden">
                <img src="assets/images/mutual-fund/banner.png" alt="Dashboard" class="w-full h-auto" />
                <div
                  class="absolute bottom-0 left-0 right-0 h-1/4 bg-gradient-to-t from-white to-transparent">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- hero section ends -->


    <!-- Featuees & Function Section -->
    <section class="bg-white py-10 px-4 md:px-24" data-aos="fade-up"
      data-aos-duration="800">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-primary-700 mb-4">Why Choose OptionPay Mutual Fund Platform?</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Feature Card 3 -->
          <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="100">
            <img src="assets/images/mutual-fund/investment.png" alt="Real-Time Payment"
              class="w-full object-contain rounded-t-lg">
            <div class="p-6 text-left">
              <h3 class="text-secondary-500 font-semibold text-xl mb-2">Investment
                Analysis Tools</h3>
              <p class="text-gray-600 text-sm">
                Provide data-driven fund recommendations to help </br>customers make informed decisions.
              </p>
            </div>
          </div>
          <!-- Feature Card 3 -->
          <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="200">
            <img src="assets/images/mutual-fund/quick.png" alt="Real-Time Payment"
              class="w-full object-contain rounded-t-lg">
            <div class="p-6 text-left">
              <h3 class="text-secondary-500 font-semibold text-xl mb-2">Quick Digital Onboarding</h3>
              <p class="text-gray-600 text-sm">
                Quick account setup with </br>paperless KYC for faster customer acquisition
              </p>
            </div>
          </div>
          <!-- Feature Card 3 -->
          <div
            class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="300">
            <img src="assets/images/mutual-fund/amc.png" alt="Real-Time Payment"
              class="w-full object-contain rounded-t-lg">
            <div class="p-6 text-left">
              <h3 class="text-secondary-500 font-semibold text-xl mb-2">Multi-AMC Connect</h3>
              <p class="text-gray-600 text-sm">
                Direct integration with top</br> Asset Management Companies for smooth transactions
              </p>
            </div>
          </div>
          <!-- Feature Card 3 -->
          <div
            class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="400">
            <img src="assets/images/mutual-fund/goal.png" alt="Real-Time Payment"
              class="w-full object-contain rounded-t-lg">
            <div class="p-6 text-left">
              <h3 class="text-secondary-500 font-semibold text-xl mb-2">Goal Planning
                Tools & Solutions</h3>
              <p class="text-gray-600 text-sm">
                Help customers plan their financial future with smart investment tracking
              </p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Platform Services Section -->
    <section class="py-10 px-4 bg-white" data-aos="fade-up"
      data-aos-duration="800"
      data-aos-delay="100">
      <!-- Increased max-width from max-w-6xl to max-w-7xl -->
      <div class="max-w-7xl mx-auto">
        <!-- Container with light pink background -->
        <div class="bg-secondary-100 rounded-xl p-8 md:p-12">
          <div class="flex flex-col md:flex-row gap-8 items-center">
            <!-- Left Column - Services List -->
            <div class="w-full md:w-1/2">
              <h2 class="text-3xl md:text-4xl font-bold text-primary-800 mb-8">Platform Services</h2>
              <ul class="space-y-5">
                <!-- Service Item 1 -->
                <li class="flex items-center">
                  <div
                    class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                      <circle cx="12" cy="12" r="10" stroke="#22aa47" stroke-width="2"
                        fill="none" />
                      <path d="M7 12.5L10 15.5L17 8.5" stroke="#22aa47" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700 font-medium">SIP Management</span>
                </li>

                <!-- Service Item 2 -->
                <li class="flex items-center">
                  <div
                    class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                      <circle cx="12" cy="12" r="10" stroke="#22aa47" stroke-width="2"
                        fill="none" />
                      <path d="M7 12.5L10 15.5L17 8.5" stroke="#22aa47" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700 font-medium">Lumpsum Investments</span>
                </li>

                <!-- Service Item 3 -->
                <li class="flex items-center">
                  <div
                    class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                      <circle cx="12" cy="12" r="10" stroke="#22aa47" stroke-width="2"
                        fill="none" />
                      <path d="M7 12.5L10 15.5L17 8.5" stroke="#22aa47" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700 font-medium">Portfolio Tracking</span>
                </li>

                <!-- Service Item 4 -->
                <li class="flex items-center">
                  <div
                    class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                      <circle cx="12" cy="12" r="10" stroke="#22aa47" stroke-width="2"
                        fill="none" />
                      <path d="M7 12.5L10 15.5L17 8.5" stroke="#22aa47" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700 font-medium">NAV Updates</span>
                </li>

                <!-- Service Item 5 -->
                <li class="flex items-center">
                  <div
                    class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                      <circle cx="12" cy="12" r="10" stroke="#22aa47" stroke-width="2"
                        fill="none" />
                      <path d="M7 12.5L10 15.5L17 8.5" stroke="#22aa47" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700 font-medium">Goal Planning</span>
                </li>

                <!-- Service Item 6 -->
                <li class="flex items-center">
                  <div
                    class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                      <circle cx="12" cy="12" r="10" stroke="#22aa47" stroke-width="2"
                        fill="none" />
                      <path d="M7 12.5L10 15.5L17 8.5" stroke="#22aa47" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700 font-medium">Transaction History</span>
                </li>

                <!-- Service Item 7 -->
                <li class="flex items-center">
                  <div
                    class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                      <circle cx="12" cy="12" r="10" stroke="#22aa47" stroke-width="2"
                        fill="none" />
                      <path d="M7 12.5L10 15.5L17 8.5" stroke="#22aa47" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                  <span class="ml-3 text-gray-700 font-medium">Performance Reports</span>
                </li>
              </ul>
            </div>

            <!-- Right Column - Investment Illustration -->
            <div class="w-full md:w-1/2">
              <img src="assets/images/mutual-fund/service.png" alt="E-commerce services"
                class="w-full h-auto"
                onerror="this.onerror=null; this.src='/api/placeholder/550/350'; this.alt='E-commerce services placeholder'">
            </div>
          </div>
        </div>
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

  <!-- Main Header Banner -->

  <?php include_once('includes/footer.php'); ?>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // All testimonial data
      const testimonials = [{
          name: "Mike taylor",
          location: "Lahore, Pakistan",
          text: "On the Windows talking painted pasture yet its express parties use. Sure last upon he same as knew next. Of believed or diverted no.",
          profile: "https://randomuser.me/api/portraits/men/3.jpg",
        },
        {
          name: "Chris Thomas",
          location: "CEO of Red Button",
          text: "Smart homes are the future. The integration of IoT devices has transformed how we interact with our living spaces.",
          profile: "https://randomuser.me/api/portraits/women/3.jpg",
        },
        {
          name: "Sarah Johnson",
          location: "New York, USA",
          text: "The customer service was exceptional. They went above and beyond to ensure everything was set up perfectly.",
          profile: "https://randomuser.me/api/portraits/men/3.jpg",
        },
      ];

      // Elements
      const dots = document.querySelectorAll("#dots-container button");
      const profileImage = document.getElementById("profile-image");
      const prevArrow = document.getElementById("prev-arrow");
      const nextArrow = document.getElementById("next-arrow");

      let currentIndex = 0;

      // Function to update the active testimonial
      function updateTestimonial(newIndex) {
        // Ensure index is within bounds
        newIndex = (newIndex + testimonials.length) % testimonials.length;

        // Store the previous index
        const prevIndex = currentIndex;
        currentIndex = newIndex;

        // Update dots
        dots.forEach((dot, index) => {
          if (index === currentIndex) {
            dot.classList.remove("bg-gray-300");
            dot.classList.add("bg-secondary-500");
          } else {
            dot.classList.remove("bg-secondary-500");
            dot.classList.add("bg-gray-300");
          }
        });

        // Get all testimonial cards
        const testimonialCards = [];
        for (let i = 0; i < testimonials.length; i++) {
          testimonialCards.push(document.getElementById(`testimonial-${i}`));
        }

        // Hide previous active testimonial
        const prevCard = testimonialCards[prevIndex];
        prevCard.classList.remove(
          "opacity-100",
          "translate-y-0",
          "z-20",
          "bg-white",
          "shadow-lg"
        );
        prevCard.classList.add(
          "opacity-0",
          "translate-y-16",
          "bg-gray-100",
          "shadow-md"
        );

        // After a small delay, show the new one and hide the old one
        setTimeout(() => {
          // Hide all cards
          testimonialCards.forEach((card) => {
            card.classList.add("hidden");
          });

          // Show current card
          const currentCard = testimonialCards[currentIndex];
          currentCard.classList.remove(
            "hidden",
            "opacity-0",
            "translate-y-16",
            "bg-gray-100",
            "shadow-md"
          );
          currentCard.classList.add(
            "opacity-100",
            "translate-y-0",
            "z-20",
            "bg-white",
            "shadow-lg"
          );

          // Show next card below the current one (if there is a next card)
          const nextIndex = (currentIndex + 1) % testimonials.length;
          const nextCard = testimonialCards[nextIndex];
          if (nextCard) {
            nextCard.classList.remove("hidden", "opacity-0");
            nextCard.classList.add("opacity-95", "translate-y-16", "z-10");
          }

          // Update profile image
          profileImage.src = testimonials[currentIndex].profile;
          profileImage.alt = testimonials[currentIndex].name;
        }, 300);
      }

      // Add event listeners to dots
      dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
          updateTestimonial(index);
        });
      });

      // Add event listeners to navigation arrows
      nextArrow.addEventListener("click", function() {
        updateTestimonial(currentIndex + 1);
      });

      prevArrow.addEventListener("click", function() {
        updateTestimonial(currentIndex - 1);
      });

      // Show initial testimonial setup (second card visible but stacked)
      const secondCard = document.getElementById("testimonial-1");
      secondCard.classList.remove("hidden");
    });
  </script>
  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/header.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>