<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `guru` WHERE `guru_id` = '$_REQUEST[guru_id]'") or die(mysqli_error());
	header('location:guru.php');