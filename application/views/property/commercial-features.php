
<form class="form-horizontal" id="commercial_features" method="post">

<input type="hidden" name="property_id" value="<?php echo $propertyId ?>" id="property_id">
<div class="form-group form-group-sm">
                <div class="col-md-12">        
                  <div class="h5">Features</div>
                <div class="row">
                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-6 control-label" for="selectbasic">* Type</label>
                    <div class="col-sm-6">
                      <select id="type" name="type" class="form-control">
                        <option value="fully-furnished" <?php if(isset($prop_details['type'])&& $prop_details['type']== 'fully-furnished'){?> selected= selected <?php }?>>Fully furnished</option>
                        <option value="partially-furnished" <?php if(isset($prop_details['type'])&& $prop_details['type']== 'partially-furnished'){?> selected= selected <?php }?>>Partially furnished</option>
                        <option value="free-space" <?php if(isset($prop_details['type'])&& $prop_details['type']== 'free-space'){?> selected= selected <?php }?>>Free space</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-6 control-label" for="selectbasic">No of work stations</label>
                    <div class="col-sm-6">
                      <?php /*<select id="workstations" name="workstations" class="form-control">
                        <?php for ($i=0; $i<=10; $i++){ ?>
                            	<option value="<?php echo $i;?>" <?php if(isset($prop_details['workstations'])&& $prop_details['workstations'] == $i){ ?> selected= selected <?php }?>><?php echo $i;?></option>
                         <?php }?>
                      </select>*/?>
                      <input type="text" class="form-control" name="workstations" id="workstations" placeholder="work stations" value=<?php echo isset($prop_details['workstations']) ? $prop_details['workstations']:''?>>
                    </div>
                  </div>
                  <div class="col-md-4 form-group form-group-sm">
                    <label class=" col-sm-6 control-label" for="selectbasic">Meeting rooms</label>
                    <div class="col-sm-6">
                     <?php /* <select id="meeting_rooms" name="meeting_rooms" class="form-control">
                        <?php for ($i=0; $i<=10; $i++){ ?>
                            	<option value="<?php echo $i;?>" <?php if(isset($prop_details['meeting_rooms'])&& $prop_details['meeting_rooms'] == $i){ ?> selected= selected <?php }?>><?php echo $i;?></option>
                         <?php }?>
                      </select>*/?>
                      <input type="text" class="form-control" name="meeting_rooms" id="meeting_rooms" placeholder="meeting rooms" value=<?php echo isset($prop_details['meeting_rooms']) ? $prop_details['meeting_rooms']:''?>>
                    </div>
                  </div>
                </div>
              
                
                
   <div class="row"> 
     <div class="col-sm-12">                         
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
      Conference hall
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      LAN
    </label>
	</div>
    <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Power back up
    </label>
	</div>
     <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Power back up
    </label>
	</div>
                       
    <div class="checkbox col-md-3">
 
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Security
    </label>
	</div>
  <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Locker facility
    </label>
	</div>
    <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Wifi
    </label>
	</div>
    
    <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Internet
    </label>
	</div>
    
    <div class="checkbox col-md-3">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      No of floors
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
      Bike parking
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
	
$("#commercial_features").validate({ 
    rules: {
            type: "required",
            //workstations: "required",
      
        },
    messages: {
            type: "Please select type",
           // workstations:"please select workstations",
         
        },
        
        submitHandler: function(form) {
			var commercialFeatures = [];
			$('input[name=features]:checked').map(function() {
						commercialFeatures.push($(this).val());
			});

			$.ajax({
				url: SITE_URL+"/postproperty/step3",
				type: 'POST',
				data: {
					'data':$(form).serialize(),
					'property_features': commercialFeatures,
          			'type':'commercial'
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
             
         
         
              
                   