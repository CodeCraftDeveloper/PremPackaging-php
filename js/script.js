"use strict";

(function ($) {

	// STICKY HEADER 
	$(window).on("scroll", function () {
	    if ($(this).scrollTop() > 200) {
	        $("header").addClass("sticky animated slideInDown");
	    } else {
	        $("header").removeClass("sticky animated slideInDown");
	    }
	});
    
	

	// $('.navbar-light .dmenu').hover(function () {
 //        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
 //    }, function () {
 //        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
 //    });

	// $(".megamenu").on("click", function(e) {
	// 	e.stopPropagation();
	// });

	$("#downBtn").click(function() {
	    $('html,body').animate({
	        scrollTop: $(".second").offset().top},
	        'fast');
	});


	/*---animation wow js---*/
    new WOW().init();


})(jQuery);