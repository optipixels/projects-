jQuery(document).ready(function(){
    
    // Slider
    jQuery('.banner').slick({
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

});