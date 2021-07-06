-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2021 pada 06.30
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

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
-- Struktur dari tabel `masuk`
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
-- Dumping data untuk tabel `masuk`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'adminkita');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `masuk`
--
ALTER TABLE `masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
