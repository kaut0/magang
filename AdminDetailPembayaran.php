<?php
include('include/headerAdmin.php');
?>

<div class="container">
    <h3 style="text-align: center;">Detail Pembayaran</h3>
    <div class="col-sm-6">
        <?php
        include "proses/koneksi.php";
        $nama = $_GET['nama'];
        $sql = mysqli_query($kon,"select * from pembayaran where nama='$nama'");
        while ($s = mysqli_fetch_array($sql)) {

        ?>
        <form action="proses/detailBukti.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-8">
                    <label>Nama</label>
                </div>
                <div class="col-sm-6">
                    <input name="nama" type="text" class="form-control" cols="30" rows="10"
                        value="<?php echo $s['nama'] ?>"></input>
                </div>
                <div class="col-sm-8">
                    <label>Status</label>
                    <select type="text" name="status" class="form-control" id="select">
                        <!-- <input type="text" name="jurusan" class="form-control"> -->
                        <option>Pilih Jurusan</option>
                        <option value="Sudah Bayar">Sudah Bayar</option>
                        <option value="Belum Bayar">Belum Bayar</option>
                    </select>
                </div>

            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                </div>
            </div>
        </form>
        <?php 
        }
        ?>
    </div>

</div>

<?php
include('include/footerAdmin.php');
?>