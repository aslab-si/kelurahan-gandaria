<?php
session_start();
include 'connection.php';

if (isset($_POST['tambahPengaduan'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $subjek = $_POST['subjek'];
    $isi = $_POST['isi'];

    $sql = "INSERT INTO pengaduan (nama, email, subjek, isi) VALUES ('$nama', '$email', '$subjek', '$isi')";
    $tambah = mysqli_query($conn, $sql);

    if ($tambah) {
        $_SESSION['success'] = true;
        $_SESSION['text'] = 'Pengaduan berhasil di kirim ! ';
        header('location:../index.php');

    } else {
        $_SESSION['success'] = false;
        $_SESSION['text'] = 'Pengaduan gagal di kirim ! ';
        header('location:../index.php');
    }
}
