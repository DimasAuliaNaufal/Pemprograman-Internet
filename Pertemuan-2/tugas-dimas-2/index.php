<?php
    include 'model.php';
    $model = new Model();
    $index = 1;
?>
<!doctype html>
<html lang="en">

<head>
<title>Toko Peralatan Basket</title>
</head>

<body>

    <div>
        <h1>Toko Peralatan Basket</h1>
        <a href="create.php">Tambah Data</a>
        <br>
        <table border="1">
            <thead>
                <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>Kode</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_data(); if (!empty($result)) {
                foreach ($result as $data) : ?>
                <tr>
                <td><?= $index++ ?></td>
                <td><?= $data->nama_barang ?></td>
                <td><?= $data->harga_barang ?></td>
                <td><?= $data->stok_barang ?></td>
                <td><?= $data->kode_barang ?></td>
                <td>
                <a name="id" id="id" href="edit.php?id=<?= $data->id_barang ?>">Edit</a>
                <a name="hapus" id="hapus" href="proses.php?id=<?= $data->id_barang ?>" onclick="return confirm('Apakah Anda Yakin ? ')">Delete</a>
                </td>
                </tr>
                <?php endforeach;
                } else { ?>
                <tr>
                <td colspan="9">Belum ada data yang di masukkan.</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    </body>
    </html>