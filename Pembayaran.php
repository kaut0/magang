<?php 
    include ('include/header.php');
?>
<link href="assets/css/register.css" type="text/css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
<script type="text/javascript" src="https://repo.rachmat.id/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
$(function() {
    $("#datepicker").datepicker();
});
</script>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="wrapper">
            <div class="container">
                <div class="form_regis">
                    <div class="title">
                        PEMBAYARAN
                    </div>
                    <form action="proses/tambahPembayaran.php" method="POST" enctype="multipart/form-data">
                        <div class="bungkus">
                            <div class="inp_bungkus">
                                <div class="inputBungkus">
                                    <label for="fname">Masukkan Kembali Nama Yang Di Daftarkan</label>
                                    <input type="text" id="fname" name="nama">
                                </div>
                            </div>
                            <div class="inputBungkus">
                                <label for="fname">Bukti Pembayaran</label>
                                <input type="file" id="fname" name="bukti">
                            </div>
                            <div class="inputBungkus">
                                <input type="submit" value="Lakukan Pembayaran" class="submit_btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<br>
<?php 
    include ('include/footer.php');
?>