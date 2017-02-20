<ul>
<?php if(!empty($features['prop_details'])){?>
     <?php if($features['prop_details']['no_of_floor']){?><li>No of floor: <?php echo $features['prop_details']['no_of_floor'] ?>  </li><?php } ?>
      <?php if($features['prop_details']['no_of_tower']){?><li>No of tower: <?php echo $features['prop_details']['no_of_tower'] ?>  </li> <?php } ?>
     <?php if($features['prop_details']['guest_rooms']){?><li>Guest rooms: <?php echo $features['prop_details']['guest_rooms']?></li><?php } ?>
     <?php if($features['prop_details']['other_amenities']){?><li>Other amenities: <?php echo $features['prop_details']['other_amenities']?></li><?php } ?>
<?php } ?>
                    
</ul>