<?php
include ('include/headerAdmin.php');

?>

<div class="container">
    <h4 style="text-align: center">Registrasi</h4>
    <div class="table-responsive">
        <!-- <button type="button" class="btn btn-success"> -->
        <!-- Tambah Mahasiswa -->
        </button>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Jurusan</th>
                    <th>Tanggal Daftar</th>
                    <th>No Handphone</th>
                    <th>E-Mail</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include ("proses/koneksi.php");
                    $halaman = 10;
                    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                    $fa = "SELECT * FROM registrasi";
                    $faq = mysqli_query($kon, $fa);
                    $total = mysqli_num_rows($faq);
                    $pages = ceil($total/$halaman);
                    $no = 1;
                    foreach ($faq as $f){
                        ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $f['nama'];?></td>
                    <td><?php echo $f['alamat'];?></td>
                    <td><?php echo $f['tempat_lahir'];?></td>
                    <td><?php echo $f['tgl_lahir'];?></td>
                    <td><?php echo $f['jenis_kelamin'];?></td>
                    <td><?php echo $f['jurusan'];?></td>
                    <td><?php echo $f['tgl_daftar'];?></td>
                    <td><?php echo $f['no_hp'];?></td>
                    <td><?php echo $f['email'];?></td>
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