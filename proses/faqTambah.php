<?php

include ("koneksi.php");


$pertanyaan = $_POST['pertanyaan'];
$jawaban = $_POST['jawaban'];

$simpan = "INSERT INTO faq (id, tanya, jawab) VALUES (null, '$pertanyaan', '$jawaban')";


if (mysqli_query($kon, $simpan)) {
    echo "<script languange= 'javascript'>
    alert('data berhasil di simpan')
    document.location = '../AdminFaq.php'
    </script>";
}else {
   echo "<script languange= 'javascript'>
   alert('Gagal Di simpan')
   document.location = '../AdminFaq.php'
   </script>".mysqli_error($kon);
}

?>