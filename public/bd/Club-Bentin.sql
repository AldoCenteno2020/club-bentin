-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2022 a las 18:23:00
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `club-bentin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID_Alumnos` int(11) NOT NULL,
  `Nacimiento_Alumno` date NOT NULL,
  `Teléfono_Alumno` varchar(9) NOT NULL,
  `Nombres_Alumno` varchar(50) NOT NULL,
  `ApllidoM_Alumno` varchar(30) NOT NULL,
  `ApellidoP_Alumno` varchar(30) NOT NULL,
  `Padres_ID_Padres` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID_Categoria` int(11) NOT NULL,
  `Tipo_Categoria` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorías_productos`
--

CREATE TABLE `categorías_productos` (
  `ID_Categorias` int(11) NOT NULL,
  `Tipo_Categorías` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `ID_cursos` int(11) NOT NULL,
  `Nombre_Curso` varchar(20) NOT NULL,
  `Costo_Curso` float NOT NULL,
  `Fecha_Curso` date NOT NULL,
  `CantMeses_Curso` int(11) NOT NULL,
  `Categoria_ID_Categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_pago`
--

CREATE TABLE `estado_pago` (
  `ID_Pago_mes` int(11) NOT NULL,
  `Enero` int(11) DEFAULT NULL,
  `Febrero` int(11) DEFAULT NULL,
  `Marzo` int(11) DEFAULT NULL,
  `Abril` int(11) DEFAULT NULL,
  `Mayo` int(11) DEFAULT NULL,
  `Junio` int(11) DEFAULT NULL,
  `Julio` int(11) DEFAULT NULL,
  `Agosto` int(11) DEFAULT NULL,
  `Septiembre` int(11) DEFAULT NULL,
  `Octubre` int(11) DEFAULT NULL,
  `Noviembre` int(11) DEFAULT NULL,
  `Diciembre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historico_productos`
--

CREATE TABLE `historico_productos` (
  `ID_Ventas` int(11) NOT NULL,
  `CantCambio_Historico_productos` int(11) DEFAULT NULL,
  `TipoCambio_Historico_productos` int(11) DEFAULT NULL,
  `Productos_ID_Productos` int(11) NOT NULL,
  `Tipo_cambio_ID_Tipo_cambio` int(11) NOT NULL,
  `Usuarios_ID_Usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `ID_Matricula` int(11) NOT NULL,
  `Fecha_Matrícula` date NOT NULL,
  `CostoIns_Matrícula` float NOT NULL,
  `Descuento_Marícula` float NOT NULL,
  `Cursos_ID_cursos` int(11) NOT NULL,
  `Alumnos_ID_Alumnos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE `padres` (
  `ID_Padres` int(11) NOT NULL,
  `Nombres_Padres` varchar(30) DEFAULT NULL,
  `ApellidoM_Padres` varchar(20) DEFAULT NULL,
  `ApellidoP_Padres` varchar(20) DEFAULT NULL,
  `Telefono_Padres` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `ID_Pagos` int(11) NOT NULL,
  `Fecha_Pagos` int(11) NOT NULL,
  `Matricula_ID_Matricula` int(11) NOT NULL,
  `Tipo-Pago_ID_Tipo_Pago` int(11) NOT NULL,
  `Recibo_ID_Recibo` int(11) NOT NULL,
  `Estado_pago_ID_Pago_mes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID_Productos` int(11) NOT NULL,
  `Nombre_Productos` varchar(25) DEFAULT NULL,
  `Precio_Productos` int(11) DEFAULT NULL,
  `Stock_Productos` int(11) DEFAULT NULL,
  `Categorías_productos_ID_Categorias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo`
--

CREATE TABLE `recibo` (
  `ID_Recibo` int(11) NOT NULL,
  `Pago_Recibo` float DEFAULT NULL,
  `Fecha_Recibo` date DEFAULT NULL,
  `Hora_Recibo` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo-pago`
--

CREATE TABLE `tipo-pago` (
  `ID_Tipo_Pago` int(11) NOT NULL,
  `Modalidad_Tipo_Pago` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cambio`
--

CREATE TABLE `tipo_cambio` (
  `ID_Tipo_cambio` int(11) NOT NULL,
  `Estado_Tipo_cambio` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuarios`
--

CREATE TABLE `tipo_usuarios` (
  `ID_Tipo_Usuarios` int(11) NOT NULL,
  `Nombre_Tipo_Usuarios` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuarios`
--

INSERT INTO `tipo_usuarios` (`ID_Tipo_Usuarios`, `Nombre_Tipo_Usuarios`) VALUES
(1, 'Secretaría'),
(2, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_Usuarios` int(11) NOT NULL,
  `Nombre_Usuarios` varchar(50) NOT NULL,
  `ApellidoM_Usuarios` varchar(30) NOT NULL,
  `ApellidoP_Usuarios` varchar(30) NOT NULL,
  `Nick_Usuarios` varchar(20) NOT NULL,
  `Contraseña_Usuarios` varchar(15) NOT NULL,
  `DNI_Usuarios` varchar(8) DEFAULT NULL,
  `Email_Usuarios` varchar(60) DEFAULT NULL,
  `Telefono_Usuarios` varchar(9) DEFAULT NULL,
  `Tipo_usuarios_ID_Tipo_Usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_Usuarios`, `Nombre_Usuarios`, `ApellidoM_Usuarios`, `ApellidoP_Usuarios`, `Nick_Usuarios`, `Contraseña_Usuarios`, `DNI_Usuarios`, `Email_Usuarios`, `Telefono_Usuarios`, `Tipo_usuarios_ID_Tipo_Usuarios`) VALUES
(1, 'Jorge Jefferson', 'Valdivia', 'Velásquez', 'Jorge123', 'Jorge123', '54567899', 'Jorge123@gmail.com', '956345734', 1),
(2, 'Aldo Antero', 'Centeno', 'Maquera', 'Aldo123', 'Aldo123', '57907632', 'Aldo@gmail.com', '967355790', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID_Alumnos`),
  ADD KEY `fk_Alumnos_Padres1` (`Padres_ID_Padres`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_Categoria`);

--
-- Indices de la tabla `categorías_productos`
--
ALTER TABLE `categorías_productos`
  ADD PRIMARY KEY (`ID_Categorias`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`ID_cursos`),
  ADD KEY `fk_Cursos_Categoria1` (`Categoria_ID_Categoria`);

--
-- Indices de la tabla `estado_pago`
--
ALTER TABLE `estado_pago`
  ADD PRIMARY KEY (`ID_Pago_mes`);

--
-- Indices de la tabla `historico_productos`
--
ALTER TABLE `historico_productos`
  ADD PRIMARY KEY (`ID_Ventas`),
  ADD KEY `fk_Historico_productos_Productos1` (`Productos_ID_Productos`),
  ADD KEY `fk_Historico_productos_Tipo_cambio1` (`Tipo_cambio_ID_Tipo_cambio`),
  ADD KEY `fk_Historico_productos_Usuarios1` (`Usuarios_ID_Usuarios`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`ID_Matricula`),
  ADD KEY `fk_Matricula_Cursos1` (`Cursos_ID_cursos`),
  ADD KEY `fk_Matricula_Alumnos1` (`Alumnos_ID_Alumnos`);

--
-- Indices de la tabla `padres`
--
ALTER TABLE `padres`
  ADD PRIMARY KEY (`ID_Padres`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`ID_Pagos`),
  ADD KEY `fk_Pagos_Matricula1` (`Matricula_ID_Matricula`),
  ADD KEY `fk_Pagos_Tipo-Pago1` (`Tipo-Pago_ID_Tipo_Pago`),
  ADD KEY `fk_Pagos_Recibo1` (`Recibo_ID_Recibo`),
  ADD KEY `fk_Pagos_Estado_pago1` (`Estado_pago_ID_Pago_mes`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_Productos`),
  ADD KEY `fk_Productos_Categorías_productos1` (`Categorías_productos_ID_Categorias`);

--
-- Indices de la tabla `recibo`
--
ALTER TABLE `recibo`
  ADD PRIMARY KEY (`ID_Recibo`);

--
-- Indices de la tabla `tipo-pago`
--
ALTER TABLE `tipo-pago`
  ADD PRIMARY KEY (`ID_Tipo_Pago`);

--
-- Indices de la tabla `tipo_cambio`
--
ALTER TABLE `tipo_cambio`
  ADD PRIMARY KEY (`ID_Tipo_cambio`);

--
-- Indices de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  ADD PRIMARY KEY (`ID_Tipo_Usuarios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_Usuarios`),
  ADD KEY `fk_Usuarios_Tipo_usuarios1` (`Tipo_usuarios_ID_Tipo_Usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `ID_Alumnos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID_Categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorías_productos`
--
ALTER TABLE `categorías_productos`
  MODIFY `ID_Categorias` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `ID_cursos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_pago`
--
ALTER TABLE `estado_pago`
  MODIFY `ID_Pago_mes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historico_productos`
--
ALTER TABLE `historico_productos`
  MODIFY `ID_Ventas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `ID_Matricula` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `padres`
--
ALTER TABLE `padres`
  MODIFY `ID_Padres` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `ID_Pagos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID_Productos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recibo`
--
ALTER TABLE `recibo`
  MODIFY `ID_Recibo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo-pago`
--
ALTER TABLE `tipo-pago`
  MODIFY `ID_Tipo_Pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_cambio`
--
ALTER TABLE `tipo_cambio`
  MODIFY `ID_Tipo_cambio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  MODIFY `ID_Tipo_Usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_Usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `fk_Alumnos_Padres1` FOREIGN KEY (`Padres_ID_Padres`) REFERENCES `padres` (`ID_Padres`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `fk_Cursos_Categoria1` FOREIGN KEY (`Categoria_ID_Categoria`) REFERENCES `categoria` (`ID_Categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `historico_productos`
--
ALTER TABLE `historico_productos`
  ADD CONSTRAINT `fk_Historico_productos_Productos1` FOREIGN KEY (`Productos_ID_Productos`) REFERENCES `productos` (`ID_Productos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Historico_productos_Tipo_cambio1` FOREIGN KEY (`Tipo_cambio_ID_Tipo_cambio`) REFERENCES `tipo_cambio` (`ID_Tipo_cambio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Historico_productos_Usuarios1` FOREIGN KEY (`Usuarios_ID_Usuarios`) REFERENCES `usuarios` (`ID_Usuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `fk_Matricula_Alumnos1` FOREIGN KEY (`Alumnos_ID_Alumnos`) REFERENCES `alumnos` (`ID_Alumnos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Matricula_Cursos1` FOREIGN KEY (`Cursos_ID_cursos`) REFERENCES `cursos` (`ID_cursos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `fk_Pagos_Estado_pago1` FOREIGN KEY (`Estado_pago_ID_Pago_mes`) REFERENCES `estado_pago` (`ID_Pago_mes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pagos_Matricula1` FOREIGN KEY (`Matricula_ID_Matricula`) REFERENCES `matricula` (`ID_Matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pagos_Recibo1` FOREIGN KEY (`Recibo_ID_Recibo`) REFERENCES `recibo` (`ID_Recibo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pagos_Tipo-Pago1` FOREIGN KEY (`Tipo-Pago_ID_Tipo_Pago`) REFERENCES `tipo-pago` (`ID_Tipo_Pago`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_Productos_Categorías_productos1` FOREIGN KEY (`Categorías_productos_ID_Categorias`) REFERENCES `categorías_productos` (`ID_Categorias`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_Usuarios_Tipo_usuarios1` FOREIGN KEY (`Tipo_usuarios_ID_Tipo_Usuarios`) REFERENCES `tipo_usuarios` (`ID_Tipo_Usuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
