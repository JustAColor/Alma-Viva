-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2018 a las 20:58:08
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdempleados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblempleados`
--

CREATE TABLE `tblempleados` (
  `CedulaEmpleado` varchar(15) COLLATE ucs2_spanish2_ci NOT NULL,
  `NombreEmpleado` varchar(100) COLLATE ucs2_spanish2_ci NOT NULL,
  `Edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `tblempleados`
--

INSERT INTO `tblempleados` (`CedulaEmpleado`, `NombreEmpleado`, `Edad`) VALUES
('12345', 'Omar C Escobar', 19),
('13546', 'asfasf', 25),
('65432', 'oufas', 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpagos`
--

CREATE TABLE `tblpagos` (
  `IdPago` int(11) NOT NULL,
  `CedulaEmpleado` varchar(15) COLLATE ucs2_spanish2_ci NOT NULL,
  `Horas` int(11) NOT NULL,
  `ValorHora` float NOT NULL,
  `TotalPago` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `tblpagos`
--

INSERT INTO `tblpagos` (`IdPago`, `CedulaEmpleado`, `Horas`, `ValorHora`, `TotalPago`) VALUES
(3, '13546', 30, 10000, 300000),
(4, '12345', 10, 3000, 30000),
(5, '12345', 10, 3000, 30000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblempleados`
--
ALTER TABLE `tblempleados`
  ADD PRIMARY KEY (`CedulaEmpleado`);

--
-- Indices de la tabla `tblpagos`
--
ALTER TABLE `tblpagos`
  ADD PRIMARY KEY (`IdPago`),
  ADD KEY `CedulaEmpleado` (`CedulaEmpleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblpagos`
--
ALTER TABLE `tblpagos`
  MODIFY `IdPago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblpagos`
--
ALTER TABLE `tblpagos`
  ADD CONSTRAINT `fk_pagosempleado` FOREIGN KEY (`CedulaEmpleado`) REFERENCES `tblempleados` (`CedulaEmpleado`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
