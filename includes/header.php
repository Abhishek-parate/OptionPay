<header id="main-header"
    class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md py-2 transition-shadow duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between relative">
        <!-- Logo -->
        <div class="w-2/7 flex-shrink-0">
            <a href="index">
                <img src="./assets/logo/OptionPay-logo.png" 
     class="" 
     alt="Option Pay Logo"> 
            </a>
        </div>
        <!-- Desktop Navigation -->
        <nav class="hidden lg:block sm:flex md:hidden lg:flex items-center space-x-6">
            <ul class="hidden md:flex items-center space-x-6">
                <!-- Platform Menu -->
                <li class="group">
                    <button class="flex items-center text-gray-700 hover:text-primary-600 font-medium cursor-pointer">
                        Platform
                        <i
                            class="fas fa-chevron-down ml-1 text-xs transition-transform duration-200 group-hover:rotate-180"></i>
                    </button>
                    <div id="platform-menu"
                        class="absolute top-0 left-1/2 -translate-x-1/2 mt-12 w-full max-w-screen-xl mx-auto bg-white border border-gray-200 rounded-xl shadow-2xl opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-300 z-50 overflow-hidden">
                        <div class="flex flex-col md:flex-row w-full overflow-hidden">
                            <!-- Platform Menu Items -->
                            <ul
                                class="md:w-[280px] flex-shrink-0 text-right p-6 space-y-4 bg-white border-r overflow-y-auto">
                                <!-- BEGIN PLATFORM MENU ITEMS -->
                                <li data-target="multi"
                                    class="menu-item text-red-600 font-semibold flex justify-between items-center cursor-pointer">
                                    <span class="w-full text-right">Multi Services</span><i
                                        class="fas fa-chevron-right text-xs ml-2"></i>
                                </li>
                                <li data-target="wealth"
                                    class=" menu-item text-gray-700 flex justify-between items-center cursor-pointer">
                                    <span class="w-full text-right">Wealth Management</span><i
                                        class="fas fa-chevron-right text-xs ml-2"></i>
                                </li>
                                <!-- <li data-target="credit" class="menu-item text-gray-700 flex justify-between items-center cursor-pointer">
                  <span class="w-full text-right">ONDC Credit</span><i class="fas fa-chevron-right text-xs ml-2"></i>
                </li>
                <li data-target="ecom" class="menu-item text-gray-700 flex justify-between items-center cursor-pointer">
                  <span class="w-full text-right">ONDC E-Commerce</span><i class="fas fa-chevron-right text-xs ml-2"></i>
                </li> -->

                            </ul>

                            <div class="w-full p-8">
                                <div data-content="multi" class="content-panel">
                                    <h3 class="text-sm font-semibold text-gray-400 uppercase">Multi Services Platform
                                    </h3>
                                    <div class="grid grid-cols-2 gap-6 mt-4">
                                        <a href="banking-platform-service" class="flex items-start gap-4 group/link">
                                            <div class="p-3 bg-secondary-100 rounded-lg"><img
                                                    src="assets\icons\menu\bank.svg" alt="Banking Icon"></div>
                                            <div>
                                                <h4
                                                    class="font-semibold text-gray-900 group-hover/link:text-primary-600">
                                                    Banking Services Platform</h4>
                                                <p class="text-sm text-gray-600">Turn Your Business Into a Banking
                                                    Powerhouse</p>
                                            </div>
                                        </a><a href="e-governance.php" class="flex items-start gap-4 group/link">
                                            <div class="p-3 bg-secondary-100 rounded-lg"><img
                                                    src="assets\icons\menu\e-governance.svg" alt="E-Gov Icon"></div>
                                            <div>
                                                <h4
                                                    class="font-semibold text-gray-900 group-hover/link:text-primary-600">
                                                    E-Governance</h4>
                                                <p class="text-sm text-gray-600">PAN Card Application</p>
                                            </div>
                                        </a><a href="travel-platform-service.php"
                                            class="flex items-start gap-4 group/link">
                                            <div class="p-3 bg-secondary-100 rounded-lg"><img
                                                    src="assets\icons\menu\travel-platform.svg" alt="Travel Icon"></div>
                                            <div>
                                                <h4
                                                    class="font-semibold text-gray-900 group-hover/link:text-primary-600">
                                                    Travel Services platform</h4>
                                                <p class="text-sm text-gray-600">Build Your Travel Business</p>
                                            </div>
                                        </a><a href="insurance-platform-service.php"
                                            class="flex items-start gap-4 group/link">
                                            <div class="p-3 bg-secondary-100 rounded-lg"><img
                                                    src="assets\icons\menu\insurance.svg" alt="Utility Icon"></div>
                                            <div>
                                                <h4
                                                    class="font-semibold text-gray-900 group-hover/link:text-primary-600">
                                                    Insurance Services</h4>
                                                <p class="text-sm text-gray-600">Build Your Insurance Portfolio</p>
                                            </div>
                                        </a>
                                        <a href="utility-payment-platform-services.php"
                                            class="flex items-start gap-4 group/link">
                                            <div class="p-3 bg-secondary-100 rounded-lg"><img
                                                    src="assets\icons\utility-&-bill.svg" alt="Utility Icon"></div>
                                            <div>
                                                <h4
                                                    class="font-semibold text-gray-900 group-hover/link:text-primary-600">
                                                    Utility Service Platform</h4>
                                                <p class="text-sm text-gray-600">Make Bill Payments </p>
                                            </div>
                                        </a>
                
                                      </div>
                                </div>

                                <div data-content="wealth" class="content-panel hidden">
                                    <h3 class="text-sm font-semibold text-gray-400 uppercase">Wealth Management</h3>
                                    <div class="grid grid-cols-2 gap-6 mt-4">
                                        <a href="mutual-fund" class="flex items-start gap-4 group/link">
                                            <div class="p-3 bg-secondary-100 rounded-lg"><img
                                                    src="assets\icons\menu\bank.svg" alt="Mutual Fund Icon"></div>
                                            <div>
                                                <h4
                                                    class="font-semibold text-gray-900 group-hover/link:text-primary-600">
                                                    Mutual Fund Platform</h4>
                                                <p class="text-sm text-gray-600">Launch Your Mutual Fund Distribution
                                                    Business.</p>
                                            </div>
                                        </a>
                                    </div>

                                </div>



                            </div>

                        </div>
                </li>

                <!-- Services Menu -->
                <li class="group">
                    <button class="flex items-center text-gray-700 hover:text-primary-600 font-medium cursor-pointer">
                        Services
                        <i
                            class="fas fa-chevron-down ml-1 text-xs transition-transform duration-200 group-hover:rotate-180"></i>
                    </button>
                    <div id="services-menu"
                        class="absolute top-0 left-1/2 -translate-x-1/2 mt-12 w-full max-w-screen-xl mx-auto bg-white border border-gray-200 rounded-xl shadow-2xl opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-300 z-50 overflow-hidden">
                        <div class="flex flex-col md:flex-row w-full overflow-hidden">
                            <!-- Services Menu Items -->
                            <ul
                                class="md:w-[280px] flex-shrink-0 text-right p-6 space-y-4 bg-white border-r overflow-y-auto">
                                <!-- BEGIN SERVICES MENU ITEMS -->
                                <!-- <li data-target="bank-ps" class="menu-item text-red-600 font-semibold flex justify-between items-center cursor-pointer">
                  <span class="w-full text-right">Banking Platform</span><i class="fas fa-chevron-right text-xs ml-2"></i>
                </li> -->

                                <li data-target="bank-ps"
                                    class="menu-item text-gray-700 flex justify-between items-center cursor-pointer">
                                    <span class="w-full text-right">Banking Platform</span><i
                                        class="fas fa-chevron-right text-xs ml-2"></i>
                                </li>
                                <li data-target="trav-ps"
                                    class="menu-item text-gray-700 flex justify-between items-center cursor-pointer">
                                    <span class="w-full text-right">Travel Platform</span><i
                                        class="fas fa-chevron-right text-xs ml-2"></i>
                                </li>
                                <li data-target="util-ps"
                                    class="menu-item text-gray-700 flex justify-between items-center cursor-pointer">
                                    <span class="w-full text-right">Utility Payment Platform</span><i
                                        class="fas fa-chevron-right text-xs ml-2"></i>
                                </li>
                                <li data-target="egov-ps"
                                    class="menu-item text-gray-700 flex justify-between items-center cursor-pointer">
                                    <span class="w-full text-right">E-Governance Platform</span><i
                                        class="fas fa-chevron-right text-xs ml-2"></i>
                                </li>
                                <li data-target="ins-ps"
                                    class="menu-item text-gray-700 flex justify-between items-center cursor-pointer">
                                    <span class="w-full text-right">Insurance Platform</span><i
                                        class="fas fa-chevron-right text-xs ml-2"></i>
                                </li>

                                <!-- <li data-target="ondc-ser" class="menu-item text-gray-700 flex justify-between items-center cursor-pointer">
                  <span class="w-full text-right">ONDC Services</span><i class="fas fa-chevron-right text-xs ml-2"></i>
                </li> -->
                                <!-- END SERVICES MENU ITEMS -->
                            </ul>

                            <!-- Services Content Panels -->
                            <div class="w-full p-6 bg-gray-50 overflow-y-auto">
                                <div data-content="bank-ps" class="content-panel ">
                                    <h3 class="text-sm font-semibold text-gray-400 uppercase">Banking Platform Services
                                    </h3>
                                    <div class="grid grid-cols-2 gap-6 mt-4"><a href="aeps.php"
                                            class="flex items-start gap-4 group/link">
                                            <div class="p-3 bg-secondary-100 rounded-lg"><img
                                                    src="assets\icons\menu\aeps.svg" alt="AEPS Icon"></div>
                                            <div>
                                                <h4
                                                    class="font-semibold text-gray-900 group-hover/link:text-primary-600">
                                                    AEPS</h4>
                                                <p class="text-sm text-gray-600">Banking point for instant cash
                                                    transactions</p>
                                            </div>
                                        </a><a href="cash-management-system.php"
                                            class="flex items-start gap-4 group/link">
                                            <div class="p-3 bg-secondary-100 rounded-lg"><img
                                                    src="assets\icons\menu\cms.svg" alt="CMS Icon"></div>
                                            <div>
                                                <h4
                                                    class="font-semibold text-gray-900 group-hover/link:text-primary-600">
                                                    CMS</h4>
                                                <p class="text-sm text-gray-600">Cash Management System</p>
                                            </div>
                                        </a>
                                        <a href="aadhar.php" class="flex items-start gap-4 group/link">
                                            <div class="p-3 bg-secondary-100 rounded-lg"><img
                                                    src="assets\icons\menu\aadhar-pay.svg" alt="Aadhar Pay"></div>
                                            <div>
                                                <h4
                                                    class="font-semibold text-gray-900 group-hover/link:text-primary-600">
                                                    Aadhar Pay</h4>
                                                <p class="text-sm text-gray-600">Turn your shop into a digital banking
                                                    point</p>
                                            </div>
                                        </a><a href="account-opening.php" class="flex items-start gap-4 group/link">
                                            <div class="p-3 bg-secondary-100 rounded-lg"><img
                                                    src="assets\icons\menu\acc-open.svg" alt="ACC Opening Icon"></div>
                                            <div>
                                                <h4
                                                    class="font-semibold text-gray-900 group-hover/link:text-primary-600">
                                                    Account Opening</h4>
                                                <p class="text-sm text-gray-600">Turn Your Store into a Digital Bank
                                                    Branch</p>
                                            </div>
                                        </a>
                                        <a href="micro-atm.php" class="flex items-start gap-4 group/link">
                                            <div class="p-3 bg-secondary-100 rounded-lg"><img
                                                    src="assets\icons\menu\micro-atm.svg" alt="Micro ATM Icon"></div>
                                            <div>
                                                <h4
                                                    class="font-semibold text-gray-900 group-hover/link:text-primary-600">
                                                    Micro ATM</h4>
                                                <p class="text-sm text-gray-600"> Turn Your Shop into a Bank Branch with
                                                    MicroATM</p>
                                            </div>
                                        </a> <a href="upi-cash-@pos.php" class="flex items-start gap-4 group/link">
                                            <div class="p-3 bg-secondary-100 rounded-lg"><img
                                                    src="assets\icons\menu\upi-cash.svg" alt="UPI Cash @POS Icon"></div>
                                            <div>
                                                <h4
                                                    class="font-semibold text-gray-900 group-hover/link:text-primary-600">
                                                    UPI Cash @POS</h4>
                                                <p class="text-sm text-gray-600">Transform Your POS into a Cash Point
                                                </p>
                                            </div>
                                        </a> <a href="dmt.php" class="flex items-start gap-4 group/link">
                                            <div class="p-3 bg-secondary-100 rounded-lg"><img
                                                    src="assets\icons\menu\dmt.svg" alt="DMT Icon"></div>
                                            <div>
                                                <h4
                                                    class="font-semibold text-gray-900 group-hover/link:text-primary-600">
                                                    DMT</h4>
                                                <p class="text-sm text-gray-600">Domestic Money Transfer</p>
                                            </div>
                                        </a> <a href="indo-nepal-dmt.php" class="flex items-start gap-4 group/link">
                                            <div class="p-3 bg-secondary-100 rounded-lg"><img
                                                    src="assets\icons\menu\insurance.svg" alt="INDO-NEPAL DMT Icon">
                                            </div>
                                            <div>
                                                <h4
                                                    class="font-semibold text-gray-900 group-hover/link:text-primary-600">
                                                    INDO-NEPAL DMT</h4>
                                                <p class="text-sm text-gray-600">Send Money to Nepal,Simply & Securely
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>


                                <!-- Travel Platform Services -->
                                <div data-content="trav-ps" class="content-panel hidden">
                                    <h3 class="text-xs font-semibold text-gray-400 uppercase mb-4">Travel Platform
                                        Services</h3>
                                    <div class="grid grid-cols-1 gap-3 py-3 md:grid-cols-2">
                                        <div class="space-y-1">
                                            <a href="irctc" class="flex items-center gap-4 rounded-lg hover:bg-gray-50">
                                                <div class="p-3 bg-primary-50 rounded-lg"><img
                                                        src="assets/icons/menu/travel-platform.svg" alt=""></div>
                                                <div>
                                                    <h4 class="font-semibold text-gray-900">IRCTC Agent ID</h4>
                                                    <p class="text-sm text-gray-600">IRCTC Agent ID Platform</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="space-y-1">
                                            <a href="travel-booking-platform"
                                                class="flex items-center gap-4 rounded-lg hover:bg-gray-50">
                                                <div class="p-3 bg-primary-50 rounded-lg"><img
                                                        src="assets/icons/menu/flight-bus-icon.svg" alt=""></div>
                                                <div>
                                                    <h4 class="font-semibold text-gray-900">Flight /Bus Booking</h4>
                                                    <p class="text-sm text-gray-600">Travel Booking Platform</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>


                                <!-- Utility Payment Platform Services -->
                                <div data-content="util-ps" class="content-panel hidden space-y-4">
                                    <h3 class="text-xs font-semibold text-gray-400 uppercase">Utility Payment Platform
                                        Services</h3>
                                    <div class="grid grid-cols-1 gap-3 py-3 md:grid-cols-2">
                                        <div class="space-y-1">
                                            <a href="recharge-payment"
                                                class="flex items-center gap-4 rounded-lg hover:bg-gray-50">
                                                <div class="p-3 bg-se-50 rounded-lg"><img
                                                        src="assets/icons/menu/utility-&-bill.svg" alt=""></div>
                                                <div>
                                                    <h4 class="font-semibold text-gray-900">Recharge</h4>
                                                    <p class="text-sm text-gray-600">Mobile & DTH Recharge Platform</p>
                                                </div>
                                            </a>
                                            <a href="bbps" class="flex items-center gap-4 rounded-lg hover:bg-gray-50">
                                                <div class="p-3 bg-primary-50 rounded-lg"><img
                                                        src="assets/icons/menu/bank.svg" alt=""></div>
                                                <div>
                                                    <h4 class="font-semibold text-gray-900">BBPS</h4>
                                                    <p class="text-sm text-gray-600">Pay Bills, Stay Ahead</p>
                                                </div>
                                            </a>
                                            <a href="lic-premium-payment-platform"
                                                class="flex items-center gap-4 rounded-lg hover:bg-gray-50">
                                                <div class="p-3 bg-primary-50 rounded-lg"><img
                                                        src="assets/icons/menu/insurance.svg" alt=""></div>
                                                <div>
                                                    <h4 class="font-semibold text-gray-900">LIC Pay</h4>
                                                    <p class="text-sm text-gray-600">LIC Premium Payment Platform</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="space-y-1">
                                            <a href="fastag-recharge"
                                                class="flex items-center gap-4 rounded-lg hover:bg-gray-50">
                                                <div class="p-3 bg-primary-50 rounded-lg"><img
                                                        src="assets/icons/menu/fastag.svg" alt=""></div>
                                                <div>
                                                    <h4 class="font-semibold text-gray-900">Fastag Recharge</h4>
                                                    <p class="text-sm text-gray-600">Your Simple FASTag Solution</p>
                                                </div>
                                            </a>
                                            <a href="credit-card-bill-payment"
                                                class="flex items-center gap-4 rounded-lg hover:bg-gray-50">
                                                <div class="p-3 bg-primary-50 rounded-lg"><img
                                                        src="assets/icons/menu/e-governance.svg" alt=""></div>
                                                <div>
                                                    <h4 class="font-semibold text-gray-900">CC Bill Pay</h4>
                                                    <p class="text-sm text-gray-600">Credit Card Bill Payment Platform
                                                    </p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                                <!-- E-Governance Platform Services -->
                                <div data-content="egov-ps" class="content-panel hidden">
                                    <h3 class="text-xs font-semibold text-gray-400 uppercase mb-4">E-Governance Platform
                                        Services</h3>
                                    <div class="grid grid-cols-1 gap-3 py-3 md:grid-cols-2">
                                        <div class="space-y-1">
                                            <a href="pan-uti"
                                                class="flex items-center gap-4 rounded-lg hover:bg-gray-50">
                                                <div class="p-3 bg-primary-50 rounded-lg"><img
                                                        src="assets/icons/menu/e-governance.svg" alt=""></div>
                                                <div>
                                                    <h4 class="font-semibold text-gray-900">PAN UTI</h4>
                                                    <p class="text-sm text-gray-600">Your Trusted PAN Card Service
                                                        Partner</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="space-y-1">
                                            <a href="pan-nsdl"
                                                class="flex items-center gap-4 rounded-lg hover:bg-gray-50">
                                                <div class="p-3 bg-primary-50 rounded-lg"><img
                                                        src="assets/icons/menu/nsdl-pan-icon.svg" alt=""></div>
                                                <div>
                                                    <h4 class="font-semibold text-gray-900">NSDL PAN</h4>
                                                    <p class="text-sm text-gray-600">PAN Card Application Made Simple
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <!-- Insurance Platform Services -->
                                <div data-content="ins-ps" class="content-panel hidden">
                                    <h3 class="text-xs font-semibold text-gray-400 uppercase mb-4">Insurance Platform
                                        Services</h3>
                                    <div class="grid grid-cols-1 gap-3 py-3 md:grid-cols-2">
                                        <div class="space-y-1">
                                            <a href="motor-insurance"
                                                class="flex items-center gap-4 rounded-lg hover:bg-gray-50">
                                                <div class="p-3 bg-primary-50 rounded-lg"><img
                                                        src="assets/icons/menu/motor-insurance.svg" alt=""></div>
                                                <div>
                                                    <h4 class="font-semibold text-gray-900">Motor Insurance</h4>
                                                    <p class="text-sm text-gray-600">Grow Your Business with Motor
                                                        Insurance Services</p>
                                                </div>
                                            </a>
                                            <a href="life-insurance"
                                                class="flex items-center gap-4 rounded-lg hover:bg-gray-50">
                                                <div class="p-3 bg-primary-50 rounded-lg"><img
                                                        src="assets/icons/menu/life-insurance.svg" alt=""></div>
                                                <div>
                                                    <h4 class="font-semibold text-gray-900">Life Insurance</h4>
                                                    <p class="text-sm text-gray-600">Life Insurance Platform Services
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="space-y-1">
                                            <a href="health-insurance"
                                                class="flex items-center gap-4 rounded-lg hover:bg-gray-50">
                                                <div class="p-3 bg-primary-50 rounded-lg"><img
                                                        src="assets/icons/menu/insurance.svg" alt=""></div>
                                                <div>
                                                    <h4 class="font-semibold text-gray-900">Health Insurance</h4>
                                                    <p class="text-sm text-gray-600">Digital Health Insurance Solutions
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>



                                <!-- <div data-content="ondc-ser" class="content-panel hidden">
                  <h3 class="text-xs font-semibold text-gray-400 uppercase mb-4">ONDC Platform Services</h3>
                  <div class="grid grid-cols-1 gap-3 py-3 md:grid-cols-2">
                    <div class="space-y-1">
                      <a href="ondc-e-commerce-seller-platform" class="flex items-center gap-4 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><img src="assets/icons/menu/seller-onbodring.svg" alt=""></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">ONDC E-Commerce Seller Onboarding</h4>
                          <p class="text-sm text-gray-600">Empowering Sellers Through Your Business</p>
                        </div>
                      </a>
                      <a href="ondc-ecommerce-buyer" class="flex items-center gap-4 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><img src="assets/icons/menu/buyer-refer.svg" alt=""></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">ONDC E-Commerce Buyer Refer</h4>
                          <p class="text-sm text-gray-600">Serve Buyers with Local Convenience</p>
                        </div>
                      </a>
                    </div>
                    <div class="space-y-1">
                      <a href="ondc-e-commerce-logistic-franchise" class="flex items-center gap-4 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><img src="assets/icons/menu/logistics-franchise.svg" alt=""></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">ONDC Logistics Franchise</h4>
                          <p class="text-sm text-gray-600">Deliver Smarter Through Your Platform</p>
                        </div>
                      </a>
                      <a href="ondc-credit-in-a-box" class="flex items-center gap-4 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><img src="assets/icons/menu/credit-services.svg" alt=""></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">ONDC Credit Services</h4>
                          <p class="text-sm text-gray-600">Credit Tailored for Your Business Growth</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div> -->
                                <!-- END SERVICES CONTENT -->
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Simple Menu Items -->
                <li><a href="who-we-serve" class="text-gray-700 hover:text-primary-600 font-medium">Who We Serve</a>
                </li>

                <li class="group relative">
                    <button id="dropdownNavbarLink" class="text-gray-700 hover:text-primary-600 font-medium">
                        Company<i
                            class="fas fa-chevron-down ml-1 text-xs transition-transform duration-200 group-hover:rotate-180"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="absolute hidden group-hover:block z-10 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="about-us"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">About
                                    Us</a>
                            </li>
                            <li>
                                <a href="careers"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Career</a>
                            </li>
                            <!-- <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Blogs</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Case Study</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Testimonials</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Media</a>
              </li> -->
                        </ul>
                    </div>
                </li>

                <li><a href="contact-us" class="text-gray-700 hover:text-primary-600 font-medium">Contact Us</a></li>
            </ul>
        </nav>
        <div class="flex items-center space-x-4">
            <!-- Call to Actions -->
            <div class=" md:flex items-center space-x-2">
                <!-- <a href="book-a-demo" class="px-5 py-2.5 border border-secondary-500 text-secondary-500 rounded-lg text-sm font-semibold hover:bg-secondary-50 transition">GET STARTED</a> -->
                <a href="book-a-demo"
                    class="px-2 py-2.5 bg-secondary-500 text-center text-white rounded  font-semibold hover:shadow-md transition text-xs xs:text-xxs">FREE
                    LIVE DEMO</a>
            </div>

            <!-- Mobile Toggle Button -->
            <button type="button" id="mobile-toggle"
                class="md:flex lg:hidden p-2 text-primary-600 hover:text-primary-700 focus:outline-none">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Menu -->
<div id="mobile-menu"
    class="fixed inset-0 z-40 bg-white p-4 transform translate-x-full transition-transform duration-300 overflow-y-auto">
    <div class="flex justify-between items-center mb-2 z-50">
        <a href="index">
            <img src="./assets/logo/OptionPay-logo.png" 
     class="h-20 w-auto max-w-[140px] sm:h-8 sm:max-w-[160px]" 
     alt="Option Pay Logo">
        </a>
        <button id="mobile-close" class="absolute right-4 text-3xl text-black ">
            &times;
        </button>
    </div>

    <nav class="mobile-navigation space-y-2">
        <!-- Platform Accordion -->
        <div class="mobile-menu-group border-b border-gray-100 pb-2">
            <button
                class="mobile-menu-toggle w-full flex justify-between items-center py-3 px-2 text-gray-700 font-medium">
                <span>Platform</span>
                <i class="fas fa-chevron-down text-xs transition-transform duration-200"></i>
            </button>
            <div class="mobile-submenu hidden pl-4">
                <div class="space-y-3 py-2">
                    <!-- Multi Services Platform -->
                    <div class="mobile-submenu-group">
                        <button
                            class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
                            <span class="font-medium">Multi Services</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="mobile-submenu-content hidden pl-2">
                            <div class="space-y-3 py-2">
                                <!-- BEGIN MOBILE PLATFORM CONTENT - MULTI SERVICES -->
                                <a href="banking-platform-service"
                                    class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/bank.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Banking Services Platform</h4>
                                        <p class="text-sm text-gray-600">Business to a Banking Powerhouse</p>
                                    </div>
                                </a>
                                <a href="travel-platform-service"
                                    class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/travel-platform.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Travel Services Platform</h4>
                                        <p class="text-sm text-gray-600">Build Your Travel Business</p>
                                    </div>
                                </a>
                                <a href="utility-payment-platform-services"
                                    class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/utility-&-bill.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Utility Services Platform</h4>
                                        <p class="text-sm text-gray-600">Make Bill Payments Simple</p>
                                    </div>
                                </a>
                                <a href="egovernance-platform-service"
                                    class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/e-governance.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">E-Governance</h4>
                                        <p class="text-sm text-gray-600">PAN Card Applications</p>
                                    </div>
                                </a>
                                <a href="insurance-platform-service"
                                    class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/insurance.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Insurance Services</h4>
                                        <p class="text-sm text-gray-600">Build Your Insurance Portfolio</p>
                                    </div>
                                </a>
                                <!-- END MOBILE PLATFORM CONTENT - MULTI SERVICES -->
                            </div>
                        </div>
                    </div>
                    <div class="mobile-submenu-group">
                        <button
                            class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
                            <span class="font-medium">Wealth Management</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="mobile-submenu-content hidden pl-2">
                            <div class="space-y-3 py-2">
                                <a href="mutual-fund" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/bank.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Mutual Fund Platform</h4>
                                        <p class="text-sm text-gray-600">Launch Your Mutual Fund Distribution Business
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- ONDC Credit -->
                    <!-- <div class="mobile-submenu-group">
            <button class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
              <span class="font-medium">ONDC Credit</span>
              <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <div class="mobile-submenu-content hidden pl-2">
              <div class="space-y-3 py-2">
                
                <a href="ondc-credit-service-platform" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <img src="assets/icons/menu/credit-services.svg" alt="">
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">ONDC Credit Services Platform</h4>
                    <p class="text-sm text-gray-600">Fuel Growth with Smart Credit Solutions</p>
                  </div>
                </a>
              </div>
            </div>
          </div> -->

                    <!-- <div class="mobile-submenu-group">
            <button class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
              <span class="font-medium">ONDC E-Commerce</span>
              <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <div class="mobile-submenu-content hidden pl-2">
              <div class="space-y-3 py-2">
                <a href="ondc-e-commerce-seller-platform" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <img src="assets/icons/menu/bank.svg" alt="">
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">ONDC E-Commerce Seller</h4>
                    <p class="text-sm text-gray-600">Help Sellers Reach New Markets</p>
                  </div>
                </a>
                <a href="ondc-ecommerce-buyer" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <img src="assets/icons/menu/travel-platform.svg" alt="">
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">ONDC E-Commerce Buyer</h4>
                    <p class="text-sm text-gray-600">Bring Local Stores to Buyers Everywhere</p>
                  </div>
                </a>
                <a href="ondc-e-commerce-logistic-franchise" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <img src="assets/icons/menu/logistics-franchise.svg" alt="">
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">ONDC Logistics Franchise Platform</h4>
                    <p class="text-sm text-gray-600">Build a Reliable Delivery Network</p>
                  </div>
                </a>
              </div>
            </div>
          </div> -->

                    <!-- <div class="pt-4">
            <p class="text-xs uppercase text-gray-400">Always updating</p>
            <div class="flex items-center text-sm text-gray-600 mt-2">
              <span>Update analytics bug</span>
              <i class="fas fa-check-circle text-primary-600 ml-2"></i>
            </div>
            <div class="flex items-center text-sm text-gray-600 mt-1">
              <span>Remap data with Cloud</span>
              <i class="fas fa-check-circle text-primary-600 ml-2"></i>
            </div>
          </div> -->
                </div>
            </div>
        </div>

        <!-- Services Accordion -->
        <div class="mobile-menu-group border-b border-gray-100 pb-2">
            <button
                class="mobile-menu-toggle w-full flex justify-between items-center py-3 px-2 text-gray-700 font-medium">
                <span>Services</span>
                <i class="fas fa-chevron-down text-xs transition-transform duration-200"></i>
            </button>
            <div class="mobile-submenu hidden pl-4">
                <div class="space-y-3 py-2">
                    <!-- Banking Platform Services -->
                    <div class="mobile-submenu-group">
                        <button
                            class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
                            <span class="font-medium">Banking Platform</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="mobile-submenu-content hidden pl-2">
                            <div class="space-y-3 py-2">
                                <a href="aeps" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/aeps.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">AEPS</h4>
                                        <p class="text-sm text-gray-600">Banking point for instant cash transactions</p>
                                    </div>
                                </a>
                                <a href="aadhar" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/aadhar-pay.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Aadhar Pay</h4>
                                        <p class="text-sm text-gray-600">Turn your shop into a digital banking point</p>
                                    </div>
                                </a>
                                <a href="micro-atm" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/micro-atm.svg" class="w-full" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Micro ATM</h4>
                                        <p class="text-sm text-gray-600">Turn Your Shop into a Bank with Micro ATM</p>
                                    </div>
                                </a>
                                <a href="dmt" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/dmt.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">DMT</h4>
                                        <p class="text-sm text-gray-600">Domestic Money Transfer</p>
                                    </div>
                                </a>
                                <a href="cash-management-system"
                                    class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/cms.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">CMS</h4>
                                        <p class="text-sm text-gray-600">Cash Management System</p>
                                    </div>
                                </a>
                                <a href="account-opening" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/acc-open.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Account Opening</h4>
                                        <p class="text-sm text-gray-600">Turn Your Store into a Digital Bank Branch</p>
                                    </div>
                                </a>
                                <a href="upi-cash-@pos" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/upi-cash.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">UPI Cash @POS</h4>
                                        <p class="text-sm text-gray-600">Transform Your POS into a Cash Point</p>
                                    </div>
                                </a>
                                <a href="indo-nepal-dmt" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/insurance.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">INDO-NEPAL DMT</h4>
                                        <p class="text-sm text-gray-600">Send Money to Nepal, Simply & Securely</p>
                                    </div>
                                </a>


                            </div>
                        </div>
                    </div>

                    <!-- Travel Platform Services -->
                    <div class="mobile-submenu-group">
                        <button
                            class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
                            <span class="font-medium">Travel Platform</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="mobile-submenu-content hidden pl-2">
                            <div class="space-y-3 py-2">
                                <!-- BEGIN MOBILE SERVICES CONTENT - TRAVEL -->
                                <a href="irctc" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/travel-platform.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">IRCTC Agent ID</h4>
                                        <p class="text-sm text-gray-600">IRCTC Agent ID Platform</p>
                                    </div>
                                </a>
                                <a href="travel-booking-platform"
                                    class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/flight-bus-icon.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Flight /Bus Booking</h4>
                                        <p class="text-sm text-gray-600">Travel Booking Platform</p>
                                    </div>
                                </a>

                                <!-- END MOBILE SERVICES CONTENT - TRAVEL -->
                            </div>
                        </div>
                    </div>

                    <!-- Utility Payment Platform Services -->
                    <div class="mobile-submenu-group">
                        <button
                            class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
                            <span class="font-medium">Utility Payment Platform</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="mobile-submenu-content hidden pl-2">
                            <div class="space-y-3 py-2">
                                <!-- BEGIN MOBILE SERVICES CONTENT - UTILITY -->
                                <a href="recharge-payment" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/utility-&-bill.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Recharge</h4>
                                        <p class="text-sm text-gray-600">Mobile & DTH Recharge Platform</p>
                                    </div>
                                </a>
                                <a href="bbps" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/bank.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">BBPS</h4>
                                        <p class="text-sm text-gray-600">Pay Bills, Stay Ahead</p>
                                    </div>
                                </a>
                                <a href="lic-premium-payment-platform"
                                    class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/insurance.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">LIC Pay</h4>
                                        <p class="text-sm text-gray-600">LIC Premium Payment Platform</p>
                                    </div>
                                </a>
                                <a href="fastag-recharge" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/fastag.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Fastag Recharge</h4>
                                        <p class="text-sm text-gray-600">Your Simple FASTag Solution</p>
                                    </div>
                                </a>
                                <a href="credit-card-bill-payment"
                                    class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/e-governance.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">CC Bill Pay</h4>
                                        <p class="text-sm text-gray-600">Credit Card Bill Payment Platform</p>
                                    </div>
                                </a>

                                <!-- END MOBILE SERVICES CONTENT - UTILITY -->
                            </div>
                        </div>
                    </div>

                    <!-- E-Governance Platform Services -->
                    <div class="mobile-submenu-group">
                        <button
                            class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
                            <span class="font-medium">E-Governance Platform</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="mobile-submenu-content hidden pl-2">
                            <div class="space-y-3 py-2">

                                <a href="pan-uti" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/e-governance.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">PAN UTI</h4>
                                        <p class="text-sm text-gray-600">Your Trusted PAN Card Service Partner</p>
                                    </div>
                                </a>
                                <a href="pan-nsdl" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/nsdl-pan-icon.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">NSDL PAN</h4>
                                        <p class="text-sm text-gray-600">PAN Card Application Made Simple</p>
                                    </div>
                                </a>


                            </div>
                        </div>
                    </div>

                    <!-- Insurance Platform Services -->
                    <div class="mobile-submenu-group">
                        <button
                            class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
                            <span class="font-medium">Insurance Platform</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="mobile-submenu-content hidden pl-2">
                            <div class="space-y-3 py-2">
                                <!-- BEGIN MOBILE SERVICES CONTENT - INSURANCE -->
                                <a href="motor-insurance" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/motor-insurance.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Motor Insurance</h4>
                                        <p class="text-sm text-gray-600">Grow Your Business with Motor Insurance</p>
                                    </div>
                                </a>
                                <a href="life-insurance" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/life-insurance.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Life Insurance</h4>
                                        <p class="text-sm text-gray-600">Life Insurance Platform Services</p>
                                    </div>
                                </a>
                                <a href="health-insurance" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                                    <div class="p-2 bg-primary-50 rounded-lg mr-3">
                                        <img src="assets/icons/menu/insurance.svg" alt="">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Health Insurance</h4>
                                        <p class="text-sm text-gray-600">Digital Health Insurance Solutions</p>
                                    </div>
                                </a>

                                <!-- END MOBILE SERVICES CONTENT - INSURANCE -->
                            </div>
                        </div>
                    </div>



                    <!-- ONDC Services -->
                    <!-- <div class="mobile-submenu-group">
            <button class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
              <span class="font-medium">ONDC Services</span>
              <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <div class="mobile-submenu-content hidden pl-2">
              <div class="space-y-3 py-2">
                <a href="ondc-e-commerce-seller-platform" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <img src="assets/icons/menu/seller-onbodring.svg" alt="">
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">ONDC E-Commerce Seller Onboarding</h4>
                    <p class="text-sm text-gray-600">Empowering Sellers Through Your Business</p>
                  </div>
                </a>
                <a href="ondc-ecommerce-buyer" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <img src="assets/icons/menu/buyer-refer.svg" alt="">
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">ONDC E-Commerce Buyer Refer</h4>
                    <p class="text-sm text-gray-600">Serve Buyers with Local Convenience</p>
                  </div>
                </a>
                <a href="ondc-e-commerce-logistic-franchise" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <img src="assets/icons/menu/logistics-franchise.svg" alt="">
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">ONDC Logistics Franchise</h4>
                    <p class="text-sm text-gray-600">Deliver Smarter Through Your Platform</p>
                  </div>
                </a>
                <a href="ondc-credit-in-a-box" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <img src="assets/icons/menu/credit-services.svg" alt="">
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">ONDC Credit Services</h4>
                    <p class="text-sm text-gray-600">Credit Tailored for Your Business Growth</p>
                  </div>
                </a>
              </div>
            </div>
          </div> -->
                </div>
            </div>
        </div>


        <!-- Simple Menu Items -->
        <a href="who-we-serve" class="block py-3 px-2 text-gray-700 font-medium border-b border-gray-100">Who We
            Serve</a>
        <div class="mobile-menu-group border-b border-gray-100 pb-2">
            <button
                class="mobile-menu-toggle w-full flex justify-between items-center py-3 px-2 text-gray-700 font-medium">
                <span>Company</span>
                <i class="fas fa-chevron-down text-xs transition-transform duration-200"></i>
            </button>
            <div class="mobile-submenu hidden pl-4">
                <div class="space-y-3 py-2">
                    <a href="about-us" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                        <h4 class="text-gray-900">About Us</h4>
                    </a>
                    <a href="careers" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                        <h4 class="text-gray-900">Career</h4>
                    </a>
                    <!-- <a href="ondc-credit-in-a-box" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
            <h4 class="text-gray-900">Blogs</h4>
          </a>
          <a href="ondc-credit-in-a-box" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
            <h4 class="text-gray-900">Case Study</h4>
          </a>
          <a href="ondc-credit-in-a-box" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
            <h4 class="text-gray-900">Testimonials</h4>
          </a>
          <a href="ondc-credit-in-a-box" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
            <h4 class="text-gray-900">Media</h4>
          </a> -->
                </div>
            </div>
        </div>

        <a href="contact-us" class="block py-3 px-2 text-gray-700 font-medium border-b border-gray-100">Contact Us</a>
    </nav>

    <!-- Mobile CTA Buttons -->
    <div class="mt-8 space-y-3">
        <!-- <a href="book-a-demo" class="block w-full text-center px-5 py-3 border border-secondary-500 text-secondary-500 rounded-lg font-semibold hover:bg-secondary-50 transition">GET STARTED</a> -->
        <a href="book-a-demo"
            class="block w-full text-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold hover:shadow-md transition">FREE
            LIVE DEMO</a>
    </div>
</div>