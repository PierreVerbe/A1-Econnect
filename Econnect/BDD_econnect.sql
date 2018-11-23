-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 19 nov. 2018 à 10:41
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `econnect_v2`
--

-- --------------------------------------------------------

--
-- Structure de la table `actionneur`
--

DROP TABLE IF EXISTS `actionneur`;
CREATE TABLE IF NOT EXISTS `actionneur` (
  `ID_Actionneur` int(11) NOT NULL AUTO_INCREMENT,
  `Numero_serie` varchar(128) COLLATE utf8_bin NOT NULL,
  `ID_Piece` int(11) NOT NULL,
  `Date_actuelle` datetime NOT NULL,
  PRIMARY KEY (`ID_Actionneur`),
  KEY `ID_Piece` (`ID_Piece`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

DROP TABLE IF EXISTS `capteur`;
CREATE TABLE IF NOT EXISTS `capteur` (
  `ID_Capteur` int(11) NOT NULL AUTO_INCREMENT,
  `Numero_serie` varchar(128) COLLATE utf8_bin NOT NULL,
  `ID_Piece` int(11) NOT NULL,
  PRIMARY KEY (`ID_Capteur`),
  KEY `ID_Piece` (`ID_Piece`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

DROP TABLE IF EXISTS `connexion`;
CREATE TABLE IF NOT EXISTS `connexion` (
  `ID_Connexion` int(11) NOT NULL AUTO_INCREMENT,
  `ID_User` int(11) NOT NULL,
  `Date_connexion` datetime NOT NULL,
  PRIMARY KEY (`ID_Connexion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `donnees`
--

DROP TABLE IF EXISTS `donnees`;
CREATE TABLE IF NOT EXISTS `donnees` (
  `ID_DATA` bigint(20) NOT NULL AUTO_INCREMENT,
  `Valeur` decimal(6,2) DEFAULT NULL,
  `Unite_mesure` varchar(128) COLLATE utf8_bin NOT NULL,
  `Date_actuelle` datetime NOT NULL,
  PRIMARY KEY (`ID_DATA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `ID_Facture` int(11) NOT NULL AUTO_INCREMENT,
  `Date_facture` date NOT NULL,
  `Consommation` decimal(6,2) NOT NULL,
  `Prix` decimal(6,2) NOT NULL,
  `ID_Maison` int(11) NOT NULL,
  PRIMARY KEY (`ID_Facture`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

DROP TABLE IF EXISTS `maison`;
CREATE TABLE IF NOT EXISTS `maison` (
  `ID_Maison` int(11) NOT NULL AUTO_INCREMENT,
  `Mode_maison` varchar(128) COLLATE utf8_bin NOT NULL,
  `Numero` int(11) NOT NULL,
  `Rue` varchar(128) COLLATE utf8_bin NOT NULL,
  `Ville` varchar(128) COLLATE utf8_bin NOT NULL,
  `Code_postal` varchar(128) COLLATE utf8_bin NOT NULL,
  `Pays` varchar(128) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID_Maison`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `ID_Message` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Ticket` int(11) NOT NULL,
  `Date_message` datetime NOT NULL,
  `Piece_jointe` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `Contenu` varchar(3000) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID_Message`),
  KEY `ID_Ticket` (`ID_Ticket`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

DROP TABLE IF EXISTS `piece`;
CREATE TABLE IF NOT EXISTS `piece` (
  `ID_Piece` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Maison` int(11) NOT NULL,
  PRIMARY KEY (`ID_Piece`),
  KEY `ID_Maison` (`ID_Maison`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `ID_Ticket` int(11) NOT NULL AUTO_INCREMENT,
  `Objet` varchar(300) COLLATE utf8_bin NOT NULL,
  `Status` varchar(128) COLLATE utf8_bin NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Date_ticket` datetime NOT NULL,
  PRIMARY KEY (`ID_Ticket`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `type_maison`
--

DROP TABLE IF EXISTS `type_maison`;
CREATE TABLE IF NOT EXISTS `type_maison` (
  `ID_Maison` int(11) NOT NULL,
  `Type_maison` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `type_piece`
--

DROP TABLE IF EXISTS `type_piece`;
CREATE TABLE IF NOT EXISTS `type_piece` (
  `ID_Piece` int(11) NOT NULL,
  `Type_piece` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `user_maison`
--

DROP TABLE IF EXISTS `user_maison`;
CREATE TABLE IF NOT EXISTS `user_maison` (
  `ID_Possession` int(11) NOT NULL AUTO_INCREMENT,
  `ID_User` int(11) NOT NULL,
  `ID_Maison` int(11) NOT NULL,
  PRIMARY KEY (`ID_Possession`),
  KEY `ID_Maison` (`ID_Maison`),
  KEY `ID_User` (`ID_User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `user_piece`
--

DROP TABLE IF EXISTS `user_piece`;
CREATE TABLE IF NOT EXISTS `user_piece` (
  `ID_User_piece` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Piece` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  PRIMARY KEY (`ID_User_piece`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID_User` int(11) NOT NULL AUTO_INCREMENT,
  `User_type` varchar(128) COLLATE utf8_bin NOT NULL,
  `Nom` varchar(128) COLLATE utf8_bin NOT NULL,
  `Prenom` varchar(128) COLLATE utf8_bin NOT NULL,
  `Adresse_email` varchar(128) COLLATE utf8_bin NOT NULL,
  `Mot_de_passe` varchar(128) COLLATE utf8_bin NOT NULL,
  `Telephone` varchar(128) COLLATE utf8_bin NOT NULL,
  `Date_naissance` date NOT NULL,
  `Debut_abo` date NOT NULL,
  `Fin_abo` date NOT NULL,
  PRIMARY KEY (`ID_User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actionneur`
--
ALTER TABLE `actionneur`
  ADD CONSTRAINT `actionneur_ibfk_1` FOREIGN KEY (`ID_Piece`) REFERENCES `piece` (`ID_Piece`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD CONSTRAINT `capteur_ibfk_1` FOREIGN KEY (`ID_Piece`) REFERENCES `piece` (`ID_Piece`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`ID_Ticket`) REFERENCES `ticket` (`ID_Ticket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `piece`
--
ALTER TABLE `piece`
  ADD CONSTRAINT `piece_ibfk_1` FOREIGN KEY (`ID_Maison`) REFERENCES `maison` (`ID_Maison`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `user_maison`
--
ALTER TABLE `user_maison`
  ADD CONSTRAINT `user_maison_ibfk_1` FOREIGN KEY (`ID_Maison`) REFERENCES `maison` (`ID_Maison`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_maison_ibfk_2` FOREIGN KEY (`ID_User`) REFERENCES `utilisateur` (`ID_User`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
