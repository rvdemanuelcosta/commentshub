-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/03/2024 às 00:23
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
(13, 'asuna', 'chicken 🥪 is soo good!!'),
(14, 'kirito', 'testing new feature to post comments without updating the page, test 7.'),
(15, 'kirito', 'testing if the comment input field will be cleared after posting it.'),
(16, 'kirito', 'testing if the comment input field will be cleared after posting it, test 2.'),
(17, 'kirito', 'testing if the comment input field will be cleared after posting it, test 3.'),
(18, 'kirito', 'testing if the comments will be updated automaticaly after commenting in user profile, test 1.'),
(19, 'kirito', 'testing if the button to comment works correctly, test 1.'),
(20, 'asuna', 'Just saw this @kirby game, kirby is so cute, i want to play it one day.'),
(21, 'kirito', 'testing if the comment form works after moving the project to another repository.'),
(22, '[]', 'Chess is the best strategy game ever made.'),
(23, 'julia', 'Neeko is the best decision!, Neeko was my favorite league of legends champion.'),
(24, 'Emanuel', 'My opinion about k-pop changed, i am starting to like it.'),
(25, 'Emanuel', 'i thought web dev would be easier, my code is really bugged, gonna keep it like that for now :)');

-- --------------------------------------------------------

--
-- Estrutura para tabela `followers`
--

CREATE TABLE `followers` (
  `id` int(11) NOT NULL,
  `followed_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  `following_since` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `followers`
--

INSERT INTO `followers` (`id`, `followed_id`, `follower_id`, `following_since`) VALUES
(1, 12, 5, '2024-03-07'),
(6, 11, 4, '2024-03-10');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL,
  `followers` int(11) DEFAULT NULL,
  `biography` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `gender`, `followers`, `biography`) VALUES
(1, 'admin', 'adm.crowdc@lecmm.crco', '21232f297a57a5a743894a0e4a801fc3', 'male', 0, NULL),
(2, 'username', 'email', '5f4dcc3b5aa765d61d8327deb882cf99', 'male', 0, NULL),
(3, 'abc', 'abc@lecmm.crco', '900150983cd24fb0d6963f7d28e17f72', 'male', 0, NULL),
(4, 'Emanuel', 'emanuel@lecmm.crco', '5f4dcc3b5aa765d61d8327deb882cf99', 'male', 0, NULL),
(5, 'julia', 'julia@lecmm.crco', 'e8d95a51f3af4a3b134bf6bb680a213a', 'female', 0, NULL),
(6, 'abcd', 'abcd@lecmm.crco', 'e2fc714c4727ee9395f324cd2e7f331f', 'male', 0, NULL),
(7, 'cat', 'cat@lecmm.crco', '27400e0393d51cc6764c747dd82c4235', 'female', 0, NULL),
(8, 'ustudygirl', 'ustudygirl@lecmm.crco', '2b21bb4dedfcacfe1c45bf8a8a238002', 'female', 0, NULL),
(9, 'qtgamergirl', 'qtgamergirl@lecmm.crco', 'a7ba654021bbe1bb1d6e0838fd44c244', 'female', 0, NULL),
(10, 'overlords_servant', 'overlordsservant@crco.com', '419b6701646f2df718c9acd4eee41a2e', 'female', 0, NULL),
(11, 'kirito', 'kirito@lecmm.crco', 'df173c8ee5973bf4e9976883604b03f0', 'male', 0, NULL),
(12, 'asuna', 'asuna@lecmm.crco', 'ceef4ee5729be6e55c0e81c997dd25e4', 'female', 0, NULL),
(13, 'computerboy', 'compboy@lecmm.crco', 'f7abaf8054faa27598803614d3ddfffb', 'male', 0, NULL),
(14, 'kirby', 'kirby@lecmm.crco', '1d3e97cdf1c207bef530db2abee39504', 'male', 0, NULL),
(15, 'sittingduck', 'sittingduck@lecmm.crco', '9a75b02c7b70498d58c40abe8d198e36', 'male', 0, NULL),
(16, '[]', 'blank@lecmm.crco', 'e2e4a7e28b421f27098e9a4a54e52605', 'male', NULL, NULL),
(17, 'default', 'default@lecmm.crco', 'default', 'male', NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `followers`
--
ALTER TABLE `followers`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
