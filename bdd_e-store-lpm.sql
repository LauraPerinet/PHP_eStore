-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 26 Décembre 2017 à 14:54
-- Version du serveur :  5.6.37
-- Version de PHP :  5.6.31

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
  `name` varchar(40) NOT NULL,
  `img_url` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `img_url`) VALUES
(1, 'Pigments', 'pigments_category.jpg'),
(2, 'Varnish', 'varnish_category.jpg'),
(3, 'Mediums', 'mediums_category.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `img_url` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `id_category` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `name`, `img_url`, `price`, `description`, `id_category`) VALUES
(2, 'Acrylic Gloss Varnish', 'vernis_acrylique_brillant.jpg', 10.95, 'An interior water-based clear sealer|For table tops, counters and furniture|Abrasion resistant for heavy traffic uses|Apply with a poly-nylon brush\r\n\r\n', 2),
(3, 'Zero Gloss Varnish', 'vernis_acrylique_mat.jpg', 10.95, '\r\nDead flat Water-based acrylic|For Walls, furniture, plasters|Excellent final coat for our Stonewashing Recipe|Low VOC\r\n\r\n', 2),
(4, 'Gum Arabic', 'meduim_gomme_arabique.jpg', 6.95, 'From the species of Acacia senegal|Dissolve in hot water then strain for use as a medium in watercolor and gouache|1 part gum to 2 parts water|Made in India\r\n\r\n', 3),
(5, 'Acrylique Gel Medium', 'medium_gel_acrylique.jpg', 6.95, 'Lightweight, easy to use matte medium to mix with pigments|Use it as a binder for powered pigments|Use to make an inexpensive, high viscosity thick matte paint|Makes an excellent glue for collage|Use as an extender, a ground or for impasto effects|Made from 100% acrylic polymer emulsion|Nontoxic, high viscosity medium with great adhesive abilities and forms a durable film when dry|Made in USA\r\n\r\n', 3),
(6, 'Dammar Resin', 'medium_resine_de_dammar.jpg', 6.95, 'A natural resin traditionally used as a medium and varnish|Combine with beeswax in Encaustic painting to harden and add gloss|Renewable resource|Made in India\r\n\r\n', 3),
(7, 'Roman Beeswax Plaster Cream', 'vernis_creme_de_cire_abeilles.jpg', 12.95, 'Creamy, easy to apply sealer for any type of plaster|Provides breathable, moderate protection against water and grease marK5|Enhances the color of tinted plasters|Can be tinted using any of our pigment colors for beautiful effects|Makes a great sealer for matte paints like Milk and Chalk paints|Made in USA\r\n\r\n', 2),
(8, 'Roman Beeswax Polish', 'vernis_cire_abeilles.jpg', 24.95, 'Non-yellowing, neutral paste wax|High grade white beeswax offers exceptional clarity for all woodwork|Polishes and protects without harsh solvents, only the light sweet smell of beeswax|Use alone or mix with our pigments to create a wax of any color|Zero VOC, hypoallergenic, safe for children''s toys, furniture and rooms|Made with only Food Contact Safe ingredients|Made in USA\r\n\r\n', 2),
(9, 'Burnt Sienna', 'pigment_terre_de_sienne_brulee.jpg', 4.86, 'A natural Earth Pigment|Permanent to UV|Suitable for all mediums|Lime and Cement Color Stable\r\n\r\n', 1),
(10, 'Pistachio Green', 'pigment_vert_pistache.jpg', 8.14, 'Mineral Pigment on a natural base|Excellent UV stability|Suitable for all mediums|Lime and Cement Color Stable\r\n\r\n', 1),
(11, 'Turquoise Green', 'pigment_vert_turquoise.jpg', 6.79, 'Mineral Pigment on a natural base|Excellent UV stability|Suitable for all mediums|Lime and Cement Color Stable\r\n\r\n', 1),
(12, 'Lavender Blue', 'pigment_bleu_lavande.jpg', 4.92, 'Mineral Pigment on a natural base|Excellent UV stability|Suitable for all mediums|Lime and Cement Color Stable\r\n\r\n', 1),
(13, 'Rose Wood', 'pigment_rose_wood.jpg', 8.08, 'Mineral Pigment on a natural base|Excellent UV stability|Suitable for all mediums|Lime and Cement Color Stable\r\n\r\n', 1),
(14, 'Red Iron Oxide-Y', 'pigment_oxyde_de_fer_rouge.jpg', 3.83, 'Yellow Undertone|A manufactured pigment|Excellent UV Stability|Suitable for all mediums|Lime and Cement Color Stable\r\n\r\n', 1),
(15, 'Ultramarine Blue', 'pigment_bleu.jpg', 6.96, 'Mineral Pigment on a natural base|Excellent UV stability|Suitable for all mediums|Lime and Cement Color Stable\r\n\r\n', 1),
(16, 'Natural Umber', 'pigment_ombre_naturelle.jpg', 4.29, 'Mineral Pigment on a natural base|Excellent UV stability|Suitable for all mediums|Lime and Cement Color Stable\r\n\r\n', 1),
(17, 'Rose Earth', 'pigment_terre_rose.jpg', 5.02, 'Mineral Pigment on a natural base|Excellent UV stability|Suitable for all mediums|Lime and Cement Color Stable\r\n\r\n', 1),
(18, 'Ultramarine Rose', 'pigment_ultramarine_rose.jpg', 13, 'Manufactured color|Good UV Stability|Suitable for all mediums except Fresco|Not Lime or Cement Color Stable\r\n\r\n', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(80) NOT NULL,
  `city` varchar(40) NOT NULL,
  `postalCode` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `address`, `city`, `postalCode`, `password`, `admin`) VALUES
(19, 'Torototo', 'titi', 'toto@toto.fr', '35, rue de Toto', 'Totoville', '10001', 'f71dbe52628a3f83a77ab494817525c6', 0),
(23, 'Laura', 'PM', 'laura@laura.fr', '55, rue de la liberte', 'Conflans', '78700', '680e89809965ec41e64dc7e447f175ab', 0),
(29, 'grgfdf', 'gfdgdf', 'gdfg@fdgd', 'gdg', 'admin', 'gdgdf', '1a1dc91c907325c69271ddf0c944bc72', 0),
(30, 'md5', 'md5', 'md5@md5.fr', 'md5', 'md5', 'md5', '1bc29b36f623ba82aaf6724fd3b16718', 0),
(31, 'test vide', '', 'gdr@fgrg.com', 'gerg', 'jkg', 'kj', 'db12df55ad7ae4259314081ec719bb69', 0),
(32, 'test vide 2', '', 'gtrr@greqlj.com', 'iuiuy', 'klhkk', 'jkh', '10b4bdd0ceef3f1f16a5bf391f02ddb3', 0),
(33, 'sterter', '', 'trete@rek.com', 'jkhk', 'hjk', 'hjkh', '93f903b0425b684cf8bdbee4951883ed', 0),
(34, 'Admin', 'Admin', 'admin@admin.fr', 'adminRoad', 'AdminVille', '1413914', 'd41d8cd98f00b204e9800998ecf8427e', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
