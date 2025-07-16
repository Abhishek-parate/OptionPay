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
  <title>OptionPay - Careers</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="./assets/css/style.css" rel="stylesheet">
  <link href="./assets/css/header.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
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

    <section class="relative overflow-hidden py-10 pt-20 md:pt-24 md:py-10 bg-white">
     

      <!-- Main Content -->
      <div class="container mx-auto px-4 sm:px-6 relative z-20">
        <div class="max-w-4xl mx-auto text-center mb-8 md:mb-12 lg:mb-16">
          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6 text-gray-900 leading-tight"
            data-aos="fade-up" data-aos-duration="800" data-aos-mirror="true">
            <span class="text-secondary-500">Cancellation & Refund Policy</span>
          </h1>
        </div>
      </div>
    </section>

    <section class="py-10 px-4 md:px-8 lg:px-16 bg-white">
      <div class="max-w-4xl mx-auto">
        <div class="bg-white animate-fade-in-up">
          <p class="text-justify text-gray-800 leading-relaxed space-y-6">
            A transaction that fails for a reason that it is directly attributable to OptionPay, and for which the user receives a corresponding confirmation from the associated payment gateway will be refunded automatically back to the account of the user in a time period of 3 to 21 working days, from the date on which the original transaction has taken place. A confirmation email will also be sent to the email ID of the user registered with us. Please note that the amount pertaining to the applicable taxes and the payment gateway charges will not be refunded.

            <br><br>
            In cases in which the user receives the successful payment completion confirmation but does not get the services, the user is required to register a complaint with OptionPay. This complaint can be logged by the user by sending an email to the Customer Care email ID provided on the website. We will conduct a complete inquiry upon receiving the complaint registered by the user. Refund of the payment will be provided to the user account on the basis of results of the inquiry.

            <br><br>
            Please note that in all cases, the liability of OptionPay is restricted only to provide a valid refund to the extent of the payment received by us. OptionPay is not responsible for any consequential liability or claim that may be associated with the failure of the services of our system.

            <br><br>
            A user should accept that the OptionPay refund policy is subject to the stated terms and conditions of the user agreement of the website.

            <br><br>
            We thank you for transacting with us and look forward to a bright and successful future for our partnership.
          </p>

          <p class="text-center mt-8 text-sm text-gray-600">
            <a href="about-us" class="hover:underline text-blue-600">About Us</a> |
            <a href="privacy-policy" class="hover:underline text-blue-600">Privacy Policy</a> |
            <a href="cancellation-&-refund-policy" class="hover:underline text-blue-600">Refund &amp; Cancellation Policy</a> |
            Customer Care No. <a href="tel:+91-9201010140" class="hover:underline text-blue-600">+91-9201010140</a> |
            <a href="tel:+91-9201010150" class="hover:underline text-blue-600">+91-9201010150</a>
          </p>
        </div>
      </div>
    </section>


  </main>
  <?php include_once('includes/footer.php'); ?>

  <script src="./assets/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@3"></script>
</body>

</html>