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
 

    <body class="side_nav_accordion sisi " style="scroll: no">
		<!-- top bar -->
		<?php 
			$this->load->view('include/header');
		?>
		
		<!-- main content -->
		<div id="main_wrapper">
			<div class="page_content">
				<div class="container-fluid">
					<div class="row">
					
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="panel panel-default  bayangan">
								<div class="panel-body">
									<div class="easy_chart easy_chart_pages pull-left" data-percent="69"><i class="ion-document-text"></i></div>
									<div class="easy_chart_desc">
										<h4>3156 file pdf</h4>
										<p>Total Peta GIS</p>
									
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="panel panel-default bayangan">
								<div class="panel-body">
									<div class="easy_chart easy_chart_user pull-left" data-percent="60"><i class="ion-ios7-contact-outline"></i></div>
									<div class="easy_chart_desc">
										<h4><?php echo $jumlah_user->jumlah_user?> Pengguna</h4>
										<p>Total pengguna aplikasi</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="panel panel-default bayangan">
								<div class="panel-body">
									<div class="easy_chart easy_chart_images pull-left" data-percent="56"><i class="ion-images"></i></div>
									<div class="easy_chart_desc">
										<h4>Rata-rata: 1-2 hari</h4>
										<p>Respon Permintaan Peta GIS</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default bayangan">
								<div class="panel-body">
									<div class="heading_b">Peta GIS Palyja</div>
									<div class="row">
										<div class="col-md-12">
											 
											<div id="chartdiv" style="width:1000px; height:600px;"></div>
										</div>
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
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- easing -->
		<script src="assets/js/jquery.easing.1.3.min.js"></script>
		<!-- bootstrap js plugins -->
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- top dropdown navigation -->
		<script src="assets/js/tinynav.js"></script>
		<!-- perfect scrollbar -->
		<script src="assets/lib/perfect-scrollbar/min/perfect-scrollbar-0.4.8.with-mousewheel.min.js"></script>
		
		<!-- common functions -->
		<script src="assets/js/tisa_common.js"></script>
		

	<!-- page specific plugins -->

		<!-- nvd3 charts -->
		<script src="<?php echo base_url('');?>assets/lib/d3/d3.min.js"></script>
		<script src="<?php echo base_url('');?>assets/lib/novus-nvd3/nv.d3.min.js"></script>
		<!-- flot charts-->
		<script src="<?php echo base_url('');?>assets/lib/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url('');?>assets/lib/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url('');?>assets/lib/flot/jquery.flot.resize.min.js"></script>
		<script src="<?php echo base_url('');?>assets/lib/flot/jquery.flot.tooltip.min.js"></script>
		<!-- clndr -->
		<script src="<?php echo base_url('');?>assets/lib/underscore-js/underscore-min.js"></script>
		<script src="<?php echo base_url('');?>assets/lib/CLNDR/src/clndr.js"></script>
		<!-- easy pie chart -->
		<script src="<?php echo base_url('');?>assets/lib/easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
		<!-- owl carousel -->
		<script src="<?php echo base_url('');?>assets/lib/owl-carousel/owl.carousel.min.js"></script>
		
		<!-- dashboard functions -->
		<script src="<?php echo base_url('');?>assets/js/apps/tisa_dashboard.js"></script>
		


    </body>
</html>
