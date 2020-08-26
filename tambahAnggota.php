<?php
include('include/headerAdmin.php');
?>

<div class="container">
    <h3 style="text-align: center;">Anggota</h3>
    <div class="col-sm-8">
        <form action="proses/anggotaTambah.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-8">
                    <label>NAMA</label>
                </div>
                <div class="col-sm-8">
                    <input name="username" type="text" class="form-control" cols="30" rows="10"></input>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-8">
                    <label>PASSWORD</label>
                </div>
                <div class="col-sm-8">
                    <input name="password" type="text" class="form-control" cols="30" rows="10"></input>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-8">
                    <label>Status</label>
                    <select type="text" name="level" class="form-control" id="select" placeholder="Pilih">
                        <!-- <input type="text" name="jurusan" class="form-control"> -->
                        <option>Pilih</option>
                        <option value="Admin">Admin</option>
                        <option value="Pegawai">Pegawai</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
include('include/footerAdmin.php');
?>