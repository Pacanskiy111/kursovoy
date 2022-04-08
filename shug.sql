-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 07 2022 г., 21:22
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shug`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `img` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `img`, `category`, `sub_category`) VALUES
(15, 'Диван', 20000, '1.jpg', 'divan', 'divan-krovat'),
(16, 'Диван', 15000, '2.jpg', 'divan', 'divan-uglovoy'),
(17, 'Диван', 10000, '3.jpg', 'divan', 'divan-krovat'),
(25, 'Диван', 11000, '4.jpg', 'divan', 'divan-pryamoy'),
(28, 'Диван', 20000, '5.jpg', 'divan', 'divan-krovat'),
(29, 'Диван', 30000, '6.jpg', 'divan', 'divan-pryamoy'),
(30, 'Диван', 12355, '7.jpg', 'divan', 'divan-krovat'),
(31, 'Диван', 32211, '8.jpg', 'divan', 'divan-krovat'),
(32, 'Диван', 45311, '9.jpg', 'divan', 'divan-uglovoy'),
(33, 'Диван', 64334, '10.jpg', 'divan', 'divan-pryamoy'),
(34, 'Диван', 24444, '11.jpg', 'divan', 'divan-uglovoy'),
(35, 'Диван', 32333, '12.jpg', 'divan', 'divan-krovat'),
(36, 'Диван', 14444, '13.jpg', 'divan', 'divan-uglovoy'),
(37, 'Диван', 33333, '14.jpg', 'divan', 'divan-pryamoy'),
(38, 'Диван', 22222, '15.jpg', 'divan', 'divan-pryamoy'),
(39, 'Диван', 11111, '16.jpg', 'divan', 'divan-pryamoy'),
(40, 'Диван', 12333, '17.jpg', 'divan', 'divan-pryamoy'),
(41, 'Диван', 23333, '18.jpg', 'divan', 'divan-pryamoy'),
(42, 'Диван', 15222, '19.jpg', 'divan', 'divan-pryamoy'),
(43, 'Диван', 13422, '20.jpg', 'divan', 'divan-pryamoy'),
(44, 'Диван', 31233, '21.jpg', 'divan', 'divan-pryamoy'),
(45, 'Диван', 11444, '22.jpg', 'divan', 'divan-pryamoy'),
(46, 'Диван', 14221, '23.jpg', 'divan', 'divan-uglovoy'),
(47, 'Диван', 15333, '24.jpg', 'divan', 'divan-uglovoy'),
(48, 'Диван', 26343, '25.jpg', 'divan', 'divan-uglovoy'),
(49, 'Диван', 16662, '26.jpg', 'divan', 'divan-uglovoy'),
(50, 'Диван', 15622, '27.jpg', 'divan', 'divan-uglovoy'),
(51, 'Диван', 62233, '28.jpg', 'divan', 'divan-uglovoy'),
(52, 'Диван', 54444, '29.jpg', 'divan', 'divan-uglovoy'),
(53, 'Диван', 11444, '30.jpg', 'divan', 'divan-uglovoy'),
(54, 'Диван', 25444, '31.jpg', 'divan', 'divan-uglovoy'),
(55, 'Кровать', 45999, '1.jpg', 'krovat', 'krovat-dvuspalniy'),
(56, 'Кровать', 31111, '2.jpg', 'krovat', 'krovat-dvuspalniy'),
(57, 'Кровать', 36661, '3.jpg', 'krovat', 'krovat-dvuspalniy'),
(58, 'Кровать', 31622, '4.jpg', 'krovat', 'krovat-dvuspalniy'),
(59, 'Кровать', 37777, '5.jpg', 'krovat', 'krovat-dvuspalniy'),
(60, 'Кровать', 24444, '6.jpg', 'krovat', 'krovat-dvuspalniy'),
(61, 'Кровать', 28888, '7.jpg', 'krovat', 'krovat-dvuspalniy'),
(62, 'Кровать', 19999, '8.jpg', 'krovat', 'krovat-dvuspalniy'),
(63, 'Кровать', 25555, '9.jpg', 'krovat', 'krovat-dvuspalniy'),
(64, 'Кровать', 12222, '10.jpg', 'krovat', 'krovat-odnospalniy'),
(65, 'Кровать', 21111, '11.jpg', 'krovat', 'krovat-odnospalniy'),
(66, 'Кровать', 15666, '12.jpg', 'krovat', 'krovat-odnospalniy'),
(67, 'Кровать', 11111, '13.jpg', 'krovat', 'krovat-odnospalniy'),
(68, 'Кровать', 18666, '14.jpg', 'krovat', 'krovat-odnospalniy'),
(69, 'Кровать', 20000, '15.jpg', 'krovat', 'krovat-odnospalniy'),
(70, 'Кровать', 10000, '16.jpg', 'krovat', 'krovat-odnospalniy'),
(71, 'Кровать', 16667, '17.jpg', 'krovat', 'krovat-odnospalniy'),
(72, 'Кровать', 12000, '18.jpg', 'krovat', 'krovat-odnospalniy'),
(73, 'Шкаф', 36255, '1.jpg', 'shkaf', 'shkaf-kupe'),
(74, 'Шкаф', 25555, '2.jpg', 'shkaf', 'shkaf-kupe'),
(75, 'Шкаф', 71111, '3.jpg', 'shkaf', 'shkaf-kupe'),
(76, 'Шкаф', 34222, '4.jpg', 'shkaf', 'shkaf-kupe'),
(77, 'Шкаф', 52344, '5.jpg', 'shkaf', 'shkaf-kupe'),
(78, 'Шкаф', 34523, '6.jpg', 'shkaf', 'shkaf-kupe'),
(79, 'Шкаф', 23465, '7.jpg', 'shkaf', 'shkaf-kupe'),
(80, 'Шкаф', 43526, '8.jpg', 'shkaf', 'shkaf-kupe'),
(81, 'Шкаф', 25634, '9.jpg', 'shkaf', 'shkaf-kupe'),
(82, 'Шкаф', 48365, '10.jpg', 'shkaf', 'shkaf-raspashnoy'),
(83, 'Шкаф', 48365, '11.jpg', 'shkaf', 'shkaf-raspashnoy'),
(84, 'Шкаф', 23456, '12.jpg', 'shkaf', 'shkaf-raspashnoy'),
(85, 'Шкаф', 44523, '13.jpg', 'shkaf', 'shkaf-raspashnoy'),
(86, 'Шкаф', 23456, '14.jpg', 'shkaf', 'shkaf-raspashnoy'),
(87, 'Шкаф', 48365, '15.jpg', 'shkaf', 'shkaf-raspashnoy'),
(88, 'Шкаф', 48365, '16.jpg', 'shkaf', 'shkaf-raspashnoy'),
(89, 'Шкаф', 52341, '17.jpg', 'shkaf', 'shkaf-raspashnoy'),
(90, 'Шкаф', 48365, '18.jpg', 'shkaf', 'shkaf-uglovoy'),
(91, 'Шкаф', 23123, '19.jpg', 'shkaf', 'shkaf-uglovoy'),
(92, 'Шкаф', 43221, '20.jpg', 'shkaf', 'shkaf-uglovoy'),
(93, 'Шкаф', 26561, '21.jpg', 'shkaf', 'shkaf-uglovoy'),
(94, 'Шкаф', 43522, '22.jpg', 'shkaf', 'shkaf-uglovoy'),
(95, 'Стенка', 24444, '1.jpg', 'stenk', 'stenk'),
(96, 'Стенка', 32222, '2.jpg', 'stenk', 'stenk'),
(97, 'Стенка', 42111, '3.jpg', 'stenk', 'stenk'),
(98, 'Стенка', 23514, '4.jpg', 'stenk', 'stenk'),
(99, 'Стенка', 35421, '5.jpg', 'stenk', 'stenk'),
(100, 'Стенка', 12345, '6.jpg', 'stenk', 'stenk'),
(101, 'Стенка', 54123, '7.jpg', 'stenk', 'stenk'),
(102, 'Стенка', 34512, '8.jpg', 'stenk', 'stenk'),
(103, 'Стенка', 45231, '9.jpg', 'stenk', 'stenk');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(2, 'admin', 123),
(3, 'vasya', 1234);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
