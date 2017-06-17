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

    <!-- START @SIDEBAR LEFT -->
    <?php $this->load->view('include/left'); ?>
    <!--/ END SIDEBAR LEFT -->

    <!-- START @PAGE CONTENT -->
    <section id="page-content">

        <!-- View files to load -->
        <!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-home"></i>Contract <span>Upload Contract</span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li class="active">Contract</li>
        </ol>
    </div>
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">
    <div class="row">
        <div class="col-md-6">
            <!-- Start file input - basic form -->
            <div class="panel rounded shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">File Input</h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse" data-original-title="" title=""><i class="fa fa-angle-up"></i></button>
                        <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove" data-original-title="" title=""><i class="fa fa-times"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->                
                <div class="panel-body no-padding">
                    <h4 style="text-align: center;"><?php echo $message; ?></h4>
                    <form action="<?php echo base_url();?>index.php/contract/do_upload" method="post" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label">File input widget type 1</label>
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                    <span class="input-group-addon btn btn-success btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input name="contact_copy" type="file"></span>
                                    <a href="#" class="input-group-addon btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div><!-- /.form-group -->                           
                        </div><!-- /.form-body -->
                        <div class="form-footer">
                            <div class="pull-right">
                                <button class="btn btn-danger mr-5">Cancel</button>
                                <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- /.form-footer -->
                    </form>

                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!-- End file input - basic form -->

        </div>                        
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