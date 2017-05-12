<?php
	require_once 'connect.php';
	$q_namaguru = $conn->query("SELECT * FROM `guru` WHERE `guru_id` = '$_SESSION[guru_id]'") or die(mysqli_error());
	$f_namaguru = $q_namaguru->fetch_array();
	$nama_guru = $f_namaguru['namadepan']." ".$f_namaguru['namabelakang'];