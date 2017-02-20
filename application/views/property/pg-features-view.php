<ul>
<?php if(!empty($property)){?>
    
     <?php if(!empty($property['available_for'])){?><li> available for: <?php echo $property['available_for']?> </li><?php }?>
     <?php if(!empty($property['suitable_for'])){?><li> suitable for: <?php echo $property['suitable_for']?> </li><?php }?>
      <?php if(!empty($property['age_of_property'])){?><li> age of property: <?php echo $property['age_of_property']?> </li><?php }?>
      <?php if(!empty($property['security_deposit'])){?><li> security deposit: <?php echo $property['security_deposit']?> </li><?php }?>
       <?php if(!empty($property['configuration'])){?><li> configuration: <?php echo $property['configuration']?> </li><?php }?>
       <?php if(!empty($property['bed_rooms'])){?><li> bedrooms: <?php echo $property['bed_rooms']?> </li><?php }?>
       <?php if(!empty($property['bath_rooms'])){?><li> bathrooms: <?php echo $property['bath_rooms']?> </li><?php }?>
       <?php if(!empty($property['furnishing_level'])){?><li> furnishing level: <?php echo $property['furnishing_level']?> </li><?php }?>
        <?php if(!empty($property['attached_bathrooms'])){?><li> attached bathrooms: <?php echo $property['attached_bathrooms']?> </li><?php }?>
        <?php if(!empty($property['food_cost'])){?><li> Food cost/month: <?php echo $property['food_cost']?> </li><?php }?>
        	<?php if(!empty($property['no_of_rooms'])){?><li> No of rooms: <?php echo $property['no_of_rooms']?> </li><?php }?>
        <?php if(!empty($property['furniture_details'])){?><li> Available furniture details: <?php echo $property['furniture_details']?> </li><?php }?>

<?php } ?>
                     
</ul>