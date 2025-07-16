<!-- Mobile Navigation Menu - Overlay -->
<div class="hidden md:hidden fixed inset-0 z-50" id="mobile-menu-overlay">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-black bg-opacity-50" id="mobile-menu-backdrop"></div>
    
    <!-- Menu Panel -->
    <div class="absolute right-0 top-0 h-full w-4/5 max-w-sm bg-white shadow-xl transform transition-transform duration-300" id="mobile-menu-panel">
        <div class="flex items-center justify-between p-4 border-b">
            <h2 class="text-lg font-semibold text-primary-600">Menu</h2>
            <button type="button" class="p-2 rounded-full text-gray-500 hover:bg-gray-100" id="close-mobile-menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        
        <nav class="p-4">
            <ul class="space-y-2">
                <li><a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:text-primary-600 font-medium rounded-lg hover:bg-primary-50 transition-colors">Platform</a></li>
                <li><a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:text-primary-600 font-medium rounded-lg hover:bg-primary-50 transition-colors">Services</a></li>
                <li><a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:text-primary-600 font-medium rounded-lg hover:bg-primary-50 transition-colors">Who We Serve</a></li>
                <li><a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:text-primary-600 font-medium rounded-lg hover:bg-primary-50 transition-colors">Company</a></li>
                <li><a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:text-primary-600 font-medium rounded-lg hover:bg-primary-50 transition-colors">Contact Us</a></li>
            </ul>
        </nav>
        
        <div class="absolute bottom-0 left-0 right-0 p-4 border-t">
            <div class="space-y-3">
                <a href="#" class="block w-full px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-center transition-all hover:bg-secondary-600">
                    FREE LIVE DEMO
                </a>
                <a href="#" class="block w-full px-5 py-3 border border-secondary-500 text-secondary-500 bg-white rounded-lg font-semibold text-center transition-all hover:bg-secondary-50">
                    GET STARTED
                </a>
            </div>
        </div>
    </div>
</div>