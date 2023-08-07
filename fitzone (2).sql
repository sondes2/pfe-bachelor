-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 23 mai 2019 à 00:02
-- Version du serveur :  5.7.21
-- Version de PHP :  7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fitzone`
--

-- --------------------------------------------------------

--
-- Structure de la table `aliments`
--

DROP TABLE IF EXISTS `aliments`;
CREATE TABLE IF NOT EXISTS `aliments` (
  `idA` int(11) NOT NULL AUTO_INCREMENT,
  `nameA` varchar(255) NOT NULL,
  `descriptionA` varchar(255) NOT NULL,
  `kcal` float NOT NULL,
  `kJ` float NOT NULL,
  `fibre` varchar(255) NOT NULL,
  PRIMARY KEY (`idA`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `calendars`
--

DROP TABLE IF EXISTS `calendars`;
CREATE TABLE IF NOT EXISTS `calendars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `StartDate` datetime NOT NULL,
  `EndDate` datetime NOT NULL,
  `Description` text NOT NULL,
  `Type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `calendars`
--

INSERT INTO `calendars` (`id`, `Title`, `StartDate`, `EndDate`, `Description`, `Type`) VALUES
(1, 'bbhh', '2019-04-02 00:00:00', '2019-04-03 00:00:00', 'ghhjjj', 'kjdns'),
(2, 'rgfd', '2019-04-16 00:00:00', '2019-04-13 00:00:00', 'ffedg', 'gggs'),
(3, 'aaa', '2019-04-09 00:00:00', '2019-04-09 00:00:00', 'aaa', 'aaaa'),
(4, 'aaa', '2019-04-09 00:00:00', '2019-04-10 00:00:00', 'aaa', 'aaaa'),
(5, 'aaa', '2019-04-15 00:00:00', '2019-04-16 00:00:00', 'aaaa', 'aaaa'),
(6, 'aaa', '2019-04-19 00:00:00', '2019-04-20 00:00:00', 'aaaaa', 'aaaa'),
(7, 'aaa', '2019-04-19 00:00:00', '2019-04-20 00:00:00', 'aaaaa', 'aaaa'),
(8, 'bbhh', '2019-04-19 00:00:00', '2019-04-20 00:00:00', 'ffedg', 'dsjvxlsv'),
(9, 'bbhh', '2019-04-19 12:08:00', '2019-04-20 00:00:00', 'ffedg', 'dsjvxlsv'),
(10, 'rgfd', '2019-04-19 12:23:00', '2019-04-19 13:23:00', 'sq', 'dcq'),
(11, 'refref', '2019-05-23 11:11:00', '2019-05-23 20:00:00', 'grtggdfg', 'fdgdfdf');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `idCatg` int(11) NOT NULL AUTO_INCREMENT,
  `nameCatg` varchar(255) NOT NULL,
  PRIMARY KEY (`idCatg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `challenge_participants`
--

DROP TABLE IF EXISTS `challenge_participants`;
CREATE TABLE IF NOT EXISTS `challenge_participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_challenge` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_challenge`,`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `challenge_participants`
--

INSERT INTO `challenge_participants` (`id`, `id_challenge`, `id_user`) VALUES
(1, 2, 9),
(7, 5, 9),
(10, 2, 23);

-- --------------------------------------------------------

--
-- Structure de la table `challengs`
--

DROP TABLE IF EXISTS `challengs`;
CREATE TABLE IF NOT EXISTS `challengs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `description` varchar(255) NOT NULL,
  `startDate` date NOT NULL,
  `image` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `challengs`
--

INSERT INTO `challengs` (`id`, `title`, `description`, `startDate`, `image`) VALUES
(1, 'title eveent 1x', 'description event 1x', '2019-05-23', 1),
(2, 'title eveent 2', 'description event 2', '2019-05-22', 1),
(3, 'tst', 'teef', '2019-05-10', 0),
(5, 'aaaa', 'aaa', '1111-11-11', 5);

-- --------------------------------------------------------

--
-- Structure de la table `exercise`
--

DROP TABLE IF EXISTS `exercise`;
CREATE TABLE IF NOT EXISTS `exercise` (
  `codeEx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`codeEx`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `exercise`
--

INSERT INTO `exercise` (`codeEx`, `name`, `type`) VALUES
(1, 'ytut', 'rtreyey'),
(2, 'dgdfgFDHFH', 'FHGFH');

-- --------------------------------------------------------

--
-- Structure de la table `exercises`
--

DROP TABLE IF EXISTS `exercises`;
CREATE TABLE IF NOT EXISTS `exercises` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mfrom` int(11) NOT NULL,
  `mto` int(11) NOT NULL,
  `msg` text NOT NULL,
  `datetime` datetime NOT NULL,
  `vu` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `mfrom`, `mto`, `msg`, `datetime`, `vu`) VALUES
(1, 23, 9, 'httzhrazthr', '2019-05-16 00:00:00', 0),
(2, 23, 9, 'httzhrazthrzefezfezf', '2019-05-14 00:00:00', 0),
(3, 22, 9, 'httzhrazthrzefezfezf', '2019-05-14 00:00:00', 0),
(4, 9, 23, 'httzhrazthrzefezfezf', '2019-05-14 00:00:00', 0),
(5, 23, 9, 'httzhrazthrzefezfezf', '2019-05-14 00:00:00', 0),
(6, 9, 22, 'yo', '2019-05-14 00:00:00', 0),
(7, 22, 9, 'salem', '2019-05-14 00:00:00', 0),
(8, 9, 23, 'tssssssssssssssstttttttttttttttt aaaaaaaaa', '2019-05-14 00:00:00', 0),
(9, 9, 23, 'tesssssssssssstttttttttt', '2019-05-14 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 3),
(13, '2014_10_12_100000_create_password_resets_table', 3),
(6, '2019_04_02_115130_create_exercises_table', 2),
(7, '2019_04_03_173635_add_roles_to_users_table', 2),
(8, '2019_04_04_103350_add_to_calendars_table', 2),
(14, '2019_04_04_140811_add_validation_to_users_table', 4),
(15, '2019_04_15_140252_add_bmi_to_personalinformations_table', 5),
(16, '2019_04_17_184819_delete_to_personalinformations_table', 6);

-- --------------------------------------------------------

--
-- Structure de la table `minerals`
--

DROP TABLE IF EXISTS `minerals`;
CREATE TABLE IF NOT EXISTS `minerals` (
  `idM` int(11) NOT NULL AUTO_INCREMENT,
  `nameM` varchar(255) NOT NULL,
  PRIMARY KEY (`idM`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `nutritionprograms`
--

DROP TABLE IF EXISTS `nutritionprograms`;
CREATE TABLE IF NOT EXISTS `nutritionprograms` (
  `idPn` int(11) NOT NULL AUTO_INCREMENT,
  `nbHsleep` int(11) NOT NULL,
  `workType` varchar(250) NOT NULL,
  `goals` varchar(250) NOT NULL,
  `kilos` varchar(250) NOT NULL,
  `ndD` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`idPn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personalinformations`
--

DROP TABLE IF EXISTS `personalinformations`;
CREATE TABLE IF NOT EXISTS `personalinformations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `height` float NOT NULL,
  `weight` int(11) NOT NULL,
  `dateU` date NOT NULL,
  `bmi` double(8,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personalinformations`
--

INSERT INTO `personalinformations` (`id`, `id_user`, `height`, `weight`, `dateU`, `bmi`) VALUES
(1, 9, 12.5, 80, '2019-04-10', 20.40),
(2, 23, 165, 80, '2019-04-10', 20.44),
(3, 9, 1.6, 80, '2019-04-10', 20.40),
(4, 9, 1.68, 80, '2019-04-12', 28.34),
(5, 9, 1.5, 70, '2019-04-12', 31.11),
(6, 9, 5, 8, '2019-05-09', 0.32),
(7, 9, 5, 84, '2019-05-10', 3.36),
(8, 9, 5, 8, '2019-05-17', 0.32);

-- --------------------------------------------------------

--
-- Structure de la table `trainingprograms`
--

DROP TABLE IF EXISTS `trainingprograms`;
CREATE TABLE IF NOT EXISTS `trainingprograms` (
  `idPt` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `goals` varchar(255) NOT NULL,
  `difficulty` varchar(255) NOT NULL,
  `nbDW` int(11) NOT NULL,
  `nbR` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(100) NOT NULL,
  PRIMARY KEY (`idPt`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `trainingprograms`
--

INSERT INTO `trainingprograms` (`idPt`, `name`, `description`, `goals`, `difficulty`, `nbDW`, `nbR`, `image`, `video`) VALUES
('1', 'Training name', 'Training Description', 'Welfare', 'Beginner', 5, 20, '1', 'Zqk2MF71qyY'),
('2', 'Training name', 'Training Description', 'Welfare', 'Beginner', 7, 60, '2', 'Zqk2MF71qyY');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'User',
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'User',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthDate` date NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('user','trainer','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `valid` tinyint(1) NOT NULL DEFAULT '0',
  `specialty` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `email`, `password`, `adress`, `birthDate`, `image`, `remember_token`, `created_at`, `updated_at`, `role`, `valid`, `specialty`) VALUES
(9, 'Samixt', 'admin', 'Admin', 'admin@admin.com', '$2y$10$VO8Gn1SIkKDAabDbipPeB.QkU/LgHjXXAoQE.UCf6D.NO3rDMIlmO', 'tunis', '2019-04-02', '9', 'D5s9he9YT4t2kdUkcJtb1vPdFKX2Cr4DEyEcOkC3ZfMd2Ioi5vGAQ5Hl6NrF', '2019-04-03 22:00:00', '2019-05-17 13:37:39', 'admin', 1, 'cardio'),
(23, 'Roua Chattixx', 'User', 'Userr', 'user@user.com', '$2y$10$VO8Gn1SIkKDAabDbipPeB.QkU/LgHjXXAoQE.UCf6D.NO3rDMIlmO', 'hibnpl$m', '2019-04-20', 'user', NULL, '2019-04-17 22:54:40', '2019-05-22 19:47:15', 'user', 1, 'danse'),
(22, 'sondes Maazoul', 'User', 'Users', 'sondes123@gmailcom', '123matgyhjkù', 'djerba', '1974-06-13', 'user', NULL, '2019-04-17 22:04:55', '2019-04-17 22:04:55', 'trainer', 0, 'danse classique'),
(24, 'name namex', 'User', 'User', 'peter@hotmailcom', '123456', 'ariena', '2000-07-14', 'user', NULL, '2019-04-18 10:13:46', '2019-05-22 19:36:51', 'user', 1, 'Force'),
(31, 'samia', 'User', 'User', 'samia@gmail.com', '123456m', 'Tunis', '2019-04-19', 'user', NULL, '2019-04-18 15:14:32', '2019-04-18 15:14:32', 'user', 1, 'danse'),
(32, 'hanen', 'User', 'User', 'hanen@gmail.com', '12345612', 'djerba', '2019-04-07', 'user', NULL, '2019-04-19 07:54:06', '2019-04-19 07:54:06', 'user', 1, 'danse'),
(33, 'ali', 'ezfzef', 'ezfzef', 'bilelbho94@gmail.com', '$2y$10$5cc0vweQqh8nNBDLfcsXD.Xs3UjGI0Gak9QiYsye7siajzXrSguUi', 'a', '2019-05-17', 'user', NULL, '2019-05-17 15:21:45', '2019-05-17 15:21:45', 'user', 1, 'zefzf'),
(34, 'az', 'zefze', 'ht', 'bilelbho9x4@gmail.com', '$2y$10$qnPWn9SQjNy.n/40i0QbXeaz7eqchZDM4pfbMdDH.9FZLgYd89fhK', 'kikuik', '2019-05-16', 'user', NULL, '2019-05-17 15:56:23', '2019-05-17 15:56:23', 'trainer', 1, 'zefzf'),
(35, 'défzefzef', 'zefze', 'ezfzef', 'bilelbeho94@gmail.com', '$2y$10$BuGokKPPCNSUrr6N8aZOw.0B5RCJgcrSQHT6ykyj2ioMOKrKClz9a', 'Centre Nawres, Mag 1 Bis.les berges du lac', '2019-05-31', 'user', NULL, '2019-05-17 16:02:24', '2019-05-17 16:02:24', 'trainer', 2, 'zefzf'),
(36, 'ghzef', 'aaaaaa', 'bbbbbbbb', 'bilelbbbbb4@bbbgmail.com', '$2y$10$XghvOD9j8tcr4p7qNZi50Otz.nMLlcDJAZ/Fg41WbShZ42gruqiDu', 'Centre Nawres, Mag 1 Bis.les berges du lac', '2019-05-31', 'user', NULL, '2019-05-17 16:03:50', '2019-05-17 16:03:50', 'trainer', 1, 'zefzf'),
(37, 'aaaaaaaa', 'bbbbbbbbbb', 'bbbbbbbbb', 'bb@gmail.com', '$2y$10$aBcBUvltUWIO7QAgr4DKGOjNRSLFidAR7gDxKrym.aHfdCvLg0Bl2', 'Centre Nawres, Mag 1 Bis.les berges du lac', '2019-05-19', 'user', NULL, '2019-05-17 16:07:03', '2019-05-17 16:07:03', 'trainer', 3, 'zefzf'),
(38, 'test', 'tastfirst', 'lasttest', 'email@eeee.com', '$2y$10$i/nSPkHpIB6aRP/tR6Bh9O1cnjX4OlLk/eDdn0UiPYqLVNUI4bgTC', 'adr', '2019-05-22', '38', NULL, '2019-05-22 14:13:01', '2019-05-22 14:13:01', 'user', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `vitamines`
--

DROP TABLE IF EXISTS `vitamines`;
CREATE TABLE IF NOT EXISTS `vitamines` (
  `idV` int(11) NOT NULL,
  `nomV` varchar(255) NOT NULL,
  PRIMARY KEY (`idV`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
