-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 30 juin 2023 à 14:59
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sas_dev`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `popular` tinyint(1) NOT NULL DEFAULT '0',
  `tendance` enum('vogue','baise','moyenne','faible') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'moyenne',
  `parent_id` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `popular`, `tendance`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Html/Css', NULL, 0, 'moyenne', NULL, NULL, NULL),
(2, 'Scala', NULL, 0, 'moyenne', NULL, NULL, NULL),
(3, 'Swift', NULL, 0, 'moyenne', NULL, NULL, NULL),
(4, 'Kotlin', NULL, 0, 'moyenne', NULL, NULL, NULL),
(5, 'Vue Js', NULL, 0, 'moyenne', NULL, NULL, NULL),
(6, 'Jquery', NULL, 0, 'moyenne', NULL, NULL, NULL),
(7, 'Javascript', NULL, 0, 'moyenne', NULL, NULL, NULL),
(8, 'Java', NULL, 0, 'moyenne', NULL, NULL, NULL),
(9, 'Python', NULL, 0, 'moyenne', NULL, NULL, NULL),
(10, 'Django', NULL, 0, 'moyenne', NULL, NULL, NULL),
(11, 'Symfony', NULL, 0, 'moyenne', NULL, NULL, NULL),
(12, 'Angular', NULL, 0, 'moyenne', NULL, NULL, NULL),
(13, 'React', NULL, 0, 'moyenne', NULL, NULL, NULL),
(14, 'Sql', NULL, 0, 'moyenne', NULL, NULL, NULL),
(15, 'Flutter/Dart', NULL, 0, 'moyenne', NULL, NULL, NULL),
(16, '.Net', NULL, 0, 'moyenne', NULL, NULL, NULL),
(17, 'GraphQl', NULL, 0, 'moyenne', NULL, NULL, NULL),
(18, 'Laravel', NULL, 0, 'moyenne', NULL, NULL, NULL),
(19, 'Reseau Informatique', NULL, 0, 'moyenne', NULL, NULL, NULL),
(20, 'Securite Informatique', NULL, 0, 'moyenne', NULL, NULL, NULL),
(21, 'Maintenance Informatique', NULL, 0, 'moyenne', NULL, NULL, NULL),
(22, 'Flutter/Dart', NULL, 0, 'moyenne', NULL, NULL, NULL),
(23, 'TypeScript', NULL, 0, 'moyenne', NULL, NULL, NULL),
(24, 'Langage C', NULL, 0, 'moyenne', NULL, NULL, NULL),
(25, 'Wordpress', NULL, 0, 'moyenne', NULL, NULL, NULL),
(26, 'Shotify', NULL, 0, 'moyenne', NULL, NULL, NULL),
(27, 'Wordpress', NULL, 0, 'moyenne', NULL, NULL, NULL),
(28, 'WooCommerce', NULL, 0, 'moyenne', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` int NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int NOT NULL,
  `url_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popular` tinyint(1) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `level_id` bigint UNSIGNED NOT NULL,
  `formateur_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `courses`
--

INSERT INTO `courses` (`id`, `title`, `slug`, `description`, `prix`, `url_video`, `image`, `popular`, `published`, `level_id`, `formateur_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'apprendre laravel', 'apprendre-laravel', 'SAS Formation est une plateforme de qui met à la disposition du public plusieurs formations dans le domaine informatque et d\'autres, des contenus riches et des formateurs de classe mondiale.SAS Formation est une plateforme de qui met à la disposition du public plusieurs formations dans le domaine informatque et d\'autres, des contenus riches et des formateurs de classe mondiale.SAS Formation est une plateforme de qui met à la disposition du public plusieurs formations dans le domaine informatque et d\'autres, des contenus riches et des formateurs de classe mondiale.SAS Formation est une plateforme de qui met à la disposition du public plusieurs formations dans le domaine informatque et d\'autres, des contenus riches et des formateurs de classe mondiale.', 250, 'https://laravel-news.com/laravel-gates-policies-guards-explained', '1688111201_1683402622_course-vue.jpg', 0, 0, 1, 2, 7, '2023-06-30 07:46:41', '2023-06-30 07:46:41'),
(2, 'Apprendre React JS', 'apprendre-react-js', 'SAS Formation est une plateforme de qui met à la disposition du public plusieurs formations dans le domaine informatque et d\'autres, des contenus riches et des formateurs de classe mondiale.SAS Formation est une plateforme de qui met à la disposition du public plusieurs formations dans le domaine informatque et d\'autres, des contenus riches et des formateurs de classe mondiale.', 300, 'http://formation.vtp-market.com/profiles', '1688111308_1683290417_auth-one-bg.jpg', 0, 0, 1, 2, 10, '2023-06-30 07:48:28', '2023-06-30 07:48:28'),
(3, 'Apprendre à programmer en c', 'apprendre-a-programmer-en-c', 'SAS Formation est une plateforme de qui met à la disposition du public plusieurs formations dans le domaine informatque et d\'autres, des contenus riches et des formateurs de classe mondiale.SAS Formation est une plateforme de qui met à la disposition du public plusieurs formations dans le domaine informatque et d\'autres, des contenus riches et des formateurs de classe mondiale.', 200, 'http://formation.vtp-market.com/profiles', '1688111341_1684872728_course-wordpress.jpg', 0, 0, 2, 2, 21, '2023-06-30 07:49:01', '2023-06-30 07:49:01'),
(4, 'apprendre progress-sql', 'apprendre-progress-sql', 'SAS Formation est une plateforme de qui met à la disposition du public plusieurs formations dans le domaine informatque et d\'autres, des contenus riches et des formateurs de classe mondiale.SAS Formation est une plateforme de qui met à la disposition du public plusieurs formations dans le domaine informatque et d\'autres, des contenus riches et des formateurs de classe mondiale.', 300, 'https://laravel-news.com/laravel-gates-policies-guards-explained', '1688111379_1684872779_course-javascript.jpg', 0, 0, 1, 2, 9, '2023-06-30 07:49:39', '2023-06-30 07:49:39'),
(5, 'Apprendre à programmer avec bootStrap', 'apprendre-a-programmer-avec-bootstrap', 'Bootstrap est une collection d\'outils utiles à la création du design de sites et d\'applications web. C\'est un ensemble qui contient des codes HTML et CSS, des formulaires, boutons, outils de navigation et autres éléments interactifs, ainsi que des extensions JavaScript en optionBootstrap est une collection d\'outils utiles à la création du design de sites et d\'applications web. C\'est un ensemble qui contient des codes HTML et CSS, des formulaires, boutons, outils de navigation et autres éléments interactifs, ainsi que des extensions JavaScript en option', 230, 'https://laravel-news.com/laravel-gates-policies-guards-explained', '1688112454_1683290540_course-bootstrap.jpg', 0, 0, 1, 2, 18, '2023-06-30 08:07:34', '2023-06-30 08:07:34'),
(6, 'Apprendre les bases du lanages python', 'apprendre-les-bases-du-lanages-python', 'Python est un langage de programmation interprété, multiparadigme et multiplateformes. Il favorise la programmation impérative structurée, fonctionnelle et orientée objet.', 120, 'https://laravel-news.com/laravel-gates-policies-guards-explained', '1688112578_1683290633_course-python.jpg', 0, 0, 2, 2, 13, '2023-06-30 08:09:38', '2023-06-30 08:09:38'),
(7, 'Apprendre à structurer une page avec html', 'apprendre-a-structurer-une-page-avec-html', 'Python est un langage de programmation interprété, multiparadigme et multiplateformes. Il favorise la programmation impérative structurée, fonctionnelle et orientée objet.Python est un langage de programmation interprété, multiparadigme et multiplateformes. Il favorise la programmation impérative structurée, fonctionnelle et orientée objet.Python est un langage de programmation interprété, multiparadigme et multiplateformes. Il favorise la programmation impérative structurée, fonctionnelle et orientée objet.', 250, 'https://laravel-news.com/laravel-gates-policies-guards-explained', '1688113514_1684872845_course-html.jpg', 0, 0, 1, 2, 22, '2023-06-30 08:25:14', '2023-06-30 08:25:14'),
(8, 'Apprendre à utiliser graphQl', 'apprendre-a-utiliser-graphql', 'Python est un langage de programmation interprété, multiparadigme et multiplateformes. Il favorise la programmation impérative structurée, fonctionnelle et orientée objet.', 320, 'https://laravel-news.com/laravel-gates-policies-guards-explained', '1688113578_1684872881_course-graphql.jpg', 0, 0, 2, 2, 17, '2023-06-30 08:26:18', '2023-06-30 08:26:18'),
(9, 'Apprendre Excell', 'apprendre-excell', 'Microsoft Excel est un logiciel tableur de la suite bureautique Microsoft Office développé et distribué par l\'éditeur Microsoft. La version la plus récente est Excel 2021. Il est destiné à fonctionner sur les plates-formes Microsoft Windows, Mac OS X, Android ou Linux.Microsoft Excel est un logiciel tableur de la suite bureautique Microsoft Office développé et distribué par l\'éditeur Microsoft. La version la plus récente est Excel 2021. Il est destiné à fonctionner sur les plates-formes Microsoft Windows, Mac OS X, Android ou Linux.', 250, 'https://laravel-news.com/laravel-gates-policies-guards-explained', '1688118356_Excel-Logo.jpg', 0, 0, 2, 2, 21, '2023-06-30 09:45:56', '2023-06-30 09:45:56'),
(10, 'Apprendre les fondements du marketing Digitale', 'apprendre-les-fondements-du-marketing-digitale', 'marketing digitale est une chose interessante', 260, 'http://formation.vtp-market.com', '1688118413_2.jpg', 0, 0, 2, 2, 1, '2023-06-30 09:46:53', '2023-06-30 09:46:53'),
(11, 'Comment Installer un serveur local', 'comment-installer-un-serveur-local', 'Laravel Scout is a tool for adding full-text search functionality to your Laravel applications. It uses drivers like Algolia, Meilisearch, SQL databases, and others to search through your Eloquent models. The package is highly customizable, making it a versatile option for implementing search capabilities in your application.Laravel Scout is a tool for adding full-text search functionality to your Laravel applications. It uses drivers like Algolia, Meilisearch, SQL databases, and others to search through your Eloquent models. The package is highly customizable, making it a versatile option for implementing search capabilities in your application.', 230, 'https://laravel-news.com/laravel-gates-policies-guards-explained', '1688124548_4 (1).jpg', 0, 0, 2, 2, 17, '2023-06-30 11:29:08', '2023-06-30 11:29:08'),
(12, 'introduction à la jquery', 'introduction-a-la-jquery', 'sssffgg', 256, 'https://laravel-news.com/laravel-gates-policies-guards-explained', '1688131343.jpg', 0, 0, 1, 2, 19, '2023-06-30 13:22:23', '2023-06-30 13:22:23'),
(13, 'Apprendre à constuire des elements visuels illusteator', 'apprendre-a-constuire-des-elements-visuels-illusteator', 'foirmatissssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 320, 'https://laravel-news.com/laravel-gates-policies-guards-explained', '1688131603.png', 0, 0, 1, 2, 24, '2023-06-30 13:26:44', '2023-06-30 13:26:44'),
(14, 'apprendre à constuire un montage avec premiere pro', 'apprendre-a-constuire-un-montage-avec-premiere-pro', 'dtephandddddddddddddddddddddddddddddddddddddddddd', 230, 'http://formation.vtp-market.com', '1688131737.jpg', 0, 0, 2, 2, 16, '2023-06-30 13:28:57', '2023-06-30 13:28:57'),
(15, 'apprendre à coder en langage go', 'apprendre-a-coder-en-langage-go', 'stephaddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 250, 'http://formation.vtp-market.com', '1688131872.png', 0, 0, 1, 2, 2, '2023-06-30 13:31:12', '2023-06-30 13:31:12'),
(16, 'planifier vos taches avec votre equipe', 'planifier-vos-taches-avec-votre-equipe', 'planifier vos taches avc votre equipe de programmeurs', 250, 'http://formation.vtp-market.com/profiles', '1688131985.png', 0, 0, 2, 2, 15, '2023-06-30 13:33:05', '2023-06-30 13:33:05'),
(17, 'Comment concevoir une todoLISTE Javascript', 'comment-concevoir-une-todoliste-javascript', 'dsdsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 320, 'https://laravel-news.com/laravel-gates-policies-guards-explained', '1688136967.png', 0, 0, 1, 3, 10, '2023-06-30 14:56:08', '2023-06-30 14:56:08');

-- --------------------------------------------------------

--
-- Structure de la table `course_tag`
--

CREATE TABLE `course_tag` (
  `id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `tag_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `discounts`
--

CREATE TABLE `discounts` (
  `id` bigint UNSIGNED NOT NULL,
  `discount_percent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delai` date DEFAULT NULL,
  `expire_at` date NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `episodes`
--

CREATE TABLE `episodes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `formateur_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formateurs`
--

CREATE TABLE `formateurs` (
  `id` bigint UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poste` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whattsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `popular` tinyint(1) NOT NULL DEFAULT '0',
  `perfomance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `formateurs`
--

INSERT INTO `formateurs` (`id`, `fullname`, `poste`, `slug`, `telephone`, `whattsapp`, `description`, `genre`, `avatar`, `status`, `popular`, `perfomance`, `created_at`, `updated_at`) VALUES
(2, 'kahouo guysephane', 'developpeue web', 'kahouo guysephane', '0768365866', '+2250768365866', 'Avec Nous vos revénus vous sont reversés automatiquement .\r\nVous pouvez avoir des missions en freelance.\r\nDébuter une carriere sur Sas formation se fait en deux clic.Avec Nous vos revénus vous sont reversés automatiquement .\r\nVous pouvez avoir des missions en freelance.\r\nDébuter une carriere sur Sas formation se fait en deux clic.', 'Home', '1688111106_2.jpg', '0', 0, 'JQUERY AJAC', '2023-06-30 07:45:06', '2023-06-30 07:45:06'),
(3, 'Wilfried Dev', 'Administrateur reseau informatique', 'Wilfried Dev', '07638365866', '0736866', 'flueer formation', 'Home', '1688136884_img-3.png', '0', 0, 'REACT FLUTTER LARAVEL', '2023-06-30 14:54:44', '2023-06-30 14:54:44');

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(1, 'default', '{\"uuid\":\"6b1359b6-78d4-4fbe-b3ec-e19ca27b9c56\",\"displayName\":\"App\\\\Jobs\\\\NewsUserNotificationAdminJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\NewsUserNotificationAdminJob\",\"command\":\"O:37:\\\"App\\\\Jobs\\\\NewsUserNotificationAdminJob\\\":1:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:1;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}\"}}', 0, NULL, 1686911677, 1686911677),
(2, 'default', '{\"uuid\":\"ea322895-187d-48d4-ba8f-fe4571ca2971\",\"displayName\":\"App\\\\Jobs\\\\NewsUserNotificationAdminJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\NewsUserNotificationAdminJob\",\"command\":\"O:37:\\\"App\\\\Jobs\\\\NewsUserNotificationAdminJob\\\":1:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:2;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}\"}}', 0, NULL, 1688110882, 1688110882),
(3, 'default', '{\"uuid\":\"77a39004-1e1f-46ad-86db-2f4043dcccb5\",\"displayName\":\"App\\\\Jobs\\\\NewsUserNotificationAdminJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\NewsUserNotificationAdminJob\",\"command\":\"O:37:\\\"App\\\\Jobs\\\\NewsUserNotificationAdminJob\\\":1:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:53;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}\"}}', 0, NULL, 1688125789, 1688125789),
(4, 'default', '{\"uuid\":\"84d924b1-a5be-4b3d-92a1-ab19e0d620eb\",\"displayName\":\"App\\\\Jobs\\\\NewsUserNotificationAdminJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\NewsUserNotificationAdminJob\",\"command\":\"O:37:\\\"App\\\\Jobs\\\\NewsUserNotificationAdminJob\\\":1:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:54;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}\"}}', 0, NULL, 1688136655, 1688136655);

-- --------------------------------------------------------

--
-- Structure de la table `levels`
--

CREATE TABLE `levels` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `levels`
--

INSERT INTO `levels` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Debutant', NULL, NULL),
(2, 'Avancee', NULL, NULL),
(3, 'Intermédiaire', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_04_26_075940_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_04_25_072443_create_levels_table', 1),
(7, '2023_04_25_075858_create_formateurs_table', 1),
(8, '2023_04_25_081501_create_categories_table', 1),
(9, '2023_04_26_075840_create_courses_table', 1),
(10, '2023_04_26_075922_create_discounts_table', 1),
(11, '2023_04_26_080014_create_episodes_table', 1),
(12, '2023_04_26_080146_create_comments_table', 1),
(13, '2023_04_26_080356_create_likes_table', 1),
(14, '2023_04_26_081305_create_posts_table', 1),
(15, '2023_04_27_073359_create_social_profiles_table', 1),
(16, '2023_04_28_135548_create_orders_table', 1),
(17, '2023_04_28_142224_create_sposonrings_table', 1),
(18, '2023_04_30_084304_create_jobs_table', 1),
(19, '2023_05_01_220804_create_tags_table', 1),
(20, '2023_05_01_221006_create_course_tag_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `codeCommande` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeSequence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `status` enum('en atttente','echec','effectue') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'formateur', NULL, NULL),
(2, 'utilisateur', NULL, NULL),
(3, 'Super Admin', NULL, NULL),
(4, 'formateur', NULL, NULL),
(5, 'utilisateur', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `social_profiles`
--

CREATE TABLE `social_profiles` (
  `id` bigint UNSIGNED NOT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sposonrings`
--

CREATE TABLE `sposonrings` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prorietaire_id` bigint UNSIGNED DEFAULT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `prorietaire_id`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'stephane', 'khsevent27@gmail.com', NULL, '$2y$10$NSqybVMyabK1A.MnGtL4/et4WwbH.CYEgaHI0Pb.G2.kciDs.Xome', 1, 1, NULL, '2023-06-16 10:34:37', '2023-06-16 10:34:37'),
(2, 'stephane', 'kgsdev8@gmail.com', NULL, '$2y$10$ueqvUm6RU6TOUmGso//0kuJ7mu5bWeRZ2fUoCuoTf4rBrdMHt2BcG', 2, 1, NULL, '2023-06-30 07:41:22', '2023-06-30 07:41:22'),
(3, 'Brennan Hansen II', 'kuhlman.kennith@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 'pTpKDCuKPW', '2023-06-30 07:45:43', '2023-06-30 07:45:43'),
(4, 'Trever Rosenbaum V', 'gorczany.damaris@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 3, 'DhvNhzlyFl', '2023-06-30 07:45:43', '2023-06-30 07:45:43'),
(5, 'Sabryna Lang', 'blick.oran@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 3, '3RRmczSs2O', '2023-06-30 07:45:43', '2023-06-30 07:45:43'),
(6, 'Ryan Carter IV', 'braulio.conroy@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 'Ix5pHBgkKE', '2023-06-30 07:45:43', '2023-06-30 07:45:43'),
(7, 'Prof. Christ Waters', 'sierra.murazik@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 'MR305B4UF5', '2023-06-30 07:45:43', '2023-06-30 07:45:43'),
(8, 'Melody Spencer', 'dejah12@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, '0trrIL8498', '2023-06-30 07:45:43', '2023-06-30 07:45:43'),
(9, 'Ally Ankunding', 'tillman.derrick@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 3, 'QQBmj9tMBl', '2023-06-30 07:45:43', '2023-06-30 07:45:43'),
(10, 'Prof. Taya Botsford PhD', 'magnus.rodriguez@example.com', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 'U2M8ThXGfr', '2023-06-30 07:45:43', '2023-06-30 07:45:43'),
(11, 'Leonard Spinka', 'ahuel@example.org', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 'HkePO4kez4', '2023-06-30 07:45:43', '2023-06-30 07:45:43'),
(12, 'Cleve Bradtke', 'fvon@example.com', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 3, 'iBITJEFyYR', '2023-06-30 07:45:43', '2023-06-30 07:45:43'),
(13, 'Bill Haag', 'mrussel@example.org', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 3, 'r2gKT4Z4Gx', '2023-06-30 07:45:44', '2023-06-30 07:45:44'),
(14, 'Alejandra Christiansen', 'anderson.coralie@example.org', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 'cG4vMSRYTs', '2023-06-30 07:45:44', '2023-06-30 07:45:44'),
(15, 'Mr. Noe Lindgren PhD', 'arturo.jakubowski@example.com', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 'EoBMSiKrzM', '2023-06-30 07:45:44', '2023-06-30 07:45:44'),
(16, 'Deshaun Harvey', 'nkuvalis@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 'oedkofzYpX', '2023-06-30 07:45:44', '2023-06-30 07:45:44'),
(17, 'Janie Hessel III', 'roger.von@example.org', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 'F8cicSB61s', '2023-06-30 07:45:44', '2023-06-30 07:45:44'),
(18, 'Judge Brown DVM', 'assunta.batz@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 'WWY2cE4WGl', '2023-06-30 07:45:44', '2023-06-30 07:45:44'),
(19, 'Kathryn Simonis', 'elna.heaney@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 3, 'YLHk9qhTH6', '2023-06-30 07:45:44', '2023-06-30 07:45:44'),
(20, 'Bertrand Bernhard', 'elva.ankunding@example.org', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 'u0QZmM9PwX', '2023-06-30 07:45:44', '2023-06-30 07:45:44'),
(21, 'Prof. Andre Schamberger PhD', 'nmarquardt@example.com', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 'ioYJ5ckRPn', '2023-06-30 07:45:44', '2023-06-30 07:45:44'),
(22, 'Gino Mayer', 'deron.ankunding@example.org', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 3, 'LD2nw4YvSG', '2023-06-30 07:45:44', '2023-06-30 07:45:44'),
(23, 'Dedrick Green', 'astrid26@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 'FbNkaT2RVt', '2023-06-30 07:45:44', '2023-06-30 07:45:44'),
(24, 'Kayla Effertz', 'ford.wolff@example.org', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 3, 'wivkFdCtwk', '2023-06-30 07:45:44', '2023-06-30 07:45:44'),
(25, 'Tyreek Fahey MD', 'jayden80@example.org', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 3, 'Q8sRCL2Eyx', '2023-06-30 07:45:44', '2023-06-30 07:45:44'),
(26, 'Miss Stephany Bosco', 'gislason.diamond@example.org', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 'cV9P06Not7', '2023-06-30 07:45:44', '2023-06-30 07:45:44'),
(27, 'Mike Bauch', 'merle.gutkowski@example.com', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 'EnuN13ULpR', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(28, 'Jazlyn Lakin', 'feeney.jacky@example.org', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 3, 'w698YUC1f7', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(29, 'Rhett Schuppe', 'darrion47@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 'Lc7KfcLyS1', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(30, 'Abbey Ruecker', 'pink42@example.org', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, '7uvLsC9Fgl', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(31, 'Prof. Kiara Langworth III', 'burdette.connelly@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 'W0kXu10wIu', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(32, 'Darrick Miller PhD', 'kyler.schmidt@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 3, 'idH8hzeotd', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(33, 'Miss Cassandra Grant MD', 'abe.schiller@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 'VeswYIQArI', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(34, 'Verdie Walter', 'tkihn@example.org', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 3, 'b83N2HnqYb', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(35, 'Camden Pacocha', 'lincoln.ruecker@example.org', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 'PzIdGrhgdY', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(36, 'Rowan Sauer I', 'nia.bauch@example.org', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 'SVpi55Qgp5', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(37, 'Dock Simonis', 'hermann.trisha@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 'qV92U60oM4', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(38, 'Joy Borer', 'gkoelpin@example.com', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 'O1wmKNyQCG', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(39, 'Prof. Wellington Koepp', 'simone15@example.com', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 'VNxdyUVf7C', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(40, 'Ricky Reilly', 'doyle.gretchen@example.org', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 'iao0H9JXIV', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(41, 'Dominique Bruen', 'kris61@example.org', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 'kS3OJGF5Pg', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(42, 'Marcus Bernier', 'ymetz@example.org', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 'hpFo1kout4', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(43, 'Jennyfer Murray DVM', 'theodora.harber@example.com', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 'F1IcnUEshG', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(44, 'Miss Pat Parker III', 'denis04@example.com', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 3, 'aCAS5UohaB', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(45, 'Miss Catharine Jast', 'gdicki@example.org', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 3, 'Gh6TMIIK5q', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(46, 'Raina Bednar', 'hammes.emely@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 'RZXBjvZsTK', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(47, 'Retta Hessel IV', 'alva84@example.org', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 3, 'h96AwLja7j', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(48, 'Ibrahim Weissnat', 'scot.hodkiewicz@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 3, '8VOv3LbzSl', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(49, 'Dr. Darion Cummerata', 'douglas.alec@example.com', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 3, 'OCVM16dvdl', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(50, 'Albert Bernhard', 'tom.hauck@example.com', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 3, 'YjHPXCYz2c', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(51, 'Darian Howell', 'winston.sanford@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 3, 'i6nQbNJzJc', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(52, 'Ms. Monica Gerhold V', 'bailey.hailee@example.net', '2023-06-30 07:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 'wi45Ymbr5d', '2023-06-30 07:45:45', '2023-06-30 07:45:45'),
(53, 'stephane', 'kgscode@gmail.com', NULL, '$2y$10$7iqJPfe.///q1thqGGs/jOwnnKto/ncZtkkffl/yRECwMhqWcYDFy', NULL, 2, NULL, '2023-06-30 11:49:48', '2023-06-30 11:49:48'),
(54, 'franch', 'french@gmail.com', NULL, '$2y$10$VVESAOH7UJyvc0llJ5Zz/eO750mvlPRpc7O9N9bY0toya8Xr/u2yS', 3, 1, NULL, '2023-06-30 14:50:54', '2023-06-30 14:50:54');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_course_id_foreign` (`course_id`);

--
-- Index pour la table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_slug_unique` (`slug`),
  ADD KEY `courses_level_id_foreign` (`level_id`),
  ADD KEY `courses_formateur_id_foreign` (`formateur_id`),
  ADD KEY `courses_category_id_foreign` (`category_id`);

--
-- Index pour la table `course_tag`
--
ALTER TABLE `course_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_tag_course_id_foreign` (`course_id`),
  ADD KEY `course_tag_tag_id_foreign` (`tag_id`);

--
-- Index pour la table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discounts_course_id_foreign` (`course_id`);

--
-- Index pour la table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `episodes_formateur_id_foreign` (`formateur_id`),
  ADD KEY `episodes_course_id_foreign` (`course_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `formateurs`
--
ALTER TABLE `formateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `formateurs_slug_unique` (`slug`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_course_id_foreign` (`course_id`),
  ADD KEY `likes_user_id_foreign` (`user_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_codecommande_unique` (`codeCommande`),
  ADD KEY `orders_course_id_foreign` (`course_id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `social_profiles`
--
ALTER TABLE `social_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_profiles_user_id_foreign` (`user_id`);

--
-- Index pour la table `sposonrings`
--
ALTER TABLE `sposonrings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `course_tag`
--
ALTER TABLE `course_tag`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formateurs`
--
ALTER TABLE `formateurs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `social_profiles`
--
ALTER TABLE `social_profiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sposonrings`
--
ALTER TABLE `sposonrings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Contraintes pour la table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `courses_formateur_id_foreign` FOREIGN KEY (`formateur_id`) REFERENCES `formateurs` (`id`),
  ADD CONSTRAINT `courses_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`);

--
-- Contraintes pour la table `course_tag`
--
ALTER TABLE `course_tag`
  ADD CONSTRAINT `course_tag_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `course_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Contraintes pour la table `discounts`
--
ALTER TABLE `discounts`
  ADD CONSTRAINT `discounts_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Contraintes pour la table `episodes`
--
ALTER TABLE `episodes`
  ADD CONSTRAINT `episodes_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `episodes_formateur_id_foreign` FOREIGN KEY (`formateur_id`) REFERENCES `formateurs` (`id`);

--
-- Contraintes pour la table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `social_profiles`
--
ALTER TABLE `social_profiles`
  ADD CONSTRAINT `social_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
