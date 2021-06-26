<?php include('config.php'); ?>


<div class="container" style="margin-top:20px">
	<center>
		<font size="6">Edit Data</font>
	</center>
	<hr>

	<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$select = mysqli_query($koneksi, "SELECT * FROM pakaian WHERE id='$id'") or die(mysqli_error($koneksi));

		if (mysqli_num_rows($select) == 0) {
			echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
			exit();
		} else {
			$data = mysqli_fetch_assoc($select);
		}
	}
	?>

	<?php
	if (isset($_POST['submit'])) {
		$Nama		= $_POST['nama'];
		$Jenis		= $_POST['jenis'];
		$Ukuran		= $_POST['ukuran'];
		$Harga 		= $_POST['harga'];
		$Jumlah		= $_POST['jumlah'];
		$Total_Harga = $_POST['total_harga'];

		$sql = mysqli_query($koneksi, "UPDATE pakaian SET nama='$Nama', jenis='$Jenis', ukuran='$Ukuran', harga='$Harga', jumlah='$Jumlah', total_harga='$Total_Harga' WHERE id='$id'") or die(mysqli_error($koneksi));

		if ($sql) {
			echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=tampil";</script>';
		} else {
			echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
		}
	}
	?>

	<form action="edit.php?page=edit&id=<?php echo $id; ?>" method="POST">
</div>
<div class="item form-group">
	<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Pakaian</label>
	<div class="col-md-6 col-sm-6">
		<input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" required>
	</div>
</div>
<div class="item form-group">
	<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Pakaian</label>
	<div class="col-md-6 col-sm-6">
		<select name="jenis" class="form-control" required>
			<option value="">Pilih Jenis Pakaian</option>
			<option value="Baju"
			<?php if ($data['jenis'] == 'Baju') {
				echo 'selected';
			} ?>>Baju</option>
			<option value="Celana"
			<?php if ($data['jenis'] == 'Celana') {
				echo 'selected';
			} ?>>Celana</option>
			<option value="Rok"
			<?php if ($data['jenis'] == "Rok") {
				echo 'selected';
			} ?>>Rok</option>
			<option value="Gaun"
			<?php if ($data['jenis'] == 'Gaun') {
				echo 'selected';
			} ?>>Gaun</option>
			<option value="Baju Muslim"
			<?php if ($data['jenis'] == 'Baju Muslim') {
				echo 'selected';
			} ?>>Baju Muslim</option>
			<option value="Jilbab"
			<?php if ($data['jenis'] == 'Jilbab') {
				echo 'selected';
			} ?>>Jilbab</option>
			<option value="Kaos"
			<?php if ($data['jenis'] == 'Kaos') {
				echo 'selected';
			} ?>>Kaos</option>
			<option value="Mukena"
			<?php if ($data['jenis'] == 'Mukena') {
				echo 'selected';
			} ?>>Mukena</option>
			<option value="Jaket"
			<?php if ($data['jenis'] == 'Jaket') {
				echo 'selected';
			} ?>>Jaket</option>
			<option value="Hoodie"
			<?php if ($data['jenis'] == 'Hoodie') {
				echo 'selected';
			} ?>>Hoodie</option>
			<option value="Rompi"
			<?php if ($data['jenis'] == 'Rompi') {
				echo 'selected';
			} ?>>Rompi</option>	
			<option value="Baju Sekolah"
			<?php if ($data['jenis'] == 'Baju Sekolah') {
				echo 'selected';
			} ?>>Baju Sekolah</option>
			<option value="Baju Pengantin"
			<?php if ($data['jenis'] == 'Baju Pengantin') {
				echo 'selected';
			} ?>>Baju Pengantin</option>
			<option value="Baju Olahraga"
			<?php if ($data['jenis'] == 'Baju Olahraga') {
				echo 'selected';
			} ?>>Baju Olahraga</option>
			<option value="Pakaian Dalam"
			<?php if ($data['jenis'] == 'Pakaian Dalam') {
				echo 'selected';
			} ?>>Pakaian Dalam</option>
		</select>
	</div>
</div>
<div class="item form-group">
	<label class="col-form-label col-md-3 col-sm-3 label-align">Ukuran</label>
	<div class="col-md-6 col-sm-6 ">
		<div class="btn-group" data-toggle="buttons">
			<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
				<input type="radio" class="join-btn" name="ukuran" value="S"
				<?php if ($data['ukuran'] == 'S') {
					echo 'checked';
				} ?> required>S
			</label>
			<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
				<input type="radio" class="join-btn" name="ukuran" value="M"
				<?php if ($data['ukuran'] == 'M') {
					echo 'checked';
				} ?> required>M
			</label>
			<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
				<input type="radio" class="join-btn" name="ukuran" value="L"
				<?php if ($data['ukuran'] == 'L') {
					echo 'checked';
					} ?> required>L
			</label>
			<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
				<input type="radio" class="join-btn" name="ukuran" value="XL"
				<?php if ($data['ukuran'] == 'XL') {
					echo 'checked';
			} ?> required>XL
			</label>
			<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
				<input type="radio" class="join-btn" name="ukuran" value="XXL"
				<?php if ($data['ukuran'] == 'XXL') {
					echo 'checked';
				} ?> required>XXL
			</label>
		</div>
	</div>
</div>
<div class="item form-group">
	<label class="col-form-label col-md-3 col-sm-3 label-align">Harga</label>
	<div class="col-md-6 col-sm-6">
		<input type="text" name="harga" class="form-control" value="<?php echo $data['harga']; ?>" required>
	</div>
</div>
<div class="item form-group">
	<label class="col-form-label col-md-3 col-sm-3 label-align">Jumlah</label>
	<div class="col-md-6 col-sm-6">
		<input type="text" name="jumlah" class="form-control" value="<?php echo $data['jumlah']; ?>" required>
	</div>
</div>
<div class="item form-group">
	<label class="col-form-label col-md-3 col-sm-3 label-align">Total Harga</label>
	<div class="col-md-6 col-sm-6">
		<input type="text" name="total_harga" class="form-control" value="<?php echo $data['total_harga']; ?>" required>
	</div>
</div>

<div class="item form-group">
	<div class="col-md-6 col-sm-6 offset-md-3">
		<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
		<a href="index.php?page=tampil" class="btn btn-warning">Kembali</a>
	</div>
</div>
</form>
</div>