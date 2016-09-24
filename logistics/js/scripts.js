jQuery(document).ready(function(){
    "use strict";
    
    // Responsive Navigation
    mobileNav('#nav>ul', '.logo-area');
    
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

    // Slider
    jQuery('.slider').slick({
        arrows: true,
        dots: false,
        autoplay: true,
        autoplaySpeed: 3000,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    arrows: false
                }
            }
        ]
    });

    // Fleet Filterables
    if(jQuery('.fleet-posts').length != 0){
        var grid = jQuery('.fleet-posts .posts-holder').isotope({
            itemSelector: '.fleet-item',
            layoutMode: 'fitRows'
        });
        // bind filter button click
        jQuery('.filter-nav').on( 'click', 'a', function(e) {
            e.preventDefault();
            var checkClass = jQuery(this).parent('li').hasClass('active');

            if(!checkClass){
                jQuery('.filter-nav').find('li').removeClass('active');
                jQuery(this).parent('li').addClass('active');
                var filterValue = jQuery(this).attr('data-filter');
                grid.isotope({ filter: filterValue });
            }    
        });
    }

    // FAQ scroll
    if(jQuery('.q-list').length != 0){
        jQuery('.q-list').on('click', 'a', function(e){
            e.preventDefault();
            var checkClass = jQuery(this).parent('li').hasClass('active');
            var question = jQuery(this).attr('href');
            var Xpos = jQuery(question).offset().top - 30;
            if(!checkClass){
                jQuery('.faq-content').find('.answers').removeClass('active');
                jQuery('.q-list').find('li').removeClass('active');
                jQuery(question).addClass('active');
                jQuery(this).parent('li').addClass('active');
                jQuery('html, body').animate({ scrollTop: Xpos }, 800); 
            }
        });
    }

    // FAQ Accordian
    if(jQuery('.faq-list').length != 0){
        jQuery('.faq-list').find('.answer').hide();
        jQuery('.faq-list').find('li').eq(0).addClass('active');
        jQuery('.faq-list').find('li').eq(0).find('.answer').slideDown();
        jQuery('.faq-list').on('click', '.question', function(e){
            e.preventDefault();
            var checkClass = jQuery(this).parent('li').hasClass('active');
            if(!checkClass){
                jQuery('.faq-list').find('li').removeClass('active');
                jQuery(this).parent('li').addClass('active');
                jQuery('.faq-list').find('.answer').slideUp();
                jQuery(this).parent('li').find('.answer').slideDown();
            }
        });
    }

    // Counter
    if( jQuery(".counter").length != '' ){
        jQuery('.counter .digits').counterUp({
            delay: 10,
            time: 2000
        });
    }

    // Team Slider
    jQuery('.team-area').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 990,
                settings: {
                    slidesToShow:2,
                    dots: true,
                    arrows:false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow:2,
                    dots: false,
                    arrows:false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow:1,
                    dots: false,
                    arrows:false
                }
            },
        ]
    });

    // Testimonial Slider
    jQuery('.testi-holder').slick({
        arrows: true,
        dots: false,
        autoplay: true,
        autoplaySpeed: 3000,
        adaptiveHeight: true
    });

    // Tabs
    var parentElem = '.tabs-area';
    jQuery(parentElem+'>.tabs-content').find('.tab').hide();
    jQuery(parentElem+'>.tab-list >li:first-child').addClass('active');
    var current = jQuery(parentElem+'>.tab-list').find('>.active a').attr('href');
    jQuery(current).fadeIn();
    jQuery(parentElem+'>.tab-list').on('click', '>li>a', function(e){
        e.preventDefault();
        jQuery('.load').fadeIn();
        var activeElem = jQuery(this).attr('href');
        var active = jQuery(this).parent('li');
        if(!active.hasClass('active')){
            jQuery(parentElem+'>.tab-list').find('li').removeClass('active');
            active.addClass('active');
            jQuery(parentElem+'>.tabs-content').find('.tab').fadeOut();
            jQuery(activeElem).delay(400).fadeIn();
        }
    });
    
});