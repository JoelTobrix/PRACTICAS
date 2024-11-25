-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2024 a las 18:35:24
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cover`
--
CREATE DATABASE IF NOT EXISTS `cover` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cover`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conectividad`
--

CREATE TABLE `conectividad` (
  `ID_direccion` int(11) NOT NULL,
  `dns` varchar(20) NOT NULL,
  `conexion` varchar(20) NOT NULL,
  `velocidad` varchar(20) NOT NULL,
  `banda` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `conectividad`
--

INSERT INTO `conectividad` (`ID_direccion`, `dns`, `conexion`, `velocidad`, `banda`) VALUES
(12345, 'dns1', 'fibra', '100Mbps', '1GBps'),
(12346, 'dns2', 'fibra', '150Mbps', '1GBps');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `ID_registro` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`ID_registro`, `usuario`, `contraseña`) VALUES
(1, 'Juan07', '$2y$10$z8aF9f.RZmEvmdvE7ZnO0.PJJg1U4r.OhrTRuhs8T9CQuXL2AX85y'),
(2, 'pepitojoel007@gmail.com', '$2y$10$ln537MQ/mjLM1VFltc9ZNuH/U/AqewwQqnfyvwBBRYd/dJr4jvqde'),
(3, 'Juan07@gmail.com', '$2y$10$qQ8.9AUSg8lPFJx7YesbLeqWm6PoUjT.nTvCD/a1znXWoU2FC4nPa'),
(4, 'joel56@gmail.com', '$2y$10$jJZaS448ZpDjAA84IN9fxu8zPz.Zy5wJ/y07yl2DoUjWGWBFGxyg.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conectividad`
--
ALTER TABLE `conectividad`
  ADD PRIMARY KEY (`ID_direccion`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`ID_registro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conectividad`
--
ALTER TABLE `conectividad`
  MODIFY `ID_direccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12347;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `ID_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
