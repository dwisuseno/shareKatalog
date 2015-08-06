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
						
						<h1 class="page_title">Peta GIS yang anda request </h1>
						<p style="color: red">versi beta</p>
						
						
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
										<?php  $no=1; foreach ($data_request as $pg) {?>
										<?php if($pg->requester === $nama->nama){ ?>
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

										<?php $no++; } }?>
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
