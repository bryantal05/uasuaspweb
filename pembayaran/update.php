<?php
require_once '../koneksi.php';

$id_nomortransaksi = isset($_POST['id_nomortransaksi']) ? $_POST['id_nomortransaksi'] : '';
$id_ktp = isset($_POST['id_ktp']) ? $_POST['id_ktp'] : '';
$id_plat = isset($_POST['id_plat']) ? $_POST['id_plat'] : '';
$tanggal_pengambilan = isset($_POST['tanggal_pengambilan']) ? $_POST['tanggal_pengambilan'] : '';
$status_bayar = isset($_POST['status_bayar']) ? $_POST['status_bayar'] : '';
$total_harga = isset($_POST['total_harga']) ? $_POST['total_harga'] : '';
$cicilan = isset($_POST['cicilan']) ? $_POST['cicilan'] : '';
$pengambilan = isset($_POST['pengambilan']) ? $_POST['pengambilan'] : '';


/***@var $connection PDO */

try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE pembayaran SET id_nomortransaksi = '$id_nomortransaksi', id_ktp = '$id_ktp', id_plat = '$id_plat', tanggal_pengambilan = '$tanggal_pengambilan', total_harga = '$total_harga', cicilan = '$cicilan'  pengambilan = '$pengambilan' WHERE `id_nomortransaksi`= '$id_nomortransaksi'";

    $connection->exec($sql);
    echo "Data berhasil di update";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;