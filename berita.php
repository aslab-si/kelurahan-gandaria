<?php
session_start();
require './config/connection.php';
$query = "SELECT * FROM berita";

$idBerita = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM berita WHERE id = '$idBerita' ");
$berita = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kelurahan Gandaria</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/jakarta-logo.png" rel="icon">
    <link href="assets/img/jakarta-logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">kelgandaria@gmail.com</a>
                <i class="bi bi-phone-fill phone-icon"></i> +62 8888 8888
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center gap-2">

            <a href="http://localhost/kelurahan-gandaria"><img src="assets/img/jakarta-logo.png" alt="" width="50" height="50"></a>
            <h1 class="logo me-auto"><a href="http://localhost/kelurahan-gandaria">Kelurahan Gandaria</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="">Home</a></li>
                    <li><a class="nav-link scrollto" href="">Berita</a></li>
                    <li><a class="nav-link scrollto" href="">Layanan</a></li>
                    <li><a class="getstarted scrollto" href="">Hubungi Kami</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- MAIN CONTENT -->

    <div class="container my-3">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-4"><?= $berita['judul'] ?></h2>
                <p><?= $berita['author'] ?> <span><?= date('D, j F Y', strtotime($berita['created_at'])); ?></span></p>
                <div style="overflow: hidden; max-height: 300px;">
                    <img src="./image/berita/<?= $berita['gambar'] ?>" alt="" style="object-fit: cover; ">
                </div>
                <p style="text-align: justify;" class="py-4"><?= $berita['isi'] ?></p>
            </div>
        </div>
    </div>


    <!-- END MAIN CONTENT -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="d-flex gap-2 justify-content-center mb-2">

                <a href="http://localhost/kelurahan-gandaria"><img src="assets/img/jakarta-logo.png" alt="" width="50" height="50"></a>
                <h3>KELURAHAN GANDARIA</h3>
            </div>
            <p class="mb-4">Jl. Taman Radio Dalam VII No.5, RT.5/RW.15, Gandaria Utara, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12140</p>
            <div class="copyright">
                &copy; Copyright <strong><span>Kelurahan Gandaria</span></strong>. All Rights Reserved
            </div>

        </div>
    </footer><!-- End Footer -->


    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>

</body>

</html>