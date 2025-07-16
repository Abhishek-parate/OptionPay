<?php
// contact-us.php
require_once 'admin/config/database.php';

// Get all contact us sections
$db = getDB();
$stmt = $db->query("SELECT * FROM contactus_settings");
$sections = [];
while ($row = $stmt->fetch()) {
    $sections[$row['section_name']] = json_decode($row['section_data'], true);
}

// Extract data
$seo = $sections['seo'] ?? [];
$form = $sections['form_section'] ?? [];
$join = $sections['join_section'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($seo['title'] ?? 'Contact OptionPay | Fintech Support in India') ?></title>
    <meta name="description" content="<?= htmlspecialchars($seo['description'] ?? 'Contact OptionPay in Pune for fintech solutions, support, or partnerships. Call +91 9096877373 or email sales@OptionPayindia.com.') ?>">
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
    </head>

<body class="bg-white font-inter">

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQCF4VTL" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <?php include_once('includes/header.php'); ?>

    <main class="overflow-hidden">
        <section class="py-10 px-4">
            <div class="max-w-2xl mx-auto">
                <div class="text-center mb-8" data-aos="fade-down" data-aos-duration="800">
                    <h2 class="text-4xl font-bold text-secondary-500 mb-2 mt-12"><?= htmlspecialchars($form['title'] ?? 'Let\'s Talk Business') ?></h2>
                    <p class="text-gray-800 text-lg" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800"><?= htmlspecialchars($form['subtitle'] ?? 'Get Started with Digital Financial Services') ?></p>
                </div>
                
                <form id="leadForm" action="<?= htmlspecialchars($form['form_action'] ?? 'submit-form.php') ?>" method="POST" autocomplete="on" novalidate>
                    <div class="space-y-4">
                        <div class="absolute left-[-9999px]" aria-hidden="true">
                            <label for="website">Website</label>
                            <input type="text" id="website" name="website" tabindex="-1">
                        </div>

                        <input type="hidden" name="form_start_time" value="<?php echo time(); ?>">

                        <?php if (!empty($form['fields'])): ?>
                            <?php foreach ($form['fields'] as $field): ?>
                                <div>
                                    <div class="relative">
                                        <label for="<?= htmlspecialchars($field['name']) ?>" class="block text-sm font-medium text-gray-700"><?= htmlspecialchars($field['label']) ?></label>
                                        <input 
                                            type="<?= htmlspecialchars($field['type']) ?>"
                                            class="form-input mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                            id="<?= htmlspecialchars($field['name']) ?>" 
                                            placeholder="<?= htmlspecialchars($field['placeholder']) ?>" 
                                            name="<?= htmlspecialchars($field['name']) ?>"
                                            <?php if (!empty($field['pattern'])): ?>pattern="<?= htmlspecialchars($field['pattern']) ?>"<?php endif; ?>
                                            <?php if (!empty($field['title'])): ?>title="<?= htmlspecialchars($field['title']) ?>"<?php endif; ?>
                                            <?php if (!empty($field['minlength'])): ?>minlength="<?= $field['minlength'] ?>"<?php endif; ?>
                                            <?php if (!empty($field['maxlength'])): ?>maxlength="<?= $field['maxlength'] ?>"<?php endif; ?>
                                            <?php if ($field['type'] === 'tel'): ?>inputmode="numeric"<?php endif; ?>
                                            <?= $field['required'] ? 'required' : '' ?>
                                        >
                                        <div class="invalid-feedback text-red-500 text-sm mt-1 hidden">Please enter a valid <?= strtolower($field['label']) ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <div>
                            <div id="response" class="sub-res text-gray-600 text-sm"></div>
                        </div>

                        <div>
                            <button
                                class="bg-secondary-500 hover:bg-secondary-600 text-white font-medium py-3 px-4 rounded-md transition duration-300 uppercase text-sm tracking-wider"
                                data-aos="zoom-in" type="submit" id="submitBtn"><?= htmlspecialchars($form['submit_button_text'] ?? 'Submit') ?></button>
                        </div>
                    </div>
                </form>

                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const form = document.getElementById('leadForm');
                    const submitBtn = document.getElementById('submitBtn');
                    const responseDiv = document.getElementById('response');

                    // Real-time validation
                    form.querySelectorAll('input').forEach(input => {
                        input.addEventListener('input', function() {
                            if (input.checkValidity()) {
                                input.classList.remove('is-invalid');
                                input.classList.add('is-valid');
                                const invalidFeedback = input.nextElementSibling;
                                if (invalidFeedback && invalidFeedback.classList.contains('invalid-feedback')) {
                                    invalidFeedback.classList.add('hidden');
                                }
                            } else {
                                input.classList.remove('is-valid');
                                input.classList.add('is-invalid');
                                const invalidFeedback = input.nextElementSibling;
                                if (invalidFeedback && invalidFeedback.classList.contains('invalid-feedback')) {
                                    invalidFeedback.classList.remove('hidden');
                                }
                            }
                        });
                    });

                    form.addEventListener('submit', async function(e) {
                        e.preventDefault();

                        // Check form validity
                        if (!form.checkValidity()) {
                            form.classList.add('was-validated');
                            return;
                        }

                        submitBtn.disabled = true;
                        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...';

                        try {
                            const formData = new FormData(form);
                            const response = await fetch(form.action, {
                                method: 'POST',
                                body: formData
                            });

                            const data = await response.json();

                            if (data.success) {
                                responseDiv.className = 'alert alert-success text-green-600';
                                responseDiv.textContent = '<?= addslashes($form['success_message'] ?? 'Thank you for contacting us!') ?>';
                                form.reset();
                                form.classList.remove('was-validated');
                                form.querySelectorAll('.is-valid').forEach(el => el.classList.remove('is-valid'));
                            } else {
                                responseDiv.className = 'alert alert-danger text-red-600';
                                responseDiv.textContent = data.message || '<?= addslashes($form['error_message'] ?? 'Submission failed. Please try again.') ?>';
                                if (data.errors) {
                                    Object.keys(data.errors).forEach(field => {
                                        const input = form.querySelector(`[name="${field}"]`);
                                        if (input) {
                                            input.classList.add('is-invalid');
                                            const invalidFeedback = input.nextElementSibling;
                                            if (invalidFeedback && invalidFeedback.classList.contains('invalid-feedback')) {
                                                invalidFeedback.textContent = data.errors[field];
                                                invalidFeedback.classList.remove('hidden');
                                            }
                                        }
                                    });
                                }
                            }
                        } catch (error) {
                            responseDiv.className = 'alert alert-danger text-red-600';
                            responseDiv.textContent = 'Error: ' + error.message;
                        } finally {
                            submitBtn.disabled = false;
                            submitBtn.textContent = '<?= addslashes($form['submit_button_text'] ?? 'Submit') ?>';
                        }
                    });
                });
                </script>
            </div>
        </section>

        <section class="relative py-10 px-4 sm:px-8 md:px-16 lg:px-20">
            </section>
    </main>

    <?php include_once('includes/footer.php'); ?>

    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/header.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
    // Initialize AOS with custom settings
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false,
            offset: 100,
            delay: 100
        });
    });
    </script>
</body>

</html>