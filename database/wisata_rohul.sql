-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 06:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata_rohul`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `authKey` varchar(100) NOT NULL,
  `accessToken` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama_lengkap`, `authKey`, `accessToken`, `foto`, `createdAt`, `updatedAt`) VALUES
(1, 'admin', '$2y$13$RMv4kUIz2Qx3dQ.rGqfCAuADLLS0D/pclrvuNClHGDKbFUdjlodUq', 'admin', 'erdgf3434', 'rerer34345', 'avatar5.png', '2021-06-13 07:58:08', '2021-06-13 07:58:08'),
(2, 'guswaldi', '$2y$13$hXqbzAUB0O5mYc3uW92k1efxLR7pbbv/5K8aHzOjjsYbRADSMs5NO', 'Guswaldi A', 'O_KVdhY0zUcUki6cQSzuKOOPDQEns9Jx', 'n2Q60EicqGul7rBwMCbFJjJCTDp8RoDc', 'Flat.png', '2021-06-17 16:26:29', '2021-06-17 16:26:29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_atm`
--

CREATE TABLE `tb_atm` (
  `id_atm` int(11) NOT NULL,
  `nama_atm` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `foto` varchar(50) NOT NULL,
  `informasi` varchar(100) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_atm`
--

INSERT INTO `tb_atm` (`id_atm`, `nama_atm`, `alamat`, `kelurahan`, `kecamatan`, `latitude`, `longitude`, `foto`, `informasi`, `createdAt`, `updatedAt`) VALUES
(1, 'gfgfg', 'fgfg', 'fgfg', 'fgfg', 3434, 3434, 'foto.png', 'gfg', '2021-06-17 05:06:20', '2021-06-17 05:06:20'),
(2, 'dsdsd', 'sdsdsd', 'sdsdsd', 'sdsdsds', 121212, 121212, 'Flat.png', 'sdsdsd', '2021-06-17 16:43:03', '2021-06-17 16:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(50) NOT NULL,
  `nama_pengarang` varchar(50) NOT NULL,
  `informasi` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `nama_pengarang`, `informasi`, `foto`, `createdAt`, `updatedAt`) VALUES
(1, 'Perang Dingin', 'Bobo', 'Heii', 'foto.png', '2021-06-14 04:47:26', '2021-06-14 04:47:26'),
(2, 'sdsd', 'sdsd', 'sdsd', 'Flat.png', '2021-06-17 16:44:07', '2021-06-17 16:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_event`
--

CREATE TABLE `tb_event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `foto` varchar(50) NOT NULL,
  `informasi` varchar(100) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_event`
--

INSERT INTO `tb_event` (`id_event`, `nama_event`, `alamat`, `latitude`, `longitude`, `foto`, `informasi`, `createdAt`, `updatedAt`) VALUES
(1, 'dfd', 'dfd', 3434, 3434, 'foto.png', 'fgfg', '2021-06-17 05:06:05', '2021-06-17 05:06:05'),
(2, 'sdsdsd', 'sdsd', 121212, 121212, 'Flat.png', 'sdsdsd', '2021-06-17 16:42:45', '2021-06-17 16:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `tb_masjid`
--

CREATE TABLE `tb_masjid` (
  `id_masjid` int(11) NOT NULL,
  `nama_masjid` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `foto` varchar(50) NOT NULL,
  `informasi` varchar(100) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_masjid`
--

INSERT INTO `tb_masjid` (`id_masjid`, `nama_masjid`, `alamat`, `kelurahan`, `kecamatan`, `latitude`, `longitude`, `foto`, `informasi`, `createdAt`, `updatedAt`) VALUES
(1, 'fgfg', 'gfg', 'fgfg', 'fgfg', 3434, 3434, 'foto.png', 'dfdf', '2021-06-17 05:05:50', '2021-06-17 05:05:50'),
(2, 'sdsdsd', 'sdsd', 'sdsd', 'sdsd', 1212, 1212, 'Flat.png', 'dsdsd', '2021-06-17 16:41:59', '2021-06-17 16:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penginapan`
--

CREATE TABLE `tb_penginapan` (
  `id_penginapan` int(11) NOT NULL,
  `nama_penginapan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `foto` varchar(50) NOT NULL,
  `informasi` varchar(100) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penginapan`
--

INSERT INTO `tb_penginapan` (`id_penginapan`, `nama_penginapan`, `alamat`, `pemilik`, `latitude`, `longitude`, `foto`, `informasi`, `createdAt`, `updatedAt`) VALUES
(1, 'dd', 'ddd', 'dd', 1212, 121, 'foto.png', 'ffdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'sdsdsd', 'sdsdsd', 'sdsd', 22323, 232323, 'Flat.png', 'dsdsdd', '2021-06-17 16:43:21', '2021-06-17 16:43:21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_spbu`
--

CREATE TABLE `tb_spbu` (
  `id_spbu` int(11) NOT NULL,
  `nama_spbu` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `foto` varchar(50) NOT NULL,
  `informasi` varchar(100) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_spbu`
--

INSERT INTO `tb_spbu` (`id_spbu`, `nama_spbu`, `alamat`, `kelurahan`, `kecamatan`, `latitude`, `longitude`, `foto`, `informasi`, `createdAt`, `updatedAt`) VALUES
(1, 'fgfg', 'fgfg', 'fgfg', 'gfg', 5454, 4545, 'foto.png', 'ffg', '2021-06-17 05:06:36', '2021-06-17 05:06:36'),
(2, '3233', 'esdsd', 'sdsd', 'dsd', 2323, 2323, 'Flat.png', 'dsdsdsd', '2021-06-17 16:43:39', '2021-06-17 16:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `tb_travel`
--

CREATE TABLE `tb_travel` (
  `id_travel` int(11) NOT NULL,
  `nama_travel` varchar(50) NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `foto` varchar(50) NOT NULL,
  `informasi` varchar(100) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_travel`
--

INSERT INTO `tb_travel` (`id_travel`, `nama_travel`, `pemilik`, `alamat`, `latitude`, `longitude`, `foto`, `informasi`, `createdAt`, `updatedAt`) VALUES
(1, 'gfg', 'gfg', 'fgfg', 434, 3434, 'foto.png', '434', '2021-06-17 05:06:50', '2021-06-17 05:06:50'),
(2, 'sdsds', 'sdsd', 'sdsd', 2323, 232, 'Flat.png', 'sdsds', '2021-06-17 16:43:56', '2021-06-17 16:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `kategori` enum('Wisata Sejarah','Wisata Kuliner','Wisata Buatan','Wisata Alam','Wisata Religi','Wisata Budaya') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_wisata`, `nama_wisata`, `kategori`, `alamat`, `kelurahan`, `kecamatan`, `foto`, `latitude`, `longitude`, `createdAt`, `updatedAt`) VALUES
(1, 'sdsd', 'Wisata Sejarah', 'sdsd', 'sdsd', 'sdsd', 'foto.png', 2323, 2323, '2021-06-17 05:02:23', '2021-06-17 05:02:23'),
(2, 'dsdsdsd', 'Wisata Kuliner', 'sdsdd', 'sdsd', 'dsdsd', 'Flat.png', 2323, 2323, '2021-06-17 16:42:24', '2021-06-17 16:42:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_atm`
--
ALTER TABLE `tb_atm`
  ADD PRIMARY KEY (`id_atm`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `tb_masjid`
--
ALTER TABLE `tb_masjid`
  ADD PRIMARY KEY (`id_masjid`);

--
-- Indexes for table `tb_penginapan`
--
ALTER TABLE `tb_penginapan`
  ADD PRIMARY KEY (`id_penginapan`);

--
-- Indexes for table `tb_spbu`
--
ALTER TABLE `tb_spbu`
  ADD PRIMARY KEY (`id_spbu`);

--
-- Indexes for table `tb_travel`
--
ALTER TABLE `tb_travel`
  ADD PRIMARY KEY (`id_travel`);

--
-- Indexes for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_atm`
--
ALTER TABLE `tb_atm`
  MODIFY `id_atm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_masjid`
--
ALTER TABLE `tb_masjid`
  MODIFY `id_masjid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_penginapan`
--
ALTER TABLE `tb_penginapan`
  MODIFY `id_penginapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_spbu`
--
ALTER TABLE `tb_spbu`
  MODIFY `id_spbu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_travel`
--
ALTER TABLE `tb_travel`
  MODIFY `id_travel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
