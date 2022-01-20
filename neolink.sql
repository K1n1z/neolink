-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 19 2022 г., 14:24
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `neolink`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `email` varchar(55) NOT NULL,
  `prods` varchar(5555) NOT NULL,
  `prods_amount` varchar(5555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `email`, `prods`, `prods_amount`) VALUES
(1, '', '1,2', '1,1'),
(2, '', '1,3', '1,1'),
(3, '', '1,3', '1,1');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL,
  `zena` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `title`, `description`, `img`, `zena`) VALUES
(1, 'Iphone 12 Pro Max Тихоокеанский синий', 'Телефон Apple', '1.webp', 110000),
(2, 'Iphone 13 Pro Max Золотой', 'Телефон Apple', '2.webp', 120000),
(3, 'Iphone 13 Синий', 'Телефон Apple', '3.webp', 80000),
(4, 'Iphone 13 mini Розовый', 'Телефон Apple', '4.webp', 70000),
(5, 'MacBook Air 13 M1 Серый космос', 'Ноутбук Apple', '5.webp', 103000),
(6, 'MacBook Pro 16 M1 Серый космос', 'Ноутбук Apple', '6.webp', 335000),
(7, 'MacBook Pro 13 M1 Серый космос', 'Ноутбук Apple', '7.webp', 120000),
(8, 'MacBook Air 13 M1 Золотой', 'Ноутбук Apple', '8.webp', 103000),
(9, 'Ipad 10.2 Wi-Fi+Cellular Золотой', 'Планшет Apple', '9.webp', 42000),
(10, 'Ipad Air 10.9 Wi-Fi Розовое золото', 'Планшет Apple', '10.webp', 55000),
(11, 'Ipad Pro 11 Wi-Fi+Cellular Серый космос', 'Планшет Apple', '11.webp', 88000),
(12, 'Ipad Pro 12.9 Wi-Fi Серый космос', 'Планшет Apple', '12.webp', 100000),
(13, 'AirPods One', 'Наушники Apple', '13.webp', 12300),
(14, 'AirPods Three', 'Наушники Apple', '14.webp', 16500),
(15, 'AirPods Max', 'Наушники Apple', '15.webp', 48800),
(16, 'AirPods Pro', 'Наушники Apple', '16.webp', 23000);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'albert', '228');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
