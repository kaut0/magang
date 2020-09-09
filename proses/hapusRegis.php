<?php

include ("koneksi.php");

$id = $_GET['no_pendaftaran'];
$kon->query("DELETE FROM registrasi where no_pendaftaran=".$id);

?>
<script>
    document.location = '../AdminRegistrasi.php'
</script>