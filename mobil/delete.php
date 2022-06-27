<?php
require_once '../koneksi.php';

/***
 * @var $connection PDO
 */

$id_plat = $_POST['id_plat'];
try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "Delete FROM mobil WHERE `id_plat`= '$id_plat'";

    $connection->exec($sql);
    echo "Data berhasil di hapus";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;