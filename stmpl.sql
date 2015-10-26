-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Pon 26. říj 2015, 17:09
-- Verze serveru: 5.5.44-0ubuntu0.14.04.1
-- Verze PHP: 5.5.9-1ubuntu4.13

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
-- Struktura tabulky `kalendar`
--

CREATE TABLE IF NOT EXISTS `kalendar` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `from` int(20) NOT NULL,
  `to` int(20) NOT NULL,
  `nadpis` varchar(255) NOT NULL,
  `popis` text NOT NULL,
  `odkaz` text NOT NULL,
  `kategorie` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Vypisuji data pro tabulku `kalendar`
--

INSERT INTO `kalendar` (`id`, `from`, `to`, `nadpis`, `popis`, `odkaz`, `kategorie`) VALUES
(1, 1444082400, 1444168800, 'zavodyfsdfd', 'fs', 'fds', 'trenink'),
(2, 1443650400, 1443650400, 'trenink', 'gfdsgdgsfdgds', '', 'trenink'),
(3, 1443736800, 1443736800, 'gdsgsfdgdf', 'gfsddf', '', 'jine'),
(4, 1443823200, 1443823200, 'brigada', '', '', 'brigada'),
(5, 1444082400, 1444946400, 'n', 'fasdfsd sd sd fs cvzxxxc', 'dfsadfs', 'zavody'),
(6, 1444255200, 1444255200, 'gsdfgdfgfd', 'gdsfsdg', 'gdsgsdf', 'brigada'),
(7, 1443996000, 1443996000, 'gssdfgdfgd', 'dfa dfadsds fdsf g d gs', '', 'zavody');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
