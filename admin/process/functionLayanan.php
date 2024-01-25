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

// FUNCTION UPDATE BERITA
// if (isset($_POST['editBerita'])) {
//     $id = $_POST['id'];
//     $judul = $_POST['judul'];
//     $isi = $_POST['isi'];

//     // Jika ada file gambar yang diunggah, proses upload
//     if ($_FILES['gambar']['size'] > 0) {
//         $uploadDir = './../../image/berita/';
//         $gambarName = $_FILES['gambar']['name'];
//         $gambarTmpName = $_FILES['gambar']['tmp_name'];
//         $gambarPath = $uploadDir . $gambarName;

//         move_uploaded_file($gambarTmpName, $gambarPath);
//         deletePicture($id);
//         // Update informasi berita ke dalam database dengan gambar baru
//         $sql = "UPDATE berita SET judul='$judul', gambar='$gambarName', isi='$isi' WHERE id=$id";
//     } else {
//         // Jika tidak ada file gambar yang diunggah, update tanpa merubah gambar
//         $sql = "UPDATE berita SET judul='$judul', isi='$isi' WHERE id=$id";
//     }

//     // Eksekusi query update
//     $update = mysqli_query($conn, $sql);

//     if ($update) {
//         echo "<script>
//                 alert('Berhasil mengupdate berita!');
//                 window.location.href = './../berita.php';
//               </script>";
//     } else {
//         echo "<script>
//                 alert('Gagal mengupdate berita!');
//                 window.history.back()';
//                </script>";
//     }
// }