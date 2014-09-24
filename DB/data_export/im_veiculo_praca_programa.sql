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
-- Table structure for table `veiculo_praca_programa`
--

DROP TABLE IF EXISTS `veiculo_praca_programa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `veiculo_praca_programa` (
  `fk_id_veiculo` int(11) NOT NULL,
  `fk_id_praca` int(11) NOT NULL,
  `fk_id_programa` int(11) NOT NULL,
  PRIMARY KEY (`fk_id_veiculo`,`fk_id_praca`,`fk_id_programa`),
  KEY `fk_veiculo_praca_programa_programa1_idx` (`fk_id_programa`),
  CONSTRAINT `fk_veiculo_praca_programa_programa1` FOREIGN KEY (`fk_id_programa`) REFERENCES `programa` (`id_programa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_veiculo_praca_programa_veiculo_praca1` FOREIGN KEY (`fk_id_veiculo`, `fk_id_praca`) REFERENCES `veiculo_praca` (`fk_id_veiculo`, `fk_id_praca`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veiculo_praca_programa`
--

LOCK TABLES `veiculo_praca_programa` WRITE;
/*!40000 ALTER TABLE `veiculo_praca_programa` DISABLE KEYS */;
INSERT INTO `veiculo_praca_programa` VALUES (1,1,1),(1,1,2),(1,17,2),(1,18,2),(3,1,2),(4,1,2),(5,1,2),(6,1,2),(9,1,2),(10,1,2),(11,1,2),(12,1,2),(13,1,2),(14,1,2),(15,1,2),(30,1,2),(1,1,3),(1,1,4),(9,1,5),(10,1,5),(11,1,5),(12,1,5),(13,1,5),(14,1,5),(15,1,5),(30,1,5),(1,1,6),(1,14,6),(1,1,7),(1,1,8),(1,1,9),(1,1,10),(1,1,11),(1,1,12),(1,1,13),(1,1,14),(1,1,15),(1,1,16),(1,1,17),(1,1,18),(1,1,19),(1,1,20),(1,1,21),(1,1,22),(1,1,23),(1,5,23),(1,18,23),(1,19,23),(1,1,24),(1,1,25),(1,1,26),(1,1,27),(1,1,29),(1,1,30),(1,1,31),(1,1,32),(1,1,33),(1,1,34),(1,1,35),(1,3,35),(1,5,35),(1,6,35),(1,10,35),(1,12,35),(1,13,35),(1,19,35),(1,1,36),(1,1,37),(1,1,38),(1,1,39),(1,3,40),(1,5,40),(1,6,40),(1,10,40),(1,12,40),(1,13,40),(1,14,40),(1,17,40),(1,19,40),(1,13,41),(1,5,42),(1,6,42),(1,10,42),(1,13,42),(1,17,42),(1,18,42),(1,19,42),(1,13,43),(1,6,44),(1,13,44),(1,3,45),(1,6,46),(1,6,47),(1,12,48),(1,8,49),(1,8,50),(1,8,51),(1,8,52),(1,8,53),(1,8,54),(1,8,55),(1,8,56),(1,8,57),(1,8,58),(1,8,59),(1,10,60),(1,10,61),(1,10,62),(1,10,63),(1,10,64),(1,14,65),(1,14,66),(1,14,67),(1,18,68),(1,18,69),(1,18,70),(1,18,71),(1,17,72),(1,17,73),(1,17,74),(1,17,75),(1,17,76),(1,17,77),(1,5,78),(1,19,78),(1,5,79),(1,19,79),(1,5,80),(1,19,80),(1,9,81);
/*!40000 ALTER TABLE `veiculo_praca_programa` ENABLE KEYS */;
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
