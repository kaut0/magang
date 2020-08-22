<?php
include('include/headerAdmin.php');
?>

<div class="container">
    <h3 style="text-align: center;"> FAQ</h3>
    <div class="col-sm-6">
        <?php
        include "proses/koneksi.php";
        $nama = $_GET['nama'];
        $sql = mysqli_query($kon,"select * from pembayaran where nama='$nama'");
        //conver sql to array
        while ($s = mysqli_fetch_array($sql)) {
            # code...
        ?>
        <form action="proses/detailBukti.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6">
                    <label></label>
                </div>
                <div class="col-sm-6">
                    <input type="hidden" name="nama" value="<?php echo $s['nama']; ?>">
                    <input name="pertanyaan" type="text" class="form-control" cols="30" rows="10"
                        value="<?php echo $s['nama'] ?>"></input>
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