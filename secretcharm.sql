-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 03:27 PM
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
-- Database: `secretcharm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `firstName`, `lastName`, `email`, `password`) VALUES
(4, 'gwen', 'apuli', 'gwenny@gmail.com', '1195644bcf7c43285704ef3ba0b3dd09'),
(6, 'Jho', 'Robles', 'binijho@gmail.com', '04e7b9bb2e6a4e5e0db5a4d99141d219'),
(7, 'Gwen', 'Apuli', 'binigwen@gmail.com', '71bc1214f0f3a0f81c8747565fe7c6fc'),
(12, 'Jhoanna', 'Robles', 'jhoanna@gmail.com', '6172961ee1eccc046bd3810138cc68ee'),
(13, 'Jeanne', 'Pituc', 'jeanne@gmail.com', '9d150b2f29949fbb63d5037437914fab');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `name`, `description`, `price`, `quantity`, `image`) VALUES
(1, 'Sparkle ', 'A touch of brilliance for your wrist', 30.99, 10, 'uploads/product1.jpg'),
(3, 'Luxe Loops', 'Statement earrings to elevate your look', 90.49, 15, 'uploads/product2.jpg'),
(6, 'Cosmic Charm', 'Celestial touch for your neckline', 30.49, 20, 'uploads/product3.jpg'),
(10, 'Ethereal Drops', 'Dazzling details, hanging in style', 10.99, 30, 'uploads/product4.jpg'),
(18, 'Golden Twist', 'Inspired by the iconic French pastry', 60.00, 12, 'uploads/product5.jpg'),
(19, 'Dazzle Chain', 'A bracelet that dazzles', 123.00, 123, 'uploads/product6.jpg'),
(20, 'Blooming Petal', 'Perfect blend of charm and class', 13.00, 15, 'uploads/product7.jpg'),
(21, 'Secret Embrace', 'Timeless teardrop that hugs your finger', 45.00, 76, 'uploads/product8.jpg'),
(22, 'Dream Set', 'A collection designed to shine forever', 599.00, 5, 'uploads/product9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
