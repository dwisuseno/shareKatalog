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
    <body class="side_nav_accordion sisi" >
		<!-- top bar -->
		<?php 
		$this->load->view('include/header');
		?>
		
		<!-- main content -->
		<div id="main_wrapper" >
			<div class="page_bar clearfix" >
				<div class="row">
					<div class="col-md-12">
						
						<h1 class="page_title">Status Request</h1>
						<p class="text-muted" style="color:red">
							<i>Halaman ini hanya menampilkan status map yang ada request. Jika ingin status telah berubah delivered, anda bisa mencari di 'Laporan Request Map'</i>
						</p>
						<div class="pull-right">
							<button data-toggle="modal" style="box-shadow: 3px 3px 5px grey" data-target="#hapusTag" class="btn btn-danger"><span class="glyphicon glyphicon-remove" area-hidden="true"></span> Cancel Request</button>
						</div>
					</div>
				</div>
			</div>
			<!-- modal content -->
			
				<div class="modal fade" style="width: 1000px; 
											   align: center; 
											   overflow: hidden;
											   padding-top: 200px;
											   padding-left: 400px;" id="hapusTag" role="dialog">
					<div class="dialog">
						<div class="modal-content">
							<div class="modal-header" style="background-color: #8F9494">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 style="color: white">Cancel Request</h3>
							</div>
							<form class="form-group" method="post" action="<?php echo base_url('')?>main/hapusRequest">
								<div class="modal-body">
									<h5>Pilih Nama Request</h5>
									<select class="form-control" name="judul">
										<?php foreach ($nama_Request as $nr) { ?>
											<option class="form-control" value="<?php echo $nr->judul?>"><?php echo $nr->judul ?></option>
										<?php } ?>
									</select><br>
									<button class="btn btn-danger" type="submit" >cancel</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			
			<div class="page_content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default bayangan">
								<div class="table-responsive" style="text-align: left">
									<div class="panel-body">
										<table id="dt_basic" class="table table-striped" style="text-align: left" >
										<thead>
											<tr>
												<th >No</th>
												<th >Request</th>
												<th >Status</th>
												<th >GIS Maker</th>
											</tr>
										</thead>
										<?php  $no=1; foreach ($data_request as $pg):?>
										<tr>
											<td ><?php echo $no ?></td>
											<td  >
												<b><?php echo $pg->judul ?></b><br>
												<?php echo $pg->deskripsi ?>
												<br>
												<br>
												<br>
												<i>date: <?php echo $pg->tgl_request ?></i>
												by: <?php echo $pg->requester ?>
											</td>
											<td ><?php echo $pg->status ?></td>
											<td ><?php echo $pg->nama ?></td>
											
																						
										</tr>
										<?php $no++; endforeach ?>
										</table>
									</div>
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

		<!-- listNav -->
		<script src="<?php echo base_url(''); ?>assets/lib/jquery-listnav/dist/js/jquery-listnav-2.4.0.min.js"></script>
		<!-- quicksearch -->
		<script src="<?php echo base_url(''); ?>assets/js/jquery.quicksearch.js"></script>
		<!-- iCheck -->
		<script src="<?php echo base_url(''); ?>assets/lib/iCheck/jquery.icheck.min.js"></script>
		
		<!-- user list functions -->
		<script src="<?php echo base_url(''); ?>assets/js/apps/tisa_user_list.js"></script>
		
		<!-- ecommerce functions -->
		<script src="<?php echo base_url('');?>assets/js/apps/tisa_ecommerce.js"></script>
		
    </body>
</html>
