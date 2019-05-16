-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2019 a las 22:44:06
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
  `COD` varchar(10) NOT NULL,
  `CODDUENO` varchar(10) DEFAULT NULL,
  `CODORGANIZACION` varchar(10) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `EDAD` int(11) DEFAULT NULL,
  `SEXO` char(1) DEFAULT NULL,
  `RAZA` varchar(100) NOT NULL,
  `OBSERVACION` text NOT NULL,
  `CHIP` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campana`
--

CREATE TABLE `campana` (
  `COD` varchar(10) NOT NULL,
  `CODORGANIZACION` varchar(10) DEFAULT NULL,
  `FECHAINICIO` date NOT NULL,
  `FECHATERMINO` date DEFAULT NULL,
  `DESCRIPCION` text NOT NULL,
  `TIPO` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico`
--

CREATE TABLE `diagnostico` (
  `COD` varchar(10) NOT NULL,
  `CODANIMAL` varchar(10) DEFAULT NULL,
  `DESCRIPCION` text NOT NULL,
  `TRATAMIENTO` text NOT NULL,
  `FECHA` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `COD` int(11) NOT NULL,
  `CODDUENO` varchar(10) DEFAULT NULL,
  `NUMERO` int(11) NOT NULL,
  `CALLE` varchar(60) NOT NULL,
  `DESCRIPCION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dueno`
--

CREATE TABLE `dueno` (
  `COD` varchar(10) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `APELLIDOPATERNO` varchar(50) NOT NULL,
  `APELLIDOMATERNO` varchar(50) NOT NULL,
  `FECHAADOPCION` date NOT NULL,
  `PUNTUACIONADOPTANTE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizacion`
--

CREATE TABLE `organizacion` (
  `COD` varchar(10) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `organizacion`
--

INSERT INTO `organizacion` (`COD`, `NOMBRE`) VALUES
('ORG-001', 'Brigada de rescate canina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `COD` varchar(10) NOT NULL,
  `CODORGANIZACION` varchar(10) DEFAULT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `TIPO` char(1) NOT NULL,
  `VALOR` float NOT NULL,
  `DESCRIPCION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socio`
--

CREATE TABLE `socio` (
  `COD` varchar(10) NOT NULL,
  `CODORGANIZACION` varchar(10) DEFAULT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `APELLIDOPATERNO` varchar(50) NOT NULL,
  `APELLIDOMATERNO` varchar(50) NOT NULL,
  `CARGO` varchar(20) NOT NULL,
  `CONTRASENA` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`COD`),
  ADD KEY `TIENE_FK` (`CODDUENO`),
  ADD KEY `RESCATA_FK` (`CODORGANIZACION`);

--
-- Indices de la tabla `campana`
--
ALTER TABLE `campana`
  ADD PRIMARY KEY (`COD`),
  ADD KEY `ORGANIZA_FK` (`CODORGANIZACION`);

--
-- Indices de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD PRIMARY KEY (`COD`),
  ADD KEY `RECIBE_FK` (`CODANIMAL`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`COD`),
  ADD KEY `POSEE_FK` (`CODDUENO`);

--
-- Indices de la tabla `dueno`
--
ALTER TABLE `dueno`
  ADD PRIMARY KEY (`COD`);

--
-- Indices de la tabla `organizacion`
--
ALTER TABLE `organizacion`
  ADD PRIMARY KEY (`COD`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`COD`),
  ADD KEY `OFRECE_FK` (`CODORGANIZACION`);

--
-- Indices de la tabla `socio`
--
ALTER TABLE `socio`
  ADD PRIMARY KEY (`COD`),
  ADD KEY `RECLUTA_FK` (`CODORGANIZACION`);

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
  ADD CONSTRAINT `FK_POSEE` FOREIGN KEY (`CODDUENO`) REFERENCES `dueno` (`COD`);

--
-- Filtros para la tabla `socio`
--
ALTER TABLE `socio`
  ADD CONSTRAINT `FK_RECLUTA` FOREIGN KEY (`CODORGANIZACION`) REFERENCES `organizacion` (`COD`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
