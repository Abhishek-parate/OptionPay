    document.addEventListener('DOMContentLoaded', function() {
      const accordionButtons = document.querySelectorAll('.faq-toggle');

      accordionButtons.forEach(button => {
        button.addEventListener('click', () => {
          const content = button.nextElementSibling;
          const isHidden = content.classList.contains('hidden');
          const plusMinus = button.querySelector('span');
          const question = button.querySelector('h3');

          // Close all
          document.querySelectorAll('.faq-content').forEach(div => {
            div.classList.add('hidden');
          });
          document.querySelectorAll('.faq-toggle span').forEach(span => {
            span.textContent = '+';
            span.classList.remove('text-secondary-500');
            span.classList.add('text-primary-800');
          });
          document.querySelectorAll('.faq-toggle h3').forEach(h3 => {
            h3.classList.remove('text-secondary-500');
            h3.classList.add('text-primary-800');
          });

          // Open current if it was closed
          if (isHidden) {
            content.classList.remove('hidden');
            plusMinus.textContent = '−';
            plusMinus.classList.remove('text-primary-800');
            plusMinus.classList.add('text-secondary-500');
            question.classList.remove('text-primary-800');
            question.classList.add('text-secondary-500');
          }
        });
      });
    });