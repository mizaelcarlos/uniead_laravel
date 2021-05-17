-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.32-log - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para uniead
CREATE DATABASE IF NOT EXISTS `uniead` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `uniead`;


-- Copiando estrutura para tabela uniead.aluno
DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `aluno_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela uniead.aluno: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `aluno` DISABLE KEYS */;
INSERT INTO `aluno` (`id`, `nome`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Aluno', 'aluno@objetivopi.com.br', NULL, '$2y$10$bTbyH/HTdtvZ816CRIbSOeImm1MnOIVjsFFMLQRz7NGJf08gJ4STK', NULL, NULL, NULL),
	(2, 'Carlos', 'carlos@gmail.com.br', NULL, '$2y$10$YKRLoPyfEUnJEYGBfQghyOI5qe4lgnYB/DD8T6YeHdJsrs4JueMum', NULL, NULL, NULL),
	(3, 'Rafael', 'rafael@gmail.com.br', NULL, '$2y$10$aUmeHZp0hjaO1uBC3GjjWur2u166ivBRzGqt7xRwtmcAuusGgZEFm', NULL, NULL, NULL),
	(4, 'Romero', 'romero@gmail.com.br', NULL, '$2y$10$XK7GQxdOYnYiB/BvPeXkMejSM6mBYOz8mQQyGkN9VWhH8A3YiT.ES', NULL, NULL, NULL),
	(5, 'Alan', 'alan@gmail.com.br', NULL, '$2y$10$kKnSyYQrawvYe1RuIOeDme9D0BuSckOsryZvpILa4E2d2DMBEUjae', NULL, NULL, NULL),
	(6, 'Patricia', 'patrcia@hotmail.com.br', NULL, '$2y$10$MnNTWnCx4Zuo7WWLeOF/JehSf7ZT2DBKOgHX7UVI2htA96Ke3u8D2', NULL, NULL, NULL);
/*!40000 ALTER TABLE `aluno` ENABLE KEYS */;


-- Copiando estrutura para tabela uniead.aluno_atividade
DROP TABLE IF EXISTS `aluno_atividade`;
CREATE TABLE IF NOT EXISTS `aluno_atividade` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `aluno_id` int(10) unsigned NOT NULL,
  `atividade_id` int(10) unsigned NOT NULL,
  `coordenador_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela uniead.aluno_atividade: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `aluno_atividade` DISABLE KEYS */;
/*!40000 ALTER TABLE `aluno_atividade` ENABLE KEYS */;


-- Copiando estrutura para tabela uniead.atividade
DROP TABLE IF EXISTS `atividade`;
CREATE TABLE IF NOT EXISTS `atividade` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date DEFAULT NULL,
  `descricao` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela uniead.atividade: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `atividade` DISABLE KEYS */;
INSERT INTO `atividade` (`id`, `nome`, `data`, `descricao`, `created_at`, `updated_at`) VALUES
	(1, 'Exercicio frot end', '2021-05-04', 'Criar página em HTML5', NULL, NULL),
	(2, 'Criar página de login', '2021-05-04', 'Criar página de login usando HTML 5', NULL, NULL),
	(3, 'Criar algoritimo', '2021-05-06', 'adsadfdas', '2021-05-16 20:53:36', '2021-05-16 20:53:36'),
	(4, 'Teste', '2021-05-04', 'essa é uma atividade', NULL, NULL),
	(5, 'Teste', '2021-05-04', 'essa é uma atividade', NULL, NULL),
	(6, 'Teste', '2021-05-04', 'essa é uma atividade', NULL, NULL),
	(7, 'Teste', '2021-05-04', 'essa é uma atividade', NULL, NULL),
	(8, 'Teste', '2021-05-04', 'essa é uma atividade', NULL, NULL),
	(9, 'Teste', '2021-05-04', 'essa é uma atividade', NULL, NULL);
/*!40000 ALTER TABLE `atividade` ENABLE KEYS */;


-- Copiando estrutura para tabela uniead.coordenador
DROP TABLE IF EXISTS `coordenador`;
CREATE TABLE IF NOT EXISTS `coordenador` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `coordenador_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela uniead.coordenador: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `coordenador` DISABLE KEYS */;
INSERT INTO `coordenador` (`id`, `nome`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Coordenador', 'coordenador@objetivopi.com.br', NULL, '$2y$10$MER6HyhgVaOK3ZlRhYAE9.EyXAs2pdP67BOVTvrA6wXyzku2R1Eie', NULL, NULL, NULL),
	(2, 'fausto', 'fausto@objetivopi.com.br', NULL, '$2y$10$sChqnPZm/2IlKP3NoSTnheeNNuzi5WAe.97SRvxY1TuxBUWLc8v12', NULL, NULL, NULL),
	(3, 'wesley', 'wesley@objetivopi.com.br', NULL, '$2y$10$BYUDtyfvR08Wnq1j1lYNDeMgLBOyYry3L.t7ADOIlo/96UOPYAX9.', NULL, NULL, NULL);
/*!40000 ALTER TABLE `coordenador` ENABLE KEYS */;


-- Copiando estrutura para tabela uniead.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela uniead.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;


-- Copiando estrutura para tabela uniead.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela uniead.migrations: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(20, '2021_05_10_002034_create_teste_seletivo', 1),
	(39, '2014_10_12_000000_create_aluno_table', 2),
	(40, '2014_10_12_000000_create_coordenador_table', 2),
	(41, '2014_10_12_000000_create_users_table', 2),
	(42, '2014_10_12_100000_create_password_resets_table', 2),
	(43, '2019_08_19_000000_create_failed_jobs_table', 2),
	(44, '2020_10_02_131319_create_atividade_table', 2),
	(45, '2020_10_02_133002_create_aluno_atividade_table', 2),
	(46, '2021_05_10_002034_create_inscricao', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Copiando estrutura para tabela uniead.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela uniead.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Copiando estrutura para tabela uniead.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela uniead.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
