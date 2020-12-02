-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 01:42 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vendorinaja`
--

-- --------------------------------------------------------

--
-- Table structure for table `custom_produk`
--

CREATE TABLE `custom_produk` (
  `id_custom` int(5) NOT NULL,
  `bahan_produk` varchar(20) NOT NULL,
  `warna_produk` varchar(20) NOT NULL,
  `gambar_design` blob NOT NULL,
  `ukuranS` int(5) NOT NULL,
  `ukuranM` int(5) NOT NULL,
  `ukuranL` int(5) NOT NULL,
  `ukuranXL` int(5) NOT NULL,
  `id_transaksi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_produk`
--

CREATE TABLE `detail_produk` (
  `id_produk` varchar(5) NOT NULL,
  `id_det_produk` varchar(5) NOT NULL,
  `bahan_produk` varchar(50) NOT NULL,
  `deskripsi_bahan` longtext NOT NULL,
  `gambar` blob NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_produk`
--

INSERT INTO `detail_produk` (`id_produk`, `id_det_produk`, `bahan_produk`, `deskripsi_bahan`, `gambar`, `harga`) VALUES
('1', '1', 'Cotton 30s', 'halus beud', '', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_transaksi` varchar(5) NOT NULL,
  `id_pembayaran` varchar(5) NOT NULL,
  `metode_pembayaran` varchar(15) NOT NULL,
  `dp` int(10) NOT NULL,
  `id_custom` int(5) NOT NULL,
  `total_harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(5) NOT NULL,
  `kategori_produk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `kategori_produk`) VALUES
('1', 'PDH'),
('2', 'Kaos'),
('3', 'Jaket');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(5) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_det_produk` varchar(5) NOT NULL,
  `nama_pemesan` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status_pembayaran` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password`, `email`) VALUES
(1, '', 'hafidh606@gmail.com'),
(2, '', 'kita@mail.com'),
(3, '$2y$10$5mGtDujIAAc8h', 'havdasd@gmail.com'),
(4, '$2y$10$TiWHk4wzXbaRg', 'fasfadasd@gmail.com'),
(5, '$2y$10$S/lT9hYK1e9wE', 'gmail@gmail.com'),
(6, '$2y$10$6vVZZOb0ZToiZ', 'kitabisa@gmail.com'),
(7, '$2y$10$iwvk8o18bbZPD', 'kitakita@gmail.com'),
(8, '$2y$10$ktQ2KeRr6uf8k', 'satusatu@gmail.com'),
(9, '$2y$10$NpYF/M8rYVkw1', 'gokil123@gmail.com'),
(10, '$2y$10$kipxDgnQH2EI3', 'vendor@gmail.com'),
(13, '$2y$10$y1fkVfzhYxcLoql3/3sKqeInkhX5TRgtH0eKuhdWqY4a5PpbQkAI.', 'huhahe@gmail.com'),
(14, '$2y$10$46WgClAva1Du7SyEGQ1pCewI9UVifvYqCoOKo1/L5oWrPf8SYI7GS', 'bangsat@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custom_produk`
--
ALTER TABLE `custom_produk`
  ADD PRIMARY KEY (`id_custom`);

--
-- Indexes for table `detail_produk`
--
ALTER TABLE `detail_produk`
  ADD PRIMARY KEY (`id_det_produk`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_det_produk` (`id_det_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custom_produk`
--
ALTER TABLE `custom_produk`
  MODIFY `id_custom` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `id_transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `id_det_produk` FOREIGN KEY (`id_det_produk`) REFERENCES `detail_produk` (`id_det_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
