<?php
	$judul="Panel Guru";
	include("../include/guru/header.php");
?>

			<div class="rigth_content">
				<form action="proses/proses_simpan.php" method="POST" name="tambah_data" class="form_tambah">
					<input class="input_s" type="text" name="nama" placeholder="Nama" required><br>
					<input class="input_s" type="text" name="nis" placeholder="NIS" required><br>
					<button id="button_tambah_siswa" class="btn__ button_login bt one btn_save" type="submit" onclick="return konfirmasi()">TAMBAH</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
