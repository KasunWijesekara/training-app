<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="map" style="height: 376px;width: auto">
    </div>
  </div>

  <div class="container" id="contactarea">
    <div class="row">
      <div class="col-4">
        <h6>Address</h6>

        <p class="text-muted">
          11 A, 1st Lane <br>
          Pagoda Road <br>
          Nugegoda
        </p>
      </div>

      <div class="col-4">
        <h6>Address</h6>

        <p class="text-muted">
          11 A, 1st Lane <br>
          Pagoda Road <br>
          Nugegoda
        </p>
      </div>

      <div class="col-4">
        <h6>Telephone</h6>

        <p class="text-muted">
          Tel - 755 646 830 <br>
          Tel - 4 864 902 <br>
          Fax - 2 304 201
        </p>
      </div>
    </div>
  </div>

  <div class="container text-right">
    <form method="post" action="/add-contact">
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="email" id="inputPassword4" placeholder="Email">
        </div>

        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="address" id="inputAddress" placeholder="Address">
        </div>

        <div class="form-group col-md-6">
          <input type="phone" class="form-control" name="phone" id="inputAddress2" placeholder="Telephone">
        </div>
        <div class="form-group col-md-12">
          <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
          </textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Send</button>
    </form>
  </div>


  <script>
   var markerposition={lat: 6.792344, lng: 79.909088};
   var textwindow= "Training App";
   function initMap() {
     infowindow = new google.maps.InfoWindow({
      content: 'oi'
    });
     var styles = [
     {
       stylers: [
       {hue: "#6610f2"},
       {saturation: -20}
       ]
     }, {
       featureType: "road",
       elementType: "geometry",
       stylers: [
       {lightness: 100},
       {visibility: "simplified"}
       ]
     }, {
       featureType: "road",
       elementType: "labels",
       stylers: [
       {visibility: "on"}
       ]
     }
     ];
     var styledMap = new google.maps.StyledMapType(styles,
       {name: "Styled Map"});
     var mapDiv = document.getElementById('map');

     var map = new google.maps.Map(mapDiv, {
       center: markerposition,
       zoom: 17,
       scrollwheel: false
     });
     map.mapTypes.set('map_style', styledMap);
     map.setMapTypeId('map_style');
     google.maps.event.addDomListener(window, 'resize', function () {
       var center = map.getCenter();
       google.maps.event.trigger(map, 'resize');
       map.setCenter(center);
     });
     var marker=new google.maps.Marker({
       position: markerposition,
       animation: google.maps.Animation.DROP,
       title: 'Training App',
       icon: '/img/map-marker-icon.png'
     });
     marker.setMap(map);
     google.maps.event.addListener(marker, 'click', function() {
       infowindow.close();
       infowindow.setContent('<a style="color:#000000;" target="_blank" href="https://www.google.lk/maps/dir/6.8481703,79.8795091/Venora+International+Projects+(pvt)+:TD,+Deniya+Rd,+Piliyandala/@6.8202416,79.8242422,12z/data=!3m1!4b1!4m17!1m6!3m5!1s0x3ae2455d5fb73669:0xe1d547e631965a2a!2sVenora+International+Projects+(pvt)+:TD!8m2!3d6.791982!4d79.9090563!4m9!1m1!4e1!1m5!1m1!1s0x3ae2455d5fb73669:0xe1d547e631965a2a!2m2!1d79.9090563!2d6.791982!3e4"><strong style="color:#000000;">Get Directions</strong>: Venora International Projects (PVT) Ltd</a>');
       infowindow.open(map, marker);
     });
   }
 </script>
 <script async defer
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5nxMS3ZCpv6LLcGZosiWFBJm5P6iSk4I&callback=initMap">
</script>