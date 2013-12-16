-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 16 2013 г., 00:43
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `carsaloon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `carinfo`
--

CREATE TABLE IF NOT EXISTS `carinfo` (
  `carid` int(11) NOT NULL AUTO_INCREMENT,
  `usersid` int(11) NOT NULL,
  `name` text NOT NULL,
  `model` text NOT NULL,
  `year` int(11) NOT NULL,
  `to` text NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`carid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `carinfo`
--

INSERT INTO `carinfo` (`carid`, `usersid`, `name`, `model`, `year`, `to`, `info`) VALUES
(1, 1, 'BMW', 'M5', 2003, '01.09.2014', 'Great car!'),
(2, 1, 'BMW', 'M5', 2003, '01.09.2014', 'Great car!'),
(3, 1, 'Nissan', 'GTR', 2011, '2014.08.3', 'Very fast!');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `mail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `mail`) VALUES
(1, 'jevgenij', 'kafka', 'jevgenijsblaus@gmail.com'),
(2, 'vadim', '333', 'berrryk@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
