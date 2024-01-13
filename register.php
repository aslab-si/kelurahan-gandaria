<?php
session_start();
require './config/authFunction.php';
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
    protectPage('user');
} else {
    protectPage('admin');
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="row">
            <div class="col-12">
                <div class="w-100 border rounded-2 p-4">
                    <div class="d-flex gap-2 justify-content-center mb-2 align-items-center">

                        <a href="index.php"><img src="assets/img/jakarta-logo.png" alt="" width="50" height="50"></a>
                        <h3 style="color: #05466c;">KELURAHAN GANDARIA</h3>
                    </div>
                    <form class="pt-2" action="" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No.Telp</label>
                            <input type="number" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="no_telp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Konfirmasi Kata Sandi</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                name="confirm_password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Lihat Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary border-0 w-100" style="background-color: #005e95;"
                            name="Register">Daftar</button>
                    </form>
                    <p class="pt-4 text-center">Sudah Punya Akun? <a href="login.phps" class="text-decoration-none"
                            style="color: #005e95;">Silahkan
                            Masuk</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>