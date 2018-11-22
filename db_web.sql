-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2018 a las 23:37:17
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `texto` varchar(140) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id`, `texto`, `calificacion`, `id_producto`) VALUES
(31, 'jljkl', 2, 52);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id` int(11) NOT NULL,
  `ruta` text NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id`, `ruta`, `id_producto`) VALUES
(4, 'images/5bf5abfdda023.jpg', 52),
(5, 'images/5bf5abfdec6a6.jpg', 52),
(14, 'images/5bf723953d18c.jpg', 57),
(15, 'images/5bf7239544d8a.jpg', 57);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre`, `descripcion`) VALUES
(18, 'Nike', 'Esto es nike'),
(21, 'Umbro', 'Esto es Umbro'),
(24, 'Adidass', 'Esto es Adidass');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `talle` varchar(8) NOT NULL,
  `stock` tinyint(1) NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `talle`, `stock`, `id_marca`) VALUES
(52, 'adidas', 'dad', 1, 18),
(57, 'nbmbn', 'bbmnb', 34, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `pass` varchar(566) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `pass`, `admin`) VALUES
(3, 'user1', '$2y$10$ySfc3k/1KLTeVx5Pkc1wIO5Xqx247Tlzoy.ZhOO49tH.ent5xu64C', 0),
(5, 'hola', '$2y$10$6D05EcuqxuK0tEwNSEbzgeWe9R237X7wPbwAAFvAsFrcOXodOaOZG', 0),
(7, 'mateo', '$2y$10$i01oxy4Ih5js/OGNkhwASeyATbyhoaamO75uPcjPXgKvzCvwdzvu.', 0),
(19, '1', '$2y$10$2WtNG3YAqhuc2xNrxhBvG.qocJ2MgaVmjSBrRN9AxHq/sOthgbYt.', 0),
(20, '12', '$2y$10$JP9Siv8PG92y35VMaBaSyuJHjyrV7I22Ji89WzIBb9XzS3nch6fq6', 0),
(21, 'admin', '$2y$10$2WtNG3YAqhuc2xNrxhBvG.qocJ2MgaVmjSBrRN9AxHq/sOthgbYt.', 1),
(22, 'xd', '$2y$10$ByvVd8wBMPDUj0jJvuUaDObc7kRX0siGtfcDodP8Edum8Qx7qwToC', 0),
(23, 'xdxd', '$2y$10$Qg2yXTtUMwH67rmPyj5jge1WqddQRrb72LyYIERYN.a8y/4qwYrI6', 0),
(24, 'jejeje', '$2y$10$5BIyGS6ef4uH5uiMtnfQoOoaHpAtJiTDW4RAcDGZT3WdYfe7XPTFy', 0),
(25, 'thth', '$2y$10$oBfzsg1ltW2TJmtUBe3CBuTTD7TZmWfqVgpZJ/G2sobyJZEra7EBa', 0),
(26, 'asd', '$2y$10$qrVSjq2ZWHpMRakhKcA6gOV15i3PKlsZ5aoA2VoUitUR011dx0BB2', 0),
(27, 'cscs', '$2y$10$gjuLAtdXZIIZcf97mQS8z.4wLxoQnkHUcQzQWGiq9P9EohvemGJ1q', 0),
(28, 'asdadsad', '$2y$10$OwWN5M4w1aFdg8zucmEZFe98EpZZE1ilNQg3TBR549jn7GVf6jmH6', 0),
(29, 'jajaja', '$2y$10$1b93dA.ptPyGHgLAkumqnuAU0bZhbe3DAU5PAVm1sPG8Vf4BUckAC', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_admin`
--

CREATE TABLE `usuario_admin` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `pass` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_admin`
--

INSERT INTO `usuario_admin` (`id`, `nombre`, `pass`) VALUES
(1, 'ds', '$2y$10$.0GysE4rzpgCKmBwizgNIeucuUqVW.amXUXFZXhC7K14NGF3SNwXa'),
(2, '1', '$2y$10$WvnMrlLdN5uba7354lCkSu8pStBK2R.k4pnBJVbqhn03SG3fSuNY2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_marca` (`id_marca`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario_admin`
--
ALTER TABLE `usuario_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuario_admin`
--
ALTER TABLE `usuario_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
