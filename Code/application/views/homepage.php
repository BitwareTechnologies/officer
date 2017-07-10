<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('include/head');?>
<body id="page-top" class="landing-page no-skin-config">
<?php $this->load->view('include/header');?>
<section>
    <div class="col-md-6">
        <div class="office-space">
            <div class="office-title">Find Office Spaces Near You</div>
            <div class="office-search" align="center">
                <input type="text" name="office_search">
                <input type="submit" value="Search" name="office-submit">
            </div>
        </div>
    </div>
    <div class="col-md-6">        
        <div class="contract">
            <div class="contract-title">Free Contract Screening</div>
            <div class="upload-your-contract" align="center">
                <div class="contract-title"><?php echo $message;?></div>
                <form action="<?php echo base_url();?>index.php/homepage/do_upload" method="post" enctype="multipart/form-data">
                    <div class="upload">+</div>
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span>
                        <span class="fileinput-exists">Change</span><input type="file" name="contact_copy"/></span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                    </div> 
                    <br>
                    <div><input type="submit" class="btn btn-primary btn-xs" value="Submit"></div>
                </form>
            </div>
        </div>       
    </div>
</section>
<?php $this->load->view('include/footer');?>    
</body>
</html>
