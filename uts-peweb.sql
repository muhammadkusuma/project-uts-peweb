-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2022 at 02:11 PM
-- Server version: 8.0.31-0ubuntu0.22.04.1
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts-peweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktifitas`
--

CREATE TABLE `aktifitas` (
  `id` int NOT NULL,
  `tahun` year NOT NULL,
  `nama_kegiatan` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tingkat` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aktifitas`
--

INSERT INTO `aktifitas` (`id`, `tahun`, `nama_kegiatan`, `keterangan`, `tingkat`) VALUES
(3, 2019, 'Perkemahan Wisata dan Budaya Saka Wira Kartika Kodim 0313/KPR Danau Rusa XII Koto Kampar', 'Peserta', 'Kabupaten'),
(4, 2018, 'Perkemahan Akbar Saka Wira Kartika Kodim 0313/KPR Kampar Utara', 'Peserta', 'Kabupaten'),
(5, 2014, 'Olimpiade Lomba Pelajaran Kec. Tapung Hulu', 'Juara I', 'Kecamatan'),
(6, 2013, 'LT II Gerakan Pramuka Kwartir Ranting 11 Kec. Tapung Hulu', 'Peserta', 'Kecamatan'),
(7, 2018, 'Lomba Desain Grafis SMK Negeri 1 Tapung Hulu', 'Juara II', 'Jurusan'),
(8, 2019, 'Olimpiade Jaringan Mikrotik-APJII Padang', 'Peserta', 'Nasional'),
(9, 2019, 'Seksi Prestasi Akademik', 'OSIS SMK Negeri 1 Tapung Hulu', 'SMK'),
(10, 2018, 'Seksi Prestasi Akademik', 'OSIS SMK Negeri 1 Tapung Hulu', 'SMK'),
(11, 2018, 'Pramuka Penegak', 'SMK Negeri 1 Tapung Hulu', 'SMK'),
(12, 2016, 'Wakil Ketua OSIS', 'OSIS SMP Negeri 1 Tapung Hulu', 'SMP'),
(13, 2015, 'Seksi Bela Negara', 'OSIS SMP Negeri 1 Tapung Hulu', 'SMP'),
(14, 2020, 'Pesta Generasi Legenda Pensi Online 2020', 'Volunteer', 'Nasional'),
(15, 2020, 'PENSI SHOW YOUR TALENT SMK Negeri 1 Tapung Hulu', 'Panitia', 'SMK'),
(16, 2019, 'Kemah Akbar Penegak SMA/SMK/MA SE KWARCAB KAMPAR', 'Panitia', 'Kabupaten'),
(17, 2019, 'Memperingati Hari Guru SMK Negeri 1 Tapung Hulu', 'Panitia', 'SMK'),
(18, 2019, 'Peringatan Maulid Nabi SMK Negeri 1 Tapung Hulu', 'Panitia', 'SMK'),
(19, 2019, 'Memperingati Hari Sumpah Pemuda SMK Negeri 1 Tapung Hulu', 'Panitia', 'SMK'),
(20, 2019, 'Menyambut Hari Kemerdekaan Republik Indonesia SMK Negeri 1 Tapung Hulu', 'Panitia', 'SMK'),
(21, 2019, 'Pengenalan Lingkungan Sekolah SMK Negeri 1 Tapung Hulu', 'Panitia', 'SMK');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`) VALUES
(23, '.852629.jpg.'),
(24, '.736403.jpg.'),
(25, '.319795.jpg.'),
(26, '.195513.jpg.'),
(27, '.472937.jpg.'),
(28, '.364919.jpg.');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id` int NOT NULL,
  `nama_sertifikat` varchar(50) NOT NULL,
  `tahun` year NOT NULL,
  `berlaku` year NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`id`, `nama_sertifikat`, `tahun`, `berlaku`, `link`) VALUES
(4, 'Belajar Membuat Front-End Web untuk Pemula', 2022, 2025, 'https://www.dicoding.com/certificates/JLX1GVK05Z72'),
(5, 'Belajar Dasar Pemograman Web', 2022, 2025, 'https://www.dicoding.com/certificates/QLZ9K7947Z5D'),
(6, 'HTML Dasar', 2022, 2024, 'https://badgr.com/public/assertions/hJl7L5ohQXubA9sw0YrNNw?identity__email=mwiraadekusuma1@gmail.com'),
(7, 'Pelatihan Junior Web Developer', 2022, 2025, 'https://digitalent.kominfo.go.id/cek-sertifikat?registrasi=150305899101-3034'),
(8, 'Responsive Web Design', 2021, 2024, 'https://freecodecamp.org/certification/xnoxx/responsive-web-design'),
(9, 'Fundamental SQL Using SELECT Statement', 2021, 2024, 'https://academy.dqlab.id/Certificate_check_2/result/DQLABSQLT1BBQSBI/'),
(10, 'Python Fundamental for Data Science', 2021, 2024, 'https://academy.dqlab.id/Certificate_check_2/result/DQLABINTP1BMDTVJ/'),
(11, 'R Fundamental for Data Science', 2021, 2024, 'https://academy.dqlab.id/Certificate_check_2/result/DQLABINTR1FWFUTB/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'M. Wira Ade Kusuma', 'mwiraadekusuma1@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktifitas`
--
ALTER TABLE `aktifitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
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
-- AUTO_INCREMENT for table `aktifitas`
--
ALTER TABLE `aktifitas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

