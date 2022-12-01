-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24-Nov-2022 às 21:43
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `kyotomangas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

DROP TABLE IF EXISTS `compras`;
CREATE TABLE IF NOT EXISTS `compras` (
  `id_compra` int(11) NOT NULL,
  `produtos` int(11) NOT NULL,
  `nome_cliente` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numero_pedido` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `codigo_produto` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `serie` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `autor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `editora` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `volume` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sinopse` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `capa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo_produto`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`codigo_produto`, `titulo`, `serie`, `autor`, `editora`, `volume`, `sinopse`, `capa`) VALUES
(9, '', 'gotoubun no hanayome', 'n/a', '', '4', 'foda d+', 'images/f0789ba2144c7e8d3d7c081bc07c9613.jpg'),
(4, 'Damon Slayer', 'Demon Slayer', 'n/a', '', '2', 'loco de mais', ''),
(3, 'gotoubun no hanayome', 'gotoubun no hanayome', 'n/a', '', '2', 'foda d+', ''),
(6, 'My dress up darling', 'My dress up darling', 'n/a', '', '4', 'loco de mais', ''),
(8, '', '', '', '', '', '', ''),
(10, '', 'gotoubun no hanayome', 'n/a', 'n/a', '4', 'foda d+', 'images/2c99732e71819d648d869c06a71d7291.jpg'),
(11, '', 'Demon Slayer', 'n/a', 'n/a', '2', 'foda d+', 'images/184456ec928dd93ea500f3e7c557c251.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `consenha` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `sobrenome`, `usuario`, `email`, `senha`, `consenha`) VALUES
(1, 'user', 'user', 'user', 'user@gmail.com', '12345678', '12345678'),
(2, 'felipe', 'silva', 'felipe1', 'exemplo@mail.com', '12345678', '12345678'),
(3, 'ersr', 'ssvsf', 'vsvfvfxv', 'xfvfvfv@fsdfd', 'vxfvxfvx', 'vxfvfxv'),
(4, '', '', '', '', '', ''),
(5, 'andrey', 'martins', 'andrey1', 'andrey@gmail.com', '25896374', '25896347'),
(6, 'felipe', 'de', 'usuario', 'felipe70103@gmail.com', '141414', '141414');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
