  <!-- Start Property header  -->
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

                    <li role="presentation" class="active">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Location">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                        <div class="text-center">Location</div><br>
                    </li>
                    <li role="presentation" class="active">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Property Details">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                        <div class="text-center">Property Details</div><br>
                    </li>
                    
                     <li role="presentation"  class="active">
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
          <form class="form-horizontal" id="add_prop_step4" method="post">
            <fieldset>
              <!-- Form Name -->
             <?php include("amenities.php"); ?>
              
              <hr>
            </fieldset>
            <input type="button" class="btn btn-default prev-step" value="Previous" id="previous"> 
            <input type="submit" class="btn btn-primary next-step" value="save and continue">   
            
          </form>
           <!-- <ul class="list-inline pull-right">
            <li><a href="add-details-step3.php" class="btn btn-default prev-step">Previous</a></li>
            <li><a type="button" class="btn btn-primary next-step" href="add-details-step5.php" >Save and continue</a></li>
           </ul>-->
        </div>
    </section>
        </div>
      </div>
    </div>
  </section>
  <!-- / Properties  -->
  <script>
$(document).ready(function () {
	var SITE_URL = "<?php echo site_url();?>";
$("#add_prop_step4").validate({ 
    rules: {
            //master_rooms: "required",     
        },
    messages: {
            //master_rooms: "Please select master rooms",
         
        },        
        submitHandler: function(form) {
			var amenities = [];
			$('input[name=amenities]:checked').map(function() {
						amenities.push($(this).val());
			});
			//if(amenities.length === 0){
				//alert('please select any one of the amenities');
			//}else{	
      
			var amenityDetails = [];
			$('.amenity_desc').each(function() {
				var amenityId = $(this).attr('data-content');				
				//var amenityDesc =  if (typeof $(this).val()=='undefined')?$(this).val():'';
        	var amenityDesc =  $(this).val();
				if(amenityDesc){
					amenityDetails[amenityId] = amenityDesc;
				}

      });  

      var valid = true;   
        $('input[name=amenities]:checked').map(function() {
            //amenities.push($(this).val());
            var description = amenityDetails[$(this).val()];
            //alert($description);
            if(typeof description == 'undefined'){
              alert('please specify the approximate distance');
              $('#'+ $(this).val()).css('background-color', 'salmon');
              valid = false;
             
            }

        });

			
			if(valid){
			$.ajax({
				url: SITE_URL+"postproperty/step4",
				type: 'POST',
				data: {
					//'data':$(form).serialize(),
					'amenities': amenityDetails,
					//'amenity_details': amenityDetails,
					'property_id': $( '#property_id' ).val()
				},
				success: function(response) {
					//console.log(response);	
					$( '#container' ).html(response);				
				}            
        	});

    }
			
			//}
        }
    });
	
	
	$("#previous").on('click',function (e) { 
        //alert('dfd');
        var propId = $( '#property_id' ).val();
        $.ajax({
        url: SITE_URL+"postproperty/edit/step3",
        type: 'POST',
        data: {
          'property_id':propId
        },
        //dataType:"json",
        //processData: false,
        success: function(response) {
          //console.log(response);  
          $( '#container' ).html(response);       
        }            
          });

     });
	  
	  
	});
</script>   
