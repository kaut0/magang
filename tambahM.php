<?php
include('include/headerAdmin.php');
?>

<div class="container">
    <h3 style="text-align: center;">Pengumuman</h3>
    <div class="col-sm-6">
        <form action="proses/tambahM.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6">
                    <label>Judul</label>
                </div>
                <div class="col-sm-6">
                    <textarea name="judul" type="text" class="form-control" cols="30" rows="10"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <label>Deskripsi</label>
                </div>
                <div class="col-sm-6">
                    <textarea name="deskripsi" type="text" class="form-control" cols="30" rows="10"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <label>Gambar</label>
                </div>
                <div class="col-sm-6">
                    <input name="gambar" type="file" class="form-control" cols="30" rows="10"></input>
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