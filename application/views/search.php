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
						<h1 class="page_title">Halaman Pencarian</h1>
						
					</div>
					
				</div>
			</div>
			<div class="page_content">
				<div class="container-fluid centered">
					<div class="row">
						<div class="col-lg-6 centered">
							<div class="panel panel-default bayangan">
								<div class="table-responsive">
									<table class="table info_table" id="prod_table">
										<form method="POST" action="<?php echo base_url('');?>main/cari">
										<thead>
											<tr>
												
												<th class="visible-lg centered">Temukan Petamu!</th>
												
											</tr>
										</thead>
										<tr>
											<td class="sub_col"><input class="form-control" placeholder="masukkan kata kunci file" name="input" value=""></td>
																						
										</tr>
										</form>
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
