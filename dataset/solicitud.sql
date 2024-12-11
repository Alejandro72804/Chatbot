-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-12-2024 a las 19:40:08
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chatbot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id` int NOT NULL,
  `pregunta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `respuesta` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `tipo` int NOT NULL DEFAULT '0',
  `categoria` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id`, `pregunta`, `respuesta`, `tipo`, `categoria`) VALUES
(8, 'Tiempo de espera', 'El tiempo estimado de espera es de 15 a 20 minutos.', 0, 'General'),
(9, 'Mesas desocupadas', 'Actualmente hay 3 mesas desocupadas.', 0, 'General'),
(10, 'Métodos de pago', 'Aceptamos tarjetas de crédito, débito y efectivo.', 0, 'General'),
(11, 'Precio', 'El precio de nuestros platos varía entre $10 y $25.', 0, 'Menú'),
(12, 'Menú vegetariano', 'Nuestro menú vegetariano está disponible por $18.', 1, 'Menú'),
(13, 'Métodos de pago', 'Aceptamos tarjeta de crédito, débito y efectivo.', 0, 'Menú');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
