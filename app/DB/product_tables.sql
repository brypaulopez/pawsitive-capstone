-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 03:18 AM
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
-- Table structure for table `product_tables`
--

CREATE TABLE `product_tables` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_vet_id` int(11) NOT NULL,
  `vet_name` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_details` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_stock` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tables`
--

INSERT INTO `product_tables` (`product_id`, `product_vet_id`, `vet_name`, `product_name`, `product_details`, `product_category`, `product_stock`, `product_price`, `product_image`, `created_at`, `updated_at`) VALUES
(1, 3, 'Blue Pet', 'Bark and Spark', 'Collar', 'accessories', '5', '300', '1718696228.png', '2024-06-17 23:37:08', '2024-06-17 23:37:08'),
(2, 3, 'Blue Pet', 'Detick', 'anti tick', 'medicines', '5', '150', '1718696320.jpg', '2024-06-17 23:38:40', '2024-06-17 23:38:40'),
(3, 3, 'Blue Pet', 'Nexgard', 'Anti Tick', 'medicines', '5', '200', '1718696364.png', '2024-06-17 23:39:24', '2024-06-17 23:39:24'),
(4, 3, 'Blue Pet', 'Dog bowl', 'Food Bowl', 'accessories', '3', '150', '1718696390.jpg', '2024-06-17 23:39:50', '2024-06-17 23:39:50'),
(5, 3, 'Blue Pet', 'Collar', 'Dog Collar', 'accessories', '4', '150', '1718696425.jpg', '2024-06-17 23:40:25', '2024-06-17 23:40:25'),
(6, 3, 'Blue Pet', 'Heartgard Plus', 'Prevents heartworm disease and treats and controls roundworms and hookworms in dogs.', 'accessories', '6', '500', '1718696488.jpg', '2024-06-17 23:41:28', '2024-06-17 23:41:28'),
(7, 3, 'Blue Pet', 'Frontline Plus', 'Kills fleas, flea eggs, flea larvae, and ticks on dogs and cats.', 'medicines', '5', '600', '1718696570.jpg', '2024-06-17 23:42:50', '2024-06-17 23:42:50'),
(8, 3, 'Blue Pet', 'Rimadyl', 'Provides pain relief and reduces inflammation associated with osteoarthritis and post-surgical pain in dogs.', 'medicines', '4', '300', '1718696606.jpg', '2024-06-17 23:43:26', '2024-06-17 23:43:26'),
(9, 3, 'Blue Pet', 'Cosequin', 'Supports joint health and helps manage arthritis in dogs and cats.', 'medicines', '5', '600', '1718696658.jpg', '2024-06-17 23:44:18', '2024-06-17 23:44:18'),
(10, 3, 'Blue Pet', 'Elizabethan Collar', 'Prevents animals from licking, biting, or scratching wounds, incisions, or other affected areas.', 'accessories', '5', '300', '1718696690.jpg', '2024-06-17 23:44:50', '2024-06-17 23:44:50'),
(11, 3, 'Blue Pet', 'Dog Bed', 'A dog bed is a cushioned resting place for dogs, available in various sizes, shapes, and materials to provide comfort and support for their sleep and relaxation.', 'accessories', '3', '500', '1718696764.jpg', '2024-06-17 23:46:04', '2024-06-17 23:48:03'),
(12, 7, 'CarePoint Animal Clinic', 'Dog Cage', 'Collapsible Cage', 'accessories', '4', '1200', '1718706241.jpg', '2024-06-18 02:24:01', '2024-06-18 02:24:47'),
(13, 7, 'CarePoint Animal Clinic', 'Dog Diaper', 'Disposable dog diaper', 'accessories', '5', '300', '1718715949.jpg', '2024-06-18 05:05:49', '2024-06-18 05:05:49'),
(14, 7, 'CarePoint Animal Clinic', 'Dog toys', 'Squeaky Toys', 'accessories', '3', '400', '1718716022.jpg', '2024-06-18 05:07:02', '2024-06-18 05:07:02'),
(15, 7, 'CarePoint Animal Clinic', 'Dog Brush', 'Metal Comb', 'grooming', '5', '250', '1718716068.jpg', '2024-06-18 05:07:48', '2024-06-18 05:07:48'),
(16, 7, 'CarePoint Animal Clinic', 'Vest', 'Walking Vest', 'accessories', '6', '1500', '1718716346.jpg', '2024-06-18 05:12:26', '2024-06-18 05:12:26'),
(17, 7, 'CarePoint Animal Clinic', 'Petbobi Dog Stroller', 'Stroller', 'accessories', '1', '20000', '1718716386.jpg', '2024-06-18 05:13:06', '2024-06-18 05:13:06'),
(18, 7, 'CarePoint Animal Clinic', 'Dog Shoes', 'Dog Booties', 'accessories', '4', '300', '1718716435.jpg', '2024-06-18 05:13:55', '2024-06-18 05:13:55'),
(19, 7, 'CarePoint Animal Clinic', 'Nail Scissor', 'Nail Cutter', 'grooming', '4', '150', '1718716497.jpg', '2024-06-18 05:14:57', '2024-06-18 05:14:57'),
(20, 7, 'CarePoint Animal Clinic', 'Alpo', 'Kibbles', 'foods', '5', '200', '1718717304.jpg', '2024-06-18 05:28:24', '2024-06-18 05:28:24'),
(21, 7, 'CarePoint Animal Clinic', 'Toothpaste', 'Dog Toothpaste', 'grooming', '4', '100', '1718719305.jpg', '2024-06-18 06:01:45', '2024-06-18 06:01:45'),
(22, 12, 'Vet District Animal Medical Center Inc.', 'Dog hair clipper', 'Rechargeable clipper', 'grooming', '2', '1500', '1718720824.jpg', '2024-06-18 06:27:04', '2024-06-18 06:27:04'),
(23, 12, 'Vet District Animal Medical Center Inc.', 'Dog Soap', 'Pet Bar Dog Soap helps to maintain your pet’s cleanliness and freshness. Pet Bar soap helps in keep the pet’s skin cool, itch-free and fresh.', 'grooming', '6', '200', '1718720939.jpg', '2024-06-18 06:28:59', '2024-06-18 06:28:59'),
(24, 12, 'Vet District Animal Medical Center Inc.', 'Test Kit', 'Canine Parvovirus Antigen Test Card', 'medicines', '3', '700', '1718721063.jpg', '2024-06-18 06:31:03', '2024-06-18 06:31:03'),
(25, 12, 'Vet District Animal Medical Center Inc.', 'Gentamicin', 'Dogs Gentamicin Eye Drops', 'medicines', '4', '350', '1718721167.jpg', '2024-06-18 06:32:47', '2024-06-18 06:32:47'),
(26, 12, 'Vet District Animal Medical Center Inc.', 'Pedigree', 'Kibbles', 'foods', '10', '280', '1718721217.jpg', '2024-06-18 06:33:37', '2024-06-18 06:33:37'),
(27, 12, 'Vet District Animal Medical Center Inc.', 'Drontal', 'Dog dewormer', 'medicines', '5', '350', '1718721370.png', '2024-06-18 06:36:10', '2024-06-18 06:36:10'),
(28, 12, 'Vet District Animal Medical Center Inc.', 'BooBone', 'Dog chew toy', 'accessories', '3', '400', '1718721563.jpg', '2024-06-18 06:39:23', '2024-06-18 06:39:23'),
(29, 12, 'Vet District Animal Medical Center Inc.', 'Singen', 'Canine Milk', 'foods', '4', '800', '1718721635.jpg', '2024-06-18 06:40:35', '2024-06-18 06:40:35'),
(30, 12, 'Vet District Animal Medical Center Inc.', 'Mange Relief', 'Anti Mange', 'medicines', '5', '400', '1718721688.jpg', '2024-06-18 06:41:28', '2024-06-18 06:41:28'),
(31, 12, 'Vet District Animal Medical Center Inc.', 'Mondex', 'Energy Supplement', 'medicines', '8', '120', '1718721751.jpg', '2024-06-18 06:42:31', '2024-06-18 06:42:31'),
(32, 15, 'YCC Veterinary Clinic', 'Bark and Spark', 'Leash', 'accessories', '5', '200', '1718722437.png', '2024-06-18 06:53:57', '2024-06-18 06:53:57'),
(33, 15, 'YCC Veterinary Clinic', 'Detick', 'Anti Tick', 'medicines', '5', '150', '1718722493.jpg', '2024-06-18 06:54:53', '2024-06-18 06:54:53'),
(34, 15, 'YCC Veterinary Clinic', 'Nexgard', 'Anti Tick', 'grooming', '10', '200', '1718722536.png', '2024-06-18 06:55:36', '2024-06-18 06:55:36'),
(35, 15, 'YCC Veterinary Clinic', 'Dog bowl', 'Food Dog Bowl', 'accessories', '5', '100', '1718722574.jpg', '2024-06-18 06:56:14', '2024-06-18 06:56:14'),
(36, 15, 'YCC Veterinary Clinic', 'Collar', 'Dog Collar', 'accessories', '5', '100', '1718722614.jpg', '2024-06-18 06:56:54', '2024-06-18 06:56:54'),
(37, 23, 'Abys Petcare and Pet Grooming Center', 'Heartgard Plus', 'Prevents heartworm disease and treats and controls roundworms and hookworms in dogs.', 'medicines', '5', '300', '1718760010.jpg', '2024-06-18 17:20:10', '2024-06-18 17:20:10'),
(38, 23, 'Abys Petcare and Pet Grooming Center', 'Frontline Plus', 'Kills fleas, flea eggs, flea larvae, and ticks on dogs and cats.', 'grooming', '5', '250', '1718760088.jpg', '2024-06-18 17:21:28', '2024-06-18 17:21:28'),
(39, 23, 'Abys Petcare and Pet Grooming Center', 'Rimadyl', 'Provides pain relief and reduces inflammation associated with osteoarthritis and post-surgical pain in dogs.', 'medicines', '10', '200', '1718760135.jpg', '2024-06-18 17:22:15', '2024-06-18 17:22:15'),
(40, 23, 'Abys Petcare and Pet Grooming Center', 'Cosequin', 'Supports joint health and helps manage arthritis in dogs and cats.', 'medicines', '10', '300', '1718760216.jpg', '2024-06-18 17:23:36', '2024-06-18 17:23:36'),
(41, 23, 'Abys Petcare and Pet Grooming Center', 'Elizabethan Collar', 'Prevents animals from licking, biting, or scratching wounds, incisions, or other affected areas.', 'accessories', '3', '400', '1718760260.jpg', '2024-06-18 17:24:20', '2024-06-18 17:24:20'),
(42, 24, 'Furever Animal Clinic', 'Dog Bed', 'A dog bed is a cushioned resting place for dogs, available in various sizes, shapes, and materials to provide comfort and support for their sleep and relaxation.', 'accessories', '1', '1500', '1718760476.jpg', '2024-06-18 17:27:56', '2024-06-18 17:27:56'),
(43, 24, 'Furever Animal Clinic', 'Dog Carrier Bag', 'A dog carrier bag is a portable, often soft-sided bag designed for comfortably and securely transporting small dogs, featuring ventilation panels, sturdy handles, and sometimes shoulder straps for easy carrying.', 'accessories', '2', '1200', '1718760519.jpg', '2024-06-18 17:28:39', '2024-06-18 17:28:39'),
(44, 24, 'Furever Animal Clinic', 'Dog Muzzle', 'A dog muzzle is a device placed over a dog\'s snout to prevent biting, barking, or chewing, typically made of nylon, leather, or plastic, and designed with ventilation holes for the dog\'s comfort and safety.', 'accessories', '2', '600', '1718760562.jpg', '2024-06-18 17:29:22', '2024-06-18 17:29:22'),
(45, 24, 'Furever Animal Clinic', 'Dentastix', 'Dog Dental Treats Original Flavor Dental Bones', 'foods', '5', '100', '1718760602.jpg', '2024-06-18 17:30:02', '2024-06-18 17:30:02'),
(46, 24, 'Furever Animal Clinic', 'Fur Magic', 'Dog Shampoo', 'grooming', '5', '80', '1718760645.jpg', '2024-06-18 17:30:45', '2024-06-18 17:30:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_tables`
--
ALTER TABLE `product_tables`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_tables`
--
ALTER TABLE `product_tables`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
