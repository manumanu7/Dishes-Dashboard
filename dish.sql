-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 02:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dish`
--

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `dishId` int(11) NOT NULL,
  `dishName` varchar(255) NOT NULL,
  `imageUrl` varchar(255) NOT NULL,
  `isPublished` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`dishId`, `dishName`, `imageUrl`, `isPublished`) VALUES
(1, 'Jeera Rice', 'https://nosh-assignment.s3.ap-south-1.amazonaws.com/jeera-rice.jpg', 1),
(2, 'Paneer Tikka', 'https://nosh-assignment.s3.ap-south-1.amazonaws.com/paneer-tikka.jpg', 1),
(3, 'Rabdi', 'https://nosh-assignment.s3.ap-south-1.amazonaws.com/rabdi.jpg', 1),
(4, 'Chicken Biryani', 'https://nosh-assignment.s3.ap-south-1.amazonaws.com/chicken-biryani.jpg', 1),
(5, 'Alfredo Pasta', 'https://nosh-assignment.s3.ap-south-1.amazonaws.com/alfredo-pasta.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`dishId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
