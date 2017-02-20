 <!--<link href="<?php /*?><?php echo base_url()."assets/css/style.css"?><?php */?>" rel="stylesheet">-->
 <!-- Start Property header  -->

  <section id="aa-property-header">
    <div >
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Properties Page</h2>
            <!-- <ol class="breadcrumb">
            <li><a href="<?php echo site_url();?>">HOME</a></li>            
            <li class="active">PROPERTIES</li>
          </ol> -->


   <section id="aa-advance-search">
    <div class="container">
      <div class=" col-md-8 ">
        
      <div class="aa-advance-search-area" style="margin-top: -157px;">
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
                                
                                 <input type="text" name="search" class="search" id="searchid" onclick="getshows('searchid');"  value="" placeholder="Enter a City,Locality" autocomplete="off" style="width: 100%;">
                                 <input id="advlocation" class="advlocation" value="" type="hidden" placeholder="location" style="width: 161px;" disabled>
                                 <input type="hidden" name="advlat" value="" id="advlat">
                                 <input type="hidden" name="advlng" value="" id="advlng">
                                
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
                                                          <select id="adv_master_rooms" name="adv_master_rooms">
                                                            <option selected="" value="">Master rooms</option>
                                                            <?php for ($i=1; $i<=10; $i++){ ?>
                                                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                              <?php }?>
                                                          </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="adv_attached_bathrooms" name="adv_attached_bathrooms">
                                                            <option selected="" value="">Attached bathrooms</option>
                                                            <?php for ($i=1; $i<=10; $i++){ ?>
                                                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                              <?php }?>
                                                          </select>
                                                          </div>
                                                          </div>                                                     
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="adv_floor_type" name="adv_floor_type">
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
                                                          <select id="adv_land_type" name="adv_land_type" class="form-control">
                                                            <option selected="" value="">Type</option>
                                                            <option value="cultivation">Cultivation</option>
                                                            <option value="bare_land">Bare land</option>
                                                          </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="adv_water_availability" name="adv_water_availability" class="form-control"    >
                                                            <option selected="" value="">water availability</option>
                                                            <option value="well">Well</option>
                                                            <option value="pipe">Pipe</option>
                                                            <option value="canal">Canal</option>
                                                          </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="adv_land_position" name="adv_land_position" class="form-control">
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
                                                          <select id="adv_no_of_floor" name="adv_no_of_floor">
                                                            <option selected="" value="">No of floor</option>
                                                            <?php for ($i=1; $i<=10; $i++){ ?>
                                                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                              <?php }?>
                                                          </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="adv_no_of_tower" name="adv_no_of_tower" class="form-control">
                                                              <option selected="" value="">No of tower</option>
                                                                <?php for ($i=1; $i<=10; $i++){ ?>
                                                                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                                  <?php }?>
                                                          </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="adv_guest_rooms" name="adv_guest_rooms" class="form-control">
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
                                                          <select id="adv_com_type" name="adv_com_type" class="form-control">
                                                            <option selected="" value="">Type</option>
                                                            <option value="fully-furnished">Fully furnished</option>
                                                            <option value="partially-furnished">Partially furnished</option>
                                                            <option value="free-space">Free space</option>
                                                          </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="adv_workstations" name="adv_workstations" class="form-control">
                                                          <option selected="" value="">Workstations</option>
                                                            <?php for ($i=1; $i<=10; $i++){ ?>
                                                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                             <?php }?>
                                                          </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="adv_meeting_rooms" name="adv_meeting_rooms" class="form-control">
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
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Property header  -->

  <!-- Start Properties  -->
  <?php /*?><?php if($search_file){?>
  	<?php include("advanced-$search_file-search.php"); ?>
  <?php }?><?php */?> 
   
  <section id="aa-properties">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="aa-properties-content">
            <!-- start properties content head -->
            <div class="aa-properties-content-head">              
              <div class="aa-properties-content-head-left">
                <form action="" class="aa-sort-form">
                  <label for="">Sort by</label>
                  <select id="sort_property">
                    <option value="" selected="Default">Default</option>
                    <option value="title">Title</option>
                    <option value="estimated_price">Price</option>
                  <!--  <option value="4">Date</option>-->
                  </select>
                </form>
                <form action="" class="aa-show-form">
                  <label for="">Show</label>
                  <select id="per_page">
                    <option value="10" selected>10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                  </select>
                </form>
              </div>
              <input type="hidden" name="purpose" value="<?php echo $purpose ?>" id="purpose">
              <input type="hidden" name="category" value="<?php echo $category ?>" id="category">
              <input type="hidden" name="subcategory" value="<?php echo $subcategory ?>" id="subcategory">
              <input type="hidden" name="country" value="<?php echo $country ?>" id="country">
              <input type="hidden" name="state" value="<?php echo $state ?>" id="state">
              <input type="hidden" name="district" value="<?php echo $district ?>" id="district">
             <!-- <input type="hidden" name="location" value="" id="location">-->
              <input type="hidden" name="from_price" value="<?php echo $from_price ?>" id="from_price">
              <input type="hidden" name="to_price" value="<?php echo $to_price ?>" id="to_price">
              <input type="hidden" name="from_sqft" value="<?php echo $from_sqft ?>" id="from_sqft">
              <input type="hidden" name="to_sqft" value="<?php echo $to_sqft ?>" id="to_sqft">
              
              <input type="hidden" name="radius" value="<?php echo $radius ?>" id="radius">
              <input type="hidden" name="lat" value="<?php echo $lat ?>" id="lat">
              <input type="hidden" name="lng" value="<?php echo $lng ?>" id="lng">
              <input type="hidden" name="loc" value="<?php echo $loc ?>" id="loc">

              <input type="hidden" name="features" value="<?php echo $features ?>" id="features">

              
               <input type="hidden" name="master_rooms" value="<?php echo $master_rooms ?>" id="master_rooms">
               <input type="hidden" name="attached_bathrooms" value="<?php echo $attached_bathrooms ?>" id="attached_bathrooms">
               <input type="hidden" name="floor_type" value="<?php echo $floor_type ?>" id="floor_type">
               <?php /*?><input type="hidden" name="attached_bathrooms" value="<?php if(isset($attached_bathrooms)){ echo $attached_bathrooms ?> <?php } ?>" id="attached_bathrooms">
               <input type="hidden" name="common_bathrooms" value="<?php if(isset($common_bathrooms)){ echo $common_bathrooms ?> <?php } ?>" id="common_bathrooms">
               <input type="hidden" name="no_of_gates" value="<?php if(isset($no_of_gates)){ echo $no_of_gates ?> <?php } ?>" id="no_of_gates"><?php */?>
               
               
                <input type="hidden" name="land_type" value="<?php echo $land_type ?>" id="land_type">
                <input type="hidden" name="land_position" value="<?php echo $land_position ?>" id="land_position">
                <input type="hidden" name="water_availability" value="<?php echo $water_availability ?>" id="water_availability">
                
                <input type="hidden" name="floorno" value="<?php echo $floorno ?>" id="floorno">
                <input type="hidden" name="towerno" value="<?php echo $towerno ?>" id="towerno">
                <input type="hidden" name="guest_rooms" value="<?php echo $guest_rooms ?>" id="guest_rooms">
                
                <input type="hidden" name="type" value="<?php echo $type ?>" id="type">
                <input type="hidden" name="workstations" value="<?php echo $workstations ?>" id="workstations">
                <input type="hidden" name="meeting_rooms" value="<?php echo $meeting_rooms ?>" id="meeting_rooms">
                    
              <div class="aa-properties-content-head-right">
                <a id="aa-grid-properties" href="#"><span class="fa fa-th"></span></a>
                <a id="aa-list-properties" href="#"><span class="fa fa-list"></span></a>
              </div>            
            </div>
            <!-- Start properties content body -->
            <div class="aa-properties-content-body" id="properties_container">
            
            </div>
        </div>
        <!-- Start properties sidebar -->
        
      </div>
      <div class="col-md-3">

      <aside class="aa-properties-sidebar">

            <div class="aa-properties-single-sidebar">
              <h3>Properties Search</h3>
              <form action="">
               
              <!-- <input id="location" class="location" value="" type="hidden" placeholder="location" style="width: 161px;" disabled>
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Type Your Location" id="searchTextField">
                </div>  -->
                <div class="aa-single-advance-search">
                  <select id="filter_category" name="">
                   <option selected="" value="">Category</option>
                   <?php foreach($categories as $row):?>
                    <option value="<?php echo $row->id?>"><?php echo $row->category?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                <div class="aa-single-advance-search">
                  <select id="prop_subCategory" name="">
                    <option selected="" value="">Property Sub Type</option>                    
                  </select>
                </div>

                <div class="aa-single-advance-search">
                  <select id="filter_type" name="">
                    <option selected="" value="">Purpose</option>
                    <option value="sell">Buy</option>
                    <option value="rent/lease">Rent</option>
                  </select>
                </div>
                <?php /*?><div class="aa-single-advance-search">
                  <select id="country" name="">
                    <option selected="" value="">Country</option>
                    <?php foreach($countries as $row):?>                      
                      <option value="<?php echo $row['country']?>"><?php echo $row['country']?></option>
          <?php endforeach;?>
                  </select>
                </div><?php */?>



               <!--  <div class="aa-single-filter-search">
                  <span>AREA (SQ)</span>
                  <span>FROM</span>
                  <span id="skip-value-lower" class="example-val">30.00</span>
                  <span>TO</span>
                  <span id="skip-value-upper" class="example-val">100.00</span>
                  <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                  </div>                  
                </div> -->

                <div class="aa-single-advance-search">
                <label>AREA (SQ)</label>
                  <div class="row">
                    <div class="col-sm-6">
                     <span>FROM</span>
                      <select id="skip-value-lower" name="">
                        
                        <option selected="selected" value="100">100</option>
                        <option value="500">500</option>
                        <option value="1000">1,000</option>
                        <option value="2500">2,500</option>
                        <option value="5000">5,000</option>
                        <option value="10000">10,000</option>
                        <option value="20000">20,000</option>
                        <option value="25000">25,000</option>
                        <option value="35000">35,000</option>
                        <option value="50000">50,000</option>
                        <option value="75000">75,000</option>
                        <option value="100000">1,00,000</option>
                        <option value="200000">2,00,000</option>
                        <option value="500000">5,00,000</option>
                        <option value="1000000">10,00,000</option>


                       </select> 
                      </div>
                    <div class="col-sm-6">
                      <span>TO</span>
                      <select id="skip-value-upper" name="">
                        <option value="100">100</option>
                        <option value="500">500</option>
                        <option value="1000">1,000</option>
                        <option value="2500">2,500</option>
                        <option value="5000">5,000</option>
                        <option value="10000">10,000</option>
                        <option value="20000">20,000</option>
                        <option value="25000">25,000</option>
                        <option value="35000">35,000</option>
                        <option value="50000">50,000</option>
                        <option value="75000">75,000</option>
                        <option value="100000">1,00,000</option>
                        <option value="200000">2,00,000</option>
                        <option value="500000">5,00,000</option>
                        <option value="1000000" selected="selected">10,00,000</option>
                      </select>
                      </div>
                  </div>
                </div>


                <!-- <div class="aa-single-filter-search">
                  <span>PRICE ($)</span>
                  <span>FROM</span>
                  <span id="skip-value-lower2" class="example-val">30.00</span>
                  <span>TO</span>
                  <span id="skip-value-upper2" class="example-val">100.00</span>
                  <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                  </div>      
                </div> -->

                <div class="aa-single-advance-search">
                <label>Price Range</label>
                  <div class="row">
                    <div class="col-sm-6">
                    <span>FROM</span>
                      <select id="skip-value-lower2" name="">
                        
                        <option selected="selected" value="100">100</option>
                        <option value="10000">10,000</option>
                        <option value="25000">25,000</option>
                        <option value="50000">50,000</option>
                        <option value="100000">1,00,000</option>
                        <option value="150000">1,50,000</option>
                        <option value="250000">2,50,000</option>
                        <option value="400000">4,00,000</option>
                        <option value="500000">5,00,000</option>
                        <option value="750000">7,50,000</option>
                        <option value="10000000">1,00,00,000</option>
                        <option value="20000000">2,00,00,000</option>
                        <option value="50000000">5,00,00,000</option>
                        <option value="100000000">10,00,00,000</option>
                        <option value="200000000">20,00,00,000</option>
                        <option value="500000000">50,00,00,000</option>
                        <option value="1000000000">100,00,00,000</option>
                       </select> 
                      </div>
                    <div class="col-sm-6">
                    <span>TO</span>
                      <select id="skip-value-upper2" name="">
                        <option value="100">100</option>
                        <option value="10000">10,000</option>
                        <option value="25000">25,000</option>
                        <option value="50000">50,000</option>
                        <option value="100000">1,00,000</option>
                        <option value="150000">1,50,000</option>
                        <option value="250000">2,50,000</option>
                        <option value="400000">4,00,000</option>
                        <option value="500000">5,00,000</option>
                        <option value="750000">7,50,000</option>
                        <option value="10000000">1,00,00,000</option>
                        <option value="20000000">2,00,00,000</option>
                        <option value="50000000">5,00,00,000</option>
                        <option value="100000000">10,00,00,000</option>
                        <option value="200000000">20,00,00,000</option>
                        <option value="500000000">50,00,00,000</option>
                        <option value="1000000000" selected="selected">100,00,00,000</option>
                      </select>
                      </div>
                  </div>
                </div>

                <div class="aa-single-advance-search">
                  <input type="button" value="Search" class="aa-search-btn" onClick="searchProperties()">
                </div>
              </form>
            </div> 
            <!-- Start Single properties sidebar -->
            <div class="aa-properties-single-sidebar">
            
            <?php if(!empty($advertisements) && isset($advertisements['bottom_right'])) {?>
             <a href="<?php echo $advertisements['bottom_right']['link']?>"><img src="<?php echo base_url()."uploads/advertisement/".$advertisements['bottom_right']['image'] ?>" class="img-responsive"></a>
          <?php }else{?>
        <img class="img-responsive" src="http://placehold.it/260x450">
           <?php } ?>
              <!--<h3>Populer Properties</h3>
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="img/item/1.jpg" alt="img">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">This is Title</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>                
                  <span>$65000</span>
                </div>              
              </div>
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="img/item/1.jpg" alt="img">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">This is Title</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>                
                  <span>$65000</span>
                </div>              
              </div>
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="img/item/1.jpg" alt="img">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">This is Title</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>                
                  <span>$65000</span>
                </div>              
              </div>-->
            </div>
          </aside>        
          <aside>
          <h4>Advertisement</h4>
          <?php if(!empty($advertisements) && isset($advertisements['top_right'])) {?>
             <a href="<?php echo $advertisements['top_right']['link']?>"><img src="<?php echo base_url()."uploads/advertisement/".$advertisements['top_right']['image'] ?>" class="img-responsive"></a>
          <?php }else{?>
				<img class="img-responsive" src="http://placehold.it/260x450">
           <?php } ?>
          </aside>
          
        </div>
    </div>
    </div>
  </section>
 <script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script> 
 <script>
  $(document).ready(function () {	  
	getPropertyList();	

  
	  
	  

  	  
 var SITE_URL = "<?php echo site_url();?>";
     $('#house_search').on('click', function() {
       if($('#advlocation').val() == ''){
         alert('please select a city,state or locality');
       }else{      
        var category = $('ul#category').find('li.active').data('interest');
        var location = $('#advlocation').val();
        var master_rooms = $('#adv_master_rooms').val();
        var attached_bathrooms = $('#adv_attached_bathrooms').val();
        var floor_type = $('#adv_floor_type').val();
        var radius = $('#house_search_radius').val();
      var purpose = $('#house_purpose').val();
      var lat = $('#advlat').val();
      var lng = $('#advlng').val();

               var homeFeatures = [];
               $('input[name=home_features]:checked').map(function() {
                   homeFeatures.push($(this).val());
               });
      
      var querystring = 'purpose='+purpose+'&category='+category+'&location='+location+'&mr='+master_rooms+'&ab='+attached_bathrooms+'&ft='+floor_type+'&r='+radius+'&lat='+lat+'&lng='+lng+'&features='+homeFeatures+'';

     window.location.href= SITE_URL+'properties/?'+querystring;
       }
     });
    
    
    $('#land_search').on('click', function() {
      
      if($('#advlocation').val() == ''){
         alert('please select a city,state or locality');
       }else{
       
        var category = $('ul#category').find('li.active').data('interest');
        var location = $('#advlocation').val();
        var land_type = $('#adv_land_type').val();
        var land_position = $('#adv_land_position').val();
        var water_availability = $('#adv_water_availability').val();
        var radius = $('#land_search_radius').val();
      var purpose = $('#land_purpose').val();
      var lat = $('#advlat').val();
      var lng = $('#advlng').val();
              var landFeatures = [];
              $('input[name=land_features]:checked').map(function() {
                  landFeatures.push($(this).val());
              });
      
      var querystring = 'purpose='+purpose+'&category='+category+'&location='+location+'&landtype='+land_type+'&landpos='+land_position+'&water_availability='+water_availability+'&r='+radius+'&lat='+lat+'&lng='+lng+'&features='+landFeatures+'';

     window.location.href= SITE_URL+'properties/?'+querystring;
     
       }
     });
     
     $('#project_search').on('click', function() {
       
       if($('#advlocation').val() == ''){
         alert('please select a city,state or locality');
       }else{
        var category = $('ul#category').find('li.active').data('interest');
        var location = $('#advlocation').val();
        var floorno = $('#adv_no_of_floor').val();
        var towerno = $('#adv_no_of_tower').val();
        var guest_rooms = $('#adv_guest_rooms').val();
        var radius = $('#project_search_radius').val();
      var purpose = $('#project_purpose').val();
      var lat = $('#advlat').val();
      var lng = $('#advlng').val();

               var projectFeatures = [];
               $('input[name=project_features]:checked').map(function() {
                   projectFeatures.push($(this).val());
               });
      
      var querystring = 'purpose='+purpose+'&category='+category+'&location='+location+'&floorno='+floorno+'&towerno='+towerno+'&guest_rooms='+guest_rooms+'&r='+radius+'&lat='+lat+'&lng='+lng+'&features='+projectFeatures+'';

        window.location.href= SITE_URL+'properties/?'+querystring;
       }
     });
     
     $('#commercial_search').on('click', function() {
       
       if($('#advlocation').val() == ''){
         alert('please select a city,state or locality');
       }else{
        var category = $('ul#category').find('li.active').data('interest');
        var location = $('#advlocation').val();
        var type = $('#adv_com_type').val();
        var workstations = $('#adv_workstations').val();
        var meeting_rooms = $('#adv_meeting_rooms').val();
        var radius = $('#commercial_search_radius').val();
      var purpose = $('#commercial_purpose').val();
      var lat = $('#advlat').val();
      var lng = $('#advlng').val();

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
      var input = document.getElementById(searchId);
    google.maps.event.addDomListener(input, 'keydown', function(e) { 
      if (e.keyCode == 13) { 
        e.preventDefault(); 
      }
    });
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
             $('#advlat').val(place.geometry.location.lat());
             $('#advlng').val(place.geometry.location.lng());
       
       var addressData = place.address_components;       
       var addrLocation = [];
       addressData.forEach(function(address) {         
         var addr = address.long_name;
         addrLocation.push(addr);        
       });
       addrLocation = JSON.stringify(addrLocation);
       $('.advlocation').val(addrLocation);
     });
   }
   google.maps.event.addDomListener(window, 'load', initialize);


  
  function getPropertyList(sortField,perpage){
	  var offset = '';
	  if(sortField){//alert(sortField);
		 var sortField = sortField;
	  }else{
		var sortField = '';
	  }
	  		 
	  //var offset = 0;
	  if(perpage){
		 var perpage = perpage;
	  }else{
		var perpage = '';
	  }  
	  
	  //var sortField = this.value;
			 //alert(sortField);
	    var SITE_URL = "<?php echo site_url();?>";
		var url = SITE_URL+"property/listing/"+''+offset;
		$.ajax({
			type: "POST",
			//dataType: 'json',
			data: {
			'sort_field': sortField,
			'perpage': perpage,
			'purpose': '<?php echo $purpose ?>',
			'category': '<?php echo $category ?>',
      'subcategory': '<?php echo $subcategory ?>',
			'country': '<?php echo $country?>',
			'state': '<?php echo $state?>',
			'district': '<?php echo $district?>',
			<?php /*?>'location': '<?php echo $location?>',<?php */?>
			'from_price': '<?php echo $from_price?>',
			'to_price': '<?php echo $to_price?>',
			'from_sqft': '<?php echo $from_sqft?>',
			'to_sqft': '<?php echo $to_sqft?>',
            'features': $('#features').val(),

			'radius': $('#radius').val(),
			'lat': $('#lat').val(),
			'lng': $('#lng').val(),
			'loc': $('#loc').val(),
			
			'master_rooms': $('#master_rooms').val(),
			'attached_bathrooms': $('#attached_bathrooms').val(),
			'floor_type': $('#floor_type').val(),
			
			'land_type': $('#land_type').val(),
			'land_position': $('#land_position').val(),
			'water_availability': $('#water_availability').val(),
			
			'floorno': $('#floorno').val(),
			'towerno': $('#towerno').val(),
			'guest_rooms': $('#guest_rooms').val(),
			
			'type': $('#type').val(),
			'workstations': $('#workstations').val(),
			'meeting_rooms': $('#meeting_rooms').val()
			},
		   url: url,
		success: function(response){
			console.log(response);
			$( '#properties_container' ).html(response);	

		}
			 
	   });		  
  }
  
  
 
  function searchProperties()
  { //alert('fg');
	  //var country = $('#country').val();
	  var purpose = $('#filter_type').val();
	  var category = $('#filter_category').val();
    var subcategory = $('#prop_subCategory').val();
	  //var category = $("input[name=category]:checked").val();//alert(category);
	  //if(typeof category == "undefined"){
		 // category = '';
	  //}
	  //var location = $('#location').val();
	  var from_price = $('#skip-value-lower2').val();
	  var to_price = $('#skip-value-upper2').val();
	  var from_sqft = $('#skip-value-lower').val();
	  var to_sqft = $('#skip-value-upper').val();

	  var querystring = 'purpose='+purpose+'&category='+category+'&subcategory='+subcategory+'&from_price='+from_price+'&to_price='+to_price+'&from_sqft='+from_sqft+'&to_sqft='+to_sqft+'';	
     
    var SITE_URL = "<?php echo site_url();?>";
    //alert(SITE_URL); 
	  window.location.href= SITE_URL+'properties/?'+querystring;
	   
   }
  
</script>
  
<!--<div id="properties_container">
</div>-->