<?php

include ("koneksi.php");


$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$simpan = "INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES (NULL, '$username', '$password', '$level');";


if (mysqli_query($kon, $simpan)) {
    echo "<script languange= 'javascript'>
    alert('data berhasil di simpan')
    document.location = '../AdminAnggota.php'
    </script>";
}else {
   echo "<script languange= 'javascript'>
   alert('Gagal Di simpan')
   document.location = '../AdminAnggota.php'
   </script>".mysqli_error($kon);
}

?>