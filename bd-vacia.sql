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

-- Volcando estructura para tabla piscina.distancia
CREATE TABLE IF NOT EXISTS `distancia` (
  `id` int(11) NOT NULL,
  `distancia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla piscina.distancia: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `distancia` DISABLE KEYS */;
INSERT INTO `distancia` (`id`, `distancia`) VALUES
	(1, 50),
	(2, 100),
	(3, 200),
	(4, 400),
	(5, 800),
	(6, 1500),
	(7, 2000);
/*!40000 ALTER TABLE `distancia` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.entrenamiento
CREATE TABLE IF NOT EXISTS `entrenamiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sesion` int(11) NOT NULL DEFAULT 0,
  `tipos` int(11) NOT NULL DEFAULT 0,
  `estilo` int(11) DEFAULT NULL,
  `series` int(11) DEFAULT NULL,
  `metros` int(11) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_entrenamiento_tipos_entrenamiento` (`tipos`),
  KEY `FK_entrenamiento_distancia_entrenamiento` (`metros`),
  KEY `FK_entrenamiento_estilos_entrenamiento` (`estilo`),
  KEY `FK_entrenamiento_sesion` (`id_sesion`),
  CONSTRAINT `FK_entrenamiento_distancia` FOREIGN KEY (`metros`) REFERENCES `distancia` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `FK_entrenamiento_estilos_entrenamiento` FOREIGN KEY (`estilo`) REFERENCES `estilos_entrenamiento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_entrenamiento_sesion` FOREIGN KEY (`id_sesion`) REFERENCES `sesion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_entrenamiento_tipos_entrenamiento` FOREIGN KEY (`tipos`) REFERENCES `tipos_entrenamiento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla piscina.entrenamiento: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `entrenamiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `entrenamiento` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.estilos_entrenamiento
CREATE TABLE IF NOT EXISTS `estilos_entrenamiento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET ucs2 COLLATE ucs2_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla piscina.estilos_entrenamiento: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `estilos_entrenamiento` DISABLE KEYS */;
INSERT INTO `estilos_entrenamiento` (`id`, `nombre`) VALUES
	(1, 'Mariposa'),
	(2, 'Braza'),
	(3, 'Espalda'),
	(4, 'Libre'),
	(5, 'Crol');
/*!40000 ALTER TABLE `estilos_entrenamiento` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.fisico
CREATE TABLE IF NOT EXISTS `fisico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(9) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `altura` float(10,2) NOT NULL DEFAULT 0.00,
  `peso` float(10,2) NOT NULL DEFAULT 0.00,
  `fecha_inserc` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_fisico_usuarios` (`dni`),
  CONSTRAINT `FK_fisico_usuarios` FOREIGN KEY (`dni`) REFERENCES `usuarios` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla piscina.fisico: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `fisico` DISABLE KEYS */;
/*!40000 ALTER TABLE `fisico` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.grupos
CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla piscina.grupos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `grupos` DISABLE KEYS */;
/*!40000 ALTER TABLE `grupos` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.grupo_usuario
CREATE TABLE IF NOT EXISTS `grupo_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_grupo` int(11) NOT NULL,
  `id_usuario` varchar(50) CHARACTER SET ucs2 COLLATE ucs2_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_grupo_usuario_grupos` (`id_grupo`),
  KEY `FK_grupo_usuario_usuarios` (`id_usuario`),
  CONSTRAINT `FK_grupo_usuario_grupos` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_grupo_usuario_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla piscina.grupo_usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `grupo_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `grupo_usuario` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.informacion
CREATE TABLE IF NOT EXISTS `informacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla piscina.informacion: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `informacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `informacion` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.marcas
CREATE TABLE IF NOT EXISTS `marcas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(9) COLLATE ucs2_spanish_ci NOT NULL,
  `nombre_comp` varchar(30) COLLATE ucs2_spanish_ci NOT NULL,
  `marca` time NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_marcas_usuarios` (`dni`),
  CONSTRAINT `FK_marcas_usuarios` FOREIGN KEY (`dni`) REFERENCES `usuarios` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla piscina.marcas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla piscina.roles: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `nombre`) VALUES
	(6, 'admin'),
	(7, 'usuario'),
	(8, 'entrenador'),
	(9, 'junta'),
	(10, 'parental');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.sesion
CREATE TABLE IF NOT EXISTS `sesion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_final` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla piscina.sesion: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `sesion` DISABLE KEYS */;
/*!40000 ALTER TABLE `sesion` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.sesion_usuarios
CREATE TABLE IF NOT EXISTS `sesion_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(9) CHARACTER SET ucs2 COLLATE ucs2_spanish_ci NOT NULL,
  `id_sesion` int(11) DEFAULT NULL,
  `asistencia` varchar(2) DEFAULT NULL,
  `comentario` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_sesion_usuarios_usuarios` (`dni`),
  KEY `FK_sesion_usuarios_sesion` (`id_sesion`),
  CONSTRAINT `FK_sesion_usuarios_sesion` FOREIGN KEY (`id_sesion`) REFERENCES `sesion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_sesion_usuarios_usuarios` FOREIGN KEY (`dni`) REFERENCES `usuarios` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla piscina.sesion_usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `sesion_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `sesion_usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.tipos_entrenamiento
CREATE TABLE IF NOT EXISTS `tipos_entrenamiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla piscina.tipos_entrenamiento: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tipos_entrenamiento` DISABLE KEYS */;
INSERT INTO `tipos_entrenamiento` (`id`, `tipo`) VALUES
	(1, 'Aeróbico intenso'),
	(2, 'Aeróbico ligero'),
	(3, 'Aeróbico medio'),
	(4, 'Anaeróbico'),
	(5, 'Fuerza'),
	(6, 'Pierna');
/*!40000 ALTER TABLE `tipos_entrenamiento` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `dni` varchar(9) COLLATE ucs2_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  `apelllidos` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  `foto` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `rol` int(11) NOT NULL,
  `pass` varchar(12) COLLATE ucs2_spanish_ci NOT NULL,
  `familiar` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`dni`),
  KEY `FK_usuarios_roles` (`rol`),
  CONSTRAINT `FK_usuarios_roles` FOREIGN KEY (`rol`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla piscina.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.web
CREATE TABLE IF NOT EXISTS `web` (
  `id` int(11) NOT NULL,
  `telefono` varchar(25) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla piscina.web: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `web` DISABLE KEYS */;
INSERT INTO `web` (`id`, `telefono`, `email`) VALUES
	(0, '961 84 92 44', 'cnfenixmanises@gmail.com');
/*!40000 ALTER TABLE `web` ENABLE KEYS */;

-- Volcando estructura para tabla piscina.web_fotos
CREATE TABLE IF NOT EXISTS `web_fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` varchar(9) CHARACTER SET ucs2 COLLATE ucs2_spanish_ci NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT '',
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_web_fotos_usuarios` (`id_usuario`),
  CONSTRAINT `FK_web_fotos_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla piscina.web_fotos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `web_fotos` DISABLE KEYS */;
/*!40000 ALTER TABLE `web_fotos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
