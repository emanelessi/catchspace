-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 05:25 PM
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
(1, 'White Board', NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10');

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
(116, '2014_10_11_212527_create_providers_table', 1),
(117, '2014_10_12_000000_create_users_table', 1),
(118, '2014_10_12_100000_create_password_resets_table', 1),
(119, '2019_08_19_000000_create_failed_jobs_table', 1),
(120, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(121, '2022_02_15_212053_create_addons_table', 1),
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
(133, '2022_02_19_185206_create_permission_tables', 1),
(134, '2022_03_01_072920_add_provider_col_id', 1),
(135, '2022_03_22_164158_create_ratings_table', 1),
(136, '2022_03_22_164302_create_work_space_ratings_table', 1),
(137, '2022_03_27_140311_create_worker_work_spaces_table', 1);

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
(1, 'user_management_access', 'web', '2022-04-03 11:07:06', '2022-04-03 11:07:06'),
(2, 'permission_create', 'web', '2022-04-03 11:07:06', '2022-04-03 11:07:06'),
(3, 'permission_edit', 'web', '2022-04-03 11:07:06', '2022-04-03 11:07:06'),
(4, 'permission_show', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(5, 'permission_delete', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(6, 'permission_access', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(7, 'role_create', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(8, 'role_show', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(9, 'role_delete', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(10, 'role_access', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(11, 'provider_create', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(12, 'provider_edit', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(13, 'provider_show', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(14, 'provider_delete', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(15, 'provider_access', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(16, 'workspace_create', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(17, 'workspace_edit', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(18, 'workspace_show', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(19, 'workspace_delete', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(20, 'workspace_access', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(21, 'policies_create', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(22, 'policies_edit', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(23, 'policies_show', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(24, 'policies_delete', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(25, 'policies_access', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(26, 'worker_create', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(27, 'worker_edit', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(28, 'worker_show', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(29, 'worker_delete', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(30, 'worker_access', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(31, 'user_edit', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(32, 'user_delete', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(33, 'user_show', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(34, 'user_create', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(35, 'services_show', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(36, 'pricing_show', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(37, 'addons_show', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(38, 'services_access', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(39, 'pricing_access', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(40, 'addons_access', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(41, 'reservations_access', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(42, 'reservations_show', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(43, 'services_create', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(44, 'services_delete', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(45, 'services_edit', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(46, 'pricing_create', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(47, 'pricing_delete', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(48, 'pricing_edit', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(49, 'addons_create', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(50, 'addons_delete', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(51, 'addons_edit', 'web', '2022-04-03 11:07:07', '2022-04-03 11:07:07'),
(52, 'rate_access', 'web', '2022-04-03 11:07:08', '2022-04-03 11:07:08'),
(53, 'rate_show', 'web', '2022-04-03 11:07:08', '2022-04-03 11:07:08');

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
(1, 'Code of conduct', 'A code of conduct is a common policy found in most businesses. It is a set of rules that companies expect employees to follow. The rules establish the expected behavioural standards for all employees. A code of conduct policy may cover the following: Attendance and absence,Employee behaviour', 1, NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10'),
(2, 'Recruitment policy', 'A recruitment policy outlines how the company hires new people. It outlines the hiring process and aims to promote consistency in the recruitment process. Its an important document for employees to access. It may cover the following things:Internal and external hiring preferences,Equal opportunity and anti-discrimination', 1, NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10'),
(3, 'Internet and email policy', 'This policy outlines how companies expect employees to use their email accounts and the internet. It helps to save time and promote efficiency. It also sets up procedures to minimise risk, which is especially important for secure networks. An internet and email policy may cover the following things:Internet access rules,Appropriate online usage', 2, NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10');

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
(1, 100, 1, 1, NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10'),
(2, 500, 1, 2, NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10');

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
(1, 'provider name', 'owner', 'Gaza', 597505581, 'providers/kGAcCMoaZ3vGHgQzAf2wI9DBToPFt1l8uWqKrblH.jpg', NULL, '2022-04-03 11:07:06', '2022-04-03 11:07:06'),
(2, 'Test provider name', 'owner', 'Gaza', 591505511, 'providers/J6KNTtcvZJkB9UNI8B5Vd2pMYNbYUzAwSF6eAOOq.jpg', NULL, '2022-04-03 11:07:06', '2022-04-03 11:07:06');

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
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `work_space_id` bigint(20) UNSIGNED NOT NULL,
  `mac_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` double NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `work_space_id`, `mac_address`, `rate`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, '02568', 5, NULL, NULL, NULL),
(2, 2, '2574', 4.5, NULL, NULL, NULL),
(3, 1, '5744', 3, NULL, NULL, NULL),
(4, 1, '01234', 2, NULL, NULL, NULL),
(5, 2, '127.0.0.1', 5, NULL, '2022-04-03 11:25:40', '2022-04-03 11:25:40'),
(6, 2, '127.0.0.1', 5, NULL, '2022-04-03 11:35:51', '2022-04-03 11:35:51'),
(7, 2, '127.0.0.1', 5, NULL, '2022-04-03 11:36:31', '2022-04-03 11:36:31'),
(8, 2, '127.0.0.1', 5, NULL, '2022-04-03 11:36:52', '2022-04-03 11:36:52'),
(9, 2, '127.0.0.1', 5, NULL, '2022-04-03 11:37:13', '2022-04-03 11:37:13'),
(10, 2, '127.0.0.1', 5, NULL, '2022-04-03 11:37:45', '2022-04-03 11:37:45'),
(11, 2, '127.0.0.1', 5, NULL, '2022-04-03 11:38:08', '2022-04-03 11:38:08'),
(12, 2, '127.0.0.1', 5, NULL, '2022-04-03 11:39:50', '2022-04-03 11:39:50'),
(13, 2, '127.0.0.1', 5, NULL, '2022-04-03 11:40:00', '2022-04-03 11:40:00'),
(14, 2, '127.0.0.1', 5, NULL, '2022-04-03 11:40:30', '2022-04-03 11:40:30'),
(15, 1, '127.0.0.1', 2, NULL, '2022-04-03 11:40:55', '2022-04-03 11:40:55'),
(16, 1, '127.0.0.1', 2, NULL, '2022-04-03 11:41:11', '2022-04-03 11:41:11'),
(21, 1, '127.0.0.1', 2, NULL, '2022-04-03 11:46:11', '2022-04-03 11:46:11'),
(22, 1, '127.0.0.1', 2, NULL, '2022-04-03 11:46:22', '2022-04-03 11:46:22'),
(23, 1, '127.0.0.1', 2, NULL, '2022-04-03 11:47:20', '2022-04-03 11:47:20'),
(24, 1, '127.0.0.1', 2, NULL, '2022-04-03 11:47:44', '2022-04-03 11:47:44'),
(25, 1, '127.0.0.1', 2, NULL, '2022-04-03 11:47:58', '2022-04-03 11:47:58'),
(26, 1, '127.0.0.1', 2, NULL, '2022-04-03 11:48:00', '2022-04-03 11:48:00'),
(27, 1, '127.0.0.1', 2, NULL, '2022-04-03 11:48:23', '2022-04-03 11:48:23'),
(28, 1, '127.0.0.1', 2, NULL, '2022-04-03 11:48:31', '2022-04-03 11:48:31'),
(29, 1, '127.0.0.1', 2, NULL, '2022-04-03 11:48:59', '2022-04-03 11:48:59'),
(30, 1, '127.0.0.1', 2, NULL, '2022-04-03 11:50:23', '2022-04-03 11:50:23'),
(31, 1, '127.0.0.1', 2, NULL, '2022-04-03 11:50:37', '2022-04-03 11:50:37'),
(32, 1, '127.0.0.1', 2, NULL, '2022-04-03 11:50:46', '2022-04-03 11:50:46'),
(33, 1, '127.0.0.1', 2, NULL, '2022-04-03 11:50:54', '2022-04-03 11:50:54'),
(34, 1, '127.0.0.1', 2, NULL, '2022-04-03 11:51:20', '2022-04-03 11:51:20'),
(35, 1, '127.0.0.1', 2, NULL, '2022-04-03 11:56:16', '2022-04-03 11:56:16'),
(36, 2, '127.0.0.1', 2, NULL, '2022-04-03 11:56:34', '2022-04-03 11:56:34'),
(37, 1, '127.0.0.1', 5, NULL, '2022-04-03 12:03:19', '2022-04-03 12:03:19');

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
(1, 'Monthly', NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10'),
(2, 'by the hour', NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10');

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
(1, 'Provider', 2, 1, 'web', '2022-04-03 11:07:08', '2022-04-03 11:07:08', NULL),
(2, 'Admin', 1, NULL, 'web', '2022-04-03 11:07:09', '2022-04-03 11:07:09', NULL),
(3, 'Test Provider', 2, 2, 'web', '2022-04-03 11:07:09', '2022-04-03 11:07:09', NULL);

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
(1, '5G WiFi', NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10');

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
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$jklesMGaemN09J9UmQiiL./ILLJ3gbpV7nz8IY49F6AwG2hYlo0Nq', 567013637, 'admin', 1, NULL, NULL, NULL, '2022-04-03 11:07:06', '2022-04-03 11:07:06'),
(2, 'Dina Akila', 'dinashadiakeela@gmail.com', NULL, '$2y$10$3DD60v8p9FD5K8ZT5kVKVOmhIgJWsP4N5p1diY1RYmF4.tywrIMXu', 597505581, 'admin', 1, NULL, NULL, NULL, '2022-04-03 11:07:06', '2022-04-03 11:07:06'),
(3, 'Eman Elessi', 'hanieman86@gmail.com', NULL, '$2y$10$E8dmmfQklmmUpPgJ1pTh1Oew6Oz9IUE3d.P0g1b6tzkzXeVxFkWm.', 599174952, 'admin', 1, NULL, NULL, NULL, '2022-04-03 11:07:06', '2022-04-03 11:07:06'),
(4, 'Jumana Shawwa', 'jumanashawwa1@gmail.com', NULL, '$2y$10$tKFEMCIBPUc.ySZCBgDANOTzlkYbUUNaYfQusJ7OrmyI2S0EnmTwe', 595866320, 'admin', 1, NULL, NULL, NULL, '2022-04-03 11:07:06', '2022-04-03 11:07:06'),
(5, 'Dalia Marouf', 'dalia.5.6.2000@gmail.com', NULL, '$2y$10$/xAnnsH2purGY1PefcdgvOPDWrwggU/8/Hvtrjobu76zOP3fWCKiS', 592072589, 'admin', 1, NULL, NULL, NULL, '2022-04-03 11:07:06', '2022-04-03 11:07:06'),
(6, 'Provider', 'provider@gmail.com', NULL, '$2y$10$U27ALypRRLaNDAG1zw27NOSUnSiHjSmCoG1OsxYRfFSJn86jXhIYG', 567013637, 'provider', 2, 1, NULL, NULL, '2022-04-03 11:07:06', '2022-04-03 11:07:06'),
(7, 'Test Provider', 'testprovider@gmail.com', NULL, '$2y$10$tT2e9tEoMxBl99AC2TecJeoOzCm7Wl85EO8./xMYEeTLg1GkpNhNC', 599717329, 'provider', 2, 2, NULL, NULL, '2022-04-03 11:07:06', '2022-04-03 11:07:06');

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
(1, 'Admin', NULL, '2022-04-03 11:07:06', '2022-04-03 11:07:06'),
(2, 'Provider', NULL, '2022-04-03 11:07:06', '2022-04-03 11:07:06');

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
  `type` enum('team','individual') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `name`, `job_title`, `avatar`, `you_did`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'John', 'Developer', '/providers/kGAcCMoaZ3vGHgQzAf2wI9DBToPFt1l8uWqKrblH.jpg', 'yes', 'team', NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10'),
(2, 'Yara', 'Designer', '/providers/J6KNTtcvZJkB9UNI8B5Vd2pMYNbYUzAwSF6eAOOq.jpg', 'no', 'individual', NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10');

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
(1, 1, 1, NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10'),
(2, 2, 2, NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10'),
(3, 2, 1, NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `work_spaces`
--

CREATE TABLE `work_spaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `work_spaces` (`id`, `name`, `capacity`, `work_space_type_id`, `provider_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Tools', 9, 1, 1, NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10'),
(2, 'GSG', 3, 3, 2, NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10'),
(5, 'lego', 20, 3, 1, NULL, '2022-04-03 12:23:14', '2022-04-03 12:23:14');

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
(1, '10', 1, 1, NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10');

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
(1, 1, 2.2, 20, NULL, '2022-04-03 11:07:10', '2022-04-03 12:03:19'),
(2, 2, 4.7307692307692, 13, NULL, '2022-04-03 11:07:10', '2022-04-03 11:56:34'),
(4, 5, 0, 0, NULL, '2022-04-03 12:23:14', '2022-04-03 12:23:14');

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
(1, '10', 1, 1, NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10');

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
(1, 'Office in a common room', NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10'),
(2, 'closed room', NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10'),
(3, 'Meetings room', NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10'),
(4, 'Skype room', NULL, '2022-04-03 11:07:10', '2022-04-03 11:07:10');

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

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
-- AUTO_INCREMENT for table `provider_attributes`
--
ALTER TABLE `provider_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `work_space_addons`
--
ALTER TABLE `work_space_addons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `work_space_ratings`
--
ALTER TABLE `work_space_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Constraints for table `provider_attributes`
--
ALTER TABLE `provider_attributes`
  ADD CONSTRAINT `provider_attributes_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `provider_attributes_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE;

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
catchspace