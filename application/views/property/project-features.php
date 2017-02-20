
<form class="form-horizontal" id="project_features" method="post">
<input type="hidden" name="property_id" value="<?php echo $propertyId ?>" id="property_id">
<div class="form-group form-group-sm">
                <div class="col-md-12">        
                  <div class="h5">Project Description</div>
                <div class="row">
                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-8 control-label" for="selectbasic">* No of Floors:</label>
                    <div class="col-sm-4">
                      <select id="no_of_floor" name="no_of_floor" class="form-control">
                        <?php for ($i=0; $i<=10; $i++){ ?>
                            	<option value="<?php echo $i;?>" <?php if(isset($prop_details['no_of_floor'])&& $prop_details['no_of_floor'] == $i){ ?> selected= selected <?php }?>><?php echo $i;?></option>
                          <?php }?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-8 control-label" for="selectbasic">* No of towers:</label>
                    <div class="col-sm-4">
                      <select id="no_of_tower" name="no_of_tower" class="form-control">
                        <?php for ($i=0; $i<=10; $i++){ ?>
                            	<option value="<?php echo $i;?>" <?php if(isset($prop_details['no_of_tower'])&& $prop_details['no_of_tower'] == $i){ ?> selected= selected <?php }?>><?php echo $i;?></option>
                          <?php }?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-8 control-label" for="selectbasic">Guest rooms:</label>
                    <div class="col-sm-4">
                      <select id="guest_rooms" name="guest_rooms" class="form-control">
                        <?php for ($i=0; $i<=10; $i++){ ?>
                            	<option value="<?php echo $i;?>" <?php if(isset($prop_details['guest_rooms'])&& $prop_details['guest_rooms'] == $i){ ?> selected= selected <?php }?>><?php echo $i;?></option>
                          <?php }?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="textarea">Other amenities</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="other_amenities" name="other_amenities" rows="5"><?php echo isset($prop_details['other_amenities']) ? $prop_details['other_amenities']:''?></textarea>
                    </div>
                  </div>
                </div>
                
               
    <div class="row"> 
     <div class="col-sm-12">            
   <div class="h5">Other Features</div>              
  <!--<div class="checkbox col-md-3">-->
  
  <?php foreach($features as $row):?>
    
    <div class="checkbox col-md-3"> 
        <label for="<?php echo $row->id ?>">
          <input type="checkbox" name="features" value="<?php echo $row->id ?>" <?php if(isset($prop_features) && in_array($row->id, $prop_features)){?> checked= checked<?php }?> id="<?php echo $row->id ?>">
          <?php echo $row->feature?>
        </label>
	</div>
             
	<?php endforeach;?>
 
    <!--<label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Lifts
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      24/7 water supply
    </label>
	</div>
    <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      27/7 power back up
    </label>
	</div>
    <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Wifi
    </label>
	</div>

  <div class="checkbox col-md-3">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Fire Extinguisher
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Car parking
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Piped Gas connection
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Laundry
    </label>
	</div>
    <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Security
    </label>
	</div>
    <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Property staff
    </label>
	</div>

  <div class="checkbox col-md-3">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Gym
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Club house
    </label>
	</div>
   <div class="checkbox col-md-3">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Convention area
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Swimming pool
    </label>
	</div>
 
  <div class="checkbox col-md-3">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Game zone
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
     Children’s play area
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Badminton court
    </label>
	</div>
   </div> -->
</div>

  </div>
  

    </div>
    <input type="button" class="btn btn-default prev-step" value="Previous" id="previous">
    <input type="submit" class="btn btn-primary next-step" value="save and continue">
  </form>
  
  <script>
$(document).ready(function () {

var SITE_URL = "<?php echo site_url();?>";
$("#project_features").validate({ 
    rules: {
            no_of_floor: "required",
            no_of_tower: "required",
     
        },
    messages: {
            no_of_floor: "Please select floor no",
            no_of_tower:"please select tower no",
         
        },
        
        submitHandler: function(form) {
			var projectFeatures = [];
			$('input[name=features]:checked').map(function() {
						projectFeatures.push($(this).val());
			});

			$.ajax({
				url: SITE_URL+"/postproperty/step3",
				type: 'POST',
				data: {
					'data':$(form).serialize(),
					'property_features': projectFeatures,
          'type':'project'
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
             
         
         
              
                   