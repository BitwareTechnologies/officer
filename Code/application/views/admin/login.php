<!DOCTYPE html>
<html>
<?php $this->load->view('admin/include/head');?>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div class="logo">
                <img src="<?php echo base_url();?>assets/img/logo.png" width="200">
            </div>
            <?php if($message) {?>
            <div class="alert alert-danger"><?php echo $message?></div>
            <?php }?>
            <form class="m-t" role="form" action="<?php echo base_url();?>index.php/admin/login/checkValidUser" method="post">
                <div class="form-group">
                    <input type="email" name="user_email" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="user_password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>