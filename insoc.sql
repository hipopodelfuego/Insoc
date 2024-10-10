-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 10 oct. 2024 à 16:38
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
  `parti_c` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `candidatures`
--

INSERT INTO `candidatures` (`id_c`, `nom_c`, `couleur_c`, `programme_c`, `parti_c`) VALUES
(1, 'Nathalie Arthaud', 'Extrême Gauche', 'css/pdf/arthaud.pdf', 'Lutte Ouvrière'),
(2, 'Nicolas Dupont-Aignan', 'Extrême Droite', 'css/pdf/dupont-aignan.pdf', 'Debout la France'),
(3, 'Anne Hidalgo', 'Centre Gauche', 'css/pdf/hidalgo.pdf', 'Parti Socialiste'),
(4, 'Yannick Jadot', 'Centre Gauche', 'css/pdf/jadot.pdf', 'Europe Écologie Les Verts'),
(5, 'Jean Lasalle', 'Extrême Droite', 'css/pdf/lasalle.pdf', 'La France Authentique'),
(6, 'Jean Lasalle', 'Centre Droite', 'css/pdf/lasalle.pdf', 'Résistons'),
(7, 'Emmanuel Macron', 'Droite', 'css/pdf/macron.pdf', 'Renaissance'),
(8, 'Jean-Luc Melenchon', 'Gauche', 'css/pdf/melenchon.pdf', 'La France Insoumise'),
(9, 'Valérie Pécresse', 'Droite', 'css/pdf/pecresse.pdf', 'Les Républicains'),
(10, 'Philippe Poutou', 'Extrême Gauche', 'css/pdf/poutou.pdf', 'Nouveau Parti Anticapitaliste'),
(11, 'Fabien Roussel', 'Gauche', 'css/pdf/roussel.pdf', 'Parti Communiste Français'),
(12, 'Éric Zemmour', 'Extrême Droite', 'css/pdf/zemmour.pdf', 'Reconquête');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
