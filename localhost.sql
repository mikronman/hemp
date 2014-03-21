CREATE DATABASE  IF NOT EXISTS `hemp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hemp`;

-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2014 at 11:32 PM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hemp`
--

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(75) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(75) NOT NULL,
  `state` varchar(10) NOT NULL,
  `zip` int(10) NOT NULL,
  `description` longtext NOT NULL,
  `tier` enum('1','2') NOT NULL DEFAULT '1',
  `status` enum('a','i') NOT NULL DEFAULT 'a' COMMENT 'a = active , i = inactive',
  `pic_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `vendor_name`, `phone`, `address`, `city`, `state`, `zip`, `description`, `tier`, `status`, `pic_url`) VALUES
(1, 'Vendor Name', '4044081634', '24 Huntington Place Dr', 'Atlanta', 'GA', 30350, 'this is the description. blah blah blah. this is the description. blah blah blah. this is the description. blah blah blah. this is the description. blah blah blah. this is the description. blah blah blah', '1', 'a', ''),
(2, 'Second Vendor', '4044081634', '24 Huntington Place Dr', 'Atlanta', 'GA', 30350, 'This is the description', '2', 'a', ''),
(3, 'Vendor Name example', '4044081634', '24 Huntingonelkghdskj', 'Atlanta', 'GA', 30350, 'Description. Lorem Ipsum', '1', 'a', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
