import $ from 'jquery';

export default function mapHover() {
  const $mapPart = $('.js-map-part-link');

  $mapPart.hover(function() {
    const $this = $(this);
    let targetID = $this.data('target');

    $(targetID).toggleClass('is-active');
  })
}