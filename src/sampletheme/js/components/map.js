import $ from 'jquery';

if (document.querySelector('#js-map-hook')) {
  'use strict';
  
  (function map() {
  
    if (!window.google) {
      return;
    }
  
    google.maps.event.addDomListener(window, 'load', initMap);
  
    function initMap() {
  
      //MAP THEME
      const options =
        {
          "clickableIcons": false,
          "disableDoubleClickZoom": false,
          "draggable": true,
          "fullscreenControl": false,
          "keyboardShortcuts": true,
          "mapMaker": false,
          "mapTypeControl": true,
          "mapTypeControlOptions": {
            "text": "Default (depends on viewport size etc.)",
            "style": 0
          },
          "mapTypeId": "roadmap",
          "rotateControl": true,
          "scaleControl": false,
          "scrollwheel": false,
          "streetViewControl": false,
          "styles": false,
          "zoomControl": false
        };
  
      // THIS SCRIPT IS FOR MUTIPLE PINS//
      // START OF MULTIPLE PINS/MARKERS SCRIPT //
      const $mapCanvas = $('#js-map-hook');
      const $mapInfo = $('#js-map-info') ;
  
  
      const $mapListItem = document.querySelectorAll('.js-map-item');
      const markers = Array.prototype.map.call($mapListItem, (el) => {
        return {
          title: el.getAttribute('data-title'),
          desc: el.getAttribute('data-desc'),
          img: el.getAttribute('data-img'),
          imgMain: el.getAttribute('data-img-main'),
          mapIcon: el.getAttribute('data-map-icon'),
          mapIconActiveState: el.getAttribute('data-map-icon-active-state'),
          lat: el.getAttribute('data-lat'),
          lng: el.getAttribute('data-lng')
        }
      });
  
      console.log(markers);
  
      //COMPUTING TOTAL LATITUDE
      let totalLat = markers.reduce(function(sum, marker) {
        return sum + +marker.lat;
      }, 0);
  
      //COMPUTING TOTAL LONGITUDE
      let totalLng = markers.reduce(function(sum, marker) {
        return sum + +marker.lng;
      }, 0);
  
      let lngAverage = totalLng / markers.filter((item) => item.lng).length; //GETTING THE AVERAGE OF TOTAL LONGITUDE
      let latAverage = totalLat / markers.filter((item) => item.lat).length; //GETTING THE AVERAGE OF TOTAL LATITUDE
  
      let mapOptions = {
        center: new google.maps.LatLng(latAverage, lngAverage)
      };
  
      let map = new google.maps.Map($mapCanvas[0], mapOptions);
      map.setOptions(options);
  
      let bounds = new google.maps.LatLngBounds();
      let markersPins = [];


      map.fitBounds(bounds); //auto zoom
      map.panToBounds(bounds); //auto center

      let infowindow = new google.maps.InfoWindow({
        content: '',
        maxWidth: 349
      });
      
  
      function intialize() {
  
        markers.forEach((marker) => {
          //(LAT, LNG)
          let mapLatLng = new google.maps.LatLng(+marker.lat, +marker.lng);
          const mapIcon = marker.mapIcon;
          const mapIconActiveState = marker.mapIconActiveState;
  
          //PIN MARKER
          let myMarker = new google.maps.Marker({
            position: mapLatLng,
            map: map,
            icon: mapIcon,
            myActiveIcon: mapIconActiveState
          });
  
          // marker.pin = myMarker;
          bounds.extend(myMarker.getPosition());
  
          let i;

          myMarker.addListener('click', function(event) {
            infowindow.setContent(getInfoWindowHTML(marker));
            infowindow.setPosition(event.latLng);
            infowindow.open(map, this);
            $('.gm-style-iw').parent().addClass('info-window');
            map.panTo(new google.maps.LatLng(marker.lat,marker.lng));

            
            $mapInfo.find('.main-map-img').css({
              'background-image': `url(${marker.imgMain})`
            })
            $mapInfo.find('.main-map-title').html(marker.title);
            $mapInfo.find('.main-map-desc').html(marker.desc);
          });
        });

        $('.gmnoprint').on('click', function() {
          console.log($(this))
        })
      }
  
      intialize();
  
      function getInfoWindowHTML(marker) {
        return `
          <div class="info-window-container">
            <div class="info-window-img" style="background-image: url(${marker.img})">
            </div>
            <div class="info-window-content">
              <p class="info-window-desc">${marker.desc}</p>
            </div>
          </div>
          `;
      }
  
      //END OF MULTIPLE PINS/MARKERS SCRIPT //
    }
  
  })();  
}