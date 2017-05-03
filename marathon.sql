-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2017 at 03:07 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marathon`
--
CREATE DATABASE IF NOT EXISTS `marathon` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `marathon`;

-- --------------------------------------------------------

--
-- Table structure for table `marathon21012018`
--

DROP TABLE IF EXISTS `marathon21012018`;
CREATE TABLE `marathon21012018` (
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` varchar(40) NOT NULL,
  `Event` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
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

INSERT INTO `member` (`Email`, `Password`, `FirstName`, `LastName`, `Age`, `PhoneNumber`, `DOB`, `Gender`) VALUES
('123@123', 'qweqwe', 'a', 'bc', 1, '555555', '2017-04-06', 'male'),
('aaa@aaa.com', '123456789', 'bbb', 'ccc', 13, '55555', '2017-05-01', 'male'),
('abc@abc', 'qwe', 'qweabc', 'F', 1, '5038964010', '2017-04-06', 'F'),
('bcc@bcc', '123', 'bcc', 'bcc', 13, '123456789', '2017-05-11', 'male'),
('qwe@wqeqwe', 'qwe', 'qwe', 'qweqwe', 13, '5038964010', '2017-05-07', 'male'),
('qwe@yahoo.com', 'qwe', 'qwe', 'qwe', 13, '1232132131', '2017-05-03', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marathon21012018`
--
ALTER TABLE `marathon21012018`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
