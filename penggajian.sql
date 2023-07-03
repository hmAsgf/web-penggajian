-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 03:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_datang` time NOT NULL,
  `jam_pulang` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `nip`, `tanggal`, `jam_datang`, `jam_pulang`) VALUES
(1, 10000, '2023-01-02', '07:28:59', '14:05:28'),
(2, 10000, '2023-01-03', '07:30:21', '14:02:37'),
(3, 10000, '2023-06-01', '07:28:59', '14:05:28'),
(4, 10000, '2023-06-02', '07:30:21', '13:59:23'),
(5, 10000, '2023-06-03', '07:26:59', '14:03:12'),
(6, 10000, '2023-06-04', '07:31:51', '14:07:41'),
(7, 10000, '2023-06-05', '07:29:14', '13:59:52'),
(8, 10000, '2023-06-06', '07:29:14', '14:03:12'),
(9, 10000, '2023-06-07', '07:28:59', '14:03:12'),
(64, 10000, '2023-06-30', '23:18:45', '23:29:28'),
(65, 10000, '2023-07-01', '00:09:53', '14:02:23'),
(68, 10000, '2023-07-02', '08:40:18', '17:19:09');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `nomor_telepon`) VALUES
(1, 'Ananda Mega', 'megaman', 'mega123', '081234567890');

-- --------------------------------------------------------

--
-- Table structure for table `detail_potongan`
--

CREATE TABLE `detail_potongan` (
  `id_potongan` int(2) NOT NULL,
  `nip` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nominal` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_potongan`
--

INSERT INTO `detail_potongan` (`id_potongan`, `nip`, `tanggal`, `nominal`, `keterangan`) VALUES
(1, 10000, '2023-02-03', 20000, ''),
(1, 10000, '2023-02-17', 30000, ''),
(1, 10000, '2023-02-17', 20000, ''),
(1, 10000, '2023-02-20', 10000, ''),
(1, 10000, '2023-02-24', 20000, ''),
(1, 10001, '2023-02-13', 10000, ''),
(1, 10000, '2023-04-14', 20000, ''),
(1, 10000, '2023-07-02', 2015, 'Terlambat Absen 00:40'),
(2, 10000, '2023-07-03', 15000, 'Tidak Hadir'),
(2, 10001, '2023-07-03', 12500, 'Tidak Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(2) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `gaji_pokok` int(11) NOT NULL,
  `pajak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama`, `gaji_pokok`, `pajak`) VALUES
(1, 'kasir', 3000000, 150000),
(2, 'pelayan', 2500000, 125000),
(3, 'chef', 5500000, 275000),
(4, 'supervisor', 7000000, 350000),
(5, 'manajer', 10000000, 500000);

--
-- Triggers `jabatan`
--
DELIMITER $$
CREATE TRIGGER `hitung_pajak` BEFORE INSERT ON `jabatan` FOR EACH ROW SET NEW.pajak = NEW.gaji_pokok * 0.05
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lembur`
--

CREATE TABLE `lembur` (
  `id` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lembur`
--

INSERT INTO `lembur` (`id`, `nip`, `tanggal`, `waktu`, `nominal`) VALUES
(1, 10000, '2023-03-14', '01:07:50', 30000),
(2, 10000, '2023-03-15', '01:03:18', 30000),
(3, 10000, '2023-07-01', '07:00:00', 210000);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_jabatan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `password`, `nomor_telepon`, `email`, `alamat`, `id_jabatan`) VALUES
(10000, 'Budi Doremi', 'dibudi123', '081233211230', 'budi99@gmail.com', 'Surabaya', 1),
(10001, 'Siti Kusmini', 'siti321', '089182461036', 'sitikusmini@gmail.com', 'Surabaya', 2);

-- --------------------------------------------------------

--
-- Table structure for table `penggajian`
--

CREATE TABLE `penggajian` (
  `id` int(11) NOT NULL,
  `NIP` int(11) NOT NULL,
  `id_admin` int(1) NOT NULL,
  `tanggal` date NOT NULL,
  `gaji_pokok` int(11) NOT NULL,
  `pajak` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  `gaji_lembur` int(11) NOT NULL,
  `gaji_bersih` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penggajian`
--

INSERT INTO `penggajian` (`id`, `NIP`, `id_admin`, `tanggal`, `gaji_pokok`, `pajak`, `potongan`, `gaji_lembur`, `gaji_bersih`) VALUES
(1, 10000, 1, '2023-01-31', 3000000, 150000, 0, 0, 2850000),
(2, 10000, 1, '2023-02-28', 3000000, 150000, 100000, 0, 2750000),
(3, 10000, 1, '2023-03-31', 3000000, 150000, 0, 60000, 2910000),
(4, 10000, 1, '2023-04-27', 3000000, 150000, 20000, 0, 2830000),
(5, 10001, 1, '2023-01-31', 2500000, 125000, 0, 0, 2375000),
(6, 10001, 1, '2023-02-28', 2500000, 125000, 10000, 0, 2365000),
(11, 10001, 1, '2023-04-30', 2500000, 125000, 0, 0, 2375000),
(12, 10001, 1, '2023-03-31', 2500000, 125000, 0, 0, 2375000);

-- --------------------------------------------------------

--
-- Table structure for table `potongan`
--

CREATE TABLE `potongan` (
  `id` int(2) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `potongan`
--

INSERT INTO `potongan` (`id`, `jenis`) VALUES
(1, 'Terlambat'),
(2, 'Tidak Hadir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lembur`
--
ALTER TABLE `lembur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `penggajian`
--
ALTER TABLE `penggajian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potongan`
--
ALTER TABLE `potongan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lembur`
--
ALTER TABLE `lembur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penggajian`
--
ALTER TABLE `penggajian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `potongan`
--
ALTER TABLE `potongan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
