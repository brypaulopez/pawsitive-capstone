-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 12:02 PM
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
-- Table structure for table `boarding_tables`
--

CREATE TABLE `boarding_tables` (
  `board_id` bigint(20) UNSIGNED NOT NULL,
  `board_vet_id` int(11) NOT NULL,
  `vet_name` varchar(255) NOT NULL,
  `board_inclusions` varchar(255) NOT NULL,
  `board_price` int(11) NOT NULL,
  `board_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boarding_tables`
--

INSERT INTO `boarding_tables` (`board_id`, `board_vet_id`, `vet_name`, `board_inclusions`, `board_price`, `board_image`, `created_at`, `updated_at`) VALUES
(1, 4, 'pawpatrol', 'WALANG FOOD', 50, '1718704076.webp', '2024-06-18 01:47:56', '2024-06-18 01:59:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boarding_tables`
--
ALTER TABLE `boarding_tables`
  ADD PRIMARY KEY (`board_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boarding_tables`
--
ALTER TABLE `boarding_tables`
  MODIFY `board_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
