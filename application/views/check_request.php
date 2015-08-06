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
						<h1 class="page_title">Check Request Map</h1>
						<h5 style="color: blue">Ubah Status Peta -> Masukkan Data Peta -> Upload File PDF</h5>
					</div>
				</div>
			</div>
			<div class="page_content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6">
							<div class="modal-header bayangan" style="background-color: #8F9494">
								<h4 style="color: white"><b>Langkah 1: Update Status Map</b></h4><br>
								</div>
							<div class="panel panel-default bayangan">
								
								<div class="table-responsive">
									<table class="table info_table" id="prod_table">
										<form class="form-group" method="POST" action="<?php echo base_url('');?>main/update_status">
	
										<div>
											<input readonly class="form-control" placeholder="<?php echo $nama->nama;?>" name="id_login" value="<?php echo $id_login->id_login;?> " ><br>
											
											<select  name="judul" class="form-control">
												<?php foreach ($data_request as $dt): ?>
													<option value="<?php echo $dt->judul ?>"><?php echo $dt->judul ?>:<?php echo $dt->status?></option>
												
												<?php endforeach ?>
											</select><br>
											
											<select name="status" class="form-control">
												<option value="request">request</option>
												<option value="sedang dikerjakan">sedang dikerjakan</option>
												<option value="delivered">delivered</option>
												<option value="cancel">cancel</option>
											</select><br>
 
											<button type="submit" class="btn btn-primary" >Update</button>											
										</div>
										</form>
									</table>
								</div>
								
							</div>
						</div>
						<div class="col-lg-6">
							<div class="modal-header bayangan" style="background-color: #8F9494">
								<h4 style="color: white"><b>Langkah 2: Isikan Data Map</b></h4><br>

								</div>
							<div class="panel panel-default bayangan">
								<form class="form-group" method="post" action="<?php echo base_url('')?>main/insertPeta">
									
									<h5>Request Map <?php //echo $test->nama ?></h5>
									<select name="map" class="form-control">
										<?php foreach ($map as $m) { ?>
												
												<option value="<?php echo $m->id_request?>"><?php echo $m->judul?></option>
										
										<?php }?>
										
									</select>
									<h5>Nomor Register Map</h5>
									<input type="text" required name="register" class="form-control">
									<h5>Nama File</h5>
									<input type="text" required name="nama_file" class="form-control">
									<h5>PIC</h5>
									<input type="text" required name="pic" class="form-control"><br>
									<button class="btn btn-primary" type="submit">Submit</button>
								</form>
							</div>
						</div>
					
						
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="modal-header bayangan" style="background-color: #8F9494">
								<h4 style="color: white"><b>Langkah 3: Upload File Map</b></h4><br>
								</div>
							<div class="panel panel-default bayangan">
								
									
									<?php echo form_open_multipart('upload_file/do_upload');?>
										<input class="form-control" type="file" name="userfile" size="20" /><br>
										
											<input class="btn btn-primary" type="submit" value="upload" multiple>
										
									</form>
							</div>
						</div>
					</div>
						
					
			
	

		<!-- side navigation -->
		<?php 
		$this->load->view('include/menubar_kiri');
		?>


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
		
		
		<!--  bootstrap switches -->
		<script src="<?php echo base_url('');?>assets/lib/bootstrap-switch/build/js/bootstrap-switch.min.js"></script>
		
		
	<!-- page specific plugins -->

		<!-- iCheck -->
		<script src="<?php echo base_url('');?>assets/lib/iCheck/jquery.icheck.min.js"></script>
		
		
		<!-- perfect scrollbar -->
		<script src="<?php echo base_url('');?>assets/lib/perfect-scrollbar/min/perfect-scrollbar-0.4.8.with-mousewheel.min.js"></script>

		<!--  2col multiselect -->
		<script src="<?php echo base_url('');?>assets/lib/multi-select/js/jquery.multi-select.js"></script>
		<script src="<?php echo base_url('');?>assets/js/jquery.quicksearch.js"></script>
		<!-- multiselect, tagging -->
		<script src="<?php echo base_url('');?>assets/lib/select2/select2.min.js"></script>
		
		
		<!-- form extended elements functions -->
		<script src="<?php echo base_url('');?>assets/js/apps/tisa_extended_elements.js"></script>



    </body>
</html>