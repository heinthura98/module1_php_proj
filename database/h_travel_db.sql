-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2023 at 12:33 PM
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
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `name` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `role` varchar(50) DEFAULT 'NOT NULL'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`name`, `pass`, `role`) VALUES
('admin', '1234', 'HR'),
('hein', '1234', 'Editor');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mesg` varchar(50) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`con_id`, `name`, `email`, `phone`, `mesg`) VALUES
(11, 'aung', 'aa@gmail.com', '09777777777', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `customer_service`
--

CREATE TABLE IF NOT EXISTS `customer_service` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `customer_service`
--

INSERT INTO `customer_service` (`no`, `email`, `comment`) VALUES
(1, 'liquidmiracle619@gmail.com', ''),
(2, 'liquidmiracle619@gmail.com', ''),
(3, 'horux1998@gmail.com', 'Hello Admin! Good evening..'),
(4, 'sothine2011@gmail.com', 'Testing Popup '),
(5, 'sothine2011@gmail.com', 'testing pop up again'),
(6, 'sothine2011@gmail.com', 'testing pop up again'),
(7, 'sothine2011@gmail.com', 'testing pop up again'),
(8, 'sothine2011@gmail.com', 'testing pop up again'),
(9, 'horux1998@gmail.com', 'alert feedback'),
(10, 'horux1998@gmail.com', 'alert feedback'),
(11, 'yamin@gmail.com', 'Hi admin testing alert '),
(12, 'yamin@gmail.com', 'Hi admin testing alert '),
(13, 'yamin@gmail.com', 'Hi admin testing alert '),
(14, 'yamin@gmail.com', 'Hi admin testing alert '),
(15, 'yamin@gmail.com', 'Hi admin testing alert '),
(16, 'sothine2011@gmail.com', ''),
(17, '', ''),
(18, '', ''),
(19, 'gg@gmail.com', ''),
(20, 'gg@gmail.com', ''),
(21, 'copy@gmail.com', ''),
(22, 'gg@gmail.com', 'testing'),
(23, 'testing@gmail.com', 'hello'),
(24, 'testing@gmail.com', 'hello'),
(25, 'sothine2011@gmail.com', ''),
(26, 'gg@gmail.com', ''),
(27, '10am@gmail.com', 'pouk lr p kwar'),
(28, '10am@gmail.com', 'well played'),
(29, 'horux1998@gmail.com', 'agawge'),
(30, 'gg@gmail.com', 'helo bar nyar'),
(31, 'heol@gmail.com', 'hleo'),
(32, 'heol@gmail.com', 'hleo');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(50) NOT NULL,
  `price` int(100) NOT NULL,
  `package_image` varchar(50) NOT NULL,
  `package_detail` varchar(50) NOT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`package_id`, `package_name`, `price`, `package_image`, `package_detail`) VALUES
(1, 'Kyite Htee Yoe - Kyite Khamee - Sakse (4 days)', 300000, 'Kyite_Htee_Yoe.jpg', '4 days '),
(3, 'Taung Gyi - Inn Lay - Pinn Taya (1 full week)', 500000, 'Inn_Layy.jpg', '1 week'),
(4, 'Mandalay - Pyin Oo Lwin - May Myo (1 full week)', 400000, 'Mandalay.jpg', '1 week'),
(5, 'Pathein - Chaung Thar - Ngwe Saung (5 days)', 400000, 'chaung_thar.jpg', '5 days');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(50) NOT NULL AUTO_INCREMENT,
  `ordered_packages` int(50) NOT NULL,
  `quantity` int(100) NOT NULL,
  `total_price` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `ordered_packages`, `quantity`, `total_price`, `email`, `package_name`) VALUES
(1, 4, 4, 1600000, 'liquidmiracle619@gmail.com', 'Mandalay - Pyin Oo Lwin - May Myo (1 full week)'),
(2, 1, 3, 900000, 'liquidmiracle619@gmail.com', 'Kyite Htee Yoe - Kyite Khamee - Sakse (4 days)'),
(3, 4, 3, 1200000, 'liquidmiracle619@gmail.com', 'Mandalay - Pyin Oo Lwin - May Myo (1 full week)');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone` varchar(30) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `name`, `email`, `password`, `phone`) VALUES
(19, 'thuthu', 'tt@gmail.com', '1234', '0999999999999'),
(20, 'Hein', 'horux1998@gmail.com', '1234', '09965113126'),
(21, 'Mi Yaminn', 'yamin@gmail.com', '1234', '09965113126'),
(22, 'Zwe', 'zwe@gmail.com', '1234', '0986452345'),
(23, 'Hound ', 'hound@gmail.com', '1234', '8645643634');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
