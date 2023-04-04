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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

-- Dumping data for table u955154186_db_djstrading.clients: ~26 rows (approximately)
DELETE FROM `clients`;
INSERT INTO `clients` (`ClientId`, `ClientFullName`, `ClientUsername`, `ClientPassword`, `ClientEmail`, `ClientOTP`, `date_added`, `ClientStatus`) VALUES
	(1, 'Jay Test', 'Jaytest', 'Jaypass', 'email@email.com', 3214, '2023-03-31 18:18:41', 'active'),
	(2, 'Michael Jordan', 'michael', 'michael', 'danielngdxb@gmail.com', 1234, '2023-03-31 18:18:41', 'inactive'),
	(3, 'Lebron James', 'lebron', 'lebron', 'danielngdxb@gmail.com', 6789, '2023-03-31 18:18:41', 'active'),
	(4, 'Jay Test', 'Jaytest2', 'Jaypass', 'email@email.com', 2333, '2023-03-31 18:48:11', 'inactive'),
	(5, 'Jay Fourth', 'Jayfourth', 'Jaypass', 'test@test.com', 8741, '2023-03-31 19:56:10', 'active'),
	(6, 'Test User', 'Testuser', 'Testpass', 'test@gmail.com', 1953, '2023-03-31 20:48:17', 'inactive'),
	(7, 'Test User', 'Testuser', 'Testpass', 'email@email.com', 3709, '2023-04-01 02:34:37', 'active'),
	(8, 'Mano Aloe', 'mano_aloe', 'manomano', 'coronapungal111@gmail.com', 5002, '0000-00-00 00:00:00', 'inactive'),
	(9, 'allen iverson', 'allen', 'allen', 'allen@gmail.com', 9851, '2023-04-01 04:26:37', 'active'),
	(10, 'Test Jay', 'Testjay', 'Testpass', 'test@gmail.com', 9054, '2023-04-01 04:58:50', 'inactive'),
	(11, 'Test Jay', 'Testjay2', 'Testpass', 'email@email.com', 1797, '2023-04-01 05:03:07', 'active'),
	(12, 'test123', 'test123', 'testtest', 'test@test@gmail.com', 1065, '2023-04-01 05:17:43', 'inactive'),
	(13, 'testtest', 'testtest', 'testtest', 'test@gmail.com', 8333, '2023-04-01 05:23:05', 'active'),
	(14, 'Testing', 'testing', 'testing', 'test@test.com', 8483, '2023-04-01 05:31:26', 'inactive'),
	(15, 'useruser', 'useruser', 'useruser', 'user@user.com', 2562, '2023-04-01 05:41:16', 'active'),
	(16, 'useruser2', 'useruser2', 'useruser', 'user@user.com', 3025, '2023-04-01 05:45:49', 'inactive'),
	(17, 'useruser3', 'useruser3', 'useruser', 'user@user.com', 2427, '2023-04-01 05:50:01', 'active'),
	(18, 'useruser4', 'useruser4', 'useruser', 'user@user.com', 9888, '2023-04-01 05:52:34', 'inactive'),
	(19, 'useruser4', 'useruser5', 'useruser', 'user@user.com', 5674, '2023-04-01 05:53:49', 'active'),
	(20, 'uesr6', 'uesr6', 'useruser', 'user@uesr.com', 7616, '2023-04-01 05:56:41', 'inactive'),
	(21, 'user7', 'user7', 'useruser', 'user@user.com', 6246, '2023-04-01 05:58:28', 'active'),
	(22, '123123', '123123', '123123', '123123', 4847, '2023-04-01 06:00:25', 'inactive'),
	(23, '321', '321', '321', '321', 2769, '2023-04-01 06:01:46', 'active'),
	(24, 'dva', 'monke', 'monke', 'coronapungal111@gmail.com', 5288, '2023-04-04 10:23:45', 'inactive'),
	(25, 'TESTNOW', 'TESTINGNOW', 'TESTINGNOW', 'test@test.com', 5676, '2023-04-04 11:37:49', 'active'),
	(26, 'DAPATGUMANA', 'DAPATGUMANA', 'DAPATGUMANA', 'dapat@gumana.com', 5997, '2023-04-04 12:00:53', 'active');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
