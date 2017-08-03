-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2017 a las 04:31:35
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbagenciaturismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tadministrador`
--

CREATE TABLE `tadministrador` (
  `idadmin` varchar(5) NOT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `contraseña` varchar(5) DEFAULT NULL,
  `habilitado` bit(1) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `cargo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tclientes`
--

CREATE TABLE `tclientes` (
  `idcliente` varchar(5) NOT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `genero` char(2) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `nropasaporte` int(11) DEFAULT NULL,
  `fechanacimiento` varchar(10) DEFAULT NULL,
  `estudiante` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tequiporeserva`
--

CREATE TABLE `tequiporeserva` (
  `idreserva` varchar(5) CHARACTER SET utf8 NOT NULL,
  `idequipo` varchar(5) CHARACTER SET utf8 NOT NULL,
  `precio` int(11) NOT NULL DEFAULT '0',
  `cantidad` int(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tequipos`
--

CREATE TABLE `tequipos` (
  `idequipo` varchar(5) NOT NULL,
  `nombre` varchar(35) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tguias`
--

CREATE TABLE `tguias` (
  `idguia` varchar(5) NOT NULL,
  `fullnombre` varchar(50) DEFAULT NULL,
  `genero` char(2) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `idiomas` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpago`
--

CREATE TABLE `tpago` (
  `idpago` varchar(5) NOT NULL,
  `idreserva` varchar(5) DEFAULT NULL,
  `montototal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpaquetes`
--

CREATE TABLE `tpaquetes` (
  `idpaquete` varchar(5) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `terminos` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `treserva`
--

CREATE TABLE `treserva` (
  `idreserva` varchar(5) NOT NULL,
  `idtour` varchar(5) DEFAULT NULL,
  `fechaViaje` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `treservadetalle`
--

CREATE TABLE `treservadetalle` (
  `idreserva` varchar(5) NOT NULL,
  `idcliente` varchar(5) NOT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttour`
--

CREATE TABLE `ttour` (
  `idtour` varchar(5) NOT NULL,
  `idpaquete` varchar(5) DEFAULT NULL,
  `idguia` varchar(5) DEFAULT NULL,
  `nombretour` varchar(45) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `infogeneral` text,
  `iterinario` text,
  `incluye` text,
  `quellevar` text,
  `foto` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tadministrador`
--
ALTER TABLE `tadministrador`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indices de la tabla `tclientes`
--
ALTER TABLE `tclientes`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `tequiporeserva`
--
ALTER TABLE `tequiporeserva`
  ADD PRIMARY KEY (`idreserva`,`idequipo`),
  ADD KEY `fkequiporeserva02` (`idequipo`);

--
-- Indices de la tabla `tequipos`
--
ALTER TABLE `tequipos`
  ADD PRIMARY KEY (`idequipo`);

--
-- Indices de la tabla `tguias`
--
ALTER TABLE `tguias`
  ADD PRIMARY KEY (`idguia`);

--
-- Indices de la tabla `tpago`
--
ALTER TABLE `tpago`
  ADD PRIMARY KEY (`idpago`),
  ADD KEY `fkidreserva` (`idreserva`);

--
-- Indices de la tabla `tpaquetes`
--
ALTER TABLE `tpaquetes`
  ADD PRIMARY KEY (`idpaquete`);

--
-- Indices de la tabla `treserva`
--
ALTER TABLE `treserva`
  ADD PRIMARY KEY (`idreserva`),
  ADD KEY `fkidtour` (`idtour`);

--
-- Indices de la tabla `treservadetalle`
--
ALTER TABLE `treservadetalle`
  ADD PRIMARY KEY (`idreserva`,`idcliente`),
  ADD KEY `fkidcliente` (`idcliente`);

--
-- Indices de la tabla `ttour`
--
ALTER TABLE `ttour`
  ADD PRIMARY KEY (`idtour`),
  ADD KEY `fkidguia` (`idguia`),
  ADD KEY `fkidpaquete` (`idpaquete`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tequiporeserva`
--
ALTER TABLE `tequiporeserva`
  ADD CONSTRAINT `fkequiporeserva01` FOREIGN KEY (`idreserva`) REFERENCES `treserva` (`idreserva`),
  ADD CONSTRAINT `fkequiporeserva02` FOREIGN KEY (`idequipo`) REFERENCES `tequipos` (`idequipo`);

--
-- Filtros para la tabla `tpago`
--
ALTER TABLE `tpago`
  ADD CONSTRAINT `fkidreserva` FOREIGN KEY (`idreserva`) REFERENCES `treserva` (`idreserva`);

--
-- Filtros para la tabla `treserva`
--
ALTER TABLE `treserva`
  ADD CONSTRAINT `fkidtour` FOREIGN KEY (`idtour`) REFERENCES `ttour` (`idtour`);

--
-- Filtros para la tabla `treservadetalle`
--
ALTER TABLE `treservadetalle`
  ADD CONSTRAINT `fkidcliente` FOREIGN KEY (`idcliente`) REFERENCES `tclientes` (`idcliente`),
  ADD CONSTRAINT `fkidreservadetalle` FOREIGN KEY (`idreserva`) REFERENCES `treserva` (`idreserva`);

--
-- Filtros para la tabla `ttour`
--
ALTER TABLE `ttour`
  ADD CONSTRAINT `fkidguia` FOREIGN KEY (`idguia`) REFERENCES `tguias` (`idguia`),
  ADD CONSTRAINT `fkidpaquete` FOREIGN KEY (`idpaquete`) REFERENCES `tpaquetes` (`idpaquete`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
