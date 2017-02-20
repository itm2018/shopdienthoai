-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table cakephp.dienthoais
DROP TABLE IF EXISTS `dienthoais`;
CREATE TABLE IF NOT EXISTS `dienthoais` (
  `Seri` int(11) NOT NULL AUTO_INCREMENT,
  `TenDT` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `maloai` int(11) DEFAULT NULL,
  `GiaBan` float NOT NULL,
  `GiaGoc` int(11) NOT NULL,
  PRIMARY KEY (`Seri`),
  KEY `maloai` (`maloai`),
  CONSTRAINT `dienthoais_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loaidts` (`maloai`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- Data exporting was unselected.
-- Dumping structure for table cakephp.loaidts
DROP TABLE IF EXISTS `loaidts`;
CREATE TABLE IF NOT EXISTS `loaidts` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(11) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`maloai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- Data exporting was unselected.
-- Dumping structure for table cakephp.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
