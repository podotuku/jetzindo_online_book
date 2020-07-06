<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Jetz Indonesia penyewaan lapangan.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Jetz Indonesia | Penyewaan Lapangan</title>
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/admin/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/components.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/pages/login-register.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern 1-column   blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="row flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                        <div class="p-1"><img src="<?php echo base_url(); ?>assets/admin/app-assets/images/logo/jetz.png"
                                alt="branding logo"><stack-logo-dark/div>
                    </div>
                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Login with
                            Jetz Indonesia</span></h6>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal form-simple" action="<?php echo base_url();?>admin/login" method="post">
                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                <input type="text" name="username" class="form-control form-control-lg" id="user-name"
                                    placeholder="Your Username" required>
                                <div class="form-control-position">
                                    <i class="feather icon-user"></i>
                                </div>
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="password" class="form-control form-control-lg" id="user-password"name="password"
                                    placeholder="Enter Password" required>
                                <div class="form-control-position">
                                    <i class="fa fa-key"></i>
                                </div>
                            </fieldset>
                            <div class="form-group row">
                                <div class="col-sm-6 col-12 text-center text-sm-left">
                                    <fieldset>
                                        <input type="checkbox" id="remember-me" class="chk-remember">
                                        <label for="remember-me"> Remember Me</label>
                                    </fieldset>
                                </div>
                                
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block"><i
                                    class="feather icon-unlock"></i> Login</button>
                        </form>
                    </div>
                </div>
                <div class="card-footer">
                    
                </div>
            </div>
        </div>
    </div>
</section>
        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/core/app-menu.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/core/app.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/scripts/forms/form-login-register.min.js"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->
</html>