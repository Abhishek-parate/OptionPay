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
    <title>Health Insurance Platform | OptionPay</title>
    <meta name="description"
        content="Provide health insurance solutions with OptionPay. Offer family, personal, and senior health plans digitally.">
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

        <section class="relative overflow-hidden bg-white py-6 sm:py-8 md:py-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:pt-12 relative z-10">
                <div class="rounded-xl overflow-hidden">
                    <div class="flex flex-col md:flex-row md:items-center">
                        <!-- Content - Always First -->
                        <div class="p-4 md:p-8 lg:p-12 pt-8" data-aos="fade-right" data-aos-duration="1000"
                            data-aos-once="true">
                            <p class="font-semi-bolder text-primary-600 font-bold mt-2" data-aos="fade-up"
                                data-aos-duration="800" data-aos-delay="100" data-aos-once="true">Health Insurance</p>
                            <h1 class="text-3xl font-bold text-secondary-500 mb-3 sm:mb-4" data-aos="fade-up"
                                data-aos-duration="800" data-aos-delay="200" data-aos-once="true">Secure Your Customers
                                Future <br class="hidden md:hidden lg:block">With Digital Health Insurance Solutions
                            </h1>
                            <p class="text-black mb-8" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400"
                                data-aos-once="true">Transform your business into a health insurance hub. Our platform
                                lets you offer comprehensive health coverage solutions to your customers.</p>

                            <a href="book-a-demo"
                                class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md"
                                data-aos="zoom-in" data-aos-duration="800" data-aos-delay="500" data-aos-once="true">
                                Start Your Insurance Journey
                            </a>

                            <div class="mt-4 flex items-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm shadow-sm"
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

                        <div class="relative max-w-5xl mx-auto  ">
                            <!-- Main Dashboard Image -->
                            <div class="relative z-20 w-96 md:w-[80%] lg:w-[90%] mx-auto">
                                <img src="assets/images/health-insurance/banner.png" alt="Dashboard" class="h-auto" />
                                <div
                                    class="absolute bottom-0 left-0 right-0 h-1/5 bg-gradient-to-t from-white to-transparent">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- E-Governance Platform Services Section -->
        <section class="bg-secondary-100 py-10 px-4 md:px-24" data-aos="fade-up" data-aos-duration="1000"
            data-aos-once="true">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-primary-700 mb-8 text-center" data-aos="fade-down"
                    data-aos-duration="800" data-aos-once="true">Key Platform Features</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <!-- Feature Card 1 -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 p-8 transform hover:-translate-y-1"
                        data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
                        <div class="text-left mb-2">
                            <h2 class="text-xl font-semibold text-secondary-500">Digital Policy Issuance</h2>
                        </div>
                        <ul class="list-disc pl-5 space-y-2 text-gray-700">
                            <li>Real-time policy generation</li>
                            <li>Paperless documentation</li>
                            <li>Instant customer verification</li>
                        </ul>
                    </div>

                    <!-- Feature Card 2 -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 p-8 transform hover:-translate-y-1"
                        data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
                        <div class="text-left mb-2">
                            <h2 class="text-xl font-semibold text-secondary-500">Multi-insurer Integration</h2>
                        </div>
                        <ul class="list-disc pl-5 space-y-2 text-gray-700">
                            <li>Access multiple insurance providers</li>
                            <li>Compare policy features</li>
                            <li>Customized coverage options</li>
                        </ul>
                    </div>

                    <!-- Feature Card 3 -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 p-8 transform hover:-translate-y-1"
                        data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
                        <div class="text-left mb-2">
                            <h2 class="text-xl font-semibold text-secondary-500">Claim Processing Support</h2>
                        </div>
                        <ul class="list-disc pl-5 space-y-2 text-gray-700">
                            <li>Digital claim filing</li>
                            <li>Status tracking</li>
                            <li>Documentation assistance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <!-- Features & Functions Section -->
        <section class="bg-white px-4 md:px-24 my-12" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <div class="container mx-auto px-6 text-center">

                <h2 class="text-3xl font-bold text-primary-700 mb-8 text-center" data-aos="fade-down"
                    data-aos-duration="800" data-aos-once="true">Key Platform Features</h2>

                <!-- Updated grid with proper centering -->
                <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Feature Card 1 -->
                    <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1"
                        data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
                        <img src="assets/images/health-insurance/partner.png" alt="Mobile Recharge"
                            class="w-full object-contain rounded-t-lg">
                        <div class="p-6 text-left">
                            <h3 class="text-primary-600 font-semibold text-xl mb-4">Partner Benefits</h3>
                            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                                <li>Commission on every policy sold</li>
                                <li>No infrastructure investment needed</li>
                                <li>Complete training support</li>
                                <li>Digital policy management tools</li>
                                <li>Multiple insurance products access</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Feature Card 2 -->
                    <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1"
                        data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
                        <img src="assets/images/health-insurance/business.png" alt="DTH Recharge"
                            class="w-full object-contain rounded-t-lg">
                        <div class="p-6 text-left">
                            <h3 class="text-primary-600 font-semibold text-xl mb-4">Business Growth Metrics</h3>
                            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                                <li>50,000+ Active Insurance Partners</li>
                                <li>₹10Cr+ Premium Processed Monthly</li>
                                <li>98% Claims Settlement Rate</li>
                                <li>Pan-India Coverage</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Feature Card 3 -->
                    <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1"
                        data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
                        <img src="assets/images/health-insurance/success.png" alt="Data Card Recharge"
                            class="w-full object-contain rounded-t-lg">
                        <div class="p-6 text-left">
                            <h3 class="text-primary-600 font-semibold text-xl mb-4">Partner Success Program</h3>
                            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                                <li>Comprehensive product training</li>
                                <li>Marketing support materials</li>
                                <li>Dedicated relationship manager</li>
                                <li>Regular performance analysis</li>
                            </ul>
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
            'question' => 'What documentation is needed to become an insurance partner?',
            'answer' => 'Required documents include PAN card, Aadhar card, bank account details, and address proof. Our team guides you through the registration process.',
            'isOpen' => true
          ],
          [
            'question' => 'How long does partner onboarding take?',
            'answer' => 'Partner onboarding typically takes 3–5 working days, including verification and basic training.',
            'isOpen' => false
          ],
          [
            'question' => 'What is the commission structure?',
            'answer' => 'Partners earn competitive commissions ranging from 15–25% on premium value, varying by insurance product and provider.',
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
                <div class="border-b border-gray-200 pb-4" id="faq-item-<?php echo $index; ?>" data-aos="fade-up"
                    data-aos-duration="800" data-aos-delay="<?php echo $delay; ?>" data-aos-once="true">
                    <button
                        class="flex justify-between items-center w-full text-left faq-toggle transition-all duration-300 hover:text-secondary-500">
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
                    data-aos="fade-up" data-aos-duration="1000" data-aos-offset="200" data-aos-once="true">

                    <!-- Stars Background SVG -->
                    <div class="absolute z-0 opacity-30 right-0" data-aos="zoom-in" data-aos-duration="1500"
                        data-aos-delay="300" data-aos-once="true">
                        <img src="assets/images/home/svg/white-bg-dot-icon.svg" alt="background dots"
                            class="w-full h-full object-cover">
                    </div>

                    <div class="max-w-4xl mx-auto text-center">
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-3 sm:mb-4 relative z-10"
                            data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true">
                            Join OptionPay Today
                        </h1>

                        <p class="text-base sm:text-lg text-white relative z-10" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1000" data-aos-once="true">
                            Start for free — upgrade anytime.
                        </p>

                        <div class="relative z-10" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000"
                            data-aos-once="true">
                            <p class="text-white mb-4 sm:mb-6">
                                <a href="contact-us" class="underline hover:text-white transition">
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
        <!-- End of Join Section -->

    </main>

    <?php include_once('includes/footer.php'); ?>

    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/header.js"></script>
    <script src="./assets/js/faq.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>