<?php

include ("koneksi.php");

$id = $_GET['id'];
$kon->query("DELETE FROM faq where id=".$id);

?>
<script>
    document.location = '../AdminFaq.php'
</script>