<?php
	include '../koneksi.php';

	$tanggal = date("Y/m/d");
	$judul="Panel Guru  $tanggal";
	include("../include/guru/header.php");
?>

			<div class="rigth_content">
				<table class="tabel">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Nim</th>
							<th>Kehadiran</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$query = "SELECT p.status_presensi, s.nama, s.nis from presensi p JOIN siswa s ON p.id_siswa = s.nis";
								$sql = mysql_query($query);
								$no = 1;
								while ($siswa = mysql_fetch_array($sql)) {
									$nama = $siswa['nama'];
									$nis = $siswa['nis'];
									$kehadiran = $siswa['status_presensi'];

									if ($kehadiran == NULL) {
										$kehadiran = "tidak hadir";
									}
									
									echo "<tr>";
									echo "<td>".$no."</td>";
									echo "<td>$nama</td>";
									echo "<td>$nis</td>";
									echo "<td>$kehadiran</td>";
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
