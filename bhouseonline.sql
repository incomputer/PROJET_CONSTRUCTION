-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 26 avr. 2019 à 04:37
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bhouseonline`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat_location`
--

CREATE TABLE `achat_location` (
  `id_achat_location` int(11) NOT NULL,
  `nom_prenoms_achat` varchar(100) NOT NULL,
  `contact_achat` varchar(50) NOT NULL,
  `mail_achat` varchar(100) NOT NULL,
  `id_immobilier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `achat_location`
--

INSERT INTO `achat_location` (`id_achat_location`, `nom_prenoms_achat`, `contact_achat`, `mail_achat`, `id_immobilier`) VALUES
(1, 'Dion', 'Samake', 'dion@gmail.com', 8),
(2, 'zadi', '42833325', 'zadi@gmail.com', 8);

-- --------------------------------------------------------

--
-- Structure de la table `achat_vente`
--

CREATE TABLE `achat_vente` (
  `id_achat_vente` int(11) NOT NULL,
  `nom_prenoms_achat_vente` varchar(100) NOT NULL,
  `contact_achat_vente` varchar(100) NOT NULL,
  `mail_achat_vente` varchar(100) NOT NULL,
  `id_immobilier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `agent_immobilier`
--

CREATE TABLE `agent_immobilier` (
  `id_immobilier` int(11) NOT NULL,
  `nom_immobilier` varchar(100) NOT NULL,
  `prenom_immobilier` varchar(100) NOT NULL,
  `matricule_immobilier` varchar(100) NOT NULL,
  `attestation` varchar(50) NOT NULL,
  `id_achat_location` int(11) NOT NULL,
  `id_achat_vente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agent_immobilier`
--

INSERT INTO `agent_immobilier` (`id_immobilier`, `nom_immobilier`, `prenom_immobilier`, `matricule_immobilier`, `attestation`, `id_achat_location`, `id_achat_vente`) VALUES
(8, 'Dion', 'Ange', '09028708G', 'img_avatar3.png', 0, 0),
(9, 'Bamba', 'Ange', '111111A', 'img_avatar3.png', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `publier_location`
--

CREATE TABLE `publier_location` (
  `id_publier_location` int(11) NOT NULL,
  `publier_ville_location` varchar(100) NOT NULL,
  `publier_commune_location` varchar(100) NOT NULL,
  `publier_quartier_location` varchar(100) NOT NULL,
  `publier_nbrepiece_location` varchar(50) NOT NULL,
  `publier_montant_location` varchar(100) NOT NULL,
  `publier_image_location` varchar(100) NOT NULL,
  `id_immobilier` int(11) NOT NULL,
  `publier_etat_location` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `publier_location`
--

INSERT INTO `publier_location` (`id_publier_location`, `publier_ville_location`, `publier_commune_location`, `publier_quartier_location`, `publier_nbrepiece_location`, `publier_montant_location`, `publier_image_location`, `id_immobilier`, `publier_etat_location`) VALUES
(1, 'Abidjan', 'cocody', 'attoban', '6 pieces', '1.000.000FR', 'image4.jpg', 8, '0'),
(2, 'Abidjan', 'yopougon', 'andokoi', '5 pieces', '200.000.000FR', 'image2l.jpg', 8, '0'),
(3, '', 'trechville', 'chu', '10', '500.000.000FR', 'image1l.jpg', 8, '0'),
(4, '', 'marcory', 'anoumanbo', '10', '300.000.000FR', 'image5.jpg', 8, '0'),
(5, '', 'cocody', 'palmeraie', '10', '900.000.000FR', 'image3l.jpg', 8, '0'),
(6, '', 'cocody', 'attoban', '10', '200.000.000FR', 'logo.png', 8, '0');

-- --------------------------------------------------------

--
-- Structure de la table `publier_vente`
--

CREATE TABLE `publier_vente` (
  `id_publier_vente` int(11) NOT NULL,
  `publier_ville_vente` varchar(100) NOT NULL,
  `publier_commune_vente` varchar(100) NOT NULL,
  `publier_quartier_vente` varchar(100) NOT NULL,
  `publier_nbrepiece_vente` varchar(50) NOT NULL,
  `publier_montant_vente` varchar(100) NOT NULL,
  `publier_image_vente` varchar(100) NOT NULL,
  `id_immobilier` int(11) NOT NULL,
  `publier_etat_vente` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `publier_vente`
--

INSERT INTO `publier_vente` (`id_publier_vente`, `publier_ville_vente`, `publier_commune_vente`, `publier_quartier_vente`, `publier_nbrepiece_vente`, `publier_montant_vente`, `publier_image_vente`, `id_immobilier`, `publier_etat_vente`) VALUES
(1, 'abidjan', 'cocody', 'attoban', '5', '200.000.000FR', 'image1l.jpg', 8, '0');

-- --------------------------------------------------------

--
-- Structure de la table `rendez_vous`
--

CREATE TABLE `rendez_vous` (
  `id_nveau_immoblier` int(11) NOT NULL,
  `noms` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `heure` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rendez_vous`
--

INSERT INTO `rendez_vous` (`id_nveau_immoblier`, `noms`, `date`, `heure`) VALUES
(1, 'Dion', '2020-02-20', '10:10'),
(2, 'Dion', '2020-12-20', '10:10'),
(3, 'Ange', '0219-10-20', '10:30');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achat_location`
--
ALTER TABLE `achat_location`
  ADD PRIMARY KEY (`id_achat_location`),
  ADD KEY `id_immobilier` (`id_immobilier`);

--
-- Index pour la table `achat_vente`
--
ALTER TABLE `achat_vente`
  ADD PRIMARY KEY (`id_achat_vente`),
  ADD KEY `id_immobilier` (`id_immobilier`);

--
-- Index pour la table `agent_immobilier`
--
ALTER TABLE `agent_immobilier`
  ADD PRIMARY KEY (`id_immobilier`),
  ADD KEY `id_achat_location` (`id_achat_location`),
  ADD KEY `id_achat_vente` (`id_achat_vente`);

--
-- Index pour la table `publier_location`
--
ALTER TABLE `publier_location`
  ADD PRIMARY KEY (`id_publier_location`),
  ADD KEY `id_immobilier` (`id_immobilier`);

--
-- Index pour la table `publier_vente`
--
ALTER TABLE `publier_vente`
  ADD PRIMARY KEY (`id_publier_vente`),
  ADD KEY `id_immobilier` (`id_immobilier`);

--
-- Index pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD PRIMARY KEY (`id_nveau_immoblier`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achat_location`
--
ALTER TABLE `achat_location`
  MODIFY `id_achat_location` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `achat_vente`
--
ALTER TABLE `achat_vente`
  MODIFY `id_achat_vente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `agent_immobilier`
--
ALTER TABLE `agent_immobilier`
  MODIFY `id_immobilier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `publier_location`
--
ALTER TABLE `publier_location`
  MODIFY `id_publier_location` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `publier_vente`
--
ALTER TABLE `publier_vente`
  MODIFY `id_publier_vente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  MODIFY `id_nveau_immoblier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achat_location`
--
ALTER TABLE `achat_location`
  ADD CONSTRAINT `achat_location_ibfk_1` FOREIGN KEY (`id_immobilier`) REFERENCES `agent_immobilier` (`id_immobilier`);

--
-- Contraintes pour la table `achat_vente`
--
ALTER TABLE `achat_vente`
  ADD CONSTRAINT `achat_vente_ibfk_1` FOREIGN KEY (`id_immobilier`) REFERENCES `agent_immobilier` (`id_immobilier`);

--
-- Contraintes pour la table `publier_location`
--
ALTER TABLE `publier_location`
  ADD CONSTRAINT `publier_location_ibfk_1` FOREIGN KEY (`id_immobilier`) REFERENCES `agent_immobilier` (`id_immobilier`);

--
-- Contraintes pour la table `publier_vente`
--
ALTER TABLE `publier_vente`
  ADD CONSTRAINT `publier_vente_ibfk_1` FOREIGN KEY (`id_immobilier`) REFERENCES `agent_immobilier` (`id_immobilier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
