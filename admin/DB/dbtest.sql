-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2017 at 12:50 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital_db2`
--
CREATE DATABASE IF NOT EXISTS `hospital_db2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hospital_db2`;

-- --------------------------------------------------------

--
-- Table structure for table `booking_modes`
--

CREATE TABLE IF NOT EXISTS `booking_modes` (
  `fld_id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_modes` varchar(255) NOT NULL,
  `fldstatus` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`fld_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `booking_modes`
--

INSERT INTO `booking_modes` (`fld_id`, `booking_modes`, `fldstatus`) VALUES
(1, 'Paid', '1'),
(2, 'ToPay', '1'),
(3, 'TBB', '1');

-- --------------------------------------------------------

--
-- Table structure for table `master_status`
--

CREATE TABLE IF NOT EXISTS `master_status` (
  `fld_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_status` varchar(255) NOT NULL,
  `fldstatus` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`fld_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `master_status`
--

INSERT INTO `master_status` (`fld_id`, `main_status`, `fldstatus`) VALUES
(1, 'Transit', '1'),
(2, 'Aterrizado', '1'),
(3, 'Completed', '1'),
(4, 'Delivered', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mst_shipment`
--

CREATE TABLE IF NOT EXISTS `mst_shipment` (
  `fld_id` bigint(91) NOT NULL AUTO_INCREMENT,
  `Shippername` varchar(255) NOT NULL,
  `Shipperphone` varchar(255) NOT NULL,
  `Shipperemail` varchar(255) NOT NULL,
  `Shipperaddress` text NOT NULL,
  `Receivername` varchar(255) NOT NULL,
  `Receiverphone` varchar(255) NOT NULL,
  `Receiveremail` varchar(255) NOT NULL,
  `Receiveraddress` varchar(255) NOT NULL,
  `ConsignmentNo` varchar(255) NOT NULL,
  `Shiptype` varchar(255) NOT NULL,
  `Weight` varchar(255) NOT NULL,
  `Courier` varchar(255) NOT NULL,
  `Packages` varchar(255) NOT NULL,
  `Invoiceno` varchar(255) NOT NULL,
  `Product` varchar(255) NOT NULL,
  `Qnty` varchar(255) NOT NULL,
  `Bookingmode` varchar(255) NOT NULL,
  `Totalfreight` varchar(255) NOT NULL,
  `Mode` varchar(255) NOT NULL,
  `Carrier` varchar(255) NOT NULL,
  `Carrierno` varchar(255) NOT NULL,
  `Depttime` varchar(255) NOT NULL,
  `Origin` varchar(255) NOT NULL,
  `Destination` varchar(255) NOT NULL,
  `Departure` date NOT NULL,
  `timeHours` varchar(255) NOT NULL,
  `timeMins` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `ExpectedDate` date NOT NULL,
  `Comments` varchar(255) NOT NULL,
  `Receipts` varchar(255) NOT NULL,
  `fldstatus` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`fld_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mst_shipment`
--

INSERT INTO `mst_shipment` (`fld_id`, `Shippername`, `Shipperphone`, `Shipperemail`, `Shipperaddress`, `Receivername`, `Receiverphone`, `Receiveremail`, `Receiveraddress`, `ConsignmentNo`, `Shiptype`, `Weight`, `Courier`, `Packages`, `Invoiceno`, `Product`, `Qnty`, `Bookingmode`, `Totalfreight`, `Mode`, `Carrier`, `Carrierno`, `Depttime`, `Origin`, `Destination`, `Departure`, `timeHours`, `timeMins`, `status`, `ExpectedDate`, `Comments`, `Receipts`, `fldstatus`) VALUES
(1, 'New Shipper Name', '9773605108', 'anil.jadhav@gmail.com', 'Navi Mumbai', 'Anil Bhai Jadhav', '9060965032', 'anilbhai@gmail.com', 'koparkhairane Navi Mumbai', 'ABCD123', '2', '250', 'Vichare Courier', 'Bunddle Pa', 'INVOICE-100', 'Paper Product', '100', '1', '2500', '2', '0', 'CAR-200', '4.50 pm', 'Vashi', 'Koparkhairane', '2017-04-19', '10', '00', '1', '2017-04-26', 'Good Transport', 'ReceiptSwiss.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `transport_modes`
--

CREATE TABLE IF NOT EXISTS `transport_modes` (
  `fld_id` int(11) NOT NULL AUTO_INCREMENT,
  `trans_mode` varchar(255) NOT NULL,
  `fldstatus` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`fld_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `transport_modes`
--

INSERT INTO `transport_modes` (`fld_id`, `trans_mode`, `fldstatus`) VALUES
(1, 'Air', '1'),
(2, 'Road', '1'),
(3, 'Train', '1'),
(4, 'Sea', '1');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_shipments`
--

CREATE TABLE IF NOT EXISTS `type_of_shipments` (
  `fld_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_of_shipments` varchar(255) NOT NULL,
  `fldstatus` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`fld_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `type_of_shipments`
--

INSERT INTO `type_of_shipments` (`fld_id`, `type_of_shipments`, `fldstatus`) VALUES
(1, 'Documents', '1'),
(2, 'Parcel', '1'),
(3, 'Sentiments', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'admin', 'admin@gmail.com', '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9');

-- --------------------------------------------------------

--
-- Table structure for table `user_loging`
--

CREATE TABLE IF NOT EXISTS `user_loging` (
  `fld_id` bigint(91) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `comp_nm` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `fldstatus` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`fld_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_loging`
--

INSERT INTO `user_loging` (`fld_id`, `name`, `comp_nm`, `email_id`, `password`, `mobile`, `phone`, `address`, `fldstatus`) VALUES
(1, 'b', 'b', 'b', 'b', 'b', 'b', 'b', '0'),
(2, 'testing one', 'Testing Company', 'anilambani@gmail.com', 'I2VD5T', '9785975232', '02282639', 'test', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
