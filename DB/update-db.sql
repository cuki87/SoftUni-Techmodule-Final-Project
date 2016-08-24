-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 авг 2016 в 12:35
-- Версия на сървъра: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monys_kitchen`
--

-- --------------------------------------------------------

--
-- Структура на таблица `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(100) DEFAULT NULL,
  `cat_description` varchar(500) DEFAULT NULL,
  `cat_picture` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_description`, `cat_picture`) VALUES
(1, 'Кексове', 'Вкусни домашни кексове по стари и авторски рецепти', '/content/images/categories/Cakes.jpg'),
(2, 'Торти', 'Красиви ръчно изработени торти за всеки повод', '/content/images/categories/BirthdayCakes.jpg'),
(3, 'Сладки', 'Прясно изпечени вкусни сладки', '/content/images/categories/Cookies.jpg'),
(4, 'Мъфини', 'Едни от най-вкусните сладкиши', '/content/images/categories/Muffins.jpg'),
(5, 'Други', 'Питки, пици и всякакви други сладки вкусотийки', '/content/images/categories/Other.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `forme`
--

CREATE TABLE `forme` (
  `text` varchar(1000) DEFAULT NULL,
  `forme_photo` varchar(300) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `forme`
--

INSERT INTO `forme` (`text`, `forme_photo`, `name`) VALUES
(' <h1>Симона Веселинска, на 20 години от София</h1>\n            <ul>\n                <li><strong>СПГТ, специалност „Хотелиерство“</strong></li>\n                <li><strong>УниБИТ, Информационни ресурси на туризма</strong></li>\n                <li><strong>По душа, специалност Сладкар</strong></li>\n                <li><strong>Щастливо омъжена</strong></li>\n            </ul>', '/content/images/Mony.jpg', 'Симона Веселинска');

-- --------------------------------------------------------

--
-- Структура на таблица `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_description` varchar(300) DEFAULT NULL,
  `product_picture` varchar(200) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `slide` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `slides`
--

INSERT INTO `slides` (`id`, `slide`) VALUES
(1, '/content/images/Slider/Slide1.jpg'),
(2, '/content/images/Slider/Slide2.jpg'),
(3, '/content/images/Slider/Slide3.jpg'),
(4, '/content/images/Slider/Slide4.jpg'),
(5, '/content/images/Slider/Slide5.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(100) DEFAULT NULL,
  `full_name` varchar(200) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `profile_picture` varchar(200) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `username`, `password_hash`, `full_name`, `address`, `email`, `phone`, `profile_picture`, `admin`) VALUES
(1, 'admin', 'bb28757944ed844a0899e97d8baac5d3d59e9b26', 'Peter Vasilev', NULL, 'pepi.vasilev@gmail.com', NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orders_products` (`product_id`),
  ADD KEY `fk_orders_users` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categories_products` (`cat_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fk_orders_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения за таблица `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_categories_products` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
