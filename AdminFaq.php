<?php
include ('include/headerAdmin.php');

?>

<div class="container">
    <h4 style="text-align: center">DAFTAR FAQ</h4>
    <div class="table-responsive">
        <a href="tambahFaqAdmin.php" style="float: right" class="btn btn-success mb-2">Tambah</a>
        <!-- <button type="button" class="btn btn-success"> -->
        <!-- Tambah Mahasiswa -->
        </button>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Pertanyaan</th>
                    <th>Jawaban</th>
                    <th>Perintah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include ("proses/koneksi.php");
                    $fa = "SELECT * FROM faq";
                    $faq = mysqli_query($kon, $fa);
                    $no = 1;
                    foreach ($faq as $f){
                        ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $f['tanya'];?></td>
                    <td><?php echo $f['jawab'];?></td>
                    <td>
                        <a href="proses/faqHapus.php?id=<?php echo $f['id'];?>" type="button" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin Hapus?')">Hapus</a>
                        <a href="ubahFaqAdmin.php?id=<?php echo $f['id'];?>" type="button" class="btn btn-warning btn-sm">Ubah</a>
                    <td/>
                </tr>
                <?php
                        $no+=1;
                    }
                    ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include('include/footerAdmin.php');
?>