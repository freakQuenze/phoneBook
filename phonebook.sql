-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.28-0ubuntu0.20.04.3 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table ci.phone_info
CREATE TABLE IF NOT EXISTS `phone_info` (
  `id` bigint unsigned DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `phone_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- Dumping data for table ci.phone_info: ~0 rows (approximately)
/*!40000 ALTER TABLE `phone_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `phone_info` ENABLE KEYS */;

-- Dumping structure for table ci.user_info
CREATE TABLE IF NOT EXISTS `user_info` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- Dumping data for table ci.user_info: ~10 rows (approximately)
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT IGNORE INTO `user_info` (`id`, `name`) VALUES
	(3, 'nama saya'),
	(5, 'nama saya'),
	(6, 'nama saya'),
	(7, 'nama saya'),
	(8, 'nama saya'),
	(9, 'nama saya'),
	(11, 'nama saya'),
	(12, 'nama saya'),
	(23, 'zzsdad'),
	(24, 'zzsdadxz');
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
