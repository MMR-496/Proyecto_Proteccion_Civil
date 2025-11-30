-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 30-11-2025 a las 18:41:46
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proteccion_civil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `id_instructor` int(11) NOT NULL,
  `modalidad` varchar(10) NOT NULL,
  `descripción` varchar(255) NOT NULL,
  `topico` varchar(100) NOT NULL,
  `lugar` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `id_instructor`, `modalidad`, `descripción`, `topico`, `lugar`) VALUES
(1, 1, 'Online', 'Esto es un curso', 'Primeros Auxilios', 'Veracruz'),
(9, 5, 'Presencial', 'Que no cunda el pánico', 'Cómo actuar en situaciones de peligro', 'Manzanillo'),
(10, 13, 'Online', 'Cómo ofrecer ayuda en desastres naturales', 'Primeros auxilios', 'Minatitlan'),
(11, 9, 'Presencial', 'Proyecto ADA', 'Programación', 'Colima'),
(12, 4, 'Presencial', 'Aprende a defenderte', 'Defensa personal', 'Coquimatlan'),
(13, 16, 'Presencial', 'Esto es un curso inventado', 'Segundos auxilios jeje', 'Manzanillo'),
(14, 2, 'Online', 'Cómo actuar durante un incendio', 'Incendios', 'Facultad de Telemática'),
(15, 4, 'Online', 'Prueba 23', 'Prueba 23', 'CDMX'),
(16, 2, 'Online', 'Prueba de Correo, si te llega esto sí jaló :D', 'Prueba', 'Prubea'),
(17, 2, 'Presencial', 'Ejemplo', 'Ejemplo', 'Ejemplo'),
(20, 4, 'Online', 'test', 'test', 'test'),
(21, 25, 'Online', 'queso', 'test', 'Cihuatlán'),
(22, 27, 'Online', 'Prueba', 'Prueba', 'Prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `id_instructor` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `vigencia` varchar(10) NOT NULL,
  `procedencia` varchar(50) NOT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`id_instructor`, `nombre`, `tipo`, `vigencia`, `procedencia`, `telefono`, `correo`) VALUES
(1, 'Coco', 'Instructor', 'Activo', 'Filadelfio', '3141630929', 'luwowka@gmail.com'),
(2, 'Floripundio', 'Instructor y Consultor', 'Activo', 'Manzanillo, Colima', '31411111111', 'floripanda@gmail.com'),
(4, 'Servais Le Roy', 'Consultor', 'Inactivo', 'The Manor', '1234567890', 'themagician@gmail.com'),
(5, 'Valeria Muñoz Rosales', 'Instructor', 'Activo', 'Manzanillo, Colima', '1234567890', 'valevale@gmail.com'),
(6, 'Karol', 'Instructor y Consultor', 'Activo', 'Jalisco', '1234567890', 'karol@gmail.com'),
(7, 'Hector', 'Instructor y Consultor', 'Activo', 'Ixtlahuacan', '31411111111', 'hectarea@gmail.com'),
(8, 'Pablito', 'Consultor', 'Inactivo', 'Coquimatlán', '3121111111', 'pablito@gmail.com'),
(9, 'Nereyda Pérez', 'Instructor', 'Activo', 'Tecomán', '1234567890', 'nery@gmail.com'),
(10, 'Luna Muñoz', 'Instructor y Consultor', 'Activo', 'Manzanillo, Colima', '1234567890', 'luna@gmail.com'),
(11, 'Ruperto', 'Instructor', 'Activo', 'Huizcolote', '1234567890', 'ruru@gmail.com'),
(12, 'Rodolfo', 'Instructor y Consultor', 'Activo', 'Comala', '1234567890', 'rodopro@gmail.com'),
(13, 'María', 'Instructor', 'Inactivo', 'Filipinas', '31411111111', 'mari@gmail.com'),
(15, 'DSD', 'Instructor', 'Activo', 'dads', '31411111111', 'dqwd'),
(16, 'maria carlota II', 'Instructor', 'Activo', 'capirotada', '465165465162655', 'conejosacidos'),
(17, 'Ramon', 'Consultor', 'Activo', 'Coqui', '31411111111', 'coqui@gnmail'),
(18, 'Prueba', 'Instructor', 'Activo', 'Prueba', '3121111111', 'prueba@gmail.com'),
(19, 'Rigoberto', 'Instructor', 'Activo', 'Manzanillo', '31411111111', 'axzar@gmail.com'),
(20, 'Ramona', 'Instructor', 'Activo', 'Mérida', '31411111111', 'rrmona@gmail.com'),
(21, 'Test', 'Instructor y Consultor', 'Activo', 'test', '1234567890', 'test'),
(22, 'test', 'Consultor', 'Activo', 'test', '1234567890', 'test'),
(23, 'prueba', 'Consultor', 'Activo', 'prueba', '1234567890', 'prueba'),
(24, 'test123', 'Consultor', 'Activo', 'test123', 'test', 'test123'),
(25, 'Keiry', 'Instructor', 'Activo', 'Manzanillo, Colima', '53625478393', 'ksainz@ucol.mx'),
(26, 'Pablo', 'Instructor y Consultor', 'Activo', 'Manzanillo', '1234567890', 'prueba@gmail.com'),
(27, 'Ramon García', 'Instructor y Consultor', 'Activo', 'Tecóman', '1234567890', 'ramongarcia@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `id_instructor` (`id_instructor`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id_instructor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id_instructor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`id_instructor`) REFERENCES `instructor` (`id_instructor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
