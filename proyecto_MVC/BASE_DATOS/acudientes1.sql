-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2020 a las 21:12:20
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `acudientes1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `pkcod_cur` int(11) NOT NULL,
  `nom_cur` varchar(30) NOT NULL,
  `fkcod_sede` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`pkcod_cur`, `nom_cur`, `fkcod_sede`) VALUES
(42, 'prejardin', 1),
(43, 'undecimo', 2),
(44, 'primero', 1),
(45, 'decimo', 2),
(46, 'segundo', 1),
(47, 'tercero', 1),
(48, 'noveno', 2),
(49, 'octavo', 2),
(50, ' OCTAVO A1', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `pkcod_sede` int(11) NOT NULL,
  `nom_sede` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`pkcod_sede`, `nom_sede`) VALUES
(1, 'santa rosa'),
(2, 'julio florez');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`pkcod_cur`),
  ADD KEY `lugar` (`fkcod_sede`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`pkcod_sede`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `pkcod_cur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `pkcod_sede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `lugar` FOREIGN KEY (`fkcod_sede`) REFERENCES `sede` (`pkcod_sede`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;






create table estudiantes
(
  cod_estu int AUTO_INCREMENT,
    identificacion int,
    ape_est varchar(50),
    nom_est varchar(50),
    dir_est varchar(50),
    pkcod_cur int,
    primary key (cod_estu)
);


create table padres
(
  cod_pad int AUTO_INCREMENT,
    identificacion int,
    ape_pad varchar(50),
    nom_pad varchar(50),
    dir_pad varchar(50),
    primary key (cod_pad)
);


create table acudientes
(
  cod_acu int AUTO_INCREMENT,
    fcod_estu int,
    fcod_pad int,
    primary key (cod_acu)
);


alter table estudiantes add constraint est_cur
  foreign key (pkcod_cur) references cursos(pkcod_cur);

alter table acudientes add constraint acu_est
  foreign key (fcod_estu) references estudiantes(cod_estu);
    
    
alter table acudientes add constraint acu_pad
  foreign key (fcod_pad) references padres(cod_pad);


insert into estudiantes (identificacion,ape_est,nom_est,dir_est,pkcod_cur)
  values  (100,'ESCOBAR 1','JUAN 1','CALLE 100',42),
          (110,'ESCOBAR 2','JUAN 2','CALLE 110',43),
          (200,'ESCOBAR 3','JUAN 3','CALLE 200',44),
          (220,'ESCOBAR 4','JUAN 4','CALLE 220',45),
          (300,'ESCOBAR 5','JUAN 5','CALLE 300',46),
          (310,'ESCOBAR 6','JUAN 6','CALLE 310',47);


insert into PADRES (identificacion,ape_pad,nom_pad,dir_pad)
  values  (1000,'ESCOBAR UNO','JUAN','CALLE 100'),
          (1100,'ESCOBAR MIL','JUAN','CALLE 110'),
          (2000,'ESCOBAR DOS','JUAN','CALLE 200'),
          (2200,'ESCOBAR DOSMIL','JUAN','CALLE 220'),
          (1000,'ESCOBAR UNO','JUAN','CALLE 300'),
          (2000,'ESCOBAR DOS','JUAN','CALLE 310');