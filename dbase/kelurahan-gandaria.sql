-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 11:34 AM
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
(7, 'Taman Baru di sekitar Gandaria', '', 'TXT BLUE HOUR.jpeg', 'Alhamdulillah revitalisasi Taman Mini Indonesia Indah yang dilakukan sejak Januari tahun lalu, tahun 2022, pada hari ini telah selesai, yang menelan anggaran tadi sudah disampaikan oleh Pak Menteri Erick Thohir Rp1,070 triliun plus Rp200 miliar dari PT Injourney\r\n\r\nDan masyarakat sekarang bisa mengunjungi dan menikmati wajah baru Taman Mini Indonesia Indah yang tertata rapi, lebih hijau, lebih indah, dan lebih nyaman. Tadi saya tanyakan ke Bu Dirut dan Pak Dirut, “Malam buka sampai jam berapa?” “Malam buka sampai jam 8.”\r\n\r\nDan,  revitalisasi ini sekaligus mengembalikan sebagaimana semangat awalnya yang digagas oleh Ibu Tien Soeharto. Dan, kalau siang mestinya Taman Mini Indonesia Indah sekarang ini bisa lebih sejuk karena konsepnya telah dikembalikan seperti pada masterplan awalnya, yaitu 70 persen ruang terbuka hijau dan 30 persen bangunan. Dan juga, seluruh bangunan museum dan anjungan daerah juga telah dipercantik dan direvitalisasi dengan mengusung konsep inclusive, culture, dan smart.\r\n\r\nSaya yakin dengan wajah baru, Taman Mini Indonesia Indah ini akan menjadi sebuah ikon besar pariwisata di Jakarta dan juga tentu saja di Indonesia\r\n', '2024-01-23 06:35:50');

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
(2, 'Pembuatan KTP Baru 17 Tahun', '<ol>\r\n<li>Fotocopy Kartu Keluarga</li>\r\n<li>Fotocopy Akta Lahir/Ijazah</li>\r\n</ol>', '2024-01-25 07:30:29'),
(3, 'asdadsas', '<ul>\r\n<li>adsadsdasasdad</li>\r\n<li>asdadsads</li>\r\n<li>qweqweqweqw</li>\r\n</ul>', '2024-01-25 07:30:42');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
