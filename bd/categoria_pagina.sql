-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2015 a las 06:25:07
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_pizzeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_pagina`
--

CREATE TABLE IF NOT EXISTS `categoria_pagina` (
  `id_categoria_pagina` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria_pagina` varchar(50) DEFAULT NULL,
  `status_categoria_pagina` varchar(20) DEFAULT NULL,
  `icono_categoria_pagina` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_categoria_pagina`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `categoria_pagina`
--

INSERT INTO `categoria_pagina` (`id_categoria_pagina`, `nombre_categoria_pagina`, `status_categoria_pagina`, `icono_categoria_pagina`) VALUES
(1, 'venta', '1', 'icon-th icon-1x'),
(2, 'Administrador', '1', 'icon-stackexchange icon-3x'),
(3, 'Root', '1', 'icon-gear icon-3x');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
