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

-- Dumping structure for table u955154186_db_djstrading.clientcart
CREATE TABLE IF NOT EXISTS `clientcart` (
  `CartId` int(11) NOT NULL AUTO_INCREMENT,
  `ClientId` int(11) DEFAULT NULL,
  `ProductCode` varchar(50) DEFAULT NULL,
  `ProductName` varchar(255) DEFAULT NULL,
  `ProductDescription` varchar(255) DEFAULT NULL,
  `ProductPrice` int(11) DEFAULT NULL,
  `ProductQuantity` int(11) DEFAULT NULL,
  `ProductPhoto` varchar(250) DEFAULT NULL,
  `DateAdded` datetime DEFAULT NULL,
  `DateRemoved` datetime DEFAULT NULL,
  PRIMARY KEY (`CartId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

-- Dumping data for table u955154186_db_djstrading.clientcart: ~6 rows (approximately)
DELETE FROM `clientcart`;
INSERT INTO `clientcart` (`CartId`, `ClientId`, `ProductCode`, `ProductName`, `ProductDescription`, `ProductPrice`, `ProductQuantity`, `ProductPhoto`, `DateAdded`, `DateRemoved`) VALUES
	(1, 1, 'Polo', 'Polo Shirt 1', 'Checkered', 100, 10, '642c3f7ce3e16.jpg', '2023-04-04 23:20:11', NULL),
	(2, 1, 'Polo', 'Polo Shirt 2', 'Stripes', 200, 200, '642c3fab2c906.jpg', '2023-04-04 23:20:14', NULL),
	(3, 1, 'Polo', 'Polo Shirt 3', 'Pink and Blue Checkered', 300, 50, '642c3fd7dcd42.jpg', '2023-04-04 23:20:16', NULL),
	(4, 1, 'Polo', 'Polo Shirt 4', 'Plain Gray', 500, 100, '642c3ff859c56.jpg', '2023-04-04 23:20:18', NULL),
	(5, 18, 'Polo', 'Polo Shirt 1', 'Checkered', 100, 10, '642c3f7ce3e16.jpg', '2023-04-05 11:40:22', '2023-04-05 11:41:09'),
	(6, 18, 'Polo', 'Polo Shirt 4', 'Plain Gray', 500, 100, '642c3ff859c56.jpg', '2023-04-05 11:47:46', '2023-04-05 11:48:09');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
