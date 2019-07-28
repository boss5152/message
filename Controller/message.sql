-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 07 月 19 日 12:11
-- 伺服器版本： 10.1.40-MariaDB
-- PHP 版本： 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `message`
--

-- --------------------------------------------------------

--
-- 資料表結構 `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8mb4 NOT NULL,
  `content` text CHARACTER SET utf8mb4 NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `article`
--

INSERT INTO `article` (`article_id`, `user_id`, `title`, `content`, `create_date`) VALUES
(1, 1, '64', '64', '2019-06-05 11:30:54'),
(2, 1, '改革開放', '改革開放', '2019-06-05 11:49:22'),
(4, 2, '走資派', '劉少奇', '2019-06-05 13:57:04'),
(5, 3, '清黨', '壤外必先安內。', '2019-06-06 11:39:24'),
(9, 2, '文革', '批鬥走資派', '2019-06-06 16:10:36'),
(10, 2, '999', '898\r\n899\r\n900\r\n901\r\n902\r\n903\r\n904\r\n905\r\n906\r\n907\r\n908\r\n909\r\n910\r\n911\r\n912\r\n', '2019-07-17 10:01:34'),
(14, 1, '859', '&lt;font color=\"blue\"&gt;文字顏色為藍色&lt;/font&gt;', '2019-07-19 08:52:23'),
(15, 1, '123', '123', '2019-07-19 16:25:41'),
(17, 1, '666', '666', '2019-07-19 16:56:52'),
(18, 1, '999', '989', '2019-07-19 16:58:26');

-- --------------------------------------------------------

--
-- 資料表結構 `goodbad`
--

CREATE TABLE `goodbad` (
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `good` int(11) NOT NULL DEFAULT '0',
  `bad` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `image`
--

CREATE TABLE `image` (
  `image_id` int(100) NOT NULL,
  `image_name` varchar(600) CHARACTER SET utf8mb4 NOT NULL,
  `user_id` int(11) NOT NULL,
  `upload_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `image`
--

INSERT INTO `image` (`image_id`, `image_name`, `user_id`, `upload_date`) VALUES
(1, '10001.jpg', 1, '2019-06-05 16:02:01'),
(2, '10002.jpg', 1, '2019-06-05 16:05:06'),
(3, '10003.jpg', 1, '2019-06-05 16:19:23'),
(4, '10004.jpg', 1, '2019-06-05 17:08:53'),
(5, '10005.jpg', 2, '2019-06-06 12:09:41');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `user_id` int(11) NOT NULL,
  `account` varchar(40) NOT NULL,
  `password` varchar(12) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `introduction` text NOT NULL,
  `user_photo` text,
  `register_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`user_id`, `account`, `password`, `nickname`, `introduction`, `user_photo`, `register_date`) VALUES
(1, '64', '64', '小平', '黑貓白貓，能抓鼠的就是好貓', '10004.jpg', '2019-06-05 11:38:11'),
(2, '25000', '25000', '老毛', '事情正在起變化 &lt;font color=\"red\"&gt;紅色&lt;/font&gt;', '10005.jpg', '2019-06-05 12:10:01'),
(3, '95', '95', '介石', '', 'sample.jpg', '2019-06-06 11:07:15'),
(4, 'lin', 'lin', '林彪', '', 'sample.jpg', '2019-07-18 17:27:16');

-- --------------------------------------------------------

--
-- 資料表結構 `msg`
--

CREATE TABLE `msg` (
  `msg_id` int(11) NOT NULL,
  `article_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `msg_name` varchar(40) NOT NULL,
  `msg_content` text NOT NULL,
  `msg_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `msg`
--

INSERT INTO `msg` (`msg_id`, `article_id`, `user_id`, `msg_name`, `msg_content`, `msg_date`) VALUES
(1, 1, 2, '老毛', '小平兄你的坦克車壓到學生了。\r\n123', '2019-06-05 12:30:36'),
(4, 9, 2, '老毛', '少奇人呢?', '2019-06-06 16:11:02'),
(6, 9, 2, '老毛', '小平兄你還不夠紅', '2019-06-06 16:15:45'),
(8, 4, 1, '小平', '早給你打死了，還在嚷什麼123', '2019-06-06 16:18:46'),
(9, 2, 1, '小平', '資本主義確實是有值得學習的地方', '2019-07-19 08:58:19'),
(10, 1, 1, '小平', '123', '2019-07-19 09:18:21'),
(11, 1, 1, '小平', '789', '2019-07-19 11:10:33');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- 資料表索引 `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`user_id`);

--
-- 資料表索引 `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`msg_id`);

--
-- 在傾印的資料表使用自動增長(AUTO_INCREMENT)
--

--
-- 使用資料表自動增長(AUTO_INCREMENT) `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `msg`
--
ALTER TABLE `msg`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
