-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2023 a las 21:56:11
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
-- Estructura de tabla para la tabla `afiliado_especialidades`
--

CREATE TABLE `afiliado_especialidades` (
  `id_afiliado_esp` int(11) NOT NULL,
  `id_afiliado` int(11) NOT NULL,
  `id_especialidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='esta tabla almacena las especialidades que posee cada medico';

--
-- Volcado de datos para la tabla `afiliado_especialidades`
--

INSERT INTO `afiliado_especialidades` (`id_afiliado_esp`, `id_afiliado`, `id_especialidad`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bannerspublicitario`
--

CREATE TABLE `bannerspublicitario` (
  `id_banner` int(11) NOT NULL,
  `titulo` varchar(70) NOT NULL,
  `descripcion` text NOT NULL,
  `src` text NOT NULL COMMENT 'este campo es la url de la imagen',
  `tipo` varchar(40) NOT NULL COMMENT 'este campo nos dice en que lugar se mostrara este item',
  `colocacion` varchar(30) NOT NULL COMMENT 'colocacion del texto del carousel',
  `seleccionado` varchar(30) NOT NULL COMMENT 'este campo es para marcar el primer item del carousel que se mostrara',
  `efecto` varchar(40) NOT NULL COMMENT 'este es el efecto que tendra el texto al mostrarse',
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `bannerspublicitario`
--

INSERT INTO `bannerspublicitario` (`id_banner`, `titulo`, `descripcion`, `src`, `tipo`, `colocacion`, `seleccionado`, `efecto`, `status`) VALUES
(1, 'Registrate', 'Forma parte de IAmed ', 'img/carrusel1.jpg', 'Login', '', '', '', 1),
(2, 'Medicos Profesionales', 'Contamos con listado de médicos de diferentes especialidades', 'img/carousel-2.jpg', 'Login', '', '', '', 1),
(3, 'Acceso Inmediato a Profesionales de la Salud', 'Descubre cómo IAmed te conecta con profesionales de la salud en segundos. Tu bienestar, a un clic de distancia.', 'img/web/carousel/carrusel2.jpg', 'web_carousel', 'start', 'active', 'slideInLeft', 1),
(4, 'Prediagnósticos Médicos con Inteligencia Artificial', 'Explora cómo la inteligencia artificial está revolucionando la medicina, mejorando diagnósticos y tratamientos. El futuro de la salud ya está aquí.', 'img/web/carousel/carrusel3.jpg', 'web_carousel', 'end', '', 'slideInRight', 1),
(5, 'Recordatorios Médicos y Citas con Profesionales', 'Nunca más olvides una cita médica o una dosis de medicamento. IAmed te mantiene al tanto de tu salud.', 'img/web/carousel/carrusel5.jpg', 'web_carousel', 'start', '', 'slideInLeft', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `codigo_ciudad` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `codigo_estado` int(11) NOT NULL,
  `usuario_creacion` varchar(255) NOT NULL,
  `usuario_actualizacion` varchar(255) DEFAULT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_actualizacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`codigo_ciudad`, `nombre`, `codigo_estado`, `usuario_creacion`, `usuario_actualizacion`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(1, 'Chalchuapa', 10, 'admin', NULL, '2023-11-22 21:43:14', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE `datos_personales` (
  `id_datos` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `pais` char(4) NOT NULL,
  `estado` int(11) NOT NULL,
  `ciudad` int(11) NOT NULL,
  `direccion` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `documento_de_identidad` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `rol` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `sexo` int(11) NOT NULL,
  `id_perfil_afiliado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `datos_personales`
--

INSERT INTO `datos_personales` (`id_datos`, `nombres`, `apellidos`, `email`, `pais`, `estado`, `ciudad`, `direccion`, `id_user`, `documento_de_identidad`, `status`, `rol`, `fecha_nacimiento`, `telefono`, `sexo`, `id_perfil_afiliado`) VALUES
(1, 'Luis', 'Sorto Lemus', 'superluis1994@gmail.com', '503', 10, 1, 'chalchuapa/ san antonio', 2, 466464646, 1, 2, '2023-11-22', '55555555', 1, 1);

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
(4, 'Ginecología', 'La ginecología y obstetricia es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades del sistema reproductor femenino y de la atención al embarazo, parto y puerperio.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(5, 'Oftalmología', 'La oftalmología es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades de los ojos.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(6, 'Otorrinolaringología', 'La otorrinolaringología es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades del oído, nariz y garganta.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(7, 'Neurología', 'La neurología es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades del sistema nervioso.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(8, 'Cardiología', 'La cardiología es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades del corazón.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(9, 'Oncología', 'La oncología es la especialidad médica que se ocupa del diagnóstico y tratamiento del cáncer.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(10, 'Reumatología', 'La reumatología es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades reumáticas.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(11, 'Dermatología', 'La dermatología es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades de la piel.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(12, 'Psicología clínica', 'La psicología clínica es la especialidad médica que se ocupa del diagnóstico y tratamiento de trastornos mentales.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(13, 'Medicina del trabajo', 'La medicina del trabajo es la especialidad médica que se ocupa de la prevención y tratamiento de enfermedades relacionadas con el trabajo.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(14, 'Medicina familiar ', 'La medicina familiar y comunitaria es la especialidad médica que se ocupa de la atención integral de la salud de las personas en el contexto de la familia y la comunidad.', 1, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(15, 'Medicina interna', 'La medicina interna es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades que afectan a todo el cuerpo.', 0, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(16, 'Pediatría', 'La pediatría es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades que afectan a niños y adolescentes.', 0, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(17, 'Cirugía general', 'La cirugía general es la especialidad médica que se ocupa de la cirugía de órganos y sistemas internos.', 0, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(19, 'Oftalmología', 'La oftalmología es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades de los ojos.', 0, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(20, 'Otorrinolaringología', 'La otorrinolaringología es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades del oído, nariz y garganta.', 0, 'sorto', 'sorto', '2023-11-12', '2023-11-12'),
(21, 'Neurología', 'La neurología es la especialidad médica que se ocupa del diagnóstico y tratamiento de enfermedades del sistema nervioso.', 0, 'sorto', 'sorto', '2023-11-12', '2023-11-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `codigo_estado` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `codigo_pais` char(4) NOT NULL,
  `usuario_creacion` varchar(255) NOT NULL,
  `usuario_actualizacion` varchar(255) DEFAULT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_actualizacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`codigo_estado`, `nombre`, `codigo_pais`, `usuario_creacion`, `usuario_actualizacion`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(1, 'Ahuachapán', '503', 'admin', NULL, '2023-11-22 14:17:46', '2023-11-22 14:17:46'),
(2, 'Cabañas', '503', 'admin', NULL, '2023-11-22 14:17:46', '2023-11-22 14:17:46'),
(3, 'Chalatenango', '503', 'admin', NULL, '2023-11-22 14:17:46', '2023-11-22 14:17:46'),
(4, 'Cuscatlán', '503', 'admin', NULL, '2023-11-22 14:17:46', '2023-11-22 14:17:46'),
(5, 'La Libertad', '503', 'admin', NULL, '2023-11-22 14:17:46', '2023-11-22 14:17:46'),
(6, 'La Unión', '503', 'admin', NULL, '2023-11-22 14:17:46', '2023-11-22 14:17:46'),
(7, 'Morazán', '503', 'admin', NULL, '2023-11-22 14:17:46', '2023-11-22 14:17:46'),
(8, 'San Miguel', '503', 'admin', NULL, '2023-11-22 14:17:46', '2023-11-22 14:17:46'),
(9, 'San Salvador', '503', 'admin', NULL, '2023-11-22 14:17:46', '2023-11-22 14:17:46'),
(10, 'Santa Ana', '503', 'admin', NULL, '2023-11-22 14:17:46', '2023-11-22 14:17:46'),
(11, 'Sonsonate', '503', 'admin', NULL, '2023-11-22 14:17:46', '2023-11-22 14:17:46'),
(12, 'Usulután', '503', 'admin', NULL, '2023-11-22 14:17:46', '2023-11-22 14:17:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `codigo_pais` char(4) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `usuario_creacion` varchar(255) NOT NULL,
  `usuario_actualizacion` varchar(255) DEFAULT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_actualizacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`codigo_pais`, `nombre`, `usuario_creacion`, `usuario_actualizacion`, `fecha_creacion`, `fecha_actualizacion`) VALUES
('001', 'Canadá', 'admin', 'admin', '2023-11-22 13:58:50', '2023-11-22 13:58:50'),
('1', 'Estados Unidos', 'admin', 'admin', '2023-11-22 13:58:50', '2023-11-22 13:58:50'),
('501', 'Belice', 'admin', 'admin', '2023-11-22 13:58:50', '2023-11-22 13:58:50'),
('502', 'Guatemala', 'admin', 'admin', '2023-11-22 13:56:12', '2023-11-22 13:56:12'),
('503', 'El Salvador', 'admin', 'admin', '2023-11-22 13:56:12', '2023-11-22 13:56:12'),
('504', 'Honduras', 'admin', 'admin', '2023-11-22 13:56:12', '2023-11-22 13:56:12'),
('505', 'Nicaragua', 'admin', 'admin', '2023-11-22 13:56:12', '2023-11-22 13:56:12'),
('506', 'Costa Rica', 'admin', 'admin', '2023-11-22 13:56:12', '2023-11-22 13:56:12'),
('507', 'Panamá', 'admin', 'admin', '2023-11-22 13:56:12', '2023-11-22 13:56:12'),
('508', 'Cuba', 'admin', 'admin', '2023-11-22 13:58:50', '2023-11-22 13:58:50'),
('509', 'Haití', 'admin', 'admin', '2023-11-22 13:58:50', '2023-11-22 13:58:50'),
('52', 'México', 'admin', 'admin', '2023-11-22 13:58:50', '2023-11-22 13:58:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pefil_afiliado`
--

CREATE TABLE `pefil_afiliado` (
  `id_afiliado` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `especialidades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `pefil_afiliado`
--

INSERT INTO `pefil_afiliado` (`id_afiliado`, `id_user`, `especialidades`) VALUES
(1, 2, 1);

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
-- Indices de la tabla `afiliado_especialidades`
--
ALTER TABLE `afiliado_especialidades`
  ADD PRIMARY KEY (`id_afiliado_esp`);

--
-- Indices de la tabla `bannerspublicitario`
--
ALTER TABLE `bannerspublicitario`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`codigo_ciudad`);

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`id_datos`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id_especialidad`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`codigo_estado`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`codigo_pais`);

--
-- Indices de la tabla `pefil_afiliado`
--
ALTER TABLE `pefil_afiliado`
  ADD PRIMARY KEY (`id_afiliado`);

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
-- AUTO_INCREMENT de la tabla `afiliado_especialidades`
--
ALTER TABLE `afiliado_especialidades`
  MODIFY `id_afiliado_esp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `bannerspublicitario`
--
ALTER TABLE `bannerspublicitario`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `codigo_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  MODIFY `id_datos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id_especialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `codigo_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `pefil_afiliado`
--
ALTER TABLE `pefil_afiliado`
  MODIFY `id_afiliado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
