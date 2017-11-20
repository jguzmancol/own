-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-11-2017 a las 20:49:53
-- Versión del servidor: 5.7.20-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `iot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devices`
--

CREATE TABLE `devices` (
  `devicesid` int(11) NOT NULL,
  `usersid` int(11) NOT NULL,
  `device` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `devices`
--

INSERT INTO `devices` (`devicesid`, `usersid`, `device`, `description`, `password`, `fecha`) VALUES
(23, 3, 'sami', 'led', 'xTQXdP0Ib5TaCxf8s5li', '2017-11-19 21:17:10'),
(24, 2, 'sami1', 'led', '7GzPnvl4ODobk3c68fBE', '2017-11-19 21:37:47'),
(25, 2, 'sami', 'led', 'ArM8rh1im43LUPMWuWmV', '2017-11-19 22:32:13'),
(26, 3, 'sami1', 'led', 'IrOinH8A2ZJPnL3FZbpp', '2017-11-19 22:33:30'),
(27, 2, 'sami2', 'led', '3Dv6V6l9ct0lkd38kA8M', '2017-11-19 22:42:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `usersid` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`usersid`, `fecha`, `user`, `password`, `mail`, `nombres`, `empresa`, `foto`, `rol`) VALUES
(2, '2017-11-19 21:28:39', 'jguzman', 'b10da0138f41fad2c4802de0132aee33', 'jagjunior23@gmail.com', 'Jose Guzman', 'Gotland Group', 'jose.jpg', 'admin'),
(3, '2017-11-19 22:00:12', 'sguzman', 'b10da0138f41fad2c4802de0132aee33', 'jaguzman@idenpla.com.co', 'Samantha Guzman', 'Gotland Group', 'jose.jpg', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`devicesid`),
  ADD KEY `usersid` (`usersid`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `devices`
--
ALTER TABLE `devices`
  MODIFY `devicesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `usersid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `devices`
--
ALTER TABLE `devices`
  ADD CONSTRAINT `devices_ibfk_1` FOREIGN KEY (`usersid`) REFERENCES `users` (`usersid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

