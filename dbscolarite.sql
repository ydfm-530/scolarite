-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Mer 17 Juin 2020 à 11:20
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `dbscolarite`
--

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE IF NOT EXISTS `eleve` (
  `matricule` varchar(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `classe` varchar(20) NOT NULL,
  `mta` decimal(6,2) NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `eleve`
--

INSERT INTO `eleve` (`matricule`, `nom`, `prenom`, `classe`, `mta`) VALUES
('elv1', 'THEODORE', 'ELVIS', '6eme', '180.00'),
('elv2', 'APRIL', 'JENESIS', '6eme', '180.00'),
('elv3', 'ALFRED', 'JUSTIN', '6eme', '180.00'),
('elv4', 'SERGE', 'ARIEL', '6eme', '180.00'),
('elv5', 'DENIS', 'FERDINAND', '6eme', '180.00'),
('elv6', 'DENISE', 'ALICE', '5eme', '180.00'),
('elv7', 'CHARLE', 'VICTOR', '5eme', '180.00');

-- --------------------------------------------------------

--
-- Structure de la table `paie`
--

CREATE TABLE IF NOT EXISTS `paie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ideleve` varchar(10) NOT NULL,
  `mois` varchar(20) NOT NULL,
  `mtp` decimal(6,2) DEFAULT NULL,
  `datep` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk1` (`ideleve`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=156 ;

--
-- Contenu de la table `paie`
--

INSERT INTO `paie` (`id`, `ideleve`, `mois`, `mtp`, `datep`) VALUES
(93, 'elv2', 'Octobre', '20.00', '2020-06-17'),
(94, 'elv2', 'Novembre', '20.00', '2020-06-17'),
(95, 'elv2', 'Decembre', '10.00', '2020-06-17'),
(96, 'elv2', 'Janvier', '0.00', '0000-00-00'),
(97, 'elv2', 'Fevrier', '0.00', '0000-00-00'),
(98, 'elv2', 'Mars', '0.00', '0000-00-00'),
(99, 'elv2', 'Avril', '0.00', '0000-00-00'),
(100, 'elv2', 'Mai', '0.00', '0000-00-00'),
(101, 'elv2', 'Juin', '0.00', '0000-00-00'),
(102, 'elv3', 'Octobre', '20.00', '2020-06-17'),
(103, 'elv3', 'Novembre', '20.00', '2020-06-17'),
(104, 'elv3', 'Decembre', '0.00', '0000-00-00'),
(105, 'elv3', 'Janvier', '0.00', '0000-00-00'),
(106, 'elv3', 'Fevrier', '0.00', '0000-00-00'),
(107, 'elv3', 'Mars', '0.00', '0000-00-00'),
(108, 'elv3', 'Avril', '0.00', '0000-00-00'),
(109, 'elv3', 'Mai', '0.00', '0000-00-00'),
(110, 'elv3', 'Juin', '0.00', '0000-00-00'),
(111, 'elv1', 'Octobre', '20.00', '2020-06-16'),
(112, 'elv1', 'Novembre', '20.00', '2020-06-16'),
(113, 'elv1', 'Decembre', '20.00', '2020-06-16'),
(114, 'elv1', 'Janvier', '20.00', '2020-06-17'),
(115, 'elv1', 'Fevrier', '20.00', '2020-06-17'),
(116, 'elv1', 'Mars', '20.00', '2020-06-17'),
(117, 'elv1', 'Avril', '20.00', '2020-06-17'),
(118, 'elv1', 'Mai', '20.00', '2020-06-17'),
(119, 'elv1', 'Juin', '20.00', '2020-06-17'),
(120, 'elv4', 'Octobre', '20.00', '2020-06-17'),
(121, 'elv4', 'Novembre', '20.00', '2020-06-17'),
(122, 'elv4', 'Decembre', '0.00', '0000-00-00'),
(123, 'elv4', 'Janvier', '0.00', '0000-00-00'),
(124, 'elv4', 'Fevrier', '0.00', '0000-00-00'),
(125, 'elv4', 'Mars', '0.00', '0000-00-00'),
(126, 'elv4', 'Avril', '0.00', '0000-00-00'),
(127, 'elv4', 'Mai', '0.00', '0000-00-00'),
(128, 'elv4', 'Juin', '0.00', '0000-00-00'),
(129, 'elv5', 'Octobre', '20.00', '2020-06-17'),
(130, 'elv5', 'Novembre', '20.00', '2020-06-17'),
(131, 'elv5', 'Decembre', '0.00', '0000-00-00'),
(132, 'elv5', 'Janvier', '0.00', '0000-00-00'),
(133, 'elv5', 'Fevrier', '0.00', '0000-00-00'),
(134, 'elv5', 'Mars', '0.00', '0000-00-00'),
(135, 'elv5', 'Avril', '0.00', '0000-00-00'),
(136, 'elv5', 'Mai', '0.00', '0000-00-00'),
(137, 'elv5', 'Juin', '0.00', '0000-00-00'),
(138, 'elv6', 'Octobre', '0.00', '0000-00-00'),
(139, 'elv6', 'Novembre', '0.00', '0000-00-00'),
(140, 'elv6', 'Decembre', '0.00', '0000-00-00'),
(141, 'elv6', 'Janvier', '0.00', '0000-00-00'),
(142, 'elv6', 'Fevrier', '0.00', '0000-00-00'),
(143, 'elv6', 'Mars', '0.00', '0000-00-00'),
(144, 'elv6', 'Avril', '0.00', '0000-00-00'),
(145, 'elv6', 'Mai', '0.00', '0000-00-00'),
(146, 'elv6', 'Juin', '0.00', '0000-00-00'),
(147, 'elv7', 'Octobre', '0.00', '0000-00-00'),
(148, 'elv7', 'Novembre', '0.00', '0000-00-00'),
(149, 'elv7', 'Decembre', '0.00', '0000-00-00'),
(150, 'elv7', 'Janvier', '0.00', '0000-00-00'),
(151, 'elv7', 'Fevrier', '0.00', '0000-00-00'),
(152, 'elv7', 'Mars', '0.00', '0000-00-00'),
(153, 'elv7', 'Avril', '0.00', '0000-00-00'),
(154, 'elv7', 'Mai', '0.00', '0000-00-00'),
(155, 'elv7', 'Juin', '0.00', '0000-00-00');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `paie`
--
ALTER TABLE `paie`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`ideleve`) REFERENCES `eleve` (`matricule`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
