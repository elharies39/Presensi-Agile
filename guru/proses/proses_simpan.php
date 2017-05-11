<?php
	include '../../koneksi.php';
	// menyimpan data kedalam variabel
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];

	$tambahdata = "INSERT INTO siswa VALUES ('$nis', '$nama')";
	mysql_query($tambahdata);
	header("Location: proses_pilih_halaman_presensi.php");
?>