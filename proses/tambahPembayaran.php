<?php
include ("koneksi.php");


$nama = $_POST['nama'];
//$bukti = mysqli_real_escape_string($kon,$_POST['bukti']);
$jurusan = $_POST['jurusan'];
$jb = $_POST['jenis_bayar'];

//gambar

 $ekstensi_diperbolehkan = array('png','jpg');
 $namaFile = $_FILES['bukti']['name'];
 $x = explode('.', $namaFile);
 $ekstensi = strtolower(end($x));
 $ukuran   = $_FILES['bukti']['size'];
 $dirTmp = $_FILES['bukti']['tmp_name'];
 $folder = "bukti/".$namaFile;
$upload = move_uploaded_file($dirTmp, $folder);


// $simpan = "INSERT INTO `pembayaran` (`nama`, `bukti_tf`, `status`, 'jurusan', 'jenis_bayar') VALUES ('$nama', '$folder', '', '$jurusan', '$jb')";
$simpan = "INSERT INTO `pembayaran` (`nama`, `bukti_tf`, `status`, `jurusan`, `jenis_bayar`) VALUES ('$nama', '$folder', '', '$jurusan', '$jb')";

if ($upload) {
    if (in_array($ekstensi, $ekstensi_diperbolehkan)=== true) {
        if ($ukuran < 1044070) {
            if (mysqli_query($kon,$simpan)) {
                echo "<script languange= 'javascript'>
                alert('data berhasil di simpan')
                document.location = '../Pembayaran.php'
                </script>";
            }else {
                echo "<script languange= 'javascript'>
                alert('Nama Anda Tidak Sesuai dengan yang di daftarkan')
                document.location = '../Pembayaran.php'
                </script>".mysqli_error($kon);
            }
        }else {
            echo "<script languange= 'javascript'>
            alert('File Terlalu Besar')
            document.location = '../Pembayaran.php'
            </script>".mysqli_error($kon);
        }
    }else{
        echo "<script languange= 'javascript'>
        alert('Ekstensi Tidak Di Perbolehkan')
        document.location = '../Pembayaran.php'
        </script>".mysqli_error($kon);
    }
}else {
    echo "<script languange= 'javascript'>
        alert('Nama Anda Tidak Sesuai dengan yang di daftarkan')
        document.location = '../Pembayaran.php'
        </script>".mysqli_error($kon);
}

?>