<?php
	include '../../koneksi.php';
    $nis = $_GET['id'];
    $hapus = mysql_query("DELETE FROM siswa WHERE nis=$nis");
    var_dump($nis);
    mysql_close();
    header("Location: proses_pilih_halaman_presensi.php");
 ?>
