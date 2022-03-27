<?php

include 'model.php';

$model = new Model();
$kode = $model->get_kode();

?>
<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Nilai</title>
</head>

<body>

    <h1>Tambah</h1>
    <a href="index.php">Kembali</a>
    <a href="tambah_kode.php">Tambah Kode Barang</a>
    <br><br>
    <form action="proses.php" method="post">
        <label>Nama Barang</label>
        <br>
        <input type="text" name="nama">
        <br>
        <label>Harga Barang</label>
        <br>
        <input type="number" name="harga">
        <br>
        <label>Stock</label>
        <br>
        <input type="number" name="stock">
        <br>
        <label for="">Kode Barang</label>
        <br>
        <select name="kode_barang" id="kode_barang">
            <option>Select Kode</option>
            <?php
            foreach ($kode as $kodeBarang) : ?>
                <option value="<?php echo $kodeBarang->id_kode ?>"><?php echo $kodeBarang->kode_barang ?></option>
            <?php endforeach; ?>
        </select>


        <button type="submit" name="submit_simpan">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>