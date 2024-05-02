-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 01, 2024 at 07:17 PM
-- Server version: 8.2.0
-- PHP Version: 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `properties`
--

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` varchar(15) NOT NULL,
  `address_l1` varchar(30) NOT NULL,
  `address_l2` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `town` varchar(20) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `details` varchar(150) NOT NULL,
  `bedroom` int NOT NULL,
  `bathroom` int NOT NULL,
  `type` varchar(20) NOT NULL,
  `b_r_c` text NOT NULL,
  `available` varchar(30) NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `title`, `description`, `price`, `address_l1`, `address_l2`, `city`, `town`, `postcode`, `details`, `bedroom`, `bathroom`, `type`, `b_r_c`, `available`, `keywords`, `image`) VALUES
(2, 'Property Title', 'Property Description', '1,000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 22.png'),
(3, 'Property Title', 'Property Description', '1,000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking, Garage', 'assets/img/popular 33.jpg'),
(40, 'Property Title', 'Property Description', '1,000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 44.jpg'),
(41, 'Property Title', 'Property Description', '1,000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(42, 'Property Title', 'Property Description', '1,000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 22.png'),
(43, 'Property Title', 'Property Description', '1,000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 33.jpg'),
(44, 'Property Title', 'Property Description', '1,000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 44.jpg'),
(45, 'Property Title', 'Property Description\r\n\r\n\r\n\r\nProperty Description', '100,000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 4, 2, 'House', 'Buy', 'A', 'Balcony, Pool', 'assets/img/popular 11.png'),
(46, 'Property Title', 'Property Description', '100,000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 4, 2, 'House', 'Buy', 'A', 'Garden, Garage, Pool', 'assets/img/popular 22.png'),
(58, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(59, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(60, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(61, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(62, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(63, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(64, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(65, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(66, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(67, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(68, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(69, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(70, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(71, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(72, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(73, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(74, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(75, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(76, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(77, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(78, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(79, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(80, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(81, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(82, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(83, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(84, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(85, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(86, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(87, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(88, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(89, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(90, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(91, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(92, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(93, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(94, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(95, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(96, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(97, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(98, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png'),
(99, 'Property Title', 'Property Description', '1000', 'Address Line 1', 'Address Line 2', 'City', 'Town', 'Postcode', 'Details', 2, 2, 'House', 'Rent', 'A', 'garden, parking', 'assets/img/popular 11.png');

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `id` int NOT NULL,
  `property_id` int DEFAULT NULL,
  `image_url` varchar(255) NOT NULL DEFAULT 'default_image.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `property_images`
--

INSERT INTO `property_images` (`id`, `property_id`, `image_url`) VALUES
(1, 2, 'assets/img/popular 22.png'),
(2, 2, 'assets/img/popular 33.jpg'),
(3, 2, 'assets/img/popular 44.jpg'),
(4, 3, 'assets/img/popular 22.png'),
(5, 3, 'assets/img/popular 33.jpg'),
(6, 3, 'assets/img/popular 44.jpg'),
(7, 3, 'assets/img/popular 22.png'),
(8, 3, 'assets/img/popular 33.jpg'),
(9, 3, 'assets/img/popular 44.jpg'),
(10, 3, 'assets/img/popular 22.png'),
(11, 3, 'assets/img/popular 33.jpg'),
(12, 3, 'assets/img/popular 44.jpg'),
(13, 3, 'assets/img/popular 22.png'),
(14, 3, 'assets/img/popular 33.jpg'),
(15, 3, 'assets/img/popular 44.jpg'),
(16, 3, 'assets/img/popular 22.png'),
(17, 3, 'assets/img/popular 33.jpg'),
(18, 3, 'assets/img/popular 44.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `property_images`
--
ALTER TABLE `property_images`
  ADD CONSTRAINT `property_images_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
