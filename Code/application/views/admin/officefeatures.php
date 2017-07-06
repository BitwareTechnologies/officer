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
            <?php if($message) {?>
            <div class="alert alert-danger"><?php echo $message?></div>
            <?php }?>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Basic Data Tables example with responsive plugin</h5>
                        <div class="ibox-tools">
                            <a href="<?php echo base_url();?>index.php/admin/officefeatures/addofficefeatures" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp;&nbsp;<span class="bold">Office Features</span></a>
                        </div>
                    </div>                    
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>                      
                                    <tr>
                                        <th>Rendering engine</th>                                        
                                        <th>CSS grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($officeFeatureData as $officeFeatureRow) {?>
                                    <tr class="gradeX">
                                        <td><?php echo $officeFeatureRow->office_feature_name; ?></td>                                        
                                        <td class="center">
                                            <a href="<?php echo base_url();?>index.php/admin/officefeatures/updateOfficeFeatures/<?php echo $officeFeatureRow->office_feature_id;?>" class="h4"><i class="fa fa-pencil-square-o"></i></a>
                                            <a href="<?php echo base_url();?>index.php/admin/officefeatures/deleteOfficeFeatures/<?php echo $officeFeatureRow->office_feature_id;?>" class="h4"><i class="fa fa-minus-square-o"></i></a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Rendering engine</th>                                        
                                        <th>CSS grade</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <?php $this->load->view('admin/include/footer');?>
        </div>    
    </div>
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: []
            });
        });

    </script>
</body>
</html>