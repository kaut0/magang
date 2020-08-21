<?php
include ("koneksi.php");


$nama = $_POST['nama'];
//$bukti = mysqli_real_escape_string($kon,$_POST['bukti']);


$simpan = "INSERT INTO `pembayaran` (`nama`, `bukti_tf`, `status`) VALUES ('$nama')";

if (mysqli_query($kon, $simpan)) {
    echo "<script languange= 'javascript'>
    alert('data berhasil di simpan')
    document.location = '../Pembayaran.php'
    </script>";
    
}else {
    echo "<script languange= 'javascript'>
    alert('Gagal Di simpan')
    document.location = '../Pembayaran.php'
    </script>".mysqli_error($kon);
    }
?>