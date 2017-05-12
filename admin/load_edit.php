<?php
	require_once 'connect.php';
	$q_edit_guru = $conn->query("SELECT * FROM `guru` WHERE `guru_id` = '$_REQUEST[guru_id]'") or die(mysqli_error());
	$f_edit_guru = $q_edit_guru->fetch_array();
?>
<form method = "POST" action = "edit_query.php?guru_id=<?php echo $f_edit_guru['guru_id']?>" enctype = "multipart/form-data">
	<div class  = "modal-body">
		<div class = "form-group">
			<label>Username:</label>
			<input type = "text" required = "required" value = "<?php echo $f_edit_guru['username']?>" name = "username" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Password:</label>
			<input type = "password" required = "required" maxlength = "12" value = "<?php echo $f_edit_guru['password']?>" name = "password" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Nama Depan:</label>
			<input type = "text" name = "namadepan" value = "<?php echo $f_edit_guru['namadepan']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Nama Belakang:</label>
			<input type = "text" name = "namabelakang" value = "<?php echo htmlentities($f_edit_guru['namabelakang'])?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Phone:</label>
			<input type = "text" name = "phone" value = "<?php echo $f_edit_guru['phone']?>" required = "required" class = "form-control" />
		</div>
	</div>
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_guru"><span class = "glyphicon glyphicon-edit"></span> Simpan Perubahan</button>
	</div>
</form>	