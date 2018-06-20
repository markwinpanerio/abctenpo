const $sliderCatch = $('.js-school-slider');
const $sliderNav = $('.js-school-slider-nav');

$sliderCatch.slick({
    slidesToScroll: 1,
    arrows: false,
    infinite: false,
    asNavFor: '.js-school-slider-nav'
});

$sliderNav.slick({
    slidesToShow: 5,
    infinite: false,
    asNavFor: '.js-school-slider',
    slidesToScroll: 1,
    focusOnSelect: true,
    responsive: [
        {
            breakpoint: 424,
            settings: {
                slidesToScroll: 1,
                slidesToShow: 2.9
            }
        },
        {
            breakpoint: 639,
            settings: {
                slidesToScroll: 1,
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 640,
            settings: {
                slidesToScroll: 1,
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 960,
            settings: {
                slidesToScroll: 1,
                slidesToShow: 5
            }
        }
    ]
});