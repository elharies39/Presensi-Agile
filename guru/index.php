<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>LOGIN GURU</title>
		<link rel="stylesheet" href="../assett/css/main.css">
	</head>
	<body>
	<div class="wrap_login">
		<div class="login">
			<div class="judul_login">
				<h2>Login Guru</h2>
			</div>

			<!--todo change action-->
			<form method="post" action="proses/proses_pilih_halaman_presensi.php?cat=presensi" class="form_login" accept-charset="utf-8">
				<input type="text" name="email" placeholder="Email" class="form_input_login" required><br>
				<input type="password" name="password" placeholder="Password" class="form_input_login" required><br>
				<button class="button_login btn__ bt one" type="submit" name="login">Login</button>
			</form>
		</div>
	</div>

	</body>
	</html>
