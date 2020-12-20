-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 10, 2020 at 03:41 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Redmi Note 7', 14499),
(2, 'Samsung Galaxy S20', 70999),
(3, 'Redmi Note 8', 14499),
(4, 'Oppo F11', 14990),
(5, 'Redmi Note 8 pro', 16999),
(6, 'Redmi Note 7 pro', 16999),
(7, 'Xifo Tashan-761', 2500),
(8, 'Redmi Note 6 pro', 16999),
(9, 'Samsung Galaxy s20 plus', 77999),
(10, 'Samsung Galaxy m40', 17999),
(11, 'Samsung Galaxy m30s', 14999),
(12, 'Panasonic Eluga Ray 810', 10990),
(13, 'Vivo v17', 24990),
(14, 'Oneplus 7t', 37999),
(15, 'Redmi Note 8 plus', 16999),
(16, 'Redmi Note 6', 14999),
(17, 'Redmi Note 9 pro', 13999),
(18, 'Panasonic Eluga i6', 64999),
(19, 'Redmi Note 8 plus', 16999),
(20, 'Vivo y12', 14499),
(21, 'Xiomi Poco f1', 18999),
(22, 'Realme 5 pro', 14999),
(23, 'Vivo v19', 31990),
(24, 'Samsung Galaxy A30', 15899);

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

DROP TABLE IF EXISTS `support`;
CREATE TABLE IF NOT EXISTS `support` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `name`, `email`, `message`) VALUES
(1, 'dhruv chaudhary', 'dhruvgr1010@gmail.com', 'I am happy with the company.'),
(2, 'Venu Sharma', 'venu@xyz.com', 'This is a great online mobile website');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Venu Sharma', 'venu@xyz.com', 'abcdefg', '547903927', 'Delhi', 'Karol Bagh, Delhi'),
(2, 'Shubham', 'shubham@xyz.com', 'defghshs', '538915694', 'Delhi', 'Karol Bagh, Delhi'),
(3, 'Disha Kaur', 'disha@xyz.com', 'ghijkdsf', '557825323', 'Surat', 'Surat, Gujrat'),
(4, 'Ankit Kumar', 'ankit@xyz.com', 'jklmnsdfs', '561322116', 'Bikaner', 'Tilak Nagar, Bikaner'),
(5, 'Mrinal Joy', 'mrinal@xyz.com', 'klmnop', '517918670', 'Bikaner', 'MP Colony, Bikaner'),
(6, 'Prachi Arora', 'prachi@xyz.com', 'qrstuv', '509841902', 'Hapur', 'Babugarh Chawni, Hapur\r\n'),
(10, 'dhruv chaudhary', 'dhruvgr1010@gmail.com', 'twetwt', '234242', 'suratgarh', 'surya nagar colony ,badopal road , suratgarh'),
(11, 'xyz', 'xyz@gmail.com', 'xyz123', '7845123265', 'abc', 'abc'),
(12, 'abc', 'abc@gmail.com', 'abcxyz', '7845126532', 'xyz', 'xyz'),
(13, 'Tanisha', 'tani@abc.com', 'sduibds', '1231312', 'asduik', 'ujfdf'),
(14, 'pqr', 'pqr@gmail.com', 'pqr123', '7865324512', 'pqr', 'pqr'),
(15, 'mno', 'mno@gmail.com', 'mno123', '7845653212', 'mon', 'mon'),
(16, 'asd', 'asd@gmail.com', 'asd123', '7845986532', 'asd', 'asd'),
(17, 'sdsss', 'sdfsdf@sxgt.com', 'shushdf', '312321', 'sdhuia', 'jdf'),
(18, 'blablabla', 'babla@xyz.com', 'asdfgh', '1234567890', 'guiasdhid', 'gufdigffffuf'),
(19, 'dhruv chaudhary', 'bbb@zz.com', 'e8dc4081b13434b45189a720b77b6818', '12323232131', 'suratgarh', 'surya nagar colony ,badopal road , suratgarh'),
(20, 'David ', 'djjassicc@gmail.com', '97de93c2c282fa07ab3b6fb0921677ff', '1010200510', 'suratgarh', 'surya nagar colony ,badopal road , suratgarh');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `items_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`items_id`),
  KEY `items_id` (`items_id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `items_id`, `status`) VALUES
(3, 11, 1, 'Added to cart'),
(19, 11, 2, 'Added to cart'),
(33, 1, 1, 'Confirmed'),
(34, 1, 3, 'Confirmed'),
(35, 1, 4, 'Confirmed'),
(36, 1, 5, 'Confirmed'),
(37, 1, 1, 'Confirmed'),
(39, 1, 10, 'Confirmed'),
(43, 20, 2, 'Confirmed'),
(44, 20, 1, 'Confirmed'),
(45, 20, 3, 'Confirmed'),
(46, 20, 4, 'Confirmed'),
(47, 20, 1, 'Confirmed'),
(48, 20, 2, 'Confirmed'),
(49, 20, 3, 'Confirmed'),
(50, 20, 4, 'Confirmed'),
(51, 20, 21, 'Confirmed'),
(52, 20, 5, 'Confirmed'),
(53, 20, 6, 'Confirmed'),
(54, 20, 7, 'Confirmed'),
(55, 20, 8, 'Confirmed'),
(56, 20, 9, 'Confirmed'),
(57, 20, 10, 'Confirmed'),
(58, 20, 11, 'Confirmed'),
(59, 20, 12, 'Confirmed'),
(60, 20, 13, 'Confirmed'),
(61, 20, 14, 'Confirmed'),
(62, 20, 15, 'Confirmed'),
(63, 20, 16, 'Confirmed'),
(64, 20, 17, 'Confirmed'),
(65, 20, 18, 'Confirmed'),
(66, 20, 19, 'Confirmed'),
(67, 20, 20, 'Confirmed'),
(68, 20, 22, 'Confirmed'),
(69, 20, 23, 'Confirmed'),
(70, 20, 24, 'Confirmed'),
(71, 20, 2, 'Confirmed');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`items_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
