<?php
include ("koneksi.php");


$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$tempat_lahir = $_POST['tempat_lahir'];
$jk = $_POST['gender'];
$jurusan = $_POST['jurusan'];
$tgl_lahir = $_POST['tgl'];
$tgl_dftr = date("Y-m-d H:i:s");

$simpan = "INSERT INTO registrasi (`no_pendaftaran`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_hp`, `email`, `tgl_daftar`, `jurusan`, `jenis_kelamin`)
           VALUES (NULL, '$nama', '$tempat_lahir', '$tgl_lahir', '$alamat', '$no_hp', '$email', '$tgl_dftr', '$jurusan', '$jk')";


if (mysqli_query($kon, $simpan)) {
    echo "<script languange= 'javascript'>
    alert('data berhasil di simpan')
    document.location = '../Registrasi.php'
    </script>";
}else {
   echo "<script languange= 'javascript'>
   alert('Gagal Di simpan')
   document.location = '../Registrasi.php'
   </script>".mysqli_error($kon);
}

?>