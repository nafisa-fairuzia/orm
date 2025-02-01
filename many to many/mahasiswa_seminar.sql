-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2025 at 01:16 AM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_seminar`
--

CREATE TABLE `mahasiswa_seminar` (
  `id` int(10) UNSIGNED NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `seminar_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa_seminar`
--

INSERT INTO `mahasiswa_seminar` (`id`, `mahasiswa_id`, `seminar_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2025-01-31 23:05:49', '2025-01-31 23:05:49'),
(2, 1, 4, '2025-01-31 23:05:49', '2025-01-31 23:05:49'),
(3, 2, 1, '2025-01-31 23:10:10', '2025-01-31 23:10:10'),
(4, 2, 2, '2025-01-31 23:10:10', '2025-01-31 23:10:10'),
(5, 2, 4, '2025-01-31 23:11:00', '2025-01-31 23:11:00'),
(6, 3, 3, '2025-01-31 23:11:00', '2025-01-31 23:11:00'),
(7, 4, 1, '2025-01-31 23:11:51', '2025-01-31 23:11:51'),
(8, 4, 3, '2025-01-31 23:11:51', '2025-01-31 23:11:51'),
(9, 1, 2, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa_seminar`
--
ALTER TABLE `mahasiswa_seminar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa_seminar`
--
ALTER TABLE `mahasiswa_seminar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
