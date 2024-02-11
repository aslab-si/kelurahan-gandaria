<?php
include 'connection.php';

if (isset($_POST['tambahPengaduan'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $subjek = $_POST['subjek'];
    $isi = $_POST['isi'];

    $sql = "INSERT INTO pengaduan (nama, email, subjek, isi) VALUES ('$nama', '$email', '$subjek', '$isi')";
    $tambah = mysqli_query($conn, $sql);

    if ($tambah) {
        echo "<script>
                alert('Berhasil mengirim pengaduan!');
                window.location.href = '../index.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal mengirim pengaduan!');
                window.history.back();
               </script>";
    }
}
