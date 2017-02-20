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
        
          <div class="col-md-8 col-md-offset-2">
          <div class="text-center jumbotron">
            <h3 class="text-success">Your property has been posted!</h3>
            <hr>
            <p class="text-muted">It will appear on the website within 24 hours after verification.</p>
          </div>
          
              <article class="aa-properties-item">

                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <!--<span>5 Rooms</span>
                        <span>2 Beds</span>
                        <span>3 Baths</span>
                        <span>1100 SQ FT</span>-->
                      </div>
                      <div class="aa-properties-about">
                        <h4><a href="<?php echo site_url()."/property/view/".$prop_detail['id']?>"><?php echo $prop_detail['title']?></a></h4>
                        <p><?php echo $prop_detail['description']?></p>
                        <p><?php echo $prop_detail['address']?></p>                      
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          $ <?php echo $prop_detail['estimated_price']?>
                        </span>
                        <?php if($prop_detail['purpose'] == 'paying guest'){?>
                        <a class="aa-secondary-btn" href="<?php echo site_url()."/pg/edit/?id=".base64_encode($prop_detail['id'])?>">Edit Details</a>
                        <?php }else{?>
                         <a class="aa-secondary-btn" href="<?php echo site_url()."/postproperty/edit/step1/?id=".base64_encode($prop_detail['id'])?>">Edit Details</a>
                         <?php }?>

                         <?php if($prop_detail['purpose'] == 'paying guest'){?>
                        <a class="aa-secondary-btn" href="<?php echo site_url()."/pg/view/".$prop_detail['id']?>">View Details</a>
                        <?php }else{?>
                         <a class="aa-secondary-btn" href="<?php echo site_url()."/property/view/".$prop_detail['id']?>">View Details</a>
                         <?php }?>

                         <a class="aa-secondary-btn" href="<?php echo site_url()."/my-properties"?>">View Added Properties</a></div
                        
                      </div>
                    </div>
                  </article>
          
          
        </div>
      </div>
    </div>
  </section>
  <!-- / Properties  -->
