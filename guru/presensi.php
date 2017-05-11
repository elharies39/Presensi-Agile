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
							<th>NIS</th>
							<th>Presensi</th>
							<th>Edit</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$query = "SELECT * from siswa ORDER BY nama ASC";
								$sql = mysql_query($query);
								$no = 1;
								while ($s = mysql_fetch_array($sql)) {
									$nama = $s['nama'];
									$nis = $s['nis'];
									echo "<tr>";
									echo "<td>".$no."</td>";
									echo "<td>$nama</td>";
									echo "<td>$nis</td>";
									echo "<td>";
									echo "<form action='proses/proses_presensi.php' method='POST'>";
										echo "<div class='checkbox'>";
			      						echo "<label>";

															echo "<input type='hidden' name='nis[]' value='$nis'>";
			        								echo "<input type='checkbox' name='kehadiran[]' value='hadir'>";
			        								echo "<span class='checkbox-material'>";
				        								echo "<span class='check'></span>";
				        							echo "</span>";

			      							echo "</label>";
			    						echo "</div>";
									echo "</td>";
									echo "<td>";
									echo "<a class='edit_s' href='edit_siswa.php?nis=$nis'>edit</a>
										<a class='edit_s' href='proses/proses_hapus.php?id=$nis'>hapus</a>";
									echo "</td>";
								echo "</tr>";
								$no++;
								}

						 ?>
					</tbody>
				</table>

				<button class="btn__ button_login bt one btn_save" type="submit">SAVE</button>
				<?php echo "</form>"; ?>
			</div>
		</div>
	</div>

</body>
</html>
