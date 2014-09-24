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
-- Table structure for table `analise`
--

DROP TABLE IF EXISTS `analise`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `analise` (
  `id_analise` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `ref_analise` varchar(45) NOT NULL COMMENT 'Nome Ref.',
  `nome_analise` varchar(100) NOT NULL COMMENT 'Nome',
  `descricao_analise` varchar(512) NOT NULL COMMENT 'Descrição',
  `imagem_analise` varchar(255) NOT NULL COMMENT 'Imagem',
  `ativo_analise` tinyint(1) NOT NULL COMMENT 'Ativo',
  `tipo_analise` varchar(45) NOT NULL,
  PRIMARY KEY (`id_analise`),
  KEY `ref` (`ref_analise`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analise`
--

LOCK TABLES `analise` WRITE;
/*!40000 ALTER TABLE `analise` DISABLE KEYS */;
INSERT INTO `analise` VALUES (1,'calc_descontos','Calculadora de Descontos','PolticadeDesconto/CLCULO','../uploads/analise/calc_descontos__1__analise.png',1,'painel'),(2,'analise_share_mercado','Análise Share de Mercado','AnliseShare/AnliseShare','../uploads/analise/analise_share_mercado__2__analise.png',1,'painel'),(3,'analise_share_mercado_pracas_especiais','Análise Share de Mercado - Praças Especiais','AnliseSharedeMercado-PraasEspeciaisv3/AnliseShare','../uploads/analise/analise_share_mercado_pracas_especiais__3__analise.png',1,'painel'),(4,'cpp_cpm','Análise CPP / CPM','AnliseCPP-CPM/CPP','../uploads/analise/cpp_cpm__4__analise.png',1,'painel'),(5,'sazionalidade_investimento','Sazionalidade de Investimento da TV Aberta','Sazonalidade/Sazonalidade','../uploads/analise/sazionalidade_investimento__5__analise.png',1,'painel'),(6,'prospeccao','Ferramenta de Prospecção','FerramentaparaProspecodeClientes/Potenciaisanunciantes','../uploads/analise/prospeccao__6__analise.png',1,'painel'),(7,'agenda_anunciantes_agencia','Agenda Anunciantes e Agências','Terminaldeconsulta/Agendaanunciantes','../uploads/analise/agenda_anunciantes_agencia__7__analise.png',1,'painel'),(8,'maiores_anunciantes_setor','Maiores Anunciantes por Setor','RankingInvestimentoPorSetor/Rkg_Anunciantes_Setor','../uploads/analise/maiores_anunciantes_setor__8__analise.png',1,'painel'),(9,'maiores_anunciantes_mercado','Maiores Anunciantes por Mercado','RankingAnunciantesPorMercado/Rkg_Anunciantes_Mercado','../uploads/analise/maiores_anunciantes_mercado__9__analise.png',1,'painel'),(10,'maiores_anunciantes_agencia','Maiores Anunciantes por Agência','RankingAnunciantesPorAgncias/Rkg_Anunciantes_Agncia','../uploads/analise/maiores_anunciantes_agencia__10__analise.png',1,'painel'),(11,'maiores_agencias_mercado','Maiores Agências por Mercado','RankingAgnciasPorMercado/Rkg_Agencia_Mercado','../uploads/analise/maiores_agencias_mercado__11__analise.png',1,'painel'),(12,'midia_dados_2014','Mídia Dados 2013','https://mdb.bbi.net.br/','../uploads/analise/midia_dados_2014__12__analise.png',1,'site'),(13,'inter_meios','Projeto Inter Meios','Intermeios/InvestimentoPublicitrio','../uploads/analise/inter_meios__13__analise.png',1,'painel'),(14,'audiencia_emissora','Análise de Audiência por Emissora','AnliseAudinciaporEmissora/AnliseAudinciaporEmissora','../uploads/analise/audiencia_emissora__14__analise.png',1,'painel'),(15,'audiencia_programa_pracas_especiais','Audiência por Programa - Praças Especiais','AnliseAudinciaporPrograma-PraasEspeciais/AnliseaudinciaPraasEspeciais','../uploads/analise/audiencia_programa_pracas_especiais__15__analise.png',1,'painel'),(16,'audiencia_programa','Análise de Audiência por Programa','AnliseAudinciaporPrograma/AnliseAudinciaporPrograma','../uploads/analise/audiencia_programa__16__analise.png',1,'painel'),(17,'principais_targets_band','Princiapis Targets da Band','DesempenhoTargetseProgramas/TopProgramaseTargets','../uploads/analise/principais_targets_band__17__analise.png',1,'painel'),(18,'perfil_audiencia_programa','Perfil de Audiência por Programa','PerfilPrograma/PerfildeAudinciadoPrograma','../uploads/analise/perfil_audiencia_programa__18__analise.png',1,'painel'),(19,'perfil_investimento_programa','Perfil de Investimento por Programa','PerfilPrograma/PerfildeInvestimentodoPrograma','../uploads/analise/perfil_investimento_programa__19__analise.png',1,'painel'),(20,'perfil_futebol','Perfil do Futebol','PerfilFutebol/PerfildoFutebol','../uploads/analise/perfil_futebol__20__analise.png',1,'painel'),(21,'targets_comportamentais','Análise de Targets Comportamentais','DesempenhoTargetseProgramasTGR/TopTargets','../uploads/analise/targets_comportamentais__21__analise.png',1,'painel'),(22,'agenda_anunciantes_newco','Agenda de Anunciantes ','AgendaAnunciantes-PayTV/TerminaldeConsulta-PayTV','../uploads/analise/agenda_anunciantes_newco__22__analise.png',1,'painel'),(23,'perfil_investimento_emissora','Perfil de Investimento por Emissora','Monitor-PerfildeInvestimentosporEmissora/Perfildeinvestimentoporemissoras','../uploads/analise/perfil_investimento_emissora__23__analise.png',1,'painel'),(24,'anunciantes_agencia','Maiores Anunciantes por Agência','RankingAnunciantesPorAgnciasPayTv/AnunciantesporAgncia','../uploads/analise/anunciantes_agencia__24__analise.png',1,'painel'),(25,'audiencia_programa_newco','Análise Audiência por Programa','Audincia-PayTV-Programasv_2/AnliseAudinciaProgramas','../uploads/analise/audiencia_programa_newco__25__analise.png',1,'painel'),(26,'audiencia_emissora_newco','Análise Audiência por Emissora','Audincia-PayTV-FaixahorriaMensal/AnliseEmissoraPaytv','../uploads/analise/audiencia_emissora_newco__26__analise.png',1,'painel'),(27,'targets_comportamentais_newco','Análise Targets Comportamentais','Audincia-PayTV-FaixahorriaMensal/AnliseEmissoraPaytv','../uploads/analise/targets_comportamentais_newco__27__analise.png',1,'painel'),(28,'desempenho_programas_targets','Desempenho por Programas e Targets','DesempenhoTargetseProgramas_0/TopProgramaseTargets','../uploads/analise/desempenho_programas_targets__28__analise.png',1,'painel'),(29,'agenda_anunciantes_outernet','Agenda Anunciantes','uternetAgendaAnunciantes/AnlisedeInvestimento','../uploads/analise/agenda_anunciantes_outernet__29__analise.png',1,'painel'),(30,'anunciantes_setor_meio','Maiores Anunciantes por Setor ou Meio','Outernet-SharedeInvestimentosporMeios/Rankingsetores','../uploads/analise/anunciantes_setor_meio__30__analise.png',1,'painel'),(31,'habitos_consumo','Análise de Hábitos de Consumo','Outernet-Anlisedehbitosdeconsumo/Anlisedehbitosdeconsumo','../uploads/analise/habitos_consumo__31__analise.png',1,'painel'),(32,'planilha_habitos_consumo','Planilha de Hábitos de Consumo','Outernet-Anlisedehbitosdeconsumo-Planilha/AnlisedehbitosdeConsumo','../uploads/analise/planilha_habitos_consumo__32__analise.png',1,'painel'),(33,'penetracao_consumo_meios','Penetração e Consumo dos Meios','Outernet-PenetraoeConsumodosMeios/PenetraoeConsumodosMeios','../uploads/analise/penetracao_consumo_meios__33__analise.png',1,'painel');
/*!40000 ALTER TABLE `analise` ENABLE KEYS */;
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
