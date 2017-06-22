<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <!-- START @HEAD -->
    <?php $this->load->view('include/head');?> 
    <!--/ END HEAD -->

    <!--

    |=========================================================================================================================|
	|  TABLE OF CONTENTS (Use search to find needed section)                                                                  |
	|=========================================================================================================================|
    |  01. @HEAD                        |  Container for all the head elements                                                |
	|  02. @META SECTION                |  The meta tag provides metadata about the HTML document                             |
	|  03. @FAVICONS                    |  Short for favorite icon, shortcut icon, website icon, tab icon or bookmark icon    |
	|  04. @FONT STYLES                 |  Font from google fonts                                                             |
	|  05. @GLOBAL MANDATORY STYLES     |  The main 3rd party plugins css file                                                |
	|  06. @PAGE LEVEL STYLES           |  Specific 3rd party plugins css file                                                |
	|  07. @THEME STYLES                |  The main theme css file                                                            |
	|  08. @IE SUPPORT                  |  IE support of HTML5 elements and media queries                                     |
	|=========================================================================================================================|
	|  09. @BODY                        |  Contains all the contents of an HTML document                                      |
	|  10. @LOADING ANIMATION           |  Loading animation when the page reload                                             |
	|  11. @WRAPPER                     |  Wrapping page section                                                              |
	|  12. @TOP BAR                     |  Top navigation contains logo and link sign                                         |
	|  13. @BANNER                      |  Banner landing page section                                                        |
	|  14. @TOP REASONS                 |  Top reasons feature page section                                                   |
	|  15. @BLANKON VERSIONS            |  Blankon versions page section                                                   |
	|  16. @BEAUTIFUL DESIGN            |  Feature 1 beautiful design                                                         |
	|  17. @RESPONSIVE LAYOUT           |  Feature 2 100% responsive layout                                                   |
	|  18. @PAGE INCLUDE                |  Feature 3 120+ page include                                                        |
	|  19. @COLOR SCHEMES               |  Feature 4 27 color schemes, 6 colors navbar and 6 colors sidebar                   |
	|  20. @FEATURES                    |  All feature blankon                                                                |
	|  21. @SUPPORTED RESOLUTIONS       |  Devices list supported resolutions                                                 |
	|  22. @SUMMARY                     |  Summary landing page section                                                       |
	|  23. @FOOTER                      |  Footer landing page section                                                        |
	|  24. @BACK TOP                    |  Element back to top and action                                                     |
	|=========================================================================================================================|
	|  25. @CORE PLUGINS                |  The main 3rd party plugins script file                                             |
	|  26. @PAGE LEVEL PLUGINS          |  Specific 3rd party plugins script file                                             |
	|  27. @PAGE LEVEL SCRIPTS          |  The main theme script file                                                         |
	|=========================================================================================================================|

    START @BODY
    |=========================================================================================================================|
	|  TABLE OF CONTENTS (Apply to body class)                                                                                |
	|=========================================================================================================================|
    |  01. page-boxed                   |  Page into the box is not full width screen                                         |
	|  02. page-sound                   |  For playing sounds on user actions and page events                                 |
	|=========================================================================================================================|

	-->
    <body class="page-sound">

        <!--[if lt IE 9]>
        <p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- START @WRAPPER -->
        <div id="wrapper">          
            
            <!-- START @SIGN WRAPPER -->
            <div id="sign-wrapper">

                <!-- Brand -->
                <div class="brand">
                    <img src="<?php echo base_url(); ?>assets/logo.png" width="200" alt="..."/>
                </div>
                <!--/ Brand -->
                <h3><?php echo $message;?></h3>
                <!-- Login form -->
                <form class="sign-in form-horizontal shadow rounded no-overflow" action="<?php echo base_url();?>index.php/admin/login/checkValidUser" method="post">
                    <div class="sign-header">
                        <div class="form-group">
                            <div class="sign-text">
                                <span>Member Area</span>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.sign-header -->
                    <div class="sign-body">
                        <div class="form-group">
                            <div class="input-group input-group-lg rounded no-overflow">
                                <input type="text" class="form-control input-sm" placeholder="Username or email " name="user_email">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <div class="input-group input-group-lg rounded no-overflow">
                                <input type="password" class="form-control input-sm" placeholder="Password" name="user_password">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.sign-body -->
                    <div class="sign-footer">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="ckbox ckbox-theme">
                                        <input id="rememberme" type="checkbox">
                                        <label for="rememberme" class="rounded">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <a href="<?php echo site_url($this->config->item('link_url').'/pages/lost-password'); ?>" title="lost password">Lost password?</a>
                                </div>
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded" id="login-btn">Sign In</button>
                        </div><!-- /.form-group -->
                    </div><!-- /.sign-footer -->
                </form><!-- /.form-horizontal -->
                <!--/ Login form -->

                <!-- Content text -->
                <p class="text-muted text-center sign-link">Need an account? <a href="page-signup.html"> Sign up free</a></p>
                <!--/ Content text -->

            </div><!-- /#sign-wrapper -->
            <!--/ END SIGN WRAPPER -->            

        </div>
        <!--/ END WRAPPER -->

        <!-- START @BACK TOP -->
        <div id="back-top" class="animated pulse">
            <i class="fa fa-angle-up"></i>
        </div>
        <!--/ END BACK TOP -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <?php echo put_footers();?>
        <!--/ END JAVASCRIPT SECTION -->

    </body>
    <!--/ END BODY -->

</html>
