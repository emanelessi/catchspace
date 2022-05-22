-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 09:12 PM
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

--
-- Dumping data for table `addons`
--

INSERT INTO `addons` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'White Board', NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02');

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

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Overview', NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02'),
(2, 'Starting at', NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02'),
(3, 'Opining Hours', NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
(49, '2014_10_10_190349_create_user_levels_table', 1),
(50, '2014_10_11_212527_create_providers_table', 1),
(51, '2014_10_12_000000_create_users_table', 1),
(52, '2014_10_12_100000_create_password_resets_table', 1),
(53, '2019_08_19_000000_create_failed_jobs_table', 1),
(54, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(55, '2022_02_15_212053_create_addons_table', 1),
(56, '2022_02_15_212539_create_work_space_types_table', 1),
(57, '2022_02_15_212618_create_work_spaces_table', 1),
(58, '2022_02_16_212015_create_work_space_addons_table', 1),
(59, '2022_02_17_211830_create_services_table', 1),
(60, '2022_02_17_211831_create_work_space_services_table', 1),
(61, '2022_02_17_211941_create_workers_table', 1),
(62, '2022_02_17_212113_create_rent_types_table', 1),
(63, '2022_02_17_212114_create_pricings_table', 1),
(64, '2022_02_17_212506_create_policies_table', 1),
(65, '2022_02_17_212549_create_attributes_table', 1),
(66, '2022_02_19_185206_create_permission_tables', 1),
(67, '2022_03_01_072920_add_provider_col_id', 1),
(68, '2022_03_22_164158_create_ratings_table', 1),
(69, '2022_03_22_164302_create_work_space_ratings_table', 1),
(70, '2022_03_22_182417_create_work_space_attributes_table', 1),
(71, '2022_03_26_131433_create_contact_us_table', 1),
(72, '2022_03_27_140311_create_worker_work_spaces_table', 1);

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
(1, 'user_management_access', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(2, 'permission_create', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(3, 'permission_edit', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(4, 'permission_show', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(5, 'permission_delete', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(6, 'permission_access', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(7, 'role_create', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(8, 'role_show', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(9, 'role_delete', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(10, 'role_access', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(11, 'provider_create', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(12, 'provider_edit', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(13, 'provider_show', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(14, 'provider_delete', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(15, 'provider_access', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(16, 'workspace_create', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(17, 'workspace_edit', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(18, 'workspace_show', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(19, 'workspace_delete', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(20, 'workspace_access', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(21, 'policies_create', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(22, 'policies_edit', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(23, 'policies_show', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(24, 'policies_delete', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(25, 'policies_access', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(26, 'worker_create', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(27, 'worker_edit', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(28, 'worker_show', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(29, 'worker_delete', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(30, 'worker_access', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(31, 'user_edit', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(32, 'user_delete', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(33, 'user_show', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(34, 'user_create', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(35, 'services_show', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(36, 'pricing_show', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(37, 'addons_show', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(38, 'services_access', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(39, 'pricing_access', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(40, 'addons_access', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(41, 'reservations_access', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(42, 'reservations_show', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(43, 'services_create', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(44, 'services_delete', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(45, 'services_edit', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(46, 'pricing_create', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(47, 'pricing_delete', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(48, 'pricing_edit', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(49, 'addons_create', 'web', '2022-05-22 16:01:00', '2022-05-22 16:01:00'),
(50, 'addons_delete', 'web', '2022-05-22 16:01:01', '2022-05-22 16:01:01'),
(51, 'addons_edit', 'web', '2022-05-22 16:01:01', '2022-05-22 16:01:01'),
(52, 'rate_access', 'web', '2022-05-22 16:01:01', '2022-05-22 16:01:01'),
(53, 'rate_show', 'web', '2022-05-22 16:01:01', '2022-05-22 16:01:01');

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
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `title`, `body`, `provider_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Code of conduct', 'A code of conduct is a common policy found in most businesses. It is a set of rules that companies expect employees to follow. The rules establish the expected behavioural standards for all employees. A code of conduct policy may cover the following: Attendance and absence,Employee behaviour', 1, NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02'),
(2, 'Recruitment policy', 'A recruitment policy outlines how the company hires new people. It outlines the hiring process and aims to promote consistency in the recruitment process. Its an important document for employees to access. It may cover the following things:Internal and external hiring preferences,Equal opportunity and anti-discrimination', 1, NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02'),
(3, 'Internet and email policy', 'This policy outlines how companies expect employees to use their email accounts and the internet. It helps to save time and promote efficiency. It also sets up procedures to minimise risk, which is especially important for secure networks. An internet and email policy may cover the following things:Internet access rules,Appropriate online usage', 2, NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02');

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

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `price`, `work_space_id`, `rent_type_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 100, 1, 1, NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02'),
(2, 500, 1, 2, NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `name`, `owner_name`, `address`, `phone`, `logo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'provider name', 'owner', 'Gaza', 597505581, 'providers/kGAcCMoaZ3vGHgQzAf2wI9DBToPFt1l8uWqKrblH.jpg', NULL, '2022-05-22 16:00:59', '2022-05-22 16:00:59'),
(2, 'Test provider name', 'owner', 'Gaza', 591505511, 'providers/J6KNTtcvZJkB9UNI8B5Vd2pMYNbYUzAwSF6eAOOq.jpg', NULL, '2022-05-22 16:00:59', '2022-05-22 16:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` double NOT NULL,
  `mac_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_back` tinyint(1) NOT NULL,
  `tips` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_space_id` bigint(20) UNSIGNED NOT NULL,
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

--
-- Dumping data for table `rent_types`
--

INSERT INTO `rent_types` (`id`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Monthly', NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02'),
(2, 'by the hour', NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02');

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
(1, 'Provider', 2, 1, 'web', '2022-05-22 16:01:01', '2022-05-22 16:01:01', NULL),
(2, 'Admin', 1, NULL, 'web', '2022-05-22 16:01:01', '2022-05-22 16:01:01', NULL),
(3, 'Test Provider', 2, 2, 'web', '2022-05-22 16:01:02', '2022-05-22 16:01:02', NULL);

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
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 2),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 2),
(53, 1);

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

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '5G WiFi', NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02');

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
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$cpPydev5C8y8ALpqDYXAnOSS0X8lPdasC1LJ/VNoC1Fg/td3G0Fjm', 567013637, 'admin', 1, NULL, NULL, NULL, '2022-05-22 16:00:59', '2022-05-22 16:00:59'),
(2, 'Dina Akila', 'dinashadiakeela@gmail.com', NULL, '$2y$10$1smbJBJGV6q9HP8KRMV8OOIVZAydRSXy0PrCDifzoKkqWT8KF3Md6', 597505581, 'admin', 1, NULL, NULL, NULL, '2022-05-22 16:00:59', '2022-05-22 16:00:59'),
(3, 'Eman Elessi', 'hanieman86@gmail.com', NULL, '$2y$10$d9/DaEu3uchApwhMuBxSCeOdu/tjcdC6is8.ueCIhiLGzOT6ajt46', 599174952, 'admin', 1, NULL, NULL, NULL, '2022-05-22 16:00:59', '2022-05-22 16:00:59'),
(4, 'Jumana Shawwa', 'jumanashawwa1@gmail.com', NULL, '$2y$10$odmJSlO6AUxm7z9dR7Q2MOeKaNzJhviw8CHZjMwM9VYvG6XImZDg2', 595866320, 'admin', 1, NULL, NULL, NULL, '2022-05-22 16:00:59', '2022-05-22 16:00:59'),
(5, 'Dalia Marouf', 'dalia.5.6.2000@gmail.com', NULL, '$2y$10$z9PRTr6X59Tnz.rAHy.r3emSyqPevhqOkk3EJFG0Nq2GTqdCxFTJ.', 592072589, 'admin', 1, NULL, NULL, NULL, '2022-05-22 16:00:59', '2022-05-22 16:00:59'),
(6, 'Provider', 'provider@gmail.com', NULL, '$2y$10$JX8ll41xx.BnUxJisKMFJ.JcyqvTLkGLJn8cA7oewIN2rugvkhtoW', 567013637, 'provider', 2, 1, NULL, NULL, '2022-05-22 16:00:59', '2022-05-22 16:00:59'),
(7, 'Test Provider', 'testprovider@gmail.com', NULL, '$2y$10$1V5KZz4ZxvkWUfg0R2gydOt/t1muj2puQKZOvQzUVYy5XMyXIwIN2', 599717329, 'provider', 2, 2, NULL, NULL, '2022-05-22 16:01:00', '2022-05-22 16:01:00');

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
(1, 'Admin', NULL, '2022-05-22 16:00:59', '2022-05-22 16:00:59'),
(2, 'Provider', NULL, '2022-05-22 16:00:59', '2022-05-22 16:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('team','individual') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `name`, `email`, `password`, `job_title`, `avatar`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'John', 'John@gmail.com', '$2y$10$RW6Y57AOGb/6nNzPODfsTu38Io6ZqRfGeP5AqsBdJr3BOgGcrR0n6', 'Developer', '/providers/kGAcCMoaZ3vGHgQzAf2wI9DBToPFt1l8uWqKrblH.jpg', 'team', NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02'),
(2, 'Yara', 'Yara@gmail.com', '$2y$10$EOexFVoMGYTv44pLmZ6XG.Bm7odNw9UV5t/JN2D3mhKXrWw1914zy', 'Designer', '/providers/J6KNTtcvZJkB9UNI8B5Vd2pMYNbYUzAwSF6eAOOq.jpg', 'individual', NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `worker_work_spaces`
--

CREATE TABLE `worker_work_spaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `worker_id` bigint(20) UNSIGNED NOT NULL,
  `work_space_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `worker_work_spaces`
--

INSERT INTO `worker_work_spaces` (`id`, `worker_id`, `work_space_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02'),
(2, 2, 2, NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02'),
(3, 2, 1, NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `work_spaces`
--

CREATE TABLE `work_spaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `work_spaces` (`id`, `name`, `image`, `location`, `capacity`, `work_space_type_id`, `provider_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Tools', 'workspaces/Tools.png', 'Gaza, Remal', 9, 1, 1, NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02'),
(2, 'Lego', 'workspaces/space3.png', 'Gaza, Universities, Lego Building', 3, 3, 2, NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02');

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

--
-- Dumping data for table `work_space_addons`
--

INSERT INTO `work_space_addons` (`id`, `value`, `work_space_id`, `addon_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '10', 1, 1, NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `work_space_attributes`
--

CREATE TABLE `work_space_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_space_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_space_attributes`
--

INSERT INTO `work_space_attributes` (`id`, `value`, `work_space_id`, `attribute_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'gives your business the commercial office space solutions it needs—minus the headaches of upfront capital and lengthy leases. That’s why more than 50% of Fortune 100 companies are WeWork members.', 1, 1, NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02'),
(2, '200', 1, 2, NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02'),
(3, 'Mon-Fri\n09:00 Am - 07:00 Pm', 1, 3, NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `work_space_ratings`
--

CREATE TABLE `work_space_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `work_space_id` bigint(20) UNSIGNED NOT NULL,
  `rate_avg` double NOT NULL,
  `rate_count` double NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_space_ratings`
--

INSERT INTO `work_space_ratings` (`id`, `work_space_id`, `rate_avg`, `rate_count`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 0, NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02'),
(2, 2, 0, 0, NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02');

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

--
-- Dumping data for table `work_space_services`
--

INSERT INTO `work_space_services` (`id`, `value`, `work_space_id`, `service_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '10', 1, 1, NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02');

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
(1, 'Office in a common room', NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02'),
(2, 'closed room', NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02'),
(3, 'Meetings room', NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02'),
(4, 'Skype room', NULL, '2022-05-22 16:01:02', '2022-05-22 16:01:02');

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
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
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
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_work_space_id_foreign` (`work_space_id`);

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
  ADD UNIQUE KEY `workers_email_unique` (`email`);

--
-- Indexes for table `worker_work_spaces`
--
ALTER TABLE `worker_work_spaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `worker_work_spaces_worker_id_foreign` (`worker_id`),
  ADD KEY `worker_work_spaces_work_space_id_foreign` (`work_space_id`);

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
-- Indexes for table `work_space_attributes`
--
ALTER TABLE `work_space_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_space_attributes_work_space_id_foreign` (`work_space_id`),
  ADD KEY `work_space_attributes_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `work_space_ratings`
--
ALTER TABLE `work_space_ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_space_ratings_work_space_id_foreign` (`work_space_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rent_types`
--
ALTER TABLE `rent_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_levels`
--
ALTER TABLE `user_levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `worker_work_spaces`
--
ALTER TABLE `worker_work_spaces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work_spaces`
--
ALTER TABLE `work_spaces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work_space_addons`
--
ALTER TABLE `work_space_addons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `work_space_attributes`
--
ALTER TABLE `work_space_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work_space_ratings`
--
ALTER TABLE `work_space_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work_space_services`
--
ALTER TABLE `work_space_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `work_space_types`
--
ALTER TABLE `work_space_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_work_space_id_foreign` FOREIGN KEY (`work_space_id`) REFERENCES `work_spaces` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `worker_work_spaces`
--
ALTER TABLE `worker_work_spaces`
  ADD CONSTRAINT `worker_work_spaces_work_space_id_foreign` FOREIGN KEY (`work_space_id`) REFERENCES `work_spaces` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `worker_work_spaces_worker_id_foreign` FOREIGN KEY (`worker_id`) REFERENCES `workers` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `work_space_attributes`
--
ALTER TABLE `work_space_attributes`
  ADD CONSTRAINT `work_space_attributes_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `work_space_attributes_work_space_id_foreign` FOREIGN KEY (`work_space_id`) REFERENCES `work_spaces` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `work_space_ratings`
--
ALTER TABLE `work_space_ratings`
  ADD CONSTRAINT `work_space_ratings_work_space_id_foreign` FOREIGN KEY (`work_space_id`) REFERENCES `work_spaces` (`id`) ON DELETE CASCADE;

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
