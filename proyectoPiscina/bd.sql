-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.40-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.1.0.5464
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

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla piscina.entrenamiento
CREATE TABLE IF NOT EXISTS `entrenamiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sesion` int(11) NOT NULL DEFAULT '0',
  `tipos` int(11) NOT NULL DEFAULT '0',
  `estilo` int(11) DEFAULT NULL,
  `series` int(11) DEFAULT NULL,
  `metros` int(11) DEFAULT NULL,
  `descripción` text,
  PRIMARY KEY (`id`),
  KEY `FK_entrenamiento_tipos_entrenamiento` (`tipos`),
  KEY `FK_entrenamiento_distancia_entrenamiento` (`metros`),
  KEY `FK_entrenamiento_estilos_entrenamiento` (`estilo`),
  KEY `FK_entrenamiento_sesion` (`id_sesion`),
  CONSTRAINT `FK_entrenamiento_distancia_entrenamiento` FOREIGN KEY (`metros`) REFERENCES `distancia` (`id`),
  CONSTRAINT `FK_entrenamiento_estilos_entrenamiento` FOREIGN KEY (`estilo`) REFERENCES `estilos_entrenamiento` (`id`),
  CONSTRAINT `FK_entrenamiento_sesion` FOREIGN KEY (`id_sesion`) REFERENCES `sesion` (`id`),
  CONSTRAINT `FK_entrenamiento_tipos_entrenamiento` FOREIGN KEY (`tipos`) REFERENCES `tipos_entrenamiento` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla piscina.entrenamiento_usuarios
CREATE TABLE IF NOT EXISTS `entrenamiento_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(9) CHARACTER SET ucs2 COLLATE ucs2_spanish_ci NOT NULL,
  `marca` int(11) DEFAULT NULL,
  `realizado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_entrenamiento_usuarios_usuarios` (`dni`),
  CONSTRAINT `FK_entrenamiento_usuarios_usuarios` FOREIGN KEY (`dni`) REFERENCES `usuarios` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla piscina.estilos_entrenamiento
CREATE TABLE IF NOT EXISTS `estilos_entrenamiento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET ucs2 COLLATE ucs2_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla piscina.fisico
CREATE TABLE IF NOT EXISTS `fisico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(9) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `altura` float NOT NULL,
  `peso` float NOT NULL,
  `fecha_inserc` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_fisico_usuarios` (`dni`),
  CONSTRAINT `FK_fisico_usuarios` FOREIGN KEY (`dni`) REFERENCES `usuarios` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla piscina.grupos
CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
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

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla piscina.informacion
CREATE TABLE IF NOT EXISTS `informacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla piscina.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla piscina.sesion
CREATE TABLE IF NOT EXISTS `sesion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_final` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla piscina.sesion_usuarios
CREATE TABLE IF NOT EXISTS `sesion_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(9) CHARACTER SET ucs2 COLLATE ucs2_spanish_ci NOT NULL,
  `asistencia` int(11) DEFAULT NULL,
  `comentario` text,
  PRIMARY KEY (`id`),
  KEY `FK_sesion_usuarios_usuarios` (`dni`),
  CONSTRAINT `FK_sesion_usuarios_sesion` FOREIGN KEY (`id`) REFERENCES `sesion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_sesion_usuarios_usuarios` FOREIGN KEY (`dni`) REFERENCES `usuarios` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla piscina.tipos_entrenamiento
CREATE TABLE IF NOT EXISTS `tipos_entrenamiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla piscina.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `dni` varchar(9) COLLATE ucs2_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  `apelllidos` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  `foto` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `rol` int(11) NOT NULL,
  `pass` varchar(20) COLLATE ucs2_spanish_ci NOT NULL,
  PRIMARY KEY (`dni`),
  KEY `FK_usuarios_roles` (`rol`),
  CONSTRAINT `FK_usuarios_roles` FOREIGN KEY (`rol`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla piscina.web
CREATE TABLE IF NOT EXISTS `web` (
  `id` int(11) NOT NULL,
  `telefono` varchar(25) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla piscina.web_fotos
CREATE TABLE IF NOT EXISTS `web_fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` varchar(9) CHARACTER SET ucs2 COLLATE ucs2_spanish_ci NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT '',
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_web_fotos_usuarios` (`id_usuario`),
  CONSTRAINT `FK_web_fotos_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
