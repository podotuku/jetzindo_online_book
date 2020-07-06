    <!-- BEGIN: Content-->
    <div class="app-content content">
    	<div class="content-overlay"></div>
    	<div class="content-wrapper">
    		<div class="content-header row">
    			<div class="content-header-left col-md-6 col-12 mb-2">
    				<h3 class="content-header-title mb-0">Penyewaan</h3>
    				<div class="row breadcrumbs-top">
    					<div class="breadcrumb-wrapper col-12">
    						<ol class="breadcrumb">
    							<li class="breadcrumb-item"><a href="index.html">Home</a>
    							</li>
    							<li class="breadcrumb-item"><a href="#">Penyewaan</a>
    							</li>
    							<li class="breadcrumb-item active">Data Penyewaan
    							</li>
    						</ol>
    					</div>
    				</div>
    			</div>
    			<div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
    				<div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
    					<a class="btn btn-outline-primary" href="<?php echo base_url(); ?>admin/booking"><i class="fa fa-arrow-left"></i> Back</a>
    				</div>
    			</div>
    		</div>
    		<div class="content-body">
    			<section class="row">
    				<div class="col-sm-12">
    					<!-- Kick start -->
    					<div id="kick-start" class="card">
    						<div class="card-header">
    							<h4 class="card-title">Tambah Penyewaan</h4>
    							<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
    							<div class="heading-elements">
    								
    							</div>
    						</div>
    						<div class="card-content collapse show">
    							<div class="card-body">

    								<form class="form" method="post" action="<?php echo base_url(); ?>admin/users/add">
    									<div class="form-body">

    										<div class="form-group">
    											<label for="donationinput1">Full Name</label>
    											<input type="text" id="donationinput1" class="form-control square" placeholder="Name" name="fullname">
    										</div>

    										<div class="form-group">
    											<label for="donationinput2">Email</label>
    											<input type="email" id="donationinput2" class="form-control square" placeholder="Email" name="email">
    										</div>

    										<div class="form-group">
    											<label for="donationinput3">Username</label>
    											<input type="text" id="donationinput3" class="form-control square" placeholder="Username" name="username">
    										</div>

    										<div class="form-group">
    											<label for="donationinput4">Password</label>
    											<input type="password" id="donationinput4" class="form-control square" placeholder="Password" name="password">
    										</div>
    										<div class="form-group">
    											<label for="donationinput5">Re-Type Password</label>
    											<input type="password" id="donationinput5" class="form-control square" placeholder="Re-Type Password" name="re_password">
    										</div>

    										<div class="form-group">
    											<label for="donationinput6">Access</label>
    											<select class="select2 form-control" name="access">
													<option value="">Pilih Access</option>
    												<option value="administrator">Administrator</option>
    												<option value="operator">Operator</option>


    											</select>
    										</div>
    										<div class="form-group">
    											<label for="donationinput6">Status</label>
    											<select class="select2 form-control" name="status">
    												<option value="">Pilih Status</option>
    												<option value="active">Active</option>
    												<option value="inactive">Inactive</option>
    												
    												
    											</select>
    										</div>




    									</div>

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