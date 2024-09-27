-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2024 at 05:28 PM
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
-- Database: `project_webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `message`, `created_at`, `email`) VALUES
(18, 'hello', '$2y$10$Prey8WQNq12BAWHnC5aMr.GGLzY6iagS4qni.xsXeC3UJdMp7c2We', NULL, '2024-09-27 13:34:26', 'mmanrusiana@gmail.com'),
(19, 'hello', '$2y$10$iI9jp7H.2T4aZ08NbtBLyO5Z3g5r65jddTfP7sHwFiFs2cfm86Bjm', NULL, '2024-09-27 13:34:49', 'mmanrusiana@gmail.com'),
(20, 'angel', '$2y$10$GA/1aXcwOdcON4GQSbMld.qeHPSIrcdbRUI6zyaHCqkrp2AY8HyyK', NULL, '2024-09-27 14:07:04', 'angelgrace@gmail.com'),
(21, 'manuel', '$2y$10$41DuhTvXmwEe/48rbfIfSemKcfV/83T5uixY9MErg3YhaY2/PbJ5.', NULL, '2024-09-27 14:45:02', 'mmanrusiana@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
