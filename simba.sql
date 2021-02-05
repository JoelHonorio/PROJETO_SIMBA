-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Fev-2021 às 01:07
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `simba`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `historias`
--

CREATE TABLE `historias` (
  `story` int(2) NOT NULL,
  `quem` text NOT NULL,
  `gostaria` text NOT NULL,
  `poisquero` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `historias`
--

INSERT INTO `historias` (`story`, `quem`, `gostaria`, `poisquero`) VALUES
(5, 'Joãozinho', 'Uma página integrada de sessão', 'Finalizar o projeto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(100) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `sobrenome` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `senha_c` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `sobrenome`, `email`, `senha`, `senha_c`) VALUES
(1, 'Joel', 'Honório', 'joel.salvador.dali@gmail.com', '123456789', '123456789'),
(4, 'Gabriel', 'Souza', 'gabriel.salva.nois.ai@outlook.com', '123456789', '123456789');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `historias`
--
ALTER TABLE `historias`
  ADD PRIMARY KEY (`story`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `historias`
--
ALTER TABLE `historias`
  MODIFY `story` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
