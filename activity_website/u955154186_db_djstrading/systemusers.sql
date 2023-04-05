-- --------------------------------------------------------
-- Host:                         sql947.main-hosting.eu
-- Server version:               10.6.11-MariaDB-cll-lve - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table u955154186_db_djstrading.systemusers
CREATE TABLE IF NOT EXISTS `systemusers` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `UserFullName` varchar(50) DEFAULT NULL,
  `UserPosition` varchar(50) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `UserPassword` varchar(12) DEFAULT NULL,
  `UserEmail` varchar(50) DEFAULT NULL,
  `DateGranted` datetime DEFAULT NULL,
  `Activity` varchar(20) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

-- Dumping data for table u955154186_db_djstrading.systemusers: ~3 rows (approximately)
DELETE FROM `systemusers`;
INSERT INTO `systemusers` (`UserId`, `UserFullName`, `UserPosition`, `Username`, `UserPassword`, `UserEmail`, `DateGranted`, `Activity`) VALUES
	(1, 'admin', 'co-founder', 'admin', 'admin', 'admin@admin.com', '2023-04-04 22:42:09', 'active'),
	(2, 'see ya', 'co-founder', 'sceiiya', '3b878f4544a4', 'coronapungal111@gmail.com', '2023-04-04 23:02:38', 'active'),
	(3, 'Morning', 'co-founder', 'Glam', 'd5d68d2e14f4', 'coronapungal111@gmail.com', '2023-04-05 07:42:40', 'active');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
