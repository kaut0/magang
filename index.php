<?php
    include ('include/header.php');
?>
<link href="assets/css/slide.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<main role="main">
    <section class="jumbotron text-left text-white gambar">
        <div class="container">
            <h1><b>Makan</b></h1>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste ratione magnam
                quisquam! Soluta eos reprehenderit facere iusto modi assumenda perferendis, sequi eveniet.
                Asperiores at quia, iure facere soluta fugiat tempore?</p>
            <p>
                <a href="Registrasi.php" class="btn btn-secondary my-2">Secondary action</a>
            </p>
        </div>
    </section>

    <div class="container mb">
        <div class="row">
            <div class="col-md-4" style="border:2px">
                <div class="card mb-4 shadow-sm" style="radius:20px">
                    <img src="assets/gambar/komputer.jpg" width="100%" height="225">
                    <div class="card-body">
                        <p class="card-text" style="color:black">
                            This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="assets/gambar/accounting.jpg" width="100%" height="225">
                    <div class="card-body">
                        <p class="card-text" style="color:black">
                            This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="assets/gambar/english.jpg" width="100%" height="225">
                    <div class="card-body">
                        <p class="card-text" style="color:black">
                            This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slideshow-container">
            <center><b>
                    <P style="color:black">Kegiatan Yang Ada</P>
                </b></center>
            <div class="mySlides w3-animate-right">
                <div class="numbertext">1 / 3</div>
                <img src="assets/gambar/slide1.jpg" style="width:100%">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides w3-animate-right">
                <div class="numbertext">2 / 3</div>
                <img src="assets/gambar/slide2.jpg" style="width:100%">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides w3-animate-right">
                <div class="numbertext">3 / 3</div>
                <img src="assets/gambar/slide3.jpg" style="width:100%">
                <div class="text">Caption Three</div>
            </div>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>
    </div>

</main>

</html>

<script src="assets/js/slide.js"></script>
<?php
include ('include/footer.php');
?>