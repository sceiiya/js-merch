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
  `DatePurchased` datetime DEFAULT NULL,
  PRIMARY KEY (`CartId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

-- Dumping data for table u955154186_db_djstrading.clientcart: ~9 rows (approximately)
DELETE FROM `clientcart`;
INSERT INTO `clientcart` (`CartId`, `ClientId`, `ProductCode`, `ProductName`, `ProductDescription`, `ProductPrice`, `ProductQuantity`, `ProductPhoto`, `DateAdded`, `DatePurchased`) VALUES
	(1, 2, 'TS01', 'Blue T-Shirt', 'Blue T-Shirt with Stripe', 499, 1, NULL, NULL, NULL),
	(2, 5, '13', 'Trese', 'Sample13', 1234, 1234, 'C:fakepathprofile.png', '2023-04-04 05:46:36', NULL),
	(3, 5, '4th', '4Fourth', 'Sample 444', 123, 123, 'C:fakepathprofile.png', '2023-04-04 08:03:21', NULL),
	(4, 5, 'ert', '432', 'ert', 432, 432, 'C:fakepathprofile.png', '2023-04-04 08:03:34', NULL),
	(5, 5, '12212', 'qwqw', 'qwqw', 2121, 123, 'C:fakepathprofile.png', '2023-04-04 10:11:03', NULL),
	(6, 17, '4th', '4Fourth', 'Sample 444', 123, 123, '642baaa42940a.jpg', '2023-04-04 13:30:20', NULL),
	(7, 17, '5', 'Fifth', 'Sample 5', 123, 123, 'C:fakepathprofile.png', '2023-04-04 13:30:25', NULL),
	(8, 17, '', '', '', 0, 0, '642b97cc092d5.png', '2023-04-04 13:30:29', NULL),
	(9, 17, '789rv5da67', '974 7fo6', 'fc ssehbsrtgvc nvc ', 98, 96, '642bb96d06616.jpg', '2023-04-04 13:45:45', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
