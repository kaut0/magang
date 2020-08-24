<?php
include('include/headerAdmin.php');
?>

<div class="container">
    <h3 style="text-align: center;"> FAQ</h3>
    <div class="col-sm-6">
        <?php
        include "proses/koneksi.php";
        $id = $_GET['id'];
        $sql = mysqli_query($kon,"select * from faq where id='$id'");
        //conver sql to array
        while ($s = mysqli_fetch_array($sql)) {
            # code...
        ?>
        <form action="proses/faqUbah.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-8">
                    <label>Pertanyaan</label>
                </div>
                <div class="col-sm-8">
                    <input type="hidden" name="id" value="<?php echo $s['id']; ?>">
                    <input name="pertanyaan" type="text" class="form-control" cols="30" rows="10"
                        value="<?php echo $s['tanya'] ?>"></input>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-8">
                    <label>Jawaban</label>
                </div>
                <div class="col-sm-8">
                    <input name="jawaban" type="text" class="form-control" cols="30" rows="10"
                        value="<?php echo $s['jawab'] ?>"></input>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Ubah</button>
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