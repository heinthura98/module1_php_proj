-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2023 at 05:44 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `h_travel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`package_id`, `package_name`, `price`) VALUES
(1, 'Summer Package 1.1', '300,000 '),
(15, 'Summer Package 1.2', '550,000'),
(16, 'Summer Package 2.1', '250000'),
(17, 'Summer Package 2.2', '500000'),
(18, 'Summer Package 3.1', '250000'),
(19, 'Summer Package 3.2', '500000'),
(20, 'Regular Package 1.1', '250000'),
(21, 'Regular Package 1.2', '500000'),
(22, 'Regular Package 2.1', '300000'),
(23, 'Regular Package 2.2', '600000'),
(24, 'Regular Package 3.1', '350000'),
(25, 'Regular Package 3.2', '700000'),
(26, 'Regular Package 4.1', '450000'),
(27, 'Regular Package 4.2', '900000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
