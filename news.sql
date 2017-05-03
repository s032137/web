-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017 年 05 月 03 日 22:12
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
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(3) NOT NULL,
  `date` varchar(20) NOT NULL,
  `topic` varchar(1000) NOT NULL,
  `content` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `news`
--

INSERT INTO `news` (`id`, `date`, `topic`, `content`) VALUES
(1, '13 April 2017', 'Hong Kong Amateur Athletic Association - Tender for Marathon Secretariat Service (Entries & Runners\'Communication)', 'Hong Kong Amateur Athletic Association (HKAAA) is the governing body of athletics in Hong Kong with the mission of promoting and developing road races, track and field, race walking and cross-country events in Hong Kong. With the continuous development of the Standard Chartered Hong Kong Marathon, the HKAAA wishes to invite application to provide secretariat services (Entries & Runners\'Communication) to this major event on a maximum of 3 years\'contract term.'),
(2, '13 April 2017', 'Hong Kong Amateur Athletic Association - Tender for Marathon Secretariat Service (Organization & Operations)', 'Hong Kong Amateur Athletic Association (HKAAA) is the governing body of athletics in Hong Kong with the mission of promoting and developing road races, track and field, race walking and cross-country events in Hong Kong. With the continuous development of the Standard Chartered Hong Kong Marathon, the HKAAA wishes to invite application to provide secretariat services (Organization & Operations) to this major event on a maximum of 3 years\'contract term.'),
(3, '13 April 2017', 'Hong Kong Amateur Athletic Association - Tender for Marathon Website Project', 'Hong Kong Amateur Athletic Association (HKAAA) is the governing body of athletics in Hong Kong with the mission of promoting and developing road races, track and field, race walking and cross-country events in Hong Kong. With the continuous development of the Standard Chartered Hong Kong Marathon, the HKAAA wishes to invite a tender for the provisions of a new Website Project for the Standard Chartered Hong Kong Marathon.'),
(5, '03 May 2017', '123', '123');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
