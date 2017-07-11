-- phpMyAdmin SQL Dump
-- version 4.0.10.12
-- http://www.phpmyadmin.net
--
-- Machine: 127.2.177.130:3306
-- Genereertijd: 07 mei 2017 om 19:21
-- Serverversie: 5.5.52
-- PHP-versie: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `myblog`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `advertentie`
--

CREATE TABLE IF NOT EXISTS `advertentie` (
  `idadvertentie` int(11) NOT NULL AUTO_INCREMENT,
  `idgebruiker` int(11) DEFAULT NULL,
  `titel` varchar(255) DEFAULT NULL,
  `advertentietekst` mediumtext,
  `urlfoto` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`idadvertentie`),
  KEY `fk_advertentie_gebruiker_idx` (`idgebruiker`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `advertentie`
--

INSERT INTO `advertentie` (`idadvertentie`, `idgebruiker`, `titel`, `advertentietekst`, `urlfoto`) VALUES
(1, 7, 'Gezocht: Barman', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla pharetra nisi non ante elementum, vitae vehicula mi euismod. Ut sodales elit eget varius egestas. Phasellus quis elementum enim, id sodales leo. Phasellus maximus, ipsum vel convallis posuere, neque sem aliquam ante, at aliquet justo dolor vitae metus. Cras viverra risus sed vulputate tempor. Nulla pharetra sit amet velit eget vehicula.', 'http://media.hospitalitymagazine.com.au/H_Media_Library/jasonwilliams.jpg?width=300&height=300&mode=max'),
(2, 7, 'Gezocht: Accountant', 'Cras neque massa, volutpat sit amet lacus at, molestie porttitor quam. Donec vulputate rutrum risus quis ullamcorper. Suspendisse potenti. Etiam massa leo, congue nec laoreet et, venenatis vitae nunc. Donec egestas sodales sapien, eu lacinia tortor posuere eu. Integer ultrices quam dolor, ut pharetra erat finibus ac. Cras dictum turpis nisi. Integer sed iaculis risus. Proin sit amet lacus blandit, sagittis elit a, faucibus turpis. Praesent fringilla ligula non nulla porta, at aliquet nunc posuere.', 'http://www.microbusinesshub.co.uk/wp-content/uploads/2012/10/Micro-Business-accountant-300x300.jpg'),
(3, 7, 'Gezocht: Trappist', 'Duis tempor ut mi quis scelerisque. Aenean vehicula purus eu tortor imperdiet maximus. Maecenas et augue vel nibh cursus interdum ut eu velit. Vivamus cursus neque purus, vitae lobortis purus commodo sit amet. Phasellus tortor lacus, vestibulum sed augue non, sodales lacinia quam. Sed sit amet maximus nulla. Nulla vitae mi ac purus maximus blandit id at neque. Maecenas sed nisl in arcu accumsan gravida. Curabitur viverra augue ut magna elementum semper. Sed finibus pellentesque iaculis. Vestibulum convallis efficitur convallis. Curabitur dapibus, eros vel consequat dapibus, nulla elit convallis massa, non fringilla massa magna in magna. Praesent mi mauris, efficitur ac malesuada non, mollis id odio. Morbi rhoncus mi non auctor bibendum.', 'https://cdn.pastemagazine.com/www/articles/2013/01/28/Stift-Engelszell.jpg'),
(4, 7, 'Gezocht: Trein conducteur', 'Sed maximus nec ex sit amet rhoncus. Pellentesque in tellus id magna blandit finibus. Mauris feugiat ut mauris ut pharetra. Cras sit amet congue enim. Sed iaculis non turpis consectetur fringilla. Integer porttitor semper neque, interdum gravida arcu sollicitudin rhoncus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla pharetra nisi non ante elementum, vitae vehicula mi euismod. Ut sodales elit eget varius egestas. Phasellus quis elementum enim, id sodales leo. Phasellus maximus, ipsum vel convallis posuere, neque sem aliquam ante, at aliquet justo dolor vitae metus. Cras viverra risus sed vulputate tempor. Nulla pharetra sit amet velit eget vehicula.', 'https://thenypost.files.wordpress.com/2013/08/donna_radmann-300x300.jpg?quality=90&strip=all&w=300'),
(5, 8, 'Titel', 'adasdasd', 'asdasda');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruiker`
--

CREATE TABLE IF NOT EXISTS `gebruiker` (
  `idgebruiker` int(11) NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(45) DEFAULT NULL,
  `tussenvoegsel` varchar(20) DEFAULT NULL,
  `achternaam` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `avatar` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`idgebruiker`),
  UNIQUE KEY `login_UNIQUE` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Gegevens worden uitgevoerd voor tabel `gebruiker`
--

INSERT INTO `gebruiker` (`idgebruiker`, `voornaam`, `tussenvoegsel`, `achternaam`, `login`, `password`, `avatar`) VALUES
(1, 'Carla', 'op den', 'Boerde', 'carla', '8fa3a019b185c30170c6398f2437f11c968f95e2', NULL),
(2, 'Jenny', '', 'Opsterbande', 'jenny', '8fa3a019b185c30170c6398f2437f11c968f95e2', NULL),
(3, 'Jim', '', 'Beyonde', 'jim', '8fa3a019b185c30170c6398f2437f11c968f95e2', NULL),
(4, 'Julia', 'van', 'Zondag', 'julia', '8fa3a019b185c30170c6398f2437f11c968f95e2', NULL),
(5, 'Kees', '', 'Wiedeweer', 'kees', '8fa3a019b185c30170c6398f2437f11c968f95e2', NULL),
(6, 'Morgan', 'van', 'Noorwegen', 'morgan', '8fa3a019b185c30170c6398f2437f11c968f95e2', NULL),
(7, 'Piet', 'de ', 'Jong', 'piet', '8fa3a019b185c30170c6398f2437f11c968f95e2', NULL),
(8, 'hallo', 'hallo', 'hallo', 'hallo', '6a8669961cfb928a40921dfbc0556b9cf7a54d7a', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reactie`
--

CREATE TABLE IF NOT EXISTS `reactie` (
  `idreactie` int(11) NOT NULL AUTO_INCREMENT,
  `idadvertentie` int(11) DEFAULT NULL,
  `idgebruiker` int(11) DEFAULT NULL,
  `reactietekst` mediumtext,
  PRIMARY KEY (`idreactie`),
  KEY `fk_reactie_advertentie1_idx` (`idadvertentie`),
  KEY `fk_reactie_gebruiker1_idx` (`idgebruiker`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Gegevens worden uitgevoerd voor tabel `reactie`
--

INSERT INTO `reactie` (`idreactie`, `idadvertentie`, `idgebruiker`, `reactietekst`) VALUES
(1, 1, 2, 'Morbi at lectus vel urna varius blandit at ut nunc. Aliquam sit amet dolor pharetra, convallis nisl dapibus, bibendum velit. Phasellus dui erat, lobortis ac mauris vel, tempor sodales elit. Integer sed arcu libero. Maecenas sed nibh congue diam lobortis iaculis. Proin scelerisque lorem in lacus facilisis dictum. Integer congue leo vitae scelerisque lacinia. Curabitur in rutrum metus. Fusce enim ante, pretium vitae magna quis, sollicitudin dignissim nulla. Mauris dignissim molestie nibh. Nullam dolor lorem, tempus non ornare vel, lacinia eu lacus. '),
(2, 2, 2, 'Morbi at lectus vel urna varius blandit at ut nunc. Aliquam sit amet dolor pharetra, convallis nisl dapibus, bibendum velit. Phasellus dui erat, lobortis ac mauris vel, tempor sodales elit. Integer sed arcu libero. Maecenas sed nibh congue diam lobortis iaculis. Proin scelerisque lorem in lacus facilisis dictum. Integer congue leo vitae scelerisque lacinia. Curabitur in rutrum metus. Fusce enim ante, pretium vitae magna quis, sollicitudin dignissim nulla. Mauris dignissim molestie nibh. Nullam dolor lorem, tempus non ornare vel, lacinia eu lacus. '),
(3, 1, 3, 'Cras neque massa, volutpat sit amet lacus at, molestie porttitor quam. Donec vulputate rutrum risus quis ullamcorper. Suspendisse potenti. Etiam massa leo, congue nec laoreet et, venenatis vitae nunc. Donec egestas sodales sapien, eu lacinia tortor posuere eu. Integer ultrices quam dolor, ut pharetra erat finibus ac. Cras dictum turpis nisi. Integer sed iaculis risus. Proin sit amet lacus blandit, sagittis elit a, faucibus turpis. Praesent fringilla ligula non nulla porta, at aliquet nunc posuere.'),
(4, 4, 3, 'Cras neque massa, volutpat sit amet lacus at, molestie porttitor quam. Donec vulputate rutrum risus quis ullamcorper. Suspendisse potenti. Etiam massa leo, congue nec laoreet et, venenatis vitae nunc. Donec egestas sodales sapien, eu lacinia tortor posuere eu. Integer ultrices quam dolor, ut pharetra erat finibus ac. Cras dictum turpis nisi. Integer sed iaculis risus. Proin sit amet lacus blandit, sagittis elit a, faucibus turpis. Praesent fringilla ligula non nulla porta, at aliquet nunc posuere.'),
(5, 1, 6, 'Vivamus est eros, rutrum at arcu vel, accumsan vulputate arcu. Ut quis neque hendrerit eros lobortis pulvinar. Nam justo mauris, maximus vel quam a, scelerisque pellentesque mauris. Etiam sed eleifend metus. In laoreet tristique congue. Ut sagittis convallis eros, non imperdiet ante luctus in. Quisque eget ante ipsum.\r\n\r\n'),
(6, 3, 6, 'Vivamus est eros, rutrum at arcu vel, accumsan vulputate arcu. Ut quis neque hendrerit eros lobortis pulvinar. Nam justo mauris, maximus vel quam a, scelerisque pellentesque mauris. Etiam sed eleifend metus. In laoreet tristique congue. Ut sagittis convallis eros, non imperdiet ante luctus in. Quisque eget ante ipsum.\r\n\r\n'),
(7, 2, 6, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi vestibulum mollis efficitur. Mauris non malesuada eros. Phasellus id quam vel nulla placerat pharetra. Integer maximus mauris ut nulla aliquet gravida. Aenean id imperdiet ligula, at ullamcorper urna. Morbi a pellentesque augue. Morbi accumsan sodales varius. Donec a felis tellus. Nullam in venenatis massa. Ut sollicitudin aliquam velit id pulvinar.'),
(8, 2, 5, 'Curabitur mollis cursus turpis, non porttitor dui dignissim et. Vestibulum quis mauris vitae nunc dignissim euismod at eget massa. Nunc in iaculis dolor. Maecenas sodales nec leo sed egestas. Mauris ut ante leo. Nam in volutpat tortor, non aliquam justo. Donec semper, dui vitae interdum fermentum, ligula felis placerat justo, sit amet finibus nibh risus vitae leo. Nam congue purus et lectus faucibus, in ultricies lectus sagittis.'),
(9, 4, 5, 'Curabitur mollis cursus turpis, non porttitor dui dignissim et. Vestibulum quis mauris vitae nunc dignissim euismod at eget massa. Nunc in iaculis dolor. Maecenas sodales nec leo sed egestas. Mauris ut ante leo. Nam in volutpat tortor, non aliquam justo. Donec semper, dui vitae interdum fermentum, ligula felis placerat justo, sit amet finibus nibh risus vitae leo. Nam congue purus et lectus faucibus, in ultricies lectus sagittis.');

--
-- Beperkingen voor gedumpte tabellen
--

--
-- Beperkingen voor tabel `advertentie`
--
ALTER TABLE `advertentie`
  ADD CONSTRAINT `fk_advertentie_gebruiker` FOREIGN KEY (`idgebruiker`) REFERENCES `gebruiker` (`idgebruiker`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `reactie`
--
ALTER TABLE `reactie`
  ADD CONSTRAINT `fk_reactie_advertentie1` FOREIGN KEY (`idadvertentie`) REFERENCES `advertentie` (`idadvertentie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reactie_gebruiker1` FOREIGN KEY (`idgebruiker`) REFERENCES `gebruiker` (`idgebruiker`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
