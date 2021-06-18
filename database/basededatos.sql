-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.5.5-MariaDB-log - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para tiempos
CREATE DATABASE IF NOT EXISTS `tiempos` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tiempos`;

-- Volcando estructura para tabla tiempos.ciclos
CREATE TABLE IF NOT EXISTS `ciclos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `llave` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `fecha` date NOT NULL,
  `ingreso` time NOT NULL,
  `salida` time DEFAULT NULL,
  `breakin` time DEFAULT NULL,
  `breakout` time DEFAULT NULL,
  `timebreak` float DEFAULT NULL,
  `almuerzo` time DEFAULT NULL,
  `almuerzoout` time DEFAULT NULL,
  `timelunch` float DEFAULT NULL,
  `capacitacion` time DEFAULT NULL,
  `capout` time DEFAULT NULL,
  `timecap` float DEFAULT NULL,
  `pausas` time DEFAULT NULL,
  `pausasout` time DEFAULT NULL,
  `timepausas` float DEFAULT NULL,
  `daño` time DEFAULT NULL,
  `dañoout` time DEFAULT NULL,
  `daño2` time DEFAULT NULL,
  `dañoout2` time DEFAULT NULL,
  `daño3` time DEFAULT NULL,
  `dañoout3` time DEFAULT NULL,
  `timedaño` float DEFAULT NULL,
  `evaluacion` time DEFAULT NULL,
  `evaluacionout` time DEFAULT NULL,
  `timeeva` float DEFAULT NULL,
  `retro` time DEFAULT NULL,
  `retroout` time DEFAULT NULL,
  `timeretro` float DEFAULT NULL,
  `reunion` time DEFAULT NULL,
  `reunionout` time DEFAULT NULL,
  `timereunion` float DEFAULT NULL,
  `baño1` time DEFAULT NULL,
  `timewater1` float DEFAULT NULL,
  `baño2` time DEFAULT NULL,
  `timewater2` float DEFAULT NULL,
  `baño3` time DEFAULT NULL,
  `timewater3` float DEFAULT NULL,
  `calamidad` time DEFAULT NULL,
  `emeMedica` time DEFAULT NULL,
  `total` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `llave` (`llave`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.ciclos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ciclos` DISABLE KEYS */;
/*!40000 ALTER TABLE `ciclos` ENABLE KEYS */;

-- Volcando estructura para tabla tiempos.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla tiempos.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.migrations: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2020_03_31_113105_create_roles_table', 1),
	(5, '2020_03_31_113548_create_role_user_table', 1),
	(6, '2020_04_06_125005_create_permissions_table', 1),
	(7, '2020_04_06_125249_create_permission_role_table', 1),
	(47, '2021_04_19_155905_create_panels_table', 1),
	(48, '2021_04_29_134909_create_ciclos_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla tiempos.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla tiempos.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`),
  UNIQUE KEY `permissions_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.permissions: ~33 rows (aproximadamente)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Index role', 'role.index', 'Un usuario puede listar un Rol', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(2, 'Show role', 'role.show', 'Un usuario puede Ver un Rol', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(3, 'Create role', 'role.create', 'Un usuario puede Crear un Rol', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(4, 'Edit role', 'role.edit', 'Un usuario puede Editar un Rol', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(5, 'Destroy role', 'role.destroy', 'Un usuario puede Destruir un Rol', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(6, 'List user', 'user.index', 'Un usuario puede Listar un Usuario', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(7, 'Show user', 'user.show', 'Un usuario puede Ver un Usuario', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(8, 'Edit user', 'user.edit', 'Un usuario puede Editar un Usuario', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(9, 'Destroy user', 'user.destroy', 'Un usuario puede Destriur un Usuario', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(10, 'Show own user', 'userown.show', 'Un usuario puede Ver a si mismo', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(11, 'Edit own user', 'userown.edit', 'Un usuario puede Editar a si mismo', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(12, 'Index ciclos', 'ciclo.index', 'Un usuario puede listar un ciclos', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(13, 'Create ciclos', 'ciclo.create', 'Un usuario puede Crear un ciclos', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(14, 'Edit ciclos', 'ciclo.edit', 'Un usuario puede Editar un ciclos', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(15, 'Edit Inicio Averia', 'cicloaveria.edit', 'Un usuario puede Editar inicio de averia', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(16, 'Edit Fin Averia', 'cicloaveriaout.edit', 'Un usuario puede Editar fin de averia', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(17, 'Edit Inicio Break', 'ciclobreakin.edit', 'Un usuario puede Editar inicio de break', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(18, 'Edit Fin Break', 'ciclobreakout.edit', 'Un usuario puede Editar fin de break', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(19, 'Edit Inicio Capacitacion', 'ciclocapa.edit', 'Un usuario puede Editar inicio de capa', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(20, 'Edit Fin Capacitacion', 'ciclocapout.edit', 'Un usuario puede Editar fin de capa', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(21, 'Edit Inicio Evaluacion', 'cicloeva.edit', 'Un usuario puede Editar inicio de evaluacion', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(22, 'Edit Fin Evaluacion', 'cicloevaout.edit', 'Un usuario puede Editar fin de evaluacion', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(23, 'Edit Inicio Almuerzo', 'ciclolunch.edit', 'Un usuario puede Editar inicio de lunch', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(24, 'Edit Fin Almuerzo', 'ciclolunchout.edit', 'Un usuario puede Editar fin de lunch', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(25, 'Edit Inicio Pausas', 'ciclopausas.edit', 'Un usuario puede Editar inicio de pausas', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(26, 'Edit Fin Pausas', 'ciclopausasout.edit', 'Un usuario puede Editar fin de pausas', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(27, 'Edit Inicio Retro', 'cicloretro.edit', 'Un usuario puede Editar inicio de retro', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(28, 'Edit Fin Retro', 'cicloretroout.edit', 'Un usuario puede Editar fin de retro', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(29, 'Edit Inicio Reunion', 'cicloreunion.edit', 'Un usuario puede Editar inicio de reunion', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(30, 'Edit Fin Reunion', 'cicloreunionout.edit', 'Un usuario puede Editar fin de reunion', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(31, 'Edit Fin turno', 'ciclosalida.edit', 'Un usuario puede Editar fin de salida', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(32, 'index historico', 'historico.index', 'Un usuario puede indexxar datos historicos', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(33, 'index personal general', 'personalgeneral.index', 'Un usuario puede indexxar datos personal general', '2021-05-17 19:02:50', '2021-05-17 19:02:50');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Volcando estructura para tabla tiempos.permission_role
CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned NOT NULL,
  `permission_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  KEY `permission_role_permission_id_foreign` (`permission_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.permission_role: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;

-- Volcando estructura para tabla tiempos.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full-access` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.roles: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `full-access`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin', 'Administrador', 'yes', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(2, 'Registered User', 'registereduser', 'Usuario Registrado', 'no', '2021-05-17 19:02:50', '2021-05-17 19:02:50'),
	(3, 'Analista User', 'analistauser', 'perfil analista', 'no', '2021-05-17 19:02:50', '2021-05-17 19:02:50');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla tiempos.role_user
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  KEY `role_user_user_id_foreign` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.role_user: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 2, '2021-05-17 19:02:50', '2021-05-17 19:02:50');
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;

-- Volcando estructura para tabla tiempos.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `cedula`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(2, 'admin', 123456789, 'admin@admin.com', NULL, '$2y$10$Hw.lnS/pFzQhZg12K5gNlevDsoa7iXrvgUGU5Hk7pXZdw4z3COema', NULL, '2021-05-17 19:02:50', '2021-05-17 19:02:50');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
