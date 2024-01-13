<?php
require 'connection.php';
define('BASE_URL', 'http://localhost:89/kelurahan-gandaria/');

// LOGIN FUNCTION
if (isset($_POST['Login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email && $password) {
        // cek email dan password
        $qLogin = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        $cekLogin = mysqli_fetch_assoc($qLogin);
        if ($cekLogin) {
            // cek password
            if (password_verify($password, $cekLogin['password'])) {
                $_SESSION['id'] = $cekLogin['id'];
                $_SESSION['nama'] = $cekLogin['nama_lengkap'];
                $_SESSION['email'] = $cekLogin['email'];
                $_SESSION['role'] = $cekLogin['role'];
                if ($cekLogin['role'] == 'admin') {
                    echo "
                        <script>
                            alert('Berhasil Login!');
                             window.location.href = 'admin/dashboard.php';
                        </script>
                        ";
                    die;
                } else {
                    echo "
                    <script>
                        alert('Berhasil Login!');
                         window.location.href = 'admin/users.php';
                    </script>
                    ";
                    die;
                }
            } else {
                echo "
                <script>
                    alert('Email atau Kata Sandi Salah!');
                     window.location.href = 'login.php';
                </script>
                ";
                die;
            }
        } else {
            echo "
            <script>
                alert('Email atau Kata Sandi Salah!');
                 window.location.href = 'login.php';
            </script>
            ";
            die;
        }
    } else {
        echo "
        <script>
            alert('Inputan tidak boleh ada yang kosong!');
             window.location.href = 'login.php';
        </script>
        ";
        die;
    }
}


// REGISTER FUNCTION
if (isset($_POST['Register'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $password = $_POST['password'];
    $confirm_passsword = $_POST['confirm_password'];

    if ($nama && $email && $no_telp && $password && $confirm_passsword) {

        // cek password dan konfirmasi password
        if ($password !== $confirm_passsword) {
            echo "
                <script>
                    alert('Password dan Konfirmasi Password Tidak Sesuai!');
                     window.location.href = 'register.php';
                </script>
                ";
            die;
        }

        // cek password dan konfirmasi password
        if (strlen($password) < 5) {
            echo "
                 <script>
                     alert('Password minimal harus 5 karakter!');
                      window.location.href = 'register.php';
                 </script>
                 ";
            die;
        }


        // cek ketersedian email
        $qCek = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        $cekEmail = mysqli_num_rows($qCek);

        if ($cekEmail > 0) {
            echo "
            <script>
                alert('Email yang didaftarkan sudah digunakan!');
                 window.location.href = 'register.php';
            </script>
            ";
            die;
        }


        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($conn, "INSERT INTO `users` ( `nama_lengkap`, `email`,`no_telp` ,`password`, `role`) VALUES ( '$nama', '$email','$no_telp', '$password_hash', 'user')");
        echo "
        <script>
            alert('Anda berhasil mendaftar, silahkan login terlebih dahulu');
            window.location.href = 'login.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Inputan tidak boleh ada yang kosong!');
             window.location.href = 'register.php';
        </script>
        ";
        die;
    }
}


function protectPage($role)
{

    // Cek apakah pengguna memiliki session 
    if (isset($_SESSION['role'])) {

        if ($role === 'admin') {
            if ($_SERVER['REQUEST_URI'] == $_SERVER['REQUEST_URI'] && $_SESSION['role'] === 'admin') {

            } else {
                echo '<script>window.history.back()</script>';
                exit();
            }
        }

        if ($role === 'user') {
            if ($_SERVER['REQUEST_URI'] == $_SERVER['REQUEST_URI'] && $_SESSION['role'] === 'user') {

            } else {
                echo '<script>window.history.back()</script>';
                exit();
            }
        }
    } else {

        if ($_SERVER['REQUEST_URI'] == '/kelurahan-gandaria/login.php') {
        } else {
            header('Location:' . BASE_URL . 'login.php');
            exit();
        }

    }
}



// function logedin()
// {
//     global $conn;
//     // cek cookie
//     if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
//         $id = $_COOKIE['id'];
//         $key = $_COOKIE['key'];
//         $query = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
//         $user = mysqli_fetch_assoc($query);
//         if ($key === md5($user['password'])) {
//             $_SESSION['id'] = $user['id'];
//             $_SESSION['nama'] = $user['nama'];
//         }
//     } else {
//         if (!isset($_SESSION['nama'])) {
//             header('Location:' . BASE_URL . 'login.php');
//         }
//     }

//     // if (isset($_SESSION['role']) && $_SERVER['REQUEST_URI'] == BASE_URL . '/login.php') {
//     //     if ($_SESSION['role'] == 'admin') {
//     //         header('Location:' . BASE_URL . '/admin/dashboard.php');
//     //     } else {
//     //         header('Location:' . BASE_URL . '/index.php');
//     //     }
//     // }
// }

