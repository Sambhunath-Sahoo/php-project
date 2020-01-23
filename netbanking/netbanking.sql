-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2019 at 12:01 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `netbanking`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

CREATE TABLE IF NOT EXISTS `account_details` (
  `customer_id` int(11) NOT NULL,
  `account_no` int(11) NOT NULL,
  `account_type` varchar(8) NOT NULL,
  `account_ifsc` varchar(20) NOT NULL,
  `account_status` varchar(10) NOT NULL,
  `account_balance` int(11) NOT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `account_no` (`account_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE IF NOT EXISTS `customer_details` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(40) NOT NULL,
  `customer_address` varchar(180) NOT NULL,
  `customer_mob` int(10) NOT NULL,
  `customer_dob` date NOT NULL,
  `customer_gender` varchar(1) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_userid` varchar(30) NOT NULL,
  `customer_pwd` varchar(30) NOT NULL,
  `customer_aadhaar` int(12) NOT NULL,
  `customer_join_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `customer_email` (`customer_email`,`customer_userid`,`customer_aadhaar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE IF NOT EXISTS `transaction_details` (
  `customer_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `t_amount` int(11) NOT NULL,
  `t_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `t_type` varchar(7) NOT NULL,
  `t_available_balance` int(11) NOT NULL,
  PRIMARY KEY (`t_id`),
  UNIQUE KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
