-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2024 at 07:41 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appkasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE `bahan` (
  `id_bahan` int NOT NULL,
  `bahan` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bahan`
--

INSERT INTO `bahan` (`id_bahan`, `bahan`) VALUES
(1, 'Katun');

-- --------------------------------------------------------

--
-- Table structure for table `detail_hutang`
--

CREATE TABLE `detail_hutang` (
  `id_detail_hutang` int NOT NULL,
  `nota` varchar(50) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL DEFAULT '0',
  `tanggal` date DEFAULT NULL,
  `nominal` decimal(20,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `detail_hutang`
--

INSERT INTO `detail_hutang` (`id_detail_hutang`, `nota`, `username`, `tanggal`, `nominal`) VALUES
(1, '20241117007', 'Admin', '2024-11-17', '40000.000000'),
(2, '20241117008', 'Admin', '2024-11-17', '40000.000000'),
(3, '20241117009', 'Admin', '2024-11-17', '50000.000000'),
(4, '20241117009', 'Admin', '2024-11-17', '50000.000000'),
(5, '20241117010', 'Admin', '2024-11-17', '50000.000000'),
(6, '20241118001', 'Admin', '2024-11-18', '100000.000000'),
(7, '20241119002', 'Admin', '2024-11-19', '50000.000000');

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `id_detail_penjualan` int NOT NULL,
  `nota` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `harga_jual` decimal(20,6) DEFAULT NULL,
  `harga_beli` decimal(20,6) DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `id_produk` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`id_detail_penjualan`, `nota`, `harga_jual`, `harga_beli`, `jumlah`, `id_produk`) VALUES
(1, '202411171', NULL, '50000.000000', 4, 3),
(2, '202411171', '70000.000000', '50000.000000', 4, 3),
(3, '202411171', '70000.000000', '50000.000000', NULL, 3),
(4, '202411171', '70000.000000', '50000.000000', NULL, 3),
(5, '202411171', '70000.000000', '50000.000000', 8, 3),
(6, '202411171', '70000.000000', '50000.000000', 8, 3),
(7, '202411171', '70000.000000', '50000.000000', 4, 3),
(8, '202411171', '70000.000000', '50000.000000', 4, 3),
(9, '202411171', '50000.000000', '45000.000000', 3, 1),
(10, '202411172', '50000.000000', '45000.000000', 1, 1),
(11, '202411173', '50000.000000', '45000.000000', 2, 1),
(12, '202411173', '70000.000000', '50000.000000', 1, 3),
(13, '202411174', '70000.000000', '50000.000000', 1, 3),
(14, '202411175', '70000.000000', '50000.000000', 1, 3),
(15, '202411176', '50000.000000', '45000.000000', 1, 1),
(16, '20241117007', '50000.000000', '45000.000000', 1, 1),
(17, '20241117008', '50000.000000', '45000.000000', 1, 1),
(18, '20241117009', '70000.000000', '50000.000000', 1, 3),
(19, '20241117010', '70000.000000', '50000.000000', 1, 3),
(20, '20241117011', '50000.000000', '45000.000000', 1, 1),
(21, '20241118001', '50000.000000', '45000.000000', 2, 1),
(22, '20241118001', '70000.000000', '50000.000000', 1, 3),
(23, '20241118002', '70000.000000', '50000.000000', 2, 3),
(24, '20241119001', '70000.000000', '50000.000000', 2, 3),
(25, '20241119002', '70000.000000', '50000.000000', 1, 3),
(26, '20241119003', '50000.000000', '45000.000000', 1, 1),
(27, '20241120001', '50000.000000', '45000.000000', 1, 1),
(28, '20241120002', '70000.000000', '50000.000000', 1, 3),
(29, '20241121001', '70000.000000', '50000.000000', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `hutang`
--

CREATE TABLE `hutang` (
  `id_hutang` int NOT NULL,
  `tagihan` decimal(15,0) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT '0',
  `nota` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hutang`
--

INSERT INTO `hutang` (`id_hutang`, `tagihan`, `status`, `nota`) VALUES
(1, '10000', 'Belum Lunas', '20241117007'),
(2, '10000', 'Belum Lunas', '20241117008'),
(3, '20000', 'Belum Lunas', '20241117009'),
(4, '20000', 'Belum Lunas', '20241117009'),
(5, '20000', 'Belum Lunas', '20241117010'),
(6, '70000', 'Belum Lunas', '20241118001'),
(7, '20000', 'Belum Lunas', '20241119002');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int NOT NULL,
  `jenis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis`) VALUES
(1, 'Celana'),
(2, 'Baju'),
(3, 'Sarung');

-- --------------------------------------------------------

--
-- Table structure for table `lengan`
--

CREATE TABLE `lengan` (
  `id_lengan` int NOT NULL,
  `lengan` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lengan`
--

INSERT INTO `lengan` (`id_lengan`, `lengan`) VALUES
(1, 'Lengan Panjang'),
(2, 'Lengan Pendek'),
(3, 'Lengan 3/4');

-- --------------------------------------------------------

--
-- Table structure for table `log_stock`
--

CREATE TABLE `log_stock` (
  `id_log` int NOT NULL,
  `id_produk` int NOT NULL DEFAULT '0',
  `jumlah_sebelum` int NOT NULL DEFAULT '0',
  `jumlah_sesudah` int NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL DEFAULT '0',
  `tanggal` date DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `log_stock`
--

INSERT INTO `log_stock` (`id_log`, `id_produk`, `jumlah_sebelum`, `jumlah_sesudah`, `username`, `tanggal`, `keterangan`) VALUES
(1, 3, 4, 0, 'Admin', '2024-11-17', 'Terjual 4 . dengan nomor nota 202411171'),
(2, 1, 12, 9, 'Admin', '2024-11-17', 'Terjual 3 . dengan nomor nota 202411171'),
(3, 1, 9, 8, 'Admin', '2024-11-17', 'Terjual 1 . dengan nomor nota 202411172'),
(4, 1, 8, 6, 'Admin', '2024-11-17', 'Terjual 2 . dengan nomor nota 202411173'),
(5, 3, 6, 5, 'Admin', '2024-11-17', 'Terjual 1 . dengan nomor nota 202411173'),
(6, 3, 5, 4, 'Admin', '2024-11-17', 'Terjual 1 . dengan nomor nota 202411174'),
(7, 3, 4, 3, 'Admin', '2024-11-17', 'Terjual 1 . dengan nomor nota 202411175'),
(8, 1, 6, 5, 'Admin', '2024-11-17', 'Terjual 1 . dengan nomor nota 202411176'),
(9, 1, 5, 4, 'Admin', '2024-11-17', 'Terjual 1 dengan nota 20241117007'),
(10, 1, 4, 3, 'Admin', '2024-11-17', 'Terjual 1 dengan nota 20241117008'),
(11, 3, 3, 2, 'Admin', '2024-11-17', 'Terjual 1 dengan nota 20241117009'),
(12, 3, 2, 1, 'Admin', '2024-11-17', 'Terjual 1 dengan nota 20241117010'),
(13, 1, 3, 2, 'Admin', '2024-11-17', 'Terjual 1 dengan nota 20241117011'),
(14, 1, 8, 6, 'Admin', '2024-11-18', 'Terjual 2 dengan nota 20241118001'),
(15, 3, 9, 8, 'Admin', '2024-11-18', 'Terjual 1 dengan nota 20241118001'),
(16, 3, 8, 6, 'Admin', '2024-11-18', 'Terjual 2 dengan nota 20241118002'),
(17, 3, 6, 4, 'Admin', '2024-11-19', 'Terjual 2 dengan nota 20241119001'),
(18, 3, 4, 3, 'Admin', '2024-11-19', 'Terjual 1 dengan nota 20241119002'),
(19, 1, 6, 5, 'Admin', '2024-11-19', 'Terjual 1 dengan nota 20241119003'),
(20, 1, 5, 4, 'Admin', '2024-11-20', 'Terjual 1 dengan nota 20241120001'),
(21, 3, 11, 10, 'Admin', '2024-11-20', 'Terjual 1 dengan nota 20241120002'),
(22, 3, 10, 9, 'Admin', '2024-11-21', 'Terjual 1 dengan nota 20241121001');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `id_model` int NOT NULL,
  `model` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id_model`, `model`) VALUES
(1, 'Celana Tempur'),
(2, 'Jubah');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int NOT NULL,
  `nominal` decimal(20,6) NOT NULL DEFAULT '0.000000',
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `nominal`, `keterangan`, `tanggal`, `username`) VALUES
(1, '1000000.000000', 'Beli Kursi', '2024-11-21', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int NOT NULL,
  `nota` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `tanggal` date NOT NULL,
  `total_harga` decimal(20,6) NOT NULL DEFAULT '0.000000',
  `bayar` decimal(20,6) NOT NULL DEFAULT '0.000000',
  `metode_pembayaran` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `username` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bukti_pembayaran` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `nota`, `tanggal`, `total_harga`, `bayar`, `metode_pembayaran`, `status`, `username`, `bukti_pembayaran`) VALUES
(2, '202411172', '2024-11-17', '50000.000000', '50000.000000', 'Tunai', 'Selesai', 'Admin', '202411172.jpg'),
(3, '202411173', '2024-11-17', '170000.000000', '180000.000000', 'Tunai', 'Selesai', 'Admin', '202411173.jpg'),
(4, '202411174', '2024-11-17', '70000.000000', '0.000000', 'Tunai', 'Belum Lunas', 'Admin', '202411174.jpg'),
(5, '202411175', '2024-11-17', '70000.000000', '50000.000000', 'Tunai', 'Belum Lunas', 'Admin', '202411175.jpg'),
(6, '202411176', '2024-11-17', '50000.000000', '10000.000000', 'Tunai', 'Belum Lunas', 'Admin', '202411176.jpg'),
(7, '20241117007', '2024-11-17', '50000.000000', '40000.000000', 'Tunai', 'Belum Lunas', 'Admin', '20241117007.jpg'),
(8, '20241117008', '2024-11-17', '50000.000000', '40000.000000', 'Tunai', 'Belum Lunas', 'Admin', '20241117008.jpg'),
(9, '20241117009', '2024-11-17', '70000.000000', '50000.000000', 'Tunai', 'Belum Lunas', 'Admin', '20241117009.jpg'),
(10, '20241117010', '2024-11-17', '70000.000000', '50000.000000', 'Tunai', 'Belum Lunas', 'Admin', '20241117010.jpg'),
(11, '20241117011', '2024-11-17', '50000.000000', '100000.000000', 'Tunai', 'Selesai', 'Admin', '20241117011.jpg'),
(12, '20241118001', '2024-11-18', '170000.000000', '100000.000000', 'Tunai', 'Belum Lunas', 'Admin', '20241118001.jpg'),
(13, '20241118002', '2024-11-18', '140000.000000', '140000.000000', 'Tunai', 'Selesai', 'Admin', '20241118002.jpg'),
(14, '20241119001', '2024-11-19', '140000.000000', '140000.000000', 'Tunai', 'Selesai', 'Admin', '20241119001.jpg'),
(15, '20241119002', '2024-11-19', '70000.000000', '50000.000000', 'Tunai', 'Belum Lunas', 'Admin', '20241119002.jpg'),
(16, '20241119003', '2024-11-19', '50000.000000', '50000.000000', 'Tunai', 'Selesai', 'Admin', '20241119003.jpg'),
(17, '20241120001', '2024-11-20', '50000.000000', '50000.000000', 'Tunai', 'Selesai', 'Admin', '20241120001.jpg'),
(18, '20241120002', '2024-11-20', '70000.000000', '70000.000000', 'Tunai', 'Selesai', 'Admin', '20241120002.jpg'),
(19, '20241121001', '2024-11-21', '70000.000000', '70000.000000', 'Tunai', 'Selesai', 'Admin', '20241121001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int NOT NULL,
  `nama` varchar(255) NOT NULL DEFAULT '0',
  `keterangan` text NOT NULL,
  `id_model` int NOT NULL DEFAULT '0',
  `id_size` int NOT NULL DEFAULT '0',
  `id_bahan` int NOT NULL DEFAULT '0',
  `id_warna` int NOT NULL DEFAULT '0',
  `id_jenis` int NOT NULL DEFAULT '0',
  `id_lengan` int NOT NULL DEFAULT '0',
  `stock` int NOT NULL DEFAULT '0',
  `harga` varchar(50) NOT NULL DEFAULT '0',
  `harga_beli` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `kode_barang` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `keterangan`, `id_model`, `id_size`, `id_bahan`, `id_warna`, `id_jenis`, `id_lengan`, `stock`, `harga`, `harga_beli`, `kode_barang`) VALUES
(1, 'Celana tempur 23', 'ini adalah celana tempur', 1, 1, 1, 5, 2, 1, 4, '50000', '45000', 'CLN23'),
(3, 'Baju koko dewasa', 'ini baju koko dewasa', 2, 1, 1, 4, 2, 1, 9, '70000', '50000', 'BJD01');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id_size` int NOT NULL,
  `size` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id_size`, `size`) VALUES
(1, 'L'),
(2, 'XL'),
(3, 'M'),
(4, 'XXL');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id_temp` int NOT NULL,
  `id_user` int NOT NULL DEFAULT '0',
  `jumlah` int NOT NULL DEFAULT '0',
  `id_produk` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `username` varchar(25) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `role` varchar(30) NOT NULL DEFAULT '0',
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `role`, `alamat`) VALUES
(2, 'Admin', 'Admin', '$2y$10$wWYTgJ2p.UNG6MOrLCi0U.5h588gLMNn0dtt8kBtFLYk/vWz0hca2', 'Admin', 'Indonesia'),
(4, 'Nama', 'adasd', '$2y$10$OP7zM2kNByxWZb0Bsm5zFuzDX3vggEXLuMXvBb0qSUriAngM30dLO', 'Petugas', 'Alamat');

-- --------------------------------------------------------

--
-- Table structure for table `warna`
--

CREATE TABLE `warna` (
  `id_warna` int NOT NULL,
  `warna` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `warna`
--

INSERT INTO `warna` (`id_warna`, `warna`) VALUES
(1, 'Kuning'),
(2, 'Merah'),
(3, 'Hijau'),
(4, 'Biru'),
(5, 'Abu-abu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `detail_hutang`
--
ALTER TABLE `detail_hutang`
  ADD PRIMARY KEY (`id_detail_hutang`);

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`id_detail_penjualan`) USING BTREE,
  ADD KEY `id` (`id_produk`);

--
-- Indexes for table `hutang`
--
ALTER TABLE `hutang`
  ADD PRIMARY KEY (`id_hutang`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `lengan`
--
ALTER TABLE `lengan`
  ADD PRIMARY KEY (`id_lengan`);

--
-- Indexes for table `log_stock`
--
ALTER TABLE `log_stock`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `produk` (`id_produk`) USING BTREE;

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id_model`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_model` (`id_model`),
  ADD KEY `id_size` (`id_size`),
  ADD KEY `id_bahan` (`id_bahan`),
  ADD KEY `id_warna` (`id_warna`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_lengan` (`id_lengan`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id_size`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id_temp`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `warna`
--
ALTER TABLE `warna`
  ADD PRIMARY KEY (`id_warna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan`
--
ALTER TABLE `bahan`
  MODIFY `id_bahan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_hutang`
--
ALTER TABLE `detail_hutang`
  MODIFY `id_detail_hutang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `id_detail_penjualan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `hutang`
--
ALTER TABLE `hutang`
  MODIFY `id_hutang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lengan`
--
ALTER TABLE `lengan`
  MODIFY `id_lengan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log_stock`
--
ALTER TABLE `log_stock`
  MODIFY `id_log` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `id_model` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id_size` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id_temp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `warna`
--
ALTER TABLE `warna`
  MODIFY `id_warna` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `id` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `log_stock`
--
ALTER TABLE `log_stock`
  ADD CONSTRAINT `produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `id_bahan` FOREIGN KEY (`id_bahan`) REFERENCES `bahan` (`id_bahan`),
  ADD CONSTRAINT `id_jenis` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`),
  ADD CONSTRAINT `id_lengan` FOREIGN KEY (`id_lengan`) REFERENCES `lengan` (`id_lengan`),
  ADD CONSTRAINT `id_model` FOREIGN KEY (`id_model`) REFERENCES `model` (`id_model`),
  ADD CONSTRAINT `id_size` FOREIGN KEY (`id_size`) REFERENCES `size` (`id_size`),
  ADD CONSTRAINT `id_warna` FOREIGN KEY (`id_warna`) REFERENCES `warna` (`id_warna`);

--
-- Constraints for table `temp`
--
ALTER TABLE `temp`
  ADD CONSTRAINT `id_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
