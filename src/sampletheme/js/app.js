import mapHover from './components/map-hover';
import customSelect from './components/custom-select';
import eyecatchSlider from './components/eyecatch-slider';
import './components/map';

mapHover();
customSelect();
eyecatchSlider({
  'sliderMain' : '#js-slider-main',
  'sliderNav' : '#js-slider-nav',
  'sliderNavRow' : 3,
  'sliderNavRowItem' : 3,
  'prevButton' : '#js-slider-prev',
  'nextButton' : '#js-slider-next'
});