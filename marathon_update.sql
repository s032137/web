-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-05-04 17:21:25
-- 伺服器版本: 10.1.21-MariaDB
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `marathon`
--

-- --------------------------------------------------------

--
-- 資料表結構 `marathon21012018`
--
CREATE Database IF NOT EXISTS `marathon` DEFAULT CHARACTER SET utf8;




CREATE TABLE IF NOT EXISTS `marathon`. `marathon21012018` (
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
-- 資料表結構 `member`
--

CREATE TABLE IF NOT EXISTS `marathon`.  `member` (
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Age` int(2) NOT NULL,
  `PhoneNumber` varchar(40) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Type` varchar(6) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `marathon`.`member` (`Email`, `Password`, `FirstName`, `LastName`, `Age`, `PhoneNumber`, `DOB`, `Gender`, `Type`) VALUES
('123@123', 'qweqwe', 'a', 'bc', 1, '555555', '2017-04-06', 'male', 'admin'),
('aaa@aaa.com', '123456789', 'bbb', 'ccc', 13, '55555', '2017-05-01', 'male', 'member'),
('abc@abc', 'qwe', 'qweabc', 'F', 1, '5038964010', '2017-04-06', 'F', 'member'),
('admin@vtc.edu.hk', '12345678', 'admin', 'admin', 18, '55555555', '2001-05-02', 'male', 'member'),
('bcc@bcc', '123', 'bcc', 'bcc', 13, '123456789', '2017-05-11', 'male', 'member'),
('qwe@wqeqwe', 'qwe', 'qwe', 'qweqwe', 13, '5038964010', '2017-05-07', 'male', 'member');

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE IF NOT EXISTS `marathon`.  `news` (
  `id` int(3) NOT NULL,
  `date` varchar(20) NOT NULL,
  `topic` varchar(1000) NOT NULL,
  `content` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `news`
--

INSERT INTO `marathon`.`news` (`id`, `date`, `topic`, `content`) VALUES
(1, '13 April 2017', 'Hong Kong Amateur Athletic Association - Tender for Marathon Secretariat Service (Entries & Runners\'Communication)', 'Hong Kong Amateur Athletic Association (HKAAA) is the governing body of athletics in Hong Kong with the mission of promoting and developing road races, track and field, race walking and cross-country events in Hong Kong. With the continuous development of the Standard Chartered Hong Kong Marathon, the HKAAA wishes to invite application to provide secretariat services (Entries & Runners\'Communication) to this major event on a maximum of 3 years\'contract term.'),
(2, '13 April 2017', 'Hong Kong Amateur Athletic Association - Tender for Marathon Secretariat Service (Organization & Operations)', 'Hong Kong Amateur Athletic Association (HKAAA) is the governing body of athletics in Hong Kong with the mission of promoting and developing road races, track and field, race walking and cross-country events in Hong Kong. With the continuous development of the Standard Chartered Hong Kong Marathon, the HKAAA wishes to invite application to provide secretariat services (Organization & Operations) to this major event on a maximum of 3 years\'contract term.'),
(3, '13 April 2017', 'Hong Kong Amateur Athletic Association - Tender for Marathon Website Project', 'Hong Kong Amateur Athletic Association (HKAAA) is the governing body of athletics in Hong Kong with the mission of promoting and developing road races, track and field, race walking and cross-country events in Hong Kong. With the continuous development of the Standard Chartered Hong Kong Marathon, the HKAAA wishes to invite a tender for the provisions of a new Website Project for the Standard Chartered Hong Kong Marathon.'),
(5, '03 May 2017', '123', '123');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `marathon21012018`
--
ALTER TABLE `marathon`.`marathon21012018`
  ADD PRIMARY KEY (`Email`);

--
-- 資料表索引 `member`
--
ALTER TABLE `marathon`.`member`
  ADD PRIMARY KEY (`Email`);

--
-- 資料表索引 `news`
--
ALTER TABLE `marathon`.`news`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `news`
--
ALTER TABLE `marathon`. `news`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;