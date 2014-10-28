-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2014 at 01:39 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `assign_request`
--

INSERT INTO `assign_request` (`id`, `user_id`, `org_id`, `perms`, `authkey`, `timerequested`, `expiry`) VALUES
(2, 7, 3, 1, '4eef1e8e77e3f7457c5c700b3b4a3c7a9b82ef3f6ece1beda0a8c0f0103494e0', '1409124665', '1409729465'),
(3, 1, 2, 1, 'a51b2cacf3a03f4554a6c6ea53e1a0673dc31fa4d919c008845fc639e0ed5be9', '1409125348', '1409730148'),
(5, 10, 6, 1, '635a7fef96d5c3193f2294c5111e15f037ff912fa852ac88fa79f8ba705371d6', '1414456737', '1415061537');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `connectedapps`
--

INSERT INTO `connectedapps` (`id`, `app`, `u_id`, `AccessToken`, `AccessTokenSecret`, `UserID`, `dateadded`) VALUES
(4, 'fitbit', 1, '87a5fbb4938c558b4c57a5c4164a0ac2', '05d9c47abad9943c60d82f7841c6369b', '25HHFT', '1410176835');

-- --------------------------------------------------------

--
-- Table structure for table `fitbitdata`
--

CREATE TABLE IF NOT EXISTS `fitbitdata` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `userid` int(5) NOT NULL,
  `date` varchar(250) NOT NULL,
  `steps` varchar(250) NOT NULL,
  `distance` varchar(250) NOT NULL,
  `minutesSedentary` varchar(250) NOT NULL,
  `minutesLightlyActive` varchar(250) NOT NULL,
  `minutesFairlyActive` varchar(250) NOT NULL,
  `minutesVeryActive` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fitbit_notif`
--

CREATE TABLE IF NOT EXISTS `fitbit_notif` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `UserID` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE IF NOT EXISTS `notif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(250) NOT NULL,
  `attribs_json` text NOT NULL,
  `text` text NOT NULL,
  `status` int(5) NOT NULL,
  `userid` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `organisation`
--

INSERT INTO `organisation` (`id`, `name`, `contact_email`, `cord_lat`, `cord_long`, `ccontact_email`, `contact_phone`, `address_street`, `address_suburb`, `address_state`, `address_postcode`) VALUES
(1, 'Wollongong Runners Association', 'sw730@uowmail.edu.au', '-34.4103220', '150.8994663', '', '', '', '', '', ''),
(2, 'Savvy Fitness Fairy Meadow', 'sw730@uowmail.edu.au', '-34.40369098158406', '150.89029823925216', 'notarealemail@savvy.com.au', '0242841100', 'Unit 5/135-143 Princes Hwy', 'Fairy Meadow', 'NSW', '2519'),
(3, 'Internetrix', 'internetrix+org@stewartwilson.id.au', '-34.42181922124878', '150.89200373379902', 'notarealemail@internetrix.com.au', '0242286464', '4/85-87 Smith St', 'Wollongong', 'NSW', '2500'),
(4, 'Anytime Fitness Shellharbour', 'anytime-shellharbour@stewartwilson.id.au', '-34.57938896991103', '150.86789762645867', 'anytime-shellharbour@stewartwilson.id.au', '0242315603', 'Shop 6 & 7, Suite 15 - 17 2 Memorial Drive', 'Shellharbour', 'NSW', '2529'),
(5, 'Anytime Fitness Caringbah', 'anytimefitnesscaringbah@stewartwilson.id.au', '-34.042403', '151.122795', 'anytimefitnesscaringbah@stewartwilson.id.au', '', '329 Kingsway', 'Caringbah', 'NSW', '2229'),
(6, 'Anytime Fitness Corrimal', 'anytimeadmin@stewartwilson.id.au', '-34.38131394587494', '150.8958139607132', 'anytimeadmin@stewartwilson.id.au', '0242859883', '417 Princes Hwy', 'Corrimal', 'NSW', '2518'),
(7, 'Anytime Fitness Woonona', 'anytimeadmin@stewartwilson.id.au', '-34.341037723086934', '150.9065545386925', 'anytimeadmin@stewartwilson.id.au', '0242836955', '378 Princes Hwy', 'Woonona', 'NSW', '2517'),
(8, 'Definition Fitness Wollongong', 'anytimeadmin@stewartwilson.id.au', '-34.434995334213376', '150.8873624024468', 'anytimeadmin@stewartwilson.id.au', '0242269143', '108 Auburn St', 'Wollongong', 'NSW', '2500');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `organise_assign`
--

INSERT INTO `organise_assign` (`id`, `user_id`, `organ_id`, `date_assigned`, `date_unassigned`, `perms`) VALUES
(1, 5, 1, '1407843007', '', 1),
(3, 6, 2, '1407843007', '', 2),
(7, 6, 3, '', '', 3),
(9, 5, 2, '1409118057', '', 1),
(12, 10, 3, '1409544419', '', 1),
(13, 11, 3, '1409544810', '', 2),
(14, 11, 4, '1409544810', '', 3),
(15, 10, 4, '1412592340', '', 1),
(16, 13, 3, '1413854549', '', 2),
(18, 16, 5, '1413957719', '', 2),
(19, 17, 5, '1413957861', '', 1),
(20, 11, 6, '1414121242', '', 3),
(21, 11, 7, '1414121242', '', 3),
(22, 11, 8, '1414121242', '', 3),
(23, 16, 6, '1414121242', '', 3),
(24, 16, 7, '1414121242', '', 3),
(25, 16, 8, '1414121242', '', 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pending_user`
--

INSERT INTO `pending_user` (`id`, `firstname`, `emailaddress`, `phonenumber`, `orgid`, `token`, `perm`, `daterequest`, `expiry`) VALUES
(1, 'Test', 'sw730@uowmail.edu.au', '0400000088', 3, '7031a74d29a406580077e35485aaa96eaa5630aed8219dd233aaf7ced0bc9085', 1, '1413939596', '1414544396');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE IF NOT EXISTS `programs` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `orgid` int(5) NOT NULL,
  `programname` varchar(250) NOT NULL,
  `maxpax` int(5) NOT NULL,
  `openclass` int(1) NOT NULL,
  `datestart` varchar(250) NOT NULL,
  `dateend` varchar(250) NOT NULL,
  `timestart` varchar(250) NOT NULL,
  `timeend` varchar(250) NOT NULL,
  `type` int(1) NOT NULL DEFAULT '0',
  `street` text NOT NULL,
  `suburb` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `postcode` int(4) NOT NULL,
  `lat` varchar(250) NOT NULL,
  `lng` varchar(250) NOT NULL,
  `datecreated` varchar(250) NOT NULL,
  `createdbyid` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `orgid`, `programname`, `maxpax`, `openclass`, `datestart`, `dateend`, `timestart`, `timeend`, `type`, `street`, `suburb`, `state`, `postcode`, `lat`, `lng`, `datecreated`, `createdbyid`) VALUES
(2, 3, 'Weekly Power Session', 25, 1, '08/09/2014', '24/11/2014', '8:00 AM', '8:30 AM', 1, 'Stuart Park', 'Wollongong', 'NSW', 2500, '-34.4103220', '150.8994663', '1409984383', '6'),
(3, 2, 'Morning Pump', 45, 1, '08/09/2014', '22/12/2014', '5:00 AM', '6:00 AM', 1, 'Unit 5/135-143 Princes Hwy', 'Fairy Meadow', 'NSW', 2519, '-34.4038470', '150.8903720', '1410076997', '6'),
(4, 2, 'Afternoon Session', 45, 1, '08/09/2014', '22/12/2014', '5:30 PM', '6:30 PM', 1, 'Unit 5/135-143 Princes Hwy', 'Fairy Meadow', 'NSW', 2519, '-34.4038470', '150.8903720', '1410077044', '6'),
(5, 4, 'Lunch Time Special', 1, 1, '08/09/2014', '22/12/2014', '12:30 PM', '1:00 PM', 1, 'Shop 6 & 7, Suite 15 - 17 2 Memorial Drive', 'Shellharbour', 'NSW', 2529, '-34.5792123', '150.8674041', '1410084835', '6'),
(6, 4, 'Super Evening Workout', 50, 1, '06/10/2014', '27/10/2014', '5:00 PM', '6:00 PM', 1, 'Shellharbour Reserve', 'Shellharbour', 'NSW', 2527, '-34.580315398874035', '150.8738771838532', '1412592645', '11'),
(7, 3, 'Another Program', 50, 1, '17/10/2014', '20/02/2015', '2:00 PM', '2:30 PM', 1, '4/85-87 Smith St', 'Wollongong', 'NSW', 2500, '-34.4214630', '150.8916470', '1413345120', '11'),
(8, 3, 'Test', 25, 1, '20/10/2014', '26/01/2015', '5:00 PM', '5:30 PM', 1, '4/85-87 Smith St', 'Wollongong', 'NSW', 2500, '-34.4214630', '150.8916470', '1413370230', '11'),
(9, 3, 'Morning Pump', 25, 1, '16/10/2014', '29/01/2015', '7:30 AM', '8:00 AM', 1, 'Stuart Park', 'Wollongong', 'NSW', 2500, '-34.4103220', '150.8994663', '1413435062', '11'),
(10, 5, 'Crossfit Class 1', 25, 1, '27/10/2014', '26/01/2015', '12:00 PM', '12:30 PM', 1, '329 Kingsway', 'Caringbah', 'NSW', 2229, '-34.0424030', '151.1227950', '1413958032', '16'),
(11, 5, 'Crossfit Class 2', 25, 1, '28/10/2014', '27/01/2015', '12:00 PM', '12:30 PM', 1, '329 Kingsway', 'Caringbah', 'NSW', 2229, '-34.0424030', '151.1227950', '1413958073', '16'),
(12, 5, 'Crossfit Class 3', 25, 1, '22/10/2014', '28/01/2015', '12:00 PM', '12:30 PM', 1, '329 Kingsway', 'Caringbah', 'NSW', 2229, '-34.0424030', '151.1227950', '1413958101', '16'),
(13, 5, 'Crossfit Class 4', 25, 1, '23/10/2014', '29/01/2015', '12:00 PM', '12:30 PM', 1, '329 Kingsway', 'Caringbah', 'NSW', 2229, '-34.0424030', '151.1227950', '1413958159', '16'),
(14, 5, 'Crossfit Class 5', 25, 1, '24/10/2014', '30/01/2015', '12:00 PM', '12:30 PM', 1, '329 Kingsway', 'Caringbah', 'NSW', 2229, '-34.0424030', '151.1227950', '1413958188', '16');

-- --------------------------------------------------------

--
-- Table structure for table `program_assign`
--

CREATE TABLE IF NOT EXISTS `program_assign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(5) NOT NULL,
  `progid` int(5) NOT NULL,
  `dateassigned` varchar(250) NOT NULL,
  `istrainer` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `program_assign`
--

INSERT INTO `program_assign` (`id`, `userid`, `progid`, `dateassigned`, `istrainer`) VALUES
(31, 10, 7, '1413420470', 0),
(33, 10, 5, '1413422604', 0),
(34, 10, 6, '1413422605', 0),
(36, 11, 7, '1413427393', 1),
(39, 10, 2, '1413435273', 0),
(40, 10, 9, '1413435282', 0),
(41, 10, 8, '1413435316', 0),
(43, 13, 2, '1413854560', 0),
(46, 13, 7, '1413854565', 0),
(47, 17, 10, '1413958206', 0),
(48, 17, 11, '1413958207', 0),
(49, 17, 12, '1413958207', 0),
(50, 17, 14, '1413958208', 0),
(51, 17, 13, '1413958209', 0);

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
  `postcode` int(4) NOT NULL,
  `pc_lat` varchar(250) NOT NULL,
  `pc_lng` varchar(250) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '0',
  `ip` varchar(250) NOT NULL,
  `activationhash` varchar(250) NOT NULL,
  `fb_userid` varchar(250) NOT NULL,
  `fb_secret` varchar(250) NOT NULL,
  `fb_fullname` varchar(250) NOT NULL,
  `fb_profileimageurl` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `emailaddress`, `password`, `phonenumber`, `postcode`, `pc_lat`, `pc_lng`, `status`, `type`, `ip`, `activationhash`, `fb_userid`, `fb_secret`, `fb_fullname`, `fb_profileimageurl`) VALUES
(1, 'Stewart', 'Wilson', 'stewartwilson@outlook.com', '$2y$10$82VB/JJWvGTKqXK7oQq5BuPCvVURPSjQGxuH3tdQRcjpN09qYJQvS', '0433971992', 2519, '0', '', 1, 1, '', '', '0', '', '', ''),
(5, 'Stewart', 'Trainer', 'trainer@stewartwilson.id.au', '$2y$10$UpXJ5SSgHf6DVZ1XIPw.IOqCxgDqx/xJykPBNt4qBpxpLnW8cYni6', '0400000000', 2519, '0', '', 1, 2, '127.0.0.1', '', '0', '', '', ''),
(6, 'Stewart 2', 'Trainer 2', 'trainer2@stewartwilson.id.au', '$2y$10$DWA.020gpFYVWmWme8PI0ehwRf0Lw.gSbMND51mPeBE6QWDJe2GbO', '0400000001', 2519, '0', '', 1, 0, '127.0.0.1', '', '10152614563742969', 'CAAD7yZCW0VZBMBAAvPkMAEysbnO6FCyFZBYK2by6kVsxrWqpSHXHYmeJ2CEH3dx1EQECk4invqlD9LItvZChQN3vTTPOx29lF8A0PduQsphnFZANJk95NZCZAEDKO8ZCQF4ZB3H2WZBicSJygBCAqFCmXXGzvd0LrZAVgVgLRtGuSZCPUp4BNQuRUjHtXMI2SwsO4VVqyzenawH3kmLeLoSKQA0w', 'Stewart Wilson', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xpf1/v/t1.0-1/p74x74/10500499_10152521874937969_8601961230157440385_n.jpg?oh=b98d0bf579b1dcfaa7b43af3f07e7244&oe=546FDC39&__gda__=1417265631_00e968429e837d455adc2d6b6e6704fe'),
(7, 'James', 'W', 'jw192@uowmail.edu.au', '$2y$10$adkV0EA/d1v/gnhmslJe3.bDSySJMkHhcw4m6X4kDm8E9.2rwaDXy', '0430017348', 2519, '0', '', 1, 0, '10.64.20.182', '', '10203441127966472', 'CAAD7yZCW0VZBMBAMLK4ofPZCnS3GDrppJaZA0qUDHus2MzZCZASc6loUlbDsPSQZAJHLeZAki58h3wcBoqFFcdxyHh0e5saPIDzIkrZCIgyHUNQH4fq5XA4ZCtHh5ZBRTR4jZBqGIBSZCO11ttIra6Xg2ehCn7sp5RNZANgak58gBdQ8DGfLqEqZAhKDBkpLbNny2VKkmKplRpbpgMvyZBmbmgCbc3Kj', '', ''),
(10, 'Stewart', 'Wilson', 'client_test@stewartwilson.id.au', '$2y$10$JxFges8YsyNtz3tuAZxaYu9X9yC7.6Vpbya66fsxPjHWknXFpZR.O', '0400000002', 2519, '-34.4054039', '150.8784300', 1, 0, '127.0.0.1', '', '', '', '', ''),
(11, 'Trainer', 'Trainer', 'trainer_test@stewartwilson.id.au', '$2y$10$C31FAhRALgVGgJzsPSuDeeLbkk7rMjGYEi8/d0DZuL04voJ1R0GTe', '0400000003', 2519, '-34.4054039', '150.8784300', 1, 0, '127.0.0.1', '', '', '', '', ''),
(12, 'Test', '1', 'signuptest+1@stewartwilson.id.au', '$2y$10$efNStUuJw/8dPjfBJWRAF.ws.rA5LhkBsk7YK0JppAKKSI925rVkm', '0400000006', 0, '', '', 0, 0, '', '', '', '', '', ''),
(13, 'Stewart', 'Foley', 'a.a.r.o.n.s.foley@gmail.com', '$2y$10$nIhRFbVmVKfoGQxAATTNiezePt8Bba7jwB/sWyBxTcnF/wB60Jqo.', '0400000099', 0, '-34.4054039', '150.8784300', 1, 0, '130.130.37.12', '', '10152368773735718', 'CAAD7yZCW0VZBMBADSwuqm15sPozQA2XZBBT7Oeg4pGHnWyE0eCFZADCFbTzi50805GUveQfZA9G2vb7PjABnDZCQat2BibsiWLMnR6nK0xZA4ZBZCTimNXAtdFmfyIPPudm095RyZBoOyIG23jfkpOLAlO0YSzLGwYlRhw2ZBgb77AJmGEbGAp8m85Dsz1GRCXc7inhDWp8rdVm0lgTd19bGK86', 'Aaron Foley', 'private, no-cache, no-store, must-revalidate'),
(15, 'Stewart', 'Wilson', 'sw730@uowmail.edu.au', '$2y$10$5.gUWRBLxQAtBTpcnJlvu.s9ljQJtvp/HSVKMLs/.6uQVlLtBIXS2', '0400000088', 2519, '-34.3902523', '150.8783824', 1, 0, '127.0.0.1', '', '', '', '', ''),
(16, 'Anytime Fitness', 'Admin', 'anytimefitnesscaringbah@stewartwilson.id.au', '$2y$10$zfxy5Uy4mqxXzoLXEoB0Gub3Nw77halfBm6HHLSc/gBWUlgfFxCFS', '0400000077', 2229, '-34.4331', '150.8831', 1, 0, '127.0.0.1', '', '', '', '', ''),
(17, 'Max', 'Vollmer', 'anytimeclient@stewartwilson.id.au', '$2y$10$FBCspHKq/XU/yVm2UPdeA.YQWqwj0R.s.WNFCtlTvBOBpULDHQvjO', '0400000066', 2227, '-34.0439810', '151.0849848', 1, 0, '127.0.0.1', '', '', '', '', ''),
(18, 'Demo', 'Demo', 'demo@stewartwilson.id.au', '$2y$10$JxFges8YsyNtz3tuAZxaYu9X9yC7.6Vpbya66fsxPjHWknXFpZR.O', '0400000013', 2500, '-34.4331', '150.8831', 1, 0, '127.0.0.1', '3a4ecd8d1a153711fc37005e51d9d53da0a959a14e1d2dbf179b83edf0c94078', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
