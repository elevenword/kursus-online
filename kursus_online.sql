-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 03:20 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursus_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id_detail` int(255) NOT NULL,
  `id` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_tlp` int(200) NOT NULL,
  `tujuan` varchar(225) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id_detail`, `id`, `email`, `alamat`, `no_tlp`, `tujuan`, `pendidikan`, `created_at`, `updated_at`) VALUES
(1, 1, 'adam@gmail.com', 'Jalan cilangkap no.3', 8960111, 'mau coba', 'smk', '2021-02-17 18:56:01', '2021-02-17 18:56:01'),
(2, 2, 'user@gmail.com', 'jalan raya bogor', 85382389, 'saya user ', 's1', '2021-02-17 18:56:01', '2021-02-17 18:56:01'),
(7, 7, 'member@gmail.com', 'jalan Tapos km.24 No.75', 87837628, 'Ingin dapat memepelajari ilmu baru', 's2', '2021-02-17 18:56:01', '2021-02-17 11:56:41');

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
-- Table structure for table `kursuses`
--

CREATE TABLE `kursuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kursus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_kursus` varchar(2500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kursuses`
--

INSERT INTO `kursuses` (`id`, `nama_kursus`, `isi_kursus`, `created_at`, `updated_at`) VALUES
(1, 'Belajar Disign Hingga Mahir', 'Pada Tutorial kali ini akan banyak mempelajari tentang desain dengan software Afinity design, yang mana dalam pembelajaran kali ini  .....', NULL, '2021-02-17 01:47:32'),
(2, 'Belajar Wordpress membuat Ecommerce', 'Kursus kali ini akan', NULL, '2021-02-12 01:48:14'),
(4, 'computing', 'Cloud computing jika terjemahkan secara harfiah berarti \'komputasi awan\'. Dalam hal ini yang dimaksud adalah proses komputerisasi sebuah teknologi yang berbasis internet. Sistem cloud computing memungkinkan penggunanya untuk menyimpan dan mengolah data secara virtua', '2021-02-12 01:10:54', '2021-02-12 01:10:54'),
(8, 'Belajar React js', 'dalam materi ini', '2021-02-15 23:52:32', '2021-02-15 23:52:32');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT current_timestamp(),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'member',
  `link` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `link`, `created_at`, `updated_at`) VALUES
(5, 'Admin', 'admin@gmail.com', '2021-02-15 01:38:44', '$2y$10$NznbxvsXi94PDYZ0mU6b4O/RAtNcFxhvOcn0l8legtV86wjnL/4Je', NULL, 'admin', NULL, '2021-02-15 01:38:44', NULL),
(6, 'User', 'user@gmail.com', '2021-02-15 01:38:44', '$2y$10$FZLLXUGvRE60z81KyplNTe.dJ11WrTtf56Kg1y.1PDVwcF.PnQMwq', NULL, 'user', NULL, '2021-02-15 01:38:44', NULL),
(7, 'Member', 'member@gmail.com', '2021-02-15 01:38:44', '$2y$10$2LZubjzl8X6U4vgp5YNheOo9YvUk6ib1mU6n1ZrO7fsBO1dxCiZeK', NULL, 'member', 'Link', '2021-02-15 01:38:44', NULL),
(8, 'adam', 'adam@gmail.com', NULL, '$2y$10$u1dUc6zGdnkYTFabyITuoORhTEzcH2kUWjzMgPGPXG2eS4TWvXSbO', NULL, 'member', 'Link', '2021-02-16 09:20:51', '2021-02-17 06:51:20'),
(9, 'dwi', 'dwi@gmail.com', NULL, '$2y$10$UKCgVXcPna4HEfWDeEuAF.WhyGzK285MntXvUkyKXU258bWyLkidO', NULL, 'member', NULL, '2021-02-16 09:23:57', '2021-02-16 09:23:57'),
(10, 'adwi', 'adwi@gmail.com', NULL, '$2y$10$uWK2ejCN3NvnzN6tugLt7OxsEUu.28f2p3YLE87bQKizV0fTHpxza', NULL, 'admin', NULL, '2021-02-16 09:26:20', '2021-02-16 09:26:20'),
(13, 'prakosa', 'prakosa@gmail.com', '2021-02-17 18:57:38', '$2y$10$OliUUbzHn/kaGalt/w5sU.5NW9h53tOfet4VJR0rGvBIJZX.nfMTu', NULL, 'member', NULL, '2021-02-17 11:57:38', '2021-02-17 11:57:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id_detail`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kursuses`
--
ALTER TABLE `kursuses`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id_detail` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kursuses`
--
ALTER TABLE `kursuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
