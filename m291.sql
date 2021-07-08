-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Erstellungszeit: 08. Jul 2021 um 19:23
-- Server-Version: 5.7.26
-- PHP-Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `m291`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `beschreibung`
--

DROP TABLE IF EXISTS `beschreibung`;
CREATE TABLE IF NOT EXISTS `beschreibung` (
  `beschreibung_de` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nutzer_name`
--

DROP TABLE IF EXISTS `nutzer_name`;
CREATE TABLE IF NOT EXISTS `nutzer_name` (
  `name_de` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `standort`
--

DROP TABLE IF EXISTS `standort`;
CREATE TABLE IF NOT EXISTS `standort` (
  `standort_de` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
