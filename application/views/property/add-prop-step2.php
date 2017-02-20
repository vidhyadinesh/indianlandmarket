  <!-- Start Property header  -->

  <section id="aa-property-header-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Add Details</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>
            <li><a href="#">Properties</a></li>                
            <li class="active">Add Details</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Property header  -->

  <!-- Start Properties  -->
  <section id="aa-properties">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           <section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                    
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Basic Details">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                        <div class="text-center">Basic Details</div><br>
                    </li>

                    <li role="presentation" class="active">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Location">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                        <div class="text-center">Location</div><br>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Property Details">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                        <div class="text-center">Property Details</div><br>
                    </li>
                    
                    <li role="presentation"  class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Amenities">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                        <div class="text-center">Amenities</div><br>
                    </li>
                    <li role="presentation"  class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step4" role="tab" title="Pricing">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                        <div class="text-center">Image</div><br>
                    </li>
                </ul>
            </div>

          <form class="form-horizontal" id="add_prop_step2" method="post">
            <fieldset>
              <!-- Form Name -->
              <legend>Pin Your location in map <small></small></legend>
              
              <input type="hidden" name="id" value="<?php echo $propertyId ?>" id="property_id"> 
              

              
              <hr>
             
          
         <!-- <legend><small>Pin Your Map in Your Locality</small></legend>-->
           <p> 
           <?php $this->load->view('property/map'); ?>
          <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6851.201919469417!2d-86.11773906635584!3d33.47324776828677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888bdb60cc49c571%3A0x40451ca6baf275c7!2s36008+AL-77%2C+Talladega%2C+AL+35160%2C+USA!5e0!3m2!1sbn!2sbd!4v1460452919256" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
            </p>
            <!--<ul class="list-inline pull-right">
                            <li><a href="add-details-step1.php" class="btn btn-default prev-step">Previous</a></li>
                            <li><a type="button" class="btn btn-primary next-step" href="add-details-step3.php" >Save and continue</a></li>
                              
                        </ul>-->
                <input type="button" class="btn btn-default prev-step" value="Previous" id="previous"> 
                <input type="submit" class="btn btn-primary next-step" value="save and continue">   
              
            </fieldset>
          </form>
        </div>
    </section>
        </div>
      </div>
    </div>
  </section>
  <!-- / Properties  -->
<script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script> 
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>-->
<script src="<?php echo base_url()."assets/js/validate.js"?>"></script>

<script>
$(document).ready(function () {
	var SITE_URL = "<?php echo site_url();?>";
$("#add_prop_step2").validate({ 
     ignore: [':hidden'],
    rules: {
            latitude: "required",
            postal_address: "required",
        
        },
    messages: {
            //latitude: "Please select a location",
            //longitude:"please select state",
			latitude:"please select a location",
			postal_address:"please enter postal address"
          
        },
        
        submitHandler: function(form) {
			$.ajax({
				url: SITE_URL+"postproperty/step2",
				type: 'POST',
				data: {
					//'data':$(form).serialize()
					'id': $( '#property_id' ).val(),
					'latitude': $( '.MapLat' ).val(),
					'longitude': $( '.MapLon' ).val(),
					'location': $( '.location' ).val(),
					'postal_address': $( '#postal_address' ).val(),
					
				},
				success: function(response) {
					$( '#container' ).html(response);				
				}            
        	});
        }
    });
	
	
	$("#previous").on('click',function (e) { 
        var propId = $( '#property_id' ).val();
        $.ajax({
        url: SITE_URL+"postproperty/edit/step1",
        type: 'POST',
        data: {
          'property_id':propId
        },
        //dataType:"json",
        //processData: false,
        success: function(response) {
          //console.log(response);  
          $( '#container' ).html(response);
		  //getDatePicker();       
        }            
          });

     });
	 
	 <?php if($prop_locations['address']){?>	 
	 var encoded = JSON.stringify("<?php echo $prop_locations['address']?>".split(","));
	 console.log(encoded);
	 $( '.location' ).val(encoded); 
	 <?php } ?>
	 
 
	});
	
	function mapInitialise(){
		var lat = "<?php echo isset($prop_locations['latitude']) ? $prop_locations['latitude']:44.88623409320778 ?>",
             lng = "<?php echo isset($prop_locations['longitude']) ? $prop_locations['longitude']:-87.86480712897173 ?>",
             latlng = new google.maps.LatLng(lat, lng),
             //image = 'http://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png';
             image = '<?php echo base_url();?>assets/img/mappin_25x25.png';
			 //alert(lat);
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
		 google.maps.event.addDomListener(input, 'keydown', function(e) { 
			if (e.keyCode == 13) { 
				e.preventDefault(); 
			}
		  });
         var autocomplete = new google.maps.places.Autocomplete(input, {
             types: ["geocode"]
         });
         autocomplete.bindTo('bounds', map);
         var infowindow = new google.maps.InfoWindow();
         google.maps.event.addListener(autocomplete, 'place_changed', function (event) {
             infowindow.close();
             var place = autocomplete.getPlace();
			 //console.log(place);
             if (place.geometry.viewport) {
                 map.fitBounds(place.geometry.viewport);
             } else {
                 map.setCenter(place.geometry.location);
                 map.setZoom(17);
             }
             moveMarker(place.name, place.geometry.location);
             $('.MapLat').val(place.geometry.location.lat());
             $('.MapLon').val(place.geometry.location.lng());
			 
			 var addressData = place.address_components;			 
			 var addrLocation = [];
			 addressData.forEach(function(address) {				 
				 var addr = address.long_name;
				 addrLocation.push(addr);				 
			 });
            
            addressLocation = JSON.stringify(addrLocation);
            $('.location').val(addressLocation);            
            reverseaddrLocation = addrLocation.reverse(); 
            //console.log(reverseaddrLocation);
            //alert(reverseaddrLocation[0]); 
            //var pincode =  reverseaddrLocation[0].replace(/\"/g, "");   //alert(typeof pincode);    
            //alert(reverseaddrLocation[0].replace(/\"/g, ""));

            var pincode =  parseInt(reverseaddrLocation[0]);
            //alert(pincode);

            if(!isNaN(pincode)){
                var postcode = reverseaddrLocation[0];
                var country  = reverseaddrLocation[1];
                var state    = reverseaddrLocation[2];
                var district = reverseaddrLocation[3];
                var properloc     = reverseaddrLocation[reverseaddrLocation.length - 1];
            }else{
                var country  = reverseaddrLocation[0];
                var state    = reverseaddrLocation[1];
                var district = reverseaddrLocation[2];
                var properloc   = reverseaddrLocation[reverseaddrLocation.length - 1];
            }



			 $('.locality').val(properloc);
             $('.district').val(district);
             $('.state').val(state);




			 //$('#project_details').show();
			 
			 //if(addrLocation){
				 //alert('please select a location');
			 //}
			 
			 //addrLocation = addrLocation.reverse();
			 //
			 /*var addrLocation = addrLocation.filter(function(elem){
			     return typeof elem != 'number'; 
			 });*/
			 /*console.log(addrLocation);
			 addrLocation.forEach(function(loc) {
				 if(typeof loc != 'number'){
					 alert(loc);
				 }				 	
			 });*/
			 //$('.district').val(place.address_components[2].long_name);
			 //$('.state').val(place.address_components[3].long_name);
			 //$('.country').val(place.address_components[4].long_name);
			 //$('.pincode').val(place.address_components[5].long_name);
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
	}

</script>