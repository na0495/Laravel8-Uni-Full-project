-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 08:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_29_120753_create_products', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quntity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `name`, `description`, `image`, `price`, `quntity`, `type`) VALUES
(1, '2021-02-10 19:35:41', '2021-02-26 18:41:57', 'test1', 'aziohezr', '71e734d62f_50163288_masque-coronavirus-nuiiko-adobe-stock.jpg', '160', '16', '160dadhia'),
(2, '2021-02-10 19:35:41', '2021-02-26 18:41:05', 'test1', 'aziohez', '71e734d62f_50163288_masque-coronavirus-nuiiko-adobe-stock.jpg', '160', '16', '160dadhia'),
(3, '2021-02-10 19:35:41', '2021-02-26 18:41:21', 'test2', 'azio', '71e734d62f_50163288_masque-coronavirus-nuiiko-adobe-stock.jpg', '160', '16', '160dadhia'),
(4, '2021-02-10 19:35:41', '2021-02-26 18:41:35', 'test3', 'aziohe', '71e734d62f_50163288_masque-coronavirus-nuiiko-adobe-stock.jpg', '160', '16', '160dadhia'),
(5, '2021-02-10 19:35:41', '2021-02-26 18:41:46', 'test4', 'aziohezrihrizo', '71e734d62f_50163288_masque-coronavirus-nuiiko-adobe-stock.jpg', '160', '16', '160dadhia'),
(6, '2021-02-10 19:35:41', '2021-02-26 18:42:56', 'test5', 'aziohezrihri', '71e734d62f_50163288_masque-coronavirus-nuiiko-adobe-stock.jpg', '160', '16', '160dadhia');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `usertype`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '0134567899', 'admin', 'admin@gmail.com', NULL, '$2y$10$O/B6se89HHDtuy5m/RByBOokWVb.lwEK9c7pHSm2FMyxnF3wBKHQ.', NULL, '2021-02-26 18:13:09', '2021-02-26 18:13:09'),
(2, 'user', '0123456777', NULL, 'user@gmail.com', NULL, '$2y$10$dHCEsklfFutsOCpgm8SJT.7cX5sWkZkBpMvFjXsSrQY4V630ir4Eu', NULL, '2021-02-26 18:13:45', '2021-02-26 18:13:45'),
(3, 'user1', '0123456787', NULL, 'user1@mail.com', NULL, '$2y$10$o1YWWkAkkPrjOubvqx65mOEEXsp0U7XAextyQ4G6I16PStdhd4O5i', NULL, '2021-02-26 18:14:08', '2021-02-26 18:14:08'),
(4, 'user3', '012345678', NULL, 'user3@gmail.com', NULL, '012345678', NULL, '2021-02-10 19:14:49', '2021-02-19 19:14:49'),
(18, 'user4', '012345678', NULL, 'user4@gmail.com', NULL, '012345678', NULL, '2021-02-10 19:14:49', '2021-02-19 19:14:49'),
(19, 'user5', '012345678', NULL, 'user5@gmail.com', NULL, '012345678', NULL, '2021-02-10 19:14:49', '2021-02-19 19:14:49'),
(20, 'user6', '012345678', NULL, 'user6@gmail.com', NULL, '012345678', NULL, '2021-02-10 19:14:49', '2021-02-19 19:14:49'),
(21, 'user7', '012345678', NULL, 'user7@gmail.com', NULL, '012345678', NULL, '2021-02-10 19:14:49', '2021-02-19 19:14:49'),
(22, 'user8', '012345678', NULL, 'user8@gmail.com', NULL, '012345678', NULL, '2021-02-10 19:14:49', '2021-02-19 19:14:49'),
(23, 'user9', '012345678', NULL, 'user9@gmail.com', NULL, '012345678', NULL, '2021-02-10 19:14:49', '2021-02-19 19:14:49'),
(24, 'user10', '012345678', NULL, 'use10@gmail.com', NULL, '012345678', NULL, '2021-02-10 19:14:49', '2021-02-19 19:14:49'),
(25, 'user11', '012345678', NULL, 'user11@gmail.com', NULL, '012345678', NULL, '2021-02-10 19:14:49', '2021-02-19 19:14:49'),
(26, 'user12', '012345678', NULL, 'user12@gmail.com', NULL, '012345678', NULL, '2021-02-10 19:14:49', '2021-02-19 19:14:49'),
(27, 'user13', '012345678', NULL, 'user33@gmail.com', NULL, '012345678', NULL, '2021-02-10 19:14:49', '2021-02-19 19:14:49'),
(28, 'user14', '012345678', NULL, 'user14@gmail.com', NULL, '012345678', NULL, '2021-02-10 19:14:49', '2021-02-19 19:14:49'),
(29, 'user15', '012345678', NULL, 'user15@gmail.com', NULL, '012345678', NULL, '2021-02-10 19:14:49', '2021-02-19 19:14:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
