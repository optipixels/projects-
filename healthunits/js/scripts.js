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

    // Search
    jQuery('.addnav-area .search').on('click', 'a', function(e){
        e.preventDefault();
        jQuery('.nav-area').find('.search').fadeIn();
    });

    jQuery('.nav-area .search').on('click', '.close-search', function(e){
        e.preventDefault();
        jQuery('.nav-area').find('.search').fadeOut();
    });

    // Share
    jQuery('.addnav-area .share').on('click', 'a', function(e){
        e.preventDefault();
        var active = jQuery(this).parent('li');
        if(!active.hasClass('active')){
            jQuery(active).addClass('active');
            jQuery('#header').find('.social-area').animate({'top':'0'});
        }else{
            jQuery(active).removeClass('active');
            jQuery('#header').find('.social-area').animate({'top':'-100px'});
        }
    });

    jQuery('#header .social-area').on('click', '.close-social', function(e){
        e.preventDefault();
        jQuery('.addnav-area li').removeClass('active');
        jQuery('#header').find('.social-area').animate({'top':'-100px'});
    });

    jQuery('.slider-post').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    dots: false
                }
            },
        ]
    });

    // Admin Slider Post
    jQuery('.admin-items-holder').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                }
            },
            {
                breakpoint: 499,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                }
            }
        ]
    });
    
    // Comic Slider
    $('.comic-gallery .gallery-slider ul').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.comic-gallery .gallery-thumbs ul'
    });
    $('.comic-gallery .gallery-thumbs ul').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.comic-gallery .gallery-slider ul',
        dots: false,
        focusOnSelect: true,
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 3,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 3,
                arrows: false
              }
            },
            {
              breakpoint: 599,
              settings: {
                slidesToShow: 2,
                arrows: false
              }
            }
        ]
    });

    // Post Tabs
    var parentElem2 = '.tab-posts .post-tabs';
    jQuery(parentElem2+'>.tab-content').find('.tabs').hide();
    jQuery(parentElem2+'>.postlist >li:first-child').addClass('active');
    var current = jQuery(parentElem2+'>.postlist').find('>.active a').attr('href');
    jQuery(current).fadeIn();
    jQuery(parentElem2+'>.postlist').on('click', '>li>a', function(e){
        e.preventDefault();
        var activeElem = jQuery(this).attr('href');
        var active = jQuery(this).parent('li');
        if(!active.hasClass('active')){
            jQuery(parentElem2+'>.postlist').find('li').removeClass('active');
            active.addClass('active');
            jQuery(parentElem2+'>.tab-content').find('.tabs').fadeOut();
            jQuery(activeElem).delay(400).fadeIn();
        }
    });

    // News Tabs
    var parentElem = '.pop-news .tab-holder';
    jQuery(parentElem+'>.tab-content').find('.tabs').hide();
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
            jQuery(parentElem+'>.tab-content').find('.tabs').fadeOut();
            jQuery(activeElem).delay(400).fadeIn();
        }
    });

    // Stats Slider
    jQuery('.stats-sec .slider-frame').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
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