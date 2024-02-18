<?php
session_start();

require './../../config/authFunction.php';
protectPage('admin');

if (isset($_GET['id'])) {
    $idPengaduan = $_GET['id'];
    $query = "DELETE FROM pengaduan WHERE id = '$idPengaduan'";
    $hapus = mysqli_query($conn, $query);
    if ($hapus) {

        $_SESSION['success'] = true;
        $_SESSION['text'] = "Data pengaduan berhasil dihapus!";

        echo '<script>window.history.back();</script>';
    } else {
        $_SESSION['success'] = false;
        $_SESSION['text'] = "Data pengaduan gagal dihapus!";

        echo '<script>window.history.back();</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}
