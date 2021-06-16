-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 04:31 PM
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
-- Database: `domaci1`
--
CREATE DATABASE IF NOT EXISTS `9016_Luka_Trkulja` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `9016_Luka_Trkulja`;

-- --------------------------------------------------------

--
-- Table structure for table `djaci`
--

CREATE TABLE `djaci` (
  `broj_knjizice` varchar(10) NOT NULL,
  `ime` varchar(15) NOT NULL,
  `prezime` varchar(15) NOT NULL,
  `razred` varchar(3) NOT NULL,
  `odeljenje` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `djaci`
--

INSERT INTO `djaci` (`broj_knjizice`, `ime`, `prezime`, `razred`, `odeljenje`) VALUES
(' 13-2020', 'Ranko', 'Stojic', 'III', '5'),
('14-2020', 'Janko ', 'Veselinovic', 'II ', '4');

-- --------------------------------------------------------

--
-- Table structure for table `ocene`
--

CREATE TABLE `ocene` (
  `id` int(11) NOT NULL,
  `id_djaka` varchar(10) NOT NULL,
  `predmet` varchar(10) NOT NULL,
  `ocene` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ocene`
--

INSERT INTO `ocene` (`id`, `id_djaka`, `predmet`, `ocene`) VALUES
(1, '14-2020', 'Matematika', 2),
(2, '14-2020', 'Srpski', 3),
(3, ' 13-2020', 'Matematika', 5),
(4, ' 13-2020', 'Srpski', 4);

-- --------------------------------------------------------

--
-- Table structure for table `predmeti`
--

CREATE TABLE `predmeti` (
  `id` int(11) NOT NULL,
  `naziv` varchar(10) NOT NULL,
  `profesor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `predmeti`
--

INSERT INTO `predmeti` (`id`, `naziv`, `profesor`) VALUES
(1, 'Matematika', 'MT'),
(2, 'Srpski', 'SR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `djaci`
--
ALTER TABLE `djaci`
  ADD PRIMARY KEY (`broj_knjizice`),
  ADD KEY `ime` (`ime`);

--
-- Indexes for table `ocene`
--
ALTER TABLE `ocene`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_djaka` (`id_djaka`);

--
-- Indexes for table `predmeti`
--
ALTER TABLE `predmeti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ocene`
--
ALTER TABLE `ocene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `predmeti`
--
ALTER TABLE `predmeti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ocene`
--
ALTER TABLE `ocene`
  ADD CONSTRAINT `ocene_ibfk_1` FOREIGN KEY (`id_djaka`) REFERENCES `djaci` (`broj_knjizice`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
