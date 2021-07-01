-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 02:54 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `ukuran` varchar(5) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`id`, `nama`, `jenis`, `ukuran`, `harga`, `jumlah`, `total_harga`) VALUES
(1, 'Batik Wanita Modern Monalisa', 'Baju', 'L', 'Rp59.000', 5, 'Rp295.000'),
(2, 'Batik Wanita Modern Monalisa', 'Baju', 'XL', 'Rp59.000', 5, 'Rp295.000'),
(3, 'koko Kurta Dewasa lengan panjang', 'Baju Muslim', 'M', 'Rp70.000', 5, 'Rp350.000'),
(4, 'koko Kurta Dewasa lengan panjang', 'Baju Muslim', 'L', 'Rp75.000', 7, 'Rp525.000'),
(5, 'Koko Kurta Dewasa lengan panjang', 'Baju Muslim', 'XL', 'Rp78.000', 4, 'Rp312.000'),
(6, 'Fichino Denim Pants', 'Celana Jeans', 'M', 'Rp125.000', 3, 'Rp375.000'),
(7, 'Hoodie Pria Purpose World Tour', 'Hoodie', 'XL', 'Rp102.000', 5, 'Rp510.000'),
(8, 'Mukena Katun Polos Rajut', 'Mukena', 'XL', 'Rp81.000', 10, 'Rp810.000'),
(9, 'Gamis Alesha', 'Baju Muslim', 'XL', 'Rp47.000', 8, 'Rp376.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masuk`
--
ALTER TABLE `masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE `keluar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `ukuran` varchar(5) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masuk`
--

INSERT INTO `keluar` (`id`, `nama`, `jenis`, `ukuran`, `harga`, `jumlah`, `total_harga`) VALUES
(1, 'Batik Wanita Modern Monalisa', 'Baju', 'L', 'Rp59.000', 2, 'Rp118.000'),
(9, 'Gamis Alesha', 'Baju Muslim', 'XL', 'Rp47.000', 3, 'Rp141.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masuk`
--
ALTER TABLE `keluar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masuk`
--
ALTER TABLE `keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;