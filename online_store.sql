-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2023 at 03:27 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_category`
--

CREATE TABLE `table_category` (
  `category_id` int NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_category`
--

INSERT INTO `table_category` (`category_id`, `category`) VALUES
(1, 'Laptops'),
(3, 'Smartwatches'),
(7, 'Smartphones');

-- --------------------------------------------------------

--
-- Table structure for table `table_products`
--

CREATE TABLE `table_products` (
  `product_id` int NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `category_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_products`
--

INSERT INTO `table_products` (`product_id`, `name`, `description`, `category_id`, `quantity`, `price`) VALUES
(1, 'Lenovo ThinkPad X270', 'Power, performance, and portability\r\nUltralight 12.5\" FHD display\r\nJust under 3 pounds\r\nFast Processing, plenty of storage and memory\r\nAll day battery life\r\nPlus with our legendary ThinkPad support  ', 1, 30, 22500),
(3, 'Apple Watch SE (2nd Gen)', 'A stylish and affordable smartwatch that offers essential features like fitness tracking, notifications, and customizable watch faces, making it the perfect companion for active lifestyles.', 3, 20, 22000),
(4, 'Garmin Venu Sq 2', 'sleek and feature-packed smartwatch designed to keep you active and connected. With fitness tracking, health monitoring, and a vibrant display, it\'s your stylish companion for an active lifestyle.', 3, 40, 13000),
(5, 'Poco X3 NFC', 'The POCO X3, POCO X3 NFC and POCO X3 Pro are Android-based smartphones developed by Xiaomi, announced on 7 and 22 September 2020. The phone has a FHD+ IPS LCD 120Hz 6.67\" display, a 48 MP wide, 8 MP ultra-wide, 2 MP macro, and 2 MP depth camera, a 5160 mAh battery, up to 8GB RAM    ', 7, 20, 6000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_category`
--
ALTER TABLE `table_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `table_products`
--
ALTER TABLE `table_products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_category`
--
ALTER TABLE `table_category`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `table_products`
--
ALTER TABLE `table_products`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
