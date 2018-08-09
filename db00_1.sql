-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-08-09 15:58:37
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
-- 資料表結構 `a_bot`
--

CREATE TABLE `a_bot` (
  `a_bot_seq` int(5) UNSIGNED NOT NULL,
  `a_bot_txt` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `a_bot`
--

INSERT INTO `a_bot` (`a_bot_seq`, `a_bot_txt`) VALUES
(1, '陳昱瑄棒棒哒');

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
(1, 'admin', '1234'),
(3, '123', '123');

-- --------------------------------------------------------

--
-- 資料表結構 `a_mid`
--

CREATE TABLE `a_mid` (
  `a_mid_seq` int(10) UNSIGNED NOT NULL,
  `a_mid_txt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_mid_net` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_mid_display` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `a_mid`
--

INSERT INTO `a_mid` (`a_mid_seq`, `a_mid_txt`, `a_mid_net`, `a_mid_display`) VALUES
(1, '登入管理', 'http://localhost/web00_1/login.php?do=admin', 1),
(2, '網站首頁', 'http://localhost/web00_1/index.php', 1);

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
-- 資料表結構 `a_news`
--

CREATE TABLE `a_news` (
  `a_news_seq` int(10) UNSIGNED NOT NULL,
  `a_news_txt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_news_display` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `a_news`
--

INSERT INTO `a_news` (`a_news_seq`, `a_news_txt`, `a_news_display`) VALUES
(1, '教師研習「世界公民生命園丁國內研習會」\r\n1.主辦單位：世界展望會\r\n2.研習日期：101年11月14日（三）～15日（四）\r\n3.詳情請參考：\r\nhttp://gc.worldvision.org.tw/seed.html。\r\n請線上報名。\r\n', 1),
(2, '公告綜合高中一年級英數補救教學時間\r\n上課日期:10/27.11/3.11/10.11/24共計四次\r\n上課時間:早上8:00~11:50半天\r\n費用:全程免費\r\n參加同學:綜合科一年級第一次段考成績需加強者\r\n已將名單送交各班及導師\r\n參加同學請帶紙筆.課本.第一次段考考卷\r\n並將家長通知單給家長\r\n若有任何疑問\r\n請洽綜合高中學程主任', 1),
(3, '102年全國大專校院運動會\r\n「主題標語及吉祥物命名」\r\n網路票選活動\r\n一、活動期間：自10月25日起至11月4日止。\r\n二、相關訊息請上宜蘭大學首頁連結「102全大運在宜大」\r\n活動網址：http://102niag.niu.edu.tw/', 1),
(4, '台灣亞洲藝術文化教育交流學會第一屆年會國際研討會\r\n活動日期：101年3月3～4日(六、日)\r\n活動主題：創造力、文化、全人教育\r\n有意參加者請至http://www.caaetaiwan.org下載報名表', 1),
(5, '11月23日(星期五)將於彰化縣田尾鄉菁芳園休閒農場\r\n舉辦「高中職生涯輔導知能研習」\r\n中區學校每校至多2名\r\n以普通科、專業類科教師優先報名參加\r\n生涯規劃教師次之，參加人員公差假\r\n並核實派代課\r\n當天還有專車接送(8:35前在員林火車站集合)\r\n如此好康的機會，怎能錯過？！\r\n熱烈邀請師長們向輔導室(分機234)報名\r\n名額有限，動作要快！！\r\n報名截止日期：本周四 10月25日17:00前！', 1),
(6, '台視百萬大明星節目辦理海選活動\r\n時間:101年10月27日下午13時\r\n地點:彰化', 1),
(9, '財團法人漢光教育基金會\r\n辦理2012「舊愛新歡-古典詩詞譜曲創作暨歌唱表演競賽」\r\n參賽獎金豐厚!!\r\n', 1),
(10, '國立故宮博物院辦理\r\n「商王武丁與后婦好 殷商盛世文化藝術特展」暨\r\n「赫赫宗周 西周文化特展」\r\n', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `a_sup`
--

CREATE TABLE `a_sup` (
  `a_sup_seq` int(10) UNSIGNED NOT NULL,
  `a_sup_txt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_sup_net` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_sup_midseq` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `a_sup`
--

INSERT INTO `a_sup` (`a_sup_seq`, `a_sup_txt`, `a_sup_net`, `a_sup_midseq`) VALUES
(3, '更多內容', 'http://localhost/web00_1/newsdata.php', 2);

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
(11, '1532436724.jpg', '已經沒有什麼好害怕的了', 0);

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
(1, 498);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `a_bot`
--
ALTER TABLE `a_bot`
  ADD PRIMARY KEY (`a_bot_seq`);

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
-- 資料表索引 `a_mid`
--
ALTER TABLE `a_mid`
  ADD PRIMARY KEY (`a_mid_seq`);

--
-- 資料表索引 `a_mvim`
--
ALTER TABLE `a_mvim`
  ADD PRIMARY KEY (`a_mvim_seq`);

--
-- 資料表索引 `a_news`
--
ALTER TABLE `a_news`
  ADD PRIMARY KEY (`a_news_seq`);

--
-- 資料表索引 `a_sup`
--
ALTER TABLE `a_sup`
  ADD PRIMARY KEY (`a_sup_seq`);

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
-- 使用資料表 AUTO_INCREMENT `a_bot`
--
ALTER TABLE `a_bot`
  MODIFY `a_bot_seq` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `a_member_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表 AUTO_INCREMENT `a_mid`
--
ALTER TABLE `a_mid`
  MODIFY `a_mid_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表 AUTO_INCREMENT `a_mvim`
--
ALTER TABLE `a_mvim`
  MODIFY `a_mvim_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表 AUTO_INCREMENT `a_news`
--
ALTER TABLE `a_news`
  MODIFY `a_news_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表 AUTO_INCREMENT `a_sup`
--
ALTER TABLE `a_sup`
  MODIFY `a_sup_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
