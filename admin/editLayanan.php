<?php
session_start();

require './../config/authFunction.php';
protectPage('admin');
if (isset($_GET['id'])) {
    $idLayanan = $_GET['id'];
    $query = "SELECT * FROM layanan WHERE id = '$idLayanan'";
    $result = mysqli_query($conn, $query);
    $layanan = mysqli_fetch_assoc($result);
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
    <script src="https://cdn.tiny.cloud/1/x5jguv1gaw5p0w2fcnizt47madi41kqeeti0ow7inf6g57r3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            plugins: 'lists link',
            toolbar: 'undo redo | bold italic numlist bullist | link',
            textpattern_patterns: [{
                    start: '*',
                    end: '*',
                    format: 'italic'
                },
                {
                    start: '**',
                    end: '**',
                    format: 'bold'
                },
                {
                    start: '[',
                    end: ']',
                    cmd: 'CreateLink',
                    value: 'https://example.com'
                }
            ],
            style_formats: [{
                title: 'Underline',
                inline: 'u',
                styles: {
                    'text-decoration': 'none'
                }
            }]
        });
    </script>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
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
                        <h5 class="card-title fw-semibold mb-4 text-center">Edit Layanan</h5>
                        <form action="process/functionLayanan.php" method="post" class="px-2" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $layanan['id'] ?>">
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul layanan</label>
                                <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" name="judul" value="<?= $layanan['judul'] ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Isi layanan</label>
                                <div class="form-floating ">

                                    <!-- <textarea class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea" name="isi"><?= $layanan['isi'] ?></textarea>
                                    <label for="floatingTextarea">Isi layanan</label> -->
                                    <textarea id="mytextarea" name="isi"><?= $layanan['isi'] ?></textarea>
                                </div>
                            </div>
                            <div class="mb-3 text-end">
                                <button type="submit" name="editLayanan" class="btn btn-primary">Submit</button>
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