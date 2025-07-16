<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OptionPay - Book a Demo</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="./assets/css/style.css" rel="stylesheet">
  <link href="./assets/css/header.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@3"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
</head>

<body class="bg-white font-inter">

  <?php include_once('includes/header.php'); ?>
  <main class="overflow-hidden">
    <section class="py-10 px-4 ">
      <div class="max-w-2xl mx-auto">
        <div class="text-center mb-8" data-aos="fade-down" data-aos-duration="800">
          <h2 class="text-4xl font-bold text-secondary-500 mb-2 mt-12">Let's Talk Business</h2>
          <p class="text-gray-800 text-lg" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">Get Started with Digital Financial Services</p>
        </div>
        
        <form action="demo-submit.php" method="post" autocomplete="on" class="text-left">
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="flex flex-col">
              <label for="name" class="text-sm font-medium text-gray-700">Your Name</label>
              <input type="text" class="form-input px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500" id="name" placeholder="Your Name" name="name" required>
            </div>
            <div class="flex flex-col">
              <label for="email" class="text-sm font-medium text-gray-700">Your Email</label>
              <input type="email" class="form-input px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500" id="email" placeholder="Your Email" name="email" required>
            </div>
            <div class="flex flex-col">
              <label for="Mobile" class="text-sm font-medium text-gray-700">Mobile Number</label>
              <input type="text" pattern="[6789][0-9]{9}" inputmode="numeric" class="form-input px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500" id="Mobile" placeholder="Mobile Number" minlength="10" maxlength="10" name="Mobile" required>
            </div>
            <div class="flex flex-col">
              <label for="date" class="text-sm font-medium text-gray-700">Preferred Date:</label>
              <input type="date" class="form-input px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500" onfocus="disablePastDates()" id="date" name="date" required>
            </div>

            <div class="col-span-1 md:col-span-2 flex flex-col">
              <label for="notes" class="text-sm font-medium text-gray-700">Key points to discuss:</label>
              <textarea id="notes" class="form-textarea px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500" name="notes" placeholder="Notes" maxlength="200" style="height: 100px" required></textarea>
            </div>

            <input type="hidden" name="utm_source" id="utm_source">
            <input type="hidden" name="utm_medium" id="utm_medium">
            <input type="hidden" name="utm_campaign" id="utm_campaign">
            <input type="hidden" name="utm_term" id="utm_term">
            <input type="hidden" name="utm_content" id="utm_content">

            <div class="col-span-1 md:col-span-2">
              <button class="bg-secondary-500 hover:bg-secondary-600 text-white font-medium py-3 px-4 rounded-md transition duration-300 uppercase text-sm tracking-wider" data-aos="zoom-in" type="submit">Book a Demo</button>
            </div>
          </div>
        </form>

        <script>
          // This script just handles the UTM fields and date picker.
          document.addEventListener('DOMContentLoaded', function() {
            // Populate UTM parameters
            const urlParams = new URLSearchParams(window.location.search);
            ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'].forEach(field => {
              const el = document.getElementById(field);
              if (el) el.value = urlParams.get(field) || '';
            });
          });

          // Disable past dates
          function disablePastDates() {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById("date").setAttribute("min", today);
          }
        </script>
      </div>
    </section>
    
    </main>

  <?php include_once('includes/footer.php'); ?>
  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/header.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>