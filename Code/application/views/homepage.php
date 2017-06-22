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
|  10. @WRAPPER                     |  Wrapping page section                                                              |
|  11. @HEADER                      |  Header page section contains about logo, top navigation, notification menu         |
|  12. @SIDEBAR LEFT                |  Sidebar page section contains all sidebar menu left                                |
|  13. @PAGE CONTENT                |  Contents page section contains breadcrumb, content page, footer page               |
|  14. @SIDEBAR RIGHT               |  Sidebar page section contains all sidebar menu right                               |
|  15. @BACK TOP                    |  Element back to top and action                                                     |
|=========================================================================================================================|
|  16. @CORE PLUGINS                |  The main 3rd party plugins script file                                             |
|  17. @PAGE LEVEL SCRIPTS          |  The main theme script file                                                         |
|=========================================================================================================================|

START @BODY
|=========================================================================================================================|
|  TABLE OF CONTENTS (Apply to body class)                                                                                |
|=========================================================================================================================|
|  01. page-boxed                   |  Page into the box is not full width screen                                         |
|  02. page-header-fixed            |  Header element become fixed position                                               |
|  03. page-sidebar-fixed           |  Sidebar element become fixed position with scroll support                          |
|  04. page-sidebar-minimize        |  Sidebar element become minimize style width sidebar                                |
|  05. page-footer-fixed            |  Footer element become fixed position with scroll support on page content           |
|  06. page-sound                   |  For playing sounds on user actions and page events                                 |
|=========================================================================================================================|

-->
<body class="page-header-fixed page-sidebar-fixed page-footer-fixed">

<!--[if lt IE 9]>
<p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- START @WRAPPER -->
<section id="wrapper">

    <!-- START @HEADER -->
    <?php $this->load->view('include/header');?> 
    <!--/ END HEADER -->   

    <!-- START @PAGE CONTENT -->
    <section id="page-content">

        <!-- Start body content -->
        <div class="body-content">
            <div class="left">
                <div class="office-space">
                    <div class="office-title">Find Office Spaces Near You</div>
                    <div class="office-search" align="center">
                        <input type="text" name="office_search">
                        <input type="submit" value="Search" name="office-submit">
                    </div>
                </div>
            </div>
            <div class="right">
                <form action="<?php echo base_url();?>index.php/homepage/do_upload" method="post" enctype="multipart/form-data">
                    <div class="contract">
                        <div class="contract-title">Free Contract Screening</div>
                        <div class="upload-your-contract" align="center">
                            <span class="message"><?php echo $message;?></span>
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <span class="btn btn-warning btn-file upload-contract"><span class="fileinput-new">+</span><span class="fileinput-exists">+</span><input value="" name="contact_copy" type="hidden"><input name="contact_copy" type="file"></span>
                                <span class="fileinput-filename"></span>
                                <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                            </div>
                            <br><br>
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--/ End body content -->

        <!-- Start footer content -->
        <?php $this->load->view('include/footer'); ?>
        <!--/ End footer content -->

    </section><!-- /#page-content -->
    <!--/ END PAGE CONTENT -->

</section><!-- /#wrapper -->
<!--/ END WRAPPER -->

<!-- START @BACK TOP -->
<div id="back-top" class="animated pulse circle">
    <i class="fa fa-angle-up"></i>
</div><!-- /#back-top -->
<!--/ END BACK TOP -->
<?php echo put_footers();?>

</body>
<!--/ END BODY -->

</html>