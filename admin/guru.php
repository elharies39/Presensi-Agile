<!DOCTYPE html>
<?php
require_once 'validator.php';
require_once 'akun.php'; 
?>
<html lang = "eng">
<head>
	<title>Sistem Presensi Sederhana</title>
	<meta charset = "utf-8" />
	<meta name = "viewport" content = "width=device-width, initial-scale=1" />
	<link rel = "stylesheet" href = "css/bootstrap.css" />
	<link rel = "stylesheet" href = "css/jquery.dataTables.css" />
</head>
<body>
	<nav class = "navbar navbar-inverse navbar-fixed-top">
		<div class = "container-fluid">
			<div class = "navbar-header">
				<img src = "images/logo.png" width = "200px" height = "50px"/>
				<p class = "navbar-text pull-right">Sistem Presensi Sederhana</p>
			</div>
			<ul class = "nav navbar-nav navbar-right">
				<li class = "dropdown">
					<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class = "glyphicon glyphicon-user"></i> <?php echo htmlentities($nama_guru)?> <b class = "caret"></b></a>
					<ul class = "dropdown-menu">
						<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid" style = "margin-top:70px;">
		<ul class = "nav nav-pills">
			<li><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
			<li class = "dropdown active">
				<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><span class = "glyphicon glyphicon-cog"></span> Akun <span class = "caret"></span></a>
				<ul class = "dropdown-menu">
					<li><a href = "guru.php"><span class = "glyphicon glyphicon-user"></span> Guru</a></li>
					<li><a href = "siswa.php"><span class = "glyphicon glyphicon-user"></span> Siswa</a></li>
				</ul>
			</li>
			<li><a href = "absensi.php"><span class = "glyphicon glyphicon-book"></span> Absensi</a></li>
		</ul>
		<br />
		<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
			<div class = "modal-dialog" role = "document">
				<div class = "modal-content panel-primary">
					<div class = "modal-header panel-heading">
						<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
						<h4 class = "modal-title" id = "myModallabel">Tambah Guru Baru</h4>
					</div>
					<form method = "POST" action = "simpan_guru_query.php" enctype = "multipart/form-data">
						<div class  = "modal-body">
							<div class = "form-group">
								<label>Username:</label>
								<input type = "text" required = "required" name = "username" class = "form-control" />
							</div>
							<div class = "form-group">
								<label>Password:</label>
								<input type = "password" maxlength = "12" required = "required" name = "password" class = "form-control" />
							</div>
							<div class = "form-group">
								<label>Nama Depan:</label>
								<input type = "text" name = "namadepan" required = "required" class = "form-control" />
							</div>
							<div class = "form-group">
								<label>Nama Belakang:</label>
								<input type = "text" name = "namabelakang" required = "required" class = "form-control" />
							</div>
							<div class = "form-group">
								<label>Phone:</label>
								<input type = "text" name = "phone" required = "required" class = "form-control" />
							</div>
						</div>
						<div class = "modal-footer">
							<button  class = "btn btn-primary" name = "save"><span class = "glyphicon glyphicon-save"></span> Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class = "modal fade" id = "delete" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
			<div class = "modal-dialog" role = "document">
				<div class = "modal-content ">
					<div class = "modal-body">
						<center><label class = "text-danger">Hapus data ini?</label></center>
						<br />
						<center><a class = "btn btn-danger remove_id" ><span class = "glyphicon glyphicon-trash"></span> Ya</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> Tidak</button></center>
					</div>
				</div>
			</div>
		</div>
		<div class = "modal fade" id = "edit_guru" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
			<div class = "modal-dialog" role = "document">
				<div class = "modal-content panel-warning">
					<div class = "modal-header panel-heading">
						<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
						<h4 class = "modal-title" id = "myModallabel">Edit Guru</h4>
					</div>
					<div id = "edit_query"></div>
				</div>
			</div>
		</div>
		<div class = "alert alert-info">Akun / Guru</div>
		<div class = "well col-lg-12">
			<button type = "button" class = "btn btn-success" data-target = "#myModal" data-toggle = "modal"><span class = "glyphicon glyphicon-plus"></span> Tambah baru</button>
			<br />
			<br />
			<table id = "table" class = "table table-bordered">
				<thead>
					<tr class = "alert-info">
						<th>Username</th>
						<th>Password</th>
						<th>Nama Depan</th>
						<th>Nama Belakang</th>
						<th>Phone</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$q_guru = $conn->query("SELECT * FROM `guru`") or die(mysqli_error());
					while($f_guru = $q_guru->fetch_array()){
						?>	
						<tr>
							<td><?php echo $f_guru['username']?></td>
							<td><?php echo md5($f_guru['password'])?></td>
							<td><?php echo $f_guru['namadepan']?></td>
							<td><?php echo htmlentities($f_guru['namabelakang'])?></td>
							<td><?php echo $f_guru['phone']?></td>
							<td><a class = "btn btn-danger rguru_id" name = "<?php echo $f_guru['guru_id']?>" href = "#" data-toggle = "modal" data-target = "#delete"><span class = "glyphicon glyphicon-remove"></span></a> <a class = "btn btn-warning  eguru_id" name = "<?php echo $f_guru['guru_id']?>" href = "#" data-toggle = "modal" data-target = "#edit_guru"><span class = "glyphicon glyphicon-edit"></span></a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
			<br />
			<br />	
			<br />		
		</div>
	</div>
	<div class = "navbar navbar-fixed-bottom alert-warning">
		<div class = "container-fluid">
			<label class = "pull-left">&copy; Sistem Presensi Sederhana 2017</label>
			<label class = "pull-right">Developed: <a href = "#">devlabs</a></label>
		</div>	
	</div>	
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>
<script src = "js/jquery.dataTables.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	});
</script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('.rguru_id').click(function(){
			$guru_id = $(this).attr('name');
			$('.remove_id').click(function(){
				window.location = 'hapus_guru.php?guru_id=' + $guru_id;
			});
		});
		$('.eguru_id').click(function(){
			$guru_id = $(this).attr('name');
			$('#edit_query').load('load_edit.php?guru_id=' + $guru_id);
		});
	});
</script>
</html>