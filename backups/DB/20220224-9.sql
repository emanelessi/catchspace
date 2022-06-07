-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 10:44 PM
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
-- Database: `catchspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(421, '2014_10_10_190349_create_user_levels_table', 1),
(422, '2014_10_11_212527_create_providers_table', 1),
(423, '2014_10_12_000000_create_users_table', 1),
(424, '2014_10_12_100000_create_password_resets_table', 1),
(425, '2019_08_19_000000_create_failed_jobs_table', 1),
(426, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(427, '2022_02_15_212053_create_addons_table', 1),
(428, '2022_02_15_212539_create_work_space_types_table', 1),
(429, '2022_02_15_212618_create_work_spaces_table', 1),
(430, '2022_02_16_212015_create_work_space_addons_table', 1),
(431, '2022_02_17_211830_create_services_table', 1),
(432, '2022_02_17_211831_create_work_space_services_table', 1),
(433, '2022_02_17_211941_create_workers_table', 1),
(434, '2022_02_17_212113_create_rent_types_table', 1),
(435, '2022_02_17_212114_create_pricings_table', 1),
(436, '2022_02_17_212506_create_policies_table', 1),
(437, '2022_02_17_212549_create_attributes_table', 1),
(438, '2022_02_17_212550_create_provider_attributes_table', 1),
(439, '2022_02_19_185206_create_permission_tables', 1),
(440, '2022_03_01_072920_add_provider_col_id', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user_management_access', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(2, 'permission_create', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(3, 'permission_edit', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(4, 'permission_show', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(5, 'permission_delete', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(6, 'permission_access', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(7, 'role_create', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(8, 'role_show', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(9, 'role_delete', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(10, 'role_access', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(11, 'provider_create', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(12, 'provider_edit', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(13, 'provider_show', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(14, 'provider_delete', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(15, 'provider_access', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(16, 'workspace_create', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(17, 'workspace_edit', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(18, 'workspace_show', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(19, 'workspace_delete', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(20, 'workspace_access', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(21, 'policies_create', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(22, 'policies_edit', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(23, 'policies_show', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(24, 'policies_delete', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(25, 'policies_access', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(26, 'worker_create', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(27, 'worker_edit', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(28, 'worker_show', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(29, 'worker_delete', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(30, 'worker_access', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(31, 'user_edit', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(32, 'user_delete', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(33, 'user_show', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(34, 'user_create', 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `work_space_id` bigint(20) UNSIGNED NOT NULL,
  `rent_type_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `name`, `owner_name`, `address`, `logo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'provider name', 'owner', 'Gaza', '/providers/kGAcCMoaZ3vGHgQzAf2wI9DBToPFt1l8uWqKrblH.jpg', NULL, '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(2, 'Test provider name', 'owner', 'Gaza', '/providers/J6KNTtcvZJkB9UNI8B5Vd2pMYNbYUzAwSF6eAOOq.jpg', NULL, '2022-03-06 19:42:57', '2022-03-06 19:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `provider_attributes`
--

CREATE TABLE `provider_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rent_types`
--

CREATE TABLE
    `rent_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('Monthly','by the hour') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_level_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `user_level_id`, `provider_id`, `guard_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Provider', 2, 1, 'web', '2022-03-06 19:42:57', '2022-03-06 19:42:57', NULL),
(2, 'Admin', 1, NULL, 'web', '2022-03-06 19:42:58', '2022-03-06 19:42:58', NULL),
(3, 'Test Provider', 2, 2, 'web', '2022-03-06 19:42:58', '2022-03-06 19:42:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 1),
(12, 2),
(13, 2),
(14, 2),
(15, 1),
(16, 1),
(16, 2),
(16, 3),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(18, 3),
(19, 1),
(19, 2),
(19, 3),
(20, 1),
(20, 2),
(20, 3),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(28, 2),
(29, 1),
(30, 1),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `type` enum('admin','provider') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_level_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `email_verified_at`, `password`, `phone`, `type`, `user_level_id`, `provider_id`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$hc7o/Fszz/yR4Ji08Rsm..0DuO0gLBoO.cnOXCIWR2EUtNDJgjIGm', 567013637, 'admin', 1, NULL, NULL, NULL, '2022-03-06 19:42:56', '2022-03-06 19:42:56'),
(2, 'Dina Akila', 'dinashadiakeela@gmail.com', NULL, '$2y$10$fFXqL1v6ryXEM/PAdUK6.eLMwl3MXsDNc4wlf2HzfiYaPggI9seLC', 597505581, 'admin', 1, NULL, NULL, NULL, '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(3, 'Eman Elessi', 'hanieman86@gmail.com', NULL, '$2y$10$jo./AATN1P5uOoF9Tyz4y.WDOF2Slbx3nQEQzJfHAuIdK/0d5nVMm', 599174952, 'admin', 1, NULL, NULL, NULL, '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(4, 'Jumana Shawwa', 'jumanashawwa1@gmail.com', NULL, '$2y$10$YBTS1aSlxyC9bHsaMwTHm.lxSFWwcPTNfXIHkZQIxv6tQ5n0nsyrS', 595866320, 'admin', 1, NULL, NULL, NULL, '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(5, 'Dalia Marouf', 'dalia.5.6.2000@gmail.com', NULL, '$2y$10$Bdc.wceH5bH0lQaIQTlOxOhxjehyevQWMnBV/cLQ8b8pWpX9WAD1W', 592072589, 'admin', 1, NULL, NULL, NULL, '2022-03-06 19:42:57', '2022-03-06 19:42:57'),
(6, 'Provider', 'provider@gmail.com', NULL, '$2y$10$LR2KLQVHA9H9CCSZccF1MewIRbXm0/r8dh7usDmTsIq4XZHY9lfLi', 567013637, 'provider', 2, 1, NULL, NULL, '2022-03-06 19:42:57', '2022-03-06 19:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `user_levels`
--

CREATE TABLE `user_levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_levels`
--

INSERT INTO `user_levels` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, '2022-03-06 19:42:56', '2022-03-06 19:42:56'),
(2, 'Provider', NULL, '2022-03-06 19:42:57', '2022-03-06 19:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `you_did` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_space_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `work_spaces`
--

CREATE TABLE `work_spaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `capacity` int(11) NOT NULL,
  `work_space_type_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `work_space_addons`
--

CREATE TABLE `work_space_addons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_space_id` bigint(20) UNSIGNED NOT NULL,
  `addon_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `work_space_services`
--

CREATE TABLE `work_space_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_space_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `work_space_types`
--

CREATE TABLE `work_space_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('Office in a common room','closed room','Meetings room','Skype room') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `policies_provider_id_foreign` (`provider_id`);

--
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pricings_work_space_id_foreign` (`work_space_id`),
  ADD KEY `pricings_rent_type_id_foreign` (`rent_type_id`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provider_attributes`
--
ALTER TABLE `provider_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provider_attributes_provider_id_foreign` (`provider_id`),
  ADD KEY `provider_attributes_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `rent_types`
--
ALTER TABLE `rent_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`),
  ADD KEY `roles_provider_id_foreign` (`provider_id`),
  ADD KEY `roles_user_level_id_foreign` (`user_level_id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_user_level_id_foreign` (`user_level_id`),
  ADD KEY `users_provider_id_foreign` (`provider_id`);

--
-- Indexes for table `user_levels`
--
ALTER TABLE `user_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workers_work_space_id_foreign` (`work_space_id`);

--
-- Indexes for table `work_spaces`
--
ALTER TABLE `work_spaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_spaces_work_space_type_id_foreign` (`work_space_type_id`),
  ADD KEY `work_spaces_provider_id_foreign` (`provider_id`);

--
-- Indexes for table `work_space_addons`
--
ALTER TABLE `work_space_addons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_space_addons_work_space_id_foreign` (`work_space_id`),
  ADD KEY `work_space_addons_addon_id_foreign` (`addon_id`);

--
-- Indexes for table `work_space_services`
--
ALTER TABLE `work_space_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_space_services_work_space_id_foreign` (`work_space_id`),
  ADD KEY `work_space_services_service_id_foreign` (`service_id`);

--
-- Indexes for table `work_space_types`
--
ALTER TABLE `work_space_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addons`
--
ALTER TABLE `addons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `provider_attributes`
--
ALTER TABLE `provider_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rent_types`
--
ALTER TABLE `rent_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_levels`
--
ALTER TABLE `user_levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_spaces`
--
ALTER TABLE `work_spaces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_space_addons`
--
ALTER TABLE `work_space_addons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_space_services`
--
ALTER TABLE `work_space_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_space_types`
--
ALTER TABLE `work_space_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `policies`
--
ALTER TABLE `policies`
  ADD CONSTRAINT `policies_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pricings`
--
ALTER TABLE `pricings`
  ADD CONSTRAINT `pricings_rent_type_id_foreign` FOREIGN KEY (`rent_type_id`) REFERENCES `rent_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pricings_work_space_id_foreign` FOREIGN KEY (`work_space_id`) REFERENCES `work_spaces` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `provider_attributes`
--
ALTER TABLE `provider_attributes`
  ADD CONSTRAINT `provider_attributes_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `provider_attributes_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_user_level_id_foreign` FOREIGN KEY (`user_level_id`) REFERENCES `user_levels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_user_level_id_foreign` FOREIGN KEY (`user_level_id`) REFERENCES `user_levels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `workers`
--
ALTER TABLE `workers`
  ADD CONSTRAINT `workers_work_space_id_foreign` FOREIGN KEY (`work_space_id`) REFERENCES `work_spaces` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `work_spaces`
--
ALTER TABLE `work_spaces`
  ADD CONSTRAINT `work_spaces_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `work_spaces_work_space_type_id_foreign` FOREIGN KEY (`work_space_type_id`) REFERENCES `work_space_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `work_space_addons`
--
ALTER TABLE `work_space_addons`
  ADD CONSTRAINT `work_space_addons_addon_id_foreign` FOREIGN KEY (`addon_id`) REFERENCES `addons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `work_space_addons_work_space_id_foreign` FOREIGN KEY (`work_space_id`) REFERENCES `work_spaces` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `work_space_services`
--
ALTER TABLE `work_space_services`
  ADD CONSTRAINT `work_space_services_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `work_space_services_work_space_id_foreign` FOREIGN KEY (`work_space_id`) REFERENCES `work_spaces` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
