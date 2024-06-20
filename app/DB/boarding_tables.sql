-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 04:47 AM
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
(1, 4, 'pawpatrol', 'WALANG FOOD', 50, '1718704076.webp', '2024-06-18 01:47:56', '2024-06-18 01:59:12'),
(2, 8, 'Petformance Veterinary- Animal Health and Wellness Clinic', 'None', 400, '1718720137.jpg', '2024-06-18 06:15:37', '2024-06-18 06:15:37'),
(3, 11, 'EMC Veterinary Clinic', 'None', 400, '1718720625.jpg', '2024-06-18 06:23:45', '2024-06-18 06:23:45'),
(4, 17, 'Blue Pet', 'Food', 350, '1718723122.jpg', '2024-06-18 07:05:22', '2024-06-18 07:05:22'),
(5, 18, 'Oasis Animal Clinic', 'Food', 400, '1718723499.jpg', '2024-06-18 07:11:39', '2024-06-18 07:11:39'),
(6, 19, 'Cresent Paws', 'Food', 400, '1718723834.jpg', '2024-06-18 07:17:14', '2024-06-18 07:17:14'),
(7, 20, 'Golden Griffin Animal Clinic', 'Food', 400, '1718724058.jpg', '2024-06-18 07:20:58', '2024-06-18 07:20:58'),
(8, 26, 'AAV Animal Care Clinic', 'None', 300, '1718761054.jpg', '2024-06-18 17:37:34', '2024-06-18 17:37:34'),
(9, 27, 'Serbisyo Beterinaryo Animal Hospital', 'Food', 400, '1718762455.jpg', '2024-06-18 18:00:55', '2024-06-18 18:00:55'),
(10, 29, 'Petfriends Veterinary Clinic and Grooming Center', 'Food', 450, '1718763291.jpg', '2024-06-18 18:14:51', '2024-06-18 18:14:51'),
(11, 30, 'Furry Friend Veterinary Clinic', 'Food', 450, '1718763539.jpg', '2024-06-18 18:18:59', '2024-06-18 18:18:59'),
(12, 31, 'VetLink Animal Clinic', 'Food', 500, '1718763825.jpg', '2024-06-18 18:23:45', '2024-06-18 18:23:45'),
(13, 33, 'Happy Paws Pet Shop', 'Food', 500, '1718773735.jpg', '2024-06-18 21:08:55', '2024-06-18 21:08:55'),
(14, 34, 'Pawsetivety Veterinary Clinic', 'Food', 550, '1718774007.jpg', '2024-06-18 21:13:27', '2024-06-18 21:13:27'),
(15, 35, 'Garcia Veterinary and Grooming Center', 'None', 300, '1718774191.jpg', '2024-06-18 21:16:31', '2024-06-18 21:16:31'),
(16, 36, 'Happy Paws Pet Shop', 'Food', 500, '1718777026.jpg', '2024-06-18 22:03:46', '2024-06-18 22:03:46'),
(17, 37, 'Pawsetivety Veterinary Clinic', 'Food', 550, '1718777192.jpg', '2024-06-18 22:06:32', '2024-06-18 22:06:32'),
(18, 38, 'Garcia Veterinary and Grooming Center', 'None', 300, '1718777455.jpg', '2024-06-18 22:10:55', '2024-06-18 22:10:55');

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
  MODIFY `board_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
