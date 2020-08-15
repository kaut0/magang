<?php
include('include/headerAdmin.php');
?>
<div class="main_content">
    <div class="header">Pelanggan</div>
    <div class="container">
        <h4 style="text-align: center">DAFTAR PELANGGAN</h4>
        <div class="table-responsive">
            <!-- <a href="tambah_mhs.php" style="float: right" class="btn btn-success">Tambah Mahasiswa</a> -->
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>ID Travel</th>
                        <th>Nama Mahasiswa</th>
                        <th>Nama Agensi</th>
                        <th>Alamat Agensi</th>
                        <th>Nomor Hp</th>
                        <th>KTP</th>
                        <th>Jenis Kelamin</th>
                        <th>Email</th>
                    </tr>
                    
                </thead>
            </table>
        </div>
        <?php
  include('include/footerAdmin.php');
 ?>