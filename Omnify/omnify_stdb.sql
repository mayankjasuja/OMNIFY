-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 11:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omnify_stdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `events_tbl`
--

CREATE TABLE `events_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `start_time` datetime(6) NOT NULL,
  `end_time` time(6) NOT NULL,
  `day_of_week` varchar(255) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `userid` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events_tbl`
--

INSERT INTO `events_tbl` (`id`, `name`, `description`, `start_time`, `end_time`, `day_of_week`, `updated_at`, `created_at`, `userid`) VALUES
(1, 'mayankjasuja33', 'frefreer', '2023-02-23 14:46:00.000000', '15:47:00.000000', 'Tuesday', '2023-02-23 09:16:12', '2023-02-23 09:16:12', 7),
(2, 'mayankjasuja33', 'ddfvdfvds', '2023-02-24 15:04:00.000000', '16:05:00.000000', 'Friday', '2023-02-23 09:35:43', '2023-02-23 09:35:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules_tbl`
--

CREATE TABLE `schedules_tbl` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  `userid` int(12) DEFAULT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedules_tbl`
--

INSERT INTO `schedules_tbl` (`id`, `event_id`, `start_date`, `end_time`, `userid`, `updated_at`, `created_at`) VALUES
(1, 1, '2023-02-23', '14:46:', 7, '2023-02-23 09:16:12', '2023-02-23 09:16:12'),
(2, 1, '2023-03-02', '14:46:', 7, '2023-02-23 09:16:12', '2023-02-23 09:16:12'),
(3, 1, '2023-03-09', '14:46:', 7, '2023-02-23 09:16:12', '2023-02-23 09:16:12'),
(4, 1, '2023-03-16', '14:46:', 7, '2023-02-23 09:16:12', '2023-02-23 09:16:12'),
(5, 1, '2023-03-23', '14:46:', 7, '2023-02-23 09:16:12', '2023-02-23 09:16:12'),
(6, 1, '2023-03-30', '14:46:', 7, '2023-02-23 09:16:12', '2023-02-23 09:16:12'),
(7, 1, '2023-04-06', '14:46:', 7, '2023-02-23 09:16:12', '2023-02-23 09:16:12'),
(8, 1, '2023-04-13', '14:46:', 7, '2023-02-23 09:16:12', '2023-02-23 09:16:12'),
(9, 1, '2023-04-20', '14:46:', 7, '2023-02-23 09:16:12', '2023-02-23 09:16:12'),
(10, 1, '2023-04-27', '14:46:', 7, '2023-02-23 09:16:12', '2023-02-23 09:16:12'),
(11, 1, '2023-05-04', '14:46:', 7, '2023-02-23 09:16:12', '2023-02-23 09:16:12'),
(12, 1, '2023-05-11', '14:46:', 7, '2023-02-23 09:16:12', '2023-02-23 09:16:12'),
(13, 1, '2023-05-18', '14:46:', 7, '2023-02-23 09:16:12', '2023-02-23 09:16:12'),
(14, 2, '2023-02-24', '15:04:', 1, '2023-02-23 09:35:43', '2023-02-23 09:35:43'),
(15, 2, '2023-03-03', '15:04:', 1, '2023-02-23 09:35:43', '2023-02-23 09:35:43'),
(16, 2, '2023-03-10', '15:04:', 1, '2023-02-23 09:35:43', '2023-02-23 09:35:43'),
(17, 2, '2023-03-17', '15:04:', 1, '2023-02-23 09:35:43', '2023-02-23 09:35:43'),
(18, 2, '2023-03-24', '15:04:', 1, '2023-02-23 09:35:43', '2023-02-23 09:35:43'),
(19, 2, '2023-03-31', '15:04:', 1, '2023-02-23 09:35:43', '2023-02-23 09:35:43'),
(20, 2, '2023-04-07', '15:04:', 1, '2023-02-23 09:35:43', '2023-02-23 09:35:43'),
(21, 2, '2023-04-14', '15:04:', 1, '2023-02-23 09:35:43', '2023-02-23 09:35:43'),
(22, 2, '2023-04-21', '15:04:', 1, '2023-02-23 09:35:43', '2023-02-23 09:35:43'),
(23, 2, '2023-04-28', '15:04:', 1, '2023-02-23 09:35:43', '2023-02-23 09:35:43'),
(24, 2, '2023-05-05', '15:04:', 1, '2023-02-23 09:35:43', '2023-02-23 09:35:43'),
(25, 2, '2023-05-12', '15:04:', 1, '2023-02-23 09:35:43', '2023-02-23 09:35:43'),
(26, 2, '2023-05-19', '15:04:', 1, '2023-02-23 09:35:43', '2023-02-23 09:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Full_Name` varchar(70) NOT NULL,
  `Last_Name` varchar(70) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Full_Name`, `Last_Name`, `Email`, `Password`, `created_at`, `updated_at`) VALUES
(1, 'mayank', 'jasuja', 'mayankjasuja33@gmail.com', 'Pass#1122', '2023-02-21 17:06:06', '2023-02-21 17:06:06'),
(2, 'mayank', 'jasuja', 'mayankjasuja35@gmail.com', 'Pass#1122', '2023-02-21 17:09:49', '2023-02-21 17:09:49'),
(3, 'mayank', 'jasuja', 'mayankjasuja34@gmail.com', 'Pass#1122', '2023-02-21 17:11:15', '2023-02-21 17:11:15'),
(4, 'mayank', 'jasuja', 'mayankjasuja37@gmail.com', 'pass#1122', '2023-02-21 17:45:57', '2023-02-21 17:45:57'),
(7, 'vinod', 'kumar', 'mayank@gmail.com', 'Pass#1122', '2023-02-22 06:27:47', '2023-02-22 06:27:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events_tbl`
--
ALTER TABLE `events_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules_tbl`
--
ALTER TABLE `schedules_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events_tbl`
--
ALTER TABLE `events_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules_tbl`
--
ALTER TABLE `schedules_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `schedules_tbl`
--
ALTER TABLE `schedules_tbl`
  ADD CONSTRAINT `schedules_tbl_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events_tbl` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
