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
  `help_analise` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_analise`),
  UNIQUE KEY `ref_analise_UNIQUE` (`ref_analise`),
  KEY `ref` (`ref_analise`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analise`
--

LOCK TABLES `analise` WRITE;
/*!40000 ALTER TABLE `analise` DISABLE KEYS */;
INSERT INTO `analise` VALUES (1,'calc_descontos','Calculadora de Descontos','PolticadeDesconto/CLCULO','../uploads/analise/calc_descontos__1__analise.png',1,'painel',0),(2,'analise_share_mercado','Análise Share de Mercado','AnliseShare/AnliseShare','../uploads/analise/analise_share_mercado__2__analise.png',1,'painel',1),(3,'analise_share_mercado_pracas_especiais','Análise Share de Mercado - Praças Especiais','AnliseSharedeMercado-PraasEspeciaisv3/AnliseShare','../uploads/analise/analise_share_mercado_pracas_especiais__3__analise.png',1,'painel',0),(4,'cpp_cpm','Análise CPP / CPM','AnliseCPP-CPM/CPP','../uploads/analise/cpp_cpm__4__analise.png',1,'painel',0),(5,'sazionalidade_investimento','Sazionalidade de Investimento da TV Aberta','Sazonalidade/Sazonalidade','../uploads/analise/sazionalidade_investimento__5__analise.png',1,'painel',0),(6,'prospeccao','Ferramenta de Prospecção','FerramentaparaProspecodeClientes/Potenciaisanunciantes','../uploads/analise/prospeccao__6__analise.png',1,'painel',0),(7,'agenda_anunciantes_agencia','Agenda Anunciantes e Agências','Terminaldeconsulta/Agendaanunciantes','../uploads/analise/agenda_anunciantes_agencia__7__analise.png',1,'painel',0),(8,'maiores_anunciantes_setor','Maiores Anunciantes por Setor','RankingInvestimentoPorSetor/Rkg_Anunciantes_Setor','../uploads/analise/maiores_anunciantes_setor__8__analise.png',1,'painel',0),(9,'maiores_anunciantes_mercado','Maiores Anunciantes por Mercado','RankingAnunciantesPorMercado/Rkg_Anunciantes_Mercado','../uploads/analise/maiores_anunciantes_mercado__9__analise.png',1,'painel',0),(10,'maiores_anunciantes_agencia','Maiores Anunciantes por Agência','RankingAnunciantesPorAgncias/Rkg_Anunciantes_Agncia','../uploads/analise/maiores_anunciantes_agencia__10__analise.png',1,'painel',0),(11,'maiores_agencias_mercado','Maiores Agências por Mercado','RankingAgnciasPorMercado/Rkg_Agencia_Mercado','../uploads/analise/maiores_agencias_mercado__11__analise.png',1,'painel',0),(12,'midia_dados_2014','Mídia Dados 2013','https://mdb.bbi.net.br/','../uploads/analise/midia_dados_2014__12__analise.png',1,'site',0),(13,'inter_meios','Projeto Inter Meios','Intermeios/InvestimentoPublicitrio','../uploads/analise/inter_meios__13__analise.png',1,'painel',0),(14,'audiencia_emissora','Análise de Audiência por Emissora','AnliseAudinciaporEmissora/AnliseAudinciaporEmissora','../uploads/analise/audiencia_emissora__14__analise.png',1,'painel',0),(15,'audiencia_programa_pracas_especiais','Audiência por Programa - Praças Especiais','AnliseAudinciaporPrograma-PraasEspeciais/AnliseaudinciaPraasEspeciais','../uploads/analise/audiencia_programa_pracas_especiais__15__analise.png',1,'painel',0),(16,'audiencia_programa','Análise de Audiência por Programa','AnliseAudinciaporPrograma/AnliseAudinciaporPrograma','../uploads/analise/audiencia_programa__16__analise.png',1,'painel',0),(17,'principais_targets_band','Principais Targets da Band','DesempenhoTargetseProgramas/TopProgramaseTargets','../uploads/analise/principais_targets_band__17__analise.png',1,'painel',0),(18,'perfil_audiencia_programa','Perfil de Audiência por Programa','PerfilPrograma/PerfildeAudinciadoPrograma','../uploads/analise/perfil_audiencia_programa__18__analise.png',1,'painel',0),(19,'perfil_investimento_programa','Perfil de Investimento por Programa','PerfilPrograma/PerfildeInvestimentodoPrograma','../uploads/analise/perfil_investimento_programa__19__analise.png',1,'painel',0),(20,'perfil_futebol','Perfil do Futebol','PerfilFutebol/PerfildoFutebol','../uploads/analise/perfil_futebol__20__analise.png',1,'painel',0),(21,'targets_comportamentais','Análise de Targets Comportamentais','DesempenhoTargetseProgramasTGR/TopTargets','../uploads/analise/targets_comportamentais__21__analise.png',1,'painel',0),(22,'agenda_anunciantes_newco','Agenda de Anunciantes ','AgendaAnunciantes-PayTV/TerminaldeConsulta-PayTV','../uploads/analise/agenda_anunciantes_newco__22__analise.png',1,'painel',0),(23,'perfil_investimento_emissora','Perfil de Investimento por Emissora','Monitor-PerfildeInvestimentosporEmissora/Perfildeinvestimentoporemissoras','../uploads/analise/perfil_investimento_emissora__23__analise.png',1,'painel',0),(24,'anunciantes_agencia','Maiores Anunciantes por Agência','RankingAnunciantesPorAgnciasPayTv/AnunciantesporAgncia','../uploads/analise/anunciantes_agencia__24__analise.png',1,'painel',0),(25,'audiencia_programa_newco','Análise Audiência por Programa','Audincia-PayTV-Programasv_2/AnliseAudinciaProgramas','../uploads/analise/audiencia_programa_newco__25__analise.png',1,'painel',0),(26,'audiencia_emissora_newco','Análise Audiência por Emissora','Audincia-PayTV-FaixahorriaMensal/AnliseEmissoraPaytv','../uploads/analise/audiencia_emissora_newco__26__analise.png',1,'painel',0),(27,'targets_comportamentais_newco','Análise Targets Comportamentais','Audincia-PayTV-FaixahorriaMensal/AnliseEmissoraPaytv','../uploads/analise/targets_comportamentais_newco__27__analise.png',1,'painel',0),(28,'desempenho_programas_targets','Desempenho por Programas e Targets','DesempenhoTargetseProgramas_0/TopProgramaseTargets','../uploads/analise/desempenho_programas_targets__28__analise.png',1,'painel',0),(29,'agenda_anunciantes_outernet','Agenda Anunciantes','uternetAgendaAnunciantes/AnlisedeInvestimento','../uploads/analise/agenda_anunciantes_outernet__29__analise.png',1,'painel',0),(30,'anunciantes_setor_meio','Maiores Anunciantes por Setor ou Meio','Outernet-SharedeInvestimentosporMeios/Rankingsetores','../uploads/analise/anunciantes_setor_meio__30__analise.png',1,'painel',0),(31,'habitos_consumo','Análise de Hábitos de Consumo','Outernet-Anlisedehbitosdeconsumo/Anlisedehbitosdeconsumo','../uploads/analise/habitos_consumo__31__analise.png',1,'painel',0),(32,'planilha_habitos_consumo','Planilha de Hábitos de Consumo','Outernet-Anlisedehbitosdeconsumo-Planilha/AnlisedehbitosdeConsumo','../uploads/analise/planilha_habitos_consumo__32__analise.png',1,'painel',0),(33,'penetracao_consumo_meios','Penetração e Consumo dos Meios','Outernet-PenetraoeConsumodosMeios/PenetraoeConsumodosMeios','../uploads/analise/penetracao_consumo_meios__33__analise.png',1,'painel',0),(34,'midia_fatos_2014','Mídia Fatos 2014','http://www.midiafatos.com.br/site2014/index.html','../uploads/analise/midia_fatos_2014__34__analise.png',1,'site',0),(35,'analise_cpp_cpm','Análise de CPP e CPM','AnliseCPP-CPMPayTv','../uploads/analise/analise_cpp_cpm__35__analise.png',1,'painel',0);
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
INSERT INTO `analise_tag` VALUES (34,20),(34,21),(35,22),(1,23),(2,23),(3,23),(4,23),(5,23),(6,23),(7,23),(8,23),(9,23),(10,23),(11,23),(12,23),(13,23),(22,23),(23,23),(24,23),(29,23),(30,23),(14,24),(15,24),(16,24),(17,24),(18,24),(19,24),(20,24),(21,24),(25,24),(26,24),(27,24),(28,24),(31,24),(32,24),(33,24);
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
  UNIQUE KEY `ref_arquivo_UNIQUE` (`ref_arquivo`),
  KEY `ref` (`ref_arquivo`),
  KEY `fk_arquivo_veiculo_praca_programa1_idx` (`fk_id_veiculo`,`fk_id_praca`,`fk_id_programa`),
  CONSTRAINT `fk_arquivo_veiculo_praca_programa1` FOREIGN KEY (`fk_id_veiculo`, `fk_id_praca`, `fk_id_programa`) REFERENCES `veiculo_praca_programa` (`fk_id_veiculo`, `fk_id_praca`, `fk_id_programa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=282 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arquivo`
--

LOCK TABLES `arquivo` WRITE;
/*!40000 ALTER TABLE `arquivo` DISABLE KEYS */;
INSERT INTO `arquivo` VALUES (2,'teste1','teste13222222','../uploads/arquivo/teste1/teste1__2__arquivo.pptx',1,1,1,10,'admin','2014-10-07 10:21:28'),(3,'convencao_2014_programacao_2015','Programação 2015','107483329',1,1,1,82,'admin','2014-10-14 02:30:33'),(4,'convencao_2014_merchandising','Merchandising','107491386',1,1,1,82,'admin','2014-10-14 02:31:55'),(5,'net_tabela_precos','Tabela de Preços','../uploads/arquivo/net_tabela_precos/net_tabela_precos__5__arquivo.pdf',1,1,1,2,'admin','2014-10-14 02:33:51'),(6,'net_pedidos_insercao','Pedidos de Inserção','../uploads/arquivo/net_pedidos_insercao/net_pedidos_insercao__6__arquivo.xlsx',1,1,1,3,'admin','2014-10-14 02:35:01'),(7,'net_grade_patrocinadores','Grade de Patrocinadores','../uploads/arquivo/net_grade_patrocinadores/net_grade_patrocinadores__arquivo.pdf',1,1,1,4,'admin','2014-10-14 02:40:47'),(10,'net_estudos_audiencia','Estudos de Audiência','../uploads/arquivo/net_estudos_audiencia/net_estudos_audiencia__10__arquivo.pdf',1,1,1,6,'admin','2014-10-14 02:43:32'),(11,'net_relaacao_anunciantes_outras_emissoras','Relação de anunciantes - Outras Emissoras','../uploads/arquivo/net_relaacao_anunciantes_outras_emissoras/net_relaacao_anunciantes_outras_emissoras__11__arquivo.pdf',1,1,1,7,'admin','2014-10-14 02:44:51'),(12,'net_acoes_dif_merchan_axe','Agora é tarde - Axe','105066432',1,1,1,8,'admin','2014-10-14 02:46:44'),(14,'net_acoes_dif_merchan_rdio','Agora é tarde - Rdio','105062543',1,1,1,8,'admin','2014-10-14 02:47:25'),(15,'net_acoes_dif_merchan_carrefour','Dia a Dia - Carrefour','105062540',1,1,1,8,'admin','2014-10-14 02:48:29'),(16,'net_acoes_dif_merchan_spoleto','Dia a Dia - Spoleto','107944278',1,1,1,8,'admin','2014-10-14 02:49:54'),(17,'net_acoes_dif_merchan_alcatel','Jogo Aberto - Alcatel','105062534',1,1,1,8,'admin','2014-10-14 02:51:22'),(18,'net_acoes_dif_merchan_fiat','MasterChef- Fiat','107944281',1,1,1,8,'admin','2014-10-14 02:51:07'),(19,'net_acoes_dif_merchan_tramont','MasterChef - Tramontina','107944387',1,1,1,8,'admin','2014-10-14 02:51:57'),(20,'net_acoes_dif_merchan_microsoft','Pânico na Band - Microsoft','105179407',1,1,1,8,'admin','2014-10-14 02:52:39'),(21,'net_acoes_dif_merchan_compact_print','tá na Tela - Compacta Print','105062529',1,1,1,8,'admin','2014-10-14 02:54:46'),(22,'net_acoes_dif_merchan_bacardi_1','Pânico na Band - Bacardi 1','107944275',0,1,1,8,'admin','2014-10-14 02:56:00'),(23,'net_acoes_dif_merchan_bacardi_2','Pânico na Band - Bacardi 2','107944277',0,1,1,8,'admin','2014-10-14 02:58:41'),(24,'net_acoes_dif_merchan_mcdonalds','Pânico na Band - Macdonalds','107944386',1,1,1,8,'admin','2014-10-14 02:59:18'),(25,'net_acoes_dif_merchan_renault','Pânico na Band - Renault','102634167',1,1,1,8,'admin','2014-10-14 03:01:01'),(26,'net_acoes_dif_merchan_cacau_show','Cacau Show','102634166',1,1,1,8,'admin','2014-10-14 03:01:57'),(27,'net_acoes_dif_merchan_cacau_show_viral','Pânico na Band - Cacau Show - Viral','102634164',1,1,1,8,'admin','2014-10-14 03:05:58'),(28,'net_acoes_dif_merchan_walmart','Jogo aberto - walmart','102634161',1,1,1,8,'admin','2014-10-14 03:06:46'),(29,'net_acoes_dif_merchan_habibs','Jogo aberto - Habib\'s 1','102634160',0,1,1,8,'admin','2014-10-14 03:07:36'),(30,'net_acoes_dif_merchan_habibs_2','Jogo Aberto - Habib\'s 2','107944283',1,1,1,8,'admin','2014-10-14 03:08:19'),(31,'net_acoes_dif_merchan_claro_bumper','Jogo Aberto - Claro Bumper','102566477',1,1,1,8,'admin','2014-10-14 03:08:59'),(32,'net_acoes_dif_merchan_tnt','Agora é tarde - TNT','102566476',1,1,1,8,'admin','2014-10-14 03:09:35'),(33,'net_acoes_dif_merchan_claro_4g','Band na Copa - Claro 4G','102660220',1,1,1,8,'admin','2014-10-14 03:10:22'),(34,'agora_tarde_plano_comercial','Plano Comercial','../uploads/arquivo/agora_tarde_plano_comercial/agora_tarde_plano_comercial__34__arquivo.pdf',1,1,1,9,'admin','2014-10-14 03:14:58'),(35,'aet_acoes_dif_merchan_claro','Ações Merchandising - Claro','92070723',1,1,1,9,'admin','2014-10-14 03:16:02'),(36,'aet_chamada_2014','Chamada 2014','87787774',1,1,1,9,'admin','2014-10-14 03:17:11'),(37,'aet_chamada_2_2014','Chamada 2','87796384',1,1,1,9,'admin','2014-10-14 03:18:51'),(38,'aet_chamada_rafinha_2014','Chamada Rafinha 2014','87796319',1,1,1,9,'admin','2014-10-14 03:19:26'),(39,'aet_defesas_pnt_gsp_2014','Defesa PNT e GSP','../uploads/arquivo/aet_defesas_pnt_gsp_2014/aet_defesas_pnt_gsp_2014__39__arquivo.pdf',1,1,1,9,'admin','2014-10-14 03:20:45'),(40,'band_folia_plano_comercial','Plano Comercial 2015','../uploads/arquivo/band_folia_plano_comercial/band_folia_plano_comercial__40__arquivo.pdf',1,1,1,83,'admin','2014-10-14 03:26:09'),(41,'band_kids_plano_comercial','Plano Comercial','../uploads/arquivo/band_kids_plano_comercial/band_kids_plano_comercial__41__arquivo.pdf',1,1,1,31,'admin','2014-10-14 03:26:49'),(42,'band_kid_defesa_pnt_gsp','Defesa PNT e GSP','../uploads/arquivo/band_kid_defesa_pnt_gsp/band_kid_defesa_pnt_gsp__42__arquivo.pdf',1,1,1,31,'admin','2014-10-14 03:27:41'),(43,'band_verao_plano_comercial','Plano Comercial 2015','../uploads/arquivo/band_verao_plano_comercial/band_verao_plano_comercial__43__arquivo.pdf',1,1,1,84,'admin','2014-10-14 03:30:05'),(44,'bec_plano_comercial','Plano Comercial','../uploads/arquivo/bec_plano_comercial/bec_plano_comercial__44__arquivo.pdf',1,1,1,20,'admin','2014-10-14 03:30:48'),(45,'bec_testemunhal_paloma_tocci','Band Esporte Club - Testemunhal Paloma Tocci','76544497',1,1,1,20,'admin','2014-10-14 03:31:59'),(46,'bec_testemunhal_juliana','Band Esporte Clube - Testemunhal Juliana (merchandete)','76544493',1,1,1,20,'admin','2014-10-14 03:32:52'),(47,'bec_defesa_pnt_gsp','Defesa PNT e GSP','../uploads/arquivo/bec_defesa_pnt_gsp/bec_defesa_pnt_gsp__47__arquivo.pdf',1,1,1,20,'admin','2014-10-14 03:33:40'),(48,'brasil_urgente_plano_comercial','Plano Comercial','../uploads/arquivo/brasil_urgente_plano_comercial/brasil_urgente_plano_comercial__48__arquivo.pdf',1,1,1,35,'admin','2014-10-14 03:45:57'),(49,'brasil_urgrnete_test_produto','Testemunhal com Produto','77804300',1,1,1,35,'admin','2014-10-14 03:46:36'),(50,'brasil_urgrnete_test_produto2','Testemunhal com Produto 2','77804299',1,1,1,35,'admin','2014-10-14 03:47:11'),(51,'brasil_urgente_defesa_pnt_gsp','Defesa PNT e GSP','../uploads/arquivo/brasil_urgente_defesa_pnt_gsp/brasil_urgente_defesa_pnt_gsp__51__arquivo.pdf',1,1,1,35,'admin','2014-10-14 03:48:09'),(52,'cafe_jornal_plano_comercial','Plano Comercial','../uploads/arquivo/cafe_jornal_plano_comercial/cafe_jornal_plano_comercial__52__arquivo.pdf',1,1,1,37,'admin','2014-10-14 03:51:27'),(53,'cafe_jornal_defesa_pnt_gsp','Defesa PNT e GSP','../uploads/arquivo/cafe_jornal_defesa_pnt_gsp/cafe_jornal_defesa_pnt_gsp__53__arquivo.pdf',1,1,1,37,'admin','2014-10-14 03:52:17'),(54,'canal_livre_plano_comercial','Plano Comercial','../uploads/arquivo/canal_livre_plano_comercial/canal_livre_plano_comercial__54__arquivo.pdf',1,1,1,36,'admin','2014-10-14 03:53:08'),(55,'canal_livre_defesa_pnt_gsp','Defesa PNT e GSP','../uploads/arquivo/canal_livre_defesa_pnt_gsp/canal_livre_defesa_pnt_gsp__55__arquivo.pdf',1,1,1,36,'admin','2014-10-14 03:53:37'),(56,'cinema_madrugada_plano_comercial','Plano Comercial','../uploads/arquivo/cinema_madrugada_plano_comercial/cinema_madrugada_plano_comercial__56__arquivo.pdf',1,1,1,32,'admin','2014-10-14 03:54:27'),(57,'cinema_madrugada_defesa_pnt_gsp','Defesa PNT e GSP','../uploads/arquivo/cinema_madrugada_defesa_pnt_gsp/cinema_madrugada_defesa_pnt_gsp__57__arquivo.pdf',1,1,1,32,'admin','2014-10-14 03:54:58'),(58,'copa_petrobras_plano_comercial','Plano Comercial','../uploads/arquivo/copa_petrobras_plano_comercial/copa_petrobras_plano_comercial__58__arquivo.pdf',1,1,1,85,'admin','2014-10-14 03:56:38'),(59,'hymym_plano_comercial','Plano Comercial','../uploads/arquivo/hymym_plano_comercial/hymym_plano_comercial__59__arquivo.pdf',1,1,1,33,'admin','2014-10-14 03:57:31'),(60,'hymym_defesa_pnt_gsp','Defesa PNT e GSP','../uploads/arquivo/hymym_defesa_pnt_gsp/hymym_defesa_pnt_gsp__60__arquivo.pdf',1,1,1,33,'admin','2014-10-14 03:58:00'),(61,'cqc_plano_comercial','Plano Comercial','../uploads/arquivo/cqc_plano_comercial/cqc_plano_comercial__61__arquivo.pdf',1,1,1,11,'admin','2014-10-14 03:58:43'),(62,'cqc_acao_integrada_ford','Ação Integrada - FORD','89407340',1,1,1,11,'admin','2014-10-14 03:59:35'),(63,'cqc_acao_integrada_itaipava','Ação Integrada - Itaipava','89407339',0,1,1,11,'admin','2014-10-14 04:00:06'),(64,'cqc_acao_integrada_pepsi','Ação integrada - Pepsi','89407338',0,1,1,11,'admin','2014-10-14 04:00:37'),(65,'cqc_acao_integrada_brach_park','Ação integrada - Beach Park','89407248',0,1,1,11,'admin','2014-10-14 04:01:11'),(66,'cqc_defesa_pnt_gsp','Defesa PNT e GSP','../uploads/arquivo/cqc_defesa_pnt_gsp/cqc_defesa_pnt_gsp__66__arquivo.pdf',1,1,1,11,'admin','2014-10-14 04:01:39'),(67,'dia_dia_plano_comercial','Plano Comercial','../uploads/arquivo/dia_dia_plano_comercial/dia_dia_plano_comercial__67__arquivo.pdf',1,1,1,30,'admin','2014-10-14 04:02:23'),(68,'dia_dia_acao_especia','Ação Especial','92143796',0,1,1,30,'admin','2014-10-14 04:03:00'),(69,'dia_dia_testemunhal','Testemunhal','77088097',0,1,1,30,'admin','2014-10-14 04:03:29'),(70,'dia_dia_merchanbreak','Merchanbreak','77804605',0,1,1,30,'admin','2014-10-14 04:04:02'),(71,'dia_dia_receita','Receita','77088096',1,1,1,30,'admin','2014-10-14 04:04:33'),(72,'dia_dia_defesa_pnt_gsp','Defesa PNT e GSP','../uploads/arquivo/dia_dia_defesa_pnt_gsp/dia_dia_defesa_pnt_gsp__72__arquivo.pdf',1,1,1,30,'admin','2014-10-14 04:05:03'),(73,'eleicoes_2014_programa','Plano Comercial','../uploads/arquivo/eleicoes_2014_programa/eleicoes_2014_programa__73__arquivo.pdf',0,1,1,26,'admin','2014-10-14 04:05:41'),(74,'formula_indy_plano_comercial','Plano Comercial 2015','../uploads/arquivo/formula_indy_plano_comercial/formula_indy_plano_comercial__74__arquivo.pdf',1,1,1,28,'admin','2014-10-14 04:09:08'),(78,'futebol_2014_plano_comercial','Plano Comercial','../uploads/arquivo/futebol_2014_plano_comercial/futebol_2014_plano_comercial__arquivo.pdf',1,1,1,21,'admin','2014-10-14 04:12:26'),(80,'futebol_2014_pub_virtual','Publicidade Virtual','77070626',1,1,1,21,'admin','2014-10-14 04:28:08'),(81,'futebol_2014_melhores_momentos','Melhores Momentos','77070623',1,1,1,21,'admin','2014-10-14 04:28:45'),(82,'futebol_2014_escalacao','Escalação','77070621',1,1,1,21,'admin','2014-10-14 04:29:16'),(83,'futebol_2014_estatisticas_outros','Estatísticas e outros jogos','77070618',1,1,1,21,'admin','2014-10-14 04:29:59'),(84,'futebol_2014_comentarista_online','Comentarista Online','77070617',1,1,1,21,'admin','2014-10-14 04:30:45'),(85,'futebol_2014_defesa_pnt_gsp','Defesa PNT e GSP','../uploads/arquivo/futebol_2014_defesa_pnt_gsp/futebol_2014_defesa_pnt_gsp__85__arquivo.pdf',1,1,1,21,'admin','2014-10-14 04:31:33'),(86,'futebol_2015_plano_comercial','Plano Comercial 2015','../uploads/arquivo/futebol_2015_plano_comercial/futebol_2015_plano_comercial__86__arquivo.pdf',1,1,1,87,'admin','2014-10-14 04:33:06'),(87,'ggmf_plano_comercial','Plano Comercial','../uploads/arquivo/ggmf_plano_comercial/ggmf_plano_comercial__87__arquivo.pdf',1,1,1,22,'admin','2014-10-14 04:39:26'),(88,'ggmf_testemunhal','Tetemunhal','76732959',1,1,1,22,'admin','2014-10-14 04:39:58'),(89,'ggmf_defesa_pnt_gsp','Defesa PNT e GSP','../uploads/arquivo/ggmf_defesa_pnt_gsp/ggmf_defesa_pnt_gsp__89__arquivo.pdf',1,1,1,22,'admin','2014-10-14 04:40:29'),(90,'jogo_aberto_plano_comercial','Plano Comercial','../uploads/arquivo/jogo_aberto_plano_comercial/jogo_aberto_plano_comercial__90__arquivo.pdf',1,1,1,23,'admin','2014-10-14 04:41:01'),(91,'jogo_aberto_powerade','Ação Integrada Powerade','92070727',1,1,1,23,'admin','2014-10-14 04:41:46'),(92,'jogo_aberto_testemunhal_juliana','Testemunhal Juliana','76732958',1,1,1,23,'admin','2014-10-14 04:42:29'),(93,'jogo_aberto_testemunhal_denilson','Testemunhal Denilson','76732957',1,1,1,23,'admin','2014-10-14 04:43:14'),(94,'jogo_aberto_testemunhal_renata','Testemunhal Renata','76732956',1,1,1,23,'admin','2014-10-14 04:43:47'),(95,'jogo_aberto_defesa_pnt_gsp','Defesa PNT e GSP','../uploads/arquivo/jogo_aberto_defesa_pnt_gsp/jogo_aberto_defesa_pnt_gsp__95__arquivo.pdf',1,1,1,23,'admin','2014-10-14 04:44:31'),(96,'jornal_band_plano_comercial','Plano Comercial','../uploads/arquivo/jornal_band_plano_comercial/jornal_band_plano_comercial__96__arquivo.pdf',1,1,1,38,'admin','2014-10-14 04:45:19'),(97,'jornal_band_defesa_pnt_gsp','Defesa PNT e GSP','../uploads/arquivo/jornal_band_defesa_pnt_gsp/jornal_band_defesa_pnt_gsp__97__arquivo.pdf',1,1,1,38,'admin','2014-10-14 04:45:50'),(98,'jornal_noite_plano_comercial','Plano Comercial','../uploads/arquivo/jornal_noite_plano_comercial/jornal_noite_plano_comercial__98__arquivo.pdf',1,1,1,39,'admin','2014-10-14 04:47:16'),(99,'jornal_noite_defesa_pnt_gsp','Defesa PNT e GSP','../uploads/arquivo/jornal_noite_defesa_pnt_gsp/jornal_noite_defesa_pnt_gsp__99__arquivo.pdf',1,1,1,39,'admin','2014-10-14 04:47:42'),(100,'masterchef_plano_comercial','Plano Comercial','../uploads/arquivo/masterchef_plano_comercial/masterchef_plano_comercial__100__arquivo.pdf',1,1,1,12,'admin','2014-10-14 04:48:29'),(101,'masterchef_chamada','Chamada','99539019',1,1,1,12,'admin','2014-10-14 04:48:54'),(102,'masterchef_chamada_s_locucao','Chamada sem Locução','99539021',1,1,1,12,'admin','2014-10-14 04:49:28'),(103,'masterchef_chamada2','Chamada 2','102029894',1,1,1,12,'admin','2014-10-14 04:49:57'),(104,'msb_plano_comercial','Plano Comercial','../uploads/arquivo/msb_plano_comercial/msb_plano_comercial__104__arquivo.pdf',1,1,1,13,'admin','2014-10-14 04:50:39'),(105,'msb_rodape_animado','Rodapé animado','77142768',1,1,1,13,'admin','2014-10-14 04:53:43'),(106,'msb_promo','Promo','https://player.mais.uol.com.br/player_video_v2_band.swf?mediaId=13083100&tv=1&p=editoruol',1,1,1,13,'admin','2014-10-14 04:55:19'),(107,'msb_defesa_pnt_gsp','Defesa PNT e GSP','../uploads/arquivo/msb_defesa_pnt_gsp/msb_defesa_pnt_gsp__107__arquivo.pdf',1,1,1,13,'admin','2014-10-14 04:56:04'),(108,'simpsons_plano_comercial','Plano Comercial','../uploads/arquivo/simpsons_plano_comercial/simpsons_plano_comercial__108__arquivo.pdf',1,1,1,34,'admin','2014-10-14 05:58:39'),(109,'simpsons_defesa_pnt_gsp','Defesa PNT e GSP','../uploads/arquivo/simpsons_defesa_pnt_gsp/simpsons_defesa_pnt_gsp__109__arquivo.pdf',1,1,1,34,'admin','2014-10-14 05:59:09'),(110,'panico_plano_comercial','Plano Comercial','../uploads/arquivo/panico_plano_comercial/panico_plano_comercial__110__arquivo.pdf',1,1,1,14,'admin','2014-10-14 06:00:48'),(111,'panico_cacau_show_viral','Ação especial viral de internet - Cacau Show','92148806',1,1,1,14,'admin','2014-10-14 06:01:40'),(112,'panico_testemunhal_cna','Testemunhal CNA','92070721',1,1,1,14,'admin','2014-10-14 06:02:29'),(113,'panico_merchanbreak_ifood','Merchanbreak Ifood','92082373',1,1,1,14,'admin','2014-10-14 06:03:03'),(114,'panico_especial_guarana','Especial Guaraná','76531282',0,1,1,14,'admin','2014-10-14 06:05:05'),(115,'panico_gillette','Ação Inteligente Gillette','76531284',0,1,1,14,'admin','2014-10-14 06:06:00'),(116,'panico_top_5_cacau_show','Top de 5 - Cacau Show','89328158',1,1,1,14,'admin','2014-10-14 06:06:35'),(117,'panico_abertura_skol','Vinheta Abertura Skol','76531287',1,1,1,14,'admin','2014-10-14 06:07:04'),(118,'panico_defesa_pnt_gsp','Defesa PNT e GSP','../uploads/arquivo/panico_defesa_pnt_gsp/panico_defesa_pnt_gsp__118__arquivo.pdf',1,1,1,14,'admin','2014-10-14 06:08:51'),(119,'panico_chamada','Chamada','87787775',1,1,1,14,'admin','2014-10-14 06:09:28'),(120,'policia24_plano_comercial','Plano Comercial','../uploads/arquivo/policia24_plano_comercial/policia24_plano_comercial__120__arquivo.pdf',1,1,1,15,'admin','2014-10-14 06:12:01'),(121,'policia24h_defesa_pnt_gsp','Defesa PNT e GSP','../uploads/arquivo/policia24h_defesa_pnt_gsp/policia24h_defesa_pnt_gsp__121__arquivo.pdf',1,1,1,15,'admin','2014-10-14 06:11:38'),(122,'porsche_gt_plano_comercial','Plano Comercial','../uploads/arquivo/porsche_gt_plano_comercial/porsche_gt_plano_comercial__122__arquivo.pdf',1,1,1,27,'admin','2014-10-14 06:13:00'),(123,'pre_jogo_plano_comercial','Plano Comercial','../uploads/arquivo/pre_jogo_plano_comercial/pre_jogo_plano_comercial__123__arquivo.pdf',1,1,1,24,'admin','2014-10-14 06:14:07'),(124,'pre_jogo_testemunhal_c_produto','Testemunhal com Produto','77804295',1,1,1,24,'admin','2014-10-14 06:14:43'),(125,'pre_jogo_defesa_pnt_gsp','Defesa PNT e GSP\r\n','../uploads/arquivo/pre_jogo_defesa_pnt_gsp/pre_jogo_defesa_pnt_gsp__125__arquivo.pdf',1,1,1,24,'admin','2014-10-14 06:15:17'),(126,'roland_garros_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/roland_garros_plano_comercial/roland_garros_plano_comercial__126__arquivo.pdf',1,1,1,88,'admin','2014-10-14 06:18:35'),(127,'sns_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/sns_plano_comercial/sns_plano_comercial__127__arquivo.pdf',1,1,1,16,'admin','2014-10-14 06:19:35'),(128,'sns_promo','Promo','80456004',1,1,1,16,'admin','2014-10-14 06:22:12'),(129,'so_risos_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/so_risos_plano_comercial/so_risos_plano_comercial__129__arquivo.pdf',1,1,1,67,'admin','2014-10-14 06:24:32'),(130,'ta_na_tela_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/ta_na_tela_plano_comercial/ta_na_tela_plano_comercial__130__arquivo.pdf',1,1,1,17,'admin','2014-10-14 06:25:28'),(131,'3_tempo_plano_comercial','Plano Comercial','../uploads/arquivo/3_tempo_plano_comercial/3_tempo_plano_comercial__131__arquivo.pdf',1,1,1,25,'admin','2014-10-14 06:26:45'),(132,'3_tempo_testemunhal_renault','Testemunhal Renault','92070607',1,1,1,25,'admin','2014-10-14 06:27:17'),(133,'3_tempo_acao_integrada_powerade','Ação Integrada Powerade','92070731',1,1,1,25,'admin','2014-10-14 06:27:54'),(134,'3_tempo_defesa_pnt_gsp','Defesa PNT e GSP\r\n','../uploads/arquivo/3_tempo_defesa_pnt_gsp/3_tempo_defesa_pnt_gsp__134__arquivo.pdf',1,1,1,25,'admin','2014-10-14 06:28:20'),(135,'top_20_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/top_20_plano_comercial/top_20_plano_comercial__135__arquivo.pdf',1,1,1,18,'admin','2014-10-14 06:29:02'),(136,'top_20_chamada','Chamada','102327527',1,1,1,18,'admin','2014-10-14 06:29:30'),(137,'top_cine_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/top_cine_plano_comercial/top_cine_plano_comercial__137__arquivo.pdf',1,1,1,89,'admin','2014-10-14 06:32:11'),(138,'top_cine_defesa_pnt_gsp','Defesa PNT e GSP\r\n','../uploads/arquivo/top_cine_defesa_pnt_gsp/top_cine_defesa_pnt_gsp__138__arquivo.pdf',1,1,1,89,'admin','2014-10-14 06:32:41'),(139,'trip_tv_plano_comercial','Plano Comercial','../uploads/arquivo/trip_tv_plano_comercial/trip_tv_plano_comercial__139__arquivo.pdf',1,1,1,19,'admin','2014-10-14 06:33:44'),(140,'tripo_tv_promo','Promo','95429534',1,1,1,19,'admin','2014-10-14 06:34:19'),(141,'donos_bola_ba_plano_comercial','Plano Comercial','../uploads/arquivo/donos_bola_ba_plano_comercial/donos_bola_ba_plano_comercial__141__arquivo.pdf',1,1,13,40,'admin','2014-10-14 06:38:02'),(142,'donos_bola_ba_promo','Promo','iv4vNUQhqus',1,1,13,40,'admin','2014-10-14 06:38:58'),(143,'prato_casa_ba_plano_comercial','Plano Comercial','../uploads/arquivo/prato_casa_ba_plano_comercial/prato_casa_ba_plano_comercial__143__arquivo.pdf',1,1,13,41,'admin','2014-10-14 06:42:36'),(144,'band_cidade_ba_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/band_cidade_ba_plano_comercial/band_cidade_ba_plano_comercial__144__arquivo.pdf',1,1,13,42,'admin','2014-10-14 06:43:48'),(145,'band_cidade_ba_chamada','Chamada','0zWHYP90JiY',1,1,13,42,'admin','2014-10-14 06:44:26'),(146,'band_comunidade_ba_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/band_comunidade_ba_plano_comercial/band_comunidade_ba_plano_comercial__146__arquivo.pdf',1,1,13,43,'admin','2014-10-14 06:49:43'),(147,'band_comunidade_ba_chamada','Chamada','iBWgUKutY_8',1,1,13,43,'admin','2014-10-14 06:50:34'),(148,'band_entrevista_ba_plano_comercial','Plano Comercial','../uploads/arquivo/band_entrevista_ba_plano_comercial/band_entrevista_ba_plano_comercial__148__arquivo.pdf',1,1,13,44,'admin','2014-10-14 06:51:15'),(149,'brasil_urgente_ba_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/brasil_urgente_ba_plano_comercial/brasil_urgente_ba_plano_comercial__149__arquivo.pdf',1,1,13,35,'admin','2014-10-14 06:52:03'),(150,'donos_bola_mg_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/donos_bola_mg_plano_comercial/donos_bola_mg_plano_comercial__150__arquivo.pdf',1,1,3,40,'admin','2014-10-14 06:58:20'),(151,'band_minas_plano_comercial','Plano Comercial','../uploads/arquivo/band_minas_plano_comercial/band_minas_plano_comercial__151__arquivo.pdf',1,1,3,45,'admin','2014-10-14 06:59:08'),(152,'brasil_urgente_mg_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/brasil_urgente_mg_plano_comercial/brasil_urgente_mg_plano_comercial__152__arquivo.pdf',1,1,3,35,'admin','2014-10-14 06:59:48'),(153,'bans_shop_ctba_plano_comercial','Plano Comercial','../uploads/arquivo/bans_shop_ctba_plano_comercial/bans_shop_ctba_plano_comercial__153__arquivo.pdf',1,1,6,46,'admin','2014-10-14 07:00:48'),(154,'caminhoes_cia_ctba_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/caminhoes_cia_ctba_plano_comercial/caminhoes_cia_ctba_plano_comercial__154__arquivo.pdf',1,1,6,90,'admin','2014-10-14 07:03:05'),(155,'donos_bola_ctba_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/donos_bola_ctba_plano_comercial/donos_bola_ctba_plano_comercial__155__arquivo.pdf',1,1,6,40,'admin','2014-10-14 07:03:52'),(156,'band_cidade_ctba_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/band_cidade_ctba_plano_comercial/band_cidade_ctba_plano_comercial__156__arquivo.pdf',1,1,6,42,'admin','2014-10-14 07:04:39'),(157,'band_entrevista_ctba_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/band_entrevista_ctba_plano_comercial/band_entrevista_ctba_plano_comercial__157__arquivo.pdf',1,1,6,44,'admin','2014-10-14 07:05:18'),(158,'brasil_urgente_ctba_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/brasil_urgente_ctba_plano_comercial/brasil_urgente_ctba_plano_comercial__158__arquivo.pdf',1,1,6,35,'admin','2014-10-14 07:05:49'),(159,'pr_acontece_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/pr_acontece_plano_comercial/pr_acontece_plano_comercial__159__arquivo.pdf',1,1,6,47,'admin','2014-10-14 07:06:25'),(160,'donos_bola_rj_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/donos_bola_rj_plano_comercial/donos_bola_rj_plano_comercial__160__arquivo.pdf',1,1,12,40,'admin','2014-10-14 07:07:59'),(161,'brasil_urgente_rj_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/brasil_urgente_rj_plano_comercial/brasil_urgente_rj_plano_comercial__161__arquivo.pdf',1,1,12,35,'admin','2014-10-14 07:08:25'),(162,'jornal_rio_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/jornal_rio_plano_comercial/jornal_rio_plano_comercial__162__arquivo.pdf',1,1,12,48,'admin','2014-10-14 07:08:50'),(163,'aventurados_rn_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/aventurados_rn_plano_comercial/aventurados_rn_plano_comercial__163__arquivo.pdf',1,1,8,49,'admin','2014-10-14 07:13:22'),(164,'batendo_pernas_rn_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/batendo_pernas_rn_plano_comercial/batendo_pernas_rn_plano_comercial__164__arquivo.pdf',1,1,8,50,'admin','2014-10-14 07:13:49'),(165,'paredao_tv_rn_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/paredao_tv_rn_plano_comercial/paredao_tv_rn_plano_comercial__165__arquivo.pdf',1,1,8,51,'admin','2014-10-14 07:14:12'),(166,'valeu_boi_rn_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/valeu_boi_rn_plano_comercial/valeu_boi_rn_plano_comercial__166__arquivo.pdf',1,1,8,52,'admin','2014-10-14 07:14:39'),(167,'auto_motor_rn_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/auto_motor_rn_plano_comercial/auto_motor_rn_plano_comercial__167__arquivo.pdf',1,1,8,53,'admin','2014-10-14 07:15:06'),(168,'olho_folia_rn_plano_comercial','Plano Comercial','../uploads/arquivo/olho_folia_rn_plano_comercial/olho_folia_rn_plano_comercial__168__arquivo.pdf',1,1,8,54,'admin','2014-10-14 07:16:03'),(169,'band_mulher_rn_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/band_mulher_rn_plano_comercial/band_mulher_rn_plano_comercial__169__arquivo.pdf',1,1,8,55,'admin','2014-10-14 07:16:29'),(170,'papo_fogao_rn_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/papo_fogao_rn_plano_comercial/papo_fogao_rn_plano_comercial__170__arquivo.pdf',1,1,8,56,'admin','2014-10-14 07:17:20'),(171,'rn_acontece_plano_comercial','Plano Comercial','../uploads/arquivo/rn_acontece_plano_comercial/rn_acontece_plano_comercial__171__arquivo.pdf',1,1,8,57,'admin','2014-10-14 07:17:55'),(172,'rn_urgente_1ed_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/rn_urgente_1ed_plano_comercial/rn_urgente_1ed_plano_comercial__172__arquivo.pdf',1,1,8,58,'admin','2014-10-14 07:18:25'),(173,'rn_urgente_2ed_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/rn_urgente_2ed_plano_comercial/rn_urgente_2ed_plano_comercial__173__arquivo.pdf',1,1,8,59,'admin','2014-10-14 07:18:47'),(174,'ta_na_hora_rs_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/ta_na_hora_rs_plano_comercial/ta_na_hora_rs_plano_comercial__174__arquivo.pdf',1,1,10,60,'admin','2014-10-14 07:20:30'),(175,'trilha_sabores_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/trilha_sabores_plano_comercial/trilha_sabores_plano_comercial__175__arquivo.pdf',1,1,10,61,'admin','2014-10-14 07:21:11'),(176,'donos_bola_rs_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/donos_bola_rs_plano_comercial/donos_bola_rs_plano_comercial__176__arquivo.pdf',1,1,10,40,'admin','2014-10-14 07:21:39'),(177,'preliminar_rs_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/preliminar_rs_plano_comercial/preliminar_rs_plano_comercial__177__arquivo.pdf',1,1,10,62,'admin','2014-10-14 07:22:04'),(178,'agroband_rs_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/agroband_rs_plano_comercial/agroband_rs_plano_comercial__178__arquivo.pdf',1,1,10,63,'admin','2014-10-14 07:22:30'),(179,'band_cidade_rs_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/band_cidade_rs_plano_comercial/band_cidade_rs_plano_comercial__179__arquivo.pdf',1,1,10,42,'admin','2014-10-14 07:22:59'),(180,'brasil_urgente_rs_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/brasil_urgente_rs_plano_comercial/brasil_urgente_rs_plano_comercial__180__arquivo.pdf',1,1,10,35,'admin','2014-10-14 07:23:26'),(181,'imovel_class_rs_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/imovel_class_rs_plano_comercial/imovel_class_rs_plano_comercial__181__arquivo.pdf',1,1,10,64,'admin','2014-10-14 07:24:01'),(182,'estudo_audiencia_sp','Estudo de Audiência','../uploads/arquivo/estudo_audiencia_sp/estudo_audiencia_sp__182__arquivo.pdf',1,1,14,6,'admin','2014-10-14 09:10:33'),(183,'donos_bola_sp_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/donos_bola_sp_plano_comercial/donos_bola_sp_plano_comercial__183__arquivo.pdf',1,1,14,40,'admin','2014-10-14 09:11:14'),(184,'donos_bola_sp__defesa_gsp','Defesa  GSP\r\n','../uploads/arquivo/donos_bola_sp__defesa_gsp/donos_bola_sp__defesa_gsp__184__arquivo.pdf',1,1,14,40,'admin','2014-10-14 09:12:07'),(185,'cob_especial_plano_comercial','Plano Comercial','../uploads/arquivo/cob_especial_plano_comercial/cob_especial_plano_comercial__185__arquivo.pdf',1,1,14,65,'admin','2014-10-14 09:13:21'),(186,'cob_especial_promo_imobiliario','Promo - Imobiliário','76631408',1,1,14,65,'admin','2014-10-14 09:15:36'),(187,'cob_especial_promo_loja_marisa','Promo - Lojas Marisa','76631409',1,1,14,65,'admin','2014-10-14 09:16:22'),(188,'cob_especial_promo_santa_maggiore','Promo - Hospital Santa Maggiore','76631407',1,1,14,65,'admin','2014-10-14 09:17:01'),(189,'las_vegas_sp_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/las_vegas_sp_plano_comercial/las_vegas_sp_plano_comercial__189__arquivo.pdf',1,1,14,66,'admin','2014-10-14 09:17:42'),(190,'so_risos_sp_plano_comercial','Plano Comercial','../uploads/arquivo/so_risos_sp_plano_comercial/so_risos_sp_plano_comercial__190__arquivo.pdf',1,1,14,67,'admin','2014-10-14 09:22:24'),(191,'so_risos_sp_defesa_gsp','Defesa GSP','../uploads/arquivo/so_risos_sp_defesa_gsp/so_risos_sp_defesa_gsp__191__arquivo.pdf',1,1,14,67,'admin','2014-10-14 09:24:04'),(192,'tabela_precos_sp_interior','Tabela de Preços','../uploads/arquivo/tabela_precos_sp_interior/tabela_precos_sp_interior__192__arquivo.pdf',1,1,18,2,'admin','2014-10-14 09:26:08'),(193,'super_util_spi_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/super_util_spi_plano_comercial/super_util_spi_plano_comercial__193__arquivo.pdf',1,1,18,68,'admin','2014-10-14 09:26:47'),(194,'super_util_spi_chmada','Chamada','79208267',1,1,18,68,'admin','2014-10-14 09:27:17'),(195,'super_util_patrocinio_programa','Patrocínio do Programa','90351290',1,1,18,68,'admin','2014-10-14 09:28:09'),(196,'super_util_patrocinio_quadro','Patrocínio de Quadro','90354920',1,1,18,68,'admin','2014-10-14 09:28:43'),(197,'jogo_aberto_spi_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/jogo_aberto_spi_plano_comercial/jogo_aberto_spi_plano_comercial__197__arquivo.pdf',1,1,18,23,'admin','2014-10-14 09:29:16'),(198,'band_rural_spi_plano_comercial','Plano Comercial','../uploads/arquivo/band_rural_spi_plano_comercial/band_rural_spi_plano_comercial__198__arquivo.pdf',1,1,18,69,'admin','2014-10-14 09:29:48'),(199,'especial_cidades_spi_plano_comercial','Plano Comercial','../uploads/arquivo/especial_cidades_spi_plano_comercial/especial_cidades_spi_plano_comercial__199__arquivo.pdf',1,1,18,70,'admin','2014-10-14 09:30:25'),(200,'band_cidade_spi_plano_comercial','Plano Comercial','../uploads/arquivo/band_cidade_spi_plano_comercial/band_cidade_spi_plano_comercial__200__arquivo.pdf',1,1,18,42,'admin','2014-10-14 09:31:13'),(201,'diario_rural_spi_plano_comercial','Plano Comercial','../uploads/arquivo/diario_rural_spi_plano_comercial/diario_rural_spi_plano_comercial__201__arquivo.pdf',1,1,18,71,'admin','2014-10-14 09:31:42'),(202,'clube_gordinho_cmp_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/clube_gordinho_cmp_plano_comercial/clube_gordinho_cmp_plano_comercial__202__arquivo.pdf',1,1,5,78,'admin','2014-10-14 09:39:19'),(203,'tv_webshop_plano_comercial','Plano Comercial','../uploads/arquivo/tv_webshop_plano_comercial/tv_webshop_plano_comercial__203__arquivo.pdf',1,1,5,79,'admin','2014-10-14 09:40:22'),(204,'jogo_aberto_cmp_plano_comercial','Plano Comercial','../uploads/arquivo/jogo_aberto_cmp_plano_comercial/jogo_aberto_cmp_plano_comercial__204__arquivo.pdf',1,1,5,23,'admin','2014-10-14 09:40:55'),(205,'donos_bola_cmp_plano_comercial','Plano Comercial','../uploads/arquivo/donos_bola_cmp_plano_comercial/donos_bola_cmp_plano_comercial__205__arquivo.pdf',1,1,5,40,'admin','2014-10-14 09:41:34'),(206,'band_cidade_cmp_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/band_cidade_cmp_plano_comercial/band_cidade_cmp_plano_comercial__206__arquivo.pdf',1,1,5,42,'admin','2014-10-14 09:42:04'),(207,'brasil_urgente_cmp_plano_comercial','Plano Comercial','../uploads/arquivo/brasil_urgente_cmp_plano_comercial/brasil_urgente_cmp_plano_comercial__207__arquivo.pdf',1,1,5,35,'admin','2014-10-14 09:42:31'),(208,'entrevista_coletiva_cmp_plano_comercial','Plano Comercial','../uploads/arquivo/entrevista_coletiva_cmp_plano_comercial/entrevista_coletiva_cmp_plano_comercial__208__arquivo.pdf',1,1,5,80,'admin','2014-10-14 09:42:57'),(209,'tabela_precos_sp_vale','Tabela de preços','../uploads/arquivo/tabela_precos_sp_vale/tabela_precos_sp_vale__209__arquivo.pdf',1,1,17,2,'admin','2014-10-14 09:48:08'),(210,'falando_nisso_spvale_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/falando_nisso_spvale_plano_comercial/falando_nisso_spvale_plano_comercial__210__arquivo.pdf',1,1,17,72,'admin','2014-10-14 09:48:48'),(212,'republica1039_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/republica1039_plano_comercial/republica1039_plano_comercial__212__arquivo.pdf',1,1,17,73,'admin','2014-10-14 09:53:18'),(213,'donos_bola_spvale_plano_comercial','Plano Comercial','../uploads/arquivo/donos_bola_spvale_plano_comercial/donos_bola_spvale_plano_comercial__213__arquivo.pdf',1,1,17,40,'admin','2014-10-14 09:53:52'),(214,'band_cidade_1ed_spvale_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/band_cidade_1ed_spvale_plano_comercial/band_cidade_1ed_spvale_plano_comercial__214__arquivo.pdf',1,1,17,42,'admin','2014-10-14 09:54:40'),(215,'band_cidade_2ed_spvale_plano_comercial','Plano Comercial','../uploads/arquivo/band_cidade_2ed_spvale_plano_comercial/band_cidade_2ed_spvale_plano_comercial__215__arquivo.pdf',1,1,17,74,'admin','2014-10-14 09:55:07'),(216,'band_cidade_prv_spvale_plano_comercial','Plano Comercial','../uploads/arquivo/band_cidade_prv_spvale_plano_comercial/band_cidade_prv_spvale_plano_comercial__216__arquivo.pdf',1,1,17,75,'admin','2014-10-14 09:57:05'),(218,'vale_urgente_plano_comercial','Plano Comercial','../uploads/arquivo/vale_urgente_plano_comercial/vale_urgente_plano_comercial__218__arquivo.pdf',1,1,17,76,'admin','2014-10-14 09:57:39'),(219,'vale_shop_spvale_plano_comercial','Plano Comercial','../uploads/arquivo/vale_shop_spvale_plano_comercial/vale_shop_spvale_plano_comercial__219__arquivo.pdf',1,1,17,77,'admin','2014-10-14 09:58:59'),(220,'noticias_redacao_to_plano_comercial','Plano Comercial','../uploads/arquivo/noticias_redacao_to_plano_comercial/noticias_redacao_to_plano_comercial__220__arquivo.pdf',1,1,9,81,'admin','2014-10-14 10:00:01'),(221,'tabela_precos_metro','Tabela de Preços','../uploads/arquivo/tabela_precos_metro/tabela_precos_metro__221__arquivo.jpg',1,28,1,2,'admin','2014-10-14 10:01:30'),(222,'tabela_precos_band_internacional','Tabela de Preços','../uploads/arquivo/tabela_precos_band_internacional/tabela_precos_band_internacional__222__arquivo.pdf',1,6,1,2,'admin','2014-10-14 10:02:23'),(223,'terraviva_tabela_precos','Tabela de Preços','../uploads/arquivo/terraviva_tabela_precos/terraviva_tabela_precos__223__arquivo.pdf',1,5,1,2,'admin','2014-10-14 10:19:21'),(224,'caminhos_pecuaria_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/caminhos_pecuaria_plano_comercial/caminhos_pecuaria_plano_comercial__224__arquivo.pdf',1,5,1,91,'admin','2014-10-14 10:19:49'),(225,'canal_livre_terraviva_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/canal_livre_terraviva_plano_comercial/canal_livre_terraviva_plano_comercial__225__arquivo.pdf',1,5,1,36,'admin','2014-10-14 10:20:23'),(226,'conexao_band_terra_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/conexao_band_terra_plano_comercial/conexao_band_terra_plano_comercial__226__arquivo.pdf',1,5,1,92,'admin','2014-10-14 10:20:57'),(227,'consultor_terraviva_plano_comercial','Plano Comercial','../uploads/arquivo/consultor_terraviva_plano_comercial/consultor_terraviva_plano_comercial__227__arquivo.pdf',1,5,1,93,'admin','2014-10-14 10:22:05'),(228,'coracao_pescador_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/coracao_pescador_plano_comercial/coracao_pescador_plano_comercial__228__arquivo.pdf',1,5,1,94,'admin','2014-10-14 10:22:37'),(229,'dia_dia_rural_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/dia_dia_rural_plano_comercial/dia_dia_rural_plano_comercial__229__arquivo.pdf',1,5,1,95,'admin','2014-10-14 10:23:11'),(230,'midia_kit_terraviva','Mídia Kit Terraviva','../uploads/arquivo/midia_kit_terraviva/midia_kit_terraviva__230__arquivo.pdf',1,5,1,96,'admin','2014-10-14 10:24:08'),(231,'jornal_terraviva_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/jornal_terraviva_plano_comercial/jornal_terraviva_plano_comercial__231__arquivo.pdf',1,5,1,97,'admin','2014-10-14 10:25:29'),(232,'minas_rural_plano_comercial','Plano Comercial','../uploads/arquivo/minas_rural_plano_comercial/minas_rural_plano_comercial__232__arquivo.pdf',1,5,1,98,'admin','2014-10-14 10:29:21'),(233,'sc_agricultura_plano_comercial','Plano Comercial','../uploads/arquivo/sc_agricultura_plano_comercial/sc_agricultura_plano_comercial__233__arquivo.pdf',1,5,1,99,'admin','2014-10-14 10:30:23'),(234,'terraviva_dbo_plano_comercial','Plano Comercial','../uploads/arquivo/terraviva_dbo_plano_comercial/terraviva_dbo_plano_comercial__234__arquivo.pdf',1,5,1,100,'admin','2014-10-14 10:31:22'),(235,'terraviva_sustentavel_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/terraviva_sustentavel_plano_comercial/terraviva_sustentavel_plano_comercial__235__arquivo.pdf',1,5,1,101,'admin','2014-10-14 10:32:28'),(236,'arte1_tabela_precos','Tabela de Preços','../uploads/arquivo/arte1_tabela_precos/arte1_tabela_precos__236__arquivo.pdf',1,7,1,2,'admin','2014-10-14 10:34:45'),(237,'arte1_video_institucional1','Vídeo Institucional','101651695',1,7,1,102,'admin','2014-10-14 10:35:26'),(238,'emmy_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/emmy_plano_comercial/emmy_plano_comercial__238__arquivo.pdf',1,31,1,103,'admin','2014-10-15 12:01:11'),(239,'ihr_pool_party_plano_comercial','Plano Comercial','../uploads/arquivo/ihr_pool_party_plano_comercial/ihr_pool_party_plano_comercial__239__arquivo.pdf',1,31,1,104,'admin','2014-10-15 12:01:46'),(240,'iheart_music_festival_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/iheart_music_festival_plano_comercial/iheart_music_festival_plano_comercial__240__arquivo.pdf',1,31,1,105,'admin','2014-10-15 12:02:21'),(241,'noites_mgm_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/noites_mgm_plano_comercial/noites_mgm_plano_comercial__241__arquivo.pdf',1,1,1,39,'admin','2014-10-15 12:02:54'),(242,'premio_contigo_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/premio_contigo_plano_comercial/premio_contigo_plano_comercial__242__arquivo.pdf',1,31,1,107,'admin','2014-10-15 12:03:22'),(243,'band_news_tabela_preco','Tabela de Preços','../uploads/arquivo/band_news_tabela_preco/band_news_tabela_preco__243__arquivo.pdf',1,3,1,2,'admin','2014-10-15 12:39:13'),(244,'a_noticia_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/a_noticia_plano_comercial/a_noticia_plano_comercial__244__arquivo.pdf',1,3,1,108,'admin','2014-10-15 12:39:55'),(245,'a_noticia_agron_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/a_noticia_agron_plano_comercial/a_noticia_agron_plano_comercial__245__arquivo.pdf',1,3,1,109,'admin','2014-10-15 12:40:21'),(246,'boas_noticias_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/boas_noticias_plano_comercial/boas_noticias_plano_comercial__246__arquivo.pdf',1,3,1,110,'admin','2014-10-15 12:40:47'),(247,'bn_documento_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/bn_documento_plano_comercial/bn_documento_plano_comercial__247__arquivo.pdf',1,3,1,111,'admin','2014-10-15 12:42:12'),(248,'bn_linha_plano_comercial','Plano Comercial\r\n','../uploads/arquivo/bn_linha_plano_comercial/bn_linha_plano_comercial__248__arquivo.pdf',1,3,1,112,'admin','2014-10-15 12:42:49'),(249,'brics_plano_comercial','Plano Comercial','../uploads/arquivo/brics_plano_comercial/brics_plano_comercial__249__arquivo.pdf',1,3,1,113,'admin','2014-10-15 12:44:43'),(250,'canal_livre_band_news_plano_comercial','Plano Comercial','../uploads/arquivo/canal_livre_band_news_plano_comercial/canal_livre_band_news_plano_comercial__250__arquivo.pdf',1,3,1,36,'admin','2014-10-15 12:45:11'),(251,'capital_natural_plano_comercial','Plano Comercial','../uploads/arquivo/capital_natural_plano_comercial/capital_natural_plano_comercial__251__arquivo.pdf',1,3,1,114,'admin','2014-10-15 12:45:32'),(252,'feira_negocios_plano_comercial','Plano Comercial','../uploads/arquivo/feira_negocios_plano_comercial/feira_negocios_plano_comercial__252__arquivo.pdf',1,3,1,115,'admin','2014-10-15 12:45:50'),(253,'futebol_etc_plano_comercial','Plano Comercial','../uploads/arquivo/futebol_etc_plano_comercial/futebol_etc_plano_comercial__253__arquivo.pdf',1,3,1,116,'admin','2014-10-15 12:46:05'),(254,'giro_business_plano_comercial','Plano Comercial','../uploads/arquivo/giro_business_plano_comercial/giro_business_plano_comercial__254__arquivo.pdf',1,3,1,117,'admin','2014-10-15 12:46:24'),(255,'jornal_band_bandnews_plano_comercial','Plano Comercial','../uploads/arquivo/jornal_band_bandnews_plano_comercial/jornal_band_bandnews_plano_comercial__255__arquivo.pdf',1,3,1,38,'admin','2014-10-15 12:46:48'),(256,'moda_negocios_plano_comercial','Plano Comercial','../uploads/arquivo/moda_negocios_plano_comercial/moda_negocios_plano_comercial__256__arquivo.pdf',1,3,1,118,'admin','2014-10-15 12:47:07'),(257,'que_da_certo_plano_comercial','Plano Comercial','../uploads/arquivo/que_da_certo_plano_comercial/que_da_certo_plano_comercial__257__arquivo.pdf',1,3,1,119,'admin','2014-10-15 12:47:23'),(258,'ponto_ponto_plano_comercial','Plano Comercial','../uploads/arquivo/ponto_ponto_plano_comercial/ponto_ponto_plano_comercial__258__arquivo.pdf',1,3,1,120,'admin','2014-10-15 12:47:41'),(259,'salomao_dois_pontos_plano_comercial','Plano Comercial','../uploads/arquivo/salomao_dois_pontos_plano_comercial/salomao_dois_pontos_plano_comercial__259__arquivo.pdf',1,3,1,121,'admin','2014-10-15 12:47:59'),(260,'excelencia_vinho_plano_comercial','Plano Comercial','../uploads/arquivo/excelencia_vinho_plano_comercial/excelencia_vinho_plano_comercial__260__arquivo.pdf',1,3,1,122,'admin','2014-10-15 12:48:17'),(261,'voce_chef_plano_comercial','Plano Comercial','../uploads/arquivo/voce_chef_plano_comercial/voce_chef_plano_comercial__261__arquivo.pdf',1,3,1,123,'admin','2014-10-15 12:48:36'),(262,'band_sports_tabela_preco','Tabela de Preços','../uploads/arquivo/band_sports_tabela_preco/band_sports_tabela_preco__262__arquivo.pdf',1,4,1,2,'admin','2014-10-15 12:51:39'),(263,'ace_band_sports_patrocinio_2014','Patrocínio 2014','../uploads/arquivo/ace_band_sports_patrocinio_2014/ace_band_sports_patrocinio_2014__263__arquivo.pdf',1,4,1,124,'admin','2014-10-15 12:52:17'),(264,'automobilismo_plano_comercial','Plano Comercial','../uploads/arquivo/automobilismo_plano_comercial/automobilismo_plano_comercial__264__arquivo.pdf',1,4,1,125,'admin','2014-10-15 12:52:33'),(265,'baita_amigos_plano_comercial','Plano Comercial','../uploads/arquivo/baita_amigos_plano_comercial/baita_amigos_plano_comercial__265__arquivo.pdf',1,4,1,126,'admin','2014-10-15 12:52:52'),(266,'band_sports_news_2ed_plano_comercial','Plano Comercial','../uploads/arquivo/band_sports_news_2ed_plano_comercial/band_sports_news_2ed_plano_comercial__266__arquivo.pdf',1,4,1,127,'admin','2014-10-15 12:53:17'),(267,'brasileirao_feminino_plano_comercial','Plano Comercial','../uploads/arquivo/brasileirao_feminino_plano_comercial/brasileirao_feminino_plano_comercial__267__arquivo.pdf',1,4,1,128,'admin','2014-10-15 12:53:36'),(268,'br_open_plano_comercial','Plano Comercial','../uploads/arquivo/br_open_plano_comercial/br_open_plano_comercial__268__arquivo.pdf',1,4,1,129,'admin','2014-10-15 12:53:54'),(269,'depois_jogo_plano_comercial','Plano Comercial','../uploads/arquivo/depois_jogo_plano_comercial/depois_jogo_plano_comercial__269__arquivo.pdf',1,4,1,130,'admin','2014-10-15 12:54:10'),(270,'dtm_plano_comercial','Plano Comercial','../uploads/arquivo/dtm_plano_comercial/dtm_plano_comercial__270__arquivo.pdf',1,4,1,132,'admin','2014-10-15 12:54:24'),(271,'dtm_chamada_2014','Chamada','89646623',1,4,1,132,'admin','2014-10-15 12:54:53'),(272,'momento_moto_plano_comercial','Plano Comercial','../uploads/arquivo/momento_moto_plano_comercial/momento_moto_plano_comercial__272__arquivo.pdf',1,4,1,133,'admin','2014-10-15 12:56:58'),(273,'poker_night_plano_comercial','Plano Comercial','../uploads/arquivo/poker_night_plano_comercial/poker_night_plano_comercial__273__arquivo.pdf',1,4,1,134,'admin','2014-10-15 12:57:14'),(274,'roland_garros_band_sports_plano_comercial','Plano Comercial 2015','../uploads/arquivo/roland_garros_band_sports_plano_comercial/roland_garros_band_sports_plano_comercial__274__arquivo.pdf',1,4,1,88,'admin','2014-10-15 12:57:46'),(275,'supermoto_plano_comercial','Plano Comercial','../uploads/arquivo/supermoto_plano_comercial/supermoto_plano_comercial__275__arquivo.pdf',1,4,1,135,'admin','2014-10-15 12:59:55'),(277,'atp_wta_plano_comercial','Plano Comercial','../uploads/arquivo/atp_wta_plano_comercial/atp_wta_plano_comercial__277__arquivo.pdf',1,4,1,136,'admin','2014-10-15 01:01:32'),(278,'volvo_ocean_race_plano_comercial','Plano Comercial','../uploads/arquivo/volvo_ocean_race_plano_comercial/volvo_ocean_race_plano_comercial__278__arquivo.pdf',1,4,1,137,'admin','2014-10-15 01:01:58'),(279,'wgp_plano_comercial','Plano Comercial','../uploads/arquivo/wgp_plano_comercial/wgp_plano_comercial__279__arquivo.pdf',1,4,1,138,'admin','2014-10-15 01:02:20'),(280,'aliga_teste_video','adidas','999888',1,1,1,10,'admin','2014-10-16 07:26:35'),(281,'aliga_teste_youtube','gols','T6gMS1DRlkc',1,1,1,10,'admin','2014-10-16 10:31:53');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arquivo_historico`
--

LOCK TABLES `arquivo_historico` WRITE;
/*!40000 ALTER TABLE `arquivo_historico` DISABLE KEYS */;
INSERT INTO `arquivo_historico` VALUES (1,2,'teste1','teste13222222','../uploads/arquivo/teste1/hist/__1413498307.8221_teste1__2__arquivo.pptx','admin','2014-10-07 10:21:28'),(2,280,'aliga_teste_video','adidas','62149845','admin','2014-10-16 09:42:47');
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
INSERT INTO `arquivo_tag` VALUES (14,3),(14,4),(14,12),(14,14),(14,15),(14,16),(14,17),(14,18),(14,19),(14,20),(14,21),(14,22),(14,23),(14,24),(14,25),(14,26),(14,27),(14,28),(14,29),(14,30),(14,31),(14,32),(14,33),(14,35),(14,36),(14,37),(14,38),(14,45),(14,46),(14,49),(14,50),(14,62),(14,63),(14,64),(14,65),(14,68),(14,69),(14,70),(14,71),(14,80),(14,81),(14,82),(14,83),(14,84),(14,88),(14,91),(14,92),(14,93),(14,94),(14,101),(14,102),(14,103),(14,105),(14,106),(14,111),(14,112),(14,113),(14,114),(14,115),(14,116),(14,117),(14,119),(14,124),(14,128),(14,132),(14,133),(14,136),(14,140),(14,186),(14,187),(14,188),(14,194),(14,195),(14,196),(14,237),(14,271),(14,280),(15,142),(15,145),(15,147),(15,281),(16,5),(16,7),(16,10),(16,11),(16,34),(16,39),(16,40),(16,41),(16,42),(16,43),(16,44),(16,47),(16,48),(16,51),(16,52),(16,53),(16,54),(16,55),(16,56),(16,57),(16,58),(16,59),(16,60),(16,61),(16,66),(16,67),(16,72),(16,73),(16,74),(16,78),(16,85),(16,86),(16,87),(16,89),(16,90),(16,95),(16,96),(16,97),(16,98),(16,99),(16,100),(16,104),(16,107),(16,108),(16,109),(16,110),(16,118),(16,120),(16,121),(16,122),(16,123),(16,125),(16,126),(16,127),(16,129),(16,130),(16,131),(16,134),(16,135),(16,137),(16,138),(16,139),(16,141),(16,143),(16,144),(16,146),(16,148),(16,149),(16,150),(16,151),(16,152),(16,153),(16,154),(16,155),(16,156),(16,157),(16,158),(16,159),(16,160),(16,161),(16,162),(16,163),(16,164),(16,165),(16,166),(16,167),(16,168),(16,169),(16,170),(16,171),(16,172),(16,173),(16,174),(16,175),(16,176),(16,177),(16,178),(16,179),(16,180),(16,181),(16,182),(16,183),(16,184),(16,185),(16,189),(16,190),(16,191),(16,192),(16,193),(16,197),(16,198),(16,199),(16,200),(16,201),(16,202),(16,203),(16,204),(16,205),(16,206),(16,207),(16,208),(16,209),(16,210),(16,212),(16,213),(16,214),(16,215),(16,216),(16,218),(16,219),(16,220),(16,221),(16,222),(16,223),(16,224),(16,225),(16,226),(16,227),(16,228),(16,229),(16,230),(16,231),(16,232),(16,233),(16,234),(16,235),(16,236),(16,238),(16,239),(16,240),(16,241),(16,242),(16,243),(16,244),(16,245),(16,246),(16,247),(16,248),(16,249),(16,250),(16,251),(16,252),(16,253),(16,254),(16,255),(16,256),(16,257),(16,258),(16,259),(16,260),(16,261),(16,262),(16,263),(16,264),(16,265),(16,266),(16,267),(16,268),(16,269),(16,270),(16,272),(16,273),(16,274),(16,275),(16,277),(16,278),(16,279),(18,6),(19,2);
/*!40000 ALTER TABLE `arquivo_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `ref_cliente` varchar(45) NOT NULL,
  `nome_cliente` varchar(100) NOT NULL,
  `imagem_cliente` varchar(255) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `ref_cliente_UNIQUE` (`ref_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (2,'coamo','Coamo','../uploads/cliente/coamo__2__cliente.png'),(3,'boston_medical','Boston Medical Group','../uploads/cliente/boston_medical__3__cliente.png'),(4,'cemil','Cemil','../uploads/cliente/cemil__4__cliente.png'),(5,'havan','Havan','../uploads/cliente/havan__5__cliente.png');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudo`
--

DROP TABLE IF EXISTS `estudo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudo` (
  `id_estudo` int(11) NOT NULL AUTO_INCREMENT,
  `ref_estudo` varchar(45) NOT NULL,
  `nome_estudo` varchar(100) NOT NULL,
  `caminho_estudo` varchar(255) NOT NULL COMMENT '	',
  `ativo_estudo` tinyint(1) NOT NULL,
  `cliente_id_cliente` int(11) NOT NULL,
  PRIMARY KEY (`id_estudo`),
  UNIQUE KEY `ref_estudo_UNIQUE` (`ref_estudo`),
  KEY `fk_estudo_cliente1_idx` (`cliente_id_cliente`),
  CONSTRAINT `fk_estudo_cliente1` FOREIGN KEY (`cliente_id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudo`
--

LOCK TABLES `estudo` WRITE;
/*!40000 ALTER TABLE `estudo` DISABLE KEYS */;
INSERT INTO `estudo` VALUES (3,'coamo_2014_v1','Estudo Coamo v1','../uploads/estudo/coamo_2014_v1__3__estudo.png',1,2),(4,'coamo_2014_v1_pdf','Estudo Coamo v1 PDF','../uploads/estudo/coamo_2014_v1_pdf__4__estudo.pdf',1,2),(5,'boston_2014','Boston Medical Group','../uploads/estudo/boston_2014__5__estudo.pptx',1,3),(6,'cemil_2014','Estudo Cemil','../uploads/estudo/cemil_2014__6__estudo.pptx',1,4),(7,'havan_2014','Estudo Havan 2014','../uploads/estudo/havan_2014__7__estudo.pptx',1,5);
/*!40000 ALTER TABLE `estudo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudo_has_tag`
--

DROP TABLE IF EXISTS `estudo_has_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudo_has_tag` (
  `estudo_id_estudo` int(11) NOT NULL,
  `tag_id_tag` int(11) NOT NULL,
  PRIMARY KEY (`estudo_id_estudo`,`tag_id_tag`),
  KEY `fk_estudo_has_tag_tag1_idx` (`tag_id_tag`),
  KEY `fk_estudo_has_tag_estudo1_idx` (`estudo_id_estudo`),
  CONSTRAINT `fk_estudo_has_tag_estudo1` FOREIGN KEY (`estudo_id_estudo`) REFERENCES `estudo` (`id_estudo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_estudo_has_tag_tag1` FOREIGN KEY (`tag_id_tag`) REFERENCES `tag` (`id_tag`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudo_has_tag`
--

LOCK TABLES `estudo_has_tag` WRITE;
/*!40000 ALTER TABLE `estudo_has_tag` DISABLE KEYS */;
INSERT INTO `estudo_has_tag` VALUES (4,16),(3,19),(5,19),(6,19),(7,19);
/*!40000 ALTER TABLE `estudo_has_tag` ENABLE KEYS */;
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
  UNIQUE KEY `ref_noticia_UNIQUE` (`ref_noticia`),
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
  UNIQUE KEY `ref_praca_UNIQUE` (`ref_praca`),
  KEY `ref` (`ref_praca`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `praca`
--

LOCK TABLES `praca` WRITE;
/*!40000 ALTER TABLE `praca` DISABLE KEYS */;
INSERT INTO `praca` VALUES (1,'NET','NET','Rede Nacional',1,'../uploads/praca/NET__1__praca.png'),(2,'barra_mansa','Barra Mansa','Barra Mansa',1,'../uploads/praca/barra_mansa__2__praca.png'),(3,'belo_horizonte','Belo Horizonte','Belo Horizonte',1,'../uploads/praca/belo_horizonte__3__praca.png'),(4,'brasilia','Brasília','Brasília',1,'../uploads/praca/brasilia__4__praca.png'),(5,'campinas','Campinas','Campinas',1,'../uploads/praca/campinas__5__praca.png'),(6,'curitiba','\r\nCuritiba','Curitiba',1,'../uploads/praca/curitiba__6__praca.png'),(7,'manaus','Manaus','Manaus',1,'../uploads/praca/manaus__7__praca.png'),(8,'natal','Natal','Natal',1,'../uploads/praca/natal__8__praca.png'),(9,'palmas','Palmas','Palmas',1,'../uploads/praca/palmas__9__praca.png'),(10,'porto_alegre','Porto Alegre','Porto Alegre',1,'../uploads/praca/porto_alegre__10__praca.png'),(12,'rio_janeiro','Rio de Janeiro','Rio de Janeiro',1,'../uploads/praca/rio_janeiro__12__praca.png'),(13,'salvador','Salvador','Salvador',1,'../uploads/praca/salvador__13__praca.png'),(14,'sao_paulo','São Paulo','São Paulo',1,'../uploads/praca/sao_paulo__14__praca.png'),(16,'uberaba','Triângulo','Triângulo',1,'../uploads/praca/uberaba__16__praca.png'),(17,'sp_vale','Vale','Vale',1,'../uploads/praca/sp_vale__17__praca.png'),(18,'sp_interior','SP Interior','SP Interior',1,'../uploads/praca/sp_interior__18__praca.png');
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
  UNIQUE KEY `ref_programa_UNIQUE` (`ref_programa`),
  KEY `ref` (`ref_programa`)
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programa`
--

LOCK TABLES `programa` WRITE;
/*!40000 ALTER TABLE `programa` DISABLE KEYS */;
INSERT INTO `programa` VALUES (1,'programacao','Programação','Programação do Veículo','../uploads/programa/programacao__1__programa.png',1),(2,'tabela_precos','Tabela de Preços do Veículo','Tabela de Preços do Veículo','../uploads/programa/tabela_precos__2__programa.png',1),(3,'pedido_insercao','Pedido de Inserção','Pedido de Inserção','../uploads/programa/pedido_insercao__3__programa.png',1),(4,'grade_patrocinadores','Grade de Patrocinadores','Grade de Patrocinadores','../uploads/programa/grade_patrocinadores__4__programa.png',1),(5,'apresentacoes','Apresentações','Apresentações','../uploads/programa/apresentacoes__5__programa.png',1),(6,'estudo_audiencia','Estudo de Audiência','Estudo de Audiência','../uploads/programa/estudo_audiencia__6__programa.png',1),(7,'relacao_anunciantes_outras','Relação de Anunciantes com Outras Emissoras (MErchandising)','Relação de Anunciantes com Outras Emissoras (MErchandising)','../uploads/programa/relacao_anunciantes_outras__7__programa.png',1),(8,'aoces_diferenciadas_merchandising','Ações Diferenciadas de Merchandising','Ações Diferenciadas de Merchandising','../uploads/programa/aoces_diferenciadas_merchandising__8__programa.png',1),(9,'agora_e_tarde','Agora é Tarde','Agora é Tarde','../uploads/programa/agora_e_tarde__9__programa.jpg',1),(10,'a_liga','A Liga','A Liga','../uploads/programa/a_liga__10__programa.jpg',1),(11,'cqc','CQC','CQC','../uploads/programa/cqc__11__programa.jpg',1),(12,'master_chef','Master Chef','Master Chef','../uploads/programa/master_chef__12__programa.jpg',1),(13,'mundo_segundo_brasileiros','O Mundo Segundo os Brasileiros','O Mundo Segundo os Brasileiros','../uploads/programa/mundo_segundo_brasileiros__13__programa.jpg',1),(14,'panico_band','Pânico na Band','Pânico na Band','../uploads/programa/panico_band__14__programa.jpg',1),(15,'policia_24h','Polícia 24 Horas','Polícia 24 Horas','../uploads/programa/policia_24h__15__programa.jpg',1),(16,'sabe_nao_sabe','Sabe ou não Sabe','Sabe ou não Sabe','../uploads/programa/sabe_nao_sabe__16__programa.jpg',1),(17,'ta_na_tela','Tá Na Tela','Tá Na Tela','../uploads/programa/ta_na_tela__17__programa.jpg',1),(18,'top_20','Top 20','Top 20','../uploads/programa/top_20__18__programa.png',1),(19,'trip_tv','Trip TV','Trip TV','../uploads/programa/trip_tv__19__programa.jpg',1),(20,'band_esporte_clube','Band Esporte Clube','Band Esporte Clube','../uploads/programa/band_esporte_clube__20__programa.jpg',1),(21,'futebol','Futebol 2014','Band Esporte Clube','../uploads/programa/futebol__21__programa.jpg',1),(22,'gol_grande_momento_futebol','Gol o Grande Momento do Futebol','Gol o Grande Momento do Futebol','../uploads/programa/gol_grande_momento_futebol__22__programa.jpg',1),(23,'jogo_aberto','Jogo Aberto','Jogo Aberto','../uploads/programa/jogo_aberto__23__programa.jpg',1),(24,'pre_jogo','Pré Jogo','Pré Jogo','../uploads/programa/pre_jogo__24__programa.jpg',1),(25,'3_tempo','Terceiro Tempo','Terceiro Tempo','../uploads/programa/3_tempo__25__programa.jpg',1),(26,'eleicoes_2014','Eleições 2014','Eleições 2014','../uploads/programa/eleicoes_2014__26__programa.jpg',1),(27,'porsche_cup','Porsche GT3 Cup Challenge ','Porsche GT3 Cup Challenge ','../uploads/programa/porsche_cup__27__programa.jpg',1),(28,'formula_indy','Fórmula Indy','Fórmula Indy','../uploads/programa/formula_indy__28__programa.jpg',1),(29,'miss_brasil','Miss Brasil','Miss Brasil','../uploads/programa/miss_brasil__29__programa.png',1),(30,'dia_dia','Dia a Dia','Dia a Dia','../uploads/programa/dia_dia__30__programa.jpg',1),(31,'band_kids','Band Kids','Bnad Kids','../uploads/programa/band_kids__31__programa.jpg',1),(32,'cinema_madrugada','Cinema na Madrugada','Cinema na Madrugada','../uploads/programa/cinema_madrugada__32__programa.jpg',1),(33,'himym','Como Eu Conheci Sua Mãe','Como Eu Conheci Sua Mãe','../uploads/programa/himym__33__programa.jpg',1),(34,'simpsons','Os SImpsons','Os SImpsons','../uploads/programa/simpsons__34__programa.jpg',1),(35,'brasil_urgente','Brasil Urgente','Brasil Urgente','../uploads/programa/brasil_urgente__35__programa.jpg',1),(36,'canal_livre','Canal Livre','Canal Livre','../uploads/programa/canal_livre__36__programa.jpg',1),(37,'cafe_jornal','Café Jornal','Café Jornal','../uploads/programa/cafe_jornal__37__programa.jpg',1),(38,'jornal_band','Jornal da Band','Jornal da Band','../uploads/programa/jornal_band__38__programa.jpg',1),(39,'jornal_noite','Jornal da Noite','Jornal da Noite','../uploads/programa/jornal_noite__39__programa.jpg',1),(40,'donos_bola','Donos da Bola','Donos da Bola','../uploads/programa/donos_bola__40__programa.jpg',1),(41,'prato_casa','O Programa Prato da Casa','O Programa Prato da Casa','../uploads/programa/prato_casa__41__programa.jpg',1),(42,'band_cidade','Band Cidade','Band Cidade','../uploads/programa/band_cidade__42__programa.jpg',1),(43,'band_comunidade','Band Comunidade','Band Comunidade','../uploads/programa/band_comunidade__43__programa.jpg',1),(44,'band_entrevista','Band Entrevista','Band Entrevista','../uploads/programa/band_entrevista__44__programa.jpg',1),(45,'band_minas','Band Minas','Band Minas','../uploads/programa/band_minas__45__programa.jpg',1),(46,'band_shop','Band Shop','Band Shop','../uploads/programa/band_shop__46__programa.jpg',1),(47,'pr_acontece','PR Acontece','PR Acontece','../uploads/programa/pr_acontece__47__programa.jpg',1),(48,'jornal_rio','Jornal do Rio','Jornal do Rio','../uploads/programa/jornal_rio__48__programa.jpg',1),(49,'aventurados','Aventurados','Aventurados','../uploads/programa/aventurados__49__programa.jpg',1),(50,'batendo_perna','Batendo Perna','Batendo Perna','../uploads/programa/batendo_perna__50__programa.jpg',1),(51,'paredao_na_tv','Programa Paredão na TV','Programa Paredão na TV','../uploads/programa/paredao_na_tv__51__programa.jpg',1),(52,'valeu_boi','Valeu o Boi','Valeu o Boi','../uploads/programa/valeu_boi__52__programa.jpg',1),(53,'auto_motor','Auto Motor Vrum','Auto Motor Vrum','../uploads/programa/auto_motor__53__programa.jpg',1),(54,'olho_folia','De Olho na Folia','De Olho na Folia','../uploads/programa/olho_folia__54__programa.jpg',1),(55,'band_mulher','Band Mulher','Band Mulher','../uploads/programa/band_mulher__55__programa.jpg',1),(56,'papo_fogao','Papo de Fogão','Papo de Fogão','../uploads/programa/papo_fogao__56__programa.jpg',1),(57,'rn_acontece','RN Acontece','RN Acontece','../uploads/programa/rn_acontece__57__programa.jpg',1),(58,'rn_urgente_1','Rio Grande do Norte Urgente - 1a. Edição','Rio Grande do Norte Urgente - 1a. Edição','../uploads/programa/rn_urgente_1__58__programa.jpg',1),(59,'rn_urgente_2','Rio Grande do Norte Urgente - 2a. Edição','Rio Grande do Norte Urgente - 2a. Edição','../uploads/programa/rn_urgente_2__59__programa.jpg',1),(60,'ta_na_hora','Tá Na Hora','Tá Na Hora','../uploads/programa/ta_na_hora__60__programa.jpg',1),(61,'trilha_sabores','Na Trilha dos Sabores','Na Trilha dos Sabores','../uploads/programa/trilha_sabores__61__programa.jpg',1),(62,'preliminar','Preliminar','Preliminar','../uploads/programa/preliminar__62__programa.jpg',1),(63,'agroband','Agroband','Agroband','../uploads/programa/agroband__63__programa.jpg',1),(64,'imoveis_class_tv','Imóveis Class TV','Imóveis Class TV','../uploads/programa/imoveis_class_tv__64__programa.jpg',1),(65,'cobertura_especial','Cobertura Especial','Cobertura Especial','../uploads/programa/cobertura_especial__65__programa.jpg',1),(66,'las_vegas','Las Vegas','Las Vegas','../uploads/programa/las_vegas__66__programa.jpg',1),(67,'so_risos','Só Risos','Só Risos','../uploads/programa/so_risos__67__programa.png',1),(68,'super_util','Super Útil','Super Útil','../uploads/programa/super_util__68__programa.jpg',1),(69,'band_rural','Band Rural','Band Rural','../uploads/programa/band_rural__69__programa.jpg',1),(70,'especial_cidades','Especial Cidades','Especial Cidades','../uploads/programa/especial_cidades__70__programa.jpg',1),(71,'diario_rural','Diário Rural','Diário Rural','../uploads/programa/diario_rural__71__programa.jpg',1),(72,'falando_nisso','Falando Nisso','Falando Nisso','../uploads/programa/falando_nisso__72__programa.jpg',1),(73,'republica_1039','República 103.9','República 103.9','../uploads/programa/republica_1039__73__programa.jpg',1),(74,'band_cidade_2','Band Cidade 2a. Edição','Band Cidade 2a. Edição','../uploads/programa/band_cidade_2__74__programa.jpg',1),(75,'band_cidade_previsao','Band Cidade Previsão','Band Cidade Previsão','../uploads/programa/band_cidade_previsao__75__programa.jpg',1),(76,'vale_urgente','Vale Urgente','Vale Urgente','../uploads/programa/vale_urgente__76__programa.jpg',1),(77,'vale_shop','Vale Shop','Vale Shop','../uploads/programa/vale_shop__77__programa.jpg',1),(78,'clube_gordinho','Clube do Gordinho','Clube do Gordinho','../uploads/programa/clube_gordinho__78__programa.jpg',1),(79,'tv_web_shop','TV Web Shop','TV Web Shop','../uploads/programa/tv_web_shop__79__programa.jpg',1),(80,'entrevista_coletiva','Entrevista Coletiva','Entrevista Coletiva','../uploads/programa/entrevista_coletiva__80__programa.jpg',1),(81,'noticias_redacao','Notícias da Redação','Notícias da Redação','../uploads/programa/noticias_redacao__81__programa.jpg',1),(82,'convencao_2014','Convenção 2014 ','Convenção VP de Comercialização e VP de Televisão. Bola pra frente e foco nas metas','../uploads/programa/convencao_2014__82__programa.png',1),(83,'band_folia_2015','Band Folia 2015','Band Folia 2015','../uploads/programa/band_folia_2015__83__programa.png',1),(84,'band_verao_2015','Band Verão 2015','Band Verão 2015','../uploads/programa/band_verao_2015__84__programa.png',1),(85,'copa_petrobras_marcas','Copa Petrobras de Marcas','Copa Petrobras de Marcas','../uploads/programa/copa_petrobras_marcas__85__programa.png',1),(87,'futebol_2015','Futebol 2015','Futebol 2015','../uploads/programa/futebol_2015__87__programa.png',1),(88,'roland_garros_2105','Roland Garros 2015','Roland Garros 2015','../uploads/programa/roland_garros_2105__88__programa.png',1),(89,'top_cine','Top Cine','Top Cine','../uploads/programa/top_cine__89__programa.png',1),(90,'caminhoes_cia','Caminhões e Cia','Caminhões e Cia','../uploads/programa/caminhoes_cia__90__programa.png',1),(91,'caminhos_pecuaria','Caminhos da Pecuária','Caminhos da Pecuária','../uploads/programa/caminhos_pecuaria__91__programa.jpg',1),(92,'conxao_bandnews_terraviva','Conexão Bandnews Terraviva','Conexão Bandeirantes Terraviva','../uploads/programa/conxao_bandnews_terraviva__92__programa.jpg',1),(93,'consultor_terraviva','Consultor Terraviva','Consultor Terraviva','../uploads/programa/consultor_terraviva__93__programa.jpg',1),(94,'coracao_pescador','Coração de Pescador','Coração de Pescador','../uploads/programa/coracao_pescador__94__programa.jpg',1),(95,'dia_dia_rural','Dia Dia Rural','Dia Dia Rural','../uploads/programa/dia_dia_rural__95__programa.jpg',1),(96,'midia_kit_terraviva','Mídia Kit Terrraviva','Mídia Kit Terrraviva','../uploads/programa/midia_kit_terraviva__96__programa.jpg',1),(97,'jornal_terraviva','Jornal Terraviva','Jornal Terraviva','../uploads/programa/jornal_terraviva__97__programa.jpg',1),(98,'minas_rural_emater_mg','Minas Rural Emater-Mg','Minas Rural Emater-Mg','../uploads/programa/minas_rural_emater_mg__98__programa.jpg',1),(99,'sc_agricultura','SC Agricultura','SC Agricultura','../uploads/programa/sc_agricultura__99__programa.jpg',1),(100,'terraviva_dbo_tv','Terraviva DBO na TV','Terraviva DBO na TV','../uploads/programa/terraviva_dbo_tv__100__programa.jpg',1),(101,'terraviva_sustentavel','Terraviva Sustentável','Terraviva Sustentável','../uploads/programa/terraviva_sustentavel__101__programa.png',1),(102,'arte1_institucional','Arte1 Institucional','Arte1 Institucional','../uploads/programa/arte1_institucional__102__programa.png',1),(103,'emmy','Emmy','Emmy','../uploads/programa/emmy__103__programa.jpg',1),(104,'ultimate_pool_party','IHeart Radio Ultimate Pool Party','IHeart Radio Ultimate Pool Party','../uploads/programa/ultimate_pool_party__104__programa.jpg',1),(105,'iheartradio_music_festival','IHeart Radio Music Fesfival','IHeart Radio Music Fesfival','../uploads/programa/iheartradio_music_festival__105__programa.jpg',1),(106,'noites_mgm','Noites MGM','Noites MGM','../uploads/programa/noites_mgm__106__programa.png',1),(107,'premio_contigo_tv','Prêmio Contigo TV','Prêmio Contigo TV','../uploads/programa/premio_contigo_tv__107__programa.png',1),(108,'a_noticia','A Notícia','A Notícia','../uploads/programa/a_noticia__108__programa.jpg',1),(109,'a_noticia_agronegocio','A Notícia do Agronegócio','A Notícia do Agronegócio','../uploads/programa/a_noticia_agronegocio__109__programa.jpg',1),(110,'boas_noticias','Boas Notícias com Nelson gomes','Boas Notícias com Nelson gomes','../uploads/programa/boas_noticias__110__programa.jpg',1),(111,'bandnews_documento','Bandnews Documento','Bandnews Documento','../uploads/programa/bandnews_documento__111__programa.png',1),(112,'bandnews_linha','Bandnews Linha','Bandnews Linha','../uploads/programa/bandnews_linha__112__programa.png',1),(113,'brics','BRICS','BRICS','../uploads/programa/brics__113__programa.png',1),(114,'capital_natural','Capital Natural','Capital Natural','../uploads/programa/capital_natural__114__programa.jpg',1),(115,'feiras_negocios','Feiras & Negócios','Feiras & Negócios','../uploads/programa/feiras_negocios__115__programa.jpg',1),(116,'futebol_etc','Futebol ETC','Futebol ETC','../uploads/programa/futebol_etc__116__programa.png',1),(117,'giro_business','Giro Business com Sergio Waib','Giro Business com Sergio Waib','../uploads/programa/giro_business__117__programa.jpg',1),(118,'moda_negocios','Moda & negócios com Alexandre Farah','Moda & negócios com Alexandre Farah','../uploads/programa/moda_negocios__118__programa.jpg',1),(119,'que_da_certo','O que dá certo','O que dá certo','../uploads/programa/que_da_certo__119__programa.jpg',1),(120,'ponto_ponto','Ponto a Ponto','Ponto a Ponto','../uploads/programa/ponto_ponto__120__programa.jpg',1),(121,'salomao','Salomao Dois Pontos','Salomao Dois Pontos','../uploads/programa/salomao__121__programa.jpg',1),(122,'o_vinho','Sua Excelência O Vinho','Sua Excelência O Vinho','../uploads/programa/o_vinho__122__programa.jpg',1),(123,'voce_chef','Você Chef','Você Chef','../uploads/programa/voce_chef__123__programa.jpg',1),(124,'ace_band_sports','Ace Band Sports','Ace Band Sports','../uploads/programa/ace_band_sports__124__programa.jpg',1),(125,'automobilistmo_band_sports','Automobilismo','Automobilismo','../uploads/programa/automobilistmo_band_sports__125__programa.png',1),(126,'baita_amigos','Baita Amigos','Baita Amigos','../uploads/programa/baita_amigos__126__programa.jpg',1),(127,'band_sports_news_2ed','Band Sports News 2a. Edição','Band Sports News 2a. Edição','../uploads/programa/band_sports_news_2ed__127__programa.jpg',1),(128,'brasileiro_feminino','Brasileirão Feminino Caixa','Brasileirão Feminino Caixa','../uploads/programa/brasileiro_feminino__128__programa.png',1),(129,'brasil_open_2015','Brasil Open 2015','Brasil Open 2015','../uploads/programa/brasil_open_2015__129__programa.png',1),(130,'depois_jogo','Depois do Jogo','Depois do Jogo','../uploads/programa/depois_jogo__130__programa.jpg',1),(131,'diamond_league','IAAF Diamond League','IAAF Diamond League','../uploads/programa/diamond_league__131__programa.jpg',1),(132,'dtm','DTM','DTM','../uploads/programa/dtm__132__programa.jpg',1),(133,'momento_moto','Momento Moto','Momento Moto','../uploads/programa/momento_moto__133__programa.jpg',1),(134,'poker_night','Poker Night','Poker Night','../uploads/programa/poker_night__134__programa.png',1),(135,'supermotor','Supermotor','Supermotor','../uploads/programa/supermotor__135__programa.jpg',1),(136,'wta_atp','WTA e ATP','WTA e ATP','../uploads/programa/wta_atp__136__programa.jpg',1),(137,'volvo_ocean_race','Volvo Ocean Race','Volvo Ocean Race','../uploads/programa/volvo_ocean_race__137__programa.png',1),(138,'wgp_kickboxing','WGP kickboxing','WGP kickboxing','../uploads/programa/wgp_kickboxing__138__programa.jpg',1);
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
INSERT INTO `programa_tag` VALUES (9,8),(10,8),(11,8),(12,8),(13,8),(14,8),(15,8),(16,8),(17,8),(18,8),(19,8),(30,8),(31,8),(34,8),(36,8),(43,8),(44,8),(46,8),(49,8),(50,8),(51,8),(52,8),(53,8),(54,8),(60,8),(61,8),(62,8),(63,8),(64,8),(65,8),(66,8),(67,8),(68,8),(69,8),(70,8),(71,8),(72,8),(73,8),(78,8),(79,8),(80,8),(83,8),(84,8),(89,8),(90,8),(102,8),(20,9),(21,9),(22,9),(23,9),(24,9),(25,9),(27,9),(28,9),(40,9),(49,9),(85,9),(87,9),(88,9),(124,9),(125,9),(126,9),(127,9),(128,9),(129,9),(130,9),(131,9),(132,9),(133,9),(134,9),(135,9),(136,9),(137,9),(138,9),(26,10),(29,10),(54,10),(103,10),(104,10),(105,10),(106,10),(107,10),(12,11),(19,11),(30,11),(41,11),(46,11),(55,11),(56,11),(61,11),(32,12),(33,12),(10,13),(11,13),(13,13),(26,13),(35,13),(37,13),(38,13),(39,13),(42,13),(43,13),(44,13),(45,13),(47,13),(48,13),(53,13),(57,13),(58,13),(59,13),(70,13),(74,13),(75,13),(76,13),(77,13),(81,13),(91,13),(92,13),(93,13),(94,13),(95,13),(96,13),(97,13),(98,13),(99,13),(100,13),(101,13),(108,13),(109,13),(110,13),(111,13),(112,13),(113,13),(114,13),(115,13),(116,13),(117,13),(118,13),(119,13),(120,13),(121,13),(122,13),(123,13),(127,13),(1,25),(2,25),(3,25),(4,25),(5,25),(6,25),(7,25),(8,25),(82,25);
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
  `ref_tag` varchar(45) NOT NULL COMMENT 'Nome Ref.',
  `nome_tag` varchar(45) DEFAULT NULL COMMENT 'Nome',
  `tipo_tag` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tag`),
  UNIQUE KEY `ref_tag_UNIQUE` (`ref_tag`),
  KEY `ref` (`ref_tag`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
INSERT INTO `tag` VALUES (1,'tv_aberta','TV Aberta','veiculo'),(2,'newco','Newco','veiculo'),(3,'outernet','Outernet','veiculo'),(4,'radio','Rádio','veiculo'),(5,'midia_impressa','Mídia Impressa','veiculo'),(6,'midia_digital','Mídias Digitais','veiculo'),(7,'entretenimento_veiculo','Entretenimento','veiculo'),(8,'entretenimento_programa','Entretenimento','programa'),(9,'esportes','Esportes','programa'),(10,'eventos','Eventos','programa'),(11,'feminino','Feminino','programa'),(12,'filmes_series','Filmes e Séries','programa'),(13,'jornalismo','Jornalismo','programa'),(14,'vimeo','Vimeo','arquivo'),(15,'youtube','Youtube','arquivo'),(16,'pdf','PDF','arquivo'),(17,'doc','Word','arquivo'),(18,'xls','Excel','arquivo'),(19,'ppt','PowerPoint','arquivo'),(20,'agencias','Agências','analise'),(21,'anunciantes','Anunciantes','analise'),(22,'performance','Performance','analise'),(23,'mercado','Mercado','analise'),(24,'audiencia','Audiência','analise'),(25,'material','Material','programa');
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
  UNIQUE KEY `ref_veiculo_UNIQUE` (`ref_veiculo`),
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
INSERT INTO `veiculo_analise` VALUES (1,1),(1,2),(1,3),(1,4),(1,5),(1,6),(1,7),(1,8),(1,9),(1,10),(1,11),(1,12),(1,13),(1,14),(1,15),(1,16),(1,17),(1,18),(1,19),(1,20),(1,21),(1,34),(3,12),(3,13),(3,22),(3,23),(3,24),(3,25),(3,26),(3,27),(3,28),(3,34),(3,35),(4,12),(4,13),(4,22),(4,23),(4,24),(4,25),(4,26),(4,27),(4,28),(4,34),(4,35),(5,12),(5,13),(5,22),(5,23),(5,24),(5,25),(5,26),(5,27),(5,28),(5,34),(5,35),(6,12),(6,13),(6,22),(6,23),(6,24),(6,25),(6,26),(6,27),(6,28),(6,34),(6,35),(7,12),(7,13),(7,22),(7,23),(7,24),(7,25),(7,26),(7,27),(7,28),(7,34),(7,35),(8,12),(8,13),(8,22),(8,23),(8,24),(8,25),(8,26),(8,27),(8,28),(9,29),(9,30),(9,31),(9,32),(9,33),(10,29),(10,30),(10,31),(10,32),(10,33),(11,29),(11,30),(11,31),(11,32),(11,33),(12,29),(12,30),(12,31),(12,32),(12,33),(13,29),(13,30),(13,31),(13,32),(13,33),(14,29),(14,30),(14,31),(14,32),(14,33),(15,29),(15,30),(15,31),(15,32),(15,33),(30,12),(30,13),(30,29),(30,30),(30,31),(30,32),(30,33);
/*!40000 ALTER TABLE `veiculo_analise` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `veiculo_has_estudo`
--

DROP TABLE IF EXISTS `veiculo_has_estudo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `veiculo_has_estudo` (
  `veiculo_id_veiculo` int(11) NOT NULL,
  `estudo_id_estudo` int(11) NOT NULL,
  PRIMARY KEY (`veiculo_id_veiculo`,`estudo_id_estudo`),
  KEY `fk_veiculo_has_estudo_estudo1_idx` (`estudo_id_estudo`),
  KEY `fk_veiculo_has_estudo_veiculo1_idx` (`veiculo_id_veiculo`),
  CONSTRAINT `fk_veiculo_has_estudo_estudo1` FOREIGN KEY (`estudo_id_estudo`) REFERENCES `estudo` (`id_estudo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_veiculo_has_estudo_veiculo1` FOREIGN KEY (`veiculo_id_veiculo`) REFERENCES `veiculo` (`id_veiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veiculo_has_estudo`
--

LOCK TABLES `veiculo_has_estudo` WRITE;
/*!40000 ALTER TABLE `veiculo_has_estudo` DISABLE KEYS */;
INSERT INTO `veiculo_has_estudo` VALUES (1,3),(3,3),(4,3),(5,3),(6,3),(7,3),(1,4),(3,4),(4,4),(5,4),(6,4),(7,4),(1,5),(3,5),(4,5),(5,5),(6,5),(7,5),(1,6),(3,6),(4,6),(5,6),(6,6),(7,6),(1,7),(3,7),(4,7),(5,7),(6,7),(7,7);
/*!40000 ALTER TABLE `veiculo_has_estudo` ENABLE KEYS */;
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
INSERT INTO `veiculo_praca` VALUES (1,1),(1,2),(1,3),(1,4),(1,5),(1,6),(1,7),(1,8),(1,9),(1,10),(1,12),(1,13),(1,14),(1,17),(1,18),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1);
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
INSERT INTO `veiculo_praca_programa` VALUES (1,1,1),(1,1,2),(1,17,2),(1,18,2),(3,1,2),(4,1,2),(5,1,2),(6,1,2),(7,1,2),(9,1,2),(10,1,2),(11,1,2),(12,1,2),(13,1,2),(14,1,2),(15,1,2),(28,1,2),(30,1,2),(1,1,3),(1,1,4),(9,1,5),(10,1,5),(11,1,5),(12,1,5),(13,1,5),(14,1,5),(15,1,5),(30,1,5),(1,1,6),(1,14,6),(1,1,7),(1,1,8),(1,1,9),(1,1,10),(1,1,11),(1,1,12),(1,1,13),(1,1,14),(1,1,15),(1,1,16),(1,1,17),(1,1,18),(1,1,19),(1,1,20),(1,1,21),(1,1,22),(1,1,23),(1,5,23),(1,18,23),(1,1,24),(1,1,25),(1,1,26),(1,1,27),(1,1,28),(1,1,29),(1,1,30),(1,1,31),(1,1,32),(1,1,33),(1,1,34),(1,1,35),(1,3,35),(1,5,35),(1,6,35),(1,10,35),(1,12,35),(1,13,35),(1,1,36),(3,1,36),(5,1,36),(1,1,37),(1,1,38),(3,1,38),(1,1,39),(1,3,40),(1,5,40),(1,6,40),(1,10,40),(1,12,40),(1,13,40),(1,14,40),(1,17,40),(1,13,41),(1,5,42),(1,6,42),(1,10,42),(1,13,42),(1,17,42),(1,18,42),(1,13,43),(1,6,44),(1,13,44),(1,3,45),(1,6,46),(1,6,47),(1,12,48),(1,8,49),(1,8,50),(1,8,51),(1,8,52),(1,8,53),(1,8,54),(1,8,55),(1,8,56),(1,8,57),(1,8,58),(1,8,59),(1,10,60),(1,10,61),(1,10,62),(1,10,63),(1,10,64),(1,14,65),(1,14,66),(1,1,67),(1,14,67),(1,18,68),(1,18,69),(1,18,70),(1,18,71),(1,17,72),(1,17,73),(1,17,74),(1,17,75),(1,17,76),(1,17,77),(1,5,78),(1,5,79),(1,5,80),(1,9,81),(1,1,82),(1,1,83),(1,1,84),(1,1,85),(1,1,87),(1,1,88),(4,1,88),(1,1,89),(1,6,90),(5,1,91),(5,1,92),(5,1,93),(5,1,94),(5,1,95),(5,1,96),(5,1,97),(5,1,98),(5,1,99),(5,1,100),(5,1,101),(7,1,102),(31,1,103),(31,1,104),(31,1,105),(31,1,107),(3,1,108),(3,1,109),(3,1,110),(3,1,111),(3,1,112),(3,1,113),(3,1,114),(3,1,115),(3,1,116),(3,1,117),(3,1,118),(3,1,119),(3,1,120),(3,1,121),(3,1,122),(3,1,123),(4,1,124),(4,1,125),(4,1,126),(4,1,127),(4,1,128),(4,1,129),(4,1,130),(4,1,131),(4,1,132),(4,1,133),(4,1,134),(4,1,135),(4,1,136),(4,1,137),(4,1,138);
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

-- Dump completed on 2014-10-16 19:39:48
