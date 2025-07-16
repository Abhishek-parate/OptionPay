<?php
// It's good practice to place the database connection logic at the top.
// This assumes your database configuration is accessible from this path.
// You might need to adjust the path based on your file structure.
require_once 'admin/config/database.php';

try {
    $db = getDB();
    // Fetch only the pages that are marked as 'active'
    $stmt = $db->query("SELECT title, slug FROM pages WHERE status = 'active' ORDER BY title ASC");
    $legalPages = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // If the database connection fails, we can handle it gracefully
    // by setting an empty array. This prevents the site from breaking.
    $legalPages = [];
    // Optionally, log the error for debugging purposes
    // error_log('Footer database connection failed: ' . $e->getMessage());
}
?>
<footer class="bg-primary-800 text-white font-inter relative">

    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 py-16 relative z-10">
        <div
            class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-12 border-b border-primary-700 pb-12 mb-12">
            <div>
                <div class="flex items-center mb-4">
                    <img src="./assets/logo/White + Black.png"
                        class="h-20 w-auto sm:h-10 md:h-12 lg:h-14 max-w-[200px] sm:max-w-[200px] md:max-w-[220px]"
                        alt="Option Pay Logo">
                    </div>
                <h2 class="text-white lg:text-xl text-base font-semibold max-w-lg">Your Partner in Making Digital
                    Business Growth Simple</h2>
            </div>
            <div class="w-full lg:w-auto">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">

            <div>
                <h3 class="text-md font-semibold text-primary-200 mb-5 tracking-wider">Services</h3>
                <ul class="space-y-4 text-sm">
                    <li><a href="banking-platform-service.php"
                            class="text-primary-300 hover:text-secondary-500 transition-all duration-300 transform hover:-translate-y-px">Banking
                            Platform</a></li>
                    <li><a href="travel-platform-service.php"
                            class="text-primary-300 hover:text-secondary-500 transition-all duration-300 transform hover:-translate-y-px">Travel
                            Platform</a></li>
                    <li><a href="utility-payment-platform-services"
                            class="text-primary-300 hover:text-secondary-500 transition-all duration-300 transform hover:-translate-y-px">Utility
                            Payment</a></li>
                    <li><a href="egovernance-platform-service.php"
                            class="text-primary-300 hover:text-secondary-500 transition-all duration-300 transform hover:-translate-y-px">E-Governance</a>
                    </li>
                    <li><a href="insurance-platform-service.php"
                            class="text-primary-300 hover:text-secondary-500 transition-all duration-300 transform hover:-translate-y-px">Insurance
                            Platform</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-md font-semibold text-primary-200 mb-5 tracking-wider">Company</h3>
                <ul class="space-y-4 text-sm">
                    <li><a href="about-us"
                            class="text-primary-300 hover:text-secondary-500 transition-all duration-300 transform hover:-translate-y-px">About
                            Us</a></li>
                    <li><a href="contact-us"
                            class="text-primary-300 hover:text-secondary-500 transition-all duration-300 transform hover:-translate-y-px">Contact
                            Us</a></li>
                    <li><a href="multi-service"
                            class="text-primary-300 hover:text-secondary-500 transition-all duration-300 transform hover:-translate-y-px">Products</a>
                    </li>
                    <li><a href="mutual-fund"
                            class="text-primary-300 hover:text-secondary-500 transition-all duration-300 transform hover:-translate-y-px">Wealth
                            Management</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-md font-semibold text-primary-200 mb-5 tracking-wider">Legal</h3>
                <ul class="space-y-4 text-sm">
                    <?php if (!empty($legalPages)): ?>
                        <?php foreach ($legalPages as $page): ?>
                            <li>
                                <a href="<?= htmlspecialchars($page['slug']) ?>"
                                    class="text-primary-300 hover:text-secondary-500 transition-all duration-300 transform hover:-translate-y-px">
                                    <?= htmlspecialchars($page['title']) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <li><a href="privacy-policy" class="text-primary-300 hover:text-secondary-500">Privacy Policy</a></li>
                        <li><a href="terms-and-conditions" class="text-primary-300 hover:text-secondary-500">Terms & Conditions</a></li>
                    <?php endif; ?>
                </ul>
            </div>

            <div>
                <h3 class="text-md font-semibold text-primary-200 mb-5 tracking-wider">Contact us</h3>

                <p class="text-primary-300 hover:text-secondary-500 transition-all duration-300 transform hover:-translate-y-px">
                    <a href="https://www.google.com/maps/search/?api=1&query=Office+No.+-+C-231%2C+KA-324%2C+The+Arcade%2C+Sector-12%2C+Pratap+Vihar%2C+Ghaziabad-201009" target="_blank" rel="noopener noreferrer">
                        Office No. - C-231, KA-324, The Arcade, Sector-12, Pratap Vihar, Ghaziabad-201009
                    </a>
                </p>

                <p class="text-primary-300 hover:text-secondary-500 transition-all duration-300 transform hover:-translate-y-px">
                    <a href="mailto:sales@optionpay.in" target="_blank" class="text-primary-300 hover:text-secondary-500 transition-all duration-300 transform hover:-translate-y-px">
                        Landline No. - 0120-4598029
                    </a>
                </p>

                <p class="text-primary-300 hover:text-secondary-500 transition-all duration-300 transform hover:-translate-y-px">
                    <a href="tel:+919910632077" class="text-primary-300 hover:text-secondary-500 transition-all duration-300 transform hover:-translate-y-px">
                        Mobile No - 9910632077
                    </a>
                </p>
            </div>
        </div>

        <div class="mt-16 pt-8 border-t border-primary-700 flex flex-col md:flex-row items-center justify-between">
            <div class="text-sm text-primary-400 order-2 md:order-1 mt-8 md:mt-0 text-center md:text-left">
                <p>© <?php echo date('Y'); ?> OptionPay India. All rights reserved.</p>

            </div>
            <div class="flex space-x-2 order-1 md:order-2">
                <a href="#" target="_blank" aria-label="LinkedIn"
                    class="group w-10 h-10 rounded-full bg-primary-800 hover:bg-secondary-600 transition-all duration-300 flex items-center justify-center transform hover:-translate-y-1">
                    <i class="fab fa-linkedin-in text-primary-300 group-hover:text-white"></i>
                </a>
                <a href="#" target="_blank" aria-label="Facebook"
                    class="group w-10 h-10 rounded-full bg-primary-800 hover:bg-secondary-600 transition-all duration-300 flex items-center justify-center transform hover:-translate-y-1">
                    <i class="fab fa-facebook-f text-primary-300 group-hover:text-white"></i>
                </a>
                <a href="#" target="_blank" aria-label="Instagram"
                    class="group w-10 h-10 rounded-full bg-primary-800 hover:bg-secondary-600 transition-all duration-300 flex items-center justify-center transform hover:-translate-y-1">
                    <i class="fab fa-instagram text-primary-300 group-hover:text-white"></i>
                </a>
                <a href="#" target="_blank" aria-label="YouTube"
                    class="group w-10 h-10 rounded-full bg-primary-800 hover:bg-secondary-600 transition-all duration-300 flex items-center justify-center transform hover:-translate-y-1">
                    <i class="fab fa-youtube text-primary-300 group-hover:text-white"></i>
                </a>
            </div>
        </div>
    </div>
</footer>