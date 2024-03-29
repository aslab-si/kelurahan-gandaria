<?php
session_start();

require './../config/authFunction.php';
protectPage('admin');

$query = "SELECT id,nama_lengkap,email,no_telp,role FROM users WHERE role = 'user'";
$getAllUser = mysqli_query($conn, $query);

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
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <?php require './component/sidebar.php'; ?>
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <?php require './component/header.php'; ?>
            <div class="container-fluid">
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
                                                            <th scope="col">NAMA LENGKAP</th>
                                                            <th scope="col">EMAIL</th>
                                                            <th scope="col">NO. TELP</th>
                                                            <th scope="col">ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if (mysqli_num_rows($getAllUser) > 0): ?>
                                                            <?php
                                                            $no = 1;
                                                            foreach ($getAllUser as $user):

                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <?= $no++ ?>
                                                                    </td>
                                                                    <th scope="row" style="color: #666666;">
                                                                        <?= $user['nama_lengkap'] ?>
                                                                    </th>
                                                                    <td>
                                                                        <?= $user['email'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $user['no_telp'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <a href="./process/deleteUser.php?id=<?= $user['id'] ?>"
                                                                            onclick="return confirm('Yakin Hapus User ini?')"
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
    <script>
        function confirmDelete() {
            // Tampilkan konfirmasi dan ambil jawaban dari pengguna
            var result = confirm("Apakah Anda yakin ingin menghapus data?");

            // Jika jawaban adalah true (OK), kirimkan permintaan hapus ke server
            if (result) {
                return true;
            } else {
                // Jika jawaban adalah false (Cancel), batalkan pengiriman permintaan hapus
                alert("Penghapusan dibatalkan.");
                return false;
            }
        }
    </script>
</body>

</html>