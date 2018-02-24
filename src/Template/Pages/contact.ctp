<div class="container-fluid" id="contactuspage">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="map" style="height: 376px;width: auto">
    </div>
  </div>

  <div class="container" id="contactarea">
    <div class="row">
      <div class="col-4">
        <h4>Address</h4>

        <p class="text-muted">
          No: 837/2D, New Kandy Road, <br>
          Thalangama Noth, <br>
          Malabe.<br>
          Sri Lanka.<br>
        </p>
      </div>

      <div class="col-4 text-center">
        <h4>Telephone</h4>

        <p class="text-muted">
         <a href="tel:+94 011 207 8566">+94 011 207 8566</a><br>
         <a href="tel:+94 71 854 2000">+94 71 854 2000</a><br>
        </p>
      </div>

      <div class="col-4 text-center">
        <h4>Email and Website</h4>

        <p class="text-muted">
          <a href="mailto:info@lakmaliit.com">info@lakmaliit.com</a> <br>
          <a target="_blank" href="mailto:www.lakmaliit.com ">www.lakmaliit.com </a> <br>
        </p>
      </div>
    </div>
  </div>

  <div class="container text-center" style="padding-top: 3rem;">
    <div class="row">
      <div class="col-12">
        <h2>Inquiries</h2>
      </div>
      <div class="col-12">
        <form method="post" action="/add-contact">
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="Name" required>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" name="email" id="inputPassword4" placeholder="Email" required>
            </div>

            <div class="form-group col-md-6">
              <input type="text" class="form-control" name="address" id="inputAddress" placeholder="Address" required>
            </div>

            <div class="form-group col-md-6">
              <input type="phone" class="form-control" name="phone" id="inputAddress2" placeholder="Telephone" required>
            </div>
            <div class="form-group col-md-12">
              <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Message" required></textarea>
            </textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit Inquiriy</button>
      </form>
    </div>
  </div>
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