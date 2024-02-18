<?php
session_start();

require './config/authFunction.php';

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'admin') {
        header('location:admin/dashboard.php');
    } else {
        protectPage('admin');
    }
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
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- Sweeet Alert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>


</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="row">
            <div class="col-12">
                <div class="w-100 border rounded-2 p-4">
                    <div class="d-flex gap-2 justify-content-center mb-2 align-items-center">

                        <a href="index.html"><img src="assets/img/jakarta-logo.png" alt="" width="50" height="50"></a>
                        <h3 style="color: #05466c;"><span class="fw-bold">ADMIN</span> KELURAHAN GANDARIA</h3>
                    </div>
                    <form class="pt-2" method="post" action="">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat Email </label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Lihat Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary border-0 w-100" style="background-color: #005e95;"
                            name="Login">Masuk</button>
                    </form>
                    <!-- <p class="pt-4 text-center">Belum Punya Akun? <a href="register.php" class="text-decoration-none" style="color: #005e95;">Daftar Disini</a> -->
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script>
        const togglePassword = document.querySelector('#exampleCheck1');
        const password = document.querySelector('#exampleInputPassword1');

        togglePassword.addEventListener('click', function (e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
        });
    </script>


</body>

</html>