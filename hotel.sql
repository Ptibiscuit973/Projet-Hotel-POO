-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 05 mars 2020 à 15:30
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE IF NOT EXISTS `chambre` (
  `numChambre` int(3) NOT NULL AUTO_INCREMENT,
  `prix` int(6) NOT NULL,
  `nbLits` int(1) NOT NULL,
  `nbPers` int(2) NOT NULL,
  `confort` text NOT NULL,
  `image` text NOT NULL,
  `description` varchar(1500) NOT NULL,
  PRIMARY KEY (`numChambre`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`numChambre`, `prix`, `nbLits`, `nbPers`, `confort`, `image`, `description`) VALUES
(1, 1500, 1, 2, 'luxe', 'chambre3.jpg', 'Le Lorem Ipsum est simplement du faux texte employÃ© dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\\\\\\'imprimerie depuis les annÃ©es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour rÃ©aliser un livre spÃ©cimen de polices de texte. Il n\\\\\\\'a pas fait que survivre cinq siÃ¨cles, mais s\\\\\\\'est aussi adaptÃ© Ã  la bureautique informatique, sans que son contenu n\\\\\\\'en soit modifiÃ©. Il a Ã©tÃ© popularisÃ© dans les annÃ©es 1960 grÃ¢ce Ã  la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus rÃ©cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.'),
(2, 1200, 1, 2, 'luxe', 'chambre2.jpg', 'Le Lorem Ipsum est simplement du faux texte employÃ© dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\\\\\\\\\\\\\\'imprimerie depuis les annÃ©es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour rÃ©aliser un livre spÃ©cimen de polices de texte. Il n\\\\\\\\\\\\\\\'a pas fait que survivre cinq siÃ¨cles, mais s\\\\\\\\\\\\\\\'est aussi adaptÃ© Ã  la bureautique informatique, sans que son contenu n\\\\\\\\\\\\\\\'en soit modifiÃ©. Il a Ã©tÃ© popularisÃ© dans les annÃ©es 1960 grÃ¢ce Ã  la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus rÃ©cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.'),
(12, 1800, 1, 2, 'luxe', 'chambre8.jpg', 'Le Lorem Ipsum est simplement du faux texte employÃ© dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\\'imprimerie depuis les annÃ©es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour rÃ©aliser un livre spÃ©cimen de polices de texte. Il n\\\'a pas fait que survivre cinq siÃ¨cles, mais s\\\'est aussi adaptÃ© Ã  la bureautique informatique, sans que son contenu n\\\'en soit modifiÃ©. Il a Ã©tÃ© popularisÃ© dans les annÃ©es 1960 grÃ¢ce Ã  la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus rÃ©cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.'),
(13, 1200, 1, 2, 'luxe', 'chambre6.jpg', 'Le Lorem Ipsum est simplement du faux texte employÃ© dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\\\\\\'imprimerie depuis les annÃ©es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour rÃ©aliser un livre spÃ©cimen de polices de texte. Il n\\\\\\\'a pas fait que survivre cinq siÃ¨cles, mais s\\\\\\\'est aussi adaptÃ© Ã  la bureautique informatique, sans que son contenu n\\\\\\\'en soit modifiÃ©. Il a Ã©tÃ© popularisÃ© dans les annÃ©es 1960 grÃ¢ce Ã  la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus rÃ©cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.'),
(14, 1400, 1, 2, 'luxe', 'chambre7.jpg', 'Le Lorem Ipsum est simplement du faux texte employÃ© dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\\\'imprimerie depuis les annÃ©es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour rÃ©aliser un livre spÃ©cimen de polices de texte. Il n\\\'a pas fait que survivre cinq siÃ¨cles, mais s\\\'est aussi adaptÃ© Ã  la bureautique informatique, sans que son contenu n\\\'en soit modifiÃ©. Il a Ã©tÃ© popularisÃ© dans les annÃ©es 1960 grÃ¢ce Ã  la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus rÃ©cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `numClient` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tel` int(10) NOT NULL,
  `adresse` varchar(150) NOT NULL,
  PRIMARY KEY (`numClient`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`numClient`, `nom`, `prenom`, `tel`, `adresse`) VALUES
(1, 'Durand', 'Georges', 102030405, '9 rue Marc Seguin'),
(2, 'Dupont', 'Martine', 908070605, '12 rue marc seguin'),
(3, 'Georges', 'Lucas', 102030405, '11 rue marc seguin');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `numClient` int(2) NOT NULL,
  `numChambre` int(2) NOT NULL,
  `dateArrivee` date NOT NULL,
  `dateDepart` date NOT NULL,
  PRIMARY KEY (`numClient`,`numChambre`),
  KEY `numChambre` (`numChambre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`numClient`, `numChambre`, `dateArrivee`, `dateDepart`) VALUES
(1, 1, '2020-04-01', '2020-04-10'),
(1, 2, '2020-03-01', '2020-03-03'),
(1, 12, '2020-03-04', '2020-03-05'),
(2, 1, '2020-03-05', '2020-03-07'),
(2, 2, '2020-03-24', '2020-03-29'),
(2, 12, '2020-03-04', '2020-03-05'),
(3, 12, '2020-03-18', '2020-03-25');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_util` int(4) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id_util`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_util`, `login`, `pass`, `role`) VALUES
(1, 'pers1', 'e7c76cc78b0c6ef1c59ead889cda1a89', '2'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1'),
(5, 'lulu', '654e4dc5b90b7478671fe6448cab3f32', '1');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`numChambre`) REFERENCES `chambre` (`numChambre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
