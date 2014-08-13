-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2014 at 08:57 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bounceapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `connectedapps`
--

CREATE TABLE IF NOT EXISTS `connectedapps` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `app` varchar(250) NOT NULL,
  `u_id` int(5) NOT NULL,
  `AccessToken` text NOT NULL,
  `AccessTokenSecret` text NOT NULL,
  `UserID` text NOT NULL,
  `dateadded` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `connectedapps`
--

INSERT INTO `connectedapps` (`id`, `app`, `u_id`, `AccessToken`, `AccessTokenSecret`, `UserID`, `dateadded`) VALUES
(3, 'fitbit', 1, '8767bf6b05396af0918a7a0a94acfb36', '9c537896313bd4db5a10b7e9e97e1035', '25HHFT', '1407321907');

-- --------------------------------------------------------

--
-- Table structure for table `organisation`
--

CREATE TABLE IF NOT EXISTS `organisation` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `contact_email` text NOT NULL,
  `cord_lat` varchar(250) NOT NULL,
  `cord_long` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `organisation`
--

INSERT INTO `organisation` (`id`, `name`, `address`, `contact_email`, `cord_lat`, `cord_long`) VALUES
(1, 'Wollongong Runners Association', 'Stuart Park\r\nGeorge Hanley Drive, North Wollongong\r\nNSW 2500, Australia', 'sw730@uowmail.edu.au', '-34.4103220', '150.8994663'),
(2, 'Savvy Fitness Fairy Meadow', 'Unit 5/135-143 Princes Hwy, Fairy Meadow NSW 2519', 'sw730@uowmail.edu.au', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `organise_assign`
--

CREATE TABLE IF NOT EXISTS `organise_assign` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `organ_id` int(5) NOT NULL,
  `date_assigned` varchar(250) NOT NULL,
  `date_unassigned` varchar(250) NOT NULL,
  `perms` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `organise_assign`
--

INSERT INTO `organise_assign` (`id`, `user_id`, `organ_id`, `date_assigned`, `date_unassigned`, `perms`) VALUES
(1, 5, 1, '1407843007', '', 1),
(2, 5, 2, '1407843007', '', 3),
(3, 6, 2, '1407843007', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `emailaddress` text NOT NULL,
  `password` varchar(250) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '0',
  `ip` varchar(250) NOT NULL,
  `activationhash` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `emailaddress`, `password`, `phonenumber`, `status`, `type`, `ip`, `activationhash`) VALUES
(1, 'Stewart', 'Wilson', 'stewartwilson@outlook.com', '$2y$10$MoXWADFSxO1QoLGOzp3Ra.yc0giYri6IwYMqL25fU9pxnVttBJQvq', '0433971992', 1, 1, '', ''),
(4, 'Stewart', 'W', 'sw730@uowmail.edu.au', '$2y$10$o8xRW5d4XCsAyfCSrH7mQ.j2CaXW0/E2erOVdtk0/YX/KJQ8uAqV6', '0411111111', 0, 1, '', '86312f1882fc284272d416d19a105856878c30ad95233bb8ead09ff3d0e1d14a'),
(5, 'Stewart', 'Trainer', 'trainer@stewartwilson.id.au', '$2y$10$UpXJ5SSgHf6DVZ1XIPw.IOqCxgDqx/xJykPBNt4qBpxpLnW8cYni6', '0400000000', 1, 2, '127.0.0.1', ''),
(6, 'Stewart 2', 'Trainer 2', 'trainer2@stewartwilson.id.au', '$2y$10$/2ufo3mxIoJAPFjY.FWaX.x69gD6/nY32Zj6d/h05.Q3Ba3BFrM6u', '0400000001', 1, 0, '127.0.0.1', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
