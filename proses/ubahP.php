<?php

include "koneksi.php";

$id = $_POST['id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];

$ubah = mysqli_query($kon,"UPDATE pengumuman SET judul = '$judul', deskripsi = '$deskripsi' WHERE pengumuman.id = $id");

if ($ubah) {
    echo "<script languange= 'javascript'>
    alert('data berhasil di ubah')
    document.location = '../AP.php'
    </script>";
}else {
   echo "<script languange= 'javascript'>
   alert('Gagal Di ubah')
   document.location = '../AP.php'
   </script>".mysqli_error($kon);
}
?>