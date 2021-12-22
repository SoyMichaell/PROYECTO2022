-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.20-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para proyecto
CREATE DATABASE IF NOT EXISTS `proyecto` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `proyecto`;

-- Volcando estructura para tabla proyecto.departamentos
CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dep_nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dep_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_departamentos_status` (`dep_status`),
  CONSTRAINT `FK_departamentos_status` FOREIGN KEY (`dep_status`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto.departamentos: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
INSERT IGNORE INTO `departamentos` (`id`, `dep_nombre`, `dep_status`, `created_at`, `updated_at`) VALUES
	(6, 'Casanare', 1, '2021-12-22 21:31:25', '2021-12-22 21:31:25');
/*!40000 ALTER TABLE `departamentos` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto.estado_programas
CREATE TABLE IF NOT EXISTS `estado_programas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `est_nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `est_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_estado_programas_status_modules` (`est_status`),
  CONSTRAINT `FK_estado_programas_status_modules` FOREIGN KEY (`est_status`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto.estado_programas: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `estado_programas` DISABLE KEYS */;
INSERT IGNORE INTO `estado_programas` (`id`, `est_nombre`, `est_status`, `created_at`, `updated_at`) VALUES
	(1, 'Activo', 1, '2021-12-05 22:32:51', '2021-12-22 13:46:19'),
	(2, 'Inactivo', 1, '2021-12-05 22:32:57', '2021-12-05 22:32:57');
/*!40000 ALTER TABLE `estado_programas` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto.facultades
CREATE TABLE IF NOT EXISTS `facultades` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fac_nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fac_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_facultades_status` (`fac_status`),
  CONSTRAINT `FK_facultades_status` FOREIGN KEY (`fac_status`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto.facultades: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `facultades` DISABLE KEYS */;
INSERT IGNORE INTO `facultades` (`id`, `fac_nombre`, `fac_status`, `created_at`, `updated_at`) VALUES
	(3, 'Ciencias básicas en ingenierías', 1, '2021-12-22 21:31:47', '2021-12-22 21:31:47');
/*!40000 ALTER TABLE `facultades` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto.metodologia
CREATE TABLE IF NOT EXISTS `metodologia` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `met_nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `met_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_metodologia_status` (`met_status`),
  CONSTRAINT `FK_metodologia_status` FOREIGN KEY (`met_status`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto.metodologia: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `metodologia` DISABLE KEYS */;
INSERT IGNORE INTO `metodologia` (`id`, `met_nombre`, `met_status`, `created_at`, `updated_at`) VALUES
	(4, 'Presencial', 1, '2021-12-22 21:32:27', '2021-12-22 21:32:27'),
	(5, 'Virtual', 1, '2021-12-22 21:32:33', '2021-12-22 21:32:33');
/*!40000 ALTER TABLE `metodologia` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto.migrations: ~28 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2021_12_02_025536_estado_programa', 1),
	(6, '2021_12_02_025556_departamento', 1),
	(7, '2021_12_02_025612_municipio', 1),
	(8, '2021_12_02_025630_facultad', 1),
	(9, '2021_12_02_025650_nivel_formacion', 1),
	(10, '2021_12_02_025707_metodologia', 1),
	(11, '2021_12_05_013353_t_estado_programa', 2),
	(12, '2021_12_05_013820_estado_programas', 3),
	(13, '2021_12_05_035032_departamentos', 4),
	(14, '2021_12_05_042344_municipios', 5),
	(15, '2021_12_05_053122_facultades', 6),
	(16, '2021_12_05_055746_nivel_formacion', 7),
	(17, '2021_12_05_061700_metodologia', 8),
	(18, '2021_12_05_153728_municipios', 9),
	(19, '2021_12_05_172439_programas', 10),
	(20, '2021_12_05_205405_programaciclos', 11),
	(21, '2021_12_05_205604_tiempo', 11),
	(22, '2021_12_05_205659_periodo', 11),
	(23, '2021_12_05_221124_status', 12),
	(24, '2021_12_22_162504_departamentos', 13),
	(25, '2021_12_22_171316_municipios', 14),
	(26, '2021_12_22_192241_facultades', 15),
	(27, '2021_12_22_195438_nivelformacion', 16),
	(28, '2021_12_22_202521_metodologias', 17);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto.municipios
CREATE TABLE IF NOT EXISTS `municipios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mun_nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mun_status` int(11) NOT NULL,
  `mun_departamento` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_municipios_status` (`mun_status`),
  KEY `FK_municipios_departamentos` (`mun_departamento`),
  CONSTRAINT `FK_municipios_departamentos` FOREIGN KEY (`mun_departamento`) REFERENCES `departamentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_municipios_status` FOREIGN KEY (`mun_status`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto.municipios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `municipios` DISABLE KEYS */;
INSERT IGNORE INTO `municipios` (`id`, `mun_nombre`, `mun_status`, `mun_departamento`, `created_at`, `updated_at`) VALUES
	(4, 'Yopal', 1, 6, '2021-12-22 21:31:36', '2021-12-22 21:31:36');
/*!40000 ALTER TABLE `municipios` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto.nivelformacion
CREATE TABLE IF NOT EXISTS `nivelformacion` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `niv_nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `niv_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_nivelformacion_status` (`niv_status`),
  CONSTRAINT `FK_nivelformacion_status` FOREIGN KEY (`niv_status`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto.nivelformacion: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `nivelformacion` DISABLE KEYS */;
INSERT IGNORE INTO `nivelformacion` (`id`, `niv_nombre`, `niv_status`, `created_at`, `updated_at`) VALUES
	(8, 'Técnico', 1, '2021-12-22 21:31:58', '2021-12-22 21:31:58'),
	(9, 'Tecnólogo', 1, '2021-12-22 21:32:03', '2021-12-22 21:32:03'),
	(10, 'Tecnólogo', 1, '2021-12-22 21:32:09', '2021-12-22 21:32:09'),
	(11, 'Pregrado', 1, '2021-12-22 21:32:16', '2021-12-22 21:32:16');
/*!40000 ALTER TABLE `nivelformacion` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto.periodo
CREATE TABLE IF NOT EXISTS `periodo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `per_nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto.periodo: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `periodo` DISABLE KEYS */;
INSERT IGNORE INTO `periodo` (`id`, `per_nombre`, `created_at`, `updated_at`) VALUES
	(1, 'Trimestral', NULL, NULL),
	(2, 'Semestral', NULL, NULL),
	(3, 'Anual', NULL, NULL);
/*!40000 ALTER TABLE `periodo` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto.personal_access_tokens: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto.programas
CREATE TABLE IF NOT EXISTS `programas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pro_estado_programa` int(10) NOT NULL,
  `pro_departamento` int(10) NOT NULL,
  `pro_municipio` int(10) NOT NULL,
  `pro_facultad` int(10) NOT NULL,
  `pro_nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_titulo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_codigosnies` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_resolucion` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_fecha_ult` date NOT NULL,
  `pro_fecha_prox` date NOT NULL,
  `pro_nivel_formacion` int(10) NOT NULL,
  `pro_programa_ciclos` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_metodologia` int(10) NOT NULL,
  `pro_duraccion` int(11) NOT NULL,
  `pro_periodo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_creditos` int(11) NOT NULL,
  `pro_asignaturas` int(11) NOT NULL,
  `pro_norma` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `pro_director_programa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_programas_estado_programas` (`pro_estado_programa`),
  KEY `FK_programas_departamentos` (`pro_departamento`),
  KEY `FK_programas_municipios` (`pro_municipio`),
  KEY `FK_programas_facultades` (`pro_facultad`),
  KEY `FK_programas_nivelformacion` (`pro_nivel_formacion`),
  KEY `FK_programas_metodologia` (`pro_metodologia`),
  CONSTRAINT `FK_programas_departamentos` FOREIGN KEY (`pro_departamento`) REFERENCES `departamentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_programas_estado_programas` FOREIGN KEY (`pro_estado_programa`) REFERENCES `estado_programas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_programas_facultades` FOREIGN KEY (`pro_facultad`) REFERENCES `facultades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_programas_metodologia` FOREIGN KEY (`pro_metodologia`) REFERENCES `metodologia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_programas_municipios` FOREIGN KEY (`pro_municipio`) REFERENCES `municipios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_programas_nivelformacion` FOREIGN KEY (`pro_nivel_formacion`) REFERENCES `nivelformacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto.programas: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `programas` DISABLE KEYS */;
INSERT IGNORE INTO `programas` (`id`, `pro_estado_programa`, `pro_departamento`, `pro_municipio`, `pro_facultad`, `pro_nombre`, `pro_titulo`, `pro_codigosnies`, `pro_resolucion`, `pro_fecha_ult`, `pro_fecha_prox`, `pro_nivel_formacion`, `pro_programa_ciclos`, `pro_metodologia`, `pro_duraccion`, `pro_periodo`, `pro_creditos`, `pro_asignaturas`, `pro_norma`, `pro_director_programa`, `created_at`, `updated_at`) VALUES
	(1, 1, 6, 4, 3, 'Ingeniería de sistemas', 'Ingeniero de sistemas', '4350', 'Resolución Número 017996 del 21 de septiembre del 2021. Con una vigencia de (7) siete años.', '2021-12-22', '2021-12-23', 11, '1', 4, 10, '2', 164, 60, 'xxxx', 'Michael Rodriguez Hernandez', '2021-12-22 21:35:38', '2021-12-22 21:58:30'),
	(2, 1, 6, 4, 3, 'Ingeniería de sistemas', 'Ingeniero de sistemas', '4350', 'Resolución Número 017996 del 21 de septiembre del 2021. Con una vigencia de (7) siete años.', '2021-12-22', '2021-12-23', 11, '1', 4, 10, '2', 164, 60, 'xxxx', 'Michael Rodriguez Hernandez', '2021-12-22 21:35:38', '2021-12-22 21:58:30'),
	(3, 1, 6, 4, 3, 'Ingeniería de sistemas', 'Ingeniero de sistemas', '4350', 'Resolución Número 017996 del 21 de septiembre del 2021. Con una vigencia de (7) siete años.', '2021-12-22', '2021-12-23', 11, '1', 4, 10, '2', 164, 60, 'xxxx', 'Michael Rodriguez Hernandez', '2021-12-22 21:35:38', '2021-12-22 21:58:30'),
	(4, 1, 6, 4, 3, 'Ingeniería de sistemas', 'Ingeniero de sistemas', '4350', 'Resolución Número 017996 del 21 de septiembre del 2021. Con una vigencia de (7) siete años.', '2021-12-22', '2021-12-23', 11, '1', 4, 10, '2', 164, 60, 'xxxx', 'Michael Rodriguez Hernandez', '2021-12-22 21:35:38', '2021-12-22 21:58:30'),
	(5, 1, 6, 4, 3, 'Ingeniería de sistemas', 'Ingeniero de sistemas', '4350', 'Resolución Número 017996 del 21 de septiembre del 2021. Con una vigencia de (7) siete años.', '2021-12-22', '2021-12-23', 11, '1', 4, 10, '2', 164, 60, 'xxxx', 'Michael Rodriguez Hernandez', '2021-12-22 21:35:38', '2021-12-22 21:58:30'),
	(6, 1, 6, 4, 3, 'Ingeniería de sistemas', 'Ingeniero de sistemas', '4350', 'Resolución Número 017996 del 21 de septiembre del 2021. Con una vigencia de (7) siete años.', '2021-12-22', '2021-12-23', 11, '1', 4, 10, '2', 164, 60, 'xxxx', 'Michael Rodriguez Hernandez', '2021-12-22 21:35:38', '2021-12-22 21:58:30'),
	(7, 1, 6, 4, 3, 'Ingeniería de sistemas', 'Ingeniero de sistemas', '4350', 'Resolución Número 017996 del 21 de septiembre del 2021. Con una vigencia de (7) siete años.', '2021-12-22', '2021-12-23', 11, '1', 4, 10, '2', 164, 60, 'xxxx', 'Michael Rodriguez Hernandez', '2021-12-22 21:35:38', '2021-12-22 21:58:30'),
	(8, 1, 6, 4, 3, 'Ingeniería de sistemas', 'Ingeniero de sistemas', '4350', 'Resolución Número 017996 del 21 de septiembre del 2021. Con una vigencia de (7) siete años.', '2021-12-22', '2021-12-23', 11, '1', 4, 10, '2', 164, 60, 'xxxx', 'Michael Rodriguez Hernandez', '2021-12-22 21:35:38', '2021-12-22 21:58:30'),
	(9, 1, 6, 4, 3, 'Ingeniería de sistemas', 'Ingeniero de sistemas', '4350', 'Resolución Número 017996 del 21 de septiembre del 2021. Con una vigencia de (7) siete años.', '2021-12-22', '2021-12-23', 11, '1', 4, 10, '2', 164, 60, 'xxxx', 'Michael Rodriguez Hernandez', '2021-12-22 21:35:38', '2021-12-22 21:58:30'),
	(10, 1, 6, 4, 3, 'Ingeniería de sistemas', 'Ingeniero de sistemas', '4350', 'Resolución Número 017996 del 21 de septiembre del 2021. Con una vigencia de (7) siete años.', '2021-12-22', '2021-12-23', 11, '1', 4, 10, '2', 164, 60, 'xxxx', 'Michael Rodriguez Hernandez', '2021-12-22 21:35:38', '2021-12-22 21:58:30'),
	(11, 1, 6, 4, 3, 'Ingeniería de sistemas', 'Ingeniero de sistemas', '4350', 'Resolución Número 017996 del 21 de septiembre del 2021. Con una vigencia de (7) siete años.', '2021-12-22', '2021-12-23', 11, '1', 4, 10, '2', 164, 60, 'xxxx', 'Michael Rodriguez Hernandez', '2021-12-22 21:35:38', '2021-12-22 21:58:30');
/*!40000 ALTER TABLE `programas` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto.programa_ciclos
CREATE TABLE IF NOT EXISTS `programa_ciclos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prc_nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto.programa_ciclos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `programa_ciclos` DISABLE KEYS */;
INSERT IGNORE INTO `programa_ciclos` (`id`, `prc_nombre`, `created_at`, `updated_at`) VALUES
	(1, 'Si', NULL, NULL),
	(2, 'No', NULL, NULL);
/*!40000 ALTER TABLE `programa_ciclos` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto.status
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sta_nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto.status: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT IGNORE INTO `status` (`id`, `sta_nombre`, `created_at`, `updated_at`) VALUES
	(1, 'Activo', '2021-12-05 17:27:45', NULL),
	(2, 'Inactivo', '2021-12-05 17:27:46', NULL);
/*!40000 ALTER TABLE `status` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto.tiempo
CREATE TABLE IF NOT EXISTS `tiempo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto.tiempo: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `tiempo` DISABLE KEYS */;
INSERT IGNORE INTO `tiempo` (`id`, `created_at`, `updated_at`) VALUES
	(1, NULL, NULL),
	(2, NULL, NULL),
	(3, NULL, NULL),
	(4, NULL, NULL),
	(5, NULL, NULL),
	(6, NULL, NULL),
	(7, NULL, NULL),
	(8, NULL, NULL),
	(9, NULL, NULL),
	(10, NULL, NULL),
	(11, NULL, NULL),
	(12, NULL, NULL);
/*!40000 ALTER TABLE `tiempo` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `per_tipo_documento` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_numero_documento` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_apellido` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_telefono1` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_telefono2` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_direccion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_id_departamento` int(11) NOT NULL,
  `per_id_municipio` int(11) NOT NULL,
  `per_fecha_nacimiento` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `per_tipo_documento`, `per_numero_documento`, `per_nombre`, `per_apellido`, `per_telefono1`, `per_telefono2`, `per_direccion`, `email`, `email_verified_at`, `password`, `per_id_departamento`, `per_id_municipio`, `per_fecha_nacimiento`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'C.C', '1006450866', 'Michael', 'Rodriguez', '3223342508', '3223342508', 'Calle 29 16 bis 32', 'michaelrodriguezhernandez@unisangil.edu.co', NULL, '$2y$10$AJUlgH/UXE1fbWsa96vtU.YI4xOWWsqs0YbeuToyh7ASN88p5On7e', 1, 1, '2000-11-26', NULL, '2021-12-02 03:20:10', '2021-12-02 03:20:10');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
