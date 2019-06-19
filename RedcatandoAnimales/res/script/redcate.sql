-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2019 a las 17:26:48
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

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
  `edad` int(11) NOT NULL,
  `fechaIngreso` date DEFAULT NULL,
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

INSERT INTO `animal` (`cod`, `codDueno`, `codOrganizacion`, `nombre`, `edad`, `fechaIngreso`, `especie`, `raza`, `patron`, `sexo`, `observacion`, `chip`) VALUES
('anm-001', NULL, 'ORG-001', 'Misha', 7, '2019-05-21', 'canino', 'quiltro', 'NINGUNO', 'h', '', 12434),
('anm-002', '19291737-9', 'ORG-001', 'Pepa', 7, '2019-05-19', 'canino', 'quiltro', 'negro', 'h', 'Pata derecha rota', 0),
('anm-003', '19291737-9', 'ORG-001', 'Jacinta', 10, '2017-05-20', 'canino', 'maltes', 'ninguno', 'h', '', 123456789),
('anm-100', NULL, 'ORG-002', 'Max', 4, '2017-07-05', 'felino', 'Abzino', 'Manchado', 'm', 'Castrado', 0),
('anm-101', NULL, 'ORG-002', 'Tom', 4, '2017-07-06', 'felino', 'Munchikin', 'Rallado', 'm', 'Castrado', 0),
('anm-102', NULL, 'ORG-002', 'Duque', 9, '2017-07-07', 'felino', 'Perza', 'Leonado', 'm', 'Castrado', 0),
('anm-103', NULL, 'ORG-002', 'Enzo', 5, '2017-07-08', 'felino', 'Siamés', 'Manchado', 'm', 'Castrado', 0),
('anm-104', NULL, 'ORG-002', 'Harry', 4, '2017-07-09', 'felino', 'Abzino', 'Rallado', 'm', 'Castrado', 0),
('anm-105', NULL, 'ORG-002', 'Emma', 4, '2017-08-00', 'felino', 'Munchikin', 'Leonado', 'h', 'Vacunado', 0),
('anm-106', NULL, 'ORG-002', 'Luna', 3, '2017-08-01', 'felino', 'Perza', 'Manchado', 'h', 'Vacunado', 0),
('anm-107', NULL, 'ORG-002', 'Garfield', 3, '2017-08-02', 'felino', 'Bengala', 'Rallado', 'm', 'Vacunado', 0),
('anm-108', NULL, 'ORG-002', 'Negrito', 3, '2017-08-03', 'felino', 'Abzino', 'Leonado', 'm', 'Vacunado', 0),
('anm-109', NULL, 'ORG-002', 'Noa', 3, '2017-08-04', 'felino', 'Munchikin', 'Rallado', 'h', 'Vacunado', 0),
('anm-110', NULL, 'ORG-002', 'Orion', 3, '2017-08-05', 'felino', 'Perza', 'Leonado', 'm', 'Vacunado', 0),
('anm-111', NULL, 'ORG-002', 'Tina', 3, '2017-08-06', 'felino', 'Abzino', 'Manchado', 'h', 'Castrado', 0),
('anm-112', NULL, 'ORG-002', 'Quique', 3, '2017-08-07', 'felino', 'Munchikin', 'Rallado', 'm', 'Castrado', 0),
('anm-113', NULL, 'ORG-002', 'Tomas', 2, '2017-08-08', 'felino', 'Perza', 'Leonado', 'm', 'Castrado', 0),
('anm-114', NULL, 'ORG-002', 'Canela', 5, '2017-08-09', 'felino', 'Bengala', 'Rallado', 'h', 'Castrado', 0),
('ANM-302775', NULL, 'ORG-001', 'Hashiko', 16, '2019-06-13', 'canino', 'AKITA INU', 'MANCHAS_PARCHES', 'm', 'Hipotermia, pata derecha trasera amputada', 0);

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

--
-- Volcado de datos para la tabla `dueno`
--

INSERT INTO `dueno` (`cod`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `fechaAdopcion`, `puntuacionAdoptante`) VALUES
('10105579-5', 'Nelson', 'Guerra', '', '2017-11-02', 5),
('11605230-k', 'Alex', 'Herrera', 'Castillo', '2018-11-24', 5),
('12211706-5', 'Evelyn', 'Alegre', 'Reyes', '2017-12-24', 5),
('12549939-2', 'Lorena', 'Rubio', 'Ruiz', '2017-11-26', 5),
('13216626-9', 'Cesar', 'Bugueño', 'Segovia', '2018-11-22', 5),
('13529697-k', 'Lilian', 'Diaz', 'Gonzalez', '2018-12-24', 5),
('13744203-5', 'Domenica', 'Alvarez', 'Alvarez', '2018-11-05', 5),
('14585274-9', 'Juan', 'Colque', 'Marin', '2017-11-17', 5),
('14588967-7', 'Vitalia', 'Avendaño', 'Vazquez', '2017-12-05', 5),
('15011111-0', 'Alexander', 'Argomedo', 'Godoy', '2017-12-05', 5),
('15014611-9', 'Nury', 'Ferrer', 'Nieves', '2017-12-18', 5),
('15768967-3', 'Paulina', 'Rojas', '', '2018-10-30', 5),
('15969677-4', 'Carolina', 'Ayala', 'Pinto', '2018-11-24', 5),
('15981946-9', 'Angelica', 'Cortes', 'Cortes', '2017-10-08', 5),
('16258502-9', 'Jessica', 'Jaime', 'Plaza', '2017-11-17', 5),
('16259438-9', 'Veronica', 'Castro', 'Schalper', '2018-10-31', 5),
('17370784-3', 'Rosa', 'Silva', 'Marquez', '2017-12-10', 5),
('17530382-0', 'Daleska', 'Valdes', 'Amaya', '2017-11-13', 5),
('18183513-3', 'Charity', 'Larrondo', 'Duran', '2017-12-21', 5),
('18233644-0', 'Nicole', 'Salas', 'Tapia', '2017-12-12', 5),
('18825344-k', 'Italo', 'Cancino', 'Gomez', '2017-12-23', 5),
('18826138-8', 'Paulina', 'Neira', 'Castillo', '2018-11-24', 5),
('19291737-9', 'Alonso', 'Rojas', 'Vargas', '2005-06-10', 5),
('19295581-4', 'Sebastian', 'Guerrero', 'Galleguillos', '2018-12-27', 5),
('19825412-6', 'Gissel', 'Castillo', '', '2018-11-24', 5),
('20347261-7', 'Luis', 'Galleguillos', 'Zaraza', '2018-11-24', 5),
('24033337-6', 'Luis', 'Sanchez', 'Huerta', '2017-12-26', 5),
('24345821-8', 'Rosario', 'Coro', 'Machicado', '2017-10-19', 5),
('24881259-1', 'Andrea', 'Rivera', '', '2018-11-03', 5),
('5140880-2', 'Urbelinda', 'Gaete', '', '2018-10-27', 5),
('8618635-7', 'Rosa', 'Silva', 'Castro', '2017-10-27', 5);

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
('ORG-001', 'Brigada de rescate canina'),
('ORG-002', 'Renacer Felino');

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
('12582440-4', 'ORG-002', 'Jessica', 'Gonzalez', 'Lopez', 'Admin', 'AdoqzbSQUc'),
('13133984-4', 'ORG-002', 'Bernarda', 'Ferreira', 'Puebla', 'Socio', 'XWZdrUovBE'),
('15981935-3', 'ORG-002', 'Juana', 'Olguin', 'Platero', 'Socio', 'LzBZxLZzBP'),
('19463187-1', 'ORG-001', 'Marcelo', 'Hidalgo', 'Toro', 'Socio', 'asdfghjklp'),
('24829898-7', 'ORG-002', 'Lorena', 'Morales', 'Peralta', 'Admin', 'DMwKcbRjkI');

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
  ADD CONSTRAINT `FK_RESCATA` FOREIGN KEY (`codOrganizacion`) REFERENCES `organizacion` (`cod`),
  ADD CONSTRAINT `FK_TIENE` FOREIGN KEY (`codDueno`) REFERENCES `dueno` (`cod`);

--
-- Filtros para la tabla `campana`
--
ALTER TABLE `campana`
  ADD CONSTRAINT `FK_ORGANIZA` FOREIGN KEY (`codOrganizacion`) REFERENCES `organizacion` (`cod`);

--
-- Filtros para la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD CONSTRAINT `FK_RECIBE` FOREIGN KEY (`codAnimal`) REFERENCES `animal` (`cod`);

--
-- Filtros para la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD CONSTRAINT `FK_POSEE` FOREIGN KEY (`codDuenio`) REFERENCES `dueno` (`cod`);

--
-- Filtros para la tabla `socio`
--
ALTER TABLE `socio`
  ADD CONSTRAINT `FK_RECLUTA` FOREIGN KEY (`codOrganizacion`) REFERENCES `organizacion` (`cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
