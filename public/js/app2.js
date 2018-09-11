/* Theme Name: Headland - Responsive Landing Page Template
   Author: Stagebit
   Version: 1.0.0
   File Description: Main Js file of the template
*/

! function($) {
    "use strict";

    var Stagebit = function() {};

    Stagebit.prototype.initStickyMenu = function() {
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 50) {
                $(".sticky").addClass("nav-sticky");
            } else {
                $(".sticky").removeClass("nav-sticky");
            }
        });
    },
    
    Stagebit.prototype.initSmoothLink = function() {
        $('.navbar-nav a').on('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 0
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
    },

    Stagebit.prototype.initScrollspy = function() {
        $("#navbarCollapse").scrollspy({ offset: 70 });
    },

    Stagebit.prototype.initTestiMonial = function() {
         $("#owl-demo").owlCarousel({
            autoPlay: 3000,
            stopOnHover: true,
            navigation: false,
            paginationSpeed: 1000,
            goToFirstSpeed: 2000,
            singleItem: true,
            autoHeight: true,
        });
    },

    Stagebit.prototype.initCounter = function() {
        var a = 0;
        $(window).scroll(function() {
            var oTop = $('body').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                            countNum: countTo
                        },

                        {
                            duration: 2000,
                            easing: 'swing',
                            step: function() {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function() {
                                $this.text(this.countNum);
                                //alert('finished');
                            }

                        });
                });
                a = 1;
            }
        });
    },

    Stagebit.prototype.initTestiMonial = function() {
         $("#owl-demo").owlCarousel({
            autoPlay: 3000,
            stopOnHover: true,
            navigation: false,
            paginationSpeed: 1000,
            goToFirstSpeed: 2000,
            singleItem: true,
            autoHeight: true,
            transitionStyle : "fade"
        });
    },

    Stagebit.prototype.initMfpVideo = function() {
        $('.video-play-icon').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    },

    Stagebit.prototype.initBacktoTop = function() {
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn();
            } else {
                $('.back-to-top').fadeOut();
            }
        }); 
        $('.back-to-top').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 1000);
            return false;
        });
    },

    Stagebit.prototype.initFAQ = function() {
        $('.grid').masonry({
        // options
            itemSelector: '.grid-item',
        });
    },
    
    Stagebit.prototype.init = function() {
        this.initStickyMenu();
        this.initSmoothLink();
        this.initScrollspy();
        this.initTestiMonial();
        this.initMfpVideo();
        this.initCounter();
        this.initFAQ();
        this.initBacktoTop();
    },
    //init
    $.Stagebit = new Stagebit, $.Stagebit.Constructor = Stagebit
}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.Stagebit.init();
}(window.jQuery);



