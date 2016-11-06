-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 06 2016 г., 15:25
-- Версия сервера: 5.5.50
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `practice_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `continent`
--
-- Создание: Ноя 06 2016 г., 10:40
--

DROP TABLE IF EXISTS `continent`;
CREATE TABLE IF NOT EXISTS `continent` (
  `id` tinyint(2) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `continent`
--

INSERT INTO `continent` (`id`, `name`, `description`) VALUES
(1, 'Европа', NULL),
(2, 'Азия', NULL),
(3, 'Северная Америка', NULL),
(4, 'Южная Америка', NULL),
(5, 'Африка', NULL),
(6, 'Австралия', NULL),
(7, 'Антарктида', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--
-- Создание: Ноя 06 2016 г., 06:37
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `short_name` char(2) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `population` int(11) DEFAULT NULL,
  `president` varchar(50) DEFAULT NULL,
  `continent_id` tinyint(4) DEFAULT NULL,
  `prime_minister` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`id`, `name`, `short_name`, `area`, `population`, `president`, `continent_id`, `prime_minister`) VALUES
(1, 'Украина', 'ua', 603549, 123456789, 'Порошенко П.А.', 1, 'Гройсман Владимир'),
(2, 'Япония', 'jp', 377944, 126985000, 'Акихито', 2, 'null'),
(3, 'Италия', 'it', 301340, 123456789, 'Серджо Маттарелла', 1, 'Маттео Ренци'),
(4, 'Бразилия', 'br', 8514877, 205823665, 'Мишел Темер', 4, 'null'),
(5, 'Кения', 'ke', 582650, 44037656, 'Ухуру Кениата', 5, 'Малкольм Тернбулл'),
(6, 'Канада', 'ca', 9984670, 36048521, 'Елизавета II', 3, 'null'),
(7, 'Австралия', 'au', 7692024, 24067700, 'Елизавета II', 6, 'Синдзо Абэ'),
(9, 'Соединённые Штаты Америки', 'us', 9500000, 325000000, 'unknown', 3, 'null'),
(10, 'Китайская Народная Республика', 'cn', 9598962, 1548541278, 'Си Цзиньпин', 2, 'null');

-- --------------------------------------------------------

--
-- Структура таблицы `country_language`
--
-- Создание: Ноя 06 2016 г., 11:58
--

DROP TABLE IF EXISTS `country_language`;
CREATE TABLE IF NOT EXISTS `country_language` (
  `id` tinyint(4) NOT NULL,
  `country_id` tinyint(4) NOT NULL,
  `language_id` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `country_language`
--

INSERT INTO `country_language` (`id`, `country_id`, `language_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 2, 10),
(5, 2, 9),
(6, 3, 4),
(7, 4, 5),
(8, 5, 3),
(9, 5, 9),
(10, 5, 4),
(11, 6, 9),
(12, 7, 6),
(13, 7, 3),
(14, 8, 8),
(15, 10, 3),
(16, 10, 7);

-- --------------------------------------------------------

--
-- Структура таблицы `language`
--
-- Создание: Ноя 06 2016 г., 11:57
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `language`
--

INSERT INTO `language` (`id`, `name`) VALUES
(1, 'Украинский'),
(2, 'Русский'),
(3, 'Английский'),
(4, 'Итальянский'),
(5, 'Португальский'),
(6, 'Японский'),
(7, 'Суахили'),
(8, 'Арабский'),
(9, 'Китайский'),
(10, 'Испанский'),
(11, 'Норвежский'),
(12, 'Французский'),
(13, 'Греческий'),
(14, 'Немекций'),
(15, 'Польский'),
(16, 'Чешский'),
(17, 'Албанский'),
(18, 'Венгерский'),
(19, 'Турецкий'),
(20, 'Финский');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `continent`
--
ALTER TABLE `continent`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`),
  ADD KEY `continent_id` (`continent_id`);

--
-- Индексы таблицы `country_language`
--
ALTER TABLE `country_language`
  ADD PRIMARY KEY (`id`),
  ADD KEY `language_id` (`language_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Индексы таблицы `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `continent`
--
ALTER TABLE `continent`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `country_language`
--
ALTER TABLE `country_language`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `language`
--
ALTER TABLE `language`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `country`
--
ALTER TABLE `country`
  ADD CONSTRAINT `c_continent_id` FOREIGN KEY (`continent_id`) REFERENCES `continent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `country_language`
--
ALTER TABLE `country_language`
  ADD CONSTRAINT `c_language_id` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
