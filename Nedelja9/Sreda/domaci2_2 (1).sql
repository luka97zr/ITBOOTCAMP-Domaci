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
-- Database: `domaci2_2`
--
CREATE DATABASE IF NOT EXISTS `9016_Luka_Trkulja_d2-2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `9016_Luka_Trkulja_d2-2`;

-- --------------------------------------------------------

--
-- Table structure for table `korpa`
--

CREATE TABLE `korpa` (
  `id` int(11) NOT NULL,
  `vreme` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ukupna_cena` decimal(9,2) NOT NULL,
  `adresa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `barkod` varchar(15) NOT NULL,
  `ime` varchar(10) NOT NULL,
  `cena` decimal(9,2) NOT NULL,
  `tip` enum('hrana','odeca','obuca','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`barkod`, `ime`, `cena`, `tip`) VALUES
('1231231241', 'Milka', '100.00', 'hrana');

-- --------------------------------------------------------

--
-- Table structure for table `stavke_korpe`
--

CREATE TABLE `stavke_korpe` (
  `id` int(11) NOT NULL,
  `barkod` varchar(15) NOT NULL,
  `id_korpe` int(11) NOT NULL,
  `kolicina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korpa`
--
ALTER TABLE `korpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`barkod`);

--
-- Indexes for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barkod` (`barkod`),
  ADD KEY `id_korpe` (`id_korpe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korpa`
--
ALTER TABLE `korpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD CONSTRAINT `stavke_korpe_ibfk_1` FOREIGN KEY (`barkod`) REFERENCES `proizvodi` (`barkod`),
  ADD CONSTRAINT `stavke_korpe_ibfk_2` FOREIGN KEY (`id_korpe`) REFERENCES `korpa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
