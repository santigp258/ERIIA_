-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-09-2020 a las 04:01:19
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ERIIA`
--
CREATE DATABASE IF NOT EXISTS `ERIIA` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ERIIA`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_evento`
--

CREATE TABLE `categoria_evento` (
  `id_categoria` tinyint(10) NOT NULL,
  `cat_evento` varchar(50) NOT NULL,
  `icono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria_evento`
--

INSERT INTO `categoria_evento` (`id_categoria`, `cat_evento`, `icono`) VALUES
(1, 'Mañana', 'fa-coffee'),
(2, 'Tarde', 'fa-sun');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_depart` bigint(20) NOT NULL,
  `nombre_depart` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_depart`, `nombre_depart`) VALUES
(1, 'Amazonas'),
(2, 'Antioquia'),
(3, 'Arauca'),
(4, 'Atlántico'),
(5, 'Bolivar'),
(6, 'Boyacá'),
(7, 'Caldas'),
(8, 'Caquetá'),
(9, 'Casanare'),
(10, 'Cauca'),
(11, 'Cesar'),
(12, 'Chocó'),
(13, 'Córdoba'),
(14, 'Cundinamarca'),
(15, 'Guanía'),
(16, 'Guaviare'),
(17, 'Huila'),
(18, 'La Guajira'),
(19, 'Magdalena'),
(20, 'Meta'),
(21, 'Nariño'),
(22, 'Norte de Santander'),
(23, 'Putumayo'),
(24, 'Quindio'),
(25, 'Risaralda'),
(26, 'San Andrés y Providencia'),
(27, 'Santander'),
(28, 'Sucre'),
(29, 'Tolima'),
(30, 'Valle del Cauca'),
(31, 'Vaupés'),
(32, 'Vichada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `evento_id` tinyint(10) NOT NULL,
  `nombre_evento` varchar(200) NOT NULL,
  `fecha_evento` date NOT NULL,
  `hora_evento` time NOT NULL,
  `id_cat_evento` tinyint(4) NOT NULL,
  `id_inv` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `id_cat_evento`, `id_inv`) VALUES
(1, 'Afectaciones a la logística de hidrocarburos en Colombia, resultado de la crisis sanitaria generada por COVID-19.', '2020-09-25', '09:00:00', 1, 5),
(2, '¿Deberíamos modelar el \r\ncomportamiento?', '2020-09-25', '10:00:00', 1, 1),
(3, 'Presente y Futuro de la Distribución Urbana de Mercancías en Colombia', '2020-09-25', '11:00:00', 1, 4),
(4, 'Cadenas de Suministros Resilientes', '2020-09-25', '13:00:00', 2, 3),
(5, 'Diseño de Logística Interna en planta de ensamblaje automotriz', '2020-09-25', '14:00:00', 2, 2),
(6, 'Aún no está la información', '2020-09-25', '15:00:00', 2, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitados`
--

CREATE TABLE `invitados` (
  `invitado_id` tinyint(4) NOT NULL,
  `nombre_invitado` varchar(40) NOT NULL,
  `apellido_invitado` varchar(40) NOT NULL,
  `descripcion` text NOT NULL,
  `url_imagen` varchar(50) NOT NULL,
  `minurl_imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `invitados`
--

INSERT INTO `invitados` (`invitado_id`, `nombre_invitado`, `apellido_invitado`, `descripcion`, `url_imagen`, `minurl_imagen`) VALUES
(1, 'PhD. Oscar David ', 'Barrera Ferro', '<ul>\r\n    <li>-Ingeniero Industrial</li><br>\r\n    <li>-Master en Ingeniería Área Industrial</li><br>\r\n    <li>-Phd Management Sciences</li>\r\n</ul><br>\r\n\r\nActualmente es Profesor Asistente del Departamento de Ingeniería Industrial de la Pontificia Universidad Javeriana', 'oscar.jpg', 'minoscar.jpg'),
(2, 'M.C.I Rafael Emilio', ' Casadiego Sarmiento', '<ul>\r\n    <li>-Ingeniero Industrial</li><br>\r\n    <li>-Especialista en Alta Gerencia</li><br>\r\n    <li>-Magister en Controles Industriales</li><br>\r\n</ul>', 'rafael.jpg', 'minrafael.jpg'),
(3, 'Dr. Benito ', 'Sánchez Lara', '<ul>\r\n    <li>-Doctor en Ingeniería.</li><br>\r\n    <li>-Profesor de tiempo completo en la Facultad de Ingeniería de la (UNAM)</li><br>\r\n</ul>', 'benito.jpg', 'minbenito.jpg'),
(4, 'Dr. Edgardo', ' Sánchez Rodriguez', '<ul>\r\n    <li>-Ingeniero Industrial</li><br>\r\n    <li>-Maestría en Administración</li><br>\r\n</ul>\r\n', 'edgardo.jpg', 'minedgardo.jpg'),
(5, 'MSC. Hernán ', 'Ortiz Arturo', '<ul>\r\n    <li>-Ingeniero Industrial</li><br>\r\n    <li>-Magister en Negocios</li><br>\r\n    <li>-Gerente de Riesgos y Seguridad de Procesos</li><br>\r\n<br>\r\n    <li>-Experiencia como:</li>\r\n    <li>-Profesor Postgrado Escuela de Administración</li><br>\r\n    <li>-Gerente HSEQ</li><br>\r\n    <li>-Profesor de Catedra Ingeniería</li><br>\r\n    <li>-Profesor Cátedra Instituto de Posgrados</li><br>\r\n</ul>', 'hernan.jpg', 'minhernan.jpg'),
(6, 'MSC. Vivian Lorena', ' Chud Pantoja', '<br><ul>\r\n    <li>\r\n        -Magíster en Ingeniería con énfasis en Ingeniería Industrial\r\n    </li><br>\r\n    <li>\r\n        -Ingeniera Industrial\r\n    </li><br>\r\n    <li>\r\n        -Docente en el área de Ingeniería Industrial en la Universidad del Valle Sede Zarzal\r\n    </li><br>\r\n    <li>\r\n        -Directora del Grupo de Investigación Gestión Empresarial, Desarrollo, Sociedad y Cultura – GEDESC de la Sede Zarzal\r\n    </li><br>\r\n    <li>\r\n        -Líder de la sublínea de investigación gestión de donaciones en el proyecto de Investigación SIGELO. \r\n    </li><br>\r\n</ul>', 'chud.jpg', 'minchud.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ocupacion`
--

CREATE TABLE `ocupacion` (
  `id_ocupacion` bigint(20) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ocupacion`
--

INSERT INTO `ocupacion` (`id_ocupacion`, `rol`) VALUES
(1, 'Profesor'),
(2, 'Estudiante'),
(3, 'Particular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Registrados`
--

CREATE TABLE `Registrados` (
  `id_registrado` bigint(20) NOT NULL,
  `nombre_registrado` varchar(50) NOT NULL,
  `apellido_registrado` varchar(50) NOT NULL,
  `email_registrado` varchar(100) NOT NULL,
  `telefono_registrado` varchar(15) NOT NULL,
  `id_ocupacion` bigint(5) NOT NULL,
  `departamento_registrado` bigint(4) NOT NULL,
  `ciudad_registrado` varchar(30) NOT NULL,
  `direccion_registrado` varchar(70) NOT NULL,
  `tyc` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Registrados`
--

INSERT INTO `Registrados` (`id_registrado`, `nombre_registrado`, `apellido_registrado`, `email_registrado`, `telefono_registrado`, `id_ocupacion`, `departamento_registrado`, `ciudad_registrado`, `direccion_registrado`, `tyc`) VALUES
(1, 'Santiagos', 'Guerrero', 'santiguerrero@gmai.com', '12345566', 1, 10, 'sa', '122', 'on'),
(2, 'sa', 'saa', 'santiguerrero@gmai.com', '111111111', 1, 2, 'k', 'd', 'on');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria_evento`
--
ALTER TABLE `categoria_evento`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_depart`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`evento_id`),
  ADD KEY `id_cat_evento` (`id_cat_evento`),
  ADD KEY `id_inv` (`id_inv`);

--
-- Indices de la tabla `invitados`
--
ALTER TABLE `invitados`
  ADD PRIMARY KEY (`invitado_id`);

--
-- Indices de la tabla `ocupacion`
--
ALTER TABLE `ocupacion`
  ADD PRIMARY KEY (`id_ocupacion`);

--
-- Indices de la tabla `Registrados`
--
ALTER TABLE `Registrados`
  ADD PRIMARY KEY (`id_registrado`),
  ADD KEY `departamento_registrado` (`departamento_registrado`),
  ADD KEY `id_ocupacion` (`id_ocupacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria_evento`
--
ALTER TABLE `categoria_evento`
  MODIFY `id_categoria` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_depart` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `evento_id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `invitados`
--
ALTER TABLE `invitados`
  MODIFY `invitado_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `ocupacion`
--
ALTER TABLE `ocupacion`
  MODIFY `id_ocupacion` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `Registrados`
--
ALTER TABLE `Registrados`
  MODIFY `id_registrado` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`id_cat_evento`) REFERENCES `categoria_evento` (`id_categoria`),
  ADD CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`id_inv`) REFERENCES `invitados` (`invitado_id`);

--
-- Filtros para la tabla `Registrados`
--
ALTER TABLE `Registrados`
  ADD CONSTRAINT `Registrados_ibfk_1` FOREIGN KEY (`departamento_registrado`) REFERENCES `departamento` (`id_depart`),
  ADD CONSTRAINT `Registrados_ibfk_2` FOREIGN KEY (`id_ocupacion`) REFERENCES `ocupacion` (`id_ocupacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
