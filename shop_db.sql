-- --------------------------------------------------------
-- Hostitel:                     localhost
-- Verze serveru:                10.4.20-MariaDB - mariadb.org binary distribution
-- OS serveru:                   Win64
-- HeidiSQL Verze:               11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Exportování struktury databáze pro
CREATE DATABASE IF NOT EXISTS `shop_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `shop_db`;

-- Exportování struktury pro tabulka shop_db.cart
CREATE TABLE IF NOT EXISTS `cart` (
    `id` int(200) NOT NULL AUTO_INCREMENT,
    `name` varchar(200) NOT NULL,
    `price` varchar(200) NOT NULL,
    `image` varchar(200) NOT NULL,
    `quantity` int(200) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Exportování dat pro tabulku shop_db.cart: ~0 rows (přibližně)
DELETE FROM `cart`;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;

-- Exportování struktury pro tabulka shop_db.order
CREATE TABLE IF NOT EXISTS `order` (
    `id` int(200) NOT NULL AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    `number` varchar(12) NOT NULL,
    `email` varchar(200) NOT NULL,
    `method` varchar(100) NOT NULL,
    `flat` varchar(100) NOT NULL,
    `street` varchar(100) NOT NULL,
    `city` varchar(100) NOT NULL,
    `state` varchar(100) NOT NULL,
    `total_products` varchar(200) NOT NULL,
    `total_price` varchar(200) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Exportování dat pro tabulku shop_db.order: ~0 rows (přibližně)
DELETE FROM `order`;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;

-- Exportování struktury pro tabulka shop_db.products
CREATE TABLE IF NOT EXISTS `products` (
    `id` int(200) NOT NULL AUTO_INCREMENT,
    `name` varchar(200) NOT NULL,
    `price` varchar(200) NOT NULL,
    `image` varchar(200) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Exportování dat pro tabulku shop_db.products: ~9 rows (přibližně)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
                                                            (1, 'Batman kachnička', '299', 'batman.jpg'),
                                                            (2, 'Kapitán kachnička', '299', 'kapitan.jpg'),
                                                            (3, 'Super kachnička', '299', 'swag.jpg'),
                                                            (4, 'Čtenář kachnička', '299', 'reader.jpg'),
                                                            (5, 'Lovec kachnička', '299', 'lovec.jpg'),
                                                            (6, 'Gangster kachnička', '299', 'gangster.jpg'),
                                                            (7, 'Policista kachnička', '299', 'policie.jpg'),
                                                            (8, 'Hasič kachnička', '299', 'hasic.jpg'),
                                                            (9, 'Doktor kachnička', '299', 'doktor.jpg');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

