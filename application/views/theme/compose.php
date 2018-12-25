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
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Admin Pro Admin Template - The Ultimate Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>resource/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- wysihtml5 CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>resource/assets/plugins/html5-editor/bootstrap-wysihtml5.css" />
    <!-- Dropzone css -->
    <link href="<?php echo base_url() ?>resource/assets/plugins/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>resource/css/style.css" rel="stylesheet">
    <!-- page css -->
    <link href="<?php echo base_url() ?>resource/css/pages/inbox.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url() ?>resource/css/colors/megna-dark.css" id="theme" rel="stylesheet">
 
</head>

<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Pro</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
      <?php $this->load->view('theme/Common/header'); ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
         <?php $this->load->view('theme/Common/aside'); ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">



<div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Compose</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Inbox</li>
                            <li class="breadcrumb-item active">Compose</li>
                        </ol>
                    </div>
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                            <?php $this->load->view('theme/mail_sidebar'); ?>

                                <div class="col-xlg-10 col-lg-9 col-md-8 bg-light-part b-l">
                                     <form action="<?php echo base_url()  ?>User/sent_message" enctype="multipart/form-data" method="POST" class="dropzone" >
                                    <div class="card-body">
                                        <h3 class="card-title">Compose New Message</h3>
                                        <div class="form-group">
                                            <input class="form-control" name="reciver_id" placeholder="to: email id">
                                            </div>
                                        <div class="form-group">
                                            <input class="form-control" name="subject" placeholder="Subject:">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="textarea_editor form-control"  name="message" rows="15" placeholder="Enter text ..."></textarea>
                                        </div>
                                        <h4><i class="ti-link"></i> Attachment</h4>

                                            <div class="fallback" >
                                                <input name="file" type="file" name="attachement" multiple />
                                            </div>


                                        <button type="submit" class="btn btn-success m-t-20"><i class="far fa-envelope"></i> Send</button>
                                        <button class="btn btn-inverse m-t-20"><i class="fa fa-times"></i> Discard</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            
            </div>
              <footer class="footer"> © 2018 Webengine Creation</footer>
              </div>
           </div>
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
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url() ?>resource/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url() ?>resource/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url() ?>resource/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url() ?>resource/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url() ?>resource/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ?>resource/js/custom.min.js"></script>
    <script src="<?php echo base_url() ?>resource/assets/plugins/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="<?php echo base_url() ?>resource/assets/plugins/html5-editor/bootstrap-wysihtml5.js"></script>
    <script src="<?php echo base_url() ?>resource/assets/plugins/dropzone-master/dist/dropzone.js"></script>
    <script>
    $(document).ready(function() {

        $('.textarea_editor').wysihtml5();

    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url() ?>resource/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-pro/dark/app-compose.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 06:35:20 GMT -->
</html>
