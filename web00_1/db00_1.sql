-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-08-06 14:33:31
-- 伺服器版本: 10.1.31-MariaDB
-- PHP 版本： 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db00_1`
--

-- --------------------------------------------------------

--
-- 資料表結構 `a_footer`
--

CREATE TABLE `a_footer` (
  `a_footer_seq` int(10) UNSIGNED NOT NULL,
  `a_footer_txt` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `a_footer`
--

INSERT INTO `a_footer` (`a_footer_seq`, `a_footer_txt`) VALUES
(1, '陳昱瑄好棒棒哒');

-- --------------------------------------------------------

--
-- 資料表結構 `a_image`
--

CREATE TABLE `a_image` (
  `a_image_seq` int(10) UNSIGNED NOT NULL,
  `a_image_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_image_display` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `a_image`
--

INSERT INTO `a_image` (`a_image_seq`, `a_image_img`, `a_image_display`) VALUES
(11, '1533146092.jpg', 1),
(12, '1533146109.jpg', 1),
(13, '1533146115.jpg', 1),
(14, '1533146121.jpg', 1),
(15, '1533146127.jpg', 1),
(16, '1533146135.jpg', 1),
(17, '1533146143.jpg', 1),
(18, '1533146147.jpg', 1),
(19, '1533146152.jpg', 1),
(20, '1533146158.jpg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `a_marquee`
--

CREATE TABLE `a_marquee` (
  `a_marquee_seq` int(10) NOT NULL,
  `a_marquee_txt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_marquee_display` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `a_marquee`
--

INSERT INTO `a_marquee` (`a_marquee_seq`, `a_marquee_txt`, `a_marquee_display`) VALUES
(3, '轉知臺北教育大學與臺灣師大合辦第11屆麋研齋全國硬筆書法比賽活動', 1),
(4, '轉知:法務部辦理「第五屆法規知識王網路闖關競賽辦法', 1),
(5, '轉知2012年全國青年水墨創作大賽活動', 1),
(6, '欣榮圖書館101年悅讀達人徵文比賽，歡迎全校師生踴躍投稿參加', 1),
(7, '轉知:教育是人類升沉的樞紐-2013教師生命成長營', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `a_member`
--

CREATE TABLE `a_member` (
  `a_member_seq` int(10) UNSIGNED NOT NULL,
  `a_member_acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_member_pw` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `a_member`
--

INSERT INTO `a_member` (`a_member_seq`, `a_member_acc`, `a_member_pw`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- 資料表結構 `a_mvim`
--

CREATE TABLE `a_mvim` (
  `a_mvim_seq` int(10) UNSIGNED NOT NULL,
  `a_mvim_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_mvim_display` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `a_mvim`
--

INSERT INTO `a_mvim` (`a_mvim_seq`, `a_mvim_img`, `a_mvim_display`) VALUES
(3, '1532513363.swf', 1),
(4, '1532513435.swf', 1),
(5, '1532513439.swf', 1),
(6, '1532513443.swf', 1),
(7, '1532513450.gif', 1),
(8, '1532513459.gif', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `a_title`
--

CREATE TABLE `a_title` (
  `a_title_seq` int(10) UNSIGNED NOT NULL,
  `a_title_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_title_txt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_title_display` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `a_title`
--

INSERT INTO `a_title` (`a_title_seq`, `a_title_img`, `a_title_txt`, `a_title_display`) VALUES
(6, '1532368963.jpg', '卓越科技大學校園資訊系', 0),
(7, '1532368969.jpg', '卓越科技大學校園資訊系', 1),
(8, '1532368974.jpg', '卓越科技大學校園資訊系', 0),
(9, '1532371683.jpg', '卓越科技大學校園資訊系', 0),
(11, '1532436724.jpg', '現在的我不是一個人了', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `people`
--

CREATE TABLE `people` (
  `people_seq` int(10) UNSIGNED NOT NULL,
  `people_num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `people`
--

INSERT INTO `people` (`people_seq`, `people_num`) VALUES
(1, 494);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `a_footer`
--
ALTER TABLE `a_footer`
  ADD PRIMARY KEY (`a_footer_seq`);

--
-- 資料表索引 `a_image`
--
ALTER TABLE `a_image`
  ADD PRIMARY KEY (`a_image_seq`);

--
-- 資料表索引 `a_marquee`
--
ALTER TABLE `a_marquee`
  ADD PRIMARY KEY (`a_marquee_seq`);

--
-- 資料表索引 `a_member`
--
ALTER TABLE `a_member`
  ADD PRIMARY KEY (`a_member_seq`);

--
-- 資料表索引 `a_mvim`
--
ALTER TABLE `a_mvim`
  ADD PRIMARY KEY (`a_mvim_seq`);

--
-- 資料表索引 `a_title`
--
ALTER TABLE `a_title`
  ADD PRIMARY KEY (`a_title_seq`);

--
-- 資料表索引 `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`people_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `a_footer`
--
ALTER TABLE `a_footer`
  MODIFY `a_footer_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表 AUTO_INCREMENT `a_image`
--
ALTER TABLE `a_image`
  MODIFY `a_image_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表 AUTO_INCREMENT `a_marquee`
--
ALTER TABLE `a_marquee`
  MODIFY `a_marquee_seq` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表 AUTO_INCREMENT `a_member`
--
ALTER TABLE `a_member`
  MODIFY `a_member_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表 AUTO_INCREMENT `a_mvim`
--
ALTER TABLE `a_mvim`
  MODIFY `a_mvim_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表 AUTO_INCREMENT `a_title`
--
ALTER TABLE `a_title`
  MODIFY `a_title_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表 AUTO_INCREMENT `people`
--
ALTER TABLE `people`
  MODIFY `people_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
