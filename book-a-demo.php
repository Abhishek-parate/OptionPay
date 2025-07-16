<?php
// Start session before any output
session_start();

// Include necessary files
require_once 'admin/config/database.php';
?>

<!DOCTYPE html>
<!-- book-a-demo.php -->
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
  
  <style>
    .form-error {
      border-color: #ef4444 !important;
      background-color: #fef2f2;
    }
    .error-message {
      color: #ef4444;
      font-size: 0.875rem;
      margin-top: 0.25rem;
      display: block;
      min-height: 1rem;
    }
    .success-message {
      background-color: #d1fae5;
      border-color: #10b981;
      color: #065f46;
      padding: 1rem;
      border-radius: 0.5rem;
      margin-bottom: 1rem;
      border: 1px solid;
    }
    .error-alert {
      background-color: #fee2e2;
      border-color: #ef4444;
      color: #dc2626;
      padding: 1rem;
      border-radius: 0.5rem;
      margin-bottom: 1rem;
      border: 1px solid;
    }
    .submit-btn {
      transition: all 0.3s ease;
    }
    .submit-btn:disabled {
      opacity: 0.6;
      cursor: not-allowed;
    }
    .loading {
      display: none;
    }

    /* Popup Styles */
    .popup-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.6);
      z-index: 9999;
      display: none;
      backdrop-filter: blur(4px);
    }

    .popup-container {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: white;
      border-radius: 16px;
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
      max-width: 500px;
      width: 90%;
      max-height: 90vh;
      overflow-y: auto;
      z-index: 10000;
      animation: popupSlideIn 0.3s ease-out;
    }

    @keyframes popupSlideIn {
      from {
        opacity: 0;
        transform: translate(-50%, -60%);
      }
      to {
        opacity: 1;
        transform: translate(-50%, -50%);
      }
    }

    .popup-header {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      padding: 20px;
      border-radius: 16px 16px 0 0;
      position: relative;
    }

    .popup-close {
      position: absolute;
      top: 15px;
      right: 20px;
      background: rgba(255, 255, 255, 0.2);
      border: none;
      color: white;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background 0.2s;
    }

    .popup-close:hover {
      background: rgba(255, 255, 255, 0.3);
    }

    .popup-body {
      padding: 30px;
    }

    .popup-title {
      font-size: 1.5rem;
      font-weight: bold;
      margin: 0 0 8px 0;
    }

    .popup-subtitle {
      opacity: 0.9;
      margin: 0;
    }

    .popup-content {
      margin-bottom: 25px;
      line-height: 1.6;
      color: #555;
    }

    .popup-features {
      list-style: none;
      padding: 0;
      margin: 20px 0;
    }

    .popup-features li {
      display: flex;
      align-items: center;
      margin-bottom: 12px;
      padding: 8px 0;
    }

    .popup-features i {
      color: #10b981;
      margin-right: 12px;
      width: 20px;
    }

    .popup-cta {
      background: linear-gradient(45deg, #667eea, #764ba2);
      color: white;
      border: none;
      padding: 14px 28px;
      border-radius: 8px;
      font-weight: 600;
      cursor: pointer;
      width: 100%;
      font-size: 1rem;
      transition: transform 0.2s;
    }

    .popup-cta:hover {
      transform: translateY(-2px);
    }

    .popup-footer {
      text-align: center;
      margin-top: 20px;
      padding-top: 20px;
      border-top: 1px solid #e5e7eb;
    }

    .popup-footer p {
      font-size: 0.875rem;
      color: #6b7280;
      margin: 0;
    }
  </style>
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
        
        <!-- Display Flash Messages -->
        <?php if (isset($_SESSION['flash_message'])): ?>
          <div class="<?= $_SESSION['flash_type'] === 'error' ? 'error-alert' : 'success-message' ?>">
            <i class="fas <?= $_SESSION['flash_type'] === 'error' ? 'fa-exclamation-triangle' : 'fa-check-circle' ?> mr-2"></i>
            <?= htmlspecialchars($_SESSION['flash_message']) ?>
            <?php unset($_SESSION['flash_message'], $_SESSION['flash_type']); ?>
          </div>
        <?php endif; ?>
        
        <form id="demoForm" action="demo-submit" method="post" autocomplete="on" class="text-left">
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="flex flex-col">
              <label for="name" class="text-sm font-medium text-gray-700">Your Name *</label>
              <input type="text" 
                     class="form-input px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500" 
                     id="name" 
                     placeholder="Your Name" 
                     name="name" 
                     required>
              <span class="error-message" id="name-error"></span>
            </div>
            
            <div class="flex flex-col">
              <label for="email" class="text-sm font-medium text-gray-700">Your Email *</label>
              <input type="email" 
                     class="form-input px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500" 
                     id="email" 
                     placeholder="Your Email" 
                     name="email" 
                     required>
              <span class="error-message" id="email-error"></span>
            </div>
            
            <div class="flex flex-col">
              <label for="Mobile" class="text-sm font-medium text-gray-700">Mobile Number *</label>
              <input type="tel" 
                     pattern="[6789][0-9]{9}" 
                     inputmode="numeric" 
                     class="form-input px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500" 
                     id="Mobile" 
                     placeholder="Mobile Number" 
                     minlength="10" 
                     maxlength="10" 
                     name="Mobile" 
                     required>
              <span class="error-message" id="Mobile-error"></span>
            </div>
            
            <div class="flex flex-col">
              <label for="date" class="text-sm font-medium text-gray-700">Preferred Date *</label>
              <input type="date" 
                     class="form-input px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500" 
                     id="date" 
                     name="date" 
                     required>
              <span class="error-message" id="date-error"></span>
            </div>

            <div class="col-span-1 md:col-span-2 flex flex-col">
              <label for="notes" class="text-sm font-medium text-gray-700">Key points to discuss *</label>
              <textarea id="notes" 
                        class="form-textarea px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500" 
                        name="notes" 
                        placeholder="Tell us about your business requirements, current challenges, or specific features you'd like to see in the demo..." 
                        maxlength="500" 
                        style="height: 100px" 
                        required></textarea>
              <span class="error-message" id="notes-error"></span>
              <div class="text-sm text-gray-500 mt-1">
                <span id="notes-count">0</span>/500 characters
              </div>
            </div>

            <!-- Hidden UTM Fields -->
            <input type="hidden" name="utm_source" id="utm_source">
            <input type="hidden" name="utm_medium" id="utm_medium">
            <input type="hidden" name="utm_campaign" id="utm_campaign">
            <input type="hidden" name="utm_term" id="utm_term">
            <input type="hidden" name="utm_content" id="utm_content">

            <div class="col-span-1 md:col-span-2">
              <button class="submit-btn bg-secondary-500 hover:bg-secondary-600 text-white font-medium py-3 px-4 rounded-md transition duration-300 uppercase text-sm tracking-wider w-full" 
                      data-aos="zoom-in" 
                      type="submit" 
                      id="submitBtn">
                <span id="btn-text">
                  <i class="fas fa-calendar-check mr-2"></i>Book a Demo
                </span>
                <span id="btn-loading" class="loading">
                  <i class="fas fa-spinner fa-spin mr-2"></i>Submitting...
                </span>
              </button>
            </div>
          </div>
        </form>

        <!-- Demo Popup -->
        <div class="popup-overlay" id="demoPopup">
          <div class="popup-container">
            <div class="popup-header">
              <button class="popup-close" onclick="closePopup()" aria-label="Close popup">
                <i class="fas fa-times"></i>
              </button>
              <h2 class="popup-title">🚀 Ready to Transform Your Business?</h2>
              <p class="popup-subtitle">Join 1000+ successful partners already using OptionPay!</p>
            </div>
            
            <div class="popup-body">
              <div class="popup-content">
                <p><strong>See OptionPay in action!</strong> Our personalized demo will show you exactly how to:</p>
              </div>
              
              <ul class="popup-features">
                <li>
                  <i class="fas fa-rocket"></i>
                  <span>Launch your fintech services in just 7 days</span>
                </li>
                <li>
                  <i class="fas fa-chart-line"></i>
                  <span>Increase revenue with multiple income streams</span>
                </li>
                <li>
                  <i class="fas fa-users"></i>
                  <span>Serve 1000+ customers with bank-grade security</span>
                </li>
                <li>
                  <i class="fas fa-headset"></i>
                  <span>Get 24/7 technical support from our expert team</span>
                </li>
                <li>
                  <i class="fas fa-mobile-alt"></i>
                  <span>Access everything from your mobile device</span>
                </li>
              </ul>
              
              <button class="popup-cta" onclick="scrollToForm()">
                <i class="fas fa-calendar-check mr-2"></i>
                Book My Free Demo Now
              </button>
              
              <div class="popup-footer">
                <p>✅ No commitment required • ✅ 100% Free consultation • ✅ Expert guidance included</p>
              </div>
            </div>
          </div>
        </div>

        <script>
          // Popup functionality
          function showPopup() {
            document.getElementById('demoPopup').style.display = 'block';
            document.body.style.overflow = 'hidden'; // Prevent background scroll
          }

          function closePopup() {
            document.getElementById('demoPopup').style.display = 'none';
            document.body.style.overflow = 'auto'; // Restore background scroll
          }

          function scrollToForm() {
            closePopup();
            document.getElementById('demoForm').scrollIntoView({ 
              behavior: 'smooth', 
              block: 'start' 
            });
            // Focus on first input field
            setTimeout(() => {
              document.getElementById('name').focus();
            }, 500);
          }

          // Close popup when clicking outside
          document.getElementById('demoPopup').addEventListener('click', function(e) {
            if (e.target === this) {
              closePopup();
            }
          });

          // Close popup with Escape key
          document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
              closePopup();
            }
          });

          // Show popup after page loads (with delay)
          window.addEventListener('load', function() {
            // Check if user has seen popup before (using sessionStorage)
            if (!sessionStorage.getItem('demoPopupShown')) {
              setTimeout(showPopup, 3000); // Show after 3 seconds
              sessionStorage.setItem('demoPopupShown', 'true');
            }
          });

          document.addEventListener('DOMContentLoaded', function() {
            // Get form elements
            const form = document.getElementById('demoForm');
            const submitBtn = document.getElementById('submitBtn');
            const btnText = document.getElementById('btn-text');
            const btnLoading = document.getElementById('btn-loading');
            const notesTextarea = document.getElementById('notes');
            const notesCount = document.getElementById('notes-count');

            // Populate UTM parameters
            const urlParams = new URLSearchParams(window.location.search);
            ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'].forEach(field => {
              const el = document.getElementById(field);
              if (el) el.value = urlParams.get(field) || '';
            });

            // Set minimum date to tomorrow
            const dateInput = document.getElementById('date');
            if (dateInput) {
              const tomorrow = new Date();
              tomorrow.setDate(tomorrow.getDate() + 1);
              dateInput.min = tomorrow.toISOString().split('T')[0];
            }

            // Character counter for notes
            if (notesTextarea && notesCount) {
              notesTextarea.addEventListener('input', function() {
                const count = this.value.length;
                notesCount.textContent = count;
                
                if (count > 500) {
                  this.value = this.value.substring(0, 500);
                  notesCount.textContent = 500;
                }
              });
            }

            // Simple validation function
            function validateField(fieldId) {
              const field = document.getElementById(fieldId);
              const errorElement = document.getElementById(fieldId + '-error');
              
              if (!field || !errorElement) {
                console.warn('Field or error element not found:', fieldId);
                return true;
              }

              const value = field.value.trim();
              let isValid = true;
              let errorMessage = '';

              // Clear previous error
              field.classList.remove('form-error');
              errorElement.textContent = '';

              switch (fieldId) {
                case 'name':
                  if (!value) {
                    errorMessage = 'Name is required';
                    isValid = false;
                  } else if (value.length < 2) {
                    errorMessage = 'Name must be at least 2 characters';
                    isValid = false;
                  }
                  break;

                case 'email':
                  if (!value) {
                    errorMessage = 'Email is required';
                    isValid = false;
                  } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                    errorMessage = 'Please enter a valid email address';
                    isValid = false;
                  }
                  break;

                case 'Mobile':
                  if (!value) {
                    errorMessage = 'Mobile number is required';
                    isValid = false;
                  } else if (!/^[6-9][0-9]{9}$/.test(value)) {
                    errorMessage = 'Please enter a valid 10-digit mobile number';
                    isValid = false;
                  }
                  break;

                case 'date':
                  if (!value) {
                    errorMessage = 'Preferred date is required';
                    isValid = false;
                  } else {
                    const selectedDate = new Date(value);
                    const today = new Date();
                    today.setHours(0, 0, 0, 0);
                    
                    if (selectedDate <= today) {
                      errorMessage = 'Please select a future date';
                      isValid = false;
                    }
                  }
                  break;

                case 'notes':
                  if (!value) {
                    errorMessage = 'Notes are required';
                    isValid = false;
                  } else if (value.length < 10) {
                    errorMessage = 'Please provide at least 10 characters';
                    isValid = false;
                  }
                  break;
              }

              if (!isValid) {
                field.classList.add('form-error');
                errorElement.textContent = errorMessage;
              }

              return isValid;
            }

            // Add real-time validation
            const fields = ['name', 'email', 'Mobile', 'date', 'notes'];
            fields.forEach(fieldId => {
              const field = document.getElementById(fieldId);
              if (field) {
                field.addEventListener('blur', () => validateField(fieldId));
                field.addEventListener('input', () => {
                  if (field.classList.contains('form-error')) {
                    validateField(fieldId);
                  }
                });
              }
            });

            // Mobile number formatting
            const mobileField = document.getElementById('Mobile');
            if (mobileField) {
              mobileField.addEventListener('input', function(e) {
                let value = e.target.value.replace(/[^0-9]/g, '');
                if (value.length > 10) {
                  value = value.substring(0, 10);
                }
                e.target.value = value;
              });
            }

            // Form submission
            if (form) {
              form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Validate all fields
                let isFormValid = true;
                fields.forEach(fieldId => {
                  if (!validateField(fieldId)) {
                    isFormValid = false;
                  }
                });

                if (!isFormValid) {
                  // Scroll to first error
                  const firstError = document.querySelector('.form-error');
                  if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    firstError.focus();
                  }
                  return;
                }

                // Show loading state
                if (submitBtn && btnText && btnLoading) {
                  submitBtn.disabled = true;
                  btnText.style.display = 'none';
                  btnLoading.style.display = 'inline';
                }

                // Submit form
                this.submit();
              });
            }
                      });
          });
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