<?php
require_once '../koneksi.php';

/***
 * @var $connection PDO
 */

$no_pinjam = $_POST['no_pinjam'];
try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "Delete FROM peminjaman WHERE `no_pinjam`= '$no_pinjam'";

    $connection->exec($sql);
    echo "Data berhasil di hapus";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;