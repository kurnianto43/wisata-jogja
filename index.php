<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Plesiran.com</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="style.css">
		<script src="bootstrap/js/jQuery.min.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<div class="navbar navbar-light" id="brand">
		<div class="container">
			<a class="navbar-brand" href="?page=home">
				<img src="img/logo5.png" width="100%" class="d-inline-block align-top" alt="">
			</a>
			<div class="float-right">
				<h6>Temukan kami :</h6>
					<a style="margin-right: 20px" href=""><img width="25px" src="img/instagram.png" alt=""></a>
					<a style="margin-right: 20px" href=""><img width="25px" src="img/facebook.png" alt=""></a>
					<a style="margin-right: 20px" href=""><img width="25px" src="img/twitter.png" alt=""></a>
					<a href=""><img width="25px" src="img/youtube.png" alt=""></a>
			</div>
								
		</div>
	</div>
	<div class="nav-scroller py-1" style="background-color: #171414">
		<div class="container">
			<nav class="nav d-flex justify-content-between">
				<a class="p-2 text-muted" href="?page=home">Home</a>
				<a class="p-2 text-muted" href="?page=wisata">Destinasi Wisata</a>
				<a class="p-2 text-muted" href="?page=kuliner">Kuliner</a>
				<a class="p-2 text-muted" href="?page=galeri">Galeri</a>
				<a class="p-2 text-muted" href="?page=tentang">Tentang Kami</a>
			</nav>
		</div>
	</div>
				
	<?php
		if(isset($_GET['page'])){
			$page=$_GET['page'];
			$halaman="$page.php";
			if(!file_exists($halaman) || empty($page)){
			    include "home.php";
			}else{
			    include "$halaman";
	        }
			}else{
			    include "home.php";
			}
	?>
<div class="container-fluid" style="background-color: #efefef; padding-top: 8px">
	<div class="row justify-content-center">
		<div class="col-lg-12">
			<footer>
				<p style="text-align: center;">Copyright&copy; Dyah Dwi Handayani</p>
			</footer>
		</div>
	</div>
</div>		
	
</body>
</html>