-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2017 a las 17:24:24
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor`
--

CREATE TABLE `actor` (
  `id` int(11) NOT NULL,
  `nif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cognom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fotografia` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `actor`
--

INSERT INTO `actor` (`id`, `nif`, `nom`, `cognom`, `sexe`, `fotografia`) VALUES
(1, '77129942V', 'Aleix', 'Aguilar', 'home', 'https://cdn.pixabay.com/user/2015/01/20/20-56-42-330_250x250.jpg'),
(6, '1277129942V', 'Aleixurro', 'Aguilardo', 'dona', 'http://www.mantonesyfulares.com/WebRoot/StoreES/Shops/ec0004/5096/A13D/C12D/EB04/9E83/AC10/1414/52ED/DSCN1777.JPG'),
(7, '123123123V', 'TOPO', 'Traitor', 'dona', 'http://sonidosdeanimales.net/wp-content/uploads/2015/10/topo-500x321.jpg'),
(10, '123456D', 'Tirori', 'Kicks', 'home', 'http://s31.postimg.org/cq2pz5z23/hamster.jpg'),
(14, 'asdas', 'dasdasdasd', 'adasd', 'home', ''),
(15, 'asdasdasd', 'Adasdad', 'Adsasd', 'dona', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `id` int(11) NOT NULL,
  `nif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cognom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `director`
--

INSERT INTO `director` (`id`, `nif`, `nom`, `cognom`) VALUES
(1, '77129942V', 'Bethesdaas', 'Yuuu'),
(3, '1277129942V', 'Aleix', 'Aguilar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `papel`
--

CREATE TABLE `papel` (
  `id` int(11) NOT NULL,
  `id_projecte` int(11) DEFAULT NULL,
  `id_actor` int(11) DEFAULT NULL,
  `tipus_paper` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `papel`
--

INSERT INTO `papel` (`id`, `id_projecte`, `id_actor`, `tipus_paper`, `nom`) VALUES
(1, 3, 6, 'secundario', 'El crack'),
(3, 1, 1, 'secundario', 'El crackinolo'),
(4, 1, 6, 'secundario', '23'),
(5, 1, 1, 'secundario', 'Se'),
(7, 1, 7, 'secundario', 'Traitor'),
(9, 1, 10, 'primario', 'Kicks');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projecte`
--

CREATE TABLE `projecte` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datainici` date NOT NULL,
  `datafinal` date NOT NULL,
  `id_director` int(11) DEFAULT NULL,
  `fotografia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_tipo_obra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `projecte`
--

INSERT INTO `projecte` (`id`, `nom`, `descripcio`, `datainici`, `datafinal`, `id_director`, `fotografia`, `id_tipo_obra`) VALUES
(1, 'Aleixurro', 'asdasdasd', '2015-03-12', '2015-05-12', 3, '', 1),
(2, 'Aleixurroser', 'asdasdasd', '2015-03-12', '2015-05-12', 1, '', 2),
(3, 'Bethesda', 'Descp', '2015-03-12', '2015-05-12', 1, '', 1),
(4, 'Aleixurro', 'Descp 2', '2015-03-12', '2015-05-12', 3, '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_obra`
--

CREATE TABLE `tipo_obra` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_obra`
--

INSERT INTO `tipo_obra` (`id`, `tipo`) VALUES
(2, 'esese'),
(1, 'Pene');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_447556F9ADE62BBB` (`nif`);

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `papel`
--
ALTER TABLE `papel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B4155D75F89CEA60` (`id_projecte`),
  ADD KEY `IDX_B4155D75AAF017C9` (`id_actor`);

--
-- Indices de la tabla `projecte`
--
ALTER TABLE `projecte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A84706F54E4B3F65` (`id_director`),
  ADD KEY `IDX_A84706F5A4F406DF` (`id_tipo_obra`);

--
-- Indices de la tabla `tipo_obra`
--
ALTER TABLE `tipo_obra`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_24C1BAF8702D1D47` (`tipo`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actor`
--
ALTER TABLE `actor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `director`
--
ALTER TABLE `director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `papel`
--
ALTER TABLE `papel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `projecte`
--
ALTER TABLE `projecte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipo_obra`
--
ALTER TABLE `tipo_obra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `papel`
--
ALTER TABLE `papel`
  ADD CONSTRAINT `FK_B4155D75AAF017C9` FOREIGN KEY (`id_actor`) REFERENCES `actor` (`id`),
  ADD CONSTRAINT `FK_B4155D75F89CEA60` FOREIGN KEY (`id_projecte`) REFERENCES `projecte` (`id`);

--
-- Filtros para la tabla `projecte`
--
ALTER TABLE `projecte`
  ADD CONSTRAINT `FK_A84706F54E4B3F65` FOREIGN KEY (`id_director`) REFERENCES `director` (`id`),
  ADD CONSTRAINT `FK_A84706F5A4F406DF` FOREIGN KEY (`id_tipo_obra`) REFERENCES `tipo_obra` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
