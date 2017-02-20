<?php if(!empty($properties)){ ?>
<ul class="aa-properties-nav">
<?php foreach($properties as $prop):?>
<li>
  <article class="aa-properties-item">
    <a class="aa-properties-item-img" href="<?php echo site_url()."property/view/".$prop['id']?>">
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
        <h3><a href="#"><?php echo $prop['title']?></a></h3>
        <p><?php echo $prop['description']?></p>
        <p>Sqft: <?php echo $prop['sqft']?></p>
        <p><?php if($prop['status'] == 1) {?>Status: Approved <?php }else{ ?>Status: waiting for approval<?php } ?></p>
      </div>
      <div class="aa-properties-detail">
        <span class="aa-price">
          Rs.<?php echo $prop['estimated_price']?>
        </span>
        <?php if($prop['purpose'] == 'paying guest'){?>
        <a class="aa-secondary-btn" href="<?php echo site_url()."pg/view/".$prop['id']?>">View Details</a>       
        <?php }else{ ?>
         <a class="aa-secondary-btn" href="<?php echo site_url()."property/view/".$prop['id']?>">View Details</a>
        <?php } ?>

        <?php if($prop['purpose'] == 'paying guest'){?>
          <a class="aa-secondary-btn" href="<?php echo site_url()."pg/edit/?id=".base64_encode($prop['id'])?>">Edit Details</a>
          <?php }else{?>
           <a class="aa-secondary-btn" href="<?php echo site_url()."postproperty/edit/step1/?id=".base64_encode($prop['id'])?>">Edit Details</a>
         <?php }?>
     <!--<button class="aa-secondary-btn shortlist" style="margin-right:10px;padding-bottom:0;float:right" id="<?php /*?><?php echo $prop['id']?><?php */?>" value="<?php /*?><?php echo $loggedId ?><?php */?>">Add to Short list</button>--><!--<span class="glyphicon glyphicon-star"></span>-->
        
      </div>
    </div>
  </article>
</li>
<?php endforeach;?>                
</ul>
 <?php }else{ ?>
  No results found.
  <?php } ?>
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
  
  	$('#sort_property').on('change', function() {
			 var sortField = this.value;
			 var perpage = $('#per_page').val();
			 getMyPropertyList(sortField, perpage);		 
			 
	});	
	$('#per_page').on('change', function() {
			 var sortField = $('#sort_property').val();
			 var perpage = this.value;
			 getMyPropertyList(sortField,perpage);		 
			 
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
				$('#my_properties_container').html(data);	

			}
				 
		   });
	});	

  });
  

  
   </script>