-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 11 août 2021 à 10:02
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `zanimo`
--
CREATE DATABASE IF NOT EXISTS `zanimo` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `zanimo`;

-- --------------------------------------------------------

--
-- Structure de la table `accueillir`
--

DROP TABLE IF EXISTS `accueillir`;
CREATE TABLE IF NOT EXISTS `accueillir` (
  `IdAnimal` int(11) NOT NULL,
  `idFamille` int(11) NOT NULL,
  `DateDebutAcc` date DEFAULT NULL,
  `DateFinAcc` date DEFAULT NULL,
  PRIMARY KEY (`IdAnimal`,`idFamille`),
  KEY `idFamille` (`idFamille`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `adoption`
--

DROP TABLE IF EXISTS `adoption`;
CREATE TABLE IF NOT EXISTS `adoption` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `DateAdop` date DEFAULT NULL,
  `IdUser` int(11) NOT NULL,
  `IdFamille` int(11) NOT NULL,
  `IdAnimal` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `IdUser` (`IdUser`),
  KEY `IdFamille` (`IdFamille`),
  KEY `IdAnimal` (`IdAnimal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Robe` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Etat` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Espece` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Poids` decimal(15,2) DEFAULT NULL,
  `DateDeNaissance` date DEFAULT NULL,
  `NumeroPuce` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IdUsers` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `IdUsers` (`IdUsers`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `DateEvenement` date DEFAULT NULL,
  `TypeEvenement` int(11) DEFAULT NULL,
  `NomEvenement` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IdAnimal` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `IdAnimal` (`IdAnimal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

DROP TABLE IF EXISTS `famille`;
CREATE TABLE IF NOT EXISTS `famille` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Num1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Num2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Adresse` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CodePostal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `passchange`
--

DROP TABLE IF EXISTS `passchange`;
CREATE TABLE IF NOT EXISTS `passchange` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Mail` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateUpdate` date DEFAULT NULL,
  `IdUsers` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `IdUsers` (`IdUsers`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `traitementspe`
--

DROP TABLE IF EXISTS `traitementspe`;
CREATE TABLE IF NOT EXISTS `traitementspe` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `DateTraitement` date DEFAULT NULL,
  `Maladie` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Symptome` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Traitement` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateTraitementSuivant` date DEFAULT NULL,
  `IdAnimal` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `IdAnimal` (`IdAnimal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Login` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Prenom` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateNaiss` date DEFAULT NULL,
  `IdProfession` int(11) NOT NULL,
  `IdUserType` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `IdProfession` (`IdProfession`),
  KEY `IdUserType` (`IdUserType`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `usertype`
--

DROP TABLE IF EXISTS `usertype`;
CREATE TABLE IF NOT EXISTS `usertype` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `TypeUser` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vaccination`
--

DROP TABLE IF EXISTS `vaccination`;
CREATE TABLE IF NOT EXISTS `vaccination` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `DateVaccination` date DEFAULT NULL,
  `ProduitUtilisee` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateRappelVac` date DEFAULT NULL,
  `IdUsers` int(11) NOT NULL,
  `IdAnimal` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `IdUsers` (`IdUsers`),
  KEY `IdAnimal` (`IdAnimal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `visiteveto`
--

DROP TABLE IF EXISTS `visiteveto`;
CREATE TABLE IF NOT EXISTS `visiteveto` (
  `Id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DateVeto` date DEFAULT NULL,
  `HeureVeto` time DEFAULT NULL,
  `Bilan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Montant` decimal(15,2) DEFAULT NULL,
  `IdAnimal` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `IdAnimal` (`IdAnimal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
