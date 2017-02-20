 <!-- Start header section -->
  <header id="aa-header">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-area">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-left">
                  <div class="aa-telephone-no">
                    <span class="fa fa-phone"></span>
                    +44 75986 79168
                  </div>
                  <div class="aa-email hidden-xs">
                    <span class="fa fa-envelope-o"></span> info@indianlandmarket.com
                  </div>
                </div>              
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-right">
               <?php if(!empty($username)) {?> <a class="btn btn-success  btn-xs" >Hi <?php echo $username?> </a><?php }?>					&nbsp;|&nbsp;
                
                 <a class="btn btn-success  btn-xs" href="<?php echo site_url('post-property');?>">Add Your Property</a>&nbsp;|&nbsp;
                  <?php if(empty($username)) {?>
                  <a href="<?php echo site_url()."register-us" ?>" class="aa-register">Register</a>
                  <!--<a href="signin.php" class="aa-login">Login</a>-->
                  
                  <a href="<?php echo site_url()."login" ?>" class="aa-register" style="border-right:none">Login</a>
                  <?php }else{?>
                  <a href="<?php echo site_url()."logout" ?>" class="aa-register" style="border-right:none">Logout</a>
                  <?php }?>
                  <?php if(!empty($username)) {?>
                  <a href="<?php echo site_url()."myaccount" ?>" class="aa-register" style="border-right:none">My account</a><?php }?>
                  <!--<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">-->
    	  <!--<div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				  <form action="my-account.php">
					<input type="text" name="user" placeholder="Username">
					<input type="password" name="pass" placeholder="Password">
					<input  type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div class="login-help">
					<a href="#">Register</a> - <a href="#">Forgot Password</a>
				  </div>
				</div>
			</div>
		  </div>-->
   
                  
                  <!--login ends-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header section -->

  <!-- Start menu section -->
  <section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                               
          <!-- Text based logo -->
           <a class="navbar-brand aa-logo" href="<?php echo base_url(); ?>">Indian Land <span>Market</span></a>
           <!-- Image based logo -->
           <!-- <a class="navbar-brand aa-logo-img" href="<?php echo base_url(); ?>"><img src="img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
             <li>
              <a href="<?php echo site_url()."properties?purpose=sell"?>">BUY</a>
              <!--<ul class="dropdown-menu" role="menu">                
                <li><a href="properties.php">Property for sale</a></li>
                <li><a href="properties.php">New homes for sale</a></li> 
                <li><a href="properties.php">Property valuation </a></li> 
                <li><a href="properties.php">Investors</a></li> 
                <li><a href="properties.php">Mortgages</a></li>                                                  
              </ul>-->
            </li>
             <li>
              <a href="<?php echo site_url()."properties?purpose=rent/lease"?>">RENT</a>
              <!--<ul class="dropdown-menu" role="menu">                
                <li><a href="properties.php">Property to rent</a></li>
                <li><a href="properties.php">Student property to rent</a></li>                                            
              </ul>-->
            </li> 
            <li><a href="<?php echo site_url()."paying-guest-properties"?>">PAYING GUESTS</a></li>                                        
            <li>
              <a href="<?php echo site_url()."properties?category=3"?>">PROJECTS</a>
              <!--<ul class="dropdown-menu" role="menu">                
                <li><a href="properties.php">Sold house prices</a></li>
                <li><a href="properties.php">Property valuation</a></li> 
                <li><a href="properties.php">Market trends</a></li>  
                <li><a href="properties.php">Price comparison report</a></li>                                             
              </ul>-->
            </li>
            <li>
              <a href="<?php echo site_url()."properties?category=4"?>">COMMERCIALS</a>
              <!--<ul class="dropdown-menu" role="menu">                
                <li><a href="properties.php">Commercial property to let</a></li>
                <li><a href="properties.php">Commercial property for sale</a></li>                                             
              </ul>-->
            </li>
            <li><a href="<?php echo site_url()."contact"?>">CONTACT</a></li> 
                     
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->