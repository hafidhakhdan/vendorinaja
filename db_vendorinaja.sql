-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 12:56 AM
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
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(5) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `custom_produk`
--

CREATE TABLE `custom_produk` (
  `id_custom` int(5) NOT NULL,
  `bahan_produk` varchar(20) NOT NULL,
  `warna_produk` varchar(20) NOT NULL,
  `gambar_design` varchar(255) NOT NULL,
  `ukuranS` int(5) NOT NULL,
  `ukuranM` int(5) NOT NULL,
  `ukuranL` int(5) NOT NULL,
  `ukuranXL` int(5) NOT NULL,
  `id_user` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custom_produk`
--

INSERT INTO `custom_produk` (`id_custom`, `bahan_produk`, `warna_produk`, `gambar_design`, `ukuranS`, `ukuranM`, `ukuranL`, `ukuranXL`, `id_user`) VALUES
(41, 'bahan satu', 'maroon', 'image.png', 2, 0, 0, 0, 19),
(42, 'bahan dua', 'orange', '0.jpg', 3, 2, 5, 1, 19);

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
  `id_custom` int(5) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_pembayaran` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_custom`, `bukti_pembayaran`, `id_user`, `id_pembayaran`) VALUES
(0, 'C:\\xampp\\tmp\\phpB0E9.tmp', 19, 1),
(0, 'C:\\xampp\\tmp\\phpD27C.tmp', 19, 2);

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
  `id_transaksi` int(5) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jasa_pengiriman` varchar(5) NOT NULL,
  `status_pembayaran` varchar(15) NOT NULL,
  `id_user` int(5) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `jumlah`, `jasa_pengiriman`, `status_pembayaran`, `id_user`, `created_at`) VALUES
(5, 0, 'JNT', 'Lunas', 19, '0000-00-00'),
(6, 0, 'JNT', 'Lunas', 19, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password`, `email`, `level`) VALUES
(19, '$2y$10$.l0xJKqLhcakeLwgCZi4ReGt4ysWO/J/shIwyHmI9gvkrTHl5e2Ti', 'mahmud@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indexes for table `custom_produk`
--
ALTER TABLE `custom_produk`
  ADD PRIMARY KEY (`id_custom`),
  ADD KEY `tes_id` (`id_user`);

--
-- Indexes for table `detail_produk`
--
ALTER TABLE `detail_produk`
  ADD PRIMARY KEY (`id_det_produk`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

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
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `custom_produk`
--
ALTER TABLE `custom_produk`
  MODIFY `id_custom` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `id_user_checkout` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `custom_produk`
--
ALTER TABLE `custom_produk`
  ADD CONSTRAINT `tes_id` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
