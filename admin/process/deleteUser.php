<?php
session_start();

require './../../config/authFunction.php';
protectPage('admin');

if (isset($_GET['id'])) {
    $idUser = $_GET['id'];
    $query = "DELETE FROM users WHERE id = '$idUser'";
    $hapus = mysqli_query($conn, $query);
    if ($hapus) {
        echo '<script>
    alert("Data Berhasil dihapus");
    window.history.back();</script>';
    } else {
        echo '<script>
    alert("Data gagal di hapus");
    window.history.back();
    </script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}
