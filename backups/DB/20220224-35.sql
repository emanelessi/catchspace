-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: catchspace
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `addons`
--

DROP TABLE IF EXISTS `addons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addons` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addons`
--

LOCK TABLES `addons` WRITE;
/*!40000 ALTER TABLE `addons` DISABLE KEYS */;
INSERT INTO `addons` VALUES (1,'White Board',NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(2,'Printer',NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15');
/*!40000 ALTER TABLE `addons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attributes`
--

DROP TABLE IF EXISTS `attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attributes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attributes`
--

LOCK TABLES `attributes` WRITE;
/*!40000 ALTER TABLE `attributes` DISABLE KEYS */;
INSERT INTO `attributes` VALUES (1,'Overview',NULL,'2022-06-09 06:19:14','2022-06-12 08:16:37'),(2,'Starting at',NULL,'2022-06-09 06:19:14','2022-06-09 06:19:14'),(3,'Opining Hours',NULL,'2022-06-09 06:19:14','2022-06-09 06:19:14');
/*!40000 ALTER TABLE `attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_us` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_us`
--

LOCK TABLES `contact_us` WRITE;
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (88,'2014_10_10_190349_create_user_levels_table',1),(89,'2014_10_11_212527_create_providers_table',1),(90,'2014_10_12_000000_create_users_table',1),(91,'2014_10_12_100000_create_password_resets_table',1),(92,'2016_06_01_000001_create_oauth_auth_codes_table',1),(93,'2016_06_01_000002_create_oauth_access_tokens_table',1),(94,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),(95,'2016_06_01_000004_create_oauth_clients_table',1),(96,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),(97,'2019_08_19_000000_create_failed_jobs_table',1),(98,'2019_12_14_000001_create_personal_access_tokens_table',1),(99,'2022_02_15_212053_create_addons_table',1),(100,'2022_02_15_212539_create_work_space_types_table',1),(101,'2022_02_15_212618_create_work_spaces_table',1),(102,'2022_02_16_212015_create_work_space_addons_table',1),(103,'2022_02_17_211830_create_services_table',1),(104,'2022_02_17_211831_create_work_space_services_table',1),(105,'2022_02_17_211941_create_workers_table',1),(106,'2022_02_17_212113_create_rent_types_table',1),(107,'2022_02_17_212114_create_pricings_table',1),(108,'2022_02_17_212506_create_policies_table',1),(109,'2022_02_17_212549_create_attributes_table',1),(110,'2022_02_19_185206_create_permission_tables',1),(111,'2022_03_01_072920_add_provider_col_id',1),(112,'2022_03_22_164158_create_ratings_table',1),(113,'2022_03_22_164302_create_work_space_ratings_table',1),(114,'2022_03_26_131433_create_contact_us_table',1),(115,'2022_03_27_140311_create_worker_work_spaces_table',1),(116,'2022_05_23_180200_create_provider_attributes_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',6),(2,'App\\Models\\User',1);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_access_tokens`
--

LOCK TABLES `oauth_access_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_auth_codes`
--

LOCK TABLES `oauth_auth_codes` WRITE;
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_clients`
--

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_personal_access_clients`
--

LOCK TABLES `oauth_personal_access_clients` WRITE;
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_refresh_tokens`
--

LOCK TABLES `oauth_refresh_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'user_management_access','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(2,'permission_create','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(3,'permission_edit','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(4,'permission_show','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(5,'permission_delete','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(6,'permission_access','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(7,'role_create','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(8,'role_show','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(9,'role_delete','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(10,'role_access','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(11,'provider_create','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(12,'provider_edit','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(13,'provider_show','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(14,'provider_delete','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(15,'provider_access','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(16,'workspace_create','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(17,'workspace_edit','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(18,'workspace_show','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(19,'workspace_delete','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(20,'workspace_access','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(21,'policies_create','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(22,'policies_edit','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(23,'policies_show','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(24,'policies_delete','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(25,'policies_access','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(26,'worker_create','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(27,'worker_edit','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(28,'worker_show','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(29,'worker_delete','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(30,'worker_access','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(31,'user_edit','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(32,'user_delete','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(33,'user_show','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(34,'user_create','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(35,'services_show','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(36,'pricing_show','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(37,'addons_show','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(38,'services_access','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(39,'pricing_access','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(40,'addons_access','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(41,'reservations_access','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(42,'reservations_show','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(43,'services_create','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(44,'services_delete','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(45,'services_edit','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(46,'pricing_create','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(47,'pricing_delete','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(48,'pricing_edit','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(49,'addons_create','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(50,'addons_delete','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(51,'addons_edit','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(52,'rate_access','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(53,'rate_show','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(54,'attribute_access','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(55,'attribute_show','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(56,'attribute_delete','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(57,'attribute_edit','web','2022-06-09 06:19:14','2022-06-09 06:19:14'),(58,'attribute_create','web','2022-06-09 06:19:14','2022-06-09 06:19:14');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `policies`
--

DROP TABLE IF EXISTS `policies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `policies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` bigint(20) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `policies_provider_id_foreign` (`provider_id`),
  CONSTRAINT `policies_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `policies`
--

LOCK TABLES `policies` WRITE;
/*!40000 ALTER TABLE `policies` DISABLE KEYS */;
INSERT INTO `policies` VALUES (1,'Code of conduct','A code of conduct is a common policy found in most businesses. It is a set of rules that companies expect employees to follow. The rules establish the expected behavioural standards for all employees. A code of conduct policy may cover the following: Attendance and absence,Employee behaviour',1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(2,'Recruitment policy','A recruitment policy outlines how the company hires new people. It outlines the hiring process and aims to promote consistency in the recruitment process. Its an important document for employees to access. It may cover the following things:Internal and external hiring preferences,Equal opportunity and anti-discrimination',1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(3,'Internet and email policy','This policy outlines how companies expect employees to use their email accounts and the internet. It helps to save time and promote efficiency. It also sets up procedures to minimise risk, which is especially important for secure networks. An internet and email policy may cover the following things:Internet access rules,Appropriate online usage',2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15');
/*!40000 ALTER TABLE `policies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pricings`
--

DROP TABLE IF EXISTS `pricings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pricings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `price` double NOT NULL,
  `work_space_id` bigint(20) unsigned NOT NULL,
  `rent_type_id` bigint(20) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pricings_work_space_id_foreign` (`work_space_id`),
  KEY `pricings_rent_type_id_foreign` (`rent_type_id`),
  CONSTRAINT `pricings_rent_type_id_foreign` FOREIGN KEY (`rent_type_id`) REFERENCES `rent_types` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pricings_work_space_id_foreign` FOREIGN KEY (`work_space_id`) REFERENCES `work_spaces` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pricings`
--

LOCK TABLES `pricings` WRITE;
/*!40000 ALTER TABLE `pricings` DISABLE KEYS */;
INSERT INTO `pricings` VALUES (1,100,7,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(2,10,2,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(3,50,2,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(4,400,1,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(5,7,1,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(6,30,1,3,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(7,90,4,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(8,100,5,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(9,90,6,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(10,150,9,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(11,250,10,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(12,400,11,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15');
/*!40000 ALTER TABLE `pricings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provider_attributes`
--

DROP TABLE IF EXISTS `provider_attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provider_attributes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` bigint(20) unsigned NOT NULL,
  `attribute_id` bigint(20) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `provider_attributes_provider_id_foreign` (`provider_id`),
  KEY `provider_attributes_attribute_id_foreign` (`attribute_id`),
  CONSTRAINT `provider_attributes_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `provider_attributes_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provider_attributes`
--

LOCK TABLES `provider_attributes` WRITE;
/*!40000 ALTER TABLE `provider_attributes` DISABLE KEYS */;
INSERT INTO `provider_attributes` VALUES (1,'LEGO Spaces are flexible collaborative workspaces for entrepreneurs, a healthy, inspiring and integrated work environment that helps you create creativity and unleash your ideas. In addition, it is your ideal place to network and communicate with an elite group of entrepreneurs, which opens up wide horizons for you in your field!',1,1,NULL,'2022-06-09 06:19:14','2022-06-12 08:16:37'),(2,'80',1,2,NULL,'2022-06-09 06:19:14','2022-06-09 06:19:14'),(3,'24/7',1,3,NULL,'2022-06-09 06:19:14','2022-06-09 06:19:14'),(4,'It offers office workspaces for freelancers and companies from the private sector and provides all office and logistical services',2,1,NULL,'2022-06-09 06:19:14','2022-06-09 06:19:14'),(5,'50',2,2,NULL,'2022-06-09 06:19:14','2022-06-09 06:19:14'),(6,'8:30am/10pm',2,3,NULL,'2022-06-09 06:19:14','2022-06-09 06:19:14');
/*!40000 ALTER TABLE `provider_attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `providers`
--

DROP TABLE IF EXISTS `providers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `providers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `providers`
--

LOCK TABLES `providers` WRITE;
/*!40000 ALTER TABLE `providers` DISABLE KEYS */;
INSERT INTO `providers` VALUES (1,'Lego','Aseel Mousa','El Sinaa Crossing, LEGO Business Center Building',598587747,'workspaces/Lego.jpeg',NULL,'2022-06-09 06:19:14','2022-06-09 06:19:14'),(2,'Tools','Edris Talib','Ahmed Abdel Aziz Street - Al Rehab Mall - Third Floor',591505511,'workspaces/Tools.jpeg',NULL,'2022-06-09 06:19:14','2022-06-09 06:19:14');
/*!40000 ALTER TABLE `providers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ratings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` double NOT NULL,
  `mac_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_back` tinyint(1) NOT NULL,
  `tips` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_space_id` bigint(20) unsigned NOT NULL,
  `worker_id` bigint(20) unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ratings_work_space_id_foreign` (`work_space_id`),
  KEY `ratings_worker_id_foreign` (`worker_id`),
  CONSTRAINT `ratings_work_space_id_foreign` FOREIGN KEY (`work_space_id`) REFERENCES `work_spaces` (`id`) ON DELETE CASCADE,
  CONSTRAINT `ratings_worker_id_foreign` FOREIGN KEY (`worker_id`) REFERENCES `workers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ratings`
--

LOCK TABLES `ratings` WRITE;
/*!40000 ALTER TABLE `ratings` DISABLE KEYS */;
INSERT INTO `ratings` VALUES (1,'test6',3,'127.0.0.1','test6',1,'test',11,2,NULL,'2022-06-09 06:19:43','2022-06-09 06:19:43'),(2,'test1',5,'127.0.0.1','test1',1,'test1',6,2,NULL,'2022-06-09 06:20:21','2022-06-09 06:20:21'),(3,'test2',4,'127.0.0.1','test2',1,'test3',12,2,NULL,'2022-06-09 06:21:06','2022-06-09 06:21:06'),(4,'test3',5,'127.0.0.1','test3',1,'test3',8,2,NULL,'2022-06-09 06:21:47','2022-06-09 06:21:47'),(5,'test4',5,'127.0.0.1','test4',1,'test4',7,NULL,NULL,'2022-06-09 07:14:52','2022-06-09 07:14:52'),(6,'test5',5,'127.0.0.1','test5',1,'test5',2,NULL,NULL,'2022-06-09 07:20:49','2022-06-09 07:20:49');
/*!40000 ALTER TABLE `ratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rent_types`
--

DROP TABLE IF EXISTS `rent_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rent_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rent_types`
--

LOCK TABLES `rent_types` WRITE;
/*!40000 ALTER TABLE `rent_types` DISABLE KEYS */;
INSERT INTO `rent_types` VALUES (1,'Monthly',NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(2,'Hourly',NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(3,'daily',NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15');
/*!40000 ALTER TABLE `rent_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (6,2),(7,2),(8,2),(9,2),(10,2),(11,2),(12,1),(12,2),(13,2),(14,2),(15,1),(16,1),(16,2),(16,3),(17,1),(17,2),(18,1),(18,2),(18,3),(19,1),(19,2),(19,3),(20,1),(20,2),(20,3),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(28,2),(29,1),(30,1),(30,2),(31,2),(32,2),(33,2),(34,2),(35,2),(36,2),(37,2),(38,1),(39,1),(40,1),(41,1),(42,2),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,2),(53,1),(54,2),(55,1),(56,1),(57,1),(58,1);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_level_id` bigint(20) unsigned NOT NULL,
  `provider_id` bigint(20) unsigned DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`),
  KEY `roles_provider_id_foreign` (`provider_id`),
  KEY `roles_user_level_id_foreign` (`user_level_id`),
  CONSTRAINT `roles_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE,
  CONSTRAINT `roles_user_level_id_foreign` FOREIGN KEY (`user_level_id`) REFERENCES `user_levels` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Provider',2,1,'web','2022-06-09 06:19:14','2022-06-09 06:19:14',NULL),(2,'Admin',1,NULL,'web','2022-06-09 06:19:15','2022-06-09 06:19:15',NULL),(3,'Test Provider',2,2,'web','2022-06-09 06:19:15','2022-06-09 06:19:15',NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'5G WiFi',NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(2,'kitchen',NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(3,'resting place',NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(4,'meeting room',NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(5,'Delivery and discounts from restaurants',NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(6,'conditioning',NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(7,'cafe corner',NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(8,'call rooms',NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_levels`
--

DROP TABLE IF EXISTS `user_levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_levels` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_levels`
--

LOCK TABLES `user_levels` WRITE;
/*!40000 ALTER TABLE `user_levels` DISABLE KEYS */;
INSERT INTO `user_levels` VALUES (1,'Admin',NULL,'2022-06-09 06:19:13','2022-06-09 06:19:13'),(2,'Provider',NULL,'2022-06-09 06:19:14','2022-06-09 06:19:14');
/*!40000 ALTER TABLE `user_levels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `type` enum('admin','provider') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_level_id` bigint(20) unsigned NOT NULL,
  `provider_id` bigint(20) unsigned DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_user_level_id_foreign` (`user_level_id`),
  KEY `users_provider_id_foreign` (`provider_id`),
  CONSTRAINT `users_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE,
  CONSTRAINT `users_user_level_id_foreign` FOREIGN KEY (`user_level_id`) REFERENCES `user_levels` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@admin.com',NULL,'$2y$10$aL9oP8vnpgk6yfWucYunKuhd98LFweshGilRCiXB5X9pW.NBxNW42',567013637,'admin',1,NULL,NULL,NULL,'2022-06-09 06:19:13','2022-06-09 06:19:13'),(2,'Dina Akila','dinashadiakeela@gmail.com',NULL,'$2y$10$FPJBHZuGww3mzO627dXAdOqEMqbaGINiao1DUB4aZi3yzcCULB.Ia',597505581,'admin',1,NULL,NULL,NULL,'2022-06-09 06:19:13','2022-06-09 06:19:13'),(3,'Eman Elessi','hanieman86@gmail.com',NULL,'$2y$10$gueYpmGdFzRoSR2hbijg1eDFlO0HqbkhSog2eK9rJJ3vcGM1AfUNy',599174952,'admin',1,NULL,NULL,NULL,'2022-06-09 06:19:13','2022-06-09 06:19:13'),(4,'Jumana Shawwa','jumanashawwa1@gmail.com',NULL,'$2y$10$LF7mG9/PGB0axhtzk9XJ8uYlBwWGR5fTnQftjaQWq/GHwQu3bpSim',595866320,'admin',1,NULL,NULL,NULL,'2022-06-09 06:19:13','2022-06-09 06:19:13'),(5,'Dalia Marouf','dalia.5.6.2000@gmail.com',NULL,'$2y$10$epBGv0YnkGk05IOc5ULjOejRZNcfYupv0JCoCo9kzZd045fcm5fqi',592072589,'admin',1,NULL,NULL,NULL,'2022-06-09 06:19:14','2022-06-09 06:19:14'),(6,'Lego','lego@gmail.com',NULL,'$2y$10$wg4gX2SSMA2lJ.GYMpvNN.01pifx1XvrdqgsDfKIq3AhpfFe3/9qW',598587747,'provider',2,1,NULL,NULL,'2022-06-09 06:19:14','2022-06-09 06:19:14'),(7,'Tools','tools@gmail.com',NULL,'$2y$10$dB.dcwh0SVSasa3q2WYUwObd5EYXrFnoDljItgKgW.gY/1XyvNej6',599717329,'provider',2,2,NULL,NULL,'2022-06-09 06:19:14','2022-06-09 06:19:14');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work_space_addons`
--

DROP TABLE IF EXISTS `work_space_addons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `work_space_addons` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_space_id` bigint(20) unsigned NOT NULL,
  `addon_id` bigint(20) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `work_space_addons_work_space_id_foreign` (`work_space_id`),
  KEY `work_space_addons_addon_id_foreign` (`addon_id`),
  CONSTRAINT `work_space_addons_addon_id_foreign` FOREIGN KEY (`addon_id`) REFERENCES `addons` (`id`) ON DELETE CASCADE,
  CONSTRAINT `work_space_addons_work_space_id_foreign` FOREIGN KEY (`work_space_id`) REFERENCES `work_spaces` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work_space_addons`
--

LOCK TABLES `work_space_addons` WRITE;
/*!40000 ALTER TABLE `work_space_addons` DISABLE KEYS */;
INSERT INTO `work_space_addons` VALUES (1,'10',7,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(2,'10',2,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(3,'0',7,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(4,'0',9,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(5,'0',10,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(6,'0',11,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15');
/*!40000 ALTER TABLE `work_space_addons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work_space_ratings`
--

DROP TABLE IF EXISTS `work_space_ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `work_space_ratings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `work_space_id` bigint(20) unsigned NOT NULL,
  `rate_avg` double NOT NULL,
  `rate_count` double NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `work_space_ratings_work_space_id_foreign` (`work_space_id`),
  CONSTRAINT `work_space_ratings_work_space_id_foreign` FOREIGN KEY (`work_space_id`) REFERENCES `work_spaces` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work_space_ratings`
--

LOCK TABLES `work_space_ratings` WRITE;
/*!40000 ALTER TABLE `work_space_ratings` DISABLE KEYS */;
INSERT INTO `work_space_ratings` VALUES (1,1,0,0,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(2,2,5,1,NULL,'2022-06-09 06:19:15','2022-06-09 07:20:49'),(3,3,0,0,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(4,4,0,0,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(5,5,0,0,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(6,6,5,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:20:21'),(7,7,5,1,NULL,'2022-06-09 06:19:15','2022-06-09 07:14:52'),(8,8,5,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:21:47'),(9,9,0,0,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(10,10,0,0,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(11,11,3,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:43'),(12,12,4,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:21:06');
/*!40000 ALTER TABLE `work_space_ratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work_space_services`
--

DROP TABLE IF EXISTS `work_space_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `work_space_services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_space_id` bigint(20) unsigned NOT NULL,
  `service_id` bigint(20) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `work_space_services_work_space_id_foreign` (`work_space_id`),
  KEY `work_space_services_service_id_foreign` (`service_id`),
  CONSTRAINT `work_space_services_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  CONSTRAINT `work_space_services_work_space_id_foreign` FOREIGN KEY (`work_space_id`) REFERENCES `work_spaces` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work_space_services`
--

LOCK TABLES `work_space_services` WRITE;
/*!40000 ALTER TABLE `work_space_services` DISABLE KEYS */;
INSERT INTO `work_space_services` VALUES (1,'10',7,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(2,'4',7,4,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(3,'0',7,6,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(4,'0',7,7,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(5,'0',7,8,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(6,'10',8,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(7,'4',8,4,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(8,'0',8,6,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(9,'0',8,7,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(10,'0',8,8,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(11,'10',9,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(12,'4',9,4,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(13,'0',9,6,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(14,'0',9,7,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(15,'0',9,8,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(16,'10',10,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(17,'4',10,4,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(18,'0',10,6,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(19,'0',10,7,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(20,'0',10,8,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(21,'10',11,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(22,'4',11,4,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(23,'0',11,6,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(24,'0',11,7,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(25,'0',11,8,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(26,'10',12,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(27,'4',12,4,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(28,'0',12,6,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(29,'0',12,7,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(30,'0',12,8,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(31,'10',1,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(32,'0',1,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(33,'0',1,3,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(34,'-1',1,4,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(35,'remotely',1,5,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(36,'10',2,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(37,'0',2,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(38,'0',2,3,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(39,'-1',2,4,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(40,'remotely',2,5,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(41,'10',3,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(42,'0',3,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(43,'0',3,3,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(44,'-1',3,4,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(45,'remotely',3,5,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(46,'10',4,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(47,'0',4,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(48,'0',4,3,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(49,'-1',4,4,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(50,'remotely',4,5,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(51,'10',5,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(52,'0',5,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(53,'0',5,3,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(54,'-1',5,4,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(55,'remotely',5,5,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(56,'10',6,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(57,'0',6,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(58,'0',6,3,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(59,'-1',6,4,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(60,'remotely',6,5,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15');
/*!40000 ALTER TABLE `work_space_services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work_space_types`
--

DROP TABLE IF EXISTS `work_space_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `work_space_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('Open room','Closed room','Meetings room','Skype room') COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work_space_types`
--

LOCK TABLES `work_space_types` WRITE;
/*!40000 ALTER TABLE `work_space_types` DISABLE KEYS */;
INSERT INTO `work_space_types` VALUES (1,'Open room','workspace_type/open_room.jpg',NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(2,'Closed room','workspace_type/closed_room.jpg',NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(3,'Meetings room','workspace_type/meeting-room.jpg',NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(4,'Skype room','workspace_type/skype_room.jpg',NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15');
/*!40000 ALTER TABLE `work_space_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work_spaces`
--

DROP TABLE IF EXISTS `work_spaces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `work_spaces` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity` int(11) NOT NULL,
  `work_space_type_id` bigint(20) unsigned NOT NULL,
  `provider_id` bigint(20) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `work_spaces_work_space_type_id_foreign` (`work_space_type_id`),
  KEY `work_spaces_provider_id_foreign` (`provider_id`),
  CONSTRAINT `work_spaces_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE,
  CONSTRAINT `work_spaces_work_space_type_id_foreign` FOREIGN KEY (`work_space_type_id`) REFERENCES `work_space_types` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work_spaces`
--

LOCK TABLES `work_spaces` WRITE;
/*!40000 ALTER TABLE `work_spaces` DISABLE KEYS */;
INSERT INTO `work_spaces` VALUES (1,'Tools Meetings room','workspaces/Tools_Meetings_room.jpeg',10,3,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(2,'Tools Open room','workspaces/Tools_Open_room8.jpeg',6,1,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(3,'Tools Open room','workspaces/Tools_Open_room8.jpeg',8,1,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(4,'Tools Closed room','workspaces/Tools_Closed_room3.jpeg',3,2,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(5,'Tools Closed room','workspaces/Tools_Closed_room2.jpeg',2,2,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(6,'Tools Closed room','workspaces/Tools_Closed_room4.jpeg',4,2,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(7,'Lego Open room','workspaces/Lego_Open_room.jpeg',8,1,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:38:32'),(8,'Lego Skype room','workspaces/Lego_Skype_room.jpeg',1,4,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(9,'Lego Closed room','workspaces/Lego_Closed_room1.jpeg',1,2,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(10,'Lego Closed room','workspaces/Lego_Closed_room1.jpeg',2,2,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(11,'Lego Closed room','workspaces/Lego_Closed_room4.jpeg',4,2,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(12,'Lego Meetings room','workspaces/Lego_Meetings_room.jpeg',8,3,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15');
/*!40000 ALTER TABLE `work_spaces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `worker_work_spaces`
--

DROP TABLE IF EXISTS `worker_work_spaces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `worker_work_spaces` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `worker_id` bigint(20) unsigned NOT NULL,
  `date` date NOT NULL,
  `work_space_id` bigint(20) unsigned NOT NULL,
  `work_space_addon_id` bigint(20) unsigned DEFAULT NULL,
  `pricing_id` bigint(20) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `worker_work_spaces_worker_id_foreign` (`worker_id`),
  KEY `worker_work_spaces_work_space_id_foreign` (`work_space_id`),
  KEY `worker_work_spaces_work_space_addon_id_foreign` (`work_space_addon_id`),
  KEY `worker_work_spaces_pricing_id_foreign` (`pricing_id`),
  CONSTRAINT `worker_work_spaces_pricing_id_foreign` FOREIGN KEY (`pricing_id`) REFERENCES `pricings` (`id`) ON DELETE CASCADE,
  CONSTRAINT `worker_work_spaces_work_space_addon_id_foreign` FOREIGN KEY (`work_space_addon_id`) REFERENCES `work_space_addons` (`id`) ON DELETE CASCADE,
  CONSTRAINT `worker_work_spaces_work_space_id_foreign` FOREIGN KEY (`work_space_id`) REFERENCES `work_spaces` (`id`) ON DELETE CASCADE,
  CONSTRAINT `worker_work_spaces_worker_id_foreign` FOREIGN KEY (`worker_id`) REFERENCES `workers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `worker_work_spaces`
--

LOCK TABLES `worker_work_spaces` WRITE;
/*!40000 ALTER TABLE `worker_work_spaces` DISABLE KEYS */;
INSERT INTO `worker_work_spaces` VALUES (1,1,'2022-05-03',1,1,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(2,2,'2022-04-01',2,1,1,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(3,2,'2022-04-07',2,1,2,NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(4,1,'2022-07-08',11,6,12,NULL,'2022-06-10 09:51:23','2022-06-10 09:51:23'),(5,1,'2022-06-02',1,NULL,4,NULL,'2022-06-10 09:57:36','2022-06-10 09:57:36'),(6,1,'2022-06-30',11,6,12,NULL,'2022-06-12 08:24:55','2022-06-12 08:24:55');
/*!40000 ALTER TABLE `worker_work_spaces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workers`
--

DROP TABLE IF EXISTS `workers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('team','individual') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `workers_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workers`
--

LOCK TABLES `workers` WRITE;
/*!40000 ALTER TABLE `workers` DISABLE KEYS */;
INSERT INTO `workers` VALUES (1,'John','john@gmail.com','$2y$10$C4.eHUsZ4gs.YTmrMuTTE./SoJMKmi84Btf6cA0U31MBn1B.ntUDW','Developer','/providers/kGAcCMoaZ3vGHgQzAf2wI9DBToPFt1l8uWqKrblH.jpg','team',NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(2,'Yara','yara@gmail.com','$2y$10$XbA7Ry7BBYFlb9AHxYmJ6u7hzZNzI6JojdkAmwRZPNcKE9RDiQSJ2','Designer','/providers/J6KNTtcvZJkB9UNI8B5Vd2pMYNbYUzAwSF6eAOOq.jpg','individual',NULL,'2022-06-09 06:19:15','2022-06-09 06:19:15'),(3,'dina','dina@gmail.com','$2y$10$CR4iYZ4U9gjHKKcCjqusAeM/OKN56klNrR7ePXWrzgl3MOAgYJtmu','Laravel Backend Developer','workers/gE7TWvvpE0WAhF7WK6pOIeU6cYbnJfhBffP52Lmj.jpg','individual',NULL,'2022-06-12 05:56:02','2022-06-12 05:56:50');
/*!40000 ALTER TABLE `workers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-12 14:41:36
