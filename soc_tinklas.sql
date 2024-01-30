-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 30, 2024 at 03:45 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soc_tinklas`
--

-- --------------------------------------------------------

--
-- Table structure for table `irasai`
--

CREATE TABLE `irasai` (
  `id` int NOT NULL,
  `pavadinimas` varchar(150) NOT NULL,
  `tekstas` text NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `irasai`
--

INSERT INTO `irasai` (`id`, `pavadinimas`, `tekstas`, `data`) VALUES
(1, 'ufhisdoa', 'hcsuhsuc', '2024-01-30 15:43:23');

-- --------------------------------------------------------

--
-- Table structure for table `vartotojai`
--

CREATE TABLE `vartotojai` (
  `id` int NOT NULL,
  `vardas` varchar(30) NOT NULL,
  `pavarde` varchar(30) NOT NULL,
  `el_pastas` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vartotojai`
--

INSERT INTO `vartotojai` (`id`, `vardas`, `pavarde`, `el_pastas`, `password`) VALUES
(1, 'xcsc', 'scsc', 'scd@efd', '$2y$10$covPVYeJBYT1fi.bTsv16O7UHspNtmw70g97Rte8webb77kXl8q2.'),
(2, 'danielius', 'babin', 'dfjdfhduhfhu@hdfhdu.com', '$2y$10$Fz1QoELfi8HDlg1JTvPTr.EaHGHUL.f9PWLoOVLnOF0b3Dw0HpZ4K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `irasai`
--
ALTER TABLE `irasai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vartotojai`
--
ALTER TABLE `vartotojai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `irasai`
--
ALTER TABLE `irasai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vartotojai`
--
ALTER TABLE `vartotojai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
