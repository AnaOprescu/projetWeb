-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 May 2016 la 21:52
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `erasmus`
--

-- --------------------------------------------------------

--
-- Structure of the table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `idCity` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `idCountry` int(11) NOT NULL,
  PRIMARY KEY (`idCity`),
  KEY `country_id` (`idCountry`),
  KEY `country_id_2` (`idCountry`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Save the attributs in table `city`
--

INSERT INTO `city` (`idCity`, `name`, `location`, `idCountry`) VALUES
(1, 'craiova', 'sud', 11);

-- --------------------------------------------------------

--
-- Structure of the table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `idCountry` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `capital` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `tips` varchar(255) NOT NULL,
  `phrases` varchar(255) NOT NULL,
  PRIMARY KEY (`idCountry`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Save the dates in table `country`
--

INSERT INTO `country` (`idCountry`, `name`, `capital`, `currency`, `language`, `tips`, `phrases`) VALUES
(11, 'Romania', 'Bucharest', '1 euro - 45 lei', 'romana', 'things are not very expensive', 'what''s up? - ce faci?');

--
-- trigger `country`
--
DROP TRIGGER IF EXISTS `delete_city_on_country`;
DELIMITER //
CREATE TRIGGER `delete_city_on_country` AFTER DELETE ON `country`
 FOR EACH ROW BEGIN 
DELETE FROM city 
WHERE idCountry=OLD.idCountry; 
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure of the table`do`
--

CREATE TABLE IF NOT EXISTS `do` (
  `id_Membre` int(11) NOT NULL,
  `id_Suggestion` int(11) NOT NULL,
  KEY `id_Membre` (`id_Membre`),
  KEY `id_Suggestion` (`id_Suggestion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure of the table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `idMembre` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `country_origin` varchar(255) NOT NULL,
  `city_origin` varchar(255) NOT NULL,
  `fb_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isadmin` enum('membre','admin') NOT NULL DEFAULT 'membre',
  `country_dest` varchar(255) NOT NULL,
  `city_dest` varchar(255) NOT NULL,
  PRIMARY KEY (`idMembre`),
  UNIQUE KEY `idMembre` (`idMembre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Saving the dates in `membre`
--

INSERT INTO `membre` (`idMembre`, `first_name`, `last_name`, `pseudo`, `country_origin`, `city_origin`, `fb_name`, `email`, `password`, `isadmin`, `country_dest`, `city_dest`) VALUES
(17, 'Ana', 'Maria', 'project', 'Romania', 'Bucharest', 'Ana', 'ana@mail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'France', 'Montpellier'),
(18, 'Stefan', 'Oprescu', 'fane', 'Romania', 'Pitesti', 'fane', 'fane@gmail.com', '901f85714216f4b3ad88acf34d39add6af3e3634', 'membre', 'only if you are already an erasmus', 'only if you are already an erasmus');

-- --------------------------------------------------------

--
-- Structure of the table `stay`
--

CREATE TABLE IF NOT EXISTS `stay` (
  `membre_id` int(11) NOT NULL,
  `id_country` int(11) NOT NULL,
  KEY `membre_id` (`membre_id`),
  KEY `id_country` (`id_country`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure of the table `suggestion`
--

CREATE TABLE IF NOT EXISTS `suggestion` (
  `idSuggestion` int(11) NOT NULL AUTO_INCREMENT,
  `country_suggestion` varchar(255) NOT NULL,
  `city_suggestion` varchar(255) NOT NULL,
  PRIMARY KEY (`idSuggestion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Saving the values in `suggestion`
--

INSERT INTO `suggestion` (`idSuggestion`, `country_suggestion`, `city_suggestion`) VALUES
(1, 'Belgia', 'Brugge'),
(2, 'Anglia', 'Londra'),
(6, 'romania', 'pitesti');

--
-- Trigger `suggestion`
--
DROP TRIGGER IF EXISTS `one_display`;
DELIMITER //
CREATE TRIGGER `one_display` BEFORE INSERT ON `suggestion`
 FOR EACH ROW begin
	if(new.city_suggestion IN (select suggestion.city_suggestion from suggestion)) then
		SIGNAL SQLSTATE '45000' set MESSAGE_TEXT = "Thanks! But this city has already been taken into consideration.";
	end if;
end
//
DELIMITER ;

--
-- Restrictii pentru tabele sterse
--

--
-- Constraints for `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`idCountry`) REFERENCES `country` (`idCountry`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for `do`
--
ALTER TABLE `do`
  ADD CONSTRAINT `key_suggestion` FOREIGN KEY (`id_Suggestion`) REFERENCES `suggestion` (`idSuggestion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `key_membre` FOREIGN KEY (`id_Membre`) REFERENCES `membre` (`idMembre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraint for `stay`
--
ALTER TABLE `stay`
  ADD CONSTRAINT `fk_country_stay` FOREIGN KEY (`id_country`) REFERENCES `country` (`idCountry`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_membre_stay` FOREIGN KEY (`membre_id`) REFERENCES `membre` (`idMembre`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
