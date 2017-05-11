<?php
	include '../koneksi.php';

	$selected = null;
	$cari = $_POST['cari'];
	$judul="Hasil pencarian ' $cari '";
	include("../include/guru/header.php");
?>

			<div class="rigth_content">
				<table class="tabel">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Nim</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$query = "SELECT * from siswa WHERE nama like '%$cari%' ORDER BY nama ASC";
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
