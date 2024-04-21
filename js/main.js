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
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').css('top', '0px');
        } else {
            $('.sticky-top').css('top', '-100px');
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


    // Date and time picker
    $('.date').datetimepicker({
        format: 'L'
    });
    $('.time').datetimepicker({
        format: 'LT'
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 25,
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



// Function for sending email
function sendMail(){
    var body = document.getElementById("message").value;
    var subject = document.getElementById("subject").value;
    var email = document.getElementById("email").value;
    var name = document.getElementById("name").value;
    window.location.href = "mailto:sei-solution@gmail.com?subject="+subject+"&body="+"Message:" +"%0D%0A" +body+"%0D%0A%0D%0A"+"Name: " + name + "%0D%0A%0D%0A"+ "Email Address: "+ email + "";
}

//Mobile version

const mobileText = document.createElement('span');
const mobileNav = document.querySelector('.navbar-collapse');
mobileNav.appendChild(mobileText);

function change_image(image){

    var container = document.getElementById("main-image");

   container.src = image.src;
}



document.addEventListener("DOMContentLoaded", function(event) {


});
	
	var dropdowns = document.querySelectorAll(".dropdown");

	for (var i = 0; i < dropdowns.length; i++) {
		
		dropdowns[i].addEventListener('click',function(e){

			for (var x = 0; x < dropdowns.length; x++) {
				dropdowns[x].querySelector(".dropdown-content").classList.add("hide");
			}

			e.currentTarget.querySelector(".dropdown-content").classList.toggle("hide");
		});
	}

