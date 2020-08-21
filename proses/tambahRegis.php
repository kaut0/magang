<?php
include ("koneksi.php");


// <?php

//     include ("proses/koneksi.php");

//     $query = mysqli_query($kon, "SELECT max(no_pendaftaran) as kodeTerbesar FROM registrasi");
//     $data = mysqli_fetch_array($query);
//     $kodeDaftar = $data['kodeTerbesar'];
    
//     $urutan = (int) substr($kodeDaftar, 3, 3);
    
//     $urutan++;
    
//     $huruf = "DFTR";
//     $kodeDaftar = $huruf . sprintf("%03s", $urutan);
    
// 

//$daftar = $_POST['daftar'];
$nama = mysqli_real_escape_string($kon, $_POST['nama']);
$alamat = mysqli_real_escape_string($kon, $_POST['alamat']);
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$tempat_lahir = mysqli_real_escape_string($kon, $_POST['tempat_lahir']);
$jk = $_POST['gender'];
$jurusan = $_POST['jurusan'];
$tgl_lahir = $_POST['tgl'];
$tgl_dftr = date("Y-m-d H:i:s");

$simpan = "INSERT INTO registrasi (`no_pendaftaran`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_hp`, `email`, `tgl_daftar`, `jurusan`, `jenis_kelamin`)
           VALUES (null, '$nama', '$tempat_lahir', '$tgl_lahir', '$alamat', '$no_hp', '$email', '$tgl_dftr', '$jurusan', '$jk')";


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