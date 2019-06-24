-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2019 at 09:53 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `physio`
--

-- --------------------------------------------------------

--
-- Table structure for table `exercice`
--

CREATE TABLE `exercice` (
  `ID` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `partie` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `IDcreateur` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exercice`
--

INSERT INTO `exercice` (`ID`, `nom`, `description`, `partie`, `type`, `IDcreateur`, `status`) VALUES
(1034, 'Epaule 1', 'Dos au mur, coude fléchi; pousser le coude contre le mur vers l\'arrierre.', NULL, NULL, NULL, NULL),
(1035, 'Épaule 2', 'Bras atteint appuyé au mur, coude fléchi; pousser le bras sur le côté contre le mur.', NULL, NULL, NULL, NULL),
(1036, 'Épaule 3', 'Paume de la mian et poignet appuyés sur le coin d\'un mur, coude fléchi; pousser la main contre le mur vers l\'intérieur en gardant le coude près du corps.', NULL, NULL, NULL, NULL),
(1037, 'Épaule 4', 'Dos de la main et poignet appuyés sur le coin d\'un mur, coude fléchi; pousser la main contre le mur vers l\'extérieur en gardant le coude près du corps.', NULL, NULL, NULL, NULL),
(1038, 'Épaule 5', 'Face au mur, le poing appuyé sur le mur, coude fléchi; pousser le poing contre le mur.', NULL, NULL, NULL, NULL),
(1039, 'Épaule 6', 'En position debout, le tronc fléchi et le bras sain en appui, effectuer avec le bras atteint des mouvements à la manière d\'un pendule.', NULL, NULL, NULL, NULL),
(1040, 'Épaule 7', 'Couché sur le dos, joindre les deux mains ensemble, le bras sain aidant à soulever le côté attain, amener les bras vers le haut et vers l\'arrière.', NULL, NULL, NULL, NULL),
(1041, 'Épaule 8', 'En position debout, tenir un bâton dans les mains devant soi. Soulever le bras attaint en l\'écartant vers le côté en vous aidant du bras sain.', NULL, NULL, NULL, NULL),
(1042, 'Épaule 9', 'Debout, la main du bras attain dans le bas du dos, en vous aidant d\'une serviette et du bras sain, monter le plus haut possible.', NULL, NULL, NULL, NULL),
(1043, 'Épaule10', 'Couché sur le dos, tenir un bâton dans les mains, coudes bien droits. Lever le bâton le plus haut possible au dessus de la tête.                                                                                                                          ', NULL, NULL, NULL, NULL),
(1044, 'Épaule 11', 'Debout, main du bras attaint dans le haut du dos, descendre vers le milieu du dos en s\'aidant d\'une serviette en du bras sain.', NULL, NULL, NULL, NULL),
(1045, 'Épaule 12', 'Faire grimper les doigts au mur de face.', NULL, NULL, NULL, NULL),
(1046, 'Épaule 13', 'Faire grimper les doigts au mur de côté.', NULL, NULL, NULL, NULL),
(1047, 'Épaule 14', 'Debout, prendre un bâton avec les deux main derrièer le bas du dos, le pousser vers l\'arrièere, sans se pencher vers l\'avant.', NULL, NULL, NULL, NULL),
(1048, 'Épaule 15', 'Couché sur le dos, lever la main au-dessus de la tête, coude fléchi. Redescendre graduellement le gras en essayant de le retenir à différentes positions.', NULL, NULL, NULL, NULL),
(1049, 'Épaule 16', 'Assis à une table, bras attain en avant, le glisser de l\'avant vers l\'arrière. Progresser en levant le bras au dessus de la table en prenant soin de l\'amener vers l\'avant en premier. On peut utiliser des oreillés.', NULL, NULL, NULL, NULL),
(1050, 'Épaule 17', 'Couché sur le dos, placer les mains sous la nuque, descendre les coudes de chaque côté.', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lignepro`
--

CREATE TABLE `lignepro` (
  `IDpro` int(11) NOT NULL,
  `place` int(11) NOT NULL,
  `IDexe` int(11) NOT NULL,
  `IDin` varchar(45) DEFAULT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `serie` int(11) DEFAULT NULL,
  `reps` int(11) DEFAULT NULL,
  `intensite` double DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `combine` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partage`
--

CREATE TABLE `partage` (
  `idenvoie` int(11) NOT NULL,
  `idrecue` int(11) NOT NULL,
  `idprogramme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partie`
--

CREATE TABLE `partie` (
  `nom` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partie`
--

INSERT INTO `partie` (`nom`) VALUES
('Épaule'),
('Genoux');

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `ID` int(11) NOT NULL,
  `IDutilisateur` int(11) DEFAULT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `dateDEBUT` date DEFAULT NULL,
  `dateFIN` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `nom` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `nom` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`nom`) VALUES
('Force'),
('Isometrie'),
('Postop'),
('Resistance');

-- --------------------------------------------------------

--
-- Table structure for table `unite`
--

CREATE TABLE `unite` (
  `nom` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercice`
--
ALTER TABLE `exercice`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_UNIQUE` (`ID`);

--
-- Indexes for table `lignepro`
--
ALTER TABLE `lignepro`
  ADD PRIMARY KEY (`place`,`IDpro`),
  ADD KEY `FK_programme_idx` (`IDpro`),
  ADD KEY `FK_exericice_idx` (`IDexe`);

--
-- Indexes for table `partage`
--
ALTER TABLE `partage`
  ADD PRIMARY KEY (`idenvoie`,`idrecue`,`idprogramme`),
  ADD KEY `FK_recue_idx` (`idrecue`),
  ADD KEY `FK_pro_idx` (`idprogramme`);

--
-- Indexes for table `partie`
--
ALTER TABLE `partie`
  ADD PRIMARY KEY (`nom`),
  ADD UNIQUE KEY `nom_UNIQUE` (`nom`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_UNIQUE` (`ID`),
  ADD KEY `FK_utilisatuer_idx` (`IDutilisateur`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`nom`),
  ADD UNIQUE KEY `nom_UNIQUE` (`nom`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`nom`),
  ADD UNIQUE KEY `nom_UNIQUE` (`nom`);

--
-- Indexes for table `unite`
--
ALTER TABLE `unite`
  ADD PRIMARY KEY (`nom`),
  ADD UNIQUE KEY `nom_UNIQUE` (`nom`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_UNIQUE` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exercice`
--
ALTER TABLE `exercice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1060;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lignepro`
--
ALTER TABLE `lignepro`
  ADD CONSTRAINT `FK_programme` FOREIGN KEY (`IDpro`) REFERENCES `programme` (`ID`);

--
-- Constraints for table `partage`
--
ALTER TABLE `partage`
  ADD CONSTRAINT `FK_envoie` FOREIGN KEY (`idenvoie`) REFERENCES `utilisateur` (`ID`),
  ADD CONSTRAINT `FK_pro` FOREIGN KEY (`idprogramme`) REFERENCES `programme` (`ID`),
  ADD CONSTRAINT `FK_recue` FOREIGN KEY (`idrecue`) REFERENCES `utilisateur` (`ID`);

--
-- Constraints for table `programme`
--
ALTER TABLE `programme`
  ADD CONSTRAINT `FK_utilisatuer` FOREIGN KEY (`IDutilisateur`) REFERENCES `utilisateur` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
