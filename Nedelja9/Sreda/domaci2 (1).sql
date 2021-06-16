-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 04:32 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `domaci2`
--
CREATE DATABASE IF NOT EXISTS `9016_Luka_Trkulja_d2-1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `9016_Luka_Trkulja_d2-1`;

-- --------------------------------------------------------

--
-- Table structure for table `destinacije`
--

CREATE TABLE `destinacije` (
  `id` int(11) NOT NULL,
  `drzava` varchar(10) NOT NULL,
  `grad` varchar(10) NOT NULL,
  `viza` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinacije`
--

INSERT INTO `destinacije` (`id`, `drzava`, `grad`, `viza`) VALUES
(1, 'Egipat', 'Hurghada', 1);

-- --------------------------------------------------------

--
-- Table structure for table `putnici`
--

CREATE TABLE `putnici` (
  `broj_pasosa` varchar(11) NOT NULL,
  `ime_prezime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `putnici`
--

INSERT INTO `putnici` (`broj_pasosa`, `ime_prezime`) VALUES
('31231311', 'Luka Trkulja');

-- --------------------------------------------------------

--
-- Table structure for table `putovanja`
--

CREATE TABLE `putovanja` (
  `id` int(11) NOT NULL,
  `datum_polaska` date NOT NULL,
  `datum_povratka` date NOT NULL,
  `destinacija_id` int(11) NOT NULL,
  `cena` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `putovanja`
--

INSERT INTO `putovanja` (`id`, `datum_polaska`, `datum_povratka`, `destinacija_id`, `cena`) VALUES
(1, '2021-06-30', '2021-07-07', 1, '35000.00');

-- --------------------------------------------------------

--
-- Table structure for table `spisak_putnika`
--

CREATE TABLE `spisak_putnika` (
  `id` int(11) NOT NULL,
  `id_putovanja` int(11) NOT NULL,
  `broj_pasosa` varchar(11) NOT NULL,
  `popust` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spisak_putnika`
--

INSERT INTO `spisak_putnika` (`id`, `id_putovanja`, `broj_pasosa`, `popust`) VALUES
(2, 1, '31231311', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinacije`
--
ALTER TABLE `destinacije`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `putnici`
--
ALTER TABLE `putnici`
  ADD PRIMARY KEY (`broj_pasosa`);

--
-- Indexes for table `putovanja`
--
ALTER TABLE `putovanja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destinacija_id` (`destinacija_id`);

--
-- Indexes for table `spisak_putnika`
--
ALTER TABLE `spisak_putnika`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_putovanja` (`id_putovanja`),
  ADD KEY `broj_pasosa` (`broj_pasosa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinacije`
--
ALTER TABLE `destinacije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `putovanja`
--
ALTER TABLE `putovanja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spisak_putnika`
--
ALTER TABLE `spisak_putnika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `putovanja`
--
ALTER TABLE `putovanja`
  ADD CONSTRAINT `putovanja_ibfk_1` FOREIGN KEY (`destinacija_id`) REFERENCES `destinacije` (`id`);

--
-- Constraints for table `spisak_putnika`
--
ALTER TABLE `spisak_putnika`
  ADD CONSTRAINT `spisak_putnika_ibfk_1` FOREIGN KEY (`id_putovanja`) REFERENCES `putovanja` (`id`),
  ADD CONSTRAINT `spisak_putnika_ibfk_2` FOREIGN KEY (`broj_pasosa`) REFERENCES `putnici` (`broj_pasosa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
