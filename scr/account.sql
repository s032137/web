-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2017 at 12:02 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accountt`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `memberr` (
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Age` int(2) NOT NULL,
  `PhoneNumber` varchar(40) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `memberr` (`Email`, `Password`, `FirstName`, `LastName`, `Age`, `PhoneNumber`, `DOB`, `Gender`) VALUES
('123@123', '123', 'a', 'bc', 1, '7185256340', '2017-04-06', 'male'),
('abc@abc', '123', 'F', 'F', 1, '123', '12', 'F'),
('bcc@bcc', '123', 'bcc', 'bcc', 13, '123456789', '2017-05-11', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `memberr`
  ADD PRIMARY KEY (`Email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;