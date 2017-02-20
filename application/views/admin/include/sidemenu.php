<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $adminname ?></div>
                    <div class="email"><?php echo $adminemail?></div>
                                    <a href="<?php echo site_url()."admin/logout" ?>" class="aa-register" style="border-right:none">Logout</a>
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
                    <li class="active">
                        <a href="index.html">
                            <i class="<?php echo site_url()."admin/home"?>">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url()."admin/users"?>">
                            <i class="material-icons">view_list</i>
                            <span>User List</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url()."admin/pending-properties"?>">
                            <i class="material-icons">view_list</i>
                            <span>Pending Property List</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url()."admin/properties"?>">
                            <i class="material-icons">view_list</i>
                            <span>Property List</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url()."/admin/advertisement/listing"?>">
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
                                <a href="<?php echo site_url()."admin/amenities"?>">Add Amenities</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url()."admin/features"?>">Add Features</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url()."admin/subcategories"?>">Add Subcategory</a>
                            </li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 <a href="javascript:void(0);">Indian Land Market</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.3
                </div>
            </div>
            <!-- #Footer -->
        </aside>