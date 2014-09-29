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
INSERT INTO `analise` VALUES (1,'calc_descontos','Calculadora de Descontos','PolticadeDesconto/CLCULO','../uploads/analise/calc_descontos__1__analise.png',1,'painel'),(2,'analise_share_mercado','Análise Share de Mercado','AnliseShare/AnliseShare','../uploads/analise/analise_share_mercado__2__analise.png',1,'painel'),(3,'analise_share_mercado_pracas_especiais','Análise Share de Mercado - Praças Especiais','AnliseSharedeMercado-PraasEspeciaisv3/AnliseShare','../uploads/analise/analise_share_mercado_pracas_especiais__3__analise.png',1,'painel'),(4,'cpp_cpm','Análise CPP / CPM','AnliseCPP-CPM/CPP','../uploads/analise/cpp_cpm__4__analise.png',1,'painel'),(5,'sazionalidade_investimento','Sazionalidade de Investimento da TV Aberta','Sazonalidade/Sazonalidade','../uploads/analise/sazionalidade_investimento__5__analise.png',1,'painel'),(6,'prospeccao','Ferramenta de Prospecção','FerramentaparaProspecodeClientes/Potenciaisanunciantes','../uploads/analise/prospeccao__6__analise.png',1,'painel'),(7,'agenda_anunciantes_agencia','Agenda Anunciantes e Agências','Terminaldeconsulta/Agendaanunciantes','../uploads/analise/agenda_anunciantes_agencia__7__analise.png',1,'painel'),(8,'maiores_anunciantes_setor','Maiores Anunciantes por Setor','RankingInvestimentoPorSetor/Rkg_Anunciantes_Setor','../uploads/analise/maiores_anunciantes_setor__8__analise.png',1,'painel'),(9,'maiores_anunciantes_mercado','Maiores Anunciantes por Mercado','RankingAnunciantesPorMercado/Rkg_Anunciantes_Mercado','../uploads/analise/maiores_anunciantes_mercado__9__analise.png',1,'painel'),(10,'maiores_anunciantes_agencia','Maiores Anunciantes por Agência','RankingAnunciantesPorAgncias/Rkg_Anunciantes_Agncia','../uploads/analise/maiores_anunciantes_agencia__10__analise.png',1,'painel'),(11,'maiores_agencias_mercado','Maiores Agências por Mercado','RankingAgnciasPorMercado/Rkg_Agencia_Mercado','../uploads/analise/maiores_agencias_mercado__11__analise.png',1,'painel'),(12,'midia_dados_2014','Mídia Dados 2013','https://mdb.bbi.net.br/','../uploads/analise/midia_dados_2014__12__analise.png',1,'site'),(13,'inter_meios','Projeto Inter Meios','Intermeios/InvestimentoPublicitrio','../uploads/analise/inter_meios__13__analise.png',1,'painel'),(14,'audiencia_emissora','Análise de Audiência por Emissora','AnliseAudinciaporEmissora/AnliseAudinciaporEmissora','../uploads/analise/audiencia_emissora__14__analise.png',1,'painel'),(15,'audiencia_programa_pracas_especiais','Audiência por Programa - Praças Especiais','AnliseAudinciaporPrograma-PraasEspeciais/AnliseaudinciaPraasEspeciais','../uploads/analise/audiencia_programa_pracas_especiais__15__analise.png',1,'painel'),(16,'audiencia_programa','Análise de Audiência por Programa','AnliseAudinciaporPrograma/AnliseAudinciaporPrograma','../uploads/analise/audiencia_programa__16__analise.png',1,'painel'),(17,'principais_targets_band','Principais Targets da Band','DesempenhoTargetseProgramas/TopProgramaseTargets','../uploads/analise/principais_targets_band__17__analise.png',1,'painel'),(18,'perfil_audiencia_programa','Perfil de Audiência por Programa','PerfilPrograma/PerfildeAudinciadoPrograma','../uploads/analise/perfil_audiencia_programa__18__analise.png',1,'painel'),(19,'perfil_investimento_programa','Perfil de Investimento por Programa','PerfilPrograma/PerfildeInvestimentodoPrograma','../uploads/analise/perfil_investimento_programa__19__analise.png',1,'painel'),(20,'perfil_futebol','Perfil do Futebol','PerfilFutebol/PerfildoFutebol','../uploads/analise/perfil_futebol__20__analise.png',1,'painel'),(21,'targets_comportamentais','Análise de Targets Comportamentais','DesempenhoTargetseProgramasTGR/TopTargets','../uploads/analise/targets_comportamentais__21__analise.png',1,'painel'),(22,'agenda_anunciantes_newco','Agenda de Anunciantes ','AgendaAnunciantes-PayTV/TerminaldeConsulta-PayTV','../uploads/analise/agenda_anunciantes_newco__22__analise.png',1,'painel'),(23,'perfil_investimento_emissora','Perfil de Investimento por Emissora','Monitor-PerfildeInvestimentosporEmissora/Perfildeinvestimentoporemissoras','../uploads/analise/perfil_investimento_emissora__23__analise.png',1,'painel'),(24,'anunciantes_agencia','Maiores Anunciantes por Agência','RankingAnunciantesPorAgnciasPayTv/AnunciantesporAgncia','../uploads/analise/anunciantes_agencia__24__analise.png',1,'painel'),(25,'audiencia_programa_newco','Análise Audiência por Programa','Audincia-PayTV-Programasv_2/AnliseAudinciaProgramas','../uploads/analise/audiencia_programa_newco__25__analise.png',1,'painel'),(26,'audiencia_emissora_newco','Análise Audiência por Emissora','Audincia-PayTV-FaixahorriaMensal/AnliseEmissoraPaytv','../uploads/analise/audiencia_emissora_newco__26__analise.png',1,'painel'),(27,'targets_comportamentais_newco','Análise Targets Comportamentais','Audincia-PayTV-FaixahorriaMensal/AnliseEmissoraPaytv','../uploads/analise/targets_comportamentais_newco__27__analise.png',1,'painel'),(28,'desempenho_programas_targets','Desempenho por Programas e Targets','DesempenhoTargetseProgramas_0/TopProgramaseTargets','../uploads/analise/desempenho_programas_targets__28__analise.png',1,'painel'),(29,'agenda_anunciantes_outernet','Agenda Anunciantes','uternetAgendaAnunciantes/AnlisedeInvestimento','../uploads/analise/agenda_anunciantes_outernet__29__analise.png',1,'painel'),(30,'anunciantes_setor_meio','Maiores Anunciantes por Setor ou Meio','Outernet-SharedeInvestimentosporMeios/Rankingsetores','../uploads/analise/anunciantes_setor_meio__30__analise.png',1,'painel'),(31,'habitos_consumo','Análise de Hábitos de Consumo','Outernet-Anlisedehbitosdeconsumo/Anlisedehbitosdeconsumo','../uploads/analise/habitos_consumo__31__analise.png',1,'painel'),(32,'planilha_habitos_consumo','Planilha de Hábitos de Consumo','Outernet-Anlisedehbitosdeconsumo-Planilha/AnlisedehbitosdeConsumo','../uploads/analise/planilha_habitos_consumo__32__analise.png',1,'painel'),(33,'penetracao_consumo_meios','Penetração e Consumo dos Meios','Outernet-PenetraoeConsumodosMeios/PenetraoeConsumodosMeios','../uploads/analise/penetracao_consumo_meios__33__analise.png',1,'painel');
/*!40000 ALTER TABLE `analise` ENABLE KEYS */;
UNLOCK TABLES;

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
  `usuario` varchar(45) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id_arquivo`),
  KEY `ref` (`ref_arquivo`),
  KEY `fk_arquivo_veiculo_praca_programa1_idx` (`fk_id_veiculo`,`fk_id_praca`,`fk_id_programa`),
  CONSTRAINT `fk_arquivo_veiculo_praca_programa1` FOREIGN KEY (`fk_id_veiculo`, `fk_id_praca`, `fk_id_programa`) REFERENCES `veiculo_praca_programa` (`fk_id_veiculo`, `fk_id_praca`, `fk_id_programa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arquivo`
--

LOCK TABLES `arquivo` WRITE;
/*!40000 ALTER TABLE `arquivo` DISABLE KEYS */;
/*!40000 ALTER TABLE `arquivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `arquivo_historico`
--

DROP TABLE IF EXISTS `arquivo_historico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `arquivo_historico` (
  `id_arquivo_historico` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_arquivo` int(11) NOT NULL,
  `ref_arquivo` varchar(45) NOT NULL,
  `nome_arquivo` varchar(100) NOT NULL,
  `caminho_arquivo` varchar(512) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id_arquivo_historico`),
  KEY `fk_arquivo_historico_arquivo1_idx` (`fk_id_arquivo`),
  CONSTRAINT `fk_arquivo_historico_arquivo1` FOREIGN KEY (`fk_id_arquivo`) REFERENCES `arquivo` (`id_arquivo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arquivo_historico`
--

LOCK TABLES `arquivo_historico` WRITE;
/*!40000 ALTER TABLE `arquivo_historico` DISABLE KEYS */;
/*!40000 ALTER TABLE `arquivo_historico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `arquivo_tag`
--

DROP TABLE IF EXISTS `arquivo_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `arquivo_tag` (
  `fk_id_tag` int(11) NOT NULL,
  `fk_id_arquivo` int(11) NOT NULL,
  PRIMARY KEY (`fk_id_tag`,`fk_id_arquivo`),
  KEY `fk_arquivo_tag_tag1_idx` (`fk_id_tag`),
  KEY `fk_arquivo_tag_arquivo1_idx` (`fk_id_arquivo`),
  CONSTRAINT `fk_arquivo_tag_arquivo1` FOREIGN KEY (`fk_id_arquivo`) REFERENCES `arquivo` (`id_arquivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_arquivo_tag_tag1` FOREIGN KEY (`fk_id_tag`) REFERENCES `tag` (`id_tag`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arquivo_tag`
--

LOCK TABLES `arquivo_tag` WRITE;
/*!40000 ALTER TABLE `arquivo_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `arquivo_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `usuario_log` varchar(50) NOT NULL COMMENT 'Usuário',
  `ip_log` varchar(45) NOT NULL COMMENT 'IP',
  `acao_log` varchar(45) NOT NULL COMMENT 'Ação',
  `ref_log` varchar(45) NOT NULL COMMENT 'Cód. Ref.',
  `data_log` datetime NOT NULL COMMENT 'Data',
  `descricao_log` varchar(512) NOT NULL COMMENT 'Descrição',
  PRIMARY KEY (`id_log`),
  KEY `ref` (`ref_log`),
  KEY `usuario` (`usuario_log`),
  KEY `acao` (`acao_log`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

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
INSERT INTO `praca` VALUES (1,'NET','NET','Rede Nacional',1,'../uploads/praca/NET__1__praca.png'),(2,'barra_mansa','Barra Mansa','Barra Mansa',1,'../uploads/praca/barra_mansa__2__praca.png'),(3,'belo_horizonte','Belo Horizonte','Belo Horizonte',1,'../uploads/praca/belo_horizonte__3__praca.'),(4,'brasilia','Brasília','Brasília',1,'../uploads/praca/brasilia__4__praca.png'),(5,'campinas','Campinas','Campinas',1,'../uploads/praca/campinas__5__praca.png'),(6,'curitiba','\r\nCuritiba','Curitiba',1,'../uploads/praca/curitiba__6__praca.png'),(7,'manaus','Manaus','Manaus',1,'../uploads/praca/manaus__7__praca.png'),(8,'natal','Natal','Natal',1,'../uploads/praca/natal__8__praca.png'),(9,'palmas','Palmas','Palmas',1,'../uploads/praca/palmas__9__praca.png'),(10,'porto_alegre','Porto Alegre','Porto Alegre',1,'../uploads/praca/porto_alegre__10__praca.png'),(11,'presidente_prudente','Presidente Prudente','Presidente Prudente',1,'../uploads/praca/presidente_prudente__11__praca.png'),(12,'rio_janeiro','Rio de Janeiro','Rio de Janeiro',1,'../uploads/praca/rio_janeiro__12__praca.png'),(13,'salvador','Salvador','Salvador',1,'../uploads/praca/salvador__13__praca.png'),(14,'sao_paulo','São Paulo','São Paulo',1,'../uploads/praca/sao_paulo__14__praca.png'),(15,'taubate','Taubaté','Taubaté',1,'../uploads/praca/taubate__15__praca.png'),(16,'uberaba','Uberaba','Uberaba',1,'../uploads/praca/uberaba__16__praca.png'),(17,'sp_vale','São Paulo - Vale','São Paulo - Vale',1,'../uploads/praca/sp_vale__17__praca.png'),(18,'sp_interior','São Paulo - Interior','São Paulo - Interior',1,'../uploads/praca/sp_interior__18__praca.png'),(19,'sp_campinas','São Paulo - Campinas','São Paulo - Campinas',1,'../uploads/praca/sp_campinas__19__praca.png');
/*!40000 ALTER TABLE `praca` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `programa_tag`
--

DROP TABLE IF EXISTS `programa_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programa_tag` (
  `fk_id_programa` int(11) NOT NULL,
  `fk_id_tag` int(11) NOT NULL,
  PRIMARY KEY (`fk_id_programa`,`fk_id_tag`),
  KEY `fk_programa_has_tag_tag1_idx` (`fk_id_tag`),
  KEY `fk_programa_has_tag_programa1_idx` (`fk_id_programa`),
  CONSTRAINT `fk_programa_has_tag_programa1` FOREIGN KEY (`fk_id_programa`) REFERENCES `programa` (`id_programa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_programa_has_tag_tag1` FOREIGN KEY (`fk_id_tag`) REFERENCES `tag` (`id_tag`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programa_tag`
--

LOCK TABLES `programa_tag` WRITE;
/*!40000 ALTER TABLE `programa_tag` DISABLE KEYS */;
INSERT INTO `programa_tag` VALUES (9,8),(10,8),(11,8),(12,8),(13,8),(14,8),(15,8),(16,8),(17,8),(18,8),(19,8),(30,8),(31,8),(34,8),(36,8),(43,8),(44,8),(46,8),(49,8),(50,8),(51,8),(52,8),(53,8),(54,8),(60,8),(61,8),(62,8),(63,8),(64,8),(65,8),(66,8),(67,8),(68,8),(69,8),(70,8),(71,8),(72,8),(73,8),(78,8),(79,8),(80,8),(20,9),(21,9),(22,9),(23,9),(24,9),(25,9),(27,9),(28,9),(40,9),(49,9),(26,10),(29,10),(54,10),(12,11),(19,11),(30,11),(41,11),(46,11),(55,11),(56,11),(61,11),(32,12),(33,12),(10,13),(11,13),(13,13),(26,13),(35,13),(37,13),(38,13),(39,13),(42,13),(43,13),(44,13),(45,13),(47,13),(48,13),(53,13),(57,13),(58,13),(59,13),(70,13),(74,13),(75,13),(76,13),(77,13),(81,13),(1,25),(2,25),(3,25),(4,25),(5,25),(6,25),(7,25),(8,25);
/*!40000 ALTER TABLE `programa_tag` ENABLE KEYS */;
UNLOCK TABLES;

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
INSERT INTO `tag` VALUES (1,'tv_aberta','TV Aberta','veiculo'),(2,'newco','Newco','veiculo'),(3,'outernet','Outernet','veiculo'),(4,'radio','Rádio','veiculo'),(5,'midia_impressa','Mídia Impressa','veiculo'),(6,'midia_digital','Mídias Digitais','veiculo'),(7,'entretenimento','Entretenimento','veiculo'),(8,'entretenimento','Entretenimento','programa'),(9,'esportes','Esportes','programa'),(10,'eventos','Eventos','programa'),(11,'feminino','Feminino','programa'),(12,'filmes_series','Filmes e Séries','programa'),(13,'jornalismo','Jornalismo','programa'),(14,'vimeo','Vimeo','arquivo'),(15,'youtube','Youtube','arquivo'),(16,'pdf','PDF','arquivo'),(17,'doc','Word','arquivo'),(18,'xls','Excel','arquivo'),(19,'ppt','PowerPoint','arquivo'),(20,'agencias','Agências','analise'),(21,'anunciantes','Anunciantes','analise'),(22,'performance','Performance','analise'),(23,'mercado','Mercado','analise'),(24,'audiencia','Audiência','analise'),(25,'material','Material','programa');
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `veiculo_praca`
--

DROP TABLE IF EXISTS `veiculo_praca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `veiculo_praca` (
  `fk_id_veiculo` int(11) NOT NULL,
  `fk_id_praca` int(11) NOT NULL,
  PRIMARY KEY (`fk_id_veiculo`,`fk_id_praca`),
  KEY `fk_veiculo_praca_veiculo1_idx` (`fk_id_veiculo`),
  KEY `fk_veiculo_praca_praca1_idx` (`fk_id_praca`),
  CONSTRAINT `fk_veiculo_praca_praca1` FOREIGN KEY (`fk_id_praca`) REFERENCES `praca` (`id_praca`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_veiculo_praca_veiculo1` FOREIGN KEY (`fk_id_veiculo`) REFERENCES `veiculo` (`id_veiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veiculo_praca`
--

LOCK TABLES `veiculo_praca` WRITE;
/*!40000 ALTER TABLE `veiculo_praca` DISABLE KEYS */;
INSERT INTO `veiculo_praca` VALUES (1,1),(1,2),(1,3),(1,4),(1,5),(1,6),(1,7),(1,8),(1,9),(1,10),(1,11),(1,12),(1,13),(1,14),(1,15),(1,17),(1,18),(1,19),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1);
/*!40000 ALTER TABLE `veiculo_praca` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `veiculo_tag`
--

DROP TABLE IF EXISTS `veiculo_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `veiculo_tag` (
  `tag_id_tag` int(11) NOT NULL,
  `veiculo_id_veiculo` int(11) NOT NULL,
  PRIMARY KEY (`tag_id_tag`,`veiculo_id_veiculo`),
  KEY `fk_veiculo_tag_veiculo1_idx` (`veiculo_id_veiculo`),
  CONSTRAINT `fk_veiculo_tag_tag1` FOREIGN KEY (`tag_id_tag`) REFERENCES `tag` (`id_tag`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_veiculo_tag_veiculo1` FOREIGN KEY (`veiculo_id_veiculo`) REFERENCES `veiculo` (`id_veiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veiculo_tag`
--

LOCK TABLES `veiculo_tag` WRITE;
/*!40000 ALTER TABLE `veiculo_tag` DISABLE KEYS */;
INSERT INTO `veiculo_tag` VALUES (1,1),(1,2),(2,3),(2,4),(2,5),(2,6),(2,7),(2,8),(3,9),(3,10),(3,11),(3,12),(3,13),(3,14),(3,15),(4,16),(4,17),(4,18),(4,19),(4,20),(4,21),(4,22),(4,23),(4,24),(4,25),(4,26),(5,27),(5,28),(3,29),(3,30),(2,31);
/*!40000 ALTER TABLE `veiculo_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'im'
--

--
-- Dumping routines for database 'im'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-29 19:30:03
