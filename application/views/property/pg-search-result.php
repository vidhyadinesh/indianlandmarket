
<?php if(!empty($properties)){ ?>
<ul class="aa-properties-nav aa-list-view">
<?php foreach($properties as $prop):?>
                <li>
                  <article class="aa-properties-item">
                    <a class="aa-properties-item-img" href="#">
                      <?php if(!empty($prop['prop_image'])) {?>
                          <img alt="img" src="<?php echo base_url()."uploads/".$prop['prop_image']['image']?>">
                      <?php }else{ ?>
                          <img alt="img" src="<?php echo base_url()."assets/img/no_prop.jpg"?>">
                      <?php }?> 
                    </a> 
                    <div class="aa-tag for-sale">
                      For <?php echo $prop['purpose']?>
                    </div>
                    <div class="aa-properties-item-content">
                          <div class="aa-properties-info">
                          <span>Category: <?php echo $prop['category_name']?></span>
                            <!--<span>5 Rooms</span>
                            <span>2 Beds</span>
                            <span>3 Baths</span>
                            <span>1100 SQ FT</span>-->
                          </div>
                          <div class="aa-properties-about">
                            <h3><a href="<?php echo site_url()."/property/view/".$prop['id']?>"><?php echo $prop['title']?></a></h3>
                            <p><?php echo $prop['description']?></p>
                            <p>Sqft: <?php echo $prop['sqft']?></p>
                          </div>
                          <div class="aa-properties-detial">
                            <span class="aa-price">
                              Rs. <?php echo $prop['estimated_price']?>
                            </span>
                            <a class="aa-secondary-btn" href="<?php echo site_url()."/pg/view/".$prop['id']?>">View Details</a>
                            <!--<a class="aa-secondary-btn" style="margin-right:10px" href="#">Remove From Short list</a>-->
                            <!-- <button class="aa-secondary-btn removeshortlist" style="margin-right:10px;padding-bottom:0;float:right" id="<?php echo $prop['id']?>" value="<?php echo $loggedId ?>">Remove From Short list</button> -->
                          </div>
                        </div>
                  </article>
                </li>
                <?php endforeach;?>                
              </ul>
  <?php }else{ ?>
  No results found.
  <?php } ?>
              
<div class="clearfix"></div>
<div class="custom_pagination" style="float:right;"> <?php echo $paginglinks; ?></div>
<div class="pagination" style="float:left;"> <?php echo (!empty($pagermessage) ? $pagermessage : ''); ?></div>

<script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script> 
 <script>
  $(document).ready(function () {
	  
	//getPropertyList();	
  
  	$('#sort_property').on('change', function() {
			 var sortField = this.value;
			 var perpage = $('#per_page').val();
			 getPgPropertyList(sortField, perpage);		 
			 
	});	
	$('#per_page').on('change', function() {
			 var sortField = $('#sort_property').val();
			 var perpage = this.value;
			 getPgPropertyList(sortField,perpage);		 
			 
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
        'category': $('#pg_category').val(),
        'country': $('#pg_country').val(),
        'state': $('#pg_state').val(),
        'district': $('#pg_district').val(),
        'loc': $('#pg_loc').val(),
        'availableFor': $('#pg_available_for').val(),
        'suitableFor': $('#pg_suitable_for').val(),
        'furnishinglevel': $('#pg_furnishing_level').val(),
        'bedrooms': $('#pg_bedrooms').val(),
        'features': $('#pg_features').val(),
        'from_price': $('#from_price').val(),
        'to_price': $('#to_price').val(),
        'from_sqft': $('#from_sqft').val(),
        'to_sqft': $('#to_sqft').val()
				},
			   url: $(this).attr("href"),
		   	success: function(data){
				//console.log(data);
				$('#pg_container').html(data);	

			}
				 
		});
	});
	
	
	$('.removeshortlist').on('click', function() {
		var shortlistId = $(this).attr("id");
		$.ajax({
			type: "POST",
			//dataType: 'json',
			data: {
			'id': shortlistId,
			},
		   url: "property/remove-from-shortlist",
		   success: function(response){
			   alert('Removed from shortlist');
			   window.location.reload();					   
			}				 
	  });
			 		 
	});
	
	

  });
  
   
   </script>