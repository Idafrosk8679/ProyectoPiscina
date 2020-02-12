-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.8-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.3.0.5876
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para piscina
CREATE DATABASE IF NOT EXISTS `piscina` /*!40100 DEFAULT CHARACTER SET ucs2 COLLATE ucs2_spanish_ci */;
USE `piscina`;

-- Volcando estructura para tabla piscina.entrenamiento
CREATE TABLE IF NOT EXISTS `entrenamiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sesion` int(11) NOT NULL DEFAULT 0,
  `Tipos` varchar(50) NOT NULL,
  `Series` varchar(50) DEFAULT NULL,
  `metros` int(11) DEFAULT NULL,
  `Descripción` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_entrenamiento_tipos-entrenamiento` (`Tipos`),
  CONSTRAINT `FK_entrenamiento_tipos-entrenamiento` FOREIGN KEY (`Tipos`) REFERENCES `tipos_entrenamiento` (`Tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla piscina.entrenamiento: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `entrenamiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `entrenamiento` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.entrenamiento_usuarios
CREATE TABLE IF NOT EXISTS `entrenamiento_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` int(11) DEFAULT NULL,
  `marca` int(11) DEFAULT NULL,
  `realizado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla piscina.entrenamiento_usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `entrenamiento_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `entrenamiento_usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.fisico
CREATE TABLE IF NOT EXISTS `fisico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `altura` float NOT NULL,
  `peso` float NOT NULL,
  `fecha_inserc` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_fisico_usuarios` (`dni`),
  CONSTRAINT `FK_fisico_usuarios` FOREIGN KEY (`dni`) REFERENCES `usuarios` (`dni`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla piscina.fisico: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `fisico` DISABLE KEYS */;
/*!40000 ALTER TABLE `fisico` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.grupos
CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla piscina.grupos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `grupos` DISABLE KEYS */;
/*!40000 ALTER TABLE `grupos` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.grupo_usuario
CREATE TABLE IF NOT EXISTS `grupo_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_grupo` int(11) NOT NULL,
  `id_usuario` varchar(50) CHARACTER SET ucs2 COLLATE ucs2_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__grupos` (`id_grupo`),
  KEY `FK_grupo_usuario_usuarios` (`id_usuario`),
  CONSTRAINT `FK__grupos` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id`),
  CONSTRAINT `FK_grupo_usuario_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla piscina.grupo_usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `grupo_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `grupo_usuario` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla piscina.roles: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `nombre`) VALUES
	(6, 'admin'),
	(7, 'usuario'),
	(8, 'entrenador'),
	(9, 'junta');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.sesion
CREATE TABLE IF NOT EXISTS `sesion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `id_grupo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_sesion_grupos` (`id_grupo`),
  CONSTRAINT `FK_sesion_grupos` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla piscina.sesion: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `sesion` DISABLE KEYS */;
/*!40000 ALTER TABLE `sesion` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.sesion_usuarios
CREATE TABLE IF NOT EXISTS `sesion_usuarios` (
  `id` int(11) DEFAULT NULL,
  `dni` varchar(50) CHARACTER SET ucs2 COLLATE ucs2_spanish_ci NOT NULL,
  `asistencia` int(11) DEFAULT NULL,
  KEY `FK_sesion_usuarios_sesion` (`id`),
  KEY `FK_sesion_usuarios_usuarios` (`dni`),
  CONSTRAINT `FK_sesion_usuarios_sesion` FOREIGN KEY (`id`) REFERENCES `sesion` (`id`),
  CONSTRAINT `FK_sesion_usuarios_usuarios` FOREIGN KEY (`dni`) REFERENCES `usuarios` (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla piscina.sesion_usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `sesion_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `sesion_usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.tipos_entrenamiento
CREATE TABLE IF NOT EXISTS `tipos_entrenamiento` (
  `Tipo` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`Tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla piscina.tipos_entrenamiento: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tipos_entrenamiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipos_entrenamiento` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `dni` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  `apelllidos` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  `foto` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `fecha_nac` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `rol` int(11) NOT NULL,
  `pass` varchar(45) COLLATE ucs2_spanish_ci NOT NULL,
  PRIMARY KEY (`dni`),
  KEY `FK_usuarios_roles` (`rol`),
  CONSTRAINT `FK_usuarios_roles` FOREIGN KEY (`rol`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla piscina.usuarios: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`dni`, `nombre`, `apelllidos`, `foto`, `fecha_nac`, `rol`, `pass`) VALUES
	('1234142t', 'defref', 'ferfe', NULL, NULL, 6, '123piscina'),
	('2345436h', 'sssss', 'aaaaa', NULL, NULL, 7, '123piscina'),
	('23513456h', 'dawdaw', 'dwadwad', NULL, NULL, 8, '123piscina');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
