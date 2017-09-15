-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2017 at 09:19 PM
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
(3, 'Technology'),
(4, 'Social'),
(5, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `com_id` int(255) NOT NULL AUTO_INCREMENT,
  `comment` varchar(1000) NOT NULL,
  `com_date` datetime DEFAULT NULL,
  `cust_id` int(255) NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`com_id`, `comment`, `com_date`, `cust_id`) VALUES
(1, 'I have the same problem. What we can do???\r\n', '2017-09-15 02:10:24', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` int(255) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(60) NOT NULL,
  `cust_email` varchar(75) NOT NULL,
  `cust_phone` int(12) DEFAULT NULL,
  `cust_address` varchar(100) DEFAULT NULL,
  `cust_gender` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_email`, `cust_phone`, `cust_address`, `cust_gender`) VALUES
(1, 'Kasun Dissanayake', 'kasunprageethdissanayake@gmail.com', 711625552, 'Panadura', 'Male'),
(2, 'Hisan Hunais', 'hisan.live@gmail.com', 762345443, 'Dehiwala', 'Male'),
(5, 'Dulmina', 'dula@gmail.com', NULL, NULL, NULL),
(6, 'Dineth Kariyawasam', 'dinethkariyawasam@gmail.com', 775125698, 'Nittambuwa', 'Male'),
(7, 'Jane De Souza', 'jane@yahoo.com', 774589874, 'Kolpity', 'Female'),
(8, 'Amali Perera', 'amali@gmail.com', 771254789, 'Kandy', 'Female'),
(9, 'Mohombi ', 'mohombi@gmail.com', 714558865, 'Panadura', 'Male'),
(10, 'Harindi Alwis', 'harindi@gmail.com', 778954123, 'Ratnapura', 'Female');

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
  `prob_date` datetime DEFAULT NULL,
  `cat_id` int(255) NOT NULL,
  `rate` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cust_id`,`prob_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_problem`
--

INSERT INTO `customer_problem` (`cust_id`, `prob_id`, `prob_description`, `prob_date`, `cat_id`, `rate`) VALUES
(1, 1, 'I think all of you have this problem. "Why don''t bus conductors give change?" Can''t we solve this problem.', '2017-09-14 10:14:27', 1, 0),
(2, 2, '"Isn''t it going to be great if we arrange a dengue campaign in Colombo area?"', '2017-09-13 00:00:00', 4, 0),
(5, 3, 'Stray Dogs chasing us when jogging? Am I correct? Can''t we stop this?', '2017-09-16 04:11:18', 5, 0),
(6, 4, 'Any smart way to do garbage disposal? Like using IoT anything?', '2017-09-12 05:14:10', 5, 0),
(8, 5, 'We don''t have a proper library in Kandy Baalika Vidhyala? Can anyone look into this?', '2017-09-11 17:09:22', 2, 0);

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
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(15) NOT NULL,
  `first_time` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `last_login`, `is_deleted`, `type`, `first_time`) VALUES
(18, 'Wasura', 'wasuradananjith@gmail.com', '900150983cd24fb0d6963f7d28e17f72', '2017-09-16 02:47:16', 0, 'Customer', 0),
(26, 'Dulmina', 'dula@gmail.com', '900150983cd24fb0d6963f7d28e17f72', NULL, 0, 'Customer', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
