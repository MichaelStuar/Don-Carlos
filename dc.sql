-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-11-2017 a las 23:54:31
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Volcado de datos para la tabla `casas`
--

INSERT INTO `casas` (`id`, `propietario`, `edificio`, `apartamento`) VALUES
(1, 1, 2, 'a'),
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
(45, 2, 1, 'callecarrera'),
(46, 0, 2, 'ese apartamento');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=188 ;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id`, `edificio`, `apartamento`, `factura`, `pendiente`, `int_pendiente`, `otros_pendiente`, `extra_pendiente`, `multa_pendiente`, `servicios_publicos_pendiente`, `servicios_pendiente`, `ndnc_pendiente`, `actual`, `interes_actual`, `otros_actual`, `extra_actual`, `multa_actual`, `servicios_publicos_actual`, `servicios_actual`, `ndnc_actual`, `usuario`) VALUES
(4, 1, 1, 2266, 191900, 0, 0, 40000, 0, 0, 0, 0, 191900, 4610, 0, 40000, 0, 0, 0, 0, 18),
(5, 1, 1, 2267, 0, 0, 0, 0, 0, 0, 0, 0, 140100, 0, 33700, 40000, 0, 0, 0, 0, 18),
(6, 1, 1, 2268, 0, 0, 0, 0, 0, 0, 0, 0, 166500, 0, 0, 40000, 0, 0, 0, 0, 18),
(9, 1, 1, 2269, 0, 0, 0, 0, 0, 0, 0, 0, 176600, 0, 0, 40000, 0, 0, 0, 0, 18),
(11, 1, 2, 2270, 383800, 5410, 67400, 80000, 0, 0, 0, 0, 191900, 10830, 33700, 40000, 0, 0, 0, 0, 18),
(13, 1, 2, 2271, 1464722, 63720, 113650, 120000, 25770, 0, 0, 0, 140100, 37880, 33700, 40000, 0, 0, 0, 0, 18),
(15, 1, 2, 2272, 0, 0, 0, 0, 0, 0, 0, 0, 166500, 0, 0, 40000, 0, 0, 0, 0, 18),
(17, 1, 2, 2273, 600, 0, 0, 0, 0, 0, 0, 0, 176600, 10, 0, 40000, 0, 0, 0, 0, 18),
(19, 1, 2, 2274, -400, 0, 0, 0, 0, 0, 0, 0, 191900, 0, 33700, 40000, 0, 0, 0, 0, 18),
(21, 1, 2, 2275, 0, 0, 0, 0, 0, 0, 0, 0, 140100, 0, 0, 40000, 0, 0, 0, 0, 18),
(23, 1, 3, 2276, 1436350, 54840, 0, 120000, 83250, 0, 0, 0, 166500, 34470, 0, 40000, 0, 0, 0, 0, 18),
(25, 1, 3, 2277, 0, 0, 0, 0, 0, 0, 0, 0, 176600, 0, 0, 40000, 0, 0, 0, 0, 18),
(26, 1, 3, 2278, 2175036, 219160, 0, 120000, 0, 0, 0, 0, 191900, 52200, 0, 40000, 0, 0, 0, 0, 18),
(29, 1, 3, 2279, 577700, 0, 0, 0, 0, 0, 0, 0, 140100, 13860, 0, 40000, 0, 0, 0, 0, 18),
(31, 1, 3, 2280, -8765, 0, 0, 0, 0, 0, 0, 0, 166500, 0, 0, 40000, 0, 0, 0, 0, 18),
(32, 1, 3, 2281, 8980, 0, 0, 0, 0, 0, 0, 0, 176600, 220, 0, 40000, 0, 0, 0, 0, 18),
(34, 1, 1, 2282, 673180, 11550, 0, 40000, 0, 0, 0, 0, 191900, 16160, 0, 40000, 0, 0, 0, 0, 18),
(36, 1, 1, 2283, -900, 0, 0, 0, 0, 0, 0, 0, 140100, 0, 0, 40000, 0, 0, 0, 0, 18),
(37, 1, 1, 2284, 240163, 0, 0, 0, 0, 0, 0, 0, 166500, 5760, 33700, 40000, 0, 0, 0, 0, 18),
(40, 1, 1, 2285, 10, 0, 0, 0, 0, 0, 0, 0, 176600, 0, 0, 40000, 0, 62900, 0, 0, 18),
(43, 1, 1, 2286, 0, 0, 0, 0, 0, 0, 0, 0, 191900, 0, 33700, 40000, 0, 0, 0, 0, 18),
(45, 1, 1, 2287, 29190, 0, 0, 0, 0, 0, 0, 0, 176600, 700, 0, 40000, 0, 62900, 0, 0, 18),
(46, 1, 1, 2288, 0, 0, 0, 0, 0, 0, 0, 0, 191900, 0, 0, 40000, 0, 0, 0, 0, 18),
(49, 1, 1, 2289, 0, 0, 0, 0, 0, 0, 0, 0, 176600, 0, 0, 40000, 0, 62900, 0, 0, 18),
(50, 1, 1, 2290, 0, 0, 0, 0, 0, 0, 0, 0, 191900, 0, 0, 40000, 0, 62900, 0, 0, 18),
(52, 1, 1, 2291, 634472, 0, 0, 0, 0, 0, 0, 0, 176600, 15230, 0, 40000, 0, 0, 0, 0, 18),
(53, 1, 1, 2292, 81580, 0, 0, 0, 0, 0, 0, 0, 191900, 1960, 0, 40000, 0, 0, 0, 0, 18),
(56, 1, 1, 2293, 0, 0, 0, 0, 0, 0, 0, 0, 176600, 0, 0, 40000, 0, 0, 0, 0, 18),
(57, 1, 1, 2296, 0, 0, 0, 0, 0, 0, 0, 0, 191900, 0, 0, 40000, 0, 62900, 0, 0, 18),
(58, 1, 1, 2295, 176600, 0, 0, 40000, 0, 62900, 8500, 0, 176600, 5950, 0, 40000, 0, 62900, 8500, 0, 18),
(62, 1, 1, 2294, 0, 0, 0, 0, 0, 0, 0, 0, 191900, 0, 0, 40000, 0, 0, 0, 0, 18),
(66, 1, 1, 2298, 0, 0, 0, 0, 0, 0, 0, 0, 166500, 0, 33700, 40000, 0, 62900, 0, 0, 18),
(67, 1, 1, 2297, 0, 0, 0, 0, 0, 0, 0, 0, 140100, 0, 0, 40000, 0, 0, 0, 0, 18),
(68, 1, 1, 2299, 0, 0, 0, 0, 0, 0, 0, 0, 176600, 0, 0, 40000, 0, 0, 0, 0, 18),
(72, 1, 1, 2303, 2984221, 158590, 0, 120000, 176600, 0, 0, 0, 176600, 71620, 0, 40000, 0, 0, 0, 0, 18),
(73, 1, 1, 2302, 0, 0, 0, 0, 0, 0, 0, 0, 166500, 0, 0, 40000, 0, 0, 0, 0, 18),
(74, 1, 1, 2300, 47940, 0, 0, 0, 0, 0, 0, 0, 191900, 1150, 33700, 40000, 0, 0, 0, 0, 18),
(75, 1, 1, 2305, 0, 0, 0, 0, 0, 0, 0, 0, 140100, 0, 0, 40000, 0, 62900, 0, 0, 18),
(76, 1, 1, 2304, 3713400, 900350, 731900, 120000, 225600, 0, 0, 0, 191900, 106690, 33700, 40000, 0, 0, 0, 0, 18),
(77, 1, 1, 2301, 0, 0, 0, 0, 0, 0, 0, 0, 140100, 0, 0, 40000, 0, 0, 0, 0, 18),
(84, 1, 1, 2307, 12360, 0, 0, 0, 0, 0, 0, 0, 176600, 300, 33700, 40000, 0, 0, 0, 0, 18),
(85, 1, 1, 2306, 0, 0, 0, 0, 0, 0, 0, 0, 166500, 0, 33700, 40000, 0, 0, 0, 0, 18),
(87, 1, 1, 2309, 0, 0, 0, 0, 0, 0, 0, 0, 140100, 0, 0, 40000, 0, 0, 4300, 0, 18),
(88, 1, 1, 2308, 763152, 0, 0, 0, 0, 0, 0, 0, 191900, 18320, 33700, 40000, 0, 0, 0, 0, 18),
(90, 1, 1, 2310, 0, 0, 0, 0, 0, 0, 0, 0, 166500, 0, 0, 40000, 0, 0, 0, 0, 18),
(91, 1, 1, 2313, 140100, 0, 0, 40000, 0, 0, 0, 0, 140100, 3360, 0, 40000, 0, 0, 0, 0, 18),
(92, 1, 1, 2311, -147400, 0, 67400, 80000, 0, 0, 0, 0, 176600, 0, 33700, 40000, 0, 0, 0, 0, 18),
(96, 1, 1, 2312, -80000, 0, 0, 80000, 0, 0, 0, 0, 191900, 0, 0, 40000, 0, 0, 0, 0, 18),
(99, 1, 1, 2316, 250520, 2020, 0, 40000, 0, 0, 0, 0, 166500, 6010, 0, 40000, 0, 0, 0, 0, 18),
(100, 1, 1, 2315, 716790, 13840, 0, 40000, 0, 0, 0, 0, 140100, 17200, 0, 40000, 0, 0, 0, 0, 18),
(101, 1, 1, 2314, 273000, 0, 0, 40000, 0, 0, 0, 0, 166500, 0, 0, 40000, 0, 0, 0, 0, 18),
(102, 1, 1, 2317, 122920, 0, 0, 0, 0, 0, 0, 0, 196300, 2950, 33700, 40000, 0, 0, 0, 0, 18),
(104, 1, 1, 2318, 0, 0, 0, 0, 0, 0, 0, 0, 216500, 0, 33700, 40000, 0, 62900, 0, 0, 18),
(108, 1, 1, 2319, 0, 0, 0, 0, 0, 0, 0, 0, 196300, 0, 0, 40000, 0, 62900, 0, 0, 18),
(111, 1, 1, 2320, 216500, 0, 33700, 40000, 0, 0, 0, 0, 216500, 6000, 33700, 40000, 0, 0, 0, 0, 18),
(113, 1, 1, 2321, 0, 0, 0, 0, 0, 0, 0, 0, 140100, 0, 0, 40000, 0, 62900, 0, 0, 18),
(114, 1, 1, 2322, 0, 0, 0, 0, 0, 0, 0, 0, 166500, 0, 0, 40000, 0, 62900, 0, 0, 18),
(115, 1, 1, 2323, 0, 0, 0, 0, 0, 0, 0, 0, 140100, 0, 0, 40000, 0, 0, 0, 0, 18),
(119, 1, 1, 2324, -8670, 0, 0, 0, 0, 0, 0, 0, 166500, 0, 0, 40000, 0, 0, 0, 0, 18),
(121, 1, 1, 2325, 5379527, 0, 0, 40000, 0, 0, 0, 0, 176600, 129110, 0, 40000, 0, 0, 0, 0, 18),
(124, 1, 1, 2326, 196402, 110, 0, 40000, 0, 62900, 0, 0, 191900, 6220, 0, 40000, 0, 62900, 0, 0, 18),
(125, 1, 1, 2327, 0, 0, 0, 0, 0, 0, 0, 0, 176600, 0, 33700, 40000, 0, 0, 0, 0, 18),
(127, 1, 1, 2328, 0, 0, 0, 0, 0, 0, 0, 0, 191900, 0, 33700, 40000, 0, 0, 0, 0, 18),
(129, 1, 1, 2329, 0, 0, 0, 0, 0, 0, 0, 0, 140100, 0, 0, 40000, 0, 0, 0, 0, 18),
(131, 1, 1, 2330, 0, 0, 0, 0, 0, 0, 0, 0, 166500, 0, 0, 40000, 0, 0, 0, 0, 18),
(133, 1, 1, 2331, -5990, 0, 0, 0, 0, 0, 0, 0, 140100, 0, 0, 40000, 0, 0, 0, 0, 18),
(135, 1, 1, 2332, -100, 0, 0, 0, 0, 0, 0, 0, 166500, 0, 0, 40000, 0, 0, 0, 0, 18),
(138, 1, 1, 2333, 0, 0, 0, 0, 0, 0, 0, 0, 176600, 0, 33700, 40000, 0, 0, 0, 0, 18),
(139, 1, 1, 2334, 0, 0, 0, 0, 0, 0, 0, 0, 191900, 0, 33700, 40000, 0, 0, 0, 0, 18),
(141, 1, 1, 2335, 0, 0, 0, 0, 0, 0, 0, 0, 176600, 0, 33700, 40000, 0, 0, 0, 0, 18),
(143, 1, 1, 2336, 0, 0, 0, 0, 0, 0, 0, 0, 191900, 0, 33700, 40000, 0, 0, 0, 0, 18),
(145, 1, 1, 2337, 236200, 0, 0, 0, 0, 0, 0, 0, 140100, 5670, 0, 40000, 0, 0, 0, 0, 18),
(147, 1, 1, 2338, 0, 0, 0, 0, 0, 0, 0, 0, 166500, 0, 33700, 40000, 0, 0, 0, 0, 18),
(149, 1, 1, 2339, 0, 0, 0, 0, 0, 0, 0, 0, 140100, 0, 0, 40000, 0, 62900, 0, 0, 18),
(151, 1, 1, 2340, 0, 0, 0, 0, 0, 0, 0, 0, 166500, 0, 0, 40000, 0, 0, 0, 0, 18),
(153, 1, 1, 2341, 0, 0, 0, 0, 0, 0, 0, 0, 176600, 0, 0, 40000, 0, 0, 0, 0, 18),
(155, 1, 1, 2342, 1343300, 97810, 0, 120000, 0, 0, 0, 0, 191900, 32240, 0, 40000, 0, 0, 0, 0, 18),
(157, 1, 1, 2343, 176600, 0, 0, 40000, 0, 62900, 4300, 0, 176600, 5850, 0, 40000, 0, 62900, 4300, 0, 18),
(159, 1, 1, 2344, 0, 0, 0, 0, 0, 0, 0, 0, 191900, 0, 33700, 40000, 0, 0, 0, 0, 18),
(161, 1, 1, 2345, 0, 0, 0, 0, 0, 0, 0, 0, 140100, 0, 0, 40000, 0, 0, 0, 0, 18),
(164, 1, 1, 2346, 0, 0, 0, 0, 0, 0, 0, 0, 166500, 0, 0, 40000, 0, 62900, 0, 0, 18),
(165, 1, 1, 2347, -700500, 0, 0, 120000, 0, 0, 0, 0, 140100, 0, 0, 40000, 0, 0, 0, 0, 18),
(166, 1, 1, 2348, 0, 0, 0, 0, 0, 0, 0, 0, 166500, 0, 0, 40000, 0, 0, 0, 0, 18),
(169, 1, 1, 2349, -148800, 0, 0, 0, 0, 0, 0, 0, 176600, 0, 0, 40000, 0, 0, 0, 0, 18),
(171, 1, 1, 2350, 122920, 0, 0, 0, 0, 0, 0, 0, 191900, 2950, 33700, 40000, 0, 0, 0, 0, 18),
(173, 1, 1, 2351, -79700, 0, 0, 80000, 0, 0, 0, 0, 176600, 0, 0, 40000, 0, 0, 0, 0, 18),
(175, 1, 1, 2352, 191371, 0, 0, 40000, 0, 62900, 0, 0, 191900, 6100, 0, 40000, 0, 62900, 0, 0, 18),
(177, 1, 1, 2353, 0, 0, 0, 0, 0, 0, 0, 0, 140100, 0, 0, 40000, 0, 0, 0, 0, 18),
(179, 1, 1, 2354, 0, 0, 0, 0, 0, 0, 0, 0, 166500, 0, 33700, 40000, 0, 0, 0, 0, 18),
(181, 1, 1, 2355, 0, 0, 0, 0, 0, 125800, 0, 0, 0, 0, 0, 0, 0, 62900, 0, 0, 18),
(183, 1, 1, 2356, 0, 0, 0, 0, 0, 0, 228100, 0, 0, 0, 0, 0, 0, 0, 8500, 0, 18),
(185, 1, 1, 2357, 0, 0, 0, 0, 0, 0, 51000, 0, 0, 0, 0, 0, 0, 0, 8500, 0, 18);

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
