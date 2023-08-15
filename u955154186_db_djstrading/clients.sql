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

-- Dumping structure for table u955154186_db_djstrading.clients
CREATE TABLE IF NOT EXISTS `clients` (
  `ClientId` int(11) NOT NULL AUTO_INCREMENT,
  `ClientFullName` varchar(250) DEFAULT NULL,
  `ClientUsername` varchar(250) DEFAULT NULL,
  `ClientPassword` varchar(250) DEFAULT NULL,
  `ClientEmail` varchar(250) DEFAULT NULL,
  `ClientOTP` int(11) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `ClientStatus` varchar(250) DEFAULT 'inactive',
  PRIMARY KEY (`ClientId`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

-- Dumping data for table u955154186_db_djstrading.clients: ~19 rows (approximately)
DELETE FROM `clients`;
INSERT INTO `clients` (`ClientId`, `ClientFullName`, `ClientUsername`, `ClientPassword`, `ClientEmail`, `ClientOTP`, `date_added`, `ClientStatus`) VALUES
	(1, 'Jay Fourth', 'Jayfourth', 'Jaypass', 'fourthcesar@gmail.com', 9195, '2023-04-04 22:38:20', 'active'),
	(2, 'Fourth Jay', 'Fourthjay', 'Fourthpass', 'fourthcesar@gmail.com', 7530, '2023-04-04 22:50:50', 'inactive'),
	(3, 'TEST USER', 'TESTUSER', 'TESTUSER', 'fourthcesar@gmail.com', 5113, '2023-04-04 22:56:48', 'inactive'),
	(4, 'TESTING', 'TESTING', 'TESTING', 'fourthcesar@gmail.com', 9406, '2023-04-04 23:03:20', 'inactive'),
	(5, 'moleya', 'socer', 'monkee', 'coronapungal111@gmail.com', 1299, '2023-04-04 23:43:52', 'inactive'),
	(6, 'moleya', 'socerr', 'monkee', 'coronapungal111@gmail.com', 4029, '2023-04-04 23:48:16', 'inactive'),
	(7, 'asdw', 'asdf', 'iuboiub', 'coronapungal111@gmail.com', 3746, '2023-04-04 23:48:35', 'inactive'),
	(8, 'asdw', 'asdfas', 'iuboiub', 'coronapungal111@gmail.com', 1359, '2023-04-04 23:49:19', 'inactive'),
	(9, 'stbnt', 'dafv', 'dvfew', 'coronapungal111@gmail.com', 5467, '2023-04-04 23:49:35', 'inactive'),
	(10, 'stbnt', 'dafvsaa', 'dvfew', 'coronapungal111@gmail.com', 9447, '2023-04-04 23:51:14', 'inactive'),
	(11, 'stbnt', 'dafvsaaasdw', 'dvfew', 'coronapungal111@gmail.com', 8465, '2023-04-04 23:52:52', 'inactive'),
	(12, 'sdfwe', 'sceiiyaewfvwe', 'dsafe', 'coronapungal111@gmail.com', 4353, '2023-04-04 23:53:20', 'inactive'),
	(13, 'S Test Reg', 'TestRegSc', 'marumaru', 'coronapungal111@gmail.com', 4113, '2023-04-05 10:43:19', 'inactive'),
	(14, 'S Test Reg', 'TestRegSce', 'marumaru', 'coronapungal111@gmail.com', 9576, '2023-04-05 10:48:55', 'inactive'),
	(15, 'Mero', 'moiikai', 'miokai', 'coronapungal111@gmail.com', 8554, '2023-04-05 10:53:25', 'inactive'),
	(16, 'test again', 'moleke', 'monke', 'coronapungal111@gmail.com', 8949, '2023-04-05 11:00:04', 'inactive'),
	(17, 'asd', 'morn', 'sasa', 'coronapungal111@gmail.com', 8273, '2023-04-05 11:28:22', 'inactive'),
	(18, 'as', 'as', 'moi', 'coronapungal111@gmail.com', 3655, '2023-04-05 11:29:38', 'active'),
	(19, 'Last Test', 'TestScee', 'monkai', 'coronapungal111@gmail.com', 7808, '2023-04-05 17:21:51', 'inactive');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
