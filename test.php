<?php
include "config.php";
$sql_online = $conn->query("SELECT * FROM online_users ORDER BY id DESC");
?>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>


<div id="map" style="width: 100%; height: 100%;">zzzzzz</div>
<script>

var LocationsForMap = [
  <?php 

  while ($row_online = $sql_online->fetch_assoc())
  {
    ?>
      ['',<?php echo $row_online['loc']; ?>],
    <?php
  }
   ?>
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 6,
      center: new google.maps.LatLng(46.65593035921996, 2.462182349733395),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < LocationsForMap.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(LocationsForMap[i][1], LocationsForMap[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(LocationsForMap[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
</script>
