<?php

include ("koneksi.php");

$id = $_GET['nama'];
$kon->query("DELETE FROM `pembayaran` WHERE `pembayaran`.`nama` =".$id);

?>
<script>
    document.location = '../AdminPembayaran.php'
</script>