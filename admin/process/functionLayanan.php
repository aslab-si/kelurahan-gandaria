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
        echo "<script>
                alert('Berhasil menambahkan layanan!');
                window.location.href = './../layanan.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menambahkan layanan!');
                window.history.back()';
               </script>";
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
        echo "<script>
                alert('Berhasil mengupdate layanan!');
                window.location.href = './../layanan.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal mengupdate layanan!');
                window.history.back()';
               </script>";
    }
}
