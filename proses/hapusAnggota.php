<?php

include ("koneksi.php");

$id = $_GET['id_user'];
$kon->query("DELETE FROM user where id_user=".$id);

?>
<script>
    document.location = '../AdminAnggota.php'
</script>