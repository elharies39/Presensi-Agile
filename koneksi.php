<?php 
	//File ini selalu dipanggil ketika konek ke DB
	$konek = mysql_connect("localhost",'root','') or die("gagal server");
	mysql_select_db('presensi',$konek);
?>