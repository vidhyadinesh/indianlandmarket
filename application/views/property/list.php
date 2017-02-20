 <!--<link href="<?php /*?><?php echo base_url()."assets/css/style.css"?><?php */?>" rel="stylesheet">-->
 <!-- Start Property header  -->

  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Properties Page</h2>
            <ol class="breadcrumb">
            <li><a href="<?php echo site_url();?>">HOME</a></li>            
            <li class="active">PROPERTIES</li>
          </ol>
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


  //var SITE_URL = "<?php echo site_url();?>";
   
  
	  
	  function initialize() {
      var input = document.getElementById('searchTextField');
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
             //$('.MapLat').val(place.geometry.location.lat());
             //$('.MapLon').val(place.geometry.location.lng());
			 
			 var addressData = place.address_components;			 
			 var addrLocation = [];
			 addressData.forEach(function(address) {				 
				 var addr = address.long_name;
				 addrLocation.push(addr);				 
			 });
			 addrLocation = JSON.stringify(addrLocation);
			 $('#location').val(addrLocation);
		 });
   }
   google.maps.event.addDomListener(window, 'load', initialize);
  	  
 // });	
  
  	/*$('#sort_property').on('change', function() {
			 var sortField = this.value;
			 getPropertyList(sortField);
	});*/
	
	
   /*$(".custompagination a").click(function(){
	   $.ajax({
	   type: "POST",
	   url: $(this).attr("href"),
	   //data:"q=<?php /*?><?php echo $searchString; ?><?php */?>",
	   data: {
				'sort_field': $('#sort_property').val();
				},
	   success: function(res){
		  $("#container").html(res);
	   }
	   });
	   return false;
	   });*/
	
  });
  
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
		var url = SITE_URL+"/property/listing/"+''+offset;
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
  
  
  var SITE_URL = "<?php echo site_url();?>";
  function searchProperties()
  {
	  //var country = $('#country').val();
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
	  var querystring = 'purpose='+purpose+'&category='+category+'&subcategory='+subcategory+'&from_price='+from_price+'&to_price='+to_price+'&location='+location+'&from_sqft='+from_sqft+'&to_sqft='+to_sqft+'';	  

	   window.location.href= SITE_URL+'/properties/?'+querystring;
	   
   }
  
</script>
  
<!--<div id="properties_container">
</div>-->