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
							<th>Kehadiran</th>
							<th>Tanggal Presensi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$query = "SELECT p.status_presensi, s.nama, s.nis, p.tanggal_presensi
						 from presensi p JOIN siswa s ON p.id_siswa = s.nis WHERE s.nis like '%$cari%'";
								$sql = mysql_query($query);
								$no = 1;
								while ($s = mysql_fetch_array($sql)) {
									$nama = $s['nama'];
									$nis = $s['nis'];
									$hadir = $s['status_presensi'];
									if($hadir == NULL){
										$hadir = "Tidak Hadir";
									}
									$tanggal = $s['tanggal_presensi'];
									echo "<tr>";
									echo "<td>".$no."</td>";
									echo "<td>$nama</td>";
									echo "<td>$nis</td>";
									echo "<td>$hadir</td>";
									echo "<td>$tanggal</td>";
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
