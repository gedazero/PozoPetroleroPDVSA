-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2022 a las 21:31:56
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pdvsa`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_DATOSGRAFICO_POZO_1` ()  SELECT * FROM pozo_1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_DATOSGRAFICO_POZO_2` ()  SELECT * FROM pozo_2$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pozo_1`
--

CREATE TABLE `pozo_1` (
  `id` int(11) NOT NULL,
  `medida` float NOT NULL,
  `tiempo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pozo_1`
--

INSERT INTO `pozo_1` (`id`, `medida`, `tiempo`) VALUES
(1, 40.5, '2022-04-01'),
(2, 50.5, '2022-04-02'),
(3, 20, '2022-04-03'),
(4, 12.4, '2022-04-04'),
(5, 2, '2022-04-05'),
(6, 17.7, '2022-04-06'),
(7, 33, '2022-04-07'),
(8, 44, '2022-04-08'),
(9, 30, '2022-04-09'),
(10, 29, '2022-04-10'),
(11, 11, '2022-04-11'),
(12, 44.6, '2022-04-12'),
(13, 89, '2022-04-13'),
(14, 22, '2022-04-14'),
(15, 2, '2022-04-15'),
(16, 44, '2022-04-16'),
(17, 22, '2022-04-17'),
(18, 33.5, '2022-04-18'),
(19, 23.2, '2022-04-19'),
(20, 44.2, '2022-04-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pozo_2`
--

CREATE TABLE `pozo_2` (
  `id` int(11) NOT NULL,
  `medida` float NOT NULL,
  `tiempo` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pozo_2`
--

INSERT INTO `pozo_2` (`id`, `medida`, `tiempo`) VALUES
(1, 50.5, '2022-04-01'),
(2, 32.4, '2022-04-02'),
(3, 41.4, '2022-04-03'),
(4, 55, '2022-04-04'),
(5, 57.7, '2022-04-05'),
(6, 123, '2022-04-06'),
(7, 51, '2022-04-07'),
(8, 22, '2022-04-08'),
(9, 24.4, '2022-04-09'),
(10, 44, '2022-04-10'),
(11, 66.4, '2022-04-11'),
(12, 325, '2022-04-12'),
(13, 62, '2022-04-13'),
(14, 22.7, '2022-04-14'),
(15, 18, '2022-04-15'),
(16, 22.7, '2022-04-16'),
(17, 25.4, '2022-04-17'),
(18, 99, '2022-04-18'),
(19, 88, '2022-04-19'),
(20, 22, '2022-04-20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pozo_1`
--
ALTER TABLE `pozo_1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pozo_2`
--
ALTER TABLE `pozo_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pozo_1`
--
ALTER TABLE `pozo_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `pozo_2`
--
ALTER TABLE `pozo_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
