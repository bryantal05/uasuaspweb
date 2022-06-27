<?php
require_once '../koneksi.php';

$id_plat = isset($_POST['id_plat']) ? $_POST['id_plat'] : '';
$merk_mobil = isset($_POST['merk_mobil']) ? $_POST['merk_mobil'] : '';
$tahun_pembuatan = isset($_POST['tahun_pembuatan']) ? $_POST['tahun_pembuatan'] : '';
$pajak = isset($_POST['pajak']) ? $_POST['pajak'] : '';
$kondisi = isset($_POST['kondisi']) ? $_POST['kondisi'] : '';
$nomor_mesin = isset($_POST['nomor_mesin']) ? $_POST['nomor_mesin'] : '';


/***@var $connection PDO */

try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE mobil SET merk_mobil = '$merk_mobil', tahun_pembuatan = '$tahun_pembuatan',pajak = '$pajak', kondisi = '$kondisi', nomor_mesin = '$nomor_mesin' WHERE `id_plat`= '$id_plat'";

    $connection->exec($sql);
    echo "Data berhasil di update";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;