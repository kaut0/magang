<?php
include('include/headerAdmin.php');
?>

<div class="container">
    <h3 style="text-align: center;"> FAQ</h3>
    <div class="col-sm-6">
        <form action="proses/faqTambah.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6">
                    <label>Pertanyaan</label>
                </div>
                <div class="col-sm-6">
                    <textarea name="pertanyaan" type="text" class="form-control" cols="30" rows="10"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <label>Jawaban</label>
                </div>
                <div class="col-sm-6">
                    <textarea name="jawaban" type="text" class="form-control" cols="30" rows="10"></textarea>
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