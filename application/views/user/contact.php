  <!-- Start Property header  -->

  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Contact</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>            
            <li class="active">Contact</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Property header  -->

 <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
          <div class="aa-contact-area">
            <div class="aa-contact-top">
              <div class="aa-contact-top-left">
                <!--<div id="map-canvas" style="height: 450px;width: 100%;margin: 0.6em;"></div>-->
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2375.5570949394073!2d-2.951629684693255!3d53.458503174006246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b2234c89066a1%3A0x344cba1c71748a25!2sIdeoder+Technologies+Pvt.+Ltd.+-+United+Kingdom!5e0!3m2!1sen!2sin!4v1486553195756" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
              <div class="aa-contact-top-right">
                <h2>Contact</h2>
                <p>Please feel free to connect us with your valuable feedback and suggestions.</p>
                <ul class="contact-info-list">
                  <li> <i class="fa fa-phone"></i> +44 75986 79168 </li>
                  <li> <i class="fa fa-envelope-o"></i> info@indianlandmarket.com</li>
                  <li> <i class="fa fa-map-marker"></i>Aintree Business Centre,Stopgate Lane,<br>Liverpool, L9-6AW, United Kingdom</li>
                </ul>
              </div>
            </div>
            <div class="aa-contact-bottom">
              <div class="aa-title">
                <h2>Send Your Message</h2>
                <span></span>
                <p>Your email address will not be published. Required fields are marked <strong class="required">*</strong></p>
              </div>
              <div class="aa-contact-form">
                <form class="contactform" id="contact_form" method="post">                  
                  <p class="comment-form-author">
                    <label for="author">Name <span class="required">*</span></label>
                    <input type="text" name="author" value="" size="30">
                  </p>
                  <p class="comment-form-email">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" name="email" value="" aria-required="true">
                  </p>
                  <p class="comment-form-url">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject">  
                  </p>
                  <p class="comment-form-comment">
                    <label for="comment">Message <span class="required">*</span></label>
                    <textarea name="message" cols="45" rows="8" aria-required="true"></textarea>
                  </p>                
                  <p class="form-submit">
                    <input type="submit" name="submit" class="aa-browse-btn" value="Send Message">
                  </p>        
                </form>
              </div>
            </div>
          </div>
       </div>
     </div>
   </div>
 </section>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQV0XNkk6SDcDoKfxxF0lPfSreU0w2FPU&v=3.exp"></script>    
   <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
   <script src="<?php echo base_url()."assets/js/validate.js"?>"></script>
   <script>
   
	
	var SITE_URL = "<?php echo site_url();?>";
	$("#contact_form").validate({ 
    rules: {
            author: "required",
            email: "required",
			message:"required"        
        },
    messages: {
            author: "Please enter author name",
            email:"please enter email",
			message:"please enter message"         
        },
        
        submitHandler: function(form) {
			$.ajax({
				url: SITE_URL+"contact/save",
				type: 'POST',
				data: {
					'data':$(form).serialize()
				},
				success: function(response) {
					alert('Your message hasbeen send successfully');				
				}            
        	});
        }
    });
	

  
   </script>