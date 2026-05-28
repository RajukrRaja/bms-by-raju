-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2026 at 10:00 AM
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
-- Database: `bms_by_raju`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `cover_image` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `published_date` date NOT NULL,
  `_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `cover_image`, `price`, `published_date`, `_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Laravel Book', 'Raju', 'books/jv0migsd40Mp8y8izpQTgCDEEUUXNKoHonRkILfa.png', 200.00, '2026-05-28', 0, '2026-05-27 20:01:04', '2026-05-28 01:58:14'),
(2, 'Laravel', 'Raju Kumar Raja', 'books/AsaRjPLDrJHDyq8uNqcGlo2laryKaYc8NGPeLUv9.png', 500.00, '2026-05-28', 0, '2026-05-27 20:08:01', '2026-05-27 20:27:09'),
(3, 'Theory of ethical security', 'Raju Kumar Raja', 'books/koZBZGxkR5d3XZ79c4fIk2QaSKEmEhRWbiqB17dn.png', 500.00, '2026-05-28', 0, '2026-05-27 20:13:06', '2026-05-27 20:16:39'),
(4, 'Php', 'Raju Kumar Raja', 'books/UIKZvxQJ7wTacyAuBzMcSRyTZs3uxcQCl5JBvj3w.png', 5000.00, '2026-05-28', 0, '2026-05-27 20:27:50', '2026-05-27 20:27:50'),
(5, 'mysql', 'Raju Kumar Raja', 'books/nMpTmqSTjsZjik1xv8SzafjF8QbPmKGOVeTzQv2L.png', 600.00, '2026-05-28', 0, '2026-05-27 20:28:45', '2026-05-27 20:28:45'),
(6, 'Laravel Book', 'Raju Kumar Raja', 'books/Jfcvgt9lCMWQ34fbY9Fn1JaIPGrcq3mLlfF5MHuh.png', 500.00, '2026-05-28', 0, '2026-05-28 01:42:23', '2026-05-28 02:01:17'),
(7, 'Laravel Book', 'Raju Kumar Raja', NULL, 500.00, '2026-05-28', 0, '2026-05-28 01:42:46', '2026-05-28 01:42:46'),
(8, 'Laravel Book', 'Raju Kumar Raja', NULL, 500.00, '2026-05-28', 0, '2026-05-28 01:44:23', '2026-05-28 01:44:23'),
(9, 'Laravel Book', 'Raju Kumar Raja', NULL, 500.00, '2026-05-28', 0, '2026-05-28 01:44:28', '2026-05-28 01:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('bms-by-raju-cache-1bRsgw60NcvopztW', 'a:1:{s:11:\"valid_until\";i:1779950522;}', 1781160122),
('bms-by-raju-cache-oHo7pfpCxxm8pWo1', 'a:1:{s:11:\"valid_until\";i:1779951106;}', 1781160646);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_05_27_150140_create_sessions_table', 2),
(5, '2026_05_28_010040_create_books_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fv5aYt5sa9SBFDW15ql5cXrPq1u5ld6CSkl6OvBv', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibm9tdHFDVFJTS0VVWktXODNJdVZPVUJuQXY1dm10a0NwR3RDTUdBeCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7Tjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1779942523),
('m2A99qH1pHmZsuWai2v5zwMIdn0Amvqf6trlbqZi', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.122.0 Chrome/142.0.7444.265 Electron/39.8.8 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVnhOa3RMeUNjdTVnd1NYcnh3VUhlTjNsZlBSWnBiaW1mQmJaMk1tNiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1779932467),
('vK1TaUmZVCfvyUZsFRxTsqT22Hz0Zem64PYvEFft', NULL, '127.0.0.1', 'PostmanRuntime/7.54.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiVThCRHRXWE9sODBpeFZpVEhYOGh1R2dKelV4VnBwNGVqVzFoMDczSCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1779941777);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'RAJU KUMAR RAJA', 'rajukumar.191813@gmail.com', '$2y$12$X4ydqXb1KU2RZR3BCUWZBOczk52GmMq7AkF0AB88T0aDGOYHdukuu', '2026-05-27 09:34:03', '2026-05-27 09:34:03', NULL),
(3, 'riya', 'riya@gmail.com', '$2y$12$LKnHxzS/2monnXeeA.7syuMYWcv7U8SAf5x8ZIV8zk6ZPPAwNhwjO', '2026-05-27 22:38:06', '2026-05-27 22:38:06', NULL),
(4, 'lalit', 'lalit@gmail.com', '$2y$12$/i2EFMly/vFPAU/BVTuSdeVfbo1Easug4E/dePOO7DFIVHGbJbvwS', '2026-05-27 22:47:59', '2026-05-27 22:47:59', NULL),
(5, 'kavi', 'kavi@gmail.com', '$2y$12$pzHBoZ.jebT8jPMG8DObdOZ5rEG3RXssH1viE.9V1HRPe3CsdcTmy', '2026-05-27 22:57:01', '2026-05-27 22:57:01', NULL),
(6, 'samir', 'samir@gmail.com', '$2y$12$vevHL9fikSfJxfbz3Z5y0ePcYSeiRLkxrcwK/ykbbQxJZkFYk.Vke', '2026-05-27 23:59:57', '2026-05-27 23:59:57', NULL),
(7, 'ravi', 'ravi@gmail.com', '$2y$12$3Cwt8vuyBpRN62/AjmhcjO5Ueh8GrsFtTcKe0f2CKHpMwYbUndYT6', '2026-05-28 00:32:33', '2026-05-28 00:32:33', NULL),
(11, 'lalit', 'lalit1@gmail.com', '$2y$12$5udzGj3YxdtfceahATn/8u7DdtowFWhCqZX15SI0ngReSWIuYqBpS', '2026-05-28 01:16:26', '2026-05-28 01:16:26', NULL),
(12, 'lalit', 'lalit2@gmail.com', '$2y$12$mbZ0APdqcCN1MnMUIGrgKOGO/uPZoFcqCGyCYPEHS922mc4GcZMyi', '2026-05-28 01:18:23', '2026-05-28 01:18:23', NULL),
(13, 'lalit', 'lalit4@gmail.com', '$2y$12$fGnMu4LKSJEVyXvxJ1CcBemQkKDWRrHwGM8HrhV3oCUYf673kXvkK', '2026-05-28 01:19:10', '2026-05-28 01:19:10', NULL),
(14, 'lalit', 'lalit7@gmail.com', '$2y$12$seuQFNYwEIfOnCMjh6cHkenf1Qjq45q..CbUFFZOWS0QaITelA8Ki', '2026-05-28 01:23:38', '2026-05-28 01:23:38', NULL),
(15, 'lalit', 'lalit0@gmail.com', '$2y$12$.f91hD8Ws8fsJ7W2ahBSv.rZnS91hE17vBgnUvX2LtZQ4bqrUFnc6', '2026-05-28 01:25:29', '2026-05-28 01:25:29', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_email_index` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
