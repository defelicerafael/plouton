-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 19, 2020 at 10:57 AM
-- Server version: 5.6.36-log
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wi200019_plouton`
--
CREATE DATABASE IF NOT EXISTS `wi200019_plouton` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wi200019_plouton`;

-- --------------------------------------------------------

--
-- Table structure for table `gastos`
--

CREATE TABLE `gastos` (
  `id` int(11) NOT NULL,
  `gasto` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gastos`
--

INSERT INTO `gastos` (`id`, `gasto`, `precio`, `fecha`) VALUES
(3, 'Gastos hasta hoy', '23428.00', '0000-00-00'),
(4, 'Sello', '430.00', '2020-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `carta_natal_nombre` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nacimiento` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `hora` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tamano` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `marco` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `forma_de_pago` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `elemento` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `comentarios` text COLLATE utf8_unicode_ci NOT NULL,
  `pago` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_de_pago` date NOT NULL,
  `fecha_de_entrega` date NOT NULL,
  `entrega` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `entrega_contacto` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `entrega_pais` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `entrega_provincia` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `entrega_cuidad` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `entrega_direccion` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `entrega_cp` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `entrega_empresa` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `entrega_servicio` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `entrega_codigo` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `factura` text COLLATE utf8_unicode_ci NOT NULL,
  `comprobante_de_pago` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`id`, `nombre`, `email`, `carta_natal_nombre`, `nacimiento`, `hora`, `pais`, `provincia`, `ciudad`, `tamano`, `marco`, `forma_de_pago`, `modelo`, `color`, `elemento`, `precio`, `celular`, `comentarios`, `pago`, `fecha_de_pago`, `fecha_de_entrega`, `entrega`, `entrega_contacto`, `entrega_pais`, `entrega_provincia`, `entrega_cuidad`, `entrega_direccion`, `entrega_cp`, `entrega_empresa`, `entrega_servicio`, `entrega_codigo`, `factura`, `comprobante_de_pago`) VALUES
(2, 'VICKY', 'vickyfe2@gmail.com', 'Ignacio Maroa Ferraiuelo', '2013-03-26', '13:55', 'EspaÃ±a', 'madrid', 'madrid', 'a3', 'madera_claro', 'CBU', 'antares', 'rain', 'agua', '1000', '2284467898', '', 'si', '0000-00-00', '0000-00-00', 'no', '', 'Argentina', 'Olavarria', '0', '0', '', '', '', '', '', ''),
(3, 'Maria Sol ', 'soldellato@gmail.com', 'Maria Sol Dellatorre Balestra', '1980-05-25', '22:05', 'Argentina', 'Buenos Aires', 'San Isidro', 'a3', 'madera_claro', 'mercadopago', 'antares', 'windy', 'agua', '2350', '1158041809', '', 'si', '0000-00-00', '0000-00-00', 'no', '', '', '', '', '', '', '', '', '', '', 'mercado pago'),
(4, 'Nayla', 'demarieflor.arq@gmail.com', 'NAYLA VERALDI', '1995-03-10', '03:40', 'Argentina', 'BUENOS AIRES', 'SAN ISIDRO', 'a3', 'madera_claro', 'cbu', 'acrab', 'mint', 'agua', '2350', '1158373644', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'Nayla', 'demarieflor.arq@gmail.com', 'FRANCISCO ALVAREZ', '1994-09-23', '23:40', 'Argentina', 'BUENOS AIRES', 'SAN FERNANDO', 'a3', 'madera_claro', 'cbu', 'antares', 'harbor', 'agua', '2350', '1158373644', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'GERARDO GENTILE', 'demarieflor.arq@gmail.com', 'GERARDO GENTILE', '1965-04-21', '23:15', 'Argentina', 'BUENOS AIRES', 'CABALLITO', 'a3', 'negro', 'cbu', 'acrab', 'rain', 'agua', '2350', '1158373644', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'JESSICA BERNARDI', 'demarieflor.arq@gmail.com', 'JESSICA BERNARDI', '1975-01-20', '09:05', 'Argentina', 'BUENOS AIRES', 'LOMAS DE ZAMORA', 'a3', 'blanco', 'cbu', 'antares', 'dusty', 'fuego', '2350', '1158373644', '', 'si', '0000-00-00', '0000-00-00', 'si', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'CLARA', 'demarieflor.arq@gmail.com', 'SOFIA INES ARNDT', '1994-01-18', '12:11', 'Argentina', 'BUENOS AIRES', 'CABA', 'a4', 'madera_claro', 'cbu', 'antares', 'dusty', 'agua', '2000', '1158373644', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'ana', 'demarieflor.arq@gmail.com', 'maria paz rodriguez cavanna', '1985-06-07', '10:40', 'Argentina', 'BUENOS AIRES', 'CABA', 'a3', 'madera_claro', 'cbu', 'antares', 'clay', 'tierra', '2350', '1158373644', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'Carolina', 'carosaubidet@gmail.com', 'Cecilia arzeno', '1961-04-02', '17:00', 'Argentina ', 'Buenos aires', 'San isidro', 'a4', 'madera_claro', 'mercadopago', 'antares', 'sage', 'agua', '2000', '1168495741', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'Agustin', 'ph.agustin.barrionuevo@gmail.com', 'Agustina Raimondo Peralta', '1983-08-10', '20:10', 'Argentina', 'Ciudad AutÃ³noma de Buenos Aires', 'Palermo', 'a4', 'blanco', 'cbu', 'antares', 'harbor', 'tierra', '2000', '1161540601', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'Vane', 'luna.imagen@yahoo.com.ar', 'JULI', '1978-06-14', '00:15', 'Argentina', 'Buenos Aires ', 'San Fernando', 'a3', 'madera_claro', 'mercadopago', 'antares', 'sage', 'agua', '2350', '1156985180', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 'GUADA', 'demarieflor.arq@gmail.com', 'MILAGROS SOUTULLO TORRES', '1990-02-24', '16:35', 'Argentina', 'BUENOS AIRES', 'CABA', 'a3', 'madera_claro', 'cbu', 'acrab', 'taupe', 'tierra', '2350', '01158373644', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 'Julia', 'juliguillan@hotmail.com', 'MÃ³nica Elena scarinatta', '1955-06-15', '10:28', 'Argentina ', 'Ciudad autÃ³noma de Buenos Aires ', 'Ciudad de Buenos Aires ', 'a4', 'blanco', 'cbu', 'antares', 'windy', 'aire', '2000', '1150129016', '', 'si', '2020-06-08', '2020-06-21', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'JACKIE', 'demarieflor.arq@gmail.com', 'jackie', '1975-03-29', '04:20', 'Argentina', 'BUENOS AIRES', 'caba', 'a3', '', 'cbu', 'antares', 'windy', 'agua', '2350', '1158373644', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 'PIPE', 'demarieflor.arq@gmail.com', 'PIPE', '2013-10-05', '13:10', 'Argentina', 'BUENOS AIRES', 'SAN ISIDRO', 'a3', 'madera_claro', 'cbu', 'antares', 'rain', 'agua', '2350', '1158373644', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'GASTON', 'demarieflor.arq@gmail.com', 'GASTON', '1979-08-01', '11:40', 'Argentina', 'BUENOS AIRES', ' BAHIA BLANCA', 'a3', 'madera_claro', 'cbu', 'antares', 'windy', 'agua', '2350', '1158373644', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 'Francisco', 'pacosusmel@gmail.com', 'Francisco', '18/o6/1986', '11:51 PM', 'Estados Unidos', 'Massachussetts', 'boston', 'a4', 'blanco', 'cbu', 'acrab', 'sage', 'tierra', '2000', '17873097844', '', 'si', '2020-06-10', '2020-06-23', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 'Flor', 'florenciaschweizer@gmail.com', 'Floriss', '1985-04-09', '13:04', 'Argentina ', 'Buenos Aires ', 'Buenos Aires ', 'a3', '', 'cbu', 'antares', 'sage', 'tierra', '0', '1158657937', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 'Marce uset ucha', 'marcelausetucha@hotmail.com', 'Abril bleuzet', '2000-01-03', '21:44', 'Argentina', 'Caba', 'Caba', 'a3', 'madera_claro', 'mercadopago', 'acrab', 'pale', 'agua', '2350', '1167358558', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 'MARIE', 'demarieflor.arq@gmail.com', 'MARIE ', '1974-07-13', '20:05', 'Argentina', 'Buenos Aires', 'CABA', 'a3', 'blanco', 'cbu', 'acrab', 'rosy', 'agua', '0', '1158373644', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 'Carolina', 'caromeliton@gmail.com', 'Marianela', '1984-08-29', '01:10', 'Argentina', 'Buenos Aires', 'OlavarrÃ­a', 'a4', 'madera_claro', 'mercadopago', 'antares', 'harbor', 'agua', '2000', '0228415659352', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 'Silvina ', 'somozasilvina@hotmail.com', 'Marcelo ', '1963-04-08', '06:05', 'Argentina', 'Buenos Aires ', 'Buenos aires', 'a3', 'negro', 'cbu', 'antares', 'gris', 'agua', '2350', '1133846909', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, 'joaquina', 'demarieflor.arq@gmail.com', 'joaquina', '1990-09-18', '10:00', 'Argentina', 'Buenos Aires', 'la plata', 'a3', 'madera_claro', 'cbu', 'estrellas', 'dusty', 'aire', '1850', '01158373644', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 'juan pedro', 'demarieflor.arq@gmail.com', 'juan pedro', '1972-02-13', '20:00', 'Argentina', 'Buenos Aires-GBA', 'berisso', 'a3', 'madera_claro', 'cbu', 'estrellas', 'fern', 'aire', '1850', '01158373644', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 'nabila corvalan ', 'nabila.corvalan@gmail.com', 'Nabila', '1989-01-07', '05:00', 'Argentina ', 'Buenos Aires ', 'San justo', 'a3', 'madera_claro', 'cbu', 'antares', 'dusty', 'tierra', '2350', '1126676305', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 'Carla ', 'ayecaf28@hotmail.com', 'Carla Ayelen Ferrari', '1991-08-28', '04:24', 'Argentina', 'CÃ³rdoba ', 'Alta gracia', 'a4', 'negro', 'mercadopago', 'antares', 'dusty', 'agua', '2000', '351 2613686', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 'Mercedes', 'alonsomercedes@live.com.ar', 'Juana', '2017-07-11', '11:57', 'Argentina', 'Chubut', 'Trelew', 'a4', 'madera_claro', 'mercadopago', 'estrellas', 'pasture', 'aire', '1500', '2804572644', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 'Juan Pedro JR', 'demarieflor.arq@gmail.com', 'JUAN PEDRO', '2016-11-07', '21:30', 'Argentina', 'Buenos Aires-GBA', 'la plata', 'a3', 'madera_claro', 'cbu', 'estrellas', 'windy', 'aire', '1850', '01158373644', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 'carolina', 'demarieflor.arq@gmail.com', 'belisario hermida di nezio', '2020-01-11', '08:38', 'Argentina', 'Buenos Aires-GBA', 'CABA', 'a3', 'madera_claro', 'mercadopago', 'antares', 'fern', 'agua', '$2350', '01158373644', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, 'joaquina', 'demarieflor.arq@gmail.com', 'LOLA CHAVEZ ESTEVEZ', '2003-03-12', '08:00', 'Argentina', 'Buenos Aires', 'la plata', 'a3', 'madera_claro', 'cbu', 'estrellas', 'pasture', 'aire', '$1850', '01158373644', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, 'joaquina', 'demarieflor.arq@gmail.com', 'ABRIL CHAVES ESTEVEZ', '2006-04-03', '17:15', 'Argentina', 'Buenos Aires', 'la plata', 'a3', 'madera_claro', 'cbu', 'estrellas', 'flamenco', 'aire', '$1850', '01158373644', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, 'Maria Pilar Gonzalez Molinari', 'mpgonzalezmolinari@gmail.com', 'Maria Pilar Gonzalez Molinari', '1987-05-10', '09:11', 'Argentina', 'Buenos Aires', 'San Miguel (ex Gral. Sarmiento)', 'a3', 'madera_claro', 'mercadopago', 'antares', 'dusty', 'agua', '$2350', '1133542636', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, 'Leila Hernandez', 'leilashernandez@gmail.com', 'Leila', '1980-05-06', '22:15', 'Argentina ', 'Buenos Aires ', 'Lomas del mirador ', 'a3', 'blanco', 'cbu', 'antares', 'dusty', 'agua', '$2350', '1558330830', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, 'Leila HernÃ¡ndez ', 'leilashernandez@gmail.com', 'Javier Ariel Gutierrez ', '1978-10-10', '12:30', 'Argentina ', 'Buenos Aires ', 'CABA ', 'a3', 'blanco', 'cbu', 'antares', 'windy', 'agua', '$2350', '1558330830', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, 'Leila HernÃ¡ndez ', 'leilashernandez@gmail.com', 'Catalina Gutierrez', '2013-12-13', '10:00', 'Argentina ', 'Buenos Aires ', 'CABA', 'a4', 'blanco', 'cbu', 'estrellas', 'lil', 'aire', '$1500', '1558330830', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, 'Leila HernÃ¡ndez ', 'leilashernandez@gmail.com', 'Joaquin ', '2011-04-01', '09:20', 'Argentina ', 'Buenos aires', 'Caba', 'a4', 'blanco', 'cbu', 'estrellas', 'wale', 'aire', '$1500', '1558330830', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 'MarÃ­a Marta Armando', 'maru.armando@hotmail.com', 'LucÃ­a Josefina Armando', '1993-07-19', '10:11', 'Argentina', 'Ciudad AutÃ³noma de Buenos Aires', 'Ciudad AutÃ³noma de Buenos Aires', 'a3', 'negro', 'mercadopago', 'antares', 'black', 'aire', '$2350', '1550513721', '', 'si', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 'Cristina Miguel', 'crismiguel0606@yahoo.com.ar', 'Cristina', '1959-06-06', '20:10', 'Argentina', 'Buenos Aires ', 'Villa Ballester ', 'a4', 'negro', 'mercadopago', 'acrab', 'sage', 'agua', '$2000', '1160252872', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 'Karina', 'boheme.oficial@hotmail.com', 'Toto', '2006-10-14', '20:15', 'Argentina ', 'NeuquÃ©n', 'NeuquÃ©n', 'a3', 'madera_claro', 'mercadopago', 'antares', 'fern', 'agua', '$2350', '2994693505', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 'Viviana ', 'vivilopez38@hotmail.com', 'Lolo', '2009-08-07', '17:30', 'Argentina ', 'Buenos Aires ', 'Adrogue', 'a3', 'madera_claro', 'mercadopago', 'estrellas', 'wale', 'aire', '$1850', '1565924629', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, 'Viviana ', 'vivilopez38@hotmail.com', 'Alan', '1978-07-07', '23:59', 'Argentina ', 'Buenos Aires ', 'Lomas de zamora', 'a3', 'madera_claro', 'mercadopago', 'acrab', 'rain', 'agua', '$2350', '1565924629', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, 'Viviana ', 'vivilopez38@hotmail.com', 'Viviana ', '1973-05-13', '19:15', 'Argentina ', 'Buenos Aires ', 'Turdera ', 'a3', 'madera_claro', 'mercadopago', 'acrab', 'white', 'aire', '$2350', '1565924629', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 'KARY', 'demarieflor.arq@gmail.com', 'KARY', '1983-09-21', '23:30', 'Argentina', 'CHUBUT', 'COMODORO RIVADAVIA', 'a3', 'madera_claro', 'cbu', 'antares', 'clay', 'agua', '$2350', '01158373644', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, 'KARY', 'demarieflor.arq@gmail.com', 'MATI', '1984-04-05', '22:00', 'Argentina', 'RIO NEGRO', 'CIPOLLETTI', 'a3', 'madera_claro', 'cbu', 'antares', 'harbor', 'agua', '$2350', '01158373644', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, 'CARO SAUBI', 'demarieflor.arq@gmail.com', 'FRANCESCA RUBIO', '1999-07-11', '14:00', 'Argentina', 'CABA', 'BUENOS AIRES', 'a4', 'madera_claro', 'cbu', 'acrab', 'mint', 'agua', '$2000', '01158373644', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(57, 'Sofia Del Boca', 'sofidelboca@hotmail.com', 'Sofi', '1987-10-14', '11:39', 'Argentina', 'Buenos Aires', 'Capital Federal ', 'a3', 'madera_claro', 'cbu', 'acrab', 'mint', 'agua', '$2350', '1156417090', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, 'lali', 'demarieflor.arq@gmail.com', 'familia lusardi fassio', '1980-04-19', '10:13', 'Argentina', 'Buenos Aires-GBA', 'CABA', 'a3', 'madera_claro', 'cbu', 'antares', 'dusty', 'agua', '$2350', '01158373644', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, 'sheila', 'demarieflor.arq@gmail.com', 'sheila alalu', '1995-07-22', '05:30', 'Argentina', 'Buenos Aires-GBA', 'CABA', 'a3', 'madera_claro', 'cbu', 'acrab', 'taupe', 'agua', '$2350', '01158373644', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, 'Denise', 'palermodenise@hotmail.com', 'Matias Codoni', '1987-11-09', '15:10', 'Argentina', 'Buenos Aires', 'San MartÃ­n ', 'a3', 'negro', 'cbu', 'acrab', 'taupe', 'agua', '$2350', '1131747648', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, 'caro tasara', 'demarieflor.arq@gmail.com', 'renata covasanschi', '2003-07-14', '20:12', 'Argentina', 'Buenos Aires', 'CABA', 'a4', 'madera_claro', 'cbu', 'acrab', 'taupe', 'agua', '$2000', '01158373644', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(62, 'micaela', 'demarieflor.arq@gmail.com', 'joaquin', '2015-05-27', '19:00', 'Argentina', 'Buenos Aires', 'CABA', '', '', 'cbu', 'estrellas', 'wale', 'aire', '1000', '01158373644', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(63, 'ESPERANZA PÃ‰LLICO', 'maria.esperanza@live.com.ar', 'Esperanza', '1993-10-30', '17:49', 'Argentina', 'Buenos aires', 'Villa Flandria - LujÃ¡n ', 'a4', 'blanco', 'mercadopago', 'acrab', 'sage', 'agua', '$2000', '2346416061', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(64, 'ESPERANZA PÃ‰LLICO', 'maria.esperanza@live.com.ar', 'Esperanza', '1993-10-30', '17:49', 'Argentina', 'Buenos aires', 'Villa Flandria - LujÃ¡n ', 'a4', 'blanco', 'mercadopago', 'acrab', 'sage', 'agua', '$2000', '2346416061', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(65, 'MarÃ­a Marinoni', 'merymarinoni@hotmail.com', 'Dolores Castro Freyre', '1989-11-11', '10:00', 'Argentina', 'Buenos Aires ', 'Buenos aires ', 'a4', 'madera_claro', 'mercadopago', 'antares', 'sage', 'agua', '$2000', '1131050290', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(66, 'Mercedes', 'mechi_fumagalli@hotmail.com', 'Florencia Ojea', '1991-03-21', '10:55', 'ARGENTINA', 'BUENOS AIRES', 'CAPITAL FEDERAL', 'a4', 'madera_claro', 'cbu', 'antares', 'fern', 'fuego', '$2000', '1160026920', '', 'no', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 'CBU'),
(67, 'Roxana Rao', 'roxanarao9@gmail.com', 'roxana rao', '1976-05-26', '07:00', 'argentina', 'buenos aires', 'buenos aires', 'a4', 'madera_claro', 'cbu', 'acrab', 'windy', 'agua', '$2000', '1141435205', '', 'si', '2020-07-15', '2020-07-28', '', '', '', '', '', '', '', '', '', '', '', ''),
(68, 'SofÃ­a lamarca', 'sofi.lamarca@hotmail.com', 'SofÃ­a lamarca', '1995-10-19', '14:16', 'Argentina ', 'Buenos aires', 'Capital federal', 'a4', 'madera_claro', 'mercadopago', 'acrab', 'white', 'agua', '$2000', '02226601132', '', 'si', '2020-07-16', '2020-07-29', '', '', '', '', '', '', '', '', '', '', '', 'MP'),
(69, 'Melanie', 'melanie.15@live.com.ar', 'Melanie MarÃ­a GÃ³mez Lamanna', '1997-02-15', '13:25', 'Argentina', 'Buenos Aires', 'Ciudad Autonoma de Buenos Aires', 'a4', 'negro', 'mercadopago', 'acrab', 'white', 'aire', '$2000', '1167210127', '', 'si', '2020-07-16', '2020-07-29', '', '', '', '', '', '', '', '', '', '', '', 'MP'),
(70, 'yesica', 'yesicabootz@gmail.com', 'Yesica Bootz', '1994-12-25', '09:30', 'Argentina', 'buenos aires', 'lanus', 'a4', 'madera_claro', 'mercadopago', 'antares', 'dusty', 'agua', '$2000', '1131769642', '', 'SI', '2020-07-16', '2020-07-29', '', '', '', '', '', '', '', '', '', '', '', 'MP'),
(71, 'MarÃ­a Cecilia Corzo', 'mariaceciliacorzo@gmail.com', 'ELENA BRES', '2020-05-25', '12:40', 'Argentina', 'CÃ³rdoba', 'Villa MarÃ­a', 'a3', 'madera_claro', 'mercadopago', 'antares', 'fern', 'agua', '$2350', '3496419305', '', 'SI', '2020-07-16', '2020-07-29', '', '', '', '', '', '', '', '', '', '', '', 'MP'),
(72, 'Candela', 'rampininicandela@gmail.com', 'Martin', '2020-04-14', '14:00', 'Argentina', 'Caba', 'Capital federal', 'a4', 'madera_claro', 'mercadopago', 'antares', 'fern', 'agua', '$2000', '1155955341', '', 'SI', '2020-07-16', '2020-07-29', '', '', '', '', '', '', '', '', '', '', '', 'MP'),
(73, 'MarÃ­a Eugenia Monkes ', 'euge.monkes29@gmail.com', 'MarÃ­a Eugenia Monkes ', '2003-01-29', '09:10', 'Argentina ', 'NeuquÃ©n ', 'San MartÃ­n de los Andes ', 'a4', 'blanco', 'mercadopago', 'antares', 'dusty', 'agua', '$2000', '2994727924', '', 'SI', '2020-07-16', '2020-07-29', '', '', '', '', '', '', '', '', '', '', '', 'MP'),
(74, 'Constanza', 'chunicken@gmail.com', 'Clemente Avramovich', '2019-08-13', '09:15', 'Argentina', 'Cordoba', 'Cordoba', 'a4', 'madera_claro', 'mercadopago', 'antares', 'sage', 'agua', '$2000', '3513932723', '', 'SI', '2020-07-17', '2020-07-30', '', '', '', '', '', '', '', '', '', '', '', 'MP'),
(75, 'Paula Diaz ', 'paulavictoria600@gmail.com', 'paula', '1981-10-02', '17:40', 'Argentina ', 'Buenos Aires ', 'adrogue', 'a4', 'madera_claro', 'mercadopago', 'acrab', 'taupe', 'aire', '$2000', '1131170207', '', 'SI', '2020-07-17', '2020-07-30', '', '', '', '', '', '', '', '', '', '', '', 'MP'),
(76, 'Judith', 'mpecoroff@gmail.com', 'Judith Sara Behar', '1966-12-27', '16:20', 'Argentina', 'Buenos aires', 'CABA', 'a4', 'madera_claro', 'cbu', 'acrab', 'sage', 'agua', '$2000', '01151493409', '', 'SI', '2020-07-17', '2020-07-30', '', '', '', '', '', '', '', '', '', '', '', 'MP'),
(77, 'Josefina', 'josefinahyland@gmail.com', 'Juana Cabrera', '2007-06-29', '17:34', 'Argentina ', 'Bs As', 'Bs as ', 'a4', 'madera_claro', 'mercadopago', 'acrab', 'pale', 'agua', '$2000', '1149716695', '', 'SI', '2020-07-17', '2020-07-30', '', '', '', '', '', '', '', '', '', '', '', 'MP'),
(78, 'Marisa ', 'marisa.e.cardozo@gmail.com', 'Clara', '2018-06-05', '08:15', 'Argentina', 'Buenos aires', 'Quilmes', 'a3', 'blanco', 'mercadopago', 'antares', 'clay', 'agua', '$2350', '1558961406', '', 'SI', '2020-07-17', '2020-07-30', '', '', '', '', '', '', '', '', '', '', '', 'MP'),
(79, 'MarÃ­a Cecilia Gon', 'mceciliagon@gmail.com', 'MarÃ­a Cecilia Gon', '1980-08-25', '12:15', 'Argentina', 'Santa Fe', 'Santa Fe', 'a3', 'blanco', 'cbu', 'antares', 'harbor', 'agua', '$2350', '3426981188', '', 'NO', '2020-07-17', '2020-07-30', '', '', '', '', '', '', '', '', '', '', '', 'CBU'),
(80, 'AgustÃ­na ', 'agusvazquezm@gmail.com', 'Juan cruz Dorcazberro', '2020-05-30', '21:35', 'Argentina ', 'Chubut ', 'Trelew', 'a4', 'madera_claro', 'cbu', 'antares', 'windy', 'agua', '$2000', '02804309057', '', 'SI', '2020-07-17', '2020-07-30', '', '', '', '', '', '', '', '', '', '', '', 'CBU'),
(81, 'Florencia ', 'flor82villarreal@gmail.com', 'Francis AndrÃ©s Helver', '2020-06-28', '11:35', 'Argentina', 'Caba', 'Ciudad Autonoma de bs as', 'a4', 'madera_claro', 'cbu', 'acrab', 'wall', 'agua', '$2000', '1121752532', '', 'SI', '2020-07-17', '2020-07-30', '', '', '', '', '', '', '', '', '', '', '', 'CBU'),
(82, 'romi', 'arquitecturarmr@gmail.com', 'Vero Mongelo', '1971-01-17', '11:30', 'Argentina', 'BUENOS AIRES', 'OLIVOS', 'a4', '', 'mercadopago', 'acrab', 'taupe', 'agua', '$2000', '01133442525', '', 'SI', '2020-07-17', '2020-07-30', '', '', '', '', '', '', '', '', '', '', '', 'MP'),
(83, 'MarÃ­a Bordoni', 'mariafbordoni@gmail.com', 'Diego Fernando PÃ©rez', '1982-12-20', '06:45', 'Argentina', 'Buenos Aires', 'Avellaneda', 'a4', 'madera_claro', 'cbu', 'acrab', 'taupe', 'agua', '$2000', '1165183941', '', 'SI', '2020-07-17', '2020-07-30', '', '', '', '', '', '', '', '', '', '', '', 'CBU'),
(84, 'Catalina Meza Ingaramo ', 'catalina.mezaingaramo@gmail.com', 'Rufina Della Paolera', '2020-04-05', '20:55', 'Argentina', 'Buenos Aires', 'Recoleta (CABA)', 'a3', 'negro', 'cbu', 'antares', 'dusty', 'agua', '$2350', '1131128819', '', 'NO', '2020-07-17', '2020-07-30', '', '', '', '', '', '', '', '', '', '', '', 'CBU'),
(85, 'MarÃ­a Bordoni', 'mariafbordoni@gmail.com', 'Emma Sivila Durante', '2019-06-17', '10:50', 'Argentina', 'Capital Federal', 'CABA', 'a4', 'madera_claro', 'cbu', 'acrab', 'taupe', 'agua', '$2000', '1165183941', '', '', '2020-07-17', '2020-07-30', '', '', '', '', '', '', '', '', '', '', '', 'CBU'),
(86, 'lorena', 'lorenaribotta@hotmail.com.ar', 'Rita', '2020-04-01', '15:18', 'Argentina', 'Buenos aires', 'Caba', 'a4', 'madera_claro', 'cbu', 'estrellas', 'lil', 'aire', '$1500', '1532140676', '', 'SI', '2020-07-18', '2020-07-31', '', '', '', '', '', '', '', '', '', '', '', 'CBU'),
(87, 'Lorena', 'lorenaribotta@hotmail.com.ar', 'Emilia', '2020-04-01', '15:22', 'Argentino ', 'Buenos aires', 'Caba', 'a4', 'madera_claro', 'cbu', 'estrellas', 'pasture', 'aire', '$1500', '1532140676', '', 'SI', '2020-07-18', '2020-07-31', '', '', '', '', '', '', '', '', '', '', '', 'CBU'),
(89, 'Flor Zeballos ', 'florenciazeballos@hotmail.com', 'Guadalupe Zeballos ', '1998-06-26', '16:17', 'Argentina', 'Cordoba', 'Cordoba', 'a4', 'madera_claro', 'mercadopago', 'antares', 'harbor', 'agua', '$2000', '3514386121', '', 'SI', '2020-07-17', '2020-07-30', '', '', '', '', '', '', '', '', '', '', '', 'MP'),
(90, 'Yadia', 'yadia.a.coccaro@gmail.com', 'Helena MartÃ­nez Mosquera ', '2020-01-16', '19:50', 'Argentina ', 'Buenos Aires ', 'Capital federal ', 'a4', 'madera_claro', 'mercadopago', 'antares', 'windy', 'agua', '$2000', '1123859910', '', 'SI', '2020-07-17', '2020-07-30', '', '', '', '', '', '', '', '', '', '', '', 'MP'),
(91, 'Agustina', 'agustinajuan@hotmail.com', 'Julia', '2019-05-20', '09:12', 'Argentina', 'Buenos aires', 'Caba', 'a3', 'madera_claro', 'mercadopago', 'acrab', 'pale', 'fuego', '$2350', '1162914502', '', 'SI', '2020-07-18', '2020-07-31', '', '', '', '', '', '', '', '', '', '', '', 'MP'),
(92, 'Alejandra Paola Barrientos ', 'ale_pao27@hotmail.com', 'Alejandra Paola Barrientos ', '1987-12-22', '17:25', 'Argentina ', 'Buenos Aires ', 'Capital federal ', 'a4', 'madera_claro', 'cbu', 'acrab', 'wall', 'agua', '$2000', '1533376435', '', 'NO', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 'CBU'),
(93, 'Julia', 'shuly1984@hotmail.com', 'Paola', '1981-07-25', '20:00', 'Argentina', 'Provincia de Buenos aires', 'Capital Federal', 'a4', 'blanco', 'mercadopago', 'estrellas', 'lil', 'aire', '$1500', '1150397735', '', 'SI', '2020-07-18', '2020-07-31', '', '', '', '', '', '', '', '', '', '', '', 'MP');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `pass`, `nombre`) VALUES
(1, 'demarieflor.arq@gmail.com', 'MR572', 'Flopu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
