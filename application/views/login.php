<!doctype html>
<!--
* Nama Aplikasi: Request Map dan Katalog App
* Nama Pembuat: Dwi Al Aji Suseno
* Universitas: Institut Teknologi Sepuluh Nopember
* Jurusan: Teknik Informatika
* NIM: 5112100185
* Framework Code Igniter
* note: Selamat Mengembangkan aplikasi ini. 
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<link rel="shortcut icon" href="<?php echo base_url('')?>img/palyja.png" />
		
	<!-- bootstrap framework -->
	<link href="<?php echo base_url('')?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- google webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400&amp;subset=latin-ext,latin' rel='stylesheet' type='text/css'>
		
	<link href="<?php echo base_url('')?>assets/css/login.css" rel="stylesheet">
	<style type="text/css">
	.center {
		text-align: left;
	}
	/*
	body {
    	background-image: url("img/background_login.jpg");
    	background-repeat: no-repeat;
    	background-attachment: fixed;
    	background-position: center;
	}*/
	#container {
		margin-right: 140px;
		margin-top: 90px;
	}
	#judul {
		font-family: verdana;
		color: #6600FF;
		font-size: 72pt;
	}
	#namaApp {
		margin-top: 80px;
		margin-left: 130px;
	}
	span {
		color: red;
	}
	</style>
</head>
<body >
	<div class="row">
		<!--
		<div class="center">
			<img src="<?php echo base_url('');?>img/palyja.png" height="180px">
		</div>
		-->
	</div>
	<br>
	
		<div class="col-md-5 pull-left" id="namaApp">
			<h1 id="judul"><b><span>K</span>atalog & <span>R</span>equest <span>P</span>eta GIS </b></h1>
			<p style="color: blue; font-family: calibri">Tampilan terbaik menggunakan browser Chrome</p>
		</div>
		<div class="col-md-3 pull-right" id="container">
			<form style="box-shadow: 10px 10px" id="login_form" action="<?php echo base_url('')?>login/auth_login" method="POST">
				<div class="modal-header" style="background-color: #8F9494">
					<h1 style="color: white">Login <!-- <span>/ <a href="#" class="open_register_form">WEBGIS</a></span> --></h1>
				</div>
				<div class="form-group">
					<label for="login_username">Username</label>
					<input type="text" class="form-control input-lg" id="login_username" name="username">
				</div>
				<div class="form-group">
					<label for="login_password">Password</label>
					<input type="password" class="form-control input-lg" id="login_password" name="password">
					<span class="help-block"><a href="#" class="open_register_form">Forgot password?</a></span>
				</div>
				<div class="submit_section">
					<button class="btn btn-lg btn-primary btn-block">Continue</button>
				</div>
				
			</form>

			<form id="register_form" style="box-shadow: 10px 10px; display: none">
				<div class="modal-header" style="background-color: #8F9494">
					<h1 style="color: white">Forgot Password<span> </span></h1>
				</div>
				<div class="form-group">
					<h4 style="color:blue" align="left">
						Silahkan menghubungi administrator di bagian Departemen GIS
					</h4>
				</div>
				<a href="#" class="open_login_form">kembali ke halaman login</a>
			</form>
		</div>
	

	
	
	<!-- jQuery -->
	<script src="<?php echo base_url('')?>assets/js/jquery.min.js"></script>
	<!-- bootstrap js plugins -->
	<script src="<?php echo base_url('')?>assets/bootstrap/js/bootstrap.min.js"></script>
	<script>
		$(function() {
			// switch forms
			$('.open_register_form').click(function(e) {
				e.preventDefault();
				$('#login_form').removeClass().addClass('animated fadeOutDown');
				setTimeout(function() {
					$('#login_form').removeClass().hide();
					$('#register_form').show().addClass('animated fadeInUp');
				}, 700);
			})
			$('.open_login_form').click(function(e) {
				e.preventDefault();
				$('#register_form').removeClass().addClass('animated fadeOutDown');
				setTimeout(function() {
					$('#register_form').removeClass().hide();
					$('#login_form').show().addClass('animated fadeInUp');
				}, 700);
			})
		})
	</script>
</body>
</html>