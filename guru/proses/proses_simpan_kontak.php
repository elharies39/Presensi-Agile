<?php
	include '../../koneksi.php';

	$no = $_POST['no_hp'];
	$email = $_POST['email'];

	$sql = mysql_query("UPDATE guru set no_hp = '$no',email = '$email'");
	if ($sql) {
    	header("Location: proses_pilih_halaman_presensi.php");
 	 }
?>