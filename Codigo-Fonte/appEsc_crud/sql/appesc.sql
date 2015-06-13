-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jun-2015 às 09:39
-- Versão do servidor: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `appesc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aprovados`
--

CREATE TABLE IF NOT EXISTS `aprovados` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `urlimg` varchar(255) NOT NULL,
  `conteudo` varchar(255) NOT NULL,
  `urllink` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aprovados`
--

INSERT INTO `aprovados` (`id`, `titulo`, `data`, `urlimg`, `conteudo`, `urllink`, `categoria`) VALUES
(1, 'qweqw', 'qweqw', 'eventoooo', 'eventoooo', 'ewqe', 'eventoooo'),
(4, 'qweqw', 'eqwe', 'asda', 'qweqw', 'qweqweq', 'Concurso');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `urlimg` varchar(255) NOT NULL,
  `conteudo` varchar(255) NOT NULL,
  `urllink` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `titulo`, `data`, `urlimg`, `conteudo`, `urllink`, `categoria`) VALUES
(19, '010101', '010101', '010101', '01010', '10101', '010'),
(20, '01010', '101010', '10101', '010101', '010101', '01011'),
(21, 'q1q1', 'q1', 'qq11qweqw', '1q1qweqw', '1q1qweqw', 'q1q1'),
(24, 'qwe', 'qe', 'aaaaa', 'qwe', 'qweqweq', 'qwe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `editais`
--

CREATE TABLE IF NOT EXISTS `editais` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `urlimg` varchar(255) NOT NULL,
  `conteudo` varchar(255) NOT NULL,
  `urllink` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `editais`
--

INSERT INTO `editais` (`id`, `titulo`, `data`, `urlimg`, `conteudo`, `urllink`, `categoria`) VALUES
(1, 'nvo', 'vno', 'vo', 'nv', 'ovn', 'ovn'),
(3, 'eqwe', 'qqqs', 's', 's', 's', 's'),
(4, 'sww', 'sww', 'sww', 'sww', 'sww', 'sww'),
(5, 'qweqwe', 'weqeq', 'ewqeq', 'qweqw', 'eqwe', 'eqwe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `urlimg` varchar(255) NOT NULL,
  `conteudo` varchar(255) NOT NULL,
  `urllink` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `data`, `urlimg`, `conteudo`, `urllink`, `categoria`) VALUES
(1, 'dasdas', 'dasdas', 'dasdasd', 'asdas', 'dasd', 'dasdasda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios`
--

CREATE TABLE IF NOT EXISTS `horarios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `urlimg` varchar(255) NOT NULL,
  `conteudo` varchar(255) NOT NULL,
  `urllink` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `horarios`
--

INSERT INTO `horarios` (`id`, `titulo`, `data`, `urlimg`, `conteudo`, `urllink`, `categoria`) VALUES
(1, 'hohohoho', 'odkfsdofksdofk', 'odkfsdofksdo', 'oasdfkosd', 'oskfsod', 'sodkfs'),
(2, 'ho', 'ho', 'o', 'ho', 'hoeeeeeeee', 'ho');

-- --------------------------------------------------------

--
-- Estrutura da tabela `novidades`
--

CREATE TABLE IF NOT EXISTS `novidades` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `urlimg` varchar(255) NOT NULL,
  `conteudo` varchar(255) NOT NULL,
  `urllink` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `novidades`
--

INSERT INTO `novidades` (`id`, `titulo`, `data`, `urlimg`, `conteudo`, `urllink`, `categoria`) VALUES
(1, 'novidades poha', 'novidades poha', 'novidades poha', 'novidades poha', 'novidades poha', 'novidades poha'),
(2, 'asdasd', 'asdasd', 'asdasd', 'ddasda', 'asdas', 'asdasd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE IF NOT EXISTS `turmas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `urlimg` varchar(255) NOT NULL,
  `conteudo` varchar(255) NOT NULL,
  `urllink` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `titulo`, `data`, `urlimg`, `conteudo`, `urllink`, `categoria`) VALUES
(2, 'Concurso BB', '22/12/2011', 'asda', 'Edital', 'asdas', 'Vestibular'),
(4, 'l', 'pl', 'p', 'lpddddddddddddd', 'l', 'pl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aprovados`
--
ALTER TABLE `aprovados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editais`
--
ALTER TABLE `editais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `novidades`
--
ALTER TABLE `novidades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aprovados`
--
ALTER TABLE `aprovados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `editais`
--
ALTER TABLE `editais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `novidades`
--
ALTER TABLE `novidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
