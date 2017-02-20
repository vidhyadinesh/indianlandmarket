<section id="aa-property-header-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Add Details</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>
            <li><a href="#">Properties</a></li>                
            <li class="active">Add Details</li>
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
        <div class="col-md-12">
           <section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                    
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Basic Details">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                        <div class="text-center">Basic Details</div><br>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Location">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                        <div class="text-center">Location</div><br>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Property Details">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                        <div class="text-center">Property Details</div><br>
                    </li>
                    
                     <li role="presentation"  class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Amenities">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                        <div class="text-center">Amenities</div><br>
                    </li>
                    <li role="presentation"  class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step4" role="tab" title="Pricing">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                        <div class="text-center">Image</div><br>
                    </li>
                </ul>
            </div>
          <form class="form-horizontal" id="add_prop_step1" method="post">
            <fieldset>
              <!-- Form Name -->
              <legend>Submit your property here <small>start with the following steps </small></legend>
              <div class="form-group form-group-sm">
              	<input type="hidden" name="property_id" value="<?php if(isset($propertyId)){ echo $propertyId ?> <?php } ?>" id="property_id">
                <label for="radios-inline" class="control-label col-sm-2">* I want to:</label>
                <div class="radio col-sm-10"> 
                  <label class="radio-inline"><input type="radio" name="purpose" value="sell" <?php if(!empty($details['purpose'])&& $details['purpose'] == 'sell') {?> checked= checked <?php } ?>>Sell </label>
                  <label class="radio-inline"><input type="radio" name="purpose" value="rent/lease" <?php if(!empty($details['purpose'])&& $details['purpose'] == 'rent/lease') {?> checked= checked <?php } ?>>Rent / Lease Out</label>
                  <?php /*?><label class="radio-inline"><input type="radio" name="purpose" value="paying guest" <?php if(!empty($details['purpose'])&& $details['purpose'] == 'paying guest') {?> checked= checked <?php } ?>>Paying guest</label><?php */?>
                  <?php if(!isset($propertyId)){ ?>
                   &nbsp; <a href="<?php echo site_url()."add-pg"?>" class="btn btn-success btn-xs" >List Your PG Here!</a>
                  <?php } ?>
                </div>
              </div>               
              
              <div class="form-group form-group-sm">
                <label for="textinput" class="control-label col-sm-2">* Category</label>
                <div class="col-sm-4">
                      <select id="category" name="category" class="form-control">
                        <option value="">Select</option>
                        <?php foreach($categories as $row):?>
              				<option value="<?php echo $row->id ?>" <?php if(isset($details['category'])&& $details['category']== $row->id){ ?> selected= selected<?php }?>><?php echo $row->category?></option>                
						<?php endforeach;?>
                      </select>
                </div>
               <label for="textinput" class="control-label col-sm-2">Sub category</label>
                <div class="col-sm-4">
                      <select id="subCategory" name="sub_category" class="form-control">
                      <option value="">Select</option>
                      <?php if(!empty($details['sub_category'])){
						  foreach($subcategories as $sub):
						  ?>
                      <option value="<?php echo $sub->id ?>" <?php if($details['sub_category']== $sub->id){ ?> selected= selected<?php }?>><?php echo $sub->sub_category?></option>
                      <?php endforeach;
					  }
					  ?>
                      </select>
                </div>
              </div>
              <div class="form-group form-group-sm" <?php if(isset($details['possession_date']) && $details['possession_date']!= 0000-00-00){?>style="display:block" <?php }else {?> style="display:none" <?php }?> id="possession">
               <label for="textinput" class="control-label col-sm-2">Possession Date</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" placeholder="dd/mm/yyyy" name="possession_date" id="possession_date" value=<?php echo isset($details['possession_date']) ? $details['possession_date']:''?>>
                </div>
              </div>
              
             <h4> Property Details</h4>
              <div class="form-group form-group-sm">
                <label for="textinput" class="control-label col-sm-2">* Property Title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="title" name="title" id="title" value=<?php echo isset($details['title']) ? $details['title']:''?>>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="textarea">* Description</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="description" name="description" rows="5"><?php echo isset($details['description']) ? $details['description']:''?></textarea>
                </div>
              </div>
              
              <div class="form-group form-group-sm">
                <label for="textinput" class="control-label col-sm-2">* Estimated Price</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="estimated price" name="estimated_price" id="estimated_price" value=<?php echo isset($details['estimated_price']) ? $details['estimated_price']:''?>>
                </div>
              </div>

              <div class="form-group form-group-sm">
                <label for="textinput" class="control-label col-sm-2">Area</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Area" name="area" id="area" value=<?php echo isset($details['area']) ? $details['area']:''?>>
                </div>
              </div>

              <div class="form-group form-group-sm">
                <label for="textinput" class="control-label col-sm-2">Unit</label>
                <div class="col-sm-10">
                <select id="unit" name="unit">
                  <option value="">Select</option>                       
                      <option value="Cent" <?php if(!empty($details['unit'])&& $details['unit'] == 'Cent') {?> selected= selected <?php } ?>>Cent</option>  
                      <option value="Acre" <?php if(!empty($details['unit'])&& $details['unit'] == 'Acre') {?> selected= selected <?php } ?>>Acre</option>
                     <option value="Are" <?php if(!empty($details['unit'])&& $details['unit'] == 'Are') {?> selected= selected <?php } ?>>Are</option>
                      <option value="Yard" <?php if(!empty($details['unit'])&& $details['unit'] == 'Yard') {?> selected= selected <?php } ?>>Yard</option>
                      <option value="Hectare" <?php if(!empty($details['unit'])&& $details['unit'] == 'Hectare') {?> selected= selected <?php } ?>>Hectare</option>
                </select>
                </div>
              </div>
              
              <div class="form-group form-group-sm">
                <label for="textinput" class="control-label col-sm-2">* Sqft</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="sqft" name="sqft" id="sqft" value=<?php echo isset($details['sqft']) ? $details['sqft']:''?>>
                </div>
              </div>               


              <div class="form-group form-group-sm">
                <label for="textinput" class="control-label col-sm-2">Video URL</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Enter the YouTube Video URL" name="video" id="video" value=<?php echo isset($details['video']) ? $details['video']:''?>>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-sm-2" for="textarea">Additional Information</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="additional_info" name="additional_info" rows="5"><?php echo isset($details['additional_info']) ? $details['additional_info']:''?></textarea>
                </div>
              </div>
              <hr>
            </fieldset>
           <input type="submit" class="btn btn-primary next-step" value="save and continue">          
           
          </form>
            
            <!--<ul class="list-inline pull-right">
                  <li><input type="button" class="btn btn-primary next-step" id="step1" >Save and continue</li>
                  
            </ul>-->
        </div>
    </section>
        </div>
      </div>
    </div>
  </section>
  <script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script> 
  <script src="<?php echo base_url()."assets/js/validate.js"?>"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>   
  <script>
  $(document).ready(function () {	  
	  
	  //getDatePicker();
	  var SITE_URL = "<?php echo site_url();?>";
	  $('#category').on('change', function() {
		var categoryId = this.value;
		var url = SITE_URL+"postproperty/subcategories";
		$.ajax({
	    type: "POST",
		dataType: 'json',
	    data: {
		'category_id': categoryId
        },
	   url: url,
	   success: function(data){
		$('#subCategory').find('option').remove();

        $.each(data, function () { 
            $('#subCategory').append(
                $('<option></option>').val(this.id).html(this.sub_category)
            );
        });

   		}
		});
		
		
		 $('#subCategory').on('change', function() {
			 var subCategoryId = this.value;
		 
			 var url = SITE_URL+"postproperty/get-subcategorytype";
			$.ajax({
				type: "POST",
				dataType: 'json',
				data: {
				'id': subCategoryId
				},
			   url: url,
		   	success: function(data){
				if(data.sub_category == 'Ongoing projects'){
					$('#possession').show();
				}else{
					$('#possession').hide();
				}
			}
				 
		   });			 
			 
			 
		 });
	});
	
	
	$("#add_prop_step1").validate({ 
    rules: {
            purpose: "required",
            category: "required",
			title:"required",
			description:"required",
			estimated_price:"required",
			sqft:"required",
        
        },
    messages: {
            purpose: "Please select a purpose",
            category:"please select category",
			title:"please enter title",
			description:"please enter description",
			estimated_price:"please enter estimated price",
			sqft:"please enter sqft",
          
        },
        
        submitHandler: function(form) {
			$.ajax({
				url: SITE_URL+"postproperty/step1",
				type: 'POST',
				data: {
					'data':$(form).serialize()
				},
				success: function(response) {
					$( '#container' ).html(response);
					mapInitialise();				
				}            
        	});
        }
    });
	
	
	var $jqDate = jQuery('input[name="possession_date"]');

	//Bind keyup/keydown to the input
	$jqDate.bind('keyup','keydown', function(e){
		
	  //To accomdate for backspacing, we detect which key was pressed - if backspace, do nothing:
		if(e.which !== 8) {	
			var numChars = $jqDate.val().length;
			if(numChars === 2 || numChars === 5){
				var thisVal = $jqDate.val();
				thisVal += '-';
				$jqDate.val(thisVal);
			}
	  }
	});


  /*$('.video_type').on('click', function() {   
  $("#video_url").show();
  });*/

	
	
  });
  
  /*function getDatePicker(){
	  $( "#possession_date" ).datepicker({
		  changeMonth: true,//this option for allowing user to select month
		  changeYear: true,
		  dateFormat: 'yy-mm-dd' //this option for allowing user to select from year range
    });
  }*/
  </script>