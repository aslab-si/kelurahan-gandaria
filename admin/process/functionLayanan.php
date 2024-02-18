<?php
session_start();
require '../../config/authFunction.php';
protectPage('admin');



if (isset($_POST['tambahLayanan'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $sql = "INSERT INTO layanan (judul, isi) VALUES ('$judul', '$isi')";

    $tambah = mysqli_query($conn, $sql);

    if ($tambah) {
        $_SESSION['success'] = true;
        $_SESSION['text'] = 'Berhasil menambahkan layanan! ';
        header('location:../layanan.php');
    } else {
        $_SESSION['success'] = false;
        $_SESSION['text'] = 'Gagal menambahkan layanan! ';
        header('location:../layanan.php');
        ;
    }
}
// Tutup koneksi ke database

// FUNCTION UPDATE Layanan
if (isset($_POST['editLayanan'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $sql = "UPDATE layanan SET judul='$judul', isi='$isi' WHERE id=$id";


    // Eksekusi query update
    $update = mysqli_query($conn, $sql);

    if ($update) {
        $_SESSION['success'] = true;
        $_SESSION['text'] = 'Berhasil mengubah layanan! ';
        header('location:../layanan.php');
    } else {
        $_SESSION['success'] = false;
        $_SESSION['text'] = 'Gagal mengubah layanan! ';
        header('location:../layanan.php');
    }
}
