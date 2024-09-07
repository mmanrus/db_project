-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2024 at 10:27 AM
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
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Hello', 'Hello@gmail.com', '        sdfsdafsadfsd', '2024-09-07 07:30:46'),
(2, 'Hello', 'Hello@gmail.com', '        sdfsdafsadfsd', '2024-09-07 07:30:46'),
(4, 'Hello', 'Pooo@gmail.com', 'Hello Angel\r\n', '2024-09-07 07:30:46'),
(5, 'Hello', 'Hello@gmail.com', '        asdasd', '2024-09-07 07:30:46'),
(6, 'Hello', 'Hello@gmail.com', '        sdfasdfasdfsad', '2024-09-07 07:30:46'),
(7, '', '', '', '2024-09-07 08:07:34'),
(8, '', '', '', '2024-09-07 08:07:57'),
(9, '', '', '', '2024-09-07 08:16:16'),
(10, '', '', '', '2024-09-07 08:17:20'),
(11, '', '', '', '2024-09-07 08:18:03'),
(12, '', '', '', '2024-09-07 08:18:24'),
(13, '', '', '', '2024-09-07 08:21:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
