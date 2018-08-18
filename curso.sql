-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `epa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_curso` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `periodo` varchar(30) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nome_curso` (`nome_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome_curso`, `periodo`) VALUES
(1, 'PRIMEIRO ETIM DE INFORMATICA', ''),
(2, 'SEGUNDO ETIM DE INFORMATICA', ''),
(3, 'TERCEIRO ETIM DE INFORMATICA', ''),
(4, 'PRIMEIRO ETIM DE QUIMICA', ''),
(5, 'SEGUNDO ETIM DE QUIMICA', ''),
(6, 'TERCEIRO ETIM DE QUIMICA', ''),
(7, 'PRIMEIRO ETIM DE ADMINISTRACAO', ''),
(8, 'SEGUNDO ETIM DE ADMINISTRACAO', ''),
(9, 'TERCEIRO ETIM DE ADMINISTRACAO', ''),
(10, 'PRIMEIRO ETIM DE MECANICA', ''),
(11, 'SEGUNDO ETIM DE MECANICA', ''),
(12, 'TERCEIRO ETIM DE MECANICA', ''),
(13, 'SEGUNDO ANO DO ENSINO MEDIO REGULAR', ''),
(14, 'TERCEIRO ANO DO ENSINO MEDIO REGULAR', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
