-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2016 a las 08:49:31
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plataforma`
--
CREATE DATABASE IF NOT EXISTS `plataforma` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `plataforma`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `altaslogs`
--

CREATE TABLE `altaslogs` (
  `id_alta` bigint(20) NOT NULL,
  `id_user` int(5) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bajaslogs`
--

CREATE TABLE `bajaslogs` (
  `id_baja` bigint(20) NOT NULL,
  `id_user` int(5) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `billrequestlog`
--

CREATE TABLE `billrequestlog` (
  `transaction` varchar(255) NOT NULL,
  `msisdn` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `billresponselog`
--

CREATE TABLE `billresponselog` (
  `statusCode` varchar(255) NOT NULL,
  `statusMessage` varchar(255) NOT NULL,
  `txId` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio1`
--

CREATE TABLE `servicio1` (
  `id` int(5) NOT NULL,
  `telefono` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `smsrequestlog`
--

CREATE TABLE `smsrequestlog` (
  `shortcode` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `msisdn` varchar(255) NOT NULL,
  `transaction` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `smsresponselog`
--

CREATE TABLE `smsresponselog` (
  `statusCode` varchar(255) NOT NULL,
  `statusMessage` varchar(255) NOT NULL,
  `txId` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tokenrequestlog`
--

CREATE TABLE `tokenrequestlog` (
  `transaction` varchar(20) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tokenresponselog`
--

CREATE TABLE `tokenresponselog` (
  `statusCode` varchar(255) NOT NULL,
  `statusMessage` varchar(255) NOT NULL,
  `txId` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(5) NOT NULL,
  `telefono` int(9) NOT NULL,
  `password` varchar(40) NOT NULL,
  `estado_alta` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `altaslogs`
--
ALTER TABLE `altaslogs`
  ADD PRIMARY KEY (`id_alta`);

--
-- Indices de la tabla `bajaslogs`
--
ALTER TABLE `bajaslogs`
  ADD PRIMARY KEY (`id_baja`);

--
-- Indices de la tabla `servicio1`
--
ALTER TABLE `servicio1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `altaslogs`
--
ALTER TABLE `altaslogs`
  MODIFY `id_alta` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `bajaslogs`
--
ALTER TABLE `bajaslogs`
  MODIFY `id_baja` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `servicio1`
--
ALTER TABLE `servicio1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2136;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
