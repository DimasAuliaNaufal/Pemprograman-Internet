<?php

include 'model.php';

if (isset($_POST['submit_simpan'])) {
    $nama_barang = $_POST['nama'];
    $harga_barang = $_POST['harga'];
    $stock_barang = $_POST['stock'];
    $kode_barang = $_POST['kode_barang'];
    $model = new Model();
    $model->insert($nama_barang, $harga_barang, $stock_barang, $kode_barang); 
    header('location:index.php');
}
if (isset($_POST['submit_kode'])) {
    $nama_kode = $_POST['kode'];

    $model = new Model();
    $model->insertKode($nama_kode); 
    header('location:index.php');
}

if (isset($_POST['submit_edit'])) {
    $nama_barang = $_POST['nama'];
    $harga_barang = $_POST['harga'];
    $stock_barang = $_POST['stock'];
    $kode_barang = $_POST['kode_barang'];
    $id = $_POST ['id'];
    $model = new Model();
    $model->update($nama_barang, $harga_barang, $stock_barang, $kode_barang, $id); 
    header('location:index.php');
}

if (isset($_GET['id'])) 
{
    $id = $_GET['id'];
    $model = new Model();
    $model->delete($id); 
    header('location:index.php');
}