-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 27 déc. 2018 à 14:38
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `actionneur`
--

INSERT INTO `actionneur` (`ID_Actionneur`, `Numero_serie`, `ID_Piece`, `Date_actuelle`) VALUES
(1, '3021478', 1, '2018-12-21 11:56:00'),
(2, '3021479', 2, '2018-12-21 11:56:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`ID_Capteur`, `Numero_serie`, `ID_Piece`) VALUES
(1, '302145', 1),
(2, '302145', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`ID_Connexion`, `ID_User`, `Date_connexion`) VALUES
(1, 1, '2018-01-02 00:00:00'),
(2, 1, '2018-01-05 00:00:00'),
(3, 2, '2018-01-10 00:00:00'),
(4, 2, '2018-01-02 00:00:00'),
(5, 3, '2018-01-14 00:00:00'),
(6, 3, '2018-02-12 00:00:00'),
(7, 4, '2018-02-22 00:00:00'),
(8, 4, '2018-03-02 00:00:00'),
(9, 1, '2018-04-02 00:00:00'),
(10, 3, '2018-05-02 00:00:00'),
(11, 4, '2018-06-02 00:00:00'),
(12, 1, '2018-12-04 00:00:00'),
(13, 1, '2018-12-04 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`ID_Facture`, `Date_facture`, `Consommation`, `Prix`, `ID_Maison`) VALUES
(1, '2018-12-18', '95.00', '120.00', 1),
(2, '2019-01-18', '88.00', '90.00', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `maison`
--

INSERT INTO `maison` (`ID_Maison`, `Mode_maison`, `Numero`, `Rue`, `Ville`, `Code_postal`, `Pays`) VALUES
(1, 'Eco', 11, 'rue de la ville', 'Paris', '75015', 'France'),
(2, 'Confort', 13, 'rue de l\'école', 'Marseille', '13002', 'France'),
(3, 'Confort', 45, 'Avenue des Lauriers', 'Paris', '75018', 'France'),
(4, 'Eco', 12, 'Impasse des Capucines', 'Paris', '75002', 'France'),
(5, 'Confort', 3, 'Rue du Général Leclerc', 'Issy-les-Moulineaux', '92130', 'France'),
(6, 'Eco', 10, 'rue de la République', 'Marseille', '13005', 'France'),
(7, 'Hibernation', 5, 'rue Emile Zola', 'Lyon', '69001', 'France');

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
  `Contenu` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID_Message`),
  KEY `ID_Ticket` (`ID_Ticket`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`ID_Message`, `ID_Ticket`, `Date_message`, `Piece_jointe`, `Contenu`) VALUES
(1, 1, '2018-12-25 00:00:00', 'Photo.jpg', 'Bonjour,\r\n\r\nTest ticket SAV .\r\nJoyeux Noël et joyeux anniversaire\r\n\r\nEh mercé d\'avance.'),
(2, 2, '2018-12-26 00:00:00', 'photo.jpg', 'Bonjour,\r\n\r\nProblème actionneur volet fenêtre salon.\r\n\r\nBonne journée.'),
(6, 1, '2018-12-26 15:01:03', NULL, 'Wesh');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`ID_Piece`, `ID_Maison`) VALUES
(1, 1),
(2, 1);

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
  `ID_Maison` int(11) NOT NULL,
  `Date_ticket` datetime NOT NULL,
  PRIMARY KEY (`ID_Ticket`),
  KEY `ID_Maison` (`ID_Maison`),
  KEY `ID_User` (`ID_User`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `ticket`
--

INSERT INTO `ticket` (`ID_Ticket`, `Objet`, `Status`, `ID_User`, `ID_Maison`, `Date_ticket`) VALUES
(1, 'Problème capteur', 'En cours', 1, 1, '2018-12-23 16:32:00'),
(2, 'Problème Actionneur', 'Terminé', 1, 1, '2018-12-22 10:12:00');

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

--
-- Déchargement des données de la table `type_piece`
--

INSERT INTO `type_piece` (`ID_Piece`, `Type_piece`) VALUES
(1, 'Cuisine'),
(2, 'Salon');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `user_maison`
--

INSERT INTO `user_maison` (`ID_Possession`, `ID_User`, `ID_Maison`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 3, 3),
(4, 3, 4),
(5, 3, 5),
(6, 4, 6),
(7, 5, 7);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_User`, `User_type`, `Nom`, `Prenom`, `Adresse_email`, `Mot_de_passe`, `Telephone`, `Date_naissance`, `Debut_abo`, `Fin_abo`) VALUES
(1, 'Client', 'Grana', 'Pablo', 'pablo.grana@isep.fr', 'mdp12345', '0676877850', '1998-05-24', '2018-12-04', '2019-01-04'),
(2, 'Client', 'Verbe', 'Pierre', 'pierre.verbe@isep.fr', 'mdp4597', '0678458785', '1998-02-16', '2018-12-26', '2019-01-23'),
(3, 'Client', 'Kaveh', 'Nina', 'nina.kaveh@isep.fr', '123456789', '0687895412', '1998-02-17', '2018-12-27', '2019-12-27'),
(4, 'Client', 'Kettou', 'Yanis', 'yanis.kettou@isep.fr', '7894587sfeg*', '0797479878', '1998-05-04', '2018-12-06', '2019-12-06'),
(5, 'Client', 'Léa', 'Verhanege', 'lea.verhanaege@isep.fr', 'eegreggù$*884df', '0798478750', '1998-02-12', '2018-12-05', '2019-12-05');

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
-- Contraintes pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`ID_Maison`) REFERENCES `maison` (`ID_Maison`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`ID_User`) REFERENCES `utilisateur` (`ID_User`) ON DELETE CASCADE ON UPDATE CASCADE;

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
