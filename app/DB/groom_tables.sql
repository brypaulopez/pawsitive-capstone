-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 04:46 AM
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
(2, 4, 'pawpatrol', 'Full Groom', 400, '1718702710.webp', '2024-06-18 01:25:10', '2024-06-18 01:25:10'),
(3, 8, 'Petformance Veterinary- Animal Health and Wellness Clinic', 'Full Groom Inclusion', 500, '1718720079.jpg', '2024-06-18 06:14:39', '2024-06-18 06:14:39'),
(4, 11, 'EMC Veterinary Clinic', 'Full Groom Inclusion', 500, '1718720578.jpg', '2024-06-18 06:22:58', '2024-06-18 06:22:58'),
(5, 17, 'Blue Pet', 'Full Groom Inclusion', 500, '1718723067.jpg', '2024-06-18 07:04:27', '2024-06-18 07:04:27'),
(6, 18, 'Oasis Animal Clinic', 'Full Groom Inclusion', 480, '1718723330.jpg', '2024-06-18 07:08:50', '2024-06-18 07:08:50'),
(7, 19, 'Cresent Paws', 'Haircut', 400, '1718723781.jpg', '2024-06-18 07:16:21', '2024-06-18 07:16:21'),
(8, 20, 'Golden Griffin Animal Clinic', 'Haircut', 400, '1718724007.jpg', '2024-06-18 07:20:07', '2024-06-18 07:20:07'),
(9, 26, 'AAV Animal Care Clinic', 'Haircut', 500, '1718761006.png', '2024-06-18 17:36:46', '2024-06-18 17:36:46'),
(10, 27, 'Serbisyo Beterinaryo Animal Hospital', 'Full Groom Inclusion', 500, '1718761547.jpg', '2024-06-18 17:45:47', '2024-06-18 17:45:47'),
(11, 29, 'Petfriends Veterinary Clinic and Grooming Center', 'Haircut', 450, '1718763246.jpg', '2024-06-18 18:14:06', '2024-06-18 18:14:06'),
(12, 30, 'Furry Friend Veterinary Clinic', 'Full Groom Inclusion', 600, '1718763508.jpg', '2024-06-18 18:18:28', '2024-06-18 18:18:28'),
(13, 31, 'VetLink Animal Clinic', 'Haircut', 500, '1718763776.jpg', '2024-06-18 18:22:56', '2024-06-18 18:22:56'),
(14, 33, 'Happy Paws Pet Shop', 'Full Groom Inclusion', 500, '1718773686.jpg', '2024-06-18 21:08:06', '2024-06-18 21:08:06'),
(15, 34, 'Pawsetivety Veterinary Clinic', 'Full Groom Inclusion', 600, '1718773986.jpg', '2024-06-18 21:13:06', '2024-06-18 21:13:06'),
(16, 35, 'Garcia Veterinary and Grooming Center', 'Haircut', 500, '1718774162.jpg', '2024-06-18 21:16:02', '2024-06-18 21:16:02'),
(17, 36, 'Happy Paws Pet Shop', 'Full Groom Inclusion', 500, '1718776992.jpg', '2024-06-18 22:03:12', '2024-06-18 22:03:12'),
(18, 37, 'Pawsetivety Veterinary Clinic', 'Full Groom Inclusion', 600, '1718777174.jpg', '2024-06-18 22:06:14', '2024-06-18 22:06:14'),
(19, 38, 'Garcia Veterinary and Grooming Center', 'Haircut', 500, '1718777416.jpg', '2024-06-18 22:10:16', '2024-06-18 22:10:16');

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
  MODIFY `groom_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
