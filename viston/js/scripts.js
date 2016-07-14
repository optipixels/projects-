jQuery(document).ready(function(){
    "use strict";
    new WOW().init();
    // Responsive Navigation
    mobileNav('#nav>ul', '.nav-area');
    
    function mobileNav(navTag, menuBtnPrependTo){
        "use strict";
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
    
    // fixed nav on scrolling
    var XposNav = $(".nav-block").offset().top;
    $(window).scroll(function(){
        var scrollPos = $(window).scrollTop();
        if(scrollPos >= XposNav){
            $(".nav-block").addClass('fixed');
        }else if(scrollPos < XposNav){
            $(".nav-block").removeClass('fixed');
        }
    });
    
    // Slider
    jQuery('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    dots: false,
                    arrows:false
                }
            },
        ]
    });
    
    // Testimonial Slider
    jQuery('.testi-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows:false,
        autoplay: true,
        autoplaySpeed: 3000,
        fade:true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    dots: false,
                    fade:false
                }
            },
        ]
    });

    // Masonary
    if(jQuery('.masonry').length != 0){
        jQuery(window).load(function(){
            jQuery('.masonry').isotope({
              // options
              itemSelector: 'article',
              isOriginLeft: true
            });
        });
    }
    
    if(jQuery('.port-masonry').length != 0){
        jQuery(window).load(function(){
            jQuery('.port-masonry').isotope({
              // options
              itemSelector: '.jprt-item',
              isOriginLeft: true
            });
        });
    }
    
    // Portfolio
    if(jQuery('.jprt-container.col4').length != 0){
        jQuery(function () {
            jQuery('.jprt-container.col4').jportilio({
                ratio: 0.65
            });
        });
    }
    if(jQuery('.jprt-container.col3').length != 0){
        jQuery(function () {
            jQuery('.jprt-container.col3').jportilio({
                ratio: 0.65,
                ws_lg: 3
            });
        });
    }
    
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
});