<?php 
	header("Content-Type: text/html; charset=UTF-8"); 
	header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	header('P3P: CP="ALL ADM DEV PSAi COM OUR OTRo STP IND ONL"');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Indian Land Market | Properties Details</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

        <script type="text/javascript">
            var base_url 		= "<?php echo base_url(); ?>";
            var image_url 		= "<?php echo image_url();?>";
            var ssl_url 		= "<?php echo base_url();?>";	  
             var gmap_url 		= "<?php echo $this->config->item('google_map_url');?>";
        </script>
        <?php //echo load_js_files_direct($js);?>    
        <noscript>	</noscript>
            	
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
    <link id="switcher" href="<?php echo base_url()."assets/css/theme-color/green-theme.css"?>" rel="stylesheet"><!-- Main style sheet -->
    <link href="<?php echo base_url()."assets/css/style.css"?>" rel="stylesheet">    
    
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/mediaelementplayer.css"?>">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/> 
    <style>
		label.error {
			color: #f00;
    		margin-left: 0;
    		padding-left: 0;
			}
      html, body, #map-canvas  {
          margin: 0;
          padding: 0;
          height: 100%;
        }

        #map-canvas {
          width:570px;
          height:480px;
        }
        .modal-body{position: relative}
        .modal-body button{
            position: absolute;
            top: 0px;
            right: 0px;
            padding: 1px 3px;
            border: 0;
            background: transparent;}
        .modal-body button:hover{border:0;}

      #progress-wrp {
          border: 1px solid #0099CC;
          padding: 1px;
          position: relative;
          border-radius: 3px;
          margin: 0 auto;
          text-align: left;
          background: #fff;
          box-shadow: inset 1px 3px 6px rgba(0, 0, 0, 0.12);
          width: 77%;
          height: 15px;
          line-height: 6px;

      }
      #progress-wrp .progress-bar{
          height: 10px;
          border-radius: 3px;
          background-color: #f39ac7;
          width: 0;
          box-shadow: inset 1px 1px 10px rgba(0, 0, 0, 0.11);
      }
      #progress-wrp .status{
          top:3px;
          left:50%;
          position:absolute;
          display:inline-block;
          color: #000000;
      }
	</style>

   
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
       

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
       <!-- Owl Carousel Assets -->
    <link href="<?php echo base_url()."assets/owl-carousel/owl.carousel.css"?>" rel="stylesheet">
    <link href="<?php echo base_url()."assets/owl-carousel/owl.theme.css"?>" rel="stylesheet"> 
	</head>
	<body class="aa-price-range">  
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="pulse"></div>
  </div>
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <?php $this->load->view('header'); ?>

  <!-- Start Property header  -->
  <div id="container">
  <?php echo $content;?> 
  </div> 
  <!-- / Properties  -->

  <!-- Footer -->
  <?php $this->load->view('footer'); ?>
  <!-- / Footer -->

  <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script> 
  <script src="<?php echo base_url()."assets/js/validate.js"?>"></script> 
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> 
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQV0XNkk6SDcDoKfxxF0lPfSreU0w2FPU&libraries=places&region=uk&language=en&sensor=false" type="text/javascript"></script>   
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
  
  <script src="<?php echo base_url()."assets/owl-carousel/owl.carousel.js"?>"></script>
  
  <script>
  $(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
	
	/*$('#category').on('change', function() {
		var categoryId = this.value;
		var url = "postproperty/subcategories";
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
	});

	$("#add_prop_step1").validate({ 
    rules: {
            purpose: "required",
            category: "required",
			title:"required",
			description:"required",
			estimated_price:"required",
        
        },
    messages: {
            purpose: "Please select a purpose",
            category:"please select category",
			title:"please enter title",
			description:"please enter description",
			estimated_price:"please enter estimated price",
          
        },
        
        submitHandler: function(form) {
			$.ajax({
				url: "postproperty/step1",
				type: 'POST',
				data: {
					'data':$(form).serialize()
				},
				success: function(response) {
					console.log(response);	
					$( '#container' ).html(response);				
				}            
        	});
        }
    });*/
	
	
	
	
});

/*function formSubmit1(){
	$("#add_prop_step1").validate({
    rules: {
            purpose: "required",
            category: "required",
			project_title:"required",
			description:"required",
			estimated_price:"required",
        
        },
    messages: {
            purpose: "Please select a purpose",
            category:"please select category",
			project_title:"please enter title",
			description:"please enter description",
			estimated_price:"please enter estimated price",
          
        },
        
        submitHandler: function(form) {//alert($(this).attr('action'));
            //form.submit();
			$.ajax({
				url: "home/addpropertybasics",
				type: 'POST',
				//dataType: 'json',
				data: {
					'data':$(form).serialize()
				},
				success: function(response) {
					//console.log(response);	
					//$( '#container' ).html('');
					$( '#container' ).html(response);				
				}            
        	});
        }
    });
}

function formSubmit2(){
	
	$("#add_prop_step2").validate({
    rules: {
            country: "required",
            state: "required",
			district:"required",
			city:"required",
			address:"required",
        
        },
    messages: {
            country: "Please select a country",
            state:"please select state",
			district:"please select district",
			city:"please select city",
			address:"please enter address",
          
        },
        
        submitHandler: function(form) {//alert($(this).attr('action'));
            //form.submit();
			$.ajax({
				url: "home/addproplocations",
				type: 'POST',
				//dataType: 'json',
				data: {
					'data':$(form).serialize()
				},
				success: function(response) {
					//console.log(response);	
					$( '#container' ).html(response);				
				}            
        	});
        }
    });
}*/

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
  </script>

  </body>
</html>