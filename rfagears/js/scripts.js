jQuery(document).ready(function(){
    
    // Slider
    //  jQuery('.prod-slider .slider').slick({
    //   slidesToShow: 1,
    //   slidesToScroll: 1,
    //   arrows: false,
    //   fade: true,
    //   asNavFor: '.prod-slider .thumbs'
    // });
    // jQuery('.prod-slider .thumbs').slick({
    //   slidesToShow: 3,
    //   slidesToScroll: 1,
    //   asNavFor: '.prod-slider .slider',
    //   dots: false,
    //   arrows: false,
    //   focusOnSelect: true
    // });
    var parentElem2 = '.right-area';
    jQuery(parentElem2+'>.tab-content').find('.tabs').hide();
    jQuery(parentElem2+'>.tab-list>li:first-child').addClass('active');
    var current = jQuery(parentElem2+'>.tab-list').find('>.active a').attr('href');
    jQuery(current).fadeIn();
    jQuery(parentElem2+'>.tab-list').on('click', '>li>a', function(e){
        e.preventDefault();
        var activeElem = jQuery(this).attr('href');
        var active = jQuery(this).parent('li');
        if(!active.hasClass('active')){
            jQuery(parentElem2+'>.tab-list').find('li').removeClass('active');
            active.addClass('active');
            jQuery(parentElem2+'>.tab-content').find('.tabs').fadeOut();
            jQuery(activeElem).delay(400).fadeIn();
        }
    });
});