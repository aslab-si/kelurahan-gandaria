<?php
session_start();
require './../config/authFunction.php';
protectPage('admin');

$query = "SELECT * FROM pengaduan";
$getAllPengaduan = mysqli_query($conn, $query);

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
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <?php require './component/header.php'; ?>
            <div class="container-fluid">
                <h5 class="card-title fw-semibold mb-4">Welcome
                    <?= $_SESSION['nama'] ?>
                </h5>
                <div class="card">
                    <section class="intro">
                        <div class="gradient-custom-1 h-100">
                            <div class="mask d-flex align-items-center h-100">
                                <div class="container-fluid">
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <h5 class="card-title fw-semibold mb-4">Pengaduan Seputar Kelurahan</h5>
                                            <div class="table-responsive bg-white">
                                                <table class="table mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">NO</th>
                                                            <th scope="col">NAMA PELAPOR</th>
                                                            <th scope="col">EMAIL</th>
                                                            <th scope="col">PERIHAL</th>
                                                            <th scope="col">DESKRIPSI</th>
                                                            <th scope="col">ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if (mysqli_num_rows($getAllPengaduan) > 0): ?>
                                                            <?php
                                                            $no = 1;
                                                            foreach ($getAllPengaduan as $pengaduan):

                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <?= $no++ ?>
                                                                    </td>
                                                                    <th scope="row" style="color: #666666;">
                                                                        <?= $pengaduan['nama'] ?>
                                                                    </th>
                                                                    <td>
                                                                        <?= $pengaduan['email'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $pengaduan['subjek'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $pengaduan['isi'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <a href="#"
                                                                            data-path="./process/deletePengaduan.php?id=<?= $pengaduan['id'] ?>"
                                                                            data-icon="warning"
                                                                            data-text="Apakah yakin menghapus data pengaduan ini ?"
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

</body>

</html>