-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 24, 2020 at 07:39 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `latin_url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `latin_url`) VALUES
(1, 'Rozes', 'rozes'),
(2, 'Tulpes', 'tuples'),
(3, 'Krizantēmas', 'krizantemas'),
(4, 'Lefkojas', 'lefkojas'),
(5, 'Peonijas', 'peonijas'),
(6, 'Hiacintes', 'hiacintes'),
(7, 'Gladiolas', 'gladiolas'),
(8, 'Asteres', 'asteres'),
(9, 'Citi ziedi', 'citi'),
(11, 'Pušķi', 'puski');

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
CREATE TABLE IF NOT EXISTS `goods` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `color` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` float NOT NULL,
  `category_id` int NOT NULL,
  `count` int DEFAULT '0',
  `latin_url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `name`, `color`, `country`, `description`, `price`, `category_id`, `count`, `latin_url`) VALUES
(1, 'maza roze 1', 'sarkana', 'Latvija', 'rozes apraksts', 0.9, 1, 214, 'm-roze-LV'),
(2, 'Superīgs pušķis', 'Rotaina', 'Latvija', 'Superīgs pušķis ar baltām rozēm no Polijas, pioniem no Vācijas un saldumiem no Zviedrijas. Florista Artūra darbs.', 99, 11, 33, 'puskis-a-1'),
(3, 'Loti sarkana tulpe ar svaigu smarzu', 'sarkana', 'Polija', 'Polijas tulpes pamatojums', 0.7, 2, 97, 's-tulpe-PL'),
(4, 'Roza tulpe', 'roza', 'Polija', 'Polijas tulpes pamatojums', 0.7, 2, 121, 'r-tulpe-PL'),
(5, 'Dzeltena tulpe', 'dzeltena', 'Polija', 'Polijas tulpes pamatojums', 0.7, 2, 111, 'd-tulpe-PL'),
(6, 'Violeta tulpe', 'violeta', 'Polija', 'Polijas tulpes pamatojums', 0.7, 2, 29, 'v-tulpe-PL'),
(7, 'Oranža tulpe', 'oranža', 'Polija', 'Polijas tulpes pamatojums', 0.7, 2, 65, 'o-tulpe-PL'),
(8, 'Random Tulpe', 'random', 'LV', 'Random Tulpe', 10, 10, 44, 'rendom_tulpe'),
(9, 'Sarkana roze', 'sarkana', 'Polija', 'Skaista sakrkana roze 50 cm no Polijas', 1.35, 1, 895, 'sarkana-roze-50-PL'),
(10, 'Coral sharm peonijas', 'coral', 'Afrika', 'CORAL CHARM peonijas no Kenijas 60cm', 2, 5, 76, 'coral-charm-KEN'),
(11, 'Gardenia peonijas', 'roza', 'Kenija', 'Peonijas Gardenia 22cm', 4.5, 5, 270, 'g-peonijas-KEN'),
(12, 'Emma peonijas', 'balta', 'Kenija', 'Emma peonijas 30cm no Kenijas', 5.5, 5, 603, 'e-peonijas-KEN'),
(13, 'Peter Brand peonijas', 'tumši rubīnsarkani', 'Latvija', 'Peter Brand peonijas no Latvijas 35cm', 5, 5, 555, 'p-b-peonijas-LV'),
(14, 'Bartzella peonijas', 'dzeltena', 'Latvija', 'Peonijas Bartzella no Latvijas 30cm', 3.5, 5, 777, 'b-peonijas-LV'),
(15, 'Amazing sunset rozes', 'orandži-dzeltena', 'Kenija', 'Amazing sunset rozes 50cm', 1.89, 1, 0, 'a-s-rozes-KEN'),
(16, 'Bond roze', 'sarkana', 'Kenija', 'Bond rozes 50cm', 1.1, 1, 436, 'b-rozes-KEN'),
(17, 'Giadrida roze', 'neoni orandža', 'Kenija', 'Rozes giardina 60cm', 3, 1, 211, 'g-rozes-KEN'),
(18, 'Yellow roze', 'dzeltena', 'Kenija', 'Roze dzeltena 40cm', 0.69, 1, 123, 'y-roze-KEN'),
(19, 'Saulainā laime krizantēma', 'dzeltena', 'Lietuva', 'Saulainā laime 50cm ', 2, 3, 279, 's-l-krizantēmas-LT'),
(20, 'Saba krizantēma', 'violēta', 'Lietuva', 'Krizantēmas Saba 40cm', 1.8, 3, 208, 's-krizantēmas-LT'),
(21, 'Balta krizantēma', 'balta', 'Polija', 'Baltas krizantēmas 45cm', 1.45, 3, NULL, 'b-krizantēma-PL'),
(22, 'Eksotiska krizantēma', 'zila', 'LV', 'Eksotiska krizantēma 50cm no Latvijas', 1.7, 3, 400, 'e-krizantēma-LV'),
(23, 'Zaļa krizantēma', 'zaļa', 'Lietuva', 'Krizantēma zaļa no Lietuvas 45cm', 1.2, 3, NULL, 'z-krizantēma-LT'),
(24, 'Violēta lefkoja', 'violēta', 'Polija', 'Lefkoja violēta no Polijas 37cm', 1.07, 4, 200, 'v-lefkoja-PL'),
(25, 'Lefkoja MIX', 'dažadas', 'Lietuva', 'Lefkoja mix no Lietuvas 50cm', 1, 4, 56, 'lefkoja-m-LT'),
(26, 'Hiacintes MIX', 'dažadas', 'Latvija', 'Pušķis mix hiacintes 25cm', 0.75, 6, 90, 'hiacintes-m-LV'),
(27, 'Mīļas hiacintes', 'roza', 'Latvija', 'Roza hiacintes no Latvijas laukiem', 0.87, 6, 0, 'm-hiacintes-LV'),
(28, 'Gipsy Queen hiacintes', 'koraļļu', 'Igaunija', 'Pašas labākas Gipsy Queen hiacintes', 0.99, 6, 60, 'g-q-hiacintes-EE'),
(29, 'Hiacintes', 'violēta', 'Latvija', 'Violēta hiacintes', 0.99, 6, NULL, 'v-hiacintes-LV'),
(30, 'Gladiolas', 'magenta', 'Čehija', 'Rudenīgas gladiolas no Čehijas', 2.5, 7, 9, 'gladiolas-CZ'),
(31, 'Sarkanas gladiolas', 'sarkana', 'Latvija', 'Gladiolas sarkanas 70cm', 2.8, 7, 800, 's-gladiolas-LV'),
(32, 'Maigas gladiolas', 'roza', 'Latvija', 'Maigas gladiolas jebkuram notikumām', 2.45, 7, 321, 'm-gladiolas-LV'),
(33, 'Makoņainas gladiolas', 'balta', 'Latvija', 'Gladiolas makoņainas 70cm', 2.67, 7, NULL, 'm-gladiolas-LV'),
(34, 'Mix asteres', 'dažadas', 'Latvija', 'Spīdīgas asteres 30cm', 1.32, 8, 31, 'm-asteres-LV'),
(35, 'Jautras asteres', 'permament rose', 'Ķīņa', 'Jautras asteres 45cm', 1.77, 8, 199, 'j-asteres-CN'),
(36, 'Neitrālas asteres', 'beža', 'Ķīņa', 'Bežīgas astres no Ķīņas', 1.78, 8, 358, 'n-asteres-CN'),
(37, 'Gradientra asteres', 'balti-violēta', 'Ķīņa', 'Neparastas gardienta asteres', 1.98, 8, 0, 'g-asteres-CN'),
(38, 'Matainas asteres', 'roza', 'Ķīņa', 'Matainas asteres no Ķīņas', 1.89, 8, 9, 'm-asteres-CN'),
(39, 'Saulespuķe', 'dzeltena', 'Latvija', 'Saulaini ziedi', 2.17, 9, 54, 'saulespuķes-LV'),
(40, 'Frēzijas mix', 'dažadas', 'Igaunija', 'Daudkrasainas frēzijas', 1, 9, 60, 'frēzijas-LV'),
(41, 'Lauku ziedi', 'dažadas', 'Latvija', 'Parasts un ļoti naturāls lauku pušķis', 7.2, 9, NULL, 'l-ziedi-LV'),
(42, 'Orhideja', 'dažadas', 'Spanija', 'Sievišķīgs zieds', 8.2, 9, 90, 'orhideja-LV'),
(43, 'Gerberi mix', 'dažadas', 'Latvija', 'Koši gerberi', 0.65, 9, 433, 'gerberi-LV'),
(44, 'Narcisi', 'dzeltena', 'Polija', 'Saulaini narcisi', 0.3, 9, 223, 's-narcisi-PL'),
(45, 'Rozes kaste', 'sarkana', 'Igaunija', 'Balta kaste ar sarkanam rozem', 44.99, 1, 35, '');

-- --------------------------------------------------------

--
-- Table structure for table `goods_orders`
--

DROP TABLE IF EXISTS `goods_orders`;
CREATE TABLE IF NOT EXISTS `goods_orders` (
  `Gid` int NOT NULL,
  `Gname` varchar(50) CHARACTER SET utf8 COLLATE utf8_latvian_ci NOT NULL,
  `Gprice` float NOT NULL,
  `Gamount` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_orders`
--

INSERT INTO `goods_orders` (`Gid`, `Gname`, `Gprice`, `Gamount`) VALUES
(2, 'test1', 9.5, 3),
(20, 'Saba krizantēma', 1.8, 5),
(24, 'Violēta lefkoja', 1.07, 7),
(15, 'Amazing sunset rozes', 1.89, 10),
(15, 'Amazing sunset rozes', 1.89, 10),
(15, 'Amazing sunset rozes', 1.89, 1),
(15, 'Amazing sunset rozes', 1.89, 3),
(15, 'Amazing sunset rozes', 1.89, 3),
(15, 'Amazing sunset rozes', 1.89, 1),
(15, 'Amazing sunset rozes', 1.89, 1),
(15, 'Amazing sunset rozes', 1.89, 1),
(9, 'Sarkana roze', 1.35, 1),
(24, 'Violēta lefkoja', 1.07, 33);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_latvian_ci NOT NULL,
  `user` varchar(50) CHARACTER SET utf8 COLLATE utf8_latvian_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_latvian_ci NOT NULL,
  `role` varchar(30) CHARACTER SET utf8 COLLATE utf8_latvian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `user`, `password`, `role`) VALUES
(5, 'Admin1', 'admin1', '128107849c2b0511bcb6eaa3028029d1', 'admin'),
(6, 'user1', 'user1', 'd18c2340d16e04dc8160c26349fa7f52', 'user'),
(12, 'audi', 'audi', '8d18102c729385c92b9204001cc8e5e8', 'loxs'),
(13, 'Inna', 'inna', '3ded15a7aafdb96acb11c5a91e79d78f', 'user'),
(14, 'inna', 'login', 'f9a591975cd8131f43d96f63a8d017d6', 'user'),
(16, 'Imma', 'imka', '8bebad39e95b3b5f94573e877feed111', 'admin'),
(17, ' Irina', 'irina25', 'cda2fb21aa5361ce02d47a90a013f860', 'user'),
(18, 'Nikita', 'user2', '5636e005ffc7cd568208163065054422', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_02_161404_create_products_table', 1),
(5, '2020_07_09_115005_create_table_categories', 2),
(6, '2020_07_09_115035_create_table_goods', 2),
(7, '2020_07_09_115043_create_table_goods_orders', 2),
(8, '2020_07_09_115052_create_table_login', 2),
(9, '2020_07_09_115100_create_table_orders', 2),
(10, '2020_07_09_115110_create_table_pages', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `customer_name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `adress` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(50) NOT NULL,
  `countf` int NOT NULL,
  `ptoduct_id` int NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `comment` longtext NOT NULL,
  `datums` datetime NOT NULL,
  `customer_id` int NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_name`, `adress`, `phone`, `countf`, `ptoduct_id`, `product_name`, `comment`, `datums`, `customer_id`) VALUES
(53, 'Nikita', 'Elizabetes iela', '29987676', 1, 10, 'Coral sharm peonijas', 'Extra', '2020-08-25 19:10:00', 18),
(54, 'Admin1', 'Elizabetes iela 45', '25564189', 10, 24, 'Violēta lefkoja', 'as dpd', '2020-08-23 22:00:00', 5),
(55, 'Admin1', 'Elizabetes iela 45', '25564189', 8, 42, 'Orhideja', 'as dpd', '2020-08-23 22:00:00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders_complited`
--

DROP TABLE IF EXISTS `orders_complited`;
CREATE TABLE IF NOT EXISTS `orders_complited` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `customer_name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `adress` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8 COLLATE utf8_latvian_ci NOT NULL,
  `countf` int NOT NULL,
  `ptoduct_id` int NOT NULL,
  `product_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_latvian_ci NOT NULL,
  `comment` longtext CHARACTER SET utf8 COLLATE utf8_latvian_ci NOT NULL,
  `datums` datetime NOT NULL,
  `customer_id` int NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Dumping data for table `orders_complited`
--

INSERT INTO `orders_complited` (`order_id`, `customer_name`, `adress`, `phone`, `countf`, `ptoduct_id`, `product_name`, `comment`, `datums`, `customer_id`) VALUES
(51, ' Irina', 'ilukstes 34', '23343678', 3, 30, 'Gladiolas', 'Skaistus un aatri', '2020-08-17 21:15:00', 17),
(48, 'user1', 'dsafvsvds', '26656554', 3, 6, 'Violeta tulpe', 'fvasdgsv', '2020-08-01 09:37:00', 6),
(52, 'Nikita', 'Elizabetes iela', '29987676', 3, 34, 'Mix asteres', 'Extra', '2020-08-25 19:10:00', 18),
(50, ' Irina', 'ilukstes 34', '23343678', 5, 1, 'maza roze 1', 'Skaistus un aatri', '2020-08-17 21:15:00', 17),
(49, 'Admin1', 'wefafsd', '33223313', 1, 4, 'Roza tulpe', 'ewqrfsdsd', '2020-08-07 04:27:00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `price` double NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
