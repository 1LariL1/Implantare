-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 09 2024 г., 21:49
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `implantare`
--

-- --------------------------------------------------------

--
-- Структура таблицы `appointment`
--

CREATE TABLE `appointment` (
  `id_appointment` int NOT NULL,
  `id_user` int NOT NULL,
  `id_service` int NOT NULL,
  `id_doctor` int NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `appointment`
--

INSERT INTO `appointment` (`id_appointment`, `id_user`, `id_service`, `id_doctor`, `date`, `time`) VALUES
(11, 19, 1, 1, '2024-05-10', '18:57:00'),
(13, 20, 11, 5, '2024-05-17', '18:30:00'),
(14, 17, 1, 1, '2024-09-12', '21:48:00');

-- --------------------------------------------------------

--
-- Структура таблицы `doctor`
--

CREATE TABLE `doctor` (
  `id_doctor` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `patronymic` varchar(100) NOT NULL,
  `work_experience` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `doctor`
--

INSERT INTO `doctor` (`id_doctor`, `name`, `surname`, `patronymic`, `work_experience`, `specialization`, `telephone`, `image`) VALUES
(1, 'Иван', 'Петров', 'Иванович', '10 ЛЕТ', 'Стоматолог-терапевт', '84951234567', 'image/doctors/1.png'),
(2, 'Елена', 'Сидорова', 'Павловна', '5 ЛЕТ', 'Стоматолог-ортодонт', '84951234568', 'image/doctors/2.png'),
(3, 'Александр', 'Козлов', 'Николаевич', '15 ЛЕТ', 'Детский стоматолог', '84951234569', 'image/doctors/3.png'),
(4, 'Ольга', 'Мартынова', 'Дмитриевна', '8 ЛЕТ', 'Гнатолог', '84951234570', 'image/doctors/4.png'),
(5, 'Дмитрий', 'Смирнов', 'Александрович', '12 ЛЕТ', 'Стоматолог-ортопед', '84951234571', 'image/doctors/дима.png'),
(6, 'Светлана', 'Иванова', 'Сергеевна', '6 ЛЕТ', 'Хирург', '84951234572', 'image/doctors/светлана.png'),
(7, 'Павел', 'Краснов', 'Егорович', '9 ЛЕТ', 'Имплантолог', '84951234573', 'image/doctors/павел.png'),
(8, 'Мария', 'Антонова', 'Игоревна', '7 ЛЕТ', 'Пародонтолог', '84951234574', 'image/doctors/мария.png'),
(9, 'Андрей', 'Белов', 'Олегович', '11 ЛЕТ', 'Гигиенист', '84951234575', 'image/doctors/андрерй.png'),
(10, 'Виктория', 'Григорьева', 'Алексеевна', '13 ЛЕТ', 'Онкостоматолог', '84951234576', 'image/doctors/вик.png'),
(11, 'Роман', 'Соколов', 'Петрович', '4 ГОДА', 'Челюстно-лицевой стоматолог-хирург', '84951234577', 'image/doctors/роман.png'),
(12, 'Екатерина', 'Орлова', 'Владимировна', '14 ЛЕТ', 'Стоматолог-терапевт', '84951234578', 'image/doctors/катя.png'),
(13, 'Игорь', 'Кузнецов', 'Федорович', '3 ГОДА', 'Стоматолог-ортодонт', '84951234579', 'image/doctors/игорь.png'),
(14, 'Анастасия', 'Трофимова', 'Михайловна', '8 ЛЕТ', 'Детский стоматолог', '84951234580', 'image/doctors/настч.png'),
(15, 'Владимир', 'Павлов', 'Геннадьевич', '5 ЛЕТ', 'Гнатолог', '84951234581', 'image/doctors/владимир.png'),
(26, 'Валерия', 'Иванова', 'Максимовна', '3 ГОДА', 'Детский стоматолог', '89785678789', 'image/doctors/валерия.png');

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `id_message` int NOT NULL,
  `id_user` int NOT NULL,
  `id_service` int NOT NULL,
  `date` date NOT NULL,
  `comment` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`id_message`, `id_user`, `id_service`, `date`, `comment`) VALUES
(9, 17, 10, '2024-09-07', 'Нужно сделать ламинаты');

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

CREATE TABLE `service` (
  `id_service` int NOT NULL,
  `id_type_service` int NOT NULL,
  `service` varchar(100) NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `service`
--

INSERT INTO `service` (`id_service`, `id_type_service`, `service`, `price`) VALUES
(1, 1, 'Пломба под ключ', 7000),
(2, 1, 'Наложение временной пломбы', 500),
(3, 1, 'Лечение пульпита, 1 канал', 3700),
(4, 1, 'Лечение периодонтита, 1 канал', 3100),
(5, 1, 'Ультразвуковое лечение отложений в области зуба', 5000),
(6, 2, 'Металлокерамические коронки', 7000),
(7, 2, 'Циркониевые коронки', 10000),
(8, 2, 'Виниры', 10000),
(10, 2, 'Ламинаты', 10000),
(11, 3, 'Одномоментная имплантация', 30000),
(12, 3, 'Двухэтапная имплантация', 50000),
(13, 3, 'All-on-6', 200000),
(14, 3, 'Керамические импланты', 50000),
(15, 3, 'Имплантация с использованием 3D-технологий', 40000),
(16, 4, 'Обычное удаление зуба', 3000),
(17, 4, 'Сложное удаление зуба', 7000),
(18, 4, 'Удаление зуба мудрости', 7000),
(20, 4, 'Удаление зуба при наличии кисты или опухоли', 10000),
(21, 5, 'Брекет-система', 50000),
(22, 5, 'Съемные элайнеры', 100000),
(23, 5, 'Система дистализации зубов', 70000),
(25, 5, 'Лечение перекрестного прикуса', 50000),
(26, 6, 'Отбеливание зубов', 7000),
(27, 6, 'Ламинирование зубов', 10000),
(28, 7, 'Гигиеническая чистка зубов', 3000),
(29, 7, 'Лечение кариеса у детей', 4000),
(30, 7, 'Установка фторлакировки на молочные зубы', 3000),
(31, 7, 'Фторирование и реминерализация зубов', 2000),
(32, 8, 'Профилактическая чистка зубов ', 3000),
(33, 8, 'Удаление зубного налета', 2000),
(34, 8, 'AirFlow', 4000),
(35, 8, 'Лазерная чистка зубов и десен', 5000),
(36, 8, 'Электрошоковая чистка зубов', 5000),
(37, 9, 'Рентгенография зубов и челюсти', 2000),
(38, 9, 'Компьютерная томография', 7000);

-- --------------------------------------------------------

--
-- Структура таблицы `type_service`
--

CREATE TABLE `type_service` (
  `id_type_service` int NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `type_service`
--

INSERT INTO `type_service` (`id_type_service`, `type`) VALUES
(1, 'Лечение зубов'),
(2, 'Протезирование'),
(3, 'Имплантация зубов'),
(4, 'Удаление зубов'),
(5, 'Исправление прикуса'),
(6, 'Эстетика'),
(7, 'Детская стоматология'),
(8, 'Чистка зубов'),
(9, 'Диагностика');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `fio` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `access` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `fio`, `email`, `telephone`, `password`, `access`) VALUES
(14, 'Imlantare', 'admin@mail.ru', '0', '$2y$10$D/mKYmQEZiwsdyzylvsH.uL9oFGqRzejPJgu9Gb76G.YxEc/0DmF6', 1),
(17, 'Лопухова Арина Олеговна', 'arburdock@gmail.com', '89085678986', '$2y$10$AcjjB4INA4luVOxmDhiYdurpfSkkoxPvLkGdXf3uJwJPa5wCQX.CK', 0),
(19, 'Лепин Алексей Александрович', 'lepin@mail.ru', '89003457687', '$2y$10$tvZMJl15BbdNooX7j8W1jugSTKVm5RSNRfAOOOxqk5O2eHN.QLHAW', 0),
(20, 'Петров Петр Петрович', 'petrov@mail.ru', '87683672376', '$2y$10$GCJr2zfEc7jsDtdX3cTmg.XJdiG3poTvjNkaQa/5PTfVdsIIMCTX6', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id_appointment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_service` (`id_service`),
  ADD KEY `id_doctor` (`id_doctor`);

--
-- Индексы таблицы `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id_doctor`);

--
-- Индексы таблицы `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_service` (`id_service`);

--
-- Индексы таблицы `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`),
  ADD KEY `id_type_service` (`id_type_service`);

--
-- Индексы таблицы `type_service`
--
ALTER TABLE `type_service`
  ADD PRIMARY KEY (`id_type_service`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id_appointment` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id_doctor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT для таблицы `type_service`
--
ALTER TABLE `type_service`
  MODIFY `id_type_service` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`id_doctor`) REFERENCES `doctor` (`id_doctor`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`id_type_service`) REFERENCES `type_service` (`id_type_service`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
