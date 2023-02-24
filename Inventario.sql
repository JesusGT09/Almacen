-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 23-02-2023 a las 01:34:43
-- Versión del servidor: 10.6.11-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u593576198_menuqr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'insumos'),
(3, 'asuministros'),
(4, 'asuministros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(200) NOT NULL,
  `identificacion` varchar(200) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellido` varchar(200) DEFAULT NULL,
  `correo` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `rol` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `identificacion`, `nombre`, `apellido`, `correo`, `password`, `telefono`, `rol`) VALUES
(1, '111748924944', 'Adrian', 'Rodriguez', 'admin@gmail.com', 'a2d', '3224477818', 'admin'),
(3, '5343434343', 'Andres', 'Cortex', 'andres@gmail.com', 'a2d', '32287659', 'personal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `id` int(11) NOT NULL,
  `cantidad` varchar(200) DEFAULT NULL,
  `fecha` varchar(200) DEFAULT NULL,
  `idProducto` int(11) DEFAULT NULL,
  `idPersonal` int(11) DEFAULT NULL,
  `idTipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`id`, `cantidad`, `fecha`, `idProducto`, `idPersonal`, `idTipo`) VALUES
(6, '10', '2023-02-15', 2, 1, NULL),
(7, '4', '2023-02-04', 2, 1, NULL),
(16, '30', '2023-10-11', 2, 1, 1),
(17, '5', '2023-02-09', 2, 1, NULL),
(18, '50', '2023-5-10', 3, 1, 1),
(19, '50', '2023-5-10', 3, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `precio` varchar(200) DEFAULT NULL,
  `stock` varchar(200) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `estado` varchar(200) DEFAULT NULL,
  `fk_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `precio`, `stock`, `foto`, `estado`, `fk_categoria`) VALUES
(2, 'Tornillo', 'Tornillo de cera con arranque', '4300', '1', 'repuesto.jpg', 'actualizacion', 1),
(3, 'Tronco de madera', 'Tronco de madera ', '4300', '95', '533-5330761_tronco-de-madera-png-imagenes-de-troncos-de.png', 'activo', 1),
(4, 'producto x', 'lorem impuy', '4300', '400', 'descarga.jpg', 'activo', 1),
(18, 'yfyggyug', 'gigujfjgjvjffufj', '3540', '99', 'camisa.jpg', 'activo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salida`
--

CREATE TABLE `salida` (
  `id` int(11) NOT NULL,
  `cantidad` varchar(200) DEFAULT NULL,
  `fecha` varchar(200) DEFAULT NULL,
  `idProducto` int(11) DEFAULT NULL,
  `idPersonal` int(11) DEFAULT NULL,
  `idTipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `salida`
--

INSERT INTO `salida` (`id`, `cantidad`, `fecha`, `idProducto`, `idPersonal`, `idTipo`) VALUES
(2, '6', '2023-02-14', 2, 1, NULL),
(17, '100', '2023-10-26', 2, 1, 1),
(18, '50', '2023-1-11', 3, 1, 3),
(19, '25', '2023-2-8', 3, 1, 1),
(20, '25', '2023-2-8', 3, 1, 1),
(21, '2', '2023-6-8', 2, 1, 3),
(24, '5', '2023-2-23', 3, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `nombre`) VALUES
(1, 'bodega'),
(3, 'Carriles Data'),
(4, 'cantum'),
(6, 'Pedel');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_eproducto` (`idProducto`),
  ADD KEY `FK_epersonal` (`idPersonal`),
  ADD KEY `FK_etipo` (`idTipo`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_producto1` (`fk_categoria`);

--
-- Indices de la tabla `salida`
--
ALTER TABLE `salida`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_productsal` (`idProducto`),
  ADD KEY `FK_spersonal` (`idPersonal`),
  ADD KEY `FK_stipo` (`idTipo`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `salida`
--
ALTER TABLE `salida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `FK_epersonal` FOREIGN KEY (`idPersonal`) REFERENCES `empleado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_eproducto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_etipo` FOREIGN KEY (`idTipo`) REFERENCES `tipo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_producto1` FOREIGN KEY (`fk_categoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `salida`
--
ALTER TABLE `salida`
  ADD CONSTRAINT `FK_productsal` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_spersonal` FOREIGN KEY (`idPersonal`) REFERENCES `empleado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_stipo` FOREIGN KEY (`idTipo`) REFERENCES `tipo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
