/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `appkasir` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `appkasir`;

CREATE TABLE IF NOT EXISTS `bahan` (
  `id_bahan` int NOT NULL AUTO_INCREMENT,
  `bahan` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_bahan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

REPLACE INTO `bahan` (`id_bahan`, `bahan`) VALUES
	(1, 'Katun');

CREATE TABLE IF NOT EXISTS `detail_hutang` (
  `id_detail_hutang` int NOT NULL AUTO_INCREMENT,
  `nota` varchar(50) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL DEFAULT '0',
  `tanggal` date DEFAULT NULL,
  `nominal` decimal(20,6) DEFAULT NULL,
  PRIMARY KEY (`id_detail_hutang`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

REPLACE INTO `detail_hutang` (`id_detail_hutang`, `nota`, `username`, `tanggal`, `nominal`) VALUES
	(1, '20241117007', 'Admin', '2024-11-17', 40000.000000),
	(2, '20241117008', 'Admin', '2024-11-17', 40000.000000),
	(3, '20241117009', 'Admin', '2024-11-17', 50000.000000),
	(4, '20241117009', 'Admin', '2024-11-17', 50000.000000),
	(5, '20241117010', 'Admin', '2024-11-17', 50000.000000),
	(6, '20241118001', 'Admin', '2024-11-18', 100000.000000),
	(7, '20241119002', 'Admin', '2024-11-19', 50000.000000);

CREATE TABLE IF NOT EXISTS `detail_penjualan` (
  `id_detail_penjualan` int NOT NULL AUTO_INCREMENT,
  `nota` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `harga_jual` decimal(20,6) DEFAULT NULL,
  `harga_beli` decimal(20,6) DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `id_produk` int DEFAULT NULL,
  PRIMARY KEY (`id_detail_penjualan`) USING BTREE,
  KEY `id` (`id_produk`),
  CONSTRAINT `id` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

REPLACE INTO `detail_penjualan` (`id_detail_penjualan`, `nota`, `harga_jual`, `harga_beli`, `jumlah`, `id_produk`) VALUES
	(1, '202411171', NULL, 50000.000000, 4, 3),
	(2, '202411171', 70000.000000, 50000.000000, 4, 3),
	(3, '202411171', 70000.000000, 50000.000000, NULL, 3),
	(4, '202411171', 70000.000000, 50000.000000, NULL, 3),
	(5, '202411171', 70000.000000, 50000.000000, 8, 3),
	(6, '202411171', 70000.000000, 50000.000000, 8, 3),
	(7, '202411171', 70000.000000, 50000.000000, 4, 3),
	(8, '202411171', 70000.000000, 50000.000000, 4, 3),
	(9, '202411171', 50000.000000, 45000.000000, 3, 1),
	(10, '202411172', 50000.000000, 45000.000000, 1, 1),
	(11, '202411173', 50000.000000, 45000.000000, 2, 1),
	(12, '202411173', 70000.000000, 50000.000000, 1, 3),
	(13, '202411174', 70000.000000, 50000.000000, 1, 3),
	(14, '202411175', 70000.000000, 50000.000000, 1, 3),
	(15, '202411176', 50000.000000, 45000.000000, 1, 1),
	(16, '20241117007', 50000.000000, 45000.000000, 1, 1),
	(17, '20241117008', 50000.000000, 45000.000000, 1, 1),
	(18, '20241117009', 70000.000000, 50000.000000, 1, 3),
	(19, '20241117010', 70000.000000, 50000.000000, 1, 3),
	(20, '20241117011', 50000.000000, 45000.000000, 1, 1),
	(21, '20241118001', 50000.000000, 45000.000000, 2, 1),
	(22, '20241118001', 70000.000000, 50000.000000, 1, 3),
	(23, '20241118002', 70000.000000, 50000.000000, 2, 3),
	(24, '20241119001', 70000.000000, 50000.000000, 2, 3),
	(25, '20241119002', 70000.000000, 50000.000000, 1, 3);

CREATE TABLE IF NOT EXISTS `hutang` (
  `id_hutang` int NOT NULL AUTO_INCREMENT,
  `tagihan` decimal(15,0) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT '0',
  `nota` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_hutang`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

REPLACE INTO `hutang` (`id_hutang`, `tagihan`, `status`, `nota`) VALUES
	(1, 10000, 'Belum Lunas', '20241117007'),
	(2, 10000, 'Belum Lunas', '20241117008'),
	(3, 20000, 'Belum Lunas', '20241117009'),
	(4, 20000, 'Belum Lunas', '20241117009'),
	(5, 20000, 'Belum Lunas', '20241117010'),
	(6, 70000, 'Belum Lunas', '20241118001'),
	(7, 20000, 'Belum Lunas', '20241119002');

CREATE TABLE IF NOT EXISTS `jenis` (
  `id_jenis` int NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

REPLACE INTO `jenis` (`id_jenis`, `jenis`) VALUES
	(1, 'Celana'),
	(2, 'Baju'),
	(3, 'Sarung');

CREATE TABLE IF NOT EXISTS `lengan` (
  `id_lengan` int NOT NULL AUTO_INCREMENT,
  `lengan` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_lengan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

REPLACE INTO `lengan` (`id_lengan`, `lengan`) VALUES
	(1, 'Lengan Panjang'),
	(2, 'Lengan Pendek'),
	(3, 'Lengan 3/4');

CREATE TABLE IF NOT EXISTS `log_stock` (
  `id_log` int NOT NULL AUTO_INCREMENT,
  `id_produk` int NOT NULL DEFAULT '0',
  `jumlah_sebelum` int NOT NULL DEFAULT '0',
  `jumlah_sesudah` int NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL DEFAULT '0',
  `tanggal` date DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_log`),
  KEY `produk` (`id_produk`) USING BTREE,
  CONSTRAINT `produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

REPLACE INTO `log_stock` (`id_log`, `id_produk`, `jumlah_sebelum`, `jumlah_sesudah`, `username`, `tanggal`, `keterangan`) VALUES
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
	(18, 3, 4, 3, 'Admin', '2024-11-19', 'Terjual 1 dengan nota 20241119002');

CREATE TABLE IF NOT EXISTS `model` (
  `id_model` int NOT NULL AUTO_INCREMENT,
  `model` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_model`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

REPLACE INTO `model` (`id_model`, `model`) VALUES
	(1, 'Celana Tempur'),
	(2, 'Jubah');

CREATE TABLE IF NOT EXISTS `penjualan` (
  `id_penjualan` int NOT NULL AUTO_INCREMENT,
  `nota` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `tanggal` date NOT NULL,
  `total_harga` decimal(20,6) NOT NULL DEFAULT '0.000000',
  `bayar` decimal(20,6) NOT NULL DEFAULT '0.000000',
  `metode_pembayaran` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `username` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bukti_pembayaran` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_penjualan`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

REPLACE INTO `penjualan` (`id_penjualan`, `nota`, `tanggal`, `total_harga`, `bayar`, `metode_pembayaran`, `status`, `username`, `bukti_pembayaran`) VALUES
	(1, '202411171', '2024-11-17', 0.000000, 430000.000000, 'Tunai', 'Hutang', 'Admin', '202411171.jpg'),
	(2, '202411172', '2024-11-17', 50000.000000, 50000.000000, 'Tunai', 'Selesai', 'Admin', '202411172.jpg'),
	(3, '202411173', '2024-11-17', 170000.000000, 180000.000000, 'Tunai', 'Selesai', 'Admin', '202411173.jpg'),
	(4, '202411174', '2024-11-17', 70000.000000, 0.000000, 'Tunai', 'Belum Lunas', 'Admin', '202411174.jpg'),
	(5, '202411175', '2024-11-17', 70000.000000, 50000.000000, 'Tunai', 'Belum Lunas', 'Admin', '202411175.jpg'),
	(6, '202411176', '2024-11-17', 50000.000000, 10000.000000, 'Tunai', 'Belum Lunas', 'Admin', '202411176.jpg'),
	(7, '20241117007', '2024-11-17', 50000.000000, 40000.000000, 'Tunai', 'Belum Lunas', 'Admin', '20241117007.jpg'),
	(8, '20241117008', '2024-11-17', 50000.000000, 40000.000000, 'Tunai', 'Belum Lunas', 'Admin', '20241117008.jpg'),
	(9, '20241117009', '2024-11-17', 70000.000000, 50000.000000, 'Tunai', 'Belum Lunas', 'Admin', '20241117009.jpg'),
	(10, '20241117010', '2024-11-17', 70000.000000, 50000.000000, 'Tunai', 'Belum Lunas', 'Admin', '20241117010.jpg'),
	(11, '20241117011', '2024-11-17', 50000.000000, 100000.000000, 'Tunai', 'Selesai', 'Admin', '20241117011.jpg'),
	(12, '20241118001', '2024-11-18', 170000.000000, 100000.000000, 'Tunai', 'Belum Lunas', 'Admin', '20241118001.jpg'),
	(13, '20241118002', '2024-11-18', 140000.000000, 140000.000000, 'Tunai', 'Selesai', 'Admin', '20241118002.jpg'),
	(14, '20241119001', '2024-11-19', 140000.000000, 140000.000000, 'Tunai', 'Selesai', 'Admin', '20241119001.jpg'),
	(15, '20241119002', '2024-11-19', 70000.000000, 50000.000000, 'Tunai', 'Belum Lunas', 'Admin', '20241119002.jpg');

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int NOT NULL AUTO_INCREMENT,
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
  `kode_barang` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_produk`),
  KEY `id_model` (`id_model`),
  KEY `id_size` (`id_size`),
  KEY `id_bahan` (`id_bahan`),
  KEY `id_warna` (`id_warna`),
  KEY `id_jenis` (`id_jenis`),
  KEY `id_lengan` (`id_lengan`),
  CONSTRAINT `id_bahan` FOREIGN KEY (`id_bahan`) REFERENCES `bahan` (`id_bahan`),
  CONSTRAINT `id_jenis` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`),
  CONSTRAINT `id_lengan` FOREIGN KEY (`id_lengan`) REFERENCES `lengan` (`id_lengan`),
  CONSTRAINT `id_model` FOREIGN KEY (`id_model`) REFERENCES `model` (`id_model`),
  CONSTRAINT `id_size` FOREIGN KEY (`id_size`) REFERENCES `size` (`id_size`),
  CONSTRAINT `id_warna` FOREIGN KEY (`id_warna`) REFERENCES `warna` (`id_warna`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

REPLACE INTO `produk` (`id_produk`, `nama`, `keterangan`, `id_model`, `id_size`, `id_bahan`, `id_warna`, `id_jenis`, `id_lengan`, `stock`, `harga`, `harga_beli`, `kode_barang`) VALUES
	(1, 'Celana tempur 23', 'ini adalah celana tempur', 1, 1, 1, 5, 2, 1, 6, '50000', '45000', 'CLN23'),
	(3, 'Baju koko dewasa', 'ini baju koko dewasa', 2, 1, 1, 4, 2, 1, 3, '70000', '50000', 'BJD01');

CREATE TABLE IF NOT EXISTS `size` (
  `id_size` int NOT NULL AUTO_INCREMENT,
  `size` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_size`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

REPLACE INTO `size` (`id_size`, `size`) VALUES
	(1, 'L'),
	(2, 'XL'),
	(3, 'M'),
	(4, 'XXL');

CREATE TABLE IF NOT EXISTS `temp` (
  `id_temp` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL DEFAULT '0',
  `jumlah` int NOT NULL DEFAULT '0',
  `id_produk` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_temp`),
  KEY `id_produk` (`id_produk`),
  CONSTRAINT `id_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

REPLACE INTO `temp` (`id_temp`, `id_user`, `jumlah`, `id_produk`) VALUES
	(31, 2, 1, 1);

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `username` varchar(25) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `role` varchar(30) NOT NULL DEFAULT '0',
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

REPLACE INTO `user` (`id_user`, `nama`, `username`, `password`, `role`, `alamat`) VALUES
	(2, 'Admin', 'Admin', '$2y$10$wWYTgJ2p.UNG6MOrLCi0U.5h588gLMNn0dtt8kBtFLYk/vWz0hca2', 'Admin', 'Indonesia'),
	(4, 'Nama', 'adasd', '$2y$10$OP7zM2kNByxWZb0Bsm5zFuzDX3vggEXLuMXvBb0qSUriAngM30dLO', 'Petugas', 'Alamat');

CREATE TABLE IF NOT EXISTS `warna` (
  `id_warna` int NOT NULL AUTO_INCREMENT,
  `warna` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_warna`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

REPLACE INTO `warna` (`id_warna`, `warna`) VALUES
	(1, 'Kuning'),
	(2, 'Merah'),
	(3, 'Hijau'),
	(4, 'Biru'),
	(5, 'Abu-abu');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
