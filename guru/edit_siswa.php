<?php
	include '../koneksi.php';
	$nisnya = $_GET['nis'];
	$siswa = mysql_fetch_array(mysql_query("SELECT * from siswa where nis = $nisnya LIMIT 1"));

	$judul="Panel Guru";
	include("../include/guru/header.php");
?>

			<div class="rigth_content">
				<form action="proses/proses_edit.php" method="POST" name="tambah_data" class="form_tambah">
          <input type="hidden" name="nis_awal" value="<?php echo $siswa['nis']?>">
					<input class="input_s" type="text" name="nis" value="<?php echo $siswa['nis'] ?>" required><br>
					<input class="input_s" type="text" name="nama" value="<?php echo $siswa['nama']?>" required><br>
					<button id="button_edit_siswa" class="btn__ button_login bt one btn_save" type="submit" onclick="return konfirmasi()">Simpan</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
