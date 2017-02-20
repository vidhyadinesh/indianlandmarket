<ul>
<?php if(!empty($features['prop_details'])){?>
     <?php if($features['prop_details']['land_type']){?><li>Type of land: <?php echo $features['prop_details']['land_type'] ?>  </li> <?php } ?>
     <?php if($features['prop_details']['land_position']){?><li>Land position: <?php echo $features['prop_details']['land_position'] ?> </li> <?php } ?>
     <?php if($features['prop_details']['water_availability']){?><li>Water availability: <?php echo $features['prop_details']['water_availability']?></li><?php } ?>
     <?php if($features['prop_details']['no_of_gates']){?><li>No of gates: <?php echo $features['prop_details']['no_of_gates']?></li><?php } ?>
     <?php if($features['prop_details']['monthly_revenue']){?><li>Monthly revenue: <?php echo $features['prop_details']['monthly_revenue']?></li><?php } ?>
     <?php if($features['prop_details']['other_features']){?><li>Other additional features: <?php echo $features['prop_details']['other_features']?></li><?php } ?>
<?php } ?>
                     
</ul>