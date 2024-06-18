-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 12:01 PM
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
-- Table structure for table `groom_tables`
--

CREATE TABLE `groom_tables` (
  `groom_id` bigint(20) UNSIGNED NOT NULL,
  `groom_vet_id` int(11) NOT NULL,
  `vet_name` varchar(255) NOT NULL,
  `groom_details` varchar(255) NOT NULL,
  `groom_price` int(11) NOT NULL,
  `groom_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groom_tables`
--

INSERT INTO `groom_tables` (`groom_id`, `groom_vet_id`, `vet_name`, `groom_details`, `groom_price`, `groom_image`, `created_at`, `updated_at`) VALUES
(2, 4, 'pawpatrol', 'Full Groom', 400, '1718702710.webp', '2024-06-18 01:25:10', '2024-06-18 01:25:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groom_tables`
--
ALTER TABLE `groom_tables`
  ADD PRIMARY KEY (`groom_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groom_tables`
--
ALTER TABLE `groom_tables`
  MODIFY `groom_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
