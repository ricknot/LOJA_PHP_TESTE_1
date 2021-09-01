-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Ago-2017 às 22:07
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `user_ID` int(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `datanasc` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel` varchar(50) NOT NULL,
  `data_criado` varchar(30) NOT NULL,
  `data_modific` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_ID`, `nome`, `datanasc`, `login`, `senha`, `nivel`, `data_criado`, `data_modific`) VALUES
(19, 'Ricardo Costa', '05/11/1994', 'ricardo_costa', 'db10403bf65f7bcf55db22bff6db2937', 'admin', '31-08-2017 10:25', '31-08-2017 10:25'),
(20, 'Raul Fernandes', '22/12/1996', 'raul_fernandes', '25d55ad283aa400af464c76d713c07ad', 'moderador', '31-08-2017 10:29', '31-08-2017 10:29'),
(21, 'Victor de Carvalho LourenÃ§o', '01/08/1993', 'victor.lourenco', '25d55ad283aa400af464c76d713c07ad', 'admin', '31-08-2017 10:33', '31-08-2017 10:33'),
(22, 'Cliente', '05/11/1994', 'client.site', '5e8667a439c68f5145dd2fcbecf02209', 'cliente', '31-08-2017 15:06', '31-08-2017 15:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
