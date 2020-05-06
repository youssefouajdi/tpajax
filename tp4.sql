-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 06 mai 2020 à 23:38
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp4`
--

-- --------------------------------------------------------

--
-- Structure de la table `petitions`
--

CREATE TABLE `petitions` (
  `Titre` varchar(250) NOT NULL,
  `IDP` int(11) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `DatePublic` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `petitions`
--

INSERT INTO `petitions` (`Titre`, `IDP`, `Description`, `DatePublic`) VALUES
('salut', 1, 'cava', '1997-03-20'),
('salut', 2, 'cava', '2020-05-09'),
('cava', 3, 'sss', '2020-05-09'),
('salut', 4, 'cava', '2020-05-09');

-- --------------------------------------------------------

--
-- Structure de la table `signatures`
--

CREATE TABLE `signatures` (
  `IDS` int(11) NOT NULL,
  `IDP` int(200) NOT NULL,
  `Nom` varchar(250) NOT NULL,
  `Prenom` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Pays` varchar(250) NOT NULL,
  `Date` date NOT NULL,
  `Heure` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `signatures`
--

INSERT INTO `signatures` (`IDS`, `IDP`, `Nom`, `Prenom`, `Email`, `Pays`, `Date`, `Heure`) VALUES
(1, 1, 'efutg', 'eztryu', 'youssefouajdi1@gmail.com', 'maroc', '2020-05-15', '23:00:00'),
(2, 2, 'efutg', 'zfregr', 'youssefouajdi1@gmail.com', 'maroc', '2020-05-17', '00:59:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `petitions`
--
ALTER TABLE `petitions`
  ADD PRIMARY KEY (`IDP`);

--
-- Index pour la table `signatures`
--
ALTER TABLE `signatures`
  ADD PRIMARY KEY (`IDS`),
  ADD KEY `IDP` (`IDP`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `petitions`
--
ALTER TABLE `petitions`
  MODIFY `IDP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `signatures`
--
ALTER TABLE `signatures`
  MODIFY `IDS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
