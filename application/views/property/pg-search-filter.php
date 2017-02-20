  <!-- Start Property header  -->
  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Paying Guest Property</h2>
            <ol class="breadcrumb">
            <li><a href="<?php echo site_url();?>">HOME</a></li>            
            <li class="active">Pg Property Details</li>
          </ol>
          </div>
<!-- Advance Search -->
  <section id="aa-advance-search">
    <div class="container">
      <div class=" col-md-8 col-md-offset-2">
        <div class="aa-advance-search-area"  style="margin-top: -203px;">
        <div class="panel with-nav-tabs">
                
                <div class="panel-body">
                    <div class="tab-content">
                        
                        <div class="tab-pane fade in active" id="tab1default">
                            
                            <div class="form">
                              <div class="aa-advance-search-top form-group" style="margin-bottom: 0;">
                              <form action="advanced-search.php" method="get" >
                                <div class="row">
                                  <div class="col-md-12">
                                  
                                    <div class="aa-single-advance-search">
                                 
                                    <div class="col-sm-9">
                                    <div class="banner_search_inner_box_search">
                                    
                                    <div class="input-group">
                                <input type="text" name="search" class="search" id="searchid" value="" placeholder="Enter a City,Locality" autocomplete="off">

                                <input id="location" class="location" value="" type="hidden" placeholder="location" style="width: 161px;" disabled>
                                <input type="hidden" name="lat" value="" id="lat">
                                <input type="hidden" name="lng" value="" id="lng">

                                <div class="input-group-btn bs-dropdown-to-select-group">
                                 <select id="category" name="category" class="form-control" style="width: 150px;">
                                  <option selected="" value="">Select</option>
                                  <?php foreach($categories as $row):?>
                                  <option value="<?php echo $row->id ?>"><?php echo $row->category?></option>          
                                  <?php endforeach;?>

                                 </select>
                               </div>
                            </div>
                                    <div id="result"></div>
                                    </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                    <div class="aa-single-advance-search">
                                      <input class="aa-search-btn" type="button" value="SEARCH" id="pg_search">
                                    </div>
                                    </div>
                                      <div class="col-md-12"> 
                                       <div id="drope_box">
                                    
                                             <div class="form ">
                                                <div class="form-group search-features" style="padding-bottom:10px;">
                                                    <div class="row">
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="available_for">
                                                            <option value="" selected>available for</option>
                                                            <option value="Boy">Boy</option>
                                                            <option value="Girl">Girl</option>
                                                            <option value="Mixed">Mixed</option>
                                                          </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="suitable_for">
                                                            <option value="" selected>Suitable for</option>
                                                            <option value="Students">Students</option>
                                                            <option value="Working Professionals">Working Professionals</option>                                                           
                                                          </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="furnishing_level">
                                                            <option value="" selected>Furnishing level</option>
                                                            <option value="Fully Furnished">Fully Furnished</option>
                                                            <option value="Semi Furnished">Semi Furnished</option>
                                                            <option value="Un Furnished">Un Furnished</option>                                                         
                                                            </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="aa-single-advance-search">
                                                          <select id="bed_rooms">
                                                            <option value="">Bed rooms</option>
                                                             <?php for ($i=0; $i<=10; $i++){ ?>
                                                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                                <?php }?>
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

                                                  <?php foreach($pg_adv_features as $pgfeature):?>
                                                       <div class="checkbox col-md-3">                                         
                                                        <label for="checkboxes-0">
                                                          <input type="checkbox" name="pg_adv_features" id="pg_adv_features" value="<?php echo $pgfeature->id ?>">
                                                          <?php echo $pgfeature->feature?>
                                                        </label>
                                                        </div>
                                                    
                                                    <?php endforeach;?>
                                                  <!-- <div class="checkbox col-md-3">
                                                    <label for="checkboxes-1">
                                                      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                                                      Well
                                                    </label>
                                                    </div>
                                                    <div class="checkbox col-md-3">
                                                    <label for="checkboxes-2">
                                                      <input type="checkbox" name="checkboxes" id="checkboxes-2" value="2">
                                                      Car parking
                                                    </label>
                                                    </div>
                                                    <div class="checkbox col-md-3">
                                                    <label for="checkboxes-3">
                                                      <input type="checkbox" name="checkboxes" id="checkboxes-3" value="2">
                                                      Garden
                                                    </label>
                                                    </div>
                                                
                                                  <div class="checkbox col-md-3">
                                                    <label for="checkboxes-4">
                                                      <input type="checkbox" name="checkboxes" id="checkboxes-4" value="1">
                                                      Swimming pool
                                                    </label>
                                                    </div>
                                                  <div class="checkbox col-md-3">
                                                    <label for="checkboxes-5">
                                                      <input type="checkbox" name="checkboxes" id="checkboxes-5" value="2">
                                                      Inside lift
                                                    </label>
                                                    </div> -->





                                                   </div>
                                            </div>
                                            </div>
                                        </div> 
                                    </div>                                    
                                    
                                       
                                        </div>
                                    </div>
                                  </div>
                                  
                                  </div>
                              </form>  
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

  </section>
  <!-- End Property header  -->

  <!-- Start content  -->
    
    <section id="aa-properties">
    <div class="container">
    <h3>Pg Property List</h3>
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
                    <option value="title">Name</option>
                    <option value="estimated_price">Price</option>
                    <!--<option value="4">Date</option>-->
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

              <input type="hidden" name="pg_category" value="<?php echo $category ?>" id="pg_category">
              <input type="hidden" name="pg_available_for" value="<?php echo $availableFor ?>" id="pg_available_for">
              <input type="hidden" name="pg_suitable_for" value="<?php echo $suitableFor ?>" id="pg_suitable_for">
              <input type="hidden" name="pg_country" value="<?php echo $country ?>" id="pg_country">
              <input type="hidden" name="pg_state" value="<?php echo $state ?>" id="pg_state">
              <input type="hidden" name="pg_district" value="<?php echo $district ?>" id="pg_district">
              <input type="hidden" name="pg_loc" value="<?php echo $loc ?>" id="pg_loc">
              <input type="hidden" name="pg_furnishing_level" value="<?php echo $furnishinglevel ?>" id="pg_furnishing_level">
              <input type="hidden" name="pg_bedrooms" value="<?php echo $bedrooms ?>" id="pg_bedrooms">
              <input type="hidden" name="pg_features" value="<?php echo $pg_features ?>" id="pg_features">

              <input type="hidden" name="from_price" value="<?php echo $from_price ?>" id="from_price">
              <input type="hidden" name="to_price" value="<?php echo $to_price ?>" id="to_price">
              <input type="hidden" name="from_sqft" value="<?php echo $from_sqft ?>" id="from_sqft">
              <input type="hidden" name="to_sqft" value="<?php echo $to_sqft ?>" id="to_sqft">
                          
            </div>
            <!-- Start properties content body -->
            <div class="aa-properties-content-body" id="pg_container">
              
            </div>
            <!-- Start properties content bottom -->
            <!--<div class="aa-properties-content-bottom">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li class="active"><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>-->
          </div>
        </div>
        <!-- Start properties sidebar -->
        <div class="col-md-3">
              <aside class="aa-properties-sidebar">

            <div class="aa-properties-single-sidebar">
              <h3>Properties Search</h3>
              <form action="">
              
              <!-- <input id="location" class="location" value="" type="hidden" placeholder="location" style="width: 161px;" disabled> -->
                <!-- <div class="aa-single-advance-search">
                  <input type="text" placeholder="Type Your Location" id="searchTextField">
                </div> -->
                <div class="aa-single-advance-search">
                  <select id="filter_category" name="">
                   <option selected="" value="">Category</option>
                   <?php foreach($categories as $row):?>
                    <option value="<?php echo $row->id?>"><?php echo $row->category?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                <div class="aa-single-advance-search">
                 <select id="filter_available_for">
                    <option value="" selected>available for</option>
                    <option value="Boy">Boy</option>
                    <option value="Girl">Girl</option>
                    <option value="Mixed">Mixed</option>
                  </select>
                </div>

                <div class="aa-single-advance-search">
                  <select id="filter_suitable_for">
                    <option value="" selected>Suitable for</option>
                    <option value="Students">Students</option>
                    <option value="Working Professionals">Working Professionals</option>                                                           
                  </select>
                </div>

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
     
  <!-- / content  -->
<script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script> 
 <script>
  $(document).ready(function () {	  
	  
	getPgPropertyList();	
  
  	/*function initialize() {
      var input = document.getElementById('searchTextField');
      var autocomplete = new google.maps.places.Autocomplete(input);
	  //autocomplete.bindTo('bounds', map);
         var infowindow = new google.maps.InfoWindow();
         google.maps.event.addListener(autocomplete, 'place_changed', function (event) {
             infowindow.close();
             var place = autocomplete.getPlace();
			 var addressData = place.address_components;			 
			 var addrLocation = [];
			 addressData.forEach(function(address) {				 
				 var addr = address.long_name;
				 addrLocation.push(addr);				 
			 });
			 addrLocation = JSON.stringify(addrLocation);
			 $('.loc').val(addrLocation);
		 });
   }
   google.maps.event.addDomListener(window, 'load', initialize);*/




   function initialize() {
    //var input = document.getElementsByClassName('search');
      var input = document.getElementById('searchid');
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



   var SITE_URL = "<?php echo site_url();?>";
     $('#pg_search').on('click', function() {
       if($('#location').val() == ''){
         alert('please select a city,state or locality');
       }else{      
        var category = $('#category').val();
        var location = $('#location').val();
        var availableFor = $('#available_for').val();
        var suitableFor = $('#suitable_for').val();
        var furnishinglevel = $('#furnishing_level').val();
        var bedrooms = $('#bed_rooms').val();
        var lat = $('#lat').val();
        var lng = $('#lng').val();

       var pgFeatures = [];
       $('input[name=pg_adv_features]:checked').map(function() {
           pgFeatures.push($(this).val());
       });
      
      var querystring = 'category='+category+'&location='+location+'&availableFor='+availableFor+'&suitableFor='+suitableFor+'&furnishinglevel='+furnishinglevel+'&bedrooms='+bedrooms+'&lat='+lat+'&lng='+lng+'&features='+pgFeatures+'';

     window.location.href= SITE_URL+'/paying-guest-properties/?'+querystring;
       }
     });




	
  });
  
  function getPgPropertyList(sortField,perpage){
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
		var url = SITE_URL+"/property/pglist/"+''+offset;
		$.ajax({
			type: "POST",
			//dataType: 'json',
			data: {
			'sort_field': sortField,
			'perpage': perpage,
      'category': $('#pg_category').val(),
      'country': $('#pg_country').val(),
      'state': $('#pg_state').val(),
      'district': $('#pg_district').val(),
      'loc': $('#pg_loc').val(),
      'availableFor': $('#pg_available_for').val(),
      'suitableFor': $('#pg_suitable_for').val(),
      'furnishinglevel': $('#pg_furnishing_level').val(),
      'bedrooms': $('#pg_bedrooms').val(),
      'features': $('#pg_features').val(),
      'from_price': $('#from_price').val(),
      'to_price': $('#to_price').val(),
      'from_sqft': $('#from_sqft').val(),
      'to_sqft': $('#to_sqft').val()
			},
		   url: url,
		success: function(response){
			//console.log(response);
			$( '#pg_container' ).html(response);	

		}
			 
	   });	
	  
  }
  
    var SITE_URL = "<?php echo site_url();?>";
  function searchProperties()
  {
	  var category = $('#filter_category').val();
	  var availableFor = $('#filter_available_for').val();
	  var suitableFor = $('#filter_suitable_for').val();
  
	  var from_price = $('#skip-value-lower2').val();
	  var to_price = $('#skip-value-upper2').val();
	  var from_sqft = $('#skip-value-lower').val();
	  var to_sqft = $('#skip-value-upper').val();

	   var querystring = 'category='+category+'&availableFor='+availableFor+'&suitableFor='+suitableFor+'&from_price='+from_price+'&to_price='+to_price+'&from_sqft='+from_sqft+'&to_sqft='+to_sqft+'';

     window.location.href= SITE_URL+'/paying-guest-properties/?'+querystring;
	   
   }
  
</script>