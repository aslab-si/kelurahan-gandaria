<?php
session_start();
require './config/connection.php';
$query = "SELECT * FROM berita";
$getAllBerita = mysqli_query($conn, $query);

$queryLayanan = "SELECT * FROM layanan";
$getAllLayanan = mysqli_query($conn, $queryLayanan);

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
    <style>
        .line-clamp-judul {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            /* Jumlah baris yang ingin ditampilkan */
            -webkit-line-clamp: 1;
            /* Ganti dengan jumlah baris yang diinginkan */
        }

        .line-clamp-isi {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            /* Jumlah baris yang ingin ditampilkan */
            -webkit-line-clamp: 3;
            /* Ganti dengan jumlah baris yang diinginkan */
        }
    </style>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">kelgandaria@gmail.com</a>
                <i class="bi bi-phone-fill phone-icon"></i> +62 8888 8888
            </div>
            <div class="social-links d-none d-md-block">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center gap-2">

            <a href="index.html"><img src="assets/img/jakarta-logo.png" alt="" width="50" height="50"></a>
            <h1 class="logo me-auto"><a href="index.html">Kelurahan Gandaria</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#berita">Berita</a></li>
                    <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> -->
                    <li><a class="getstarted scrollto" href="#contact">Hubungi Kami</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Kelurahan Gandaria</h2>
                            <p class="animate__animated animate__fadeInUp">Akses informasi pelayanan kelurahan dengan cepat dan efisien.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Kelurahan Gandaria</h2>
                            <p class="animate__animated animate__fadeInUp">Navigasi yang mudah, informasi yang lengkap.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Kelurahan Gandaria</h2>
                            <p class="animate__animated animate__fadeInUp">Sederhana, informatif, dan selalu terupdate.</p>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <section id="berita" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Berita</h2>
                    <p>Update berita terbaru dari sekitar kelurahan Gandaria Utara</p>
                </div>

                <div class="row">
                    <?php foreach ($getAllBerita as $berita) : ?>
                        <div class="col-lg-3 mb-4">
                            <div class="card" style="width: 100%;">
                                <img src="./image/berita/<?= $berita['gambar'] ?>" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold line-clamp-judul"><?= $berita['judul'] ?> </h5>
                                    <p class="card-text line-clamp-isi"><?= $berita['isi'] ?></p>
                                    <a href="berita.php" class="btn btn-primary w-100" style="background-color: #005e95;">Lihat</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
        </section>

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Layanan</h2>
                    <p>Layanan yang kami berikan di Kelurahan Gandaria.</p>
                </div>

                <div class="row">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <?php foreach ($getAllLayanan as $key => $layanan) : ?>
                            <div class="accordion-item border">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $key ?>" aria-expanded="false" aria-controls="flush-collapse<?= $key ?>">
                                        <?= $layanan['judul'] ?>
                                    </button>
                                </h2>
                                <div id="flush-collapse<?= $key ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"><code>*persyaratan</code></div>
                                    <div class="accordion-body"><?= $layanan['isi'] ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <div class="cta">
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container">
                    <div class="section-title">
                        <h2 class="text-light">Hubungi Kami</h2>
                        <p>Berikan pengaduan seputar kelurahan gandaria utara.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 d-flex align-items-stretch">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>Jl. Taman Radio Dalam VII No.5, RT.5/RW.15, Gandaria Utara, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12140</p>
                                </div>
                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>kelgandaria@gmail.com</p>
                                </div>
                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+62 7402382</p>
                                </div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.214889073555!2d106.78066526849585!3d-6.256653569639763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f10bab51c503%3A0x9d54c2c8e4f594ce!2sGandaria%20Utara%2C%20Kec.%20Kby.%20Baru%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1704864880455!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                            <form action="config/functionPengaduan.php" method="post" class="php-email-form">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="nama">Your Name</label>
                                        <input type="text" name="nama" class="form-control" id="nama" required>
                                    </div>
                                    <div class="form-group col-md-6 mt-3 mt-md-0">
                                        <label for="email">Your Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="subjek">Subject</label>
                                    <input type="text" class="form-control" name="subjek" id="subjek" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="isi">Message</label>
                                    <textarea class="form-control" id="isi" name="isi" rows="10" required></textarea>
                                </div>
                                <button type="submit" name="tambahPengaduan">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section><!-- End Contact Section -->
        </div>



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="d-flex gap-2 justify-content-center mb-2">

                <a href="index.html"><img src="assets/img/jakarta-logo.png" alt="" width="50" height="50"></a>
                <h3>KELURAHAN GANDARIA</h3>
            </div>
            <p class="mb-4">Jl. Taman Radio Dalam VII No.5, RT.5/RW.15, Gandaria Utara, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12140</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Kelurahan Gandaria</span></strong>. All Rights Reserved
            </div>

        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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