-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 20-Ago-2018 às 12:41
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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`id`, `nome_proj`, `integrantes`, `curso`, `professor_resp`, `escala`, `descricao_proj`, `materiais`, `observações`) VALUES
(2, 'TESTE', 'AAA<br>\nBBB<br>\nXXXX<br>\nAAA<br>\n--<br>\n--<br>\n--', 'PRIMEIRO ETIM DE INFORMATICA', 'RRRRR', '<b>1Â° dia de manhÃ£:</b> RR<br>\n<b>1Â° dia de tarde:</b> RR<br>\n<b>1Â° dia de noite:</b> RR<br>\n<b>2Â° dia de manha:</b> RRR<br>\n<b>2Â° dia de tarde:</b> RRRRRR<br>\n<b>2Â° dia de noite:</b> RRRR', 'VVVVVVV', 'YYYYY', 'UUUUU'),
(5, 'aaa', 'aaa<br>\naa<br>\naaaa<br>\n--<br>\n--<br>\n--<br>\n--', 'PRIMEIRO ETIM DE INFORMATICA', 'aaaa', '<b>1Â° dia de manhÃ£:</b> aaaa<br>\n<b>1Â° dia de tarde:</b> aaa<br>\n<b>1Â° dia de noite:</b> aaaa<br>\n<b>2Â° dia de manha:</b> aaa<br>\n<b>2Â° dia de tarde:</b> aaaaaaa<br>\n<b>2Â° dia de noite:</b> zzzzzzzz', 'ate', 'eta', 'uta'),
(7, 'PROJETO TESTE', 'OSVALDO<br>\nLUCAS<br>\nANDERSON<br>\n--<br>\n--<br>\n--<br>\n--', 'SEGUNDO MODULO DE ADMINISTRACAO ', 'Edimur', '<b>1Â° dia de manhÃ£:</b> <br>\n<b>1Â° dia de tarde:</b> <br>\n<b>1Â° dia de noite:</b> LUCAS <br>\n<b>2Â° dia de manha:</b> <br>\n<b>2Â° dia de tarde:</b> <br>\n<b>2Â° dia de noite:</b> OSVALDO', 'RERERERERER', 'RERERERERE', 'RERERERERERRE'),
(8, 'PROJETO TESTE 2', 'LUCAS<br>\nOSVALDO PRESTES<br>\nGABRIEL SILVA<br>\n--<br>\n--<br>\n--<br>\n--', 'SEGUNDO MODULO DE ADMINISTRACAO ', 'Gabriela', '<b>1Â° dia de manhÃ£:</b> <br>\n<b>1Â° dia de tarde:</b> <br>\n<b>1Â° dia de noite:</b> OSVALD<br>\n<b>2Â° dia de manha:</b> <br>\n<b>2Â° dia de tarde:</b> <br>\n<b>2Â° dia de noite:</b> GABRIEL', 'WEWEWEWEW', 'EWEWEEWWEW', 'EWEWEWEWE'),
(9, 'arnaldo', 'lucas<br>\ngabriel<br>\ngustav<br>\n--<br>\n--<br>\n--<br>\n--', 'SEGUNDO MODULO DE ADMINISTRACAO ', 'Gabriela', '<b>1Â° dia de manhÃ£:</b> --<br>\n<b>1Â° dia de tarde:</b> --<br>\n<b>1Â° dia de noite:</b> renan<br>\n<b>2Â° dia de manha:</b> --<br>\n<b>2Â° dia de tarde:</b> --<br>\n<b>2Â° dia de noite:</b> diogo', 'dasdasd', 'asdasd', 'asdasd'),
(10, 'TESDTE', 'AAAA<br>\nAAAAAAAAAAAAA<br>\nAAAAAAAAAAA<br>\n--<br>\n--<br>\n--<br>\n--', 'PRIMEIRO ETIM DE INFORMATICA', 'Gabriela', '<b>1Â° dia de manhÃ£:</b> AA<br>\n<b>1Â° dia de tarde:</b> AA<br>\n<b>1Â° dia de noite:</b> <br>\n<b>2Â° dia de manha:</b> AA<br>\n<b>2Â° dia de tarde:</b> AA<br>\n<b>2Â° dia de noite:</b> ', 'AAAAAAAAAA', 'AAAAAAAAAA', 'AAAAAAAAAA'),
(11, 'sZ', 'AAszQ<br>\nDSDD<br>\nDDDDD<br>\n--<br>\n--<br>\n--<br>\n--', 'TERCEIRO MODULO DE INFORMATICA', 'Edimur', '<b>1Â° dia de manhÃ£:</b> <br>\n<b>1Â° dia de tarde:</b> <br>\n<b>1Â° dia de noite:</b> SSSS<br>\n<b>2Â° dia de manha:</b> <br>\n<b>2Â° dia de tarde:</b> <br>\n<b>2Â° dia de noite:</b> SSS', 'SSS', 'SSSSS', 'AADWQAFEWSGWVERDBV');

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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`, `nivel_acesso`) VALUES
(6, 'PRIMEIRO ETIM DE INFORMATICA', '1etim_info', '14b6c0d7ac862d258e6fcee033bd3b9ebb393acb', 1),
(7, 'SEGUNDO ETIM DE INFORMATICA', '2etim_info', '061053f85c4c0b7c9911ba9e4a6298c522533800', 1),
(8, 'TERCEIRO ETIM DE INFORMATICA', '3etim_info', '5d50351752ceb3ea7c8be1ba751d5eaa8933722b', 1),
(9, 'PRIMEIRO ETIM DE QUIMICA', '1etim_quimica', '59ca586696842387a38c6d053718d94c96ca9976', 1),
(14, 'SEGUNDO ETIM DE QUIMICA', '2etim_quimica', '7adb5a2268eef1af46e5df9fbb804f6b5cc44ce0', 1),
(15, 'TERCEIRO ETIM DE QUIMICA', '3etim_quimica', '6d1131a9a93086fcbddccdf4e9d252bff6b6790e', 1),
(16, 'PRIMEIRO ETIM DE ADMINISTRACAO', '1etim_adm', '8d23df7cfd6137f0b351852cd07c9b2d9a2e0652', 1),
(17, 'SEGUNDO ETIM DE ADMINISTRACAO', '2etim_adm', '5c2049c2b687c0955561fd4982777e5e6859b425', 1),
(18, 'TERCEIRO ETIM DE ADMINISTRACAO', '3etim_adm', 'fd3d0e5ae952d744cef58392329ad00990366c12', 1),
(19, 'PRIMEIRO ETIM DE MECANICA', '1etim_mec', '36bd6347ac13c7cb924866c7d410b839f3376489', 1),
(20, 'SEGUNDO ANO DO ENSINO MEDIO REGULAR', '2medio_reg', '247512b2aed32e3a3b3303b62c7ff25ac1826790', 1),
(21, 'TERCEIRO ANO DO ENSINO MEDIO REGULAR', '3medio_reg', 'dea2c90b34276b7fe2937d7e8907ed46f1dc9092', 1),
(22, 'QUARTO MODULO DE QUIMICA ', '4mod_quimica', '9e06b2a853a8d2afa640a11b6df021f00f41f608', 1),
(23, 'SEGUNDO MODULO DE QUIMICA', '2mod_quimica', 'eaee37b0b540d7152069603145be32f39852d5d2', 1),
(24, 'TERCEIRO MODULO DE FARMACIA ', '3mod_farmacia', '0765a055ffb8b4fe327a8dea74e968058b76de77', 1),
(25, 'TERCEIRO MODULO DE INFORMATICA ', '3mod_info', '7480dc9d61142b3cf1df4647cdcc32ad4c7a211e', 1),
(26, 'SEGUNDO MODULO DE MEIO AMBIENTE', '2mod_meioA', 'e9b67b65f85fbd018dcc13ac9da2519f94777cdc', 1),
(27, 'Gabriel Prestes', 'biel', 'a2185857c5ab52de3cf842ff0e63508f01ddb39e', 2),
(28, 'SEGUNDO MODULO DE NUTRICAO E DIETETICA ', '2mod_nut', 'd1aa66cb50111db68058c5a5d3f168001db3604f', 1),
(29, 'SEGUNDO MODULO DE ADMINISTRACAO ', '2mod_adm', '1ee82084dce14a2c26b6677381b19d9eecad0920', 1),
(30, 'SEGUNDO MODULO DE INFORMATICA PARA INTERNET ', '2mod_infweb', '7ff645f46e0b10af9d93e977f37a7837528bc93a', 1),
(31, 'QUARTO MODULO DE ELETROTECNICA ', '4mod_elet', '029db2a755944e694b89147b7cf381ba681ac92c', 1),
(32, 'QUARTO MODULO DE MECANICA ', '4mod_mec', 'dc47fe2673bd03d0ed5d1ccced09f7aa91599b92', 1),
(33, 'SEGUNDO MODULO DE MECANICA', '2mod_mec', '6fa8814332427a05f9b85f4a54d1053ac0ddfa1d', 1),
(34, 'TERCEIRO MODULO DE MANUTENCAO ', '3mod_man', '60805aca7611a4c25fe6bef7170c293adafb2a10', 1),
(35, 'TERCEIRO MODULO DE MECATRONICA ', '3mod_mecat', 'dcf55ec6cbf115a383e958e90e6d2d0989b2b51b', 1),
(36, 'PRIMEIRO MODULO DE SEGURANCA DO TRABALHO ', '1mod_seg', 'defccf09a7e869e4f4a4c721c0317d23d845ae78', 1),
(37, 'SEGUNDO MODULO DE EDIFICACOES ', '2mod_edif', '0e1ba72644195535b3a12acf80274fe787d0a3b2', 1),
(38, 'PRIMEIRO MODULO DE ELETROTECNICA ', '1mod_elet', '553bcc578def8b91d69cb01fd186a2d56680956c', 1),
(39, 'PRIMEIRO MODULO DE MECATRONICA ', '1mod_mecat', 'de56d74894dbf56318c2b08141a708b84fbe4879', 1),
(40, 'SEGUNDO MODULO DE FARMACIA ', '2mod_farm', '503cd86531213de5f947dbefc6bc8e2d701d97a3', 1),
(41, 'SEGUNDO MODULO DE MANUTENCAO ', '2mod_man', '274d30f497fed3323817148474feb09fff5ac079', 1),
(42, 'PRIMEIRO MODULO DE MEIO AMBIENTE ', '1mod_meioa', '49e07765a62a2b14c42568ab64f0dc31024e14b5', 1),
(43, 'PRIMEIRO MODULO DE NUTRICAO E DIETETICA ', '1mod_nut', 'bd47dab7eebe1bdfa896c5bae4696e23b63b9424', 1),
(44, 'QUARTO MODULO DE MECATRONICA ', '4mod_mecat', '4dd65cd6bda3d3f28c3a76698acc718a7d681cd6', 1),
(45, 'SEGUNDO MODULO DE MECATRONICA ', '2mod_mecat', 'e590129a911995cb991d96926114a9e7fc0f039d', 1),
(46, 'TERCEIRO MODULO DE NUTRICAO E DIETETICA ', '3mod_nut', '0850281829d8cec13d031fe2550fbaf89d3653fe', 1),
(47, 'Gabriel Prestes', 'biel', 'a2185857c5ab52de3cf842ff0e63508f01ddb39e', 2);

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
