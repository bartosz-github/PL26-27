-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2026 at 07:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pl2627`
--

-- --------------------------------------------------------

--
-- Table structure for table `pltable`
--

CREATE TABLE `pltable` (
  `id` int(11) NOT NULL,
  `pos` tinyint(4) NOT NULL,
  `emblem` text NOT NULL,
  `team` text NOT NULL,
  `team_abr` text NOT NULL,
  `played` smallint(6) NOT NULL,
  `won` smallint(6) NOT NULL,
  `drawn` smallint(6) NOT NULL,
  `lost` smallint(6) NOT NULL,
  `for_goals` smallint(6) NOT NULL,
  `against_goals` smallint(6) NOT NULL,
  `gd` smallint(6) NOT NULL,
  `points` smallint(6) NOT NULL,
  `MW1` smallint(6) NOT NULL,
  `MW2` smallint(6) NOT NULL,
  `MW3` smallint(6) NOT NULL,
  `MW4` smallint(6) NOT NULL,
  `MW5` smallint(6) NOT NULL,
  `MW6` smallint(6) NOT NULL,
  `MW7` smallint(6) NOT NULL,
  `MW8` smallint(6) NOT NULL,
  `MW9` smallint(6) NOT NULL,
  `MW10` smallint(6) NOT NULL,
  `MW11` smallint(6) NOT NULL,
  `MW12` smallint(6) NOT NULL,
  `MW13` smallint(6) NOT NULL,
  `MW14` smallint(6) NOT NULL,
  `MW15` smallint(6) NOT NULL,
  `MW16` smallint(6) NOT NULL,
  `MW17` smallint(6) NOT NULL,
  `MW18` smallint(6) NOT NULL,
  `MW19` smallint(6) NOT NULL,
  `MW20` smallint(6) NOT NULL,
  `MW21` smallint(6) NOT NULL,
  `MW22` smallint(6) NOT NULL,
  `MW23` smallint(6) NOT NULL,
  `MW24` smallint(6) NOT NULL,
  `MW25` smallint(6) NOT NULL,
  `MW26` smallint(6) NOT NULL,
  `MW27` smallint(6) NOT NULL,
  `MW28` smallint(6) NOT NULL,
  `MW29` smallint(6) NOT NULL,
  `MW30` smallint(6) NOT NULL,
  `MW31` smallint(6) NOT NULL,
  `MW32` smallint(6) NOT NULL,
  `MW33` smallint(6) NOT NULL,
  `MW34` smallint(6) NOT NULL,
  `MW35` smallint(6) NOT NULL,
  `MW36` smallint(6) NOT NULL,
  `MW37` smallint(6) NOT NULL,
  `MW38` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pltable`
--

INSERT INTO `pltable` (`id`, `pos`, `emblem`, `team`, `team_abr`, `played`, `won`, `drawn`, `lost`, `for_goals`, `against_goals`, `gd`, `points`, `MW1`, `MW2`, `MW3`, `MW4`, `MW5`, `MW6`, `MW7`, `MW8`, `MW9`, `MW10`, `MW11`, `MW12`, `MW13`, `MW14`, `MW15`, `MW16`, `MW17`, `MW18`, `MW19`, `MW20`, `MW21`, `MW22`, `MW23`, `MW24`, `MW25`, `MW26`, `MW27`, `MW28`, `MW29`, `MW30`, `MW31`, `MW32`, `MW33`, `MW34`, `MW35`, `MW36`, `MW37`, `MW38`) VALUES
(1, 1, '', 'Arsenal', 'Ars', 1, 1, 0, 0, 3, 0, 3, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3),
(2, 2, '', 'Aston Villa', 'Ast', 1, 0, 0, 1, 0, 4, -4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 3, '', 'Bournemouth', 'Bou', 2, 0, 1, 1, 2, 3, -1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 4, '', 'Brentford', 'Bre', 2, 1, 1, 0, 4, 1, 3, 4, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 5, '', 'Brighton & Hove Albion', 'Bri', 2, 1, 0, 1, 7, 4, 3, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 6, '', 'Chelsea', 'Che', 2, 2, 0, 0, 7, 5, 2, 6, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7, '', 'Coventry City', 'Cov', 2, 0, 0, 2, 0, 4, -4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 8, '', 'Crystal Palace', 'Cry', 2, 0, 0, 2, 1, 6, -5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 9, '', 'Everton', 'Eve', 2, 1, 1, 0, 3, 1, 2, 4, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 10, '', 'Fulham', 'Ful', 2, 0, 0, 2, 2, 4, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 11, '', 'Hull City', 'Hul', 2, 2, 0, 0, 3, 0, 3, 6, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 12, '', 'Ipswich Town', 'Ips', 2, 1, 0, 1, 4, 6, -2, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 13, '', 'Leeds United', 'Lee', 2, 1, 1, 0, 2, 1, 1, 4, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 14, '', 'Liverpool', 'Liv', 2, 0, 2, 0, 4, 4, 0, 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 15, '', 'Manchester City', 'ManC', 2, 2, 0, 0, 6, 2, 4, 6, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 16, '', 'Manchester United', 'ManU', 2, 1, 0, 1, 5, 4, 1, 3, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 17, '', 'Newcastle United', 'New', 2, 1, 1, 0, 4, 2, 2, 4, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 18, '', 'Nottingham Forest', 'Not', 2, 0, 1, 1, 2, 3, -1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 19, '', 'Sunderland', 'Sun', 2, 1, 0, 1, 2, 2, 0, 3, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 20, '', 'Tottenham Hotspur', 'Tot', 2, 0, 0, 2, 0, 5, -5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pltable`
--
ALTER TABLE `pltable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD UNIQUE KEY `team` (`team`) USING HASH,
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pltable`
--
ALTER TABLE `pltable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
