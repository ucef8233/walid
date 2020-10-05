-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 06 oct. 2020 à 01:39
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `loccar`
--

-- --------------------------------------------------------

--
-- Structure de la table `automobile`
--

CREATE TABLE `automobile` (
  `imm` varchar(200) NOT NULL,
  `marque` varchar(200) NOT NULL,
  `prix` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `automobile`
--

INSERT INTO `automobile` (`imm`, `marque`, `prix`, `photo`) VALUES
('1234B263', 'uno', 350, 'fiat500.jpg'),
('shqcck334', 'TEST', 4000, 'code-5113374_1920.jpg'),
('shqcck334222', 'TEST', 2222, 'github.png'),
('shqcck334zz', 'TEST', 4000, 'google-plus.png'),
('shqcck334zzzz', 'TEST', 2222, 'kai-pilger-7YwWjgS7aJs-unsplash.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `user_pwd`) VALUES
(1, 'walid', '$2y$10$Hz8ENk011Xf563Qvmm12s.eP2e/Y4upDek4W1jWDSV6c2h23/A2Yu');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `automobile`
--
ALTER TABLE `automobile`
  ADD PRIMARY KEY (`imm`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
