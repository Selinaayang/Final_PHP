-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2019-06-23 08:26:39
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `reservation`
--

-- --------------------------------------------------------

--
-- 資料表結構 `data`
--

CREATE TABLE `data` (
  `formid` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `dattime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `idnumber` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `birth` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mygender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `school_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `wedding` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `disability` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `stay` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `addr` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `contect_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `contect_rel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `contect_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `reason` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `issue` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `health` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `pressure` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `injury` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `experience` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `plan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `check1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `check2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `timess` int(5) NOT NULL,
  `evaluation` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(600) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_interval` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `data`
--

INSERT INTO `data` (`formid`, `dattime`, `name`, `idnumber`, `birth`, `mygender`, `school_id`, `department`, `status`, `wedding`, `disability`, `stay`, `phone`, `addr`, `mail`, `contect_name`, `contect_rel`, `contect_phone`, `reason`, `issue`, `health`, `pressure`, `injury`, `experience`, `plan`, `check1`, `check2`, `timess`, `evaluation`, `message`, `time_interval`) VALUES
('F1', '2019-06-23 15:25:56', 'Peter', 'M123563207', '1997/05/06', 'male', 'A1053522', '應物3年級', '本地生', '未婚', 'NO', '租屋', 936987586, '新竹市中正路300-22號', 'A1053522@gmail.com', 'Amy', 'mather', '0632587123', '主動來談', '家庭議題/人際關係/感情困擾', '覺得沒價值、內疚、或罪惡感/食慾不佳或暴食', '6', '我沒有任何自傷的念頭', 'NO', '任一輔導老師皆可', 'NO', 'NO', 4, '5', 'testxxxxxxxxx', '一(12:00-13:00)/三(14:10-15:00)/四(14:10-15:00)/二(15:10-16:00)/一(16:10-17:00)'),
('F2', '2019-06-23 15:37:23', 'Mini', 'C663325987', '1997/12/03', 'female', 'A1056598', '東語3年級', '本地生', '未婚', 'NO', '住校', 936598333, '基隆市XX路XX號', 'A1056598@gmail.com', 'Ken', 'father', '095555555', '同儕告知', '自我探索/壓力調適', '常感悲傷、沮喪、或焦慮/食慾不佳或暴食', '7', '有自傷念頭，但我不會真的去做', 'YES', '若原輔導老師不行，可安排其它人', 'NO', 'NO', 5, '4', 'testtttttt', '三(14:10-15:00)/四(14:10-15:00)/五(14:10-15:00)/四(15:10-16:00)/五(15:10-16:00)/四(16:10-17:00)/五(16:10-17:00)'),
('F3', '2019-06-23 15:46:57', 'Tax', 'X1336598744', '1997/11/06', 'male', 'A1051111', '法律3年級', '本地生', '未婚', 'NO', '住家裡', 93666666, '澎湖縣XX路XX號', 'A1051111@gmail.com', 'Ann', 'mather', '0988885555', '主動來談', '家庭議題/壓力調適/情緒調適', '常感悲傷、沮喪、或焦慮/覺得沒價值、內疚、或罪惡感', '9', '有自傷念頭，但我不會真的去做', 'NO', '希望安排原輔導老師', 'NO', 'NO', 2, '9', 'testtttttttttttttt', '三(14:10-15:00)/四(14:10-15:00)/四(15:10-16:00)/二(16:10-17:00)/四(16:10-17:00)/一(17:10-18:00)');

-- --------------------------------------------------------

--
-- 資料表結構 `feedback`
--

CREATE TABLE `feedback` (
  `No` int(15) NOT NULL,
  `q1` int(10) NOT NULL,
  `q2` int(10) NOT NULL,
  `q3` int(10) NOT NULL,
  `q4` int(10) NOT NULL,
  `q5` int(10) NOT NULL,
  `q6` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `feedback`
--

INSERT INTO `feedback` (`No`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`) VALUES
(1, 5, 5, 3, 5, 2, '5'),
(2, 3, 5, 3, 3, 2, '5'),
(3, 3, 5, 3, 4, 5, '5');

-- --------------------------------------------------------

--
-- 資料表結構 `ttime`
--

CREATE TABLE `ttime` (
  `numbering` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `dateti` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `time_interval` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `school_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `consultant` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `ttime`
--

INSERT INTO `ttime` (`numbering`, `dateti`, `time_interval`, `school_id`, `consultant`) VALUES
('T2', '2019-06-10', '16:10-17:00', 'A1053522', '林諮商師'),
('T4', '2019-06-08', '15:10-16:00', 'A1056598', '陳諮商師'),
('T5', '2019-06-13', '14:10-15:00', 'A1051111', '吳諮商師');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`formid`);

--
-- 資料表索引 `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`No`);

--
-- 資料表索引 `ttime`
--
ALTER TABLE `ttime`
  ADD PRIMARY KEY (`numbering`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
