-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Out-2024 às 11:19
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `stand`
--
CREATE DATABASE IF NOT EXISTS `stand` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `stand`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbutilizadores`
--

CREATE TABLE `tbutilizadores` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbutilizadores`
--

INSERT INTO `tbutilizadores` (`id`, `email`, `password`, `nome`, `tipo`) VALUES
(1, 'admin@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'João Ratão', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbviaturas`
--

CREATE TABLE `tbviaturas` (
  `id` int(11) NOT NULL,
  `ano` int(4) NOT NULL,
  `marca` int(2) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `preco` decimal(7,2) NOT NULL,
  `descricao` text NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbviaturas`
--

INSERT INTO `tbviaturas` (`id`, `ano`, `marca`, `modelo`, `preco`, `descricao`, `foto`) VALUES
(1, 2000, 1, 'm4', 20000.00, 'carrfsghsfgh', '672358405098afundo.jpeg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbutilizadores`
--
ALTER TABLE `tbutilizadores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbviaturas`
--
ALTER TABLE `tbviaturas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbutilizadores`
--
ALTER TABLE `tbutilizadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbviaturas`
--
ALTER TABLE `tbviaturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
