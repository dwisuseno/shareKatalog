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
    <body class="side_nav_accordion sisi">
		<!-- top bar -->
		<?php 
		$this->load->view('include/header');
		?>
		
		<!-- main content --> 
		<div id="main_wrapper">
			<div class="page_bar clearfix">
				<div class="row">
					<div class="col-md-10">
						<h1 class="page_title">Edit User </h1>
						<p class="text-muted">Role: Admin</p>
					</div>
					<a href="<?php echo base_url('')?>main/user"><button class="btn btn-link pull-right">Back to User Management</button></a>
				</div>
			</div>
			<div class="page_content">
				<div class="container-fluid input-group">
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default bayangan">
								
							<form method="post" action="<?php echo base_url('')?>main/updateuser" class="form-group">	
										<h5>Pilih User:</h5>
										<select name="id_login" class="form-control">
										<?php foreach((array)$user as $u) {
											$id_log = $u->id_login;
											$nama_user = $u->nama_user;
											echo "<option value='$id_log'>"."$id_log"." - "."$nama_user"."</option>";
										} ?>
										</select>
							
								<hr><br>
								<h5>Nama</h5>
								<input name="nama" class="form-control"><br>
								<h5>Role</h5>
								<select name="role" class="form-control">
									<?php foreach ($nama_role as $role) { ?>
										<option value="<?php echo $role->id_role?>"><?php echo $role->nama?></option>
									<?php } ?>
								</select><br>
								<h5>Departemen</h5>
								<select  name="departemen" class="form-control">
									<?php foreach ($nama_dept as $nd) { ?>
										<option value="<?php echo $nd->id_dept?>"><?php echo $nd->nama_dept?></option>
									<?php } ?>
								</select><br>
								<h5>Username</h5>
								<input name="username" type="text" class="form-control"><br>
								<h5>Password</h5>
								<input type="password" name="password" class="form-control"><br><br>
								<button type="submit" class="btn btn-primary">Update</button>
							</form>
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
