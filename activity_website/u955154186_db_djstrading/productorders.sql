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

-- Dumping structure for table u955154186_db_djstrading.productorders
CREATE TABLE IF NOT EXISTS `productorders` (
  `OrderId` int(6) NOT NULL AUTO_INCREMENT,
  `ProductCode` varchar(50) DEFAULT NULL,
  `ProductName` varchar(50) DEFAULT NULL,
  `ProductDescription` varchar(50) DEFAULT NULL,
  `ProductPrice` int(11) DEFAULT NULL,
  `ProductQuantity` int(11) DEFAULT NULL,
  `PaymentMethod` varchar(50) DEFAULT NULL,
  `DateOrdered` datetime DEFAULT NULL,
  `OrderStatus` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`OrderId`)
) ENGINE=InnoDB AUTO_INCREMENT=100102 DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

-- Dumping data for table u955154186_db_djstrading.productorders: ~0 rows (approximately)
DELETE FROM `productorders`;
INSERT INTO `productorders` (`OrderId`, `ProductCode`, `ProductName`, `ProductDescription`, `ProductPrice`, `ProductQuantity`, `PaymentMethod`, `DateOrdered`, `OrderStatus`) VALUES
	(100101, 'Polo', 'Checking Polo', 'This is a polo', 200, 2, NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
