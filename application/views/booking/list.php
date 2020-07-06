
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Online Booking - Jetz Indonesia</title>
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/admin/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/forms/icheck/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/pickers/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/pickers/datetime/bootstrap-datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/pickers/pickadate/pickadate.css">
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/plugins/pickers/daterange/daterange.min.css">

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern 1-column  bg-cyan bg-lighten-2 blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0 pb-0">
                                <div class="card-title text-center">
                                    <img src="<?php echo base_url(); ?>assets/admin/app-assets/images/logo/jetz.png" alt="branding logo">
                                </div>

                            </div>
                            <div class="card-content">
                                <br>
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>Isi Form Berikut Ini</span></p>
                                <div class="card-body pt-0">
                                    <form class="form-horizontal" action="<?php echo current_url(); ?>">
                                        <fieldset class="form-group floating-label-form-group">
                                            <label for="user-name">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
                                        </fieldset>
                                        <fieldset class="form-group floating-label-form-group">
                                            <label for="user-email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" 
                                            placeholder="Email">
                                        </fieldset>
                                        <fieldset class="form-group floating-label-form-group">
                                            <label for="user-email">No Telp</label>
                                            <input type="text" class="form-control" id="telp" name="telp"
                                            placeholder="No Hp / Telp">
                                        </fieldset>
                                        <fieldset class="form-group floating-label-form-group">
                                            <label for="user-email">Nama Komunitas</label>
                                            <input type="text" class="form-control" id="user-email" name="nama_club"
                                            placeholder="Nama Club/Komunitas">
                                        </fieldset>
                                        <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>Data Booking</span></p>
                                        <fieldset class="form-group floating-label-form-group">
                                            <label for="user-email">Pilih Tanggal</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span class="fa fa-calendar-o"></span>
                                                    </span>
                                                </div>
                                                <input type='text' class="form-control pickadate" placeholder="Pilih Tanggal Sewa" />
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group floating-label-form-group">
                                            <label for="user-email">Pilih Jam</label>
                                            <input type="text" class="form-control" id="user-email"
                                            placeholder="Your Email Address">
                                        </fieldset>

                                        <div class="card-body pt-0">
                                            <a href="login-with-bg.html" class="btn btn-outline-danger btn-block"><i
                                                class="feather icon-unlock"></i> Login</a>
                                            </div>
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
            <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/pickers/dateTime/bootstrap-datetimepicker.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>
            <!-- BEGIN Vendor JS-->

            <!-- BEGIN: Page Vendor JS-->
            <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
            <!-- END: Page Vendor JS-->

            <!-- BEGIN: Theme JS-->
            <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/core/app-menu.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/core/app.min.js"></script>
            <!-- END: Theme JS-->

            <!-- BEGIN: Page JS-->
            <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/scripts/forms/form-login-register.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/scripts/pickers/dateTime/bootstrap-datetime.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.min.js"></script>
            <!-- END: Page JS-->

        </body>
        <!-- END: Body-->
        </html>