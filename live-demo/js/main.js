(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });


    // Smooth scrolling on the navbar links
    $(".navbar-nav a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top - 60
            }, 1500, 'easeInOutExpo');
            
            if ($(this).parents('.navbar-nav').length) {
                $('.navbar-nav .active').removeClass('active');
                $(this).closest('a').addClass('active');
            }
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            992:{
                items:2
            }
        }
    });

    $(function() {
        $(".table-wrap").each(function() {
          var nmtTable = $(this);
          var nmtHeadRow = nmtTable.find("thead tr");
          nmtTable.find("tbody tr").each(function() {
            var curRow = $(this);
            for (var i = 0; i < curRow.find("td").length; i++) {
              var rowSelector = "td:eq(" + i + ")";
              var headSelector = "th:eq(" + i + ")";
              curRow.find(rowSelector).attr('data-title', nmtHeadRow.find(headSelector).text());
            }
          });
        });
      });


    // price head sticky
    const body = document.body;
const firstSection = document.querySelector("section:nth-child(1)");
const lastSection = document.querySelector("section:nth-child(3)");
const table = document.querySelector("table");
const thead = document.querySelector("table thead");
const mq = window.matchMedia("(min-width: 780px)");
const stickyClass = "sticky-table";
const sticky2Class = "sticky2-table";

let tableWidth = table.offsetWidth;
let tableOffsetTop = table.getBoundingClientRect().top;
// or
//let tableOffsetTop = table.offsetTop;
let theadHeight = thead.offsetHeight;

window.addEventListener("scroll", scrollHandler);
window.addEventListener("resize", resizeHandler);

function scrollHandler() {
  if (mq.matches) {
    const scrollY = window.pageYOffset;
    const lastSectionOffsetTop = lastSection.getBoundingClientRect().top;
    if (scrollY >= tableOffsetTop) {
      thead.style.width = `${tableWidth}px`;
      if (lastSectionOffsetTop > theadHeight) {
        body.classList.remove(sticky2Class);
        body.classList.add(stickyClass);
        thead.style.top = 0;
        body.style.paddingTop = `${theadHeight}px`;
      } else {
        body.classList.remove(stickyClass);
        body.classList.add(sticky2Class);
        thead.style.top = `calc(100% - ${theadHeight}px)`;
      }
    } else {
      body.classList.remove(stickyClass, sticky2Class);
      body.style.paddingTop = 0;
      thead.style.width = "100%";
      thead.style.top = "auto";
    }
  }
}

function resizeHandler() {
  if (mq.matches) {
    tableWidth = table.offsetWidth;
    tableOffsetTop = firstSection.offsetHeight;
    theadHeight = thead.offsetHeight;
  } else {
    body.classList.remove(stickyClass, sticky2Class);
    body.style.paddingTop = 0;
    thead.style.width = "100%";
    thead.style.top = "auto";
  }
}
    // form validation
    $(document).ready(function(){
        $.validator.addMethod("noSpace", function(value, element) { 
          return this.optional( element ) || /^[^-\s][a-zA-Z0-9_\s-!@#$&:()\\-`.+,/\'"]*$/.test( value )
        }, "Pre space and <>%*=;~ this characters not allowed");
              $.validator.addMethod("noSpaceSpl", function(value, element) { 
          return this.optional( element ) || /^[^-\s][a-zA-Z\s]*$/.test( value )
        }, "Characters only allowed");
        $.validator.addMethod('customphone', function (value, element){ 
          return this.optional(element) || /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/.test(value); 
        }, "Please enter a valid phone number"); 
            // > Contact form function by = custom.js	
             $(".rental-analysis").validate({
             rules: {
                       username: {
                            noSpaceSpl:true,
                            required: true,
                        }, 
                        email: {
                            required: true,
                            email:true,
                        }, 
                        phone: {
                            required: true,
                            customphone:true,
                            minlength: 7,
                            maxlength: 15,                   
                        },
                        rentaladd: {
                            required: true,
                            noSpaceSpl:true,
                        },
                       
                    },
                    messages: {
         
                        username: {
                            required: "Please enter your name",
                        },
                        email: {
                            required: "Please enter your email",
                        },
                        phone: {
                            required: "Please enter your phone number",
                        },
                        rentaladd: {
                            required: "Please enter rental address",
                        },               
         
                    }
            
          });
        
             $('#analysis_form').click(function(){
          var IsValid=$(".rental-analysis").valid();
                 if (IsValid) {
                     var username = $('#username').val();
                     var email = $('#email').val();
                     var phone = $('#phone').val();
                     var rentaladd = $('#rental-address').val();
                     var action='contactform';
                     jQuery.ajax({
                    url: 'form-handler2.php?con=1',
                    data:{"username": username,"email": email,"phone": phone,"rental-address": rentaladd,"action":action},
                    type: 'POST',
                    dataType: 'JSON',
                    beforeSend: function() {
                        jQuery('.loading-area').show();
                    },
                    success:function(data){
                        jQuery('.loading-area').hide();
                        if(data['success']){
                        jQuery("<div class='alert alert-success'>"+data['message']+"</div>").insertBefore('form.rental-analysis');
                        }else{
                        jQuery("<div class='alert alert-danger'>"+data['message']+"</div>").insertBefore('form.rental-analysis');	
                        }
                    }
                });
                jQuery('.rental-analysis').trigger("reset");
                return false;
                 }
        });
        });

        // end
})(jQuery);

