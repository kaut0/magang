<?php
include('include/headerAdmin.php');
?>
<div class="main_content">
    <div class="header">Welcome</div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">Registrasi</p>
                        <a href="AdminRegistrasi.php" class="btn btn-primary">Registrasi</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">Pembayaran</p>
                        <a href="AdminPembayaran.php" class="btn btn-primary">Pembayaran</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
  include('include/footerAdmin.php');
 ?>