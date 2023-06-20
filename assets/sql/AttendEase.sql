CREATE DATABASE  IF NOT EXISTS `attendease` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `attendease`;
-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: attendease
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `date_absent`
--

DROP TABLE IF EXISTS `date_absent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `date_absent` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) DEFAULT NULL,
  `date_absent` date DEFAULT NULL,
  `plea` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `date_absent`
--

LOCK TABLES `date_absent` WRITE;
/*!40000 ALTER TABLE `date_absent` DISABLE KEYS */;
/*!40000 ALTER TABLE `date_absent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `date_present`
--

DROP TABLE IF EXISTS `date_present`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `date_present` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `date_in` date DEFAULT NULL,
  `date_out` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `date_present`
--

LOCK TABLES `date_present` WRITE;
/*!40000 ALTER TABLE `date_present` DISABLE KEYS */;
/*!40000 ALTER TABLE `date_present` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `date_status`
--

DROP TABLE IF EXISTS `date_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `date_status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `date_stats` date DEFAULT NULL,
  `student_status` varchar(45) DEFAULT NULL,
  `plea` varchar(45) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `date_status`
--

LOCK TABLES `date_status` WRITE;
/*!40000 ALTER TABLE `date_status` DISABLE KEYS */;
INSERT INTO `date_status` VALUES (1,'joshua.pardo30@gmail.com','2023-03-11','Late','',6),(2,'bas@bas','2023-03-11','Late',NULL,7),(3,'bas@bas','2023-03-10','Late',NULL,7),(4,'joshua.pardo30@gmail.com','2023-03-10','Late','123',6),(5,'joshua.pardo30@gmail.com','2023-03-12','Late',NULL,6),(6,'joshua.pardo30@gmail.com','2023-03-12','Late',NULL,6),(7,'joshua.pardo30@gmail.com','2023-03-12','Late',NULL,6),(8,'joshua.pardo30@gmail.com','2023-03-12','Late',NULL,6),(9,'joshua.pardo30@gmail.com','2023-03-12','Late',NULL,6),(10,'joshua.pardo30@gmail.com','2023-03-12','Late',NULL,6),(11,'joshua.pardo30@gmail.com','2023-03-12','Late',NULL,6),(12,'yugen@gmail.com','2023-03-12','Late',NULL,9),(13,'yugen@gmail.com','2023-03-12','Late',NULL,9),(14,'yugen@gmail.com','2023-03-12','Late',NULL,9),(15,'joshua.pardo30@gmail.com','2023-03-12','Late',NULL,6),(16,'yugen@gmail.com','2023-03-12','Late',NULL,9),(17,'joshua.pardo30@gmail.com','2023-03-12','Late',NULL,6),(18,'joshua.pardo30@gmail.com','2023-03-12','Late',NULL,6),(19,'joshua.pardo30@gmail.com','2023-03-12','Late',NULL,6),(20,'yugen@gmail.com','2023-03-12','Late',NULL,9),(21,'joshua.pardo30@gmail.com','2023-03-12','Late','22222',6),(22,'joshua.pardo30@gmail.com','2023-03-12','Late','1231',6),(23,'133@133','2023-03-12','Late',NULL,10),(24,'133@133','2023-03-12','Late',NULL,10),(25,'carljhon@123','2023-03-13','Late',NULL,11),(26,'joshua.pardo30@gmail.com','2023-03-13','Late',NULL,6);
/*!40000 ALTER TABLE `date_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity_information`
--

DROP TABLE IF EXISTS `entity_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `entity_information` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `contactNumber` varchar(45) DEFAULT NULL,
  `sectionName` varchar(45) DEFAULT NULL,
  `type_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_information`
--

LOCK TABLES `entity_information` WRITE;
/*!40000 ALTER TABLE `entity_information` DISABLE KEYS */;
INSERT INTO `entity_information` VALUES (2,'asas','baa7a52965b99778f38ef37f235e9053','asa','aas','asas','asas',2),(6,'joshua.pardo30@gmail.com','202cb962ac59075b964b07152d234b70','','718263812','','',1),(7,'bas@bas','f6e660ced42e946f69a41cc473d923cc','bas','bas','bas','bas',2),(8,'aa@aa','4124bc0a9335c27f086f24ba207a4912','a','a','123','123',2),(9,'','d41d8cd98f00b204e9800998ecf8427e','','','','',2),(10,'133@133','9fc3d7152ba9336a670e36d0ed79bc43','123','123','133','133',2),(11,'carljhon@123','202cb962ac59075b964b07152d234b70','pogi','ako','12312','123123',2);
/*!40000 ALTER TABLE `entity_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typeid`
--

DROP TABLE IF EXISTS `typeid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `typeid` (
  `id` int NOT NULL,
  `type_id` int DEFAULT NULL,
  `type_descriptiom` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typeid`
--

LOCK TABLES `typeid` WRITE;
/*!40000 ALTER TABLE `typeid` DISABLE KEYS */;
INSERT INTO `typeid` VALUES (1,1,'Admin'),(2,2,'Student');
/*!40000 ALTER TABLE `typeid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `viewforabsent`
--

DROP TABLE IF EXISTS `viewforabsent`;
/*!50001 DROP VIEW IF EXISTS `viewforabsent`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `viewforabsent` AS SELECT 
 1 AS `id`,
 1 AS `user_id`,
 1 AS `username`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `viewforabsent`
--

/*!50001 DROP VIEW IF EXISTS `viewforabsent`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `viewforabsent` AS select `entity_information`.`id` AS `id`,`date_status`.`user_id` AS `user_id`,`entity_information`.`username` AS `username` from (`date_status` join `entity_information` on((`entity_information`.`id` = `date_status`.`user_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-13  9:44:36
