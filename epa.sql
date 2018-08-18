-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 18-Ago-2018 às 21:20
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epa`
--
CREATE DATABASE IF NOT EXISTS `epa` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `epa`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `login` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `senha` varchar(200) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`login`, `senha`) VALUES
('gabprestes', '195a2628dde5db614bdc27a3de7907383aeaec08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_curso` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `periodo` varchar(30) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nome_curso` (`nome_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome_curso`, `periodo`) VALUES
(1, 'PRIMEIRO ETIM DE INFORMATICA', 'integral'),
(2, 'SEGUNDO ETIM DE INFORMATICA', 'integral'),
(3, 'TERCEIRO ETIM DE INFORMATICA', 'integral'),
(4, 'PRIMEIRO ETIM DE QUIMICA', 'integral'),
(5, 'SEGUNDO ETIM DE QUIMICA', 'integral'),
(6, 'TERCEIRO ETIM DE QUIMICA', 'integral'),
(7, 'PRIMEIRO ETIM DE ADMINISTRACAO', 'integral'),
(8, 'SEGUNDO ETIM DE ADMINISTRACAO', 'integral'),
(9, 'TERCEIRO ETIM DE ADMINISTRACAO', 'integral'),
(10, 'PRIMEIRO ETIM DE MECANICA', 'integral'),
(11, 'SEGUNDO ETIM DE MECANICA', 'integral'),
(12, 'TERCEIRO ETIM DE MECANICA', 'integral'),
(13, 'SEGUNDO ANO DO ENSINO MEDIO REGULAR', 'manha'),
(14, 'TERCEIRO ANO DO ENSINO MEDIO REGULAR', 'manha'),
(15, 'QUARTO MODULO DE QUIMICA ', 'noite'),
(17, 'SEGUNDO MODULO DE QUIMICA ', 'noite'),
(19, 'TERCEIRO MODULO DE FARMACIA ', 'noite'),
(20, 'TERCEIRO MODULO DE INFORMATICA ', 'noite'),
(21, 'SEGUNDO MODULO DE MEIO AMBIENTE', 'noite'),
(22, 'SEGUNDO MODULO DE NUTRICAO E DIETETICA ', 'noite'),
(23, 'SEGUNDO MODULO DE ADMINISTRACAO ', 'noite'),
(24, 'SEGUNDO MODULO DE INFORMATICA PARA INTERNET ', 'noite'),
(25, 'QUARTO MODULO DE ELETROTECNICA ', 'noite'),
(26, 'QUARTO MODULO DE MECANICA ', 'noite'),
(27, 'SEGUNDO MODULO DE MECANICA', 'noite'),
(28, 'TERCEIRO MODULO DE MANUTENCAO ', 'noite'),
(29, 'TERCEIRO MODULO DE MECATRONICA ', 'noite'),
(30, 'PRIMEIRO MODULO DE SEGURANCA DO TRABALHO ', 'noite'),
(31, 'SEGUNDO MODULO DE EDIFICACOES ', 'noite'),
(32, 'PRIMEIRO MODULO DE ELETROTECNICA ', 'noite'),
(33, 'PRIMEIRO MODULO DE MECATRONICA ', 'noite'),
(34, 'SEGUNDO MODULO DE FARMACIA ', 'tarde'),
(35, 'SEGUNDO MODULO DE MANUTENCAO ', 'tarde'),
(36, 'PRIMEIRO MODULO DE MEIO AMBIENTE ', 'tarde'),
(37, 'PRIMEIRO MODULO DE NUTRICAO E DIETETICA ', 'tarde'),
(38, 'QUARTO MODULO DE MECATRONICA', 'tarde'),
(39, 'SEGUNDO MODULO DE MECATRONICA', 'tarde'),
(40, 'TERCEIRO MODULO DE NUTRICAO E DIETETICA', 'tarde');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

DROP TABLE IF EXISTS `projeto`;
CREATE TABLE IF NOT EXISTS `projeto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_proj` varchar(70) COLLATE utf8_swedish_ci NOT NULL,
  `integrantes` varchar(500) COLLATE utf8_swedish_ci NOT NULL,
  `curso` varchar(40) COLLATE utf8_swedish_ci NOT NULL,
  `professor_resp` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `escala` varchar(855) COLLATE utf8_swedish_ci NOT NULL,
  `descricao_proj` varchar(755) COLLATE utf8_swedish_ci NOT NULL,
  `materiais` varchar(755) COLLATE utf8_swedish_ci NOT NULL,
  `observações` varchar(755) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `curso` (`curso`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`id`, `nome_proj`, `integrantes`, `curso`, `professor_resp`, `escala`, `descricao_proj`, `materiais`, `observações`) VALUES
(2, 'TESTE', 'AAA<br>\nBBB<br>\nXXXX<br>\nAAA<br>\n--<br>\n--<br>\n--', 'PRIMEIRO ETIM DE INFORMATICA', 'RRRRR', '<b>1Â° dia de manhÃ£:</b> RR<br>\n<b>1Â° dia de tarde:</b> RR<br>\n<b>1Â° dia de noite:</b> RR<br>\n<b>2Â° dia de manha:</b> RRR<br>\n<b>2Â° dia de tarde:</b> RRRRRR<br>\n<b>2Â° dia de noite:</b> RRRR', 'VVVVVVV', 'YYYYY', 'UUUUU'),
(5, 'aaa', 'aaa<br>\naa<br>\naaaa<br>\n--<br>\n--<br>\n--<br>\n--', 'PRIMEIRO ETIM DE INFORMATICA', 'aaaa', '<b>1Â° dia de manhÃ£:</b> aaaa<br>\n<b>1Â° dia de tarde:</b> aaa<br>\n<b>1Â° dia de noite:</b> aaaa<br>\n<b>2Â° dia de manha:</b> aaa<br>\n<b>2Â° dia de tarde:</b> aaaaaaa<br>\n<b>2Â° dia de noite:</b> zzzzzzzz', 'ate', 'eta', 'uta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `login` varchar(155) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `nivel_acesso` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `projeto`
--
ALTER TABLE `projeto`
  ADD CONSTRAINT `projeto_ibfk_1` FOREIGN KEY (`curso`) REFERENCES `curso` (`nome_curso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
