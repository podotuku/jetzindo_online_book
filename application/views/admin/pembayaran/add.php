    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Pembayaran</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Pembayaran</a>
                                </li>
                                <li class="breadcrumb-item active">Tambah Pembayaran
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>admin/users"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section class="row">
                    <div class="col-sm-12">
                        <!-- Kick start -->
                        <div id="kick-start" class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Data Pembayaran</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <?php echo validation_errors('<div class="alert bg-danger alert-icon-left alert-dismissible mb-2" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Oops !</strong>','</div>'); ?>
                                        

                                        
                                        <form class="form" method="post" action="<?php echo base_url(); ?>admin/pembayaran/add">
                                            <div class="form-body">

                                                <div class="form-group">
                                                    <label for="donationinput1">Kode Booking</label>
                                                    <select class="select2 form-control" name="kode_booking" onchange="caridata()" id="autocomplete1" >
                                                        <option value="">Cari Kode Booking</option>
                                                        <?php foreach ($booking_code as $key => $bc) { ?>
                                                            <option value="<?php echo $bc->booking_kode; ?>"><?php echo $bc->booking_kode; ?></option>
                                                            
                                                        <?php } ?>
                                                    </select>
                                                    <!-- <input type="text" name="MEMBER_ID" class='form-control autocomplete nama' onkeyup="caridata()" id="autocomplete1" placeholder="Scan Or Type Your Member ID" required>     -->
                                                </div>

                                                <div class="form-group">
                                                    <label for="donationinput2">Nama</label>
                                                    <input type="text" id="NAMA" class="form-control square" placeholder="Email" name="EMAIL">
                                                </div>

                                                <div class="form-group">
                                                    <label for="donationinput2">Email</label>
                                                    <input type="text" id="EMAIL" class="form-control square" placeholder="Email" name="EMAIL">
                                                </div>

                                                <div class="form-group">
                                                    <label for="donationinput3">Tanggal Booking</label>
                                                    <input type="text" id="TANGGAL_BOOK" class="form-control square" placeholder="Username" name="TANGGAL_BOOK">
                                                </div>

                                                <div class="form-group">
                                                    <label for="donationinput4">Jadwal Main</label>
                                                    <input type="text" id="JAM_BOOK_AWAL" class="form-control square" placeholder="Password" name="JAM_BOOK_AWAL">
                                                </div>
                                                <div class="form-group">
                                                    <label for="donationinput5">Total</label>
                                                    <input type="text" id="TOTAL" class="form-control square" placeholder="TOTAL" name="TOTAL">
                                                </div>
                                                <div class="form-group">
                                                    <label for="donationinput5">Tanggal Bayar</label>
                                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <span class="fa fa-calendar-o"></span>
                                        </span>
                                    </div>
                                    <input type="text" id="TGL_BAYAR" class="form-control pickadate" placeholder="Tanggal Bayar" name="TGL_BAYAR">
                                </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="donationinput6">Cara bayar</label>
                                                    <select class="select2 form-control" name="CARA_BAYAR">
                                                        <option value="">Pilih Cara Bayar</option>
                                                        <option value="Cash">Cash</option>
                                                        <option value="Transfer">Transfer</option>


                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="donationinput6">Nominal</label>
                                                    <input type="text" id="NOMINAL" class="form-control square" placeholder="Nominal" name="NOMINAL">
                                                </div>
                                                <div class="form-group">
                                                    <label for="donationinput6">Status</label>
                                                    <select class="select2 form-control" name="STATUS">
                                                        <option value="">Pilih Status</option>
                                                        <option value="lunas">Lunas</option>
                                                        <option value="process">Belum Lunas</option>
                                                        
                                                    </select>
                                                </div>




                                            </div>
                                            <input type="hidden" id="ID_BOOK" name="ID_BOOK">
                                            <div class="form-actions right">
                                                <button type="reset" class="btn btn-warning mr-1">
                                                    <i class="feather icon-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Save
                                                </button>
                                            </div>
                                        </form>
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

        <script>
            var base_path2='<?php echo base_url();?>admin/pembayaran/';
            function caridata() {
    // body...
    var id_barcode = $('#autocomplete1').val();
    search_barcode(id_barcode);
    console.log(id_barcode);
}


function search_barcode(id_barcode){
    $.ajax({
        url:base_path2+'search_barcode/'+id_barcode,
        type: "GET",
        dataType: "json",
        cache: false,

            //success
            success: function(data) {
               JSON.stringify(data);
                //alert('asuransi_jne_info ' + asuransi_jne_info);
                var FULLNAME = data.NAME;
                var EMAIL = data.EMAIL;
                var ID_BOOK = data.ID_BOOK;
                var TANGGAL_BOOK = data.TANGGAL_BOOK;
                var JAM_BOOK_AWAL = data.JAM_BOOK_AWAL;
                var JAM_BOOK_AKHIR = data.JAM_BOOK_AKHIR;
                var LPS = data.LP;
                console.log(FULLNAME);   
                $('#NAMA').val(FULLNAME);
                $('#EMAIL').val(EMAIL);
                $('#TANGGAL_BOOK').val(TANGGAL_BOOK);
                $('#JAM_BOOK_AWAL').val(JAM_BOOK_AWAL);
                $('#JAM_BOOK_AKHIR').val(JAM_BOOK_AKHIR);
                $('#TOTAL').val(LPS);
                $('#ID_BOOK').val(ID_BOOK);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
}


</script>