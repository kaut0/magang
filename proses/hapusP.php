<?php

include ("koneksi.php");

$id = $_GET['id'];
$kon->query("DELETE FROM pengumuman where id=".$id);

?>
<script>
    document.location = '../AP.php'
</script>