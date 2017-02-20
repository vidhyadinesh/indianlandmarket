
  <!-- Start Property header  -->

  <section id="aa-property-header" style="min-height: 337px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Advanced Search House</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>            
            <li class="active">SEARCH</li>
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
      <div class="row"><!-- Start properties sidebar -->
      
        <div class="col-md-8 col-md-push-2">
<section class="aa-properties-sidebar">
            <!-- Start Single properties sidebar -->
            <div class="aa-properties-single-sidebar">
              <h3>Properties Search</h3>
              <form action=""><br>
              <input type="hidden" name="purpose" value="<?php echo $purpose ?>" id="purpose">
              <input type="hidden" name="category" value="<?php echo $category ?>" id="category">
              <input type="hidden" name="country" value="<?php echo $country ?>" id="country">
              <input type="hidden" name="state" value="<?php echo $state ?>" id="state">
              <input type="hidden" name="district" value="<?php echo $district ?>" id="district">
              <input type="hidden" name="location" value="<?php echo $location ?>" id="location">

                <h5>Location :- <?php if($location){ echo $location ?> <?php }else{ echo $district.','.$state.','.$country ?> <?php }?></h5>
                <!--<div class="aa-single-advance-search">
                  <input type="text" placeholder="Type Your Location">
                </div>-->
                <div class="row">
                  <div class="col-md-6">                    
                    <div class="aa-single-advance-search">
        
                      <label>No of floor</label>
                      <select id="no_of_floor" name="">
                        <option selected="" value="">No of floor</option>
                        <?php for ($i=1; $i<=10; $i++){ ?>
                            	<option value="<?php echo $i;?>"><?php echo $i;?></option>
                          <?php }?>
                      </select>
                      
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                   
                    <div class="aa-single-advance-search">
                     
  					  <select id="no_of_tower" name="no_of_tower" class="form-control">
                      <option selected="" value="">No of tower</option>
                        <?php for ($i=1; $i<=10; $i++){ ?>
                            	<option value="<?php echo $i;?>"><?php echo $i;?></option>
                          <?php }?>
                      </select>
                      
                    </div>
                  </div>
                </div><br>

                <div class="row">
                  <div class="col-md-4">
                    
                    <div class="aa-single-advance-search">
                    
                      <select id="guest_rooms" name="guest_rooms" class="form-control">
                        <option selected="" value="">Guest rooms</option>
                        <?php for ($i=1; $i<=10; $i++){ ?>
                            	<option value="<?php echo $i;?>"><?php echo $i;?></option>
                          <?php }?>
                      </select>
                     
                    </div>
                  </div>                 
                  
                </div>
                
                <div class=" col-md-6">
                  <div class="aa-single-filter-search">
                    <span>AREA (SQ)</span>
                    <span>FROM</span>
                    <span id="skip-value-lower" class="example-val">30.00</span>
                    <span>TO</span>
                    <span id="skip-value-upper" class="example-val">100.00</span>
                    <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                    </div>                  
                  </div>
                </div>
                <div class=" col-md-6">
                    <div class="aa-single-filter-search">
                      <span>PRICE ($)</span>
                      <span>FROM</span>
                      <span id="skip-value-lower2" class="example-val">30.00</span>
                      <span>TO</span>
                      <span id="skip-value-upper2" class="example-val">100.00</span>
                      <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                      </div>      
                    </div>                
                </div>
                <div class="aa-single-advance-search">
                  <input type="button" value="Search" class="aa-search-btn" onClick="searchProperties()">
                </div>
              </form>
            </div> 
            
          </section>
          
            </div>
        <div class="col-md-2 col-xs-6 col-md-pull-8"><?php if(!empty($advertisements) && isset($advertisements['left'])) {?>
             <a href="<?php echo $advertisements['left']['link']?>"><img src="<?php echo base_url()."uploads/advertisement/".$advertisements['left']['image'] ?>" class="img-responsive"></a>
          <?php }else{?>
				<img class="img-responsive" src="http://placehold.it/195x640">
           <?php } ?></div>        
        <div class="col-md-2 col-xs-6"><?php if(!empty($advertisements) && isset($advertisements['right'])) {?>
             <a href="<?php echo $advertisements['right']['link']?>"><img src="<?php echo base_url()."uploads/advertisement/".$advertisements['right']['image'] ?>" class="img-responsive"></a>
          <?php }else{?>
				<img class="img-responsive" src="http://placehold.it/195x640">
           <?php } ?></div>
      </div>
      <div class="row">
        <div class="col-md-12 page-header"><?php if(!empty($advertisements) && isset($advertisements['bottom'])) {?>
             <a href="<?php echo $advertisements['bottom']['link']?>"><img src="<?php echo base_url()."uploads/advertisement/".$advertisements['bottom']['image'] ?>" class="img-responsive"></a>
          <?php }else{?>
				<img class="img-responsive" src="http://placehold.it/195x640">
           <?php } ?></div>
      </div>
    </div>
  </section>
  <script>
    var SITE_URL = "<?php echo site_url();?>";
  function searchProperties()
  {
	  var country = $('#country').val();
	  var state = $('#state').val();
	  var district = $('#district').val();
	  var purpose = $('#purpose').val();
	  var category = $('#category').val();
	  //var category = $("input[name=category]:checked").val();//alert(category);
	  //if(typeof category == "undefined"){
		 // category = '';
	  //}
	  var location = $('#location').val();
	  var from_price = $('#skip-value-lower2').text();
	  var to_price = $('#skip-value-upper2').text();
	  var from_sqft = $('#skip-value-lower').text();
	  var to_sqft = $('#skip-value-upper').text();
	  
	  var floorno = $('#no_of_floor').val();
	  var towerno = $('#no_of_tower').val();
	  var guest_rooms = $('#guest_rooms').val();
	   /*if(typeof from_price == "undefined"){
		 from_price = '';
	  }
	  if(typeof to_price == "undefined"){
		 to_price = '';
	  }*/
	  var querystring = 'purpose='+purpose+'&category='+category+'&country='+country+'&state='+state+'&district='+district+'&from_price='+from_price+'&to_price='+to_price+'&location='+location+'&from_sqft='+from_sqft+'&to_sqft='+to_sqft+'&floorno='+floorno+'&towerno='+towerno+'&guest_rooms='+guest_rooms+'';	  

	   window.location.href= SITE_URL+'/properties/?'+querystring;
	   
   }
  </script>