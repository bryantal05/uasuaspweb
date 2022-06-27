<?php
include_once '../koneksi.php';
/**
 * @var $connection PDO
 */

//user
$id_ktp = isset($_POST['id_ktp']) ? $_POST['id_ktp'] : '';
$nama_lengkap = isset($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : '';
$tahun_lahir = isset($_POST['tahun_lahir']) ? $_POST['tahun_lahir'] : '';
$nomor_telepon = isset($_POST['nomor_telepon']) ? $_POST['nomor_telepon'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';


/***@var $connection PDO */

try {
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO user (id_ktp, nama_lengkap, tahun_lahir, nomor_telepon, email, alamat) VALUES ('$id_ktp', '$nama_lengkap', '$tahun_lahir', '$nomor_telepon', '$email', '$alamat')";



    $connection -> exec($sql);
    echo "Data berhasil insert";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
} 

$connection = null;