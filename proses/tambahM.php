<?php
include ("koneksi.php");


$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$tgl = date("Y-m-d H:i:s");

//gambar

 $ekstensi_diperbolehkan = array('png','jpg');
 $namaFile = $_FILES['gambar']['name'];
 $x = explode('.', $namaFile);
 $ekstensi = strtolower(end($x));
 $ukuran   = $_FILES['gambar']['size'];
 $dirTmp = $_FILES['gambar']['tmp_name'];
 $folder = "gambar/".$namaFile;
$upload = move_uploaded_file($dirTmp, $folder);


// $simpan = "INSERT INTO `AM` (`nama`, `bukti_tf`, `status`, 'jurusan', 'jenis_bayar') VALUES ('$nama', '$folder', '', '$jurusan', '$jb')";
$simpan = "INSERT INTO `marketing` (`id`, `judul`, `deskripsi`, `gambar`, `tgl`) VALUES (NULL, '$judul', '$deskripsi', '$folder', '$tgl')";

if ($upload) {
    if (in_array($ekstensi, $ekstensi_diperbolehkan)=== true) {
        if ($ukuran < 1044070) {
            if (mysqli_query($kon,$simpan)) {
                echo "<script languange= 'javascript'>
                alert('data berhasil di simpan')
                document.location = '../AM.php'
                </script>";
            }else {
                echo "<script languange= 'javascript'>
                alert('Nama Anda Tidak Sesuai dengan yang di daftarkan')
                document.location = '../AM.php'
                </script>".mysqli_error($kon);
            }
        }else {
            echo "<script languange= 'javascript'>
            alert('File Terlalu Besar')
            document.location = '../AM.php'
            </script>".mysqli_error($kon);
        }
    }else{
        echo "<script languange= 'javascript'>
        alert('Ekstensi Tidak Di Perbolehkan')
        document.location = '../AM.php'
        </script>".mysqli_error($kon);
    }
}else {
    echo "<script languange= 'javascript'>
        alert('Nama Anda Tidak Sesuai dengan yang di daftarkan')
        document.location = '../AM.php'
        </script>".mysqli_error($kon);
}

?>