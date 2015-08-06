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
						<h1 class="page_title">New Request</h1>
						
					</div>
				</div>
			</div>
			<div class="page_content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6">
							<div class="modal-header bayangan" style="background-color: #8F9494">
								<h4 style="color: white"><b>Langkah 1: Isikan Data Map</b></h4><br>
								</div>
							<div class="panel panel-default bayangan">
								<form class="form-horizontal">
									

									<h5>
										requester: 
										<select class="form-control">
											<?php foreach ($pengguna as $p) { ?>
												<option><?php echo $p->nama;
																?>:&nbsp<?php echo $p->nama_dept?></option>
											<?php } ?>
										</select>
									</h5>
									<h5>Nama File: <input class="form-control"></h5>
									
									<script>  
												function displayResult(frm){     
												 var selectedtag="";  
												    for (i = 0; i < frm.tag.length; i++){ //menghitung jumlah panjang array  
												  if (frm.tag[i].checked){     
												   selectedtag += frm.tag[i].value +", ";  
												  }  
												    }  
												 //memunculkan data di input id result yg isinya select buah  
												    document.getElementById("result").value=selectedtag;  
												}  
												function displayAlert(frm){     
												 var selectedtag="";  
												    for (i = 0; i < frm.tag.length; i++){     
												  if (frm.tag[i].checked){     
												   selectedtag += frm.tag[i].value +", ";  
												  }  
												    }  
												    if (selectedtag==""){ //jika tidak ada buah yg dipilih    
												  alert("Anda belum memilih sama sekali. Silahkan Pilih Tag !");  
												        form.tag[0].focus();  
												        return false;  
												    }  
												     
												}  
											</script>  
											<h5>Tag:</h5>
											<?php $id=1; foreach ($taging as $to):?>
												<input class="" placeholder="Tag" onclick="displayResult(this.form)" type="checkbox" name="tag" value="<?php echo $to->nama_tag ?>"> <?php echo $to->nama_tag ?>&nbsp&nbsp
											<?php $id++; endforeach ?>
											Tag yang kamu pilih: <input required readonly class="form-control" type="text" name="taging" value="" id="result" size="60">  
											<br>
									<h5>Deskripsi: <textarea class="form-control"></textarea>
									<h5>
									<button type="submit" class="btn btn-primary"> New Request</button>
									</h4>
								</form>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="modal-header bayangan" style="background-color: #8F9494">
								<h4 style="color: white"><b>Langkah 2: Upload File Pendukung</b></h4><br>
								</div>
							<div class="panel panel-default center bayangan">
								<?php echo form_open_multipart('upload_file/do_upload');?>
										<input class="form-control" type="file" name="userfile" size="20" /><br>
										
											<input type="submit" value="upload" multiple>
										
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
