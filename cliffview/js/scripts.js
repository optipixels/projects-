jQuery(document).ready(function(){
    "use strict";
    
    // Responsive Navigation
    mobileNav('#nav>ul', '.right-area');
    
    function mobileNav(navTag, menuBtnPrependTo){
        jQuery(menuBtnPrependTo).prepend('<a class="menu-btn" href="#"><span></span><span></span><span></span></a>');
        jQuery('body').prepend('<div class="mobile-nav"></div>');
        jQuery('.mobile-nav ~ *').wrapAll('<div class="mobile-nav-wrap"></div>')
        jQuery(navTag).clone().prependTo('.mobile-nav');
        jQuery('.mobile-nav').prepend('<a class="menu-close" href="#">x</a>')
        jQuery('.mobile-nav>ul li').each(function(){
            var subdrop = jQuery(this).find('ul').length;
            if(subdrop != '0'){
                jQuery(this).addClass('has-dropdown');
            }
        });
        jQuery('.mobile-nav .has-dropdown').find('>ul').hide();
        jQuery('.mobile-nav .has-dropdown').on('click', '>a', function(e){
            e.preventDefault();
            var open = jQuery(this).parent('li').hasClass('open');
            if(!open){
                jQuery(this).parent('li').addClass('open');
                jQuery(this).siblings('ul').slideDown();
            }else{
                jQuery(this).parent('li').removeClass('open');
                jQuery(this).siblings('ul').slideUp();
            }
        });
        jQuery('.menu-btn, .menu-close').on('click', function(e){
            e.preventDefault();
            var menuActive = jQuery(this).parents('body').hasClass('menu-active');
            if(!menuActive){
                jQuery(this).parents('body').addClass('menu-active');
            }else{
                jQuery(this).parents('body').removeClass('menu-active');
            }
        });
    }

    // Navigation Items Sensor
    var maxItems = 8; // Change Number of Items here
    var totalItems = jQuery('#nav>ul').find('>li').length;
    if (totalItems > maxItems) {
        maxItems = maxItems - 0;
        jQuery('#nav>ul>li:nth-child(' + maxItems + ') ~ li').wrapAll('<li class="more"></li>').wrapAll('<ul class="sub-dropdown"></ul>');
        jQuery('#nav>ul>li:last-child').prepend('<a class="more" href="#"><span></span><span></span><span></span></a>');
    }
    
    // Fixed nav on scrolling
    // var XposNav = $(".nav-block").offset().top;
    // $(window).scroll(function(){
    //     var scrollPos = $(window).scrollTop();
    //     if(scrollPos >= XposNav){
    //         $(".nav-block").addClass('fixed');
    //     }else if(scrollPos < XposNav){
    //         $(".nav-block").removeClass('fixed');
    //     }
    // });
    
    jQuery('.slider').DrSlider({
        transition      : 'split',
        showNavigation  : false
    });

    $('.gal-holder').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            },
            breakpoint: 599,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        ]
    });

    // Testimonials Slider
    jQuery('.testi-home .testi-slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
    });

    jQuery('.testi-inner .testi-slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
    });

    jQuery('.re-slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
    });
    
    // Skill-bar
    if( jQuery(".skillbar").length != '' ){
        jQuery('.skillbar').each(function() {
            $(this).waypoint(function(direction) {
                jQuery(this).find('.skillbar-bar').animate({
                    width: jQuery(this).attr('data-percent')
                }, 2000);
            }, {
                offset: "100%",
                triggerOnce: true
            });
        });
	}
    
    // Counter
    if( jQuery(".counter-sec").length != '' ){
        jQuery('.counter-sec .count').counterUp({
            delay: 10,
            time: 1000
        });
    }

    // Gallery
    jQuery('.fancybox').fancybox();

    // Tabs
    var parentElem = '.gallery';
    jQuery(parentElem+' .tab-content').find('.tab').hide();
    jQuery(parentElem+' .tab-list >li:first-child').addClass('active');
    var current = jQuery(parentElem+' .tab-list').find('>.active a').attr('href');
    jQuery(current).fadeIn();
    jQuery(parentElem+' .tab-list').on('click', '>li>a', function(e){
        e.preventDefault();
        jQuery('.load').fadeIn();
        var activeElem = jQuery(this).attr('href');
        var active = jQuery(this).parent('li');
        if(!active.hasClass('active')){
            jQuery(parentElem+' .tab-list').find('li').removeClass('active');
            active.addClass('active');
            jQuery(parentElem+' .tab-content').find('.tab').fadeOut();
            jQuery(activeElem).delay(400).fadeIn();
    
        }
    });
});

