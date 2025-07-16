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
    <title>Digital Account Opening Platform | OptionPay</title>
    <meta name="description"
        content="Help customers open bank accounts instantly with OptionPay's platform. Offer digital KYC and zero-balance accounts.">
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
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQCF4VTL" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include_once('includes/header.php'); ?>

    <main class="overflow-hidden">
        <!-- hero section -->

        <section class="relative overflow-hidden bg-white py-6 sm:py-8 md:py-10">


            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:py-12 relative z-10">
                <div class="rounded-xl overflow-hidden">
                    <div class="flex flex-col md:flex-row md:items-center">
                        <!-- Content - Always First -->
                        <div class="p-4 md:p-8 lg:p-12 pt-8" data-aos="fade-right" data-aos-duration="1000"
                            data-aos-once="true">
                            <p class="font-bold text-primary-600 text-sm sm:text-base mt-2" data-aos="fade-up"
                                data-aos-delay="100" data-aos-duration="800" data-aos-once="true"> Account Opening</p>
                            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500 mb-3 sm:mb-4"
                                data-aos="fade-up" data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
                                Turn Your Store into <br class="hidden md:hidden lg:block">a Digital Bank Branch </h1>
                            <p class="black mb-6 sm:mb-8 text-sm sm:text-base" data-aos="fade-up" data-aos-delay="400"
                                data-aos-duration="800" data-aos-once="true">
                                Help your customers open bank accounts instantly<br class="hidden md:hidden lg:block">
                                and earn additional income through
                                our Account<br class="hidden md:hidden lg:block"> Opening Platform.</p>

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
                                <span class="text-gray-600 text-xs sm:text-sm">1 Lac+ partners across india
                                </span>
                            </div>
                        </div>

                        <!-- Image - Always Second -->
                        <div class="relative mx-auto px-4 sm:px-0" data-aos="fade-left" data-aos-duration="1200"
                            data-aos-once="true">
                            <!-- Main Image -->
                            <div class="relative z-20">
                                <img src="assets/images/account-opening/account-hero.png" alt="Dashboard"
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



        <!-- hero section ends -->

        <!-- Why Choose OptionPay Account Opening Platform Service -->
        <section class="py-12 mb-12 mt-6 bg-primary-700" data-aos="fade-up">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-white text-center mb-1">Why Choose OptionPay Account
                    Opening Platform</h2>
                <p class="text-white text-mid font-semibold text-center mb-10">
                    Digital Account Opening Made Simple
                </p>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <!-- Feature 1 - Instant Account Creation -->
                    <div class="p-4" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="text-xl font-semibold text-white mb-3">Instant Account Creation</h3>
                        <p class="text-white">
                            Open bank accounts for your customers in minutes
                        </p>
                    </div>

                    <!-- Feature 2 - Digital KYC Process -->
                    <div class="p-4" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="text-xl font-semibold text-white mb-3">Digital KYC Process</h3>
                        <p class="text-white">
                            Complete verification through video KYC
                        </p>
                    </div>

                    <!-- Feature 3 - Multiple Bank Options -->
                    <div class=" p-4" data-aos="fade-up" data-aos-delay="300">
                        <h3 class="text-xl font-semibold text-white mb-3">Multiple Bank Options</h3>
                        <p class="text-white">
                            Partner with leading banks in India
                        </p>
                    </div>

                    <!-- Feature 4 - Zero-Balance Accounts -->
                    <div class=" p-4" data-aos="fade-up" data-aos-delay="500">
                        <h3 class="text-xl font-semibold text-white mb-3">Zero-Balance Accounts</h3>
                        <p class="text-white">
                            Offer accounts with no minimum balance requirement
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Life Insurance Solutions Section with AOS Animations -->
        <section class="w-full py-2 lg:py-12" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <!-- Left side with illustration -->
                    <div class="w-full md:w-1/2" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
                        <img src="assets/images/account-opening/benefit-1.png" alt="Life Insurance"
                            class="w-full h-auto">
                    </div>

                    <!-- Right side with content -->
                    <div class="w-full md:w-1/2" data-aos="fade-left" data-aos-duration="1200" data-aos-once="true">
                        <h2 class="text-3xl font-bold text-secondary-500 mt-6" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="800" data-aos-once="true">Benefits for Partners</h2>
                        <p class="text-mid font-semibold text-primary-900 mb-6" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="800" data-aos-once="true">Grow Your Banking Business</p>

                        <ul class="space-y-5 mb-8">
                            <?php
              $benefits = [
                'Commission per account opened',
                'Quick digital onboarding process',
                'Real-time status tracking',
                'Dedicated support team',
              ];

              foreach ($benefits as $index => $benefit) :
                $delay = 300 + ($index * 100);
              ?>
                            <li class="flex items-start" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>"
                                data-aos-duration="800" data-aos-once="true">
                                <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
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

            <div class="max-w-6xl mx-auto px-4 py-6">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <!-- Image First on Mobile, Second on Desktop -->
                    <div class="w-full md:w-1/2 order-1 md:order-2" data-aos="fade-left" data-aos-duration="1200"
                        data-aos-once="true">
                        <img src="assets/images/account-opening/features.png" alt="Account Features"
                            class="w-full h-auto">
                    </div>

                    <!-- Content Second on Mobile, First on Desktop -->
                    <div class="w-full md:w-1/2 order-2 md:order-1" data-aos="fade-right" data-aos-duration="1200"
                        data-aos-once="true">
                        <h2 class="text-3xl font-bold text-secondary-500 mt-6" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="800" data-aos-once="true">Features</h2>
                        <p class="text-mid font-semibold text-primary-900 mb-6" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="800" data-aos-once="true">Complete Account Opening Solution</p>

                        <ul class="space-y-5 mb-8">
                            <?php
              $benefits = [
                'Video KYC enabled',
                'Digital document verification',
                'Multiple bank partnerships',
                'Real-time account status',
                'Instant debit card issuance',
                'Mobile banking activation',
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



        <!-- Building Trust Across India Section -->
        <section class="w-full py-16" style="background-color: #192a59;" data-aos="fade-up" data-aos-duration="1000"
            data-aos-once="true">
            <div class="max-w-6xl mx-auto px-4">
                <!-- Section Title -->
                <h2 class="text-3xl md:text-4xl font-bold text-white text-center mb-12" data-aos="fade-up"
                    data-aos-delay="100" data-aos-duration="800" data-aos-once="true">
                    Building Trust Across India
                </h2>

                <!-- Stats Grid -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                    <!-- Stat 1 -  Partners -->
                    <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="600" data-aos-once="true">
                        <p class="text-4xl md:text-5xl font-bold text-white mb-2" data-aos="zoom-in"
                            data-aos-delay="250" data-aos-duration="500" data-aos-once="true">
                            <span id="partners-count">0</span><span> Lacs+</span>
                        </p>
                        <p class="text-white text-sm md:text-base"> Partners</p>
                    </div>

                    <!-- Stat 2 - Banking Partners -->
                    <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="300"
                        data-aos-duration="600" data-aos-once="true">
                        <p class="text-4xl md:text-5xl font-bold text-white mb-2" data-aos="zoom-in"
                            data-aos-delay="350" data-aos-duration="500" data-aos-once="true">
                            <span id="banking-partners-count">0</span><span> +</span>
                        </p>
                        <p class="text-white text-sm md:text-base">Banking Partners</p>
                    </div>

                    <!-- Stat 3 - Expert Team Members -->
                    <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="400"
                        data-aos-duration="600" data-aos-once="true">
                        <p class="text-4xl md:text-5xl font-bold text-white mb-2" data-aos="zoom-in"
                            data-aos-delay="450" data-aos-duration="500" data-aos-once="true">
                            <span id="team-members-count">0</span><span>+</span>
                        </p>
                        <p class="text-white text-sm md:text-base">Expert Team Members</p>
                    </div>

                    <!-- Stat 4 - Happy Customers -->
                    <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="500"
                        data-aos-duration="600" data-aos-once="true">
                        <p class="text-4xl md:text-5xl font-bold text-white mb-2" data-aos="zoom-in"
                            data-aos-delay="550" data-aos-duration="500" data-aos-once="true">
                            <span id="customers-count">0</span><span> Cr+</span>
                        </p>
                        <p class="text-white text-sm md:text-base">Happy Customers</p>
                    </div>
                </div>
            </div>
        </section>

        <script>
        // Counter animation function for Indian number format
        function animateCounter(elementId, start, end, duration) {
            const obj = document.getElementById(elementId);
            if (!obj) return;

            // Start with 0 for animating
            obj.textContent = '0';

            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const currentValue = Math.floor(progress * end);

                // Update the counter text
                obj.textContent = currentValue;

                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };

            window.requestAnimationFrame(step);
        }

        // Set up intersection observer for counter section
        document.addEventListener('DOMContentLoaded', function() {
            const counters = [{
                    id: 'partners-count',
                    value: 1
                }, // 1 Lacs+
                {
                    id: 'banking-partners-count',
                    value: 20
                }, // 20+
                {
                    id: 'team-members-count',
                    value: 150
                }, // 150+
                {
                    id: 'customers-count',
                    value: 1
                } // 1 Cr+
            ];

            // Initialize all counters to 0
            counters.forEach(counter => {
                const element = document.getElementById(counter.id);
                if (element) {
                    element.textContent = '0';
                }
            });

            // Create intersection observer
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    // When section becomes visible
                    if (entry.isIntersecting) {
                        // Start all animations with a small delay between each
                        counters.forEach((counter, index) => {
                            setTimeout(() => {
                                animateCounter(counter.id, 0, counter.value,
                                    2000);
                            }, 250 + (index * 150));
                        });

                        // Only trigger once
                        observer.disconnect();
                    }
                });
            }, {
                threshold: 0.1
            });

            // Observe the section itself
            const trustSection = document.querySelector('section[style*="background-color: #192a59;"]');
            if (trustSection) {
                observer.observe(trustSection);
            }

            // Fallback animation trigger if intersection observer doesn't work
            setTimeout(() => {
                counters.forEach((counter, index) => {
                    const element = document.getElementById(counter.id);
                    if (element && element.textContent === '0') {
                        setTimeout(() => {
                            animateCounter(counter.id, 0, counter.value, 2000);
                        }, 250 + (index * 150));
                    }
                });
            }, 1000);
        });
        </script>

        <section class="w-full bg-primary-100 py-10 px-4">
            <div class="max-w-6xl mx-auto">


                <!-- Services Grid -->
                <div class="flex flex-col md:flex-row items-start justify-between">
                    <!-- Section Title -->
                    <div class="text-primary-500 mb-8 md:mb-0 md:w-1/4 md:mr-8 " data-aos="fade-right">
                        <h2 class="text-3xl font-bold leading-tight uppercase">OUR OTHER SERVICES</h2>
                    </div>

                    <!-- Services Grid -->
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 md:w-3/4 w-full"
                        data-aos="fade-left">
                        <a href="aeps" class="flex flex-col items-center text-primary-500 font-medium uppercase"
                            aria-label="AEPS service" data-aos="fade-up" data-aos-delay="100">
                            <img src="assets/images/pan-nsdl/icon1.svg" alt="AEPS icon" loading="lazy" />
                            <span class="mt-2">AEPS</span>
                        </a>

                        <a href="dmt" class="flex flex-col items-center text-primary-500 font-medium uppercase"
                            aria-label="DMT service" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/images/pan-nsdl/icon2.svg" alt="DMT icon" loading="lazy" />
                            <span class="mt-2">DMT</span>
                        </a>

                        <a href="micro-atm" class="flex flex-col items-center text-primary-500 font-medium uppercase"
                            aria-label="Micro ATM service" data-aos="fade-up" data-aos-delay="300">
                            <img src="assets/images/pan-nsdl/icon3.svg" alt="Micro ATM icon" loading="lazy" />
                            <span class="mt-2">Micro ATM</span>
                        </a>

                        <a href="upi-cash-@pos"
                            class="flex flex-col items-center text-primary-500 font-medium uppercase"
                            aria-label="mPOS service" data-aos="fade-up" data-aos-delay="400">
                            <img src="assets/images/pan-nsdl/icon4.svg" alt="mPOS icon" loading="lazy" />
                            <span class="mt-2">mPOS</span>
                        </a>

                        <a href="cash-management-system"
                            class="flex flex-col items-center text-primary-500 font-medium uppercase"
                            aria-label="CMS service" data-aos="fade-up" data-aos-delay="500">
                            <img src="assets/images/pan-nsdl/icon5.svg" alt="CMS icon" loading="lazy" />
                            <span class="mt-2">CMS</span>
                        </a>
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
            'question' => 'What documents are needed for account opening?',
            'answer' => 'Valid ID proof, address proof, and PAN card are required. Our platform guides customers through the documentation process.',
            'isOpen' => true
          ],
          [
            'question' => 'How long does it take to open an account?',
            'answer' => 'With our digital process, accounts can be opened within 15-20 minutes, subject to proper documentation.',
            'isOpen' => false
          ],
          [
            'question' => 'Is there any investment required to start this service?',
            'answer' => 'Minimal investment needed. Basic requirements include a smartphone/computer and stable internet connection.',
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
                                </svg>
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