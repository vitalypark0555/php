-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 03 2018 г., 21:14
-- Версия сервера: 10.1.35-MariaDB
-- Версия PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `extension` varchar(45) NOT NULL,
  `views_num` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `mini_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `extension`, `views_num`, `path`, `mini_path`) VALUES
(10, 'jpg', 7, '/photos/10.jpg', '/miniphotos/10.jpg'),
(11, 'jpg', 1, '/photos/11.jpg', '/miniphotos/11.jpg'),
(12, 'jpg', 0, '/photos/12.jpg', '/miniphotos/12.jpg'),
(13, 'jpg', 0, '/photos/13.jpg', '/miniphotos/13.jpg'),
(15, 'jpg', 0, '/photos/15.jpg', '/miniphotos/15.jpg'),
(16, 'jpg', 0, '/photos/16.jpg', '/miniphotos/16.jpg'),
(17, 'jpg', 0, '/photos/17.jpg', '/miniphotos/17.jpg'),
(18, 'jpg', 0, '/photos/18.jpg', '/miniphotos/18.jpg'),
(19, 'jpg', 0, '/photos/19.jpg', '/miniphotos/19.jpg'),
(20, 'jpg', 0, '/photos/20.jpg', '/miniphotos/20.jpg'),
(21, 'jpg', 0, '/photos/21.jpg', '/miniphotos/21.jpg'),
(22, 'jpg', 0, '/photos/22.jpg', '/miniphotos/22.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
