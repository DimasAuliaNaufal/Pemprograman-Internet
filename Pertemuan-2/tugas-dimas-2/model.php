<?php
include 'connection.php';
class Model extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }
    public function insert($nama_barang, $harga_barang, $stock_barang, $kode_barang)
    {
        $sql = "INSERT INTO table_barang (nama_barang, harga_barang, stok_barang, nomer_kode) VALUES ('$nama_barang', '$harga_barang', '$stock_barang', '$kode_barang')";
        $this->conn->query($sql);
    }

    public function tampil_data()
    {
        $sql = "SELECT table_barang.*, kode.* FROM table_barang INNER JOIN kode ON table_barang.nomer_kode = kode.id_kode";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function get_kode(){
        $sql = "SELECT * FROM kode";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function edit($id)
    {

        $sql = "SELECT table_barang.*, kode.* FROM table_barang INNER JOIN kode ON table_barang.nomer_kode = kode.id_kode WHERE id_barang='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }
    public function update($nama_barang, $harga_barang, $stock_barang, $kode_barang, $id)
    {
        $sql = "UPDATE table_barang 
                SET nama_barang='$nama_barang',
                    harga_barang='$harga_barang',
                    stok_barang = '$stock_barang',
                    nomer_kode = '$kode_barang' 

                WHERE id_barang='$id'";
        $this->conn->query($sql);
    }
    public function delete($id)
    {
        $sql = "DELETE FROM table_barang WHERE id_barang='$id'";
        $this->conn->query($sql);
    }

    public function insertKode($nama_kode)
    {
        $sql = "INSERT INTO kode(kode_barang) VALUES ('$nama_kode')";
        $this->conn->query($sql);
    }
}