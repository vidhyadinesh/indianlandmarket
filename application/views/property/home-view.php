<ul>
<?php if(!empty($features['prop_details'])){?>
     <li>Free land near to house: <?php if($features['prop_details']['is_land_near'] == 1){?>Yes<?php }else{?>			                         No  <?php } ?>  <?php echo $features['prop_details']['land_details'] ?>  </li> 
     <li>Constructions inside land: <?php if($features['prop_details']['is_construction'] == 1){?>Yes<?php }else{?>			                         No  <?php } ?>  <?php echo $features['prop_details']['construction_details'] ?> </li> 
     <?php if($features['prop_details']['no_of_rooms']){?><li><?php echo $features['prop_details']['no_of_rooms']?> No of rooms</li><?php }?>
     <?php if($features['prop_details']['master_rooms']){?><li><?php echo $features['prop_details']['master_rooms']?> Master rooms</li><?php }?>
     <?php if($features['prop_details']['kids_rooms']){?><li><?php echo $features['prop_details']['kids_rooms']?> Kids rooms</li><?php }?>
     <?php if($features['prop_details']['guest_rooms']){?><li><?php echo $features['prop_details']['guest_rooms']?> Guest rooms</li><?php }?>
     <?php if($features['prop_details']['attached_bathrooms']){?><li><?php echo $features['prop_details']['attached_bathrooms']?> Attached  bathrooms</li><?php }?>
     <?php if($features['prop_details']['common_bathrooms']){?><li><?php echo $features['prop_details']['common_bathrooms']?> Common  bathrooms</li><?php }?>
     <?php if($features['prop_details']['outside_bathrooms']){?><li><?php echo $features['prop_details']['outside_bathrooms']?> Outside  bathrooms</li><?php }?>
     <?php if($features['prop_details']['no_of_floors']){?><li><?php echo $features['prop_details']['no_of_floors']?> floors</li><?php }?>
      <?php if($features['prop_details']['floor_type']){?><li><?php echo $features['prop_details']['floor_type']?> floor type</li><?php }?>
     <?php if($features['prop_details']['stair_position']){?><li><?php echo $features['prop_details']['stair_position']?> Stair</li><?php }?>
     <?php if($features['prop_details']['no_of_gates']){?><li><?php echo $features['prop_details']['no_of_gates']?> Gates</li><?php }?>
<?php } ?>
                     
</ul>