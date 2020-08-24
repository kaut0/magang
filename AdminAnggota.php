<?php
include ('include/headerAdmin.php');
?>

<div class="container">
    <h4 style="text-align: center">DAFTAR ANGGOTA</h4>
    <div class="table-responsive">
        <a href="tambahAnggota.php" style="float: right" class="btn btn-success mb-2">Tambah</a>
        <!-- <button type="button" class="btn btn-success"> -->
        <!-- Tambah Mahasiswa -->
        </button>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NAMA</th>
                    <th>PASSWORD</th>
                    <th>JABATAN</th>
                    <th>PROSES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include ("proses/koneksi.php");
                    $halaman = 10;
                    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                    $fa = "SELECT * FROM user";
                    $faq = mysqli_query($kon, $fa);
                    $total = mysqli_num_rows($faq);
                    $pages = ceil($total/$halaman);
                    $no = 1;
                    foreach ($faq as $f){
                        ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $f['username'];?></td>
                    <td><?php echo $f['password'];?></td>
                    <td><?php echo $f['level'];?></td>
                    <td>
                        <a href="proses/hapusAnggota.php?id_user=<?php echo $f['id_user'];?>" type="button"
                            class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus?')">Hapus</a>
                        <a href="ubahAnggota.php?id_user=<?php echo $f['id_user'];?>" type="button"
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