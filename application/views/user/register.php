
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Indian Land Market | Register</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    
    
    <!-- Font awesome -->
    <link href="<?php echo base_url()."assets/css/font-awesome.css"?>" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url()."assets/css/bootstrap.css"?>" rel="stylesheet">   
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/slick.css"?>">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/nouislider.css"?>">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/jquery.fancybox.css"?>" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="<?php echo base_url()."assets/css/theme-color/green-theme.css"?>" rel="stylesheet"><!-- Main style sheet -->
    <link href="<?php echo base_url()."assets/css/style.css"?>" rel="stylesheet">    
    <style>
		label.error {
			color: #f00;
    		margin-left: 0;
    		padding-left: 0;
			}
	</style>
   
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  
  
  <body>   
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form" style="position:relative;">
              <div class="aa-signin-form-title">
                <a class="aa-property-home" href="<?php echo site_url() ?>">Property Home</a>
                <h4>Create your account and Stay with us</h4>
              </div>
              <form id="contactform" action="<?php echo site_url()."/user/registration"?>" method="post">                                                 
                <div class="aa-single-field">
                  <label for="first_name">First Name <span class="required">*</span></label>
                  <input type="text" required aria-required="true" value="" name="first_name">
                </div>                
                <div class="aa-single-field">
                  <label for="last_name">Last Name <span class="required">*</span></label>
                  <input type="text" required aria-required="true" value="" name="last_name">
                </div>
                <div class="aa-single-field">
                  <label for="email">Email <span class="required">*</span></label>
                  <input type="email" required aria-required="true" value="" name="email">
                </div>
                <div class="aa-single-field">
                  <label for="country_code">Country code<span class="required">*</span></label>
                  <input type="text" required aria-required="true" value="" name="country_code">
                </div>
                <div class="aa-single-field">
                  <label for="contact_number">Contact number<span class="required">*</span></label>
                  <input type="text" required aria-required="true" value="" name="contact_number">
                </div>
                <div class="aa-single-field">
                  <label for="register_as">Register as<span class="required">*</span></label>
				<div class="radio col-sm-12">
                  <label class="radio-inline"><input type="radio" name="type" value="owner">Owner</label>
                  <label class="radio-inline"><input type="radio" name="type" value="broker">Broker</label>
                  <label class="radio-inline"><input type="radio" name="type" value="builder">Builder</label>
                  <label class="radio-inline"><input type="radio" name="type" value="consultant">Consultant</label>
                  <label class="radio-inline"><input type="radio" name="type" value="others">Others</label>
                </div>
                </div>
                <div class="aa-single-field">
                  <label for="password">Password <span class="required">*</span></label>
                  <input type="password" required aria-required="true" name="password" id="password"> 
                </div>
                <div class="aa-single-field">
                  <label for="confirm_password">Confirm Password <span class="required">*</span></label>
                  <input type="password" required aria-required="true" name="confirm_password"> 
                </div>
                <div class="aa-single-field">
                  <label for="checkboxes-0">
                  <input type="checkbox" name="terms" id="checkboxes-0" value="">
                  <small style="color: #000">By clicking below you agreeing to the <a href="<?php echo site_url()."/terms"?>">Terms and Conditions</a> of Indian Land Market</small> </label> 
                </div>
            
                <div class="aa-single-submit">
                  <input type="submit" value="Create Account" name="submit">
                  <p>Already registered ? <a href="<?php echo site_url()."/login" ?>">Login here</a></p>
                  <a href="<?php echo site_url() ?>" style="position:absolute;top: 0;right: 0;" class="btn btn-sm btn-success"><i class="fa fa-close"></i></a>                    
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 

 <style>
		label.error {
			color: #F00;

		}
	</style>
  <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script>     
  <script src="<?php echo base_url()."assets/js/validate.js"?>"></script>   
  <!--<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>-->
  <!--<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>-->
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url()."assets/js/bootstrap.js"?>"></script>   
  <!-- slick slider -->
  <script type="text/javascript" src="<?php echo base_url()."assets/js/slick.js"?>"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="<?php echo base_url()."assets/js/nouislider.js"?>"></script>
   <!-- mixit slider -->
  <script type="text/javascript" src="<?php echo base_url()."assets/js/jquery.mixitup.js"?>"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="<?php echo base_url()."assets/js/jquery.fancybox.pack.js"?>"></script>
  <!-- Custom js -->
  <script src="<?php echo base_url()."assets/js/custom.js"?>"></script> 
  <script> 
  $(function() { 
  //alert('sdf');
	 /* $("#contactform").validate({ //alert('dfsdf);
	  rules: {                   
	   password :"required",
	   confirm_password:{
		equalTo: "#password"
		  }  
		 },                             
		 messages: {
		  password :" Enter Password",
		  confirm_password :" Enter Confirm Password Same as Password"
		 }
	 });*/
	 
	 /*jQuery.validator.setDefaults({
  	 debug: true,
  	 success: "valid"
});
$( "#contactform" ).validate({
  rules: {
    password: "required",
    confirm_password: {
      equalTo: "#password"
    }
  }
});*/
	 
  //});-->
  var SITE_URL = "<?php echo site_url();?>";
  $("#contactform").validate({
    rules: {
            first_name: "required",
            last_name: "required",
            terms:"required",
            country_code:"required",
			email: 
          	{
            required: true,
            email: true,
			remote:{
				url: SITE_URL+"/checkemailexist",
				type: "post"
				}
          	},
			type:"required",
		    contact_number:{
				required: true,
                minlength: 10
			},
           password: {
                required: true,
                minlength: 5
            },
			confirm_password: {
      			equalTo: "#password"
    		}
           
        },
    messages: {
            first_name: "Please enter your first name",
            last_name:"please enter your last name",
			'email':{
				required: "Please enter your email address",
				email: "Please enter a valid email address!",
				remote: "The email is already exist!"
			},
			type:"please select a type",
			contact_number:{
				required: "please enter your contact number",
				minlength:"Your contact number must be at 10 digits long"
			},
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
			confirm_password:"Enter Confirm Password Same as Password",
      terms:"Please accept the terms and condition",
      country_code:"Please enter your country code"
           
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
 </script> 
  
</body>
</html>