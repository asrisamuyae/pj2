-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2018 at 06:35 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coach`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_team`
--

CREATE TABLE `class_team` (
  `id` int(7) NOT NULL,
  `class` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class_team`
--

INSERT INTO `class_team` (`id`, `class`) VALUES
(1, 'U-9'),
(2, 'U-11'),
(3, 'U-13'),
(4, 'U-15');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `id` int(10) NOT NULL,
  `coach_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sign_date` date NOT NULL,
  `release_date` date NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `team` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`id`, `coach_name`, `username`, `password`, `DOB`, `gender`, `address`, `phone`, `sign_date`, `release_date`, `email`, `team`) VALUES
(1, 'Waeismael Hayisamoh', 'wae123', '123456', '1993-11-01', 'Male', 'Muang, Yala', '0978782878', '2015-01-01', '2018-01-01', 'w.wae@gmail.com', 1),
(2, 'Sulaiman Tohjeh', 'man456', '456789', '1994-03-01', 'Male', 'Muang, Yala', '0942342424', '2015-01-01', '2018-01-01', 's.tohjeh@gmail.com', 1),
(3, 'Wansyareefuddin Waeali', 'Wan555', '555111', '1993-04-04', 'Male', 'Yarang, Pattani', '0884884318', '2015-01-01', '2019-01-01', 'wan.wan@gmail.com', 2),
(4, '', '', '', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', 3),
(5, '', '', '555555', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', 'test@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `fixtures`
--

CREATE TABLE `fixtures` (
  `id` int(7) NOT NULL,
  `timed` text COLLATE utf8_unicode_ci NOT NULL,
  `home` int(11) NOT NULL,
  `dates` text COLLATE utf8_unicode_ci NOT NULL,
  `away` int(11) NOT NULL,
  `class` text COLLATE utf8_unicode_ci NOT NULL,
  `owner` int(11) NOT NULL,
  `post_date` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fixtures`
--

INSERT INTO `fixtures` (`id`, `timed`, `home`, `dates`, `away`, `class`, `owner`, `post_date`) VALUES
(1, '21:40', 1, '2018-04-30', 4, 'U-15', 1, '1524934943'),
(2, '18:40', 1, '2018-04-29', 3, 'U-15', 1, '1524937411'),
(3, '21:30', 2, '2018-04-30', 1, 'U-15', 1, '1524937456'),
(4, '19:00', 1, '2018-05-01', 4, 'U-13', 1, '1524937712');

-- --------------------------------------------------------

--
-- Table structure for table `match`
--

CREATE TABLE `match` (
  `match_id` int(7) NOT NULL,
  `opp_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `stadium` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `balance` int(12) NOT NULL,
  `squad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `competition` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `team_id` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `match`
--

INSERT INTO `match` (`match_id`, `opp_name`, `stadium`, `date`, `balance`, `squad`, `competition`, `team_id`) VALUES
(1, 'Yaha City', 'Rajabhat Yala University Stadium', '2017-06-15', 20000, '4-4-2', 'FA Cup Junior ', 0),
(2, 'Kotabaru FC', 'Kotabaru Stadium', '2017-08-22', 20000, '4-5-1', 'FA Cup Junior', 0);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` int(7) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` text COLLATE utf8_unicode_ci NOT NULL,
  `school` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `height` int(7) NOT NULL,
  `weight` int(7) NOT NULL,
  `foot` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sign_date` text COLLATE utf8_unicode_ci NOT NULL,
  `release_date` text COLLATE utf8_unicode_ci NOT NULL,
  `team_id` int(7) NOT NULL,
  `team_class` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `goal` int(6) NOT NULL,
  `assist` int(6) NOT NULL,
  `yellow` int(6) NOT NULL,
  `red` int(6) NOT NULL,
  `owner` int(11) NOT NULL,
  `post_date` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `name`, `position`, `birthday`, `school`, `height`, `weight`, `foot`, `address`, `phone`, `sign_date`, `release_date`, `team_id`, `team_class`, `goal`, `assist`, `yellow`, `red`, `owner`, `post_date`) VALUES
(1, 'Muhammad Ridwan', 'DMF', '2009-01-01', 'Raman Sirivit, Yala', 130, 29, 'Right', 'Raman, Yala', '0912341234', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0, 1, ''),
(2, 'Abdul Ali', 'LW', '2006-02-01', 'Benjama Rachuthit, Pattani', 140, 36, 'Left', 'Muang, Pattani', '0902302020', '2015-01-01', '2018-01-01', 2, 'U-11', 0, 0, 0, 0, 1, ''),
(3, 'Nattawat Srisai', 'RB', '2004-09-07', 'Tessaban 5, Yala', 157, 45, 'Right', 'Muang, Yala', '0975775757', '2015-01-01', '2018-01-01', 3, 'U-13', 0, 0, 0, 0, 1, ''),
(4, 'Pongsak Tephee', 'LB', '2002-09-14', 'Kanarat Bamrung, Yala', 160, 50, 'Left', 'Muang, Yala', '0932342564', '2015-01-01', '2018-01-01', 4, 'U-15', 0, 0, 0, 0, 1, ''),
(5, 'Rusman Sadeeyamoo', 'GK', '2008-09-01', 'Tessaban 5, Yala', 134, 32, 'Right', 'Muang, Yala', '0953455325', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0, 1, ''),
(6, 'Tossapon Jongrak', 'CF', '2008-05-01', 'Tessaban 5, Yala', 128, 28, 'Right', 'Muang, Yala', '0972530027', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0, 1, ''),
(7, 'Zakaria Musow', 'CMF', '2008-09-02', 'Tessaban 5, Yala', 130, 33, 'Right', 'Raman, Yala', '0954500020', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0, 1, ''),
(8, 'Ruswan Hama', 'CB', '2008-05-15', 'Tessaban 5, Yala', 134, 30, 'Left', 'Muang, Yala', '0936361126', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0, 1, ''),
(9, 'Nimuslim Nisalam ', 'CB', '2008-04-08', 'Tessaban 5, Yala', 133, 30, 'Right', 'Muang, Yala', '0602304430', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0, 1, ''),
(10, 'Asri Japakiya', 'RMF', '2008-05-05', 'Tessaban 5, Yala', 134, 28, 'Right', 'Muang, Yala', '0644042540', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0, 1, ''),
(11, 'Arif Sangnui', 'AMF', '2008-06-11', 'Tessaban 5, Yala', 135, 34, 'Left', 'Muang, Yala', '0932030029', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0, 1, ''),
(12, 'Basree Abdullah', 'LB', '2008-04-17', 'Kanarat Bamrung, Yala', 132, 25, 'Left', 'Muang, Yala', '0975507720', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0, 1, ''),
(13, 'Abdulhalim Abdullah', 'RB', '2008-04-21', 'Tessaban 5, Yala', 125, 26, 'Right', 'Muang, Yala', '0603045504', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0, 1, ''),
(14, 'Bassam Datoh', 'LW', '2008-05-31', 'Santitham, Yala', 128, 30, 'Left', 'Muang, Yala', '0952455025', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0, 1, ''),
(15, 'Wanhakim Wanmuhammad', 'GK', '2006-09-01', 'Kanarat Bamrung, Yala', 144, 34, 'Right', 'Raman, Yala', '0988802890', '2015-01-01', '2018-01-01', 2, 'U-11', 0, 0, 0, 0, 1, ''),
(16, 'Mumin Lertsakul', 'CB', '2006-05-11', 'Kanarat Bamrung, Yala', 142, 38, 'Left', 'Muang, Yala', '0902205420', '2015-01-01', '2018-01-01', 2, 'U-11', 0, 0, 0, 0, 1, ''),
(17, 'Nimaslan Nidaoh', 'RB', '2006-02-14', 'Santitham, Yala', 144, 37, 'Right', 'Muang, Yala', '0602305420', '2015-01-01', '2018-01-01', 2, 'U-11', 0, 0, 0, 0, 1, ''),
(18, 'Sulaiman Pohji', 'CB', '2006-03-22', 'Kanarat Bamrung, Yala', 140, 36, 'Right', 'Muang, Yala', '0603302350', '2015-01-01', '2018-01-01', 2, 'U-11', 0, 0, 0, 0, 1, ''),
(19, 'Nazreen Sama', 'LB', '2006-02-02', 'Kanarat Bamrung, Yala', 144, 38, 'Left', 'Betong, Yala', '0945340404', '2015-01-01', '2018-01-01', 2, 'U-11', 0, 0, 0, 0, 1, ''),
(20, 'Nasruddin Dahami', 'RMF', '2006-03-09', 'Kanarat Bamrung, Yala', 148, 47, 'Right', 'Than To, Yala', '0604403530', '2015-01-01', '2018-01-01', 2, 'U-11', 0, 0, 0, 0, 1, ''),
(21, 'Shareef Sapsin', 'CMF', '2006-06-07', 'Stree, Yala', 145, 45, 'Right', 'Muang, Yala', '0977202024', '2015-01-01', '2018-01-01', 2, 'U-11', 0, 0, 0, 0, 1, ''),
(22, 'Pakkawan Kaewprom', 'CF', '2006-03-18', 'Kanarat Bamrung, Yala', 142, 40, 'Left', 'Muang, Yala', '0915512500', '2015-01-01', '2018-01-01', 2, 'U-11', 0, 0, 0, 0, 1, ''),
(23, 'As', 'DMF', '01-01-2010', 'TVM', 123, 43, 'Right', 'Ra', '832403252', '01-01-2015', '01-01-2019', 0, 'U-15', 0, 0, 0, 0, 1, '1524922110');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `league` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `post_date` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `league`, `post_date`) VALUES
(1, 'TVM FC', 'FA Junior Cup', ''),
(2, 'Pattana Vitya FC', 'FA Junior Cup', ''),
(3, 'Mayo City', 'FA Junior Cup', ''),
(4, 'Kotabaru FC', 'FA Junior Cup', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_team`
--
ALTER TABLE `class_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fixtures`
--
ALTER TABLE `fixtures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `match`
--
ALTER TABLE `match`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_team`
--
ALTER TABLE `class_team`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `fixtures`
--
ALTER TABLE `fixtures`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `match`
--
ALTER TABLE `match`
  MODIFY `match_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
