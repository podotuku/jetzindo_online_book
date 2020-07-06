<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" 
xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <!--[if gte mso 9]><xml>
   <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
   </o:OfficeDocumentSettings>
 </xml><![endif]-->
 <!-- fix outlook zooming on 120 DPI windows devices -->
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- So that mobile will display zoomed in -->
 <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- enable media queries for windows phone 8 -->
 <meta name="format-detection" content="date=no"> <!-- disable auto date linking in iOS 7-9 -->
 <meta name="format-detection" content="telephone=no"> <!-- disable auto telephone linking in iOS 7-9 -->
 <!-- <title>Single Column</title> -->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets\admin\css\styles.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets\admin\css\responsive.css">
</head>
<body style="margin:0; padding:0;" bgcolor="#F0F0F0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <!-- 100% background wrapper (grey background) -->
  <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#FFF">
    <tr>
      <td align="center" valign="top" bgcolor="#F0F0F0" style="background-color: #F0F0F0;">

        <br>

        <!-- 600px container (white background) -->
        <table border="0" width="600" cellpadding="20" cellspacing="0" class="container" style="background-color: #FFF;">
          <tr style="background-color: #002F6C; padding:2%;">
            <td class="container-padding header" align="left" >
              <img src="http://www.jetzindonesia.com/assets/frontend/images/logo2.png" alt="jetzindonesia" width="250">
            </td>
          </tr>
          <tr>
            <td class="container-padding content" align="left">
              <br>

              <div class="title">
                Hi <br>
                <b><?php echo $booking_nama_pemesan?></b><br>
              </div>
              <br>

              <div class="body-text">
                Booking anda berhasil dengan kode <b> <?php echo $booking_kode; ?> </b> segera lakukan pembayaran
                <br>
                Rekening BCA : 00000011111<br>
                Terimakasih
                <br>
                <br>
                <br>
              </div>

            </td>
          </tr>
          <tr style="background-color: #002F6C; padding:2%; color: #fff;" >
            <td class="container-padding footer-text" align="left">
              <strong>Jetzindonesia </strong><br>
              <span class="ios-footer">
               Tanggerang<br>

              </span>
              <a href="https://www.jetzindonesia.com" style="color:white">www.jetzindonesia.com</a><br>

              <br><br>
            </td>
          </tr>
        </table><!--/600px container -->


      </td>
    </tr>
  </table><!--/100% background wrapper-->

</body>
</html>