<?php 
//include("../proses/cek_login.php");
//include("../inc/koneksi.php");
$judul="Panel Guru";
	include("../include/guru/header.php");
?>
	
			<div class="rigth_content">
				<table class="tabel">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Nim</th>
							<th>Presensi</th>
							<th>Edit</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Wisnu</td>
							<td>14523264</td>
							<td>
								<div class="checkbox">
	      							<label>
	      								<form action="">
	        								<input type="checkbox" name="kehadiran" value="hadir">
	        								<span class="checkbox-material">
		        								<span class="check"></span>
		        							</span>
	        							</form>
	      							</label>
	    						</div>
							</td>
							<td>
								<a class="edit_s" href='edit_tambah_siswa.php?cat=tambah_siswa&id=$id'>edit</a>
								<a class="edit_s" onclick='return konfirmasi_hapus()'>hapus</a>
							</td>
						</tr>
					</tbody>
				</table>
				
				<button class="btn__ button_login bt one btn_save">SAVE</button>
			</div>
		</div>
	</div>

</body>
</html>