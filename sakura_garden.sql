-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2023 a las 07:18:40
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sakura_garden`
--

-- --------------------------------------------------------
CREATE OR REPLACE DATABASE `sakura_garden` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sakura_garden`;
--
-- Estructura de tabla para la tabla `cupones`
--

CREATE TABLE `cupones` (
  `id_cupon` int(11) NOT NULL,
  `Descuento_cupon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cupones`
--

INSERT INTO `cupones` (`id_cupon`, `Descuento_cupon`) VALUES
(1, 5),
(2, 10),
(3, 15),
(4, 20),
(5, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deliveries_online`
--

CREATE TABLE `deliveries_online` (
  `id_delivery_online` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `fecha_delivery_online` int(11) NOT NULL,
  `hora_delivery_online` int(11) NOT NULL,
  `direccion_delivery_online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_delivery_online`
--

CREATE TABLE `detalle_delivery_online` (
  `ID_detalle_delivery_online` int(11) NOT NULL,
  `ID_plato` int(11) NOT NULL,
  `Cantidad_detalle_delivery_online` int(11) NOT NULL,
  `Precio_total_detalle_delivery_online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_online`
--

CREATE TABLE `factura_online` (
  `ID_factura` int(11) NOT NULL,
  `ID_detalle_delivery_online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `ID_menu` int(11) NOT NULL,
  `Nombre_menu` varchar(50) NOT NULL,
  `Descripcion_menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`ID_menu`, `Nombre_menu`, `Descripcion_menu`) VALUES
(1, 'Platos de la cultura china', 'La cocina china es famosa por su diversidad y sabores unicos.'),
(2, 'Platos de la cultura japonesa', 'La cocina japonesa es conocida por su delicadeza, presentación estética.'),
(3, 'Platos de la cultura coreana', 'La cocina coreana es conocida por su sabor audaz, variedad de platos y énfasis en los ingredientes.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE `mesas` (
  `ID_mesa` int(11) NOT NULL,
  `ID_sucursal` int(11) NOT NULL,
  `Numero_mesa` int(11) NOT NULL,
  `Capacidad_mesa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`ID_mesa`, `ID_sucursal`, `Numero_mesa`, `Capacidad_mesa`) VALUES
(1, 2, 1, 4),
(2, 2, 2, 3),
(3, 2, 3, 6),
(4, 2, 4, 6),
(5, 2, 5, 4),
(6, 2, 6, 4),
(7, 2, 7, 6),
(8, 3, 1, 4),
(9, 3, 2, 4),
(10, 3, 3, 4),
(11, 3, 4, 4),
(12, 3, 5, 6),
(13, 3, 6, 6),
(14, 3, 7, 6),
(15, 1, 1, 4),
(16, 1, 2, 4),
(17, 1, 3, 4),
(18, 1, 4, 4),
(19, 1, 5, 6),
(20, 1, 6, 6),
(21, 1, 7, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE `platos` (
  `ID_plato` int(11) NOT NULL,
  `ID_menu` int(11) NOT NULL,
  `Nombre_plato` varchar(50) NOT NULL,
  `Precio_plato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`ID_plato`, `ID_menu`, `Nombre_plato`, `Precio_plato`) VALUES
(1, 1, 'Wan Ton mee', 8),
(2, 1, 'Pato Pekines', 35),
(3, 1, 'Zongzi', 4),
(4, 1, 'Chow Mein', 12),
(5, 1, 'Huo Guo', 30),
(6, 3, 'Kimchi', 8),
(7, 3, 'Samgyeopsal', 13),
(8, 3, 'Bulgogi', 20),
(9, 3, 'Hobakjuk', 9),
(10, 3, 'Japchae', 12),
(11, 2, 'Sushi', 3),
(12, 2, 'Ramen', 18),
(13, 2, 'Udon', 10),
(14, 2, 'Takoyaki', 7),
(15, 2, 'Onigiri', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos_cupones`
--

CREATE TABLE `platos_cupones` (
  `id_plato_cupon` int(11) NOT NULL,
  `id_cupon` int(11) NOT NULL,
  `id_plato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `platos_cupones`
--

INSERT INTO `platos_cupones` (`id_plato_cupon`, `id_cupon`, `id_plato`) VALUES
(1, 1, 6),
(2, 2, 4),
(3, 3, 14),
(4, 4, 10),
(5, 5, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva_online`
--

CREATE TABLE `reserva_online` (
  `id_reserva_online` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `Fecha_reserva` date NOT NULL,
  `Hora_reserva` time NOT NULL,
  `id_mesa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `id_sucursal` int(11) NOT NULL,
  `nombre_sucursal` varchar(50) NOT NULL,
  `direccion_sucursal` varchar(50) NOT NULL,
  `telefono_sucursal` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`id_sucursal`, `nombre_sucursal`, `direccion_sucursal`, `telefono_sucursal`) VALUES
(1, 'Zen Garden', 'Calle Illampu 704', '22594618'),
(2, 'Dragon Wok', 'Avenida Mariscal Santa Cruz 100', '27964384'),
(3, 'Lotus Blossom', 'Calle Murillo 101', '22294781');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripciones`
--

CREATE TABLE `suscripciones` (
  `id_suscriptor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_inicio_suscriptor` date NOT NULL,
  `fecha_fin_suscriptor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `suscripciones`
--

INSERT INTO `suscripciones` (`id_suscriptor`, `id_usuario`, `fecha_inicio_suscriptor`, `fecha_fin_suscriptor`) VALUES
(1, 5, '2023-06-07', '2023-07-07'),
(2, 6, '2023-05-25', '2023-06-25'),
(3, 1, '2023-03-17', '2023-04-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `apellido_usuario` varchar(50) NOT NULL,
  `correo_usuario` varchar(50) NOT NULL,
  `telefono_usuario` varchar(8) NOT NULL,
  `contrasena_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `apellido_usuario`, `correo_usuario`, `telefono_usuario`, `contrasena_usuario`) VALUES
(1, 'Juan', 'Perez', 'juanperez@gmail.com', '73595336', 'contraseña123'),
(2, 'Maria', 'Gonzales', 'mariagonzalez@gmail.com', '63468634', 'abcd1234'),
(3, 'Pedro', 'Lopez', 'pedrolopez@gmail.com', '68724895', 'mi123secreto'),
(4, 'Laura', 'Rodriguez', 'laurarodriguez@gmail.com', '67325988', 'qwerty123'),
(5, 'Carlos', 'Martinez', 'carlosmartinez@gmail.com', '78246248', 'aethwrebaww'),
(6, 'Ana', 'Sanchez', 'anasanchez@gmail.com', '73495871', 'etrmswnrb'),
(7, 'Javier', 'Hernandez', 'javierhernandez@gmail.com', '76369841', 'tymdtnsba'),
(8, 'Sofia', 'Lopez', 'sofialopez@gmail.com', '68735129', 'rydmetsnrabe'),
(9, 'Daniel', 'Ramirez', 'danielramirez@gmail.com', '65913754', 'ertykusgf'),
(10, 'Isabel', 'Torres', 'isabeltorres@gmail.com', '69342718', 'gnfbdvsa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cupones`
--
ALTER TABLE `cupones`
  ADD PRIMARY KEY (`id_cupon`);

--
-- Indices de la tabla `deliveries_online`
--
ALTER TABLE `deliveries_online`
  ADD PRIMARY KEY (`id_delivery_online`),
  ADD KEY `fk_delon` (`id_usuario`),
  ADD KEY `fk_delo` (`id_sucursal`);

--
-- Indices de la tabla `detalle_delivery_online`
--
ALTER TABLE `detalle_delivery_online`
  ADD PRIMARY KEY (`ID_detalle_delivery_online`);

--
-- Indices de la tabla `factura_online`
--
ALTER TABLE `factura_online`
  ADD PRIMARY KEY (`ID_factura`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`ID_menu`);

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`ID_mesa`),
  ADD KEY `fk_mes` (`ID_sucursal`);

--
-- Indices de la tabla `platos`
--
ALTER TABLE `platos`
  ADD PRIMARY KEY (`ID_plato`),
  ADD KEY `fk_pla` (`ID_menu`);

--
-- Indices de la tabla `platos_cupones`
--
ALTER TABLE `platos_cupones`
  ADD PRIMARY KEY (`id_plato_cupon`),
  ADD KEY `fk_placup` (`id_cupon`),
  ADD KEY `fk_placu` (`id_plato`);

--
-- Indices de la tabla `reserva_online`
--
ALTER TABLE `reserva_online`
  ADD PRIMARY KEY (`id_reserva_online`),
  ADD KEY `fk_res` (`id_usuario`),
  ADD KEY `fk_reson` (`id_sucursal`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`id_sucursal`);

--
-- Indices de la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  ADD PRIMARY KEY (`id_suscriptor`),
  ADD KEY `fk_sus` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cupones`
--
ALTER TABLE `cupones`
  MODIFY `id_cupon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `deliveries_online`
--
ALTER TABLE `deliveries_online`
  MODIFY `id_delivery_online` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_delivery_online`
--
ALTER TABLE `detalle_delivery_online`
  MODIFY `ID_detalle_delivery_online` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura_online`
--
ALTER TABLE `factura_online`
  MODIFY `ID_factura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `ID_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `mesas`
--
ALTER TABLE `mesas`
  MODIFY `ID_mesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `platos`
--
ALTER TABLE `platos`
  MODIFY `ID_plato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `platos_cupones`
--
ALTER TABLE `platos_cupones`
  MODIFY `id_plato_cupon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `reserva_online`
--
ALTER TABLE `reserva_online`
  MODIFY `id_reserva_online` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `id_sucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  MODIFY `id_suscriptor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `deliveries_online`
--
ALTER TABLE `deliveries_online`
  ADD CONSTRAINT `fk_delo` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursales` (`id_sucursal`),
  ADD CONSTRAINT `fk_delon` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD CONSTRAINT `fk_mes` FOREIGN KEY (`ID_sucursal`) REFERENCES `sucursales` (`id_sucursal`);

--
-- Filtros para la tabla `platos`
--
ALTER TABLE `platos`
  ADD CONSTRAINT `fk_pla` FOREIGN KEY (`ID_menu`) REFERENCES `menus` (`ID_menu`);

--
-- Filtros para la tabla `platos_cupones`
--
ALTER TABLE `platos_cupones`
  ADD CONSTRAINT `fk_placu` FOREIGN KEY (`id_plato`) REFERENCES `platos` (`ID_plato`),
  ADD CONSTRAINT `fk_placup` FOREIGN KEY (`id_cupon`) REFERENCES `cupones` (`id_cupon`);

--
-- Filtros para la tabla `reserva_online`
--
ALTER TABLE `reserva_online`
  ADD CONSTRAINT `fk_res` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `fk_reson` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursales` (`id_sucursal`);

--
-- Filtros para la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  ADD CONSTRAINT `fk_sus` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

ALTER TABLE `detalle_delivery_online`
  ADD CONSTRAINT `fk_detdel` FOREIGN KEY (`ID_plato`) REFERENCES `platos` (`ID_plato`);

ALTER TABLE `factura_online`
  ADD CONSTRAINT `fk_fac` FOREIGN KEY (`ID_detalle_delivery_online`) REFERENCES `detalle_delivery_online` (`ID_detalle_delivery_online`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
