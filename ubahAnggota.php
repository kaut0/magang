<?php
include('include/headerAdmin.php');
?>

<div class="container">
    <h3 style="text-align: center;">UBAH</h3>
    <div class="col-sm-8">
        <?php
        include "proses/koneksi.php";
        $id = $_GET['id_user'];
        $sql = mysqli_query($kon,"select * from user where id_user='$id'");
        //conver sql to array
        while ($s = mysqli_fetch_array($sql)) {
            
        ?>
        <form action="proses/faqUbah.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-8">
                    <label>username</label>
                </div>
                <div class="col-sm-8">
                    <input type="hidden" name="id" value="<?php echo $s['id']; ?>">
                    <input name="username" type="text" class="form-control" cols="30" rows="10"
                        value="<?php echo $s['username'] ?>"></input>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-8">
                    <label>Password</label>
                </div>
                <div class="col-sm-8">
                    <input name="password" type="text" class="form-control" cols="30" rows="10"
                        value="<?php echo $s['password'] ?>"></input>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <label>Status</label>
                    <select type="text" name="level" class="form-control" id="select" value="<?php echo $s['level'] ?>">
                        <!-- <input type="text" name="jurusan" class="form-control"> -->
                        <option>Pilih Jurusan</option>
                        <option value="Admin">Admin</option>
                        <option value="Petugas">Petugas</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-8">
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