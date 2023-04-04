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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

-- Dumping data for table u955154186_db_djstrading.systemusers: ~10 rows (approximately)
DELETE FROM `systemusers`;
INSERT INTO `systemusers` (`UserId`, `UserFullName`, `UserPosition`, `Username`, `UserPassword`, `UserEmail`, `DateGranted`, `Activity`) VALUES
	(1, 'Test for sir Jay', 'co-founder', 'Test Jay', 'f3d9eb67573b', 'fourthcesar@gmail.com', NULL, 'active'),
	(2, 'Test for sir Daniel', 'co-founder', 'TestDaniel', 'cb9a2308e5a3', 'danielngdxb@gmail.com', NULL, 'active'),
	(3, 'Test for sir Daniel', 'co-founder', 'Test4Daniel', '6e5d282155bd', 'danielngdxb@gmail.com', NULL, 'active'),
	(4, 'mongika marinka', 'supervisor', 'mongi', '80a2007e8432', 'coronapungal111@gmail.com', NULL, 'active'),
	(5, 'asdw', 'manager', 'sss', '4bb7c903bd2b', 'asdw', '2023-04-02 18:38:01', 'active'),
	(6, 'Jay', 'co-founder', 'Fourth', '88a11e390374', 'fourthcesar@gmail.com', '2023-04-03 23:26:45', 'active'),
	(7, 'Fourth', 'co-founder', 'Jay', '86204ab165e6', 'fourthcesar@gmail.com', '2023-04-03 23:30:59', 'active'),
	(8, 'asd', 'manager', 'momo', '636ee3d04a4f', 'coronapungal111@gmail.com', '2023-04-03 23:38:53', 'active'),
	(9, 'aaa', 'manager', 'momoo', '9438a6e2f05e', 'coronapungal111@gmail.comsa', '2023-04-03 23:39:31', 'active'),
	(10, 'momo', 'supervisor', 'lingua', '2f938119f14d', 'coronapungal111@gmail.com', '2023-04-04 10:10:20', 'active');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
