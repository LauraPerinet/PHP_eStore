-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 13 Décembre 2017 à 16:17
-- Version du serveur :  5.6.35
-- Version de PHP :  5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_e-store-lpm`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img_url` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `img_url`) VALUES
(1, 'Pigments', 'pigments_category.jpg'),
(2, 'Vernis', 'varnish_category.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `Products`
--

CREATE TABLE IF NOT EXISTS `Products` (
  `id` int(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `img_url` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `id_category` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Products`
--

INSERT INTO `Products` (`id`, `name`, `img_url`, `price`, `description`, `id_category`) VALUES
(1, 'Bleu lavande', 'pigment_bleu_lavande.jpg', 4.9, '100g package|Mineral Pigment on a natural base|Excellent UV stability|Suitable for all mediums|Lime and Cement Color Stable\r\n\r\n', 1),
(2, 'Oxyde de fer rouge', 'pigment_oxyde_de_fer_rouge.jpg', 3.85, '100g package|Formerly Known as “Red Iron Oxide”|Blue Undertone|A manufactured pigment|Excellent UV Stability|Suitable for all mediums|Lime and Cement Color Stable\r\n\r\n', 1),
(3, 'Bleu d''outremer', 'pigment_bleu.jpg', 6.95, '100g package|A Manufactured Pigment|Excellent UV Stability|Suitable for all mediums|Lime and Cement Color Stable when dry\r\n\r\n\r\n\r\n', 1),
(4, 'Ombre naturelle', 'pigment_oxyde_de_fer_rouge.jpg', 4.3, '100g package|A natural Earth Pigment|Permanent to UV|Suitable for all mediums|Lime and Cement Color Stable\r\n\r\n', 1),
(5, 'Vernis acrylique brillant', 'vernis_acrylique_brillant.jpg', 10.95, 'An interior water-based clear sealer|For table tops, counters and furniture|Abrasion resistant for heavy traffic uses|Apply with a poly-nylon brush\r\n\r\n', 2),
(6, 'Vernis acrylique mat', 'vernis_acrylique_mat.jpg', 10.95, 'Dead flat Water-based acrylic|For Walls, furniture, plasters|Excellent final coat for our Stonewashing Recipe!|Low VOC\r\n\r\n', 2),
(7, 'Gel acrylique', 'medium_gel_acrylique.jpg', 5.95, 'Lightweight, easy to use matte medium to mix with pigments\r\nUse it as a binder for powered pigments|Use to make an inexpensive, high viscosity thick matte paint|Makes an excellent glue for collage|Use as an extender, a ground or for impasto effects|Made from 100% acrylic polymer emulsion|Nontoxic, high viscosity medium with great adhesive abilities and forms a durable film when dry|Made in USA\r\n\r\n', 3),
(8, 'Huile de noix', 'medium_huile_de_noix.jpg', 6.95, 'New larger 8oz size!|Drying oil used both for woodworking and artist use|Preferred by woodworkers as a wiping oil for any surface that may be in contact with food|Cures to an impervious finish|Made in USA\r\n\r\n', 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `address` varchar(70) DEFAULT NULL,
  `postalCode` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstName`, `lastName`, `address`, `postalCode`, `city`, `admin`) VALUES
(8, 'test@test.fr', '098f6bcd4621d373cade4e832627b4f6', 'Test', 'Test', 'test', '00000', 'test', 0),
(9, 'test2@test.fr', '098f6bcd4621d373cade4e832627b4f6', 'test2', 'test2', 'test', 'test', 'test', 0),
(10, 'admin@admin.fr', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 'admin', 'admin', 'admin', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
