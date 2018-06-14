import $ from 'jquery';

export default function mapHover() {
  const $mapPart = $('.js-map-part-link');

  $mapPart.hover(function() {
    const $this = $(this);
    let targetID = $this.attr('href');

    $(targetID).toggleClass('is-active');
  })
}