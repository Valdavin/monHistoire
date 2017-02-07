-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 06:24 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jeu`
--
CREATE DATABASE IF NOT EXISTS `jeu` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `jeu`;

-- --------------------------------------------------------

--
-- Table structure for table `associe`
--

CREATE TABLE `associe` (
  `idPhrase` int(11) NOT NULL,
  `idChoix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `associe`
--

INSERT INTO `associe` (`idPhrase`, `idChoix`) VALUES
(28, 23);

-- --------------------------------------------------------

--
-- Table structure for table `choix`
--

CREATE TABLE `choix` (
  `idChoix` int(11) NOT NULL,
  `idRandomChoix` int(11) NOT NULL,
  `intituleChoix` text NOT NULL,
  `envoisVers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `choix`
--

INSERT INTO `choix` (`idChoix`, `idRandomChoix`, `intituleChoix`, `envoisVers`) VALUES
(23, 1408, 'Test de choix', 1);

-- --------------------------------------------------------

--
-- Table structure for table `phrase`
--

CREATE TABLE `phrase` (
  `idPhrase` int(11) NOT NULL,
  `idRandomPhrase` int(11) NOT NULL,
  `intitulePhrase` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phrase`
--

INSERT INTO `phrase` (`idPhrase`, `idRandomPhrase`, `intitulePhrase`) VALUES
(28, 6991, 'Test de phrase');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `associe`
--
ALTER TABLE `associe`
  ADD PRIMARY KEY (`idPhrase`) USING BTREE,
  ADD UNIQUE KEY `idPhrase` (`idPhrase`),
  ADD KEY `idChoix` (`idChoix`),
  ADD KEY `idPhrase_2` (`idPhrase`);

--
-- Indexes for table `choix`
--
ALTER TABLE `choix`
  ADD PRIMARY KEY (`idChoix`),
  ADD UNIQUE KEY `idRandomChoix` (`idRandomChoix`),
  ADD UNIQUE KEY `idChoix_2` (`idChoix`),
  ADD KEY `idChoix` (`idChoix`);

--
-- Indexes for table `phrase`
--
ALTER TABLE `phrase`
  ADD PRIMARY KEY (`idPhrase`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choix`
--
ALTER TABLE `choix`
  MODIFY `idChoix` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `phrase`
--
ALTER TABLE `phrase`
  MODIFY `idPhrase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `associe`
--
ALTER TABLE `associe`
  ADD CONSTRAINT `associe_ibfk_1` FOREIGN KEY (`idPhrase`) REFERENCES `phrase` (`idPhrase`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `associe_ibfk_2` FOREIGN KEY (`idChoix`) REFERENCES `choix` (`idChoix`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
