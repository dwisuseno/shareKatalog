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
									<button class="btn btn-danger" type="submit" >delete</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			
			<div class="page_content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">Search through a list</div>
								<div class="panel_body_a">
									<div class="well well-sm">
										<input type="text" class="form-control" placeholder="Find user or company ..." id="list_search" >
									</div>
									<div class="user_list_action">
										<div class="user_check_all"><input type="checkbox"></div>
										<select class="form-control input-sm" name="user_list_action" id="user_list_action">
											<option value="">Bulk Action</option>
											<option value="edit">Edit</option>
											<option value="remove">Remove</option>
											<option value="activate">Activate</option>
										</select>
										<button class="btn btn-sm btn-default">Action</button>
									</div>
									<ul id="user_list_search" class="user_list">
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_3.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Fidel <span class="last-name">Buckridge</span></a></h4>
												<p class="text-muted"><span class="company">Frami and Sons</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_11.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Linnea <span class="last-name">Stamm</span></a></h4>
												<p class="text-muted"><span class="company">Murphy Group</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_18.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Katrine <span class="last-name">Cormier</span></a></h4>
												<p class="text-muted"><span class="company">Weimann-Flatley</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_3.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Mercedes <span class="last-name">Krajcik</span></a></h4>
												<p class="text-muted"><span class="company">Morar, Torp and Mueller</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_19.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Clifton <span class="last-name">Bosco</span></a></h4>
												<p class="text-muted"><span class="company">Doyle, Daniel and Hammes</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_19.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Gail <span class="last-name">Hessel</span></a></h4>
												<p class="text-muted"><span class="company">Keeling-Mante</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_10.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Kayley <span class="last-name">Hegmann</span></a></h4>
												<p class="text-muted"><span class="company">Dach, Schumm and Schoen</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_9.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Theron <span class="last-name">Simonis</span></a></h4>
												<p class="text-muted"><span class="company">Deckow, Crist and Purdy</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_14.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Nathaniel <span class="last-name">McGlynn</span></a></h4>
												<p class="text-muted"><span class="company">Schroeder-Medhurst</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_1.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Cielo <span class="last-name">Hessel</span></a></h4>
												<p class="text-muted"><span class="company">Johnston, Hackett and Ernser</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_12.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Bianka <span class="last-name">Heathcote</span></a></h4>
												<p class="text-muted"><span class="company">Kassulke, Tremblay and Toy</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_4.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Camilla <span class="last-name">O'Hara</span></a></h4>
												<p class="text-muted"><span class="company">Stark-Kozey</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_12.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Bernita <span class="last-name">Metz</span></a></h4>
												<p class="text-muted"><span class="company">Paucek PLC</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_19.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Carley <span class="last-name">Ruecker</span></a></h4>
												<p class="text-muted"><span class="company">Murphy, Weimann and Johns</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_4.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Vladimir <span class="last-name">Olson</span></a></h4>
												<p class="text-muted"><span class="company">Satterfield LLC</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_18.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Fay <span class="last-name">Herzog</span></a></h4>
												<p class="text-muted"><span class="company">Block-Kirlin</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_8.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Wilburn <span class="last-name">Williamson</span></a></h4>
												<p class="text-muted"><span class="company">Littel, Considine and Kuhlman</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_9.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Leonor <span class="last-name">Fadel</span></a></h4>
												<p class="text-muted"><span class="company">Jewess LLC</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_11.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Lysanne <span class="last-name">Cummings</span></a></h4>
												<p class="text-muted"><span class="company">Bauch, Dach and Tremblay</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_5.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Libby <span class="last-name">Gutmann</span></a></h4>
												<p class="text-muted"><span class="company">O'Keefe-Kihn</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_3.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Cecilia <span class="last-name">Homenick</span></a></h4>
												<p class="text-muted"><span class="company">Mohr, Herzog and Rogahn</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_7.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Rosalinda <span class="last-name">Conroy</span></a></h4>
												<p class="text-muted"><span class="company">Deckow-Heller</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_15.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Carolanne <span class="last-name">Luettgen</span></a></h4>
												<p class="text-muted"><span class="company">Larkin-Schneider</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_13.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Braulio <span class="last-name">Carroll</span></a></h4>
												<p class="text-muted"><span class="company">Leannon, Ruecker and Gorczany</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_1.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Zola <span class="last-name">Nienow</span></a></h4>
												<p class="text-muted"><span class="company">Pfeffer LLC</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_8.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Victor <span class="last-name">Homenick</span></a></h4>
												<p class="text-muted"><span class="company">Rath PLC</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_19.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Naomie <span class="last-name">Farrell</span></a></h4>
												<p class="text-muted"><span class="company">Lueilwitz-Jacobs</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_1.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Mckayla <span class="last-name">Hartmann</span></a></h4>
												<p class="text-muted"><span class="company">Reichert-Conn</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_12.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Willa <span class="last-name">Kunde</span></a></h4>
												<p class="text-muted"><span class="company">Shields Inc</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_12.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Cassandra <span class="last-name">Tremblay</span></a></h4>
												<p class="text-muted"><span class="company">Armstrong Ltd</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_15.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Lolita <span class="last-name">Dickinson</span></a></h4>
												<p class="text-muted"><span class="company">Friesen Ltd</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_14.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Tiffany <span class="last-name">Schuster</span></a></h4>
												<p class="text-muted"><span class="company">Kunze-Sawayn</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_3.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Elvera <span class="last-name">Lind</span></a></h4>
												<p class="text-muted"><span class="company">Feil-Conn</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_13.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Jacynthe <span class="last-name">Stracke</span></a></h4>
												<p class="text-muted"><span class="company">O'Hara Inc</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_17.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Marisa <span class="last-name">Deckow</span></a></h4>
												<p class="text-muted"><span class="company">Hoeger, Mosciski and Boyle</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_3.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Nettie <span class="last-name">Harvey</span></a></h4>
												<p class="text-muted"><span class="company">Emmerich LLC</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_13.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Dylan <span class="last-name">Mills</span></a></h4>
												<p class="text-muted"><span class="company">Halvorson-Torp</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_8.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Lacey <span class="last-name">Kihn</span></a></h4>
												<p class="text-muted"><span class="company">Terry, Sauer and Parker</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_12.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Bradford <span class="last-name">Thiel</span></a></h4>
												<p class="text-muted"><span class="company">Hand-Runolfsson</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_8.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Janessa <span class="last-name">Mraz</span></a></h4>
												<p class="text-muted"><span class="company">Hilll-Boyle</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_9.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Cristobal <span class="last-name">Bode</span></a></h4>
												<p class="text-muted"><span class="company">Wunsch-Waters</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_5.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Geovanni <span class="last-name">McCullough</span></a></h4>
												<p class="text-muted"><span class="company">Keeling-Grady</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_11.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Jaycee <span class="last-name">Boyle</span></a></h4>
												<p class="text-muted"><span class="company">Ebert PLC</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_1.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Althea <span class="last-name">Runolfsson</span></a></h4>
												<p class="text-muted"><span class="company">Braun, Gutmann and Spinka</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_4.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Marguerite <span class="last-name">Steuber</span></a></h4>
												<p class="text-muted"><span class="company">Bosco, Crooks and Dicki</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_15.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Breanne <span class="last-name">Kunze</span></a></h4>
												<p class="text-muted"><span class="company">Von Inc</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_19.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Earnestine <span class="last-name">Eichmann</span></a></h4>
												<p class="text-muted"><span class="company">Mills, Abshire and Cruickshank</span></p>
											</div>
										</li>
										<li>
											<div class="user_check">
												<input type="checkbox">
											</div>
											<img class="img-thumbnail pull-left " src="assets/img/avatars/avatar_12.jpg" alt="">
											<div class="list_content">
												<span class="user_actions text-muted">
													<i class="fa fa-envelope-o"></i>
												</span>
												<h4><a href="#">Verner <span class="last-name">Cummings</span></a></h4>
												<p class="text-muted"><span class="company">Cruickshank, Marks and Weimann</span></p>
											</div>
										</li>
							
									</ul>
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
