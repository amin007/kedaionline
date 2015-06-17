	<!--product-->
	<div class="row">
	<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<div id="map" align="center" class="form-control img-thumbnail" style="height:300px; width: auto"></div>
	<script type="text/javascript">
	var locations = [
		['Uitm Jasin', 2.2924051,102.4215381,12],
	];

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 13,
		scrollwheel: false,
		center: new google.maps.LatLng(2.2924051,102.4215381,12),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});

		var infowindow = new google.maps.InfoWindow();
		var marker, i;
		for (i = 0; i < locations.length; i++) {  
		  marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map
		  });

		  google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
			  infowindow.setContent(locations[i][0]);
			  infowindow.open(map, marker);
			}
		  })(marker, i));
		  
	google.maps.event.addDomListener(window, "resize", function() {
		var center = map.getCenter();
		google.maps.event.trigger(map, "resize");
		map.setCenter(center); 
	});

		}
	</script>
	</div> 
	<!--end product-->
