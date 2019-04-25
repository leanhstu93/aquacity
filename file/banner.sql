-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Client: localhost:3306
-- Généré le: Mar 24 Mai 2016 à 21:25
-- Version du serveur: 5.5.45-cll-lve
-- Version de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `aermuaba_bds`
--

-- --------------------------------------------------------

--
-- Structure de la table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `TieuDe` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `UrlImage` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Link` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `SetHome` tinyint(1) DEFAULT NULL,
  `Active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `banner`
--

INSERT INTO `banner` (`id`, `TieuDe`, `UrlImage`, `Link`, `SetHome`, `Active`) VALUES
(1, 'VINHOMES GOLDEN RIVER', '/uploads/files/img754.jpg', '', 1, 1),
(2, 'bn1', '/uploads/files/img167.jpg', '#', 1, 1),
(3, 'bn2', '/uploads/images/vinhomes-golden-river.jpg', '', 1, 1),
(4, 'VINHOMES GOLDEN RIVER', '/uploads/files/img1404.jpg', '#', 1, 1),
(5, 'a', '/uploads/files/img1404.jpg', '', 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
