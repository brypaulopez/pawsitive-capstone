-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 04:50 AM
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
-- Table structure for table `user_tables`
--

CREATE TABLE `user_tables` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_tables`
--

INSERT INTO `user_tables` (`user_id`, `user_fname`, `user_lname`, `user_email`, `user_username`, `user_password`, `user_role`, `created_at`, `updated_at`) VALUES
(1, 'Bryan Jeffrey Jay', 'Lopez', 'brypaulopez@gmail.com', 'admin', '$2y$12$.5WUKo4M8pXSlP0a46MGkOczq9ND0d8fSAq5l33eLz674eDlUF3LC', '1', '2024-06-15 02:24:25', '2024-06-15 02:24:25'),
(2, 'Bryan', 'Lopez', 'brypaulopez@gmail.com', 'pauwee', '$2y$12$tsFwhQFUQMnvDkhPDAsYR.hPJe9GXIH08r3nnG9WJi/SszAimydl6', '0', '2024-06-15 02:25:59', '2024-06-15 02:25:59'),
(3, 'Jay', 'Da Leon', 'jaydaleon@gmail.com', 'jaysuave', '$2y$12$WK4GxNC.whj0oPzVvKsD2usrejaKSaEvEEpsloWz4BvBiVoA7geOK', '0', '2024-06-17 02:50:33', '2024-06-17 02:50:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_tables`
--
ALTER TABLE `user_tables`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_tables`
--
ALTER TABLE `user_tables`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
