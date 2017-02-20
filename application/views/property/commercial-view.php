<ul>
<?php if(!empty($features['prop_details'])){?>
     <?php if($features['prop_details']['type']){?><li>Type: <?php echo $features['prop_details']['type'] ?>  </li> <?php }?>
     <?php if($features['prop_details']['workstations']){?><li>Work stations: <?php echo $features['prop_details']['workstations'] ?>  </li><?php } ?> 
     <?php if($features['prop_details']['meeting_rooms']){?><li>Meeting rooms: <?php echo $features['prop_details']['meeting_rooms']?></li><?php } ?> 
<?php } ?>
                    
</ul>