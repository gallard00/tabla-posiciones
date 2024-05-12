-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-09-2023 a las 00:46:56
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tabla_posiciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

DROP TABLE IF EXISTS `equipos`;
CREATE TABLE IF NOT EXISTS `equipos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `partidos_jugados` int NOT NULL,
  `partidos_ganados` int NOT NULL,
  `partidos_empatados` int NOT NULL,
  `partidos_perdidos` int NOT NULL,
  `goles_a_favor` int NOT NULL,
  `goles_en_contra` int NOT NULL,
  `diferencia_goles` int NOT NULL,
  `puntos` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `nombre`, `partidos_jugados`, `partidos_ganados`, `partidos_empatados`, `partidos_perdidos`, `goles_a_favor`, `goles_en_contra`, `diferencia_goles`, `puntos`) VALUES
(13, 'Defensores', 14, 7, 2, 5, 33, 16, 17, 23),
(14, 'Atletico', 14, 6, 3, 5, 22, 16, 6, 21),
(12, 'Dep. Mechongue', 14, 2, 5, 7, 18, 26, -8, 11),
(9, 'Dep. Huracanes', 14, 2, 0, 12, 11, 38, -27, 6),
(10, 'Union', 14, 1, 2, 11, 10, 61, -51, 5),
(11, 'Polvorin', 14, 5, 2, 7, 18, 29, -11, 17),
(15, 'Los Santos', 14, 6, 3, 5, 31, 21, 10, 21),
(16, 'Amigos Unidos', 14, 9, 4, 1, 31, 15, 16, 31),
(17, 'Once Unidos', 14, 9, 2, 3, 30, 12, 18, 29),
(18, 'Sud America', 14, 11, 1, 2, 44, 12, 32, 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidos`
--

DROP TABLE IF EXISTS `partidos`;
CREATE TABLE IF NOT EXISTS `partidos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `equipo_id` int DEFAULT NULL,
  `fecha` date NOT NULL,
  `local` varchar(255) NOT NULL,
  `visitante` varchar(255) NOT NULL,
  `goles_local` int NOT NULL,
  `goles_visitante` int NOT NULL,
  `resultado` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `equipo_id` (`equipo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `partidos`
--

INSERT INTO `partidos` (`id`, `equipo_id`, `fecha`, `local`, `visitante`, `goles_local`, `goles_visitante`, `resultado`) VALUES
(12, 17, '2023-04-23', 'Defensores', 'Once Unidos', 1, 3, 'Ganó'),
(35, 11, '2023-05-20', 'Polvorin', 'Los Santos', 3, 4, 'Perdió'),
(9, 16, '2023-04-23', 'Amigos Unidos', 'Dep Mechongue', 3, 2, 'Ganó'),
(10, 12, '2023-04-23', 'Amigos Unidos', 'Dep Mechongue', 3, 2, 'Perdió'),
(11, 13, '2023-04-23', 'Defensores', 'Once Unidos', 1, 3, 'Perdió'),
(13, 15, '2023-04-23', 'Los Santos', 'Dep Huracanes', 2, 0, 'Ganó'),
(14, 9, '2023-04-23', 'Los Santos', 'Dep Huracanes', 2, 0, 'Perdió'),
(15, 11, '2023-04-23', 'Polvorin', 'Sud America', 2, 4, 'Perdió'),
(16, 18, '2023-04-23', 'Polvorin', 'Sud America', 2, 4, 'Ganó'),
(17, 17, '2023-04-29', 'Once Unidos', 'Dep Mechongue', 2, 0, 'Ganó'),
(18, 9, '2023-05-06', 'Dep Huracanes', 'Unión', 2, 1, 'Ganó'),
(19, 16, '2023-05-06', 'Amigos Unidos', 'Los Santos', 2, 2, 'Empató'),
(20, 15, '2023-05-06', 'Amigos Unidos', 'Los Santos', 2, 2, 'Empató'),
(21, 13, '2023-05-06', 'Defensores', 'Polvorin', 4, 0, 'Ganó'),
(22, 11, '2023-05-06', 'Defensores', 'Polvorin', 4, 0, 'Perdió'),
(23, 14, '2023-05-06', 'Atlético', 'Sud America', 1, 3, 'Perdió'),
(24, 18, '2023-05-06', 'Atlético', 'Sud America', 1, 3, 'Ganó'),
(25, 15, '2023-05-13', 'Los Santos', 'Once Unidos', 0, 3, 'Perdió'),
(26, 17, '2023-05-13', 'Los Santos', 'Once Unidos', 0, 3, 'Ganó'),
(27, 16, '2023-05-13', 'Amigos Unidos', 'Dep Huracanes', 3, 1, 'Ganó'),
(28, 9, '2023-05-13', 'Amigos Unidos', 'Dep Huracanes', 3, 1, 'Perdió'),
(29, 18, '2023-05-13', 'Sud America', 'Unión', 4, 0, 'Ganó'),
(30, 10, '2023-05-13', 'Sud America', 'Unión', 4, 0, 'Perdió'),
(31, 13, '2023-05-13', 'Defensores', 'Atletico', 1, 1, 'Empató'),
(32, 14, '2023-05-13', 'Defensores', 'Atletico', 1, 1, 'Empató'),
(33, 11, '2023-05-13', 'Polvorin', 'Dep Mechongue', 2, 2, 'Empató'),
(34, 12, '2023-05-13', 'Polvorin', 'Dep Mechongue', 2, 2, 'Empató'),
(36, 15, '2023-05-20', 'Polvorin', 'Los Santos', 3, 4, 'Ganó'),
(37, 16, '2023-05-20', 'Amigos Unidos', 'Unión', 4, 1, 'Ganó'),
(38, 10, '2023-05-20', 'Amigos Unidos', 'Unión', 4, 1, 'Perdió'),
(39, 14, '2023-05-20', 'Atlético', 'Dep Mechongue', 5, 0, 'Ganó'),
(40, 12, '2023-05-20', 'Atlético', 'Dep Mechongue', 5, 0, 'Perdió'),
(41, 13, '2023-05-20', 'Defensores', 'Sud America', 3, 0, 'Ganó'),
(42, 18, '2023-05-20', 'Defensores', 'Sud America', 3, 0, 'Perdió'),
(43, 17, '2023-05-20', 'Once Unidos', 'Dep Huracanes', 3, 0, 'Ganó'),
(44, 9, '2023-05-20', 'Once Unidos', 'Dep Huracanes', 3, 0, 'Perdió'),
(45, 15, '2023-06-03', 'Los Santos', 'Atletico', 0, 0, 'Empató'),
(46, 14, '2023-06-03', 'Los Santos', 'Atletico', 0, 0, 'Empató'),
(47, 13, '2023-06-03', 'Union', 'Defensores', 0, 6, 'Perdió'),
(48, 13, '2023-06-03', 'Union', 'Defensores', 0, 6, 'Ganó'),
(49, 9, '2023-06-03', 'Polvorin', 'Dep Huracanes', 1, 0, 'Ganó'),
(50, 9, '2023-06-03', 'Polvorin', 'Dep Huracanes', 1, 0, 'Perdió'),
(51, 17, '2023-06-03', 'Once Unidos', 'Amigos Unidos', 3, 2, 'Ganó'),
(52, 16, '2023-06-03', 'Once Unidos', 'Amigos Unidos', 3, 2, 'Perdió'),
(53, 12, '2023-06-03', 'Dep Mechongue', 'Sud America', 2, 2, 'Empató'),
(54, 18, '2023-06-03', 'Dep Mechongue', 'Sud America', 2, 2, 'Empató'),
(55, 10, '2023-06-10', 'Union', 'Once Unidos', 0, 7, 'Perdió'),
(56, 17, '2023-06-10', 'Union', 'Once Unidos', 0, 7, 'Ganó'),
(57, 15, '2023-06-10', 'Los Santos', 'Sud America', 1, 2, 'Perdió'),
(58, 18, '2023-06-10', 'Los Santos', 'Sud America', 1, 2, 'Ganó'),
(59, 13, '2023-06-17', 'Defensores', 'Dep Mechongue', 3, 2, 'Ganó'),
(60, 12, '2023-06-17', 'Defensores', 'Dep Mechongue', 3, 2, 'Perdió'),
(61, 14, '2023-06-17', 'Atlético', 'Dep Huracanes', 3, 1, 'Ganó'),
(62, 9, '2023-06-17', 'Atlético', 'Dep Huracanes', 3, 1, 'Perdió'),
(63, 16, '2023-06-17', 'Amigos Unidos', 'Polvorin', 3, 0, 'Ganó'),
(64, 11, '2023-06-17', 'Amigos Unidos', 'Polvorin', 3, 0, 'Perdió'),
(65, 11, '2023-06-25', 'Polvorin', 'Once Unidos', 0, 3, 'Perdió'),
(66, 17, '2023-06-25', 'Polvorin', 'Once Unidos', 0, 3, 'Ganó'),
(67, 12, '2023-06-25', 'Dep Mechongue', 'Unión', 1, 1, 'Empató'),
(68, 10, '2023-06-25', 'Dep Mechongue', 'Unión', 1, 1, 'Empató'),
(69, 14, '2023-06-25', 'Atlético', 'Amigos Unidos', 1, 1, 'Empató'),
(70, 16, '2023-06-25', 'Atlético', 'Amigos Unidos', 1, 1, 'Empató'),
(71, 9, '2023-06-25', 'Dep Huracanes', 'Sud America', 0, 5, 'Perdió'),
(72, 18, '2023-06-25', 'Dep Huracanes', 'Sud America', 0, 5, 'Ganó'),
(73, 18, '2023-07-01', 'Sud America', 'Amigos Unidos', 1, 2, 'Perdió'),
(74, 16, '2023-07-01', 'Sud America', 'Amigos Unidos', 1, 2, 'Ganó'),
(75, 17, '2023-07-01', 'Once Unidos', 'Atletico', 0, 1, 'Perdió'),
(76, 14, '2023-07-01', 'Once Unidos', 'Atletico', 0, 1, 'Ganó'),
(77, 10, '2023-07-01', 'Union', 'Polvorin', 2, 3, 'Perdió'),
(78, 11, '2023-07-01', 'Union', 'Polvorin', 2, 3, 'Ganó'),
(79, 13, '2023-07-01', 'Defensores', 'Dep Mechongue', 5, 0, 'Ganó'),
(80, 12, '2023-07-01', 'Defensores', 'Dep Mechongue', 5, 0, 'Perdió'),
(81, 13, '2023-07-01', 'Defensores', 'Dep Huracanes', 5, 0, 'Ganó'),
(82, 9, '2023-07-01', 'Defensores', 'Dep Huracanes', 5, 0, 'Perdió'),
(83, 15, '2023-07-01', 'Los Santos', 'Dep Mechongue', 2, 1, 'Ganó'),
(84, 12, '2023-07-01', 'Los Santos', 'Dep Mechongue', 2, 1, 'Perdió'),
(85, 17, '2023-07-09', 'Once Unidos', 'Sud America', 0, 4, 'Perdió'),
(86, 18, '2023-07-09', 'Once Unidos', 'Sud America', 0, 4, 'Ganó'),
(87, 10, '2023-07-15', 'Union', 'Los Santos', 0, 12, 'Perdió'),
(88, 15, '2023-07-15', 'Union', 'Los Santos', 0, 12, 'Ganó'),
(89, 12, '2023-07-15', 'Dep Mechongue', 'Dep Huracanes', 4, 2, 'Ganó'),
(90, 9, '2023-07-15', 'Dep Mechongue', 'Dep Huracanes', 4, 2, 'Perdió'),
(91, 13, '2023-07-15', 'Defensores', 'Amigos Unidos', 0, 2, 'Perdió'),
(92, 16, '2023-07-15', 'Defensores', 'Amigos Unidos', 0, 2, 'Ganó'),
(93, 14, '2023-07-15', 'Atlético', 'Polvorin', 2, 1, 'Ganó'),
(94, 11, '2023-07-15', 'Atlético', 'Polvorin', 2, 1, 'Perdió'),
(95, 11, '2023-07-29', 'Polvorin', 'Sud America', 0, 3, 'Perdió'),
(96, 18, '2023-07-29', 'Polvorin', 'Sud America', 0, 3, 'Ganó'),
(97, 17, '2023-07-29', 'Once Unidos', 'Defensores', 1, 1, 'Empató'),
(98, 13, '2023-07-29', 'Once Unidos', 'Defensores', 1, 1, 'Empató'),
(99, 14, '2023-07-29', 'Atlético', 'Unión', 1, 2, 'Perdió'),
(100, 10, '2023-07-29', 'Atlético', 'Unión', 1, 2, 'Ganó'),
(101, 9, '2023-07-29', 'Dep Huracanes', 'Los Santos', 2, 3, 'Perdió'),
(102, 15, '2023-07-29', 'Dep Huracanes', 'Los Santos', 2, 3, 'Ganó'),
(103, 12, '2023-07-29', 'Dep Mechongue', 'Amigos Unidos', 1, 1, 'Empató'),
(104, 16, '2023-07-29', 'Dep Mechongue', 'Amigos Unidos', 1, 1, 'Empató'),
(105, 13, '2023-08-06', 'Defensores', 'Polvorin', 1, 2, 'Perdió'),
(106, 11, '2023-08-06', 'Defensores', 'Polvorin', 1, 2, 'Ganó'),
(107, 18, '2023-08-06', 'Sud America', 'Atletico', 1, 0, 'Ganó'),
(108, 14, '2023-08-06', 'Sud America', 'Atletico', 1, 0, 'Perdió'),
(109, 9, '2023-08-06', 'Dep Huracanes', 'Unión', 3, 2, 'Ganó'),
(110, 10, '2023-08-06', 'Dep Huracanes', 'Unión', 3, 2, 'Perdió'),
(111, 16, '2023-08-06', 'Amigos Unidos', 'Los Santos', 2, 1, 'Ganó'),
(112, 15, '2023-08-06', 'Amigos Unidos', 'Los Santos', 2, 1, 'Perdió'),
(113, 12, '2023-08-06', 'Dep Mechongue', 'Once Unidos', 0, 1, 'Perdió'),
(114, 17, '2023-08-06', 'Dep Mechongue', 'Once Unidos', 0, 1, 'Ganó'),
(115, 17, '2023-08-19', 'Once Unidos', 'Los Santos', 1, 1, 'Empató'),
(116, 15, '2023-08-19', 'Once Unidos', 'Los Santos', 1, 1, 'Empató'),
(117, 18, '2023-08-19', 'Sud America', 'Unión', 10, 0, 'Ganó'),
(118, 10, '2023-08-19', 'Sud America', 'Unión', 10, 0, 'Perdió'),
(119, 13, '2023-08-19', 'Defensores', 'Atletico', 2, 0, 'Ganó'),
(120, 14, '2023-08-19', 'Defensores', 'Atletico', 2, 0, 'Perdió'),
(121, 11, '2023-08-19', 'Polvorin', 'Dep Mechongue', 0, 0, 'Empató'),
(122, 12, '2023-08-19', 'Polvorin', 'Dep Mechongue', 0, 0, 'Empató'),
(123, 16, '2023-08-19', 'Amigos Unidos', 'Dep Huracanes', 3, 0, 'Ganó'),
(124, 9, '2023-08-19', 'Amigos Unidos', 'Dep Huracanes', 3, 0, 'Perdió'),
(125, 12, '2023-08-26', 'Dep Mechongue', 'Atletico', 3, 1, 'Ganó'),
(126, 14, '2023-08-26', 'Dep Mechongue', 'Atletico', 3, 1, 'Perdió'),
(127, 16, '2023-08-26', 'Amigos Unidos', 'Unión', 1, 1, 'Empató'),
(128, 10, '2023-08-26', 'Amigos Unidos', 'Unión', 1, 1, 'Empató'),
(129, 15, '2023-08-26', 'Los Santos', 'Polvorin', 1, 2, 'Perdió'),
(130, 11, '2023-08-26', 'Los Santos', 'Polvorin', 1, 2, 'Ganó'),
(131, 13, '2023-08-26', 'Defensores', 'Sud America', 1, 4, 'Perdió'),
(132, 18, '2023-08-26', 'Defensores', 'Sud America', 1, 4, 'Ganó'),
(133, 10, '2023-09-03', 'Union', 'Defensores', 0, 6, 'Perdió'),
(134, 13, '2023-09-03', 'Union', 'Defensores', 0, 6, 'Ganó'),
(135, 12, '2023-09-03', 'Dep Mechongue', 'Sud America', 0, 1, 'Perdió'),
(136, 18, '2023-09-03', 'Dep Mechongue', 'Sud America', 0, 1, 'Ganó'),
(137, 14, '2023-09-03', 'Atlético', 'Los Santos', 2, 1, 'Ganó'),
(138, 15, '2023-09-03', 'Atlético', 'Los Santos', 2, 1, 'Perdió'),
(139, 16, '2023-09-03', 'Amigos Unidos', 'Once Unidos', 2, 1, 'Ganó'),
(140, 17, '2023-09-03', 'Amigos Unidos', 'Once Unidos', 2, 1, 'Perdió');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
