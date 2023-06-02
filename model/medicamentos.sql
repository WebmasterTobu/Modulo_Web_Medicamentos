-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2023 a las 01:30:58
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `medicamentos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigo` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `nombre_laboratorio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigo`, `nombre`, `descripcion`, `estado`, `nombre_laboratorio`) VALUES
('22558899', 'NUTELLA', 'CREMA ACHOCOLATADA', 'Activo', 'JHONSON'),
('77885599', 'VITAMINAS ', 'VITAMINAS PARA EL CUERPO', 'Inactivo', 'JHENSEN'),
('85274196', 'SHAMPOO HEAD AND SHOUDER', 'SHAMPOO PARA EL CABELLO GRASO', 'Activo', 'mk'),
('88774455', 'DESPARACITANTE', 'DESPARACITANTE PARA EL ESTOMAGO', 'Inactivo', 'GENFAR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `tipo_documento` varchar(255) NOT NULL,
  `numero_id` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `nombre_contacto` varchar(255) NOT NULL,
  `celular` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`tipo_documento`, `numero_id`, `nombre`, `direccion`, `nombre_contacto`, `celular`) VALUES
('NIT', '1143325819-1', 'DROGAS FAMILIA', 'Bonanza', 'JESUS ALBARRACIN', '3242588817'),
('Cedula', '19266261', 'FAMISANAR', 'bogota cr.15 #23-198', 'MARIELA RESTREPO', '3245447418'),
('NIT_de_Extrangeria', '225441524-45874', 'HEALT CHILDRENS', 'COLORADO USA', 'DANY BOTHET', '55444852215'),
('Cedula_de_Extrangeria', '447785125-2514', 'FUNDEVIDA', 'estados unidos', 'MICHAEL PHELPS', '55148-1524');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recepcion`
--

CREATE TABLE `recepcion` (
  `fecha` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `numero_id` varchar(255) NOT NULL,
  `numero_factura` varchar(255) NOT NULL,
  `cantidad` varchar(255) NOT NULL,
  `lote` varchar(255) NOT NULL,
  `registro_invima` varchar(255) NOT NULL,
  `fecha_vencimiento` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recepcion`
--

INSERT INTO `recepcion` (`fecha`, `hora`, `codigo`, `numero_id`, `numero_factura`, `cantidad`, `lote`, `registro_invima`, `fecha_vencimiento`, `descripcion`) VALUES
('2023-06-02', '16:59', '85274196', '19266261', '2221114455', '100', '78963', '018000424205', '2023-07-07', 'EN MUY BUEN ESTADO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigo` (`codigo`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`numero_id`) USING BTREE,
  ADD KEY `numero_id` (`numero_id`);

--
-- Indices de la tabla `recepcion`
--
ALTER TABLE `recepcion`
  ADD PRIMARY KEY (`numero_factura`),
  ADD KEY `codigo` (`codigo`,`numero_id`),
  ADD KEY `numero_id` (`numero_id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `recepcion`
--
ALTER TABLE `recepcion`
  ADD CONSTRAINT `recepcion_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `producto` (`codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `recepcion_ibfk_2` FOREIGN KEY (`numero_id`) REFERENCES `proveedor` (`numero_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
