-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/02/2024 às 01:42
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crowd_comments`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `comments`
--

INSERT INTO `comments` (`id`, `username`, `comment`) VALUES
(1, 'admin', 'I really like chocolate'),
(2, 'admin', 'Corvette is soooo cool!!!'),
(3, 'Emanuel', 'i wish i would play souls like games like creator_name do, i am so bad at it :).'),
(4, 'Emanuel', 'Solo leveling is surely the best anime of the season and the OST dark aria lv2, perfect.'),
(5, 'Emanuel', 'PHP is not too hard as i expected, maybe it is just the beggining.'),
(6, 'kirito', 'Even though i hate what happened in SAO, playing SAO had some good momments.'),
(7, 'asuna', 'i love kirito, he is so cool!.'),
(8, 'kirito', 'VRMMO games are so good, i will start playing alfheim online today.'),
(9, 'asuna', 'Gun gale online is a good game, it will be my seccond game.'),
(10, 'asuna', 'yuuki is too strong for me, cant beat her.'),
(11, 'asuna', 'sinon is the best sniper i have ever seen.'),
(12, 'kirito', 'i love swords, i ve seen a girl playing a boxing game recently, i want to try it, but swords probably will do more damage.'),
(13, 'asuna', 'chicken 🥪 is soo good!!');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `gender`) VALUES
(1, 'admin', 'adm.crowdc@cco.com', '21232f297a57a5a743894a0e4a801fc3', 'male'),
(2, 'username', 'email', '5f4dcc3b5aa765d61d8327deb882cf99', 'male'),
(3, 'abc', 'abc@abc', '900150983cd24fb0d6963f7d28e17f72', 'male'),
(4, 'Emanuel', 'emanuel@crco.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'male'),
(5, 'julia', 'julia@crco.com', 'e8d95a51f3af4a3b134bf6bb680a213a', 'female'),
(6, 'abcd', 'abcd@abcd', 'e2fc714c4727ee9395f324cd2e7f331f', 'male'),
(7, 'cat', 'cat@crco.com', '27400e0393d51cc6764c747dd82c4235', 'female'),
(8, 'ustudygirl', 'ustudygirl@crco.com', '2b21bb4dedfcacfe1c45bf8a8a238002', 'female'),
(9, 'qtgamergirl', 'qtgamergirl@crco.com', 'a7ba654021bbe1bb1d6e0838fd44c244', 'female'),
(10, 'overlords_servant', 'overlordsservant@crco.com', '419b6701646f2df718c9acd4eee41a2e', 'female'),
(11, 'kirito', 'kirito@crco.com', 'df173c8ee5973bf4e9976883604b03f0', 'male'),
(12, 'asuna', 'asuna@crco.com', 'ceef4ee5729be6e55c0e81c997dd25e4', 'female'),
(13, 'computerboy', 'compboy@crco.com', 'f7abaf8054faa27598803614d3ddfffb', 'male'),
(14, 'kirby', 'kirby@crco.com', '1d3e97cdf1c207bef530db2abee39504', 'male'),
(15, 'sittingduck', 'sittingduck@crco.com', '9a75b02c7b70498d58c40abe8d198e36', 'male');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
