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
-- Table structure for table `arquivo`
--

DROP TABLE IF EXISTS `arquivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `arquivo` (
  `id_arquivo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `ref_arquivo` varchar(45) NOT NULL COMMENT 'Nome Ref.',
  `nome_arquivo` varchar(100) NOT NULL COMMENT 'Nome',
  `caminho_arquivo` varchar(512) NOT NULL COMMENT 'Caminho',
  `ativo_arquivo` tinyint(1) NOT NULL COMMENT 'Ativo',
  `fk_id_veiculo` int(11) NOT NULL,
  `fk_id_praca` int(11) NOT NULL,
  `fk_id_programa` int(11) NOT NULL,
  PRIMARY KEY (`id_arquivo`),
  KEY `ref` (`ref_arquivo`),
  KEY `fk_arquivo_veiculo_praca_programa1_idx` (`fk_id_veiculo`,`fk_id_praca`,`fk_id_programa`),
  CONSTRAINT `fk_arquivo_veiculo_praca_programa1` FOREIGN KEY (`fk_id_veiculo`, `fk_id_praca`, `fk_id_programa`) REFERENCES `veiculo_praca_programa` (`fk_id_veiculo`, `fk_id_praca`, `fk_id_programa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arquivo`
--

LOCK TABLES `arquivo` WRITE;
/*!40000 ALTER TABLE `arquivo` DISABLE KEYS */;
INSERT INTO `arquivo` VALUES (1,'programacao_2014_1','Vídeo 1 da Programação 2014','87215702',1,1,1,1),(2,'band_net_tabela_precos_2014','Tabela de Preço 2014','../uploads/arquivo/band_net_tabela_precos_2014.pdf',1,1,1,2),(3,'programacao_2014_2','Vídeo 2 Programação 2014','100412764',1,1,1,1),(4,'band_net_pedido_insercao','Pedido de Inserção','../uploads/arquivo/band_net_pedido_insercao.xlsx',1,1,1,2);
/*!40000 ALTER TABLE `arquivo` ENABLE KEYS */;
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
