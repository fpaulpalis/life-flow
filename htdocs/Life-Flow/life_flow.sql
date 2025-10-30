-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2025 at 05:36 AM
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
-- Database: `life_flow`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate_blood`
--

CREATE TABLE `donate_blood` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `blood_type` varchar(10) DEFAULT NULL,
  `medical_history` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donate_blood`
--

INSERT INTO `donate_blood` (`id`, `user_id`, `full_name`, `gender`, `age`, `weight`, `email`, `phone`, `blood_type`, `medical_history`, `created_at`) VALUES
(1, 5, 'Clayah Bianca Baltazar', 'Female', 20, 42, 'mereziko@gmail.com', '+1 2025 0390 0506', 'O -', 'none', '2025-03-13 02:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `need_blood`
--

CREATE TABLE `need_blood` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `blood_type` varchar(10) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `need_blood`
--

INSERT INTO `need_blood` (`id`, `user_id`, `full_name`, `gender`, `email`, `phone`, `blood_type`, `address`, `created_at`) VALUES
(3, 8, 'vlad neri gar', 'Male', 'ambotsaimo@gmail.com', '09083456672', 'O +', 'Kana ra sa highway dapit aye', '2025-03-13 10:39:16'),
(4, 8, 'Don Jasper Deodora', 'Male', 'doag.deodora.up@phinmaed.com', '09335440331', 'A-', 'djksnfcnwae fm, em,', '2025-03-17 00:40:11'),
(5, 8, 'Mikael Vladimir M. Neri', '', 'mereziko@gmial.com', '09454998054', 'O +', 'Sa banda sa may Rosario La Union, paloob sa Concepcion', '2025-03-17 05:59:50'),
(6, 8, 'June', 'Male', 'june@june.com', '0999999999999', 'O +', 'ahdbchndsivbhda vijbsvbsjdvbksdbvhbsdjfbh', '2025-03-17 08:14:02'),
(7, 8, 'Don Jasper Deodora', 'Male', 'doag.deodora.up@phinmaed.com', '09560949706', 'O+', 'Sta. Maria, Pangasinan', '2025-04-01 23:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `is_admin`) VALUES
(6, 'ikovlad', 'mereziko@gmail.com', '$2y$10$uGLVogbv8NQifKcwB5bYmuxi8I3fyjdqM2AXaweelD5M5E8e/3Gnq', 1),
(7, 'vladneri', 'vladneri@gmail.com', '$2y$10$pGRA6cpc7lGrdlF0HGlrquKM3MaqguoeRESEkEiGTCNegPS47hica', 0),
(8, 'testuser21', 'testuser@gmail.com', '$2y$10$xv8JfpRKHm3vGSEEZ.6fYe6B9oi3OInX0cjB1r1V0Dx.djNENFt.e', 0),
(9, 'vlad', 'vlad@gmail.com', '$2y$10$kfhw2eiUG0Ih1LOE1MLFceQ82sERPhxsA/k8yrF8wbIOplR0cn88a', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donate_blood`
--
ALTER TABLE `donate_blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `need_blood`
--
ALTER TABLE `need_blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donate_blood`
--
ALTER TABLE `donate_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `need_blood`
--
ALTER TABLE `need_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
