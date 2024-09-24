-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2024 a las 23:14:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ram`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `descrip_foto` varchar(50) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `foto`
--

INSERT INTO `foto` (`id_foto`, `descrip_foto`, `id_producto`) VALUES
(1, 'Foto de producto 1', 1),
(2, 'Foto de producto 2', 2),
(3, 'Foto de producto 3', 3),
(4, 'Foto de producto 4', 4),
(5, 'Foto de producto 5', 5),
(6, 'Foto de producto 6', 6),
(7, 'Foto de producto 7', 7),
(8, 'Foto de producto 8', 8),
(9, 'Foto de producto 9', 9),
(10, 'Foto de producto 10', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `fecha`, `total`, `estado`, `id_usuario`) VALUES
(1, '2024-08-01', 150.00, 'Pendiente', 5),
(2, '2024-08-02', 200.00, 'Completado', 4),
(3, '2024-08-03', 175.00, 'Cancelado', 5),
(4, '2024-08-04', 300.00, 'Pendiente', 4),
(5, '2024-08-05', 220.00, 'Completado', 5),
(6, '2024-08-06', 450.00, 'Pendiente', 4),
(7, '2024-08-07', 500.00, 'Completado', 5),
(8, '2024-08-08', 350.00, 'Pendiente', 4),
(9, '2024-08-09', 275.00, 'Cancelado', 5),
(10, '2024-08-10', 600.00, 'Completado', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `sabor` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `descrip_producto` varchar(50) NOT NULL,
  `precio_unitario` decimal(10,2) NOT NULL,
  `nom_producto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `sabor`, `stock`, `descrip_producto`, `precio_unitario`, `nom_producto`) VALUES
(1, 'mani', 50, 'Producto sabor choco mani', 150.00, 'Producto150'),
(2, 'Vainilla', 30, 'Producto sabor vainilla', 120.00, 'Producto 2'),
(3, '', 70, 'Producto sabor fresa', 150.00, 'Producto 3'),
(4, 'Menta', 90, 'Producto sabor menta', 80.00, 'Producto 4'),
(5, 'Café', 60, 'Producto sabor café', 110.00, 'Producto 5'),
(6, 'Caramelo', 40, 'Producto sabor caramelo', 90.00, 'Producto 6'),
(7, 'Cítrico', 20, 'Producto sabor cítrico', 70.00, 'Producto 7'),
(8, 'Tropical', 35, 'Producto sabor tropical', 130.00, 'Producto 8'),
(9, 'Frutilla', 25, 'Producto sabor frutilla', 95.00, 'Producto 9'),
(10, 'Coco', 55, 'Producto sabor coco', 140.00, 'Producto 10'),
(456, 'vino', 30, 'queque', 12.00, 'emem'),
(45644545, 'vino', 30, 'queque', 12.00, 'emem'),
(55555555, '', 25, 'galletas', 250.00, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_pedido`
--

CREATE TABLE `producto_pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto_pedido`
--

INSERT INTO `producto_pedido` (`id_pedido`, `id_producto`, `cantidad`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 3, 3),
(4, 4, 1),
(5, 5, 2),
(6, 6, 4),
(7, 7, 1),
(8, 8, 2),
(9, 9, 3),
(10, 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `id_sesion` int(11) NOT NULL,
  `descrip_sesion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sesion`
--

INSERT INTO `sesion` (`id_sesion`, `descrip_sesion`) VALUES
(1, 'Administrador'),
(2, 'Gerente'),
(3, 'Técnico'),
(4, 'Empleado'),
(5, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ci` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nro_celular` varchar(20) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_sesion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ci`, `nombre`, `apellido`, `password`, `nro_celular`, `direccion`, `email`, `id_sesion`) VALUES
(1, 'Juan', 'Perez', 'password1', '1234567890', 'Calle Falsa 123', 'juan.perez@example.com', 5),
(2, 'Maria', 'Lopez', 'password2', '2147483647', 'Avenida Siempre Viva 456', 'maria.lopez@example.com', 5),
(3, 'Carlos', 'Gomez', 'password3', '2147483647', 'Calle Central 789', 'carlos.gomez@example.com', 4),
(4, 'Laura', 'LOPEZ', 'password4', '987654321', 'CALLE SOL', 'laura.martinez@example.com', 3),
(5, 'Ana', 'Gonzalez', 'password5', '555555555', 'Calle Luna 111', 'ana.gonzalez@example.com', 2),
(6, 'Pedro', 'Sanchez', 'password6', '666666666', 'Avenida Estrella 222', 'pedro.sanchez@example.com', 1),
(7, 'Luis', 'Ramirez', 'password7', '777777777', 'Calle Mar 333', 'luis.ramirez@example.com', 5),
(8, 'Sofia', 'Fernandez', 'password8', '888888888', 'Avenida Oceano 444', 'sofia.fernandez@example.com', 5),
(9, 'David', 'Hernandez', 'password9', '999999999', 'Calle Cielo 555', 'david.hernandez@example.com', 4),
(10, 'Lucia', 'Diaz', 'password10', '1010101010', 'Boulevard Tierra 666', 'lucia.diaz@example.com', 3),
(231546, 'Looc', 'Rar', '347', '63521551', 'calle jajaja', 'ryzenproducciones@gmail.com', 5),
(9938169, 'Kender', 'Mendoza', '123', '77725258', 'calle keke', 'mendozabryan004@gmail.com', 5),
(20070235, 'ramiro', 'patzi', '000', '65841586', 'calle jajaja', 'ram@gmail.com', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `fk_foto_producto` (`id_producto`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_pedido_usuario` (`id_usuario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `producto_pedido`
--
ALTER TABLE `producto_pedido`
  ADD PRIMARY KEY (`id_pedido`,`id_producto`),
  ADD KEY `fk_producto_pedido_producto` (`id_producto`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`id_sesion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ci`),
  ADD KEY `fk_usuario_sesion` (`id_sesion`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `fk_foto_producto` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_pedido_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`ci`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto_pedido`
--
ALTER TABLE `producto_pedido`
  ADD CONSTRAINT `fk_producto_pedido_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_producto_pedido_producto` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_sesion` FOREIGN KEY (`id_sesion`) REFERENCES `sesion` (`id_sesion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_sesion`) REFERENCES `sesion` (`id_sesion`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
