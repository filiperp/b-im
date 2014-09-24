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
-- Table structure for table `noticia`
--

DROP TABLE IF EXISTS `noticia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticia` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `ref_noticia` varchar(45) NOT NULL COMMENT 'Nome Ref.',
  `nome_noticia` varchar(100) NOT NULL COMMENT 'Nome',
  `descricao_noticia` varchar(512) NOT NULL COMMENT 'Descrição',
  `link_noticia` varchar(512) NOT NULL COMMENT 'Link',
  `ativo_noticia` tinyint(1) NOT NULL COMMENT 'Ativo',
  `imagem_noticia` varchar(255) NOT NULL COMMENT 'Imagem',
  PRIMARY KEY (`id_noticia`),
  KEY `ref` (`ref_noticia`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticia`
--

LOCK TABLES `noticia` WRITE;
/*!40000 ALTER TABLE `noticia` DISABLE KEYS */;
INSERT INTO `noticia` VALUES (1,'meio_mensagem','Meio & Mensagem','RSS Meio & Mensagem','http://www.meioemensagem.com.br/home/rss/geral.xml',1,'../uploads/noticia/meio_mensagem__1__noticia.png'),(2,'blue_bus','Blue Bus','RSS Blue Bus','http://www.bluebus.com.br/feed/',1,'../uploads/noticia/blue_bus__2__noticia.jpg'),(3,'exame','Exame','RSS Exame','http://exame.abril.com.br/rss/revista-exame/feed.rss',1,'../uploads/noticia/exame__3__noticia.png'),(4,'valor_economico','Valor Econômico','RSS Valor Econômico','http://www.valor.com.br/brasil/rss',1,'../uploads/noticia/valor_economico__4__noticia.jpg'),(5,'epoca_negocios','Época Negócios','RSS Época Negócios','http://revistaepoca.globo.com/dyn/Brasil/rss2.xml',1,'../uploads/noticia/epoca_negocios__5__noticia.png');
/*!40000 ALTER TABLE `noticia` ENABLE KEYS */;
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
