/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.4.5-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: disduk
-- ------------------------------------------------------
-- Server version	11.4.5-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `role` enum('admin','front_office','penduduk') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documentcategories`
--

DROP TABLE IF EXISTS `documentcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `documentcategories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `requirements` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documentcategories`
--

LOCK TABLES `documentcategories` WRITE;
/*!40000 ALTER TABLE `documentcategories` DISABLE KEYS */;
/*!40000 ALTER TABLE `documentcategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hasils`
--

DROP TABLE IF EXISTS `hasils`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `hasils` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) unsigned NOT NULL,
  `cluster` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `hasils_admin_id_foreign` (`admin_id`),
  CONSTRAINT `hasils_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hasils`
--

LOCK TABLES `hasils` WRITE;
/*!40000 ALTER TABLE `hasils` DISABLE KEYS */;
/*!40000 ALTER TABLE `hasils` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `identificationcards`
--

DROP TABLE IF EXISTS `identificationcards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `identificationcards` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) unsigned NOT NULL,
  `place_of_birth` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `addres` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `marital_status` tinyint(4) NOT NULL,
  `job` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `identity_number` char(16) NOT NULL,
  `blood_type` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `identificationcards_admin_id_foreign` (`admin_id`),
  CONSTRAINT `identificationcards_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `identificationcards`
--

LOCK TABLES `identificationcards` WRITE;
/*!40000 ALTER TABLE `identificationcards` DISABLE KEYS */;
/*!40000 ALTER TABLE `identificationcards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jawabans`
--

DROP TABLE IF EXISTS `jawabans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `jawabans` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) unsigned NOT NULL,
  `kuisioner_id` int(11) unsigned NOT NULL,
  `jawaban` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jawabans_admin_id_foreign` (`admin_id`),
  KEY `jawabans_kuisioner_id_foreign` (`kuisioner_id`),
  CONSTRAINT `jawabans_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `jawabans_kuisioner_id_foreign` FOREIGN KEY (`kuisioner_id`) REFERENCES `kuisioners` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jawabans`
--

LOCK TABLES `jawabans` WRITE;
/*!40000 ALTER TABLE `jawabans` DISABLE KEYS */;
/*!40000 ALTER TABLE `jawabans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kuisioners`
--

DROP TABLE IF EXISTS `kuisioners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `kuisioners` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pertanyaan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kuisioners`
--

LOCK TABLES `kuisioners` WRITE;
/*!40000 ALTER TABLE `kuisioners` DISABLE KEYS */;
/*!40000 ALTER TABLE `kuisioners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES
(1,'2025-01-04-174937','App\\Database\\Migrations\\CreateAdminTable','default','App',1742756778,1),
(2,'2025-01-04-175142','App\\Database\\Migrations\\CreateIdentificationCardTable','default','App',1742756778,1),
(3,'2025-01-04-175241','App\\Database\\Migrations\\CreateDocumentCategorieTable','default','App',1742756778,1),
(4,'2025-01-04-175301','App\\Database\\Migrations\\CreateSubmissionTable','default','App',1742756779,1),
(5,'2025-03-23-181844','App\\Database\\Migrations\\CreateKuisionerTable','default','App',1742756779,1),
(6,'2025-03-23-181906','App\\Database\\Migrations\\CreateJawabanTable','default','App',1742756779,1),
(7,'2025-03-23-181912','App\\Database\\Migrations\\CreateHasilTable','default','App',1742756779,1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `submissions`
--

DROP TABLE IF EXISTS `submissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `submissions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) unsigned NOT NULL,
  `document_id` int(11) unsigned NOT NULL,
  `status` enum('pending','accepte','process','completed') NOT NULL,
  `queue` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `submissions_admin_id_foreign` (`admin_id`),
  KEY `submissions_document_id_foreign` (`document_id`),
  CONSTRAINT `submissions_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `submissions_document_id_foreign` FOREIGN KEY (`document_id`) REFERENCES `documentcategories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `submissions`
--

LOCK TABLES `submissions` WRITE;
/*!40000 ALTER TABLE `submissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `submissions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2025-03-24 20:18:08
