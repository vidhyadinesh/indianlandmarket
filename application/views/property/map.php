<!doctyp html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Get Latitude and Longitude</title>
    <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>-->
	<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQV0XNkk6SDcDoKfxxF0lPfSreU0w2FPU&libraries=places&region=uk&language=en&sensor=false" type="text/javascript"></script>-->
	<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->
</head>
<body>
<div class="form-group form-group-sm">
             <div class="row">   
            
              </div>
            <div class="row">

                 
                 <div class="col-sm-6">

                 

                 <div class="col-sm-12">
            <label for="textinput" class="control-label col-sm-2">Location:</label>
            <input id="searchTextField" type="text" size="50" style="text-align: left;width:357px;direction: ltr;" name="address">
            </div>

<!-- <label for="textinput" class="control-label col-sm-2">latitude:</label> -->
              <div class="col-sm-12">

            <input name="latitude" class="form-control MapLat" value="<?php echo isset($prop_locations['latitude']) ? $prop_locations['latitude']:'' ?>" type="hidden" placeholder="Latitude" style="width: 161px;" >
            </div>
            <!-- <label for="textinput" class="control-label col-sm-2">longitude:</label> -->
            
            <div class="col-sm-12">
            <input name="longitude" class="form-control MapLon" value="<?php echo isset($prop_locations['longitude']) ? $prop_locations['longitude']:'' ?>" type="hidden" placeholder="Longitude" style="width: 161px;" >
            </div>
             
             <div class="col-sm-12">
             <label for="textinput" class="control-label">locality:</label>
            <input name="locality" class="locality" value="<?php echo isset($prop_locations['location']) ? $prop_locations['location']:'' ?>" readonly type="text" placeholder="locality" style="width: 100%;">
            </div>
                 

            <div class="col-md-12">
             <label for="textinput" class="control-label">Property postal address:</label>
             <textarea class="form-control postal_address" id="postal_address" name="postal_address" rows="5"><?php echo isset($prop_locations['postal_address']) ? $prop_locations['postal_address']:''?></textarea>
            </div>

            <div class="col-sm-12">
             <label for="textinput" class="control-label">District:</label>
             <input name="district" class="district" value="<?php echo isset($prop_locations['district']) ? $prop_locations['district']:'' ?>" readonly type="text" placeholder="district" style="width: 100%;">
            </div>

            <div class="col-sm-12">
             <label for="textinput" class="control-label">State:</label>
             <input name="state" class="state" value="<?php echo isset($prop_locations['state']) ? $prop_locations['state']:'' ?>" readonly type="text" placeholder="state" style="width: 100%;">
            </div>


                </div>
            <?php /*?><div id="project_details" style="display:none">
                 <label for="textinput" class="control-label col-sm-2">Project title:</label>
                 <div class="col-sm-4">
                <input name="title" class="title" value="<?php echo isset($prop_locations['title']) ? $prop_locations['title']:'' ?>" type="text" placeholder="project title" style="width: 100%;" disabled>
                </div>
                <label for="textinput" class="control-label col-sm-2">Description:</label>
                 <div class="col-sm-4">
                 <textarea class="description" id="description" name="description" rows="5"><?php echo isset($prop_locations['description']) ? $prop_locations['description']:''?></textarea>
                </div>
            </div><?php */?>
            
            <input name="location" class="location" value="" type="hidden" placeholder="location" style="width: 161px;">
            
            <!--Location:<input name="location" class="location" value="" type="text" placeholder="location" style="width: 161px;" disabled>-->
            
             
             
<!--              State:<input name="state" class="state" value="" type="text" placeholder="state" style="width: 161px;" disabled>
               Country:<input name="country" class="country" value="" type="text" placeholder="country" style="width: 161px;" disabled>
                Pincode:<input name="pincode" class="pincode" value="" type="text" placeholder="pincode" style="width: 161px;" disabled>-->

   <div  class="col-sm-6"> <div  id="map_canvas" style="height: 450px;width: 100%;margin: 0.6em;"></div></div>

         </div>


<script>
     /*$(function () { //alert('aaa');
         var lat = 44.88623409320778,
             lng = -87.86480712897173,
             latlng = new google.maps.LatLng(lat, lng),
             image = 'http://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png';
         //zoomControl: true,
         //zoomControlOptions: google.maps.ZoomControlStyle.LARGE,
         var mapOptions = {
             center: new google.maps.LatLng(lat, lng),
             zoom: 13,
             mapTypeId: google.maps.MapTypeId.ROADMAP,
             panControl: true,
             panControlOptions: {
                 position: google.maps.ControlPosition.TOP_RIGHT
             },
             zoomControl: true,
             zoomControlOptions: {
                 style: google.maps.ZoomControlStyle.LARGE,
                 position: google.maps.ControlPosition.TOP_left
             }
         },
         map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions),
             marker = new google.maps.Marker({
                 position: latlng,
                 map: map,
                 icon: image
             });
         var input = document.getElementById('searchTextField');
         var autocomplete = new google.maps.places.Autocomplete(input, {
             types: ["geocode"]
         });
         autocomplete.bindTo('bounds', map);
         var infowindow = new google.maps.InfoWindow();
         google.maps.event.addListener(autocomplete, 'place_changed', function (event) {
             infowindow.close();
             var place = autocomplete.getPlace();
			 console.log(place);
             if (place.geometry.viewport) {
                 map.fitBounds(place.geometry.viewport);
             } else {
                 map.setCenter(place.geometry.location);
                 map.setZoom(17);
             }
             moveMarker(place.name, place.geometry.location);
             $('.MapLat').val(place.geometry.location.lat());
             $('.MapLon').val(place.geometry.location.lng());
			 $('.district').val(place.address_components[2].long_name);
			 $('.state').val(place.address_components[3].long_name);
			 $('.country').val(place.address_components[4].long_name);
			 $('.pincode').val(place.address_components[5].long_name);
         });
         google.maps.event.addListener(map, 'click', function (event) {
             $('.MapLat').val(event.latLng.lat());
             $('.MapLon').val(event.latLng.lng());
             infowindow.close();
                     var geocoder = new google.maps.Geocoder();
                     geocoder.geocode({
                         "latLng":event.latLng
                     }, function (results, status) {
                         console.log(results, status);
                         if (status == google.maps.GeocoderStatus.OK) {
                             console.log(results);
                             var lat = results[0].geometry.location.lat(),
                                 lng = results[0].geometry.location.lng(),
                                 placeName = results[0].address_components[0].long_name,
                                 latlng = new google.maps.LatLng(lat, lng);
                             moveMarker(placeName, latlng);
                             $("#searchTextField").val(results[0].formatted_address);
                         }
                     });
         });
        
         function moveMarker(placeName, latlng) {
             marker.setIcon(image);
             marker.setPosition(latlng);
             infowindow.setContent(placeName);
             //infowindow.open(map, marker);
         }
     });*/
</script>
</body>
</html>