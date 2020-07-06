<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Booking Lapangan">
  <meta name="keywords" content="Booking Lapangan">
  <meta name="author" content="PIXINVENT">
  <title>Jetzindonesi | Booking Lapangan</title>
  <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/admin/app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/admin/app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/forms/icheck/custom.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/app.css">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/pages/login-register.css">
  <!-- END Page Level CSS-->
  <!-- DATERANGE -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/pickers/daterange/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/pickers/datetime/bootstrap-datetimepicker.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/pickers/pickadate/pickadate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/plugins/pickers/daterange/daterange.min.css">
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/assets/css/style.css">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu-modern 1-column  bg-cyan bg-lighten-2 menu-expanded blank-page blank-page"
data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
      <section class="container mt-1">
        <div class="col-12 d-flex justify-content-center">
          <div class="col-md-6 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 m-0">
              <div class="card-header border-0">
                <div class="card-title text-center">
                  <div class="p-1">
                    <img src="<?php echo base_url(); ?>assets/admin/app-assets/images/logo/jetz.png" alt="branding logo">
                  </div>
                </div>
              </div>
              <div class="card-content">
                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2">
                  <span>Masukkan Kode Booking</span>
                </p>
                <div class="card-body pt-0">
                  <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>payment/check_payment">
                    <?php if ($this->session->flashdata('failed')){ ?>
                      <div class="alert bg-danger alert-icon-left alert-dismissible mb-2" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Good Morning!</strong> <?php echo $this->session->flashdata('failed') ?>
                      </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('gagal')){ ?>
                      <div class="alert bg-danger alert-icon-left alert-dismissible mb-2" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Sorry !</strong> <?php echo $this->session->flashdata('gagal') ?>
                      </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('success')){ ?>
                      <div class="alert bg-success alert-icon-left alert-dismissible mb-2" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Thank You</strong> <?php echo $this->session->flashdata('success') ?>
                      </div>
                    <?php } ?>
                    <?php echo validation_errors('<div class="alert bg-danger alert-icon-left alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                      <strong>Oops !</strong>','</div>'); ?>
                      <?php if(isset($errors)) { ?>
                        <div class="alert bg-danger alert-icon-left alert-dismissible mb-2" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <strong>Oops !</strong> <?php echo $errors ?>
                        </div>
                      <?php } ?>

                      <div class="row">
                        <div class="col-xl-12 col-lg-6 col-md-12 mb-1">
                          <fieldset class="form-group">
                            <label for="user-name">Kode Booking</label>
                            <input type="text" class="form-control" id="booking_kode" name="booking_kode" placeholder="Kode Booking">
                          </fieldset>
                        </div>
               
                      </div>
                      
                      <div class="form-group row">
                        <!-- <div class="col-md-6 col-12 text-center text-sm-left">
                          <fieldset class="form-group floating-label-form-group">
                            <label for="user-email">Tanggal Bayar</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <span class="fa fa-calendar-o"></span>
                                </span>
                              </div>
                              <input type='text' name="tgl_bayar" class="form-control pickadate" placeholder="Pilih Tanggal Bayar" />
                            </div>
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-12 float-sm-left text-center text-sm-left">
                         <label for="user-email">Upload Bukti Pembayaran</label>
                         <fieldset class="form-group">

                          <div class="custom-file">
                            <input type="file" name="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                          </div>
                        </fieldset>
                      </div> -->
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Check Status</button>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<!-- BEGIN VENDOR JS-->
<script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN STACK JS-->
<script src="<?php echo base_url(); ?>assets/admin/app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/app-assets/js/core/app.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/app-assets/js/scripts/customizer.js" type="text/javascript"></script>
<!-- END STACK JS-->
<script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/pickers/dateTime/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>

<script src="<?php echo base_url(); ?>assets/admin/app-assets/js/scripts/pickers/dateTime/bootstrap-datetime.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.min.js"></script>
<!-- BEGIN PAGE LEVEL JS-->
<script src="<?php echo base_url(); ?>assets/admin/app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
</body>
</html>