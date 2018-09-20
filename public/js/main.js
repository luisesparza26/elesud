$(document).ready(controlCabecera);
$(document).scroll(controlCabecera);
$(window).resize(controlCabecera);
function controlCabecera() {
		'use strict';
    var scrollY = $(document).scrollTop();
    if (scrollY > 350) {
        $('.bg-trans').removeClass('bg-transparent');
		$('.bg-trans ').fadeIn("slow");
    } else {
        $('.bg-trans').addClass('bg-transparent');
		$('.bg-trans').fadeOut("slow");
    }
}
$(document).ready(function () {
	'use strict';
	$('.menu').click(function () {
		$(this).toggleClass('is-active');
	});
	$('.nav-index').click(function () {
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
$(document).ready(function () {
	'use strict';
	$('#homebtn').click(function () {
		var text = $(this).attr('value');
		$("#panel").val(text);
	});
	$('#aboutbtn').click(function () {
		var text = $(this).attr('value');
		$("#panel").val(text);
	});
	$('#productsbtn').click(function () {
		var text = $(this).attr('value');
		$("#panel").val(text);
	});
	$('#servicesbtn').click(function () {
		var text = $(this).attr('value');
		$("#panel").val(text);
	});
	$('#brandsbtn').click(function () {
		var text = $(this).attr('value');
		$("#panel").val(text);
	});
	$('#projectsbtn').click(function () {
		var text = $(this).attr('value');
		$("#panel").val(text);
	});
	$('#contactbtn').click(function () {
		var text = $(this).attr('value');
		$("#panel").val(text);
	});
});
(function(d, s, id) {
		'use strict';
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));