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
    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
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

    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
})(jQuery);

// form validation 
function validateForm() {
    // Clear all previous error messages
    document.querySelectorAll('.error-message').forEach(function(el) {
        el.textContent = '';
    });

    var isValid = true;

    var name = document.getElementById('name').value.trim();
    var number = document.getElementById('number').value.trim();
    var email = document.getElementById('mail').value.trim();
    var city = document.getElementById('city').value.trim();
    var sdate = document.getElementById('sdate').value.trim();
    var edate = document.getElementById('edate').value.trim();
    var upartydetails = document.getElementById('upartydetails').value.trim();
    var uhalldetails = document.getElementById('uhalldetails').value.trim();

    // Validate each field
    if (name === "") {
        document.getElementById('nameError').textContent = 'Your Name is required';
        isValid = false;
    }
    if (number === "") {
        document.getElementById('numberError').textContent = 'Your Whatsapp Number is required';
        isValid = false;
    } else {
        var phonePattern = /^\d{10}$/;
        if (!phonePattern.test(number)) {
            document.getElementById('numberError').textContent = 'Please enter a valid 10-digit phone number';
            isValid = false;
        }
    }
    if (email === "") {
        document.getElementById('emailError').textContent = 'Your Email is required';
        isValid = false;
    } else {
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email)) {
            document.getElementById('emailError').textContent = 'Please enter a valid email address';
            isValid = false;
        }
    }
    if (city === "") {
        document.getElementById('cityError').textContent = 'Your City is required';
        isValid = false;
    }
    if (sdate === "") {
        document.getElementById('sdateError').textContent = 'Event Starting Date is required';
        isValid = false;
    }
    if (edate === "") {
        document.getElementById('edateError').textContent = 'Event Ending Date is required';
        isValid = false;
    } else if (new Date(sdate) > new Date(edate)) {
        document.getElementById('edateError').textContent = 'Event starting date must be before event ending date';
        isValid = false;
    }
    if (upartydetails === "") {
        document.getElementById('upartydetailsError').textContent = 'Party Details are required';
        isValid = false;
    }
    if (uhalldetails === "") {
        document.getElementById('uhalldetailsError').textContent = 'Date & Mandapam Details are required';
        isValid = false;
    }

    // If any field is invalid, prevent form submission
    return isValid;
}
// for paginatio
