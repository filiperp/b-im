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
-- Table structure for table `analise_tag`
--

DROP TABLE IF EXISTS `analise_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `analise_tag` (
  `fk_id_analise` int(11) NOT NULL,
  `fk_id_tag` int(11) NOT NULL,
  PRIMARY KEY (`fk_id_analise`,`fk_id_tag`),
  KEY `fk_analise_has_tag_tag1_idx` (`fk_id_tag`),
  KEY `fk_analise_has_tag_analise1_idx` (`fk_id_analise`),
  CONSTRAINT `fk_analise_has_tag_analise1` FOREIGN KEY (`fk_id_analise`) REFERENCES `analise` (`id_analise`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_analise_has_tag_tag1` FOREIGN KEY (`fk_id_tag`) REFERENCES `tag` (`id_tag`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analise_tag`
--

LOCK TABLES `analise_tag` WRITE;
/*!40000 ALTER TABLE `analise_tag` DISABLE KEYS */;
INSERT INTO `analise_tag` VALUES (1,23),(2,23),(3,23),(4,23),(5,23),(6,23),(7,23),(8,23),(9,23),(10,23),(11,23),(12,23),(13,23),(22,23),(23,23),(24,23),(29,23),(30,23),(14,24),(15,24),(16,24),(17,24),(18,24),(19,24),(20,24),(21,24),(25,24),(26,24),(27,24),(28,24),(31,24),(32,24),(33,24);
/*!40000 ALTER TABLE `analise_tag` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-24 15:24:44
