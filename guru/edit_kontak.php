<?php
	include '../koneksi.php';
	$judul="Panel Guru";
	$kontak = mysql_fetch_array(mysql_query("SELECT * from guru"));

	include("../include/guru/header.php");
?>

			<div class="rigth_content">
				<form action="proses/proses_simpan_kontak.php" method="POST" name="tambah_kontak" class="form_tambah">
					<input class="input_s" type="text" name="no_hp" value="<?php echo $kontak['no_hp']; ?>" placeholder="Nomer hp" required><br>
					<input class="input_s" type="text" name="email" value="<?php echo $kontak['email'];?>" placeholder="Email" required><br>
					<button id="button_tambah_siswa" class="btn__ button_login bt one btn_save" type="submit" onclick="return konfirmasi()">UPDATE</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>