<?php
    include '../../koneksi.php';
    $date = date("Y-m-d");
    $query = mysql_query("SELECT tanggal_presensi FROM presensi WHERE tanggal_presensi like '%$date%'");
    $current_date;
    while ($s = mysql_fetch_array($query)) {
    		$current_date = $s[0];
    }

    mysql_close();
    
    if ($current_date == $date) {
    	header("Location:../hasil_presensi.php?cat=presensi");
    } else {
    	header("Location:../presensi.php?cat=presensi");
    }
 ?>
