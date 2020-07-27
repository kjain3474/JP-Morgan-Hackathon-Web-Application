-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2016 at 12:57 PM
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
-- Table structure for table `mentors`
--

CREATE TABLE IF NOT EXISTS `mentors` (
`ID` int(11) NOT NULL,
  `Job` text NOT NULL,
  `Gender` int(11) NOT NULL,
  `Address` text NOT NULL,
  `City` text NOT NULL,
  `Technology` int(11) NOT NULL,
  `Civil` int(11) NOT NULL,
  `Mechanical` int(11) NOT NULL,
  `Electronics` int(11) NOT NULL,
  `Electrical` int(11) NOT NULL,
  `Finance` int(11) NOT NULL,
  `English` int(11) NOT NULL,
  `Moral` int(11) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Experiance` int(11) NOT NULL,
  `Password` text NOT NULL,
  `Username` text,
  `Name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
