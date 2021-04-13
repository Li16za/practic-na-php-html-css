-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 13 2021 г., 20:32
-- Версия сервера: 8.0.23-0ubuntu0.20.10.1
-- Версия PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `praktika`
--

-- --------------------------------------------------------

--
-- Структура таблицы `A_criminal_record`
--

CREATE TABLE `A_criminal_record` (
  `Id_a_criminal_record` int NOT NULL,
  `Description` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `A_criminal_record`
--

INSERT INTO `A_criminal_record` (`Id_a_criminal_record`, `Description`) VALUES
(1, '2'),
(2, '0');

-- --------------------------------------------------------

--
-- Структура таблицы `Criminal_case`
--

CREATE TABLE `Criminal_case` (
  `Id_criminal_case` int NOT NULL,
  `Id_resolution` int DEFAULT NULL,
  `Id_the_officer_leading_the_case` int DEFAULT NULL,
  `Date_of_establishment_of_the_case` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Criminal_case`
--

INSERT INTO `Criminal_case` (`Id_criminal_case`, `Id_resolution`, `Id_the_officer_leading_the_case`, `Date_of_establishment_of_the_case`) VALUES
(1, 1, 1, '2020-09-19'),
(2, 2, 2, '2020-09-20');

-- --------------------------------------------------------

--
-- Структура таблицы `Department`
--

CREATE TABLE `Department` (
  `Id_department` int NOT NULL,
  `Address` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Department`
--

INSERT INTO `Department` (`Id_department`, `Address`) VALUES
(1, 'Измайловский бул., 41А, Москва'),
(2, 'Вернисажная ул., 1, Москва'),
(3, 'Измайловский пр., 6, корп. 3, Москва'),
(4, '5-я Парковая ул., 60А, Москва (эт. 1 )');

-- --------------------------------------------------------

--
-- Структура таблицы `Incident`
--

CREATE TABLE `Incident` (
  `Id_incident` int NOT NULL,
  `Id_officer` int DEFAULT NULL,
  `Id_location` int DEFAULT NULL,
  `Date_incident` date DEFAULT NULL,
  `Description` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Incident`
--

INSERT INTO `Incident` (`Id_incident`, `Id_officer`, `Id_location`, `Date_incident`, `Description`) VALUES
(1, 1, 1, '2020-09-18', 'Мужчина 30 лет напал на девушку с ножом'),
(2, 2, 2, '2020-09-19', 'Кража сумки у девушки');

-- --------------------------------------------------------

--
-- Структура таблицы `Involved`
--

CREATE TABLE `Involved` (
  `Id_involved` int NOT NULL,
  `Id_status` int DEFAULT NULL,
  `Id_incident` int DEFAULT NULL,
  `Id_a_criminal_record` int DEFAULT NULL,
  `Last_name` char(200) DEFAULT NULL,
  `Name` char(100) DEFAULT NULL,
  `Middle_name` char(100) DEFAULT NULL,
  `Document` char(50) DEFAULT NULL,
  `N_document` char(50) DEFAULT NULL,
  `Address` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Involved`
--

INSERT INTO `Involved` (`Id_involved`, `Id_status`, `Id_incident`, `Id_a_criminal_record`, `Last_name`, `Name`, `Middle_name`, `Document`, `N_document`, `Address`) VALUES
(1, 1, 1, 1, 'Васичкин', 'Илья', 'Сергеевич', 'Паспорт', '4615278922', 'г.Москва,ул.Бауманская,д.4,кв.3');

-- --------------------------------------------------------

--
-- Структура таблицы `Location`
--

CREATE TABLE `Location` (
  `Id_location` int NOT NULL,
  `Address` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Location`
--

INSERT INTO `Location` (`Id_location`, `Address`) VALUES
(1, 'Метро  Первомайская'),
(2, 'Метро Измайлово');

-- --------------------------------------------------------

--
-- Структура таблицы `Officer`
--

CREATE TABLE `Officer` (
  `Id_officer` int NOT NULL,
  `Id_department` int DEFAULT NULL,
  `Last_name` char(200) DEFAULT NULL,
  `Name` char(100) DEFAULT NULL,
  `Middle_name` char(100) DEFAULT NULL,
  `The_title` char(100) DEFAULT NULL,
  `Id_card` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Officer`
--

INSERT INTO `Officer` (`Id_officer`, `Id_department`, `Last_name`, `Name`, `Middle_name`, `The_title`, `Id_card`) VALUES
(1, 1, 'Васичкин', 'Иван', 'Иванович', 'Лейтенант', '54326'),
(2, 2, 'Петров', 'Игорь', 'Иванович', 'Майор', '43535'),
(3, 3, ' Котов', 'Игорь', 'Викторович', 'Капитан', '53563');

-- --------------------------------------------------------

--
-- Структура таблицы `Resolution`
--

CREATE TABLE `Resolution` (
  `Id_resolution` int NOT NULL,
  `Id_officer` int DEFAULT NULL,
  `Date_resolution` date DEFAULT NULL,
  `Conclution` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Resolution`
--

INSERT INTO `Resolution` (`Id_resolution`, `Id_officer`, `Date_resolution`, `Conclution`) VALUES
(1, 1, '2020-09-19', 'удовлетворено ходатайство о возбуждении уголовного дела'),
(2, 2, '2020-09-20', 'удовлетворено ходатайство о возбуждении уголовного дела');

-- --------------------------------------------------------

--
-- Структура таблицы `Status_of_the_involved`
--

CREATE TABLE `Status_of_the_involved` (
  `Id_status` int NOT NULL,
  `status` char(20) DEFAULT NULL
) ;

--
-- Дамп данных таблицы `Status_of_the_involved`
--

INSERT INTO `Status_of_the_involved` (`Id_status`, `status`) VALUES
(1, 'Свидетель'),
(2, 'Подозреваемый');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `Username` char(200) DEFAULT NULL,
  `Password` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `Username`, `Password`) VALUES
(1, 'admin', '1234'),
(2, 'user', '4321'),
(5, '5t4t', 'erte'),
(10, '123', '123'),
(11, 'liza', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `A_criminal_record`
--
ALTER TABLE `A_criminal_record`
  ADD PRIMARY KEY (`Id_a_criminal_record`),
  ADD KEY `Id_a_criminal_record` (`Id_a_criminal_record`);

--
-- Индексы таблицы `Criminal_case`
--
ALTER TABLE `Criminal_case`
  ADD PRIMARY KEY (`Id_criminal_case`),
  ADD KEY `Id_criminal_case` (`Id_criminal_case`),
  ADD KEY `Id_resolution` (`Id_resolution`),
  ADD KEY `Id_the_officer_leading_the_case` (`Id_the_officer_leading_the_case`);

--
-- Индексы таблицы `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`Id_department`),
  ADD KEY `Id_department` (`Id_department`);

--
-- Индексы таблицы `Incident`
--
ALTER TABLE `Incident`
  ADD PRIMARY KEY (`Id_incident`),
  ADD KEY `Id_incident` (`Id_incident`),
  ADD KEY `Id_officer` (`Id_officer`),
  ADD KEY `Id_location` (`Id_location`);

--
-- Индексы таблицы `Involved`
--
ALTER TABLE `Involved`
  ADD PRIMARY KEY (`Id_involved`),
  ADD KEY `Id_involved` (`Id_involved`),
  ADD KEY `Id_status` (`Id_status`),
  ADD KEY `Id_incident` (`Id_incident`),
  ADD KEY `Id_a_criminal_record` (`Id_a_criminal_record`);

--
-- Индексы таблицы `Location`
--
ALTER TABLE `Location`
  ADD PRIMARY KEY (`Id_location`),
  ADD KEY `Id_location` (`Id_location`);

--
-- Индексы таблицы `Officer`
--
ALTER TABLE `Officer`
  ADD PRIMARY KEY (`Id_officer`),
  ADD KEY `Id_officer` (`Id_officer`),
  ADD KEY `Id_department` (`Id_department`);

--
-- Индексы таблицы `Resolution`
--
ALTER TABLE `Resolution`
  ADD PRIMARY KEY (`Id_resolution`),
  ADD KEY `Id_resolution` (`Id_resolution`),
  ADD KEY `Id_officer` (`Id_officer`);

--
-- Индексы таблицы `Status_of_the_involved`
--
ALTER TABLE `Status_of_the_involved`
  ADD PRIMARY KEY (`Id_status`),
  ADD KEY `Id_status` (`Id_status`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `A_criminal_record`
--
ALTER TABLE `A_criminal_record`
  MODIFY `Id_a_criminal_record` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Criminal_case`
--
ALTER TABLE `Criminal_case`
  MODIFY `Id_criminal_case` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Department`
--
ALTER TABLE `Department`
  MODIFY `Id_department` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `Incident`
--
ALTER TABLE `Incident`
  MODIFY `Id_incident` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `Involved`
--
ALTER TABLE `Involved`
  MODIFY `Id_involved` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Location`
--
ALTER TABLE `Location`
  MODIFY `Id_location` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Officer`
--
ALTER TABLE `Officer`
  MODIFY `Id_officer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `Resolution`
--
ALTER TABLE `Resolution`
  MODIFY `Id_resolution` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Status_of_the_involved`
--
ALTER TABLE `Status_of_the_involved`
  MODIFY `Id_status` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Criminal_case`
--
ALTER TABLE `Criminal_case`
  ADD CONSTRAINT `Criminal_case_ibfk_1` FOREIGN KEY (`Id_resolution`) REFERENCES `Resolution` (`Id_resolution`),
  ADD CONSTRAINT `Criminal_case_ibfk_2` FOREIGN KEY (`Id_the_officer_leading_the_case`) REFERENCES `Officer` (`Id_officer`);

--
-- Ограничения внешнего ключа таблицы `Incident`
--
ALTER TABLE `Incident`
  ADD CONSTRAINT `Incident_ibfk_1` FOREIGN KEY (`Id_officer`) REFERENCES `Officer` (`Id_officer`),
  ADD CONSTRAINT `Incident_ibfk_2` FOREIGN KEY (`Id_location`) REFERENCES `Location` (`Id_location`);

--
-- Ограничения внешнего ключа таблицы `Involved`
--
ALTER TABLE `Involved`
  ADD CONSTRAINT `Involved_ibfk_1` FOREIGN KEY (`Id_status`) REFERENCES `Status_of_the_involved` (`Id_status`),
  ADD CONSTRAINT `Involved_ibfk_2` FOREIGN KEY (`Id_incident`) REFERENCES `Incident` (`Id_incident`),
  ADD CONSTRAINT `Involved_ibfk_3` FOREIGN KEY (`Id_a_criminal_record`) REFERENCES `A_criminal_record` (`Id_a_criminal_record`);

--
-- Ограничения внешнего ключа таблицы `Officer`
--
ALTER TABLE `Officer`
  ADD CONSTRAINT `Officer_ibfk_1` FOREIGN KEY (`Id_department`) REFERENCES `Department` (`Id_department`);

--
-- Ограничения внешнего ключа таблицы `Resolution`
--
ALTER TABLE `Resolution`
  ADD CONSTRAINT `Resolution_ibfk_1` FOREIGN KEY (`Id_officer`) REFERENCES `Officer` (`Id_officer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
