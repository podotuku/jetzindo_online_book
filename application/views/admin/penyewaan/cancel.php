<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">Cancel Booking</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Booking</a>
                            </li>
                            <li class="breadcrumb-item active">Cancel Booking
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
                <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                   <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>admin/pembayaran"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section class="row">
                <div class="col-sm-12">
                    <!-- Kick start -->
                    <div id="kick-start" class="card">
                        <div class="card-header">
                            <h4 class="card-title">Cancel Booking</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                    <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="card-text">
                                    <form class="form" method="post" action="<?php echo base_url(); ?>admin/penyewaan/cancel_act/<?php echo $detail->booking_id; ?>">
                                        <div class="form-body">

                                            <div class="form-group">
                                                <label for="donationinput1">Kode Booking</label>
                                                <input type="text" id="kode_booking" class="form-control square" value="<?php echo $detail->booking_kode; ?>" name="kode_booking" readonly>
                                                <!-- <input type="text" name="MEMBER_ID" class='form-control autocomplete nama' onkeyup="caridata()" id="autocomplete1" placeholder="Scan Or Type Your Member ID" required>     -->
                                            </div>

                                            <div class="form-group">
                                                <label for="donationinput2">Nama</label>
                                                <input type="text" id="NAMA" class="form-control square" value="<?php echo $detail->booking_nama_pemesan; ?>" placeholder="Email" name="NAMA" readonly>
                                            </div>

                                            <div class="form-group">
                                                <label for="donationinput2">Email</label>
                                                <input type="text" id="EMAIL" value="<?php echo $detail->booking_email_pemesan; ?>"  class="form-control square" placeholder="Email" name="EMAIL" readonly>
                                            </div>

                                            <div class="form-group">
                                                <label for="donationinput3">Tanggal Booking</label>
                                                <input type="text" id="TANGGAL_BOOK" class="form-control square" placeholder="Username" name="TANGGAL_BOOK" value="<?php echo $detail->booking_tanggal; ?> "readonly >
                                            </div>

                                            <div class="form-group">
                                                <label for="donationinput4">Jadwal Main</label>
                                                <input type="text" id="JAM_BOOK_AWAL" class="form-control square" placeholder="Password" name="JAM_BOOK_AWAL" value="<?php echo $detail->booking_jam_awal; ?>-<?php echo $detail->booking_jam_akhir; ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="donationinput5">Total</label>
                                                <input type="text" id="TOTAL" class="form-control square" placeholder="TOTAL" name="TOTAL" value="<?php echo $detail->booking_total_harga; ?>" readonly>
                                            </div>

                                        </div>
                                        <input type="hidden" id="ID_BOOK" name="ID_BOOK">
                                        <div class="form-actions right">

                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-check-square-o"></i> Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Kick start -->


                </div>
            </section>


        </div>
    </div>
</div>
    <!-- END: Content-->