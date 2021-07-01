<?php include('config.php'); ?>

<center>
	<font size="6">Tambah Data</font>
</center>
<hr>
<?php
if (isset($_POST['submit'])) {
	$id			= $_POST['id'];
	$Nama		= $_POST['nama'];
	$Jenis		= $_POST['jenis'];
	$Ukuran		= $_POST['ukuran'];
	$Harga 		= $_POST['harga'];
	$Jumlah		= $_POST['jumlah'];
	$Total_Harga= $_POST['total_harga'];

	$cek = mysqli_query($koneksi, "SELECT * FROM masuk WHERE id='$id'") or die(mysqli_error($koneksi));

	if (mysqli_num_rows($cek) == 0) {
		$sql = mysqli_query($koneksi, "INSERT INTO masuk (id, nama, jenis, ukuran, harga, jumlah, total_harga) VALUES('$id', '$Nama', '$Jenis', '$Ukuran', '$Harga', '$Jumlah', '$Total_Harga')") or die(mysqli_error($koneksi));

		if ($sql) {
			echo '<script>alert("Berhasil menambahkan data."); document.location="utama.php?page=tampil_mhs";</script>';
		} else {
			echo '<script>alert("Gagal melakukan proses tambah data."); document.location="utama.php?page=tambah_mhs";</script';
		}
	} else {
		echo '<script>alert("Gagal, NIM sudah terdaftar."); document.location="utama.php?page=tambah_mhs";</script>';
	}
}

if (isset($_POST['submit'])) {
	$id			= $_POST['id'];
	$Nama		= $_POST['nama'];
	$Jenis		= $_POST['jenis'];
	$Ukuran		= $_POST['ukuran'];
	$Harga 		= $_POST['harga'];
	$Jumlah		= $_POST['jumlah'];
	$Total_Harga= $_POST['total_harga'];

	$cek = mysqli_query($koneksi, "SELECT * FROM keluar WHERE id='$id'") or die(mysqli_error($koneksi));

	if (mysqli_num_rows($cek) == 0) {
		$sql = mysqli_query($koneksi, "INSERT INTO keluar (id, nama, jenis, ukuran, harga, jumlah, total_harga) VALUES('$id', '$Nama', '$Jenis', '$Ukuran', '$Harga', '$Jumlah', '$Total_Harga')") or die(mysqli_error($koneksi));

		if ($sql) {
			echo '<script>alert("Berhasil menambahkan data."); document.location="utama.php?page=tampil_mhs";</script>';
		} else {
			echo '<script>alert("Gagal melakukan proses tambah data."); document.location="utama.php?page=tambah_mhs";</script';
		}
	} else {
		echo '<script>alert("Gagal, NIM sudah terdaftar."); document.location="utama.php?page=tambah_mhs";</script>';
	}
}
?>

<form action="utama.php?page=tambah_mhs" method="post">
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Pakaian</label>
		<div class="col-md-6 col-sm-6 ">
			<input type="text" name="nama" class="form-control" size="4" required>
		</div>
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Pakaian</label>
		<div class="col-md-6 col-sm-6">
			<select name="jenis" class="form-control" required>
				<option value="">Piih Jenis Pakaian</option>
				<option value="Baju">Baju</option>
				<option value="Celana">Celana</option>
				<option value="Rok">Rok</option>
				<option value="Gaun">Gaun</option>
				<option value="Baju Muslim">Baju Muslim</option>
				<option value="Jilbab">Jilbab</option>
				<option value="Kaos">Kaos</option>
				<option value="Mukena">Mukena</option>
				<option value="Jaket">Jaket</option>
				<option value="Hoodie">Hoodie</option>
				<option value="Rompi">Rompi</option>
				<option value="Baju Sekolah">Baju Sekolah</option>
				<option value="Baju Pengantin">Baju Pengantin</option>
				<option value="Baju Olahraga">Baju Olahraga</option>
				<option value="masuk Dalam">masuk Dalam</option>
			</select>
		</div>
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Ukuran</label>
		<div class="col-md-6 col-sm-6 ">
			<div class="btn-group" data-toggle="buttons">
				<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
					<input type="radio" class="join-btn" name="ukuran" value="S" required>S
				</label>
				<label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
					<input type="radio" class="join-btn" name="ukuran" value="M" required>M
				</label>
				<label class="btn btn-secondary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
					<input type="radio" class="join-btn" name="ukuran" value="L" required>L
				</label>
				<label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
					<input type="radio" class="join-btn" name="ukuran" value="XL" required>XL
				</label>
				<label class="btn btn-secondary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
					<input type="radio" class="join-btn" name="ukuran" value="XXL" required>XXL
				</label>
			</div>
		</div>
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Harga</label>
		<div class="col-md-6 col-sm-6">
			<input type="text" name="harga" class="form-control" required>
		</div>
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Jumlah</label>
		<div class="col-md-6 col-sm-6">
			<input type="text" name="jumlah" class="form-control" required>
		</div>
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Total Harga</label>
		<div class="col-md-6 col-sm-6">
			<input type="text" name="total_harga" class="form-control" required>
		</div>
	</div>
	<div class="item form-group">
		<div class="col-md-6 col-sm-6 offset-md-3">
			<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
		</div>
</form>
</div>