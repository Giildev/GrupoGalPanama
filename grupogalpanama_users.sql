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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ci` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Gilberto Marcano','','itzgiiiillll@gmail.com','$2y$10$72xbgR5RT86xeNiCvqkR7uuJR3vZZxNknOwQTwElA8mY3GnoXcS1C','','','2016-07-28 18:30:08','2016-08-09 03:24:58','rqO5SHdMgBCfHNwj8Pogi4EKO1GOsWV8mVlSO5JMo8iETJIoLkKfosrDcKwv'),(2,'Karla','','itzkarly.mar@gmail.com','$2y$10$Kmg02lIKy7ByXzm3073wV.kgfNraIQmJ6Mht06geKdd4t4iIOCzy2','','','2016-07-28 18:41:33','2016-07-28 18:41:33',NULL),(3,'Jhon','Doe','jhondoe@gmail.com','$2y$10$7RvbgQfdIhcX0Kbv7UwHwe9Nh4AX.Asdu8RWs13q1smejzbYyP0m.','$2y$10$YOydLDNd6hR1aW.7m0NTSeV70RGUPmdjOYQ5s6s7pI5LF3upf.qdq','1','2016-07-28 18:49:56','2016-08-10 05:59:46','zoBDzFk2rytn9RTiR28VbpOBErrNRD9TnBHVqOm32Lg4fPMIcTu2SF6TemDJ'),(4,'Another','User','User@root.com','$2y$10$Irw7FSoQLxBvxWQ26Pb.7uq73/kxWeTbwe6BQGs78sf0RwStKE0WW','123456','1','2016-07-28 19:09:38','2016-08-03 07:19:04','A4KfR1qsIDEGRZ44wKpkQcNrKLXhsuvKKhW2nSWFDOAN852SxejHrkVx8eWC'),(5,'usuario','nuevo','usuario@nuevo.com','$2y$10$j5b603vCCzQqYEhsbZGn2.h.MDUM3HO7AIMHXuQ1/27zyl.BN3aJ.','123456','1','2016-08-24 05:51:53','2016-08-24 05:51:53',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-02  0:55:36
