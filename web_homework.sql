-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-01-12 03:08:01
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
-- 資料表結構 `shop`
--

CREATE TABLE `shop` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `text` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `shop`
--

INSERT INTO `shop` (`id`, `user_id`, `name`, `price`, `text`, `img`) VALUES
(11, 2, '2452345', '23452345', 'dghtrhrth', '2024010916021399469.jpg'),
(15, 2, '123', '1234', '5rgewrgwer', '2024011015384791816.jpg'),
(16, 5, '345234523', '452345234', 'ewrwerg', '2024011015473094647.jpg'),
(17, 5, '324523425', '24352345', 'wergwegr', '2024011015473911585.jpg'),
(18, 5, '1234123', '435234532', 'werqwerqwer', '2024011015474821505.jpg'),
(19, 3, '4wygt4wg', '23452345', 'gfsagfsae', '2024011015481092559.jpg'),
(20, 3, '13513245', '234524365', 'rsgegsrg', '2024011015482068305.jpg'),
(21, 3, '123421341', '42352345', 'aerwgdsarg', '2024011015483240288.jpg'),
(22, 4, 'fdrthrdsth', '44563456', 'erthgerth', '2024011015485280876.JPG'),
(23, 4, '23452345', '23452345', 'wertwertwert', '2024011015490411520.jpg'),
(24, 4, '245234523', '4523452', '435234234', '2024011015491692123.jpg');

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
-- 資料表索引 `shop`
--
ALTER TABLE `shop`
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
-- 使用資料表自動遞增(AUTO_INCREMENT) `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
