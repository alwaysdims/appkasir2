-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 12, 2025 at 02:31 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.7

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
-- Table structure for table `cicilan_pengeluaran`
--

CREATE TABLE `cicilan_pengeluaran` (
  `id_cicilan` int NOT NULL,
  `nominal` decimal(20,6) NOT NULL DEFAULT '0.000000',
  `tagihan` decimal(20,6) NOT NULL DEFAULT '0.000000',
  `tanggal` date NOT NULL,
  `id_pengeluaran` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(1, '20241117007', 'Admin', '2024-11-17', '50000.000000'),
(2, '20241117008', 'Admin', '2024-11-17', '40000.000000'),
(3, '20241117009', 'Admin', '2024-11-17', '50000.000000'),
(4, '20241117009', 'Admin', '2024-11-17', '50000.000000'),
(5, '20241117010', 'Admin', '2024-11-17', '70000.000000'),
(6, '20241118001', 'Admin', '2024-11-18', '170000.000000'),
(7, '20241119002', 'Admin', '2024-11-19', '70000.000000'),
(8, '20241217001', 'Admin', '2024-12-17', '67.000000'),
(9, '20250224001', 'Admin', '2025-02-24', '119998.000000'),
(10, '20250224001', 'Admin', '2025-02-24', '119998.000000'),
(11, '20250224001', 'Admin', '2025-02-24', '119998.000000');

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
(2, '202411171', '70000.000000', '50000.000000', 4, 3),
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
(29, '20241121001', '70000.000000', '50000.000000', 1, 3),
(30, '20241125001', '70000.000000', '50000.000000', 1, 3),
(31, '20241128001', '70000.000000', '50000.000000', 2, 3),
(32, '20241216001', '50000.000000', '45000.000000', 1, 1),
(33, '20241216001', '70000.000000', '50000.000000', 1, 3),
(34, '20241217001', '67.000000', '8.000000', 1, 4),
(35, '20241217002', '67.000000', '8.000000', 1, 4),
(36, '20241218001', '50000.000000', '45000.000000', 3, 1),
(37, '20250107001', '50000.000000', '45000.000000', 1, 1),
(38, '20250203001', '50000.000000', '45000.000000', 1, 1),
(39, '20250203002', '50000.000000', '45000.000000', 2, 1),
(40, '20250203002', '70000.000000', '50000.000000', 1, 3),
(41, '20250224001', '70000.000000', '50000.000000', 1, 3),
(42, '20250224001', '70000.000000', '50000.000000', 1, 3),
(43, '20250224001', '70000.000000', '50000.000000', 1, 3);

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
(1, '0', 'Selesai', '20241117007'),
(2, '10000', 'Belum Lunas', '20241117008'),
(3, '20000', 'Belum Lunas', '20241117009'),
(4, '20000', 'Belum Lunas', '20241117009'),
(5, '0', 'Selesai', '20241117010'),
(6, '0', 'Selesai', '20241118001'),
(7, '0', 'Selesai', '20241119002'),
(8, '0', 'Selesai', '20241217001'),
(9, '0', 'Selesai', '20250224001'),
(10, '0', 'Selesai', '20250224001'),
(11, '0', 'Selesai', '20250224001');

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
(3, 'Sarung'),
(4, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int NOT NULL,
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `alamat` varchar(70) NOT NULL DEFAULT '0',
  `no_telp` varchar(15) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `nama`, `email`, `alamat`, `no_telp`) VALUES
(1, 'Jaya Abadi', 'jayaabadi123@gmail.com', 'Sukoharjo', '+629865896658');

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
-- Table structure for table `log_cicilanhutang`
--

CREATE TABLE `log_cicilanhutang` (
  `id_cicilan` int NOT NULL,
  `nominal` decimal(20,6) NOT NULL DEFAULT '0.000000',
  `nota` varchar(50) NOT NULL DEFAULT '0',
  `tanggal` date NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `tagihanHutang` decimal(20,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `log_cicilanhutang`
--

INSERT INTO `log_cicilanhutang` (`id_cicilan`, `nominal`, `nota`, `tanggal`, `username`, `tagihanHutang`) VALUES
(1, '25000.000000', '20241118001', '2024-11-25', 'Admin', '0.000000'),
(2, '5000.000000', '20241118001', '2024-11-25', 'Admin', '0.000000'),
(3, '2000.000000', '20241118001', '2024-11-25', 'Admin', '0.000000'),
(4, '18000.000000', '20241118001', '2024-11-25', 'Admin', '0.000000'),
(5, '1000.000000', '20241117007', '2024-11-25', 'Admin', '0.000000'),
(6, '9000.000000', '20241117007', '2024-11-26', 'Admin', '0.000000'),
(7, '1000.000000', '20241117010', '2024-11-26', 'Admin', '19000.000000'),
(8, '4000.000000', '20241117010', '2024-11-26', 'Admin', '15000.000000'),
(9, '15000.000000', '20241117010', '2024-11-26', 'Admin', '0.000000'),
(10, '12.000000', '20241217001', '2024-12-17', 'Admin', '43.000000'),
(11, '43.000000', '20241217001', '2025-02-24', 'Admin', '0.000000'),
(12, '69998.000000', '20250224001', '2025-02-24', 'Admin', '0.000000');

-- --------------------------------------------------------

--
-- Table structure for table `log_cicilanpengeluaran`
--

CREATE TABLE `log_cicilanpengeluaran` (
  `id_cicilanpengeluaran` int NOT NULL,
  `tagihan` decimal(20,6) NOT NULL DEFAULT '0.000000',
  `id_pengeluaran` int NOT NULL DEFAULT '0',
  `tanggal` date NOT NULL,
  `bayar` decimal(20,6) DEFAULT NULL,
  `sisa_tagihan` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `log_cicilanpengeluaran`
--

INSERT INTO `log_cicilanpengeluaran` (`id_cicilanpengeluaran`, `tagihan`, `id_pengeluaran`, `tanggal`, `bayar`, `sisa_tagihan`) VALUES
(10, '100000.000000', 7, '2024-11-26', '100000.000000', 0),
(11, '10000.000000', 8, '2024-11-26', '10000.000000', 0),
(12, '5000.000000', 9, '2024-11-26', '5000.000000', 0),
(13, '200000.000000', 10, '2024-11-26', '1000000.000000', 800000),
(46, '100000.000000', 10, '2024-11-26', '1000000.000000', 700000),
(59, '100000.000000', 10, '2024-12-02', '1000000.000000', 600000),
(60, '600000.000000', 10, '2024-12-02', '1000000.000000', 0),
(70, '20000.000000', 15, '2025-01-07', '70000.000000', 50000),
(71, '1000.000000', 15, '2025-01-07', '70000.000000', 49000),
(72, '49000.000000', 15, '2025-01-07', '70000.000000', 0),
(73, '50000.000000', 16, '2025-02-24', '100000.000000', 50000),
(74, '50000.000000', 16, '2025-02-24', '100000.000000', 0);

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
(23, 3, 12, 12, 'Admin', '2024-11-25', 'Stock diubah dari 12 menjadi 12 oleh Admin'),
(24, 3, 12, 13, 'Admin', '2024-11-25', 'Stock diubah dari 12 menjadi 13 oleh Admin'),
(25, 3, 13, 12, 'Admin', '2024-11-25', 'Terjual 1 dengan nota 20241125001'),
(26, 1, 6, 8, 'Admin', '2024-11-25', 'Stock diubah dari 6 menjadi 8 oleh Admin'),
(27, 3, 12, 10, 'Admin', '2024-11-28', 'Terjual 2 dengan nota #20241128001'),
(28, 1, 8, 7, 'Admin', '2024-12-16', 'Terjual 1 dengan nota #20241216001'),
(29, 3, 10, 9, 'Admin', '2024-12-16', 'Terjual 1 dengan nota #20241216001'),
(30, 4, 5, 4, 'Admin', '2024-12-17', 'Terjual 1 dengan nota #20241217001'),
(31, 4, 4, 3, 'Admin', '2024-12-17', 'Terjual 1 dengan nota #20241217002'),
(32, 1, 7, 4, 'Admin', '2024-12-18', 'Terjual 3 dengan nota #20241218001'),
(33, 1, 4, 3, 'Admin', '2025-01-07', 'Terjual 1 dengan nota #20250107001'),
(34, 1, 3, 2, 'Admin', '2025-02-03', 'Terjual 1 dengan nota #20250203001'),
(35, 1, 2, 0, 'Admin', '2025-02-03', 'Terjual 2 dengan nota #20250203002'),
(36, 3, 9, 8, 'Admin', '2025-02-03', 'Terjual 1 dengan nota #20250203002'),
(37, 3, 8, 8, 'Admin', '2025-02-11', 'Stock diubah dari 8 menjadi 8 oleh Admin'),
(38, 1, 0, 0, 'Admin', '2025-02-11', 'Stock diubah dari 0 menjadi 0 oleh Admin'),
(39, 3, 8, 7, 'Admin', '2025-02-24', 'Terjual 1 dengan nota #20250224001'),
(40, 3, 7, 6, 'Admin', '2025-02-24', 'Terjual 1 dengan nota #20250224001'),
(41, 3, 6, 5, 'Admin', '2025-02-24', 'Terjual 1 dengan nota #20250224001');

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
-- Table structure for table `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id` int NOT NULL,
  `pemasukan` decimal(20,6) NOT NULL DEFAULT '0.000000',
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int NOT NULL,
  `nominal` decimal(20,6) NOT NULL DEFAULT '0.000000',
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `metode` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `nominal`, `keterangan`, `tanggal`, `username`, `metode`, `status`) VALUES
(7, '100000.000000', 'Beli Kursi', '2024-11-26', 'Admin', 'Cash', 'Lunas'),
(8, '10000.000000', 'Beli Minuman', '2024-11-26', 'Admin', 'Cash', 'Lunas'),
(9, '5000.000000', 'Beli Roti', '2024-11-26', 'Admin', 'Cash', 'Lunas'),
(10, '1000000.000000', 'Stock Baju', '2024-11-27', 'Admin', 'Credit', 'Lunas'),
(15, '70000.000000', 'p', '2025-01-07', 'Admin', 'Credit', 'Lunas'),
(16, '100000.000000', 'beli', '2025-02-24', 'Admin', 'Credit', 'Lunas');

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
(2, '202411172', '2024-11-17', '50000.000000', '50000.000000', 'Tunai', 'Hutang', 'Admin', '202411172.jpg'),
(3, '202411173', '2024-11-17', '170000.000000', '180000.000000', 'Tunai', 'Selesai', 'Admin', '202411173.jpg'),
(4, '202411174', '2024-11-17', '70000.000000', '0.000000', 'Tunai', 'Belum Lunas', 'Admin', '202411174.jpg'),
(5, '202411175', '2024-11-17', '70000.000000', '50000.000000', 'Tunai', 'Belum Lunas', 'Admin', '202411175.jpg'),
(6, '202411176', '2024-11-17', '50000.000000', '10000.000000', 'Tunai', 'Belum Lunas', 'Admin', '202411176.jpg'),
(7, '20241117007', '2024-11-17', '50000.000000', '50000.000000', 'Tunai', 'Selesai', 'Admin', '20241117007.jpg'),
(8, '20241117008', '2024-11-17', '50000.000000', '40000.000000', 'Tunai', 'Belum Lunas', 'Admin', '20241117008.jpg'),
(9, '20241117009', '2024-11-17', '70000.000000', '50000.000000', 'Tunai', 'Belum Lunas', 'Admin', '20241117009.jpg'),
(10, '20241117010', '2024-11-17', '70000.000000', '70000.000000', 'Tunai', 'Selesai', 'Admin', '20241117010.jpg'),
(11, '20241117011', '2024-11-17', '50000.000000', '100000.000000', 'Tunai', 'Selesai', 'Admin', '20241117011.jpg'),
(12, '20241118001', '2024-11-18', '170000.000000', '170000.000000', 'Tunai', 'Selesai', 'Admin', '20241118001.jpg'),
(13, '20241118002', '2024-11-18', '140000.000000', '140000.000000', 'Tunai', 'Selesai', 'Admin', '20241118002.jpg'),
(14, '20241119001', '2024-11-19', '140000.000000', '140000.000000', 'Tunai', 'Selesai', 'Admin', '20241119001.jpg'),
(15, '20241119002', '2024-11-19', '70000.000000', '70000.000000', 'Tunai', 'Selesai', 'Admin', '20241119002.jpg'),
(16, '20241119003', '2024-11-19', '50000.000000', '50000.000000', 'Tunai', 'Selesai', 'Admin', '20241119003.jpg'),
(17, '20241120001', '2024-11-20', '50000.000000', '50000.000000', 'Tunai', 'Selesai', 'Admin', '20241120001.jpg'),
(18, '20241120002', '2024-11-20', '70000.000000', '70000.000000', 'Tunai', 'Selesai', 'Admin', '20241120002.jpg'),
(19, '20241121001', '2024-11-21', '70000.000000', '70000.000000', 'Tunai', 'Selesai', 'Admin', '20241121001.jpg'),
(20, '20241125001', '2024-11-25', '70000.000000', '70000.000000', 'Tunai', 'Selesai', 'Admin', '20241125001.jpg'),
(21, '20241128001', '2024-11-28', '140000.000000', '140000.000000', 'Tunai', 'Selesai', 'Admin', '20241128001.jpg'),
(22, '20241216001', '2024-12-16', '120000.000000', '120000.000000', 'Tunai', 'Selesai', 'Admin', '20241216001.jpg'),
(23, '20241217001', '2024-12-17', '67.000000', '67.000000', 'Tunai', 'Selesai', 'Admin', '20241217001.jpg'),
(24, '20241217002', '2024-12-17', '67.000000', '90.000000', 'Tunai', 'Selesai', 'Admin', '20241217002.jpg'),
(25, '20241218001', '2024-12-18', '150000.000000', '200000.000000', 'Tunai', 'Selesai', 'Admin', '20241218001.jpg'),
(26, '20250107001', '2025-01-07', '50000.000000', '50000.000000', 'Tunai', 'Selesai', 'Admin', '20250107001.jpg'),
(27, '20250203001', '2025-02-03', '50000.000000', '50000.000000', 'Tunai', 'Selesai', 'Admin', '20250203001.jpg'),
(28, '20250203002', '2025-02-03', '170000.000000', '200000.000000', 'Tunai', 'Selesai', 'Admin', '20250203002.jpg'),
(29, '20250224001', '2025-02-24', '70000.000000', '119998.000000', 'Tunai', 'Selesai', 'Admin', '20250224001.jpg');

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
(1, 'Celana tempur 23', 'ini adalah celana tempur', 1, 1, 1, 5, 2, 1, 0, '50000', '45000', '866445656'),
(3, 'Baju koko dewasa', 'ini baju koko dewasa', 2, 1, 1, 4, 2, 1, 5, '70000', '50000', '123567899865'),
(4, 'Madu', 'Hp dari brand Iphone', 1, 1, 1, 5, 1, 3, 3, '67', '8', 'CLN236'),
(5, 'Tegar', 'Ini manusia tembus pandang', 1, 1, 1, 5, 4, 3, 1, '999999999', '99999999', '0660000029878575'),
(6, 'Kemeja  Putih', 'p', 1, 1, 1, 4, 4, 3, 1, '199999', '100000', '12345678');

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
-- Table structure for table `suara`
--

CREATE TABLE `suara` (
  `id` int NOT NULL,
  `total_suara` int NOT NULL DEFAULT '0',
  `total_suara_sah` int NOT NULL DEFAULT '0',
  `total_suara_tidak_sah` int NOT NULL DEFAULT '0',
  `suara1` int NOT NULL DEFAULT '0',
  `suara2` int NOT NULL DEFAULT '0',
  `suara3` int NOT NULL DEFAULT '0',
  `nama_tps` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `suara`
--

INSERT INTO `suara` (`id`, `total_suara`, `total_suara_sah`, `total_suara_tidak_sah`, `suara1`, `suara2`, `suara3`, `nama_tps`) VALUES
(1, 10, 9, 1, 5, 3, 2, 'TPS 1'),
(2, 10, 9, 1, 5, 3, 2, 'TPS 1'),
(3, 20, 15, 5, 12, 6, 2, 'TPS 1'),
(4, 10, 8, 2, 1, 8, 1, 'TPS 1'),
(5, 10, 9, 1, 5, 3, 2, 'TPS2'),
(6, 10, 5, 5, 5, 3, 2, 'TPS 4 ');

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

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`id_temp`, `id_user`, `jumlah`, `id_produk`) VALUES
(43, 6, 1, 3),
(58, 2, 1, 3);

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
(4, 'Nama', 'adasd', '$2y$10$OP7zM2kNByxWZb0Bsm5zFuzDX3vggEXLuMXvBb0qSUriAngM30dLO', 'Petugas', 'Alamat'),
(6, 'Dimas', 'dims', '$2y$10$o1tGhypNoPF.OGYrotP8r.Mpo0/DvHI8VjtbGBvUXjMs4tg0O/IaG', 'Petugas', 'Alamat');

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
-- Indexes for table `cicilan_pengeluaran`
--
ALTER TABLE `cicilan_pengeluaran`
  ADD PRIMARY KEY (`id_cicilan`);

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
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `lengan`
--
ALTER TABLE `lengan`
  ADD PRIMARY KEY (`id_lengan`);

--
-- Indexes for table `log_cicilanhutang`
--
ALTER TABLE `log_cicilanhutang`
  ADD PRIMARY KEY (`id_cicilan`);

--
-- Indexes for table `log_cicilanpengeluaran`
--
ALTER TABLE `log_cicilanpengeluaran`
  ADD PRIMARY KEY (`id_cicilanpengeluaran`),
  ADD KEY `id_pengeluaran` (`id_pengeluaran`);

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
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `suara`
--
ALTER TABLE `suara`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `cicilan_pengeluaran`
--
ALTER TABLE `cicilan_pengeluaran`
  MODIFY `id_cicilan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_hutang`
--
ALTER TABLE `detail_hutang`
  MODIFY `id_detail_hutang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `id_detail_penjualan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `hutang`
--
ALTER TABLE `hutang`
  MODIFY `id_hutang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lengan`
--
ALTER TABLE `lengan`
  MODIFY `id_lengan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log_cicilanhutang`
--
ALTER TABLE `log_cicilanhutang`
  MODIFY `id_cicilan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `log_cicilanpengeluaran`
--
ALTER TABLE `log_cicilanpengeluaran`
  MODIFY `id_cicilanpengeluaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `log_stock`
--
ALTER TABLE `log_stock`
  MODIFY `id_log` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `id_model` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id_size` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `suara`
--
ALTER TABLE `suara`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id_temp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- Constraints for table `log_cicilanpengeluaran`
--
ALTER TABLE `log_cicilanpengeluaran`
  ADD CONSTRAINT `id_pengeluaran` FOREIGN KEY (`id_pengeluaran`) REFERENCES `pengeluaran` (`id_pengeluaran`);

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
