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
						<h1 class="page_title">Hasil Pencarian</h1>
						<p class="text-muted">sumber: map_delivered tahun 2015</p>
					</div>
				</div>
			</div>
			<div class="page_content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default bayangan">
								<div class="table-responsive">
									<table class="table info_table" id="prod_table">
										<thead>
											<tr>
												<th class="visible-lg">No. Reg</th>
												<th class="sub_col">requester</th>
												<th class="sub_col">Departemen</th>
												<th class="sub_col">File PDF</th>
											</tr>
										</thead>
										<?php foreach ($input as $pg): ?>
										<tr>
											<td class="sub_col"><?php echo $pg->Id ?></td>
											<td class="sub_col"><?php echo $pg->requester ?></td>
											<td class="sub_col"><?php echo $pg->departemen ?></td>
											<td>
												<h5><a href="<?php echo base_url('')?>assets/img/peta/2015/<?php echo $pg->nama_file ?>.pdf" download><?php echo $pg->nama_file ?></a></h5>
												<span class="text-muted">created <?php echo $pg->tgl_pembuatan ?></span>
											</td>
																						
										</tr>
										<?php endforeach ?>
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
