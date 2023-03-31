-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 31 mars 2023 à 19:43
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `item` varchar(255) NOT NULL,
  `item_description` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `unit_code` varchar(255) DEFAULT NULL,
  `unit_description` varchar(255) DEFAULT NULL,
  `unit_price` varchar(255) DEFAULT NULL,
  `vat_amount` varchar(255) DEFAULT NULL,
  `vatpercentage` varchar(255) DEFAULT NULL,
  `vatamount` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `amount`, `description`, `discount`, `item`, `item_description`, `quantity`, `unit_code`, `unit_description`, `unit_price`, `vat_amount`, `vatpercentage`, `vatamount`) VALUES
(50, '15.83', 'GREEN FLASH - Khaki 15ML', '-0.00021057064645192', '8f6bc422-a0b1-4975-9782-502babbbaa86', 'GREEN FLASH - Khaki 15ML', 1, 'pc', 'Piece', '15.83', '3.17', '0.2', NULL),
(51, '15.83', 'GREEN FLASH - Gold sand 15ML', '-0.00021057064645192', '3c393465-981e-4e85-b07e-13af762056c5', 'GREEN FLASH - Gold sand 15ML', 1, 'pc', 'Piece', '15.83', '3.17', '0.2', NULL),
(52, '15.83', 'GREEN FLASH - Milky White 15ML', '-0.00021057064645192', '2470414f-772b-4217-9906-7750c63351e9', 'GREEN FLASH - Milky White 15ML', 1, 'pc', 'Piece', '15.83', '3.17', '0.2', NULL),
(53, '15.83', 'GREEN FLASH - Mint 15ML', '-0.00021057064645192', 'ba11ff3d-2c45-4076-8aa4-49336b39e910', 'GREEN FLASH - Mint 15ML', 1, 'pc', 'Piece', '15.83', '3.17', '0.2', NULL),
(54, '0', 'FRAIS DE TRANSPORT', '0', '978b685f-f059-432f-929d-e3e62db98217', 'FRAIS DE TRANSPORT', 1, 'pc', 'Piece', '0', '0', '0.2', NULL),
(55, '15.83', 'GREEN FLASH - Dark clover 15ML', '-0.00021057064645192', 'd7308dbd-ed91-4e4e-ae58-9ee945964bbe', 'GREEN FLASH - Dark clover 15ML', 1, 'pc', 'Piece', '15.83', '3.17', '0.2', NULL),
(56, '15.83', 'GREEN FLASH - Dark pansy 15ML', '-0.00021057064645192', '62cf18c2-89ab-4bf1-ab34-4e598c17b7f4', 'GREEN FLASH - Dark pansy 15ML', 1, 'pc', 'Piece', '15.83', '3.17', '0.2', NULL),
(57, '15.83', 'GREEN FLASH - Peach 15ML', '-0.00021057064645192', '01c51e89-68e5-4ba4-a3b7-c76bf95ab92b', 'GREEN FLASH - Peach 15ML', 1, 'pc', 'Piece', '15.83', '3.17', '0.2', NULL),
(58, '15.83', 'GREEN FLASH - Shell Beige 15ML', '-0.00021057064645192', 'cb70423c-626d-4b56-b3ce-f1513bb82d47', 'GREEN FLASH - Shell Beige 15ML', 1, 'pc', 'Piece', '15.83', '3.17', '0.2', NULL),
(59, '15.83', 'GREEN FLASH - Navy Blue 15ML', '-0.00021057064645192', '40222201-93d1-4f2d-a56c-49bc060ad114', 'GREEN FLASH - Navy Blue 15ML', 1, 'pc', 'Piece', '15.83', '3.17', '0.2', NULL),
(60, '0', 'GREEN FLASH - Peonie 15ML', '0', '82706172-4413-4ef9-937c-fa4eca30e21f', 'GREEN FLASH - Peonie 15ML', 1, 'pc', 'Piece', '0', '0', '0', NULL),
(61, '74.17', 'GREEN FLASH - Coffret de Noel 24W - pre rempli', '4.4941800368482E-5', '6c5b5c6e-1e78-41aa-a017-5127094625aa', 'GREEN FLASH - Coffret de Noel 24W - pre rempli', 1, 'pc', 'Piece', '74.17', '14.83', '0.2', NULL),
(62, '0', 'GREEN FLASH - SNOW - 15ML', '1', 'b81e7448-8a45-4ff5-ba3a-0d9ab35cc753', 'GREEN FLASH - SNOW - 15ML', 1, 'pc', 'Piece', '15.83', '0', '0.2', NULL),
(63, '0', 'PUB -  Planche Stickers parfumes creme mains', '0', '0d9cf810-fdd1-4b26-8ad2-c4c1f0c001f7', 'PUB -  Planche Stickers parfumes crememains', 1, 'pc', 'Piece', '0', '0', '0.2', NULL),
(64, '0', 'GREEN FLASH - Light Blue 15ML', '0', '64db5397-a0d2-4b28-b824-ff39a72ad341', 'GREEN FLASH - Light Blue 15ML', 1, 'pc', 'Piece', '0', '0', '0', NULL),
(65, '0', 'ACC - PINCES DE DEPOSE X5', '0', '6905f992-6e55-489c-a369-4a5750c42177', 'ACC - PINCES DE DEPOSE X5', 1, 'pc', 'Piece', '0', '0', '0', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `article_commande`
--

CREATE TABLE `article_commande` (
  `id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `commande_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article_commande`
--

INSERT INTO `article_commande` (`id`, `article_id`, `commande_id`) VALUES
(274, 50, 40),
(275, 51, 40),
(276, 52, 40),
(277, 53, 40),
(278, 54, 40),
(279, 55, 40),
(280, 56, 40),
(281, 57, 40),
(282, 58, 40),
(283, 59, 40),
(284, 60, 41),
(285, 61, 41),
(286, 62, 41),
(287, 63, 41),
(288, 64, 41),
(289, 65, 41),
(290, 54, 41);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) NOT NULL,
  `order_number` int(11) NOT NULL,
  `deliver_to_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `amount`, `currency`, `order_id`, `order_number`, `deliver_to_id`) VALUES
(40, '171', 'EUR', '083a171e-86f6-41ca-bd46-3d066e83d3ae', 326753, 14),
(41, '89', 'EUR', '96b66c2b-3081-48b8-b6a4-5977c12c2ca0', 326756, 15);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `address_line1` varchar(255) NOT NULL,
  `address_line2` varchar(255) DEFAULT NULL,
  `contact_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `city`, `contact_name`, `country`, `zip_code`, `account_name`, `address_line1`, `address_line2`, `contact_id`) VALUES
(14, 'Tunis', 'Halima Ben Hassen', 'TN', '1000', 'Naâma', '2 Rue du 2 Mars 1934', NULL, '99e06a8d-997c-4251-8cb7-27dab335ca1b'),
(15, 'Astaffort', 'Francis Cabrel', 'FR', '47000', 'Francis Cabrel', '3 rue de la chanson', NULL, 'bf74b017-740b-4e34-8294-0df4fc1dee7e');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230329225649', '2023-03-30 00:57:02', 29),
('DoctrineMigrations\\Version20230329231204', '2023-03-30 01:12:10', 14),
('DoctrineMigrations\\Version20230329231455', '2023-03-30 01:14:59', 14),
('DoctrineMigrations\\Version20230330160316', '2023-03-30 18:03:22', 21),
('DoctrineMigrations\\Version20230330161117', '2023-03-30 18:11:23', 65),
('DoctrineMigrations\\Version20230330161417', '2023-03-30 18:14:23', 96),
('DoctrineMigrations\\Version20230330171525', '2023-03-30 19:15:32', 21),
('DoctrineMigrations\\Version20230330171741', '2023-03-30 19:17:46', 12);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_23A0E661F1B251E` (`item`);

--
-- Index pour la table `article_commande`
--
ALTER TABLE `article_commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3B0252167294869C` (`article_id`),
  ADD KEY `IDX_3B02521682EA2E54` (`commande_id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6EEAA67D6D7914CF` (`deliver_to_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT pour la table `article_commande`
--
ALTER TABLE `article_commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article_commande`
--
ALTER TABLE `article_commande`
  ADD CONSTRAINT `FK_3B0252167294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `FK_3B02521682EA2E54` FOREIGN KEY (`commande_id`) REFERENCES `commande` (`id`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_6EEAA67D6D7914CF` FOREIGN KEY (`deliver_to_id`) REFERENCES `contact` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
