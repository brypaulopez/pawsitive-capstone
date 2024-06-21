-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2024 at 03:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pawsitive`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_tables`
--

CREATE TABLE `cart_tables` (
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `product_user_id` int(11) NOT NULL,
  `cart_name` varchar(255) NOT NULL,
  `cart_price` varchar(255) NOT NULL,
  `cart_qty` int(11) NOT NULL,
  `cart_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_tables`
--

INSERT INTO `cart_tables` (`cart_id`, `product_user_id`, `cart_name`, `cart_price`, `cart_qty`, `cart_image`, `created_at`, `updated_at`) VALUES
(1, 2, 'Leash', '1', 1, '1718698232.webp', '2024-06-18 23:43:46', '2024-06-18 23:43:46'),
(14, 2, 'Kibbles', '400', 1, '1718702731.webp', '2024-06-19 04:05:56', '2024-06-19 04:05:56'),
(15, 2, 'Kibbles', '400', 1, '1718702731.webp', '2024-06-19 04:06:03', '2024-06-19 04:06:03'),
(16, 3, 'Dog hair clipper', '1500', 1, '1718720824.jpg', '2024-06-19 17:34:49', '2024-06-19 17:34:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_tables`
--
ALTER TABLE `cart_tables`
  ADD PRIMARY KEY (`cart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_tables`
--
ALTER TABLE `cart_tables`
  MODIFY `cart_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
