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

-- Volcando estructura para tabla tiempos.almuerzo
CREATE TABLE IF NOT EXISTS `almuerzo` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `almuerzo` time NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.almuerzo: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `almuerzo` DISABLE KEYS */;
/*!40000 ALTER TABLE `almuerzo` ENABLE KEYS */;

-- Volcando estructura para tabla tiempos.almuerzo_outs
CREATE TABLE IF NOT EXISTS `almuerzo_outs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `fin almuerzo` time NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.almuerzo_outs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `almuerzo_outs` DISABLE KEYS */;
/*!40000 ALTER TABLE `almuerzo_outs` ENABLE KEYS */;

-- Volcando estructura para tabla tiempos.break_in
CREATE TABLE IF NOT EXISTS `break_in` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `break_in` time NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.break_in: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `break_in` DISABLE KEYS */;
/*!40000 ALTER TABLE `break_in` ENABLE KEYS */;

-- Volcando estructura para tabla tiempos.break_out
CREATE TABLE IF NOT EXISTS `break_out` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `break_out` time NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.break_out: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `break_out` DISABLE KEYS */;
/*!40000 ALTER TABLE `break_out` ENABLE KEYS */;

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
  `timebreak` int(11) DEFAULT NULL,
  `almuerzo` time DEFAULT NULL,
  `almuerzoout` time DEFAULT NULL,
  `timelunch` int(11) DEFAULT NULL,
  `capacitacion` time DEFAULT NULL,
  `capout` time DEFAULT NULL,
  `timecap` int(11) DEFAULT NULL,
  `pausas` time DEFAULT NULL,
  `pausasout` time DEFAULT NULL,
  `timepausas` int(11) DEFAULT NULL,
  `daño` time DEFAULT NULL,
  `dañoout` time DEFAULT NULL,
  `timedaño` int(11) DEFAULT NULL,
  `evaluacion` time DEFAULT NULL,
  `evaluacionout` time DEFAULT NULL,
  `timeeva` int(11) DEFAULT NULL,
  `retro` time DEFAULT NULL,
  `retroout` time DEFAULT NULL,
  `timeretro` int(11) DEFAULT NULL,
  `reunion` time DEFAULT NULL,
  `reunionout` time DEFAULT NULL,
  `timereunion` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `llave` (`llave`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.ciclos: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `ciclos` DISABLE KEYS */;
INSERT INTO `ciclos` (`id`, `llave`, `nombre`, `cedula`, `fecha`, `ingreso`, `salida`, `breakin`, `breakout`, `timebreak`, `almuerzo`, `almuerzoout`, `timelunch`, `capacitacion`, `capout`, `timecap`, `pausas`, `pausasout`, `timepausas`, `daño`, `dañoout`, `timedaño`, `evaluacion`, `evaluacionout`, `timeeva`, `retro`, `retroout`, `timeretro`, `reunion`, `reunionout`, `timereunion`, `total`, `created_at`, `updated_at`) VALUES
	(2, '1234567892021-04-30', 'admin', 123456789, '2021-05-03', '08:00:05', '06:10:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, '2021-04-30 09:05:37', '2021-04-30 17:26:49'),
	(3, '1234567892021-05-01', 'admin', 123456789, '2021-05-01', '02:57:15', '05:48:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-01 14:57:15', '2021-05-01 17:49:18'),
	(12, '1234567892021-05-03', 'admin', 123456789, '2021-05-02', '11:36:49', '09:35:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-03 11:36:49', '2021-05-03 21:37:29'),
	(19, '1234567892021-05-04', 'admin', 123456789, '2021-05-04', '09:13:08', '09:27:55', '09:39:24', '09:40:03', NULL, '09:41:53', '09:42:01', NULL, NULL, '09:17:18', NULL, NULL, '09:18:49', NULL, NULL, '09:19:36', NULL, NULL, '09:20:28', NULL, NULL, '09:23:49', NULL, NULL, '09:24:23', NULL, NULL, '2021-05-04 21:13:08', '2021-05-04 21:43:08'),
	(24, '1234567892021-05-05', 'admin', 123456789, '2021-05-05', '04:40:47', '04:47:58', '04:42:02', '04:42:12', NULL, '04:43:25', '04:43:31', NULL, '04:44:10', '04:44:16', NULL, '04:45:07', '04:45:24', NULL, '04:45:42', '04:45:51', NULL, '04:46:40', '04:47:07', NULL, '04:47:34', '04:47:42', NULL, '04:47:49', '04:47:54', NULL, NULL, '2021-05-05 16:40:47', '2021-05-05 16:48:20'),
	(41, '1234567892021-05-06', 'admin', 123456789, '2021-05-06', '10:56:12', '01:22:04', '01:27:42', '07:35:23', NULL, '02:02:51', '02:05:51', NULL, '11:40:19', '11:52:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12:38:35', '12:57:00', NULL, NULL, '2021-05-06 10:56:12', '2021-05-06 19:35:32'),
	(42, '1234567892021-05-07', 'admin', 123456789, '2021-05-07', '11:22:25', NULL, '11:27:44', '11:29:11', NULL, '03:25:30', '05:26:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-07 11:22:25', '2021-05-07 17:27:51'),
	(43, '1234567892021-05-08', 'admin', 123456789, '2021-05-08', '09:45:49', '02:30:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-08 09:45:49', '2021-05-08 14:30:19'),
	(45, '1234567892021-05-10', 'admin', 123456789, '2021-05-10', '05:17:33', '05:27:18', '05:18:32', '05:18:40', NULL, '05:19:43', '05:19:48', NULL, NULL, NULL, NULL, '05:21:16', NULL, NULL, '05:22:59', '05:23:03', NULL, NULL, NULL, NULL, '05:21:36', '05:21:40', NULL, NULL, NULL, NULL, NULL, '2021-05-10 17:17:33', '2021-05-10 17:54:15'),
	(47, '1234567892021-05-11', 'admin', 123456789, '2021-05-11', '05:54:57', NULL, '07:03:34', '07:05:49', NULL, NULL, '07:33:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-11 17:54:57', '2021-05-11 19:33:53'),
	(52, '1234567892021-05-12', 'admin', 123456789, '2021-05-12', '08:40:20', '09:31:36', '09:15:28', '09:31:28', NULL, '08:49:33', '09:26:39', NULL, '08:41:03', '08:44:02', NULL, NULL, NULL, NULL, '08:40:34', '08:40:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-12 20:40:20', '2021-05-12 21:48:44'),
	(53, '1234567892021-05-13', 'admin', 123456789, '2021-05-13', '10:39:06', '03:50:34', '10:46:10', '10:50:27', NULL, '11:29:40', '11:48:25', NULL, '11:59:03', '12:09:16', NULL, '12:51:53', '01:16:15', NULL, '01:53:19', '01:58:01', NULL, '02:34:45', '02:38:36', NULL, '02:43:17', '03:02:28', NULL, '03:15:57', '03:26:10', NULL, NULL, '2021-05-13 10:39:06', '2021-05-13 17:42:34');
/*!40000 ALTER TABLE `ciclos` ENABLE KEYS */;

-- Volcando estructura para tabla tiempos.entradas
CREATE TABLE IF NOT EXISTS `entradas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `entrada` time NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.entradas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `entradas` DISABLE KEYS */;
/*!40000 ALTER TABLE `entradas` ENABLE KEYS */;

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

-- Volcando datos para la tabla tiempos.migrations: ~47 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2020_03_31_113105_create_roles_table', 1),
	(5, '2020_03_31_113548_create_role_user_table', 1),
	(6, '2020_04_06_125005_create_permissions_table', 1),
	(7, '2020_04_06_125249_create_permission_role_table', 1),
	(8, '2020_10_05_115140_create_reporte_tiempos', 1),
	(9, '2020_10_13_133611_create_almuerzo_out_table', 1),
	(10, '2020_10_13_133611_create_almuerzo_table', 1),
	(11, '2020_10_13_133611_create_break_in_table', 1),
	(12, '2020_10_13_133611_create_break_out_table', 1),
	(13, '2020_10_13_133611_create_entrada_table', 1),
	(14, '2020_10_13_133611_create_salida_table', 1),
	(15, '2020_10_19_153231_create_fija_table', 1),
	(16, '2020_10_19_153231_create_upgrade_table', 1),
	(17, '2020_10_19_162607_create_fijas_table', 1),
	(18, '2020_10_19_162816_create_upgrades_table', 1),
	(19, '2020_10_19_162835_create_prepost_table', 1),
	(20, '2020_10_19_162835_create_preposts_table', 1),
	(21, '2020_10_19_162855_create_rechazos_table', 1),
	(22, '2020_10_28_133040_create_departamentos_table', 1),
	(23, '2020_10_28_134211_create_ciudad_table', 1),
	(24, '2020_10_28_145539_create_tipocliente_table', 1),
	(25, '2020_10_28_150946_create_origen_table', 1),
	(26, '2020_10_28_151138_create_revisado_table', 1),
	(27, '2020_10_28_232703_create_estrato_table', 1),
	(28, '2020_10_28_233258_create_producto_table', 1),
	(29, '2020_10_28_233646_create_velocidad_table', 1),
	(30, '2020_10_28_235259_create_tecnologia_table', 1),
	(31, '2020_10_29_013242_create_adicionales_table', 1),
	(32, '2020_10_29_171132_create_corte_table', 1),
	(33, '2020_10_29_183049_create_planes_prepost_table', 1),
	(34, '2020_10_29_192731_create_activacion_table', 1),
	(35, '2020_10_29_195020_create_historico_de_planes_table', 1),
	(36, '2020_10_29_224417_create_causal_rechazo_table', 1),
	(37, '2020_10_29_232531_create_linea_table', 1),
	(38, '2020_10_30_211004_create_porta_table', 1),
	(39, '2021_01_07_161547_create_portadigitals_table', 1),
	(40, '2021_01_23_141713_create_porta_planes_nuevos_table', 1),
	(41, '2021_02_11_122046_create_upgrade_digitals_table', 1),
	(42, '2021_02_11_141612_create_prepost_digitals_table', 1),
	(43, '2021_02_11_162341_create_fija_digitals_table', 1),
	(44, '2021_02_23_171858_create_linea_nuevas_table', 1),
	(45, '2021_02_23_203740_create_phoenixes_table', 1),
	(46, '2021_02_25_085609_create_optimes_table', 1),
	(47, '2021_04_19_155905_create_panels_table', 1),
	(48, '2021_04_29_134909_create_ciclos_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla tiempos.panels
CREATE TABLE IF NOT EXISTS `panels` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `llave` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cedula` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `ingreso` time DEFAULT NULL,
  `salida` time DEFAULT NULL,
  `breakin` time DEFAULT NULL,
  `breakout` time DEFAULT NULL,
  `timebreak` int(11) DEFAULT NULL,
  `almuerzoin` time DEFAULT NULL,
  `almuerzoout` time DEFAULT NULL,
  `timelunch` int(11) DEFAULT NULL,
  `capacitacion` time DEFAULT NULL,
  `capout` time DEFAULT NULL,
  `timecap` int(11) DEFAULT NULL,
  `pausas` time DEFAULT NULL,
  `pausasout` time DEFAULT NULL,
  `timepau` int(11) DEFAULT NULL,
  `daño` time DEFAULT NULL,
  `dañoout` time DEFAULT NULL,
  `timedaño` int(11) DEFAULT NULL,
  `evaluacion` time DEFAULT NULL,
  `evaluacionout` time DEFAULT NULL,
  `timeeva` int(11) DEFAULT NULL,
  `retro` time DEFAULT NULL,
  `retroout` time DEFAULT NULL,
  `timeretro` int(11) DEFAULT NULL,
  `reunion` time DEFAULT NULL,
  `reunionout` time DEFAULT NULL,
  `timereunion` int(11) DEFAULT NULL,
  `total` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=239 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.panels: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `panels` DISABLE KEYS */;
INSERT INTO `panels` (`id`, `llave`, `nombre`, `cedula`, `fecha`, `ingreso`, `salida`, `breakin`, `breakout`, `timebreak`, `almuerzoin`, `almuerzoout`, `timelunch`, `capacitacion`, `capout`, `timecap`, `pausas`, `pausasout`, `timepau`, `daño`, `dañoout`, `timedaño`, `evaluacion`, `evaluacionout`, `timeeva`, `retro`, `retroout`, `timeretro`, `reunion`, `reunionout`, `timereunion`, `total`, `created_at`, `updated_at`) VALUES
	(33, '1234567892021-04-24', 'admin', '123456789', '2021-04-24', '06:04:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-24 18:04:30', '2021-04-24 18:04:30'),
	(37, '1234567892021-04-25', 'admin', '123456789', '2021-04-25', '10:04:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-26 10:06:22', '2021-04-26 10:06:22'),
	(41, '1234567892021-04-18', 'admin', '123456789', '2021-04-18', '01:04:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-26 13:09:18', '2021-04-26 13:09:18'),
	(42, '1234567892021-04-23', 'admin', '123456789', '2021-04-23', '05:04:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-26 17:43:36', '2021-04-26 17:43:36'),
	(43, '1234567892021-04-22', 'admin', '123456789', '2021-04-22', '05:04:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-26 17:53:18', '2021-04-26 17:53:18'),
	(44, '1234567892021-04-21', 'admin', '123456789', '2021-04-21', '07:04:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-26 19:12:36', '2021-04-26 19:12:36'),
	(45, '1234567892021-04-20', 'admin', '123456789', '2021-04-20', '07:04:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-26 19:49:15', '2021-04-26 19:49:15'),
	(46, '1234567892021-04-19', 'admin', '123456789', '2021-04-19', '08:04:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-26 20:04:03', '2021-04-26 20:04:03'),
	(47, '1234567892021-04-17', 'admin', '123456789', '2021-04-17', '08:04:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-26 20:31:10', '2021-04-26 20:31:10'),
	(50, '1234567892021-04-26', 'admin', '123456789', '2021-04-26', '08:04:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-26 20:42:57', '2021-04-26 20:42:57'),
	(63, '1234567892021-04-26', 'admin', '123456789', '2021-04-26', '07:54:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-26 21:16:28', '2021-04-26 21:16:28'),
	(64, '1234567892021-04-27', 'admin', '123456789', '2021-04-27', '07:50:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-27 09:34:57', '2021-04-27 09:34:57'),
	(65, '1234567892021-04-28', 'admin', '123456789', '2021-04-16', '02:04:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-28 14:15:19', '2021-04-28 14:15:19'),
	(214, '1234567892021-04-28', 'admin', '123456789', '2021-04-28', '07:04:13', NULL, NULL, NULL, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-28 16:13:25', '2021-04-28 16:13:25'),
	(216, '1234567892021-04-29', 'admin', '123456789', '2021-04-15', '09:04:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-29 09:46:22', '2021-04-29 09:46:22'),
	(236, '1234567892021-04-29', 'admin', '123456789', '2021-04-29', '01:04:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-29 13:39:53', '2021-04-29 13:39:53'),
	(237, '1234567892021-05-03', 'admin', '123456789', '2021-05-03', '09:16:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-03 09:16:28', '2021-05-03 09:16:28'),
	(238, '1234567892021-05-03', 'admin', '123456789', '2021-05-03', '09:17:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-03 09:17:09', '2021-05-03 09:17:09');
/*!40000 ALTER TABLE `panels` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.permissions: ~36 rows (aproximadamente)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Index role', 'role.index', 'Un usuario puede listar un Rol', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(2, 'Show role', 'role.show', 'Un usuario puede Ver un Rol', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(3, 'Create role', 'role.create', 'Un usuario puede Crear un Rol', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(4, 'Edit role', 'role.edit', 'Un usuario puede Editar un Rol', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(5, 'Destroy role', 'role.destroy', 'Un usuario puede Destruir un Rol', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(6, 'List user', 'user.index', 'Un usuario puede Listar un Usuario', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(7, 'Show user', 'user.show', 'Un usuario puede Ver un Usuario', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(8, 'Edit user', 'user.edit', 'Un usuario puede Editar un Usuario', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(9, 'Destroy user', 'user.destroy', 'Un usuario puede Destriur un Usuario', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(10, 'Show own user', 'userown.show', 'Un usuario puede Ver a si mismo', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(11, 'Edit own user', 'userown.edit', 'Un usuario puede Editar a si mismo', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(12, 'Index porta', 'porta.index', 'Un usuario puede listar un Porta', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(13, 'Show porta', 'porta.show', 'Un usuario puede Ver un Porta', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(14, 'Create porta', 'porta.create', 'Un usuario puede Crear un Porta', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(15, 'Edit porta', 'porta.edit', 'Un usuario puede Editar un Porta', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(16, 'Destroy porta', 'porta.destroy', 'Un usuario puede Destruir un Porta', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(17, 'Index fija', 'fija.index', 'Un usuario puede listar un Fija', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(18, 'Show fija', 'fija.show', 'Un usuario puede Ver un Fija', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(19, 'Create fija', 'fija.create', 'Un usuario puede Crear un Fija', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(20, 'Edit fija', 'fija.edit', 'Un usuario puede Editar un Fija', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(21, 'Destroy fija', 'fija.destroy', 'Un usuario puede Destruir un Fija', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(22, 'Index upgrade', 'upgrade.index', 'Un usuario puede listar un Upgrade', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(23, 'Show upgrade', 'upgrade.show', 'Un usuario puede Ver un Upgrade', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(24, 'Create upgrade', 'upgrade.create', 'Un usuario puede Crear un Upgrade', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(25, 'Edit upgrade', 'upgrade.edit', 'Un usuario puede Editar un Upgrade', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(26, 'Destroy upgrade', 'upgrade.destroy', 'Un usuario puede Destruir un Upgrade', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(27, 'Index prepost', 'prepost.index', 'Un usuario puede listar un Prepost', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(28, 'Show prepost', 'prepost.show', 'Un usuario puede Ver un Prepost', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(29, 'Create prepost', 'prepost.create', 'Un usuario puede Crear un Prepost', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(30, 'Edit prepost', 'prepost.edit', 'Un usuario puede Editar un Prepost', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(31, 'Destroy prepost', 'prepost.destroy', 'Un usuario puede Destruir un Prepost', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(32, 'Index rechazos', 'rechazos.index', 'Un usuario puede listar un Rechazos', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(33, 'Show rechazos', 'rechazos.show', 'Un usuario puede Ver un Rechazos', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(34, 'Create rechazos', 'rechazos.create', 'Un usuario puede Crear un Rechazos', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(35, 'Edit rechazos', 'rechazos.edit', 'Un usuario puede Editar un Rechazos', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(36, 'Destroy rechazos', 'rechazos.destroy', 'Un usuario puede Destruir un Rechazos', '2021-04-20 11:47:50', '2021-04-20 11:47:50');
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

-- Volcando estructura para tabla tiempos.prepost_digitals
CREATE TABLE IF NOT EXISTS `prepost_digitals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numero` bigint(20) NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documento` bigint(20) NOT NULL,
  `fexpedicion` date NOT NULL,
  `tipocliente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departamento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barrio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `corte` int(11) NOT NULL,
  `planventa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` int(11) NOT NULL,
  `observaciones` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `agente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revisados` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estadorevisado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obs2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `backoffice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.prepost_digitals: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `prepost_digitals` DISABLE KEYS */;
/*!40000 ALTER TABLE `prepost_digitals` ENABLE KEYS */;

-- Volcando estructura para tabla tiempos.reporte_tiempos
CREATE TABLE IF NOT EXISTS `reporte_tiempos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entrada` time NOT NULL,
  `break_in` time NOT NULL,
  `break_out` time NOT NULL,
  `almuerzo_in` time NOT NULL,
  `almuerzo_out` time NOT NULL,
  `salida` time NOT NULL,
  `tiempo_conexion` bigint(20) NOT NULL,
  `cumplimiento` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.reporte_tiempos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `reporte_tiempos` DISABLE KEYS */;
/*!40000 ALTER TABLE `reporte_tiempos` ENABLE KEYS */;

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

-- Volcando datos para la tabla tiempos.roles: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `full-access`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin', 'Administrador', 'yes', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(2, 'Registered User', 'registereduser', 'Usuario Registrado', 'no', '2021-04-20 11:47:50', '2021-04-20 11:47:50'),
	(3, 'Analista User', 'analistauser', 'perfil analista', 'no', '2021-04-20 11:47:50', '2021-04-20 11:47:50');
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

-- Volcando datos para la tabla tiempos.role_user: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2021-04-20 11:47:50', '2021-04-20 11:47:50');
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;

-- Volcando estructura para tabla tiempos.salida
CREATE TABLE IF NOT EXISTS `salida` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `salida` time NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.salida: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `salida` DISABLE KEYS */;
/*!40000 ALTER TABLE `salida` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tiempos.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `cedula`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 123456789, 'admin@admin.com', NULL, '$2y$10$g/wFzHcOJo7/pfciXvRRreaz9sCwZ7IU8w6ji81DEhqfhxXzlady.', NULL, '2021-04-20 11:47:50', '2021-04-20 11:47:50');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
