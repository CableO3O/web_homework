-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-01-17 07:57:45
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `web_homework`
--

-- --------------------------------------------------------

--
-- 資料表結構 `carousel`
--

CREATE TABLE `carousel` (
  `id` int(10) NOT NULL,
  `img` text NOT NULL,
  `text` text NOT NULL,
  `href` text NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `carousel`
--

INSERT INTO `carousel` (`id`, `img`, `text`, `href`, `sh`) VALUES
(1, '2024011611493345969.png', 'google', 'https://www.google.com.tw/?hl=zh_TW', 1),
(4, '2024011613183641970.png', '麥當勞', 'https://www.mcdonalds.com/tw/zh-tw.html', 1),
(5, '2024011714091019903.png', 'github', 'https://github.com/', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `shop`
--

CREATE TABLE `shop` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_name` text NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `text` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `shop`
--

INSERT INTO `shop` (`id`, `user_id`, `user_name`, `name`, `price`, `text`, `img`) VALUES
(28, 2, 'test', '1234', '1234', '1324', '2024011613553041130.jpg'),
(29, 2, 'test', '1234', '1234', '1324123', '2024011613553885366.jpg'),
(31, 3, 'aaa', '467', '4567', '45674', '2024011613581653267.jpg'),
(32, 3, 'aaa', '45674', '4567', '465765', '2024011613582498326.jpg'),
(33, 3, 'aaa', '456756', '6745', 'awefawefawe', '2024011613583110382.jpg'),
(34, 3, 'aaa', '74567', '456745', '745674', '2024011613583838053.jpg'),
(35, 5, 'bbb', '12341', '2341', '1324', '2024011613590878530.jpg'),
(36, 5, 'bbb', '123', '123', '432', '2024011613591557735.jpg'),
(37, 5, 'bbb', '4132', '1234', '14231', '2024011613592336388.JPG'),
(38, 5, 'bbb', '1243', '1324', '41234', '2024011613593680381.jpg'),
(39, 3, 'aaa', 'aaa', '111', '3dsbsdfbdsbsdfbsdfb', '2024011710435134082.jpg'),
(40, 3, 'aaa', '1234', '2341', 'agdzsafgsedgrsdfgxdfgsfrgser', '2024011710440254686.jpg'),
(41, 5, 'bbb', '11324', '123412', '4124243', '2024011711021591891.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `shopcar`
--

CREATE TABLE `shopcar` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `good_id` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `count` int(10) UNSIGNED NOT NULL,
  `pay` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `shopcar`
--

INSERT INTO `shopcar` (`id`, `user_id`, `good_id`, `price`, `name`, `img`, `count`, `pay`) VALUES
(4, 2, 27, 222, 'test2', '2024011608571139952.jpg', 3, 0),
(5, 2, 28, 1234, '1234', '2024011613553041130.jpg', 1, 0),
(13, 2, 29, 1234, '1234', '2024011613553885366.jpg', 1, 0),
(14, 5, 35, 2341, '12341', '2024011613590878530.jpg', 2, 1),
(15, 5, 36, 123, '123', '2024011613591557735.jpg', 1, 1),
(16, 5, 32, 4567, '45674', '2024011613582498326.jpg', 1, 1),
(17, 5, 34, 456745, '74567', '2024011613583838053.jpg', 1, 0),
(18, 5, 33, 6745, '456756', '2024011613583110382.jpg', 1, 0),
(19, 5, 39, 111, 'aaa', '2024011710435134082.jpg', 3, 0),
(27, 5, 31, 4567, '467', '2024011613581653267.jpg', 1, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `acc` text NOT NULL,
  `pw` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `acc`, `pw`, `email`) VALUES
(1, 'admin', '1234', '1234'),
(2, 'test', '123', '123'),
(3, 'aaa', 'aaa', 'aaa'),
(4, 'ccc', 'ccc', '456'),
(5, 'bbb', 'bbb', 'bbb');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `shopcar`
--
ALTER TABLE `shopcar`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `shopcar`
--
ALTER TABLE `shopcar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
