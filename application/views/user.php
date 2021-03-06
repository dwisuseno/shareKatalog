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
					<div class="col-md-12">
						<h1 class="page_title">User Management</h1>
						<p class="text-muted">edit pengguna</p>
						<div class="pull-right">
							<a href="<?php echo base_url('')?>main/tambah_user"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus" area-hidden="true"></span> Tambah User</button></a>
							<a href="<?php echo base_url('')?>main/edit_user"><button class="btn btn-warning"><span class="glyphicon glyphicon-edit" area-hidden="true"></span> Edit User</button></a>
							<a href="<?php echo base_url('')?>main/hapus_user"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove" area-hidden="true"></span> Hapus User</button></a>
						</div>
					</div>
					
				</div>
			</div>
			<div class="page_content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default bayangan">
								<table id="dt_basic" class="table table-striped">
										<thead>
											<tr>
												<th class="visible-lg">No.</th>
												<th class="sub_col">Nama User</th>
												<th class="sub_col">Username</th>
												<th class="sub_col">Departemen</th>
												<th class="sub_col">Role</th>
											</tr>
										</thead>
										<?php $no=1; foreach($pengguna as $p): ?>
										<tr>
											<td><?php echo $no?></td>
											<td><?php echo $p->nama_user?></td>
											<td><?php echo $p->username?></td>
											<td><?php echo $p->nama_dept?></td>
											<td><?php echo $p->nama?></td>	
										</tr>
										<?php $no++; endforeach ?>
									</table>
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
