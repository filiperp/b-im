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
-- Table structure for table `praca`
--

DROP TABLE IF EXISTS `praca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `praca` (
  `id_praca` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `ref_praca` varchar(45) NOT NULL COMMENT 'Nome Ref.',
  `nome_praca` varchar(100) NOT NULL COMMENT 'Nome',
  `descricao_praca` varchar(512) NOT NULL COMMENT 'Descrição',
  `ativo_praca` tinyint(1) NOT NULL COMMENT 'Ativo',
  `imagem_praca` varchar(255) NOT NULL,
  PRIMARY KEY (`id_praca`),
  KEY `ref` (`ref_praca`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `praca`
--

LOCK TABLES `praca` WRITE;
/*!40000 ALTER TABLE `praca` DISABLE KEYS */;
INSERT INTO `praca` VALUES (1,'NET','NET','Rede Nacional',1,''),(2,'barra_mansa','Barra Mansa','Barra Mansa',1,''),(3,'belo_horizonte','Belo Horizonte','Belo Horizonte',1,''),(4,'brasilia','Brasília','Brasília',1,''),(5,'campinas','Campinas','Campinas',1,''),(6,'curitiba','Curitiba','Curitiba',1,''),(7,'manaus','Manaus','Manaus',1,''),(8,'natal','Natal','Natal',1,''),(9,'palmas','Palmas','Palmas',1,''),(10,'porto_alegre','Porto Alegre','Porto Alegre',1,''),(11,'presidente_prudente','Presidente Prudente','Presidente Prudente',1,''),(12,'rio_janeiro','Rio de Janeiro','Rio de Janeiro',1,''),(13,'salvador','Salvador','Salvador',1,''),(14,'sao_paulo','São Paulo','São Paulo',1,''),(15,'taubate','Taubaté','Taubaté',1,''),(16,'uberaba','Uberaba','Uberaba',0,''),(17,'sp_vale','São Paulo - Vale','São Paulo - Vale',1,''),(18,'sp_interior','São Paulo - Interior','São Paulo - Interior',1,''),(19,'sp_campinas','São Paulo - Campinas','São Paulo - Campinas',1,'');
/*!40000 ALTER TABLE `praca` ENABLE KEYS */;
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
