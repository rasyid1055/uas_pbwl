-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 06:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_terlambat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_piket`
--

CREATE TABLE `tbl_piket` (
  `id_piket` int(10) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_piket`
--

INSERT INTO `tbl_piket` (`id_piket`, `nama_guru`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(24, 'Syahroni Nasution', 'Perempuan', '2022-07-13 20:57:14', '2022-07-14 03:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(10) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nama_siswa`, `alamat`, `jenis_kelamin`, `kelas`, `jurusan`, `created_at`, `updated_at`) VALUES
(37, 'HARUN AL RASYID SIREGAR', 'Gunung Tua Link 3', 'Laki-Laki', 'XI-2', 'IPA', '2022-07-13 20:55:55', '2022-07-14 03:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_terlambat`
--

CREATE TABLE `tbl_terlambat` (
  `id_terlambat` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `id_piket` int(10) NOT NULL,
  `tgl_terlambat` date NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jam_terlambat` time NOT NULL,
  `jam_masuk` time NOT NULL,
  `hukuman` varchar(255) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_terlambat`
--

INSERT INTO `tbl_terlambat` (`id_terlambat`, `id_siswa`, `id_piket`, `tgl_terlambat`, `tgl_masuk`, `jam_terlambat`, `jam_masuk`, `hukuman`, `alasan`, `created_at`, `updated_at`) VALUES
(32, 37, 24, '2022-07-13', '2022-07-13', '08:40:00', '09:00:00', 'Menyapu Kantor', 'Bocor ban', '2022-07-13 20:58:39', '2022-07-14 03:58:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_piket`
--
ALTER TABLE `tbl_piket`
  ADD PRIMARY KEY (`id_piket`),
  ADD KEY `nama_guru` (`nama_guru`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `nama_siswa` (`nama_siswa`);

--
-- Indexes for table `tbl_terlambat`
--
ALTER TABLE `tbl_terlambat`
  ADD PRIMARY KEY (`id_terlambat`),
  ADD KEY `id_siswa` (`id_siswa`,`id_piket`),
  ADD KEY `id_piket` (`id_piket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_piket`
--
ALTER TABLE `tbl_piket`
  MODIFY `id_piket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_terlambat`
--
ALTER TABLE `tbl_terlambat`
  MODIFY `id_terlambat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_terlambat`
--
ALTER TABLE `tbl_terlambat`
  ADD CONSTRAINT `tbl_terlambat_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tbl_siswa` (`id_siswa`),
  ADD CONSTRAINT `tbl_terlambat_ibfk_2` FOREIGN KEY (`id_piket`) REFERENCES `tbl_piket` (`id_piket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
