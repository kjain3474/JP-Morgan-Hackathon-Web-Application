-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2016 at 01:16 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `team17jp`
--

-- --------------------------------------------------------

--
-- Table structure for table `mentees`
--

CREATE TABLE IF NOT EXISTS `mentees` (
  `Name` varchar(100) NOT NULL,
  `Address` text NOT NULL,
  `Age` int(11) NOT NULL,
  `Pref` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `College` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
`SID` int(11) NOT NULL,
  `Username` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mentees`
--
ALTER TABLE `mentees`
 ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mentees`
--
ALTER TABLE `mentees`
MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
