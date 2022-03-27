-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 05:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_peralatan_basket`
--

-- --------------------------------------------------------

--
-- Table structure for table `kode`
--

CREATE TABLE `kode` (
  `id_kode` int(11) NOT NULL,
  `kode_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kode`
--

INSERT INTO `kode` (`id_kode`, `kode_barang`) VALUES
(1, 'S'),
(2, 'BB'),
(3, 'J');

-- --------------------------------------------------------

--
-- Table structure for table `table_barang`
--

CREATE TABLE `table_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `nomer_kode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_barang`
--

INSERT INTO `table_barang` (`id_barang`, `nama_barang`, `harga_barang`, `stok_barang`, `nomer_kode`) VALUES
(3, 'Bole Basket', 100000, 60, 2),
(4, 'Sepatu', 200000, 50, 1),
(5, 'Jersey Chicago Bulls', 9000000, 50, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kode`
--
ALTER TABLE `kode`
  ADD PRIMARY KEY (`id_kode`);

--
-- Indexes for table `table_barang`
--
ALTER TABLE `table_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD UNIQUE KEY `nomer_kode` (`nomer_kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kode`
--
ALTER TABLE `kode`
  MODIFY `id_kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_barang`
--
ALTER TABLE `table_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
