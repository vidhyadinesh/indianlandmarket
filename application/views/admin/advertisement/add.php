<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Jquery DataTable | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url()."assets/admin/favicon.ico"?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url()."assets/admin/plugins/bootstrap/css/bootstrap.css"?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url()."assets/admin/plugins/node-waves/waves.css"?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url()."assets/admin/plugins/animate-css/animate.css"?>" rel="stylesheet" />

    <!-- Preloader Css -->
    <link href="<?php echo base_url()."assets/admin/plugins/material-design-preloader/md-preloader.css"?>" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="<?php echo base_url()."assets/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css"?>" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo base_url()."assets/admin/css/style.css"?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url()."assets/admin/css/themes/all-themes.css"?>" rel="stylesheet" />
    
    <!-- Multi Select Css -->
   <?php /*?> <link href="<?php echo base_url()."assets/admin/plugins/multi-select/css/multi-select.css"?>" rel="stylesheet"><?php */?>
    <!-- Bootstrap Select Css -->
    <?php /*?><link href="<?php echo base_url()."assets/admin/plugins/bootstrap-select/css/bootstrap-select.css"?>" rel="stylesheet" /><?php */?>
    <!-- Dropzone Css -->
    <link href="<?php echo base_url()."assets/admin/plugins/dropzone/dropzone.css"?>" rel="stylesheet">
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="md-preloader pl-size-md">
                <svg viewbox="0 0 75 75">
                    <circle cx="37.5" cy="37.5" r="33.5" class="pl-red" stroke-width="4" />
                </svg>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.html">ADMINBSB - MATERIAL DESIGN</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../../images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="../../index.html">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="userlist.html">
                            <i class="material-icons">view_list</i>
                            <span>User List</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url()."/admin/pending-properties"?>">
                            <i class="material-icons">view_list</i>
                            <span>Pending Property List</span>
                        </a>
                    </li>
                    <li>
                        <a href="propertylist.html">
                            <i class="material-icons">view_list</i>
                            <span>Property List</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="advertisements.html">
                            <i class="material-icons">view_list</i>
                            <span>Advertisements</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>General Setting</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../general/addamenities.html">Add Places</a>
                            </li>
                            <li>
                                <a href="../general/addamenities.html">Add Amneties</a>
                            </li>
                            <li>
                                <a href="../general/addfeatures.html">Add Features</a>
                            </li>
                            <li>
                                <a href="../general/addtype.html">Add Type</a>
                            </li>
                            <li>
                                <a href="../general/addsubtype.html">Add Subtype</a>
                            </li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 <a href="javascript:void(0);">Indian Property Market</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.3
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
                       
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Advertisement
                            </h2>
                            
                        </div>
                        <div class="body">
                       <!-- Large Size -->
                                   <form class="form-horizontal" id="add_advertisement" method="post" enctype="multipart/form-data">
                                    <div>
                                      <div class="row">
                                          <div class="col-md-4">
                                          <input type="hidden" name="id" value="<?php echo isset($advertisement_details['id'])? $advertisement_details['id']:''?>" id="id">
                                            <p>
                                              <b>Select Page</b>
                                              </p>
                                            <select class="form-control show-tick" id="page" name="page">
                                              <option value="">Select</option>
                                              <option value="home" <?php if(isset($advertisement_details['page'])&& $advertisement_details['page']== 'home'){ ?> selected= selected<?php }?>>Home Page</option>
                                              <option value="advanced_search" <?php if(isset($advertisement_details['page'])&& $advertisement_details['page']== 'advanced_search'){ ?> selected= selected<?php }?>>Advanced search</option>
                                              <option value="listing" <?php if(isset($advertisement_details['page'])&& $advertisement_details['page']== 'listing'){ ?> selected= selected<?php }?>>Property list</option>
                                              <option value="view" <?php if(isset($advertisement_details['page'])&& $advertisement_details['page']== 'view'){ ?> selected= selected<?php }?>>Property Detailed page</option>
                                              <option value="contact_popup" <?php if(isset($advertisement_details['page'])&& $advertisement_details['page']== 'contact_popup'){ ?> selected= selected<?php }?>>Contact page</option>
                                              <option value="floorplan_popup" <?php if(isset($advertisement_details['page'])&& $advertisement_details['page']== 'floorplan_popup'){ ?> selected= selected<?php }?>>Floorplan page</option>
                                              <option value="myaccount" <?php if(isset($advertisement_details['page'])&& $advertisement_details['page']== 'myaccount'){ ?> selected= selected<?php }?>>My account page</option>
                                              </select>
                                              
                                              <p>&nbsp;</p>
                                              <p>
                                              <b>Select Position</b>
                                              </p>
                                             <!-- <select id="position">
                                              <option value="">Select</option>
                                              </select>-->
                                            <select class="browser-default"  id="position" name="position">
                                              <option value="">Select</option>
                                              <?php if(!empty($advertisement_details['position'])){
												  foreach($positions as $pos):
												  ?>
											  <option value="<?php echo $pos->position ?>" <?php if($advertisement_details['position']== $pos->position){ ?> selected= selected<?php }?>><?php echo $pos->position?></option>
											  <?php endforeach;
											  }
											  ?>
                                              </select>
                                              
                                          </div>
                                            <div class="col-md-4"><p>Add Image<p>
                                              <!--<form action="/" id="frmFileUpload" class="dropzone dz-clickable" method="post" enctype="multipart/form-data">
                                                <div class="dz-message">
                                                  <h4>Drop files here or click to upload.</h4>
                                                  
                                                </div>
                                                
                                              </form>-->
                                              <?php if(isset($advertisement_details['image'])) {?>
                                              <img src="<?php echo base_url()."uploads/advertisement/".$advertisement_details['image']?>" width="100" height="40" alt=""/>
                                              <?php }?>
                                              <input type="file" id="fileupload" name="fileupload"> 
                                            </div>
                                            <div class="col-md-4"><p>Add Link</p>
                                              <div class="form-group">
                                                <div class="form-line">
                                                  <input type="text" class="form-control" placeholder="add link" id="advlink" name="advlink" value="<?php echo isset($advertisement_details['link'])? $advertisement_details['link']:''?>">
                                                  </div>
                                               </div>
                                            </div>                              
                                      </div>
                                    </div>            
                           
                             <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary next-step" value="save">
                             </div>
                             </form>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url()."assets/admin/plugins/jquery/jquery.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/validate.js"?>"></script>
    <script>
	  $(document).ready(function () {
		  
	  var SITE_URL = "<?php echo site_url();?>";
	  $('#page').on('change', function() {
		  var page = this.value;
		  //alert(page);
		  var url = SITE_URL+"/advertisement/getposition";
		  $.ajax({
			type: "POST",
			dataType: 'json',
			data: {
			'page': page
			},
		   url: url,
	      success: function(data){
			  //console.log(data);
			  
			  $('#position').find('option').remove();

			  $.each(data, function () { 
			    //alert(this.position);
				$('#position').append(
					$('<option></option>').val(this.position).html(this.position)
				);
			  });
		
	      }
		});
	 });
	 
	 
	 /*$("#add").on('click',function (e) { 
	     var formData = new FormData();
			formData.append('page',$( '#page' ).val());
			formData.append('position',$( '#position' ).val());
			formData.append('link',$( '#link' ).val());
      		formData.append('image',fileupload.files[0]);
			$.ajax({
				url: SITE_URL+"/advertisement/save",
				type: 'POST',
				data: formData,
				//dataType:"json",
				processData: false,
         		contentType: false,
				success: function(response) {
					//console.log(response);	

					alert('advertisement added');
					window.location.reload();			
				}            
        	});
	  });*/
	  
	  $("#add_advertisement").validate({ 
    rules: {
            page: "required",
            position: "required",
			fileupload:"required",
			advlink:"required",
       
        },
    messages: {
            page: "Please select a page",
            position:"please select position",
			fileupload:"please select an image",
			advlink:"please enter link",
          
        },
        
        submitHandler: function(form) {
			
			var formData = new FormData();
			//if(!empty($( '#id' ).val())){
			formData.append('id',$( '#id' ).val());
			//}
			formData.append('page',$( '#page' ).val());
			formData.append('position',$( '#position' ).val());
			formData.append('link',$( '#advlink' ).val());
      		formData.append('image',fileupload.files[0]);
			$.ajax({
				url: SITE_URL+"/advertisement/save",
				type: 'POST',
				data: formData,
				//dataType:"json",
				processData: false,
         		contentType: false,
				success: function(response) {
					//console.log(response);	

					//alert('advertisement added');
					location.href = '<?php echo site_url()."/admin/advertisement/listing"?>';			
				}            
        	});
        }
    });
			
	  });
   </script>
	<?php /*?><script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script><?php */?> 
    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url()."assets/admin/plugins/bootstrap/js/bootstrap.js"?>"></script>

    <!-- Select Plugin Js -->
    <?php /*?><script src="<?php echo base_url()."assets/admin/plugins/bootstrap-select/js/bootstrap-select.js"?>"></script<?php */?>>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url()."assets/admin/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url()."assets/admin/plugins/node-waves/waves.js"?>"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url()."assets/admin/plugins/jquery-datatable/jquery.dataTables.js"?>"></script>
    <script src="<?php echo base_url()."assets/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"?>"></script>
    <script src="<?php echo base_url()."assets/admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/admin/plugins/jquery-datatable/extensions/export/jszip.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"?>"></script>
    <script src="<?php echo base_url()."assets/admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"?>"></script>
    <!-- Select Plugin Js -->
    <?php /*?><script src="<?php echo base_url()."assets/admin/plugins/bootstrap-select/js/bootstrap-select.js"?>"></script><?php */?>
    <!-- Multi Select Plugin Js -->
    <?php /*?><script src="<?php echo base_url()."assets/admin/plugins/multi-select/js/jquery.multi-select.js"?>"></script><?php */?>
    <!-- Dropzone Plugin Js -->
    <script src="<?php echo base_url()."assets/admin/plugins/dropzone/dropzone.js"?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url()."assets/admin/js/admin.js"?>"></script>
    <script src="<?php echo base_url()."assets/admin/js/pages/tables/jquery-datatable.js"?>"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url()."assets/admin/js/demo.js"?>"></script>
    

   
</body>

</html>