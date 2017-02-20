<div class="body">
                        
                            <table class="table table-bordered table-striped table-hover dataTable">
                                <thead>
                                    <tr>
                                        <!--<th>Sl No.</th>-->
                                        <th>Category</th>
                                        <th>Subcategory</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <!--<th>Sl No.</th>-->
                                        <th>Category</th>
                                        <th>Subcategory</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php foreach($subcategories as $key => $subcategory):?>
                                    <tr>
                                        <!--<td>01</td>-->
                                        <td><?php echo $subcategory['category'] ?></td>
                                        <td><?php echo $subcategory['sub_category'] ?></td>
                                        <td><a class="btn btn-xs btn-success" href="<?php echo site_url()."/subcategory/edit/?id=".$subcategory['id']?>">Edit</a></td>
                                        <td>
                                        <a class="btn btn-xs btn-danger" href="<?php echo site_url()."/subcategory/delete/?id=".$subcategory['id']?>">Delete</a></td>
                                        </td>
                                    </tr>
                                <?php endforeach;?> 
                                   
                                </tbody>
                            </table>
                             
            <div class="custompagination" style="float:right;"> <?php echo $paginglinks; ?></div>
			<?php /*?><div class="pagination" style="float:left;"> <?php echo (!empty($pagermessage) ? $pagermessage : ''); ?></div><?php */?>
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
				$('#subcategory_container').html(data);	

			}
				 
		   });
	});
	
	
	
  });