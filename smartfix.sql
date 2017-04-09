-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2016 at 07:49 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smartfix`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
`ID` int(11) NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL,
  `Address` text NOT NULL,
  `Description` text NOT NULL,
  `Photos` text NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` enum('active','busy','complete','confirm') NOT NULL DEFAULT 'active',
  `Complainer_ID` int(11) NOT NULL,
  `Admin_ID` int(11) NOT NULL,
  `Worker_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`ID`, `latitude`, `longitude`, `Address`, `Description`, `Photos`, `Date`, `Status`, `Complainer_ID`, `Admin_ID`, `Worker_ID`) VALUES
(2, '', '', '88/1,KR Road,V.V. Puram,Bangalore', 'Fix the hole', '', '2016-04-18 21:30:01', 'confirm', 1, 2, 3),
(3, '', '', '1', 'We have got a pot hole here///', '', '2016-04-19 13:40:40', 'complete', 1, 2, 4),
(4, '', '', 'KR Road, VV Puram, Banglore', 'The water pipeline has broken.Please Help!!!', '', '2016-04-19 21:26:37', 'busy', 5, 2, 3),
(5, '48.86100157399595', '2.335891842842102', 'paris', 'a spot fix in paris', '', '2016-04-20 17:00:05', 'busy', 1, 2, 3),
(6, '12.95474011766121', '77.57318642735481', '88/1,KR Road,V.V. Puram,Bangalore', 'Please fix this hostel . IT SUCKS', '', '2016-04-22 21:12:46', 'active', 1, 0, 0),
(7, '48.86100157399595', '2.335891842842102', 'cc', 'cc', '', '2016-11-12 00:13:55', 'active', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `UserName` text NOT NULL,
  `Password` text NOT NULL,
  `Email` text NOT NULL,
  `Phone` text NOT NULL,
  `Type` enum('normal','admin','worker') NOT NULL DEFAULT 'normal',
  `status` enum('available','busy') NOT NULL DEFAULT 'available'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `UserName`, `Password`, `Email`, `Phone`, `Type`, `status`) VALUES
(1, '', 'sanjeev', '81dc9bdb52d04dc20036dbd8313ed055', 'sanjeevmalagi@gmail.com', '', 'normal', 'available'),
(2, '', 'Admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin@admin.com', '', 'admin', 'available'),
(3, '', 'worker', '81dc9bdb52d04dc20036dbd8313ed055', 'worker@worker.com', '', 'worker', 'busy'),
(4, '', 'worker2', '81dc9bdb52d04dc20036dbd8313ed055', 'worker2@worker.com', '', 'worker', 'available'),
(5, '', 'rohit', '81dc9bdb52d04dc20036dbd8313ed055', 'rohit@gmail.com', '', 'normal', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
