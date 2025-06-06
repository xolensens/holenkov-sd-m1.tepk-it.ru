-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 06 2025 г., 10:11
-- Версия сервера: 8.0.42-0ubuntu0.24.04.1
-- Версия PHP: 8.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `holenkov-sd_m1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `material_type`
--

CREATE TABLE `material_type` (
  `id_material_type` int NOT NULL,
  `name_material` varchar(255) NOT NULL,
  `float_loss` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `material_type`
--

INSERT INTO `material_type` (`id_material_type`, `name_material`, `float_loss`) VALUES
(1, 'Мебельный щит из массива дерева', 0.008),
(2, 'Ламинированное ДСП', 0.007),
(3, 'Фанера', 0.0055),
(4, 'МДФ', 0.003);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id_product` int NOT NULL,
  `product_type_id` int NOT NULL,
  `material_type_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `article` varchar(7) NOT NULL,
  `min_partner_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id_product`, `product_type_id`, `material_type_id`, `name`, `article`, `min_partner_price`) VALUES
(1, 1, 1, 'Комплект мебели для гостиной Ольха горная', '1549922', 160507),
(2, 1, 1, 'Стенка для гостиной Вишня темная', '1018556', 216907),
(3, 2, 2, 'Прихожая Венге Винтаж', '3028272', 24970),
(4, 2, 2, 'Тумба с вешалкой Дуб натуральный', '3029272', 18206),
(5, 2, 1, 'Прихожая-комплект Дуб темный', '3028248', 177509),
(6, 3, 1, 'Диван-кровать угловой Книжка', '7118827', 85900),
(7, 3, 1, 'Диван модульный Телескоп', '7137981', 75900),
(8, 3, 1, 'Диван-кровать Соло', '7029787', 120345),
(9, 3, 3, 'Детский диван Выкатной', '7758953', 25990),
(10, 4, 1, 'Кровать с подъемным механизмом с матрасом 1600х2000 Венге', '6026662', 69500),
(11, 4, 2, 'Кровать с матрасом 90х2000 Венге', '6159043', 55600),
(12, 4, 2, 'Кровать универсальная Дуб натуральный', '6588376', 37900),
(13, 4, 3, 'Кровать с ящиками Ясень белый', '6758375', 46750),
(14, 5, 2, 'Шкаф-купе 3-х дверный Сосна белая', '2759324', 131560),
(15, 5, 1, 'Стеллаж Бук натуральный', '2118827', 38700),
(16, 5, 3, 'Шкаф 4 дверный с ящиками Ясень серый', '2559898', 160151),
(17, 5, 3, 'Шкаф-пенал Береза белый', '2259474', 40500),
(18, 6, 1, 'Комод 6 ящиков Вишня светлая', '4115947', 61235),
(19, 6, 1, 'Комод 4 ящика Вишня светлая', '4033136', 41200),
(20, 6, 4, 'Тумба под ТВ ', '4028048', 12350);

-- --------------------------------------------------------

--
-- Структура таблицы `product_type`
--

CREATE TABLE `product_type` (
  `id_product_type` int NOT NULL,
  `name_type` varchar(255) NOT NULL,
  `coefficient` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `product_type`
--

INSERT INTO `product_type` (`id_product_type`, `name_type`, `coefficient`) VALUES
(1, 'Гостиные', 3.5000),
(2, 'Прихожие', 5.6000),
(3, 'Мягкая мебель', 3.0000),
(4, 'Кровати', 4.7000),
(5, 'Шкафы', 1.5000),
(6, 'Комоды', 2.3000);

-- --------------------------------------------------------

--
-- Структура таблицы `product_workshop`
--

CREATE TABLE `product_workshop` (
  `id_product_workshop` int NOT NULL,
  `product_id` int NOT NULL,
  `workshop_id` int NOT NULL,
  `hours` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `product_workshop`
--

INSERT INTO `product_workshop` (`id_product_workshop`, `product_id`, `workshop_id`, `hours`) VALUES
(1, 10, 8, 2),
(2, 20, 8, 2.7),
(3, 6, 9, 4.2),
(4, 7, 9, 4.5),
(5, 8, 9, 4.7),
(6, 9, 9, 4),
(7, 11, 9, 5.5),
(8, 2, 10, 0.3),
(9, 3, 10, 0.5),
(10, 5, 10, 0.3),
(11, 10, 10, 0.5),
(12, 14, 10, 0.5),
(13, 20, 10, 1),
(14, 1, 4, 0.5),
(15, 2, 4, 0.3),
(16, 3, 4, 0.5),
(17, 4, 4, 0.5),
(18, 5, 4, 0.5),
(19, 6, 4, 0.5),
(20, 7, 4, 0.5),
(21, 8, 4, 0.5),
(22, 9, 4, 0.3),
(23, 10, 4, 0.6),
(24, 11, 4, 1),
(25, 12, 4, 0.8),
(26, 13, 4, 2),
(27, 14, 4, 0.5),
(28, 15, 4, 0.3),
(29, 16, 4, 1.5),
(30, 17, 4, 1),
(31, 18, 4, 0.5),
(32, 19, 4, 0.4),
(33, 20, 4, 0.5),
(34, 1, 6, 0.3),
(35, 2, 6, 0.4),
(36, 5, 6, 0.5),
(37, 6, 6, 0.5),
(38, 7, 6, 1),
(39, 8, 6, 0.5),
(40, 9, 6, 0.5),
(41, 10, 6, 0.4),
(42, 13, 6, 1.5),
(43, 15, 6, 1),
(44, 17, 6, 2.5),
(45, 18, 6, 1),
(46, 19, 6, 0.4),
(47, 20, 6, 0.5),
(48, 1, 1, 1),
(49, 2, 1, 1),
(50, 5, 1, 1.5),
(51, 8, 1, 0.5),
(52, 14, 1, 2),
(53, 15, 1, 1),
(54, 20, 1, 1),
(55, 1, 3, 1),
(56, 2, 3, 1),
(57, 3, 3, 1),
(58, 4, 3, 1),
(59, 5, 3, 1),
(60, 6, 3, 1),
(61, 7, 3, 1),
(62, 8, 3, 0.5),
(63, 9, 3, 0.7),
(64, 10, 3, 1),
(65, 11, 3, 1),
(66, 12, 3, 1.1),
(67, 13, 3, 2),
(68, 14, 3, 1),
(69, 15, 3, 1),
(70, 16, 3, 1),
(71, 17, 3, 1),
(72, 18, 3, 1),
(73, 19, 3, 1),
(74, 20, 3, 0.6),
(75, 1, 2, 0.4),
(76, 2, 2, 1),
(77, 5, 2, 0.5),
(78, 8, 2, 0.5),
(79, 14, 2, 1),
(80, 15, 2, 0.7),
(81, 20, 2, 0.4),
(82, 2, 11, 1),
(83, 3, 11, 1),
(84, 5, 11, 0.5),
(85, 6, 11, 0.5),
(86, 7, 11, 0.3),
(87, 12, 11, 0.8),
(88, 13, 11, 0.3),
(89, 14, 11, 1.5),
(90, 15, 11, 0.3),
(91, 16, 11, 2),
(92, 18, 11, 0.3),
(93, 20, 11, 1),
(94, 1, 7, 1.5),
(95, 2, 7, 1),
(96, 5, 7, 1),
(97, 7, 7, 0.5),
(98, 8, 7, 0.5),
(99, 9, 7, 1),
(100, 15, 7, 0.5),
(101, 16, 7, 1),
(102, 17, 7, 3),
(103, 18, 7, 2),
(104, 19, 7, 2),
(105, 1, 5, 2),
(106, 2, 5, 2),
(107, 5, 5, 2),
(108, 6, 5, 2),
(109, 7, 5, 2),
(110, 15, 5, 2),
(111, 18, 5, 2),
(112, 19, 5, 2),
(113, 1, 12, 0.3),
(114, 4, 12, 0.5),
(115, 5, 12, 0.2),
(116, 6, 12, 0.3),
(117, 7, 12, 0.2),
(118, 8, 12, 0.3),
(119, 9, 12, 0.5),
(120, 10, 12, 0.5),
(121, 11, 12, 0.5),
(122, 12, 12, 0.3),
(123, 13, 12, 0.2),
(124, 14, 12, 0.5),
(125, 15, 12, 0.2),
(126, 16, 12, 0.5),
(127, 17, 12, 0.5),
(128, 18, 12, 0.2),
(129, 19, 12, 0.2),
(130, 20, 12, 0.3);

-- --------------------------------------------------------

--
-- Структура таблицы `workshop`
--

CREATE TABLE `workshop` (
  `id_workshop` int NOT NULL,
  `workshop_type_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `count_of_workers` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `workshop`
--

INSERT INTO `workshop` (`id_workshop`, `workshop_type_id`, `name`, `count_of_workers`) VALUES
(1, 1, 'Проектный', 4),
(2, 1, 'Расчетный', 5),
(3, 2, 'Раскроя', 5),
(4, 2, 'Обработки', 6),
(5, 3, 'Сушильный', 3),
(6, 2, 'Покраски', 5),
(7, 2, 'Столярный', 7),
(8, 2, 'Изготовления изделий из искусственного камня и композитных материалов', 3),
(9, 2, 'Изготовления мягкой мебели', 5),
(10, 4, 'Монтажа стеклянных, зеркальных вставок и других изделий', 2),
(11, 4, 'Сборки', 6),
(12, 4, 'Упаковки', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `workshop_type`
--

CREATE TABLE `workshop_type` (
  `id_workshop_type` int NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `workshop_type`
--

INSERT INTO `workshop_type` (`id_workshop_type`, `category`) VALUES
(1, 'Проектирование'),
(2, 'Обработка'),
(3, 'Сушка'),
(4, 'Сборка');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `material_type`
--
ALTER TABLE `material_type`
  ADD PRIMARY KEY (`id_material_type`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_product_type` (`product_type_id`),
  ADD KEY `id_material_type` (`material_type_id`);

--
-- Индексы таблицы `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id_product_type`);

--
-- Индексы таблицы `product_workshop`
--
ALTER TABLE `product_workshop`
  ADD PRIMARY KEY (`id_product_workshop`),
  ADD KEY `id_product` (`product_id`),
  ADD KEY `id_workshop` (`workshop_id`);

--
-- Индексы таблицы `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id_workshop`),
  ADD KEY `id_workshop_type` (`workshop_type_id`);

--
-- Индексы таблицы `workshop_type`
--
ALTER TABLE `workshop_type`
  ADD PRIMARY KEY (`id_workshop_type`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `material_type`
--
ALTER TABLE `material_type`
  MODIFY `id_material_type` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id_product_type` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `product_workshop`
--
ALTER TABLE `product_workshop`
  MODIFY `id_product_workshop` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT для таблицы `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id_workshop` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `workshop_type`
--
ALTER TABLE `workshop_type`
  MODIFY `id_workshop_type` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `material_type`
--
ALTER TABLE `material_type`
  ADD CONSTRAINT `material_type_ibfk_1` FOREIGN KEY (`id_material_type`) REFERENCES `product` (`material_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product_type`
--
ALTER TABLE `product_type`
  ADD CONSTRAINT `product_type_ibfk_1` FOREIGN KEY (`id_product_type`) REFERENCES `product` (`product_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product_workshop`
--
ALTER TABLE `product_workshop`
  ADD CONSTRAINT `product_workshop_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_workshop_ibfk_2` FOREIGN KEY (`workshop_id`) REFERENCES `workshop` (`id_workshop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `workshop`
--
ALTER TABLE `workshop`
  ADD CONSTRAINT `workshop_ibfk_1` FOREIGN KEY (`workshop_type_id`) REFERENCES `workshop_type` (`id_workshop_type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `workshop_type`
--
ALTER TABLE `workshop_type`
  ADD CONSTRAINT `workshop_type_ibfk_1` FOREIGN KEY (`id_workshop_type`) REFERENCES `workshop` (`workshop_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
