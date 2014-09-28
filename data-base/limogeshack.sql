-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 28 Septembre 2014 à 20:15
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `limogeshack`
--

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE IF NOT EXISTS `equipe` (
  `idEquipe` int(11) NOT NULL AUTO_INCREMENT,
  `nomEquipe` varchar(255) NOT NULL,
  `dateCrea` datetime NOT NULL,
  PRIMARY KEY (`idEquipe`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `equipe`
--

INSERT INTO `equipe` (`idEquipe`, `nomEquipe`, `dateCrea`) VALUES
(1, 'Winner', '2014-09-28 12:00:33'),
(2, 'GameOne', '2014-09-28 12:18:45'),
(3, 'GameOne', '2014-09-28 12:31:23'),
(4, 'GameOne', '2014-09-28 13:55:54'),
(5, 'GameOne', '2014-09-28 13:58:46'),
(6, 'GameTwo', '2014-09-28 13:59:05'),
(7, 'GameThree', '2014-09-28 14:01:41'),
(8, 'Looser', '2014-09-28 15:44:23');

-- --------------------------------------------------------

--
-- Structure de la table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `idMail` int(11) NOT NULL AUTO_INCREMENT,
  `entete` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `adresseDest` varchar(255) NOT NULL,
  PRIMARY KEY (`idMail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `mail`
--

INSERT INTO `mail` (`idMail`, `entete`, `sujet`, `message`, `adresseDest`) VALUES
(1, 'From:Team Lim''Hack', 'Validation de l''inscription', 'c@gmail.com', 'Vous etes bien inscrit Ã  la lim''Hack'),
(2, 'From:Team Lim''Hack', 'Validation de l''inscription', 'c@gmail.com', 'Vous etes bien inscrit Ã  la lim''Hack'),
(3, 'From:Team Lim''Hack', 'Validation de l''inscription', 'c@gmail.com', 'Vous etes bien inscrit Ã  la lim''Hack'),
(4, 'From:Team Lim''Hack', 'Validation de l''inscription', 'c@gmail.com', 'Vous etes bien inscrit Ã  la lim''Hack'),
(5, 'From:Team Lim''Hack', 'Validation de l''inscription', 'c@gmail.com', 'Vous etes bien inscrit Ã  la lim''Hack'),
(6, 'From:Team Lim''Hack', 'Validation de l''inscription', 'c@gmail.com', 'Vous etes bien inscrit Ã  la lim''Hack'),
(7, 'From:Team Lim''Hack', 'Validation de l''inscription', 'c@gmail.com', 'Vous etes bien inscrit Ã  la lim''Hack'),
(8, 'From:Team Lim''Hack', 'Validation de l''inscription', 'c@gmail.com', 'Vous etes bien inscrit Ã  la lim''Hack'),
(9, 'From:Team Lim''Hack', 'Validation de l''inscription', 'c@gmail.com', 'Vous etes bien inscrit Ã  la lim''Hack'),
(10, 'From:Team Lim''Hack', 'Validation de l''inscription', 'c@gmail.com', 'Vous etes bien inscrit Ã  la lim''Hack');

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE IF NOT EXISTS `participant` (
  `idParticipant` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `equipe` varchar(255) NOT NULL,
  `chefEquipe` tinyint(1) NOT NULL,
  `dateIncr` datetime NOT NULL,
  PRIMARY KEY (`idParticipant`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `participant`
--

INSERT INTO `participant` (`idParticipant`, `nom`, `prenom`, `mail`, `equipe`, `chefEquipe`, `dateIncr`) VALUES
(1, 'Courtin', 'Simon', 'c@gmail.com', '1', 0, '2014-09-28 12:00:33'),
(2, 'Garrelou', 'Simon', 'c@gmail.com', '1', 0, '2014-09-28 12:00:33'),
(3, 'Chargois', 'Corentin', 'c@gmail.com', '2', 0, '2014-09-28 12:18:45'),
(4, 'Duveau', 'Thomas', 'c@gmail.com', '2', 0, '2014-09-28 12:18:45'),
(5, 'Chargois', 'Corentin', 'c@gmail.com', '3', 0, '2014-09-28 12:31:23'),
(6, 'Duveau', 'Thomas', 'c@gmail.com', '3', 0, '2014-09-28 12:31:23'),
(7, 'Chargois', 'Corentin', 'c@gmail.com', '4', 0, '2014-09-28 13:55:54'),
(8, 'Duveau', 'Thomas', 'c@gmail.com', '4', 0, '2014-09-28 13:55:54'),
(9, 'Chargois', 'Corentin', 'c@gmail.com', '5', 0, '2014-09-28 13:58:46'),
(10, 'Duveau', 'Thomas', 'c@gmail.com', '5', 0, '2014-09-28 13:58:46'),
(11, 'Chargois', 'Corentin', 'c@gmail.com', '6', 0, '2014-09-28 13:59:05'),
(12, 'Duveau', 'Thomas', 'c@gmail.com', '6', 0, '2014-09-28 13:59:05'),
(13, 'Chargois', 'Corentin', 'c@gmail.com', '7', 0, '2014-09-28 14:01:41'),
(14, 'Duveau', 'Thomas', 'c@gmail.com', '7', 0, '2014-09-28 14:01:41'),
(15, 'Courtin', 'Simon', 'c@gmail.com', '8', 1, '2014-09-28 15:44:23'),
(16, 'Garrelou', 'Simon', 'c@gmail.com', '8', 0, '2014-09-28 15:44:23');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE IF NOT EXISTS `projet` (
  `idProjet` int(11) NOT NULL AUTO_INCREMENT,
  `nomProject` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `idEquipe` int(11) NOT NULL,
  `dateProject` datetime NOT NULL,
  PRIMARY KEY (`idProjet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`idProjet`, `nomProject`, `description`, `idEquipe`, `dateProject`) VALUES
(1, 'Lim''Hack', 'JournÃ©e de prog', 1, '2014-09-28 12:00:33'),
(2, 'Jeu vidÃ©o', 'Plateforme', 2, '2014-09-28 12:18:45'),
(3, 'Jeu vidÃ©o', 'Plateforme', 3, '2014-09-28 12:31:23'),
(4, 'Jeu vidÃ©o', 'Plateforme', 4, '2014-09-28 13:55:54'),
(5, 'Jeu vidÃ©o', 'Plateforme', 5, '2014-09-28 13:58:46'),
(6, 'Jeu vidÃ©o', 'Plateforme', 6, '2014-09-28 13:59:05'),
(7, 'Jeu vidÃ©o', 'Plateforme', 7, '2014-09-28 14:01:41'),
(8, 'Jeu vidÃ©o', 'test', 8, '2014-09-28 15:44:23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
