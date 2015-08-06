<!DOCTYPE html>
<!--
* Nama Aplikasi: Request Map dan Katalog App
* Nama Pembuat: Dwi Al Aji Suseno
* Universitas: Institut Teknologi Sepuluh Nopember
* Jurusan: Teknik Informatika
* NIM: 5112100185
* Framework Code Igniter
* note: Selamat Mengembangkan aplikasi ini. 
-->
<html>
    <?php 
    $this->load->view('include/head');
    ?>
    <body class="side_nav_accordion sisi" style="overflow: hidden">
		<!-- top bar -->
		<?php 
		$this->load->view('include/header');
		?>
		
		<!-- main content --> 
		<div id="main_wrapper" >
			<div class="page_bar clearfix" >
				<div class="row">
					<div class="col-md-10">
						<h1 class="page_title">Kelola Akun</h1>
						
					</div>
				</div>
			</div>
				<div class="row">
					<div class="container-fluid centered">
						<div class="col-md-10">
							<div class="panel panel-default bayangan">
								<div class="panel-body">
									<div class="user_profile">
										<form class="form-horizontal" method="post" action="<?php echo base_url('')?>main/saving">
											<div class="tabbable tabs-right">
												<ul class="nav nav-tabs">
													<li class="active"><a data-toggle="tab" href="#profile_general_pane" class="tab-default">User Info</a></li>
													
												</ul>
												<div class="tab-content">
													<div class="tab-pane active">
										<div class="form-group">
											<label for="profile_username" class="col-md-2 control-label">Username</label>
											<div class="col-md-10">
											<input type="text" class="form-control" value="<?php echo $user->username?>" placeholder="<?php echo $user->username?>" name="user" disabled>
											</div>
										</div>
										<div class="form-group">
											<label for="user_fname" class="col-md-2 control-label">Nama</label>
											<div class="col-md-10">
											<input type="text" class="form-control" value="<?php echo $nama->nama?>" placeholder="<?php echo $nama->nama?>" name="nama">
											</div>
										</div>
														
										<div class="form-group">
											<label for="user_password" class="col-md-2 control-label">Password</label>
											<div class="col-md-10">
												<input type="password" name="password" class="form-control" placeholder="<?php echo $pass->password?>" value="<?php echo $pass->password?>">
											</div>
										</div>
									</div>
													
													
												</div>
												<hr>
												<div class="text-center">
													<button type="sub" class="btn btn-success"><i class="fa fa-save"></i> Save profile</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
			
			
			</div>		
		</div>

		<!-- side navigation -->
		<?php 
		$this->load->view('include/menubar_kiri');
		?>
	
</div>

		<!-- jQuery -->
		<script src="<?php echo base_url('');?>assets/js/jquery.min.js"></script>
		<!-- easing -->
		<script src="<?php echo base_url('');?>assets/js/jquery.easing.1.3.min.js"></script>
		<!-- bootstrap js plugins -->
		<script src="<?php echo base_url('');?>assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- top dropdown navigation -->
		<script src="<?php echo base_url('');?>assets/js/tinynav.js"></script>
		<!-- perfect scrollbar -->
		<script src="<?php echo base_url('');?>assets/lib/perfect-scrollbar/min/perfect-scrollbar-0.4.8.with-mousewheel.min.js"></script>
		
		<!-- common functions -->
		<script src="<?php echo base_url('');?>assets/js/tisa_common.js"></script>
		
		<!-- datatables -->
        <script src="<?php echo base_url(''); ?>assets/lib/DataTables/media/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(''); ?>assets/lib/DataTables/media/js/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url(''); ?>assets/lib/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
        <script src="<?php echo base_url(''); ?>assets/lib/DataTables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
		
		<!-- datatables functions -->
		<script src="<?php echo base_url(''); ?>assets/js/apps/tisa_datatables.js"></script>
	<!-- page specific plugins -->

		<!-- iCheck -->
		<script src="<?php echo base_url('');?>assets/lib/iCheck/jquery.icheck.min.js"></script>
		
		<!-- ecommerce functions -->
		<script src="<?php echo base_url('');?>assets/js/apps/tisa_ecommerce.js"></script>
		
    </body>
</html>
