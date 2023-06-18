-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Tempo de geração: 18/06/2023 às 17:52
=======
-- Tempo de geração: 15/06/2023 às 02:40
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--
CREATE DATABASE IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `biblioteca`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `autores`
--

CREATE TABLE `autores` (
  `cod` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Despejando dados para a tabela `autores`
--

INSERT INTO `autores` (`cod`, `nome`) VALUES
(1, 'Paulo Rezzutti'),
(2, 'Darcy Ribeiro'),
(3, 'Ursula K. Le Guin'),
(4, 'Sarah Faith Gottesdiener');

-- --------------------------------------------------------

--
-- Estrutura para tabela `editoras`
--

CREATE TABLE `editoras` (
  `cod` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `email` varchar(60) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Despejando dados para a tabela `editoras`
--

INSERT INTO `editoras` (`cod`, `nome`, `rua`, `bairro`, `cnpj`, `telefone`, `email`, `cidade`, `estado`) VALUES
(1, 'Saraiva', 'Praça Dr. João Mendes', 'Praça da Sé', '60.500.139/0001-26', '(11) 5200-0650', 'Saraiva@gmail.com', 'São Paulo', 'SP'),
(2, 'Aleph', 'R. Tabapuã', 'Itaim Bibi', '53.523.551/0001-04', '(11) 3743-3202', 'atendimento@editoraaleph.com.br', 'São Paulo', 'SP'),
(3, 'Rocco', 'R. Júlio Diniz', 'Vila Olímpia', '42.444.703/0004-00', '(11) 3729-0244', 'filialsp@rocco.com.br', 'São Paulo', 'SP');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `cod` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `n_paginas` int(100) NOT NULL,
  `data_de_lancamento` int(4) NOT NULL,
  `autor` varchar(45) NOT NULL,
  `editora` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`cod`, `nome`, `n_paginas`, `data_de_lancamento`, `autor`, `editora`) VALUES
(2, 'D. Pedro: a história não contada', 432, 2015, 'Paulo Rezzutti', 'Saraiva'),
(3, 'Utopia Selvagem', 168, 2014, 'Darcy Ribeiro', 'Saraiva'),
(4, 'Sem Tempo A Perder', 272, 2023, 'Ursula K. Le Guin', 'Aleph'),
(5, 'O livro da Lua', 352, 2022, 'Sarah Faith Gottesdiener', 'Rocco');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `cod` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
<<<<<<< HEAD
  `cpf` varchar(14) NOT NULL,
  `Telefone` varchar(15) NOT NULL
=======
  `cpf` int(11) NOT NULL,
  `Telefone` varchar(14) NOT NULL
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`cod`, `email`, `senha`, `usuario`) VALUES
(1, 'mateus@biblioteca.com.br', '81dc9bdb52d04dc20036dbd8313ed055', 'Mateus');

--
-- Despejando dados para a tabela `pessoas`
--

INSERT INTO `pessoas` (`cod`, `nome`, `rua`, `bairro`, `cpf`, `Telefone`) VALUES
(1, 'Henrique Camargo', 'Angelo Faganholi', 'Jardim Canada', '170.314.750-23', '(18) 96787-4738'),
(2, 'Mirio Souza', 'Palmares', 'Centro', '989.984.150-11', '(18) 99503-9189'),
(3, 'Laura Pereira', 'Marcone', 'Vila Rodrigues', '138.566.960-83', '(18) 99544-4760'),
(4, 'Maria Eduarda', 'Carlópolis', 'Vila Rodrigues', '191.466.450-71', '(18) 96723-1685');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`cod`, `email`, `senha`, `usuario`) VALUES
(1, 'mateus@biblioteca.com.br', '81dc9bdb52d04dc20036dbd8313ed055', 'Mateus');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`cod`);

--
-- Índices de tabela `editoras`
--
ALTER TABLE `editoras`
  ADD PRIMARY KEY (`cod`);

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`cod`);

--
-- Índices de tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`cod`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autores`
--
ALTER TABLE `autores`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `editoras`
--
ALTER TABLE `editoras`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
<<<<<<< HEAD
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
=======
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT;
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
