<?php
session_start();
require './../config/authFunction.php';
protectPage('admin');

$query = "SELECT * FROM layanan";
$getAllLayanan = mysqli_query($conn, $query);

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
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <?php require './component/sidebar.php'; ?>
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <?php require './component/header.php'; ?>
            <div class="container-fluid">
                <a href="tambahLayanan.php" class="btn btn-primary mb-1">+ Tambah</a>
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
                                                            <th scope="col">Judul</th>
                                                            <th scope="col">Isi</th>
                                                            <th scope="col">ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if (mysqli_num_rows($getAllLayanan) > 0) : ?>
                                                            <?php
                                                            $no = 1;
                                                            foreach ($getAllLayanan as $layanan) :

                                                            ?>
                                                                <tr>
                                                                    <td>
                                                                        <?= $no++ ?>
                                                                    </td>

                                                                    <td>
                                                                        <?= substr($layanan['judul'], 0, 20) ?>...
                                                                    </td>
                                                                    <td><?= $layanan['isi'] ?></td>

                                                                    <td>
                                                                        <a href="./editLayanan.php?id=<?= $layanan['id'] ?>" class="btn btn-success"><i class="ti ti-pencil"></i>Edit</a>
                                                                        <a href="./process/deleteLayanan.php?id=<?= $layanan['id'] ?>" onclick="return confirm('Yakin Hapus Data ini?')" class="btn btn-danger"><i class="ti ti-trash"></i>
                                                                            Hapus</a>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        <?php else : ?>
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
        <script>

        </script>
</body>

</html>