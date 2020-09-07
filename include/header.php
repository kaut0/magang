<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LP3I</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="./assets/css/style.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- membuat hotkey -->


    <!-- end of hot key -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: cadetblue;">
            <a class="navbar-brand" href="./index.php">
                <div class="logo">
                    <img src="./assets/gambar/logo.png" alt="" srcset="" />
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active" style="font-size:15px">
                        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active" style="font-size:15px">
                        <a class="nav-link" href="pengumuman.php">Pengumuman <span class="sr-only"></span></a>
                    </li>
                    <?php
                        include './proses/koneksi.php';
                        $fa = "SELECT * FROM no_hp";
                        $faq = mysqli_query($kon, $fa);

                       while ($data = mysqli_fetch_array($faq)) {
                           $no = $data['nomor'];                           
                        ?>
                     <li class="nav-item dropdown active" style="font-size:15px">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pendaftaran
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="font-size:15px">
                            <a class="dropdown-item" href="Registrasi.php">Pendaftaran</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item fa fa-whatsapp"
                                href="https://api.whatsapp.com/send?phone=<?php echo $no ?>
                                &text=Pendaftaran%20Melalui%20WhatsApp.%0ANAMA%20:%20%0AALAMAt%20:%20%0ANO.HANDPHONE%20:%20%0AE-Mail%20:%20%0ATEMPAT%20LAHIR%20:%20%0ATANGGAL%20LAHIR%20:%20%0AJenis%20KELAMIN%20:%20%0AJURUSAN%20:%20%0A">Melalui
                                Whatsapp</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown active" style="font-size:15px">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pembayaran
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="font-size:15px">
                            <a class="dropdown-item" href="Pembayaran.php">Pembayaran</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item fa fa-whatsapp"
                                href="https://api.whatsapp.com/send?phone=<?php echo $no ?>
                                &text=Pendaftaran%20Melalui%20WhatsApp.%0ANAMA%20:%20%0AALAMAt%20:%20%0ANO.HANDPHONE%20:%20%0AE-Mail%20:%20%0ATEMPAT%20LAHIR%20:%20%0ATANGGAL%20LAHIR%20:%20%0AJenis%20KELAMIN%20:%20%0AJURUSAN%20:%20%0A">Melalui
                                Whatsapp</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Bantuan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="faq.php">FAQ</a>
                            <a class="dropdown-item"
                                href="https://api.whatsapp.com/send?phone=<?php echo $no ?>">Contact
                                Us</a>
                        </div>
                        <?php } ?>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="tentang.php">Tentang Kami<span class="sr-only"></span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>