<?php
	include '../koneksi.php';
	$judul="Panel Guru";
	$kontak = mysql_fetch_array(mysql_query("SELECT * from guru"));

?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Riwayat Presensi</title>
		<link href="../assett/css-siswa/main-siswa.css" rel="stylesheet">
	</head>
	<body>
	<div class="wrap_login">
		<div class="login">
			<div class="judul_login">
				<h3>Lihat Riwayat Presensi</h3>
			</div>
			<form accept-charset="utf-8" action="riwayat_presensi.php" class="form_login" method="POST">
				<input class="form_input_login" name="cari" placeholder="NIS" type="text" required><br>
				<input class="button_login btn__ bt one" type="submit" value="CARI">
			</form>
			<div class="divider"></div>
			<div class="info_kontak">
				<p>Info kontak guru</p>
				<p>Email : <?php echo $kontak['email']; ?></p>
				<p>No Hp : <?php echo $kontak['no_hp']; ?></p>
			</div>
		</div>
	</div>

	</body>
	</html>
