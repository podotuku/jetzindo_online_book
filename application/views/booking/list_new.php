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
                  <span>Isi Form Berikut Ini</span>
                </p>
                <div class="card-body pt-0">
                  <form class="form-horizontal" id="loginForm" >
                    <div class="row">
                      <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                        <fieldset class="form-group">
                          <label for="user-name">Nama Lengkap</label>
                          <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
                        </fieldset>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                        <fieldset class="form-group">
                          <label for="user-email">Email</label>
                          <input type="email" class="form-control" id="email" name="email" 
                          placeholder="Email">
                        </fieldset>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                        <fieldset class="form-group">
                          <label for="user-email">No Telp</label>
                          <input type="text" class="form-control" id="telp" name="telp"
                          placeholder="No Hp / Telp">
                        </fieldset>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                        <fieldset class="form-group">
                          <label for="user-email">Nama Komunitas</label>
                          <input type="text" class="form-control" id="nama_club" name="nama_club"
                          placeholder="Nama Club/Komunitas">
                        </fieldset>
                      </div>
                    </div>

                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                      <span>Data Booking</span>
                    </p>
                    <div class="form-group row">
                      <div class="col-md-6 col-12 text-center text-sm-left">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="user-email">Pilih Tanggal</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <span class="fa fa-calendar-o"></span>
                              </span>
                            </div>
                            <input type='text' class="form-control pickadate" placeholder="Pilih Tanggal Sewa" id="tanggal" />
                          </div>
                        </fieldset>
                      </div>
                      <div class="col-md-6 col-12 text-center text-sm-right">
                        <label class="pull-left">Tipe Booking</label>
                        <select class="form-control" id="tipe" >
                          <option value="">Pilih Type</option>
                          <option value="normal">Normal</option>
                          <option value="khusus">Costum</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row" id="costum">
                      <div class="col-lg-6">
                        <label class="pull-left">Start</label>
                        <select class="form-control" id="nstart" >
                          <?php 
                          $time = '7:00';
                          for ($i = 0; $i <= 15; $i++)
                          {
                            $prev = date('G:i', strtotime($time)); 
                            $next = strtotime('+1hours', strtotime($time)); 
                            $time = date('G:i', $next); 
                            echo "<option value=\"$prev\">$prev</option>";
                          }
                          ?>
                        </select>
                      </div>
                      <div class="col-lg-6">
                        <label class="pull-left">End</label>
                        <select class="form-control" id="nends" >
                          <?php 
                          $time = '7:00';
                          for ($i = 0; $i <= 15; $i++)
                          {
                            $prev = date('G:i', strtotime($time)); 
                            $next = strtotime('+1hours', strtotime($time)); 
                            $time = date('G:i', $next); 
                            echo "<option value=\"$time\">$time</option>";
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row" id="normal">
                      <div class="col-lg-6">
                        <label class="pull-left">Start</label>
                        <select class="form-control" id="start" >
                          <?php 
                          $time = '7:00';
                          for ($i = 0; $i <= 8; $i++)
                          {
                            $prev = date('G:i', strtotime($time)); 
                            $next = strtotime('+2hours', strtotime($time)); 
                            $time = date('G:i', $next); 
                            echo "<option value=\"$prev\">$prev</option>";
                          }
                          ?>
                        </select>
                      </div>
                      <div class="col-lg-6">
                        <label class="pull-left">End</label>
                        <select class="form-control" id="ends" readonly="readonly">
                          <?php 
                          $time = '7:00';
                          for ($i = 0; $i <= 8; $i++)
                          {
                            $prev = date('G:i', strtotime($time)); 
                            $next = strtotime('+2hours', strtotime($time)); 
                            $time = date('G:i', $next); 
                            echo "<option value=\"$time\">$time</option>";
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="row mb-1">
                      <div class="col-xl-12">
                        <button type="submit" class="btn btn-outline-danger btn-block"><i class="fa fa-calendar-plus-o"></i> Book</button>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xl-6 mb-1">
                        <a href="<?php echo base_url(); ?>payment/confirm_payment" class="btn btn-primary btn-block"><i class="fa fa-money"></i> Confirm</a>
                      </div>

                      <div class="col-xl-6 mb-1">
                        <a href="<?php echo base_url(); ?>payment/check_payment" class="btn btn-warning btn-block"><i class="fa fa-search"></i> Cek Status</a>
                      </div>
                    </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">

  $(document).ready(function(){
    $("#normal").hide();
    $("#costum").hide();
    $("#tipe").on("change", function(e){
      e.preventDefault();
      var opt   = $('option:selected', this).val();
      var tipes = $('option:selected', this).text();
      if(opt===''){
        $("#normal").hide();
        $("#costum").hide();
      }
      else if (opt=='normal') {
        $("#costum").hide();
        $("#normal").show();
      }else{
        $("#normal").hide();
        $("#costum").show();
      }
    });

    $("#start").on("change", function(e){
      e.preventDefault();
      var opti  = $('option:selected', this).val();
      var waktu = $('option:selected', this).text();
      var start = opti.split(':')[0];
      var end   = (parseInt(start)+parseInt(2))+':00';
      if(opti==='')
      {
        alert('null');    
      }
      else
      {
        $("#ends").val(end).change();
      }
    });

    $("#nstart").on("change", function(e){
      e.preventDefault();
      var option = $('option:selected', this).val();
      var waktu  = $('option:selected', this).text();
      var akhir  = $("#nends").val();
      var start  = option.split(':')[0];
      var end    = akhir.split(':')[0];
      var news   = (parseInt(start)+parseInt(1))+':00';
      console.log(end,start);
      if(end < start)
      {
        console.log($("#nends").val(news).change());
      }
      else
      {
        console.log(end,start,news);
      }
    });

    $("#nends").on("change", function(e){
      e.preventDefault();
      var optio = $('option:selected', this).val();
      var waktu = $('option:selected', this).text();
      var awal  = $("#nstart").val();
      var ends  = optio.split(':')[0];
      var mula  = awal.split(':')[0];
      if(mula<ends)
      {
        alert('jam salah');    
      }
      else
      {
        console.log(ends,mula);
      }
    });
  });
</script>
<script>
  $('#loginForm').on('submit', function( event ) {
   event.preventDefault();
   var base_path ='<?php echo base_url();?>';
   var nama      = $('#nama_lengkap').val();
   var email     = $('#email').val();
   var telp      = $('#telp').val();
   var komunitas = $('#nama_club').val();
   var tanggal   = $('#tanggal').val();
   var tipe      = $('#tipe').val();
   if (tipe=='normal') {
    var mulai   = $('#start').val();
    var selesai = $('#ends').val();
  }else{
    var mulai   = $('#nstart').val();
    var selesai = $('#nends').val();
  }
  console.log(selesai);
  $.ajax({
    url: base_path+"getDaftar",
    type: "POST",
    data: {nama:nama, email:email,telp:telp,
      komunitas:komunitas,tanggal:tanggal,mulai:mulai,selesai:selesai
    },
    beforeSend: function() {    
      console.log( "Processing..." );
    },
    success: function( response ){
      console.log(response);
      if(response === "ok") {
        console.log("oke");
        swal("Berhasil booking", {
          icon: "success",
        });
        setTimeout(function(){
          window.location.assign(base_path+"payment/confirm_payment");
        }, 2000)

      }else{
       swal({
        icon:"error",
        text:"Jam tersebut sudah di booking, pilih waktu lain"
      });
     }
   },
   error: function( response ) {
     console.log(response);
   }

 });
});
</script>
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