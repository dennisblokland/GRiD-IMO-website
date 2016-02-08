-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 08 feb 2016 om 10:07
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `grid_imo`
--
CREATE DATABASE IF NOT EXISTS `grid_imo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `grid_imo`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `text` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden geëxporteerd voor tabel `news`
--

INSERT INTO `news` (`id`, `title`, `text`) VALUES
(1, 'voorbeeld news', 'dit is het eerste voorbeeld news'),
(2, 'voorbeeld new 2', 'dit is het tweede voorbeeld news\r\n'),
(3, 'voorbeeld new 3', 'dit is het derde voorbeeld news\r\n'),
(4, 'voorbeeld new 4', 'dit is het vierde voorbeeld news\r\n'),
(5, 'voorbeeld new 5', 'dit is het vijfde voorbeeld news\r\n'),
(6, 'voorbeeld new 6', 'dit is het zesde voorbeeld news\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
