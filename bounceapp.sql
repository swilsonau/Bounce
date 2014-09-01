-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2014 at 08:44 AM
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
-- Table structure for table `assign_request`
--

CREATE TABLE IF NOT EXISTS `assign_request` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `org_id` int(5) NOT NULL,
  `perms` int(1) NOT NULL DEFAULT '1',
  `authkey` varchar(250) NOT NULL,
  `timerequested` varchar(250) NOT NULL,
  `expiry` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `assign_request`
--

INSERT INTO `assign_request` (`id`, `user_id`, `org_id`, `perms`, `authkey`, `timerequested`, `expiry`) VALUES
(2, 7, 3, 1, '4eef1e8e77e3f7457c5c700b3b4a3c7a9b82ef3f6ece1beda0a8c0f0103494e0', '1409124665', '1409729465'),
(3, 1, 2, 1, 'a51b2cacf3a03f4554a6c6ea53e1a0673dc31fa4d919c008845fc639e0ed5be9', '1409125348', '1409730148');

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
  `contact_email` text NOT NULL,
  `cord_lat` varchar(250) NOT NULL,
  `cord_long` varchar(250) NOT NULL,
  `ccontact_email` text NOT NULL,
  `contact_phone` varchar(250) NOT NULL,
  `address_street` varchar(250) NOT NULL,
  `address_suburb` varchar(250) NOT NULL,
  `address_state` varchar(10) NOT NULL,
  `address_postcode` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `organisation`
--

INSERT INTO `organisation` (`id`, `name`, `contact_email`, `cord_lat`, `cord_long`, `ccontact_email`, `contact_phone`, `address_street`, `address_suburb`, `address_state`, `address_postcode`) VALUES
(1, 'Wollongong Runners Association', 'sw730@uowmail.edu.au', '-34.4103220', '150.8994663', '', '', '', '', '', ''),
(2, 'Savvy Fitness Fairy Meadow', 'sw730@uowmail.edu.au', '-34.40369098158406', '150.89029823925216', 'notarealemail@savvy.com.au', '0242841100', 'Unit 5/135-143 Princes Hwy', 'Fairy Meadow', 'NSW', '2519'),
(3, 'Internetrix', 'internetrix+org@stewartwilson.id.au', '-34.42129705790611', '150.89168186871723', 'notarealemail@internetrix.com.au', '0242286464', '4/85-87 Smith St', 'Wollongong', 'NSW', '2500');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `organise_assign`
--

INSERT INTO `organise_assign` (`id`, `user_id`, `organ_id`, `date_assigned`, `date_unassigned`, `perms`) VALUES
(1, 5, 1, '1407843007', '', 1),
(3, 6, 2, '1407843007', '', 2),
(7, 6, 3, '', '', 3),
(9, 5, 2, '1409118057', '', 1),
(12, 10, 2, '1409544419', '', 1),
(13, 11, 3, '1409544810', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pending_user`
--

CREATE TABLE IF NOT EXISTS `pending_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) NOT NULL,
  `emailaddress` varchar(250) NOT NULL,
  `phonenumber` varchar(250) NOT NULL,
  `orgid` int(5) NOT NULL,
  `token` varchar(250) NOT NULL,
  `perm` int(1) NOT NULL,
  `daterequest` varchar(250) NOT NULL,
  `expiry` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE IF NOT EXISTS `programs` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `datestart` varchar(250) NOT NULL,
  `timestring` varchar(250) NOT NULL,
  `type` int(1) NOT NULL DEFAULT '0',
  `datecreated` varchar(250) NOT NULL,
  `createdbyid` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `datestart`, `timestring`, `type`, `datecreated`, `createdbyid`) VALUES
(1, '1409556600', '5:30PM', 1, '1409553190', '6');

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
  `fb_userid` varchar(250) NOT NULL,
  `fb_secret` varchar(250) NOT NULL,
  `fb_fullname` varchar(250) NOT NULL,
  `fb_profileimageurl` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `emailaddress`, `password`, `phonenumber`, `status`, `type`, `ip`, `activationhash`, `fb_userid`, `fb_secret`, `fb_fullname`, `fb_profileimageurl`) VALUES
(1, 'Stewart', 'Wilson', 'stewartwilson@outlook.com', '$2y$10$MoXWADFSxO1QoLGOzp3Ra.yc0giYri6IwYMqL25fU9pxnVttBJQvq', '0433971992', 1, 1, '', '', '0', '', '', ''),
(4, 'Stewart', 'W', 'sw730@uowmail.edu.au', '$2y$10$o8xRW5d4XCsAyfCSrH7mQ.j2CaXW0/E2erOVdtk0/YX/KJQ8uAqV6', '0411111111', 0, 1, '', '86312f1882fc284272d416d19a105856878c30ad95233bb8ead09ff3d0e1d14a', '0', '', '', ''),
(5, 'Stewart', 'Trainer', 'trainer@stewartwilson.id.au', '$2y$10$UpXJ5SSgHf6DVZ1XIPw.IOqCxgDqx/xJykPBNt4qBpxpLnW8cYni6', '0400000000', 1, 2, '127.0.0.1', '', '0', '', '', ''),
(6, 'Stewart 2', 'Trainer 2', 'trainer2@stewartwilson.id.au', '$2y$10$DWA.020gpFYVWmWme8PI0ehwRf0Lw.gSbMND51mPeBE6QWDJe2GbO', '0400000001', 1, 0, '127.0.0.1', '', '10152614563742969', 'CAAD7yZCW0VZBMBAAvPkMAEysbnO6FCyFZBYK2by6kVsxrWqpSHXHYmeJ2CEH3dx1EQECk4invqlD9LItvZChQN3vTTPOx29lF8A0PduQsphnFZANJk95NZCZAEDKO8ZCQF4ZB3H2WZBicSJygBCAqFCmXXGzvd0LrZAVgVgLRtGuSZCPUp4BNQuRUjHtXMI2SwsO4VVqyzenawH3kmLeLoSKQA0w', 'Stewart Wilson', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xpf1/v/t1.0-1/p74x74/10500499_10152521874937969_8601961230157440385_n.jpg?oh=b98d0bf579b1dcfaa7b43af3f07e7244&oe=546FDC39&__gda__=1417265631_00e968429e837d455adc2d6b6e6704fe'),
(7, 'James', 'W', 'jw192@uowmail.edu.au', '$2y$10$adkV0EA/d1v/gnhmslJe3.bDSySJMkHhcw4m6X4kDm8E9.2rwaDXy', '0430017348', 1, 0, '10.64.20.182', '', '10203441127966472', 'CAAD7yZCW0VZBMBAMLK4ofPZCnS3GDrppJaZA0qUDHus2MzZCZASc6loUlbDsPSQZAJHLeZAki58h3wcBoqFFcdxyHh0e5saPIDzIkrZCIgyHUNQH4fq5XA4ZCtHh5ZBRTR4jZBqGIBSZCO11ttIra6Xg2ehCn7sp5RNZANgak58gBdQ8DGfLqEqZAhKDBkpLbNny2VKkmKplRpbpgMvyZBmbmgCbc3Kj', '', ''),
(10, 'Stewart', 'Wilson', 'client_test@stewartwilson.id.au', '$2y$10$eJIwVucTymiv7q9ouGQkWOv1Twc.6FXwieuityZRoKW4Nlh4HZtuu', '0400000002', 1, 0, '127.0.0.1', '', '', '', '', ''),
(11, 'Trainer', 'Trainer', 'trainer_test@stewartwilson.id.au', '$2y$10$C31FAhRALgVGgJzsPSuDeeLbkk7rMjGYEi8/d0DZuL04voJ1R0GTe', '0400000003', 1, 0, '127.0.0.1', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
