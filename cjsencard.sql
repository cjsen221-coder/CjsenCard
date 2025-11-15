-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 07 nov. 2025 à 11:00
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cjsencard`
--

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `published_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `image`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'OCTOBRE ROSE', 'En ce mois d’Octobre Rose, Sen Carrefour Jeunesse réaffirme son engagement aux côtés des femmes, jeunes filles et mères dans la lutte contre le cancer du sein.\r\nNous rappelons l’importance de la prévention : se faire dépister régulièrement, consulter son gynécologue à tout âge, doit devenir un réflexe de santé essentiel. Trop souvent, le diagnostic est posé à un stade avancé, faute de suivi régulier. Il est temps d’ancrer dans nos habitudes la culture des visites médicales préventives, car prévenir, c’est sauver des vies.\r\nNous appelons également à faciliter l’accès aux soins pour toutes, et à accorder une attention particulière à la santé mentale, indissociable du bien-être global des femmes.\r\nLa prévention n’est pas une option, c’est une arme silencieuse qui sauve des vies.', 'blogs/MKBO4Atm43K1TU5P6NosEy2YPi66ORYAaGTguaxh.png', NULL, '2025-10-28 08:49:57', '2025-10-28 10:41:39');

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_number` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `honorMember` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cards`
--

INSERT INTO `cards` (`id`, `serial_number`, `name`, `gender`, `birthdate`, `nationality`, `address`, `region`, `city`, `email`, `phone`, `whatsapp`, `role`, `avatar`, `slug`, `honorMember`, `created_at`, `updated_at`) VALUES
(2, 'SEN-CJ-002', 'Mounirou TALL', 'Homme', '2000-09-22', 'Sénégalais', 'Sicap Foire', 'Dakar', 'Dakar', 'mounirou@cjsen.sn', '78 849 57 30', '78 849 57 30', 'Enseignant', 'avatars/1755615255_mounirou.jpeg', 'mounirou-tall', 'Membre d\'honneur', '2025-08-19 14:45:00', '2025-08-19 14:55:20'),
(3, 'SEN-CJ-001', 'Samba DRAME', 'Homme', '2000-05-22', 'Sénégalais', 'Colobane', 'Dakar', 'Dakar', 'dramembasa2000@gmail.com', '788495730', '788495730', 'Etudiant', 'avatars/1760125173_438A6912-removebg-preview.png', 'samba-drame-sen-cj-001', 'Membre simple', '2025-10-10 19:39:33', '2025-10-10 19:39:33');

-- --------------------------------------------------------

--
-- Structure de la table `domaines`
--

CREATE TABLE `domaines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `domaines`
--

INSERT INTO `domaines` (`id`, `nom`, `type`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Atelier de Sensibilisation', 'sensibilisation', 'Un atelier de sensibilisation est un espace d’échange, d’écoute et de partage qui vise à informer, éduquer et mobiliser les jeunes autour de thématiques essentielles pour leur épanouissement personnel et collectif.\r\nC’est un moment d’apprentissage participatif où chaque voix compte, permettant de déconstruire les préjugés, de renforcer la conscience citoyenne et de susciter des actions concrètes en faveur du changement social.', 'domaines/LrevaHEHAlrPTl5g94ms7EYIdMOwSua7s999qq1k.jpg', '2025-10-30 09:46:42', '2025-11-04 13:18:01'),
(2, 'Formation Leadership', 'formation', 'Développez vos compétences en leadership et gestion d’équipe.', 'domaines/XXmHA2Z00GRtVWzdQTEM4ToXPzvh27ABstqo8FOj.jpg', '2025-11-04 13:02:23', '2025-11-04 13:03:00'),
(3, 'Formation Communication', 'formation', 'Améliorez vos capacités de communication interpersonnelle.', 'domaines/ZnI3QwSKm7wMF05RG3ErpO6FsdC0087PXxylIowL.jpg', '2025-11-04 13:02:23', '2025-11-04 13:03:11'),
(4, 'Formation Gestion de Projet', 'formation', 'Apprenez à planifier et gérer efficacement vos projets.', 'domaines/U51Ao3IJ2bZmL6Od3XRnFtKQ9MSNeSWHzJZhefMm.jpg', '2025-11-04 13:02:23', '2025-11-04 13:03:22'),
(5, 'Formation Développement Personnel', 'formation', 'Atelier pour mieux se connaître et exploiter son potentiel.', 'domaines/c7ywaFL3peMsyrDWqH09SS7ZjAlXq3vPzNsCQc4a.jpg', '2025-11-04 13:02:23', '2025-11-04 13:04:38'),
(6, 'Formation Numérique', 'formation', 'Acquérir les compétences essentielles dans le numérique.', 'domaines/UiPJBPZoVHW0wnxXrElwo1tFEPL2sAmLG4tAYJTj.jpg', '2025-11-04 13:02:23', '2025-11-04 13:04:53'),
(7, 'Causerie Motivation', 'causerie', 'Discussion inspirante pour booster la motivation.', 'domaines/pd3hYVGOHZL0h7gl9qPcZiNKtu2hMNvHkMsZmIYe.jpg', '2025-11-04 13:02:23', '2025-11-04 13:05:04'),
(8, 'Causerie Innovation', 'causerie', 'Échanges sur l’innovation et l’entrepreneuriat.', 'domaines/PkFypXAL3XOdkZuKsc8CWB4AbSaN9YxDSSK0ZCae.jpg', '2025-11-04 13:02:23', '2025-11-04 13:05:19'),
(9, 'Causerie Bien-être', 'causerie', 'Discussion sur le bien-être mental et physique.', 'domaines/FmDXHDYZnJupGfZlSpzPNjnf0DUw5uKDNXkDZyIn.jpg', '2025-11-04 13:02:23', '2025-11-04 13:05:32'),
(10, 'Causerie Éducation', 'causerie', 'Échanges autour des nouvelles méthodes pédagogiques.', 'domaines/Bno5Wj7b3glaqDkPJEgFnlGNajbZgc2xKcT8PSbI.jpg', '2025-11-04 13:02:23', '2025-11-04 13:05:49'),
(11, 'Causerie Leadership', 'causerie', 'Partage d’expériences de leaders inspirants.', 'domaines/xAbdyHvOhtfSU2EmF2vtzdan57MNJyrkuqaAiFDY.jpg', '2025-11-04 13:02:23', '2025-11-04 13:06:13'),
(12, 'Team Building', 'cohesion', 'Activité ludique pour renforcer la cohésion d’équipe.', 'domaines/iPYLOlBPRjEg8DmZHSJDSOBHLJeOo6ueCHWwmNpC.jpg', '2025-11-04 13:02:23', '2025-11-04 13:06:42'),
(13, 'Jeux Collaboratifs', 'cohesion', 'Jeux et challenges pour encourager le travail collectif.', 'domaines/11s28j3VhnmpUBL6EaD4Lu8HecM2or1MxLnKAg94.jpg', '2025-11-04 13:02:23', '2025-11-04 13:06:58'),
(14, 'Sortie Nature', 'cohesion', 'Sortie en plein air pour renforcer les liens.', 'domaines/SI0bsLaJAxFyTnkjrBd4MN5mG8rlMAbDrRYPjy8t.jpg', '2025-11-04 13:02:23', '2025-11-04 13:08:33'),
(15, 'Atelier Créatif', 'cohesion', 'Atelier artistique pour stimuler la créativité collective.', 'domaines/mpNaLrpwmDSc3BubzwhEX5sG4OxFkhfVnj1NkogK.jpg', '2025-11-04 13:02:23', '2025-11-04 13:07:42'),
(16, 'Challenge Solidaire', 'cohesion', 'Défis en groupe pour développer l’entraide et la solidarité.', 'domaines/Tz9r9cawC7gsQzGSix4fEDyLU86SzukG7OTJaoqa.jpg', '2025-11-04 13:02:23', '2025-11-04 13:10:20'),
(17, 'Sensibilisation Environnement', 'sensibilisation', 'Atelier sur la protection de l’environnement.', 'domaines/OAYpobAtGMct0gRQSdpr4oTk2IBCylKJiyzGt9t2.jpg', '2025-11-04 13:02:23', '2025-11-04 13:10:49'),
(18, 'Sensibilisation Santé', 'sensibilisation', 'Actions pour promouvoir la santé et l’hygiène.', 'domaines/lgmrx8wO5W8NnkPuzwsTbHbpyjFJ2WKipNwML9oM.jpg', '2025-11-04 13:02:23', '2025-11-04 13:11:17'),
(19, 'Sensibilisation Droits Humains', 'sensibilisation', 'Éducation aux droits et devoirs des citoyens.', 'domaines/GPdjNusPyWpARMtERhX070DqKZatawj3H0ui66ag.jpg', '2025-11-04 13:02:23', '2025-11-04 13:12:01'),
(20, 'Sensibilisation Sécurité', 'sensibilisation', 'Campagne de sensibilisation sur la sécurité au travail.', 'domaines/wG4xiaVNAglAbHi5j3nlhHgPheiiPwPeAmJbG7m8.jpg', '2025-11-04 13:02:23', '2025-11-04 13:13:43'),
(21, 'Sensibilisation Numérique', 'sensibilisation', 'Atelier pour une utilisation responsable du numérique.', 'domaines/sevUj6Q0L8YMNp307JE7M6qjHQzzHFfXr8NuhbIh.jpg', '2025-11-04 13:02:23', '2025-11-04 13:13:59'),
(22, 'Action Communautaire Quartier', 'action', 'Nettoyage et embellissement de l’espace public.', 'domaines/wO8iMz5xURVsEB6dI1cd6Nsl9nvxJ5JGcECrOdsZ.jpg', '2025-11-04 13:02:23', '2025-11-04 13:14:16'),
(23, 'Collecte de Dons', 'action', 'Organisation d’une collecte pour les familles dans le besoin.', 'domaines/Qbp3ijqYGUQXKyiW2qQWhSa1s411nx8R8xLmdjxb.jpg', '2025-11-04 13:02:23', '2025-11-04 13:14:31'),
(24, 'Distribution Alimentaire', 'action', 'Distribution de repas et denrées alimentaires.', 'domaines/DatVnw2RL7cNOzSdbUnNSpcbKleUZJxDLbZvixES.jpg', '2025-11-04 13:02:23', '2025-11-04 13:14:53'),
(25, 'Plantation d’Arbres', 'action', 'Reboisement et sensibilisation à l’écologie.', 'domaines/5t5YA9UdlvkrxhpNzPWONA5C0UBKCAdVtaNNs6ju.jpg', '2025-11-04 13:02:23', '2025-11-04 13:15:20'),
(26, 'Campagne Vaccination', 'action', 'Participation à des campagnes de santé publique.', 'domaines/TBfvOmwF64f8FyF5GZxfZPSTjQTmLfgO0Bs24rPY.jpg', '2025-11-04 13:02:23', '2025-11-04 13:15:40'),
(27, 'Projet Éducation Numérique', 'projet', 'Création d’espaces numériques pour l’apprentissage.', 'domaines/ZbpZB067Pd8VwfsmCky3CO4EaYdwB2U6M1tzH3XC.jpg', '2025-11-04 13:02:23', '2025-11-04 13:16:00'),
(28, 'Projet Sports et Loisirs', 'projet', 'Mise en place d’activités sportives pour les jeunes.', 'domaines/tz3WLELC1GMVPXIekcxM1yrBePtEvBur5WMZjI0E.jpg', '2025-11-04 13:02:23', '2025-11-04 13:16:19'),
(29, 'Projet Culturel', 'projet', 'Organisation de festivals et ateliers culturels.', 'domaines/C8dE6tIUsMCNyueNFnDal7GLCKDXbaOdiugLIJ0e.jpg', '2025-11-04 13:02:23', '2025-11-04 13:16:48'),
(30, 'Projet Santé', 'projet', 'Actions pour améliorer l’accès aux soins dans la communauté.', 'domaines/FbMiIlMRYTfZmj0bOpsvJ4CWPuAC8XYL5ubVNZQE.jpg', '2025-11-04 13:02:23', '2025-11-04 13:17:15'),
(31, 'Projet Innovation Sociale', 'projet', 'Initiatives pour résoudre des problèmes sociaux locaux.', 'domaines/m2lxiLbstmNcbiW1rok2DjNUpdm0tMV2BcR6OAUx.jpg', '2025-11-04 13:02:23', '2025-11-04 13:17:36');

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'OCTOBRE ROSE', 'media/ofqLuheuxzAmedEldgKbLi4O8oujS5tXH6lGgOlb.png', '2025-10-28 09:17:26', '2025-10-28 09:33:16');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '2025_06_20_180141_create_cards_table', 1),
(4, '2025_10_28_075358_create_newsletters_table', 2),
(5, '2025_10_28_080909_create_blogs_table', 3),
(6, '2025_10_28_080943_create_media_table', 3),
(7, '2025_10_28_081008_create_videos_table', 3),
(8, '2025_10_30_092625_create_domaines_table', 4),
(9, '2025_11_04_120851_create_temoignages_table', 5);

-- --------------------------------------------------------

--
-- Structure de la table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'maisonzahra1@gmail.com', '2025-10-28 07:59:09', '2025-10-28 07:59:09');

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fIhEsV4fFynMI1EoziZTpYUYFg0x1q9UqrFVrT1o', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiN2xJZmtjbWJzcXkzdURsV01Sem9MMGxQdlFCbjRIemlWUThFcE1WZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9lcXVpcGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjQ3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZG9tYWluZS9zZW5zaWJpbGlzYXRpb24vMSI7fX0=', 1762269942),
('SVx7v6I0pj4If2lDw0CJwTkSie83QonV8mFGHMzG', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaXRDSnVUNzkwdWJSSjZZMHNyNVpKTGN6T0hiSTJTRE45SlhFN1ZBRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcHJvcG9zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762360964),
('TcyYJ6EnfbBsumBzuEq4wGoAOE7LxaOGix8X22Ha', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMnpXd0pwdzRzR2tnRnA0b3ZRb0NPcnFGUDNzbWIwUE81eGEyR1YyNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762508781);

-- --------------------------------------------------------

--
-- Structure de la table `temoignages`
--

CREATE TABLE `temoignages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_approved` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `temoignages`
--

INSERT INTO `temoignages` (`id`, `nom`, `profession`, `message`, `image`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 'Mounirou Sène', 'Étudiant en informatique', 'CJSEN m’a permis de découvrir des opportunités que je n’aurais jamais imaginées. Grâce à eux, j’ai pu participer à des ateliers enrichissants et rencontrer des personnes inspirantes.', 'temoignages/4Ha407cSR7yKy6OBhhNfkLMi9oYLfaMPhJfymeUo.jpg', 0, '2025-11-04 12:28:00', '2025-11-04 12:39:19'),
(2, 'Aissatou Diop', 'Jeune entrepreneure', 'Participer aux activités de CJSEN m’a donné confiance pour lancer mon projet communautaire. Leurs conseils et leur réseau sont incroyables.', 'temoignages/9MVtHcktMCTCJcayB5JHcIL3L0I31hdLWEnoVWWS.jpg', 0, '2025-11-04 12:48:23', '2025-11-04 12:48:23'),
(3, 'Cheikh Fall', 'Consultant en communication', 'J’ai été impressionné par l’organisation et la qualité des causeries. Les échanges avec les jeunes sont riches et motivants. Une expérience à renouveler !', 'temoignages/U2a429SA4WQqtwdsRYB93LDYsfc5stUzcgDnCibM.jpg', 0, '2025-11-04 12:49:06', '2025-11-04 12:49:06'),
(4, 'Fatoumata Ndiaye', 'Étudiante en sciences sociales', 'Les ateliers de sensibilisation de CJSEN sont très pertinents. Ils permettent de mieux comprendre les enjeux de la jeunesse et de participer activement à la société.', 'temoignages/CTeRWHRq3inxgZbitdZbBvI64uSSf2DHmwx1Hv7b.jpg', 0, '2025-11-04 12:49:54', '2025-11-04 12:49:54');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrateur CJSEN', 'admin@cjsen.sn', NULL, '$2y$12$xurFsyrAeB.k4PvIM8NkNONKzxRG27akDO7BTg4rIEhKv3EmVNBPa', NULL, '2025-08-19 13:56:20', '2025-08-19 13:56:20');

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`id`, `title`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Allocution du Président CJSEN Mounirou TALL', 'https://youtu.be/0GXlg8saaOA?si=GxDLC0TgoCYP6ESc', '2025-10-28 09:44:39', '2025-10-28 09:45:51'),
(2, 'Reportage CJSEN 1er partie Keur Moussa', 'https://youtu.be/WOoWiBAQgOY?si=NsTN_OPGZnY8GsaH', '2025-10-28 09:56:12', '2025-10-28 09:56:12'),
(3, 'Témoignages des membres de CJSEN sur la distribution de kids scolaires', 'https://youtu.be/kOHwDTWs9uo?si=XNgY3ZB_-FIMCX6A', '2025-10-28 09:57:04', '2025-10-28 09:59:16');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cards_slug_unique` (`slug`),
  ADD UNIQUE KEY `cards_serial_number_unique` (`serial_number`);

--
-- Index pour la table `domaines`
--
ALTER TABLE `domaines`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletters_email_unique` (`email`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `temoignages`
--
ALTER TABLE `temoignages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `domaines`
--
ALTER TABLE `domaines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `temoignages`
--
ALTER TABLE `temoignages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
