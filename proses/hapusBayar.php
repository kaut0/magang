<?php

include ("koneksi.php");

$id = $_GET['nama'];
$pilih = $kon->query("SELECT*FROM `pembayaran` WHERE `nama` = '$id'");
$data = mysqli_fetch_array($pilih);
$gambar = $data['bukti_tf'];

unlink($gambar);

$hapus = $kon->query("DELETE FROM `pembayaran` WHERE `pembayaran`.`nama` = '$id'");

if ($hapus) {
    echo "<script languange= 'javascript'>
    alert('data berhasil di hapus')
    document.location = '../AdminPembayaran.php'
    </script>";
}else {
    echo "<script languange= 'javascript'>
    alert('data gagal di hapus')
    document.location = '../AdminPembayaran.php'
    </script>";
}

?>
