-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 13 Décembre 2015 à 15:18
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projet_tut`
--

-- --------------------------------------------------------

--
-- Structure de la table `connection`
--

CREATE TABLE IF NOT EXISTS `connection` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pseudo` varchar(20) NOT NULL,
  `Password` text NOT NULL,
  PRIMARY KEY (`idClient`),
  UNIQUE KEY `Email` (`Email`,`Pseudo`),
  UNIQUE KEY `idClient` (`idClient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `connection`
--

INSERT INTO `connection` (`idClient`, `Nom`, `Prenom`, `Email`, `Pseudo`, `Password`) VALUES
(1, 'HERVY', 'Quentin', 'projet_tut@gmail.com', 'Altashy', 'mdp'),
(2, 'Utilisateur', 'User', 'user@gmail.com', 'Vous', 'votre mot de passe');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
