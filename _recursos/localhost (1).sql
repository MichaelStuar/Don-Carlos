-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-10-2017 a las 01:36:01
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dc`
--
CREATE DATABASE `dc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dc`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casas`
--

CREATE TABLE IF NOT EXISTS `casas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `propietario` int(11) NOT NULL,
  `edificio` int(11) NOT NULL,
  `apartamento` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Volcado de datos para la tabla `casas`
--

INSERT INTO `casas` (`id`, `propietario`, `edificio`, `apartamento`) VALUES
(1, 1, 0, 'a'),
(2, 1, 1, 'a'),
(3, 2, 1, 'callecarrera'),
(4, 2, 1, 'callecarrera'),
(5, 2, 1, 'callecarrera'),
(6, 2, 1, 'callecarrera'),
(7, 2, 1, 'callecarrera'),
(8, 2, 1, 'callecarrera'),
(9, 2, 1, 'callecarrera'),
(10, 2, 1, 'callecarrera'),
(11, 2, 1, 'callecarrera'),
(12, 2, 1, 'callecarrera'),
(13, 2, 1, 'callecarrera'),
(14, 2, 1, 'callecarrera'),
(15, 2, 1, 'callecarrera'),
(16, 2, 1, 'callecarrera'),
(17, 2, 1, 'callecarrera'),
(18, 2, 1, 'callecarrera'),
(19, 2, 1, 'callecarrera'),
(20, 2, 1, 'callecarrera'),
(21, 2, 1, 'callecarrera'),
(22, 2, 1, 'callecarrera'),
(23, 2, 1, 'callecarrera'),
(24, 2, 1, 'callecarrera'),
(25, 2, 1, 'callecarrera'),
(26, 2, 1, 'callecarrera'),
(27, 2, 5, '989'),
(28, 2, 1, 'callecarrera'),
(29, 2, 1, 'callecarrera'),
(30, 2, 1, 'callecarrera'),
(31, 2, 1, 'callecarrera'),
(32, 2, 1, 'callecarrera'),
(33, 2, 1, 'callecarrera'),
(34, 2, 1, 'callecarrera'),
(35, 2, 1, 'callecarrera'),
(36, 2, 1, 'callecarrera'),
(37, 2, 1, 'callecarrera'),
(38, 2, 1, 'callecarrera'),
(39, 2, 1, 'callecarrera'),
(40, 2, 1, 'callecarrera'),
(41, 2, 1, 'callecarrera'),
(42, 2, 1, 'callecarrera'),
(43, 2, 1, 'callecarrera'),
(44, 2, 1, 'callecarrera'),
(45, 2, 1, 'callecarrera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE IF NOT EXISTS `cuentas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `edificio` int(4) NOT NULL,
  `apartamento` int(4) NOT NULL,
  `factura` int(8) NOT NULL,
  `pendiente` int(12) NOT NULL,
  `int_pendiente` int(12) NOT NULL,
  `otros_pendiente` int(12) NOT NULL,
  `extra_pendiente` int(12) NOT NULL,
  `multa_pendiente` int(12) NOT NULL,
  `servicios_publicos_pendiente` int(12) NOT NULL,
  `servicios_pendiente` int(12) NOT NULL,
  `ndnc_pendiente` int(12) NOT NULL,
  `actual` int(12) NOT NULL,
  `interes_actual` int(12) NOT NULL,
  `otros_actual` int(12) NOT NULL,
  `extra_actual` int(12) NOT NULL,
  `multa_actual` int(12) NOT NULL,
  `servicios_publicos_actual` int(12) NOT NULL,
  `servicios_actual` int(12) NOT NULL,
  `ndnc_actual` int(12) NOT NULL,
  `usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edificios`
--

CREATE TABLE IF NOT EXISTS `edificios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `administrador` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `edificios`
--

INSERT INTO `edificios` (`id`, `administrador`, `nombre`, `direccion`) VALUES
(1, 1, 'cualquieraeditada', 'direccioneditada'),
(2, 0, 'prueba2', 'epa la repa'),
(3, 0, '123', '123'),
(4, 0, 'xcnvf', 'alfredi'),
(5, 0, 'alfredi', 'xcnvf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `edificio` int(3) NOT NULL,
  `tipo` int(2) NOT NULL,
  `contrasenia` varchar(200) NOT NULL,
  `doc_id` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `telefono`, `edificio`, `tipo`, `contrasenia`, `doc_id`) VALUES
(1, 'ahorasi', '124124', 3, 0, '123', '6564645'),
(2, 'pepe', '2', 1, 1, 'epa', 'esenum'),
(3, 'robelto', '76878', 1, 1, 'cualquier', 'aasf4'),
(4, 'robelto', '76878', 1, 1, 'cualquier', 'aasf4'),
(5, 'robelto', '76878', 1, 1, 'cualquier', 'aasf4'),
(6, 'robelto', '76878', 1, 1, 'cualquier', 'aasf4'),
(7, 'robelto', '76878', 1, 1, 'cualquier', 'aasf4'),
(8, 'robelto', '76878', 1, 1, 'cualquier', 'aasf4'),
(9, 'robelto', '76878', 1, 1, 'cualquier', 'aasf4'),
(10, 'robelto', '76878', 1, 1, 'cualquier', 'aasf4'),
(11, 'josefo', '2876547', 5, 0, 'oelo', '987697689878690'),
(12, 'roeltoeditado', '2212414', 2, 1, 'oelo', '768689');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
