<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
$kode = $model->get_kode();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Toko</title>
</head>

<body>

    <h1>Edit Data Toko</h1>
    <a href="index.php">Kembali</a>
    <br><br>
    <form action="proses.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data->id_barang ?>">
        <label>Nama</label>
        <br>
        <input type="text" name="nama" value="<?php echo $data->nama_barang ?>">
        <br>
        <label>Harga</label>
        <br>
        <input type="text" name="harga" value="<?php echo $data->harga_barang ?>">
        <br>
        <label>Stock</label>
        <br>
        <input type="text" name="stock" value="<?php echo $data->stok_barang ?>">
        <br>
        <select name="kode_barang" id="kode_barang">
            <option><?php echo $data->kode_barang ?></option>
            <?php
            foreach ($kode as $kodeBarang) : ?>
                <option value="<?php echo $kodeBarang->id_kode ?>"><?php echo $kodeBarang->kode_barang ?></option>
            <?php endforeach; ?>
        </select>


        <button type="submit" name="submit_edit">Submit</button>
    </form>
</body>

</html>