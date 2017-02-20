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
                      For <?php if($prop['purpose'] == 'sell') { ?>Sale <?php }else{ ?><?php echo $prop['purpose']?><?php } ?>
                    </div>
                    <div class="aa-properties-item-content">
                          <div class="aa-properties-info">
                          <?php if($prop['purpose'] != 'paying guest'){?><span>Category: <?php echo $prop['category_name']?></span><?php } ?>
                            <!--<span>5 Rooms</span>
                            <span>2 Beds</span>
                            <span>3 Baths</span>
                            <span>1100 SQ FT</span>-->
                          </div>
                          <div class="aa-properties-about">
                            <h3><a href="#"><?php echo $prop['title']?></a></h3>
                            <p><?php echo $prop['description']?></p>
                            <p>Sqft: <?php echo $prop['sqft']?></p>

                          </div>
                          <div class="aa-properties-detial">
                            <span class="aa-price">
                              Rs. <?php echo $prop['estimated_price']?>
                            </span>


                            <?php if($prop['purpose'] == 'paying guest'){?>
                            <a class="aa-secondary-btn" href="<?php echo site_url()."pg/view/".$prop['prop_id']?>">View Details</a>       
                            <?php }else{ ?>
                             <a class="aa-secondary-btn" href="<?php echo site_url()."property/view/".$prop['prop_id']?>">View Details</a>
                            <?php } ?>

                            <!--<a class="aa-secondary-btn" style="margin-right:10px" href="#">Remove From Short list</a>-->
                            <button class="aa-secondary-btn removeshortlist" style="margin-right:10px;padding-bottom:0;float:right" id="<?php echo $prop['id']?>" value="<?php echo $loggedId ?>">Remove From Short list</button>
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
			 getShortlistedPropertyList(sortField, perpage);		 
			 
	});	
	$('#per_page').on('change', function() {
			 var sortField = $('#sort_property').val();
			 var perpage = this.value;
			 getShortlistedPropertyList(sortField,perpage);		 
			 
	});

      var SITE_URL = "<?php echo site_url();?>";
      $('#filter_category').on('change', function() {
          var categoryId = this.value;
          //alert(categoryId);die();
          var url = SITE_URL+"postproperty/subcategories";
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
				},
			   url: $(this).attr("href"),
		   	success: function(data){
				//console.log(data);
				$('#shortlist_container').html(data);	

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