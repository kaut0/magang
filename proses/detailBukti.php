<?php

include "koneksi.php";

$nama = $_POST['nama'];
$status = $_POST['status'];

$ubah = mysqli_query($kon,"UPDATE pembayaran SET status = '$status' WHERE pembayaran.nama = '$nama'; ");

if ($ubah) {
    echo "<script languange= 'javascript'>
    alert('data berhasil di ubah')
    document.location = '../AdminPembayaran.php'
    </script>";
}else {
   echo "<script languange= 'javascript'>
   alert('Gagal Di ubah')
   document.location = '../AdminPembayaran.php'
   </script>".mysqli_error($kon);
}
?>