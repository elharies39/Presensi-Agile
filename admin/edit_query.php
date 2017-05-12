<?php
	require_once 'connect.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$namadepan = $_POST['namadepan'];
	$namabelakang = $_POST['namabelakang'];
	$q_cekguru = $conn->query("SELECT * FROM `guru` WHERE `username` = '$username'") or die(mysqli_error());
		$v_cekguru = $q_cekguru->num_rows;
		if($v_cekguru == 1){
			echo '
				<script type = "text/javascript">
					alert("Username sudah ada!");
					window.location = "guru.php";
				</script>
			';
		}else{
			$conn->query("UPDATE `guru` SET `username` = '$username', `password` = '$password', `namadepan` = '$namadepan', `namabelakang` = '$namabelakang' WHERE `guru_id` = '$_REQUEST[guru_id]'") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Berhasil Diubah");
					window.location = "guru.php";
				</script>
			';
		}	