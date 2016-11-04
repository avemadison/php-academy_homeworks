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

CREATE TABLE `continent` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `continent`
--

INSERT INTO `continent` (`id`, `name`) VALUES
(1, 'Европа'),
(2, 'Азия'),
(3, 'Северная Америка'),
(4, 'Южная Америка'),
(5, 'Африка'),
(6, 'Австралия'),
(7, 'Антарктида');

--
-- Структура таблицы `country`
--

CREATE TABLE `country` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `short_name` char(2) DEFAULT NULL,
  `square` int(11) DEFAULT NULL,
  `population` int(11) DEFAULT NULL,
  `president` varchar(100) DEFAULT NULL,
  `continent_id` tinyint(4) DEFAULT NULL,
  `prime_minister` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`id`, `name`, `short_name`, `square`, `population`, `president`, `continent_id`, `prime_minister`) VALUES
(1, 'Украина', 'ua', 603549, 123456789, 'Порошенко П.А.', 1, 'Гройсман Владимир'),
(2, 'Соединённые Штаты Америки', 'us', 9500000, 325000000, 'unknown', 3, 'null'),
(3, 'Италия', 'it', 301340, 123456789, 'Серджо Маттарелла', 1, 'Маттео Ренци'),
(4, 'Бразилия', 'br', 8514877, 205823665, 'Мишел Темер', 4, 'null'),
(5, 'Австралия', 'au', 7692024, 24067700, 'Елизавета II', 6, 'Малкольм Тернбулл'),
(6, 'Китайская Народная Республика', 'cn', 9598962, 1548541278, 'Си Цзиньпин', 2, 'null'),
(7, 'Япония', 'jp', 377944, 126985000, 'Акихито', 2, 'Синдзо Абэ'),
(8, 'Египет', 'eg', 1001450, 88487396, 'Абдул-Фаттах Ас-Сиси', 5, 'Шериф Исмаил'),
(10, 'Кения', 'ke', 582650, 44037656, 'Ухуру Кениата', 5, 'null');

--
-- Структура таблицы `country_language`
--

CREATE TABLE `country_language` (
  `id` tinyint(4) NOT NULL,
  `country_id` tinyint(4) NOT NULL,
  `language_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

--
-- Структура таблицы `language`
--

CREATE TABLE `language` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(11, 'Французский'),
(12, 'Немекций'),
(13, 'Финский'),
(14, 'Норвежский'),
(15, 'Венгерский'),
(16, 'Чешский'),
(17, 'Греческий'),
(18, 'Турецкий'),
(19, 'Польский'),
(20, 'Албанский');

--
-- Индексы сохраненных таблиц
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
  ADD KEY `country_id` (`country_id`),
  ADD KEY `language_id` (`language_id`);

--
-- Индексы таблицы `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранения таблиц
--

--
-- AUTO_INCREMENT для таблицы `continent`
--
ALTER TABLE `continent`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `country`
--
ALTER TABLE `country`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `country_language`
--
ALTER TABLE `country_language`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `language`
--
ALTER TABLE `language`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
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
  ADD CONSTRAINT `c_country_id` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `c_language_id` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
