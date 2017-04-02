-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-04-2017 a las 19:59:20
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.2

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
(7, '123123123V', 'Will', 'Smith', 'Home', 'http://mxcdn02.mundotkm.com/2015/12/MTE4MDAzNDEwNzQzMTY2NDc4.jpg'),
(10, '1234567D', 'Tirori', 'Kicks', 'Home', 'http://s31.postimg.org/cq2pz5z23/hamster.jpg'),
(14, '49813245T', 'Angelina', 'Jolie', 'Dona', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Angelina-Jolie.jpg/220px-Angelina-Jolie.jpg'),
(15, '67654512Y', 'Scarlett', 'Johansson', 'Home', 'http://www.nbc.com/the-tonight-show/content/sites/nbcutsjf/files/styles/bit_stacked_resized/public/images/2015/04/22/scarlett-johansson.jpg?itok=XYLgN1HC'),
(17, '1491374T', 'Morgan ', 'Freeman', 'Home', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTc0MDMyMzI2OF5BMl5BanBnXkFtZTcwMzM2OTk1MQ@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(21, '77129942Q', 'Aaron', 'Paul', 'Home', 'http://kingofwallpapers.com/aaron-paul/aaron-paul-005.jpg'),
(22, '34512367T', 'Wagner', 'Moura', 'Home', 'https://www.whats-on-netflix.com/wp-content/uploads/2015/12/Wagner-Moura.jpg'),
(23, '345123512B', 'Ben', 'Affleck', 'Home', 'http://hairstyles.thehairstyler.com/hairstyle_views/front_view_images/6986/original/Ben-Affleck.jpg');

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
(11, '12345678A', 'Aleix', 'Definitiu'),
(14, '12341234A', 'Josep', 'Pocurull'),
(15, '12341234B', 'Guillem', 'Cebra'),
(32, '43276598B', 'Berbane', 'Morales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `papel`
--

CREATE TABLE `papel` (
  `id` int(11) NOT NULL,
  `id_projecte` int(11) DEFAULT NULL,
  `id_actor` int(11) DEFAULT NULL,
  `nom` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `id_tipo_papel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `papel`
--

INSERT INTO `papel` (`id`, `id_projecte`, `id_actor`, `nom`, `id_tipo_papel`) VALUES
(7, 1, 7, 'Traitor', NULL),
(9, 1, 10, 'Kicks', NULL),
(11, 3, 17, 'El Joker', 1),
(12, 3, 10, 'Batman', 1),
(13, 3, 7, 'Agente Gordon', 2),
(15, 21, 17, 'Agente PeÃ±a', 1),
(16, 21, 21, 'Agente Murphy', 1),
(17, 21, 22, 'Pablo Escobar', 1),
(18, 21, 14, 'Vendedora', 3),
(19, 21, 15, 'Chacha', 3),
(20, 21, 7, 'Gustavo Gaviria', 2),
(21, 1, 15, 'Bella', 1),
(23, 1, 22, 'Bestia', 1),
(24, 1, 17, 'Reloj', 3),
(26, 1, 21, 'Lumiere', 2),
(28, 2, 7, 'Driss', 1),
(29, 2, 23, 'Philippe', 1),
(30, 2, 21, 'Mayordomo', 3),
(32, 3, 22, 'Repartidor', 3),
(33, 4, 14, 'Pelirroja', 1),
(34, 4, 23, 'Padre', 1),
(35, 4, 15, 'Madre', 1),
(36, 4, 10, 'Amigo 1', 2),
(37, 4, 21, 'Amigo 2', 2),
(39, 4, 17, 'Extra 1', 3),
(40, 20, 17, 'Mufasa', 1),
(41, 20, 7, 'Simba', 1),
(42, 20, 22, 'Skar', 2),
(43, 20, 21, 'Timon', 2),
(44, 20, 23, 'Pumba', 2),
(45, 23, 22, 'Gepeto', 2),
(47, 23, 21, 'Pinocho', 1),
(48, 23, 7, 'Pepito Grillo', 1),
(49, 28, 22, 'Mecanico', 3),
(50, 28, 23, 'Max da Costa', 1),
(51, 28, 15, 'Frey', 2);

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
(1, 'La Bella y la Bestia', '...', '2015-03-12', '2015-05-12', 14, 'view/imatges/proyectos/bella-bestia.jpg', 7),
(2, 'Intocable', 'E.E', '2015-03-12', '2015-05-12', 14, 'view/imatges/proyectos/intocable.jpg', 7),
(3, 'Batman: El caballero oscuro', 'Soy Batman...', '2015-03-12', '2015-05-12', 11, 'view/imatges/proyectos/batman.jpg', 7),
(4, 'Brave: indomable', 'Pelirroja...', '2015-03-12', '2015-05-12', 15, 'view/imatges/proyectos/brave.jpg', 7),
(20, 'El rey Leon', 'Un siclo sin fin', '2001-01-01', '2004-02-01', 15, 'view/imatges/proyectos/rey-leon.jpg', 8),
(21, 'Narcos', 'Hijueputa', '1889-01-01', '2000-02-01', 11, 'http://www.ruthfranco.com/wp-content/uploads/2016/09/Cartel-Narcos-serie-Netflix.jpg', 5),
(23, 'Pinocho', 'Un muÃ±eco de madera', '2016-12-15', '2017-03-03', 11, 'https://www.cuentosinfantiles.net/images/nariz-pinocho.jpg', 9),
(28, 'Elisyum', '...', '2015-03-12', '2015-05-12', 15, '', 7);

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
(9, 'Musical'),
(8, 'Obra teatral'),
(7, 'Pelicula'),
(5, 'Serie Televisiva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_papel`
--

CREATE TABLE `tipo_papel` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_papel`
--

INSERT INTO `tipo_papel` (`id`, `tipo`) VALUES
(3, 'Extra'),
(1, 'Principal'),
(2, 'Secundari');

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
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

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
  ADD KEY `IDX_B4155D75AAF017C9` (`id_actor`),
  ADD KEY `IDX_B4155D751723476A` (`id_tipo_papel`);

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
-- Indices de la tabla `tipo_papel`
--
ALTER TABLE `tipo_papel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_B2A9C7BD702D1D47` (`tipo`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `director`
--
ALTER TABLE `director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `papel`
--
ALTER TABLE `papel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT de la tabla `projecte`
--
ALTER TABLE `projecte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `tipo_obra`
--
ALTER TABLE `tipo_obra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tipo_papel`
--
ALTER TABLE `tipo_papel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `papel`
--
ALTER TABLE `papel`
  ADD CONSTRAINT `FK_B4155D751723476A` FOREIGN KEY (`id_tipo_papel`) REFERENCES `tipo_papel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_B4155D75AAF017C9` FOREIGN KEY (`id_actor`) REFERENCES `actor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_B4155D75F89CEA60` FOREIGN KEY (`id_projecte`) REFERENCES `projecte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `projecte`
--
ALTER TABLE `projecte`
  ADD CONSTRAINT `FK_A84706F54E4B3F65` FOREIGN KEY (`id_director`) REFERENCES `director` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A84706F5A4F406DF` FOREIGN KEY (`id_tipo_obra`) REFERENCES `tipo_obra` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
