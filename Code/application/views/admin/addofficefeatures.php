<!DOCTYPE html>
<html>
<?php $this->load->view('admin/include/head');?>
<body>
    <div id="wrapper">
        <?php $this->load->view('admin/include/left');?>
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <?php $this->load->view('admin/include/header');?>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Office Features</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Home</a>
                        </li>                        
                        <li class="active">
                            <strong>Office Features</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Horizontal form</h5>                                
                            </div>
                            <?php
                            $segment = $this->uri->segment(3); 
                            if($segment == "addofficefeatures"){
                            ?>
                            <div class="ibox-content">
                                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/officefeatures/insertofficefeatures" method="post">                                    
                                    <div class="form-group"><label class="col-lg-4 control-label">Office Feature</label>
                                        <div class="col-lg-8"><input type="text" placeholder="Office Feature" value="" name="office_feature_name" class="form-control" ></div>
                                    </div>                                    
                                    <div class="form-group">
                                        <div class="col-lg-offset-4 col-lg-8">
                                            <button class="btn btn-sm btn-white" type="submit">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <?php } else { ?>
                            <div class="ibox-content">
                                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/officefeatures/updateofficefeatures" method="post">
                                    <input type="hidden" name="office_feature_id" value="<?php echo $officeFeatureData['office_feature_id']?>">
                                    <div class="form-group"><label class="col-lg-4 control-label">Office Feature</label>
                                        <div class="col-lg-8"><input type="text" placeholder="Office Feature" value="<?php echo $officeFeatureData['office_feature_name']?>" name="office_feature_name" class="form-control" ></div>
                                    </div>                                    
                                    <div class="form-group">
                                        <div class="col-lg-offset-4 col-lg-8">
                                            <button class="btn btn-sm btn-white" type="submit">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('admin/include/footer');?>
        </div>    
    </div>    
</body>
</html>