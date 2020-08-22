<?php
include ('include/headerAdmin.php');

?>

<div class="container">
    <h4 style="text-align: center">Pembayaran</h4>
    <form action="AdminPembayaran.php" method="get">
        <label>Cari :</label>
        <input type="text" name="cari">
        <input type="submit" value="Cari">
    </form>
    <?php 
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            echo "<b>Hasil pencariaan : ".$cari."</b>";
        }
    ?>
    <div class="table-responsive">
        <!-- <a href="tambahFaqAdmin.php" style="float: right" class="btn btn-success mb-2">Tambah</a> -->
        <!-- <button type="button" class="btn btn-success"> -->
        <!-- Tambah Mahasiswa -->
        </button>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NAMA</th>
                    <th>BUKTI TRANSFER</th>
                    <th>Status</th>
                    <th>Perintah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include ("proses/koneksi.php");
                    $halaman = 10;
                    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                    $fa = "SELECT * FROM pembayaran";
                    $faq = mysqli_query($kon, $fa);
                    $total = mysqli_num_rows($faq);
                    $pages = ceil($total/$halaman);
                    $no = 1;

                    if(isset($_GET['cari'])){
                        $cari = $_GET['cari'];
                        $faq = mysqli_query($kon, "select * from pembayaran where nama like '%".$cari."%'");				
                    }else{
                        $faq;		
                    }

                    while ($pecah = mysqli_fetch_array($faq)) {
                        $url_gambar = "proses/$pecah[bukti_tf]";
                        ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $pecah['nama'];?></td>
                    <td><img src="<?php echo $url_gambar;?>"></td>
                    <td><?php echo $pecah['status'] ?></td>
                    <td>
                        <a href="AdminDetailPembayaran.php?nama=<?php echo $pecah['nama'];?>" type="button" class="btn btn-warning btn-sm">Detail</a>
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
            <?php }?>
        </div>
    </div>
</div>

<?php
include('include/footerAdmin.php');
?>