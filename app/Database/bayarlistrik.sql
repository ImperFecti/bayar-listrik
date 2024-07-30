-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2024 at 03:31 PM
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
-- Database: `bayarlistrik`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', ''),
(2, 'pelanggan', '');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 4),
(2, 1),
(2, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 3),
(2, 15),
(2, 16),
(2, 17);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'adilm8909@gmail.com', 1, '2024-07-24 09:07:51', 1),
(2, '::1', 'apaanwoy45@gmail.com', 2, '2024-07-24 10:12:57', 1),
(3, '::1', 'adilm8909@gmail.com', 1, '2024-07-24 16:07:04', 1),
(4, '::1', 'adilm8909@gmail.com', 1, '2024-07-24 16:07:54', 1),
(5, '::1', 'admin@gmail.com', 3, '2024-07-24 16:08:45', 1),
(6, '::1', 'adilm8909@gmail.com', 1, '2024-07-24 16:29:10', 1),
(7, '::1', 'admin@gmail.com', 3, '2024-07-25 02:37:09', 1),
(8, '::1', 'adilm8909@gmail.com', 1, '2024-07-25 03:46:30', 1),
(9, '::1', 'adilm8909@gmail.com', 1, '2024-07-25 03:51:26', 1),
(10, '::1', 'admin@gmail.com', 3, '2024-07-25 04:25:35', 1),
(11, '::1', 'admin@gmail.com', 3, '2024-07-25 07:32:59', 1),
(12, '::1', 'adilm8909@gmail.com', 1, '2024-07-25 07:58:45', 1),
(13, '::1', 'admin@gmail.com', 3, '2024-07-25 08:16:16', 1),
(14, '::1', 'adilm8909@gmail.com', 1, '2024-07-25 08:27:26', 1),
(15, '::1', 'admin@gmail.com', 3, '2024-07-25 08:43:37', 1),
(16, '::1', 'admin@gmail.com', 3, '2024-07-25 10:43:33', 1),
(17, '::1', 'admin@gmail.com', 3, '2024-07-25 17:54:49', 1),
(18, '::1', 'adilm8909@gmail.com', 1, '2024-07-25 18:13:51', 1),
(19, '::1', 'admin@gmail.com', 3, '2024-07-25 18:14:17', 1),
(20, '::1', 'adilm8909@gmail.com', 1, '2024-07-25 18:14:32', 1),
(21, '::1', 'admin@gmail.com', 3, '2024-07-25 18:37:21', 1),
(22, '::1', 'apaanwoy45@gmail.com', 2, '2024-07-25 18:40:27', 1),
(23, '::1', 'apaanwoy45@gmail.com', 2, '2024-07-26 03:21:54', 1),
(24, '::1', 'apaanwoy45@gmail.com', 2, '2024-07-26 04:12:49', 1),
(25, '::1', 'adilm8909@gmail.com', 1, '2024-07-26 04:36:15', 1),
(26, '::1', 'adilm8909@gmail.com', 1, '2024-07-26 10:41:42', 1),
(27, '::1', 'admin@gmail.com', 3, '2024-07-26 12:02:06', 1),
(28, '::1', 'adilm8909@gmail.com', 1, '2024-07-26 17:44:30', 1),
(29, '::1', 'admin@gmail.com', 3, '2024-07-26 17:45:47', 1),
(30, '::1', 'adilm8909@gmail.com', 1, '2024-07-26 18:37:56', 1),
(31, '::1', 'admin@gmail.com', 3, '2024-07-26 21:38:53', 1),
(32, '::1', 'apaanwoy45@gmail.com', 2, '2024-07-27 06:26:28', 1),
(33, '::1', 'apaanwoy45@gmail.com', 2, '2024-07-27 08:09:05', 1),
(34, '::1', 'adilsputra', NULL, '2024-07-27 08:43:07', 0),
(35, '::1', 'adilsaputra', NULL, '2024-07-27 08:43:14', 0),
(36, '::1', 'apaanwoy45@gmail.com', 2, '2024-07-27 08:43:24', 1),
(37, '::1', 'admin@gmail.com', 3, '2024-07-27 10:40:30', 1),
(38, '::1', 'admin@gmail.com', 3, '2024-07-27 16:34:50', 1),
(39, '::1', 'test@gmail.com', 4, '2024-07-27 17:00:01', 1),
(40, '::1', 'admin@gmail.com', 3, '2024-07-27 17:01:08', 1),
(41, '::1', 'testing', NULL, '2024-07-27 17:02:50', 0),
(42, '::1', 'admin@gmail.com', 3, '2024-07-27 19:53:42', 1),
(43, '::1', 'admin@gmail.com', 3, '2024-07-27 20:35:57', 1),
(44, '::1', 'admin@gmail.com', 3, '2024-07-27 20:43:43', 1),
(45, '::1', 'admin@gmail.com', 3, '2024-07-27 20:47:16', 1),
(46, '::1', 'adilsputra', NULL, '2024-07-28 16:18:46', 0),
(47, '::1', 'adilsputra', NULL, '2024-07-28 16:18:58', 0),
(48, '::1', 'admin@gmail.com', 3, '2024-07-28 16:19:46', 1),
(49, '::1', 'admin@gmail.com', 3, '2024-07-29 01:13:07', 1),
(50, '::1', 'admin', NULL, '2024-07-29 01:15:26', 0),
(51, '::1', 'admin@gmail.com', 3, '2024-07-29 01:15:37', 1),
(52, '::1', 'adilsputra', NULL, '2024-07-29 02:11:19', 0),
(53, '::1', 'adilsputra', NULL, '2024-07-29 02:11:33', 0),
(54, '::1', 'admin', NULL, '2024-07-29 04:27:03', 0),
(55, '::1', 'admin', NULL, '2024-07-29 04:27:11', 0),
(56, '::1', 'admin@gmail.com', 3, '2024-07-29 04:27:19', 1),
(57, '::1', 'adilsputra', NULL, '2024-07-29 05:01:23', 0),
(58, '::1', 'Imperfecti', NULL, '2024-07-29 05:01:44', 0),
(59, '::1', 'testing@gmail.com', 8, '2024-07-29 05:02:49', 1),
(60, '::1', 'admin', NULL, '2024-07-29 06:04:16', 0),
(61, '::1', 'admin@gmail.com', 3, '2024-07-29 06:05:04', 1),
(62, '::1', 'adilm8909@gmail.com', 12, '2024-07-29 09:44:50', 1),
(63, '::1', 'admin@gmail.com', 3, '2024-07-29 09:45:51', 1),
(64, '::1', 'adilsputra', NULL, '2024-07-30 01:24:10', 0),
(65, '::1', 'adilsputra', NULL, '2024-07-30 01:24:18', 0),
(66, '::1', 'adilsputra', NULL, '2024-07-30 01:24:37', 0),
(67, '::1', 'ImperFecti', NULL, '2024-07-30 01:25:02', 0),
(68, '::1', 'imperfecti', NULL, '2024-07-30 01:25:13', 0),
(69, '::1', 'admin', NULL, '2024-07-30 01:25:23', 0),
(70, '::1', 'admin', NULL, '2024-07-30 01:25:38', 0),
(71, '::1', 'admin@gmail.com', 3, '2024-07-30 01:25:46', 1),
(72, '::1', 'testing4@gmail.com', 16, '2024-07-30 02:06:36', 1),
(73, '::1', 'admin', NULL, '2024-07-30 02:13:17', 0),
(74, '::1', 'admin', NULL, '2024-07-30 02:13:25', 0),
(75, '::1', 'admin@gmail.com', 3, '2024-07-30 02:13:33', 1),
(76, '::1', 'testing4@gmail.com', 16, '2024-07-30 02:14:15', 1),
(77, '::1', 'testing4@gmail.com', 16, '2024-07-30 03:42:52', 1),
(78, '::1', 'admin', NULL, '2024-07-30 03:49:13', 0),
(79, '::1', 'admin@gmail.com', 3, '2024-07-30 03:49:28', 1),
(80, '::1', 'testing4@gmail.com', 16, '2024-07-30 03:58:37', 1),
(81, '::1', 'testing4@gmail.com', 16, '2024-07-30 10:02:04', 1),
(82, '::1', 'admin', NULL, '2024-07-30 10:09:27', 0),
(83, '::1', 'admin@gmail.com', 3, '2024-07-30 10:09:36', 1),
(84, '::1', 'testing4@gmail.com', 16, '2024-07-30 10:11:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'editprofilepelanggan', 'halaman ubah profile untuk pelanggan'),
(2, 'profilepelanggan', 'halaman akses informasi data pribadi pelanggan'),
(3, 'tagihanlistrik', 'data tagihan listrik pelanggan'),
(4, 'admin', 'halaman dashboard admin');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1721811976, 1),
(2, '2024-07-23-091210', 'App\\Database\\Migrations\\Customer', 'default', 'App', 1721811976, 1);

-- --------------------------------------------------------

--
-- Table structure for table `penggunaan`
--

CREATE TABLE `penggunaan` (
  `id` int(11) NOT NULL,
  `id_users` int(11) UNSIGNED NOT NULL,
  `bulan` text NOT NULL,
  `tahun` int(4) NOT NULL,
  `meter_awal` int(11) NOT NULL,
  `meter_akhir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penggunaan`
--

INSERT INTO `penggunaan` (`id`, `id_users`, `bulan`, `tahun`, `meter_awal`, `meter_akhir`) VALUES
(4, 16, 'Januari', 2024, 1200, 1300),
(5, 16, 'Februari', 2024, 1300, 1350);

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `id` int(11) NOT NULL,
  `golongan` varchar(10) NOT NULL,
  `daya` varchar(10) NOT NULL,
  `tarifperkwh` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`id`, `golongan`, `daya`, `tarifperkwh`) VALUES
(1, 'R2', '450VA', 750),
(2, 'R3', '450VA', 1000),
(3, 'R1', '450VA', 1000),
(4, 'R3', '900VA', 1400),
(5, 'R1', '900VA', 1500),
(6, 'R2', '900VA', 1500),
(7, 'R3', '1300VA', 1500),
(8, 'B1', '1500VA', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `namalengkap` varchar(100) DEFAULT NULL,
  `nomorhp` varchar(255) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nomorkwh` varchar(255) DEFAULT NULL,
  `id_tarif` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`, `namalengkap`, `nomorhp`, `alamat`, `nomorkwh`, `id_tarif`) VALUES
(3, 'admin@gmail.com', 'admin', '$2y$10$8H6c8qcVQ7Zq/pqSR7jWuu3vKVs39sbU4/dIfKFHkCeZ0h6ORP9Vy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-07-24 16:08:37', '2024-07-29 01:14:37', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'testing@gmail.com', 'testing', '$2y$10$f0tQaj8NGo7v8dHeSfaYh.DkV6Ze3gis73KKxWobMZIQe5R7SLkeG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-07-29 09:59:46', '2024-07-29 09:59:46', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'testing2@gmail.com', 'testing2', '$2y$10$CAwV3/uG.Rx1sFVEQRXOnObCr.iMIvU8r5Oeyt6Y4WEIBCwc7esQu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-07-30 01:43:11', '2024-07-30 01:43:11', NULL, '', '', '', NULL, NULL),
(15, 'testing3@gmail.com', 'testing3', '$2y$10$lUAnVWwcGRsyqRkpedjrJusY04Z2FB4ZTtezNjB3dXJbll53Z48Ki', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-07-30 02:02:06', '2024-07-30 02:02:06', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'testing4@gmail.com', 'testing4', '$2y$10$oHriPNLEuG1JQDpTQvErxOl9CPr9aczq4Tu9.jxF1YL5Rt9yi09a6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-07-30 02:02:57', '2024-07-30 13:23:10', NULL, 'test4', '0812812345', 'Jl. Pantai Sanur I No. 777', '1280938810', 5),
(17, 'testing5@gmail.com', 'testing5', '$2y$10$WsALXD3GogtQoy94AAJLJetaYTL0CSogD2HSdoRtk32VQBejh/NLe', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-07-30 03:55:09', '2024-07-30 03:55:09', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penggunaan`
--
ALTER TABLE `penggunaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penggunaan_id_user_foreign` (`id_users`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `tarif_id_foreign` (`id_tarif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penggunaan`
--
ALTER TABLE `penggunaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `penggunaan`
--
ALTER TABLE `penggunaan`
  ADD CONSTRAINT `penggunaan_id_user_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `tarif_id_foreign` FOREIGN KEY (`id_tarif`) REFERENCES `tarif` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
