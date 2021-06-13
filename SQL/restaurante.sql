-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Jun-2021 às 00:47
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `restaurante`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `mesa` int NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id_func` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id_func`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id_func`, `usuario`, `senha`) VALUES
(1, 'garcom', 'c055304f927b5de084ccb9b6a8e66ce4'),
(2, 'gerente', '182997e33c7bab8ca989cd12b5a13fa1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesas`
--

DROP TABLE IF EXISTS `mesas`;
CREATE TABLE IF NOT EXISTS `mesas` (
  `id_mesa` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`id_mesa`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `mesas`
--

INSERT INTO `mesas` (`id_mesa`, `nome`, `estado`) VALUES
(1, 'Mesa 1', 1),
(2, 'Mesa 2', 0),
(3, 'Mesa 3', 0),
(4, 'Mesa 4', 0),
(5, 'Mesa 5', 0),
(6, 'Mesa 6', 1),
(7, 'Mesa 7', 1),
(8, 'Mesa 8', 1),
(9, 'Mesa 9', 1),
(10, 'Mesa 10', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id_pedido` int NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(50) NOT NULL,
  `preco_produto` decimal(5,2) NOT NULL,
  `quantidade` int NOT NULL,
  `id_cliente` int NOT NULL,
  `id_mesa` int NOT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_mesa` (`id_mesa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id_produto` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `quantidade` int DEFAULT NULL,
  `preco` float NOT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `quantidade`, `preco`) VALUES
(1, 'Pizza', 30, 39.99),
(2, 'Cachorro-Quente', 10, 15),
(3, 'Batata Frita', 50, 10),
(4, 'Refrigerante', 50, 12),
(5, 'Milk Shake', 15, 15),
(6, 'Hambúrguer', 50, 15),
(7, 'Sorvete', 30, 7),
(8, 'Anéis de Cebola', 20, 10),
(9, 'Balde de Frango Frito', 30, 25),
(10, 'Combo', 100, 30);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
