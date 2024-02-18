<?php
session_start();

require './../../config/authFunction.php';
protectPage('admin');

if (isset($_GET['id'])) {
    $idLayanan = $_GET['id'];
    $query = "DELETE FROM layanan WHERE id = '$idLayanan'";
    $hapus = mysqli_query($conn, $query);
    if ($hapus) {
        $_SESSION['success'] = true;
        $_SESSION['text'] = 'Berhasil menghapus layanan! ';
        header('location:../layanan.php');
    } else {
        $_SESSION['success'] = false;
        $_SESSION['text'] = 'Gagal menghapus layanan! ';
        header('location:../berita.php');
    }
} else {
    echo '<script>window.history.back()</script>';
}
