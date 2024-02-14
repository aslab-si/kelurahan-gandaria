-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2024 at 05:39 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelurahan-gandaria`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `author` varchar(10) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `author`, `gambar`, `isi`, `created_at`) VALUES
(7, 'Taman Baru di sekitar Gandaria', 'Admin', 'TXT BLUE HOUR.jpeg', 'Alhamdulillah revitalisasi Taman Mini Indonesia Indah yang dilakukan sejak Januari tahun lalu, tahun 2022, pada hari ini telah selesai, yang menelan anggaran tadi sudah disampaikan oleh Pak Menteri Erick Thohir Rp1,070 triliun plus Rp200 miliar dari PT Injourney\r\n\r\nDan masyarakat sekarang bisa mengunjungi dan menikmati wajah baru Taman Mini Indonesia Indah yang tertata rapi, lebih hijau, lebih indah, dan lebih nyaman. Tadi saya tanyakan ke Bu Dirut dan Pak Dirut, “Malam buka sampai jam berapa?” “Malam buka sampai jam 8.”\r\n\r\nDan,  revitalisasi ini sekaligus mengembalikan sebagaimana semangat awalnya yang digagas oleh Ibu Tien Soeharto. Dan, kalau siang mestinya Taman Mini Indonesia Indah sekarang ini bisa lebih sejuk karena konsepnya telah dikembalikan seperti pada masterplan awalnya, yaitu 70 persen ruang terbuka hijau dan 30 persen bangunan. Dan juga, seluruh bangunan museum dan anjungan daerah juga telah dipercantik dan direvitalisasi dengan mengusung konsep inclusive, culture, dan smart.\r\n\r\nSaya yakin dengan wajah baru, Taman Mini Indonesia Indah ini akan menjadi sebuah ikon besar pariwisata di Jakarta dan juga tentu saja di Indonesia\r\n', '2024-02-14 03:56:51'),
(13, 'Ketua KPU Minta Abaikan soal Viral Exit Poll, TPN: Bukan Kapasitasnya', '', 'download.jpg', '<p>Jakarta - Direktur Eksekutif Direktorat Komunikasi Informasi dan Juru Bicara Tim Pemenangan Nasional (TPN) Ganjar-Mahfud, Y. Tomi Aryanto mengomentari pernyataan Ketua KPU Hasyim Asy\'ari terkait viral exit poll Pemilu 2024. Ia menyebut hal itu bukanlah kapasitas KPU.\r\n\"Ketua KPU mengatakan bahwa exit poll yang beberapa hari ini kita terima dari hasil pemilihan di luar negeri sebagai hoax itu saya kira kita perlu sampaikan juga bahwa bukan kapasitas Ketua KPU untuk mengatakan sesuatu informasi hoax atau tidak,\" kata Tomi di media center TPN Ganjar-Mahfud, Jakarta, Selasa (13/2/2024).</p>', '2024-02-14 04:32:53'),
(14, 'Sudah Nyoblos, Kapan KPU Umumkan Pemenang Pilpres 2024? ', '', 'Inilah-Tema-Debat-Capres-Perdana-12-Desember-2023-Ada-11-Panelis.jpg', '<p>Berikut hasil survei elektabilitas pasangan calon presiden dan calon wakil presiden tiga lembaga survei jelang pemungutan suara Pemilu 2024.</p>\r\n<p>Tiga lembaga survai yang merilis hasil survei terbarunya yakni Populi Center, Poltracking Indonesia dan Indikator Politik Indonesia.</p>\r\n<p>Survei ketiga lembaga survei itu dilaksanakan pada akhir Januari hingga awal Februari.</p>\r\n<p>Hasil survei elektabilitas capres dan cawapres ketiga lembaga survei menempatkan pasangan nomor urut 2, Prabowo Subianto-Gibran Rakabuming Raka menempati urutan pertama.</p>\r\n<p>Kemudian disusul dua pasangan lainnya.</p>', '2024-02-14 04:36:44'),
(15, 'Anggota KPPS Gandaria Utara Ikuti Bimtek Pemilu Tahun 2024', '', 'dd0ed23bc96c897749d952ff23e64328.jpg', '<p>Anggota Kelompok Penyelenggara Pemungutan Suara (KPPS) mengikuti Bimbingan Teknis (Bimtek) Pemilu Tahun 2024 di Aula Kantor Kelurahan Gandaria Utara, Kebayoran Baru, Jakarta Selatan.&nbsp;</p>\r\n<p class=\"text-justify\">Ketua Panitia Pemungutan Suara Kelurahan Gandaria Utara, Muhamad Hilmi Ismail mengatakan, pelaksanaan Bimtek bertujuan menyampaikan informasi dan pengetahuan substansi dan teknis kepemiluan hingga melatih serta mendalami keterampilan teknis kepemiluan. Sehingga, terbentuk kemampuan dan penguasaan secara keseluruhan terkait manajemen Pemilu.</p>\r\n<p class=\"text-justify\">\"Semua bimtek kita lakukan sesuai aturan, terutama penjelasan mengenai tugas mereka di lapangan,\" ujarnya, Senin (29/1).</p>', '2024-02-14 04:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `judul`, `isi`, `created_at`) VALUES
(2, 'PEMBUATAN KTP BARU 17  TAHUN', '<ul>\r\n<li>FOTOCOPY KARTU KELUARGA</li>\r\n<li>FOTOCOPY AKTA LAHIR/IJAZAH&nbsp;</li>\r\n</ul>', '2024-02-14 04:19:20'),
(3, 'PEMBUATAN KTP HILANG', '<ul>\r\n<li>FOTOCOPY KARTU KELUARGA</li>\r\n<li>SURAT KEHILANGAN DARI POLISI ASLI&nbsp;</li>\r\n</ul>', '2024-02-14 04:19:37'),
(4, 'PERUBAHAN DATA KTP/KARTU KELUARGA', '<ul>\r\n<li>KARTU KELUARGA ASLI</li>\r\n<li>KTP ASLI</li>\r\n<li>BUKTI PENDUKUNG PERUBAHAN DATA</li>\r\n</ul>', '2024-02-14 04:18:42'),
(5, 'SURAT PINDAH (KELUAR) ', '<ul>\r\n<li>KARTU KELUARGA ASLI</li>\r\n<li>KTP ASLI &amp; FOTOCOPY</li>\r\n<li>BUKTI PENDUKUNG JIKA ADA PERUBAHAN DATA</li>\r\n</ul>', '2024-02-14 04:19:59'),
(6, 'SURAT PINDAH (PENDATANG)', '<ul>\r\n<li>SURAT PINDAH DARI DAERAH ASAL</li>\r\n<li>KARTU KELUARGA &amp; KTP PENJAMIN (JIKA NUMPANG ALAMAT)</li>\r\n<li>KTP YBS</li>\r\n</ul>', '2024-02-14 04:20:20'),
(7, 'AKTA KELAHIRAN ANAK', '<ul>\r\n<li>FOTOCOPY KTP ORANG TUA</li>\r\n<li>KARTU KELUARGA ASLI &amp; FOTOCOPY</li>\r\n<li>SURAT LAHIR ASLI &amp; FOTOCOPY</li>\r\n<li>AKTA/BUKU NIKAH ASLI &amp; FOTOCOPY</li>\r\n<li>FOTOCOPY KTP SAKSI</li>\r\n</ul>', '2024-02-14 04:20:45'),
(8, 'AKTA KELAHIRAN DEWASA', '<ul>\r\n<li>FOTOCOPY KTP YBS</li>\r\n<li>FOTOCOPY KARTU KELUARGA YBS</li>\r\n<li>SURAT LAHIR YBS &nbsp;(JIKA ADA)</li>\r\n<li>FOTOCOPY IJAZAH YBS &nbsp;(JIKA ADA)</li>\r\n<li>FOTOCOPY AKTA/BUKU NIKAH YBS (JIKA SDH MENIKAH)</li>\r\n<li>FOTOCOPY AKTA/BUKU NIKAH ORANG TUA (JIKA ADA)</li>\r\n<li>FOTOCOPY KTP SAKSI 2 ORANG</li>\r\n</ul>', '2024-02-14 04:21:18'),
(9, 'AKTA KEMATIAN', '<ul>\r\n<li>KARTU KELUARGA ALM ASLI &amp; FOTOCOPY</li>\r\n<li>KTP ALM ASLI &amp; FOTOCOPY</li>\r\n<li>SURAT KETERANGAN MENINGGAL DARI RS/PUSKES</li>\r\n<li>FOTOCOPY KTP PELAPOR</li>\r\n<li>FOTOCOPY KTP SAKSI 2 ORANG</li>\r\n<li>BUKTI PENDUKUNG JIKA ADA PERUBAHAN DATA</li>\r\n</ul>', '2024-02-14 04:21:54'),
(10, 'SURAT KETERANGAN TIDAK MAMPU', '<ul>\r\n<li>PENGANTAR RT/RW</li>\r\n<li>FOTOKOPI KTP</li>\r\n<li>FOTOKOPI KK</li>\r\n<li>SURAT PERNYATAAN TIDAK MAMPU</li>\r\n</ul>', '2024-02-14 04:22:14'),
(11, 'SURAT PENGANTAR SKCK', '<ul>\r\n<li>PENGANTAR RT/RW</li>\r\n<li>FOTOKOPI KTP</li>\r\n<li>FOTOKOPI KK</li>\r\n</ul>', '2024-02-14 04:22:46'),
(12, 'SURAT KETERANGAN (PM1 KELURAHAN)', '<ul>\r\n<li>PENGANTAR RT/RW</li>\r\n<li>FOTOKOPI KTP DAN KK</li>\r\n<li>DATA PENDUKUNG LAINNYA</li>\r\n</ul>', '2024-02-14 04:23:06'),
(13, 'SURAT PENGANTAR NIKAH', '<ul>\r\n<li>PENGANTAR RT/RW</li>\r\n<li>SURAT PERNYATAAN BELUM PERNAH MENIKAH</li>\r\n<li>SURAT PERNYATAAN WALI NIKAH</li>\r\n<li>FOTOKOPI KTP DAN KK PEMOHON</li>\r\n<li>FOTOKOPI KTP DAN KK ORANG TUA PEMOHON (JIKA MENINGGAL MELAMPIRKAN SURAT KEMATIAN</li>\r\n<li>FOTOKOPI KTP DAN KK CALON</li>\r\n<li>SURAT LAYAK NIKAH (PUSKESMAS TINGKAT KECAMATAN)</li>\r\n<li>FOTOKOPI AKTA KEMATIAN ISTRI/SUAMI (UNTUK DUDA/JANDA)</li>\r\n<li>FOTOKOPI AKTA CERAI (UNTUK DUDA/JANDA)</li>\r\n</ul>', '2024-02-14 04:24:02');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `nama`, `email`, `subjek`, `isi`) VALUES
(4, 'Ghifarry', 'ghifarry@gmail.com', 'kemalingan di rumah tetangga', 'ada kemalingan diruma tetangga saya');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `password` varchar(300) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `email`, `no_telp`, `password`, `avatar`, `role`) VALUES
(5, 'admin', 'admin@gmail.com', '08298929829822', '$2y$10$W6QnxOPLXvf4aUDBfQaXx.Kyyr1GCL1cBWuC/Zlb392vuHpqzSMx2', NULL, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
