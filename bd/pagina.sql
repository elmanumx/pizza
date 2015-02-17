-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2015 a las 06:25:37
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
-- Estructura de tabla para la tabla `pagina`
--

CREATE TABLE IF NOT EXISTS `pagina` (
  `id_pagina` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_pagina` varchar(50) DEFAULT NULL,
  `url_pagina` varchar(100) DEFAULT NULL,
  `status_pagina` varchar(5) DEFAULT NULL,
  `id_categoria_pagina` int(11) DEFAULT NULL,
  `icono_pagina` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pagina`),
  KEY `R_32` (`id_categoria_pagina`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `pagina`
--

INSERT INTO `pagina` (`id_pagina`, `nombre_pagina`, `url_pagina`, `status_pagina`, `id_categoria_pagina`, `icono_pagina`) VALUES
(1, 'Cargo Empleados', 'cargo_empleados.php', '1', 2, 'icon-chevron-sign-right icon-2x'),
(2, 'Categoria ingredientes', 'categoria_ingredientes.php', '1', 2, 'icon-chevron-sign-right icon-2x'),
(3, 'Categoria Paginas', 'categorias_pages.php', '1', 3, 'icon-chevron-sign-right icon-2x'),
(4, 'Empleados', 'empleados.php', '1', 2, 'icon-chevron-sign-right icon-2x'),
(5, 'Ingredientes', 'ingredientes.php', '1', 2, 'icon-chevron-sign-right icon-2x'),
(6, 'Inventario', 'inventario.php', '1', 2, 'icon-chevron-sign-right icon-2x'),
(7, 'Mesas', 'mesas.php', '1', 2, 'icon-chevron-sign-right icon-2x'),
(8, 'Paginas', 'pages.php', '1', 3, 'icon-chevron-sign-right icon-2x'),
(9, 'Pizza', 'pizza.php', '1', 2, 'icon-chevron-sign-right icon-2x'),
(10, 'Productos', 'productos.php', '1', 2, 'icon-chevron-sign-right icon-2x'),
(11, 'Reportes', 'reportes.php', '1', 2, 'icon-chevron-sign-right icon-2x'),
(12, 'TamaÃ±o de pizza', 'tamano.php', '1', 2, 'icon-chevron-sign-right icon-2x'),
(13, 'Usuarios', 'usuarios.php', '1', 2, 'icon-chevron-sign-right icon-2x');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pagina`
--
ALTER TABLE `pagina`
  ADD CONSTRAINT `pagina_ibfk_1` FOREIGN KEY (`id_categoria_pagina`) REFERENCES `categoria_pagina` (`id_categoria_pagina`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
