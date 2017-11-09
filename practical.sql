-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for practical
CREATE DATABASE IF NOT EXISTS `practical` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `practical`;


-- Dumping structure for table practical.user_register
CREATE TABLE IF NOT EXISTS `user_register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `dob` datetime NOT NULL,
  `phone_no` double NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table practical.user_register: ~0 rows (approximately)
DELETE FROM `user_register`;
/*!40000 ALTER TABLE `user_register` DISABLE KEYS */;
INSERT INTO `user_register` (`id`, `first_name`, `last_name`, `user_name`, `password`, `email`, `gender`, `dob`, `phone_no`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'dholariya', 'vipul', 'Praful', '25f9e794323b453885f5181f1b624d0b', 'prafulmali@yandex.com', 'M', '2017-11-18 00:00:00', 9036803060, '', '2017-11-08 12:04:51', '2017-11-08 12:04:51'),
	(2, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '0000-00-00 00:00:00', 0, '', '2017-11-08 12:42:02', '2017-11-08 12:42:02');
/*!40000 ALTER TABLE `user_register` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
