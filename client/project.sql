-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 27 fév. 2021 à 16:08
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `project`
--

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_01_25_005522_create_products_table', 1),
(2, '2021_01_25_005955_add_fields_to_products_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `name`, `description`, `image`, `price`, `type`) VALUES
(1, NULL, NULL, 'Masque ', 'Masque de Protection Hygiénique Jetable', 'mask.jpg', '15.00', 'Unisexe'),
(2, NULL, NULL, 'Gants', 'Gants Vinyle à usage Unique GD47 Medium', 'gants.jpg', '95.00', 'Unisexe'),
(3, NULL, NULL, '\r\nBrosse chauffante lissante', 'Babyliss Brosse chauffante lissante liss brush 3D HSB100E', 'brosse chauffante.jpg\r\n\r\n\r\n', '679.00', 'Femmes'),
(4, NULL, NULL, 'Tondeuses', 'Babyliss Tondeuses multifonctions 6 En 1 E823E', 'tondeuse.jpg', '319.00', 'Hommes'),
(5, NULL, NULL, '5 Masque de protection KN95', '5 Masque de protection KN95 4 couches BFE +95%', 'mask2.jpg\r\n', '79.00', 'Unisexe'),
(6, NULL, NULL, 'CEM thermomètre frontal infrarouge', 'CEM thermomètre frontal infrarouge', 'ther.jpg', '550.00', 'Unisexe');

-- --------------------------------------------------------

--
-- Structure de la table `table`
--

DROP TABLE IF EXISTS `table`;
CREATE TABLE IF NOT EXISTS `table` (
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Tahiri Abdellatif', 'abdellatif.tahiri@etu.uae.ac.ma', NULL, '$2y$10$Wn1UTa0wR8ZUqykpbAE46O5H7ALLFhDxyCYOHlYm16yvObx4W8fey', NULL, '2021-02-26 15:58:00', '2021-02-26 15:58:00'),
(7, 'tahiri abdellatif', 'Cocofly7@gmail.com', NULL, '$2y$10$C/wE3aH.k5e.9exe7hmV/.dbAtYYGnj8l4nSk3.rkLxMeQyO8utm.', NULL, '2021-02-26 22:14:39', '2021-02-26 22:14:39'),
(2, 'test', 'Cocofly6@gmail.com', NULL, '$2y$10$ZUWQSG7VBdqeVycYgBQtMuNs/gZw1NdeYoEs8fqigYng3z94pY9jO', NULL, '2021-01-27 21:21:38', '2021-01-27 21:21:38'),
(3, 'tahiri abdellatif', '125@gmail.com', NULL, '$2y$10$xg5eLqpytvJX/yTZoGrVsezbLNKo4tPOzVhIsLLVANEWOwjp2i4FG', NULL, '2021-01-28 15:29:49', '2021-01-28 15:29:49'),
(4, 'sdfqsdfg', 'sdfsdf@gmail.com', NULL, '$2y$10$ikLf9MIO8DsdOgd8QaxVBevCdy95GJGNZ0ymN/yh3zN4JMUceH0kq', NULL, '2021-01-29 15:47:03', '2021-01-29 15:47:03'),
(5, 'lxxx', 'Cocofly26@gmail.com', NULL, '$2y$10$GUcbxrMkWFgtiXNR5MgX/uSCiDY/1D7cSS9HQHvmaNK3qgIE/Lrjm', NULL, '2021-02-26 10:51:58', '2021-02-26 10:51:58'),
(8, 'tahiri abdellatif', 'abdellatif.tahiri@gmail.com', NULL, '$2y$10$PX.GlwHJTK8YxcpQHEzlyeUQHjL3UN1hogD/CeCH1JXvViSswpDW2', 'c48pbHWR4NBNEnUhNRtY7OAs5Eq8AdLyB5ej8HOCFOqp99lORZxiQiu6lwnx', '2021-02-26 23:32:52', '2021-02-26 23:32:52'),
(9, 'tahiri abdellatif', '12i@etu.uae.ac.ma', NULL, '$2y$10$dtBBk8xJ85S3J/YeDGn2aulhgqUv6wMMNiSt6l9tjeuLQiRIkMQqe', NULL, '2021-02-27 01:48:53', '2021-02-27 01:48:53'),
(10, 'tahiri abdellatif', 'abdellatif999.tahiri@gmail.com', NULL, '$2y$10$k9vLcu4pliKmXo7eq5H//umjJYXkFQjXhJfy1QGvytUIY7wM/ilgu', NULL, '2021-02-27 02:03:08', '2021-02-27 02:03:08'),
(11, 'tahiri abdellatif', 'abdellatif.tahiri99@etu.uae.ac.ma', NULL, '$2y$10$ogg5/7pto4F69e6RtcmPLOHxj9WxQgFmYVNAgchoZaSZuHZvliyWu', NULL, '2021-02-27 10:24:49', '2021-02-27 10:24:49'),
(12, 'tahiri abdellatif', 'abdellatif.tahiri@gmall.com', NULL, '$2y$10$slkH/iDdSb4MfW7qAoPNPu3g6Z1Opx/qO7uKhPTHMpYTZE33TiquW', NULL, '2021-02-27 10:35:15', '2021-02-27 10:35:15'),
(13, 'tahiri abdellatif', 'abdellatiftahiri9@etu.uae.ac.ma', NULL, '$2y$10$MNjOFdVvBFhKQ0nQlelJxee02nHRkYkwdmIWHko2k9FuNc.wChqGe', NULL, '2021-02-27 13:27:37', '2021-02-27 13:27:37'),
(14, 'tahiri abdellatif', 'Cocofly66@gmail.com', NULL, '$2y$10$YaF9Cs/kW4BVlffR.IRTWeI0Im5yvmzMuBIV.I9blSMwxwmuhX4nO', NULL, '2021-02-27 14:34:19', '2021-02-27 14:34:19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
