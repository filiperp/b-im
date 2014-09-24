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
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tag` (
  `id_tag` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `ref_tag` varchar(45) DEFAULT NULL COMMENT 'Nome Ref.',
  `nome_tag` varchar(45) DEFAULT NULL COMMENT 'Nome',
  `tipo_tag` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tag`),
  KEY `ref` (`ref_tag`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
INSERT INTO `tag` VALUES (1,'tv_aberta','Tv Aberta','veiculo'),(2,'newco','Newco','veiculo'),(3,'outernet','Outernet','veiculo'),(4,'radio','Rádio','veiculo'),(5,'midia_impressa','Mídia Impressa','veiculo'),(6,'midia_digital','Mídias Digitais','veiculo'),(7,'entretenimento','Entretenimento','veiculo'),(8,'entretenimento','Entretenimento','programa'),(9,'esportes','Esportes','programa'),(10,'eventos','Eventos','programa'),(11,'feminino','Feminino','programa'),(12,'filmes_series','Filmes e Séries','programa'),(13,'jornalismo','Jornalismo','programa'),(14,'vimeo','Vimeo','arquivo'),(15,'youtube','Youtube','arquivo'),(16,'pdf','PDF','arquivo'),(17,'doc','Word','arquivo'),(18,'xls','Excel','arquivo'),(19,'ppt','PowerPoint','arquivo'),(20,'agencias','Agências','analise'),(21,'anunciantes','Anunciantes','analise'),(22,'performance','Performance','analise'),(23,'mercado','Mercado','analise'),(24,'audiencia','Audiência','analise'),(25,'material','Material','programa');
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
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
