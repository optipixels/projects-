jQuery(document).ready(function(){
    "use strict";
    
    // Fixed nav on scrolling
    var XposNav = $("#header").offset().top + 50;
    $(window).scroll(function(){
        var scrollPos = $(window).scrollTop();
        if(scrollPos >= XposNav){
            $("#header").addClass('fixed');
        }else if(scrollPos < XposNav){
            $("#header").removeClass('fixed');
        }
    });

    // Quote Form Field
    jQuery('.field.events').hide();
    jQuery('.radio-list').on('click', 'input[type="radio"]', function(){
        if(jQuery('#location').is(':checked')){ 
            jQuery('.field.events').slideDown();
        }else{
            jQuery('.field.events').slideUp();
        }
    });
    
    // Slider
    jQuery('.slider ul').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        fade: true,
        speed: 800,
        autoplay: true,
        autoplaySpeed: 3000,
    });

    // Tabs
    var parentElem = '.stream .tabs-area';
    jQuery(parentElem+'>.tab-content').find('.tab').hide();
    jQuery(parentElem+'>.tab-list >li:first-child').addClass('active');
    var current = jQuery(parentElem+'>.tab-list').find('>.active a').attr('href');
    jQuery(current).fadeIn();
    jQuery(parentElem+'>.tab-list').on('click', '>li>a', function(e){
        e.preventDefault();
        var activeElem = jQuery(this).attr('href');
        var active = jQuery(this).parent('li');
        if(!active.hasClass('active')){
            jQuery(parentElem+'>.tab-list').find('li').removeClass('active');
            active.addClass('active');
            jQuery(parentElem+'>.tab-content').find('.tab').fadeOut();
            jQuery(activeElem).delay(400).fadeIn();
        }
    });
    
});