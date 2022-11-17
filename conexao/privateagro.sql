-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Nov-2022 às 01:20
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
-- Banco de dados: `privateagro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `nomePlanta` varchar(30) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `qtdPlantada` int(11) NOT NULL,
  `tempo` int(11) NOT NULL,
  `data_plantada` date NOT NULL DEFAULT current_timestamp(),
  `data_colheita` date DEFAULT NULL,
  `irrigacao` int(11) NOT NULL,
  `p_irrigacao` decimal(6,2) DEFAULT NULL,
  `p_tipo` decimal(6,2) DEFAULT NULL,
  `p_fertilizante` decimal(6,2) DEFAULT NULL,
  `gastos` decimal(6,2) DEFAULT NULL,
  `status` char(8) NOT NULL DEFAULT 'Plantado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `id_users`, `nomePlanta`, `tipo`, `qtdPlantada`, `tempo`, `data_plantada`, `data_colheita`, `irrigacao`, `p_irrigacao`, `p_tipo`, `p_fertilizante`, `gastos`, `status`) VALUES
(15, 1, 'Milho', 'Sementes', 123, 100, '2022-11-16', NULL, 2, NULL, NULL, NULL, NULL, 'Plantado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `data` datetime DEFAULT current_timestamp(),
  `tarifa` double(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `data`, `tarifa`) VALUES
(1, 'Renan', '$2y$10$KiFqIoeoyEj66XNRAOiIVeMKunxqS7bYoIfvz5KccZtKbAtR0OiLO', '2022-03-18 21:11:36', 0.59),
(2, 'Marcos', '$2y$10$dmTyL9WdkFi1nOfaaorEYucv9hr14sRzX9aiDHfUIxhwPZdAZZ1Qe', '2022-03-20 17:20:12', 59.00),
(3, 'Pedro', '$2y$10$su.J5k5GZAELzmcOQ39fxe0RCC3sMdVLLhPDlWF/EGpvSouMKnFES', '2022-06-17 22:04:11', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
