-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 11 mai 2023 à 10:38
-- Version du serveur : 5.7.23-23
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `utdtdnmy_WPLVM`
--

-- --------------------------------------------------------

--
-- Structure de la table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `user` text COLLATE utf8_unicode_ci NOT NULL,
  `titre` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `video` text COLLATE utf8_unicode_ci NOT NULL,
  `ad_group` text COLLATE utf8_unicode_ci NOT NULL,
  `requested_views` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `ads`
--

INSERT INTO `ads` (`id`, `user`, `titre`, `description`, `image`, `link`, `video`, `ad_group`, `requested_views`, `views`) VALUES
(3, 'Guest', 'Swimi', 'Gourde Ecologique', 'ads/pub_0.jpeg', 'http://www.swimi.co', 'Erreur', '', 1000, 11),
(4, 'Guest', 'Swimi', 'Gourde Ecologique', 'ads/pub_1.jpeg', 'https://www.swimi.co', 'Erreur', '', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ads_feedback`
--

CREATE TABLE `ads_feedback` (
  `id` int(11) NOT NULL,
  `pub` int(11) NOT NULL,
  `feedback` text COLLATE utf8_unicode_ci NOT NULL,
  `user` int(11) NOT NULL,
  `ip` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_city` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_region` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_country` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_countrycode` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_regionname` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_loc` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_zip` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_isp` text COLLATE utf8_unicode_ci NOT NULL,
  `date` text COLLATE utf8_unicode_ci NOT NULL,
  `time` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `ads_feedback`
--

INSERT INTO `ads_feedback` (`id`, `pub`, `feedback`, `user`, `ip`, `gps_city`, `gps_region`, `gps_country`, `gps_countrycode`, `gps_regionname`, `gps_loc`, `gps_zip`, `gps_isp`, `date`, `time`) VALUES
(1, 3, 'hzhzhz', 0, '105.111.250.58', 'Blida', '09', 'Algeria', 'DZ', 'Blida', '36.5312,3.0698', '09000', 'Algerie Telecom', '31-03-2023', '10:41');

-- --------------------------------------------------------

--
-- Structure de la table `ads_interests`
--

CREATE TABLE `ads_interests` (
  `id` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ads_viewers`
--

CREATE TABLE `ads_viewers` (
  `id` int(11) NOT NULL,
  `user` text COLLATE utf8_unicode_ci NOT NULL,
  `ad_id` int(11) NOT NULL,
  `taxi` text COLLATE utf8_unicode_ci NOT NULL,
  `ip` text COLLATE utf8_unicode_ci NOT NULL,
  `city` text COLLATE utf8_unicode_ci NOT NULL,
  `region` text COLLATE utf8_unicode_ci NOT NULL,
  `country` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_countrycode` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_loc` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_regionname` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_zip` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_isp` text COLLATE utf8_unicode_ci NOT NULL,
  `date` text COLLATE utf8_unicode_ci NOT NULL,
  `time` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `ads_viewers`
--

INSERT INTO `ads_viewers` (`id`, `user`, `ad_id`, `taxi`, `ip`, `city`, `region`, `country`, `gps_countrycode`, `gps_loc`, `gps_regionname`, `gps_zip`, `gps_isp`, `date`, `time`) VALUES
(1, 'Guest', 3, '', '78.194.144.138', 'Paris', 'IDF', 'France', 'FR', '48.8323,2.4075', 'Île-de-France', '75016', 'Free SAS', '31-03-2023', '09:59:00'),
(2, 'Guest', 3, '', '78.194.144.138', 'Paris', 'IDF', 'France', 'FR', '48.8323,2.4075', 'Île-de-France', '75016', 'Free SAS', '31-03-2023', '09:59:45'),
(3, 'Guest', 3, '', '78.194.144.138', 'Paris', 'IDF', 'France', 'FR', '48.8323,2.4075', 'Île-de-France', '75016', 'Free SAS', '31-03-2023', '10:00:09'),
(4, 'Guest', 1, '', '105.111.250.58', 'Blida', '09', 'Algeria', 'DZ', '36.5312,3.0698', 'Blida', '09000', 'Algerie Telecom', '31-03-2023', '10:40:28'),
(5, 'Guest', 3, '', '105.111.250.58', 'Blida', '09', 'Algeria', 'DZ', '36.5312,3.0698', 'Blida', '09000', 'Algerie Telecom', '31-03-2023', '10:41:30'),
(6, 'Guest', 3, '', '78.194.144.138', 'Paris', 'IDF', 'France', 'FR', '48.8323,2.4075', 'Île-de-France', '75016', 'Free SAS', '31-03-2023', '10:55:26'),
(7, 'Guest', 3, '', '104.28.42.17', 'Paris', 'IDF', 'France', 'FR', '48.8323,2.4075', 'Île-de-France', '75001', 'Cloudflare, Inc.', '31-03-2023', '10:56:34'),
(8, 'Guest', 3, '', '104.28.42.17', 'Paris', 'IDF', 'France', 'FR', '48.8323,2.4075', 'Île-de-France', '75001', 'Cloudflare, Inc.', '31-03-2023', '10:56:34'),
(9, 'Guest', 3, '', '194.177.52.232', 'Paris', 'IDF', 'France', 'FR', '48.8323,2.4075', 'Île-de-France', '75020', 'Waycom International SASU', '27-04-2023', '18:54:06'),
(10, 'Guest', 3, '', '194.177.52.233', 'Paris', 'IDF', 'France', 'FR', '48.8323,2.4075', 'Île-de-France', '75020', 'Waycom International SASU', '04-05-2023', '16:10:07'),
(11, 'Guest', 3, '', '194.177.52.233', 'Paris', 'IDF', 'France', 'FR', '48.8323,2.4075', 'Île-de-France', '75020', 'Waycom International SASU', '04-05-2023', '16:10:28'),
(12, 'Guest', 3, '', '58.65.220.121', 'Faisalabad', 'PB', 'Pakistan', 'PK', '31.3709,73.0336', 'Punjab', '38000', 'Cyber Internet Services Pakistan', '11-05-2023', '10:10:40');

-- --------------------------------------------------------

--
-- Structure de la table `business`
--

CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `company` text COLLATE utf8_unicode_ci NOT NULL,
  `owner` text COLLATE utf8_unicode_ci NOT NULL,
  `town` text COLLATE utf8_unicode_ci NOT NULL,
  `industry` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `tel` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `matricule` text COLLATE utf8_unicode_ci NOT NULL,
  `ip` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_city` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_region` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_country` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_loc` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_countrycode` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_regionname` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_zip` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_isp` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `business`
--

INSERT INTO `business` (`id`, `company`, `owner`, `town`, `industry`, `address`, `tel`, `email`, `password`, `matricule`, `ip`, `gps_city`, `gps_region`, `gps_country`, `gps_loc`, `gps_countrycode`, `gps_regionname`, `gps_zip`, `gps_isp`) VALUES
(1, 'lowxyd', 'd', 'Parisd', '1', '158 rue de Saussured', '0766145238', 'HH@hotmail.com', '123456', 'T9L9O', '78.194.144.138', 'Paris', 'IDF', 'France', '48.8323,2.4075', 'FR', 'Île-de-France', '75016', 'Free SAS'),
(2, 'z', 'z', 'z', '1', 'z', 'z', 'non@test.com', '123456', 'KE64C', '78.194.144.138', 'Paris', 'IDF', 'France', '48.8323,2.4075', 'FR', 'Île-de-France', '75016', 'Free SAS');

-- --------------------------------------------------------

--
-- Structure de la table `gestion`
--

CREATE TABLE `gestion` (
  `admin_passcode` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `ads_params` int(11) NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `tel` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `gestion`
--

INSERT INTO `gestion` (`admin_passcode`, `title`, `ads_params`, `email`, `tel`) VALUES
('123456', 'LOWXY - Le Géo-Quiz sur ta ville', 100, 'admin@lowxy.fr', '+33 (888) 561 796');

-- --------------------------------------------------------

--
-- Structure de la table `global_stats`
--

CREATE TABLE `global_stats` (
  `id` int(11) NOT NULL,
  `session` text COLLATE utf8_unicode_ci NOT NULL,
  `ip` text COLLATE utf8_unicode_ci NOT NULL,
  `country` text COLLATE utf8_unicode_ci NOT NULL,
  `region` text COLLATE utf8_unicode_ci NOT NULL,
  `region_name` text COLLATE utf8_unicode_ci NOT NULL,
  `city` text COLLATE utf8_unicode_ci NOT NULL,
  `loc` text COLLATE utf8_unicode_ci NOT NULL,
  `countrycode` text COLLATE utf8_unicode_ci NOT NULL,
  `zip` text COLLATE utf8_unicode_ci NOT NULL,
  `isp` text COLLATE utf8_unicode_ci NOT NULL,
  `date` text COLLATE utf8_unicode_ci NOT NULL,
  `time` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `global_stats`
--

INSERT INTO `global_stats` (`id`, `session`, `ip`, `country`, `region`, `region_name`, `city`, `loc`, `countrycode`, `zip`, `isp`, `date`, `time`) VALUES
(1, '8a0e34c1d07516ce0f9d7cbe337b222d', '129.45.45.47', 'Algeria', '16', 'Algiers', 'Kouba', '36.7239,3.0905', 'DZ', '16006', 'Optimum Telecom Algeria Maintainer', '26-03-2023', '16:49'),
(7, '1982833fb88f97488406f34399b984b3', '78.194.144.138', 'France', 'IDF', 'Île-de-France', 'Paris', '48.8323,2.4075', 'FR', '75016', 'Free SAS', '26-03-2023', '17:12'),
(9, 'f27c2fb1da18fe7615d59bcb788f8319', '78.194.144.138', 'France', 'IDF', 'Île-de-France', 'Paris', '48.8323,2.4075', 'FR', '75016', 'Free SAS', '26-03-2023', '17:18'),
(10, '1982833fb88f97488406f34399b984b3', '78.194.144.138', 'France', 'IDF', 'Île-de-France', 'Paris', '48.8323,2.4075', 'FR', '75016', 'Free SAS', '26-03-2023', '17:20'),
(11, '1d7a6e56a4169fe7fc853f7e1a3d9af5', '129.45.41.179', 'Algeria', '44', 'Aïn Defla', 'El Abadia', '36.2695,1.68609', 'DZ', '44006', 'Optimum Telecom Algeria Maintainer', '26-03-2023', '19:26'),
(12, '3d1ec282977fb9021b61cefdb15855f5', '129.45.46.163', 'Algeria', '42', 'Tipaza', 'Kolea', '36.6389,2.76845', 'DZ', '42003', 'Optimum Telecom Algeria Maintainer', '27-03-2023', '09:31'),
(13, '0221d4d43eedda43eea5198e49bdd029', '154.121.81.78', 'Algeria', '16', 'Algiers', 'Algiers', '36.7405,3.1159', 'DZ', '16000', 'Algerie Telecom Mobile MOBILIS', '28-03-2023', '14:50'),
(14, '687db3162bf8e5f3fd96686a0ae416f1', '78.194.144.138', 'France', 'IDF', 'Île-de-France', 'Paris', '48.8323,2.4075', 'FR', '75016', 'Free SAS', '31-03-2023', '09:58'),
(15, '6264358e3c21c57009fbbce28dbf46da', '105.111.250.58', 'Algeria', '09', 'Blida', 'Blida', '36.5312,3.0698', 'DZ', '09000', 'Algerie Telecom', '31-03-2023', '10:40'),
(16, 'eed1121789bb72c5f73d26ea6aba92bd', '78.194.144.138', 'France', 'IDF', 'Île-de-France', 'Paris', '48.8323,2.4075', 'FR', '75016', 'Free SAS', '31-03-2023', '10:42'),
(17, '4a89fcc48aef061dd8b72c2891d900f5', '104.28.42.21', 'France', 'IDF', 'Île-de-France', 'Paris', '48.8323,2.4075', 'FR', '75001', 'Cloudflare, Inc.', '31-03-2023', '10:54'),
(18, '8d7596735d19aa7275869b945635fceb', '104.28.42.20', 'France', 'IDF', 'Île-de-France', 'Paris', '48.8323,2.4075', 'FR', '75001', 'Cloudflare, Inc.', '31-03-2023', '11:09'),
(19, '6a42932f980cbe301f06d9c999db62fb', '194.177.52.232', 'France', 'IDF', 'Île-de-France', 'Paris', '48.8323,2.4075', 'FR', '75020', 'Waycom International SASU', '23-04-2023', '13:06'),
(20, 'ffcf4e78e8c70b91c2b5b22a63621367', '194.177.52.232', 'France', 'IDF', 'Île-de-France', 'Paris', '48.8323,2.4075', 'FR', '75020', 'Waycom International SASU', '27-04-2023', '18:53'),
(21, '85ba4562c0050edd10cceaf35c7eb472', '194.177.52.233', 'France', 'IDF', 'Île-de-France', 'Paris', '48.8323,2.4075', 'FR', '75020', 'Waycom International SASU', '04-05-2023', '16:09'),
(22, 'a9579212915a181d02057a0fb0d45c84', '58.65.220.121', 'Pakistan', 'PB', 'Punjab', 'Faisalabad', '31.3709,73.0336', 'PK', '38000', 'Cyber Internet Services Pakistan', '11-05-2023', '10:10');

-- --------------------------------------------------------

--
-- Structure de la table `online_users`
--

CREATE TABLE `online_users` (
  `id` int(11) NOT NULL,
  `session` text COLLATE utf8_unicode_ci NOT NULL,
  `page` text COLLATE utf8_unicode_ci NOT NULL,
  `ip` text COLLATE utf8_unicode_ci NOT NULL,
  `country` text COLLATE utf8_unicode_ci NOT NULL,
  `region` text COLLATE utf8_unicode_ci NOT NULL,
  `region_name` text COLLATE utf8_unicode_ci NOT NULL,
  `city` text COLLATE utf8_unicode_ci NOT NULL,
  `loc` text COLLATE utf8_unicode_ci NOT NULL,
  `countrycode` text COLLATE utf8_unicode_ci NOT NULL,
  `zip` text COLLATE utf8_unicode_ci NOT NULL,
  `isp` text COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `online_users`
--

INSERT INTO `online_users` (`id`, `session`, `page`, `ip`, `country`, `region`, `region_name`, `city`, `loc`, `countrycode`, `zip`, `isp`, `time`) VALUES
(5, '8a0e34c1d07516ce0f9d7cbe337b222d', 'single_ad.php', '', '', '', '', '', '36.5312,3.0698', '', '', '', 1680280828),
(8, '', 'index.php', '78.194.144.138', 'France', 'IDF', 'Île-de-France', 'Paris', '48.8323,2.4075', 'FR', '75016', 'Free SAS', 1683822435),
(10, '1982833fb88f97488406f34399b984b3', 'question.php', '78.194.144.138', 'France', 'IDF', 'Île-de-France', 'Paris', '48.8323,2.4075', 'FR', '75016', 'Free SAS', 1683822416),
(11, '1d7a6e56a4169fe7fc853f7e1a3d9af5', 'live_data.php', '129.45.41.179', 'Algeria', '44', 'Aïn Defla', 'El Abadia', '36.2695,1.68609', 'DZ', '44006', 'Optimum Telecom Algeria Maintainer', 1679880490),
(12, '3d1ec282977fb9021b61cefdb15855f5', 'live_data.php', '129.45.46.163', 'Algeria', '42', 'Tipaza', 'Kolea', '36.6389,2.76845', 'DZ', '42003', 'Optimum Telecom Algeria Maintainer', 1679931776),
(13, '0221d4d43eedda43eea5198e49bdd029', 'upload_ad_img.php', '154.121.81.78', 'Algeria', '16', 'Algiers', 'Algiers', '36.7405,3.1159', 'DZ', '16000', 'Algerie Telecom Mobile MOBILIS', 1680037100),
(14, '687db3162bf8e5f3fd96686a0ae416f1', 'question.php', '78.194.144.138', 'France', 'IDF', 'Île-de-France', 'Paris', '48.8323,2.4075', 'FR', '75016', 'Free SAS', 1680278420),
(15, '6264358e3c21c57009fbbce28dbf46da', 'question.php', '105.111.250.58', 'Algeria', '09', 'Blida', 'Blida', '36.5312,3.0698', 'DZ', '09000', 'Algerie Telecom', 1680280901),
(16, 'eed1121789bb72c5f73d26ea6aba92bd', 'question.php', '78.194.144.138', 'France', 'IDF', 'Île-de-France', 'Paris', '48.8323,2.4075', 'FR', '75016', 'Free SAS', 1680281737),
(17, '4a89fcc48aef061dd8b72c2891d900f5', 'ads.php', '104.28.42.21', 'France', 'IDF', 'Île-de-France', 'Paris', '48.8323,2.4075', 'FR', '75001', 'Cloudflare, Inc.', 1680282214),
(18, '8d7596735d19aa7275869b945635fceb', 'ads.php', '104.28.42.20', 'France', 'IDF', 'Île-de-France', 'Paris', '48.8323,2.4075', 'FR', '75001', 'Cloudflare, Inc.', 1680282576),
(19, '6a42932f980cbe301f06d9c999db62fb', '', '194.177.52.232', 'France', 'IDF', 'Île-de-France', 'Paris', '48.8323,2.4075', 'FR', '75020', 'Waycom International SASU', 1682276767),
(20, 'ffcf4e78e8c70b91c2b5b22a63621367', 'question.php', '194.177.52.232', 'France', 'IDF', 'Île-de-France', 'Paris', '48.8323,2.4075', 'FR', '75020', 'Waycom International SASU', 1682643257),
(21, '85ba4562c0050edd10cceaf35c7eb472', 'question.php', '194.177.52.233', 'France', 'IDF', 'Île-de-France', 'Paris', '48.8323,2.4075', 'FR', '75020', 'Waycom International SASU', 1683238239),
(22, 'a9579212915a181d02057a0fb0d45c84', 'question.php', '58.65.220.121', 'Pakistan', 'PB', 'Punjab', 'Faisalabad', '31.3709,73.0336', 'PK', '38000', 'Cyber Internet Services Pakistan', 1683821452);

-- --------------------------------------------------------

--
-- Structure de la table `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `nom` text COLLATE utf8_unicode_ci NOT NULL,
  `prenom` text COLLATE utf8_unicode_ci NOT NULL,
  `date` text COLLATE utf8_unicode_ci NOT NULL,
  `town` text COLLATE utf8_unicode_ci NOT NULL,
  `tel` text COLLATE utf8_unicode_ci NOT NULL,
  `ip` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_city` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_region` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_country` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_loc` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_countrycode` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_isp` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_zip` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_regionname` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `personal`
--

INSERT INTO `personal` (`id`, `email`, `password`, `nom`, `prenom`, `date`, `town`, `tel`, `ip`, `gps_city`, `gps_region`, `gps_country`, `gps_loc`, `gps_countrycode`, `gps_isp`, `gps_zip`, `gps_regionname`) VALUES
(1, 'oui@test.com', '123456', 'zz', 'zz', '2023-03-21', 'Paris ', '0766145238 ', '78.194.144.138', 'Paris', 'IDF', 'France', '48.8323,2.4075', 'FR', 'Free SAS', '75016', 'Île-de-France');

-- --------------------------------------------------------

--
-- Structure de la table `quizz`
--

CREATE TABLE `quizz` (
  `id` int(11) NOT NULL,
  `question` text,
  `answer` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `quizz`
--

INSERT INTO `quizz` (`id`, `question`, `answer`) VALUES
(3, 'Quel est le monument le plus célèbre de Paris ? ', 'la tour eiffel'),
(9, 'Où se trouve la Place Vendôme ?', 'Dans le 1er arrondissement de Paris.'),
(11, 'Quel est le plus grand jardin de Paris?', 'Le bois de vincennes');

-- --------------------------------------------------------

--
-- Structure de la table `quizz_stats`
--

CREATE TABLE `quizz_stats` (
  `id` int(11) NOT NULL,
  `user` text COLLATE utf8_unicode_ci NOT NULL,
  `taxi` text COLLATE utf8_unicode_ci NOT NULL,
  `q_1` text COLLATE utf8_unicode_ci NOT NULL,
  `q_1_id` int(11) NOT NULL,
  `q_1_score` int(11) NOT NULL,
  `r_1` text COLLATE utf8_unicode_ci NOT NULL,
  `c_1` text COLLATE utf8_unicode_ci NOT NULL,
  `q_2` text COLLATE utf8_unicode_ci NOT NULL,
  `q_2_id` int(11) NOT NULL,
  `q_2_score` int(11) NOT NULL,
  `r_2` text COLLATE utf8_unicode_ci NOT NULL,
  `c_2` text COLLATE utf8_unicode_ci NOT NULL,
  `q_3` text COLLATE utf8_unicode_ci NOT NULL,
  `q_3_id` int(11) NOT NULL,
  `q_3_score` int(11) NOT NULL,
  `r_3` text COLLATE utf8_unicode_ci NOT NULL,
  `c_3` text COLLATE utf8_unicode_ci NOT NULL,
  `score` int(11) NOT NULL,
  `ip` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_city` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_region` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_country` text COLLATE utf8_unicode_ci NOT NULL,
  `gps_loc` text COLLATE utf8_unicode_ci NOT NULL,
  `date` text COLLATE utf8_unicode_ci NOT NULL,
  `time` text COLLATE utf8_unicode_ci NOT NULL,
  `winner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `quizz_stats`
--

INSERT INTO `quizz_stats` (`id`, `user`, `taxi`, `q_1`, `q_1_id`, `q_1_score`, `r_1`, `c_1`, `q_2`, `q_2_id`, `q_2_score`, `r_2`, `c_2`, `q_3`, `q_3_id`, `q_3_score`, `r_3`, `c_3`, `score`, `ip`, `gps_city`, `gps_region`, `gps_country`, `gps_loc`, `date`, `time`, `winner`) VALUES
(1, '1982833fb88f97488406f34399b984b3,', '', 'zz', 6, 1, 'zz', 'zz', 'zz', 8, 0, 'zzz', 'zz', 'Qui a construiit la tour eiffel ?', 4, 0, 'gustave eiffel', 'gustave', 1, '78.194.144.138', 'Paris', 'Île-de-France', 'France', '48.8323,2.4075', '26-03-2023', '21:10:19', 0),
(2, '687db3162bf8e5f3fd96686a0ae416f1,', '', 'Où se trouve la Place Vendôme ?', 9, 0, '0', 'Dans le 1er arrondissement de Paris.', 'Quel est le plus grand jardin de Paris?', 11, 0, 'Le bois de Vincennes ', 'Le bois de vincennes', 'Quel est le monument le plus célèbre de Paris ? ', 3, 0, '0', 'la tour eiffel', 0, '78.194.144.138', 'Paris', 'Île-de-France', 'France', '48.8323,2.4075', '31-03-2023', '10:00:20', 0),
(3, '8a0e34c1d07516ce0f9d7cbe337b222d,', '', 'Quel est le plus grand jardin de Paris?', 11, 0, 'je sai spa', 'Le bois de vincennes', 'Quel est le monument le plus célèbre de Paris ? ', 3, 0, '0', 'la tour eiffel', 'Où se trouve la Place Vendôme ?', 9, 0, 'yeee', 'Dans le 1er arrondissement de Paris.', 0, '105.111.250.58', 'Blida', 'Blida', 'Algeria', '36.5312,3.0698', '31-03-2023', '10:40:08', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ads_feedback`
--
ALTER TABLE `ads_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ads_interests`
--
ALTER TABLE `ads_interests`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ads_viewers`
--
ALTER TABLE `ads_viewers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `global_stats`
--
ALTER TABLE `global_stats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `online_users`
--
ALTER TABLE `online_users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `quizz`
--
ALTER TABLE `quizz`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `quizz_stats`
--
ALTER TABLE `quizz_stats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `ads_feedback`
--
ALTER TABLE `ads_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ads_interests`
--
ALTER TABLE `ads_interests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ads_viewers`
--
ALTER TABLE `ads_viewers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `global_stats`
--
ALTER TABLE `global_stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `online_users`
--
ALTER TABLE `online_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `quizz`
--
ALTER TABLE `quizz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `quizz_stats`
--
ALTER TABLE `quizz_stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
