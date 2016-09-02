-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: grupogalpanama
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.9-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `phs`
--

DROP TABLE IF EXISTS `phs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `table` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `googlemaplink` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `gmap` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `plano1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `plano2` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `plano3` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `foto1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `foto2` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `foto3` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `memoria` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `estado` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ventas` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phs`
--

LOCK TABLES `phs` WRITE;
/*!40000 ALTER TABLE `phs` DISABLE KEYS */;
INSERT INTO `phs` VALUES (3,'Nombre vacio','','','','12039492_10153342064016374_4273003294878615208_n.jpg','12039492_10153342064016374_4273003294878615208_n.jpg','12039492_10153342064016374_4273003294878615208_n.jpg','12039492_10153342064016374_4273003294878615208_n.jpg','12039492_10153342064016374_4273003294878615208_n.jpg','b.PNG','b.PNG','','','','2016-08-12 02:21:53','2016-09-02 08:35:49'),(4,'Name 3','','','','','','','','','','','','','','2016-08-12 02:22:13','2016-09-02 00:37:03'),(5,'Name 4','Address 4','','','','','','','','','','','','','2016-08-16 04:10:46','2016-08-16 04:10:46'),(7,'Name ','Address','','Google Map Link','Gil.jpg','Gil.jpg','Gil.jpg','Gil.jpg','Gil.jpg','Gil.jpg','Gil.jpg','Gil.jpg','CVGil_en.pdf','CVGil_es.pdf','2016-08-16 20:56:47','2016-08-16 20:56:47'),(8,'Name ','Address','','Google Map Link','Gil.jpg','Gil.jpg','Gil.jpg','Gil.jpg','Gil.jpg','Gil.jpg','Gil.jpg','Gil.jpg','CVGil_en.pdf','CVGil_es.pdf','2016-08-16 21:32:17','2016-08-16 21:32:17'),(9,'AAAAAA','AAAAA','','','12039492_10153342064016374_4273003294878615208_n.jpg','','','','','','','','','','2016-08-30 05:55:11','2016-08-30 05:55:11'),(10,'BBBBBBBBB','CCCCCCCCCC',NULL,'','C:\\xampp\\tmp\\php3502.tmp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-08-30 06:06:29','2016-08-30 06:06:29'),(12,'dddddd','dddddddd',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-08-30 06:11:48','2016-08-30 06:11:48'),(13,'Name edited','Address edited',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-09-01 22:19:02','2016-09-01 22:19:02'),(14,'name 3 edited','addres 3 edited',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-09-01 22:19:22','2016-09-01 22:19:22'),(15,'Blaaa','Blaaa',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-09-01 22:21:06','2016-09-01 22:21:06');
/*!40000 ALTER TABLE `phs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-02  0:55:35
