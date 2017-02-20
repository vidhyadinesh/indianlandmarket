<section id="aa-property-header-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Add Details</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>
            <li><a href="#">Paying Guest Details</a></li>                
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
            
          <form class="form-horizontal" id="paying_guest" method="post">
            <fieldset>
              <!-- Form Name -->
              <legend>Submit Paying Guest Details <small>start with the following steps </small></legend>
                          
              <input type="hidden" name="property_id" value="<?php echo isset($property_id)? $property_id:'' ?>" id="property_id">
               
              <div class="form-group form-group-sm">
                <label for="textinput" class="control-label col-sm-2">* Category</label>
                <div class="col-sm-10">
                      <select id="category" name="category" class="form-control">
                      	<option value="">Select</option>
                        <?php foreach($categories as $row):?>
              				<option value="<?php echo $row->id ?>" <?php if(isset($prop_details['category'])&& $prop_details['category']== $row->id){ ?> selected= selected<?php }?>><?php echo $row->category?></option>                
						<?php endforeach;?>
                      </select>
                </div>               
              </div>
              
              
              <div class="form-group form-group-sm">
              	
                <label for="radios-inline" class="control-label col-sm-2">* PG Available For</label>
                <div class="radio col-sm-10"> 
                  <label class="radio-inline"><input type="radio" name="available_for" value="Boy" <?php if(!empty($pg_features['available_for'])&& $pg_features['available_for'] == 'Boy') {?> checked= checked <?php } ?>>Boy </label>
                  <label class="radio-inline"><input type="radio" name="available_for" value="Girl" <?php if(!empty($pg_features['available_for'])&& $pg_features['available_for'] == 'Girl') {?> checked= checked <?php } ?>>Girl</label>
                  <label class="radio-inline"><input type="radio" name="available_for" value="Mixed" <?php if(!empty($pg_features['available_for'])&& $pg_features['available_for'] == 'Mixed') {?> checked= checked <?php } ?>>Mixed</label>
                </div>
              </div>  
               <div class="form-group form-group-sm">
                <label for="radios-inline" class="control-label col-sm-2">Suitable for</label>
                <div class="radio col-sm-10"> 
                  <label class="radio-inline"><input type="radio" name="suitable_for" value="Students" <?php if(!empty($pg_features['suitable_for'])&& $pg_features['suitable_for'] == 'Students') {?> checked= checked <?php } ?>>Students </label>
                  <label class="radio-inline"><input type="radio" name="suitable_for" value="Working Professionals" <?php if(!empty($pg_features['suitable_for'])&& $pg_features['suitable_for'] == 'Working Professionals') {?> checked= checked <?php } ?>>Working Professionals</label>
                  <label class="radio-inline"><input type="radio" name="suitable_for" value="Others" <?php if(!empty($pg_features['suitable_for'])&& $pg_features['suitable_for'] == 'Others') {?> checked= checked <?php } ?>>Others</label>
                </div>
              </div>  
              <div class="form-group">
                <label class="control-label col-sm-2" for="textarea">* Title</label>
                <div class="col-sm-10">
                   <input type="text" class="form-control" placeholder="Title" name="title" id="title" value="<?php echo isset($prop_details['title'])? $prop_details['title']:'' ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="textarea">Description</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="description" name="description" rows="5"><?php echo isset($prop_details['description'])? $prop_details['description']:'' ?></textarea>
                </div>
              </div>
              
              <div class="form-group form-group-sm">
                <label for="textinput" class="control-label col-sm-2">* Estimated Price / Month</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="estimated price" name="estimated_price" id="estimated_price" value="<?php echo isset($prop_details['estimated_price'])? $prop_details['estimated_price']:'' ?>">
                </div>
              </div>

              <div class="form-group form-group-sm">
                <label for="textinput" class="control-label col-sm-2"> Food cost / Month</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="food cost" name="food_cost" id="food_cost" value="<?php echo isset($pg_features['food_cost'])? $pg_features['food_cost']:'' ?>">
                </div>
              </div>
              
              <div class="form-group form-group-sm">
                <label for="textinput" class="control-label col-sm-2">* Security Deposit</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="security deposit" name="security_deposit" id="security_deposit" value="<?php echo isset($pg_features['security_deposit'])? $pg_features['security_deposit']:'' ?>">
                </div>
              </div>
              
              <div class="form-group form-group-sm">
                  <label for="textinput" class="control-label col-sm-2">Age Of Property</label>
                  <div class="col-sm-10">
                    <select id="age_of_prop" name="age_of_prop" class="form-control">
                      <option value="">Select</option>
                      <option value="0 to 1 Year" <?php if(!empty($pg_features['age_of_property'])&& $pg_features['age_of_property'] == '0 to 1 Year') {?> selected= selected <?php } ?>>0 to 1 Year</option>  
                      <option value="1 to 5 Year" <?php if(!empty($pg_features['age_of_property'])&& $pg_features['age_of_property'] == '1 to 5 Year') {?> selected= selected <?php } ?>>1 to 5 Year</option>  
                      <option value="5 and Above" <?php if(!empty($pg_features['age_of_property'])&& $pg_features['age_of_property'] == '5 and Above') {?> selected= selected <?php } ?>>5 and Above</option>    
                      </select>
                    </div>
                </div>
              
              <div class="form-group form-group-sm">
                <label for="textinput" class="control-label col-sm-2">Sqft</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="placeholder" name="sqft" id="sqft" value="<?php echo isset($prop_details['sqft'])? $prop_details['sqft']:'' ?>">
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-sm-2" for="textarea">* Postal Address</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="postal_address" name="postal_address" rows="5"><?php echo isset($prop_details['postal_address'])? $prop_details['postal_address']:'' ?></textarea>
                </div>
              </div>
              <div class="form-group form-group-sm">
                <label for="textinput" class="control-label col-sm-2">Enter Google Location</label>
                <div class="col-sm-10">
                  <!--<input type="text" class="form-control" placeholder="placeholder" name="location" id="location" value="">-->
                  <input id="searchTextField" type="text" class="form-control" name="location" value="">         
                                    
                  <input name="latitude" class="MapLat" value="<?php echo isset($prop_details['latitude']) ? $prop_details['latitude']:'' ?>"" type="hidden" placeholder="Latitude" style="width: 161px;" id="latitude">

            <input name="longitude" class="MapLon" value="<?php echo isset($prop_details['longitude']) ? $prop_details['longitude']:'' ?>" type="hidden" placeholder="Longitude" style="width: 161px;" id="longitude"> 
            
            <input name="location" class="location" id="location" value="" type="hidden" placeholder="location" style="width: 161px;">  
                  
                  
                </div>
              </div>
              
              <div class="form-group form-group-sm">
                <label for="textinput" class="control-label col-sm-2">Locality</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="placeholder" name="locality" id="locality" value="<?php echo isset($prop_details['location'])? $prop_details['location']:'' ?>">
                </div>
              </div>              

              <hr>
              <div class="row">
                <?php /*<div class="form-group form-group-sm col-md-4">
                  <label for="textinput" class="control-label col-sm-6">Configuration</label>
                  <div class="col-sm-6">
                    <select id="configuration" name="configuration" class="form-control">
                      <option value="">Select</option>
                      <option value="2 BHK" <?php if(!empty($pg_features['configuration'])&& $pg_features['configuration'] == '2 BHK') {?> selected= selected <?php } ?>>2 BHK</option>  
                      <option value="3 BHK" <?php if(!empty($pg_features['configuration'])&& $pg_features['configuration'] == '3 BHK') {?> selected= selected <?php } ?>>3 BHK</option>  
                      <option value="4 BHK" <?php if(!empty($pg_features['configuration'])&& $pg_features['configuration'] == '4 BHK') {?> selected= selected <?php } ?>>4 BHK</option>  
                      <option value="Others" <?php if(!empty($pg_features['configuration'])&& $pg_features['configuration'] == 'Others') {?> selected= selected <?php } ?>>Others</option>  
                      </select>
                    </div>
                </div>*/?>
                <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-8 control-label" for="selectbasic">Number of rooms:</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="no_of_rooms" placeholder="no of rooms" value="<?php echo isset($pg_features['no_of_rooms']) ? $pg_features['no_of_rooms']:''?>" id="no_of_rooms">
                    </div>
                </div>

                <div class="form-group form-group-sm col-md-4">
                  <label for="textinput" class="control-label col-sm-6">People occupancy</label>
                  <div class="col-sm-6">
                    <select id="people_occupancy" name="people_occupancy" class="form-control">
                      <option value="">Select</option>
                      <option value="1 person" <?php if(!empty($pg_features['people_occupancy'])&& $pg_features['people_occupancy'] == '1 person') {?> selected= selected <?php } ?>>1 person</option>  
                      <option value="2 person" <?php if(!empty($pg_features['people_occupancy'])&& $pg_features['people_occupancy'] == '2 person') {?> selected= selected <?php } ?>>2 person</option>  
                      <option value="3 person" <?php if(!empty($pg_features['people_occupancy'])&& $pg_features['people_occupancy'] == '3 person') {?> selected= selected <?php } ?>>3 person</option>  
                      <option value="4 person" <?php if(!empty($pg_features['people_occupancy'])&& $pg_features['people_occupancy'] == '4 person') {?> selected= selected <?php } ?>>4 person</option>
                      <option value="5 person" <?php if(!empty($pg_features['people_occupancy'])&& $pg_features['people_occupancy'] == '5 person') {?> selected= selected <?php } ?>>5 person</option>
                      <option value="6 person" <?php if(!empty($pg_features['people_occupancy'])&& $pg_features['people_occupancy'] == '6 person') {?> selected= selected <?php } ?>>6 person</option>
                      <option value="7 person" <?php if(!empty($pg_features['people_occupancy'])&& $pg_features['people_occupancy'] == '7 person') {?> selected= selected <?php } ?>>7 person</option>
                      <option value="8 person" <?php if(!empty($pg_features['people_occupancy'])&& $pg_features['people_occupancy'] == '8 person') {?> selected= selected <?php } ?>>8 person</option> 
                      <option value="9 person" <?php if(!empty($pg_features['people_occupancy'])&& $pg_features['people_occupancy'] == '9 person') {?> selected= selected <?php } ?>>9 person</option> 
                      <option value="10 and above person" <?php if(!empty($pg_features['people_occupancy'])&& $pg_features['people_occupancy'] == '10 and above person') {?> selected= selected <?php } ?>>10 and above person</option> 
                      </select>
                    </div>
                </div>

                <div class="form-group form-group-sm col-md-4">
                  <label for="textinput" class="control-label col-sm-6">Bed rooms</label>
                   <div class="col-sm-6">
                    <select id="bed_rooms" name="bed_rooms" class="form-control">
                      <option value="">Select</option>
                       <?php for ($i=0; $i<=10; $i++){ ?>
                            	<option value="<?php echo $i;?>" <?php if(isset($pg_features['bed_rooms'])&& $pg_features['bed_rooms']== $i){ ?> selected= selected<?php }?>><?php echo $i;?></option>
                          <?php }?>  
                      </select>
                    </div>
                </div></div>
                <div class="row">
                <div class="form-group form-group-sm col-md-4">
                  <label for="textinput" class="control-label col-sm-6">Bath rooms</label>
                   <div class="col-sm-6">
                    <select id="bath_rooms" name="bath_rooms" class="form-control">
                      <option value="">Select</option>
                       <?php for ($i=0; $i<=10; $i++){ ?>
                            	<option value="<?php echo $i;?>" <?php if(isset($pg_features['bath_rooms'])&& $pg_features['bath_rooms']== $i){ ?> selected= selected<?php }?>><?php echo $i;?></option>
                          <?php }?>  
                      </select>
                    </div>
                </div>

                <div class="form-group form-group-sm col-md-4">
                  <label for="textinput" class="control-label col-sm-6">Property Available From</label>
                   <div class="col-sm-6">
                    <input type="text"  class="form-control" name="available_from" value="<?php echo isset($pg_features['available_date'])? $pg_features['available_date']:'' ?>" id="available_from">
                    </div>
                </div>
                <?php /*<div class="form-group form-group-sm col-md-4">
                  <label for="textinput" class="control-label col-sm-6">Attached Bathrooms</label>
                   <div class="col-sm-6">
                    <select id="attached_bathrooms" name="attached_bathrooms" class="form-control">
                      <option value="">Select</option>
                      <?php for ($i=0; $i<=10; $i++){ ?>
                              <option value="<?php echo $i;?>" <?php if(isset($pg_features['attached_bathrooms'])&& $pg_features['attached_bathrooms']== $i){ ?> selected= selected<?php }?>><?php echo $i;?></option>
                      <?php }?>
                       
                      </select>
                    </div>
                </div>*/?>
                
          </div>
              
            <hr>
          
              <div class="row">
                <div class="form-group form-group-sm col-md-4">
                  <label for="textinput" class="control-label col-sm-6">Furnishing Level</label>
                  <div class="col-sm-6">
                    <select id="furnishing_level" name="furnishing_level" class="form-control">
                        <option value="">Select</option>
                        <option value="Fully Furnished" <?php if(isset($pg_features['furnishing_level'])&& $pg_features['furnishing_level']== 'Fully Furnished'){ ?> selected= selected<?php }?>>Fully Furnished</option>
                        <option value="Semi Furnished" <?php if(isset($pg_features['furnishing_level'])&& $pg_features['furnishing_level']== 'Semi Furnished'){ ?> selected= selected<?php }?>>Semi Furnished</option>
                        <option value="Un Furnished" <?php if(isset($pg_features['furnishing_level'])&& $pg_features['furnishing_level']== 'Un Furnished'){ ?> selected= selected<?php }?>>Un Furnished</option>
                    </select>
                    </div>
                </div>

                <div class="form-group  form-group-sm col-md-8">
                <label class="control-label col-sm-4" for="textarea">Available furniture details for a person</label>
                <div class="col-sm-8">
                  <textarea class="form-control" id="furniture_details" name="furniture_details" rows="5"><?php echo isset($pg_features['furniture_details']) ? $pg_features['furniture_details']:''?></textarea>
                </div>
              </div>                

              </div>
             <hr>

             <label>Upload Images</label>
                                          <!--<form action="" method="post" enctype="multipart/form-data" id="js-upload-form">-->
                                            <div class="form-inline">
                                              <div class="form-group">
                                                <input type="file" name="files[]" id="upload-files" multiple>
                                              </div>
                                             <!--  <button id="uploadeventfiles" class="btn btn-sm btn-primary">Upload files</button> -->
                                            </div>

                                        <?php if(!empty($pg_images)){?>
                                            <div class="js-upload-finished">
                                            <h3>Processed files</h3>
                                            <div class="list-group" id="uploaded_events">
                                            
                                            <?php foreach($pg_images as $pg_image):?>
                                              <button class="list-group-item list-group-item-success pg_image_delete" id="<?php echo $pg_image['id']?>"><span class="badge alert-success pull-right">Delete</span><?php echo $pg_image['image']?></button>
<!--                                              <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Delete</span>image-02.jpg</a>
-->  
                      <?php endforeach; ?>
                                            
                                          </div>
                                          </div>
                                      <?php }?>
              <div class="form-group form-group-sm">
                <div class="col-md-12">        
                  
   
 
  
   <div class="h5">Amenities</div>

                    <?php foreach($features as $row):?>

                        <div class="checkbox col-md-3">
                            <label for="<?php echo $row->id ?>">
                                <input type="checkbox" name="features" value="<?php echo $row->id ?>" <?php if(isset($pg_adv_features) && in_array($row->id, $pg_adv_features)){?> checked= checked<?php }?> id="<?php echo $row->id ?>">
                                <?php echo $row->feature?>
                            </label>
                        </div>

                    <?php endforeach;?>
  <!--<div class="checkbox col-md-3">
    <label for="checkboxes-0">
      <input type="checkbox" name="amenities" id="checkboxes-0" value="Bike Parking">
      Bike parking
    </label>
	</div>-->
  <!--<div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="amenities" id="checkboxes-1" value="Car Parking">
      Car Parking
    </label>
	</div>
 
  <div class="checkbox col-md-3">
    <label for="checkboxes-0">
      <input type="checkbox" name="amenities" id="checkboxes-0" value="Gym">
      Gym
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="amenities" id="checkboxes-1" value="Visitors Room">
      Visitors Room
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-0">
      <input type="checkbox" name="amenities" id="checkboxes-0" value="Fire Alarm">
      Fire Alarm
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="amenities" id="checkboxes-1" value="Power Back up">
      Power Back up
    </label>
	</div>
    <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="amenities" id="checkboxes-1" value="Lift">
      Lift
    </label>
	</div>
    <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="amenities" id="checkboxes-1" value="Security Staff">
      Security Staff
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-0">
      <input type="checkbox" name="amenities" id="checkboxes-0" value="Modular Kitchen">
      Modular Kitchen
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="amenities" id="checkboxes-1" value="Pooja Room">
      Pooja Room
    </label>
	</div>
    <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="amenities" id="checkboxes-1" value="Study Room">
      Study Room
    </label>
	</div>
    <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="amenities" id="checkboxes-1" value="Servants">
      Servants
    </label>
	</div>-->
                </div>
              </div>
              
              
              
            </fieldset>
          
             <p><div class="checkbox col-md-12"><label for="checkboxes-0">
             <input type="checkbox" name="terms" id="checkboxes-0" value="" <?php if(isset($property_id)) {?> checked= checked <?php } ?>>
             <small>By clicking below you agreeing to the <a href="<?php echo site_url()."/terms"?>">Terms and Conditions</a> of Indian Land Market</small> </label> </div>
             </p>
        </div>

      
      </div>
            
            
            
            </fieldset>
           <input type="submit" class="btn btn-primary next-step" value="Submit">          
           
          </form>
            
            <div id="progress-wrp"><div class="progress-bar"></div ><div class="status">0%</div></div>
    <div id="output"><!-- error or success results --></div>

            <!--<ul class="list-inline pull-right">
                  <li><input type="button" class="btn btn-primary next-step" id="step1" >Save and continue</li>
                  
            </ul>-->
        </div>
    </section>
        </div>
      </div>
    </div>
  </section>
  <script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script> 
  <script src="<?php echo base_url()."assets/js/validate.js"?>"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>   
  <script>
  $(document).ready(function () {	

  <?php if(isset($prop_details['address'])){?>  
   var encoded = JSON.stringify("<?php echo $prop_details['address']?>".split(","));
   //console.log(encoded);
   $( '.location' ).val(encoded); 
   <?php } ?>
   
  

  	function initialize() {
      var input = document.getElementById('searchTextField');
	  google.maps.event.addDomListener(input, 'keydown', function(e) { 
			if (e.keyCode == 13) { 
				e.preventDefault(); 
			}
	  });
      var autocomplete = new google.maps.places.Autocomplete(input);
	  //autocomplete.bindTo('bounds', map);
         var infowindow = new google.maps.InfoWindow();
         google.maps.event.addListener(autocomplete, 'place_changed', function (event) {
             infowindow.close();
             var place = autocomplete.getPlace();
			 //console.log(place);
             /*if (place.geometry.viewport) {
                 map.fitBounds(place.geometry.viewport);
             } else {
                 map.setCenter(place.geometry.location);
                 map.setZoom(17);
             }
             moveMarker(place.name, place.geometry.location);*/
             $('.MapLat').val(place.geometry.location.lat());
             $('.MapLon').val(place.geometry.location.lng());
			 
			 var addressData = place.address_components;			 
			 var addrLocation = [];
			 addressData.forEach(function(address) {				 
				 var addr = address.long_name;
				 addrLocation.push(addr);				 
			 });
       $('#locality').val(addrLocation[0]);
			 addrLocation = JSON.stringify(addrLocation);
			 $('#location').val(addrLocation);
       
		 });
   }
   google.maps.event.addDomListener(window, 'load', initialize);  
   
    $( "#available_from" ).datepicker({
		  changeMonth: true,//this option for allowing user to select month
		  changeYear: true,
		  dateFormat: 'yy-mm-dd' //this option for allowing user to select from year range
    });
	var SITE_URL = "<?php echo site_url();?>";

	$("#paying_guest").validate({
        ignore: [':hidden'],
    rules: {
        category: "required",
        available_for: "required",
        estimated_price:"required",
      	title:"required",
      	security_deposit:"required",
      	postal_address:"required",
      	latitude:"required",
        terms:"required"
        
        },
    messages: {
            category: "Please select a category",
            available_for:"please select available for option",
			estimated_price:"please enter your estimated price",
      	    title:"please enter title",
      		security_deposit:"please enter security deposit",
      		postal_address:"please enter postal address",
      		latitude:"please select any location",
          terms:"Please accept the terms and condition"
          
        },
        
        submitHandler: function(form) {
          var formData = new FormData();
          formData.append('category',$( '#category' ).val());
          formData.append('title',$( '#title' ).val());
          formData.append('description',$( '#description' ).val());
          formData.append('estimated_price',$( '#estimated_price' ).val());
          formData.append('sqft',$( '#sqft' ).val());
          formData.append('postal_address',$( '#postal_address' ).val());
          formData.append('location',$( '#location' ).val());
          formData.append('latitude',$( '#latitude' ).val());
          formData.append('longitude',$( '#longitude' ).val());
          formData.append('property_id',$( '#property_id' ).val());


          formData.append('available_for',$('input[name="available_for"]:checked').val());
          formData.append('suitable_for',$('input[name="suitable_for"]:checked').val());
          formData.append('age_of_prop',$( '#age_of_prop' ).val());
          formData.append('security_deposit',$( '#security_deposit' ).val());
          //formData.append('configuration',$( '#configuration' ).val());
          formData.append('bed_rooms',$( '#bed_rooms' ).val());
          formData.append('bath_rooms',$( '#bath_rooms' ).val());
          formData.append('furnishing_level',$( '#furnishing_level' ).val());
          formData.append('available_from',$( '#available_from' ).val());
          //formData.append('attached_bathrooms',$( '#attached_bathrooms' ).val());
          formData.append('food_cost',$( '#food_cost' ).val());
          formData.append('no_of_rooms',$( '#no_of_rooms' ).val());
          formData.append('people_occupancy',$( '#people_occupancy' ).val());
          formData.append('furniture_details',$( '#furniture_details' ).val());

            var pgFeatures = [];
            $('input[name=features]:checked').map(function() {
                pgFeatures.push($(this).val());
            });
          formData.append('features',pgFeatures);
        $.each($("input[name^='files[]']"), function(i, obj) {
          $.each(obj.files,function(j, file){
            formData.append('pg_image['+j+']', file);
          })
        }); 


			$.ajax({
				url: SITE_URL+"/save-pg",
				type: 'POST',
				data: formData,
        processData: false,
        contentType: false,
        xhr: function(){
        //upload Progress
        var xhr = $.ajaxSettings.xhr();
        if (xhr.upload) {
            xhr.upload.addEventListener('progress', function(event) {
                var percent = 0;
                var position = event.loaded || event.position;
                var total = event.total;
                if (event.lengthComputable) {
                    percent = Math.ceil(position / total * 100);
                }
                //update progressbar
                $(" .progress-bar").css("width", + percent +"%");
                $(" .status").text(percent +"%");
            }, true);
        }
        return xhr;
    },
				success: function(response) {
					var encodedPropId = btoa(response);
          alert('You have successfully added pg list.');
          location.href = "<?php echo site_url()?>/property/success/?id="+encodedPropId;  				
				}            
        	});
        }
    });

  $('.pg_image_delete').on('click', function(e) {
    e.preventDefault();
     var pgImageId = $(this).attr("id");              
     deleteEvent(pgImageId);
       
  });
  
  function deleteEvent(pgImageId){
    $.ajax({
      type: "POST",
      data: {
      'pg_image_id': pgImageId,
      },
       url: SITE_URL+"/pg-delete-image",
       success: function(response){
         alert('image deleted successfully'); 
         window.location.reload();           
      }        
    }); 
    
  }
	
  });
  </script>