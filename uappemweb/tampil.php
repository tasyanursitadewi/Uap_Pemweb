<?php

include('config.php');
?>


<div class="container" style="margin-top:20px">
		<center><font size="6">Data Pemasukan</font></center>
		<hr>
		<a href="index.php?page=tambah"><button class="btn btn-dark right">Tambah Data</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr> 
					<th>No.</th>
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
				$sql = mysqli_query($koneksi, "SELECT * FROM pakaian ORDER BY id DESC") or die(mysqli_error($koneksi));

				if(mysqli_num_rows($sql) > 0){
					$no = 1;
					while($data = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['nama'].'</td>
							<td>'.$data['jenis'].'</td>
							<td>'.$data['ukuran'].'</td>
							<td>'.$data['harga'].'</td>
							<td>'.$data['jumlah'].'</td>
							<td>'.$data['total_harga'].'</td>
							<td>
							<a href="index.php?page=edit&id='.$data['id'].' "class="btn btn-primary btn-sm">Edit</a>
							<a href="delete.php?id='.$data['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}

				}else{
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