-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2012 at 04:25 AM
-- Server version: 5.5.24
-- PHP Version: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gharpay`
--

-- --------------------------------------------------------

--
-- Table structure for table `0_budget`
--

CREATE TABLE IF NOT EXISTS `0_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `due_date` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `alert_amount` int(11) DEFAULT NULL,
  `happy_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `0_expenses`
--

CREATE TABLE IF NOT EXISTS `0_expenses` (
  `transactionid` int(11) NOT NULL AUTO_INCREMENT,
  `time` bigint(20) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `paidto` text NOT NULL,
  `comments` text NOT NULL,
  `category` text NOT NULL,
  `mode` text NOT NULL,
  `in/out` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`transactionid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1_budget`
--

CREATE TABLE IF NOT EXISTS `1_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `timestamp` bigint(20) NOT NULL,
  `due_date` bigint(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `alert_amount` int(11) NOT NULL,
  `happy_amount` int(11) NOT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1_expenses`
--

CREATE TABLE IF NOT EXISTS `1_expenses` (
  `transactionid` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `paidto` text NOT NULL,
  `comments` text NOT NULL,
  `category` text NOT NULL,
  `mode` text NOT NULL,
  `in/out` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`transactionid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1_expenses`
--

INSERT INTO `1_expenses` (`transactionid`, `time`, `amount`, `paidto`, `comments`, `category`, `mode`, `in/out`) VALUES
(0, 1348089058, 703, '', 'jssuTQGNDaEa', '2', 'cash', 1),
(1, 1000, 1000, 'randi', 'awesome sex', 'amateur', 'all', 1);

-- --------------------------------------------------------

--
-- Table structure for table `2_budget`
--

CREATE TABLE IF NOT EXISTS `2_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `due_date` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `alert_amount` int(11) DEFAULT NULL,
  `happy_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `2_expenses`
--

CREATE TABLE IF NOT EXISTS `2_expenses` (
  `transactionid` int(11) NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `amount` int(11) NOT NULL,
  `paidto` text NOT NULL,
  `comments` text NOT NULL,
  `category` text NOT NULL,
  `mode` text NOT NULL,
  PRIMARY KEY (`transactionid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `2_expenses`
--

INSERT INTO `2_expenses` (`transactionid`, `time`, `amount`, `paidto`, `comments`, `category`, `mode`) VALUES
(1, '2012-09-19 17:45:09', 470, 'zxczc', 'fCeNWdCgaosi', '1', 'ZmKTGmaIsUQD'),
(12, '2012-09-17 09:09:07', 135, 'LIC', 'Annual Premium', 'Insurance', 'Cash'),
(13, '0000-00-00 00:00:00', 999, '', 'xsvSaTszswdB', '3', 'FsawkJVFnwtS'),
(14, '0000-00-00 00:00:00', 617, '', 'noHCaEnHesXL', '1', 'ELakYVseuQrE'),
(15, '0000-00-00 00:00:00', 1000, '', 'pXbPLEFsFaRg', '2', 'cash'),
(16, '0000-00-00 00:00:00', 358, '', 'TxsNgkToactx', '1', 'cash'),
(17, '0000-00-00 00:00:00', 607, '', 'oTaDpFsrjOie', '1', 'cash'),
(18, '0000-00-00 00:00:00', 709, '', 'GLjswnAaakEl', '1', 'cash'),
(19, '0000-00-00 00:00:00', 273, '', 'agGQntoQKwsi', '3', 'cash'),
(20, '0000-00-00 00:00:00', 698, '', 'ogsSEzAeTfpa', '3', 'cash'),
(21, '0000-00-00 00:00:00', 325, '', 'xsOctJLaYbRB', '3', 'cash'),
(22, '0000-00-00 00:00:00', 54, '', 'aafYlrCmwstZ', '3', 'cash'),
(23, '0000-00-00 00:00:00', 277, '', 'qsUDChrgkakO', '3', 'cash'),
(24, '0000-00-00 00:00:00', 631, '', 'csQoOIGaSQaL', '1', 'cash'),
(25, '0000-00-00 00:00:00', 808, '', 'ThunRHCaLics', '3', 'cash'),
(26, '0000-00-00 00:00:00', 873, '', 'igYiRsazVWDE', '2', 'cash'),
(27, '0000-00-00 00:00:00', 979, '', 'RwBZvsKLwdia', '3', 'cash'),
(28, '0000-00-00 00:00:00', 206, '', 'afutXKlkvDBs', '2', 'cash'),
(29, '0000-00-00 00:00:00', 514, '', 'HlsUYkvLaeZz', '3', 'cash'),
(30, '0000-00-00 00:00:00', 884, '', 'OEYssaiArpAs', '1', 'cash'),
(31, '0000-00-00 00:00:00', 263, '', 'IrBzmOVsjdaL', '1', 'cash'),
(32, '0000-00-00 00:00:00', 696, '', 'SKDrWirsUAa', '3', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `3_budget`
--

CREATE TABLE IF NOT EXISTS `3_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `due_date` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `alert_amount` int(11) DEFAULT NULL,
  `happy_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `3_expenses`
--

CREATE TABLE IF NOT EXISTS `3_expenses` (
  `transactionid` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `amount` int(11) NOT NULL,
  `paidto` text NOT NULL,
  `comments` text NOT NULL,
  `category` text NOT NULL,
  `mode` text NOT NULL,
  PRIMARY KEY (`transactionid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3_expenses`
--

INSERT INTO `3_expenses` (`transactionid`, `time`, `amount`, `paidto`, `comments`, `category`, `mode`) VALUES
(0, '0000-00-00 00:00:00', 103, '', 'TrsAAiefaOz', '2', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `4_budget`
--

CREATE TABLE IF NOT EXISTS `4_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `due_date` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `alert_amount` int(11) DEFAULT NULL,
  `happy_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `4_budget`
--

INSERT INTO `4_budget` (`entry_no`, `category`, `timestamp`, `due_date`, `amount`, `alert_amount`, `happy_amount`) VALUES
(1, 'abcd', 1348082682, 1350674682, 1000, 900, 500),
(2, 'abcd', 1348082731, 1350674731, 1000, 900, 500),
(3, 'abcd', 1348082753, 1350674753, 1000, 900, 500),
(4, 'abcd', 1348083083, 1350675083, 1000, 900, 500);

-- --------------------------------------------------------

--
-- Table structure for table `4_expenses`
--

CREATE TABLE IF NOT EXISTS `4_expenses` (
  `transactionid` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `amount` int(11) NOT NULL,
  `paidto` text NOT NULL,
  `comments` text NOT NULL,
  `category` text NOT NULL,
  `mode` text NOT NULL,
  PRIMARY KEY (`transactionid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `4_expenses`
--

INSERT INTO `4_expenses` (`transactionid`, `time`, `amount`, `paidto`, `comments`, `category`, `mode`) VALUES
(0, '0000-00-00 00:00:00', 250, '', 'acsPKTQuYzJQ', '2', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `5_budget`
--

CREATE TABLE IF NOT EXISTS `5_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `due_date` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `alert_amount` int(11) DEFAULT NULL,
  `happy_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `5_expenses`
--

CREATE TABLE IF NOT EXISTS `5_expenses` (
  `transactionid` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `paidto` text NOT NULL,
  `comments` text NOT NULL,
  `category` text NOT NULL,
  `mode` text NOT NULL,
  PRIMARY KEY (`transactionid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `5_expenses`
--

INSERT INTO `5_expenses` (`transactionid`, `time`, `amount`, `paidto`, `comments`, `category`, `mode`) VALUES
(0, 0, 293, '', 'jssauZpslqVZ', '1', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `6_budget`
--

CREATE TABLE IF NOT EXISTS `6_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `due_date` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `alert_amount` int(11) DEFAULT NULL,
  `happy_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `6_expenses`
--

CREATE TABLE IF NOT EXISTS `6_expenses` (
  `transactionid` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `amount` int(11) NOT NULL,
  `paidto` text NOT NULL,
  `comments` text NOT NULL,
  `category` text NOT NULL,
  `mode` text NOT NULL,
  PRIMARY KEY (`transactionid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `6_expenses`
--

INSERT INTO `6_expenses` (`transactionid`, `time`, `amount`, `paidto`, `comments`, `category`, `mode`) VALUES
(0, '0000-00-00 00:00:00', 39, '', 'lQJrCfansOCe', '3', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `7_budget`
--

CREATE TABLE IF NOT EXISTS `7_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `due_date` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `alert_amount` int(11) DEFAULT NULL,
  `happy_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `8_budget`
--

CREATE TABLE IF NOT EXISTS `8_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `due_date` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `alert_amount` int(11) DEFAULT NULL,
  `happy_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `9_budget`
--

CREATE TABLE IF NOT EXISTS `9_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `due_date` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `alert_amount` int(11) DEFAULT NULL,
  `happy_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `10_budget`
--

CREATE TABLE IF NOT EXISTS `10_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `due_date` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `alert_amount` int(11) DEFAULT NULL,
  `happy_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `11_budget`
--

CREATE TABLE IF NOT EXISTS `11_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `due_date` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `alert_amount` int(11) DEFAULT NULL,
  `happy_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `12_budget`
--

CREATE TABLE IF NOT EXISTS `12_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `due_date` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `alert_amount` int(11) DEFAULT NULL,
  `happy_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `13_budget`
--

CREATE TABLE IF NOT EXISTS `13_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `due_date` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `alert_amount` int(11) DEFAULT NULL,
  `happy_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `14_budget`
--

CREATE TABLE IF NOT EXISTS `14_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `due_date` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `alert_amount` int(11) DEFAULT NULL,
  `happy_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `15_budget`
--

CREATE TABLE IF NOT EXISTS `15_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `due_date` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `alert_amount` int(11) DEFAULT NULL,
  `happy_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `16_budget`
--

CREATE TABLE IF NOT EXISTS `16_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `due_date` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `alert_amount` int(11) DEFAULT NULL,
  `happy_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `17_budget`
--

CREATE TABLE IF NOT EXISTS `17_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `due_date` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `alert_amount` int(11) DEFAULT NULL,
  `happy_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `18_budget`
--

CREATE TABLE IF NOT EXISTS `18_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `due_date` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `alert_amount` int(11) DEFAULT NULL,
  `happy_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `19_budget`
--

CREATE TABLE IF NOT EXISTS `19_budget` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `due_date` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `alert_amount` int(11) DEFAULT NULL,
  `happy_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Persons`
--

CREATE TABLE IF NOT EXISTS `Persons` (
  `P_Id` int(11) NOT NULL AUTO_INCREMENT,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`P_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE IF NOT EXISTS `useraccounts` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `lastip` varchar(30) NOT NULL,
  `lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`userid`, `name`, `username`, `password`, `email`, `lastip`, `lastlogin`) VALUES
(1, 'Prashant Kiran', 'prasht63', 'codehead', 'prasht63@gmail.com', '127.0.0.1', '2012-09-17 17:32:07'),
(4, 'kanjus', 'kanjus', ' kanjus', '12345 ', '127.0.0.1', '2012-09-17 17:32:07'),
(16, 'ali baba', 'abba', 'chalis chor', 'khulja@simsim.com', '1.1.1.1', '0000-00-00 00:00:00'),
(19, 'ali baba', 'kallu mama', 'chalis chor', 'khulja@simsim.com', '1.1.1.1', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
