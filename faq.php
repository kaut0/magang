<?php 
    include ('include/header.php');
    include ("proses/koneksi.php");
    error_reporting(0); 
?>
<link href="assets/css/register.css" type="text/css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
<script type="text/javascript" src="https://repo.rachmat.id/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
$(function() {
    $("#datepicker").datepicker();
});
</script>
<br>
<div class="form_regis">
    <div class="title">
        FAQ (Fast Answer Question)
    </div>
    <form>
        <div class="bungkus">
            <?php
                                try {
                                    $id = $_GET['id'];
                                    $query = "SELECT * FROM faq WHERE id = $id";
                                    $hasil = mysqli_query($kon, $query);
                                    $data = mysqli_fetch_array($hasil);
                                    echo "<p>Pertanyaan : ".$data['tanya']."</p>";  
                                    echo "<p>Jawaban : ".$data['jawab']."</p>";  
                                    
                                    // menampilkan daftar FAQ 
                                    $query = "SELECT * FROM faq";
                                    $hasil = mysqli_query($kon ,$query);
                                    echo "<ul>";
                                    while ($data = mysqli_fetch_array($hasil))
                                    {
                                    echo "<li><a href='".$_SERVER['PHP_SELF']."?id=".$data['id']."'>".$data['tanya']."</a></li>";
                                    }
                                    echo "</ul>";
                                } catch (\Throwable $th) {
                                    echo 'Caught exception: ',  $th->getMessage(), "\n";
                                }
                                
                                ?>
        </div>
    </form>
</div>
<br>
<?php 
    include ('include/footer.php');
?>