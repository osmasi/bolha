-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 21-Jan-2016 às 13:43
-- Versão do servidor: 5.5.46-0ubuntu0.14.04.2
-- versão do PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bolha`
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
(1, 'Plástico Bolha', 'Super bobina de plástico bolha, ploc ploc'),
(2, 'Papelão', 'Não-tão-super bobina de papelão');

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
  `id_usuario` int(11) NOT NULL,
  `numero` varchar(45) NOT NULL,
  PRIMARY KEY (`id`,`id_usuario`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `usuario_UNIQUE` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id`, `rua`, `bairro`, `cep`, `cidade`, `estado`, `pais`, `perto`, `id_usuario`, `numero`) VALUES
(1, 'Eloi Seccondo', 'Conceição', '95700-000', 'Bento Gonçalves', 'RS', 'Brasilsilsil', 'Bertolini', 1, '110, fundos'),
(2, 'Não tem rua', 'Roça', '95700-000?', 'Bent... Tuiuti?', 'RS', 'Brasilsilsil', 'Judas perdeu as meia', 2, 'É a única casa lá');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `pagamentos`
--

INSERT INTO `pagamentos` (`id`, `nome`, `formula`) VALUES
(1, 'Boleto Bancário', 'a² = b² + c²'),
(2, 'Cartão de Crédito', 'H2O + CO2 = H2CO3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `valorTotal` double NOT NULL,
  `formaPagamento` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `formaPagamento_idx` (`formaPagamento`),
  KEY `usuario_idx` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `usuario`, `valorTotal`, `formaPagamento`, `status`) VALUES
(1, 4, 2000, 1, 'aguardando pagamento'),
(2, 3, 10000, 2, 'pagamento confirmado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_produtos`
--

CREATE TABLE IF NOT EXISTS `pedidos_produtos` (
  `quantidade` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  KEY `id_produto_idx` (`id_produto`),
  KEY `id_pedido_idx` (`id_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedidos_produtos`
--

INSERT INTO `pedidos_produtos` (`quantidade`, `id_produto`, `id_pedido`) VALUES
(200, 1, 1),
(300, 2, 1),
(200, 1, 2),
(50, 4, 2),
(10, 5, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `tamanho` varchar(45) NOT NULL,
  `comprimento` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `valor` double NOT NULL,
  `quantidade` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_Produto_Categoria_idx` (`categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `tamanho`, `comprimento`, `categoria`, `valor`, `quantidade`, `imagem`, `descricao`) VALUES
(1, 'Bolha Banana', '10', 100, 1, 666, 500, '', 'Maravilhoso plástico bolha na cor banana. Ideal para festas infantis!'),
(2, 'Plástico Bolha Comum', '10', 100, 1, 200, 1000, '', 'Plástico bolha daquele comumzinho que usam pra proteger as coisas frágeis. Ou estourar! :D'),
(3, 'Bolha Extra Bolha', '10', 100, 1, 400, 300, '', 'Plástico bolha extra bolha - bolhas com ploc ploc extra, ou plástico com mais bolhas por m²? Compre e descubra! o/'),
(4, 'Papelão Comum', '10', 100, 2, 100, 1000, '', 'Papelão comum - marrom, se molhar derrete. Ideal para caixas.'),
(5, 'Papelão Ondulado', '10', 100, 2, 200, 500, '', 'É mais caro que o comum. E mais bonito :)');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `razaoSocial` varchar(255) DEFAULT NULL,
  `contato` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cnpj`, `email`, `telefone`, `celular`, `razaoSocial`, `contato`, `username`, `role`, `password`) VALUES
(1, 'Vini', NULL, 'vini@banana.com', NULL, NULL, NULL, NULL, 'vini', 'admin', '$2a$10$H2kiY1SjXnrKeXQCJewgLuGfX.KXyU2Nigm4kjZydHqqj4P2CL8AC'),
(2, 'Somar', NULL, 'osmar@diminuir.com', NULL, NULL, NULL, NULL, 'osmar', 'admin', '$2a$10$H2kiY1SjXnrKeXQCJewgLuGfX.KXyU2Nigm4kjZydHqqj4P2CL8AC'),
(3, 'Cristian', NULL, 'cristian@cristian.com', NULL, NULL, NULL, NULL, 'cristian', '$2a$10$H2kiY1SjXnrKeXQCJewgLuGfX.KXyU2Nigm4kjZydHqqj4P2CL8AC', 'admin'),
(4, 'Guilherme', NULL, 'will.i@m.com', NULL, NULL, NULL, NULL, 'willian', 'admin', '$2a$10$H2kiY1SjXnrKeXQCJewgLuGfX.KXyU2Nigm4kjZydHqqj4P2CL8AC'),
(5, 'Admin', NULL, 'admin@admin.com', NULL, NULL, NULL, NULL, 'admin', 'admin', '$2a$10$H2kiY1SjXnrKeXQCJewgLuGfX.KXyU2Nigm4kjZydHqqj4P2CL8AC');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `usuario` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `formaPagamento` FOREIGN KEY (`formaPagamento`) REFERENCES `pagamentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedidos_produtos`
--
ALTER TABLE `pedidos_produtos`
  ADD CONSTRAINT `id_produto` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `categoria` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
