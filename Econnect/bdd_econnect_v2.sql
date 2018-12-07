-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2018 at 09:51 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdd_econnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `actionneur`
--

CREATE TABLE `actionneur` (
  `ID_Actionneur` int(11) NOT NULL,
  `Numero_serie` varchar(128) COLLATE utf8_bin NOT NULL,
  `ID_Piece` int(11) NOT NULL,
  `Date_actuelle` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `capteur`
--

CREATE TABLE `capteur` (
  `ID_Capteur` int(11) NOT NULL,
  `Numero_serie` varchar(128) COLLATE utf8_bin NOT NULL,
  `ID_Piece` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `connexion`
--

CREATE TABLE `connexion` (
  `ID_Connexion` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Date_connexion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `donnees`
--

CREATE TABLE `donnees` (
  `ID_DATA` bigint(20) NOT NULL,
  `Valeur` decimal(6,2) DEFAULT NULL,
  `Unite_mesure` varchar(128) COLLATE utf8_bin NOT NULL,
  `Date_actuelle` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `facture`
--

CREATE TABLE `facture` (
  `ID_Facture` int(11) NOT NULL,
  `Date_facture` date NOT NULL,
  `Consommation` decimal(6,2) NOT NULL,
  `Prix` decimal(6,2) NOT NULL,
  `ID_Maison` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `maison`
--

CREATE TABLE `maison` (
  `ID_Maison` int(11) NOT NULL,
  `Mode_maison` varchar(128) COLLATE utf8_bin NOT NULL,
  `Numero` int(11) NOT NULL,
  `Rue` varchar(128) COLLATE utf8_bin NOT NULL,
  `Ville` varchar(128) COLLATE utf8_bin NOT NULL,
  `Code_postal` varchar(128) COLLATE utf8_bin NOT NULL,
  `Pays` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID_Message` int(11) NOT NULL,
  `ID_Ticket` int(11) NOT NULL,
  `Date_message` datetime NOT NULL,
  `Piece_jointe` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `Contenu` varchar(3000) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `piece`
--

CREATE TABLE `piece` (
  `ID_Piece` int(11) NOT NULL,
  `ID_Maison` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ID_Ticket` int(11) NOT NULL,
  `Objet` varchar(300) COLLATE utf8_bin NOT NULL,
  `Status` varchar(128) COLLATE utf8_bin NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Date_ticket` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `type_maison`
--

CREATE TABLE `type_maison` (
  `ID_Maison` int(11) NOT NULL,
  `Type_maison` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `type_piece`
--

CREATE TABLE `type_piece` (
  `ID_Piece` int(11) NOT NULL,
  `Type_piece` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_maison`
--

CREATE TABLE `user_maison` (
  `ID_Possession` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `ID_Maison` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_piece`
--

CREATE TABLE `user_piece` (
  `ID_User_piece` int(11) NOT NULL,
  `ID_Piece` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID_User` int(11) NOT NULL,
  `Nom` varchar(128) COLLATE utf8_bin NOT NULL,
  `Prenom` varchar(128) COLLATE utf8_bin NOT NULL,
  `Adresse_email` varchar(128) COLLATE utf8_bin NOT NULL,
  `Mot_de_passe` varchar(128) COLLATE utf8_bin NOT NULL,
  `Telephone` varchar(128) COLLATE utf8_bin NOT NULL,
  `Date_naissance` date NOT NULL,
  `Debut_abo` date NOT NULL,
  `Fin_abo` date NOT NULL,
  `User_type` enum('user','admin') COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actionneur`
--
ALTER TABLE `actionneur`
  ADD PRIMARY KEY (`ID_Actionneur`),
  ADD KEY `ID_Piece` (`ID_Piece`);

--
-- Indexes for table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`ID_Capteur`),
  ADD KEY `ID_Piece` (`ID_Piece`);

--
-- Indexes for table `connexion`
--
ALTER TABLE `connexion`
  ADD PRIMARY KEY (`ID_Connexion`);

--
-- Indexes for table `donnees`
--
ALTER TABLE `donnees`
  ADD PRIMARY KEY (`ID_DATA`);

--
-- Indexes for table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`ID_Facture`);

--
-- Indexes for table `maison`
--
ALTER TABLE `maison`
  ADD PRIMARY KEY (`ID_Maison`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID_Message`),
  ADD KEY `ID_Ticket` (`ID_Ticket`);

--
-- Indexes for table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`ID_Piece`),
  ADD KEY `ID_Maison` (`ID_Maison`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ID_Ticket`);

--
-- Indexes for table `user_maison`
--
ALTER TABLE `user_maison`
  ADD PRIMARY KEY (`ID_Possession`),
  ADD KEY `ID_Maison` (`ID_Maison`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Indexes for table `user_piece`
--
ALTER TABLE `user_piece`
  ADD PRIMARY KEY (`ID_User_piece`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actionneur`
--
ALTER TABLE `actionneur`
  MODIFY `ID_Actionneur` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `capteur`
--
ALTER TABLE `capteur`
  MODIFY `ID_Capteur` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `connexion`
--
ALTER TABLE `connexion`
  MODIFY `ID_Connexion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `donnees`
--
ALTER TABLE `donnees`
  MODIFY `ID_DATA` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `facture`
--
ALTER TABLE `facture`
  MODIFY `ID_Facture` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `maison`
--
ALTER TABLE `maison`
  MODIFY `ID_Maison` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID_Message` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `piece`
--
ALTER TABLE `piece`
  MODIFY `ID_Piece` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ID_Ticket` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_maison`
--
ALTER TABLE `user_maison`
  MODIFY `ID_Possession` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_piece`
--
ALTER TABLE `user_piece`
  MODIFY `ID_User_piece` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`ID_Ticket`) REFERENCES `ticket` (`ID_Ticket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `piece`
--
ALTER TABLE `piece`
  ADD CONSTRAINT `piece_ibfk_1` FOREIGN KEY (`ID_Maison`) REFERENCES `maison` (`ID_Maison`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_maison`
--
ALTER TABLE `user_maison`
  ADD CONSTRAINT `user_maison_ibfk_1` FOREIGN KEY (`ID_Maison`) REFERENCES `maison` (`ID_Maison`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_maison_ibfk_2` FOREIGN KEY (`ID_User`) REFERENCES `utilisateur` (`ID_User`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
