<form class="form-horizontal" id="add_prop_step5" enctype="multipart/form-data">

<input type="hidden" name="property_id" value="<?php echo $propertyId ?>" id="property_id">


<legend>Upload your property images<small></small></legend>
  
  
  <div class="form-group form-group-sm">
    <label for="textinput" class="control-label col-sm-2">Property Image</label>
    <div class="col-sm-10">
    <input type="file" name="property_images[]" id="property_images" multiple>
    </div>
    <?php if(!empty($property_images)) {?>
		 <?php foreach($property_images as $image):?>
         <div class="col-md-4 text-center" style="position:relative">
            <img src="<?php echo base_url()."uploads/".$image['image'] ?>" alt="img" class="center-block img-thumbnail img-responsive">
            <p><?php echo $image['image'] ?></p>
            <a class="btn btn-sm btn-danger" onClick="removePropImage(<?php echo $image['id']?>);"><i class="fa fa-close"></i></a>
            <div style="position: absolute;right: 0px;left: 0; color: #f00; font-weight: bolder; font-size: 20px; padding: 10px; top: 66px;text-align: center;" id="prop_image<?php echo $image['id']?>">
            </div>
            <?php /*?><button class="btn btn-sm btn-danger" onClick="removePropImage(<?php echo $image['id']?>);">remove</button><?php */?>
         </div>               
         <?php endforeach;?>
    <?php } ?>
  </div>  
  <div class="clearfix"> </div>
  <legend>Floor Image<small></small></legend>
  <div class="form-group form-group-sm">
    
    <label for="textinput" class="control-label col-sm-2">Floor Plan:</label>
    <div class="col-sm-10">
      <input type="file" name="floor_images[]" id="floor_images">
    </div>
    
    <?php if($prop_floor_image){?>
          <div class="col-md-4 text-center">
            <img src="<?php echo base_url()."uploads/".$prop_floor_image['floor_image'] ?>" alt="img" class="img-thumbnail img-responsive">
            <p><?php echo $prop_floor_image['floor_image'] ?></p>
            <a class="btn btn-sm btn-danger" onClick="removeFloorImage(<?php echo $prop_floor_image['id']?>);"><i class="fa fa-close"></i></a>
            <div style="position: absolute;right: 0px;left: 0; color: #f00; font-weight: bolder; font-size: 20px; padding: 10px; top: 66px;text-align: center;" id="floor_image<?php echo $prop_floor_image['id']?>">
            </div>
         </div>                           
    <?php }?>

  </div>
  
 <input type="button" class="btn btn-default prev-step" value="Previous" id="previous"> 
 <input type="button" class="btn btn-primary next-step" value="save and continue" id="save"> 
</form>
 