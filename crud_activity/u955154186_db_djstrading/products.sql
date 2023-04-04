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

-- Dumping structure for table u955154186_db_djstrading.products
CREATE TABLE IF NOT EXISTS `products` (
  `ProductId` int(11) NOT NULL AUTO_INCREMENT,
  `ProductCode` varchar(20) DEFAULT NULL,
  `ProductName` varchar(50) DEFAULT NULL,
  `ProductDescription` varchar(255) DEFAULT NULL,
  `ProductPrice` int(6) DEFAULT NULL,
  `ProductQuantity` int(6) DEFAULT NULL,
  `ProductPhoto` varchar(250) DEFAULT NULL,
  `DateAdded` datetime DEFAULT NULL,
  `DateArchived` datetime DEFAULT NULL,
  `DateModified` datetime DEFAULT NULL,
  PRIMARY KEY (`ProductId`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

-- Dumping data for table u955154186_db_djstrading.products: ~39 rows (approximately)
DELETE FROM `products`;
INSERT INTO `products` (`ProductId`, `ProductCode`, `ProductName`, `ProductDescription`, `ProductPrice`, `ProductQuantity`, `ProductPhoto`, `DateAdded`, `DateArchived`, `DateModified`) VALUES
	(1, '1', 'First', 'Sample', 123, 123, 'C:fakepathprofile.png', '2023-04-03 22:20:23', '2023-04-04 01:26:09', NULL),
	(2, '2', 'Second', 'Sample 2', 123, 123, 'C:fakepathprofile.png', '2023-04-03 22:24:23', '2023-04-04 01:26:11', NULL),
	(3, '2', 'Second', 'Sample 2', 123, 123, 'C:fakepathprofile.png', '2023-04-03 22:24:23', '2023-04-04 01:26:13', NULL),
	(4, '13', 'Trese', 'Sample13', 1234, 1234, 'C:fakepath8.jpg', '2023-04-03 22:25:44', '2023-04-04 15:54:53', '2023-04-04 12:42:29'),
	(5, '4th', '4Fourth', 'Sample 444', 123, 123, '642baaa42940a.jpg', '2023-04-03 22:26:25', NULL, '2023-04-04 12:42:12'),
	(6, '4', 'Fourth', 'Sample 4', 123, 123, 'C:fakepathprofile.png', '2023-04-03 22:26:25', '2023-04-04 15:54:56', NULL),
	(7, '5', 'Fifth', 'Sample 5', 123, 123, 'C:fakepathprofile.png', '2023-04-03 22:26:53', '2023-04-04 15:54:58', NULL),
	(8, '5', 'Fifth', 'Sample 5', 123, 123, 'C:fakepathprofile.png', '2023-04-03 22:26:53', '2023-04-04 15:55:00', NULL),
	(9, '5', 'Fifth', 'Sample 5', 123, 123, 'C:fakepathprofile.png', '2023-04-03 22:26:54', '2023-04-04 15:55:02', NULL),
	(10, '6', 'sixth', 'Sample 6', 1234, 1234, 'C:fakepathprofile.png', '2023-04-03 22:27:59', '2023-04-04 15:55:04', NULL),
	(11, '6', 'sixth', 'Sample 6', 1234, 1234, 'C:fakepathprofile.png', '2023-04-03 22:27:59', '2023-04-04 15:55:07', NULL),
	(12, '6', 'sixth', 'Sample 6', 1234, 1234, 'C:fakepathprofile.png', '2023-04-03 22:28:00', '2023-04-04 12:26:46', NULL),
	(13, '6', 'sixth', 'Sample 6', 1234, 1234, 'C:fakepathprofile.png', '2023-04-03 22:28:00', '2023-04-04 15:55:11', NULL),
	(14, '123', 'qwe', 'qwe', 123, 123, 'C:fakepathprofile.png', '2023-04-03 22:30:12', '2023-04-04 15:55:13', NULL),
	(15, 'ert', '432', 'ert', 432, 432, 'C:fakepathprofile.png', '2023-04-03 22:30:33', '2023-04-04 15:55:15', NULL),
	(16, 'ert', '432', 'ert', 432, 432, 'C:fakepathprofile.png', '2023-04-03 22:30:33', '2023-04-04 15:55:17', NULL),
	(17, 'asd', 'asdww', 'aefv', 123, 123, 'C:fakepathIMG_20230110_144856_646.jpg', '2023-04-03 22:31:31', '2023-04-04 15:55:19', NULL),
	(18, 'asdawefc', 'asdwwewf', 'aefvaedv', 12331, 123132, 'C:fakepathIMG_20230110_153211_127.jpg', '2023-04-03 22:31:50', '2023-04-04 15:55:22', NULL),
	(19, 'asdawefcdasf', 'asdwwewf', 'aefvaedv', 12331, 123132, 'C:fakepathIMG_20230110_153211_127.jpg', '2023-04-03 22:31:57', '2023-04-04 15:55:24', NULL),
	(20, 'fe', 'sdfe', 'wefgt', 4, 5, 'C:fakepathIMG_20230110_153239_038.jpg', '2023-04-03 22:34:22', '2023-04-04 15:55:27', NULL),
	(21, '12212', 'qwqw', 'qwqw', 2121, 123, 'C:fakepathprofile.png', '2023-04-04 00:00:10', '2023-04-04 15:55:29', NULL),
	(22, '321321', 'qweasd', 'ewqase', 323223, 321212, 'C:fakepathprofile.png', '2023-04-04 00:07:40', '2023-04-04 15:55:36', NULL),
	(23, 'aaa', 'asd', 'dsafv', 44, 44, NULL, '2023-04-04 11:21:46', '2023-04-04 15:55:41', NULL),
	(24, NULL, NULL, NULL, NULL, NULL, '642b97cc092d5.png', NULL, NULL, NULL),
	(25, 'test_code_01', 'last test', 'dsvdsvadfcbsdbfds', 312, 231, NULL, '2023-04-04 11:31:12', '2023-04-04 15:55:44', NULL),
	(26, 'test_code_02', 'test two', 'vcz', 1432, 246, NULL, '2023-04-04 11:33:32', '2023-04-04 15:55:50', NULL),
	(27, 'asdw', 'sss', 'thee', 34, 34, NULL, '2023-04-04 11:35:34', '2023-04-04 15:55:47', NULL),
	(28, 'wag', '32', 'rtfv54', 46, 46, NULL, '2023-04-04 11:36:46', '2023-04-04 15:55:53', NULL),
	(29, '76tufsw7i6fc', 'r96aehgrd56', 'are', 21, 13, '642ba9d328a34.jpg', '2023-04-04 11:38:08', NULL, NULL),
	(30, 'asd_13254', 'awbh5tr42bh f1245', 'sdfgntrfgnsrtg', 235, 647, NULL, '2023-04-04 11:45:41', '2023-04-04 15:55:55', NULL),
	(31, NULL, NULL, NULL, NULL, NULL, '642b9d6579df3.png', NULL, NULL, NULL),
	(32, '3fg98731fgy7', 'fe83279f62', 'dtyh', 98796, 9879, NULL, '2023-04-04 11:47:05', '2023-04-04 12:26:39', NULL),
	(33, NULL, NULL, NULL, NULL, NULL, '642b9db950ce3.png', NULL, NULL, NULL),
	(34, 't462ji', 't63w4', 'gdj njgd', 67, 687, 'C:fakepath7.jpg', '2023-04-04 11:51:36', '2023-04-04 15:55:59', '2023-04-04 12:25:52'),
	(35, 'gtsr', '3q554', 'uht ,mb', 75, 75, '642b9eecaa6e4.png', '2023-04-04 11:52:12', NULL, NULL),
	(36, '789rv5da67', '974 7fo6', 'fc ssehbsrtgvc nvc ', 98, 96, '642bb9ab622b2.jpg', '2023-04-04 13:45:16', NULL, '2023-04-04 13:46:19'),
	(37, '3658yfvif6', '76979u67', 'avedvsvervrev', 76, 764, NULL, '2023-04-04 15:50:32', '2023-04-04 15:56:01', NULL),
	(38, 'gae', 't454t', 'trsgnnjrtgdc', 46, 46, '642bd6fc54569.jpg', '2023-04-04 15:51:23', NULL, NULL),
	(39, 'afdw', '3qrefg', 'fdzbrh', 235, 547, '642bd83124b6a.jpg', '2023-04-04 15:56:33', NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
