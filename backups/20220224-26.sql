-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 03:08 PM
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
(1, 'White Board', NULL, '2022-05-27 10:02:39', '2022-05-27 10:02:39');

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
(1, 'Overview', NULL, '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(2, 'Starting at', NULL, '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(3, 'Opining Hours', NULL, '2022-05-27 10:02:35', '2022-05-27 10:02:35');

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
(289, '2014_10_10_190349_create_user_levels_table', 1),
(290, '2014_10_11_212527_create_providers_table', 1),
(291, '2014_10_12_000000_create_users_table', 1),
(292, '2014_10_12_100000_create_password_resets_table', 1),
(293, '2019_08_19_000000_create_failed_jobs_table', 1),
(294, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(295, '2022_02_15_212053_create_addons_table', 1),
(296, '2022_02_15_212539_create_work_space_types_table', 1),
(297, '2022_02_15_212618_create_work_spaces_table', 1),
(298, '2022_02_16_212015_create_work_space_addons_table', 1),
(299, '2022_02_17_211830_create_services_table', 1),
(300, '2022_02_17_211831_create_work_space_services_table', 1),
(301, '2022_02_17_211941_create_workers_table', 1),
(302, '2022_02_17_212113_create_rent_types_table', 1),
(303, '2022_02_17_212114_create_pricings_table', 1),
(304, '2022_02_17_212506_create_policies_table', 1),
(305, '2022_02_17_212549_create_attributes_table', 1),
(306, '2022_02_19_185206_create_permission_tables', 1),
(307, '2022_03_01_072920_add_provider_col_id', 1),
(308, '2022_03_22_164158_create_ratings_table', 1),
(309, '2022_03_22_164302_create_work_space_ratings_table', 1),
(310, '2022_03_26_131433_create_contact_us_table', 1),
(311, '2022_03_27_140311_create_worker_work_spaces_table', 1),
(312, '2022_05_23_180200_create_provider_attributes_table', 1);

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
(1, 'user_management_access', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(2, 'permission_create', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(3, 'permission_edit', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(4, 'permission_show', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(5, 'permission_delete', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(6, 'permission_access', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(7, 'role_create', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(8, 'role_show', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(9, 'role_delete', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(10, 'role_access', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(11, 'provider_create', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(12, 'provider_edit', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(13, 'provider_show', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(14, 'provider_delete', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(15, 'provider_access', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(16, 'workspace_create', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(17, 'workspace_edit', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(18, 'workspace_show', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(19, 'workspace_delete', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(20, 'workspace_access', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(21, 'policies_create', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(22, 'policies_edit', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(23, 'policies_show', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(24, 'policies_delete', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(25, 'policies_access', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(26, 'worker_create', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(27, 'worker_edit', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(28, 'worker_show', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(29, 'worker_delete', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(30, 'worker_access', 'web', '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(31, 'user_edit', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(32, 'user_delete', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(33, 'user_show', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(34, 'user_create', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(35, 'services_show', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(36, 'pricing_show', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(37, 'addons_show', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(38, 'services_access', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(39, 'pricing_access', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(40, 'addons_access', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(41, 'reservations_access', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(42, 'reservations_show', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(43, 'services_create', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(44, 'services_delete', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(45, 'services_edit', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(46, 'pricing_create', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(47, 'pricing_delete', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(48, 'pricing_edit', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(49, 'addons_create', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(50, 'addons_delete', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(51, 'addons_edit', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(52, 'rate_access', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(53, 'rate_show', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(54, 'attribute_access', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(55, 'attribute_show', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(56, 'attribute_delete', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(57, 'attribute_edit', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36'),
(58, 'attribute_create', 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36');

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
(1, 'Code of conduct', 'A code of conduct is a common policy found in most businesses. It is a set of rules that companies expect employees to follow. The rules establish the expected behavioural standards for all employees. A code of conduct policy may cover the following: Attendance and absence,Employee behaviour', 1, NULL, '2022-05-27 10:02:39', '2022-05-27 10:02:39'),
(2, 'Recruitment policy', 'A recruitment policy outlines how the company hires new people. It outlines the hiring process and aims to promote consistency in the recruitment process. Its an important document for employees to access. It may cover the following things:Internal and external hiring preferences,Equal opportunity and anti-discrimination', 1, NULL, '2022-05-27 10:02:39', '2022-05-27 10:02:39'),
(3, 'Internet and email policy', 'This policy outlines how companies expect employees to use their email accounts and the internet. It helps to save time and promote efficiency. It also sets up procedures to minimise risk, which is especially important for secure networks. An internet and email policy may cover the following things:Internet access rules,Appropriate online usage', 2, NULL, '2022-05-27 10:02:39', '2022-05-27 10:02:39');

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
(1, 100, 1, 1, NULL, '2022-05-27 10:02:38', '2022-05-27 10:02:38'),
(2, 20, 2, 2, NULL, '2022-05-27 10:02:39', '2022-05-27 10:02:39');

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
(1, 'Lego', 'Aseel Mousa', 'El Sinaa Crossing, LEGO Business Center Building', 598587747, 'workspaces/space3.png', NULL, '2022-05-27 10:02:34', '2022-05-27 10:02:34'),
(2, 'Tools', 'owner', 'Gaza', 591505511, 'workspaces/Tools.png', NULL, '2022-05-27 10:02:34', '2022-05-27 10:02:34');

-- --------------------------------------------------------

--
-- Table structure for table `provider_attributes`
--

CREATE TABLE `provider_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provider_attributes`
--

INSERT INTO `provider_attributes` (`id`, `value`, `provider_id`, `attribute_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'LEGO Spaces are flexible collaborative workspaces for entrepreneurs, a healthy, inspiring and integrated work environment that helps you create creativity and unleash your ideas. In addition, it is your ideal place to network and communicate with an elite group of entrepreneurs, which opens up wide horizons for you in your field!', 1, 1, NULL, '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(2, '80', 1, 2, NULL, '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(3, '24/7', 1, 3, NULL, '2022-05-27 10:02:35', '2022-05-27 10:02:35');

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
  `worker_id` bigint(20) UNSIGNED DEFAULT NULL,
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
(1, 'Monthly', NULL, '2022-05-27 10:02:38', '2022-05-27 10:02:38'),
(2, 'by the hour', NULL, '2022-05-27 10:02:38', '2022-05-27 10:02:38');

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
(1, 'Provider', 2, 1, 'web', '2022-05-27 10:02:36', '2022-05-27 10:02:36', NULL),
(2, 'Admin', 1, NULL, 'web', '2022-05-27 10:02:37', '2022-05-27 10:02:37', NULL),
(3, 'Test Provider', 2, 2, 'web', '2022-05-27 10:02:38', '2022-05-27 10:02:38', NULL);

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
(53, 1),
(54, 2),
(55, 1),
(56, 1),
(57, 1),
(58, 1);

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
(1, '5G WiFi', NULL, '2022-05-27 10:02:38', '2022-05-27 10:02:38');

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
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$16y8FDOF.peFFdrcL3kf8.cW.jeyYIN1PmKJOkxevLaspwQ/rolqC', 567013637, 'admin', 1, NULL, NULL, NULL, '2022-05-27 10:02:34', '2022-05-27 10:02:34'),
(2, 'Dina Akila', 'dinashadiakeela@gmail.com', NULL, '$2y$10$Gx1ISxd6Y8cCXEBgsu3HhuaNkLuaI612yQSYTaphc.w6gtSAmL.MS', 597505581, 'admin', 1, NULL, NULL, NULL, '2022-05-27 10:02:34', '2022-05-27 10:02:34'),
(3, 'Eman Elessi', 'hanieman86@gmail.com', NULL, '$2y$10$ladRJHt/fqU2bvAItM8uouVJT4/UFaqWE/vAy0VIWScEp05FqYYSi', 599174952, 'admin', 1, NULL, NULL, NULL, '2022-05-27 10:02:34', '2022-05-27 10:02:34'),
(4, 'Jumana Shawwa', 'jumanashawwa1@gmail.com', NULL, '$2y$10$dDTnAgmD/JE/FmnRW1T5oelLOu2Bsdmruh/UsbLxlNTLIymBMZuZq', 595866320, 'admin', 1, NULL, NULL, NULL, '2022-05-27 10:02:34', '2022-05-27 10:02:34'),
(5, 'Dalia Marouf', 'dalia.5.6.2000@gmail.com', NULL, '$2y$10$CBlOivm3TBFLqdSwolxXuu/ptmN6Sh0N.sLmk7A7WcO1wcTaJ189a', 592072589, 'admin', 1, NULL, NULL, NULL, '2022-05-27 10:02:34', '2022-05-27 10:02:34'),
(6, 'Lego', 'lego@gmail.com', NULL, '$2y$10$/46R5tyAWbmjEwDMM51XhOAmFq.SvdPpUjjd1Wk6P3t9i5pDw8y9m', 598587747, 'provider', 2, 1, NULL, NULL, '2022-05-27 10:02:35', '2022-05-27 10:02:35'),
(7, 'Tools', 'tools@gmail.com', NULL, '$2y$10$Lyl1eM9GK/oaytnNIOkfJ.CubS7pB7Md/802l3i42swhTEBBDGwwq', 599717329, 'provider', 2, 2, NULL, NULL, '2022-05-27 10:02:35', '2022-05-27 10:02:35');

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
(1, 'Admin', NULL, '2022-05-27 10:02:34', '2022-05-27 10:02:34'),
(2, 'Provider', NULL, '2022-05-27 10:02:34', '2022-05-27 10:02:34');

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
(1, 'John', 'john@gmail.com', '$2y$10$6jeSdJ2obGrYrnb0E6f59.euvG4B8gF73IF3pdMfQ9uUaHJJ6dBRm', 'Developer', '/providers/kGAcCMoaZ3vGHgQzAf2wI9DBToPFt1l8uWqKrblH.jpg', 'team', NULL, '2022-05-27 10:02:39', '2022-05-27 10:02:39'),
(2, 'Yara', 'yara@gmail.com', '$2y$10$DaF0Z9i6xivDuh7zFUa17uvhzP/aw9AacIsg52f4FO79uiBRTxYB.', 'Designer', '/providers/J6KNTtcvZJkB9UNI8B5Vd2pMYNbYUzAwSF6eAOOq.jpg', 'individual', NULL, '2022-05-27 10:02:39', '2022-05-27 10:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `worker_work_spaces`
--

CREATE TABLE `worker_work_spaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `worker_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `work_space_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `worker_work_spaces`
--

INSERT INTO `worker_work_spaces` (`id`, `worker_id`, `date`, `work_space_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-05-03', 1, NULL, '2022-05-27 10:02:39', '2022-05-27 10:02:39'),
(2, 2, '2022-04-01', 2, NULL, '2022-05-27 10:02:39', '2022-05-27 10:02:39'),
(3, 2, '2022-04-07', 1, NULL, '2022-05-27 10:02:39', '2022-05-27 10:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `work_spaces`
--

CREATE TABLE `work_spaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `work_spaces` (`id`, `name`, `image`, `capacity`, `work_space_type_id`, `provider_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Tools Meetings room', 'workspaces/Tools.png', 9, 3, 2, NULL, '2022-05-27 10:02:38', '2022-05-27 10:02:38'),
(2, 'Lego Open room', 'workspaces/space3.png', 3, 1, 1, NULL, '2022-05-27 10:02:38', '2022-05-27 10:02:38');

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
(1, '10', 1, 1, NULL, '2022-05-27 10:02:39', '2022-05-27 10:02:39');

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
(1, 1, 0, 0, NULL, '2022-05-27 10:02:38', '2022-05-27 10:02:38'),
(2, 2, 0, 0, NULL, '2022-05-27 10:02:38', '2022-05-27 10:02:38');

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
(1, '10', 1, 1, NULL, '2022-05-27 10:02:38', '2022-05-27 10:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `work_space_types`
--

CREATE TABLE `work_space_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('Open room','Closed room','Meetings room','Skype room') COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_space_types`
--

INSERT INTO `work_space_types` (`id`, `type`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Open room', 'workspace_type/open_room.jpg', NULL, '2022-05-27 10:02:38', '2022-05-27 10:02:38'),
(2, 'Closed room', 'workspace_type/closed_room.jpg', NULL, '2022-05-27 10:02:38', '2022-05-27 10:02:38'),
(3, 'Meetings room', 'workspace_type/meeting-room.jpg', NULL, '2022-05-27 10:02:38', '2022-05-27 10:02:38'),
(4, 'Skype room', 'workspace_type/skype_room.jpg', NULL, '2022-05-27 10:02:38', '2022-05-27 10:02:38');

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
  ADD KEY `ratings_work_space_id_foreign` (`work_space_id`),
  ADD KEY `ratings_worker_id_foreign` (`worker_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Constraints for table `provider_attributes`
--
ALTER TABLE `provider_attributes`
  ADD CONSTRAINT `provider_attributes_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `provider_attributes_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_work_space_id_foreign` FOREIGN KEY (`work_space_id`) REFERENCES `work_spaces` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ratings_worker_id_foreign` FOREIGN KEY (`worker_id`) REFERENCES `workers` (`id`) ON DELETE CASCADE;

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
