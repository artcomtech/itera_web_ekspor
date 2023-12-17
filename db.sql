-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
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


-- Dumping database structure for db_ekspor
DROP DATABASE IF EXISTS `db_ekspor`;
CREATE DATABASE IF NOT EXISTS `db_ekspor` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_ekspor`;

-- Dumping structure for table db_ekspor.about
DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` tinytext,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `location` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_ekspor.about: ~0 rows (approximately)
DELETE FROM `about`;
INSERT INTO `about` (`id`, `title`, `desc`, `location`, `phone`) VALUES
	(1, '<span>Best Copra</span> Great Company 1', 'We are a company in Indonesia that provides raw coconut and its derivatives such as Copra, Cocofiber/Coconut Fiber and Cocopeat/Coconut Shell Charcoal. Some of the other products provided are Grade A Watermelon, Enoki Mushrooms, Ant Sugar and Palm Sugar', 'Bandar Lampung', '0832546556');

-- Dumping structure for table db_ekspor.category
DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `desc` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_ekspor.category: ~0 rows (approximately)
DELETE FROM `category`;
INSERT INTO `category` (`id`, `title`, `desc`, `image`) VALUES
	(1, 'Coconut', 'Various types of products from coconut', 'img-coconut.png'),
	(2, 'Palm Sugar', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia .', 'gula-aren.png'),
	(3, 'Enoki Mushrooms', 'Enoki herbal medicine with the best quality and freshness .', 'enoki.png'),
	(4, 'Watermelon', 'Watermelon with grade A quality .', 'semangka.png');

-- Dumping structure for table db_ekspor.product
DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `star` int DEFAULT NULL,
  `price` float DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_ekspor.product: ~4 rows (approximately)
DELETE FROM `product`;
INSERT INTO `product` (`id`, `title`, `star`, `price`, `unit`, `image`) VALUES
	(1, 'Coco Peat', 5, 42.49, 'Kg', 'coco-peat.png'),
	(2, 'Coconut Fiber', 5, 42.49, 'Kg', 'coco-fiber.png'),
	(3, 'Coconut Oil', 5, 42.49, 'Kg', 'coconut-oil.jpg'),
	(4, 'Coconut Husk', 5, 42.49, 'Kg', 'coconut-husk.png');

-- Dumping structure for table db_ekspor.service
DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `image` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_ekspor.service: ~3 rows (approximately)
DELETE FROM `service`;
INSERT INTO `service` (`id`, `title`, `image`) VALUES
	(1, 'Best Service', 'icon coconut.png'),
	(2, 'Best Quality', 'icon coconut.png'),
	(3, 'Best Product', 'icon coconut.png');

-- Dumping structure for table db_ekspor.slider
DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `desc` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_ekspor.slider: ~0 rows (approximately)
DELETE FROM `slider`;
INSERT INTO `slider` (`id`, `title`, `desc`) VALUES
	(1, 'Best Copra Great Company', 'We are a company in Indonesia that provides raw coconut and its derivatives such as Copra, Cocofiber/Coconut Fiber and Cocopeat/Coconut Shell Charcoal. Some of the other products provided are Grade A Watermelon, Enoki Mushrooms, Ant Sugar and Palm Sugar');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
