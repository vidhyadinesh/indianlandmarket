<div class="row">    
    <div class="col-sm-12">
   <div class="h5">Amenities</div> 
   
   <input type="hidden" name="property_id" value="<?php echo $propertyId ?>" id="property_id">  
   
   <?php foreach($amenities as $amenity):?>
    
    <div class="checkbox col-md-3"> 
        <label for="amenity_<?php echo $amenity->id ?>">
          <input type="checkbox" name="amenities" value="<?php echo $amenity->id ?>" <?php if(in_array($amenity->id, array_keys($prop_amenities))){?> checked= checked<?php }?> id="amenity_<?php echo $amenity->id ?>">
          <?php echo $amenity->amenities?>
        </label>
         <?php /*?><input type="text" class="form-control amenity_desc" name="amenities_description" placeholder="if yes specify approx. distance" data-content="<?php echo $amenity->id?>" value="<?php echo isset($prop_amenities[$amenity->id])?$prop_amenities[$amenity->id]:''?>"><?php */?>
        <select name="amenities_description" class="form-control amenity_desc" data-content="<?php echo $amenity->id?>" id="<?php echo $amenity->id?>">
            <option value="" selected>if yes,specify approx.distance</option>
            <option value="Nearly 1 km" <?php if(isset($prop_amenities[$amenity->id])&& $prop_amenities[$amenity->id]== "Nearly 1 km"){ ?> selected= selected<?php }?>>Nearly 1 km</option>
            <option value="Nearly 2 kms" <?php if(isset($prop_amenities[$amenity->id])&& $prop_amenities[$amenity->id]== "Nearly 2 kms"){ ?> selected= selected<?php }?>>Nearly 2 kms</option>
            <option value="Nearly 5 kms" <?php if(isset($prop_amenities[$amenity->id])&& $prop_amenities[$amenity->id]== "Nearly 5 kms"){ ?> selected= selected<?php }?>>Nearly 5 kms</option>
            <option value="Nearly 10 kms" <?php if(isset($prop_amenities[$amenity->id])&& $prop_amenities[$amenity->id]== "Nearly 10 kms"){ ?> selected= selected<?php }?>>Nearly 10 kms</option>
            <option value="Nearly 15 kms" <?php if(isset($prop_amenities[$amenity->id])&& $prop_amenities[$amenity->id]== "Nearly 15 kms"){ ?> selected= selected<?php }?>>Nearly 15 kms</option>
        </select>
	</div>
             
	<?php endforeach;?>          
    
    <!--<div class="checkbox col-md-3"> 
    <label for="Amenities1">
      <input type="checkbox" name="checkboxes" id="Amenities1" value="1">
      Nearby school
    </label>
      <input type="text" class="form-control" id="textinput" placeholder="if yes specify approx. distance" required>
	</div> 
     
    <div class="checkbox col-md-3"> 
    <label for="Amenities2">
      <input type="checkbox" name="checkboxes" id="Amenities2" value="1">
      Nearby college 
    </label>
      <input type="text" class="form-control" id="textinput" placeholder="if yes specify approx. distance" required>
	</div> 
    
    <div class="checkbox col-md-3"> 
    <label for="Amenities3">
      <input type="checkbox" name="checkboxes" id="Amenities3" value="1">
      Nearby hospitals 
    </label>
      <input type="text" class="form-control" id="textinput" placeholder="if yes specify approx. distance" required>
	</div>
     
  <div class="checkbox col-md-3"> 
    <label for="Amenities4">
      <input type="checkbox" name="checkboxes" id="Amenities4" value="1">
      Nearby bus stand/station
    </label>
      <input type="text" class="form-control" id="textinput" placeholder="if yes specify approx. distance" required>
	</div> 
    
    <div class="checkbox col-md-3"> 
    <label for="Amenities5">
      <input type="checkbox" name="checkboxes" id="Amenities5" value="1">
      Nearby taxi stand
    </label>
      <input type="text" class="form-control" id="textinput" placeholder="if yes specify approx. distance" required>
	</div> 
    
    <div class="checkbox col-md-3"> 
    <label for="Amenities6">
      <input type="checkbox" name="checkboxes" id="Amenities6" value="1">
      Nearby Rikshaw stand
    </label>
      <input type="text" class="form-control" id="textinput" placeholder="if yes specify approx. distance" required>
	</div> 
    
    <div class="checkbox col-md-3"> 
    <label for="Amenities7">
      <input type="checkbox" name="checkboxes" id="Amenities7" value="1">
     Railway station
    </label>
      <input type="text" class="form-control" id="textinput" placeholder="if yes specify approx. distance" required>
	</div> 
    
    <div class="checkbox col-md-3"> 
    <label for="Amenities8">
      <input type="checkbox" name="checkboxes" id="Amenities8" value="1">
     Boat house
    </label>
      <input type="text" class="form-control" id="textinput" placeholder="if yes specify approx. distance" required>
	</div> 
    
    <div class="checkbox col-md-3"> 
    <label for="Amenities9">
      <input type="checkbox" name="checkboxes" id="Amenities9" value="1">
     Airport
    </label>
      <input type="text" class="form-control" id="textinput" placeholder="if yes specify approx. distance" required>
	</div> 
    
    <div class="checkbox col-md-3"> 
    <label for="Amenities10">
      <input type="checkbox" name="checkboxes" id="Amenities10" value="1">
     Other nearby amenities
    </label>
      <textarea class="form-control" id="textarea" name="textarea" rows="5">default text</textarea>
	</div> -->
    
    </div>
     </div>
              
        