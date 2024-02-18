<?php
session_start();
require '../../config/authFunction.php';
protectPage('admin');



if (isset($_POST['tambahBerita'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    // Proses upload gambar
    $uploadDir = './../../image/berita/';
    $gambarName = $_FILES['gambar']['name'];
    $gambarTmpName = $_FILES['gambar']['tmp_name'];
    $gambarPath = $uploadDir . $gambarName;

    // Mengambil ekstensi gambar
    $ekstensi = pathinfo($gambarName, PATHINFO_EXTENSION);

    move_uploaded_file($gambarTmpName, $gambarPath);

    // Simpan informasi berita ke dalam database
    $sql = "INSERT INTO berita (judul, gambar, isi) VALUES ('$judul', '$gambarName', '$isi')";

    $tambah = mysqli_query($conn, $sql);

    if ($tambah) {
        $_SESSION['success'] = true;
        $_SESSION['text'] = 'Berhasil menambahkan berita! ';
        header('location:../berita.php');
    } else {
        $_SESSION['success'] = false;
        $_SESSION['text'] = 'Gagal menambahkan berita! ';
        header('location:../berita.php');
    }
}
// Tutup koneksi ke database



function deletePicture($id)
{
    global $conn;
    $query = "SELECT * FROM berita WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $picture = $row['gambar'];
    unlink('./../../image/berita/' . $picture);
}


// FUNCTION UPDATE BERITA
if (isset($_POST['editBerita'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    // Jika ada file gambar yang diunggah, proses upload
    if ($_FILES['gambar']['size'] > 0) {
        $uploadDir = './../../image/berita/';
        $gambarName = $_FILES['gambar']['name'];
        $gambarTmpName = $_FILES['gambar']['tmp_name'];
        $gambarPath = $uploadDir . $gambarName;

        move_uploaded_file($gambarTmpName, $gambarPath);
        deletePicture($id);
        // Update informasi berita ke dalam database dengan gambar baru
        $sql = "UPDATE berita SET judul='$judul', gambar='$gambarName', isi='$isi' WHERE id=$id";
    } else {
        // Jika tidak ada file gambar yang diunggah, update tanpa merubah gambar
        $sql = "UPDATE berita SET judul='$judul', isi='$isi' WHERE id=$id";
    }

    // Eksekusi query update
    $update = mysqli_query($conn, $sql);

    if ($update) {
        $_SESSION['success'] = true;
        $_SESSION['text'] = 'Berhasil mengubah berita! ';
        header('location:../berita.php');
    } else {
        $_SESSION['success'] = false;
        $_SESSION['text'] = 'Gagal mengubah berita! ';
        header('location:../berita.php');
        ;
    }
}