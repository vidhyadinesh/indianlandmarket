<form class="form-horizontal" id="land_features" method="post">
<input type="hidden" name="property_id" value="<?php echo $propertyId ?>" id="property_id">
<div class="form-group form-group-sm">
                <div class="col-md-12">        
                  <div class="h5">Features</div>
                <div class="row">
                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-6 control-label" for="selectbasic">* Type of land</label>
                    <div class="col-sm-6">
                      <select id="land_type" name="land_type" class="form-control">
                        <option value="cultivation" <?php if(isset($prop_details['land_type'])&& $prop_details['land_type']== 'cultivation'){?> selected= selected <?php }?>>Cultivation</option>
                        <option value="bare_land" <?php if(isset($prop_details['land_type'])&& $prop_details['land_type']== 'bare_land'){?> selected= selected <?php }?>>Bare land</option>
                        <option value="others" <?php if(isset($prop_details['land_type'])&& $prop_details['land_type']== 'others'){?> selected= selected <?php }?>>Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-6 control-label" for="selectbasic">* Land position</label>
                    <div class="col-sm-6">
                      <select id="land_position" name="land_position" class="form-control">
                        <option value="lower" <?php if(isset($prop_details['land_position'])&& $prop_details['land_position']== 'lower'){?> selected= selected <?php }?>>Lower</option>
                        <option value="higher" <?php if(isset($prop_details['land_position'])&& $prop_details['land_position']== 'higher'){?> selected= selected <?php }?>>Higher</option>
                        <option value="slanting" <?php if(isset($prop_details['land_position'])&& $prop_details['land_position']== 'slanting'){?> selected= selected <?php }?>>Slanting</option>
                        <option value="uneven" <?php if(isset($prop_details['land_position'])&& $prop_details['land_position']== 'uneven'){?> selected= selected <?php }?>>Uneven</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-6 control-label" for="selectbasic">* Water availability</label>
                    <div class="col-sm-6">
                      <select id="water_availability" name="water_availability" class="form-control">
                        <option value="well" <?php if(isset($prop_details['water_availability'])&& $prop_details['water_availability']== 'well'){?> selected= selected <?php }?>>Well</option>
                        <option value="pipe" <?php if(isset($prop_details['water_availability'])&& $prop_details['water_availability']== 'pipe'){?> selected= selected <?php }?>>Pipe</option>
                        <option value="canal" <?php if(isset($prop_details['water_availability'])&& $prop_details['water_availability']== 'canal'){?> selected= selected <?php }?>>Canal</option>
                      </select>
                    </div>
                  </div>
                </div>
              
                <div class="row">
                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-6 control-label" for="selectbasic">Gates (no of gates):</label>
                    <div class="col-sm-6">
                      <select id="no_of_gates" name="no_of_gates" class="form-control">
                        <?php for ($i=0; $i<=10; $i++){ ?>
                            	<option value="<?php echo $i;?>" <?php if(isset($prop_details['no_of_gates'])&& $prop_details['no_of_gates'] == $i){ ?> selected= selected <?php }?>><?php echo $i;?></option>
                          <?php }?>
                      </select>
                    </div>
                  </div>
                  
                  <div class="col-md-4 form-group form-group-sm">
                    <div class="form-group">
                        <label class="control-label col-sm-6" for="textarea">Monthly revenue (if any)</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="monthly_revenue" name="monthly_revenue" placeholder="placeholder" value=<?php echo isset($prop_details['monthly_revenue']) ? $prop_details['monthly_revenue']:''?>>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 form-group form-group-sm">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="textarea">Other features</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="other_features" name="other_features" rows="5"><?php echo isset($prop_details['other_features']) ? $prop_details['other_features']:''?></textarea>
                        </div>
                     </div>
                  </div>
                </div>
                
   <div class="row"> 
     <div class="col-sm-12">  
     
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
      Land separation
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Compound wall
    </label>
	</div>
    <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Gates
    </label>
	</div>

   </div> 
</div>
<div class="row"> 
     <div class="col-sm-12">                       
  <div class="checkbox col-md-3">
 
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Land separation
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Compound wall
    </label>
	</div>
    <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Gates
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
$("#land_features").validate({ 
    rules: {
            land_type: "required",
            land_position: "required",
			water_availability:"required",
      
        },
    messages: {
            land_type: "Please select land type",
            land_position:"please select land position",
			water_availability:"please select water availability",
         
        },
        
        submitHandler: function(form) {
			var landFeatures = [];
			$('input[name=features]:checked').map(function() {
						landFeatures.push($(this).val());
			});

			$.ajax({
				url: SITE_URL+"postproperty/step3",
				type: 'POST',
				data: {
					'data':$(form).serialize(),
					'property_features': landFeatures,
          'type':'land'
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
             
         
         
              
                   