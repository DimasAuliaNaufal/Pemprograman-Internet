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

    <h1>Tambah Kode Barang</h1>
    <a href="index.php">Kembali</a>
    <br><br>
    <form action="proses.php" method="post">
        <label>Kode barang</label>
        <br>
        <input type="text" name="kode">
        <button type="submit" name="submit_kode">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>