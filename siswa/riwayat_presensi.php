<?php 
	include '../koneksi.php';

	$cari = $_POST['cari'];
	$judul="Riwayat Presensi ' $cari '";
	include("../include/siswa/header.php");
?>

	<div class="wrap_content">
		<div class="wrap_content_">
			<div class="rigth_content">
				<table class="tabel">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Nis</th>
							<th>Tanggal Presensi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$query = "SELECT * from siswa WHERE nama like '%$cari%'";
								$sql = mysql_query($query);
								$no = 1;
								while ($s = mysql_fetch_array($sql)) {
									$nama = $s['nama'];
									$nis = $s['nis'];
									echo "<tr>";
									echo "<td>".$no."</td>";
									echo "<td>$nama</td>";
									echo "<td>$nis</td>";
									echo "</tr>";
								$no++;
								}

						 ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>

