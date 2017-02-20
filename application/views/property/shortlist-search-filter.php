  <!-- Start Property header  -->
  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Shortlisted Property</h2>
            <ol class="breadcrumb">
            <li><a href="<?php echo site_url();?>">HOME</a></li>            
            <li class="active">Shortlisted Property Details</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Property header  -->

  <!-- Start content  -->
    
    <section id="aa-properties">
    <div class="container">
    <h3>Shortlisted Property List</h3>
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
                          
            </div>
            <!-- Start properties content body -->
            <div class="aa-properties-content-body" id="shortlist_container">
              
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
                                <option selected="" value="100">100</option>
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
     
  <!-- / content  -->
<script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script> 
 <script>
  $(document).ready(function () {	  
	  
	getShortlistedPropertyList();	
  
  	function initialize() {
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
			 $('.location').val(addrLocation);
		 });
   }
   google.maps.event.addDomListener(window, 'load', initialize);
	
  });
  
  function getShortlistedPropertyList(sortField,perpage){
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
		var url = "property/shortlist/"+''+offset;
		$.ajax({
			type: "POST",
			//dataType: 'json',
			data: {
			'sort_field': sortField,
			'perpage': perpage
			},
		   url: url,
		success: function(response){
			console.log(response);
			$( '#shortlist_container' ).html(response);	

		}
			 
	   });	
	  
  }
  
    var SITE_URL = "<?php echo site_url();?>";
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

	   window.location.href= SITE_URL+'properties/?'+querystring;
	   
   }
  
</script>