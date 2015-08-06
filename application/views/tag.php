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
    <body class="side_nav_accordion sisi" style="overflow: hidden">
		<!-- top bar -->
		<?php 
		$this->load->view('include/header');
		?>
		
		<!-- main content -->
		<div id="main_wrapper">
			<div class="page_bar clearfix">
				<div class="row">
					<div class="col-md-12">
						<h1 class="page_title">Setting Tags</h1>
						<div class="pull-right">
							<button data-toggle="modal" data-target="#tambahTag" class="btn btn-primary"><span class="glyphicon glyphicon-plus" area-hidden="true"></span> Add Tag</button>
							<button data-toggle="modal" data-target="#editTag" class="btn btn-warning"><span class="glyphicon glyphicon-edit" area-hidden="true"></span> Edit Tag</button>
							<button data-toggle="modal" data-target="#hapusTag" class="btn btn-danger"><span class="glyphicon glyphicon-remove" area-hidden="true"></span> Delete Tag</button>
						</div>
					</div>
				</div>
			</div>
			<!-- modal content -->
			<div class="container"  >
				<div class="modal fade" style="width: 1000px; 
											   align: center; 
											   overflow: hidden;
											   padding-top: 150px;
											   padding-left: 400px;" id="tambahTag" role="dialog">
					<div class="dialog">
						<div class="modal-content">
							<div class="modal-header" style="background-color: #8F9494">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 style="color: white">Tambah Tags</h3>
							</div>
							<form class="form-group" method="post" action="<?php echo base_url('')?>main/addingtag">
								<div class="modal-body">
									<h4></h4>								
										<h5>Nama Tag</h5>
										<input class="form-control" value="" style="box-shadow: 0px 0px 8px #8F9494" name="nama_tag" required><br>
										<HR>
										<button type="submit" placeholder="nama tag" style="box-shadow: 4px 4px 15px #0066FF" class="btn btn-primary">Add</button>								
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="modal fade" style="width: 1000px; 
											   align: center; 
											   overflow: hidden;
											   padding-top: 150px;
											   padding-left: 400px;" id="editTag" role="dialog">
					<div class="dialog">
						<div class="modal-content">
							<div class="modal-header" style="background-color: #8F9494">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 style="color: white">Edit Tag</h3>
							</div>
							<form class="form-group" method="post" action="<?php echo base_url('')?>main/edittag" >
								<div class="modal-body">
									<h5>Pilih Tag yang akan diganti:</h5>
									<select class="form-control" name="tag" style="box-shadow: 0px 0px 8px #8F9494">
										<?php foreach ($tag as $tg) { ?>
											<option class="form-control"  value="<?php echo $tg->Id?>"><?php echo $tg->nama_tag ?></option>
										<?php } ?>
									</select><br>
									<h5>Ketikkan nama tag yang baru :</h5>
									<input class="form-control" type="text" style="box-shadow: 0px 0px 8px #8F9494" name="tagname" required><br><HR>
									<button class="btn btn-primary" type="submit">Change</button>
								</div>
								<div class="" id="hasil" toggle="no">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="modal fade" style="width: 1000px; 
											   align: center; 
											   overflow: hidden;
											   padding-top: 150px;
											   padding-left: 400px;" id="hapusTag" role="dialog">
					<div class="dialog">
						<div class="modal-content">
							<div class="modal-header" style="background-color: #8F9494">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 style="color: white">Delete Tag</h3>
							</div>
							<form class="form-group" method="post" action="<?php echo base_url('')?>main/deletetag">
								<div class="modal-body">
									<h5>Pilih Tag</h5>
									<select class="form-control" name="tag" style="box-shadow: 0px 0px 8px #8F9494">
										<?php foreach ($tag as $tg) { ?>
											<option class="form-control"  value="<?php echo $tg->nama_tag?>"><?php echo $tg->nama_tag ?></option>
										<?php } ?>
									</select><br>
									<button class="btn btn-danger" type="submit" >delete</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="page_content">
				<div class="container-fluid centered">
					<div class="row">
						<div class="col-lg-6 centered">
							<div class="panel panel-default bayangan">
								<div class="table-responsive">
									<table id="dt_basic" class="table table-striped">
										<thead>
											<tr>
												<th class="visible-lg">No.</th>
												<th class="sub_col">Nama Tags</th>												
											</tr>
										</thead>
										<?php $nomor=1; foreach($tag as $t): ?>
										<tr>
											<td class="sub_col"><?php echo $nomor ?></td>
											<td class="sub_col"><?php echo $t->nama_tag ?></td>										
										</tr>
										<?php $nomor++; endforeach ?>
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
		<!-- jquery source -->
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
		
		

		
		
    </body>
</html>
