$(document).ready(function () {
	'use strict';
	$('.menu').click(function () {
		$(this).toggleClass('is-active');
		$('.mobile-menu').toggle();
	});
	$('.nav-index').click(function () {
		$('.mobile-menu').hide();
		$('.menu').removeClass('is-active');
	});
});
(function ($) {
	"use strict";
	$('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
		if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: (target.offset().top - 75)
				}, 1000, "easeInOutExpo");
				return false;
			}
		}
	});
	$('.js-scroll-trigger').click(function () {
		$('.navbar-collapse').collapse('hide');
	});
})(jQuery);
