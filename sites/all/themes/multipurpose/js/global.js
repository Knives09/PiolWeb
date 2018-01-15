jQuery( function($) {
	
	$(document).ready(function(){
		
		// Main menu superfish
		$('#main-menu > ul').addClass('sf-menu');
		$('#main-menu > ul').superfish({
			delay: 200,
			animation: {opacity:'show', height:'show'},
			speed: 'fast',
			cssArrows: false,
			disableHI: true
		});

		// Mobile Menu
		$('#navigation-toggle').sidr({
			name: 'sidr-main',
			source: '#sidr-close, #site-navigation',
			side: 'left'
		});
		$(".sidr-class-toggle-sidr-close").click( function() {
			$.sidr('close', 'sidr-main');
			return false;
		});
		

	}); // End doc ready

	$(document).ready(function(){
	if($(".owl-carousel1").length){
		  $(".owl-carousel1").owlCarousel({
		    margin:15,
		    nav: false,
		    dots: true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:4
		        }
		    }
		});
	}
	if($(".owl-visoreinterno").length){
	  $(".owl-visoreinterno").owlCarousel({
	  	items:1,
	    nav: false,
	    loop: true,
	    dots: true
	  });
	}
	if($(".owl-carpage").length){
	  $(".owl-carpage").owlCarousel({
	  	items:1,
	    nav: false,
	    loop: true,
	    dots: true
	  });
	}
	});

	$(window).load(function(){
		// Homepage FlexSlider

		$('#main-menu > ul > li > a.sf-with-ul').append('<i class="fa fa-angle-down"></i>');
		$('#main-menu > ul > li li > a.sf-with-ul').append('<i class="fa fa-angle-right"></i>');

		$('#homepage-slider').flexslider({
			animation: 'fade',
			slideshow: true,
			smoothHeight: true,
			controlNav: false,
			directionNav: true,
			prevText: '<span class="fa fa-caret-left"></span>',
			nextText: '<span class="fa fa-caret-right"></span>',
			controlsContainer: ".flexslider-container"
		});
		
	}); // End on window load
	
});