-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 17, 2023 at 12:08 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awais`
--
CREATE DATABASE IF NOT EXISTS `awais` DEFAULT CHARACTER SET armscii8 COLLATE armscii8_general_ci;
USE `awais`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` int NOT NULL AUTO_INCREMENT,
  `a_pass` varchar(30) NOT NULL,
  `a_phn` varchar(30) NOT NULL,
  `a_addr` varchar(100) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_nme` varchar(30) NOT NULL,
  `a_img` varchar(100) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=ascii;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_pass`, `a_phn`, `a_addr`, `a_email`, `a_nme`, `a_img`) VALUES
(1, '123', '1122', 'MLT', 'aa@gmail.com', 'abc', 'g1.jpg'),
(2, '123', '1122', 'MLT', 'qwerty1122@gmail.com', 'awaiss', 'kjdskjds');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `c_id` int NOT NULL AUTO_INCREMENT,
  `price` varchar(33) NOT NULL,
  `quantity` varchar(33) NOT NULL,
  `p_id` int NOT NULL,
  `u_id` int NOT NULL,
  PRIMARY KEY (`c_id`),
  KEY `p_id` (`p_id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `f_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(33) NOT NULL,
  `email` varchar(33) NOT NULL,
  `topic` varchar(33) NOT NULL,
  `message` varchar(33) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=ascii;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `name`, `email`, `topic`, `message`) VALUES
(1, 'sunny', 'sana@gmail.com', 'General', 'jkfdkjdfjk');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `m_id` int NOT NULL AUTO_INCREMENT,
  `message` varchar(300) NOT NULL,
  `date` varchar(33) NOT NULL,
  `u_id` int NOT NULL,
  PRIMARY KEY (`m_id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=ascii;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `message`, `date`, `u_id`) VALUES
(3, 'dsdsds gvhg ghghhg', '09 Mar 2023', 1),
(4, 'hgfhgfhgf hggh vygfhv gyvjbh', '13 Mar 2023', 1),
(5, 'hgfhgfhgf hggh vygfhv gyvjbh', '13 Mar 2023', 1),
(6, 'jhjhjhh', '16 Mar 2023', 1);

-- --------------------------------------------------------

--
-- Table structure for table `price_insert`
--

DROP TABLE IF EXISTS `price_insert`;
CREATE TABLE IF NOT EXISTS `price_insert` (
  `pi_id` int NOT NULL AUTO_INCREMENT,
  `price` varchar(33) NOT NULL,
  `p_id` int NOT NULL,
  PRIMARY KEY (`pi_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=ascii;

--
-- Dumping data for table `price_insert`
--

INSERT INTO `price_insert` (`pi_id`, `price`, `p_id`) VALUES
(1, '2500', 9),
(2, '28000', 8),
(3, '4445', 10);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `p_id` int NOT NULL AUTO_INCREMENT,
  `sp_product` varchar(33) DEFAULT NULL,
  `si_product` varchar(33) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=ascii;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `sp_product`, `si_product`, `description`, `image`) VALUES
(8, NULL, 'Malis Self Retaining Retractor Co', '				  				Malis Self Retaining Retractor Complete Set			  				  				  ', 'Malis-Retractor-Complete-Set-510x510.jpg'),
(9, 'Heating Mantle', NULL, '				  				 Heating Mantle	  				  ', 'heating-mantle-se530.jpg'),
(10, 'VE001a - Vacuum Extractor Set', NULL, '				VE001a - Vacuum Extractor Set			  ', 'vacuum-extractor-set-ve001a.jpg'),
(11, NULL, 'Caspar Self Retaining Retractor W', 'Caspar Self Retaining Retractor With Blades', 'Caspar-Retractor-510x510.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE IF NOT EXISTS `purchase` (
  `purchase_id` int NOT NULL AUTO_INCREMENT,
  `quantity` varchar(33) NOT NULL,
  `price` varchar(33) NOT NULL,
  `date` varchar(33) NOT NULL,
  `p_name` varchar(33) NOT NULL,
  `p_id` int NOT NULL,
  PRIMARY KEY (`purchase_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=ascii;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `quantity`, `price`, `date`, `p_name`, `p_id`) VALUES
(5, '200', '1212', '2023-03-16', 'Item 1', 8),
(6, '200', '1212', '2023-03-16', 'Item 2', 9),
(7, '67', '1212', '2023-03-14', 'Item 9', 10);

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

DROP TABLE IF EXISTS `sale`;
CREATE TABLE IF NOT EXISTS `sale` (
  `s_id` int NOT NULL AUTO_INCREMENT,
  `price` varchar(33) NOT NULL,
  `quantity` varchar(33) NOT NULL,
  `p_id` int NOT NULL,
  `u_id` int NOT NULL,
  PRIMARY KEY (`s_id`),
  KEY `p_id` (`p_id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=ascii;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`s_id`, `price`, `quantity`, `p_id`, `u_id`) VALUES
(1, '4445', '1', 10, 1),
(2, '2500', '1', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `send_message`
--

DROP TABLE IF EXISTS `send_message`;
CREATE TABLE IF NOT EXISTS `send_message` (
  `sm_id` int NOT NULL AUTO_INCREMENT,
  `message` varchar(300) NOT NULL,
  `date` varchar(33) NOT NULL,
  `u_id` int NOT NULL,
  PRIMARY KEY (`sm_id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=ascii;

--
-- Dumping data for table `send_message`
--

INSERT INTO `send_message` (`sm_id`, `message`, `date`, `u_id`) VALUES
(1, 'Hi, I am in trouble. Thanks', '10 Mar 2018', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(33) NOT NULL,
  `username` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL,
  `image` varchar(33) NOT NULL,
  `address` varchar(33) NOT NULL,
  `city` varchar(33) NOT NULL,
  `number` varchar(33) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=ascii;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `username`, `password`, `image`, `address`, `city`, `number`) VALUES
(1, 'Sanaullah', 'abc', '123', 'si.jpg', 'hhhhh', 'Dubai', '123456'),
(2, 'sunny', 'abcd', '123', 'si.jpg', 'gfhgfhgfhfgh', 'Dubai', '12132322342'),
(3, 'jhon', 'jhon123', '123', 'img_avatar.png', 'Dubai', 'Dubai', '971501236');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `price_insert`
--
ALTER TABLE `price_insert`
  ADD CONSTRAINT `price_insert_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`);

--
-- Constraints for table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `sale_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`),
  ADD CONSTRAINT `sale_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `send_message`
--
ALTER TABLE `send_message`
  ADD CONSTRAINT `send_message_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
