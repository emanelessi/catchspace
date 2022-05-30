-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 10:57 AM
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
(115, '2014_10_10_190349_create_user_levels_table', 1),
(116, '2014_10_12_000000_create_users_table', 1),
(117, '2014_10_12_100000_create_password_resets_table', 1),
(118, '2019_08_19_000000_create_failed_jobs_table', 1),
(119, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(120, '2022_02_15_212053_create_addons_table', 1),
(121, '2022_02_15_212527_create_providers_table', 1),
(122, '2022_02_15_212539_create_work_space_types_table', 1),
(123, '2022_02_15_212618_create_work_spaces_table', 1),
(124, '2022_02_16_212015_create_work_space_addons_table', 1),
(125, '2022_02_17_211830_create_services_table', 1),
(126, '2022_02_17_211831_create_work_space_services_table', 1),
(127, '2022_02_17_211941_create_workers_table', 1),
(128, '2022_02_17_212113_create_rent_types_table', 1),
(129, '2022_02_17_212114_create_pricings_table', 1),
(130, '2022_02_17_212506_create_policies_table', 1),
(131, '2022_02_17_212549_create_attributes_table', 1),
(132, '2022_02_17_212550_create_provider_attributes_table', 1),
(133, '2022_02_19_185206_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`, `team_id`) VALUES
(9, 'App\\Models\\User', 1, 0),
(16, 'App\\Models\\Provider', 2, 0),
(19, 'App\\Models\\Provider', 2, 0),
(29, 'App\\Models\\Provider', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`, `team_id`) VALUES
(1, 'App\\Models\\Provider', 2, 0),
(2, 'App\\Models\\User', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dinashadiakeela@gmail.com', '$2y$10$BLDOcWq35dyROoCpyIA6m.BtMFJ1dkTUqkCZ5p5M4Q2wHTC02.hDG', '2022-02-24 19:58:00');

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
(1, 'user_management_access', 'web', '2022-02-24 07:23:00', '2022-02-24 07:23:00'),
(2, 'permission_create', 'web', '2022-02-24 07:23:00', '2022-02-24 07:23:00'),
(3, 'permission_edit', 'web', '2022-02-24 07:23:00', '2022-02-24 07:23:00'),
(4, 'permission_show', 'web', '2022-02-24 07:23:00', '2022-02-24 07:23:00'),
(5, 'permission_delete', 'web', '2022-02-24 07:23:00', '2022-02-24 07:23:00'),
(6, 'permission_access', 'web', '2022-02-24 07:23:00', '2022-02-24 07:23:00'),
(7, 'role_create', 'web', '2022-02-24 07:23:00', '2022-02-24 07:23:00'),
(8, 'role_edit', 'web', '2022-02-24 07:23:00', '2022-02-24 07:23:00'),
(9, 'role_show', 'web', '2022-02-24 07:23:00', '2022-02-24 07:23:00'),
(10, 'role_delete', 'web', '2022-02-24 07:23:00', '2022-02-24 07:23:00'),
(11, 'role_access', 'web', '2022-02-24 07:23:00', '2022-02-24 07:23:00'),
(12, 'provider_create', 'web', '2022-02-24 07:23:00', '2022-02-24 07:23:00'),
(13, 'provider_edit', 'web', '2022-02-24 07:23:00', '2022-02-24 07:23:00'),
(14, 'provider_show', 'web', '2022-02-24 07:23:00', '2022-02-24 07:23:00'),
(15, 'provider_delete', 'web', '2022-02-24 07:23:00', '2022-02-24 07:23:00'),
(16, 'provider_access', 'web', '2022-02-24 07:23:00', '2022-02-24 07:23:00'),
(17, 'workspace_create', 'web', '2022-02-24 07:23:01', '2022-02-24 07:23:01'),
(18, 'workspace_edit', 'web', '2022-02-24 07:23:01', '2022-02-24 07:23:01'),
(19, 'workspace_show', 'web', '2022-02-24 07:23:01', '2022-02-24 07:23:01'),
(20, 'workspace_delete', 'web', '2022-02-24 07:23:01', '2022-02-24 07:23:01'),
(21, 'workspace_access', 'web', '2022-02-24 07:23:01', '2022-02-24 07:23:01'),
(22, 'policies_create', 'web', '2022-02-24 07:23:01', '2022-02-24 07:23:01'),
(23, 'policies_edit', 'web', '2022-02-24 07:23:01', '2022-02-24 07:23:01'),
(24, 'policies_show', 'web', '2022-02-24 07:23:01', '2022-02-24 07:23:01'),
(25, 'policies_delete', 'web', '2022-02-24 07:23:01', '2022-02-24 07:23:01'),
(26, 'policies_access', 'web', '2022-02-24 07:23:01', '2022-02-24 07:23:01'),
(27, 'worker_create', 'web', '2022-02-24 07:23:01', '2022-02-24 07:23:01'),
(28, 'worker_edit', 'web', '2022-02-24 07:23:01', '2022-02-24 07:23:01'),
(29, 'worker_show', 'web', '2022-02-24 07:23:01', '2022-02-24 07:23:01'),
(30, 'worker_delete', 'web', '2022-02-24 07:23:01', '2022-02-24 07:23:01'),
(31, 'worker_access', 'web', '2022-02-24 07:23:01', '2022-02-24 07:23:01');

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
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `name`, `owner_name`, `address`, `logo`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'provider name', 'owner', 'Gaza', 'logo', 6, NULL, '2022-02-24 07:23:02', '2022-02-24 07:23:02'),
(2, 'kj', 'Dina Akila', 'Gaza, Gaza', 'providers/dCx4ceAYzY6Ex2RXPb0ycG7UMsgzobv5CrnQWn6B.jpg', 10, NULL, '2022-02-24 21:09:48', '2022-02-24 21:09:48'),
(3, 'gfkxyfk', 'Dina Akila', 'Gaza, Gaza', 'providers/7wrw62pAXJY9Ef98NqXX8dyWeiGlaPpfIKP1J2xg.jpg', 11, NULL, '2022-02-24 21:13:31', '2022-02-24 21:13:31'),
(4, 'ytktuk', 'Dina Akila', 'Gaza, Gaza', 'providers/fJfSxmnTKWP4KoqAVAieekMQ6uqCF2PCTNQDb1pt.jpg', 12, NULL, '2022-02-25 19:45:26', '2022-02-25 19:45:26'),
(5, 'ytktuk', 'Dina Akila', 'Gaza, Gaza', 'providers/K9r69UMkSqr7j3VUApCy6T0k82uzPU3uDaoQV54Y.png', 14, NULL, '2022-02-25 19:50:15', '2022-02-25 19:50:15'),
(6, 'buiov', 'hi', 'Gaza, Gaza', 'providers/J6KNTtcvZJkB9UNI8B5Vd2pMYNbYUzAwSF6eAOOq.jpg', 16, NULL, '2022-02-25 19:53:13', '2022-02-25 19:53:13'),
(7, 'kkkk', 'Dina Akila', 'Gaza, Gaza', 'providers/kGAcCMoaZ3vGHgQzAf2wI9DBToPFt1l8uWqKrblH.jpg', 17, NULL, '2022-02-27 04:49:43', '2022-02-27 04:49:43');

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

CREATE TABLE `rent_types` (
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
  `team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `team_id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Provider', 'web', '2022-02-24 07:23:01', '2022-02-24 07:23:01'),
(2, NULL, 'Super Admin', 'web', '2022-02-24 07:23:01', '2022-02-24 07:23:01');

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
(12, 2),
(13, 1),
(13, 2),
(14, 2),
(15, 2),
(16, 1),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(20, 2),
(21, 1),
(21, 2),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(29, 2),
(30, 1),
(31, 1),
(31, 2);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `email_verified_at`, `password`, `phone`, `type`, `user_level_id`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$zQujCPbuII9kpCvjsT1BCulvco3JD9PHsXYhkti/04KvemptV1wg6', 567013637, 'admin', 1, NULL, NULL, '2022-02-24 07:23:02', '2022-02-24 07:23:02'),
(2, 'Dina Akila', 'dinashadiakeela@gmail.com', NULL, '$2y$10$gap8pN9Damic3XekPXDfqusJa2zO7M4TNJwv.WmAIiuW5c6gXd1IG', 597505581, 'admin', 1, NULL, NULL, '2022-02-24 07:23:02', '2022-02-24 07:23:02'),
(3, 'Eman Elessi', 'hanieman86@gmail.com', NULL, '$2y$10$GmaFzcAmoaXsoasmLz2.XOU6/yMNte/CpxQhjGZjZSiYqfImprDUu', 599174952, 'admin', 1, NULL, NULL, '2022-02-24 07:23:02', '2022-02-24 07:23:02'),
(4, 'Jumana Shawwa', 'jumanashawwa1@gmail.com', NULL, '$2y$10$0cg8fVou9jT8WKvFOA32Qup13Lggv9YVFbDRn3PEa5w7Drw4Va3Gm', 595866320, 'admin', 1, NULL, NULL, '2022-02-24 07:23:02', '2022-02-24 07:23:02'),
(5, 'Dalia Marouf ', 'dalia.5.6.2000@gmail.com', NULL, '$2y$10$wvSx2ZpBUQJKp/Oq.FRILe5HygcOv41ToxBOeH3F4E3L34JKxuuKe', 592072589, 'admin', 1, NULL, NULL, '2022-02-24 07:23:02', '2022-02-24 07:23:02'),
(6, 'Provider', 'provider@gmail.com', NULL, '$2y$10$htZ7YzzVosjSHSLhbAtxd.xY5YHOxh7wsFSp3ZEBOYW6q/zu3ol.q', 567013637, 'provider', 2, NULL, NULL, '2022-02-24 07:23:02', '2022-02-24 07:23:02'),
(7, 'Dina Akila', 'kk@gmail.com', NULL, '$2y$10$.G/hkj35B7oqPOVVbg4kNejQ6B1iSzxfRnfJ9ze28T2pD2oIM1Kc6', 597505581, 'provider', 2, NULL, NULL, '2022-02-24 21:04:43', '2022-02-24 21:04:43'),
(8, 'Dina Akila', 'kj@gmail.com', NULL, '$2y$10$710oJ1QMDLHEsgWPWDM9xuKUkiH0UU1MkBxVENVCuUXys8KMEsBr.', 597505581, 'provider', 2, NULL, NULL, '2022-02-24 21:05:42', '2022-02-24 21:05:42'),
(9, 'Dina Akila', 'hglcgj@gmail.com', NULL, '$2y$10$phnVFjap5o/euQ02Nidpvuu8Pj6NXHHSLOGEIuHy6gIwC/IvlJAfC', 597505581, 'provider', 2, NULL, NULL, '2022-02-24 21:07:34', '2022-02-24 21:07:34'),
(10, 'Dina Akila', 'xgfkyhk@gmail.com', NULL, '$2y$10$oABs3zejpq4t2JTDTC45jOvlP9Ne0b0T9gjwbweJGQECCnoUyqq2C', 597505581, 'provider', 2, NULL, NULL, '2022-02-24 21:09:48', '2022-02-24 21:09:48'),
(11, 'Dina Akila', 'xyflul@gmail.com', NULL, '$2y$10$oYGNyGqTDX/0dlgdvP9Vqukq64EePcjiMyQtrQvlzd9FVY7fms8w.', 597505581, 'provider', 2, NULL, NULL, '2022-02-24 21:13:31', '2022-02-24 21:13:31'),
(12, 'Dina Akila', 'gg@gmail.com', NULL, '$2y$10$4CB8eejir/aEUqjFn8VxyeRX6o1XEr0Z6O0GnfQGWwwIg71Vv1k5i', 597505581, 'provider', 2, NULL, NULL, '2022-02-25 19:45:25', '2022-02-25 19:45:25'),
(13, 'Dina Akila', 'jj@gmail.com', NULL, '$2y$10$MN0AgMjDZHcSBvqzYyJIGOIqFtdAkzwZNln.X6qQ2V34tvqOCQfvS', 597505581, 'provider', 2, NULL, NULL, '2022-02-25 19:48:51', '2022-02-25 19:48:51'),
(14, 'Dina Akila', 'r@gmail.com', NULL, '$2y$10$b./pk2xVgn1s4xgdakI.PunfFiYPcqcArOFrWuqjUo6zjTDbh2bUa', 597505581, 'provider', 2, NULL, NULL, '2022-02-25 19:50:15', '2022-02-25 19:50:15'),
(15, 'hi', 'hi@gmail.com', NULL, '$2y$10$InvLXb/9tEp0BLb5xrhAOOS/FJ38hJ3CFD4fgoS/I/bJBHPOH5uTW', 597505581, 'provider', 2, NULL, NULL, '2022-02-25 19:52:26', '2022-02-25 19:52:26'),
(16, 'hi', 'hhh@gmail.com', NULL, '$2y$10$KaVDnRdRofZmwmVzxPkAFOO7AGYBn4hgX.h3R4g4ipwxLbJWkAAOi', 597505581, 'provider', 2, NULL, NULL, '2022-02-25 19:53:13', '2022-02-25 19:53:13'),
(17, 'Dina Akila', 'kk@h.com', NULL, '$2y$10$j5Dhe6t37Vr1rnxBsEhm7epRu8x/G/Zyv2wDdnjWvQAe8O8ArmgOS', 597505581, 'provider', 2, NULL, NULL, '2022-02-27 04:49:43', '2022-02-27 04:49:43');

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
(1, 'Admin', NULL, '2022-02-24 07:23:01', '2022-02-24 07:23:01'),
(2, 'Provider', NULL, '2022-02-24 07:23:02', '2022-02-24 07:23:02');

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

--
-- Dumping data for table `work_spaces`
--

INSERT INTO `work_spaces` (`id`, `capacity`, `work_space_type_id`, `provider_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 7, 1, 1, NULL, NULL, '2022-02-27 06:48:10');

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
-- Dumping data for table `work_space_types`
--

INSERT INTO `work_space_types` (`id`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'closed room', NULL, NULL, NULL);

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
  ADD PRIMARY KEY (`team_id`,`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  ADD KEY `model_has_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `model_has_permissions_team_foreign_key_index` (`team_id`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`team_id`,`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  ADD KEY `model_has_roles_role_id_foreign` (`role_id`),
  ADD KEY `model_has_roles_team_foreign_key_index` (`team_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `providers_user_id_foreign` (`user_id`);

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
  ADD UNIQUE KEY `roles_team_id_name_guard_name_unique` (`team_id`,`name`,`guard_name`),
  ADD KEY `roles_team_foreign_key_index` (`team_id`);

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
  ADD KEY `users_user_level_id_foreign` (`user_level_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `providers`
--
ALTER TABLE `providers`
  ADD CONSTRAINT `providers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `provider_attributes`
--
ALTER TABLE `provider_attributes`
  ADD CONSTRAINT `provider_attributes_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `provider_attributes_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE;

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
