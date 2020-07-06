                         <!-- BEGIN: Content-->
                         <div class="app-content content">
                          <div class="content-overlay"></div>
                          <div class="content-wrapper">
                            <div class="content-header row">
                            </div>
                            <div class="content-body"><!-- Stats -->
                              <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12">
                                  <div class="card">
                                    <div class="card-content">
                                      <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-primary bg-darken-2">
                                          <i class="icon-camera font-large-2 white"></i>
                                      </div>
                                      <div class="p-2 bg-gradient-x-primary white media-body">
                                          <h5>Products</h5>
                                          <h5 class="text-bold-400 mb-0"><i class="feather icon-plus"></i> 28</h5>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-12">
                          <div class="card">
                            <div class="card-content">
                              <div class="media align-items-stretch">
                                <div class="p-2 text-center bg-danger bg-darken-2">
                                  <i class="icon-user font-large-2 white"></i>
                              </div>
                              <div class="p-2 bg-gradient-x-danger white media-body">
                                  <h5>New Users</h5>
                                  <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i> 1,238</h5>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-12">
                  <div class="card">
                    <div class="card-content">
                      <div class="media align-items-stretch">
                        <div class="p-2 text-center bg-warning bg-darken-2">
                          <i class="icon-basket-loaded font-large-2 white"></i>
                      </div>
                      <div class="p-2 bg-gradient-x-warning white media-body">
                          <h5>New Orders</h5>
                          <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-down"></i> 4,658</h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="media align-items-stretch">
                <div class="p-2 text-center bg-success bg-darken-2">
                  <i class="icon-wallet font-large-2 white"></i>
              </div>
              <div class="p-2 bg-gradient-x-success white media-body">
                  <h5>Total Profit</h5>
                  <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i> 5.6 M</h5>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
<!--/ Stats -->

<!--Recent Orders & Monthly Salse -->
<div class="row match-height">
    <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Recent Booking</h4>
          <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
              <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
          </ul>
      </div>
  </div>
  <div class="card-content">
      <div class="card-body">
        
    </div>

        <table class="table display nowrap table-striped table-bordered scroll-horizontal">
          <thead>
            <tr>
              <th>Booking Kode</th>
              <th>Nama Pemesan</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Tanggal Book</th>
              <th>Jam </th>
              <th>Biaya</th>
              <th>Status</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
       <?php foreach ($booking as $key => $b) { ?>
      	<tr>
          <td class="text-truncate"><?php echo $b->booking_kode; ?></td>
          <td class="text-truncate"><?php echo $b->booking_nama_pemesan; ?></td>
          <td class="text-truncate"><?php echo $b->booking_email_pemesan; ?></td>
          <td class="text-truncate"><?php echo $b->booking_email_pemesan; ?></td>
          <td class="text-truncate"><?php echo $b->booking_tanggal; ?></td>
          <td class="text-truncate"><?php echo $b->booking_jam_awal; ?>-<?php echo $b->booking_jam_akhir; ?></td>
          <td class="text-truncate"><?php echo $b->booking_total_harga; ?></td>
          <td class="text-truncate"><?php echo $b->booking_status; ?></td>
          <td class="text-truncate"></td>
      	</tr>
      	<?php } ?>
  </tbody>
</table>
</div>
</div>
</div>


</div>
</div>
<!--/Recent Orders & Monthly Salse -->

<!--Recent Orders & Monthly Salse -->
<div class="row match-height">
    <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Recent Payment</h4>
          <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
              <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
          </ul>
      </div>
  </div>
  <div class="card-content">
      <div class="card-body">
        <p>Total paid invoices 240, unpaid 150. <span class="float-right"><a href="project-summary.html" target="_blank">Invoice Summary <i class="feather icon-arrow-right"></i></a></span></p>
    </div>
    <div class="table-responsive">
        <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
          <thead>
            <tr>
              <th>Booking Code</th>
              <th>Nama Pemesan</th>
              <th>Bank</th>
              <th>Nama Pengirim</th>
              <th>Nominal</th>
              <th>Methode Bayar</th>
              <th>Tanggal Bayar</th>
              <th>Bukti Pembayaran</th>
              <th>Status</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
      	<?php foreach ($pay as $key => $p) { ?>
      	<tr>
          <td class="text-truncate"><?php echo $p->booking_kode; ?></td>
          <td class="text-truncate"><?php echo $p->booking_nama_pemesan; ?></td>
          <td class="text-truncate"><?php echo $p->bayar_bank; ?></td>
          <td class="text-truncate"><?php echo $p->bayar_pengirim; ?></td>
          <td class="text-truncate"><?php echo number_format($p->bayar_nominal,0,'',','); ?></td>
          <td class="text-truncate">
          	<div class="badge badge-primary">
                <span><?php echo $p->bayar_method; ?></span>
            </div> 
          </td>
          <td class="text-truncate"><?php echo $p->bayar_tgl_bayar; ?></td>
          <td class="text-truncate">bukti bayar</td>
          <td class="text-truncate"><?php echo $p->bayar_tgl_bayar; ?></td>
          <td>bukti bayar</td>
           <?php if($p->bayar_status == 'lunas') { 

             		$badge = 'success';
                    $status = 'Lunas';
                 }else{
                    $badge = 'warning';
                    $status = 'Prosess Checking';
                 } ?>
            <td>
                <div class="badge badge-<?php echo $badge; ?>">
                    <span><?php echo $status; ?></span>
                </div>
            </td>
            <td>
                <div class="btn-group" role="group" aria-label="First Group">
                    <a href="<?php echo base_url(); ?>admin/pembayaran/view/<?php echo $p->booking_id; ?>" class="btn btn-icon btn-outline-primary"><i class="fa fa-eye"></i></a>
                    <a href="<?php echo base_url(); ?>admin/pembayaran/delete/<?php echo $p->booking_kode; ?>" type="button" class="btn btn-icon btn-outline-danger"><i class="fa fa-times"></i></a>
                </div>
			</td>
      	</tr>
      	<?php } ?>
        
      
  </tbody>
</table>
</div>
</div>
</div>
</div>


</div>
</div>
<!--/Recent Orders & Monthly Salse -->

</div>
</div>
</div>
<!-- END: Content-->

