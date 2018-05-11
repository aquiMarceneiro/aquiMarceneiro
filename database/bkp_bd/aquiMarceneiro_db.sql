-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.19-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para teste
CREATE DATABASE IF NOT EXISTS `teste` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `teste`;

-- Copiando estrutura para tabela teste.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela teste.migrations: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2017_10_05_202424_usuario', 1),
	(2, '2017_10_06_155730_Marceneiro', 2),
	(3, '2017_10_06_170714_marceneiros', 3),
	(4, '2017_11_08_164706_usuarios', 4),
	(5, '2017_11_08_170032_usuarios', 5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela teste.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela teste.password_resets: 1 rows
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('romerorussell@hotmail.com.br', '$2y$10$rpD2mKB00imPK3dUZlilV.6qFnPweWtCgXNN/KfaVmaK//anPI4Wa', '2017-11-09 04:34:40');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Copiando estrutura para tabela teste.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cpf_cnpj` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uf` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidade` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cep` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `especialidade` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_usuario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default.jpg',
  `rua` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela teste.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `cpf_cnpj`, `uf`, `cidade`, `cep`, `descricao`, `especialidade`, `tipo`, `foto_usuario`, `rua`, `bairro`) VALUES
	(1, 'Romero Rusel', 'romerorussell@hotmail.com.br', '$2y$10$LX17YTon2kML9QaddhE/leZWqoTl4PC8rFWYXzI9FjAEtMd8.QDLK', 'ZHVc51gksRrSRQhoMAAzO2VtzfAtdL6P8bh5Mwxxgd1CsGMkVNzClBvNjqa4', '2017-12-02 17:31:58', '2017-12-02 17:53:07', '12345678911', 'PE', 'Recife', '1234567', 'Descrição Descrição Descrição Descrição Descrição Descrição Descrição Descrição Descrição Descrição Descrição Descrição', 'Montagem', '2', '1512237184.jpg', NULL, NULL),
	(2, 'Teste', 'teste@teste.com', '$2y$10$hbyuhnbmF6yvEw6/cDi2N.oZmjAYa2gMsP9gIOxc9ULX4lfYvbdJW', NULL, '2018-01-02 14:31:01', '2018-01-02 14:31:01', '123.456.789-11', 'PE', 'Camaragibe', '54762-61', 'Montagem Montagem Montagem Montagem Montagem Montagem', 'Montagem', '2', 'default.jpg', 'Rua Josias Barnabé da Silva', 'Bairro Novo do Carmelo');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
