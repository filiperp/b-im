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
-- Table structure for table `veiculo`
--

DROP TABLE IF EXISTS `veiculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `veiculo` (
  `id_veiculo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `ref_veiculo` varchar(45) NOT NULL COMMENT 'Nome Ref.',
  `nome_veiculo` varchar(100) NOT NULL COMMENT 'Nome',
  `descricao_veiculo` varchar(512) NOT NULL COMMENT 'Descrição',
  `imagem_veiculo` varchar(255) NOT NULL COMMENT 'Imagem',
  `ativo_veiculo` tinyint(1) NOT NULL COMMENT 'Ativo',
  PRIMARY KEY (`id_veiculo`),
  KEY `ref` (`ref_veiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veiculo`
--

LOCK TABLES `veiculo` WRITE;
/*!40000 ALTER TABLE `veiculo` DISABLE KEYS */;
INSERT INTO `veiculo` VALUES (1,'band','BAND','Canal Aberto Bandeirantes','../uploads/veiculo/band__1__veiculo.png',1),(2,'canal_21','Canal 21','Canal 21','../uploads/veiculo/canal_21__2__veiculo.png',0),(3,'band_news','Band News','Band News','../uploads/veiculo/band_news__3__veiculo.png',1),(4,'band_sports','Band Sports','Band Sports','../uploads/veiculo/band_sports__4__veiculo.png',1),(5,'terra_viva','Terra Viva','Terra Viva','../uploads/veiculo/terra_viva__5__veiculo.png',1),(6,'band_internacional','Band Internacional','Band Internacional','../uploads/veiculo/band_internacional__6__veiculo.png',1),(7,'arte1','Arte 1','Arte 1','../uploads/veiculo/arte1__7__veiculo.png',1),(8,'sexprive','Sexprivé','Sexprivé','../uploads/veiculo/sexprive__8__veiculo.png',0),(9,'orla_tv','Orla TV','Orla TV','../uploads/veiculo/orla_tv__9__veiculo.png',0),(10,'mao_dupla','Mão Dupla','Mão Dupla','../uploads/veiculo/mao_dupla__10__veiculo.png',0),(11,'tv_minuto','TV Minuto','TV Minuto','../uploads/veiculo/tv_minuto__11__veiculo.png',0),(12,'nextmidia','Nextmidia Brasil','Nextmidia Brasil','../uploads/veiculo/nextmidia__12__veiculo.png',0),(13,'canal_voce','Canal Você','Canal Você','../uploads/veiculo/canal_voce__13__veiculo.png',0),(14,'tvo','TVO','TVO','../uploads/veiculo/tvo__14__veiculo.png',0),(15,'movtv','MOVTV','MOVTV','../uploads/veiculo/movtv__15__veiculo.png',0),(16,'radio_bandeirantes','Rádio Bandeirantes','Rádio Bandeirantes','../uploads/veiculo/radio_bandeirantes__16__veiculo.png',0),(17,'band_news_fm','Rádio Band News FM','Rádio Band News FM','../uploads/veiculo/band_news_fm__17__veiculo.png',0),(18,'band_fm','Rádio Band FM','Rádio Band FM','../uploads/veiculo/band_fm__18__veiculo.png',0),(19,'sulamerica_transito','Rádio Sulamérica Trânsito','Rádio Sulamérica Trânsito','../uploads/veiculo/sulamerica_transito__19__veiculo.png',0),(20,'nativa','Rádio Nativa','Rádio Nativa','../uploads/veiculo/nativa__20__veiculo.png',0),(21,'bradesco_esportes','Rádio Bradesco Esportes','Rádio Bradesco Esportes','../uploads/veiculo/bradesco_esportes__21__veiculo.png',0),(22,'mpb','Rádio MPB','Rádio MPB','../uploads/veiculo/mpb__22__veiculo.png',0),(23,'educadora','Rádio Educadora','Rádio Educadora','../uploads/veiculo/educadora__23__veiculo.png',0),(24,'ipanema','Rádio Ipanema','Rádio Ipanema','../uploads/veiculo/ipanema__24__veiculo.png',0),(25,'band_vale','Rádio Band Vale','Rádio Band Vale','../uploads/veiculo/band_vale__25__veiculo.png',0),(26,'stereo_vale','Rádio Stereo Vale','Rádio Stereo Vale','../uploads/veiculo/stereo_vale__26__veiculo.png',0),(27,'primeiramao','Primeiramão','Primeiramão','../uploads/veiculo/primeiramao__27__veiculo.png',0),(28,'metro','Metro Jornal','Metro Jornal','../uploads/veiculo/metro__28__veiculo.png',1),(29,'modern','Modern Airport Media','Modern Airport Media','../uploads/veiculo/modern__29__veiculo.png',0),(30,'outernet','Outernet','Outernet','../uploads/veiculo/outernet__30__veiculo.png',1),(31,'mgm','MGM','MGM','../uploads/veiculo/mgm__31__veiculo.png',1);
/*!40000 ALTER TABLE `veiculo` ENABLE KEYS */;
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
