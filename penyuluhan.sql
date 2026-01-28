-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 12, 2026 at 04:00 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyuluhan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id_anak` int NOT NULL,
  `id_ortu` int DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `nik` bigint DEFAULT NULL,
  `jk` varchar(10) DEFAULT NULL,
  `bb_lahir` int DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tb_lahir` int DEFAULT NULL,
  `goldar` varchar(2) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id_anak`, `id_ortu`, `name`, `nik`, `jk`, `bb_lahir`, `tgl_lahir`, `tb_lahir`, `goldar`, `create_at`) VALUES
(4, 2, 'Muhammad Rizzy Angrh', 11, 'L', 50, '2025-12-14', 160, 'A', '2025-12-13 22:16:10'),
(5, 2, 'joko', 90, 'L', 90, '2025-12-26', 190, 'AB', '2025-12-14 06:34:13'),
(6, 3, 'jok9', 92, 'L', 91, '2025-12-26', 190, 'A', '2025-12-14 06:40:52'),
(7, 2, 'gocer', 90, 'L', 88, '2025-12-17', 190, 'A', '2025-12-17 03:25:04'),
(9, 6, 'yants', 24, 'L', 30, '2026-01-13', 120, 'A', '2026-01-09 06:44:09'),
(10, 7, 'antu', 33, 'L', 30, '2026-01-05', 100, 'O', '2026-01-09 06:44:43'),
(11, 4, 'asssk', 8, 'L', 8, '2026-01-15', 90, 'A', '2026-01-09 06:46:38');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id_kunjungan` int NOT NULL,
  `id_anak` int DEFAULT NULL,
  `tgl_kunjungan` date DEFAULT NULL,
  `fasilitas` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id_kunjungan`, `id_anak`, `tgl_kunjungan`, `fasilitas`) VALUES
(1, 4, '2025-11-04', 'Konsultasi'),
(2, 6, '2025-12-13', 'Pmerisks'),
(3, 5, '2026-01-09', 'Pmerisks'),
(4, 7, '2026-01-16', 'Terlalu GACOR'),
(5, 10, '2026-01-15', 'Apaya'),
(6, 9, '2026-01-23', 'Itulah'),
(7, 11, '2026-01-08', 'DektauAbenla'),
(8, 4, '2026-01-09', 'hm'),
(9, 7, '2025-10-17', 'kk'),
(10, 9, '2025-09-18', 'nn'),
(11, 11, '2025-08-14', 'jkjk'),
(12, 10, '2025-07-18', 'jk'),
(13, 5, '2025-06-24', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `ortu`
--

CREATE TABLE `ortu` (
  `id_ortu` int NOT NULL,
  `name_ibu` varchar(30) DEFAULT NULL,
  `name_ayah` varchar(30) DEFAULT NULL,
  `hubungan` varchar(25) DEFAULT NULL,
  `telp` varchar(13) DEFAULT NULL,
  `alamat` text,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ortu`
--

INSERT INTO `ortu` (`id_ortu`, `name_ibu`, `name_ayah`, `hubungan`, `telp`, `alamat`, `create_at`) VALUES
(2, 'king', 'rxx', 'kandung', '00', 'tkde', '2025-12-06 05:08:12'),
(3, 'jokowi', 'megawati', 'kandung', '111', '111', '2025-12-10 02:47:28'),
(4, 'megacan', 'wowi', 'kandung', '00', 'pilih 1', '2025-12-10 03:31:50'),
(5, 'SUSANTI', 'SUSANTO', 'kandung', '222', 'GACOR', '2025-12-13 21:52:08'),
(6, 'yanti', 'yanto', 'kandung', '09', 'taatau', '2026-01-09 06:42:59'),
(7, 'anti', 'anto', 'kandung', '0101', '', '2026-01-09 06:43:19'),
(8, 'susi', 'suso', 'kandung', '2', '', '2026-01-09 06:43:37');

-- --------------------------------------------------------

--
-- Table structure for table `pengukuran`
--

CREATE TABLE `pengukuran` (
  `id_ukur` int NOT NULL,
  `id_kunjungan` int DEFAULT NULL,
  `tgl_ukur` date DEFAULT NULL,
  `bb` decimal(5,2) DEFAULT NULL,
  `tb` decimal(5,2) DEFAULT NULL,
  `lk` decimal(5,2) DEFAULT NULL,
  `vaksin` varchar(30) DEFAULT NULL,
  `status_gizi` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengukuran`
--

INSERT INTO `pengukuran` (`id_ukur`, `id_kunjungan`, `tgl_ukur`, `bb`, `tb`, `lk`, `vaksin`, `status_gizi`) VALUES
(1, 1, '2025-12-20', '10.10', '87.90', '30.00', 'polio', 'Gizi Kurang'),
(2, 2, '2025-12-30', '20.00', '190.00', '68.00', 'dpt', 'Gizi Kurang'),
(3, 13, '2026-02-11', '0.06', '0.09', '0.07', 'apaya', 'Gizi Kurang'),
(4, 12, '2026-03-27', '0.07', '0.07', '-0.02', 'tatat', 'Gizi Baik'),
(5, 10, '2025-09-10', '-0.05', '-0.13', '0.03', 'dkjs', 'Obesitas'),
(6, 8, '2025-08-13', '0.04', '0.05', '0.18', 'sihatt', 'Gizi Baik');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` enum('admin','user') DEFAULT 'user',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nama`, `level`, `created_at`) VALUES
(1, 'rizzy@gmail.com', '3b712de48137572f3849aabd5666a4e3', 'Rizzy', 'admin', '2025-11-28 19:47:46'),
(10, 'riji@gmail.com', 'rizzy123', 'rrrrr', 'user', '2025-11-28 19:56:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`),
  ADD KEY `ortu_id` (`id_ortu`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`),
  ADD KEY `anak_id` (`id_anak`);

--
-- Indexes for table `ortu`
--
ALTER TABLE `ortu`
  ADD PRIMARY KEY (`id_ortu`);

--
-- Indexes for table `pengukuran`
--
ALTER TABLE `pengukuran`
  ADD PRIMARY KEY (`id_ukur`),
  ADD KEY `kunjungan_id` (`id_kunjungan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id_anak` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id_kunjungan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ortu`
--
ALTER TABLE `ortu`
  MODIFY `id_ortu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengukuran`
--
ALTER TABLE `pengukuran`
  MODIFY `id_ukur` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anak`
--
ALTER TABLE `anak`
  ADD CONSTRAINT `anak_ibfk_1` FOREIGN KEY (`id_ortu`) REFERENCES `ortu` (`id_ortu`);

--
-- Constraints for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD CONSTRAINT `kunjungan_ibfk_1` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id_anak`);

--
-- Constraints for table `pengukuran`
--
ALTER TABLE `pengukuran`
  ADD CONSTRAINT `pengukuran_ibfk_1` FOREIGN KEY (`id_kunjungan`) REFERENCES `kunjungan` (`id_kunjungan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
