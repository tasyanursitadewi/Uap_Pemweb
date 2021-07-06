-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 10:26 PM
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
-- Table structure for table `keluar`
--

CREATE TABLE `keluar` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `ukuran` varchar(5) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keluar`
--

INSERT INTO `keluar` (`id`, `tanggal`, `nama`, `jenis`, `ukuran`, `harga`, `jumlah`, `total_harga`) VALUES
(1, '2021-06-30', 'Mukena Mutiara', 'Mukena', 'XL', 150000, 2, 300000),
(2, '2021-06-27', 'Training', 'Baju Olahraga', 'M', 50000, 1, 50000),
(6, '2021-07-02', 'ataraxiaa', 'Rok', 'M', 50000, 1, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `ukuran` varchar(5) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`id`, `tanggal`, `nama`, `jenis`, `ukuran`, `harga`, `jumlah`, `total_harga`) VALUES
(1, '2021-04-30', 'Batik Wanita Modern Monalisa', 'Baju', 'L', 59000, 5, 295000),
(2, '2021-06-27', 'Training', 'Baju Olahraga', 'M', 50000, 1, 50000),
(3, '2021-03-07', 'koko Kurta Dewasa lengan panjang', 'Baju Muslim', 'M', 70000, 5, 350000),
(4, '2021-05-25', 'Koko Kurta Dewasa lengan panjang', 'Baju Muslim', 'L', 75000, 7, 525000),
(5, '2021-07-01', 'Koko Kurta Dewasa lengan panjang', 'Baju Muslim', 'XL', 78000, 4, 312000),
(6, '2021-07-05', 'Fichino Denim Pants', 'Celana', 'L', 125000, 3, 375000),
(7, '2021-06-15', 'Hoodie Pria Purpose World Tour', 'Hoodie', 'XL', 102000, 5, 510000),
(8, '2021-04-07', 'Mukena Katun Polos Rajut', 'Mukena', 'XL', 81000, 10, 810000),
(9, '2021-05-09', 'Gamis Alesha Cantik', 'Baju Muslim', 'XL', 75000, 5, 375000),
(15, '2021-06-28', 'Busana Pernikahan', 'Baju Pengantin', 'M', 280000, 1, 280000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'adminkita'),
(2, 'admin', 'adminkita');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keluar`
--
ALTER TABLE `keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keluar`
--
ALTER TABLE `keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `masuk`
--
ALTER TABLE `masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
