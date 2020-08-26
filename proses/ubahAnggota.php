<?php

include "koneksi.php";

$user_id = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$ubah = mysqli_query($kon,"UPDATE user SET username = '$username', password = '$password', level = '$level' WHERE user.id_user = '$user_id'");

if ($ubah) {
    echo "<script languange= 'javascript'>
    alert('data berhasil di ubah')
    document.location = '../AdminAnggota.php'
    </script>";
}else {
   echo "<script languange= 'javascript'>
   alert('Gagal Di ubah')
   document.location = '../AdminAnggota.php'
   </script>".mysqli_error($kon);
}
?>