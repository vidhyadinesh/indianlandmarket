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
                    
                    <li role="presentation" class="active">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Amenities">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                        <div class="text-center">Amenities</div><br>
                    </li>
                    <li role="presentation" class="active">
                        <a href="#step3" data-toggle="tab" aria-controls="step4" role="tab" title="Pricing">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                        <div class="text-center">Image</div><br>
                    </li>
                </ul>
            </div>          
            <?php include("$page_content.php"); ?>
            
           <!-- <ul class="list-inline pull-right">
            <li><a href="add-details-step4.php" class="btn btn-default prev-step">Previous</a></li>
            <li><a type="button" class="btn btn-primary next-step" href="" >Save</a></li>
           </ul>-->
           <!--<div id="complete">
                        <h3>Complete</h3>
                        <p>You have successfully completed all steps.</p>
           </div>-->
            <div id="progress-wrp"><div class="progress-bar"></div ><div class="status">0%</div></div>
    <div id="output"><!-- error or success results --></div>          
        
        </div>
    </section>
        </div>
      </div>
    </div>
  </section>
  <!-- / Properties  -->
  <!-- <script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script> 
<script src="<?php echo base_url()."assets/js/validate.js"?>"></script> -->
 <script>
  //$(document).ready(function () {
	  
	  var SITE_URL = "<?php echo site_url();?>";
		  $("#save").on('click',function (e) { 
			//e.preventDefault();
			
			var formData = new FormData();
			formData.append('property_id',$( '#property_id' ).val());
      		//formData.append('floor_image',floor_images.files[0]);
			$.each($("input[name^='property_images']"), function(i, obj) {
					$.each(obj.files,function(j, file){
						formData.append('prop_image['+j+']', file);
					})
			});
			
			$.each($("input[name^='floor_images']"), function(i, obj) {
					$.each(obj.files,function(j, file){
						formData.append('floor_image['+j+']', file);
					})
			});
			
			//var floorPlanImage = [];
			/*$.each($("input[name^='floor_plan_image']"), function(i, obj) {
					$.each(obj.files,function(j, file){
						//console.log(file); //showing each file here. But not able to post these files
						formData.append('floor_plan_image['+j+']', file);
						
					})
			});*/			
			
			var floorPlanArr = [];
			$.each($('.floor_plans'), function(i, item) {
				//var n = i+1;
				var n = $(this).attr("id");
				//alert(n);
				var floortype =  $('#type'+n+'').val();
				var floorsqft =  $('#sqft'+n+'').val();
				var floorcost =  $('#cost'+n+'').val();
				var floortitle =  $('#title'+n+'').val();
				
				//var file = inputFileImage.files[0];
				//alert(floor_plan_image+'+n+');
				
				 var planimage = $('#floor_plan_image'+n+'').prop('files')[0]; 
				 //console.log(planimage);
				 /*if(!planimage){
					 alert('please add plan image');
					 e.preventDefault();
				 }*/
				 formData.append('floor_plan_image['+n+']', planimage);
				//var image = $('#floor_plan_image'+n+'').files[0];
				
								
				//var image = $('floor_plan_image'+n+'').files[0];
				//var files = $(".floor_plan_file").get(0).files;
				//formData.append('floor_plan_image[]',files[0]);
				//console.log(files);	
				floorPlanArr.push({
            		type: floortype, 
            		sqft: floorsqft,
					cost: floorcost,
					title: floortitle,
					//image: files[0]
        		});
				
			});
			floorPlanArr = JSON.stringify(floorPlanArr);
			//console.log(floorPlanArr);		
			formData.append('floor_plans',floorPlanArr);
				
			$.ajax({
				url: SITE_URL+"/postproperty/step5",
				type: 'POST',
				data: formData,
				//dataType:"json",
				processData: false,
         		contentType: false,
xhr: function(){
        //upload Progress
        var xhr = $.ajaxSettings.xhr();
        if (xhr.upload) {
            xhr.upload.addEventListener('progress', function(event) {
                var percent = 0;
                var position = event.loaded || event.position;
                var total = event.total;
                if (event.lengthComputable) {
                    percent = Math.ceil(position / total * 100);
                }
                //update progressbar
                $(" .progress-bar").css("width", + percent +"%");
                $(" .status").text(percent +"%");
            }, true);
        }
        return xhr;
    },
    //mimeType:"multipart/form-data"



				success: function(response) {


					//console.log(response);	
					var encodedPropId = btoa(response);
					alert('You have successfully completed all steps.');
					location.href = "<?php echo site_url()?>/property/success/?id="+encodedPropId;			
				}            
        	});
		});

      $("#previous").on('click',function (e) { 
        //alert('dfd');
        var propId = $( '#property_id' ).val();
        $.ajax({
        url: SITE_URL+"/postproperty/step3",
        type: 'POST',
        data: {
          'property_id':propId
        },
        //dataType:"json",
        //processData: false,
        success: function(response) {
          console.log(response);  
          $( '#container' ).html(response);       
        }            
          });

      });
	  
	var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $("#floor_plans"); //Fields wrapper
    var add_button      = $("#add_floor_plan"); //Add button ID
    
    var x = 0; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row floor_plans" id="'+x+'"><div class="col-sm-2"><input type="text" class="form-control title" id="title'+x+'" value="" placeholder="title"/></div><div class="col-sm-2"><input type="text" class="form-control type" id="type'+x+'" value="" placeholder="type"/></div><div class="col-sm-2"><input type="text" class="form-control sqft" id="sqft'+x+'" value="" placeholder="sqft"/></div><div class="col-sm-2"><input type="text" class="form-control cost" id="cost'+x+'" value="" placeholder="cost"/></div><div class="col-sm-2"><input type="file" name="floor_plan_image" id="floor_plan_image'+x+'" value=""/></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })	
	
	
	function removePropImage(propImageId){
	  $.ajax({
			type: "POST",
			//dataType: 'json',
			data: {
			'id': propImageId
			},
		   url: SITE_URL+"/remove-prop-image",
		   success: function(response){
			  alert('removed successfully');
			  $("#prop_image"+propImageId).html('deleted');
			  //document.getElementById('prop_image_'+propImageId).style.display = 'none';	
			  //$('#prop_image_'+propImageId).attr("style", "display:none");				   
			}				 
	  });	
	  
  }
  
  function removeFloorImage(floorImageId){
	   $.ajax({
			type: "POST",
			data: {
			'id': floorImageId
			},
		   url: SITE_URL+"/remove-floor-image",
		   success: function(response){
			  alert('removed successfully');
			  $("#floor_image"+floorImageId).html('deleted');					   
			}				 
	  });	
  }
  
  function removeFloorPlanImage(floorPlanId){
	  $.ajax({
			type: "POST",
			data: {
			'id': floorPlanId
			},
		   url: SITE_URL+"/remove-floor-plan",
		   success: function(response){
			  alert('removed successfully');
			  $("#floor_plan"+floorPlanId).html('deleted');				   
			}				 
	  });	
  }
  </script>             
  