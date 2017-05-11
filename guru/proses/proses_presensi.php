<?php
  include '../../koneksi.php';
    $nis = $_POST['nis'];
    $hadir = $_POST['kehadiran'];
    $id = 0;

    $id_siswa = serialize($nis);
    $kehadiran = serialize($hadir);


    if (isset($_POST['nis']) && isset($_POST['kehadiran'])) {
      for($i = 0; $i < count($nis); $i++) {
        mysql_query("INSERT INTO presensi values ('','$hadir[$i]', CURRENT_TIMESTAMP(),'$nis[$i]')");
        $id++;
      }

      header("Location:../hasil_presensi.php?cat=presensi");
    }else {
      mysql_error();
    }


 ?>
