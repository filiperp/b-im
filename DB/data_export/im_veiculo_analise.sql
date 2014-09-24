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
-- Table structure for table `veiculo_analise`
--

DROP TABLE IF EXISTS `veiculo_analise`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `veiculo_analise` (
  `fk_id_veiculo` int(11) NOT NULL,
  `fk_id_analise` int(11) NOT NULL,
  PRIMARY KEY (`fk_id_veiculo`,`fk_id_analise`),
  KEY `fk_veiculo_analise_veiculo1_idx` (`fk_id_veiculo`),
  KEY `fk_veiculo_analise_analise1_idx` (`fk_id_analise`),
  CONSTRAINT `fk_veiculo_analise_analise1` FOREIGN KEY (`fk_id_analise`) REFERENCES `analise` (`id_analise`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_veiculo_analise_veiculo1` FOREIGN KEY (`fk_id_veiculo`) REFERENCES `veiculo` (`id_veiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='analise_id_analise';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veiculo_analise`
--

LOCK TABLES `veiculo_analise` WRITE;
/*!40000 ALTER TABLE `veiculo_analise` DISABLE KEYS */;
INSERT INTO `veiculo_analise` VALUES (1,1),(1,2),(1,3),(1,4),(1,5),(1,6),(1,7),(1,8),(1,9),(1,10),(1,11),(1,12),(1,13),(1,14),(1,15),(1,16),(1,17),(1,18),(1,19),(1,20),(1,21),(3,12),(3,13),(3,22),(3,23),(3,24),(3,25),(3,26),(3,27),(3,28),(4,12),(4,13),(4,22),(4,23),(4,24),(4,25),(4,26),(4,27),(4,28),(5,12),(5,13),(5,22),(5,23),(5,24),(5,25),(5,26),(5,27),(5,28),(6,12),(6,13),(6,22),(6,23),(6,24),(6,25),(6,26),(6,27),(6,28),(7,12),(7,13),(7,22),(7,23),(7,24),(7,25),(7,26),(7,27),(7,28),(8,12),(8,13),(8,22),(8,23),(8,24),(8,25),(8,26),(8,27),(8,28),(9,29),(9,30),(9,31),(9,32),(9,33),(10,29),(10,30),(10,31),(10,32),(10,33),(11,29),(11,30),(11,31),(11,32),(11,33),(12,29),(12,30),(12,31),(12,32),(12,33),(13,29),(13,30),(13,31),(13,32),(13,33),(14,29),(14,30),(14,31),(14,32),(14,33),(15,29),(15,30),(15,31),(15,32),(15,33),(30,12),(30,13),(30,29),(30,30),(30,31),(30,32),(30,33);
/*!40000 ALTER TABLE `veiculo_analise` ENABLE KEYS */;
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
