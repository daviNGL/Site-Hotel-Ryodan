-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 04-Nov-2018 às 16:37
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
-- Database: `hotel`
--
CREATE DATABASE IF NOT EXISTS `hotel` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `hotel`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `cpf` bigint(11) DEFAULT NULL,
  `rg` int(9) DEFAULT NULL,
  `datanasc` date NOT NULL,
  `nacionalidade` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ddd` tinyint(2) DEFAULT NULL,
  `tel` int(9) DEFAULT NULL,
  `cep` int(8) DEFAULT NULL,
  `endereco` varchar(40) DEFAULT NULL,
  `complemento` varchar(30) DEFAULT NULL,
  `uf` char(2) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idcliente`),
  UNIQUE KEY `rg` (`rg`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idcliente`, `nome`, `cpf`, `rg`, `datanasc`, `nacionalidade`, `email`, `ddd`, `tel`, `cep`, `endereco`, `complemento`, `uf`, `cidade`) VALUES
(1, 'Rosangela Oliveira', 35186454165, 265156156, '1973-11-02', 'Brasileira ', 'rosi@gmail.com.br', 11, 954552011, 65564578, 'Rua Azul, 123', 'Casa 2', 'SP', 'São Paulo'),
(2, 'Aurelinda Oliveira', 64564564687, 987974561, '1954-12-28', 'Brasileira ', 'igreja@gmail.com.br', 11, 998989885, 87998556, 'Rua Beje, 236', 'Apto 104', 'SP', 'São Paulo'),
(3, 'Jair Messias Bolsonaro', 15645664566, 666654645, '1964-02-02', 'Brasileiro', 'jair666@hell.com.br', 11, 97854569, 95564546, 'Rua Vermelha, 666', '', 'RJ', 'Rio de Janeiro'),
(4, 'Ciro Gomes', 64545464566, 263251687, '1966-07-31', 'Brasileiro', 'amor@puro.com.br', 85, 965564546, 89456123, 'Rua Azul, 2018', 'Apto 333, Bloco 05', 'CE', 'Fortaleza'),
(5, 'Robert Wilson', 89878456230, 255632659, '1956-09-06', 'Brasileiro', 'robert@gmail.com.br', 12, 985623659, 23658778, 'Rua Verde, 77', '', 'SP', 'Campinas'),
(6, 'Manuella Dvilla', 87451486645, 979594515, '1947-12-04', 'Brasileiro', 'felizdenovo@pt.com.br', 11, 985623659, 87987559, 'Rua Violeta, 79', '', 'SP', 'Campinas'),
(7, 'Bruna Santos', 98445415115, 95623695, '1999-04-05', 'Brasileiro', 'bruninha@sicredi.com.br', 54, 974895612, 98785541, 'Rua Marron, 87', 'Apto 55', 'RS', 'Jardim Lindóia'),
(8, 'Carlos Mariguella', 51651561589, 784562164, '1911-08-15', 'Brasileiro', 'revolucao@armada.com.br', 11, 968798456, 98745687, 'Rua Castelo Branco, 64', '', 'SP', 'São Paulo'),
(9, 'William Bonner ', 46548648561, 514815844, '1911-05-14', 'Brasileiro', 'fatima@euteamo.com.br', 11, 34516515, 12345678, 'Rua Projac 555', 'Casa 3', 'RJ', 'Rio de Janeiro'),
(10, 'Kalief Browder ', 54615489518, 218971658, '1991-05-02', 'Brasileiro', 'kalief@resilence.com.br', 51, 974652648, 48471568, 'Av da Força, 88', '', 'SP', 'Piracicaba ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estacionamento`
--

DROP TABLE IF EXISTS `estacionamento`;
CREATE TABLE IF NOT EXISTS `estacionamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `DataEntrada` date DEFAULT NULL,
  `DataSaida` date DEFAULT NULL,
  `Fabricante` varchar(50) DEFAULT NULL,
  `Modelo` varchar(50) DEFAULT NULL,
  `Placa` char(8) DEFAULT NULL,
  `UF` char(2) DEFAULT NULL,
  `HoraEntrada` varchar(5) DEFAULT NULL,
  `HoraSaida` varchar(5) DEFAULT NULL,
  `Valor` float(7,2) DEFAULT NULL,
  `NumeroVaga` char(3) DEFAULT NULL,
  `Obs` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estacionamento`
--

INSERT INTO `estacionamento` (`id`, `DataEntrada`, `DataSaida`, `Fabricante`, `Modelo`, `Placa`, `UF`, `HoraEntrada`, `HoraSaida`, `Valor`, `NumeroVaga`, `Obs`) VALUES
(1, '2018-10-11', '2018-10-11', 'Ford', 'Focus', 'ABD-5974', 'SP', '12:00', '13:00', 25.00, '125', ''),
(2, '2018-10-12', '2018-10-12', 'Chevrolet', 'Corsa', 'CRD-5324', 'RJ', '15:00', '18:00', 40.00, '278', ''),
(3, '2018-10-13', '2018-10-13', 'Fiat', 'Uno', 'TRE-6523', 'RS', '18:00', '22:00', 50.00, '355', ''),
(4, '2018-10-13', '2018-10-13', 'KIA', 'Cerato', 'EQN-8769', 'SP', '11:30', '12:00', 15.00, '585', ''),
(5, '2018-10-13', '2018-10-13', 'Volkswagem', 'Gol', 'LKJ-8204', 'ES', '18:00', '19:00', 25.00, '821', ''),
(8, '2018-05-07', '2018-10-31', 'Hyundai', '233', 'ABC-1200', 'sp', '12:30', '13:00', 30.00, '12', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `dNascimento` date DEFAULT NULL,
  `cpf` char(11) DEFAULT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `dAdmissao` date DEFAULT NULL,
  `sal` float(7,2) DEFAULT NULL,
  `folga` varchar(20) DEFAULT NULL,
  `hEntrada` time DEFAULT NULL,
  `hSaida` time DEFAULT NULL,
  `obs` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `dNascimento`, `cpf`, `cargo`, `dAdmissao`, `sal`, `folga`, `hEntrada`, `hSaida`, `obs`) VALUES
(1, 'Robson Santos', '1998-07-09', '24265887481', 'gerente', '2018-05-01', 6000.00, '', '10:00:00', '20:00:00', 'obs'),
(2, 'Sergio Rodrigues', '1998-07-09', '24265887591', 'almoxarifado', '2018-05-01', 3000.00, 'sexta feira', '10:00:00', '20:00:00', 'atraso'),
(3, 'Paulo Santos', '1986-07-09', '35265887591', 'gerente adminin', '2016-05-01', 9000.00, '', '09:00:00', '18:00:00', ''),
(4, 'Daniel Fragoso', '1970-07-09', '24255087591', 'analista fiscal', '2015-04-05', 5000.00, '', '09:00:00', '18:00:00', ''),
(5, 'Daniel Fragoso', '1970-07-09', '24255087591', 'analista fiscal', '2015-04-05', 5000.00, '', '09:00:00', '18:00:00', ''),
(6, 'Daniela Vieira', '1990-07-05', '47455087591', 'recepcionista', '2018-04-10', 4500.00, 'quarta feira', '16:00:00', '00:00:00', 'sempre pontual'),
(7, 'Rafaela Barros', '1995-07-09', '75555087650', 'camareira', '2015-04-05', 5000.00, '', '09:00:00', '18:00:00', ''),
(8, 'Mariana Cardoso', '1997-07-09', '25855087321', 'recepcionista', '2018-08-15', 2000.00, '', '09:00:00', '18:00:00', ''),
(9, 'Henrique Santos', '1998-05-10', '55555087255', 'zelador', '2014-04-05', 3000.00, '', '09:00:00', '18:00:00', ''),
(10, 'Victor Serrano', '1974-04-09', '85255087565', 'assistente adminin', '2018-05-05', 2500.00, '', '09:00:00', '17:00:00', 'atraso'),
(11, 'Johnnes', '2000-05-07', '48456746886', 'dono', '2003-01-01', 50000.00, 'all', '06:00:00', '07:00:00', 'Dono divo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quartos`
--

DROP TABLE IF EXISTS `quartos`;
CREATE TABLE IF NOT EXISTS `quartos` (
  `idquarto` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(3) NOT NULL,
  `andar` int(2) NOT NULL,
  `tipo` int(11) NOT NULL,
  `disponivel` tinyint(1) NOT NULL,
  `vista_mar` tinyint(1) NOT NULL,
  `hidromassagem` tinyint(1) NOT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `obs` text,
  PRIMARY KEY (`idquarto`),
  UNIQUE KEY `numero` (`numero`),
  KEY `tipo` (`tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `quartos`
--

INSERT INTO `quartos` (`idquarto`, `numero`, `andar`, `tipo`, `disponivel`, `vista_mar`, `hidromassagem`, `imagem`, `obs`) VALUES
(1, 1, 1, 1, 0, 0, 0, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(2, 2, 1, 1, 1, 0, 0, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(3, 3, 1, 1, 1, 0, 0, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(4, 4, 1, 1, 1, 0, 0, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(5, 5, 1, 2, 1, 0, 1, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(6, 6, 1, 3, 1, 0, 0, 'double-room', 'Capacidade: 2 pessoas.'),
(7, 7, 1, 3, 1, 0, 0, 'double-room', 'Capacidade: 2 pessoas.'),
(8, 8, 1, 3, 1, 0, 0, 'double-room', 'Capacidade: 2 pessoas.'),
(9, 9, 1, 3, 0, 0, 0, 'double-room', 'Capacidade: 2 pessoas.'),
(10, 10, 1, 4, 1, 0, 1, 'double-room', 'Capacidade: 2 pessoas.'),
(11, 11, 2, 1, 1, 0, 0, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(12, 12, 2, 1, 1, 0, 0, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(13, 13, 2, 1, 1, 0, 0, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(14, 14, 2, 2, 1, 0, 1, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(15, 15, 2, 2, 0, 0, 1, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(16, 16, 2, 3, 1, 0, 0, 'double-room', 'Capacidade: 2 pessoas.'),
(17, 17, 2, 3, 0, 0, 0, 'double-room', 'Capacidade: 2 pessoas.'),
(18, 18, 2, 3, 1, 0, 0, 'double-room', 'Capacidade: 2 pessoas.'),
(19, 19, 2, 4, 1, 0, 1, 'double-room', 'Capacidade: 2 pessoas.'),
(20, 20, 2, 1, 0, 0, 1, 'double-room', 'Capacidade: 1 pessoa.'),
(21, 21, 3, 2, 1, 1, 1, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(22, 22, 3, 2, 1, 1, 1, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(23, 23, 3, 2, 1, 0, 1, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(24, 24, 3, 1, 1, 1, 0, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(25, 25, 3, 1, 1, 0, 0, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(26, 26, 3, 4, 1, 1, 1, 'double-room', 'Capacidade: 2 pessoas.'),
(27, 27, 3, 4, 1, 1, 1, 'double-room', 'Capacidade: 2 pessoas.'),
(28, 28, 3, 4, 1, 0, 1, 'double-room', 'Capacidade: 2 pessoas.'),
(29, 29, 3, 3, 1, 1, 0, 'double-room', 'Capacidade: 2 pessoas.'),
(30, 30, 3, 3, 1, 0, 0, 'double-room', 'Capacidade: 2 pessoas.'),
(31, 31, 4, 1, 0, 1, 0, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(32, 32, 4, 1, 1, 1, 0, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(33, 33, 4, 1, 1, 0, 0, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(34, 34, 4, 1, 1, 0, 0, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(35, 35, 4, 1, 1, 0, 0, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(36, 36, 4, 2, 1, 1, 1, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(37, 37, 4, 2, 1, 1, 1, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(38, 38, 4, 2, 1, 0, 1, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(39, 39, 4, 2, 0, 1, 1, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(40, 40, 4, 2, 0, 0, 1, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(41, 41, 5, 3, 1, 1, 0, 'double-room', 'Capacidade: 2 pessoas.'),
(42, 42, 5, 3, 1, 1, 0, 'double-room', 'Capacidade: 2 pessoas.'),
(43, 43, 5, 3, 1, 0, 0, 'double-room', 'Capacidade: 2 pessoas.'),
(44, 44, 5, 3, 1, 0, 0, 'double-room', 'Capacidade: 2 pessoas.'),
(45, 45, 5, 3, 1, 0, 0, 'double-room', 'Capacidade: 2 pessoas.'),
(46, 46, 5, 4, 1, 1, 1, 'double-room', 'Capacidade: 2 pessoas.'),
(47, 47, 5, 4, 1, 1, 1, 'double-room', 'Capacidade: 2 pessoas.'),
(48, 48, 5, 4, 1, 0, 1, 'double-room', 'Capacidade: 2 pessoas.'),
(49, 49, 5, 1, 1, 0, 0, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(50, 50, 5, 1, 1, 0, 0, 'single-room.jpg', 'Capacidade: 1 pessoa.'),
(51, 51, 6, 5, 1, 1, 1, 'family-room.jpg', 'Capacidade: 6 pessoas.'),
(52, 52, 6, 5, 1, 1, 1, 'family-room.jpg', 'Capacidade: 6 pessoas.'),
(53, 53, 6, 5, 1, 1, 1, 'family-room.jpg', 'Capacidade: 6 pessoas.'),
(54, 54, 6, 5, 1, 1, 1, 'family-room.jpg', 'Capacidade: 6 pessoas.'),
(55, 55, 6, 5, 1, 1, 1, 'family-room.jpg', 'Capacidade: 6 pessoas.'),
(56, 56, 6, 5, 1, 0, 1, 'family-room.jpg', 'Capacidade: 6 pessoas.'),
(57, 57, 6, 5, 1, 0, 1, 'family-room.jpg', 'Capacidade: 6 pessoas.'),
(58, 58, 6, 5, 1, 0, 1, 'family-room.jpg', 'Capacidade: 6 pessoas.'),
(59, 59, 6, 5, 1, 0, 1, 'family-room.jpg', 'Capacidade: 6 pessoas.'),
(60, 60, 6, 5, 1, 0, 1, 'family-room.jpg', 'Capacidade: 6 pessoas.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

DROP TABLE IF EXISTS `reservas`;
CREATE TABLE IF NOT EXISTS `reservas` (
  `idreserva` int(11) NOT NULL AUTO_INCREMENT,
  `idquarto` int(11) DEFAULT NULL,
  `idcliente` int(11) DEFAULT NULL,
  `check_in` date NOT NULL,
  `check_out` date DEFAULT NULL,
  `obs` text,
  PRIMARY KEY (`idreserva`),
  KEY `idquarto` (`idquarto`),
  KEY `idcliente` (`idcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`idreserva`, `idquarto`, `idcliente`, `check_in`, `check_out`, `obs`) VALUES
(1, 15, 1, '2018-10-02', NULL, NULL),
(2, 40, 2, '2018-10-10', NULL, NULL),
(3, 17, 3, '2018-10-11', NULL, NULL),
(4, 23, 4, '2018-10-17', '2018-10-12', NULL),
(5, 39, 5, '2018-10-08', NULL, NULL),
(6, 1, 6, '2018-10-03', NULL, NULL),
(7, 9, 7, '2018-10-02', NULL, NULL),
(8, 31, 8, '2018-10-04', NULL, NULL),
(9, 24, 9, '2018-10-09', '2018-10-12', NULL),
(10, 20, 10, '2018-10-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcartao`
--

DROP TABLE IF EXISTS `tbcartao`;
CREATE TABLE IF NOT EXISTS `tbcartao` (
  `codCartao` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `numCartao` varchar(30) NOT NULL,
  `numSeguranca` int(11) NOT NULL,
  `dataVencimento` date NOT NULL,
  PRIMARY KEY (`codCartao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpagamento`
--

DROP TABLE IF EXISTS `tbpagamento`;
CREATE TABLE IF NOT EXISTS `tbpagamento` (
  `codPagamento` int(11) NOT NULL AUTO_INCREMENT,
  `codCliente` int(11) DEFAULT NULL,
  `codCartao` int(11) DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  `parcelas` int(11) DEFAULT NULL,
  PRIMARY KEY (`codPagamento`),
  KEY `codCliente` (`codCliente`),
  KEY `codCartao` (`codCartao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbquarto_servico`
--

DROP TABLE IF EXISTS `tbquarto_servico`;
CREATE TABLE IF NOT EXISTS `tbquarto_servico` (
  `codClienteServico` int(11) NOT NULL AUTO_INCREMENT,
  `codQuarto` int(11) DEFAULT NULL,
  `codServico` int(11) DEFAULT NULL,
  PRIMARY KEY (`codClienteServico`),
  KEY `codQuarto` (`codQuarto`),
  KEY `codServico` (`codServico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbservico`
--

DROP TABLE IF EXISTS `tbservico`;
CREATE TABLE IF NOT EXISTS `tbservico` (
  `codServico` int(11) NOT NULL AUTO_INCREMENT,
  `descServico` varchar(30) DEFAULT NULL,
  `valorServico` double DEFAULT NULL,
  PRIMARY KEY (`codServico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiposquartos`
--

DROP TABLE IF EXISTS `tiposquartos`;
CREATE TABLE IF NOT EXISTS `tiposquartos` (
  `idtipo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `diaria` float(6,2) DEFAULT NULL,
  PRIMARY KEY (`idtipo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tiposquartos`
--

INSERT INTO `tiposquartos` (`idtipo`, `nome`, `diaria`) VALUES
(1, 'Solteiro', 150.00),
(2, 'Solteiro+hidro', 180.00),
(3, 'Casal', 200.00),
(4, 'Casal+hidro', 230.00),
(5, 'Familia', 250.00),
(6, 'Suite', 300.00),
(7, 'Cobertura', 400.00);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`, `email`) VALUES
(1, 'Davi Alencar', 'davi.ngl', 'delta123', 'davi.ngl.1000@gmail.com'),
(2, 'Daniel Dolazza', 'danielzinho', '123', 'email@hotmail.com'),
(3, 'Gabriel Barros', 'gaybriel', '123', 'email@hotmail.com'),
(4, 'Victor Oliveira', 'sexcall', '123', 'email@hotmail.com'),
(5, 'Luan Ribeiro', 'luan', '123', 'email@hotmail.com'),
(6, 'Yasmin Zorzan', 'zorzane', '123', 'email@hotmail.com'),
(7, 'Felipe Macedo', 'Padeiro', '123', 'email@hotmail.com'),
(8, 'administrador', 'adm', '123', 'adm@adm.com');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `quartos`
--
ALTER TABLE `quartos`
  ADD CONSTRAINT `quartos_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tiposquartos` (`idtipo`);

--
-- Limitadores para a tabela `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`idquarto`) REFERENCES `quartos` (`idquarto`),
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`idcliente`);

--
-- Limitadores para a tabela `tbpagamento`
--
ALTER TABLE `tbpagamento`
  ADD CONSTRAINT `tbpagamento_ibfk_1` FOREIGN KEY (`codCliente`) REFERENCES `clientes` (`idcliente`),
  ADD CONSTRAINT `tbpagamento_ibfk_2` FOREIGN KEY (`codCartao`) REFERENCES `tbcartao` (`codCartao`);

--
-- Limitadores para a tabela `tbquarto_servico`
--
ALTER TABLE `tbquarto_servico`
  ADD CONSTRAINT `tbquarto_servico_ibfk_1` FOREIGN KEY (`codQuarto`) REFERENCES `quartos` (`idquarto`),
  ADD CONSTRAINT `tbquarto_servico_ibfk_2` FOREIGN KEY (`codServico`) REFERENCES `tbservico` (`codServico`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
