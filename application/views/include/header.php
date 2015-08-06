<style type="text/css">
.ukuran {
	height: 60px;
	background-color: #8F9494;
	box-shadow: 0px 5px 20px grey;
}
#gambar {
	margin-top: 8px;
}
</style>
<!--
* Nama Aplikasi: Request Map dan Katalog App
* Nama Pembuat: Dwi Al Aji Suseno
* Universitas: Institut Teknologi Sepuluh Nopember
* Jurusan: Teknik Informatika
* NIM: 5112100185
* Framework Code Igniter
* note: Selamat Mengembangkan aplikasi ini. 
-->
<header class="navbar navbar-fixed-top ukuran" role="banner" >
			
				<div class="navbar-header">
					<a href="<?php echo base_url('');?>main" class="">&nbsp&nbsp<img id="gambar" src="<?php echo base_url('');?>img/palyja.png" height="40px" margin-top="20px"></a>
				</div>
				<ul class="nav navbar-nav navbar-left">
					<li class="judul">&nbsp&nbspKatalog dan Request Peta GIS</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					
					<li class="user_menu">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="navbar_el_icon ion-person"></span> <span class="caret"></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="<?php echo base_url('')?>main/user_profile">Kelola Akun</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo base_url('');?>logout">Log Out</a></li>
						</ul>
					</li>
					
				</ul>
			
</header>