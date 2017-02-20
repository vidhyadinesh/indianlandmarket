<div class="body">
                        
                            <table class="table table-bordered table-striped table-hover dataTable">
                                <thead>
                                    <tr>
                                        <!--<th>Sl No.</th>-->
                                        <th>Name</th>
                                        <th>Email</th>                                        
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <!--<th>Sl No.</th>-->
                                        <th>Name</th>
                                        <th>Email</th>                                       
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php foreach($users as $key => $user):?>
                                    <tr>
                                        <!--<td>01</td>-->
                                        <td><?php echo $user['first_name'].' '.$user['last_name'] ?></td>
                                        <td><?php echo $user['email']?></td>
                                        <td><button class="btn btn-xs btn-danger delete" id="<?php echo $user['id']?>">Delete</button></td>
                                    </tr>
                                <?php endforeach;?> 
                                   
                                </tbody>
                            </table>
                             
            <div class="custompagination" style="float:right;"> <?php echo $paginglinks; ?></div>
			<div class="pagination" style="float:left;"> <?php echo (!empty($pagermessage) ? $pagermessage : ''); ?></div>
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
				$('#user_container').html(data);	

			}
				 
		   });
	});
	
	
	
  });