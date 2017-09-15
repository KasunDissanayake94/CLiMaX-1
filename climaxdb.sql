-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2017 at 06:53 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `climaxdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(255) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Transport'),
(2, 'Education'),
(3, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `com_id` int(255) NOT NULL AUTO_INCREMENT,
  `comment` varchar(1000) NOT NULL,
  `cust_id` int(255) NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`com_id`, `comment`, `cust_id`) VALUES
(1, 'I have the same problem. What we can do???\r\n', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` int(255) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(60) NOT NULL,
  `cust_email` varchar(75) NOT NULL,
  `cust_phone` int(12) NOT NULL,
  `cust_address` varchar(100) NOT NULL,
  `cust_gender` varchar(10) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_email`, `cust_phone`, `cust_address`, `cust_gender`) VALUES
(1, 'Kasun Dissanayake', 'kasunprageethdissanayake@gmail.com', 711625552, 'Panadura', 'Male'),
(2, 'Hisan Hunais', 'hisan.live@gmail.com', 762345443, 'Dehiwala', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `customer_category`
--

DROP TABLE IF EXISTS `customer_category`;
CREATE TABLE IF NOT EXISTS `customer_category` (
  `cust_id` int(255) NOT NULL,
  `cat_id` int(255) NOT NULL,
  PRIMARY KEY (`cust_id`,`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_category`
--

INSERT INTO `customer_category` (`cust_id`, `cat_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer_problem`
--

DROP TABLE IF EXISTS `customer_problem`;
CREATE TABLE IF NOT EXISTS `customer_problem` (
  `cust_id` int(255) NOT NULL,
  `prob_id` int(255) NOT NULL,
  `prob_description` varchar(1000) NOT NULL,
  `cat_id` int(255) NOT NULL,
  `rate` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cust_id`,`prob_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_problem`
--

INSERT INTO `customer_problem` (`cust_id`, `prob_id`, `prob_description`, `cat_id`, `rate`) VALUES
(1, 1, 'I think all of you have this problem. "Why don''t bus conductors give change?" Can''t we solve this problem.', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `problem_comment`
--

DROP TABLE IF EXISTS `problem_comment`;
CREATE TABLE IF NOT EXISTS `problem_comment` (
  `prob_id` int(255) NOT NULL,
  `com_id` int(255) NOT NULL,
  PRIMARY KEY (`prob_id`,`com_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem_comment`
--

INSERT INTO `problem_comment` (`prob_id`, `com_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(15) NOT NULL,
  `first_time` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `last_login`, `is_deleted`, `type`, `first_time`) VALUES
(18, 'Wasura', 'Wattearachchi', 'wasuradananjith@gmail.com', '900150983cd24fb0d6963f7d28e17f72', '2017-09-09 20:04:30', 0, 'Customer', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
