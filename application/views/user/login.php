<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Indian Land Market | Signin</title>

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
                <a class="aa-property-home" href="index.php">Property Home</a>
                <h4>Log in to your account</h4>
              </div>
              
              <form class="loginform" action="<?php echo site_url()."/user/login"?>" method="post">
              
              <?php if(!empty($msg)) echo $msg;?>                                                 
                <div class="aa-single-field">
                  <label for="email">Email <span class="required">*</span></label>
                  <input type="email" required aria-required="true" value="" name="email">
                </div>
                <div class="aa-single-field">
                  <label for="password">Password <span class="required">*</span></label>
                  <input type="password" name="password"> 
                </div>                
                <div class="aa-single-submit">
                  <input type="submit" value="Login" class="aa-browse-btn" name="submit">  
                  <p>Don't Have A Account Yet? <a href="<?php echo site_url()."/register-us" ?>">CREATE NOW!</a></p>
                  <p><a href="<?php echo site_url()."/forgot-password" ?>">Forgot Password?</a></p>
                  <a href="<?php echo site_url() ?>" style="position:absolute;top: 0;right: 0;" class="btn btn-sm btn-success"><i class="fa fa-close"></i></a> 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script>   
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>   
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
  
  </body>
</html>