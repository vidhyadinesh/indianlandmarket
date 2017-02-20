
  <!-- Start Property header  -->

  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Properties Details</h2>
            <ol class="breadcrumb">
            <li><a href="<?php echo site_url();?>">HOME</a></li>            
            <li class="active"><?php echo isset($property['title']) ? $property['title']:''?></li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Property header  -->

  <!-- Start Properties  -->
  <section id="aa-properties">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="aa-properties-content">            
            <!-- Start properties content body -->
            <div class="aa-properties-details">
             <div class="aa-properties-details-img">
             <?php if(!empty($property_images)) {?>
             <?php foreach($property_images as $image):?>
               <img src="<?php echo base_url()."uploads/".$image['image'] ?>" alt="img">
             <?php endforeach;?>
             <?php }else{ ?>             
              <img src="<?php echo base_url()."assets/img/no_prop.jpg"?>" alt="img">
             <?php }?>
             </div>
             <div class="row well well-sm success">
               <div class="col-md-8">
                 <div class="aa-properties-info text-justify top-margin">
                   <h2  style="margin-top:0"><?php echo $property['title'] ?></h2>
                   <p><?php echo $property['description']?></p>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consequatur, veritatis, ducimus in aliquam magnam voluptatibus ullam libero fugiat temporibus at, aliquid explicabo placeat eligendi, assumenda magni saepe eius consequuntur.</p>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium dicta aliquid, autem, cum, impedit nostrum, rem molestias quisquam ab iure enim totam? Itaque esse ut adipisci officiis nulla repellendus ratione dolore, iste ex doloribus tenetur eos provident quam quasi maxime.</p>-->
                 
                   <span class="aa-price">Rs.<?php echo $property['estimated_price']?></span><br/>
                   <span class="aa-price"><?php echo $property['sqft']?> sqft</span><br>
               
                   <span>Category: <?php echo $property['sub_category_name']?></span>
              
                     <?php if(isset($property['possession_date'])&& $property['possession_date']!= '0000-00-00'){ ?>
                         <span>Possession date: <?php echo $property['possession_date']?></span>
                     <?php } ?>
                     <br>
                     <?php if(!empty($property['area']) && !empty($property['unit'])){ ?> <span>Area: <?php echo $property['area']?> <?php echo $property['unit']?> </span> <?php } ?>
                 </div>
               </div>
               <div class="col-md-4 top-margin">
              
                    <p>&nbsp;</p>
                   <div class="col-lg-12">
             <a href="#" data-toggle="modal" data-target="#contactdetails" class="aa-secondary-btn">View Contact</a>                   </div>
                  <div class="modal fade" id="contactdetails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                       <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Contact Details</h4>
                          </div>
                          <div class="modal-body">
                            <table width="200" border="0">
                              <tbody>
                                <tr>
                                  <td>Name:</td>
                                  <td><?php echo $user_data['first_name'].' '.$user_data['last_name']?></td>
                                </tr>
                                <tr>
                                  <td>Email:</td>
                                  <td><?php echo $user_data['email']?></td>
                                </tr>
                                <tr>
                                  <td>Contact:</td>
                                  <td>+91 <?php echo $user_data['contact_no']?></td>
                                </tr>
                              </tbody>
                            </table> 
                          </div>
                          <div class="modal-footer">
                          <?php if(!empty($contact_adv) && isset($contact_adv['bottom'])) {?>
                             <a href="<?php echo $contact_adv['bottom']['link']?>"><img src="<?php echo base_url()."uploads/advertisement/".$contact_adv['bottom']['image'] ?>" class="img-responsive"></a>
                          <?php }else{?>
                                <img class="img-responsive" src="http://placehold.it/728x90">
                           <?php } ?>
                          <!--<img class="img-responsive" src="img/Banner-Ad-Horizontal-Buying-a-Home.jpg" width="728" height="90" alt=""/>-->
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                    </div>
		          </div>
              
                  <div class="col-lg-12"> <p>&nbsp;</p>
                   <a href="#" data-toggle="modal" data-target="#floorplan" class="aa-secondary-btn">View Floor Plan</a>
                  </div>
                  <div class="modal fade" id="floorplan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                       <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Floor Plan</h4>
                          </div>
                          <div class="modal-body">
                          <?php if($prop_floor_image){?>
                            <img class="img-responsive" src="<?php echo base_url()."uploads/".$prop_floor_image['floor_image']?>" width="1000" height="631" alt=""/>                            
                            <?php }else{?>
                            <img class="img-responsive" src="<?php echo base_url()."assets/img/no_prop.jpg"?>" width="1000" height="631" alt=""/>
                            <?php }?>
                          </div>
                          <div class="modal-footer">
                          <?php if(!empty($floorplan_adv) && isset($floorplan_adv['bottom'])) {?>
                             <a href="<?php echo $floorplan_adv['bottom']['link']?>"><img src="<?php echo base_url()."uploads/advertisement/".$floorplan_adv['bottom']['image'] ?>" class="img-responsive"></a>
                          <?php }else{?>
                                <img class="img-responsive" src="http://placehold.it/728x90">
                           <?php } ?>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                    </div>
                     
		          </div> 

              

                  <div class="col-lg-12">
                     <!--<p>&nbsp;</p><a href="#" class="aa-secondary-btn ">Add To Short list</a>-->
                     <button class="aa-secondary-btn shortlist" style="margin-right:10px;padding-bottom:0;float:right;width:96%;margin-top:20px" id="<?php echo $property['id']?>" value="<?php echo $loggedId ?>">Add to Short list</button>
                  </div>
               </div>
             </div>
             
             
             
      <ul class="nav nav-tabs text-center">

			<li class="active">
           <a  href="#1" data-toggle="tab">
           		<i class="fa fa-2x fa-file"></i>
                    <span class="help-block">Additional Info</span></a>
			</li>
      
			<li><a href="#2" data-toggle="tab"><i class="fa fa-2x fa-gift"></i>
                    <span class="help-block">Features</span></a>
			</li>
      
            <li><a href="#3" data-toggle="tab"><i class="fa fa-2x fa-gift"></i>
                    <span class="help-block">Amenities</span></a>
			</li>
      
            <?php if($property['category'] == 3){?>
            <li><a href="#7" data-toggle="tab">
             <i class="fa fa-2x fa-puzzle-piece"></i>
                    <span class="help-block">Floor Plans</span></a></li> 
            <?php } ?>
            
			        <li><a href="#4" data-toggle="tab"><i class="fa fa-2x fa-video-camera"></i>
                    <span class="help-block">Video</span></a></li>
              
            <li><a href="#5" data-toggle="tab"><i class="fa fa-2x fa-location-arrow"></i>
                    <span class="help-block">Location</span></a></li>
           <!-- <li><a href="#6" data-toggle="tab" onClick="initialize();"><i class="fa fa-2x fa-map"></i>
                    <span class="help-block">View in map</span></a>
			</li>-->

		</ul>
			<div class="tab-content ">

			  <div class="tab-pane active" id="1">
             <div class="aa-properties-info">    
               <h2>Additional Information</h2>               
            
              <p><?php echo $property['additional_info']?></p>

               </div>
				</div>

				<div class="tab-pane" id="2">
                  <div class="aa-properties-info"> 
                    <h4>Propery Features</h4>
                    <?php include("$include_view.php"); ?>
                   
                   <?php if(!empty($features['prop_details'])){?><h4>Other Features</h4><?php } ?>
                   <ul>
                   <?php foreach($property_features as $feature):?>
                     <li><?php echo $feature['feature_name']?></li>
                   <?php endforeach;?>
                   </ul>                  
                   
                  </div>
				</div>
        
                <div class="tab-pane" id="3">
         		<div class="aa-properties-info"> 
         		<h4>Amenities</h4>
         		<?php if(!empty($property_amenities)) {?>
                  <ul>
                     <?php foreach($property_amenities as $key => $amenity):?>
                     	<li><?php echo $key ?> - <?php echo $amenity?></li>
                   	 <?php endforeach;?>                   
                   </ul>
              <?php }else{?>
              	No amenities.
                <?php }?>
               
               </div>
				</div>
        

                <?php if($property['category'] == 3){?>
                
                <div class="tab-pane" id="7">
                <h3>Floor Plans</h3>

<div id="demo">
           <div class="row">
            <div class="span12">

              <div id="owl-demo" class="owl-carousel">
             <?php if(!empty($floorplans)) {?>
             <?php foreach($floorplans as $floorplan):?>
                <div class="item">
                    <div class="panel panel-default">
                    <div class="panel-heading"><?php echo $floorplan['title'] ?></div>
                    <div class="panel-body">
                              <div class="thumbnail product-item">
                                <a href="#"><!--<img src="http://placehold.it/350x450">-->
                                <img src="<?php echo base_url()."uploads/floorplans/".$floorplan['image'] ?>" alt="img" width="350px" height="450px">
                                </a>
                            </div>
                            <h4><?php echo $floorplan['type']?></h4>
                             <h5><?php echo $floorplan['sqft']?> Sqft</h5>
                             <hr>
                             <small>NEW BOOKING BASE PRICE</small>
                             <h5>around  <?php echo $floorplan['cost']?> Lac</h5>
                           </div>
                    </div>
                </div>
             <?php endforeach;?>
             <?php } else{?>
             <h4>No floorplans.</h4>             
             <?php } ?>
                 

              </div>
            </div>
          </div>
   

    </div>


              
			    </div>
                <?php } ?>
                
                <div class="tab-pane" id="4">
         <div class="aa-properties-info"> 
         <h4>Property Video</h4>
         
         		<!--<video width="320" height="240" controls autoplay>
  				<source src="<?php /*echo $property['video']*/?>.mp4" type="video/mp4">
				</video>-->
             <?php if(!empty($property['video_id'])){ ?>
             <iframe width="100%" height="480" src="https://www.youtube.com/embed/<?php echo $property['video_id']?>" frameborder="0" allowfullscreen></iframe>
             <?php } ?>             
            </div>
				</div>
        
                <div class="tab-pane" id="5">
                 <div class="aa-properties-info"> 
                    <h4>Location</h4>
                    
                    <table class="table table-responsive" width="200" border="0">
                      <tbody>
                        <tr>
                          <td>Country:</td>
                          <td><?php echo $property['country']?></td>
                        </tr>
                        <tr>
                          <td>District:</td>
                          <td><?php echo $property['district']?></td>
                        </tr>
                        <!--<tr>
                          <td>Pin:</td>
                          <td>Lorem ipsum</td>
                        </tr>-->
                        <tr>
                          <td>State:</td>
                          <td><?php echo $property['state']?></td>
                        </tr>
                        <!--<tr>
                          <td>City:</td>
                          <td>Lorem ipsum</td>
                        </tr>-->
                        <tr>
                          <td>Address:</td>
                          <td><?php echo $property['address']?></td>
                        </tr>
                        
                        <tr>
                          <td>Postal Address:</td>
                          <td><?php echo $property['postal_address']?></td>
                        </tr>
                      </tbody>
                    </table>

                    
                 </div>
				</div>

			</div>
              <h4>View in Map</h4>
             <div id="map-canvas" style="height: 200px;width:80%;margin: 0.6em;"></div>  

<!-- <div class="container">
        <a href="#myMapModal" class="btn" data-toggle="modal"><i class="fa fa-map-marker" aria-hidden="true">&nbsp;</i>View in Map</a>

        <div class="modal fade" id="myMapModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div id="map-canvas" class=""></div>
                            </div>
                        </div>
                         <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle-o fa-2x" aria-hidden="true"></i></button>
                    </div>
                    
                </div>

            </div>

            </div>
  </div> --> 







             <!-- Properties social share -->
             <div class="aa-properties-social">
              <div class="addthis_inline_share_toolbox"></div>
               <!-- <ul>
                 <li>Share</li>
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                 <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
               </ul> -->
             </div>
             <!-- Nearby properties -->
             <?php if(!empty($nearbyprops)) {?>
             <div class="aa-nearby-properties">
               <div class="aa-title">
                 <h2>Nearby Properties</h2>
                 <span></span>
               </div>
               <div class="aa-nearby-properties-area">
                 <div class="row">
                 <?php foreach($nearbyprops as $prop):?>
                   <div class="col-md-6">
                     <article class="aa-properties-item">
                        <a class="aa-properties-item-img" href="<?php echo site_url()."/property/view/".$prop['id']?>">
                        <?php if($prop['nearby_prop_image']){?>
                          <img alt="img" src="<?php echo base_url()."uploads/".$prop['nearby_prop_image']['image']?>">
                        <?php }else{?>  
                         <img alt="img" src="<?php echo base_url()."assets/img/item/6.jpg"?>">
                         <?php }?>
                        </a>
                        
                        <div class="aa-tag for-sale">
                          For <?php echo isset($prop['purpose'])? $prop['purpose']:''?>
                        </div>
                        <div class="aa-properties-item-content">
                          <div class="aa-properties-info">
                            <!--<span>5 Rooms</span>-->
                            <!--<span>2 Beds</span>
                            <span>3 Baths</span>
                            <span>1100 SQ FT</span>-->
                          </div>
                          <div class="aa-properties-about">
                            <h3><a href="#"><?php echo isset($prop['title'])? $prop['title']:'' ?></a></h3>
                            <p><?php echo isset($prop['description'])? $prop['description']:''?></p>                      
                          </div>
                          <div class="aa-properties-detial">
                            <span class="aa-price">
                              $ <?php echo isset($prop['estimated_price'])? $prop['estimated_price']:'' ?>
                            </span>
                            <a class="aa-secondary-btn" href="<?php echo site_url()."/property/view/".$prop['id']?>">View Details</a>
                          </div>
                        </div>
                      </article>
                   </div>
                   <?php endforeach;?>  
                   <!--<div class="col-md-6">
                     <article class="aa-properties-item">
                      <a class="aa-properties-item-img" href="#">
                        <img alt="img" src="img/item/2.jpg">
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
                          <a class="aa-secondary-btn" href="properties-detail.php">View Details</a>
                        </div>
                      </div>
                    </article>
                   </div>-->
                 </div>
               </div>

             </div>
				<?php }?>
            </div>           
          </div>
        </div>
        <!-- Start properties sidebar -->
        <div class="col-md-4">
        <aside class="aa-properties-sidebar">

            <div class="aa-properties-single-sidebar">
              <h3>Properties Search</h3>
              <form action="">
              
              <input id="location" class="location" value="" type="hidden" placeholder="location" style="width: 161px;" disabled>
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Type Your Location" id="searchTextField">
                </div>
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
				<img class="img-responsive" src="http://placehold.it/360x450">
           <?php } ?>
          </aside>

        </div>
      </div>
    </div>
  </section>
  <!-- / Properties  -->
  
   <!--<script src="<?php /*?><?php echo base_url()."assets/js/jquery.min.js"?><?php */?>"></script>-->
   <script src="<?php echo base_url()."assets/js/mediaelement-and-player.min.js"?>"></script>   
       
   <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQV0XNkk6SDcDoKfxxF0lPfSreU0w2FPU&v=3.exp"></script>
   <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5847c2d50a9449b1"></script>

    <!-- Demo -->

    <style>
    #owl-demo .item{
        padding: 0px 0px;
        margin: 10px;
        color: #3fc35f;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        text-align: center;
    }
    </style>
 <script>
    $(document).ready(function() {
		
		function initialize() {
      var input = document.getElementById('searchTextField');
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
             //$('.MapLat').val(place.geometry.location.lat());
             //$('.MapLon').val(place.geometry.location.lng());
			 
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
		
		

      var owl = $("#owl-demo"),
          status = $("#owlStatus");
		  
	owl.owlCarousel({
      items : 3, //10 items above 1000px browser width
      itemsDesktop : [1000,3], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
     });  

      owl.owlCarousel({
        navigation : true,
        afterAction : afterAction
      });

      function updateResult(pos,value){
        status.find(pos).find(".result").text(value);
      }

      function afterAction(){
        updateResult(".owlItems", this.owl.owlItems.length);
        updateResult(".currentItem", this.owl.currentItem);
        updateResult(".prevItem", this.prevItem);
        updateResult(".visibleItems", this.owl.visibleItems);
        updateResult(".dragDirection", this.owl.dragDirection);
      }	  
	  //initialize();
	  
	  $('.shortlist').on('click', function() {
			 var propertyId = $(this).attr("id");//alert(propertyId);
			 var loggedUserId = $(this).val();
			 if(!loggedUserId){//alert(loggedUserId);
				 alert('please login to add shortlist');
			 }else{				 				 
				 addToShortlist(propertyId,loggedUserId);
			 }			 
	});


     $('#filter_category').on('change', function() {
    var categoryId = this.value;
    //alert(categoryId);die();
    var url = SITE_URL+"/postproperty/subcategories";
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

    });
	var map;
	function initialize(){

		var mapOptions = {
            zoom: 8,
            center: new google.maps.LatLng('<?php echo $property['latitude']?>', '<?php echo $property['longitude']?>')
          };
          map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
		  
		   var marker = new google.maps.Marker({
                    position: new google.maps.LatLng('<?php echo $property['latitude']?>','<?php echo $property['longitude']?>'),
                    map: map,
                    title: '<?php echo $property['address']?>'
                });

                var contentString = '<div id="content" style="width: 200px; height: 200px;"><h1>Overlay</h1></div>';
                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                google.maps.event.addListener(marker, 'click', function() {
                  infowindow.open(map,marker);
                });

                marker.setMap(map);
        }
        google.maps.event.addDomListener(window, 'load', initialize);

	
	var SITE_URL = "<?php echo site_url();?>";
	function addToShortlist(propertyId,loggedUserId){
	  $.ajax({
			type: "POST",
			//dataType: 'json',
			data: {
			'property_id': propertyId,
			'user_id':loggedUserId
			},
		   url: SITE_URL+"/property/add-to-shortlist",
		   success: function(response){
			   //console.log(response);
			   alert(response);					   
			}				 
	  });	
	  
  }

  function searchProperties()
  {
	  var country = $('#country').val();
	  var purpose = $('#filter_type').val();
    var category = $('#filter_category').val();
    var subcategory = $('#prop_subCategory').val();
	  //var category = $("input[name=category]:checked").val();//alert(category);
	  //if(typeof category == "undefined"){
		 // category = '';
	  //}
	  var location = $('#location').val();
	  var from_price = $('#skip-value-lower2').val();//alert(from_price);
	  var to_price = $('#skip-value-upper2').val();//alert(to_price);
	  var from_sqft = $('#skip-value-lower').val();//alert(from_price);
	  var to_sqft = $('#skip-value-upper').val();//alert(to_price);
	   /*if(typeof from_price == "undefined"){
		 from_price = '';
	  }
	  if(typeof to_price == "undefined"){
		 to_price = '';
	  }*/
	  var querystring = 'purpose='+purpose+'&category='+category+'&subcategory='+subcategory+'&country='+country+'&from_price='+from_price+'&to_price='+to_price+'&location='+location+'&from_sqft='+from_sqft+'&to_sqft='+to_sqft+'';	  

	   window.location.href= SITE_URL+'/properties/?'+querystring;
	   
   }
  
  
    </script>