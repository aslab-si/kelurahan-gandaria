<?php
session_start();
require './../config/authFunction.php';
protectPage('admin');

$query = "SELECT * FROM berita";
$getAllBerita = mysqli_query($conn, $query);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kelurahan Gandaria</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/jakarta-logo.png" rel="icon">
    <link href="../assets/img/jakarta-logo.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="assets/css/styles.min.css" />

    <!-- Sweet Alert -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <?php require './component/sidebar.php'; ?>
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <?php require './component/header.php'; ?>
            <div class="container-fluid">
                <a href="tambahBerita.php" class="btn btn-primary mb-1">+ Tambah</a>
                <div class="card">
                    <section class="intro">
                        <div class="gradient-custom-1 h-100">
                            <div class="mask d-flex align-items-center h-100">
                                <div class="container-fluid">
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="table-responsive bg-white">
                                                <table class="table mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">NO</th>
                                                            <th scope="col">Gambar</th>
                                                            <th scope="col">Judul</th>
                                                            <th scope="col">Isi</th>
                                                            <th scope="col">ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if (mysqli_num_rows($getAllBerita) > 0): ?>
                                                            <?php
                                                            $no = 1;
                                                            foreach ($getAllBerita as $berita):

                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <?= $no++ ?>
                                                                    </td>
                                                                    <th scope="row" style="color: #666666;">
                                                                        <img src="./../image/berita/<?= $berita['gambar'] ?>"
                                                                            alt="" style="width: 200px; height: 100px;">

                                                                    </th>
                                                                    <td>
                                                                        <?= substr($berita['judul'], 0, 20) ?>...
                                                                    </td>
                                                                    <td>
                                                                        <?= substr($berita['isi'], 0, 50) ?>...
                                                                    </td>


                                                                    <td>
                                                                        <a href="./editBerita.php?id=<?= $berita['id'] ?>"
                                                                            class="btn btn-success"><i
                                                                                class="ti ti-pencil"></i>Edit</a>
                                                                        <a href="#" data-path="./process/deleteBerita.php?id=
                                                                    <?= $berita['id'] ?>" data-icon="warning"
                                                                            data-text="Apakah yakin menghapus berita ini?"
                                                                            onclick="confirmDelete(this)"
                                                                            class="btn btn-danger"><i class="ti ti-trash"></i>
                                                                            Hapus</a>
                                                                    </td>

                                                                </tr>
                                                            <?php endforeach; ?>
                                                        <?php else: ?>
                                                            <tr>
                                                                <td colspan="5" class="text-center">Tidak ada data</td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <script src="assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/sidebarmenu.js"></script>
        <script src="assets/js/app.min.js"></script>
        <script src="assets/libs/simplebar/dist/simplebar.js"></script>
        <script src="../js/sweetAlert.js"></script>

        <!-- Sweeet Alert JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>

        <?php
        if (isset($_SESSION['success'])) {


            $text = $_SESSION['text'];

            if ($_SESSION['success'] == true) {
                echo "<script>";
                echo "Success('$text');";
                echo "</script>";
            } else {
                echo "<script>";
                echo "Failed('$text');";
                echo "</script>";
            }

            // Hapus data sesi "success" agar SweetAlert tidak ditampilkan lagi pada kunjungan berikutnya
            unset($_SESSION['success']);
            unset($_SESSION['text']);
        }
        ?>

</html>