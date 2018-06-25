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
          "mapTypeControl": false,
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
      
      // console.log(latAverage);
      
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
        
        // //CHECK IF GOOGLE MAP IS LOADED
        google.maps.event.addListener(map, 'tilesloaded', function(evt) {
          $('.gm-style-iw').parent().addClass('info-window');
        });

        let index = 0;
        $('.gm-style-iw').parent().addClass('info-window');
        $mapInfo.addClass('is-active');



        //CHECK CURRENT RATIO
        let ratio;

        if ($(window).width() > 768) {
          ratio = 'is-for-pc'
        } else {
          ratio = 'is-for-sp'
        }

        console.log(ratio);

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

          // console.log(myMarker.getPosition());
  
          let i;
          let markerPosition; 

          if (index === 0) {
            mapLatLng = new google.maps.LatLng(+markers[index].lat, +markers[index].lng);

            if (ratio === 'is-for-pc') {
              markerPosition = new google.maps.LatLng(+markers[index].lat, (+markers[index].lng) + 0.04);
            } else if (ratio === 'is-for-sp') {
              markerPosition = new google.maps.LatLng((+markers[index].lat) + 0.04, +markers[index].lng);
            }

            myMarker = new google.maps.Marker({
              position: mapLatLng,
              map: map,
              icon: mapIcon,
            });
            
            infowindow.setContent(getInfoWindowHTML(markers[0]));
            infowindow.setPosition(mapLatLng);
            infowindow.open(map, myMarker);
            map.panTo(markerPosition);

            $mapInfo.find('.main-map-img-container').css({
              'background-image': `url(${markers[index].imgMain})`
            })
            $mapInfo.find('.main-map-title').html(markers[index].title);
            $mapInfo.find('.main-map-desc').html(markers[index].desc);
          }

          myMarker.addListener('click', function(event) { 
            infowindow.setContent(getInfoWindowHTML(marker));
            infowindow.setPosition(event.latLng);
            infowindow.open(map, this);
            $('.gm-style-iw').parent().addClass('info-window');
            let markerPositionInfo;

            if ($(window).width() > 768) {
              markerPositionInfo = new google.maps.LatLng(+marker.lat, (+marker.lng) + 0.04);
            } else {
              markerPositionInfo = new google.maps.LatLng(+marker.lat, +marker.lng)
            }
            
            map.panTo(markerPositionInfo);

            
            $mapInfo.find('.main-map-img-container').css({
              'background-image': `url(${marker.imgMain})`
            })
            $mapInfo.find('.main-map-title').html(marker.title);
            $mapInfo.find('.main-map-desc').html(marker.desc);


            // console.log(marker.lat, marker.lng);
          });

          index++;
        });

        // $('.gmnoprint').on('click', function() {
        //   console.log($(this))
        // })
        // console.log(index);
      }
      
      
      intialize();
      // google.maps.event.addListener(map, 'tilesloaded', function() {  
      //   console.log($('.gm-style-iw'));
      //   // intialize();
      // })
  
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