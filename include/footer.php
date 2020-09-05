<link href="./assets/css/style.css" type="text/css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<br />
<footer class="text-muted py-5" style="background-color: cadetblue;" id="foot">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    <small class="block">&copy; 2020 LP3I COURSE CENTER. All Rights Reserved.</small>
                    <small class="block">Designed by <a href="https://web.facebook.com/lcc.praya"
                            target="_blank" style="color:white"><u>LP3I COURSE CENTER</u></a>
                </p>
                <p>
                    <ul>
                        <li><a href="https://web.facebook.com/lcc.praya" style="color:white"><i
                                    class="fa fa-facebook">LP3I COURSE CENTER</i></a></li>
                                    <?php
                        include './proses/koneksi.php';
                        $fa = "SELECT * FROM no_hp";
                        $faq = mysqli_query($kon, $fa);

                       while ($data = mysqli_fetch_array($faq)) {
                           $no = $data['nomor'];                           
                        ?>
                        <li><a href="https://api.whatsapp.com/send?phone=<?php echo $no ?>" style="color:white"><i
                                    class="fa fa-whatsapp">LP3I COURSE CENTER</i></a></li>
                        
                        <li><a href="https://www.youtube.com/channel/UC1fKC1vSEVXVuf3d-fmd5iQ" style="color:white"><i
                                    class="fa fa-youtube">LP3I COURSE CENTER</i></a></li>
                        <li><a href="./tentang.php" style="color:white">ABOUT LP3I</a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=<?php echo $no ?>" style="color:white">CONTACT US</a>
                        </li>
                        <?php
                            }
                        ?>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</footer>
<script>
document.onkeyup = function(e) {
    if (e.ctrlKey && e.which == 77) {
        setTimeout('self.location.href="./Login.php"', 0);
    }
};
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>
</body>

</html>