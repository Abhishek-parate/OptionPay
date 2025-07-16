<?php
require_once 'admin/config/database.php';

// Get all about us sections
$db = getDB();
$stmt = $db->query("SELECT * FROM aboutus_settings");
$sections = [];
while ($row = $stmt->fetch()) {
    $sections[$row['section_name']] = json_decode($row['section_data'], true);
}

// Extract data
$seo = $sections['seo'] ?? [];
$hero = $sections['hero'] ?? [];
$impact = $sections['impact'] ?? [];
$life = $sections['life_at_optionpay'] ?? [];
$vision = $sections['vision'] ?? [];
$join = $sections['join_section'] ?? [];
?>
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
  <title><?= htmlspecialchars($seo['title'] ?? 'About OptionPay | Fintech Company in India') ?></title>
  <meta name="description" content="<?= htmlspecialchars($seo['description'] ?? 'Learn about OptionPay, a fintech pioneer since 2017, empowering businesses with white label solutions for India\'s tier 2 & 3 cities.') ?>">
  <?php if (!empty($seo['keywords'])): ?>
  <meta name="keywords" content="<?= htmlspecialchars($seo['keywords']) ?>">
  <?php endif; ?>
  
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="./assets/css/style.css" rel="stylesheet">
  <link href="./assets/css/header.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@3"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.8.0/countUp.umd.js"></script>

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

    <!-- Hero Section -->
    <section class="relative overflow-hidden py-10 pt-20 md:pt-24 md:py-10 bg-white">
      <div class="container mx-auto px-4 sm:px-6 relative z-20">
        <div class="max-w-4xl mx-auto text-center mb-8 md:mb-12 lg:mb-16">
          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6 text-gray-900 leading-tight"
            data-aos="fade-up" data-aos-duration="800" data-aos-mirror="true">
            <span class="text-secondary-500"><?= htmlspecialchars($hero['title'] ?? 'About us') ?></span>
          </h1>
          
          <?php if (!empty($hero['description_1'])): ?>
          <p class="text-base sm:text-lg md:text-xl mb-6 md:mb-8 max-w-3xl mx-auto" data-aos="fade-up"
            data-aos-duration="800" data-aos-delay="100" data-aos-mirror="true">
            <?= htmlspecialchars($hero['description_1']) ?>
          </p>
          <?php endif; ?>
          
          <?php if (!empty($hero['description_2'])): ?>
          <p class="text-base sm:text-lg md:text-xl mb-6 md:mb-8 max-w-3xl mx-auto" data-aos="fade-up"
            data-aos-duration="800" data-aos-delay="200" data-aos-mirror="true">
            <?= htmlspecialchars($hero['description_2']) ?>
          </p>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <!-- Impact Section with Counter Animation -->
    <section class="w-full py-12 bg-primary-600" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" id="impact-section">
      <div class="text-center mb-10" data-aos="fade-down" data-aos-duration="800" data-aos-once="true">
        <h2 class="text-white text-2xl sm:text-3xl md:text-4xl font-bold"><?= htmlspecialchars($impact['title'] ?? 'Our Impact') ?></h2>
      </div>
      <div class="max-w-7xl mx-auto grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 text-center text-white px-4">
        <?php if (!empty($impact['stats'])): ?>
          <?php foreach ($impact['stats'] as $index => $stat): ?>
            <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="<?= ($index + 2) * 100 ?>" data-aos-once="true">
              <div class="text-4xl sm:text-5xl font-bold counter" 
                   data-target="<?= htmlspecialchars($stat['number']) ?>" 
                   data-key="<?= htmlspecialchars($stat['key']) ?>">0</div>
              <p class="text-base sm:text-lg font-semibold text-white/90 mt-2"><?= htmlspecialchars($stat['label']) ?></p>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </section>

    <!-- Life at OptionPay Section -->
    <section class="w-full max-w-[1226px] mx-auto px-4 py-12">
      <div class="flex flex-col lg:flex-row gap-10">
        <div class="w-full lg:w-1/2 flex justify-center">
          <img src="<?= htmlspecialchars($life['image'] ?? 'assets/images/life-at-OptionPay.JPG') ?>" alt="<?= htmlspecialchars($life['subtitle'] ?? 'Life at OptionPay') ?>"
            class="h-auto rounded-md object-cover" />
        </div>
        <div class="w-full lg:w-1/2 flex flex-col justify-center">
          <p class="text-secondary-500 text-lg sm:text-xl font-bold uppercase"><?= htmlspecialchars($life['subtitle'] ?? 'Life at OptionPay') ?></p>
          <h2 class="text-gray-900 text-2xl sm:text-3xl md:text-4xl font-bold mb-4 md:mb-6"><?= htmlspecialchars($life['title'] ?? 'Creating India\'s most reliable financial services distribution platform') ?></h2>
          <p class="text-gray-900 text-base sm:text-lg leading-relaxed opacity-70">
            <?= htmlspecialchars($life['description'] ?? 'At our Pune headquarters, our team works to solve real challenges faced by businesses and communities. We blend technology expertise with deep understanding of financial services to create solutions that work for India\'s diverse market.') ?>
          </p>
        </div>
      </div>
    </section>

    <!-- Vision Section -->
    <section class="bg-secondary-500 w-full mx-auto px-4 py-16">
      <div class="max-w-[1226px] mx-auto px-6">
        <h3 class="text-white text-4xl font-bold leading-[51px]">
          <?= htmlspecialchars($vision['title'] ?? 'Our Vision') ?>
        </h3>
        <h2 class="text-white lg:text-6xl text-2xl font-normal leading-tight mt-4">
          <?= htmlspecialchars($vision['statement'] ?? 'Making financial services accessible to every corner of India') ?>
        </h2>
      </div>
    </section>

    <!-- Join Section -->
    <section class="relative py-10 px-4 sm:px-8 md:px-16 lg:px-20">
      <div class="container mx-auto">
        <div class="bg-gradient-to-br from-primary-600 to-primary-600 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
          data-aos="fade-up" data-aos-duration="1000">

          <!-- Background Pattern -->
          <div class="absolute z-0 opacity-30 right-0">
            <img src="<?= htmlspecialchars($join['bg_pattern'] ?? 'assets/images/home/svg/white-bg-dot-icon.svg') ?>" alt="background dots"
              class="w-full h-full object-cover">
          </div>

          <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-3 sm:mb-4 relative z-10"
              data-aos="fade-up" data-aos-delay="200">
              <?= htmlspecialchars($join['title'] ?? 'Join OptionPay Today') ?>
            </h1>

            <p class="text-base sm:text-lg text-gray-300 relative z-10" data-aos="fade-up" data-aos-delay="300">
              <?= htmlspecialchars($join['subtitle'] ?? 'Start for free — upgrade anytime.') ?>
            </p>

            <div class="relative z-10" data-aos="fade-up" data-aos-delay="400">
              <p class="text-gray-300 mb-4 sm:mb-6">
                <a href="<?= htmlspecialchars($join['contact_link'] ?? 'contact-us') ?>" class="underline hover:text-white transition">
                  <?= htmlspecialchars($join['contact_text'] ?? 'Joining as an organization? Contact Sales') ?>
                </a>
              </p>

              <a href="<?= htmlspecialchars($join['cta_link'] ?? 'book-a-demo') ?>"
                class="inline-flex items-center bg-secondary-500 hover:bg-secondary-600 text-white px-5 sm:px-6 py-2 sm:py-3 rounded-lg font-semibold transition-all transform hover:scale-105"
                data-aos="zoom-in" data-aos-delay="500">
                <?= htmlspecialchars($join['cta_text'] ?? 'Sign up free') ?><i class="fa-solid fa-arrow-right text-white ms-2"></i>
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
  
  <script>
    // Initialize AOS
    AOS.init();

    // Simple Counter Animation (without external library dependency)
    document.addEventListener('DOMContentLoaded', function() {
      const impactSection = document.getElementById('impact-section');
      const counters = document.querySelectorAll('.counter');
      
      let hasAnimated = false;

      function animateValue(element, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
          if (!startTimestamp) startTimestamp = timestamp;
          const progress = Math.min((timestamp - startTimestamp) / duration, 1);
          const current = Math.floor(progress * (end - start) + start);
          
          // Add commas for thousands
          const formatted = current.toLocaleString();
          element.textContent = formatted + '+';
          
          if (progress < 1) {
            window.requestAnimationFrame(step);
          }
        };
        window.requestAnimationFrame(step);
      }

      function animateCounters() {
        if (hasAnimated) return;
        hasAnimated = true;

        counters.forEach((counter, index) => {
          const targetValue = counter.getAttribute('data-target');
          
          if (targetValue) {
            // Parse number (remove commas and convert)
            const numericValue = parseInt(targetValue.replace(/,/g, ''));
            
            // Animate with slight delay for each counter
            setTimeout(() => {
              animateValue(counter, 0, numericValue, 2000);
            }, index * 200);
          }
        });
      }

      // Use CountUp.js if available, otherwise use simple animation
      if (typeof CountUp !== 'undefined') {
        function animateCountersWithCountUp() {
          if (hasAnimated) return;
          hasAnimated = true;

          counters.forEach((counter, index) => {
            const targetValue = counter.getAttribute('data-target');
            
            if (targetValue) {
              const numericValue = parseInt(targetValue.replace(/,/g, ''));
              
              setTimeout(() => {
                try {
                  const countUp = new countUp.CountUp(counter, numericValue, {
                    duration: 2.5,
                    useGrouping: true,
                    suffix: '+'
                  });
                  
                  if (!countUp.error) {
                    countUp.start();
                  } else {
                    console.log('CountUp error, using fallback animation');
                    animateValue(counter, 0, numericValue, 2000);
                  }
                } catch (error) {
                  console.log('CountUp library error, using fallback animation');
                  animateValue(counter, 0, numericValue, 2000);
                }
              }, index * 200);
            }
          });
        }
        
        // Use CountUp.js
        animateCounters = animateCountersWithCountUp;
      }

      // Intersection Observer for counter animation
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting && entry.intersectionRatio > 0.5) {
            animateCounters();
            observer.unobserve(entry.target); // Stop observing after animation
          }
        });
      }, { 
        threshold: 0.5,
        rootMargin: '-50px'
      });

      if (impactSection) {
        observer.observe(impactSection);
      }

      // Fallback: trigger animation after 3 seconds if intersection observer doesn't work
      setTimeout(() => {
        if (!hasAnimated) {
          console.log('Fallback: triggering counter animation');
          animateCounters();
        }
      }, 3000);
    });
  </script>
</body>

</html>