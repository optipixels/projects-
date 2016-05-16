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
        arrows: false,
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

    // Masonary
    jQuery(window).load(function(){
        jQuery('.post-masonary').isotope({
          // options
          itemSelector: '.lists',
          isOriginLeft: true
        });
    });
});