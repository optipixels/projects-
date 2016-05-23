jQuery(document).ready(function(){
    new WOW().init();
    // Responsive Navigation
    jQuery('#nav>ul').slicknav({
        label: '',
        closedSymbol: '<i class="fa fa-angle-right"></i>',
        openedSymbol: '<i class="fa fa-angle-down"></i>',
        prependTo: '#header'
    });

    // Navigation Items Sensor
    var maxItems = 7; // Change Number of Items here
    var totalItems = jQuery('#nav>ul').find('>li').length;
    if (totalItems > maxItems) {
        maxItems = maxItems - 1;
        jQuery('#nav>ul>li:nth-child(' + maxItems + ') ~ li').wrapAll('<li></li>').wrapAll('<ul class="sub-dropdown"></ul>');
        jQuery('#nav>ul>li:last-child').prepend('<a href="#">More</a>');
    }

    // Counter
    jQuery('.counter-item .num').counterUp({
        delay: 10,
        time: 1000
    });

    // Banner Slider
    jQuery('.slider').slick({
        dots: true,
        infinite: true,
        speed: 1000,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 3000,
        fade: true,
         responsive: [
            {
                breakpoint: 992,
                settings: {
                    dots:false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    dots:false,
                    arrows:false
                }
            }
        ]
    });

    // Services Slider
    jQuery('.services-slider .services-holder').slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 1500,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    });

    // Slider Post
    jQuery('.slider-post').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    arrows: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    infinite: true,
                    arrows: false
                }
            }
        ]
    });

    // Slider Blog Post
    jQuery('.slider-blog-post').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    infinite: true,
                    arrows: false
                }
            }
        ]
    });

    // UI Range Slider
    jQuery('.price-slider').each(function(){
        jQuery(this).slider({
            range: true,
            min: 0,
            max: 100000,
            step: 10,
            values: [0, 100000],
            animate: 'slow',
            create: function() {
                jQuery(this).parent('.price-slider-holder').find('.min').appendTo(jQuery(this).find('a').get(0));
                jQuery(this).parent('.price-slider-holder').find('.max').appendTo(jQuery(this).find('a').get(1));
            },
            slide: function(event, ui) { 
                jQuery(this).find(ui.handle).find('span').html('$' + ui.value); 
            }
        });

        jQuery(this).find('.min').html('$' + jQuery(this).slider('values', 0)).position({
            my: 'center top',
            at: 'center bottom',
            of: jQuery(this).find('a:eq(0)'),
            offset: "0, 10"
        });

        jQuery(this).find('.max').html('$' + jQuery(this).slider('values', 1)).position({
            my: 'center top',
            at: 'center bottom',
            of: jQuery(this).find('a:eq(1)'),
            offset: "0, 10"
        });
    });

    // Search box Tabs
    var parentElem = '.search-box';
    jQuery(parentElem+'>.search-list >li:first-child').addClass('active');
    var current = jQuery(parentElem+'>.search-list').find('>.active a').attr('href');
    jQuery(current).fadeIn();
    jQuery(parentElem+'>.search-list').on('click', '>li>a', function(e){
        e.preventDefault();
        var activeElem = jQuery(this).attr('href');
        var active = jQuery(this).parent('li');
        if(!active.hasClass('active')){
            jQuery(parentElem+'>.search-list').find('li').removeClass('active');
            active.addClass('active');
            jQuery(parentElem+'>.search-content').find('.search-form').fadeOut();
            jQuery(activeElem).delay(400).fadeIn();
        }
    });

    // Vehicles Tabs
    var parentElem2 = '.vehicles-area';
    jQuery(parentElem2+' >.vehicles-list >li:eq(1)').addClass('active');
    var current = jQuery(parentElem2+' >.vehicles-list').find('>.active a').attr('href');
    jQuery(current).fadeIn();
    jQuery(parentElem2+' >.vehicles-list').on('click', 'li:not(.next):not(.prev) a', function(e){
        e.preventDefault();
        var activeElem = jQuery(this).attr('href');
        var active = jQuery(this).parent('li');
        if(!active.hasClass('active')){
            jQuery(parentElem2+' >.vehicles-list').find('>li').removeClass('active');
            active.addClass('active');
            jQuery(parentElem2+' >.vehicle-content').find('>.post-tabs').fadeOut();
            jQuery(activeElem).delay(400).fadeIn();
        }
    });

    jQuery(parentElem2+' >.vehicles-list').on('click', '>.prev>a', function(e){
        e.preventDefault();
        var prevElem = jQuery('.vehicles-list .active').prev('li');
        var prevContent = prevElem.find('a').attr('href');
        if(!prevElem.hasClass('prev')){
            jQuery(parentElem2+' >.vehicles-list').find('>li').removeClass('active');
            prevElem.addClass('active');
            jQuery(parentElem2+' >.vehicle-content').find('>.post-tabs').fadeOut();
            jQuery(prevContent).delay(400).fadeIn();
        }
    });

    jQuery(parentElem2+' >.vehicles-list').on('click', '>.next>a', function(e){
        e.preventDefault();
        var nextElem = jQuery('.vehicles-list .active').next('li');
        var nextContent = nextElem.find('a').attr('href');
        if(!nextElem.hasClass('next')){
            jQuery(parentElem2+' >.vehicles-list').find('>li').removeClass('active');
            nextElem.addClass('active');
            jQuery(parentElem2+' >.vehicle-content').find('>.post-tabs').fadeOut();
            jQuery(nextContent).delay(400).fadeIn();
        }
    });

    // Single Slider
    jQuery('.slide-large').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
      asNavFor: '.slide-thumb'
    });
    jQuery('.slide-thumb').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.slide-large',
      dots: false,
      focusOnSelect: true,
      arrows: false,
      responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 3,
                infinite: true,
              }
            }
        ]
    });

    // Products Tabs
    var parentElem3 = '.desc-area';
    jQuery(parentElem3+' >.desc-list >li:first-child').addClass('active');
    var current = jQuery(parentElem3+' >.desc-list').find('>.active a').attr('href');
    jQuery(current).fadeIn();
    jQuery(parentElem3+' >.desc-list').on('click', '>li>a', function(e){
        e.preventDefault();
        var activeElem = jQuery(this).attr('href');
        var active = jQuery(this).parent('li');
        if(!active.hasClass('active')){
            jQuery(parentElem3+' >.desc-list').find('>li').removeClass('active');
            active.addClass('active');
            jQuery(parentElem3+' >.desc-content').find('>.tabs').fadeOut();
            jQuery(activeElem).delay(400).fadeIn();
        }
    });

    // Team Slider
    jQuery('.team-holder').slick({
        infinite: true,
        speed: 800,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: false,
        arrows: true
    });

    // Review box Tabs
    var parentElem4 = '.review-details';
    jQuery(parentElem4+'>.detail-list >li:first-child').addClass('active');
    var current = jQuery(parentElem4+'>.detail-list').find('>.active a').attr('href');
    jQuery(current).fadeIn();
    jQuery(parentElem4+'>.detail-list').on('click', '>li>a', function(e){
        e.preventDefault();
        var activeElem = jQuery(this).attr('href');
        var active = jQuery(this).parent('li');
        if(!active.hasClass('active')){
            jQuery(parentElem4+'>.detail-list').find('li').removeClass('active');
            active.addClass('active');
            jQuery(parentElem4+'>.detail-content').find('.detail-tabs').fadeOut();
            jQuery(activeElem).delay(400).fadeIn();
        }
    });

    // Map Tabs
    var parentElem5 = '.map-tabs';
    jQuery(parentElem5+'>.tab-list >li:first-child').addClass('active');
    var current = jQuery(parentElem5+'>.tab-list').find('>.active a').attr('href');
    jQuery(current).fadeIn();
    jQuery(parentElem5+'>.tab-list').on('click', '>li>a', function(e){
        e.preventDefault();
        var activeElem = jQuery(this).attr('href');
        var active = jQuery(this).parent('li');
        if(!active.hasClass('active')){
            jQuery(parentElem5+'>.tab-list').find('li').removeClass('active');
            active.addClass('active');
            jQuery(parentElem5+'>.tab-content').find('.tabs').fadeOut();
            jQuery(activeElem).delay(400).fadeIn();
        }
    });

    // Progress Bars
    $(function() {
        $(".meter .bar").each(function() {
            $(this).data("origWidth", $(this).width()).width(0).animate({width: $(this).data("origWidth")}, 1200);
        });
    });

    // Partners Slider
    jQuery('.partner-list').slick({
        infinite: true,
        speed: 500,
        slidesToShow: 5,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 1500,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    });

});