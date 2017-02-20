<div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable">
                                <thead>
                                    <tr>
                                        <!--<th>Sl No.</th>-->
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th>Sub Type</th>
                                        <th>Status</th>
                                        <th>Delete</th>
                                        <!-- <th>Action</th> -->
                                       
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <!--<th>Sl No.</th>-->
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th>Sub Type</th>
                                        <th>Status</th>
                                        <th>Delete</th>
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </tfoot>
                                <tbody>
                               <?php /*?> <?php $counter = 0;?><?php */?>
                                <?php foreach($properties as $key => $prop):?>
                                    <tr>                                    
                                        <?php /*?><td><?php echo ++$counter?></td><?php */?>
                                        <td><?php echo $prop['title']?><br><!--<a href="#">Edit</a> |--> <a href="<?php echo site_url()."property/view/".$prop['id']?>">View</a></td>
                                        <td><?php echo $prop['category_name']?></td>
                                        <th><?php echo $prop['sub_category_name']?></th>
                                        <td><?php if($prop['status'] == 0){?>Not approved <?php }else{?>Approved <?php }?></a></td>
                                        <td><button class="btn btn-xs btn-danger delete" id="<?php echo $prop['id']?>">Delete</button></td>
                                        <?php if($prop['status'] == 0){?>
                                        <!-- <td><button class="btn btn-xs btn-success changeStatus" id="<?php echo $prop['id']?>">click here to approve</button></td> -->
                                        <?php }?>
                                     
                                    </tr>
                                 <?php endforeach;?>  
                                </tbody>
                            </table>
                            
                            <div class="custompagination" style="float:right;"> <?php echo $paginglinks; ?></div>
			<div class="pagination" style="float:left;"><?php echo (!empty($pagermessage) ? $pagermessage : ''); ?></div>
                        </div>
 <script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script> 
 <script>
  $(document).ready(function () {
                        
                        
   $(".custompagination a").on('click',function(event){ 
	 event.preventDefault();
	//alert($('#per_page').val());
		$.ajax({
				type: "POST",
				//dataType: 'json',
				data: {
				'sort_field': $('#sort_property').val(),
				'perpage': $('#per_page').val(),
				//'purpose': $('#purpose').val(),				
				},
			   url: $(this).attr("href"),
		   	success: function(data){
				//console.log(data);
				$('#properties_container').html(data);	

			}
				 
		   });
	});
	
	var SITE_URL = "<?php echo site_url();?>"; 
	$('.changeStatus').on('click', function() {
		//alert('dsfs');
		 var propertyId = $(this).attr('id');
		 var url = SITE_URL+"admin/property/change-status";
		$.ajax({
			type: "POST",
			//dataType: 'json',
			data: {
			'property_id': propertyId
			},
		   url: url,
		success: function(data){
			alert('Approved');
			window.location.reload();
		}
			 
	   });		 
		 
	});
	
	
	$('.delete').on('click', function() {
		 var propertyId = $(this).attr('id');
		 var url = SITE_URL+"admin/property/delete";
		$.ajax({
			type: "POST",
			//dataType: 'json',
			data: {
			'property_id': propertyId
			},
		   url: url,
		success: function(data){
			alert('Deleted');
			window.location.reload();
		}
			 
	   });		 
		 
	});
	
	
	
  });