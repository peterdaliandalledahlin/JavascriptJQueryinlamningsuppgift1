-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 15 jan 2019 kl 11:35
-- Serverversion: 10.1.36-MariaDB
-- PHP-version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `javascriptjqueryinlamningsuppgift1`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `contact_form_info`
--

CREATE TABLE `contact_form_info` (
  `id` int(11) NOT NULL,
  `firstname` varchar(150) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `lastname` varchar(150) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(150) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(150) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `business` varchar(8) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `radios` varchar(9) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `contact_form_info`
--

INSERT INTO `contact_form_info` (`id`, `firstname`, `lastname`, `phone`, `email`, `password`, `comment`, `business`, `radios`) VALUES
(18, 'Bertil', 'Bertilsson', 701234567, 'bertil@bertilsson.se', '$2y$10$Lp9sKmmxH/Xl2IdXdrorgejooazwzdSqAWbezW8mzejHqIrCSqglm', 'Hälsning från Bertil!', 'yes', 'meatballs'),
(19, 'Karl', 'Karlsson', 706468393, 'karl@karlsson.se', '$2y$10$OKnkfqVJVLbo/nyY0CwP9ezgm3R2Cpkp4aTRO3a0VYs2l56ndC14u', 'Hälsning från Karl!', 'no', 'jansson'),
(21, 'Sven', 'Svensson', 701234567, 'sven@svensson.se', '$2y$10$a3EIWg8Qy9Uwc9XNRUMx0Oo4FUwelUY/MEP1Jg11vWFOFBqt39CTG', 'Hälsning från Sven!', 'grinchen', 'sill'),
(22, 'Sune', 'Sunesson', 700007777, 'sune@sunesson.se', '$2y$10$MHk5C/L66W1q17Y7j1/ZTO.aB3C2D/583sf.TDLtc9FE7qSpmjqGi', 'Hälsning från Sune', 'no', 'meatballs'),
(23, 'Sven', 'Svensson', 701234567, 'par@parsson.se', '$2y$10$Fv3X97JEQMb8ZNba81153uVqQ0QRuBe2Gggmh9p3gCpwvJbu20/AG', 'Hälsningar från Sven!', 'no', 'meatballs'),
(24, 'Pär', 'Pärsson', 701234567, 'par@parsson.se', '$2y$10$YcwqugF38PGa8WQifs71z./cYJlcug415.n3NMsAIaIpJ4TlUIia.', 'Hälsningar från Pär!', 'yes', 'jansson'),
(25, 'Oskar', 'Oskarsson', 70, 'oskar@oskarsson.se', '$2y$10$21t5Ly78fAlhZTj.O2z.x.6rEQG5pKt4ynVhXCiuw3njpLO3m4gtG', 'Hälsning från Oskar!', 'front', 'js'),
(26, 'Lars', 'Larsson', 70, 'lars@larsson.se', '$2y$10$L8NRdaBGqV5c4ynNafGjHulij.4kctS8SMH9bc8lz9tW.hab9DBZK', 'Hälsning från Lars!', 'front', 'js');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `contact_form_info`
--
ALTER TABLE `contact_form_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `contact_form_info`
--
ALTER TABLE `contact_form_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
