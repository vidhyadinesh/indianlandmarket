  <!-- Start Property header  -->
   <section id="aa-property-header-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Account Details</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>
            <li><a href="#">Properties</a></li>                
            <li class="active">Account Details</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Property header  -->
  <div class="clearfix"></div>
  <!-- Start content  -->
    <div class="container top-margin">
      <div class="row">
        <div class="col-md-6">
          <div class="well well-sm">
            <div class="row">
              
              <div class="col-md-12">
                <h4>
                  <?php echo $account['first_name'].' '.$account['last_name']?></h4>
               <!-- <small><cite title="San Francisco, USA">Liverpool, UK <i class="glyphicon glyphicon-map-marker">
                </i></cite></small>-->
                <p>
                  <i class="glyphicon glyphicon-envelope"></i><?php echo $account['email']?>
                  <br />
                  <i class="glyphicon glyphicon-phone"></i><?php echo $account['contact_no'] ?></p>
                </div>
  <div class="col-sm-6 text-center"> 
<a class="aa-secondary-btn" data-toggle="modal" data-target="#password">
  Change Password
</a>
  </div>
  <!--<div class="col-sm-6 text-center"> <a class="aa-secondary-btn" href="#">Edit Profile</a></div>-->
              


<!-- Modal -->
<div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Change your password</h4>
      </div>
      <div class="modal-body">
        <form id="changepassword" method="post">                                                 
                <div class="aa-single-field">
                  <label for="current_password">Enter your current password: <span class="required">*</span></label>
                  <input type="password" required aria-required="true" value="" name="current_password" id="current_password">
                </div>
                <div class="aa-single-field">
                  <label for="new_password">Enter your new password: <span class="required">*</span></label>
                  <input type="password" required aria-required="true" value="" name="new_password" id="new_password">
                </div>
                <div class="aa-single-field">
                  <label for="confirm_password">Enter your confirm password: <span class="required">*</span></label>
                  <input type="password" required aria-required="true" value="" name="confirm_password" id="confirm_password">
                </div>
                <!--<div class="aa-single-submit">
                  <input type="submit" value="submit" name="submit">                    
                </div>-->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Save changes" name="submit">  
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
      </form>
    </div>
    
    
  </div>
</div>     
            </div>
            </div>
          </div>
        
        <div class="col-md-3">
          <div class="well well-sm">
             <div class="text-center"> 
             <a class="aa-secondary-btn" href="<?php echo site_url()."/my-shortlisted-properties"?>">View Shortlist</a></div>
          </div>
          </div>
        <div class="col-md-3">
          <div class="well well-sm">
              <div class="text-center"> 
              <a class="aa-secondary-btn" href="<?php echo site_url()."/my-properties"?>">View Added Properties</a></div>
          </div>
          </div>
      </div>
        
        
      <div class="row voffsetbtm4">
        <div class="col-md-6">
        <?php if(!empty($advertisements) && isset($advertisements['left'])) {?>
             <a href="<?php echo $advertisements['left']['link']?>"><img src="<?php echo base_url()."uploads/advertisement/".$advertisements['left']['image'] ?>" class="img-responsive"></a>
          <?php }else{?>
				<img class="img-responsive" src="http://placehold.it/550x150">
           <?php } ?>
        </div>
         <div class="col-md-6"><?php if(!empty($advertisements) && isset($advertisements['right'])) {?>
             <a href="<?php echo $advertisements['right']['link']?>"><img src="<?php echo base_url()."uploads/advertisement/".$advertisements['right']['image'] ?>" class="img-responsive"></a>
          <?php }else{?>
				<img class="img-responsive" src="http://placehold.it/550x150">
           <?php } ?></div>
      </div>
    </div>
     
  <!-- / content  -->
  <script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script> 
  <script src="<?php echo base_url()."assets/js/validate.js"?>"></script>
 <script>
  $(document).ready(function () {
	  //alert('fgfd');
	  var SITE_URL = "<?php echo site_url();?>";
	  $("#changepassword").validate({ 
    rules: {
            current_password: "required",
            new_password: "required",
			confirm_password:"required",       
        },
    messages: {
            current_password: "Please enter your current password",
            new_password:"please enter you new password",
			confirm_password:"please enter your confirm password",         
        },
        
        submitHandler: function(form) {
			var currentPassword = $('#current_password').val();
			var newPassword = $('#new_password').val();
			$.ajax({
				url: SITE_URL+"/change-password",
				type: 'POST',
				data: {
					'current_password':currentPassword,
					'new_password':newPassword,
					//'confirm_password':$('#confirm_password').val(),					
				},
				success: function(response) {
					console.log(response);
					if(response == 'true'){
						updatePassword(newPassword);
					}else{
						alert('Your current password is not matching');
					}
					//alert(response);
					
					//console.log(response);	
				}            
        	});
        }
    });	
	
	
	function updatePassword(newPassword){
		$.ajax({
				url: SITE_URL+"/update-password",
				type: 'POST',
				data: {
					'new_password':newPassword,
					//'confirm_password':$('#confirm_password').val(),					
				},
				success: function(response) {
					//console.log(response);
					
					alert('Your password updated successfully');
					$('.modal-content').hide();
					//console.log(response);	
				}            
        	});
	}
		
  });
  </script>