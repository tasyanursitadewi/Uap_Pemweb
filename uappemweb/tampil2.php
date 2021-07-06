<?php

include('config.php');
?>


<div class="container" style="margin-top:20px">
	<center>
		<font size="6">Data Pengeluaran</font>
	</center>
	<hr>
	<a href="utama.php?page=tambah2"><button class="btn btn-dark right">Tambah Data</button></a>
	<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr align="center">
					<th>No.</th>
					<th>Tanggal</th>
                    <th>Nama</th>
					<th>Jenis</th>
					<th>Ukuran</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Total Harga</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql = mysqli_query($koneksi, "SELECT * FROM keluar ORDER BY id DESC") or die(mysqli_error($koneksi));

				if (mysqli_num_rows($sql) > 0) {
					$no = 1;
					while ($data = mysqli_fetch_assoc($sql)) {
						echo '
						<tr>
							<td>' . $no . '</td>
							<td>' . $data['tanggal'] . '</td>
                            <td>' . $data['nama'] . '</td>
							<td>' . $data['jenis'] . '</td>
							<td align="center">' . $data['ukuran'] . '</td>
							<td>' . $data['harga'] . '</td>
							<td align="center">' . $data['jumlah'] . '</td>
							<td>' . $data['total_harga'] . '</td>
							<td align="center">
							<a href="utama.php?page=edit2&id=' . $data['id'] . ' "class="btn btn-primary btn-sm">Edit</a>
							<a href="delete2.php?id=' . $data['id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				} else {
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
	</div>
</div>