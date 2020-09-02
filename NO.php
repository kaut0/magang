<?php
include ('include/headerAdmin.php');

?>

<div class="container">
    <h4 style="text-align: center">NOMOR</h4>
    <div class="table-responsive">

        <!-- <button type="button" class="btn btn-success"> -->
        <!-- Tambah Mahasiswa -->
        <!-- </button> -->
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NOMOR</th>
                    <th>Perintah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include ("proses/koneksi.php");
                    $halaman = 10;
                    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                    $fa = "SELECT * FROM no_hp";
                    $faq = mysqli_query($kon, $fa);
                    $total = mysqli_num_rows($faq);
                    $pages = ceil($total/$halaman);
                    $no = 1;
                    foreach ($faq as $f){
                        ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $f['nomor'];?></td>
                    <td>
                        <a href="ubahNomor.php?id=<?php echo $f['id'];?>" type="button"
                            class="btn btn-warning btn-sm">Ubah</a>
                        <td />
                </tr>
                <?php
                        $no+=1;
                    }
                    ?>
            </tbody>
        </table>
        <div class="">
            <?php for ($i=1; $i<=$pages ; $i++){ ?>
            <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php } ?>
        </div>
    </div>
</div>

<?php
include('include/footerAdmin.php');
?>