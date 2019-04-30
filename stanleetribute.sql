-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 18-12-2018 a las 01:43:23
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stanleetribute`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `Id` int(11) NOT NULL,
  `Titulo` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `Cuerpo` text COLLATE utf8_spanish_ci NOT NULL,
  `Precio` double NOT NULL,
  `Id_Tipo` int(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Imagen` varchar(128) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`Id`, `Titulo`, `Descripcion`, `Cuerpo`, `Precio`, `Id_Tipo`, `Stock`, `Imagen`) VALUES
(2, 'Camiseta Marvel Comics 1', 'Camiseta gris/negra de Marvel Comics', 'Camiseta gris con las caras de ciertos personajes Marvel grabadas en negro bajo su logo.', 15, 1, 20, 'Camiseta1.jpg'),
(3, 'Camiseta Marvel Comics 2', 'Camiseta gris oscura de Marvel Comics', 'Camiseta gris oscura con viñetas y el logo de Marvel en color rojo y blanco.', 15, 1, 20, 'Camiseta2.jpg'),
(4, 'Camiseta Capitán América 1', 'Camiseta blanca/azul de Capitán América', 'Camiseta blanca con las mangas azules y el escudo de Capitán América en el centro.', 10, 1, 20, 'Camiseta3.jpg'),
(5, 'Camiseta Capitán América 2', 'Camiseta realista de Capitán América', 'Camiseta con diseño original que recuerda al atuendo de Capitán América.', 20, 1, 20, 'Camiseta4.jpg'),
(6, 'Camiseta Marvel Comics 3', 'Camiseta blanca de Marvel Comics', 'Camiseta blanca con las caras de ciertos personajes Marvel grabadas a color rodeando el logo.', 10, 1, 20, 'Camiseta5.jpg'),
(7, 'Camiseta Hydra', 'Camiseta negra/roja de Hydra', 'Camiseta negra con el logo de Hydra grabado en rojo.', 15, 1, 20, 'Camiseta6.jpg'),
(8, 'Taza Marvel Comics', 'Taza negra con viñetas', 'Taza negra con viñetas de algunos superhéroes a color.', 6, 2, 10, 'Taza1.jpg'),
(9, 'Taza DeadPool', 'Taza-Cabeza de DeadPool', 'Taza roja y negra que simula la cabeza de DeadPool.', 12, 2, 10, 'Taza2.jpg'),
(10, 'Set de tazas Superhéroes', 'Conjunto de tazas con el rostro de superhéroes', 'Incluye 5 tazas con el rostro de los personajes Cap. América, Hulk, Ironman, Spiderman y DeadPool.', 35, 2, 2, 'Taza3.jpg'),
(11, 'Taza multihéroes', 'Taza blanca/roja con caras de muchos superhéroes', 'Taza blanca y roja con el diseño de diferentes superhéroes de Marvel.', 6, 2, 10, 'Taza4.jpg'),
(12, 'Disfraz Antman', 'Disfraz de Antman con casco', 'Disfraz del atuendo de Antman (rojo/negro). Incluye casco.', 25, 4, 6, 'Disfraz1.jpg'),
(13, 'Disfraz Capitán América', 'Disfraz de Capitán América con casco', 'Disfraz del atuendo de Capitán América (azul/blanco/rojo). Incluye casco. No incluye zapatos.', 25, 4, 6, 'Disfraz2.jpg'),
(14, 'Disfraz Capitana Marvel', 'Disfraz de Capitana Marvel con máscara', 'Disfraz del atuendo de Capitana Marvel (rojo/azul/amarillo). Incluye máscara.', 25, 4, 6, 'Disfraz3.jpg'),
(15, 'Disfraz Gamora', 'Disfraz de Gamora con espada', 'Disfraz del atuendo de Gamora (negro/verde). Incluye espada.', 25, 4, 6, 'Disfraz4.jpg'),
(16, 'Set de peluches Marvel', 'Conjunto de 6 superhéroes de la franquicia', 'Pack que incluye peluches de Wolverine, Hulk, Ironman, Spiderman, Thor y Capitán América.', 25, 3, 3, 'Peluche1.jpg'),
(17, 'Peluche Capitana Marvel', 'Peluche de Capitana Marvel en versión bebé', 'Peluche de una versión bebé de la heroína Capitana Marvel.', 11, 3, 10, 'Peluche2.jpg'),
(19, 'Peluche DeadPool', 'Peluche del personaje DeadPool', 'Peluche pequeño y cabezón de DeadPool.', 6, 3, 10, 'Peluche4.jpg'),
(20, 'Zapatillas Spiderman', 'Zapatillas playeras de Spiderman en azul/rojo', 'Zapatillas playeras del superhéroe Spiderman con fondo azul.', 5, 5, 15, 'Complemento1.jpg'),
(21, 'Zapatillas Avengers', 'Zapatillas playeras negras de los Vengadores', 'Zapatillas playeras oscuras con una imagen de Capitán América y Ironman.', 6, 5, 15, 'Complemento2.jpg'),
(22, 'Brazalete del Infinito', 'Brazalete con gemas del infinito', 'Brazalete dorado que sostiene las 6 gemas del infinito.', 14, 5, 15, 'Complemento3.jpg'),
(23, 'Bufanda DeadPool', 'Bufanda de DeadPool negra/roja', 'Bufanda inspirada en DeadPool, con su nombre y su símbolo, en color negro/rojo.', 11, 5, 10, 'Complemento4.jpg'),
(24, 'Coleccionables Pin+Cromo Marvel', 'Paquetes que contienen un pin y un cromo de un personaje Marvel', 'Estos paquetes incluyen una imagen de un personaje Marvel al azar y su pin correspondiente.', 2, 6, 30, 'Otro1.jpg'),
(25, 'Ajedrez Marvel', 'Juego de mesa de ajedrez con los personajes de Marvel', 'Juego de ajedrez donde las figuras son héroes y villanos de Marvel.', 15, 6, 15, 'Otro2.jpg'),
(26, 'Alfombrilla Capitán América', 'Alfombrilla para ratón de Capitán América', 'Alfombrilla redonda para el mouse con el diseño del escudo de Capitán América.', 6, 6, 20, 'Otro3.jpg'),
(27, 'Felpudo Marvel', 'Felpudo rojo con el logo de Marvel', 'Felpudo rojo que tiene grabado el logo de Marvel en dorado.', 10, 6, 15, 'Otro4.jpg'),
(33, 'Peluche', 'Peluche', 'peluche', 43, 4, 56, 'Peluche.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `Id` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`Id`, `Id_Usuario`) VALUES
(1, 5),
(2, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `Id` int(11) NOT NULL,
  `Id_Carrito` int(11) NOT NULL,
  `Id_Articulo` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `Id` int(11) NOT NULL,
  `Rol` varchar(16) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`Id`, `Rol`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_articulo`
--

CREATE TABLE `tipo_articulo` (
  `Id` int(11) NOT NULL,
  `Tipo` varchar(16) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_articulo`
--

INSERT INTO `tipo_articulo` (`Id`, `Tipo`) VALUES
(1, 'Camiseta'),
(2, 'Taza'),
(3, 'Peluche'),
(4, 'Disfraz'),
(5, 'Complemento'),
(6, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `Contraseña` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `Id_Rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `Nombre`, `Correo`, `Usuario`, `Contraseña`, `Id_Rol`) VALUES
(2, 'Administrador', 'admin@admin.com', 'admin', 'adminlee', 1),
(3, 'Usuario', 'usuario@gmail.com', 'user', 'user', 2),
(4, 'Sergio', 'sergio@hotamil.com', 'sergio', 'sergio', 2),
(5, 'gabriel', 'gabriel@gmail.com', 'gabriel', 'gabriel', 2),
(6, 'sergio1', 'sergio@gmail.com', 'sergio', 'sergio1', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Tipo` (`Id_Tipo`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Usuario` (`Id_Usuario`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Carrito` (`Id_Carrito`),
  ADD KEY `Id_Articulo` (`Id_Articulo`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tipo_articulo`
--
ALTER TABLE `tipo_articulo`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Rol` (`Id_Rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_articulo`
--
ALTER TABLE `tipo_articulo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
