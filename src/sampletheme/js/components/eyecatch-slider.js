import $ from 'jquery';
import slick from 'slick-carousel';

export default function eyecatchSlider() {
    const $sliderCatch = $('#js-slider-main');
    const $sliderNav = $('#js-slider-nav');
    const $slideNavItem = $sliderNav.find('.eyecatch-image-item');
    const slideItemPerRow = 3;
    const rowItem = 3;
    const totalItemsInsideSliderBox = slideItemPerRow * rowItem;

    $sliderCatch.slick({
        slidesToScroll: 1,
        arrows: false,
        infinite: false
    });

    for ( let i = 0; i < $slideNavItem.length; i++ ) {
        $slideNavItem.eq(i).attr('data-index', i);
    }

    $slideNavItem.on('click', function() {
        const $this = $(this);
        const index = $this.data('index');

        $sliderCatch.slick('goTo', index);
        $this.toggleClass('is-active');

        if ($this.hasClass('is-active')) {
            $slideNavItem.removeClass('is-active');
            $this.addClass('is-active');
        }
    })

    $sliderCatch.on("afterChange", function() {
        const currentIndex = $(this).find('.slick-active').attr('data-slick-index');
        const currentIndexNumber = parseInt(currentIndex);
        const currentIndexAddedByOne = currentIndexNumber + 1;

        $slideNavItem.removeClass('is-active');
        $slideNavItem.eq(currentIndexNumber).addClass('is-active');

        let currentSlideForNav = Math.ceil(currentIndexAddedByOne / totalItemsInsideSliderBox) - 1;

        $sliderNav.slick('goTo', currentSlideForNav);
    });

    $sliderNav.slick({
        slidesPerRow: slideItemPerRow,
        rows: rowItem,
        infinite: false,
        slidesToScroll: 1
    });
}