-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pát 02. říj 2015, 16:58
-- Verze serveru: 5.6.15-log
-- Verze PHP: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `stmpl`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `clenove`
--

CREATE TABLE IF NOT EXISTS `clenove` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `jmeno` varchar(75) COLLATE utf8_czech_ci NOT NULL,
  `prijmeni` varchar(75) COLLATE utf8_czech_ci NOT NULL,
  `polavi` varchar(1) COLLATE utf8_czech_ci NOT NULL,
  `narozeni_timestamp` int(20) NOT NULL,
  `profil_image` text COLLATE utf8_czech_ci NOT NULL,
  `timestamp` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Struktura tabulky `fotogalerie`
--

CREATE TABLE IF NOT EXISTS `fotogalerie` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `nazev` varchar(100) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `timestamp` int(20) NOT NULL,
  `datum1` int(20) NOT NULL,
  `datum2` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabulky `photobox`
--

CREATE TABLE IF NOT EXISTS `photobox` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `link` text CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `timestamp` int(20) NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '1',
  `image` text CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Struktura tabulky `uvodni_texty`
--

CREATE TABLE IF NOT EXISTS `uvodni_texty` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nadpis` varchar(250) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `timestamp` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
