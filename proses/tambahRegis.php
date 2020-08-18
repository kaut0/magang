<?php
include ("koneksi.php");


$simpan = "INSERT INTO registrasi (`no_pendaftaran`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_hp`, `email`, `tgl_daftar`)
           VALUES (NULL, 'dadwada', 'wda', '2020-08-03', 'dwa', 'dwadwa', 'dwa', '2020-08-05')";


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


