-- MySQL Script generated by MySQL Workbench
-- 01/19/16 14:12:45
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema bolha
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `bolha` ;

-- -----------------------------------------------------
-- Schema bolha
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bolha` DEFAULT CHARACTER SET latin1 ;
USE `bolha` ;

-- -----------------------------------------------------
-- Table `bolha`.`categorias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bolha`.`categorias` ;

CREATE TABLE IF NOT EXISTS `bolha`.`categorias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bolha`.`produtos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bolha`.`produtos` ;

CREATE TABLE IF NOT EXISTS `bolha`.`produtos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `tamanho` VARCHAR(45) NOT NULL,
  `comprimento` INT NOT NULL,
  `categoria` INT NOT NULL,
  `valor` DOUBLE NOT NULL,
  `quantidade` INT NOT NULL,
  `imagem` VARCHAR(255) NOT NULL,
  `descricao` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_Produto_Categoria_idx` (`categoria` ASC),
  CONSTRAINT `categoria`
    FOREIGN KEY (`categoria`)
    REFERENCES `bolha`.`categorias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bolha`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bolha`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `bolha`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `cnpj` VARCHAR(45) NULL,
  `email` VARCHAR(255) NOT NULL,
  `telefone` VARCHAR(45) NULL,
  `celular` VARCHAR(45) NULL,
  `razaoSocial` VARCHAR(255) NULL,
  `contato` VARCHAR(255) NULL,
  `username` VARCHAR(255) NOT NULL,
  `role` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bolha`.`enderecos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bolha`.`enderecos` ;

CREATE TABLE IF NOT EXISTS `bolha`.`enderecos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `rua` VARCHAR(255) NOT NULL,
  `bairro` VARCHAR(255) NOT NULL,
  `cep` VARCHAR(45) NOT NULL,
  `cidade` VARCHAR(255) NOT NULL,
  `estado` VARCHAR(2) NOT NULL,
  `pais` VARCHAR(255) NOT NULL,
  `perto` VARCHAR(255) NOT NULL,
  `id_usuario` INT NOT NULL,
  `numero` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `usuario_idx` (`id_usuario` ASC),
  CONSTRAINT `id_usuario`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `bolha`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bolha`.`pagamentos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bolha`.`pagamentos` ;

CREATE TABLE IF NOT EXISTS `bolha`.`pagamentos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `formula` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bolha`.`pedidos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bolha`.`pedidos` ;

CREATE TABLE IF NOT EXISTS `bolha`.`pedidos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario` INT NOT NULL,
  `valorTotal` DOUBLE NOT NULL,
  `formaPagamento` INT NOT NULL,
  `status` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `formaPagamento_idx` (`formaPagamento` ASC),
  INDEX `usuario_idx` (`usuario` ASC),
  CONSTRAINT `usuario`
    FOREIGN KEY (`usuario`)
    REFERENCES `bolha`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `formaPagamento`
    FOREIGN KEY (`formaPagamento`)
    REFERENCES `bolha`.`pagamentos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bolha`.`pedidos_produtos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bolha`.`pedidos_produtos` ;

CREATE TABLE IF NOT EXISTS `bolha`.`pedido_produtos` (
  `quantidade` INT NOT NULL,
  `id_produto` INT NOT NULL,
  `id_pedido` INT NOT NULL,
  INDEX `id_produto_idx` (`id_produto` ASC),
  INDEX `id_pedido_idx` (`id_pedido` ASC),
  CONSTRAINT `id_produto`
    FOREIGN KEY (`id_produto`)
    REFERENCES `bolha`.`produtos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_pedido`
    FOREIGN KEY (`id_pedido`)
    REFERENCES `bolha`.`pedidos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;






-- -----------------------------------------------------
-- -----------------------------------------------------

-- -----------------------------------------------------
-- INSERTs para testes
-- -----------------------------------------------------
INSERT INTO `categorias` (`id`, `nome`, `descricao`) VALUES
  (NULL, 'Plástico Bolha', 'Super bobina de plástico bolha, ploc ploc'),
  (NULL, 'Papelão', 'Não-tão-super bobina de papelão');

INSERT INTO `produtos` (`id`, `nome`, `tamanho`, `comprimento`, `categoria`, `valor`, `quantidade`, `imagem`, `descricao`) VALUES
  (NULL, 'Bolha Banana', '10', '100', '1', '666', '500', 'laranja.jpg', 'Maravilhoso plástico bolha na cor banana. Ideal para festas infantis!'),
  (NULL, 'Plástico Bolha Comum', '10', '100', '1', '200', '1000', 'normal.jpg', 'Plástico bolha daquele comumzinho que usam pra proteger as coisas frágeis. Ou estourar! :D'),
  (NULL, 'Bolha Extra Bolha', '10', '100', '1', '400', '300', 'bubble-wrap.jpg', 'Plástico bolha extra bolha - bolhas com ploc ploc extra, ou plástico com mais bolhas por m²? Compre e descubra! o/'),
  (NULL, 'Papelão Comum', '10', '100', '2', '100', '1000', 'caixa_papelao_01.png', 'Papelão comum - marrom, se molhar derrete. Ideal para caixas.'),
  (NULL, 'Papelão Ondulado', '10', '100', '2', '200', '500', 'papelao-ondulado2.jpg', 'É mais caro que o comum. E mais bonito :)');

INSERT INTO `usuarios` (`id`, `nome`, `cnpj`, `email`, `telefone`, `celular`, `razaoSocial`, `contato`, `username`, `role`, `password`) VALUES
  (NULL, 'Vini', '(cnpj)', 'vini@banana.com', '54-9999-9999', '54-9999-9999', '(razaosocial)', 'Vini', 'vini', 'cliente', '$2a$10$noMgjsAg8rCclsrCe600.OmdA0dsxC.3oo3j8iyNP67aav7nSlUuO'),
  (NULL, 'Somar', NULL, 'osmar@diminuir.com', NULL, NULL, NULL, NULL, 'osmar', 'admin', '$2a$10$H2kiY1SjXnrKeXQCJewgLuGfX.KXyU2Nigm4kjZydHqqj4P2CL8AC'),
  (NULL, 'Cristian', NULL, 'cristian@cristian.com', NULL, NULL, NULL, NULL, 'cristian', 'admin', '$2a$10$H2kiY1SjXnrKeXQCJewgLuGfX.KXyU2Nigm4kjZydHqqj4P2CL8AC'),
  (NULL, 'Guilherme', NULL, 'will.i@m.com', NULL, NULL, NULL, NULL, 'willian', 'admin', '$2a$10$H2kiY1SjXnrKeXQCJewgLuGfX.KXyU2Nigm4kjZydHqqj4P2CL8AC'),
  (NULL, 'Admin', NULL, 'admin@admin.com', NULL, NULL, NULL, NULL, 'admin', 'admin', '$2a$10$H2kiY1SjXnrKeXQCJewgLuGfX.KXyU2Nigm4kjZydHqqj4P2CL8AC'),
  (NULL, 'Cliente', NULL, 'cliente@cliente.com', NULL, NULL, NULL, NULL, 'cliente', 'cliente', '$2a$10$noMgjsAg8rCclsrCe600.OmdA0dsxC.3oo3j8iyNP67aav7nSlUuO');

INSERT INTO `enderecos` (`id`, `rua`, `bairro`, `cep`, `cidade`, `estado`, `pais`, `perto`, `id_usuario`, `numero`) VALUES
  (NULL, 'Eloi Seccondo', 'Conceição', '95700-000', 'Bento Gonçalves', 'RS', 'Brasilsilsil', 'Bertolini', '1', '110, fundos'),
  (NULL, 'Não tem rua', 'Roça', '95700-000?', 'Bent... Tuiuti?', 'RS', 'Brasilsilsil', 'Judas perdeu as meia', '2', 'É a única casa lá'),
  (NULL, 'Eloi Seccondo', 'Conceição', '95700-000', 'Bento Gonçalves', 'RS', 'Brasilsilsil', 'Bertolini', '2', '110, fundos');

INSERT INTO `pagamentos` (`id`, `nome`, `formula`) VALUES
  (NULL, 'Boleto Bancário', 'a² = b² + c²'),
  (NULL, 'Cartão de Crédito', 'H2O + CO2 = H2CO3');

INSERT INTO `pedidos` (`id`, `usuario`, `valorTotal`, `formaPagamento`, `status`) VALUES
  (NULL, '4', '2000', '1', 'aguardando pagamento'),
  (NULL, '3', '10000', '2', 'pagamento confirmado');

INSERT INTO `pedido_produtos` (`id_pedido`, `id_produto`, `quantidade`) VALUES
  ('1', '1', '200'),
  ('1', '2', '300'),
  ('2', '1', '200'),
  ('2', '4', '50'),
  ('2', '5', '10');
