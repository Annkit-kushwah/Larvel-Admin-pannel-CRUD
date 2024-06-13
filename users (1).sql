-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 08:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL DEFAULT 'male',
  `mo_no` bigint(20) DEFAULT NULL,
  `hobby` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `gender`, `mo_no`, `hobby`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ankit', 'Kushwah', 'ankitkushwah60341@gmail.com', NULL, '$2y$12$ZFhObKmfgV6uE84JASQNZ.A/mF7GuS4pP4o9WG1pr.zTZQJOhmryi', 'male', 8799409845, NULL, NULL, NULL, '2024-06-13 00:31:01', '2024-06-13 00:31:01'),
(2, 'Ankit', 'Kushwah', 'ankit@gmail.com', NULL, '$2y$12$pgWOkDs/27rpZv1eVNVxGORqnftcd7ceD.4Oz0E1DXYm3SuVP1azS', 'female', 9632587410, NULL, NULL, NULL, '2024-06-13 00:56:09', '2024-06-13 00:56:09'),
(4, 'raja', 'Kushwah', 'raja@gmail.com', NULL, '$2y$12$R.Mw35qyd2gtDNMAUZnyVuJtS9AcMAGs/yQNEZqsGSJ5CPQUDWaGC', 'male', 8529637452, NULL, NULL, NULL, '2024-06-13 00:58:53', '2024-06-13 00:58:53'),
(7, 'Ram', 'charan', 'ram@gmail.com', NULL, '$2y$12$DjV/UUx4ejC.WecUvlVYlOjZOnZC2LMLwLenE38VHUoCOE.D94siy', 'male', 8529637456, NULL, NULL, NULL, '2024-06-13 01:19:47', '2024-06-13 01:19:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
