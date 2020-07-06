    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">PEMBAYARAN</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Pembayaran</a>
                  </li>
                  <li class="breadcrumb-item active">Data Pembayaran
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
              <div class="btn-group" role="group">
                <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>admin/pembayaran/add"  ><i class="fa fa-plus"></i> Tambah Data </a>
                
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Zero configuration table -->
<section id="horizontal">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List Pembayaran</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                            <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                            <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                     
                        <table class="table display nowrap table-striped table-bordered scroll-horizontal">
                            <thead>
                                <tr>
                                    <th>#</th>
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
                              <?php $a=1; foreach($list as $key => $b) { ?> 
                                <tr>
                                    <td><?php echo $a++; ?></td>
                                    <td><?php echo $b->booking_kode; ?></td>
                                    <td><?php echo $b->booking_nama_pemesan; ?></td>
                                    <td><?php echo $b->bayar_bank; ?></td>
                                    <td><?php echo $b->bayar_pengirim; ?></td>
                                    <td><?php echo number_format($b->bayar_nominal,0,'',','); ?></td>
                                     <td>
                                      <div class="badge badge-primary">
                                        <span><?php echo $b->bayar_method; ?></span>
                                        
                                      </div></td>
                                    <td><?php echo $b->bayar_tgl_bayar; ?></td>
                                    <td>bukti bayar</td>
                                    <?php if($b->bayar_status == 'lunas') { 

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
                                            <a href="<?php echo base_url(); ?>admin/pembayaran/view/<?php echo $b->booking_id; ?>" class="btn btn-icon btn-outline-primary"><i class="fa fa-eye"></i></a>
                                            <a href="<?php echo base_url(); ?>admin/pembayaran/edit/<?php echo $b->booking_kode; ?>" type="button" class="btn btn-icon btn-outline-success"><i class="fa fa-check"></i></a>
                                            <a href="<?php echo base_url(); ?>admin/pembayaran/delete/<?php echo $b->booking_kode; ?>" type="button" class="btn btn-icon btn-outline-danger"><i class="fa fa-times"></i></a>
                                            
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
</section>
<!--/ Scroll - horizontal table -->
<!--/ Scroll - horizontal and vertical table -->


        </div>
      </div>
    </div>
    <!-- END: Content-->
