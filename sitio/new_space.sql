-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2018 a las 20:57:21
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `new_space`
--
CREATE DATABASE IF NOT EXISTS `new_space` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `new_space`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_comentario` int(5) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(5) NOT NULL,
  `comentario` varchar(300) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id_comentario`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `id_usuario`, `comentario`, `fecha`) VALUES
(9, 3, 'hola 1 \r\n', '2018-03-14 15:53:07'),
(10, 3, 'hola 2 ', '2018-03-14 15:53:11'),
(11, 3, 'hoola3 ', '2018-03-14 15:53:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `perfil` varchar(200) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `email`, `usuario`, `clave`, `perfil`) VALUES
(3, 'trini', 'Guerra', 'asd@hotmail.com', 'trini', '81dc9bdb52d04dc20036dbd8313ed055', '6293dc4115.jpg'),
(4, 'angy', 'gueera', 'hhh@uhu.c', 'angy', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(5, 'fran', 'GUERRA', 'asd@ht.cm', 'fran', 'd93591bdf7860e1e4ee2fca799911215', ''),
(6, 'mama', 'dytd', 'hgfyt@ty.vm', 'mama', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(7, 'mama', 'dytd', 'hgfyt@ty.vm', 'mama2', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(8, 'papa', 'fghh', 'dxfg@j.v', 'papa', '81dc9bdb52d04dc20036dbd8313ed055', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
