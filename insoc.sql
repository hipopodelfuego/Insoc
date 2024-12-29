-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 29 déc. 2024 à 12:12
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `insoc`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidatures`
--

DROP TABLE IF EXISTS `candidatures`;
CREATE TABLE IF NOT EXISTS `candidatures` (
  `id_c` int NOT NULL AUTO_INCREMENT,
  `nom_c` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `couleur_c` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `programme_c` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `affiche_c` varchar(100) NOT NULL,
  `parti_c` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `candidatures`
--

INSERT INTO `candidatures` (`id_c`, `nom_c`, `couleur_c`, `programme_c`, `affiche_c`, `parti_c`) VALUES
(1, 'Nathalie Arthaud', 'Extrême Gauche', 'css/pdf/arthaud.pdf', 'css/img/affiches/arthaud.png', 'Lutte Ouvrière'),
(2, 'Nicolas Dupont-Aignan', 'Extrême Droite', 'css/pdf/dupont-aignan.pdf', 'css/img/affiches/dupont-aignan.png', 'Debout la France'),
(3, 'Anne Hidalgo', 'Centre Gauche', 'css/pdf/hidalgo.pdf', 'css/img/affiches/hidalgo.png', 'Parti Socialiste'),
(4, 'Yannick Jadot', 'Centre Gauche', 'css/pdf/jadot.pdf', 'css/img/affiches/jadot.png', 'Europe Écologie Les Verts'),
(5, 'Jean Lasalle', 'Extrême Droite', 'css/pdf/lasalle.pdf', 'css/img/affiches/lasalle.png', 'La France Authentique'),
(7, 'Emmanuel Macron', 'Droite', 'css/pdf/macron.pdf', 'css/img/affiches/macron.png', 'Renaissance'),
(8, 'Jean-Luc Melenchon', 'Gauche', 'css/pdf/melenchon.pdf', 'css/img/affiches/melenchon.png', 'La France Insoumise'),
(9, 'Valérie Pécresse', 'Droite', 'css/pdf/pecresse.pdf', 'css/img/affiches/pecresse.png', 'Les Républicains'),
(10, 'Philippe Poutou', 'Extrême Gauche', 'css/pdf/poutou.pdf', 'css/img/affiches/poutou.png', 'Nouveau Parti Anticapitaliste'),
(11, 'Fabien Roussel', 'Gauche', 'css/pdf/roussel.pdf', 'css/img/affiches/roussel.png', 'Parti Communiste Français'),
(12, 'Éric Zemmour', 'Extrême Droite', 'css/pdf/zemmour.pdf', 'css/img/affiches/zemmour.png', 'Reconquête');

-- --------------------------------------------------------

--
-- Structure de la table `elections`
--

DROP TABLE IF EXISTS `elections`;
CREATE TABLE IF NOT EXISTS `elections` (
  `id_e` int NOT NULL AUTO_INCREMENT,
  `nom_e` varchar(30) NOT NULL,
  `date_e` datetime NOT NULL,
  `type_e` varchar(30) NOT NULL,
  PRIMARY KEY (`id_e`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_u` int NOT NULL AUTO_INCREMENT,
  `email_u` varchar(50) NOT NULL,
  `nom_u` varchar(50) NOT NULL,
  `prenom_u` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_u`, `email_u`, `nom_u`, `prenom_u`, `password`) VALUES
(4, 'dvailland@hotmail.com', 'Vailland', 'Damien', '$2y$10$9HL5D7jTPQ7XF9DB/oRNruS9hIUzUu3izAh641GxT6Pm4NwAqI9nu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
