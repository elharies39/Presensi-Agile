<?php
	session_start();
	if(!ISSET($_SESSION['guru_id'])){
		header('location: index.php');
	}