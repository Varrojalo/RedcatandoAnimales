-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2019 a las 02:21:01
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
-- Base de datos: `redcate2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adopcion`
--

CREATE TABLE `adopcion` (
  `ID` int(11) NOT NULL,
  `ANIMAL_ID` int(11) NOT NULL,
  `ADOPTANTE_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `FECHA_ADOPCION` date NOT NULL,
  `CANCELADA` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `adopcion`
--

INSERT INTO `adopcion` (`ID`, `ANIMAL_ID`, `ADOPTANTE_ID`, `USER_ID`, `FECHA_ADOPCION`, `CANCELADA`) VALUES
(1, 1, 1, 4, '2019-06-28', NULL),
(13, 3, 4, 4, '2019-07-06', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adoptante`
--

CREATE TABLE `adoptante` (
  `ID` int(11) NOT NULL,
  `COMUNA_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `RUT` varchar(10) NOT NULL,
  `PRIMER_NOMBRE` varchar(32) NOT NULL,
  `SEGUNDO_NOMBRE` varchar(32) DEFAULT NULL,
  `APELLIDO_PATERNO` varchar(32) NOT NULL,
  `APELLIDO_MATERNO` varchar(32) DEFAULT NULL,
  `PUNTUACION` int(11) NOT NULL,
  `DIRECCION` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `adoptante`
--

INSERT INTO `adoptante` (`ID`, `COMUNA_ID`, `USER_ID`, `RUT`, `PRIMER_NOMBRE`, `SEGUNDO_NOMBRE`, `APELLIDO_PATERNO`, `APELLIDO_MATERNO`, `PUNTUACION`, `DIRECCION`) VALUES
(1, 16, NULL, '24033337-6', 'Luis', NULL, 'Sanchez', 'Huerta', 5, 'pje. ecuador interior 1642'),
(2, 16, NULL, '12211706-5', 'Evelyn', NULL, 'Alegre', 'Reyes', 5, 'pocor 771'),
(3, 16, NULL, '18825344-k', 'Italo', NULL, 'Cancino', 'Gomez', 5, 'pje. volcan lejia'),
(4, 16, NULL, '18183513-3', 'Charity', NULL, 'Larrondo', 'Duran', 5, 'pje. vitacura 2895'),
(5, 16, NULL, '15014611-9', 'Nury', NULL, 'Ferrer', 'Nieves', 5, 'pje. petrohué norte 3764'),
(6, 16, NULL, '18233644-0', 'Nicole', NULL, 'Salas', 'Tapia', 5, 'pje tawar tiqum 2882 *'),
(7, 16, NULL, '17370784-3', 'Rosa', NULL, 'Silva', 'Marquez', 5, 'pje. las canteras 971'),
(8, 16, NULL, '15011111-0', 'Alexander', NULL, 'Argomedo', 'Godoy', 5, 'calle guillermo cavour 2935'),
(9, 16, NULL, '14588967-7', 'Vitalia', NULL, 'Avendaño', 'Vazquez', 5, 'gabriela mistral 951'),
(10, 16, NULL, '12549939-2', 'Lorena', NULL, 'Rubio', 'Ruiz', 5, 'arturo prat 2183'),
(11, 16, NULL, '14585274-9', 'Juan', NULL, 'Colque', 'Marin', 5, 'pedro de valdivia 2271 *'),
(12, 16, NULL, '16258502-9', 'Jessica', NULL, 'Jaime', 'Plaza', 5, 'eleuterio ramirez 3052'),
(13, 16, NULL, '17530382-0', 'Daleska', NULL, 'Valdes', 'Amaya', 5, 'pje frutillar 3325'),
(14, 16, NULL, '10105579-5', 'Nelson', NULL, 'Guerra', '', 5, 'federico errazuriz 3413'),
(15, 16, NULL, '8618635-7', 'Rosa', NULL, 'Silva', 'Castro', 5, 'vasco de gama 3431'),
(16, 16, NULL, '24345821-8', 'Rosario', NULL, 'Coro', 'Machicado', 5, 'tocopilla 2394'),
(17, 16, NULL, '15981946-9', 'Angelica', NULL, 'Cortes', 'Cortes', 5, 'pje kara pampa 3222 *'),
(18, 16, NULL, '19295581-4', 'Sebastian', NULL, 'Guerrero', 'Galleguillos', 5, 'conde duque 1753'),
(19, 16, NULL, '13529697-k', 'Lilian', NULL, 'Diaz', 'Gonzalez', 5, 'cabana 1981'),
(20, 16, NULL, '11605230-k', 'Alex', NULL, 'Herrera', 'Castillo', 5, 'pje blanco 2236'),
(21, 16, NULL, '18826138-8', 'Paulina', NULL, 'Neira', 'Castillo', 5, 'piedra grande 2048'),
(22, 16, NULL, '15969677-4', 'Carolina', NULL, 'Ayala', 'Pinto', 5, 'aldunate 420'),
(23, 16, NULL, '20347261-7', 'Luis', NULL, 'Galleguillos', 'Zaraza', 5, 'frei bonn poniente 3406'),
(24, 16, NULL, '19825412-6', 'Gissel', NULL, 'Castillo', '', 5, 'pedro de valdivia 360'),
(25, 16, NULL, '13216626-9', 'Cesar', NULL, 'Bugueño', 'Segovia', 5, 'quetena oriente 2881'),
(26, 16, NULL, '13744203-5', 'Domenica', NULL, 'Alvarez', 'Alvarez', 5, 'federico errazuriz 3826'),
(27, 16, NULL, '24881259-1', 'Andrea', NULL, 'Rivera', '', 5, 'pje awana 2816'),
(28, 16, NULL, '16259438-9', 'Veronica', NULL, 'Castro', 'Schalper', 5, 'balmaceda 1504 dpto M05'),
(29, 16, NULL, '15768967-3', 'Paulina', NULL, 'Rojas', '', 5, 'pje frutillar 3039'),
(30, 16, NULL, '5140880-2', 'Urbelinda', NULL, 'Gaete', '', 5, 'balmaceda 4482');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afecta`
--

CREATE TABLE `afecta` (
  `ID` int(11) NOT NULL,
  `ANIMAL_ID` int(11) NOT NULL,
  `DIAGNOSTICO_ID` int(11) NOT NULL,
  `FECHA_DIAGNOSTICO` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `afecta`
--

INSERT INTO `afecta` (`ID`, `ANIMAL_ID`, `DIAGNOSTICO_ID`, `FECHA_DIAGNOSTICO`) VALUES
(1, 13, 2, '2018-02-10 00:00:00'),
(2, 13, 1, '2018-02-10 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

CREATE TABLE `animal` (
  `ID` int(11) NOT NULL,
  `RAZA_ID` int(11) NOT NULL,
  `ORGANIZACION_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `URL` varchar(100) DEFAULT '/res/imgs/default_animal.jpg',
  `CHIP` bigint(20) DEFAULT NULL,
  `NOMBRE` varchar(32) NOT NULL,
  `PATRON` varchar(32) NOT NULL,
  `FECHA_NACIMIENTO` date NOT NULL,
  `SEXO` char(1) NOT NULL,
  `OBSERVACION` varchar(300) DEFAULT NULL,
  `ESTERILIZADO` tinyint(1) DEFAULT NULL,
  `ESTADO` varchar(64) NOT NULL,
  `CREATED_AT` datetime NOT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`ID`, `RAZA_ID`, `ORGANIZACION_ID`, `USER_ID`, `URL`, `CHIP`, `NOMBRE`, `PATRON`, `FECHA_NACIMIENTO`, `SEXO`, `OBSERVACION`, `ESTERILIZADO`, `ESTADO`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 85, 2, 4, '/res/imgs/orgs/2/animals/default-animal.jpg', 0, 'Max', 'MANCHAS', '2017-08-06', 'm', '', 1, 'adoptado', '2017-07-05 00:00:00', NULL),
(2, 124, 2, 4, '/res/imgs/orgs/2/animals/default-animal.jpg', 0, 'Tom', 'RAYAS', '2017-08-07', 'm', '', 1, '', '2017-07-06 00:00:00', NULL),
(3, 129, 2, 4, '/res/imgs/orgs/2/animals/default-animal.jpg', 0, 'Duque', 'LEONADO', '2017-03-08', 'm', '', 1, 'adoptado', '2017-07-07 00:00:00', NULL),
(4, 139, 2, 4, '/res/imgs/orgs/2/animals/default-animal.jpg', 0, 'Enzo', 'MANCHAS', '2017-07-09', 'm', '', 1, '', '2017-07-08 00:00:00', NULL),
(6, 124, 2, 4, '/res/imgs/orgs/2/animals/default-animal.jpg', 0, 'Emma', 'LEONADO', '2017-08-11', 'h', 'Vacunado', 0, '', '2017-06-28 00:00:00', NULL),
(7, 130, 2, 4, '/res/imgs/orgs/2/animals/default-animal.jpg', 0, 'Luna', 'MANCHAS', '2017-09-12', 'h', 'Vacunado', 0, '', '2017-08-01 00:00:00', NULL),
(8, 92, 2, 4, '/res/imgs/orgs/2/animals/default-animal.jpg', 0, 'Garfield', 'RAYAS', '2017-09-13', 'm', 'Vacunado', 1, '', '2017-08-02 00:00:00', NULL),
(9, 85, 2, 4, '/res/imgs/orgs/2/animals/default-animal.jpg', 0, 'Negrito', 'LEONADO', '2017-09-14', 'm', 'Vacunado', 0, '', '2017-08-03 00:00:00', NULL),
(10, 124, 2, 4, '/res/imgs/orgs/2/animals/default-animal.jpg', 0, 'Noa', 'RAYAS', '2017-09-15', 'h', 'Vacunado', 1, '', '2017-08-04 00:00:00', NULL),
(11, 129, 2, 4, '/res/imgs/orgs/2/animals/11/profile.jpg', 0, 'Orion', 'LEONADO', '2017-09-16', 'm', 'Vacunado', 0, 'muerto', '2017-08-05 00:00:00', NULL),
(12, 85, 2, 4, '/res/imgs/orgs/2/animals/default-animal.jpg', 0, 'Tina', 'MANCHAS', '2017-09-17', 'h', '', 1, '', '2017-08-06 00:00:00', NULL),
(13, 124, 2, 4, '/res/imgs/orgs/2/animals/default-animal.jpg', 0, 'Quique', 'RAYAS', '2017-09-18', 'm', '', 1, 'diagnostico pendiente', '2017-08-07 00:00:00', NULL),
(14, 129, 2, 4, '/res/imgs/orgs/2/animals/default-animal.jpg', 0, 'Tomas', 'LEONADO', '2017-10-19', 'm', '', 1, '', '2017-08-08 00:00:00', NULL),
(15, 92, 2, 4, '/res/imgs/orgs/2/animals/default-animal.jpg', 0, 'Canela', 'RAYAS', '2017-07-20', 'h', '', 1, '', '2017-08-09 00:00:00', NULL),
(41, 92, 2, 1, '/res/imgs/orgs/2/animals/test-gato-bengala.jpg', 10, 'TEST', 'MANCHAS', '2016-05-18', 'm', 'AGREGAR', NULL, '', '2019-07-07 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campana`
--

CREATE TABLE `campana` (
  `ID` int(11) NOT NULL,
  `ORGANIZACION_ID` int(11) DEFAULT NULL,
  `TITULO` varchar(64) NOT NULL,
  `DESCRIPCION` varchar(300) NOT NULL,
  `TIPO` varchar(32) NOT NULL,
  `FECHA_INICIO` date NOT NULL,
  `DIAS_CAMPANA` smallint(6) NOT NULL,
  `META_MONETARIA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comuna`
--

CREATE TABLE `comuna` (
  `ID` int(11) NOT NULL,
  `REGION_ID` int(11) DEFAULT NULL,
  `NOMBRE` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comuna`
--

INSERT INTO `comuna` (`ID`, `REGION_ID`, `NOMBRE`) VALUES
(1, 1, 'Arica'),
(2, 1, 'Camarones'),
(3, 1, 'General Lagos'),
(4, 1, 'Putre'),
(5, 2, 'Alto Hospicio'),
(6, 2, 'Iquique'),
(7, 2, 'Camiña'),
(8, 2, 'Colchane'),
(9, 2, 'Huara'),
(10, 2, 'Pica'),
(11, 2, 'Pozo Almonte'),
(12, 3, 'Antofagasta'),
(13, 3, 'Mejillones'),
(14, 3, 'Sierra Gorda'),
(15, 3, 'Taltal'),
(16, 3, 'Calama'),
(17, 3, 'Ollagüe'),
(18, 3, 'San Pedro de Atacama'),
(19, 3, 'María Elena'),
(20, 3, 'Tocopilla'),
(21, 4, 'Chañaral'),
(22, 4, 'Diego de Almagro'),
(23, 4, 'Caldera'),
(24, 4, 'Copiapó'),
(25, 4, 'Tierra Amarilla'),
(26, 4, 'Alto del Carmen'),
(27, 4, 'Freirina'),
(28, 4, 'Huasco'),
(29, 4, 'Vallenar'),
(30, 5, 'Canela'),
(31, 5, 'Illapel'),
(32, 5, 'Los Vilos'),
(33, 5, 'Salamanca'),
(34, 5, 'Andacollo'),
(35, 5, 'Coquimbo'),
(36, 5, 'La Higuera'),
(37, 5, 'La Serena'),
(38, 5, 'Paihuano'),
(39, 5, 'Vicuña'),
(40, 5, 'Combarbalá'),
(41, 5, 'Monte Patria'),
(42, 5, 'Ovalle'),
(43, 5, 'Punitaqui'),
(44, 5, 'Río Hurtado'),
(45, 6, 'Isla de Pascua'),
(46, 6, 'Calle Larga'),
(47, 6, 'Los Andes'),
(48, 6, 'Rinconada de Los Andes'),
(49, 6, 'San Esteban'),
(50, 6, 'Limache'),
(51, 6, 'Olmué'),
(52, 6, 'Quilpué'),
(53, 6, 'Villa Alemana'),
(54, 6, 'Cabildo'),
(55, 6, 'La Ligua'),
(56, 6, 'Papudo'),
(57, 6, 'Petorca'),
(58, 6, 'Zapallar'),
(59, 6, 'Hijuelas'),
(60, 6, 'La Calera'),
(61, 6, 'La Cruz'),
(62, 6, 'Nogales'),
(63, 6, 'Quillota'),
(64, 6, 'Algarrobo'),
(65, 6, 'Cartagena'),
(66, 6, 'El Quisco'),
(67, 6, 'El Tabo'),
(68, 6, 'San Antonio'),
(69, 6, 'Santo Domingo'),
(70, 6, 'Catemu'),
(71, 6, 'Llaillay'),
(72, 6, 'Panquehue'),
(73, 6, 'Putaendo'),
(74, 6, 'San Felipe'),
(75, 6, 'Santa María'),
(76, 6, 'Casablanca'),
(77, 6, 'Concón'),
(78, 6, 'Juan Fernández'),
(79, 6, 'Puchuncaví'),
(80, 6, 'Quintero'),
(81, 6, 'Valparaíso'),
(82, 6, 'Viña del Mar'),
(83, 7, 'Codegua'),
(84, 7, 'Coínco'),
(85, 7, 'Coltauco'),
(86, 7, 'Doñihue'),
(87, 7, 'Graneros'),
(88, 7, 'Las Cabras'),
(89, 7, 'Machalí'),
(90, 7, 'Malloa'),
(91, 7, 'Olivar'),
(92, 7, 'Peumo'),
(93, 7, 'Pichidegua'),
(94, 7, 'Quinta de Tilcoco'),
(95, 7, 'Rancagua'),
(96, 7, 'Requínoa'),
(97, 7, 'Rengo'),
(98, 7, 'San Francisco de Mostazal'),
(99, 7, 'San Vicente de Tagua Tagua'),
(100, 7, 'La Estrella'),
(101, 7, 'Litueche'),
(102, 7, 'Marchigüe'),
(103, 7, 'Navidad'),
(104, 7, 'Paredones'),
(105, 7, 'Pichilemu'),
(106, 7, 'Chépica'),
(107, 7, 'Chimbarongo'),
(108, 7, 'Lolol'),
(109, 7, 'Nancagua'),
(110, 7, 'Palmilla'),
(111, 7, 'Peralillo'),
(112, 7, 'Placilla'),
(113, 7, 'Pumanque'),
(114, 7, 'San Fernando'),
(115, 7, 'Santa Cruz'),
(116, 8, 'Cauquenes'),
(117, 8, 'Chanco'),
(118, 8, 'Pelluhue'),
(119, 8, 'Curicó'),
(120, 8, 'Hualañé'),
(121, 8, 'Licantén'),
(122, 8, 'Molina'),
(123, 8, 'Rauco'),
(124, 8, 'Romeral'),
(125, 8, 'Sagrada Familia'),
(126, 8, 'Teno'),
(127, 8, 'Vichuquén'),
(128, 8, 'Colbún'),
(129, 8, 'Linares'),
(130, 8, 'Longaví'),
(131, 8, 'Parral'),
(132, 8, 'Retiro'),
(133, 8, 'San Javier de Loncomilla'),
(134, 8, 'Villa Alegre'),
(135, 8, 'Yerbas Buenas'),
(136, 8, 'Constitución'),
(137, 8, 'Curepto'),
(138, 8, 'Empedrado'),
(139, 8, 'Maule'),
(140, 8, 'Pelarco'),
(141, 8, 'Pencahue'),
(142, 8, 'Río Claro'),
(143, 8, 'San Clemente'),
(144, 8, 'San Rafael'),
(145, 8, 'Talca'),
(146, 9, 'Bulnes'),
(147, 9, 'Chillán'),
(148, 9, 'Chillán Viejo'),
(149, 9, 'El Carmen'),
(150, 9, 'Pemuco'),
(151, 9, 'Pinto'),
(152, 9, 'Quillón'),
(153, 9, 'San Ignacio'),
(154, 9, 'Yungay'),
(155, 9, 'Cobquecura'),
(156, 9, 'Coelemu'),
(157, 9, 'Ninhue'),
(158, 9, 'Portezuelo'),
(159, 9, 'Quirihue'),
(160, 9, 'Ránquil'),
(161, 9, 'Treguaco'),
(162, 9, 'Coihueco'),
(163, 9, 'Ñiquén'),
(164, 9, 'San Carlos'),
(165, 9, 'San Fabián'),
(166, 9, 'San Nicolás'),
(167, 10, 'Arauco'),
(168, 10, 'Cañete'),
(169, 10, 'Contulmo'),
(170, 10, 'Curanilahue'),
(171, 10, 'Lebu'),
(172, 10, 'Los Álamos'),
(173, 10, 'Tirúa'),
(174, 10, 'Alto Biobío'),
(175, 10, 'Antuco'),
(176, 10, 'Cabrero'),
(177, 10, 'Laja'),
(178, 10, 'Los Ángeles'),
(179, 10, 'Mulchén'),
(180, 10, 'Nacimiento'),
(181, 10, 'Negrete'),
(182, 10, 'Quilaco'),
(183, 10, 'Quilleco'),
(184, 10, 'San Rosendo'),
(185, 10, 'Santa Bárbara'),
(186, 10, 'Tucapel'),
(187, 10, 'Yumbel'),
(188, 10, 'Chiguayante'),
(189, 10, 'Concepción'),
(190, 10, 'Coronel'),
(191, 10, 'Florida'),
(192, 10, 'Hualpén'),
(193, 10, 'Hualqui'),
(194, 10, 'Lota'),
(195, 10, 'Penco'),
(196, 10, 'San Pedro de la Paz'),
(197, 10, 'Santa Juana'),
(198, 10, 'Talcahuano'),
(199, 10, 'Tomé'),
(200, 11, 'Carahue'),
(201, 11, 'Cholchol'),
(202, 11, 'Cunco'),
(203, 11, 'Curarrehue'),
(204, 11, 'Freire'),
(205, 11, 'Galvarino'),
(206, 11, 'Gorbea'),
(207, 11, 'Lautaro'),
(208, 11, 'Loncoche'),
(209, 11, 'Melipeuco'),
(210, 11, 'Nueva Imperial'),
(211, 11, 'Padre Las Casas'),
(212, 11, 'Perquenco'),
(213, 11, 'Pitrufquén'),
(214, 11, 'Pucón'),
(215, 11, 'Saavedra'),
(216, 11, 'Temuco'),
(217, 11, 'Teodoro Schmidt'),
(218, 11, 'Toltén'),
(219, 11, 'Vilcún'),
(220, 11, 'Villarrica'),
(221, 11, 'Angol'),
(222, 11, 'Collipulli'),
(223, 11, 'Curacautín'),
(224, 11, 'Ercilla'),
(225, 11, 'Lonquimay'),
(226, 11, 'Los Sauces'),
(227, 11, 'Lumaco'),
(228, 11, 'Purén'),
(229, 11, 'Renaico'),
(230, 11, 'Traiguén'),
(231, 11, 'Victoria'),
(232, 12, 'Futrono'),
(233, 12, 'La Unión'),
(234, 12, 'Lago Ranco'),
(235, 12, 'Río Bueno'),
(236, 12, 'Corral'),
(237, 12, 'Lanco'),
(238, 12, 'Los Lagos'),
(239, 12, 'Máfil'),
(240, 12, 'Mariquina'),
(241, 12, 'Paillaco'),
(242, 12, 'Panguipulli'),
(243, 12, 'Valdivia'),
(244, 13, 'Ancud'),
(245, 13, 'Castro'),
(246, 13, 'Chonchi'),
(247, 13, 'Curaco de Vélez'),
(248, 13, 'Dalcahue'),
(249, 13, 'Puqueldón'),
(250, 13, 'Queilén'),
(251, 13, 'Quellón'),
(252, 13, 'Quemchi'),
(253, 13, 'Quinchao'),
(254, 13, 'Calbuco'),
(255, 13, 'Cochamó'),
(256, 13, 'Fresia'),
(257, 13, 'Frutillar'),
(258, 13, 'Llanquihue'),
(259, 13, 'Los Muermos'),
(260, 13, 'Maullín'),
(261, 13, 'Puerto Montt'),
(262, 13, 'Puerto Varas'),
(263, 13, 'Osorno'),
(264, 13, 'Puerto Octay'),
(265, 13, 'Purranque'),
(266, 13, 'Puyehue'),
(267, 13, 'Río Negro'),
(268, 13, 'San Pablo'),
(269, 13, 'San Juan de la Costa'),
(270, 13, 'Chaitén'),
(271, 13, 'Futaleufú'),
(272, 13, 'Hualaihué'),
(273, 13, 'Palena'),
(274, 14, 'Aysén'),
(275, 14, 'Cisnes'),
(276, 14, 'Guaitecas'),
(277, 14, 'Cochrane'),
(278, 14, 'OHiggins'),
(279, 14, 'Tortel'),
(280, 14, 'Coyhaique'),
(281, 14, 'Lago Verde'),
(282, 14, 'Chile Chico'),
(283, 14, 'Río Ibáñez'),
(284, 15, 'Antártica'),
(285, 15, 'Cabo de Hornos'),
(286, 15, 'Laguna Blanca'),
(287, 15, 'Punta Arenas'),
(288, 15, 'Río Verde'),
(289, 15, 'San Gregorio'),
(290, 15, 'Porvenir'),
(291, 15, 'Primavera'),
(292, 15, 'Timaukel'),
(293, 15, 'Natales'),
(294, 15, 'Torres del Paine'),
(295, 16, 'Colina'),
(296, 16, 'Lampa'),
(297, 16, 'Tiltil'),
(298, 16, 'Pirque'),
(299, 16, 'Puente Alto'),
(300, 16, 'San José de Maipo'),
(301, 16, 'Buin'),
(302, 16, 'Calera de Tango'),
(303, 16, 'Paine'),
(304, 16, 'San Bernardo'),
(305, 16, 'Alhué'),
(306, 16, 'Curacaví'),
(307, 16, 'María Pinto'),
(308, 16, 'Melipilla'),
(309, 16, 'San Pedro'),
(310, 16, 'Cerrillos'),
(311, 16, 'Cerro Navia'),
(312, 16, 'Conchalí'),
(313, 16, 'El Bosque'),
(314, 16, 'Estación Central'),
(315, 16, 'Huechuraba'),
(316, 16, 'Independencia'),
(317, 16, 'La Cisterna'),
(318, 16, 'La Granja'),
(319, 16, 'La Florida'),
(320, 16, 'La Pintana'),
(321, 16, 'La Reina'),
(322, 16, 'Las Condes'),
(323, 16, 'Lo Barnechea'),
(324, 16, 'Lo Espejo'),
(325, 16, 'Lo Prado'),
(326, 16, 'Macul'),
(327, 16, 'Maipú'),
(328, 16, 'Ñuñoa'),
(329, 16, 'Pedro Aguirre Cerda'),
(330, 16, 'Peñalolén'),
(331, 16, 'Providencia'),
(332, 16, 'Pudahuel'),
(333, 16, 'Quilicura'),
(334, 16, 'Quinta Normal'),
(335, 16, 'Recoleta'),
(336, 16, 'Renca'),
(337, 16, 'San Miguel'),
(338, 16, 'San Joaquín'),
(339, 16, 'San Ramón'),
(340, 16, 'Santiago'),
(341, 16, 'Vitacura'),
(342, 16, 'El Monte'),
(343, 16, 'Isla de Maipo'),
(344, 16, 'Padre Hurtado'),
(345, 16, 'Peñaflor'),
(346, 16, 'Talagante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `ID` int(11) NOT NULL,
  `ADOPTANTE_ID` int(11) NOT NULL,
  `TELEFONO_FIJO` int(11) DEFAULT NULL,
  `TELEFONO_MOVIL` int(11) NOT NULL,
  `CORREO_ELECTRONICO` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico`
--

CREATE TABLE `diagnostico` (
  `ID` int(11) NOT NULL,
  `ORGANIZACION_ID` int(11) DEFAULT NULL,
  `NOMBRE` varchar(32) NOT NULL,
  `DESCRIPCION` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `diagnostico`
--

INSERT INTO `diagnostico` (`ID`, `ORGANIZACION_ID`, `NOMBRE`, `DESCRIPCION`) VALUES
(1, 2, 'Fractura Multiple', 'El animal sufre de multiples fracturas en sus extremidades.'),
(2, 2, 'Dermatofitosis (Tiña)', 'La tiña es una infección causada por un hongo que crece en las capas muertas superficiales de la pie');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especie`
--

CREATE TABLE `especie` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especie`
--

INSERT INTO `especie` (`ID`, `NOMBRE`) VALUES
(1, 'Canino'),
(2, 'Felino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidencia`
--

CREATE TABLE `evidencia` (
  `ID` int(11) NOT NULL,
  `AFECTA_ID` int(11) NOT NULL,
  `URL` varchar(100) NOT NULL,
  `DESCRIPCION` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evidencia`
--

INSERT INTO `evidencia` (`ID`, `AFECTA_ID`, `URL`, `DESCRIPCION`) VALUES
(1, 1, '/res/imgs/evidencias/13/e1.jpg', 'Fractura del femur de la pata izquierda trasera del animal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizacion`
--

CREATE TABLE `organizacion` (
  `ID` int(11) NOT NULL,
  `RUT` varchar(10) NOT NULL,
  `RAZON_SOCIAL` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `organizacion`
--

INSERT INTO `organizacion` (`ID`, `RUT`, `RAZON_SOCIAL`) VALUES
(1, '', 'Brigada canina Amor y Patitas'),
(2, '', 'Renacer Felino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizacion_user`
--

CREATE TABLE `organizacion_user` (
  `ORGANIZACION_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `VOLUNTARIO` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `organizacion_user`
--

INSERT INTO `organizacion_user` (`ORGANIZACION_ID`, `USER_ID`, `VOLUNTARIO`) VALUES
(2, 1, 0),
(2, 2, 0),
(2, 3, 0),
(2, 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE `raza` (
  `ID` int(11) NOT NULL,
  `ESPECIE_ID` int(11) NOT NULL,
  `NOMBRE` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `raza`
--

INSERT INTO `raza` (`ID`, `ESPECIE_ID`, `NOMBRE`) VALUES
(1, 1, 'AFFENPINSCHER'),
(2, 1, 'AKITA AMERICANO'),
(3, 1, 'AKITA INU'),
(4, 1, 'AMERICAN BULLY'),
(5, 1, 'AMSTAFF'),
(6, 1, 'BASSET HOUND'),
(7, 1, 'BEAGLE'),
(8, 1, 'BICHÓN FRISÉ'),
(9, 1, 'BICHÓN HABANERO'),
(10, 1, 'BICHÓN MALTÉS'),
(11, 1, 'BOBTAIL'),
(12, 1, 'BOERBOEL'),
(13, 1, 'BORDER COLLIE'),
(14, 1, 'BOSTON TERRIER'),
(15, 1, 'BÓXER'),
(16, 1, 'BOYERO DE BERNA'),
(17, 1, 'BULL DOG FRANCÉS'),
(18, 1, 'BULL DOG INGLÉS'),
(19, 1, 'BULL TERRIER MINIATURA'),
(20, 1, 'BULLMASTIFF'),
(21, 1, 'CAIRN TERRIER'),
(22, 1, 'CANE CORSO'),
(23, 1, 'CANICHE TOY'),
(24, 1, 'CAVALIER KING CHARLES SPANIEL'),
(25, 1, 'CHIHUAHUA'),
(26, 1, 'CIRNECO DEL ETNA'),
(27, 1, 'COCKER SPANIEL'),
(28, 1, 'CRESTADO CHINO'),
(29, 1, 'DÁLMATA'),
(30, 1, 'DOBERMAN'),
(31, 1, 'DOGO ARGENTINO'),
(32, 1, 'DOGO DE BURDEOS'),
(33, 1, 'FILA BRASILEIRO'),
(34, 1, 'GALGO ESPAÑOL'),
(35, 1, 'GALGO ITALIANO'),
(36, 1, 'GOLDEN RETRIEVER'),
(37, 1, 'GRAN DANÉS'),
(38, 1, 'HUSKY SIBERIANO'),
(39, 1, 'JACK RUSSELL TERRIER'),
(40, 1, 'KANGAL TURCO'),
(41, 1, 'KOMONDOR'),
(42, 1, 'LABRADOR NEGRO'),
(43, 1, 'LHASA APSO'),
(44, 1, 'LOBERO IRLANDÉS'),
(45, 1, 'MASTÍN INGLÉS'),
(46, 1, 'MASTÍN TIBETANO'),
(47, 1, 'PACHÓN NAVARRO'),
(48, 1, 'PAPILLÓN'),
(49, 1, 'PASTOR ALEMÁN'),
(50, 1, 'PASTOR ALEMÁN BLANCO'),
(51, 1, 'PASTOR AUSTRALIANO MINIATURA'),
(52, 1, 'PASTOR BELGA'),
(53, 1, 'PASTOR BELGA MALINOIS'),
(54, 1, 'PASTOR CAUCÁSICO'),
(55, 1, 'PASTOR OVEJERO AUSTRALIANO'),
(56, 1, 'PEKINÉS'),
(57, 1, 'PEQUEÑO BRABANTINO'),
(58, 1, 'PERRO AGUAS ESPAÑOL'),
(59, 1, 'PERRO CORGI'),
(60, 1, 'PERRO DE AGUA PORTUGUÉS'),
(61, 1, 'PERRO DE SAN HUBERTO'),
(62, 1, 'PERRO LOBO CHECOSLOVACO'),
(63, 1, 'PERRO LOBO HERREÑO'),
(64, 1, 'PERRO PINSCHER'),
(65, 1, 'PERROS PITBULL AMERICANOS'),
(66, 1, 'PERROS SCHNAUZER'),
(67, 1, 'PERROS SHITZU O SHIH TZU'),
(68, 1, 'POMERANIA'),
(69, 1, 'PRESA CANARIO'),
(70, 1, 'PUG CARLINO'),
(71, 1, 'MESTIZO'),
(72, 1, 'ROTTWEILER'),
(73, 1, 'SAN BERNARDO'),
(74, 1, 'SHAR PEI'),
(75, 1, 'SHIBA INU'),
(76, 1, 'STAFFORDSHIRE BULL TERRIER'),
(77, 1, 'TECKEL DE PELO LARGO'),
(78, 1, 'TERRANOVA'),
(79, 1, 'TIGRE ANDINO DE DOS NARICES'),
(80, 1, 'TOSA INU'),
(81, 1, 'WESTIE'),
(82, 1, 'WHIPPET'),
(83, 1, 'XOLOITZCUINTLE'),
(84, 1, 'YORKSHIRE TERRIER'),
(85, 2, 'ABISINIO'),
(86, 2, 'AMERICAN CURL'),
(87, 2, 'AZUL RUSO'),
(88, 2, 'AMERICAN SHORTHAIR'),
(89, 2, 'AMERICAN WIREHAIR'),
(90, 2, 'ANGORA TURCO'),
(91, 2, 'AFRICANO DOMÉSTICO'),
(92, 2, 'BENGALA'),
(93, 2, 'BOBTAIL JAPONÉS'),
(94, 2, 'BOMBAY'),
(95, 2, 'BOSQUE DE NORUEGA'),
(96, 2, 'BRAZILIAN SHORTHAIR'),
(97, 2, 'BRIVON DE PELO CORTO'),
(98, 2, 'BRIVON DE PELO LARGO'),
(99, 2, 'BRITISH SHORTHAIR'),
(100, 2, 'BURMÉS'),
(101, 2, 'BURMILLA'),
(102, 2, 'CORNISH REX'),
(103, 2, 'CALIFORNIA SPANGLED'),
(104, 2, 'CEYLON'),
(105, 2, 'CYMRIC'),
(106, 2, 'CHARTREUX'),
(107, 2, 'DEUTSCH LANGHAAR'),
(108, 2, 'DEVON REX'),
(109, 2, 'DORADO AFRICANO'),
(110, 2, 'DON SPHYNX'),
(111, 2, 'DRAGON LI'),
(112, 2, 'EUROPEO COMÚN'),
(113, 2, 'EXÓTICO DE PELO CORTO'),
(114, 2, 'GATO EUROPEO BICOLOR'),
(115, 2, 'FOLDEX'),
(116, 2, 'GERMAN REX'),
(117, 2, 'HABANA BROWN'),
(118, 2, 'HIMALAYO'),
(119, 2, 'KORAT'),
(120, 2, 'KHAO MANEE'),
(121, 2, 'MAINE COON'),
(122, 2, 'MANX'),
(123, 2, 'MAU EGIPCIO'),
(124, 2, 'MUNCHKIN'),
(125, 2, 'OCICAT'),
(126, 2, 'ORIENTAL'),
(127, 2, 'ORIENTAL DE PELO LARGO'),
(128, 2, 'PERFOLD'),
(129, 2, 'PERSA MODERNO'),
(130, 2, 'PERSA CLÁSICO'),
(131, 2, 'PETERBALD'),
(132, 2, 'PIXIE BOB'),
(133, 2, 'RAGDOLL'),
(134, 2, 'SAGRADO DE BIRMANIA'),
(135, 2, 'SCOTTISH FOLD'),
(136, 2, 'SELKIRK REX'),
(137, 2, 'SERENGETI'),
(138, 2, 'SEYCHELLOIS'),
(139, 2, 'SIAMÉS'),
(140, 2, 'SIAMÉS MODERNO'),
(141, 2, 'SIAMÉS TRADICIONAL'),
(142, 2, 'SIBERIANO'),
(143, 2, 'SNOWSHOE'),
(144, 2, 'SPHYNX'),
(145, 2, 'TONKINÉS'),
(146, 2, 'VAN TURCO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(48) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`ID`, `NOMBRE`) VALUES
(1, 'Arica y Parinacota'),
(2, 'Tarapacá'),
(3, 'Antofagasta'),
(4, 'Atacama'),
(5, 'Coquimbo'),
(6, 'Valparaíso'),
(7, 'Libertador General Bernardo OHiggins'),
(8, 'Maule'),
(9, 'Ñuble'),
(10, 'Biobío'),
(11, 'Araucanía'),
(12, 'Los Ríos'),
(13, 'Los Lagos'),
(14, 'Aysén del General Carlos Ibáñez del Campo'),
(15, 'Magallanes y de la Antártica Chilena'),
(16, 'Metropolitana de Santiago');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `ID` int(11) NOT NULL,
  `ORGANIZACION_ID` int(11) DEFAULT NULL,
  `NOMBRE` varchar(32) NOT NULL,
  `DESCRIPCION` varchar(300) DEFAULT NULL,
  `VALOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `URL` varchar(100) DEFAULT '/res/imgs/default_user.jpg',
  `RUT` varchar(10) NOT NULL,
  `PRIMER_NOMBRE` varchar(50) NOT NULL,
  `SEGUNDO_NOMBRE` varchar(50) DEFAULT NULL,
  `APELLIDO_PATERNO` varchar(50) NOT NULL,
  `APELLIDO_MATERNO` varchar(50) DEFAULT NULL,
  `CARGO` varchar(20) NOT NULL,
  `PASSWORD` varchar(256) NOT NULL,
  `REMEMBER_TOKEN` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`ID`, `URL`, `RUT`, `PRIMER_NOMBRE`, `SEGUNDO_NOMBRE`, `APELLIDO_PATERNO`, `APELLIDO_MATERNO`, `CARGO`, `PASSWORD`, `REMEMBER_TOKEN`) VALUES
(1, '/res/imgs/default_user.jpg', '12582440-4', 'Jessica', 'Yesenia', 'Gonzalez', 'Lopez', 'Admin', 'AdoqzbSQUc', ''),
(2, '/res/imgs/default_user.jpg', '13133984-4', 'Bernarda', 'Alejandra', 'Ferreira', 'Puebla', 'Socio', 'XWZdrUovBE', ''),
(3, '/res/imgs/default_user.jpg', '15981935-3', 'Juana', 'Edilia', 'Olguin', 'Platero', 'Socio', 'LzBZxLZzBP', ''),
(4, '/res/imgs/default_user.jpg', '24829898-7', 'Lorena', 'Elizabeth', 'Morales', 'Peralta', 'Admin', 'DMwKcbRjkI', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adopcion`
--
ALTER TABLE `adopcion`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `EFECTUA_FK` (`USER_ID`),
  ADD KEY `FORMA_PARTE_FK` (`ANIMAL_ID`),
  ADD KEY `SOLICITA_FK` (`ADOPTANTE_ID`);

--
-- Indices de la tabla `adoptante`
--
ALTER TABLE `adoptante`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `EXISTE_FK` (`COMUNA_ID`),
  ADD KEY `RELATIONSHIP_18_FK` (`USER_ID`);

--
-- Indices de la tabla `afecta`
--
ALTER TABLE `afecta`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AFECTA2_FK` (`ANIMAL_ID`),
  ADD KEY `AFECTA1_FK` (`DIAGNOSTICO_ID`);

--
-- Indices de la tabla `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CLASIFICA_FK` (`RAZA_ID`),
  ADD KEY `TIENE_FK` (`ORGANIZACION_ID`),
  ADD KEY `RELATIONSHIP_17_FK` (`USER_ID`);

--
-- Indices de la tabla `campana`
--
ALTER TABLE `campana`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `REALIZA_FK` (`ORGANIZACION_ID`);

--
-- Indices de la tabla `comuna`
--
ALTER TABLE `comuna`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CONTIENE_FK` (`REGION_ID`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `POSEE_FK` (`ADOPTANTE_ID`);

--
-- Indices de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `RELATIONSHIP_19_FK` (`ORGANIZACION_ID`);

--
-- Indices de la tabla `especie`
--
ALTER TABLE `especie`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `evidencia`
--
ALTER TABLE `evidencia`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `GENERA_FK` (`AFECTA_ID`);

--
-- Indices de la tabla `organizacion`
--
ALTER TABLE `organizacion`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `organizacion_user`
--
ALTER TABLE `organizacion_user`
  ADD KEY `PARTICIPA1_FK` (`ORGANIZACION_ID`),
  ADD KEY `RELATIONSHIP_9_FK` (`USER_ID`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PERTENECE_FK` (`ESPECIE_ID`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PROVEE_FK` (`ORGANIZACION_ID`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adopcion`
--
ALTER TABLE `adopcion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `adoptante`
--
ALTER TABLE `adoptante`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `afecta`
--
ALTER TABLE `afecta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `animal`
--
ALTER TABLE `animal`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `campana`
--
ALTER TABLE `campana`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comuna`
--
ALTER TABLE `comuna`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=347;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `especie`
--
ALTER TABLE `especie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `evidencia`
--
ALTER TABLE `evidencia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `organizacion`
--
ALTER TABLE `organizacion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adopcion`
--
ALTER TABLE `adopcion`
  ADD CONSTRAINT `FK_EFECTUA` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `FK_FORMA_PARTE` FOREIGN KEY (`ANIMAL_ID`) REFERENCES `animal` (`ID`),
  ADD CONSTRAINT `FK_SOLICITA` FOREIGN KEY (`ADOPTANTE_ID`) REFERENCES `adoptante` (`ID`);

--
-- Filtros para la tabla `adoptante`
--
ALTER TABLE `adoptante`
  ADD CONSTRAINT `FK_EXISTE` FOREIGN KEY (`COMUNA_ID`) REFERENCES `comuna` (`ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_18` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`ID`);

--
-- Filtros para la tabla `afecta`
--
ALTER TABLE `afecta`
  ADD CONSTRAINT `FK_AFECTA1` FOREIGN KEY (`DIAGNOSTICO_ID`) REFERENCES `diagnostico` (`ID`),
  ADD CONSTRAINT `FK_AFECTA2` FOREIGN KEY (`ANIMAL_ID`) REFERENCES `animal` (`ID`);

--
-- Filtros para la tabla `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `FK_CLASIFICA` FOREIGN KEY (`RAZA_ID`) REFERENCES `raza` (`ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_17` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `FK_TIENE` FOREIGN KEY (`ORGANIZACION_ID`) REFERENCES `organizacion` (`ID`);

--
-- Filtros para la tabla `campana`
--
ALTER TABLE `campana`
  ADD CONSTRAINT `FK_REALIZA` FOREIGN KEY (`ORGANIZACION_ID`) REFERENCES `organizacion` (`ID`);

--
-- Filtros para la tabla `comuna`
--
ALTER TABLE `comuna`
  ADD CONSTRAINT `FK_CONTIENE` FOREIGN KEY (`REGION_ID`) REFERENCES `region` (`ID`);

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `FK_POSEE` FOREIGN KEY (`ADOPTANTE_ID`) REFERENCES `adoptante` (`ID`);

--
-- Filtros para la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD CONSTRAINT `FK_RELATIONSHIP_19` FOREIGN KEY (`ORGANIZACION_ID`) REFERENCES `organizacion` (`ID`);

--
-- Filtros para la tabla `evidencia`
--
ALTER TABLE `evidencia`
  ADD CONSTRAINT `FK_GENERA` FOREIGN KEY (`AFECTA_ID`) REFERENCES `afecta` (`ID`);

--
-- Filtros para la tabla `organizacion_user`
--
ALTER TABLE `organizacion_user`
  ADD CONSTRAINT `FK_PARTICIPA1` FOREIGN KEY (`ORGANIZACION_ID`) REFERENCES `organizacion` (`ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`ID`);

--
-- Filtros para la tabla `raza`
--
ALTER TABLE `raza`
  ADD CONSTRAINT `FK_PERTENECE` FOREIGN KEY (`ESPECIE_ID`) REFERENCES `especie` (`ID`);

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `FK_PROVEE` FOREIGN KEY (`ORGANIZACION_ID`) REFERENCES `organizacion` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
