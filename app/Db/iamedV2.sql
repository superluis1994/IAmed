-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 03:15:17
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `iamed`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `id_especialidad` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `descripcion` text NOT NULL,
  `status` int(11) NOT NULL,
  `usuario_creacion` varchar(30) NOT NULL,
  `usuario_actualizacion` varchar(30) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_actualizacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`id_especialidad`, `nombre`, `descripcion`, `status`, `usuario_creacion`, `usuario_actualizacion`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(1, 'Medicina interna', 'La medicina interna es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades que afectan a todo el cuerpo.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(2, 'Pediatría', 'La pediatría es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades que afectan a niños y adolescentes.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(3, 'Cirugía general', 'La cirugía general es la especialidad médica que se ocupa de la cirugía de órganos y sistemas internos.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(4, 'Ginecología y obstetricia', 'La ginecología y obstetricia es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades del sistema reproductor femenino y de la atención al embarazo, parto y puerperio.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(5, 'Oftalmología', 'La oftalmología es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades de los ojos.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(6, 'Otorrinolaringología', 'La otorrinolaringología es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades del oído, nariz y garganta.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(7, 'Neurología', 'La neurología es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades del sistema nervioso.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(8, 'Cardiología', 'La cardiología es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades del corazón.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(9, 'Oncología', 'La oncología es la especialidad médica que se ocupa del diagnóstico y tratamiento del cáncer.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(10, 'Reumatología', 'La reumatología es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades reumáticas.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(11, 'Dermatología', 'La dermatología es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades de la piel.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(12, 'Psicología clínica', 'La psicología clínica es la especialidad médica que se ocupa del diagnóstico y tratamiento de trastornos mentales.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(13, 'Medicina del trabajo', 'La medicina del trabajo es la especialidad médica que se ocupa de la prevención y tratamiento de enfermedades relacionadas con el trabajo.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(14, 'Medicina familiar y comunitaria', 'La medicina familiar y comunitaria es la especialidad médica que se ocupa de la atención integral de la salud de las personas en el contexto de la familia y la comunidad.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(15, 'Medicina interna', 'La medicina interna es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades que afectan a todo el cuerpo.', 0, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(16, 'Pediatría', 'La pediatría es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades que afectan a niños y adolescentes.', 0, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(17, 'Cirugía general', 'La cirugía general es la especialidad médica que se ocupa de la cirugía de órganos y sistemas internos.', 0, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(18, 'Ginecología y obstetricia', 'La ginecología y obstetricia es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades del sistema reproductor femenino y de la atención al embarazo, parto y puerperio.', 0, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(19, 'Oftalmología', 'La oftalmología es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades de los ojos.', 0, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(20, 'Otorrinolaringología', 'La otorrinolaringología es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades del oído, nariz y garganta.', 0, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(21, 'Neurología', 'La neurología es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades del sistema nervioso.', 0, 'sorto', 'sorto', '2023-11-12', '2023-11-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombreRol` varchar(40) NOT NULL,
  `status` int(11) NOT NULL,
  `usuario_creacion` varchar(30) NOT NULL,
  `usuario_actualizacion` varchar(30) DEFAULT NULL,
  `fecha_creacion` date NOT NULL DEFAULT current_timestamp(),
  `fecha_actualizacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombreRol`, `status`, `usuario_creacion`, `usuario_actualizacion`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(1, 'Paciente', 1, 'sorto', NULL, '2023-11-04', NULL),
(2, 'Doctor', 1, 'sorto', NULL, '2023-11-04', NULL),
(3, 'Admin', 1, 'sorto', NULL, '2023-11-05', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `descripcion` text NOT NULL,
  `usuario_creacion` varchar(30) NOT NULL,
  `usuario_actualizacion` varchar(30) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_actualizacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id_status`, `nombre`, `descripcion`, `usuario_creacion`, `usuario_actualizacion`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(1, 'Activo', 'El estado activo indica que el registro está disponible para su uso.', 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(2, 'Inactivo', 'El estado inactivo indica que el registro no está disponible para su uso.', 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(3, 'Pendiente', 'El estado pendiente indica que el registro está en proceso de revisión o autorización.', 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(4, 'Rechazado', 'El estado rechazado indica que el registro no ha sido aprobado.', 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(5, 'Eliminado', 'El estado eliminado indica que el registro ha sido borrado de forma permanente.', 'sorto', 'sorto', '2023-11-12', '2023-11-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `rol` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `usuario_creacion` varchar(30) NOT NULL,
  `usuario_actualizacion` varchar(30) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_actualizacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `rol`, `status`, `usuario_creacion`, `usuario_actualizacion`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(1, 'supersorto1994', 'sorto', 'superluis1994@gmail.com', 2, '1', '', '', '2023-11-01', '2023-11-01'),
(2, 'emmanuel2000', 'eyes', 'emamnuel@gmail.com', 1, '1', '', '', '2023-11-01', '2023-11-01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id_especialidad`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id_especialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
