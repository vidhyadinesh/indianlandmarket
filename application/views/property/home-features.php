              <!-- Form Name -->
             <form class="form-horizontal" id="home_features" method="post">
             
             <input type="hidden" name="property_id" value="<?php echo $propertyId ?>" id="property_id">
              <legend>Property Details</legend>
              <div class="form-group form-group-sm">
                <label for="radios-inline" class="control-label col-sm-2">Free land near to house:</label>
                <div class="radio col-sm-2">
                  <label class="radio-inline">
                  <input type="radio" name="is_land_near" value="1" <?php if(!empty($prop_details['is_land_near'])&& $prop_details['is_land_near'] == 1) {?> checked= checked <?php } ?> class="is_land_near">Yes </label>
                  <label class="radio-inline">
                  <input type="radio" name="is_land_near" value="0" <?php if(empty($prop_details['is_land_near']) && !empty($prop_details)){?> checked= checked <?php }?> class="is_land_near">No</label>                  
                </div>
                <div class="col-sm-8" id="land_desc" <?php if(isset($prop_details['is_land_near']) && $prop_details['is_land_near']== 1){?>style="display:block" <?php }else {?> style="display:none" <?php }?>>
                  <input type="text" class="form-control" name="land_details" placeholder="Give details about the attached land area" value=<?php echo isset($prop_details['land_details']) ? $prop_details['land_details']:''?>>
                </div>
              </div>
              <div class="form-group form-group-sm">
                <label for="radios-inline" class="control-label col-sm-2">Any Other constructions inside land area:</label>
                <div class="radio col-sm-2">
                  <label class="radio-inline"><input type="radio" name="is_construction" value="1" <?php if(!empty($prop_details['is_construction'])&& $prop_details['is_construction'] == 1) {?> checked= checked <?php } ?>  class="is_construction">Yes </label>
                  <label class="radio-inline"><input type="radio" name="is_construction" value="0" <?php if(empty($prop_details['is_construction']) && !empty($prop_details)){?> checked= checked <?php }?> class="is_construction">No</label>                  
                </div>
                <div class="col-sm-8" id="construction_desc" <?php if(isset($prop_details['is_construction']) && $prop_details['is_construction']== 1){?>style="display:block" <?php }else {?> style="display:none" <?php }?>>
                  <input type="text" class="form-control" name="construction_details" placeholder="Give details about the additional constructions within the land area" value=<?php echo isset($prop_details['construction_details']) ? $prop_details['construction_details']:''?>>
                </div>
              </div>
              
              <div class="form-group form-group-sm">
                <div class="col-md-12">        
                  
                <div class="row">

                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-8 control-label" for="selectbasic">Number of rooms:</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="no_of_rooms" placeholder="no of rooms" value=<?php echo isset($prop_details['no_of_rooms']) ? $prop_details['no_of_rooms']:''?>>
                    </div>
                  </div>

                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-8 control-label" for="selectbasic">Master rooms:</label>
                    <div class="col-sm-4">
                      <select id="master_rooms" name="master_rooms" class="form-control">
						              <?php for ($i=0; $i<=10; $i++){ ?>
                            	<option value="<?php echo $i;?>" <?php if(isset($prop_details['master_rooms'])&& $prop_details['master_rooms']== $i){ ?> selected= selected<?php }?>><?php echo $i;?></option>
                          <?php }?>

                        <!--<option value="1">1</option>
                        <option value="2">2</option>-->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-8 control-label" for="selectbasic">Kids rooms:</label>
                    <div class="col-sm-4">
                      <select id="kids_rooms" name="kids_rooms" class="form-control">
                      <?php for ($i=0; $i<=10; $i++){ ?>
                            	<option value="<?php echo $i;?>" <?php if(isset($prop_details['kids_rooms']) && $prop_details['kids_rooms'] == $i){ ?> selected= selected <?php }?>><?php echo $i;?></option>
                      <?php }?>
                        <!--<option value="1">1</option>
                        <option value="2">2</option>-->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-8 control-label" for="selectbasic">Guest rooms:</label>
                    <div class="col-sm-4">
                      <select id="guest_rooms" name="guest_rooms" class="form-control">
                      <?php for ($i=0; $i<=10; $i++){ ?>
                            	<option value="<?php echo $i;?>" <?php if(isset($prop_details['guest_rooms']) && $prop_details['guest_rooms'] == $i){ ?> selected= selected <?php }?>><?php echo $i;?></option>
                      <?php }?>
                        <!--<option value="1">1</option>
                        <option value="2">2</option>-->
                      </select>
                    </div>
                  </div>
                </div>
                  
                <div class="row">
                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-8 control-label" for="selectbasic">Attached bathrooms:</label>
                    <div class="col-sm-4">
                      <select id="attached_bathrooms" name="attached_bathrooms" class="form-control">
                      <?php for ($i=0; $i<=10; $i++){ ?>
                            	<option value="<?php echo $i;?>" <?php if(isset($prop_details['attached_bathrooms']) && $prop_details['attached_bathrooms'] == $i){ ?> selected= selected <?php }?>><?php echo $i;?></option>
                      <?php }?>
                        <!--<option value="1">1</option>
                        <option value="2">2</option>-->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-8 control-label" for="selectbasic">Common bath rooms:</label>
                    <div class="col-sm-4">
                      <select id="common_bathrooms" name="common_bathrooms" class="form-control">
                       <?php for ($i=0; $i<=10; $i++){ ?>
                            	<option value="<?php echo $i;?>" <?php if(isset($prop_details['common_bathrooms']) && $prop_details['common_bathrooms'] == $i){ ?> selected= selected <?php }?>><?php echo $i;?></option>
                       <?php }?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-8 control-label" for="selectbasic">Outside bathrooms :</label>
                    <div class="col-sm-4">
                      <select id="outside_bathrooms" name="outside_bathrooms" class="form-control">
                        <?php for ($i=0; $i<=10; $i++){ ?>
                            	<option value="<?php echo $i;?>" <?php if(isset($prop_details['outside_bathrooms'])&& $prop_details['outside_bathrooms'] == $i){ ?> selected= selected <?php }?>><?php echo $i;?></option>
                        <?php }?>
                      </select>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                
                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-8 control-label" for="selectbasic">No of floors:</label>
                    <div class="col-sm-4">
                      <select id="no_of_floors" name="no_of_floors" class="form-control">
                        <?php for ($i=0; $i<=10; $i++){ ?>
                            	<option value="<?php echo $i;?>" <?php if(isset($prop_details['no_of_floors']) && $prop_details['no_of_floors'] == $i){?> selected = selected<?php }?>><?php echo $i;?></option>
                        <?php }?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-8 control-label" for="selectbasic">Floor:</label>
                    <div class="col-sm-4">
                      <select id="floor_type" name="floor_type" class="form-control">
                      	<!--<option value="">select</option>-->
                        <option value="granite" <?php if(isset($prop_details['floor_type'])&& $prop_details['floor_type'] == 'granite'){?> selected= selected <?php }?>>Granite</option>
                        <option value="marble" <?php if(isset($prop_details['floor_type'])&& $prop_details['floor_type'] == 'marble'){?> selected= selected <?php }?>>Marble</option>
                        <option value="ceramic" <?php if(isset($prop_details['floor_type'])&& $prop_details['floor_type'] == 'ceramic'){?> selected= selected <?php }?>>Ceramic</option>
                        <option value="stone" <?php if(isset($prop_details['floor_type'])&& $prop_details['floor_type'] == 'stone'){?> selected= selected  <?php }?>>Stone</option>
                        <option value="wood" <?php if(isset($prop_details['floor_type'])&& $prop_details['floor_type'] == 'wood'){?> selected=selected <?php }?>>Wood</option>
                        <option value="laminate" <?php if(isset($prop_details['floor_type'])&& $prop_details['floor_type'] == 'laminate'){?> selected= selected <?php }?>>Laminate</option>
                        <option value="synthetic" <?php if(isset($prop_details['floor_type'])&& $prop_details['floor_type'] == 'synthetic'){?> selected= selected <?php }?>>Synthetic</option>
                        <option value="others" <?php if(isset($prop_details['floor_type'])&& $prop_details['floor_type'] == 'others'){?> selected= selected <?php }?>>Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-8 control-label" for="selectbasic">Staircase position</label>
                    <div class="col-sm-4">
                      <select id="stair_position" name="stair_position" class="form-control">
                        <option value="inside"<?php if(isset($prop_details['stair_position'])&& $prop_details['stair_position']== 'inside'){?> selected= selected <?php }?>>Inside</option>
                        <option value="outside" <?php if(isset($prop_details['stair_position'])&& $prop_details['stair_position']== 'outside'){?> selected= selected <?php }?>>Outside</option>
                        <option value="no_stair" <?php if(isset($prop_details['stair_position'])&& $prop_details['stair_position']== 'no_stair'){?> selected= selected <?php }?>>No stair</option>
                      </select>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-8 control-label" for="selectbasic">Gates (no of gates):</label>
                    <div class="col-sm-4">
                      <select id="no_of_gates" name="no_of_gates" class="form-control">
                        <?php for ($i=0; $i<=10; $i++){ ?>
                            	<option value="<?php echo $i;?>" <?php if(isset($prop_details['no_of_gates'])&& $prop_details['no_of_gates'] == $i){ ?> selected= selected <?php }?>><?php echo $i;?></option>
                         <?php }?>
                      </select>
                    </div>
                  </div>
                  <!--<div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-8 control-label" for="selectbasic">Free ground:</label>
                    <div class="col-sm-4">
                       <input type="text" class="form-control" id="textinput" placeholder="placeholder" required="">
                    </div>
                  </div>-->
                  <div class="col-md-4 form-group form-group-sm">
                    
                  </div>
                </div>    
          </div>
         </div>  
         
         <div class="row"> 
     <div class="col-sm-12">            
   <div class="h5">Other Features</div>
   
    <?php foreach($features as $row):?>
    
    <div class="checkbox col-md-3"> 
        <label for="<?php echo $row->id ?>">
          <input type="checkbox" name="features" value="<?php echo $row->id ?>" <?php if(isset($prop_features) && in_array($row->id, $prop_features)){?> checked= checked<?php }?> id="<?php echo $row->id ?>">
          <?php echo $row->feature?>
        </label>
	</div>
             
	<?php endforeach;?>
                                      
  	<!--<div class="checkbox col-md-3"> 
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Balcony
    </label>
	</div>
    
    
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Well
    </label>
	</div>
    <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Car parking
    </label>
	</div>
    <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Garden
    </label>
	</div>

  <div class="checkbox col-md-3">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Swimming pool
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Inside lift
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Fireplace
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Home Theatre
    </label>
	</div>
    <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Dining room
    </label>
	</div>
    <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Kitchen work area
    </label>
	</div>

  <div class="checkbox col-md-3">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Pooja room
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Centralized AC
    </label>
	</div>
   <div class="checkbox col-md-3">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Pet house
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Cattle farm
    </label>
	</div>
 
  <div class="checkbox col-md-3">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Lawn
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
     Solar panel
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Rain water harvesting
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Compound wall
    </label>
	</div>-->
   </div> 
</div>  
<input type="button" class="btn btn-default prev-step" value="Previous" id="previous"> 
<input type="submit" class="btn btn-primary next-step" value="save and continue">    
</form> 

<script>
$(document).ready(function () {
	
	var SITE_URL = "<?php echo site_url();?>";
	
	$('.is_land_near').on('change', function() {
		if(this.value == 1){
			$("#land_desc").show();
		}else{
			$("#land_desc").hide();
		}
	});
	
	$('.is_construction').on('change', function() {
		if(this.value == 1){
			$("#construction_desc").show();
		}else{
			$("#construction_desc").hide();
		}
	});
	
	
$("#home_features").validate({ 
    rules: {
            master_rooms: "required",
            kids_rooms: "required",
			attached_bathrooms:"required",
			common_bathrooms:"required",
      no_of_rooms:"required"     
        },
    messages: {
            master_rooms: "Please select master rooms",
            kids_rooms:"please select kids rooms",
			attached_bathrooms:"please select attached bathrooms",
			common_bathrooms:"please select common bathrooms",
      no_of_rooms:"please enter no of rooms"
         
        },
        
        submitHandler: function(form) {
			var homeFeatures = [];
			$('input[name=features]:checked').map(function() {
						homeFeatures.push($(this).val());
			});

			$.ajax({
				url: SITE_URL+"postproperty/step3",
				type: 'POST',
				data: {
					'data':$(form).serialize(),
					'property_features': homeFeatures,
          'type':'home'
				},
				success: function(response) {
					console.log(response);	
					$( '#container' ).html(response);				
				}            
        	});
        }
    });
	});
</script>         