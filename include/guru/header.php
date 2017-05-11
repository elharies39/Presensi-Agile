<?php 
	if(isset($_GET["cat"])){
		if($_GET["cat"] == "presensi"){
			$selected="presensi";
		}else if($_GET["cat"] == "tambah_siswa"){
			$selected="tambah_siswa";
		}else if($_GET["cat"] == "edit_kontak"){
			$selected="edit_kontak";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<link rel="stylesheet" href="../assett/css/main.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<title>Panel Presensi</title>
</head>
<body>
	<header class="main_header">
		<div class="wrap_header">

			<h2 class="judul"><?php echo $judul?></h2>

			<div class="form_cari">
				<form action="hasil_pencarian.php" method="POST" class="form_cari_">
					<input class="form_cari__" type="text" placeholder="Cari berdasar nama siswa" name="cari">
					<input type="image" src="../assett/images/cari_icon.png" width="24" height="24">
				</form>
			</div>

		</div>
	</header>
	<div class="wrap_content">
		<div class="wrap_content_">
			<div class="left_content">
				<ul class="main_nav">
					<li><a href="proses/proses_pilih_halaman_presensi.php" class="<?php if($selected == "presensi" ) {echo "on"; }?>">Presensi siswa</a></li>
					<li><a href="tambah_siswa.php?cat=tambah_siswa" class="<?php if($selected == "tambah_siswa" ) {echo "on"; }?>">Tambah siswa</a></li>
					<li><a href="edit_kontak.php?cat=edit_kontak" class="<?php if($selected == "edit_kontak" ) {echo "on"; }?>">Update Kontak</a></li>
				</ul>
			</div>


