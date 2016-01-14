-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Jan-2016 às 23:37
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bolha`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `descricao`) VALUES
(1, 'Plástico', 'Bobina de Plástico'),
(2, 'Papelão', 'Bobina de Papelão');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cnpj` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `razaoSocial` varchar(255) NOT NULL,
  `contato` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cnpj`, `email`, `telefone`, `celular`, `razaoSocial`, `contato`) VALUES
(1, 'Tramontina S.A Cutelaria', '90.050.238/0001-14', 'cris.herpich@tramontina.net', '(51) 3634 7654', '(54) 9988-7766', 'Tramontina Cutelaria', 'Clovis'),
(2, 'Brinox', '92.038.108/0001-91', 'marcelino@brinox.com', '(54) 3534535345', '(54) 9966-5544', 'Brinox FÃ¡brica de Utilidades DomÃ©sticas', 'Marcelino'),
(3, 'Trombini', '11.252.642/0013-38', 'Antonio@Trombini.com', '(54) 3454-1218', '(54) 8765-4321', 'Trombini Embalagens dde PapelÃ£o e PlÃ¡stico', 'Antonio Zanus');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE IF NOT EXISTS `enderecos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rua` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `pais` varchar(255) NOT NULL,
  `perto` varchar(255) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_cliente`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `cliente_UNIQUE` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE IF NOT EXISTS `pagamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `formula` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` int(11) NOT NULL,
  `valorTotal` double NOT NULL,
  `formaPagamento` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `formaPagamento_idx` (`formaPagamento`),
  KEY `cliente_idx` (`cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_produtos`
--

CREATE TABLE IF NOT EXISTS `pedidos_produtos` (
  `id_pedido` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`id_pedido`,`id_produto`),
  UNIQUE KEY `id_produto_UNIQUE` (`id_produto`),
  UNIQUE KEY `id_pedido_UNIQUE` (`id_pedido`),
  KEY `id_produto_idx` (`id_produto`),
  KEY `id_pedido_idx` (`id_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `tamanho` varchar(45) NOT NULL,
  `comprimento` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `valor` double NOT NULL,
  `quantidade` int(11) NOT NULL,
  `imagem` blob,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_Produto_Categoria_idx` (`categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `tamanho`, `comprimento`, `categoria`, `valor`, `quantidade`, `imagem`) VALUES
(1, 'Bobina de PapelÃ£o Ondulado Kraft', 'Esta Bobina de PapelÃ£o Ondulado Ã© muito utilizado para fazer caixas litografadas e caixas pardas compactas.', '100', 1000, 2, 199, 10, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `username`, `role`, `password`) VALUES
(2, 'Cristian Herpich', 'cristian', 'admin', '$2a$10$ZK.X96fF/aAAzYK.WpURteqJoBaLeixAUlkgCZ/IUjPCaU4tC8MLa'),
(3, 'teste', 'cristian', 'admin', '$2a$10$MFc4sa6fymtIM0Z5jyQMNu//25E4bd.2X8Mp5e28C1BFe4a71yaja');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `cliente` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `formaPagamento` FOREIGN KEY (`formaPagamento`)
