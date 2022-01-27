@extends('front.layout.app')

@section('content')

<style>
   #map_canvas {
    height: 500px;
    width: 500px;
    margin: 0px;
    padding: 0px
}

</style>

<div class="container-fluid" id="pagecontent">
<!-- alert success -->

<div class="clearfix"></div>
<section id="breadcrumbSec">
 
  <div class="container-fluid">
    <div class="breadcrumbBox">
      <div class="breadcrumbText">
        <h4 class="breadcrumbTitle">FPO Map of India</h4>
        <div class="">
          <a href="{{URL::to('/user/index')}}"><i class="fa fa-home"></i> Home</a>
          <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
          <span>FPO Map of India</span>
    
      </div>
      </div>
      <img src="public/user/img/breadcrumb.png">
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section>
  
    <div id="map_canvas" style="width:100%; height:600px; border: 2px solid #3872ac;"></div>
  </section>
<div class="clearfix"></div>
  


  </div>

  <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=geometry,places&key=AIzaSyDsRnGux3AL6mNTuTF-2Yq9QuPXQb6l4tI"></script>
  <script>
    var geocoder;
    var map;
    var bounds = new google.maps.LatLngBounds();

    function initialize() {
      map = new google.maps.Map(
        document.getElementById("map_canvas"), {
        center: new google.maps.LatLng(23.4233146, 76.9203847),
        zoom: 6,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      geocoder = new google.maps.Geocoder();
       $.ajax({
        "type": "get", "url": "/api/map-list",
        success: function (res) {
         
          let locations= JSON.parse(res);
          console.log(locations)
          for (i = 0; i < locations.length; i++) {
                geocodeAddress(locations, i);
          }
         }
        })
      
    }
    google.maps.event.addDomListener(window, "load", initialize);

    function geocodeAddress(locations, i) {
      var title = locations[i].fpo_name;
      console.log(title);
      var address = locations[i].address + ', ' +locations[i].district + ', ' + locations[i].state + ', India';
      var url = locations[i].fpo_type;
      geocoder.geocode({
        'address': locations[i].address + ', ' + locations[i].district + ', ' + locations[i].state + ', India'
        },function (results, status) {
        console.log(results)
          if (status == google.maps.GeocoderStatus.OK) {
            var marker = new google.maps.Marker({
              icon: 'http://maps.google.com/mapfiles/ms/icons/blue.png',
              map: map,
              position: results[0].geometry.location,
              title: title,
              animation: google.maps.Animation.DROP,
              address: address,
              url: url
            })
            infoWindow(marker, map, title, address, url);
            bounds.extend(marker.getPosition());
            map.fitBounds(bounds);
          } else {
            console.log("geocode of " + address + " failed:" + status);
          }
        });
    }

    function infoWindow(marker, map, title, address, url) {
      google.maps.event.addListener(marker, 'click', function () {
        var html = "<div><h3>" + title + "</h3><p>" + address + "<br></div><a href='#'>" + url + "</a></p></div>";
        iw = new google.maps.InfoWindow({
          content: html,
          maxWidth: 350
        });
        iw.open(map, marker);
      });
    }

    function createMarker(results) {
      var marker = new google.maps.Marker({
        icon: 'http://maps.google.com/mapfiles/ms/icons/blue.png',
        map: map,
        position: results[0].geometry.location,
        title: title,
        animation: google.maps.Animation.DROP,
        address: address,
        url: url
      })
      bounds.extend(marker.getPosition());
      map.fitBounds(bounds);
      infoWindow(marker, map, title, address, url);
      return marker;
    }
  

</script>
@endsection