-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Трв 09 2023 р., 12:30
-- Версія сервера: 10.4.27-MariaDB
-- Версія PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `posts`
--

-- --------------------------------------------------------

--
-- Структура таблиці `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`) VALUES
(1, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:46:39'),
(2, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:49:57'),
(3, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:50:38'),
(4, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:51:10'),
(5, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:53:28'),
(6, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:55:10'),
(7, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:55:24'),
(8, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:55:51'),
(9, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:57:13'),
(10, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:57:17'),
(11, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:57:20'),
(12, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:57:24'),
(13, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:57:27'),
(14, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:57:30'),
(15, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:57:33'),
(16, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:57:36'),
(17, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:57:39'),
(18, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:57:42'),
(19, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:58:36'),
(20, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:58:39'),
(21, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:58:42'),
(22, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:58:45'),
(23, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:58:48'),
(24, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:58:52'),
(25, 'Заголовок посту', 'Вміст посту', '2023-05-09 10:58:56');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;