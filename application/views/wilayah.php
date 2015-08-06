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
						<h1 class="page_title">Kategori Wilayah</h1>
						<p class="text-muted">89 <a href="#">wilayah</a> in 3 <a href="#">categories</a></p>
					</div>
					<div class="col-md-2 text-right">
						<button class="btn btn-success">Upload Peta</button>
					</div>
				</div>
			</div>
			<div class="page_content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="table-responsive">
									<table class="table info_table" id="prod_table">
										<thead>
											<tr>
												<th><input type="checkbox" class="check_all" data-target-el="prod_table"></th>
												<th class="visible-lg">Nama Wilayah</th>
												<th class="sub_col">Judul Peta</th>
												<th class="sub_col">Nomor ID</th>
												
											</tr>
										</thead>
										<tr>
											<td class="col_sm sub_col">
												<input type="checkbox" class="check_row" name="prod_check_1" id="prod_check_1">
											</td>
											<td>
												<h5><a href="newsletter_report.html">Senayan</a></h5>
												<span class="text-muted">Added 4 Feb 2014 5:31</span>
											</td>
											<td class="sub_col">Network Jakarta Selatan</td>
											<td class="sub_col">2194</td>
																						
										</tr>
										
									</table>
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
		
		
		
	<!-- page specific plugins -->

		<!-- iCheck -->
		<script src="<?php echo base_url('');?>assets/lib/iCheck/jquery.icheck.min.js"></script>
		
		<!-- ecommerce functions -->
		<script src="<?php echo base_url('');?>assets/js/apps/tisa_ecommerce.js"></script>
		
    </body>
</html>
