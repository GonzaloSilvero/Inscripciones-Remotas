-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2020 a las 21:55:26
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sorteo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chicos_i`
--

CREATE TABLE `chicos_i` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `Apellido` varchar(50) COLLATE utf8_bin NOT NULL,
  `Edad` date NOT NULL,
  `Domicilio` varchar(50) COLLATE utf8_bin NOT NULL,
  `Escuela_A` varchar(50) COLLATE utf8_bin NOT NULL,
  `dni` varchar(3) COLLATE utf8_bin NOT NULL,
  `fotocopia` varchar(50) COLLATE utf8_bin NOT NULL,
  `constancia` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor`
--

CREATE TABLE `tutor` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `Apellido` varchar(50) COLLATE utf8_bin NOT NULL,
  `Telefono` varchar(15) COLLATE utf8_bin NOT NULL,
  `Usuario` int(11) NOT NULL,
  `Gmail` varchar(50) COLLATE utf8_bin NOT NULL,
  `Contraseña` varchar(50) COLLATE utf8_bin NOT NULL,
  `Chicos_i` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tutor`
--

INSERT INTO `tutor` (`ID`, `Nombre`, `Apellido`, `Telefono`, `Usuario`, `Gmail`, `Contraseña`, `Chicos_i`) VALUES
(1, 'Nicolas', 'Giglio', '1158548610', 44748933, 'nicosgiglio@gmail.com', '52947156', 1),
(7, 'Gonzalo', 'Silvero', '1130934354', 43634556, 'gonzalosilvero02@gmail.com', '$2y$04$ODlOc5gg2vLkQfKPJpXFye24x3qI0KdhApRNQbT04Fx', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chicos_i`
--
ALTER TABLE `chicos_i`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`),
  ADD KEY `ID_2` (`ID`);

--
-- Indices de la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Chicos_i` (`Chicos_i`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tutor`
--
ALTER TABLE `tutor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `chicos_i`
--
ALTER TABLE `chicos_i`
  ADD CONSTRAINT `chicos_i_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `tutor` (`Chicos_i`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
