<?php
	include '../koneksi.php';
	$judul="Panel Guru";
	$kontak = mysql_fetch_array(mysql_query("SELECT * from guru"));

	include("../include/guru/header.php");
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Riwayat Presensi</title>
		<link rel="stylesheet" href="../assett/css-siswa/main-siswa.css">
	</head>
	<body>
	<div class="wrap_login">
		<div class="login">
			<div class="judul_login">
				<h3>Lihat Riwayat Presensi</h3>
			</div>
			<form action="riwayat_presensi.php" method="POST" class="form_login" accept-charset="utf-8">
				<input type="text" name="cari" placeholder="NIS" class="form_input_login" required><br>
				<input class="button_login btn__ bt one" type="submit" value="CARI">
			</form>
			<div class="divider"></div>
			<div class="info_kontak">
				<p>Info kontak guru</p>
				<p>Email : <?php echo $kontak['no_hp']; ?></p>
				<p>No Hp : <?php echo $kontak['email']; ?></p>
			</div>
		</div>
	</div>

	</body>
	</html>
