<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="<?php echo base_url() ?>resource/image/png" sizes="16x16" href="<?php echo base_url() ?>/assets/images/favicon.png">
    <title>Webengine Product</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>resource/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="<?php echo base_url() ?>resource/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>resource/css/style.css" rel="stylesheet">
    
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url() ?>resource/css/colors/default-dark.css" id="theme" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">

    .card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
    box-shadow: -5px -1px 27px #00c1c1;
}

    </style>
    
</head>

<body>
   <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">WEBENGINE CREATEION</p>
        </div>
    </div>
  
 

    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(<?php echo base_url() ?>resource/ss.jpg);">
   


        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material"  method="POST" action ="<?php echo base_url() ?>User/auth">
                    <a href="javascript:void(0)" class="text-center db"><img src="<?php echo base_url() ?>resource/assets/images/logo-icon.png" alt="Home" /><br/><img src="../assets/images/logo-text.png" alt="Home" /></a>
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" id="login_email" type="text" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" id="login_pass" type="password"  name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary float-left p-t-0">
                                <input id="checkbox-signup" type="checkbox" class="filled-in chk-col-light-blue">
                                <label for="checkbox-signup"> Remember me </label>
                            </div>
                            <a href="javascript:void(0)" id="to-recover" class="text-muted float-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button id="login_submit" class="btn btn-info btn-lg btn-block text-uppercase btn-rounded" type="submit">Log In</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                            <div class="social"><a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fab fa-facebook-f"></i> </a> <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fab fa-google-plus-g"></i> </a> </div>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center" >
                         <span style="color:green;">  <?php if(!empty($this->session->flashdata('item')))
                {
                    echo $this->session->flashdata('item');
                } ?> </span>
                            Don't have an account? <a href="<?php echo base_url() ?>User/signup" class="text-primary m-l-5"><b>Sign Up</b></a>
                        </div>
                    </div>
                </form>

                <form class="form-horizontal" id="recoverform" action="https://wrappixel.com/demos/admin-templates/admin-pro/dark/index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recover Password</h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text"  placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
  </form>
            </div>
        </div>
    </section>
    <script src="<?php echo base_url() ?>resource/vadidation.js" type="text/javascript"></script>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url() ?>resource/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url() ?>resource/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>resource/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">

$(document).ready(function()){
alert();
$('#login_submit').click(function(){

var login_email = $('#login_email').val();
var login_pass = $('#login_pass').val();
alert();

});



};
    </script>
    
</body>


</html>