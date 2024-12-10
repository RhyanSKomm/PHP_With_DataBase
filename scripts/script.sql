-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/12/2024 às 00:03
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `filmesdb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `filme`
--

CREATE TABLE `filme` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `img` text DEFAULT NULL,
  `ano` int(11) NOT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `filme`
--

INSERT INTO `filme` (`id`, `nome`, `img`, `ano`, `descricao`) VALUES
(1, 'The Shawshank Redemption', 'https://upload.wikimedia.org/wikipedia/pt/d/d2/The_Shawshank_Redemption_p%C3%B4ster.png', 1994, 'Dois homens são condenados à prisão por crimes que não cometeram. A história acompanha suas vidas na prisão e sua luta por liberdade.'),
(2, 'The Godfather', 'https://upload.wikimedia.org/wikipedia/pt/d/de/Godfather_1972.jpg', 1972, 'O chefe de uma poderosa família mafiosa luta para manter o controle de seu império enquanto seus filhos se envolvem nos negócios da família.'),
(3, 'The Dark Knight', 'https://upload.wikimedia.org/wikipedia/pt/d/d1/The_Dark_Knight.jpg', 2008, 'Batman enfrenta o Coringa, um vilão psicopata que quer mergulhar Gotham City no caos.'),
(4, 'Forrest Gump', 'https://upload.wikimedia.org/wikipedia/pt/c/c0/ForrestGumpPoster.jpg', 1994, 'A história de um homem simples que, apesar de suas limitações intelectuais, impacta de forma significativa a história dos Estados Unidos.'),
(5, 'Inception', 'https://upload.wikimedia.org/wikipedia/pt/8/84/AOrigemPoster.jpg', 2010, 'Um ladrão especializado em invadir os sonhos das pessoas recebe uma missão para plantar uma ideia na mente de um alvo.');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filme`
--
ALTER TABLE `filme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;








