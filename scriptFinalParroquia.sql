-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2022 a las 01:44:54
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parroquia_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_curso`
--

CREATE TABLE `p_curso` (
  `id_usuario` int(11) DEFAULT NULL,
  `id_sacramento` int(11) DEFAULT NULL,
  `id_curso` int(11) NOT NULL,
  `id_tipo_curso` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `descripcion_curso` varchar(100) DEFAULT NULL,
  `id_usuario_reg` int(11) DEFAULT NULL,
  `fecha_reg` datetime DEFAULT NULL,
  `borrado` char(1) DEFAULT NULL,
  `titulo_curso` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_documento`
--

CREATE TABLE `p_documento` (
  `id_documento` int(11) NOT NULL,
  `nombre_documento` varchar(50) NOT NULL,
  `extension_documento` varchar(7) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `ubicacion_doc` varchar(50) NOT NULL,
  `nombre_archivo_doc` varchar(50) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `fecha_reg` datetime NOT NULL,
  `id_usuario_reg` int(11) NOT NULL,
  `borrado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de ta-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2022 a las 01:44:54
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parroquia_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_curso`
--

CREATE TABLE `p_curso` (
  `id_usuario` int(11) DEFAULT NULL,
  `id_sacramento` int(11) DEFAULT NULL,
  `id_curso` int(11) NOT NULL,
  `id_tipo_curso` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `descripcion_curso` varchar(100) DEFAULT NULL,
  `id_usuario_reg` int(11) DEFAULT NULL,
  `fecha_reg` datetime DEFAULT NULL,
  `borrado` char(1) DEFAULT NULL,
  `titulo_curso` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_documento`
--

CREATE TABLE `p_documento` (
  `id_documento` int(11) NOT NULL,
  `nombre_documento` varchar(50) NOT NULL,
  `extension_documento` varchar(7) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `ubicacion_doc` varchar(50) NOT NULL,
  `nombre_archivo_doc` varchar(50) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `fecha_reg` datetime NOT NULL,
  `id_usuario_reg` int(11) NOT NULL,
  `borrado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
bla para la tabla `p_egresos`
--

CREATE TABLE `p_egresos` (
  `id_egreso` int(11) NOT NULL,
  `fecha_eg` date N-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2022 a las 01:44:54
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parroquia_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_curso`
--

CREATE TABLE `p_curso` (
  `id_usuario` int(11) DEFAULT NULL,
  `id_sacramento` int(11) DEFAULT NULL,
  `id_curso` int(11) NOT NULL,
  `id_tipo_curso` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `descripcion_curso` varchar(100) DEFAULT NULL,
  `id_usuario_reg` int(11) DEFAULT NULL,
  `fecha_reg` datetime DEFAULT NULL,
  `borrado` char(1) DEFAULT NULL,
  `titulo_curso` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_documento`
--

CREATE TABLE `p_documento` (
  `id_documento` int(11) NOT NULL,
  `nombre_documento` varchar(50) NOT NULL,
  `extension_documento` varchar(7) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `ubicacion_doc` varchar(50) NOT NULL,
  `nombre_archivo_doc` varchar(50) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `fecha_reg` datetime NOT NULL,
  `id_usuario_reg` int(11) NOT NULL,
  `borrado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
OT NULL,
  `monto_eg` decimal(10,0) NOT NULL,
  `submonto_eg` decimal(10,0) NOT NULL,
  `explicacion_eg` varchar(200) NOT NULL,
  `id_usuario_reg` int(11) NOT NULL,
  `fecha_reg` datetime NOT NULL,
  `borrado` char(1) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_evento`
--

CREATE TABLE `p_evento` (
  `id_usuario` int(11) DEFAULT NULL,
  `id_evento` int(11) NOT NULL,
  `id_tipo_evento` int(11) DEFAULT NULL,
  `descripcion_de_evento` varchar(300) DEFAULT NULL,
  `lugar` varchar(50) DEFAULT NULL,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_finalizacion` datetime DEFAULT NULL,
  `id_usuario_reg` int(11) DEFAULT NULL,
  `fecha_reg` datetime DEFAULT NULL,
  `borrado` char(1) DEFAULT NULL,
  `titulo_evento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_ingresos`
--

CREATE TABLE `p_ingresos` (
  `id_ingreso` int(11) NOT NULL,
  `fecha_in` date NOT NULL,
  `monto_in` decimal(10,0) NOT NULL,
  `submonto_in` decimal(10,0) NOT NULL,
  `explicacion_in` varchar(200) NOT NULL,
  `id_usuario_reg` int(11) NOT NULL,
  `fecha_reg` datetime NOT NULL,
  `borrado` char(1) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_inscripcion`
--

CREATE TABLE `p_inscripcion` (
  `id_persona` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `concluido` char(1) DEFAULT NULL,
  `fecha_inscripcion` date DEFAULT NULL,
  `id_tipo_inscripcion` int(11) DEFAULT NULL,
  `id_usuario_reg` int(11) DEFAULT NULL,
  `fecha_reg` datetime DEFAULT NULL,
  `borrado` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_persona`
--

CREATE TABLE `p_persona` (
  `id_persona` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidop` varchar(25) NOT NULL,
  `apellidom` varchar(25) NOT NULL,
  `fecha_nac` date NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `carnet` varchar(15) NOT NULL,
  `genero` char(1) NOT NULL,
  `lugar_nac` varchar(25) NOT NULL,
  `departamento` varchar(25) NOT NULL,
  `ciudad` varchar(25) NOT NULL,
  `celular` varchar(25) NOT NULL,
  `telefono_fijo` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_usuario_reg` int(11) NOT NULL,
  `fecha_reg` datetime NOT NULL,
  `borrado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_rol`
--

CREATE TABLE `p_rol` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(25) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha_reg` datetime NOT NULL,
  `id_usuario_reg` int(11) NOT NULL,
  `borrado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_roles`
--

CREATE TABLE `p_roles` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(25) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha_reg` datetime NOT NULL,
  `id_usuario_reg` int(11) NOT NULL,
  `borrado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_role_usuario`
--

CREATE TABLE `p_role_usuario` (
  `id_rol_usuario` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `fecha_reg` datetime NOT NULL,
  `id_usuario_reg` int(11) NOT NULL,
  `borrado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_sacramento`
--

CREATE TABLE `p_sacramento` (
  `id_sacramento` int(11) NOT NULL,
  `tipo_sacramento` varchar(30) DEFAULT NULL,
  `borrado` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_tipo_curso`
--

CREATE TABLE `p_tipo_curso` (
  `id_tipo_curso` int(11) NOT NULL,
  `tipo_curso` varchar(30) DEFAULT NULL,
  `borrado` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_tipo_egreso`
--

CREATE TABLE `p_tipo_egreso` (
  `id_tipo_egre` int(11) NOT NULL,
  `nombre_egre` varchar(30) NOT NULL,
  `id_egreso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_tipo_evento`
--

CREATE TABLE `p_tipo_evento` (
  `id_tipo_evento` int(11) NOT NULL,
  `tipo_evento` varchar(30) DEFAULT NULL,
  `borrado` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_tipo_ingreso`
--

CREATE TABLE `p_tipo_ingreso` (
  `id_tipo_ingre` int(11) NOT NULL,
  `nombre_ingre` varchar(30) NOT NULL,
  `id_ingreso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_tipo_inscripcion`
--

CREATE TABLE `p_tipo_inscripcion` (
  `id_tipo_inscripcion` int(11) NOT NULL,
  `tipo_inscripcion` varchar(30) DEFAULT NULL,
  `borrado` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_usuario`
--

CREATE TABLE `p_usuario` (
  `id_usuario` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `fecha_reg` datetime NOT NULL,
  `id_usuario_reg` int(11) NOT NULL,
  `borrado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `p_curso`
--
ALTER TABLE `p_curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `fk_usuario_curso` (`id_usuario`),
  ADD KEY `fk_sacramento_curso` (`id_sacramento`),
  ADD KEY `fk_tipo_curso` (`id_tipo_curso`);

--
-- Indices de la tabla `p_documento`
--
ALTER TABLE `p_documento`
  ADD PRIMARY KEY (`id_documento`),
  ADD UNIQUE KEY `id_usuario` (`id_persona`);

--
-- Indices de la tabla `p_egresos`
--
ALTER TABLE `p_egresos`
  ADD PRIMARY KEY (`id_egreso`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `p_evento`
--
ALTER TABLE `p_evento`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `fk_usuario_evento` (`id_usuario`),
  ADD KEY `fk_evento_tipo` (`id_tipo_evento`);

--
-- Indices de la tabla `p_ingresos`
--
ALTER TABLE `p_ingresos`
  ADD PRIMARY KEY (`id_ingreso`),
  ADD UNIQUE KEY `id_evento` (`id_evento`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `p_inscripcion`
--
ALTER TABLE `p_inscripcion`
  ADD PRIMARY KEY (`id_persona`,`id_curso`),
  ADD KEY `fk_curso_inscripcion` (`id_curso`),
  ADD KEY `fk_tipo_inscripcion` (`id_tipo_inscripcion`);

--
-- Indices de la tabla `p_persona`
--
ALTER TABLE `p_persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `p_rol`
--
ALTER TABLE `p_rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `p_roles`
--
ALTER TABLE `p_roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `p_role_usuario`
--
ALTER TABLE `p_role_usuario`
  ADD PRIMARY KEY (`id_rol_usuario`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `p_sacramento`
--
ALTER TABLE `p_sacramento`
  ADD PRIMARY KEY (`id_sacramento`);

--
-- Indices de la tabla `p_tipo_curso`
--
ALTER TABLE `p_tipo_curso`
  ADD PRIMARY KEY (`id_tipo_curso`);

--
-- Indices de la tabla `p_tipo_egreso`
--
ALTER TABLE `p_tipo_egreso`
  ADD PRIMARY KEY (`id_tipo_egre`),
  ADD UNIQUE KEY `id_egreso` (`id_egreso`);

--
-- Indices de la tabla `p_tipo_evento`
--
ALTER TABLE `p_tipo_evento`
  ADD PRIMARY KEY (`id_tipo_evento`);

--
-- Indices de la tabla `p_tipo_ingreso`
--
ALTER TABLE `p_tipo_ingreso`
  ADD KEY `tipo_ingreso_ibfk_1` (`id_ingreso`);

--
-- Indices de la tabla `p_tipo_inscripcion`
--
ALTER TABLE `p_tipo_inscripcion`
  ADD PRIMARY KEY (`id_tipo_inscripcion`);

--
-- Indices de la tabla `p_usuario`
--
ALTER TABLE `p_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `p_documento`
--
ALTER TABLE `p_documento`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `p_egresos`
--
ALTER TABLE `p_egresos`
  MODIFY `id_egreso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `p_evento`
--
ALTER TABLE `p_evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `p_ingresos`
--
ALTER TABLE `p_ingresos`
  MODIFY `id_ingreso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `p_role_usuario`
--
ALTER TABLE `p_role_usuario`
  MODIFY `id_rol_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `p_tipo_egreso`
--
ALTER TABLE `p_tipo_egreso`
  MODIFY `id_tipo_egre` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `p_curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT;

  ALTER TABLE `p_evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT;

    ALTER TABLE `p_tipo_evento`
  MODIFY `id_tipo_evento` int(11) NOT NULL AUTO_INCREMENT;

    ALTER TABLE `p_tipo_curso`
  MODIFY `id_tipo_curso` int(11) NOT NULL AUTO_INCREMENT;

    ALTER TABLE `p_sacramento`
  MODIFY `id_sacramento` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `p_curso`
--
ALTER TABLE `p_curso`
  ADD CONSTRAINT `fk_sacramento_curso` FOREIGN KEY (`id_sacramento`) REFERENCES `p_sacramento` (`id_sacramento`),
  ADD CONSTRAINT `fk_tipo_curso` FOREIGN KEY (`id_tipo_curso`) REFERENCES `p_tipo_curso` (`id_tipo_curso`),
  ADD CONSTRAINT `fk_usuario_curso` FOREIGN KEY (`id_usuario`) REFERENCES `p_usuario` (`id_usuario`);

--
-- Filtros para la tabla `p_documento`
--
ALTER TABLE `p_documento`
  ADD CONSTRAINT `p_documento_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `p_inscripcion` (`id_persona`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `p_egresos`
--
ALTER TABLE `p_egresos`
  ADD CONSTRAINT `egresos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `p_usuario` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `p_evento`
--
ALTER TABLE `p_evento`
  ADD CONSTRAINT `fk_evento_tipo` FOREIGN KEY (`id_tipo_evento`) REFERENCES `p_tipo_evento` (`id_tipo_evento`),
  ADD CONSTRAINT `fk_usuario_evento` FOREIGN KEY (`id_usuario`) REFERENCES `p_usuario` (`id_usuario`);

--
-- Filtros para la tabla `p_ingresos`
--
ALTER TABLE `p_ingresos`
  ADD CONSTRAINT `ingresos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `p_usuario` (`id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ingresos_ibfk_2` FOREIGN KEY (`id_evento`) REFERENCES `p_evento` (`id_evento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `p_inscripcion`
--
ALTER TABLE `p_inscripcion`
  ADD CONSTRAINT `fk_curso_inscripcion` FOREIGN KEY (`id_curso`) REFERENCES `p_curso` (`id_curso`),
  ADD CONSTRAINT `fk_persona_inscripcion` FOREIGN KEY (`id_persona`) REFERENCES `p_persona` (`id_persona`),
  ADD CONSTRAINT `fk_tipo_inscripcion` FOREIGN KEY (`id_tipo_inscripcion`) REFERENCES `p_tipo_inscripcion` (`id_tipo_inscripcion`);

--
-- Filtros para la tabla `p_persona`
--
ALTER TABLE `p_persona`
  ADD CONSTRAINT `p_persona_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `p_usuario` (`id_usuario`);

--
-- Filtros para la tabla `p_role_usuario`
--
ALTER TABLE `p_role_usuario`
  ADD CONSTRAINT `p_role_usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `p_usuario` (`id_usuario`),
  ADD CONSTRAINT `p_role_usuario_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `p_roles` (`id_rol`);

--
-- Filtros para la tabla `p_tipo_egreso`
--
ALTER TABLE `p_tipo_egreso`
  ADD CONSTRAINT `tipo_egreso_ibfk_1` FOREIGN KEY (`id_egreso`) REFERENCES `p_egresos` (`id_egreso`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `p_tipo_ingreso`
--
ALTER TABLE `p_tipo_ingreso`
  ADD CONSTRAINT `tipo_ingreso_ibfk_1` FOREIGN KEY (`id_ingreso`) REFERENCES `p_ingresos` (`id_ingreso`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;










/*llenado de iglesia borrar luego*/
insert into p_usuario values(1,'santi','1234','10-10-10','3','N');
insert into p_usuario values(1010,'bernardo','12345','10-10-10','202020','N');
insert into p_usuario values(120,'fernando','123465','10-10-10','1020','N');

insert into p_sacramento values(1,'bautizo','N');
insert into p_sacramento values(2,'comunion','N');
insert into p_sacramento values(3,'confirmacion','N');

insert into p_tipo_curso values(23,'cursillo','N');
insert into p_tipo_curso values(24,'catequesis','N');


insert into p_curso values(1,2,null,23,'10-10-10','11-10-10','preparacion para realizar clases de comunion',1,NOW(),'N','preparacion comunion');
insert into p_curso values(1,1,null,23,'10-10-10','11-10-10','preparacion para realizar un bautzo',1,NOW(),'N','preparacion bautizo');
insert into p_curso values(1,2,null,23,'10-10-10','11-10-10','preparacion para realizar clases comunion',1,NOW(),'N','preparacion comunion');
insert into p_curso values(1,2,null,24,'11-9-11','12-8-12','catequesis para prepararse para la comunion',1,NOW(),'N','preparacion para comunion');
insert into p_curso values(1,3,null,24,'11-5-12','12-6-23','catequesis para prepararse para la confirmacion',1,NOW(),'N','preparacion para confirmacion');
insert into p_curso values(1,3,null,24,'11-7-5','12-8-23','catequesis para prepararse para la confirmacion',1,NOW(),'N','preparacion para confirmacion');
insert into p_curso values(1,3,null,23,'11-7-5','12-7-4','preparacion para realizar clases confirmacion',1,NOW(),'N','preparacion confirmacion');
insert into p_curso values(1,1,null,23,'11-8-6','12-8-5','preparacion para realizar un bautzo',1,NOW(),'N','preparacion bautizo');
insert into p_curso values(1,3,null,24,'11-10-2','12-10-6','catequesis para prepararse para la confirmacion',1,NOW(),'N','preparacion para confirmacion');


insert into p_persona values(1234,'federico','colquewanka','lowrence','10-10-10','tarija','12344321','M','tarija', 'tarija'
,'tarija','11112222','66111222','a@gmail.com',1,1,now(),'N');

insert into p_tipo_inscripcion values(556,'preparacion para comunion','N');

insert into p_inscripcion values(1234,0,'N','10-10-10',556,1,NOW(),'N');
 
insert into p_tipo_evento values(1,'misa','N');
insert into p_tipo_evento values(2, "Visita", "N");
insert into p_tipo_evento values(3, "viaje", "N");

INSERT INTO p_evento (id_usuario,id_tipo_evento,descripcion_de_evento,lugar,fecha_inicio,fecha_finalizacion,id_usuario_reg,fecha_reg,borrado,titulo_evento)
VALUES (1010,1,"evento 1","Tarija","2021-9-15","2022-1-15",1010,NOW(),"N","Misa 1");
INSERT INTO p_evento (id_usuario,id_tipo_evento,descripcion_de_evento,lugar,fecha_inicio,fecha_finalizacion,id_usuario_reg,fecha_reg,borrado,titulo_evento)
VALUES (1010,1,"evento 2","Tarija","2022-10-10","2022-11-11",1010,NOW(),"N","Misa 2");
INSERT INTO p_evento (id_usuario,id_tipo_evento,descripcion_de_evento,lugar,fecha_inicio,fecha_finalizacion,id_usuario_reg,fecha_reg,borrado,titulo_evento)
VALUES (1010,1,"evento 3","Tarija","2022-10-10","2022-11-11",1010,NOW(),"N","Misa 3");
INSERT INTO p_evento (id_usuario,id_tipo_evento,descripcion_de_evento,lugar,fecha_inicio,fecha_finalizacion,id_usuario_reg,fecha_reg,borrado,titulo_evento)
VALUES (1010,1,"evento 4","Tarija","2022-10-10","2022-11-11",1010,NOW(),"N","Misa 4");
INSERT INTO p_evento (id_usuario,id_tipo_evento,descripcion_de_evento,lugar,fecha_inicio,fecha_finalizacion,id_usuario_reg,fecha_reg,borrado,titulo_evento)
VALUES (1010,1,"evento 5","Tarija","2022-10-10","2022-11-11",1010,NOW(),"N","Misa 5");
INSERT INTO p_evento (id_usuario,id_tipo_evento,descripcion_de_evento,lugar,fecha_inicio,fecha_finalizacion,id_usuario_reg,fecha_reg,borrado,titulo_evento)
VALUES (1010,1,"evento 6","Tarija","2022-10-10","2022-11-11",1010,NOW(),"N","Misa 6");
INSERT INTO p_evento (id_usuario,id_tipo_evento,descripcion_de_evento,lugar,fecha_inicio,fecha_finalizacion,id_usuario_reg,fecha_reg,borrado,titulo_evento)
VALUES (1010,1,"evento 7","Tarija","2022-10-10","2022-11-11",1010,NOW(),"N","Misa 7");
INSERT INTO p_evento (id_usuario,id_tipo_evento,descripcion_de_evento,lugar,fecha_inicio,fecha_finalizacion,id_usuario_reg,fecha_reg,borrado,titulo_evento)
VALUES (1010,1,"evento 8","Tarija","2022-10-10","2022-11-11",1010,NOW(),"N","Misa 8");
INSERT INTO p_evento (id_usuario,id_tipo_evento,descripcion_de_evento,lugar,fecha_inicio,fecha_finalizacion,id_usuario_reg,fecha_reg,borrado,titulo_evento)
VALUES (1010,1,"evento 9","Tarija","2022-10-10","2022-11-11",1010,NOW(),"N","Misa 9");
