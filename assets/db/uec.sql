-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Out-2022 às 02:05
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `uec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  `data_upload` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `nome`, `path`, `data_upload`) VALUES
(39, 'ete.jpg', 'assets/arquivos/63449fd33b89c.jpg', '2022-10-10 19:42:27'),
(40, 'icon.png', 'assets/arquivos/', '2022-10-10 20:45:44'),
(41, 'icon.png', 'assets/arquivos/6344aecf3d728.png', '2022-10-10 20:46:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lutador`
--

CREATE TABLE `lutador` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `nacionalidade` varchar(255) NOT NULL,
  `idade` int(11) NOT NULL,
  `altura` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `vitorias` int(11) NOT NULL,
  `derrotas` int(11) NOT NULL,
  `empates` int(11) NOT NULL,
  `dataRegistro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `lutador`
--

INSERT INTO `lutador` (`id`, `nome`, `nacionalidade`, `idade`, `altura`, `peso`, `categoria`, `vitorias`, `derrotas`, `empates`, `dataRegistro`) VALUES
(1, 'Diogo ', 'Brasileiro', 37, 170, 100, 'Pesado', 10, 5, 3, '2022-04-23 01:52:09'),
(2, 'João', 'EUA', 29, 190, 100, 'Pesado', 10, 3, 5, '2022-04-26 20:26:25'),
(3, 'Diogo Teste', 'brasileiro', 37, 180, 130, 'pesado', 2, 1, 0, '2022-04-26 21:18:40'),
(4, 'Jose', 'br', 37, 180, 130, 'pesado', 2, 1, 0, '0000-00-00 00:00:00'),
(6, 'Diogo Teste', 'brasileiro', 37, 180, 130, 'pesado', 2, 1, 0, '0000-00-00 00:00:00'),
(7, 'Jose', 'brasileiro', 37, 180, 130, 'pesado', 2, 1, 0, '0000-00-00 00:00:00'),
(8, 'Taci', 'brasileiro', 37, 180, 130, 'pesado', 2, 1, 0, '0000-00-00 00:00:00'),
(9, 'MARCOS', 'brasileiro', 37, 180, 130, 'pesado', 2, 1, 0, '0000-00-00 00:00:00'),
(10, 'Anderson', 'EUA', 20, 180, 85, 'Pesado', 0, 15, 5, '0000-00-00 00:00:00'),
(11, 'Anderson', 'EUA', 20, 180, 50, 'Inválido', 0, 15, 5, '0000-00-00 00:00:00'),
(12, 'Pedro', 'CHI', 29, 175, 90, 'Pesado', 19, 6, 3, '0000-00-00 00:00:00'),
(13, 'MARCOS', 'CHI', 31, 180, 95, 'Pesado', 13, 8, 6, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prestador`
--

CREATE TABLE `prestador` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `idade` int(11) NOT NULL,
  `cor` varchar(100) NOT NULL,
  `placa` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `chassi` varchar(100) NOT NULL,
  `id_imagem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `prestador`
--

INSERT INTO `prestador` (`id`, `email`, `senha`, `nome`, `idade`, `cor`, `placa`, `modelo`, `chassi`, `id_imagem`) VALUES
(1, 'jhonatha@gmail', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'jhonatha', 20, 'preto', 0, 'XJ6', '23334GDGFEFEF', 39),
(2, 'adm@teste.com.br', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Jhou', 20, 'preto', 0, 'XJ6', 'SHDJHHJ3434', 41);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `senha`) VALUES
(1, 'micael2@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(2, 'lucas.rqoliveira25@gmail.com', 'db00e4fdc8a6d8fc749a23649c9ec9343051ec47'),
(3, 'millenamarques113@gmail.com', '51eac6b471a284d3341d8c0c63d0f1a286262a18'),
(4, 'Jesielluiz15@gmailcom', 'fc1200c7a7aa52109d762a9f005b149abef01479'),
(5, 'ayslaneclarise@gmail.com', '8abcda2dba9a5c5c674e659333828582122c5f56'),
(6, 'email5@email.com', '343ae8e26ca054cfcc1f6cbfe5781dddc9059adc'),
(7, 'exemplo@gmail.com', 'c4b5c86bd577da3d93fea7c89cba61c78b48e589'),
(8, 'jhonatha@gmail', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `lutador`
--
ALTER TABLE `lutador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `prestador`
--
ALTER TABLE `prestador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ID_IMAGEM` (`id_imagem`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `lutador`
--
ALTER TABLE `lutador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `prestador`
--
ALTER TABLE `prestador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `prestador`
--
ALTER TABLE `prestador`
  ADD CONSTRAINT `FK_ID_IMAGEM` FOREIGN KEY (`id_imagem`) REFERENCES `arquivos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;