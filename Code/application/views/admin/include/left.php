<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="logo-element" style="display: block;"><img alt="Officer - Logo" src="<?php echo base_url();?>assets/img/logo-white.png" width="200" /></div>
                <div class="dropdown profile-element">
                    <span>
                        <img alt="image" class="img-circle" src="<?php echo base_url();?>assets/img/profile_small.jpg" />
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> 
                            <span class="block m-t-xs"> 
                                <strong class="font-bold"><?php echo $_SESSION['user_first_name'].' '.$_SESSION['user_last_name'];?></strong>
                            </span> 
                        </span> 
                    </a>                    
                </div>
                <div class="logo-element">
                    <img alt="image" class="img-circle" src="<?php echo base_url();?>assets/img/profile_small.jpg" />
                </div>
            </li>
            <li class="<?php if (isset($active_dashboard)){ echo $active_dashboard;} ?>">
                <a href="<?php echo base_url();?>index.php/admin/dashboard"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboards</span></a>
            </li>
            <li class="<?php if (isset($active_office_features)){ echo $active_office_features;} ?>">
                <a href="<?php echo base_url();?>index.php/admin/officefeatures"><i class="fa fa-th-large"></i> <span class="nav-label">Office Features</span></a>
            </li>            
        </ul>

    </div>
</nav>