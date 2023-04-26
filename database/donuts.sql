-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2016 at 09:20 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `donuts`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`con_id`, `name`, `email`, `phone`, `mesg`) VALUES
(1, 'phyo', 'phyo@gmail.com', '09250085044', ''),
(2, 'phyo', 'phyo@gmail.com', '09250085044', ''),
(3, 'susu', 'susu@gmail.com', '09765433455', 'dsaytytyeigfsdghtu'),
(4, 'phyo', 'phyo@gmail.com', '09765433455', 'this is good'),
(5, 'susu', 'susu@gmail.com', '09765433455', 'srwttter'),
(6, 'susu', 'susu@gmail.com', '09765433455', 'srwttter'),
(7, 'swqe', 'swqe@gmail.com', 'awer', 'sdrret'),
(8, 'swqe', 'swqe@gmail.com', 'awer', 'sdrret'),
(9, 'safwe', 'safw@gmailcom', 'sarew', 'sarw'),
(10, 'safwe', 'safw@gmailcom', 'sarew', 'sarw');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `prod_no` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `img`, `prod_no`, `price`) VALUES
(1, 'menu-1.jpg', 'menu-1', '5000(Ks)'),
(6, 'menu-2.jpg', 'menu-2', '6000(ks)'),
(7, 'menu-3.jpg', 'menu-3', '6000(ks)'),
(8, 'menu-4.jpg', 'menu-4', '6000(ks)');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ord_id` int(11) NOT NULL AUTO_INCREMENT,
  `productno` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `order_no` varchar(30) NOT NULL,
  PRIMARY KEY (`ord_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ord_id`, `productno`, `price`, `name`, `phone`, `address`, `order_no`) VALUES
(1, '', '5000', 'phyo', '09123456', 'thoewo', 'ord356'),
(2, '', '5000', 'phyo', '09123456', 'fdstaqet', 'ord453'),
(3, '', '5000', 'su su', '0912345', 'tyewrsfy', 'ord279'),
(4, 'Menu-1', '5000', 'susu', '0912345', 'thiepwn', 'ord179'),
(5, 'menu-3', '6000(ks)', 'zaw', '09123456', 'agew', 'ord156'),
(6, 'menu-3', '6000(ks)', 'zaw', '09123456', 'agew', 'ord136'),
(7, 'menu-2', '6000(ks)', 'tee', 'at', 'at', 'ord176'),
(8, 'menu-2', '6000(ks)', 'tre', 'erw', 'dg', 'ord391'),
(9, 'menu-2', '6000(ks)', 'phyo', '098765', 'artqt', 'ord473'),
(10, 'menu-3', '6000(ks)', 'zaw mg', '09123456', 'wrr', 'ord164');

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
  `city` varchar(30) NOT NULL,
  `township` varchar(30) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `name`, `email`, `password`, `phone`, `city`, `township`) VALUES
(15, 'phyo', 'phyo@gmail.com', 'phyo123', '09567834', 'larthar', 'yangon'),
(16, 'susu', 'susu@gmail.com', 'su12345', '09567834', 'bahab', 'yangon'),
(17, 'hla', 'hla@gmial.com', 'hla123', '09567834', 'alie', 'aewar'),
(18, 'mgmg', 'mgmg@gmail.com', 'mg123', '854235', 'rtyre', 'dt');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `pass`) VALUES
('admin', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
