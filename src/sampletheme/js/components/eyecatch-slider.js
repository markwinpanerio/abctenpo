import $ from 'jquery';
import slick from 'slick-carousel';

export default function eyecatchSlider(params) {
    const $sliderCatch = $(params.sliderMain);
    const $sliderCatchItem = $sliderCatch.find('li');
    const $sliderNav = $(params.sliderNav);
    const $slideNavItem = $sliderNav.find('li');
    const $prevButton = params.prevButton;
    const $nextButton = params.nextButton;
    const slideItemPerRow = params.sliderNavRow;
    const rowItem = params.sliderNavRowItem;
    const totalItemsInsideSliderBox = slideItemPerRow * rowItem;
    let img;

    //initialize carousel for main slider
    $sliderCatch.slick({
        slidesToScroll: 1,
        infinite: false,
        prevArrow: $prevButton,
        nextArrow: $nextButton
    });

    //add index value for each slider nav item for binding index number for slider catch items
    for ( let i = 0; i < $slideNavItem.length; i++ ) {
        $slideNavItem.eq(i).attr('data-index', i);
    }

    //check if img is portrait or landscape
    for ( let i = 0; i < $sliderCatchItem.length; i++ ) {
        img = $sliderCatchItem.eq(i).find('img');
        let imgWidth = img.width();
        let imgHeight = img.height();

        if (imgWidth > imgHeight) {
            img.addClass('is-vertical');
        } else {
            img.addClass('is-horizontal');
        }
    }

    //click event to navigate slider catch using the images inside the gallery
    $slideNavItem.on('click', function() {
        const $this = $(this);
        const index = $this.data('index');

        //go to is an event listener provided by slick
        $sliderCatch.slick('goTo', index);
        $this.toggleClass('is-active');

        if ($this.hasClass('is-active')) {
            $slideNavItem.removeClass('is-active');
            $this.addClass('is-active');
        }
    })

    //check if slider catch is change
    $sliderCatch.on("afterChange", function() {
        //get the slick index of the current main slide
        const currentIndex = $(this).find('.slick-active').attr('data-slick-index');

        //make current index a number since getting value in data attribute will echo a string
        const currentIndexNumber = parseInt(currentIndex);
        const currentIndexAddedByOne = currentIndexNumber + 1;

        $slideNavItem.removeClass('is-active');
        $slideNavItem.eq(currentIndexNumber).addClass('is-active');

        //this equation will check on what slider in nav should it go
        let currentSlideForNav = Math.ceil(currentIndexAddedByOne / totalItemsInsideSliderBox) - 1;

        $sliderNav.slick('goTo', currentSlideForNav);
    });

    //slider nav carousel
    $sliderNav.slick({
        slidesPerRow: slideItemPerRow,
        rows: rowItem,
        infinite: false,
        slidesToScroll: 1,
        dots: true,
        customPaging : function(slider, i) {
            const thumb = $(slider.$slides[i]).data('thumb');
            return '<span class="eyecatch-image-pagination"></span>';
        }
    });
}