-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Set-2022 às 18:27
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

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
  `gastos` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `id_users`, `nomePlanta`, `tipo`, `qtdPlantada`, `tempo`, `data_plantada`, `data_colheita`, `irrigacao`, `p_irrigacao`, `p_tipo`, `p_fertilizante`, `gastos`) VALUES
(1, 5, 'Alface', 'Semente', 500, 250, '2022-06-18', NULL, 500, NULL, NULL, NULL, NULL),
(4, 3, 'Pimenta', 'Muda', 100, 250, '2022-06-18', NULL, 100, NULL, NULL, NULL, NULL),
(5, 2, 'Soja', 'Semente', 100, 300, '2022-06-18', NULL, 100, '9999.99', '200.00', '350.00', '9999.99'),
(13, 2, 'Teste', 'Teste', 123, 52, '2022-07-31', NULL, 122, NULL, NULL, NULL, NULL),
(14, 2, 'teste', 'teste', 0, 123, '2022-08-03', NULL, 210, NULL, NULL, NULL, NULL),
(32, 1, 'Milho', 'Semente', 600, 60, '2022-09-22', NULL, 2, '4248.00', '300.00', '500.00', '5048.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste`
--

CREATE TABLE `teste` (
  `data` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `teste`
--

INSERT INTO `teste` (`data`) VALUES
('2022-02-02');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
