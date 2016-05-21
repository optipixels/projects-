jQuery(document).ready(function(){
    new WOW().init();
    // Responsive Navigation
    jQuery('#nav>ul').slicknav({
        label: '',
        closedSymbol: '<i class="fa fa-angle-right"></i>',
        openedSymbol: '<i class="fa fa-angle-down"></i>',
        prependTo: '.nav-area'
    });

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
                    dots: false
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
                    dots: false
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
    jQuery('.counter-sec .count').counterUp({
        delay: 10,
        time: 1000
    });
});