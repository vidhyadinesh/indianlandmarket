<?php if(!empty($properties)){ ?>
<ul class="aa-properties-nav">
<?php foreach($properties as $prop):?>
<li>
  <article class="aa-properties-item">
    <a class="aa-properties-item-img" href="<?php echo site_url()."/property/view/".$prop['id']?>">
    <?php if(!empty($prop['prop_image'])) {?>
      <img alt="img" src="<?php echo base_url()."uploads/".$prop['prop_image']['image']?>">
    <?php }else{ ?>
      <img alt="img" src="<?php echo base_url()."assets/img/no_prop.jpg"?>">
    <?php }?>
    </a>
    <div class="aa-tag for-rent">
      For <?php if($prop['purpose'] == 'sell') { ?>Sale <?php }else{ ?><?php echo $prop['purpose']?><?php } ?>
    </div>
    <div class="aa-properties-item-content">
      <div class="aa-properties-info">
       <?php if($prop['purpose'] != 'paying guest'){?>
       <span>Category: <?php echo $prop['category_name']?></span>
       <?php } ?>
       <!-- <span>3 Baths</span>
        <span>1100 SQ FT</span>-->
      </div>
      <div class="aa-properties-about">
        <h3><a href="<?php echo site_url()."/property/view/".$prop['id']?>"><?php echo $prop['title']?></a></h3>
        <p><?php echo $prop['description']?></p>
        <p>Sqft: <?php echo $prop['sqft']?></p>
      </div>
      <div class="aa-properties-detial">
        <span class="aa-price">
          Rs.<?php echo $prop['estimated_price']?>
        </span>
        
        <a class="aa-secondary-btn" href="<?php echo site_url()."/property/view/".$prop['id']?>">View Details</a>
     <button class="aa-secondary-btn shortlist" style="margin-right:10px;padding-bottom:0;float:right" id="<?php echo $prop['id']?>" value="<?php echo $loggedId ?>">Add to Short list</button><!--<span class="glyphicon glyphicon-star"></span>-->
        
      </div>
    </div>
  </article>
</li>
<?php endforeach;?>                
</ul>
<?php }else{?>
No results found
<?php }?>
<!-- Start properties content bottom -->
<!--<div class="aa-properties-content-bottom">
  <nav>
    <ul class="pagination">
      <li>
        <a href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li class="active"><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li>
        <a href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
</div>-->
<div class="clearfix"></div>
<div class="custom_pagination" style="float:right;"> <?php echo $paginglinks; ?></div>
<div class="pagination" style="float:left;"> <?php echo (!empty($pagermessage) ? $pagermessage : ''); ?></div>

  <!-- / Properties  -->
 <script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script> 
 <script>
  $(document).ready(function () {
	  
	//getPropertyList();	
  var SITE_URL = "<?php echo site_url();?>";
  	$('#sort_property').on('change', function() {
			 var sortField = this.value;
			 var perpage = $('#per_page').val();
			 getPropertyList(sortField, perpage);		 
			 
	});	
	$('#per_page').on('change', function() {
			 var sortField = $('#sort_property').val();
			 var perpage = this.value;
			 getPropertyList(sortField,perpage);		 
			 
	});

	 $('#filter_category').on('change', function() {
    var categoryId = this.value;
    //alert(categoryId);die();
    var url = SITE_URL+"/postproperty/subcategories";
    $.ajax({
      type: "POST",
    dataType: 'json',
      data: {
    'category_id': categoryId
        },
     url: url,
     success: function(data){
    $('#prop_subCategory').find('option').remove();

        $.each(data, function () { 
            $('#prop_subCategory').append(
                $('<option></option>').val(this.id).html(this.sub_category)
            );
        });

      }
    });

  });
	
	$(".custom_pagination a").on('click',function(event){ 
	 event.preventDefault();
	//alert($('#per_page').val());
		$.ajax({
				type: "POST",
				//dataType: 'json',
				data: {
				'sort_field': $('#sort_property').val(),
				'perpage': $('#per_page').val(),
				'purpose': $('#purpose').val(),
				'category': $('#category').val(),
				'country': $('#country').val(),
				'state': $('#state').val(),
				'district': $('#district').val(),
				'location': $('#location').val(),
				'from_price' : $('#from_price').val(),
	            'to_price' : $('#to_price').val(),
				'from_sqft' : $('#from_sqft').val(),
	            'to_sqft' : $('#to_sqft').val(),
                 'features': $('#features').val(),
				
				'radius': $('#radius').val(),
				'lat': $('#lat').val(),
				'lng': $('#lng').val(),
				'loc': $('#loc').val(),
				
				'master_rooms': $('#master_rooms').val(),
				'kids_rooms': $('#kids_rooms').val(),
				'house_guest_rooms': $('#house_guest_rooms').val(),
				
				'land_type': $('#land_type').val(),
				'land_position': $('#land_position').val(),
				'water_availability': $('#water_availability').val(),
				
				'floorno': $('#floorno').val(),
				'towerno': $('#towerno').val(),
				'guest_rooms': $('#guest_rooms').val(),
				
				'type': $('#type').val(),
				'workstations': $('#workstations').val(),
				'meeting_rooms': $('#meeting_rooms').val()
				},
			   url: $(this).attr("href"),
		   	success: function(data){
				//console.log(data);
				$('#properties_container').html(data);	

			}
				 
		   });
	});
	
	
	$('.shortlist').on('click', function() {
		//alert('sdf');
			 var propertyId = $(this).attr("id");
			 var loggedUserId = $(this).val();
			 if(!loggedUserId){
				 alert('please login to add shortlist');
			 }else{				 				 
				    addToShortlist(propertyId,loggedUserId);
			 }			 
	});
	

  });
  
  function addToShortlist(propertyId,loggedUserId){
	  $.ajax({
			type: "POST",
			//dataType: 'json',
			data: {
			'property_id': propertyId,
			'user_id':loggedUserId
			},
		   url: SITE_URL+"/property/add-to-shortlist",
		   success: function(response){
			   alert(response);					   
			}				 
	  });	
	  
  }
  
   </script>