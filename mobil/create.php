<?php
include_once '../koneksi.php';
/**
 * @var $connection PDO
 */

//user
$id_plat = isset($_POST['id_plat']) ? $_POST['id_plat'] : '';
$merk_mobil = isset($_POST['merk_mobil']) ? $_POST['merk_mobil'] : '';
$tahun_pembuatan = isset($_POST['tahun_pembuatan']) ? $_POST['tahun_pembuatan'] : '';
$pajak = isset($_POST['pajak']) ? $_POST['pajak'] : '';
$kondisi = isset($_POST['kondisi']) ? $_POST['kondisi'] : '';
$nomor_mesin = isset($_POST['nomor_mesin']) ? $_POST['nomor_mesin'] : '';


/***@var $connection PDO */

try {
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO mobil (id_plat, merk_mobil, tahun_pembuatan, pajak, kondisi, nomor_mesin) VALUES ('$id_plat', '$merk_mobil', '$tahun_pembuatan', '$pajak', '$kondisi', '$nomor_mesin')";



    $connection -> exec($sql);
    echo "Data berhasil insert";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
} 

$connection = null;