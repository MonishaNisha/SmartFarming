-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 11:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agri`
--

-- --------------------------------------------------------

--
-- Table structure for table `oregister`
--

CREATE TABLE `oregister` (
  `oid` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `aadhaar` varchar(255) NOT NULL,
  `ph` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oregister`
--

INSERT INTO `oregister` (`oid`, `fname`, `lname`, `aadhaar`, `ph`, `email`, `pwd`) VALUES
(15, 'ksdnjn', 'hduhu', '876786755677', '7789798989', 'moni@gmail.com', 'b34ffee8e0573344c6cba8d8f02303de'),
(16, 'ewfhuiy', 'utuy2tryut', '657657867868', '8676565657', 'moni@gmail.com', '735735aa594d4a2eda923d866879d5f2'),
(17, 'Monisha', 'G', '762354652376', '8736578367', 'moni@gmail.com', '735735aa594d4a2eda923d866879d5f2'),
(18, 'moni', 'G', '812738625645', '7673542634', 'moni@gmail.com', '735735aa594d4a2eda923d866879d5f2'),
(19, 'moni', 'G', '723645237645', '7654785782', 'moni@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(20, 'tyuief', 'iuioiu', '234567897654', '2345678876', 'qwertyuiop@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
(21, 'qwrqwrwq', 'rwtewtew', '213456789079', '3131465464', 'asd@gmail.com', '123456789'),
(22, 'moni', 'G', '787098978675', '9876765756', 'moni@gmail.com', '735735aa594d4a2eda923d866879d5f2'),
(23, 'moni', 'G', '786765645342', '9765645434', 'moni@gmail.com', '735735aa594d4a2eda923d866879d5f2');

-- --------------------------------------------------------

--
-- Table structure for table `pregister`
--

CREATE TABLE `pregister` (
  `pid` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `aadhaar` varchar(255) NOT NULL,
  `ph` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pregister`
--

INSERT INTO `pregister` (`pid`, `fname`, `lname`, `aadhaar`, `ph`, `email`, `pwd`) VALUES
(1, 'sdhkhui', '3geryu', 'u53765765', '65645476', 'ywue@gmail.com', 'gfewrf65'),
(2, 'jkhrwh', 'iruiy', '346573645786', '7657634786', 'jsuy@gmail.com', 'rytw76t8w'),
(3, 'yteyrt', 'eirywy', '623542763572', '3658736758', 'jkchjkashk@gmail', 'ajkh'),
(4, 'moni', 'G', '767534565667', '7678678689', 'moni@gmail.com', '735735aa594d4a2eda923d866879d5f2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oregister`
--
ALTER TABLE `oregister`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `pregister`
--
ALTER TABLE `pregister`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oregister`
--
ALTER TABLE `oregister`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pregister`
--
ALTER TABLE `pregister`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
