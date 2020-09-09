<?php

include ("koneksi.php");

$id = $_GET['id'];
$pilih = $kon->query("SELECT*FROM `marketing` WHERE `id` = '$id'");
$data = mysqli_fetch_array($pilih);
$gambar = $data['gambar'];

unlink($gambar);

$hapus = $kon->query("DELETE FROM `marketing` WHERE `marketing`.`id` = '$id'");

if ($hapus) {
    echo "<script languange= 'javascript'>
    alert('data berhasil di hapus')
    document.location = '../AM.php'
    </script>";
}else {
    echo "<script languange= 'javascript'>
    alert('data gagal di hapus')
    document.location = '../AM.php'
    </script>";
}

?>
