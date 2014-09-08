-- MySQL Script generated by MySQL Workbench
-- Fri Sep  5 09:25:20 2014
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema im
-- -----------------------------------------------------
-- Portal Band Inteligência de Mercado
DROP SCHEMA IF EXISTS `im` ;
CREATE SCHEMA IF NOT EXISTS `im` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
SHOW WARNINGS;
USE `im` ;

-- -----------------------------------------------------
-- Table `im`.`veiculo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `im`.`veiculo` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `im`.`veiculo` (
  `id_veiculo` INT NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `ref_veiculo` VARCHAR(45) NOT NULL COMMENT 'Nome Ref.',
  `nome_veiculo` VARCHAR(100) NOT NULL COMMENT 'Nome',
  `descricao_veiculo` VARCHAR(512) NOT NULL COMMENT 'Descrição',
  `imagem_veiculo` VARCHAR(255) NOT NULL COMMENT 'Imagem',
  `ativo_veiculo` TINYINT(1) NOT NULL COMMENT 'Ativo',
  PRIMARY KEY (`id_veiculo`))
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `ref` ON `im`.`veiculo` (`ref_veiculo` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `im`.`analise`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `im`.`analise` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `im`.`analise` (
  `id_analise` INT NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `ref_analise` VARCHAR(45) NOT NULL COMMENT 'Nome Ref.',
  `nome_analise` VARCHAR(100) NOT NULL COMMENT 'Nome',
  `descricao_analise` VARCHAR(512) NOT NULL COMMENT 'Descrição',
  `imagem_analise` VARCHAR(255) NOT NULL COMMENT 'Imagem',
  `ativo_analise` TINYINT(1) NOT NULL COMMENT 'Ativo',
  PRIMARY KEY (`id_analise`))
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `ref` ON `im`.`analise` (`ref_analise` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `im`.`tag`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `im`.`tag` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `im`.`tag` (
  `id_tag` INT NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `ref_tag` VARCHAR(45) NULL COMMENT 'Nome Ref.',
  `nome_tag` VARCHAR(45) NULL COMMENT 'Nome',
  `tipo_tag` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_tag`))
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `ref` ON `im`.`tag` (`ref_tag` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `im`.`analise_tag`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `im`.`analise_tag` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `im`.`analise_tag` (
  `fk_id_analise` INT NOT NULL,
  `fk_id_tag` INT NOT NULL,
  PRIMARY KEY (`fk_id_analise`, `fk_id_tag`),
  CONSTRAINT `fk_analise_has_tag_analise1`
    FOREIGN KEY (`fk_id_analise`)
    REFERENCES `im`.`analise` (`id_analise`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_analise_has_tag_tag1`
    FOREIGN KEY (`fk_id_tag`)
    REFERENCES `im`.`tag` (`id_tag`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_analise_has_tag_tag1_idx` ON `im`.`analise_tag` (`fk_id_tag` ASC);

SHOW WARNINGS;
CREATE INDEX `fk_analise_has_tag_analise1_idx` ON `im`.`analise_tag` (`fk_id_analise` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `im`.`noticia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `im`.`noticia` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `im`.`noticia` (
  `id_noticia` INT NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `ref_noticia` VARCHAR(45) NOT NULL COMMENT 'Nome Ref.',
  `nome_noticia` VARCHAR(100) NOT NULL COMMENT 'Nome',
  `descricao_noticia` VARCHAR(512) NOT NULL COMMENT 'Descrição',
  `link_noticia` VARCHAR(512) NOT NULL COMMENT 'Link',
  `ativo_noticia` TINYINT(1) NOT NULL COMMENT 'Ativo',
  `imagem_noticia` VARCHAR(255) NOT NULL COMMENT 'Imagem',
  PRIMARY KEY (`id_noticia`))
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `ref` ON `im`.`noticia` (`ref_noticia` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `im`.`praca`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `im`.`praca` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `im`.`praca` (
  `id_praca` INT NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `ref_praca` VARCHAR(45) NOT NULL COMMENT 'Nome Ref.',
  `nome_praca` VARCHAR(100) NOT NULL COMMENT 'Nome',
  `descricao_praca` VARCHAR(512) NOT NULL COMMENT 'Descrição',
  `ativo_praca` TINYINT(1) NOT NULL COMMENT 'Ativo',
  PRIMARY KEY (`id_praca`))
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `ref` ON `im`.`praca` (`ref_praca` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `im`.`programa`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `im`.`programa` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `im`.`programa` (
  `id_programa` INT NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `ref_programa` VARCHAR(45) NOT NULL COMMENT 'Nome Ref.',
  `nome_programa` VARCHAR(100) NOT NULL COMMENT 'Nome',
  `descricao_programa` VARCHAR(512) NOT NULL COMMENT 'Descrição',
  `imagem_programa` VARCHAR(255) NOT NULL COMMENT 'Imagem',
  `ativo_programa` TINYINT(1) NOT NULL COMMENT 'Ativo',
  PRIMARY KEY (`id_programa`))
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `ref` ON `im`.`programa` (`ref_programa` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `im`.`programa_tag`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `im`.`programa_tag` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `im`.`programa_tag` (
  `fk_id_programa` INT NOT NULL,
  `fk_id_tag` INT NOT NULL,
  PRIMARY KEY (`fk_id_programa`, `fk_id_tag`),
  CONSTRAINT `fk_programa_has_tag_programa1`
    FOREIGN KEY (`fk_id_programa`)
    REFERENCES `im`.`programa` (`id_programa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_programa_has_tag_tag1`
    FOREIGN KEY (`fk_id_tag`)
    REFERENCES `im`.`tag` (`id_tag`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_programa_has_tag_tag1_idx` ON `im`.`programa_tag` (`fk_id_tag` ASC);

SHOW WARNINGS;
CREATE INDEX `fk_programa_has_tag_programa1_idx` ON `im`.`programa_tag` (`fk_id_programa` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `im`.`veiculo_praca`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `im`.`veiculo_praca` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `im`.`veiculo_praca` (
  `fk_id_veiculo` INT NOT NULL,
  `fk_id_praca` INT NOT NULL,
  PRIMARY KEY (`fk_id_veiculo`, `fk_id_praca`),
  CONSTRAINT `fk_veiculo_praca_veiculo1`
    FOREIGN KEY (`fk_id_veiculo`)
    REFERENCES `im`.`veiculo` (`id_veiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_veiculo_praca_praca1`
    FOREIGN KEY (`fk_id_praca`)
    REFERENCES `im`.`praca` (`id_praca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_veiculo_praca_veiculo1_idx` ON `im`.`veiculo_praca` (`fk_id_veiculo` ASC);

SHOW WARNINGS;
CREATE INDEX `fk_veiculo_praca_praca1_idx` ON `im`.`veiculo_praca` (`fk_id_praca` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `im`.`veiculo_praca_programa`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `im`.`veiculo_praca_programa` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `im`.`veiculo_praca_programa` (
  `fk_id_veiculo` INT NOT NULL,
  `fk_id_praca` INT NOT NULL,
  `fk_id_programa` INT NOT NULL,
  PRIMARY KEY (`fk_id_veiculo`, `fk_id_praca`, `fk_id_programa`),
  CONSTRAINT `fk_veiculo_praca_programa_veiculo_praca1`
    FOREIGN KEY (`fk_id_veiculo` , `fk_id_praca`)
    REFERENCES `im`.`veiculo_praca` (`fk_id_veiculo` , `fk_id_praca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_veiculo_praca_programa_programa1`
    FOREIGN KEY (`fk_id_programa`)
    REFERENCES `im`.`programa` (`id_programa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_veiculo_praca_programa_programa1_idx` ON `im`.`veiculo_praca_programa` (`fk_id_programa` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `im`.`arquivo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `im`.`arquivo` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `im`.`arquivo` (
  `id_arquivo` INT NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `ref_arquivo` VARCHAR(45) NOT NULL COMMENT 'Nome Ref.',
  `nome_arquivo` VARCHAR(100) NOT NULL COMMENT 'Nome',
  `caminho_arquivo` VARCHAR(512) NOT NULL COMMENT 'Caminho',
  `ativo_arquivo` TINYINT(1) NOT NULL COMMENT 'Ativo',
  `fk_id_veiculo` INT NOT NULL,
  `fk_id_praca` INT NOT NULL,
  `fk_id_programa` INT NOT NULL,
  PRIMARY KEY (`id_arquivo`),
  CONSTRAINT `fk_arquivo_veiculo_praca_programa1`
    FOREIGN KEY (`fk_id_veiculo` , `fk_id_praca` , `fk_id_programa`)
    REFERENCES `im`.`veiculo_praca_programa` (`fk_id_veiculo` , `fk_id_praca` , `fk_id_programa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `ref` ON `im`.`arquivo` (`ref_arquivo` ASC);

SHOW WARNINGS;
CREATE INDEX `fk_arquivo_veiculo_praca_programa1_idx` ON `im`.`arquivo` (`fk_id_veiculo` ASC, `fk_id_praca` ASC, `fk_id_programa` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `im`.`log`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `im`.`log` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `im`.`log` (
  `id_log` INT NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `usuario_log` VARCHAR(50) NOT NULL COMMENT 'Usuário',
  `ip_log` VARCHAR(45) NOT NULL COMMENT 'IP',
  `acao_log` VARCHAR(45) NOT NULL COMMENT 'Ação',
  `ref_log` VARCHAR(45) NOT NULL COMMENT 'Cód. Ref.',
  `data_log` DATETIME NOT NULL COMMENT 'Data',
  `descricao_log` VARCHAR(512) NOT NULL COMMENT 'Descrição',
  PRIMARY KEY (`id_log`))
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `ref` ON `im`.`log` (`ref_log` ASC);

SHOW WARNINGS;
CREATE INDEX `usuario` ON `im`.`log` (`usuario_log` ASC);

SHOW WARNINGS;
CREATE INDEX `acao` ON `im`.`log` (`acao_log` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `im`.`veiculo_analise`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `im`.`veiculo_analise` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `im`.`veiculo_analise` (
  `fk_id_veiculo` INT NOT NULL,
  `fk_id_analise` INT NOT NULL,
  PRIMARY KEY (`fk_id_veiculo`, `fk_id_analise`),
  CONSTRAINT `fk_veiculo_analise_veiculo1`
    FOREIGN KEY (`fk_id_veiculo`)
    REFERENCES `im`.`veiculo` (`id_veiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_veiculo_analise_analise1`
    FOREIGN KEY (`fk_id_analise`)
    REFERENCES `im`.`analise` (`id_analise`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'analise_id_analise';

SHOW WARNINGS;
CREATE INDEX `fk_veiculo_analise_veiculo1_idx` ON `im`.`veiculo_analise` (`fk_id_veiculo` ASC);

SHOW WARNINGS;
CREATE INDEX `fk_veiculo_analise_analise1_idx` ON `im`.`veiculo_analise` (`fk_id_analise` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `im`.`arquivo_tag`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `im`.`arquivo_tag` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `im`.`arquivo_tag` (
  `fk_id_tag` INT NOT NULL,
  `fk_id_arquivo` INT NOT NULL,
  PRIMARY KEY (`fk_id_tag`, `fk_id_arquivo`),
  CONSTRAINT `fk_arquivo_tag_tag1`
    FOREIGN KEY (`fk_id_tag`)
    REFERENCES `im`.`tag` (`id_tag`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_arquivo_tag_arquivo1`
    FOREIGN KEY (`fk_id_arquivo`)
    REFERENCES `im`.`arquivo` (`id_arquivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_arquivo_tag_tag1_idx` ON `im`.`arquivo_tag` (`fk_id_tag` ASC);

SHOW WARNINGS;
CREATE INDEX `fk_arquivo_tag_arquivo1_idx` ON `im`.`arquivo_tag` (`fk_id_arquivo` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `im`.`arquivo_historico`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `im`.`arquivo_historico` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `im`.`arquivo_historico` (
  `id_arquivo_historico` INT NOT NULL AUTO_INCREMENT,
  `fk_id_arquivo` INT NOT NULL,
  `ref_arquivo` VARCHAR(45) NOT NULL,
  `nome_arquivo` VARCHAR(100) NOT NULL,
  `caminho_arquivo` VARCHAR(512) NOT NULL,
  PRIMARY KEY (`id_arquivo_historico`),
  CONSTRAINT `fk_arquivo_historico_arquivo1`
    FOREIGN KEY (`fk_id_arquivo`)
    REFERENCES `im`.`arquivo` (`id_arquivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_arquivo_historico_arquivo1_idx` ON `im`.`arquivo_historico` (`fk_id_arquivo` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `im`.`veiculo_tag`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `im`.`veiculo_tag` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `im`.`veiculo_tag` (
  `tag_id_tag` INT NOT NULL,
  `veiculo_id_veiculo` INT NOT NULL,
  PRIMARY KEY (`tag_id_tag`, `veiculo_id_veiculo`),
  CONSTRAINT `fk_veiculo_tag_tag1`
    FOREIGN KEY (`tag_id_tag`)
    REFERENCES `im`.`tag` (`id_tag`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_veiculo_tag_veiculo1`
    FOREIGN KEY (`veiculo_id_veiculo`)
    REFERENCES `im`.`veiculo` (`id_veiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_veiculo_tag_veiculo1_idx` ON `im`.`veiculo_tag` (`veiculo_id_veiculo` ASC);

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
