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
<div class="form_regis">
    <div class="title">
        Registration Form
    </div>
    <form action="proses/tambahRegis.php" method="POST" enctype="multipart/form-data">
        <div class="bungkus">
            <div class="inp_bungkus">
                <div class="inputBungkus">
                    <label for="fname">Nama</label>
                    <input type="text" id="fname" name="nama">
                </div>
            </div>
            <div class="inputBungkus">
                <label for="fname">Alamat</label>
                <input type="text" id="fname" name="alamat">
            </div>
            <div class="inputBungkus">
                <label for="fname">Nomor Handphone</label>
                <input type="text" id="fname" name="no_hp">
            </div>
            <div class="inputBungkus">
                <label for="fname">Email</label>
                <input type="text" id="fname" name="email">
            </div>
            <div class="inputBungkus">
                <label for="fname">Tempat Lahir</label>
                <input type="text" id="fname" name="tempat_lahir">
            </div>
            <div class="inputBungkus">
                <div class="inp_bungkus">
                    <div class="inputBungkus">
                        <label for="datepicker">Tanggal: </label>
                        <input type="date" id="datepicker" value="dd-mm-yyyy" name="tgl">
                    </div>
                </div>
            </div>
            <div class="inputBungkus">
                <label>Jenis Kelamin</label>
                <ul>
                    <li>
                        <label class="radio_wrap">
                            <input type="radio" name="gender" value="Laki-Laki" class="input_radio" checked>
                            <span>Laki-Laki</span>
                        </label>
                    </li>
                    <li>
                        <label class="radio_wrap">
                            <input type="radio" name="gender" value="Perempuan" class="input_radio">
                            <span>Perempuan</span>
                        </label>
                    </li>
                </ul>
            </div>
            <div class="inputBungkus">
                <label>Jurusan</label>
                <select type="text" name="jurusan" class="form-control" id="select">
                    <!-- <input type="text" name="jurusan" class="form-control"> -->
                    <option>Pilih Jurusan</option>
                    <option value="KOMPUTER">KOMPUTER</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="ACCOUNTING">ACCOUNTING</option>
                    <option value="GROUND STAFF & TOUR TRAVELING">GROUND STAFF & TOUR TRAVELING</option>
                    <option value="TEKNIK PENDINGIN">TEKNIK PENDINGIN</option>
                </select>
            </div>
            <div class="inputBungkus">
                <input type="submit" value="Register Now" class="submit_btn">
            </div>
        </div>
    </form>
</div>
<br>
<?php 
    include ('include/footer.php');
?>