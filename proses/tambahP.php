<?php

include ("koneksi.php");


$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$tgl = date("Y-m-d H:i:s");

$simpan = "INSERT INTO pengumuman (id, judul, deskripsi, tgl) VALUES (null, '$judul', '$deskripsi', '$tgl')";


if (mysqli_query($kon, $simpan)) {
    echo "<script languange= 'javascript'>
    alert('data berhasil di simpan')
    document.location = '../tambahP.php'
    </script>";
}else {
   echo "<script languange= 'javascript'>
   alert('Gagal Di simpan')
   document.location = '../tambahP.php'
   </script>".mysqli_error($kon);
}

?>