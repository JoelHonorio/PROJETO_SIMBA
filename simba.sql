-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Fev-2021 às 00:14
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.1

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
-- Estrutura da tabela `histdetalhada`
--

CREATE TABLE `histdetalhada` (
  `id` int(2) NOT NULL,
  `poisquero` text NOT NULL,
  `detalhamento` text NOT NULL,
  `responsavel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `histdetalhada`
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
(1, 'Joel', 'Honório', 'joel@gmail.com', '123456', '123456'),
(2, 'Gabriel', 'Souza', 'gabriel@gmail.com', '123456', '123456'),
(3, 'Administrador', 'Administrador', 'admin@gmail.com', '123456', '123456'),
(4, 'Rebeka', 'Leticia', 'rebeka@gmail.com', '123456', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `histdetalhada`
--
ALTER TABLE `histdetalhada`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de tabela `histdetalhada`
--
ALTER TABLE `histdetalhada`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `historias`
--
ALTER TABLE `historias`
  MODIFY `story` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
