<?php
require_once '../koneksi.php';

/***
 * @var $connection PDO
 */

$id_ktp = $_POST['id_ktp'];
try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "Delete FROM user WHERE `id_ktp`= '$id_ktp'";

    $connection->exec($sql);
    echo "Data berhasil di hapus";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;