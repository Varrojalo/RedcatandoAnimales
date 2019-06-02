-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2019 a las 00:34:43
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `redcate`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

CREATE TABLE `animal` (
  `cod` varchar(10) NOT NULL,
  `codDueno` varchar(10) DEFAULT NULL,
  `codOrganizacion` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` int(11) DEFAULT NULL,
  `especie` varchar(30) NOT NULL,
  `raza` varchar(100) NOT NULL,
  `patron` varchar(30) NOT NULL,
  `sexo` char(1) DEFAULT NULL,
  `observacion` text NOT NULL,
  `chip` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`cod`, `codDueno`, `codOrganizacion`, `nombre`, `edad`, `especie`, `raza`, `patron`, `sexo`, `observacion`, `chip`) VALUES
('anm-001', NULL, 'ORG-001', 'misha', 4, 'perro', 'quiltro', 'negro', 'm', 'muy bonita', NULL),
('anm-002', NULL, 'ORG-001', 'Pepa', 7, 'perro', 'quiltro', 'negro', 'm', 'grande', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campana`
--

CREATE TABLE `campana` (
  `cod` varchar(10) NOT NULL,
  `codOrganizacion` varchar(10) DEFAULT NULL,
  `fechaInicio` date NOT NULL,
  `fechaTermino` date DEFAULT NULL,
  `descripcion` text NOT NULL,
  `tipo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico`
--

CREATE TABLE `diagnostico` (
  `cod` varchar(10) NOT NULL,
  `codAnimal` varchar(10) DEFAULT NULL,
  `descripcion` text NOT NULL,
  `tratamiento` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `cod` int(11) NOT NULL,
  `codDuenio` varchar(10) DEFAULT NULL,
  `numero` int(11) NOT NULL,
  `calle` varchar(60) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dueno`
--

CREATE TABLE `dueno` (
  `cod` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidoPaterno` varchar(50) NOT NULL,
  `apellidoMaterno` varchar(50) NOT NULL,
  `fechaAdopcion` date NOT NULL,
  `puntuacionAdoptante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizacion`
--

CREATE TABLE `organizacion` (
  `cod` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `organizacion`
--

INSERT INTO `organizacion` (`cod`, `nombre`) VALUES
('ORG-001', 'Brigada de rescate canina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `cod` varchar(10) NOT NULL,
  `codOrganizacion` varchar(10) DEFAULT NULL,
  `nombre` varchar(30) NOT NULL,
  `tipo` char(1) NOT NULL,
  `valor` float NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socio`
--

CREATE TABLE `socio` (
  `cod` varchar(10) NOT NULL,
  `codOrganizacion` varchar(10) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidoPaterno` varchar(50) NOT NULL,
  `apellidoMaterno` varchar(50) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `contrasena` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `socio`
--

INSERT INTO `socio` (`cod`, `codOrganizacion`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `cargo`, `contrasena`) VALUES
('19463187-1', 'ORG-001', 'Marcelo', 'Hidalgo', 'Toro', 'Socio', 'asdfghjklp');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `TIENE_FK` (`codDueno`),
  ADD KEY `RESCATA_FK` (`codOrganizacion`);

--
-- Indices de la tabla `campana`
--
ALTER TABLE `campana`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `ORGANIZA_FK` (`codOrganizacion`);

--
-- Indices de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `RECIBE_FK` (`codAnimal`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `POSEE_FK` (`codDuenio`);

--
-- Indices de la tabla `dueno`
--
ALTER TABLE `dueno`
  ADD PRIMARY KEY (`cod`);

--
-- Indices de la tabla `organizacion`
--
ALTER TABLE `organizacion`
  ADD PRIMARY KEY (`cod`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `OFRECE_FK` (`codOrganizacion`);

--
-- Indices de la tabla `socio`
--
ALTER TABLE `socio`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `RECLUTA_FK` (`codOrganizacion`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `FK_RESCATA` FOREIGN KEY (`CODORGANIZACION`) REFERENCES `organizacion` (`COD`),
  ADD CONSTRAINT `FK_TIENE` FOREIGN KEY (`CODDUENO`) REFERENCES `dueno` (`COD`);

--
-- Filtros para la tabla `campana`
--
ALTER TABLE `campana`
  ADD CONSTRAINT `FK_ORGANIZA` FOREIGN KEY (`CODORGANIZACION`) REFERENCES `organizacion` (`COD`);

--
-- Filtros para la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD CONSTRAINT `FK_RECIBE` FOREIGN KEY (`CODANIMAL`) REFERENCES `animal` (`COD`);

--
-- Filtros para la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD CONSTRAINT `FK_POSEE` FOREIGN KEY (`codDuenio`) REFERENCES `dueno` (`COD`);

--
-- Filtros para la tabla `socio`
--
ALTER TABLE `socio`
  ADD CONSTRAINT `FK_RECLUTA` FOREIGN KEY (`CODORGANIZACION`) REFERENCES `organizacion` (`COD`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
