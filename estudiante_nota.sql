-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2015 a las 03:33:18
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tarea_uno`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante_nota`
--

CREATE TABLE IF NOT EXISTS `estudiante_nota` (
`id_estudiante_nota` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_notas` int(11) NOT NULL,
  `nota` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante_nota`
--

INSERT INTO `estudiante_nota` (`id_estudiante_nota`, `id_estudiante`, `id_curso`, `id_notas`, `nota`) VALUES
(1, 12013205, 2, 1, 4.5),
(2, 12013205, 2, 1, 4),
(3, 12013205, 2, 1, 3.8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante_nota`
--
ALTER TABLE `estudiante_nota`
 ADD PRIMARY KEY (`id_estudiante_nota`), ADD KEY `id_estudiante_nota_idx` (`id_estudiante`), ADD KEY `id_estudiante_curso_idx` (`id_curso`), ADD KEY `id_notas_notas_idx` (`id_notas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiante_nota`
--
ALTER TABLE `estudiante_nota`
MODIFY `id_estudiante_nota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiante_nota`
--
ALTER TABLE `estudiante_nota`
ADD CONSTRAINT `id_estudiante_curso` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `id_estudiante_nota` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `id_notas_notas` FOREIGN KEY (`id_notas`) REFERENCES `notas` (`id_notas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
