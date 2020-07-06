    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">Users</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Users</a>
                  </li>
                  <li class="breadcrumb-item active">Data Users
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
              <div class="btn-group" role="group">
                <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>admin/users/add" ><i class="fa fa-plus"></i> Tambah Data </a>
                
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
                    <h4 class="card-title">List Users</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">

                    </div>
                  </div>
                  <div class="card-content collapse show">
                    <div class="card-body card-dashboard">

                      <table class="table table-striped table-bordered scroll-horizontal">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Users Level</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $a= 1; foreach($list as $key => $u) { ?>
                            <tr>
                              <td><?php echo $a++; ?></td>
                              <td><?php echo $u->users_name; ?></td>
                              <td><?php echo $u->users_username; ?></td>
                              <td><?php echo $u->users_level; ?></td>
                              <td><?php echo $u->users_email; ?></td>

                              <td>
                                <?php if($u->users_status == 'active') {
      $badge = 'success';    
    }else{
      $badge = 'danger';   
    } ?>
    <div class="badge badge-<?php echo $badge; ?>">
      <span><?php echo $u->users_status; ?></span>
    </div>
  </td>
  <td>
    <div class="btn-group" role="group" aria-label="First Group">
      <button type="button" class="btn btn-icon btn-outline-light"><i class="fa fa-umbrella"></i></button>
      <button type="button" href="#" data-toggle="modal" data-target="#editpassword" class="btn btn-icon btn-outline-warning"><i class="fa fa-pencil-square-o"></i></button>
      <button type="button" class="btn btn-icon btn-outline-primary" href="#" data-toggle="modal" data-target="#edituser" data-record-ids="<?php echo $u->users_id?>" data-record-nama="<?php echo $u->users_name ?>" data-record-emails="<?php echo $u->users_email ?>" data-record-usernames="<?php echo $u->users_username ?>" data-record-groupa="<?php echo $u->users_level ?>" ><i class="fa fa-pencil"></i></button>
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
<div id="edituser" class="modal fade">

  <div class="modal-dialog modal-lg" role="document">
    <form method="post" action="<?php echo base_url(); ?>catalog/users/edit" name="form1">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit Data User</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-20">

          <div class="form-layout mg-t-25">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Nama Lengkap: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" id="nama" name="NAME" placeholder="Nama Lengkap">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                  <div class="form-group">
                    <!-- <?php echo $row->status_negosiasi; ?> -->
                    <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="email" id="emails" name="EMAIL" placeholder="Email">
                    <input class="form-control" type="hidden" id="ids" name="ID" placeholder="Email">
                  </div>
                </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Group Access: <span class="tx-danger">*</span></label>
                  <select id="group_a" class="form-control group_a" name="GROUP_ACCESS" data-placeholder="Pilih Group Access">
                    <option value="">Pilih Access</option>
                    <option value="administrator">Administrator</option>
                    <option value="operator">Operator</option>
                  </select>
                  </div>
                </div><!-- col-4 -->



              </div><!-- row -->   
            </div><!-- form-layout -->
          </div><!-- modal-body -->
          <div class="modal-footer">
            <input type="submit" name="submit" class="btn btn-primary" value="Edit Data">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </form>
    </div><!-- modal-dialog -->

  </div><!-- modal -->

  <!-- Ini merupakan script yang terpenting -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

    $.noConflict();
    $('#edituser').on('show.bs.modal', function(e) {
      var data = $(e.relatedTarget).data();
              // $('.title', this).text(data.recordTitle);
              document.getElementById("nama").value = data.recordNama;
              document.getElementById("emails").value = data.recordEmails;
              document.getElementById("ids").value = data.recordIds;
              
              //document.getElementById("GROUP_ACCESS").value = data.recordId;

            });
          </script>