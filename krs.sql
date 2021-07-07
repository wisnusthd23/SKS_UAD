-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 10:56 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matkul`
--

CREATE TABLE `tbl_matkul` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(255) DEFAULT NULL,
  `id_semester` int(11) DEFAULT NULL,
  `id_sks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_matkul`
--

INSERT INTO `tbl_matkul` (`id_matkul`, `nama_matkul`, `id_semester`, `id_sks`) VALUES
(1, 'Bahasa Inggris Informatika', 1, 2),
(2, 'Pancasila', 1, 2),
(3, 'Kalkulus Infromatika', 1, 2),
(4, 'Dasar Pemograman', 1, 3),
(5, 'Logika Infromatika', 1, 3),
(6, 'Dasar Sistem Infromatika', 1, 3),
(7, 'Komunikasi Interpersonal', 1, 2),
(8, 'Praktikum Dasar Pemograman', 1, 1),
(23, 'Pendidikan Kewarganegaraan', 2, 2),
(24, 'Algoritma Pemograman', 2, 3),
(25, 'Arsitektur Komputer', 2, 3),
(26, 'Matematika Diskrit', 2, 3),
(27, 'Aljabar Linear Matrik', 2, 2),
(28, 'Manajemen Data dan Informasi', 2, 3),
(29, 'Pemograman Web', 2, 3),
(30, 'Praktikum Algoritma Pemograman', 2, 1),
(31, 'Aqidah Islam', 3, 2),
(32, 'Struktur Data', 3, 3),
(33, 'Statistika Informatika', 3, 4),
(34, 'Basis Data', 3, 4),
(35, 'Pemograman Beriorentasi Objek', 3, 3),
(36, 'Komunikasi Data dan Jaringan Komputer', 3, 3),
(37, 'Praktikum Komunikasi Data dan Jaringan Komputer', 3, 1),
(38, 'Akhlak', 4, 0),
(39, 'Kewirausahaan', 4, 2),
(40, 'Grafika Komputer', 4, 3),
(41, 'Pengantar Rekayasa Perangkat Lunak', 4, 3),
(42, 'Startegi Algoritma', 4, 3),
(43, 'Kecerdasan Buatan', 4, 3),
(44, 'Sistem Operasi', 4, 3),
(45, 'Topik Khusus', 4, 3),
(46, 'Fiqih Ibadah', 5, 2),
(47, 'Bahasa Indonesia', 5, 2),
(48, 'Kemanan Komputer', 5, 3),
(49, 'Interaksi Manusia dan Komputer', 5, 3),
(50, 'Rekayasa Kebutuhan Sistem', 5, 2),
(51, 'Pemograman Mobile', 5, 3),
(52, 'Kerja Praktek', 5, 2),
(53, 'Teori Bahasa Otomata', 5, 2),
(54, 'Kemuhammadiyahan', 6, 0),
(55, 'Manajemen Tugas Proyek', 6, 3),
(56, 'Etika Profesi', 6, 2),
(57, 'Analisis dan Perancangan Perangkat Lunak', 6, 3),
(58, 'MK Pilihan 1', 6, 3),
(59, 'MK Pilihan 2', 6, 3),
(60, 'MK Pilihan 3', 6, 3),
(61, 'MK Pilihan 4', 6, 3),
(62, 'Islam Interdispliner', 7, 2),
(63, 'Kuliah Kerja Nyata', 7, 4),
(64, 'Bahasa Inggris Profesional', 7, 2),
(65, 'Metodologi Penelitian', 7, 2),
(66, 'MK Pilihan 5', 7, 3),
(67, 'MK Pilihan 6', 7, 3),
(68, 'MK Pilihan 7', 7, 3),
(69, 'Ilmu Dakwah', 8, 0),
(70, 'Skripsi', 8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pilihan`
--

CREATE TABLE `tbl_pilihan` (
  `id_pilihan` int(11) NOT NULL,
  `nama_pilihan` varchar(125) DEFAULT NULL,
  `id_semester` int(11) DEFAULT NULL,
  `id_sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pilihan`
--

INSERT INTO `tbl_pilihan` (`id_pilihan`, `nama_pilihan`, `id_semester`, `id_sks`) VALUES
(1, 'SPK', 6, 3),
(2, 'Kriptografi', 6, 3),
(3, 'Rekayasa Web', 6, 3),
(4, 'Multimedia', 6, 3),
(5, 'Pembelajaran Mesin', 6, 3),
(6, 'Robotika Informatika', 6, 3),
(7, 'Pengenalan Pola', 6, 3),
(8, 'Pemrosesan Bahasa Alami', 6, 3),
(9, 'Pengembangan Game', 6, 3),
(10, 'Komputer Visi', 7, 3),
(11, 'Data Mining', 7, 3),
(12, 'Grafika Lanjut', 7, 3),
(13, 'Pemograman Web Dinamis', 7, 3),
(14, 'Forensik Digital', 7, 3),
(15, 'Pemograman Paralel', 7, 3),
(16, 'Sistem Temu Balik Informasi', 7, 3),
(17, 'Penj. Kualitas Perangkat Lunak', 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `id_semester` int(11) NOT NULL,
  `nama_semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`id_semester`, `nama_semester`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sks`
--

CREATE TABLE `tbl_sks` (
  `id_sks` int(11) NOT NULL,
  `jumlah_sks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sks`
--

INSERT INTO `tbl_sks` (`id_sks`, `jumlah_sks`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `date_created`) VALUES
(3, 'Wisnu', 'valentinowisnu46@gmail.com', 'default.jpg', '$2y$10$sKJfB5xj2wvr8aCoIqXsV.R2Wu/awAXAJ.ZCH8cKJHOSak366dbGW', 1622986384),
(5, 'Dimas S', 'wisnusullivan7@gmail.com', 'orang.jpg', '$2y$10$bwgpppBqRU7jSabX3la/1.q/EmWf0qBgpnT.f9E5Gzl/inTk/r8be', 1623560634);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  ADD PRIMARY KEY (`id_matkul`),
  ADD KEY `id_semester` (`id_semester`),
  ADD KEY `id_sks` (`id_sks`);

--
-- Indexes for table `tbl_pilihan`
--
ALTER TABLE `tbl_pilihan`
  ADD PRIMARY KEY (`id_pilihan`);

--
-- Indexes for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `tbl_sks`
--
ALTER TABLE `tbl_sks`
  ADD PRIMARY KEY (`id_sks`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tbl_pilihan`
--
ALTER TABLE `tbl_pilihan`
  MODIFY `id_pilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_sks`
--
ALTER TABLE `tbl_sks`
  MODIFY `id_sks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  ADD CONSTRAINT `tbl_matkul_ibfk_1` FOREIGN KEY (`id_semester`) REFERENCES `tbl_semester` (`id_semester`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
