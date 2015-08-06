<!--
* Nama Aplikasi: Request Map dan Katalog App
* Nama Pembuat: Dwi Al Aji Suseno
* Universitas: Institut Teknologi Sepuluh Nopember
* Jurusan: Teknik Informatika
* NIM: 5112100185
* Framework Code Igniter
* note: Selamat Mengembangkan aplikasi ini. 
-->
<!-- side navigation -->

		<nav id="side_nav_acc_wrapper" class="sisi">
			<ul>
				<!-- Menu Dashboard -->
				<li>
					<a href="<?php echo base_url('');?>main"><span class="ion-speedometer"></span> <span class="nav_title">Dashboard</span></a>
				</li>

				<!-- Menu Request Your Map: User -->
				<?php if($id_role->id_role==3 || $id_role->id_role == 1){ ?>
					<li>
					<a href="#">
						<span class="ion-ios7-compose-outline"></span>
						<?php if($jumlah_delivered->jumlah_delivered > 0) { ?><span class="badge badge-primary pull-right"><?php echo $jumlah_delivered->jumlah_delivered; ?>&nbspnew</span> <?php } ?>
						<span class="nav_title">Request Map</span>
					</a>
					<div class="sub_panel">
						<div class="side_inner">
							<h4 class="panel_heading panel_heading_first"> Status Request &nbsp</h4>
							<ul>
								<li><a href="<?php echo base_url('');?>main/status"><span class="glyphicon glyphicon-map-marker" area-hidden="true"></span> Status Request</a></li>
								
							</ul>
							<ul>
								<li><a href="<?php echo base_url('');?>main/ownRequest"><span class="glyphicon glyphicon-import" area-hidden="true"></span> Your Request</a></li>
								
							</ul>
							<div class="panel_section">
								<a href="<?php echo base_url('');?>main/request" class="btn btn-sm btn-primary">Request Map</a>
							</div>
							<!--
							<h4 class="panel_heading">Folders</h4>
							<ul>
								<li><a href="mail_inbox.html"><span class="side_icon ion-ios7-filing-outline"></span> Inbox <small class="text-muted pull-right">(142)</small></a></li>
								<li><a href="mail_outbox.html"><span class="side_icon ion-ios7-paperplane-outline"></span> Sent Mail</a></li>
								<li><a href="mail_spam.html"><span class="side_icon ion-ios7-close-outline"></span> Spam <small class="text-danger pull-right">(23)</small></a></li>
								<li><a href="#"><span class="side_icon ion-ios7-compose-outline"></span> Drafts</a></li>
								<li><a href="#"><span class="side_icon ion-ios7-trash-outline"></span> Deleted</a></li>
							</ul>
							-->
						</div>
					</div>
				</li>
				<?php } ?>

				<!-- Menu Manajemen User -->
				<?php if($id_role->id_role==1) {?>
				<li>
					<a href="#">
						<span class="ion-ios7-cog-outline"></span>
						<span class="nav_title">Pengaturan</span>
					</a>
					<div class="sub_panel">
						<div class="side_inner">
							
							<h4 class="panel_heading panel_heading_first">Edit User</h4>
							<ul>
								<li><a href="<?php echo base_url('');?>main/user"><span class="glyphicon glyphicon-user"></span> User</a></li>
							</ul>
							<h4 class="panel_heading panel_heading_first">Edit Tag</h4>
							<ul>
								<li><a href="<?php echo base_url('');?>main/tag"><span class="glyphicon glyphicon-tags"></span> Tag</a></li>
							</ul>
							<h4 class="panel_heading panel_heading_first">Edit Request</h4>
							<ul>
								<li><a href="<?php echo base_url('');?>main/data_request"><span class="glyphicon glyphicon-open"></span> Request</a></li>
							</ul>
						
						</div>
					</div>
				</li>
				<?php } ?>

				<!-- Menu Laporan Map: semua user -->
				<li>
					<a href="#">
						<span class="ion-clipboard"></span>
						<span class="nav_title">Laporan Request Map</span>
					</a>
					<div class="sub_panel">
						<div class="side_inner">
							<h4 class="panel_heading panel_heading_first">Kategori Peta</h4>
							<ul>
								<!-- <li><a href="<?php echo base_url('');?>main/wilayah"><span class="glyphicon glyphicon-map-marker" area-hidden="true"></span> Wilayah</a></li> -->
								<li><a href="<?php echo base_url('');?>main/tahun"><span class="glyphicon glyphicon-calendar" area-hidden="true"></span> Tahun</a></li>
							</ul>
							<h4 class="panel_heading panel_heading_first">Data Laporan</h4>
							<ul>
								<li><a href="<?php echo base_url('');?>main/penggunaan_peta"><span class="glyphicon glyphicon-credit-card"></span> Penggunaan Peta</a></li>
							</ul>
							<div class="panel_section">
								<a href="<?php echo base_url('');?>main/search"><button  class="btn btn-primary">Cari Peta</button></a>
							</div>
						</div>
					</div>
				</li>
				<!--
				<li>
					<a href="#">
						<span class="ion-ios7-copy-outline"></span>
						<span class="nav_title">Scan Abd</span>
					</a>
					<div class="sub_panel">
						<div class="side_inner">
							
							<h4 class="panel_heading panel_heading_first">Data Scan Abd</h4>
							<ul>
								<li><a href="<?php echo base_url('');?>main/abd"><span class="glyphicon glyphicon-credit-card"></span> File Scan Abd</a></li>
							</ul>
							<!--
							<div class="panel_section">
								<a href="<?php echo base_url('');?>main/search"><button  class="btn btn-primary">Halaman Pencarian</button></a>
							</div>
						
						</div>
					</div>
				</li>
				-->

				<!-- Menu Check Request: User GIS -->
				<?php if($id_role->id_role == 2 || $id_role->id_role == 1) { ?>
					<li>
						<a href="#">
							<span class="ion-ios7-paperplane-outline"></span>
							<?php if($jumlah_request->jumlah_request > 0) { ?><span class="badge badge-primary pull-right"><?php echo $jumlah_request->jumlah_request; ?>&nbspnew</span> <?php } ?>
							<span class="nav_title">Check Request</span>
						</a>
						<div class="sub_panel">
							<div class="side_inner">
								
								<h4 class="panel_heading panel_heading_first">Data Check Request</h4>
								<ul>
									<li><a href="<?php echo base_url('');?>main/check_request"><span class="glyphicon glyphicon-credit-card"></span> Check Request</a></li>
								</ul>
								<ul>
									<li><a href="<?php echo base_url('');?>main/status"><span class="glyphicon glyphicon-map-marker" area-hidden="true"></span> Status Request<?php if($jumlah_request->jumlah_request > 0) { ?><span class="badge badge-primary pull-right"><?php echo $jumlah_request->jumlah_request; ?>&nbspnew</span> <?php } ?></a>
									</li>
								</ul>
								<ul>
									<li><a href="<?php echo base_url('');?>main/make_request"><span class="glyphicon glyphicon-plus-sign"></span> New Request</a></li>
								</ul>
								<!--
								<div class="panel_section">
									<a href="<?php echo base_url('');?>main/search"><button  class="btn btn-primary">Halaman Pencarian</button></a>
								</div>
							-->
							</div>
						</div>
					</li>
				<?php } ?>
				<li>
					<a href="#"><span class="nav-title">Selamat Datang, <?php echo $nama->nama ?></span></a>
				</li>
			</ul>
		</nav>