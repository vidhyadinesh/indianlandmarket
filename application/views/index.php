<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Indian Land Market | Home</title>
    
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
    <link id="switcher" href="<?php echo base_url()."assets/css/theme-color/green-theme.css"?>" rel="stylesheet">     

    <!-- Main style sheet -->
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
  <body class="aa-price-range">  
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="pulse"></div>
  </div>
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

 <?php include("header.php"); ?>

  <!-- Start slider  -->
  <section id="aa-slider">
    <div class="aa-slider-area"> 
      <!-- Top slider -->
      <div class="aa-top-slider">
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="<?php echo base_url()."assets/img/slider/3.jpg"?>" alt="img">
        </div>
        <!-- / Top slider single slide -->
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="<?php echo base_url()."assets/img/slider/2.jpg"?>" alt="img">
        </div>
        <!-- / Top slider single slide -->
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="<?php echo base_url()."assets/img/slider/1.jpg"?>" alt="img">          
        </div>
        <!-- / Top slider single slide -->       
         <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="<?php echo base_url()."assets/img/slider/5.jpg"?>" alt="img">          
        </div>
        <!-- / Top slider single slide -->        
         <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="<?php echo base_url()."assets/img/slider/4.jpg"?>" alt="img">          
        </div>
        <!-- / Top slider single slide -->
         <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="<?php echo base_url()."assets/img/slider/6.jpg"?>" alt="img">          
        </div>
        <!-- / Top slider single slide -->
      </div>
    </div>
    <!--<div class="bannerad"><img src="img/Banner-Ad-Horizontal-Buying-a-Home.jpg" width="728" height="90" alt=""/></div>-->
  </section>
  <!-- End slider  -->

  <!-- Advance Search -->
  <?php if(isset($verification_msg)){?>
    <div class="col-md-6 col-xs-12">
    <?php echo $verification_msg?>
    </div>
   <?php }?>
  <div class="error"> <?php echo $this->session->flashdata('message');?> </div>
  <section id="aa-advance-search">
    <div class="container">
      <div class=" col-md-8 col-md-offset-2">
        
      <div class="aa-advance-search-area">
        <div class="panel with-nav-tabs">
                <div class="panel-heading">
                        <ul class="nav nav-tabs" id="category">
                            <li data-interest = "1" class="active"><a href="#tab1default" data-toggle="tab">HOUSE</a></li>
                            <li data-interest = "2"><a href="#tab2default" data-toggle="tab">LAND</a></li>
                            <li data-interest = "3"><a href="#tab3default" data-toggle="tab">PROJECTS</a></li>
                             <li data-interest = "4"><a href="#tab4default" data-toggle="tab">COMMERCIALS</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        
                        <div class="tab-pane fade in active" id="tab1default">
                            
                            <div class="form">
                              <div class="aa-advance-search-top form-group" style="margin-bottom: 0;">
                              <!--<form action="advanced-search.php" method="get" >-->
                                <div class="row">
                                  <div class="col-md-12">
                                  
                                    <div class="aa-single-advance-search">
                                 
                                    <div class="col-sm-9">
                                    <div class="banner_search_inner_box_search">
                                    
                                    <div class="input-group">
                                <!--<input type="text" name="search" class="search" id="searchid" onkeyup="getshows();"  value="" placeholder="Enter a City,Locality" autocomplete="off">-->
                                 <input type="text" name="search" class="search" id="searchid" onclick="getshows('searchid');"  value="" placeholder="Enter a City,Locality" autocomplete="off" style="width: 100%;">
                                 <input id="location" class="location" value="" type="hidden" placeholder="location" style="width: 161px;" disabled>
         								         <input type="hidden" name="lat" value="" id="lat">
         								         <input type="hidden" name="lng" value="" id="lng">
                                <!--<div class="input-group-btn bs-dropdown-to-select-group">
                                    <button type="button" class="btn btn-default dropdown-toggle as-is bs-dropdown-to-select" data-toggle="dropdown">
                                        <span data-bind="bs-drp-sel-label">Select...</span>
                                        <input type="hidden" name="selected_value" data-bind="bs-drp-sel-value" value="">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" style="">
                                        <li data-value="1"><a href="#">BUY</a></li>
                                        <li data-value="2"><a href="#">RENT</a></li>
                                    </ul>
                                </div>-->
                                <div class="input-group-btn bs-dropdown-to-select-group">
                                 <select id="house_purpose" name="purpose" class="form-control" style="width: 150px;">
                                   <option selected="" value="">Select</option>
                                   <option value="sell">Buy</option>
                                   <option value="rent/lease">Rent</option>
                                   <!--<option value="paying guest">Paying guest</option>-->
                                 </select>
                               </div>
                            </div>
                                    <div id="result"></div>
                                    </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                    <div class="aa-single-advance-search">
                                      <input class="aa-search-btn" type="button" value="SEARCH" id="house_search">
                                    </div>
                                    </div>
                                      <div class="col-md-12"> 
                                       <div id="drope_box">
                                    
                                             <div class="form ">
                                                <div class="form-group search-features" style="padding-bottom:10px;">
                                                    <div class="row">
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="master_rooms" name="">
                                                            <option selected="" value="">Master rooms</option>
                                                            <?php for ($i=1; $i<=10; $i++){ ?>
                                                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                              <?php }?>
                                                          </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="attached_bathrooms" name="">
                                                            <option selected="" value="">Attached bathrooms</option>
                                                            <?php for ($i=1; $i<=10; $i++){ ?>
                                                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                              <?php }?>
                                                          </select>
                                                          </div>
                                                          </div>                                                     
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="floor_type" name="">
                                                          <option value="">Floor type</option>
                                                            <option value="granite">Granite</option>
                        									<option value="marble">Marble</option>
                        									<option value="ceramic">Ceramic</option>
                        									<option value="stone">Stone</option>
                        									<option value="wood">Wood</option>
                        									<option value="laminate">Laminate</option>
                        									<option value="synthetic">Synthetic</option>
                        									<option value="others">Others</option>
                                                         </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="house_search_radius">
                                                            <option value="" selected>Search radius</option>
                                                            <option value="5">5 miles</option>
                                                            <option value="10">10 miles</option>
                                                            <option value="15">15 miles</option>
                                                            <option value="20">20 miles</option>
                                                            </select>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                              </div>
                                    
                                    </div>
                                       <div class="accordion" id="accordion1">
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">
                                            <h6><i class="fa fa-plus-circle"></i> Advanced Search Options</h6>
                                            </a>
                                            </div>
                                            <div id="collapseOne" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                   <div class="col-sm-12">            
                                                   <div class="h5">Other Features</div>    
                                                   <div class="clearfix"></div> 
                                                   
                                                   <?php foreach($home_features as $homefeature):?>
                                                       <div class="checkbox col-md-3">                                         
                                                        <label for="<?php echo $homefeature->id ?>">
                                                          <input type="checkbox" name="home_features" id="<?php echo $homefeature->id ?>" value="<?php echo $homefeature->id ?>">
                                                          <?php echo $homefeature->feature?>
                                                        </label>
                                                        </div>
                                                    
                                                    <?php endforeach;?>
                                                            
                                                    
                                                   </div>
                                            </div>
                                            </div>
                                        </div> 
                                    </div>                                    
                                    
                                       
                                        </div>
                                    </div>
                                  </div>
                                  
                                  </div>
                             <!-- </form>-->  
                              </div>
                            </div>
 
                        </div>
                        <div class="tab-pane fade" id="tab2default">
                        
                           <div class="form">
                              <div class="aa-advance-search-top form-group" style="margin-bottom: 0;">
                              <!--<form action="advanced-search.php" method="get" >-->
                                <div class="row">
                                  <div class="col-md-12">
                                  
                                    <div class="aa-single-advance-search">
                                 
                                    <div class="col-sm-9">
                                    <div class="banner_search_inner_box_search">
                                    
                                    <div class="input-group">
                                <input type="text" name="search" class="search" id="searchid2" onclick="getshows('searchid2');"  value="" placeholder="Enter a City,Locality" autocomplete="off" style="width: 100%;">
                                <!--<div class="input-group-btn bs-dropdown-to-select-group">
                                    <button type="button" class="btn btn-default dropdown-toggle as-is bs-dropdown-to-select" data-toggle="dropdown">
                                        <span data-bind="bs-drp-sel-label">Select...</span>
                                        <input type="hidden" name="selected_value" data-bind="bs-drp-sel-value" value="">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" style="">
                                        <li data-value="1"><a href="#">BUY</a></li>
                                        <li data-value="2"><a href="#">RENT</a></li>
                                    </ul>
                                </div>-->
                                <div class="input-group-btn bs-dropdown-to-select-group">
                                 <select id="land_purpose" name="land_purpose" class="form-control" style="width: 150px;">
                                   <option selected="" value="">Select</option>
                                   <option value="sell">Buy</option>
                                   <option value="rent/lease">Rent</option>
                                   <option value="paying guest">Paying guest</option>
                                 </select>
                               </div>
                            </div>
                                    <div id="result"></div>
                                    </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                    <div class="aa-single-advance-search">
                                      <input class="aa-search-btn" type="button" value="SEARCH" id="land_search">
                                    </div>
                                    </div>
                                      <div class="col-md-12"> 
                                       <div id="drope_box">
                                    
                                             <div class="form ">
                                                <div class="form-group search-features" style="padding-bottom:10px;">
                                                    <div class="row">
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="land_type" name="land_type" class="form-control">
                                                            <option selected="" value="">Type</option>
                                                            <option value="cultivation">Cultivation</option>
                                                            <option value="bare_land">Bare land</option>
                                                          </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="water_availability" name="water_availability" class="form-control"		>
                                                            <option selected="" value="">water availability</option>
                                                            <option value="well">Well</option>
                                                            <option value="pipe">Pipe</option>
                                                            <option value="canal">Canal</option>
                                                          </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="land_position" name="land_position" class="form-control">
                                                            <option selected="" value="">Land position</option>
                                                            <option value="lower">Lower</option>
                                                            <option value="higher">Higher</option>
                                                            <option value="slanting">Slanting</option>
                                                            <option value="uneven">Uneven</option>
                                                          </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="land_search_radius">
                                                            <option value="" selected>Search radius</option>
                                                            <option value="5">5 miles</option>
                                                            <option value="10">10 miles</option>
                                                            <option value="15">15 miles</option>
                                                            <option value="20">20 miles</option>
                                                         </select>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                              </div>
                                    
                                    </div>
                                       <div class="accordion" id="accordion2">
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapsetwo">
                                            <h6><i class="fa fa-plus-circle"></i>  Advanced Search Options </h6>
                                            </a>
                                            </div>
                                            <div id="collapsetwo" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                   <div class="col-sm-12">            
                                                   <div class="h5">Other Features</div>    
                                                   <div class="clearfix"></div> 
                                                   <?php foreach($land_features as $landfeature):?>
                                                       <div class="checkbox col-md-3">                                         
                                                        <label for="<?php echo $landfeature->id ?>">
                                                          <input type="checkbox" name="land_features" id="<?php echo $landfeature->id ?>" value="<?php echo $landfeature->id ?>">
                                                          <?php echo $landfeature->feature?>
                                                        </label>
                                                        </div>
                                                    
                                                    <?php endforeach;?>
                                                            
                                                    
                                                   </div>
                                            </div>
                                            </div>
                                        </div> 
                                    </div>                                    
                                    
                                       
                                        </div>
                                    </div>
                                  </div>
                                  
                                  </div>
                              <!--</form>-->  
                              </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3default">
                        
                            <div class="form">
                              <div class="aa-advance-search-top form-group" style="margin-bottom: 0;">
                             <!-- <form action="advanced-search.php" method="get" >-->
                                <div class="row">
                                  <div class="col-md-12">
                                  
                                    <div class="aa-single-advance-search">
                                 
                                    <div class="col-sm-9">
                                    <div class="banner_search_inner_box_search">
                                    
                                    <div class="input-group">
                                <input type="text" name="search" class="search" id="searchid3" onclick="getshows('searchid3');"  value="" placeholder="Enter a City,Locality" autocomplete="off" style="width: 100%;">
                                <!--<div class="input-group-btn bs-dropdown-to-select-group">
                                    <button type="button" class="btn btn-default dropdown-toggle as-is bs-dropdown-to-select" data-toggle="dropdown">
                                        <span data-bind="bs-drp-sel-label">Select...</span>
                                        <input type="hidden" name="selected_value" data-bind="bs-drp-sel-value" value="">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" style="">
                                        <li data-value="1"><a href="#">BUY</a></li>
                                        <li data-value="2"><a href="#">RENT</a></li>
                                    </ul>
                                </div>-->
                                <div class="input-group-btn bs-dropdown-to-select-group">
                                 <select id="project_purpose" name="project_purpose" class="form-control" style="width: 150px;">
                                   <option selected="" value="">Select</option>
                                   <option value="sell">Buy</option>
                                   <option value="rent/lease">Rent</option>
                                   <!-- <option value="paying guest">Paying guest</option> -->
                                 </select>
                               </div>
                            </div>
                                    <div id="result"></div>
                                    </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                    <div class="aa-single-advance-search">
                                      <input class="aa-search-btn" type="button" value="SEARCH" id="project_search">
                                    </div>
                                    </div>
                                      <div class="col-md-12"> 
                                       <div id="drope_box">
                                    
                                             <div class="form ">
                                                <div class="form-group search-features" style="padding-bottom:10px;">
                                                    <div class="row">
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="no_of_floor" name="">
                                                            <option selected="" value="">No of floor</option>
                                                            <?php for ($i=1; $i<=10; $i++){ ?>
                                                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                              <?php }?>
                                                          </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="no_of_tower" name="no_of_tower" class="form-control">
                                                              <option selected="" value="">No of tower</option>
                                                                <?php for ($i=1; $i<=10; $i++){ ?>
                                                                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                                  <?php }?>
                                                          </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="guest_rooms" name="guest_rooms" class="form-control">
                                                            <option selected="" value="">Guest rooms</option>
                                                            <?php for ($i=1; $i<=10; $i++){ ?>
                                                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                              <?php }?>
                                                          </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="project_search_radius">
                                                            <option value="" selected>Search radius</option>
                                                            <option value="5">5 miles</option>
                                                            <option value="10">10 miles</option>
                                                            <option value="15">15 miles</option>
                                                            <option value="20">20 miles</option>
                                                         </select>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                              </div>
                                    
                                    </div>
                                       <div class="accordion" id="accordion3">
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapsethree">
                                            <h6><i class="fa fa-plus-circle"></i> Advanced Search Options </h6>
                                            </a>
                                            </div>
                                            <div id="collapsethree" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                   <div class="col-sm-12">            
                                                   <div class="h5">Other Features</div>    
                                                   <div class="clearfix"></div> 
                                                   
                                                   <?php foreach($project_features as $projectfeature):?>
                                                       <div class="checkbox col-md-3">                                         
                                                        <label for="<?php echo $projectfeature->id ?>">
                                                          <input type="checkbox" name="project_features" id="<?php echo $projectfeature->id ?>" value="<?php echo $projectfeature->id ?>">
                                                          <?php echo $projectfeature->feature?>
                                                        </label>
                                                        </div>
                                                    
                                                    <?php endforeach;?>         
                                                                                                      
                                                    
                                                   </div>
                                            </div>
                                            </div>
                                        </div> 
                                    </div>                                    
                                    
                                       
                                        </div>
                                    </div>
                                  </div>
                                  
                                  </div>
                              <!--</form>-->  
                              </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab4default">
                            <div class="form">
                              <div class="aa-advance-search-top form-group" style="margin-bottom: 0;">
                              <!--<form action="advanced-search.php" method="get" >-->
                                <div class="row">
                                  <div class="col-md-12">
                                  
                                    <div class="aa-single-advance-search">
                                 
                                    <div class="col-sm-9">
                                    <div class="banner_search_inner_box_search">
                                    
                                    <div class="input-group">
                                <input type="text" name="search" class="search" id="searchid4" onclick="getshows('searchid4');"  value="" placeholder="Enter a City,Locality" autocomplete="off" style="width: 100%;">
                                <!--<div class="input-group-btn bs-dropdown-to-select-group">
                                    <button type="button" class="btn btn-default dropdown-toggle as-is bs-dropdown-to-select" data-toggle="dropdown">
                                        <span data-bind="bs-drp-sel-label">Select...</span>
                                        <input type="hidden" name="selected_value" data-bind="bs-drp-sel-value" value="">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" style="">
                                        <li data-value="1"><a href="#">BUY</a></li>
                                        <li data-value="2"><a href="#">RENT</a></li>
                                    </ul>
                                </div>-->
                                <div class="input-group-btn bs-dropdown-to-select-group">
                                 <select id="commercial_purpose" name="commercial_purpose" class="form-control" style="width: 150px;">
                                   <option selected="" value="">Select</option>
                                   <option value="sell">Buy</option>
                                   <option value="rent/lease">Rent</option>
                                   <!-- <option value="paying guest">Paying guest</option> -->
                                 </select>
                               </div>
                            </div>
                                    <div id="result"></div>
                                    </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                    <div class="aa-single-advance-search">
                                      <input class="aa-search-btn" type="button" value="SEARCH" id="commercial_search">
                                    </div>
                                    </div>
                                      <div class="col-md-12"> 
                                       <div id="drope_box">
                                    
                                             <div class="form ">
                                                <div class="form-group search-features" style="padding-bottom:10px;">
                                                    <div class="row">
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="type" name="type" class="form-control">
                                                            <option selected="" value="">Type</option>
                                                            <option value="fully-furnished">Fully furnished</option>
                                                            <option value="partially-furnished">Partially furnished</option>
                                                            <option value="free-space">Free space</option>
                                                          </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="workstations" name="workstations" class="form-control">
                                                          <option selected="" value="">Workstations</option>
                                                            <?php for ($i=1; $i<=10; $i++){ ?>
                                                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                             <?php }?>
                                                          </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="meeting_rooms" name="meeting_rooms" class="form-control">
                                                          <option selected="" value="">Meeting rooms</option>
                                                            <?php for ($i=1; $i<=10; $i++){ ?>
                                                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                             <?php }?>
                                                          </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="commercial_search_radius">
                                                            <option value="" selected>Search radius</option>
                                                            <option value="5">5 miles</option>
                                                            <option value="10">10 miles</option>
                                                            <option value="15">15 miles</option>
                                                            <option value="20">20 miles</option>
                                                            </select>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                              </div>
                                    
                                    </div>
                                       <div class="accordion" id="accordion4">
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapsefour">
                                            <h6><i class="fa fa-plus-circle"></i> Advanced Search Options </h6>
                                            </a>
                                            </div>
                                            <div id="collapsefour" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                   <div class="col-sm-12">            
                                                   <div class="h5">Other Features</div>    
                                                   <div class="clearfix"></div> 
                                                            
                                                   <?php foreach($commercial_features as $commercialfeature):?>
                                                       <div class="checkbox col-md-3">                                         
                                                        <label for="<?php echo $commercialfeature->id ?>">
                                                          <input type="checkbox" name="commercial_features" id="<?php echo $commercialfeature->id ?>" value="<?php echo $commercialfeature->id ?>">
                                                          <?php echo $commercialfeature->feature?>
                                                        </label>
                                                        </div>
                                                    
                                                    <?php endforeach;?> 
                                                   
                                                                                                    
                                                    
                                                   </div>
                                            </div>
                                            </div>
                                        </div> 
                                    </div>                                    
                                    
                                       
                                        </div>
                                    </div>
                                  </div>
                                  
                                  </div>
                              <!--</form>  -->
                              </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
         
      </div>
      
      </div>
    </div>
  </section>
  <!-- / Advance Search -->

  <!-- About us -->
  <section id="aa-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        
          <div class="aa-about-us-area">
             <?php if(!empty($advertisements) && isset($advertisements['banner'])) {?>
             <a href="<?php echo $advertisements['banner']['link']?>"><img src="<?php echo base_url()."uploads/advertisement/".$advertisements['banner']['image'] ?>" width="100%" height="232px"></a>
          <?php }else{?>
				<img src="<?php echo base_url()."assets/img/bannerList.jpg" ?>" width="100%"><br><br>
           <?php } ?>


              <!--<div class="col-lg-12 panel panel-default page-header">
              <h4>Be the first to see new properties</h4>
              <p>Register with us to get instant property alerts as soon as a property hits Indian land market, save properties and searches, personalise content, and more...</p>
              <a href="#" class="btn btn-danger">Get property alerts</a>
              </div>
            <div class="row">
              <div class="col-md-5">
                <div class="aa-about-us-left">
                  <img src="img/about-us.png" alt="image">
                </div>
              </div>
              <div class="col-md-7">
                <div class="aa-about-us-right">
                  <div class="aa-title">
                    <h2>About Us</h2>
                    <span></span>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat ab dignissimos vitae maxime adipisci blanditiis rerum quae quos! Id at rerum maxime modi fugit vero corrupti, ad atque sit laborum ipsum sunt blanditiis suscipit odio, aut nostrum assumenda nobis rem a maiores temporibus non commodi laboriosam, doloremque expedita! Corporis, provident?</p>                  
                  <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>                    
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                  </ul>
                </div>
              </div>
            </div>-->
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / About us -->
<section id="aa-latest-property">
    <div class="container">
      <div class="aa-latest-property-area">
        <div class="aa-latest-properties-content">
          <div class="row">
            <div class="col-md-4">
              <?php if(!empty($advertisements) && isset($advertisements['bottom_first'])) {?>
             <a href="#"><img src="<?php echo base_url()."uploads/advertisement/".$advertisements['bottom_first']['image'] ?>" width="350px" height="150px"></a>
          <?php }else{?>
				<img class="img-responsive" src="http://placehold.it/350x150">
           <?php } ?>
            </div>
            <div class="col-md-4">
              <?php if(!empty($advertisements) && isset($advertisements['bottom_second'])) {?>
             <a href="#"><img src="<?php echo base_url()."uploads/advertisement/".$advertisements['bottom_second']['image'] ?>" width="350px" height="150px"></a>
          <?php }else{?>
				<img class="img-responsive" src="http://placehold.it/350x150">
           <?php } ?>
            </div>
            <div class="col-md-4">
              <?php if(!empty($advertisements) && isset($advertisements['bottom_third'])) {?>
             <a href="#"><img src="<?php echo base_url()."uploads/advertisement/".$advertisements['bottom_third']['image'] ?>" width="350px" height="150px"></a>
          <?php }else{?>
				<img class="img-responsive" src="http://placehold.it/350x150">
           <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Latest property -->
  <!--<section id="aa-latest-property">
    <div class="container">
      <div class="aa-latest-property-area">
        <div class="aa-title">
          <h2>Latest Properties</h2>
          <span></span>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>         
        </div>
        <div class="aa-latest-properties-content">
          <div class="row">
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="img/item/1.jpg" alt="img">
                </a>
                <div class="aa-tag for-sale">
                  For Sale
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>5 Rooms</span>
                    <span>2 Beds</span>
                    <span>3 Baths</span>
                    <span>1100 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="#">Appartment Title</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      $35000
                    </span>
                    <a href="#" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="img/item/2.jpg" alt="img">
                </a>
                <div class="aa-tag for-rent">
                  For Rent
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>5 Rooms</span>
                    <span>2 Beds</span>
                    <span>3 Baths</span>
                    <span>1100 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="#">Appartment Title</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      $11000
                    </span>
                    <a href="#" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="img/item/3.jpg" alt="img">
                </a>
                <div class="aa-tag sold-out">
                  Sold Out
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>5 Rooms</span>
                    <span>2 Beds</span>
                    <span>3 Baths</span>
                    <span>1100 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="#">Appartment Title</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      $15000
                    </span>
                    <a href="#" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="img/item/4.jpg" alt="img">
                </a>
                <div class="aa-tag for-sale">
                  For Sale
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>5 Rooms</span>
                    <span>2 Beds</span>
                    <span>3 Baths</span>
                    <span>1100 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="#">Appartment Title</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      $35000
                    </span>
                    <a href="#" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="img/item/5.jpg" alt="img">
                </a>                
                <div class="aa-tag sold-out">
                  Sold Out
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>5 Rooms</span>
                    <span>2 Beds</span>
                    <span>3 Baths</span>
                    <span>1100 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="#">Appartment Title</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      $11000
                    </span>
                    <a href="#" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="img/item/6.jpg" alt="img">
                </a>
                <div class="aa-tag for-rent">
                  For Rent
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>5 Rooms</span>
                    <span>2 Beds</span>
                    <span>3 Baths</span>
                    <span>1100 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="#">Appartment Title</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      $15000
                    </span>
                    <a href="#" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!-- / Latest property -->

  <!-- Service section -->
  <section id="aa-service">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="aa-service-area">
            <div class="aa-title">
              <h2>For Sellers</h2>
              <span></span>
            </div>
            <!-- service content -->
            <div class="aa-service-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-home"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="<?php echo site_url()."post-property" ?>">List Your Property</a></h4>
                      <p>Add your properties to sell or rent out as per its category and sub category.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-check"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="<?php echo site_url()."properties?purpose=sell"?>">Find prospective byers</a></h4>
                      <p>Find prospective buyers around the world and showcase the best in your properties.</p>
                    </div>
                  </div>
                </div>
                    </div>
                    </div>
                  </div>
                </div>
        <div class="col-md-6">
          <div class="aa-service-area">
            <div class="aa-title">
              <h2>For Buyers</h2>
              <span></span>
                    </div>
            <!-- service content -->
            <div class="aa-service-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-home"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="<?php echo site_url()."properties" ?>">Choose your dream property</a></h4>
                      <p>Choose from the wide range of properties across the globe.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-check"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="<?php echo site_url()."properties?purpose=sell"?>">Buy</a> /<a href="<?php echo site_url()."properties?purpose=rent/lease"?>"> Rent </a>/<a href="<?php echo site_url()."paying-guest-properties"?>"> PG listing</a></h4>
                      <p>Option to find properties to Buy or rent. Special zone for PG listing.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Latest blog -->
  <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <div class="aa-title">
              <h2>Tips to NRIs Buy/Sell Properties in Kerala</h2>
              <span></span>
              <p>Kerala is indeed the best choice for all NRI living in US, Europe, Canada and Middle East for doing their real estate business. Real estate is one of the fastest growing sectors which always attract the NRIs. Whenever an NRI plans to engage or invest in real estate in Kerala, make sure that he goes through proper channels. This is to ensure the authenticity of the land. Also the NRI can go through certain real estate websites so that he could obtain all the necessary details regarding the property viz. flats, homes, villas and apartments. </p>
            </div>
             <div class="text-center"><a class="aa-primary-btn " href="<?php echo site_url()."tips"?>" style="color: #009206;">More Tips</a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Latest blog -->

  <!-- Footer -->
  <?php include("footer.php"); ?>
  <!-- / Footer -->

 
  
  <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script>   
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
  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCQV0XNkk6SDcDoKfxxF0lPfSreU0w2FPU&sensor=false&amp;libraries=places&region=in" type="text/javascript"></script>
  
  <script>
/*---------------tab------------*/
  $('#searchid').blur(function() {
   if($(this).val() != ""){
        $("#drope_box").show();    
    }
    else{
        $("#drope_box").hide(); 
    }
});

 $('#searchid').focus(function() {
    $("#drope_box").show();
 });  
 
 /*---------------tab------------*/
  $('#searchid2').blur(function() {
   if($(this).val() != ""){
        $("#drope_box2").show();    
    }
    else{
        $("#drope_box2").hide(); 
    }
});

 $('#searchid2').focus(function() {
    $("#drope_box2").show();
 });  
 
 
 /*---------------tab------------*/
  $('#searchid3').blur(function() {
   if($(this).val() != ""){
        $("#drope_box3").show();    
    }
    else{
        $("#drope_box3").hide(); 
    }
});

 $('#searchid3').focus(function() {
    $("#drope_box3").show();
 });  
 
 
 /*---------------tab------------*/
  $('#searchid4').blur(function() {
   if($(this).val() != ""){
        $("#drope_box4").show();    
    }
    else{
        $("#drope_box4").hide(); 
    }
});

 $('#searchid4').focus(function() {
    $("#drope_box4").show();
 });  
 
  $(document).ready(function () {	  
	  var SITE_URL = "<?php echo site_url();?>";
	   $('#house_search').on('click', function() {
		   if($('#location').val() == ''){
			   alert('please select a city,state or locality');
		   }else{		   
		    var category = $('ul#category').find('li.active').data('interest');
		    var location = $('#location').val();
	  		var master_rooms = $('#master_rooms').val();
	  		var attached_bathrooms = $('#attached_bathrooms').val();
	  		var floor_type = $('#floor_type').val();
	  		var radius = $('#house_search_radius').val();
			var purpose = $('#house_purpose').val();
			var lat = $('#lat').val();
			var lng = $('#lng').val();

               var homeFeatures = [];
               $('input[name=home_features]:checked').map(function() {
                   homeFeatures.push($(this).val());
               });
			
			var querystring = 'purpose='+purpose+'&category='+category+'&location='+location+'&mr='+master_rooms+'&ab='+attached_bathrooms+'&ft='+floor_type+'&r='+radius+'&lat='+lat+'&lng='+lng+'&features='+homeFeatures+'';

	   window.location.href= SITE_URL+'properties/?'+querystring;
		   }
	   });
	  
	  
	  $('#land_search').on('click', function() {
		  
		  if($('#location').val() == ''){
			   alert('please select a city,state or locality');
		   }else{
		   
		    var category = $('ul#category').find('li.active').data('interest');
		    var location = $('#location').val();
	  		var land_type = $('#land_type').val();
	  		var land_position = $('#land_position').val();
	  		var water_availability = $('#water_availability').val();
	  		var radius = $('#land_search_radius').val();
			var purpose = $('#land_purpose').val();
			var lat = $('#lat').val();
			var lng = $('#lng').val();
              var landFeatures = [];
              $('input[name=land_features]:checked').map(function() {
                  landFeatures.push($(this).val());
              });
			
			var querystring = 'purpose='+purpose+'&category='+category+'&location='+location+'&landtype='+land_type+'&landpos='+land_position+'&water_availability='+water_availability+'&r='+radius+'&lat='+lat+'&lng='+lng+'&features='+landFeatures+'';

	   window.location.href= SITE_URL+'properties/?'+querystring;
	   
		   }
	   });
	   
	   $('#project_search').on('click', function() {
		   
		   if($('#location').val() == ''){
			   alert('please select a city,state or locality');
		   }else{
		    var category = $('ul#category').find('li.active').data('interest');
		    var location = $('#location').val();
	  		var floorno = $('#no_of_floor').val();
	  		var towerno = $('#no_of_tower').val();
	  		var guest_rooms = $('#guest_rooms').val();
	  		var radius = $('#project_search_radius').val();
			var purpose = $('#project_purpose').val();
			var lat = $('#lat').val();
			var lng = $('#lng').val();

               var projectFeatures = [];
               $('input[name=project_features]:checked').map(function() {
                   projectFeatures.push($(this).val());
               });
			
			var querystring = 'purpose='+purpose+'&category='+category+'&location='+location+'&floorno='+floorno+'&towerno='+towerno+'&guest_rooms='+guest_rooms+'&r='+radius+'&lat='+lat+'&lng='+lng+'&features='+projectFeatures+'';

	   		window.location.href= SITE_URL+'properties/?'+querystring;
		   }
	   });
	   
	   $('#commercial_search').on('click', function() {
		   
		   if($('#location').val() == ''){
			   alert('please select a city,state or locality');
		   }else{
		    var category = $('ul#category').find('li.active').data('interest');
		    var location = $('#location').val();
	  		var type = $('#type').val();
	  		var workstations = $('#workstations').val();
	  		var meeting_rooms = $('#meeting_rooms').val();
	  		var radius = $('#commercial_search_radius').val();
			var purpose = $('#commercial_purpose').val();
			var lat = $('#lat').val();
			var lng = $('#lng').val();

               var commercialFeatures = [];
               $('input[name=commercial_features]:checked').map(function() {
                   commercialFeatures.push($(this).val());
               });
			
			var querystring = 'purpose='+purpose+'&category='+category+'&location='+location+'&type='+type+'&workstations='+workstations+'&meeting_rooms='+meeting_rooms+'&r='+radius+'&lat='+lat+'&lng='+lng+'&features='+commercialFeatures+'';

	   		window.location.href= SITE_URL+'properties/?'+querystring;
		   }
	   });
	   
	   
  });
 
 function getshows(searchId){
	 initialize(searchId);	 
 }
 
 function initialize(searchId) {
	  //var input = document.getElementsByClassName('search');
      var input = document.getElementById(searchId);
      var autocomplete = new google.maps.places.Autocomplete(input);
	  //autocomplete.bindTo('bounds', map);
         var infowindow = new google.maps.InfoWindow();
         google.maps.event.addListener(autocomplete, 'place_changed', function (event) {
             infowindow.close();
             var place = autocomplete.getPlace();
			 //console.log(place);
             /*if (place.geometry.viewport) {
                 map.fitBounds(place.geometry.viewport);
             } else {
                 map.setCenter(place.geometry.location);
                 map.setZoom(17);
             }
             moveMarker(place.name, place.geometry.location);*/
             $('#lat').val(place.geometry.location.lat());
             $('#lng').val(place.geometry.location.lng());
			 
			 var addressData = place.address_components;			 
			 var addrLocation = [];
			 addressData.forEach(function(address) {				 
				 var addr = address.long_name;
				 addrLocation.push(addr);				 
			 });
			 addrLocation = JSON.stringify(addrLocation);
			 $('.location').val(addrLocation);
		 });
   }
   google.maps.event.addDomListener(window, 'load', initialize);
   
  </script>

  </body>
</html>