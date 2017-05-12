<?php
	require_once 'connect.php';
	if(ISSET($_POST['save'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$namadepan = $_POST['namadepan'];
		$namabelakang = $_POST['namabelakang'];
		$phone = $_POST['phone'];
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
			$conn->query("INSERT INTO `guru` VALUES('', '$username', '$password', '$namadepan', '$namabelakang', '$phone')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Tersimpan!");
					window.location = "guru.php";
				</script>
			';
		}
	}	