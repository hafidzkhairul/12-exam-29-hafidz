-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_inventory
CREATE DATABASE IF NOT EXISTS `db_inventory` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_inventory`;

-- Dumping structure for table db_inventory.barang
CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `spesifikasi` varchar(255) DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `barang_ibfk_1` (`kategori_id`),
  CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table db_inventory.barang: ~3 rows (approximately)
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` (`id`, `spesifikasi`, `stok`, `lokasi`, `kategori_id`) VALUES
	(8, 'laptop', 10, 'gudang', 2),
	(10, 'pulpen', 7, 'gudang', 1),
	(11, 'keyboard', 10, 'gudang', 2);
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;

-- Dumping structure for table db_inventory.barangkeluar
CREATE TABLE IF NOT EXISTS `barangkeluar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_keluar` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `barangkeluar_ibfk_1` (`barang_id`),
  CONSTRAINT `barangkeluar_ibfk_1` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table db_inventory.barangkeluar: ~5 rows (approximately)
/*!40000 ALTER TABLE `barangkeluar` DISABLE KEYS */;
INSERT INTO `barangkeluar` (`id`, `tgl_keluar`, `jumlah`, `barang_id`) VALUES
	(6, '2022-11-08', 2, 8),
	(8, '2022-11-26', 2, 11),
	(9, '2022-11-26', 5, 10),
	(11, '2022-11-26', 2, 8),
	(12, '2022-11-18', 2, 11);
/*!40000 ALTER TABLE `barangkeluar` ENABLE KEYS */;

-- Dumping structure for table db_inventory.barangmasuk
CREATE TABLE IF NOT EXISTS `barangmasuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_masuk` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `barangmasuk_ibfk_1` (`barang_id`),
  CONSTRAINT `barangmasuk_ibfk_1` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table db_inventory.barangmasuk: ~9 rows (approximately)
/*!40000 ALTER TABLE `barangmasuk` DISABLE KEYS */;
INSERT INTO `barangmasuk` (`id`, `tgl_masuk`, `jumlah`, `barang_id`) VALUES
	(7, '2022-11-18', 3, 10),
	(8, '2022-11-08', 5, 11),
	(9, '2022-11-26', 7, 8),
	(10, '2022-11-26', 5, 11),
	(11, '2022-11-26', 6, 10),
	(12, '2022-11-26', 10, 8),
	(13, '2022-11-26', 5, 8),
	(14, '2022-11-18', 10, 10),
	(15, '2022-11-25', 5, 10);
/*!40000 ALTER TABLE `barangmasuk` ENABLE KEYS */;

-- Dumping structure for table db_inventory.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_inventory.kategori: ~3 rows (approximately)
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` (`id`, `kategori`, `keterangan`) VALUES
	(1, 'alat tulis', 'pensil, pulpen, spidol, pena'),
	(2, 'bahan praktik', 'arduino, esp, led'),
	(4, 'kabel', 'kabel jumper, usb micro, usb A to usb B');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;

-- Dumping structure for trigger db_inventory.kurang_stok
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER kurang_stok
AFTER INSERT  ON barangkeluar
FOR EACH ROW  
UPDATE barang SET stok = stok - NEW.jumlah WHERE id = NEW.barang_id//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger db_inventory.tambah_stok
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER tambah_stok
AFTER INSERT  ON barangmasuk
FOR EACH ROW  
UPDATE barang SET stok = stok + NEW.jumlah WHERE id = NEW.barang_id//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
