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
-- Table structure for table `programa`
--

DROP TABLE IF EXISTS `programa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programa` (
  `id_programa` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `ref_programa` varchar(45) NOT NULL COMMENT 'Nome Ref.',
  `nome_programa` varchar(100) NOT NULL COMMENT 'Nome',
  `descricao_programa` varchar(512) NOT NULL COMMENT 'Descrição',
  `imagem_programa` varchar(255) NOT NULL COMMENT 'Imagem',
  `ativo_programa` tinyint(1) NOT NULL COMMENT 'Ativo',
  PRIMARY KEY (`id_programa`),
  KEY `ref` (`ref_programa`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programa`
--

LOCK TABLES `programa` WRITE;
/*!40000 ALTER TABLE `programa` DISABLE KEYS */;
INSERT INTO `programa` VALUES (1,'programacao','Programação','Programação do Veículo','../uploads/programa/programacao__1__programa.png',1),(2,'tabela_precos','Tabela de Preços do Veículo','Tabela de Preços do Veículo','../uploads/programa/tabela_precos__2__programa.png',1),(3,'pedido_insercao','Pedido de Inserção','Pedido de Inserção','../uploads/programa/pedido_insercao__3__programa.png',1),(4,'grade_patrocinadores','Grade de Patrocinadores','Grade de Patrocinadores','../uploads/programa/grade_patrocinadores__4__programa.png',1),(5,'apresentacoes','Apresentações','Apresentações','../uploads/programa/apresentacoes__5__programa.png',1),(6,'estudo_audiencia','Estudo de Audiência','Estudo de Audiência','../uploads/programa/estudo_audiencia__6__programa.png',1),(7,'relacao_anunciantes_outras','Relação de Anunciantes com Outras Emissoras (MErchandising)','Relação de Anunciantes com Outras Emissoras (MErchandising)','../uploads/programa/relacao_anunciantes_outras__7__programa.png',1),(8,'aoces_diferenciadas_merchandising','Ações Diferenciadas de Merchandising','Ações Diferenciadas de Merchandising','../uploads/programa/aoces_diferenciadas_merchandising__8__programa.png',1),(9,'agora_e_tarde','Agora é Tarde','Agora é Tarde','../uploads/programa/agora_e_tarde__9__programa.jpg',1),(10,'a_liga','A Liga','A Liga','../uploads/programa/a_liga__10__programa.jpg',1),(11,'cqc','CQC','CQC','../uploads/programa/cqc__11__programa.jpg',1),(12,'master_chef','Master Chef','Master Chef','../uploads/programa/master_chef__12__programa.jpg',1),(13,'mundo_segundo_brasileiros','O Mundo Segundo os Brasileiros','O Mundo Segundo os Brasileiros','../uploads/programa/mundo_segundo_brasileiros__13__programa.jpg',1),(14,'panico_band','Pânico na Band','Pânico na Band','../uploads/programa/panico_band__14__programa.jpg',1),(15,'policia_24h','Polícia 24 Horas','Polícia 24 Horas','../uploads/programa/policia_24h__15__programa.jpg',1),(16,'sabe_nao_sabe','Sabe ou não Sabe','Sabe ou não Sabe','../uploads/programa/sabe_nao_sabe__16__programa.jpg',1),(17,'ta_na_tela','Tá Na Tela','Tá Na Tela','../uploads/programa/ta_na_tela__17__programa.jpg',1),(18,'top_20','Top 20','Top 20','../uploads/programa/top_20__18__programa.png',1),(19,'trip_tv','Trip TV','Trip TV','../uploads/programa/trip_tv__19__programa.jpg',1),(20,'band_esporte_clube','Band Esporte Clube','Band Esporte Clube','../uploads/programa/band_esporte_clube__20__programa.jpg',1),(21,'futebol','Futebol 2014','Band Esporte Clube','../uploads/programa/futebol__21__programa.jpg',1),(22,'gol_grande_momento_futebol','Gol o Grande Momento do Futebol','Gol o Grande Momento do Futebol','../uploads/programa/gol_grande_momento_futebol__22__programa.jpg',1),(23,'jogo_aberto','Jogo Aberto','Jogo Aberto','../uploads/programa/jogo_aberto__23__programa.jpg',1),(24,'pre_jogo','Pré Jogo','Pré Jogo','../uploads/programa/pre_jogo__24__programa.jpg',1),(25,'3_tempo','Terceiro Tempo','Terceiro Tempo','../uploads/programa/3_tempo__25__programa.jpg',1),(26,'eleicoes_2014','Eleições 2014','Eleições 2014','../uploads/programa/eleicoes_2014__26__programa.jpg',1),(27,'porsche_cup','Porsche GT3 Cup Challenge ','Porsche GT3 Cup Challenge ','../uploads/programa/porsche_cup__27__programa.jpg',1),(28,'formula_indy','Fórmula Indy','Fórmula Indy','../uploads/programa/formula_indy__28__programa.jpg',1),(29,'miss_brasil','Miss Brasil','Miss Brasil','../uploads/programa/miss_brasil__29__programa.png',1),(30,'dia_dia','Dia a Dia','Dia a Dia','../uploads/programa/dia_dia__30__programa.jpg',1),(31,'band_kids','Band Kids','Bnad Kids','../uploads/programa/band_kids__31__programa.jpg',1),(32,'cinema_madrugada','Cinema na Madrugada','Cinema na Madrugada','../uploads/programa/cinema_madrugada__32__programa.jpg',1),(33,'himym','Como Eu Conheci Sua Mãe','Como Eu Conheci Sua Mãe','../uploads/programa/himym__33__programa.jpg',1),(34,'simpsons','Os SImpsons','Os SImpsons','../uploads/programa/simpsons__34__programa.jpg',1),(35,'brasil_urgente','Brasil Urgente','Brasil Urgente','../uploads/programa/brasil_urgente__35__programa.jpg',1),(36,'canal_livre','Canal Livre','Canal Livre','../uploads/programa/canal_livre__36__programa.jpg',1),(37,'cafe_jornal','Café Jornal','Café Jornal','../uploads/programa/cafe_jornal__37__programa.jpg',1),(38,'jornal_band','Jornal da Band','Jornal da Band','../uploads/programa/jornal_band__38__programa.jpg',1),(39,'jornal_noite','Jornal da Noite','Jornal da Noite','../uploads/programa/jornal_noite__39__programa.jpg',1),(40,'donos_bola','Donos da Bola','Donos da Bola','../uploads/programa/donos_bola__40__programa.jpg',1),(41,'prato_casa','O Programa Prato da Casa','O Programa Prato da Casa','../uploads/programa/prato_casa__41__programa.jpg',1),(42,'band_cidade','Band Cidade','Band Cidade','../uploads/programa/band_cidade__42__programa.jpg',1),(43,'band_comunidade','Band Comunidade','Band Comunidade','../uploads/programa/band_comunidade__43__programa.jpg',1),(44,'band_entrevista','Band Entrevista','Band Entrevista','../uploads/programa/band_entrevista__44__programa.jpg',1),(45,'band_minas','Band Minas','Band Minas','../uploads/programa/band_minas__45__programa.jpg',1),(46,'band_shop','Band Shop','Band Shop','../uploads/programa/band_shop__46__programa.jpg',1),(47,'pr_acontece','PR Acontece','PR Acontece','../uploads/programa/pr_acontece__47__programa.jpg',1),(48,'jornal_rio','Jornal do Rio','Jornal do Rio','../uploads/programa/jornal_rio__48__programa.jpg',1),(49,'aventurados','Aventurados','Aventurados','../uploads/programa/aventurados__49__programa.jpg',1),(50,'batendo_perna','Batendo Perna','Batendo Perna','../uploads/programa/batendo_perna__50__programa.jpg',1),(51,'paredao_na_tv','Programa Paredão na TV','Programa Paredão na TV','../uploads/programa/paredao_na_tv__51__programa.jpg',1),(52,'valeu_boi','Valeu o Boi','Valeu o Boi','../uploads/programa/valeu_boi__52__programa.jpg',1),(53,'auto_motor','Auto Motor Vrum','Auto Motor Vrum','../uploads/programa/auto_motor__53__programa.jpg',1),(54,'olho_folia','De Olho na Folia','De Olho na Folia','../uploads/programa/olho_folia__54__programa.jpg',1),(55,'band_mulher','Band Mulher','Band Mulher','../uploads/programa/band_mulher__55__programa.jpg',1),(56,'papo_fogao','Papo de Fogão','Papo de Fogão','../uploads/programa/papo_fogao__56__programa.jpg',1),(57,'rn_acontece','RN Acontece','RN Acontece','../uploads/programa/rn_acontece__57__programa.jpg',1),(58,'rn_urgente_1','Rio Grande do Norte Urgente - 1a. Edição','Rio Grande do Norte Urgente - 1a. Edição','../uploads/programa/rn_urgente_1__58__programa.jpg',1),(59,'rn_urgente_2','Rio Grande do Norte Urgente - 2a. Edição','Rio Grande do Norte Urgente - 2a. Edição','../uploads/programa/rn_urgente_2__59__programa.jpg',1),(60,'ta_na_hora','Tá Na Hora','Tá Na Hora','../uploads/programa/ta_na_hora__60__programa.jpg',1),(61,'trilha_sabores','Na Trilha dos Sabores','Na Trilha dos Sabores','../uploads/programa/trilha_sabores__61__programa.jpg',1),(62,'preliminar','Preliminar','Preliminar','../uploads/programa/preliminar__62__programa.jpg',1),(63,'agroband','Agroband','Agroband','../uploads/programa/agroband__63__programa.jpg',1),(64,'imoveis_class_tv','Imóveis Class TV','Imóveis Class TV','../uploads/programa/imoveis_class_tv__64__programa.jpg',1),(65,'cobertura_especial','Cobertura Especial','Cobertura Especial','../uploads/programa/cobertura_especial__65__programa.jpg',1),(66,'las_vegas','Las Vegas','Las Vegas','../uploads/programa/las_vegas__66__programa.jpg',1),(67,'so_risos','Só Risos','Só Risos','../uploads/programa/so_risos__67__programa.jpg',1),(68,'super_util','Super Útil','Super Útil','../uploads/programa/super_util__68__programa.jpg',1),(69,'band_rural','Band Rural','Band Rural','../uploads/programa/band_rural__69__programa.jpg',1),(70,'especial_cidades','Especial Cidades','Especial Cidades','../uploads/programa/especial_cidades__70__programa.jpg',1),(71,'diario_rural','Diário Rural','Diário Rural','../uploads/programa/diario_rural__71__programa.jpg',1),(72,'falando_nisso','Falando Nisso','Falando Nisso','../uploads/programa/falando_nisso__72__programa.jpg',1),(73,'republica_1039','República 103.9','República 103.9','../uploads/programa/republica_1039__73__programa.jpg',1),(74,'band_cidade_2','Band Cidade 2a. Edição','Band Cidade 2a. Edição','../uploads/programa/band_cidade_2__74__programa.jpg',1),(75,'band_cidade_previsao','Band Cidade Previsão','Band Cidade Previsão','../uploads/programa/band_cidade_previsao__75__programa.jpg',1),(76,'vale_urgente','Vale Urgente','Vale Urgente','../uploads/programa/vale_urgente__76__programa.jpg',1),(77,'vale_shop','Vale Shop','Vale Shop','../uploads/programa/vale_shop__77__programa.jpg',1),(78,'clube_gordinho','Clube do Gordinho','Clube do Gordinho','../uploads/programa/clube_gordinho__78__programa.jpg',1),(79,'tv_web_shop','TV Web Shop','TV Web Shop','../uploads/programa/tv_web_shop__79__programa.jpg',1),(80,'entrevista_coletiva','Entrevista Coletiva','Entrevista Coletiva','../uploads/programa/entrevista_coletiva__80__programa.jpg',1),(81,'noticias_redacao','Notícias da Redação','Notícias da Redação','../uploads/programa/noticias_redacao__81__programa.jpg',1);
/*!40000 ALTER TABLE `programa` ENABLE KEYS */;
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
