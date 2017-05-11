<?php
  include '../../koneksi.php';
  $nis_awal = $_POST['nis_awal'];
  $nis = $_POST['nis'];
  $namanya = $_POST['nama'];

  $sql = mysql_query("UPDATE siswa set nis = '$nis', nama = '$namanya' where nis = '$nis_awal'");
  if ($sql) {
    header("Location: proses_pilih_halaman_presensi.php");
  }
 ?>
