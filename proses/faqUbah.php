<?php

include "koneksi.php";

$id = $_POST['id'];
$pertanyaan = $_POST['pertanyaan'];
$jawaban = $_POST['jawaban'];

$ubah = mysqli_query($kon,"UPDATE faq SET tanya = '$pertanyaan', jawab = '$jawaban' WHERE faq.id = $id");

if ($ubah) {
    echo "<script languange= 'javascript'>
    alert('data berhasil di ubah')
    document.location = '../AdminFaq.php'
    </script>";
}else {
   echo "<script languange= 'javascript'>
   alert('Gagal Di ubah')
   document.location = '../AdminFaq.php'
   </script>".mysqli_error($kon);
}
?>