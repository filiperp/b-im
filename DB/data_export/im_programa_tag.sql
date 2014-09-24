CREATE DATABASE  IF NOT EXISTS `im` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `im`;
-- MySQL dump 10.13  Distrib 5.6.17, for osx10.6 (i386)
--
-- Host: 192.168.33.10    Database: im
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

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
-- Table structure for table `programa_tag`
--

DROP TABLE IF EXISTS `programa_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programa_tag` (
  `fk_id_programa` int(11) NOT NULL,
  `fk_id_tag` int(11) NOT NULL,
  PRIMARY KEY (`fk_id_programa`,`fk_id_tag`),
  KEY `fk_programa_has_tag_tag1_idx` (`fk_id_tag`),
  KEY `fk_programa_has_tag_programa1_idx` (`fk_id_programa`),
  CONSTRAINT `fk_programa_has_tag_programa1` FOREIGN KEY (`fk_id_programa`) REFERENCES `programa` (`id_programa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_programa_has_tag_tag1` FOREIGN KEY (`fk_id_tag`) REFERENCES `tag` (`id_tag`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programa_tag`
--

LOCK TABLES `programa_tag` WRITE;
/*!40000 ALTER TABLE `programa_tag` DISABLE KEYS */;
INSERT INTO `programa_tag` VALUES (9,8),(10,8),(11,8),(12,8),(13,8),(14,8),(15,8),(16,8),(17,8),(18,8),(19,8),(30,8),(31,8),(34,8),(36,8),(43,8),(44,8),(46,8),(49,8),(50,8),(51,8),(52,8),(53,8),(54,8),(60,8),(61,8),(62,8),(63,8),(64,8),(65,8),(66,8),(67,8),(68,8),(69,8),(70,8),(71,8),(72,8),(73,8),(78,8),(79,8),(80,8),(20,9),(21,9),(22,9),(23,9),(24,9),(25,9),(27,9),(28,9),(40,9),(49,9),(26,10),(29,10),(54,10),(12,11),(19,11),(30,11),(41,11),(46,11),(55,11),(56,11),(61,11),(32,12),(33,12),(10,13),(11,13),(13,13),(26,13),(35,13),(37,13),(38,13),(39,13),(42,13),(43,13),(44,13),(45,13),(47,13),(48,13),(53,13),(57,13),(58,13),(59,13),(70,13),(74,13),(75,13),(76,13),(77,13),(81,13),(1,25),(2,25),(3,25),(4,25),(5,25),(6,25),(7,25),(8,25);
/*!40000 ALTER TABLE `programa_tag` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-24 15:24:43
