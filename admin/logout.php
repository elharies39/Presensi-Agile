<?php
	session_start();
	session_unset('guru_id');
	header('location:index.php');