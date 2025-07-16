 // dropdown on hover
  document.getElementById('dropdownNavbarLink').addEventListener('click', function() {
    const dropdownMenu = document.getElementById('dropdownNavbar');
    dropdownMenu.classList.toggle('hidden'); // Toggle the visibility of the dropdown
  });

  // Initialize active tabs for both menus
  function initializeMenu(menuId) {
    const menu = document.querySelector(`#${menuId}`);
    const firstItem = menu.querySelector('.menu-item');
    const firstContent = menu.querySelector('.content-panel');

    // Set first tab as active if none exist
    if (!menu.querySelector('.menu-item.text-red-600')) {
      firstItem.classList.add('text-red-600', 'font-semibold');
      firstContent.classList.remove('hidden');
    }

    // Set up click handlers for this specific menu
    menu.querySelectorAll('.menu-item').forEach(item => {
      item.addEventListener('click', () => {
        // Remove active states from all items in this menu
        menu.querySelectorAll('.menu-item').forEach(i => {
          i.classList.remove('text-red-600', 'font-semibold');
          i.classList.add('text-gray-700');
        });

        // Add active state to clicked item
        item.classList.add('text-red-600', 'font-semibold');
        item.classList.remove('text-gray-700');

        // Show corresponding content
        const target = item.dataset.target;
        menu.querySelectorAll('.content-panel').forEach(panel => {
          panel.classList.toggle('hidden', panel.dataset.content !== target);
        });
      });
    });
  }

  // Initialize both menus when DOM loads
  document.addEventListener('DOMContentLoaded', () => {
    initializeMenu('platform-menu');
    initializeMenu('services-menu');
  });

  // Mobile Menu Toggle
  const mobileToggle = document.getElementById('mobile-toggle');
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileClose = document.getElementById('mobile-close');

  mobileToggle.addEventListener('click', () => {
    mobileMenu.classList.remove('translate-x-full');
    document.body.style.overflow = 'hidden';
  });

  mobileClose.addEventListener('click', () => {
    mobileMenu.classList.add('translate-x-full');
    document.body.style.overflow = '';
  });

  // Mobile Accordion Functionality
  document.querySelectorAll('.mobile-menu-toggle').forEach(toggle => {
    toggle.addEventListener('click', (e) => {
      const parent = e.currentTarget.closest('.mobile-menu-group');
      const submenu = parent.querySelector('.mobile-submenu');
      const icon = parent.querySelector('i');

      submenu.classList.toggle('hidden');
      icon.classList.toggle('rotate-180');

      // Close other main menus
      document.querySelectorAll('.mobile-menu-group').forEach(group => {
        if (group !== parent) {
          group.querySelector('.mobile-submenu').classList.add('hidden');
          group.querySelector('i').classList.remove('rotate-180');
        }
      });
    });
  });

  // Mobile Submenu Accordion
  document.querySelectorAll('.mobile-submenu-toggle').forEach(toggle => {
    toggle.addEventListener('click', (e) => {
      const parent = e.currentTarget.closest('.mobile-submenu-group');
      const content = parent.querySelector('.mobile-submenu-content');
      const icon = parent.querySelector('i');

      content.classList.toggle('hidden');
      icon.classList.toggle('rotate-180');
    });
  });

  // Close menu when clicking outside
  document.addEventListener('click', (e) => {
    if (!mobileMenu.contains(e.target) && !mobileToggle.contains(e.target)) {
      mobileMenu.classList.add('translate-x-full');
      document.body.style.overflow = '';
    }
  });

  // Close on escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      mobileMenu.classList.add('translate-x-full');
      document.body.style.overflow = '';
    }
  });

  const header = document.getElementById('main-header');

  mobileToggle.addEventListener('click', () => {
    mobileMenu.classList.remove('translate-x-full');
    document.body.style.overflow = 'hidden';
    header.classList.add('hidden'); // hide header
  });

  mobileClose.addEventListener('click', () => {
    mobileMenu.classList.add('translate-x-full');
    document.body.style.overflow = '';
    header.classList.remove('hidden'); // show header
  });