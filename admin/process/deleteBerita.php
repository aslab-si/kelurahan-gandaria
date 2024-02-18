<?php
session_start();

require './../../config/authFunction.php';
protectPage('admin');

function deletePicture($id)
{
    global $conn;
    $query = "SELECT * FROM berita WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $picture = $row['gambar'];
    unlink('./../../image/berita/' . $picture);
}

if (isset($_GET['id'])) {
    $idBerita = $_GET['id'];
    $query = "DELETE FROM berita WHERE id = '$idBerita'";
    deletePicture($idBerita);
    $hapus = mysqli_query($conn, $query);
    if ($hapus) {
        $_SESSION['success'] = true;
        $_SESSION['text'] = 'Berhasil menghapus berita! ';
        header('location:../berita.php');
    } else {
        $_SESSION['success'] = false;
        $_SESSION['text'] = 'Gagal menghapus berita! ';
        header('location:../berita.php');
    }
} else {
    echo '<script>window.history.back()</script>';
}
