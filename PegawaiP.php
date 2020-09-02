<?php
include ('include/headerPegawai.php');
?>

<div class="container">
    <h4 style="text-align: center">Pengumuman</h4>
    <div class="table-responsive">
        <a href="tambahP.php" style="float: right" class="btn btn-success mb-2">Tambah</a>
        <!-- <button type="button" class="btn btn-success"> -->
        <!-- Tambah Mahasiswa -->
        </button>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include ("proses/koneksi.php");
                    $halaman = 10;
                    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                    $fa = "SELECT * FROM pengumuman";
                    $faq = mysqli_query($kon, $fa);
                    $total = mysqli_num_rows($faq);
                    $pages = ceil($total/$halaman);
                    $no = 1;
                    foreach ($faq as $f){
                        ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $f['judul'];?></td>
                    <td><?php echo $f['deskripsi'];?></td>
                    <td><?php echo $f['tgl'];?></td>
                    <td>
                        <a href="proses/hapusP.php?id=<?php echo $f['id'];?>" type="button"
                            class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus?')">Hapus</a>
                        <a href="ubahP.php?id=<?php echo $f['id'];?>" type="button"
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