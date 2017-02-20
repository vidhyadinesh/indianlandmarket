         <form class="form-horizontal" id="add_prop_step5" enctype="multipart/form-data">

			<input type="hidden" name="property_id" value="<?php echo $propertyId ?>" id="property_id">                 
             <!-- <form class="form-horizontal">-->
            <fieldset>
              <!-- Form Name -->
             <legend>Upload your Project images<small></small></legend> 
              
              <div class="form-group form-group-sm well well-sm">
              <h4>Add Property Images</h4>
               <div class="form-group form-group-sm">
                <label for="textinput" class="control-label col-sm-2">Property Image</label>
                <div class="col-sm-10">
                <input type="file" name="property_images[]" multiple>
                </div>
              </div>
              <?php if(!empty($property_images)) {?>
				 <?php foreach($property_images as $image):?>
                 
                 <div class="col-md-4 text-center">
                    <img src="<?php echo base_url()."uploads/".$image['image'] ?>" alt="img" class="img-thumbnail img-responsive">
                    <p><?php echo $image['image'] ?></p>
                    <a class="btn btn-sm btn-danger" onClick="removePropImage(<?php echo $image['id']?>);"><i class="fa fa-close"></i></a>
                    <div style="position: absolute;right: 0px;left: 0; color: #f00; font-weight: bolder; font-size: 20px; padding: 10px; top: 66px;text-align: center;" id="prop_image<?php echo $image['id']?>">
            </div>
                 </div> 
           
                 <?php endforeach;?>
            <?php } ?>
             <div class="clearfix"> </div>
              <div class="row"> 
              <legend>Floor Image<small></small></legend>
              <div class="form-group form-group-sm">                
                <label for="textinput" class="control-label col-sm-2">Floor Plan:</label>
                <div class="col-sm-4">
                  <input type="file" name="floor_images[]">
                </div>
              </div>
              </div>
              
          <?php if($prop_floor_image){?>
         
              <div class="col-md-12 text-center">
                <img src="<?php echo base_url()."uploads/".$prop_floor_image['floor_image'] ?>" alt="img" class="img-thumbnail img-responsive">
                <p><?php echo $prop_floor_image['floor_image'] ?></p>
                <a class="btn btn-sm btn-danger" onClick="removeFloorImage(<?php echo $prop_floor_image['id']?>);"><i class="fa fa-close"></i></a>
                <div style="position: absolute;right: 0px;left: 0; color: #f00; font-weight: bolder; font-size: 20px; padding: 10px; top: 66px;text-align: center;" id="floor_image<?php echo $prop_floor_image['id']?>">
            </div>
             </div>   
                     
    	<?php }?>
              
              <hr>
              <div class="clearfix"> </div>
              <div class="row"> 
              <h4>Add Floor plan Details</h4>
              
              <div class="btn btn-primary btn-sm pull-right" id="add_floor_plan">Add</div>
              
              <div id="floor_plans" >
              </div>
                <!--<label for="textinput" class="control-label col-sm-1">Type:</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="textinput" placeholder="placeholder" required>
                </div>
                <label for="textinput" class="control-label col-sm-1">Sqft:</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="textinput" placeholder="placeholder" required>
                </div>
                <label for="textinput" class="control-label col-sm-1">Cost:</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="textinput" placeholder="placeholder" required>
                </div>
                <label for="textinput" class="control-label col-sm-1">Floor Plans</label>
                <div class="col-sm-2">
                <input type="file" name="uploaded_file[]" multiple>
                </div>  -->    
                </div>                    
                <?php if(!empty($prop_floor_plans)) {?>
				 <?php foreach($prop_floor_plans as $floorplan):?>
                 <div class="col-md-4 text-center">
                    <img src="<?php echo base_url()."uploads/".$floorplan['image'] ?>" alt="img" class="img-thumbnail img-responsive">
                    <p><?php echo $floorplan['title'] ?></p>
                     <p><?php echo $floorplan['type'] ?></p>
                     <p>Sqft : <?php echo $floorplan['sqft'] ?></p>
                     <p><?php echo $floorplan['cost'] ?></p>
                    <a class="btn btn-sm btn-danger" onClick="removeFloorPlanImage(<?php echo $floorplan['id']?>);"><i class="fa fa-close"></i></a>
                    <div style="position: absolute;right: 0px;left: 0; color: #f00; font-weight: bolder; font-size: 20px; padding: 10px; top: 66px;text-align: center;" id="floor_plan<?php echo $floorplan['id']?>">
            </div>
                 </div>        
                 <?php endforeach;?>
            <?php } ?>
              </div>     
             
			
              

            </fieldset>                  
            <!--</form>      -->
                  
              </div>
              
          <input type="button" class="btn btn-default prev-step" value="Previous" id="previous"> 
 		  <input type="button" class="btn btn-primary next-step" value="save and continue" id="save"> 
	</form>
 