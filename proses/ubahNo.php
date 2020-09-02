<?php

include "koneksi.php";

$nomor = $_POST['nomor'];

$ubah = mysqli_query($kon,"UPDATE `no_hp` SET `nomor` = '$nomor' WHERE `no_hp`.`id` = 1");

if ($ubah) {
    echo "<script languange= 'javascript'>
    alert('data berhasil di ubah')
    document.location = '../NO.php'
    </script>";
}else {
   echo "<script languange= 'javascript'>
   alert('Gagal Di ubah')
   document.location = '../NO.php'
   </script>".mysqli_error($kon);
}
?>