
function initMap() {
        var uluru = {lat: 24.0468215, lng: -104.6155312};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 20,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
      }