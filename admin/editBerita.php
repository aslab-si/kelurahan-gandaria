<?php
session_start();

require './../config/authFunction.php';
protectPage('admin');
if (isset($_GET['id'])) {
    $idBerita = $_GET['id'];
    $query = "SELECT * FROM berita WHERE id = '$idBerita'";
    $result = mysqli_query($conn, $query);
    $berita = mysqli_fetch_assoc($result);
} else {
    echo "<script>window.history.back()</script>";
}


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
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <?php require './component/header.php'; ?>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4 text-center">Edit Berita</h5>
                        <form action="process/functionBerita.php" method="post" class="px-2"
                            enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $berita['id'] ?>">
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul Berita</label>
                                <input type="text" class="form-control" id="judul" aria-describedby="emailHelp"
                                    name="judul" value="<?= $berita['judul'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label d-block">Gambar Berita</label>
                                <img src="./../image/berita/<?= $berita['gambar'] ?>" alt=""
                                    style="width: 200px; height: 100px;" class="img-cover img-center rounded mb-1">
                                <input class="form-control" type="file" id="gambar" name="gambar" accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Isi Berita</label>
                                <div class="form-floating ">

                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea" name="isi"><?= $berita['isi'] ?></textarea>
                                    <label for="floatingTextarea">Isi Berita</label>
                                </div>
                            </div>
                            <div class="mb-3 text-end">
                                <button type="submit" name="editBerita" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sidebarmenu.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>