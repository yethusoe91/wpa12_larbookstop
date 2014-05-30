-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2014 at 11:37 AM
-- Server version: 5.5.37-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `larbookshop_on`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bookname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publisher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `category_id`, `bookname`, `description`, `author`, `image`, `price`, `publisher`, `created_at`, `updated_at`) VALUES
(14, '1', 'LOVE UNDER THE HAWTHORN', '<p>We are in full Chinese Cultural Revolution, an upside down world where the rich are to be condemned by the humblest and also the most illustrious.</p>\r\n\r\n<p>Jing Qiu is the daughter of a conservative family and, to prove his loyalty to the regime, have', 'AI MI', 'LOVE UNDER THE HAWTHORN.jpg', '222', 'SUM', '2014-05-02 23:53:50', '2014-05-15 05:01:06'),
(15, '2', 'BERKELEY SCHOOL OF LITERATURE 1980', '<p>Berkeley, California, Fall 1980.</p>\r\n\r\n<p>At the peak of his career and after years of negative, Julio Cort&aacute;zar accepted to a college course of two months in the United States.</p>\r\n\r\n<p>As expected, this will be no lectures but a series of lec', 'Julio Cortazar', 'BERKELEY SCHOOL OF LITERATURE 1980.jpg', '12', 'RUSTIC', '2014-05-03 00:26:12', '2014-05-15 05:00:23'),
(16, '3', 'Liberaij', '<p>On November 5, 1965, after facing more than 350 police officers for 16 hours, Argentine Marcelo Brignone assailants, and Roberto Carlos Alberto Mereles Dorda fell Liberaij killed in the building, in the heart of Montevideo, in the street Julio Herrera ', 'HABERKORN, LEONARDO', 'Liberaij.jpg', '440.00', 'RUSTIC', '2014-05-03 00:27:33', '2014-05-03 00:27:33'),
(17, '4', 'LAS BATALLAS DE ARTIGAS 1811-1820', '<p>Why Artigas lost the war against the Portuguese?&nbsp;Was it a bad strategist or succumbed to larger or better equipped forces?&nbsp;Unravel this mystery is the aim of this book, call to awaken the interest of history buffs and those interested in the<', 'JUAN CARLOS LUZURIAGA', 'LAS BATALLAS DE ARTIGAS 1811-1820.jpg', '232', 'RUSTIC', '2014-05-03 00:28:37', '2014-05-15 05:00:28'),
(18, '2', 'CAUDILLOS', '<p>In his preface, Lincoln R.</p>\r\n\r\n<p>Maiztegui Homes and presents the argument that led him to select twenty names make up the first installment of this work.</p>\r\n\r\n<p>The selection includes characters that are recognized as naturally Caudillos our hi', 'MAIZTEGUI HOUSES', 'CAUDILLOS.png', '560.00', 'RUSTIC', '2014-05-03 00:29:28', '2014-05-03 00:29:28'),
(19, '1', 'CHRONICLE OF A BAD FRIEND', '<p>&quot;And wondered what cancer is.</p>\r\n\r\n<p>The first definition that came to mind was: &quot;A bad friend.&quot;</p>\r\n\r\n<p>Comes without being called and remains without an invitation.</p>\r\n\r\n<p>Corrected: sometimes inadvertently, not only call him b', 'Dr. Vazquez', 'CHRONICLE OF A BAD FRIEND.jpg', '360.00', 'Rustica', '2014-05-03 00:32:39', '2014-05-03 00:32:39'),
(20, '2', 'Unsaid about addiction', '<p>Several years ago changed the orange ball through the letters.</p>\r\n\r\n<p>&quot;I did not say&quot; is the title of the book that will surely mean a milestone in the life of its author, who is encouraged to investigate, gathering experiences and opinion', 'TATO LOPEZ', 'Unsaid about addiction.jpg', '390', 'TATO LOPEZ', '2014-05-03 00:34:01', '2014-05-03 00:34:01'),
(21, '1', 'THE BIPOLAR ARGENTINA', '<p>The title of this book suggests a diagnosis.</p>\r\n\r\n<p>The basic symptoms of bipolar disorder are dramatic changes in a short period.</p>\r\n\r\n<p>This is the &quot;disease&quot; of society and Argentina hypothesis that Manuel Mora y Araujo uses to addres', 'MANUEL MORA Y ARAUJO	', 'THE BIPOLAR ARGENTINA.jpg', '390', 'RUSTIC', '2014-05-03 00:36:08', '2014-05-03 00:36:08'),
(22, '1', 'IN SEARCH OF MODERN CHINA', '<p>Become not only a demographic giant, but an operator of the first order, for years China plays a decisive role in the world order.</p>\r\n\r\n<p>This book offers a comprehensive summary of all that the Western reader is interested in knowing about the hist', 'JONATHAN D. SPENCE	', 'IN SEARCH OF MODERN CHINA.jpg', '1072.00', 'RUSTIC', '2014-05-03 00:37:29', '2014-05-03 00:37:29'),
(23, '2', 'THINGS HAPPEN', '<p>The analyst Jorge Bafico nude in a book that crosses the barriers of gender and installed between literature and psychoanalysis.</p>\r\n\r\n<p>The protagonists are he and his patients, those montevideanos we met every day in the streets without even notici', 'JORGE BAFICO	', 'COSAS QUE PASAN.jpg', '380', 'RUSTIC', '2014-05-03 05:05:15', '2014-05-03 05:05:15'),
(24, '3', 'Construir al enemigo', '<p>In his preface, Umberto Eco speaks of these pieces as "texts used" functionality, ie born of a written request or pure entertainment.</p>\r\n\r\n<p>True, perocuando who works in this way is a great teacher, every sentence lee.El little lesson for', 'UMBERTO ECO	', 'Build the enemy.jpg', '490', 'Paperback', '2014-05-03 05:07:07', '2014-05-18 08:42:05'),
(28, '4', 'MeMe Hlaine Zan', 'Hlaine Zan is my love  , She is not for sale.', 'hlainezin', 'Screenshot from 2014-05-18 12:25:15.png', '404', 'yethusoe', '2014-05-18 12:08:08', '2014-05-18 12:08:08'),
(30, '6', 'test', 'asfasfasf', 'asfasdfasdf', '10365930_1416829571923520_7320714253025547059_n.jpg', '232323', '232323sdfasfdasf', '2014-05-20 06:26:55', '2014-05-20 06:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Root', '2014-05-20 05:59:14', '2014-05-20 05:59:14'),
(2, 'Cook', '2014-05-20 05:29:03', '2014-05-20 05:29:03'),
(3, 'Horror', '2014-05-20 05:29:07', '2014-05-20 05:29:07'),
(4, 'Humor', '2014-05-20 05:29:10', '2014-05-20 05:29:10'),
(5, 'Musics', '2014-05-20 05:29:14', '2014-05-20 05:29:14'),
(6, 'Healthy', '2014-05-20 05:29:19', '2014-05-20 05:29:19'),
(7, 'Software', '2014-05-20 05:28:58', '2014-05-20 05:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '{"superuser":1}', '2014-05-20 05:26:52', '2014-05-20 05:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2012_12_06_225921_migration_cartalyst_sentry_install_users', 1),
('2012_12_06_225929_migration_cartalyst_sentry_install_groups', 1),
('2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot', 1),
('2012_12_06_225988_migration_cartalyst_sentry_install_throttle', 1),
('2013_07_16_172358_alter_user_table', 2),
('2013_09_02_072804_create_permission_table', 2),
('2013_09_08_191339_update_admin_group_permission', 2),
('2014_03_18_104453_create_books_table', 3),
('2014_05_19_115839_create_categories_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_value_unique` (`value`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `value`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Super User', 'superuser', 'All permissions', '2014-05-20 05:26:52', '2014-05-20 05:26:52'),
(2, 'List Users', 'view-users-list', 'View the list of users', '2014-05-20 05:26:52', '2014-05-20 05:26:52'),
(3, 'Create user', 'create-user', 'Create new user', '2014-05-20 05:26:52', '2014-05-20 05:26:52'),
(4, 'Delete user', 'delete-user', 'Delete a user', '2014-05-20 05:26:52', '2014-05-20 05:26:52'),
(5, 'Update user', 'update-user-info', 'Update a user profile', '2014-05-20 05:26:52', '2014-05-20 05:26:52'),
(6, 'Update user group', 'user-group-management', 'Add/Remove a user in a group', '2014-05-20 05:26:52', '2014-05-20 05:26:52'),
(7, 'Groups management', 'groups-management', 'Manage group (CRUD)', '2014-05-20 05:26:52', '2014-05-20 05:26:52'),
(8, 'Permissions management', 'permissions-management', 'Manage permissions (CRUD)', '2014-05-20 05:26:52', '2014-05-20 05:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 1, '127.0.0.1', 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'mr.yethusoe@gmail.com', 'yethusoe', '$2y$10$/pY3wilxxqvZSGya8wdkm.4VsgiEtCawkuQDYFciMP8reB7ZwchEm', NULL, 1, NULL, '2014-05-20 05:26:59', '2014-05-20 05:28:20', '$2y$10$nuxdkg/Z/gKDc4XXlo8SruOkSWU8N23HDrWSEUrNh.5tz94Ec/6uG', NULL, NULL, NULL, '2014-05-20 05:26:59', '2014-05-20 05:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`user_id`, `group_id`) VALUES
(1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
