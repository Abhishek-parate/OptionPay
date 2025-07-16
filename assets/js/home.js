// Product tabs navigation with fixes for white patch and proper scrolling
document.addEventListener("DOMContentLoaded", function () {
  const tabCards = document.querySelectorAll(".product-tab");
  const tabsContainer = document.querySelector(".flex.overflow-x-auto");
  const contentSections = document.querySelectorAll(".product-content");
  let animationInProgress = false;

  if (tabsContainer) {
    tabsContainer.classList.add(
      "bg-white",
      "relative",
      "z-10",
      "py-2",
      "px-0",
      "m-0",
      "scrollbar-hide"
    );

    tabsContainer.classList.remove("px-4", "-mx-4", "whitespace-nowrap");
    const parentContainer = tabsContainer.parentElement;
    if (parentContainer) {
      parentContainer.classList.add("bg-white", "relative", "overflow-hidden");
    }
    tabCards.forEach((card) => {
      card.classList.add("mx-1", "flex-shrink-0", "z-20", "relative");
    });
  }

  contentSections.forEach((section, index) => {
    if (index === 0) {
      section.classList.remove("hidden");
      section.classList.remove(
        "animate-fade-in",
        "animate-fade-out",
        "animate-slide-in"
      );
    } else {
      section.classList.add("hidden");
    }
  });

  if (tabCards.length > 0) {
    tabCards[0].classList.add("bg-secondary-500");
    tabCards[0].classList.remove(
      "bg-white",
      "text-primary-600",
      "border-gray-200"
    );

    const activeIcon = tabCards[0].querySelector("i");
    if (activeIcon) {
      activeIcon.classList.add("text-white");
      activeIcon.classList.remove("text-primary-500");
    }

    const heading = tabCards[0].querySelector("h3");
    if (heading) {
      heading.classList.add("text-white");
      heading.classList.remove("text-primary-600");
    }
  }

  // Function to scroll tab into view when selected (for mobile)
  const scrollTabIntoView = (tab, event) => {
    if (window.innerWidth < 1024 && tabsContainer) {
      // Prevent default behavior that might cause page scroll
      if (event) event.preventDefault();

      // Instead of using scrollIntoView, manually center the tab
      const tabRect = tab.getBoundingClientRect();
      const containerRect = tabsContainer.getBoundingClientRect();

      // Calculate the center position
      const targetScrollLeft =
        tab.offsetLeft - containerRect.width / 2 + tabRect.width / 2;

      // Smooth scroll with native API
      tabsContainer.scrollTo({
        left: targetScrollLeft,
        behavior: "smooth",
      });

      // Prevent scrolling the entire page
      return false;
    }
  };

  // Add click event to each tab
  tabCards.forEach((tab, index) => {
    tab.addEventListener("click", (event) => {
      // Skip if clicking the already active tab or if animation is in progress
      if (tab.classList.contains("bg-secondary-500") || animationInProgress) {
        return;
      }

      // Set animation flag to prevent multiple clicks
      animationInProgress = true;

      // Scroll the tab into center view on mobile
      scrollTabIntoView(tab, event);

      // Reset all tabs to inactive state
      tabCards.forEach((card) => {
        card.classList.remove("bg-secondary-500", "text-white");
        card.classList.add(
          "bg-white",
          "text-primary-600",
          "border",
          "border-gray-200"
        );

        // Reset icon color
        const icon = card.querySelector("i");
        if (icon) {
          icon.classList.remove("text-white");
          icon.classList.add("text-primary-500");
        }

        // Reset text color for the heading
        const heading = card.querySelector("h3");
        if (heading) {
          heading.classList.remove("text-white");
          heading.classList.add("text-primary-600");
        }
      });

      // Set clicked tab to active state with animation
      tab.classList.remove("bg-white", "text-primary-600", "border-gray-200");
      tab.classList.add("bg-secondary-500", "animate-bounce-once");

      // Make icon white when tab is active
      const activeIcon = tab.querySelector("i");
      if (activeIcon) {
        activeIcon.classList.remove("text-primary-500", "text-primary-600");
        activeIcon.classList.add("text-white");
      }

      // Update text color for the heading
      const heading = tab.querySelector("h3");
      if (heading) {
        heading.classList.remove("text-primary-600");
        heading.classList.add("text-white");
      }

      // After bounce animation completes, remove the class
      setTimeout(() => {
        tab.classList.remove("animate-bounce-once");
      }, 300);

      // Find currently visible content section
      const currentSection = Array.from(contentSections).find(
        (section) => !section.classList.contains("hidden")
      );

      // Get target section
      const targetSection = contentSections[index];

      // Apply a smooth transition approach to eliminate blinking
      if (currentSection) {
        // 1. Create a smooth transition by using opacity
        currentSection.style.transition = "opacity 300ms ease-out";
        currentSection.style.opacity = "0";

        // 2. After fade out completes, switch sections
        setTimeout(() => {
          // Hide current section
          currentSection.classList.add("hidden");
          currentSection.style.transition = "";

          // Prepare target section
          targetSection.classList.remove("hidden");
          targetSection.style.opacity = "0";

          // Allow browser to register the new section before starting animation
          requestAnimationFrame(() => {
            requestAnimationFrame(() => {
              // Start fade in
              targetSection.style.transition = "opacity 300ms ease-in";
              targetSection.style.opacity = "1";

              // Clear transitions after animation completes
              setTimeout(() => {
                targetSection.style.transition = "";
                animationInProgress = false;
              }, 350); // Slightly longer than the transition to ensure completion
            });
          });
        }, 320); // Slightly longer than the fade-out transition
      } else {
        // If no current section (shouldn't happen, but just in case)
        targetSection.classList.remove("hidden");
        targetSection.style.opacity = "0";
        targetSection.style.transition = "opacity 300ms ease-in";

        requestAnimationFrame(() => {
          targetSection.style.opacity = "1";

          setTimeout(() => {
            targetSection.style.transition = "";
            animationInProgress = false;
          }, 350);
        });
      }
    });
  });

  // Add hover effect to tabs
  tabCards.forEach((tab) => {
    tab.addEventListener("mouseenter", () => {
      if (!tab.classList.contains("bg-secondary-500")) {
        tab.classList.add("shadow-md");
        tab.style.transform = "scale(1.05)";
        tab.style.transition = "transform 0.2s ease, box-shadow 0.2s ease";
      }
    });

    tab.addEventListener("mouseleave", () => {
      if (!tab.classList.contains("bg-secondary-500")) {
        tab.classList.remove("shadow-md");
        tab.style.transform = "scale(1)";
      }
    });
  });

  // Add the scrollbar-hide utility class if it doesn't exist
  if (!document.getElementById("scrollbar-hide-style")) {
    const style = document.createElement("style");
    style.id = "scrollbar-hide-style";
    style.textContent = `
      .scrollbar-hide {
        scrollbar-width: none;
        -ms-overflow-style: none;
      }
      .scrollbar-hide::-webkit-scrollbar {
        display: none;
      }
    `;
    document.head.appendChild(style);
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const logosSlide = document.querySelector(".logos-slide");
  const logosContainer = document.querySelector(".logos-container");

  // Only proceed if both elements exist
  if (!logosSlide || !logosContainer) {
    console.log("Logos slider elements not found");
    return;
  }

  // Function to ensure enough logos
  const ensureEnoughLogos = () => {
    const containerWidth = logosContainer.offsetWidth;
    const slideWidth = logosSlide.offsetWidth;

    // If the slide is not at least twice as wide as the container, clone more logos
    if (slideWidth < containerWidth * 2) {
      const originalSet = logosSlide.innerHTML;
      logosSlide.innerHTML = originalSet + originalSet;

      // Recursive check if we need even more copies
      ensureEnoughLogos();
    }
  };

  // Run after images have loaded to get accurate widths
  window.addEventListener("load", ensureEnoughLogos);

  // Also adjust if window is resized
  window.addEventListener("resize", ensureEnoughLogos);
});

document.addEventListener("DOMContentLoaded", function () {
  // First check if carousel exists
  const carousel = document.getElementById("blog-carousel");
  if (!carousel) return;

  // Get all required elements
  const prevBtn = document.getElementById("prev-btn");
  const nextBtn = document.getElementById("next-btn");
  const indicatorBtns = document.querySelectorAll(".indicator-btn");
  const blogCards = carousel.querySelectorAll(".bg-gray-100");

  // Exit if no blog cards found
  if (!blogCards.length) return;

  let currentIndex = 0;
  let isAnimating = false;

  carousel.classList.add(
    "overflow-x-auto",
    "md:overflow-hidden",
    "scrollbar-hide",
    "pb-4",
    "md:pb-0"
  );

  // Hide scrollbar for better appearance
  if (!document.querySelector("style#scrollbar-hide-style")) {
    const style = document.createElement("style");
    style.id = "scrollbar-hide-style";
    style.textContent = `
      .scrollbar-hide::-webkit-scrollbar {
        display: none;
      }
      .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
    `;
    document.head.appendChild(style);
  }

  // Add responsive classes to cards
  blogCards.forEach((card) => {
    // Make cards responsive
    card.classList.add("flex-shrink-0");

    // Ensure proper widths at different breakpoints
    // This preserves your md:w-1/3 for desktop but adds responsive behavior for smaller screens
    if (!card.classList.contains("md:w-1/3")) {
      card.classList.add("md:w-1/3");
    }

    // Set width for mobile and tablet
    card.classList.add("w-4/5", "sm:w-1/2");

    // Set min-width for mobile to prevent tiny cards
    card.classList.add("min-w-[280px]", "sm:min-w-0");

    // Add transitions and hover effects
    card.classList.add(
      "transition-all",
      "duration-300",
      "ease-in-out",
      "hover:shadow-lg"
    );

    // Add snap alignment for better mobile experience
    card.classList.add("snap-start");
  });

  // Add snap scrolling for touch devices
  carousel.classList.add("snap-x", "snap-mandatory", "md:snap-none");

  // Calculate the number of visible cards based on screen size
  function getCardsPerView() {
    if (window.innerWidth < 640) {
      return 1; // Mobile: 1 card
    } else if (window.innerWidth < 768) {
      return 2; // Tablet: 2 cards
    } else {
      return 3; // Desktop: 3 cards
    }
  }

  // Update carousel position
  function updateCarousel(animate = true) {
    if (isAnimating) return;
    isAnimating = true;

    // Calculate card width including gap
    // Need to get actual computed width since cards may have different widths at different screen sizes
    const cardStyles = window.getComputedStyle(blogCards[0]);
    const cardWidth = blogCards[0].offsetWidth;
    const marginRight = parseInt(cardStyles.marginRight, 10) || 0;
    const gapWidth = marginRight || 24; // Default to 24px if no margin is detected (Tailwind's space-x-6)

    // Calculate exact scroll position
    const scrollPosition = currentIndex * (cardWidth + gapWidth);

    // Scroll to position
    if (animate) {
      carousel.scrollTo({
        left: scrollPosition,
        behavior: "smooth",
      });

      // Reset animating flag after animation completes
      setTimeout(() => {
        isAnimating = false;

        // Refresh AOS animations
        if (typeof AOS !== "undefined") {
          AOS.refresh();
        }
      }, 500);
    } else {
      carousel.scrollLeft = scrollPosition;
      isAnimating = false;
    }

    // Update indicators
    updateIndicators();

    // Update navigation buttons
    updateButtonStates();
  }

  // Update indicator buttons
  function updateIndicators() {
    indicatorBtns.forEach((btn, index) => {
      if (index === currentIndex) {
        btn.classList.remove("w-2", "h-2", "bg-gray-300", "rounded-full");
        btn.classList.add("w-8", "h-1", "bg-secondary-500", "rounded");
      } else {
        btn.classList.remove("w-8", "h-1", "bg-secondary-500", "rounded");
        btn.classList.add("w-2", "h-2", "bg-gray-300", "rounded-full");
      }
    });
  }

  // Update button states (disabled/enabled)
  function updateButtonStates() {
    // Prev button logic
    if (currentIndex <= 0) {
      prevBtn.setAttribute("disabled", "true");
      prevBtn.classList.add("opacity-50", "cursor-not-allowed");
    } else {
      prevBtn.removeAttribute("disabled");
      prevBtn.classList.remove("opacity-50", "cursor-not-allowed");
    }

    // Next button logic - depend on visible cards
    const maxIndex = Math.max(0, blogCards.length - getCardsPerView());
    if (currentIndex >= maxIndex) {
      nextBtn.setAttribute("disabled", "true");
      nextBtn.classList.add("opacity-50", "cursor-not-allowed");
    } else {
      nextBtn.removeAttribute("disabled");
      nextBtn.classList.remove("opacity-50", "cursor-not-allowed");
    }
  }

  // Set up previous button click handler
  if (prevBtn) {
    prevBtn.addEventListener("click", function () {
      if (currentIndex > 0 && !isAnimating) {
        currentIndex--;
        updateCarousel();
      }
    });
  }

  // Set up next button click handler
  if (nextBtn) {
    nextBtn.addEventListener("click", function () {
      const maxIndex = Math.max(0, blogCards.length - getCardsPerView());
      if (currentIndex < maxIndex && !isAnimating) {
        currentIndex++;
        updateCarousel();
      }
    });
  }

  // Set up indicator buttons
  indicatorBtns.forEach((btn, index) => {
    // Only show indicators for available slides
    if (index < blogCards.length) {
      btn.addEventListener("click", function () {
        if (currentIndex !== index && !isAnimating) {
          currentIndex = index;
          updateCarousel();
        }
      });
    } else {
      // Hide extra indicators
      btn.style.display = "none";
    }
  });

  // Handle window resize
  let resizeTimer;
  window.addEventListener("resize", function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () {
      // Adjust currentIndex if needed after resize
      const maxIndex = Math.max(0, blogCards.length - getCardsPerView());
      currentIndex = Math.min(currentIndex, maxIndex);

      // Update carousel without animation
      updateCarousel(false);

      // Refresh AOS animations
      if (typeof AOS !== "undefined") {
        AOS.refresh();
      }
    }, 200);
  });

  // Touch swipe support for mobile
  let touchStartX = 0;
  let touchEndX = 0;

  carousel.addEventListener(
    "touchstart",
    (e) => {
      touchStartX = e.changedTouches[0].screenX;
    },
    {
      passive: true,
    }
  );

  carousel.addEventListener(
    "touchend",
    (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
    },
    {
      passive: true,
    }
  );

  function handleSwipe() {
    const swipeThreshold = 50;
    if (touchEndX < touchStartX - swipeThreshold) {
      // Swiped left - go to next slide
      const maxIndex = Math.max(0, blogCards.length - getCardsPerView());
      if (currentIndex < maxIndex && !isAnimating) {
        currentIndex++;
        updateCarousel();
      }
    }
    if (touchEndX > touchStartX + swipeThreshold) {
      // Swiped right - go to previous slide
      if (currentIndex > 0 && !isAnimating) {
        currentIndex--;
        updateCarousel();
      }
    }
  }

  // Handle manual scrolling
  carousel.addEventListener("scroll", function () {
    if (isAnimating) return;

    const cardWidth = blogCards[0].offsetWidth;
    const cardStyles = window.getComputedStyle(blogCards[0]);
    const marginRight = parseInt(cardStyles.marginRight, 10) || 0;
    const gapWidth = marginRight || 24;

    // Calculate closest index based on scroll position
    const scrollLeft = carousel.scrollLeft;
    const newIndex = Math.round(scrollLeft / (cardWidth + gapWidth));

    // Update index and indicators if position changed
    if (
      newIndex !== currentIndex &&
      newIndex >= 0 &&
      newIndex < blogCards.length
    ) {
      currentIndex = newIndex;
      updateIndicators();
      updateButtonStates();
    }
  });

  // Initialize carousel
  updateCarousel(false);

  // Refresh AOS animations if available
  if (typeof AOS !== "undefined") {
    setTimeout(() => {
      AOS.refresh();
    }, 100);
  }
});
