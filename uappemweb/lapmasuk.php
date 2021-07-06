<?php include('config.php');

$bukumasuk = 0;
$jumlah = mysqli_query($koneksi, "SELECT * FROM masuk WHERE id=id");
while ($tabelA = mysqli_fetch_array($jumlah)) {
    $dataA = $tabelA['jumlah']; {
        $bukumasuk = $bukumasuk + $dataA;
    }
}

$bukukeluar = 0;
$jumlah2 = mysqli_query($koneksi, "SELECT * FROM keluar WHERE id=id");
while ($tabelB = mysqli_fetch_array($jumlah2)) {
    $dataB = $tabelB['jumlah']; {
        $bukukeluar = $bukukeluar + $dataB;
    }
}

$danamasuk = 0;
$jumlah3 = mysqli_query($koneksi, "SELECT * FROM keluar WHERE id=id");
while ($tabelC = mysqli_fetch_array($jumlah3)) {
    $dataC = $tabelC['total_harga']; {
        $danamasuk = $danamasuk + $dataC;
    }
}

$danakeluar = 0;
$jumlah4 = mysqli_query($koneksi, "SELECT * FROM masuk WHERE id=id");
while ($tabelD = mysqli_fetch_array($jumlah4)) {
    $dataD = $tabelD['total_harga']; {
        $danakeluar = $danakeluar + $dataD;
    }
}

?>

<center>
    <font size="6">Data Laporan</font>
    <hr>
</center>
<br>
<div class="row mb-5" align="center">
    <div class="col ml-5">
        <font size="5"><div class="card bg-danger text-white" style="height: 7rem; width: 20rem;">Jumlah Buku Masuk<br><?= $bukumasuk; ?></div></font>
    </div>
    <div class="col mr-5">
        <font size="5" align="center"><div class="card bg-success text-white" style="height: 7rem; width: 20rem;">Jumlah Buku Keluar<br><?= $bukukeluar; ?></div></font>
    </div>
</div>
<div class="row" align="center">
    <div class="col ml-5">
        <font size="5"><div class="card bg-info text-white" style="height: 7rem; width: 20rem;">Jumlah Dana Masuk<br>Rp<?= $danamasuk; ?></div></font>
    </div>
    <div class="col mr-5">
        <font size="5" align="center"><div class="card bg-warning text-white" style="height: 7rem; width: 20rem;">Jumlah Dana Keluar<br>Rp<?= $danakeluar; ?></div></font>
    </div>
</div>