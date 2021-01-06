(function($){
	"use strict";
    jQuery(document).ready(function () {
        jQuery('.main-menu').meanmenu();
    });
	// PRELOADER JS CODE
    jQuery(window).on('load',function(){
        jQuery(".loader-box").fadeOut(400);
    });
    // END PRELOADER JS CODE
	
	$(document).on('ready', function(){
		
		// START MENU JS CODE
		$(window).on('scroll', function() {
			if ($(this).scrollTop() > 70) {
				$('.main-menu-area').addClass('menu-shrink animated slideInDown');
			} else {
				$('.main-menu-area').removeClass('menu-shrink animated slideInUp');
			}
		});	
		
		$('.menu li a').on('click', function(e){
			var anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $(anchor.attr('href')).offset().top - 50
			}, 1000);
			e.preventDefault();
        });
		
		$(document).on('click','.navbar-collapse.in',function(e) {
			if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
				$(this).collapse('hide');
			}
		});

		$('.scroll-btm a').on('click', function(e){
			var anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $(anchor.attr('href')).offset().top - 50
			}, 1000);
			e.preventDefault();
        });
		
		$('.banner-area').slick({
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            verticalSwiping: true,
            infinite: true,
            speed: 1000,
            autoplay: true,
		});

		
$('.slick-carousel').slick({
	dots: false,
	arrows: false,
	infinite: false,
	speed: 300,
	slidesToShow: 6,
	slidesToScroll: 4,
	autoplay: true,
	responsive: [
	  {
		breakpoint: 1024,
		settings: {
		  slidesToShow: 3,
		  slidesToScroll: 3,
		  infinite: true,
		  dots: false
		}
	  },
	  {
		breakpoint: 600,
		settings: {
		  slidesToShow: 2,
		  slidesToScroll: 2
		}
	  },
	  {
		breakpoint: 480,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1
		}
	  }
	  // You can unslick at a given breakpoint now by adding:
	  // settings: "unslick"
	  // instead of a settings object
	]
  });


		$('.slick-featured').slick({
			dots: true,
			arrows: true,
			infinite: false,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 4,
			autoplay: true,
			nextArrow: '<div class="slick-custom-arrow slick-custom-arrow-right"><i class="icofont-long-arrow-right"></i></div>',
			prevArrow: '<div class="slick-custom-arrow slick-custom-arrow-left"><i class="icofont-long-arrow-left"></i></div>',
			responsive: [
			  {
				breakpoint: 1024,
				settings: {
				  slidesToShow: 2,
				  slidesToScroll: 3,
				  infinite: true,
				  dots: true
				}
			  },
			  {
				breakpoint: 767,
				settings: {
				  slidesToShow: 1,
				  slidesToScroll: 2
				}
			  },
			  {
				breakpoint: 600,
				settings: {
				  slidesToShow: 1,
				  slidesToScroll: 2
				}
			  },
			  {
				breakpoint: 480,
				settings: {
				  slidesToShow: 1,
				  slidesToScroll: 1
				}
			  }
			  // You can unslick at a given breakpoint now by adding:
			  // settings: "unslick"
			  // instead of a settings object
			]
		  });


		$('.sub-menu ul').hide();
		$(".sub-menu a").click(function () {
			$(this).parent(".sub-menu").children("ul").slideToggle("100");
			$(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
		});
        
		new WOW().init();


	/*--------------*/



// Main/Product image slider for product page
$('#detail .main-img-slider').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	infinite: true,
	arrows: true,
	fade:false,
	autoplay: true,
	autoplaySpeed: 4000,
	speed: 300,
	lazyLoad: 'ondemand',
	asNavFor: '.thumb-nav',
	nextArrow: '<div class="slick-custom-arrow slick-custom-arrow-right"><i class="icofont-simple-right"></i></div>',
	prevArrow: '<div class="slick-custom-arrow slick-custom-arrow-left"><i class="icofont-simple-left"></i></div>',
  });
  // Thumbnail/alternates slider for product page
  $('.thumb-nav').slick({
	slidesToShow: 4,
	slidesToScroll: 1,
	infinite: true,
	centerPadding: '0px',
	asNavFor: '.main-img-slider',
	dots: false,
	centerMode: false,
	draggable: true,
	speed:200,
	focusOnSelect: true,
	prevArrow: '<div class="slick-prev"><i class="i-prev"></i><span class="sr-only sr-only-focusable">Previous</span></div>',
	nextArrow: '<div class="slick-next"><i class="i-next"></i><span class="sr-only sr-only-focusable">Next</span></div>'  
  });
  
  
  //keeps thumbnails active when changing main image, via mouse/touch drag/swipe
  $('.main-img-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
	//remove all active class
	$('.thumb-nav .slick-slide').removeClass('slick-current');
	//set active class for current slide
	$('.thumb-nav .slick-slide:not(.slick-cloned)').eq(currentSlide).addClass('slick-current');  
  });

  		// START MIXITUP JS CODE
	  	var mixer = mixitup('#shorting');
	  	// END MIXITUP JS CODE

		// TOP BUTTON JS CODE
		$('body').append('<div id="toTop" class="top-arrow"><i class="icofont-arrow-up"></i></div>');
		$(window).on('scroll', function () {
			if ($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
			} else {
			$('#toTop').fadeOut();
			}
		}); 
		$('#toTop').on('click', function(){
			$("html, body").animate({ scrollTop: 0 }, 600);
			return false;
		});
		// END TOP BUTTON JS CODE
	});

	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();   
	});
	
  
			// formula: c = (r * p) / (1 - (Math.pow((1 + r), (-n))))
function calculateMortgage(p, r, n) {
	r = percentToDecimal(r);
	n = yearsToMonths(n);
	var pmt = (r * p) / (1 - (Math.pow((1 + r), (-n))));
	return parseFloat(pmt.toFixed(2));
  }
  
  function percentToDecimal(percent) {
	return (percent / 12) / 100;
  }
  
  function yearsToMonths(year) {
	return year * 12;
  }
  var htmlEl = document.getElementById("outMonthly");
  
  function postPayments(pmt) {
	htmlEl.innerText = "$" + pmt;
  }
  var btn = document.getElementById("btnCalculate");
  btn.onclick = function() {
	var cost = document.getElementById("inCost").value.replace('$', '');
	var downPayment = document.getElementById("inDown").value.replace('$', '');
	var interest = document.getElementById("inInterest").value.replace('%', '');
	var term = document.getElementById("inTerm").value.replace(' years', '');
	
	if (cost == "" && downPayment == "" && interest == "" && term == "") {
	  htmlEl.innerText = "Please fill out all fields.";
	  return false;
	}
	if (cost < 0 || cost == "" || isNaN(cost)) {
	  htmlEl.innerText = "Please enter a valid loan amount.";
	  return false;
	}
	if (downPayment < 0 || downPayment == "" || isNaN(downPayment)) {
	  htmlEl.innerText = "Please enter a valid down payment.";
	  return false;
	}
	if (interest < 0 || interest == "" || isNaN(interest)) {
	  htmlEl.innerText = "Please enter a valid interest rate.";
	  return false;
	}
	if (term < 0 || term == "" || isNaN(term)) {
	  htmlEl.innerText = "Please enter a valid length of loan.";
	  return false;
	}
	var amountBorrowed = cost - downPayment;
	var pmt = calculateMortgage(amountBorrowed, interest, term);
	postPayments(pmt);
  };
    
}(jQuery));