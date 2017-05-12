<!DOCTYPE html>
<?php
require_once 'validator.php';
require_once 'akun.php'; 
?>
<html>
<head>
	<title>Sistem Presensi Sederhana</title>
	<meta charset = "utf-8" />
	<meta name = "viewport" content = "width=device-width, initial-scale=1" />
	<link rel = "stylesheet" href = "css/bootstrap.css" />
</head>
<body>
	<nav class = "navbar navbar-inverse navbar-fixed-top">
		<div class = "container-fluid">
			<div class = "navbar-header">
				<img src = "images/logo.png" width = "200px" height = "50px"/>
				<p class = "navbar-text pull-right">Sistem Presensi Sederhana</p>
			</div>
			<ul class = "nav navbar-nav navbar-right">
				<li class = "dropdown">
					<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class = "glyphicon glyphicon-user"></i> <?php echo htmlentities($nama_guru)?> <b class = "caret"></b></a>
					<ul class = "dropdown-menu">
						<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid" style = "margin-top:70px;">
		<ul class = "nav nav-pills">
			<li class = "active"><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
			<li class = "dropdown">
				<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><span class = "glyphicon glyphicon-cog"></span> Akun <span class = "caret"></span></a>
				<ul class = "dropdown-menu">
					<li><a href = "guru.php"><span class = "glyphicon glyphicon-user"></span> Guru</a></li>
					<!-- <li><a href = "siswa.php"><span class = "glyphicon glyphicon-user"></span> Siswa</a></li> -->
				</ul>
			</li>
			<li><a href = "absensi.php"><span class = "glyphicon glyphicon-book"></span> Absensi</a></li>
		</ul>
		<br />
		<div class = "alert alert-info">“To acquire knowledge, one must study;
			but to acquire wisdom, one must observe.” 
			― Marilyn Vos Savant</div>
			<div class = "well col-lg-12">
				<div class = "col-lg-3"></div>
			</div>
			<br />
			<br />	
			<br />	
		</div>
	</div>
	<div class = "navbar navbar-fixed-bottom alert-warning">
		<div class = "container-fluid">
			<label class = "pull-left">&copy; Sistem Presensi Sederhana 2017</label>
			<label class = "pull-right">Developed: <a href = "#">devlabs</a></label>
		</div>	
	</div>	
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>

</html>