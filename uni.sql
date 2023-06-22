-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2023 a las 07:06:36
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
-- Base de datos: `uni`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id_clases` int(15) NOT NULL,
  `nombre_clase` varchar(200) NOT NULL,
  `grado` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id_clases`, `nombre_clase`, `grado`) VALUES
(1, 'Socialesssds', '0'),
(2, 'Ciencias', '5 grado'),
(3, 'Lenguaje', '6 grado'),
(4, 'Matematicas', '9 grado'),
(7, 'Ciencias', '8 grado'),
(8, 'Astronomia', '8 grado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `id_estudiante` int(15) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `fecha_cumple` date NOT NULL,
  `DNI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`id_estudiante`, `nombre`, `apellido`, `direccion`, `fecha_cumple`, `DNI`) VALUES
(2, 'Jose', 'Luis', 'Colonia vista hermosa', '2023-05-02', 15478965),
(3, 'jose', 'rosales', 'casaota', '0000-00-00', 2147483647),
(4, 'Francisco Rodriguez', 'Quijano', '31 Calle Oriente, Colonia La Rabida', '2023-06-06', 85698574),
(5, 'Carlos', 'Quijano', '31 Calle Oriente, Colonia La Rabida', '0000-00-00', 0),
(7, 'Carlos', 'Quijano', '31 Calle Oriente, Colonia La Rabida', '2023-05-30', 0),
(10, 'Carlos', 'Quijano', '31 Calle Oriente, Colonia La Rabida', '2023-05-30', 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teachers`
--

CREATE TABLE `teachers` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fecha_cumple` varchar(50) NOT NULL,
  `id_maestro` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `teachers`
--

INSERT INTO `teachers` (`nombre`, `apellido`, `direccion`, `fecha_cumple`, `id_maestro`) VALUES
('Carlos', 'Quijano', '31 Calle Oriente, Colonia La Rabida', '', 1),
('Jose ', 'Quijano', '31 Calle Oriente, Colonia La Rabida', '2023-05-29', 2),
('Fede ', 'Cautle', 'Cuidad de mexico pasaje 4', '2023-05-29', 3),
('Francisco ', 'Ernesto', 'Santo Tomas, pjs las decilias', '2023-05-29', 4),
('Jose Osorio', 'del Carme', '81 calle oriente colonia la rabia', '2023-05-31', 5),
('Carlos', 'Quijano', '31 Calle Oriente, Colonia La Rabida', '2023-05-31', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contra` varchar(100) NOT NULL DEFAULT ' ',
  `nombre` varchar(200) NOT NULL,
  `dni` int(15) NOT NULL,
  `direccion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `email`, `contra`, `nombre`, `dni`, `direccion`) VALUES
(1, 'quijanoo12345@gmail.com', ' admin', 'carlos', 656565, 'dsdasdasd'),
(3, 'quijanoo1234@gmail.com', 'admin', 'Carlos Quijano', 123456, '31 Calle Oriente, Colonia La Rabida'),
(4, 'carlos@gmial.com', 'admin', 'Jose Luis', 5656565, '31 Calle Oriente, Colonia La Rabida');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id_clases`);

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_estudiante`);

--
-- Indices de la tabla `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id_maestro`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `id_clases` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `id_estudiante` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id_maestro` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
