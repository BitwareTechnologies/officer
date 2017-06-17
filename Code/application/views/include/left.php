<aside id="sidebar-left" class="sidebar-circle">

<!-- Start left navigation - profile shortcut -->
<div class="sidebar-content">
    <div class="media">
        <a class="pull-left has-notif avatar" href="page-profile.html">
            <img src="http://img.djavaui.com/?create=50x50,4888E1?f=ffffff" alt="admin">
            <i class="online"></i>
        </a>
        <div class="media-body">
            <h4 class="media-heading">Hello, <span>Lee</span></h4>
            <small>Web Designer</small>
        </div>
    </div>
</div><!-- /.sidebar-content -->
<!--/ End left navigation -  profile shortcut -->

    <!-- Start left navigation - menu -->
    <ul class="sidebar-menu">

        <!-- Start navigation - dashboard -->
        <li class="<?php if (isset($active_dashboard)){ echo $active_dashboard;} ?>">
            <a href="<?php echo site_url($this->config->item('link_url').'/dashboard'); ?>">
                <span class="icon"><i class="fa fa-home"></i></span>
                <span class="text">Dashboard</span>
                <?php if (isset($active_dashboard)){ ?>
                    <span class="selected"></span>
                <?php } ?>
            </a>
        </li>
        <li class="<?php if (isset($active_contract)){ echo $active_contract;} ?>">
            <a href="<?php echo site_url($this->config->item('link_url').'/contract'); ?>">
                <span class="icon"><i class="fa fa-home"></i></span>
                <span class="text">Contract</span>
                <?php if (isset($active_contract)){ ?>
                    <span class="selected"></span>
                <?php } ?>
            </a>
        </li>
        <!--/ End navigation - dashboard -->
    </ul><!-- /.sidebar-menu -->
    <!--/ End left navigation - menu -->
</aside><!-- /#sidebar-left -->