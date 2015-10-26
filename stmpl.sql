-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pon 26. říj 2015, 11:10
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
-- Struktura tabulky `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `timestamp` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Vypisuji data pro tabulku `chat`
--

INSERT INTO `chat` (`id`, `timestamp`, `type`, `text`) VALUES
(12, 1445603315, 'zavody', 'good morning'),
(13, 1445603321, 'zavody', 'how are you'),
(11, 1445603300, 'trenink', 'dalsi nova yprava'),
(10, 1445602910, 'trenink', 'TEST'),
(4, 1445602743, 'trenink', 'test'),
(5, 1445602751, 'trenink', 'dfssda;fldsasdfsd'),
(6, 1445602759, 'trenink', 'ffff'),
(7, 1445602844, 'trenink', 'TEST'),
(8, 1445602855, 'zavody', 'dfsafsd'),
(9, 1445602864, 'ostatni', 'fasdafsfsdsdf'),
(14, 1445603342, 'trenink', 'lorem ipsum sdsajasojdodiasf oaids fosdh ofsdhpo hsdofh osdphfo sdofh sdiohf osihdfp ofhsdfioasd hofhsdoi fhsdohf osdh foisdh fsdofsd'),
(15, 1445603353, 'trenink', 'ifasdof iosdiohfosdifhsdoifosijfisod fiosdj oisdjoi jsdoijf aosidj fosdij foisdj fsoidjf osdijf sdiojf siodfj s'),
(16, 1445603358, 'trenink', 'jfasdoi sisfd jiosdiif sadosdf'),
(17, 1445603360, 'trenink', 'dpodsfopsdjf sdf'),
(18, 1445603363, 'trenink', 'sdfjpoasdj fopajsdopf sdop fjasdop fasdopf jasdpjpasod aps'),
(19, 1445603369, 'trenink', 'pjfasdpojasdpj sdofj asdopjfaops djofjasdpojf sdsopajdf asdjasdop fopsdjf dasp'),
(20, 1445604045, 'trenink', 'ahoj'),
(21, 1445604057, 'trenink', 'jak se mas?'),
(22, 1445604390, 'trenink', '123265645646556hfjfj56j45jfstfgdfgdf');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=1 ;

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
-- Struktura tabulky `kalendar`
--

CREATE TABLE IF NOT EXISTS `kalendar` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `from` int(20) NOT NULL,
  `to` int(20) NOT NULL,
  `nadpis` varchar(255) NOT NULL,
  `popis` text NOT NULL,
  `odkaz` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Vypisuji data pro tabulku `kalendar`
--

INSERT INTO `kalendar` (`id`, `from`, `to`, `nadpis`, `popis`, `odkaz`) VALUES
(1, 1445852230, 1445872230, 'TEST', 'fgsdgdf sgdf gd df', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Vypisuji data pro tabulku `photobox`
--

INSERT INTO `photobox` (`id`, `title`, `text`, `link`, `timestamp`, `seen`, `image`) VALUES
(2, 'sss', 'ddde', 'http://localhost/stmpl/new/index.php?page=clenove', 0, 1, '_H108065.jpg'),
(3, ' fafaisdjfiodsjoi sd', '<p>fasdi ioasjfiosdj fiosdjf isdaa fsdaas</p>', '', 0, 1, '3.jpg');

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

--
-- Vypisuji data pro tabulku `uvodni_texty`
--

INSERT INTO `uvodni_texty` (`id`, `nadpis`, `text`, `timestamp`) VALUES
(3, 'Lorem Ipsum', '<h1 style="text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;">afsdfsd fsd fds</h1>\r\n<h3><strong>fdsafsd</strong></h3>\r\n<p style="text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque convallis lobortis felis rutrum tincidunt. Aenean vel purus suscipit, sodales diam ut, dapibus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque at sem ut lacus faucibus pharetra in ac velit. Mauris justo orci, condimentum at quam vel, sodales ullamcorper justo. Fusce cursus consectetur odio eu sodales. Maecenas vitae orci et magna feugiat ultrices vitae non nisl. Suspendisse eget neque euismod, dignissim quam ut, molestie massa. Donec eu diam justo. Ut commodo, lorem eget pretium pellentesque, odio eros congue risus, ac consequat justo purus non sapien. Integer mattis gravida massa non lacinia. Duis bibendum, velit sit amet sollicitudin dapibus, ante purus venenatis turpis, et vehicula magna est quis mauris. Quisque a sapien eget purus laoreet pretium a a augue.</p>\r\n<p style="text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;">Donec at turpis nec libero finibus ultricies. Nam auctor, eros non euismod hendrerit, leo dui posuere felis, eu tempus lacus quam in quam. Nulla rhoncus, sapien ac semper tincidunt, quam ligula interdum mauris, sit amet maximus sem justo vitae felis. Nunc tempus tellus turpis, eu malesuada leo elementum maximus. Maecenas rutrum sem lobortis, porta est a, tristique tortor. Integer id neque et felis aliquam auctor. Integer mattis accumsan lacus, vitae efficitur urna ornare in. Vivamus facilisis porta hendrerit. Donec sed tellus elementum, interdum tellus at, tempus diam. Cras egestas eget purus vel luctus. Sed porttitor est nec nulla placerat consectetur. Aenean sagittis est molestie diam facilisis lacinia. Etiam gravida orci odio, non blandit lectus sollicitudin quis. Pellentesque ac faucibus nisl. Donec vitae dui sed ligula molestie placerat eget a erat. Ut lobortis iaculis placerat.</p>\r\n<p style="text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;">Nullam consequat varius quam, id sagittis turpis aliquam ac. Curabitur ultricies dictum tortor sed pulvinar. Nullam non interdum sem. Etiam non ante a ipsum posuere dignissim. Nam sed lectus arcu. Morbi in rutrum neque, a sodales nibh. Donec aliquet, neque et tincidunt maximus, ante dolor maximus sapien, et rutrum risus ligula sed dui. Praesent ornare urna arcu, non cursus metus iaculis at. Morbi varius mattis orci, aliquet varius nulla maximus vitae.</p>\r\n<p style="text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;">Nam nec luctus urna. Suspendisse sodales nec purus sit amet dignissim. Sed pretium nisl eget sagittis interdum. Ut a orci varius, laoreet massa nec, posuere tellus. Curabitur pharetra hendrerit facilisis. Donec ut dui a mauris sagittis porta. Vivamus magna mauris, aliquet id faucibus ac, convallis nec lectus. Integer id magna ut dui maximus rhoncus nec a eros. Phasellus vestibulum vestibulum nisi ut dictum. Aliquam vitae libero faucibus massa tempus elementum.</p>\r\n<p style="text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;">Fusce vel consectetur metus. Vestibulum massa erat, venenatis eu porttitor sed, porttitor in risus. Ut nec justo et lorem ultrices euismod. Cras eu pretium quam. Nullam blandit consectetur ligula, sit amet sagittis nunc tincidunt non. Suspendisse aliquam vitae erat nec vehicula. Etiam nec orci id purus sollicitudin faucibus. Morbi sollicitudin lacinia eros, ac vestibulum elit maximus eu. Aliquam in euismod turpis.</p>', 1438258463),
(5, 'UPR', '<h1><span style="font-size: 10pt;">Tady je nìjak&yacute; nov&yacute; èl&aacute;nek o tom, co se dìje.<br /><br /></span>K tomu zkus&iacute;m pøidat i nìjak&yacute; odkaz a nìjak&eacute; video.</h1>\r\n<p>&nbsp;</p>\r\n<p>Odkaz na <a title="Facebook" href="https://www.facebook.com/pages/Klub-biatlonu-Star%C3%A9-M%C4%9Bsto-pod-Land%C5%A1tejnem-Klub-ze-srdce-%C4%8Cesk%C3%A9-kanady/109285809153540?fref=ts" target="_blank">FB</a></p>\r\n<p>&nbsp;</p>\r\n<p>Video:</p>\r\n<p><iframe style="display: block; margin-left: auto; margin-right: auto;" src="//www.youtube.com/embed/PpjMXDmXsnU" width="538" height="430"></iframe></p>', 1438334177),
(6, 'NovÃ½ nadpis', '<p>New Test &nbsp; dfsafd sd fsd</p>\r\n<p>&nbsp;</p>\r\n<p><iframe style="display: block; margin-left: auto; margin-right: auto;" src="//www.youtube.com/embed/zqyGz1jriG8" width="336" height="277"></iframe></p>', 1439888222);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
