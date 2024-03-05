-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-02-2024 a las 17:45:27
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `daw_m12_app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empleados`
--

CREATE TABLE `tbl_empleados` (
  `id_empleado_PK` int(11) NOT NULL,
  `primer_nombre` varchar(20) NOT NULL,
  `segundo_nombre` varchar(20) DEFAULT NULL,
  `primer_apellido` varchar(20) NOT NULL,
  `segundo_apellido` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `id_puesto_FK` int(11) NOT NULL,
  `id_jefe_dpto_FK` int(11) NOT NULL,
  `CV` varchar(100) DEFAULT NULL,
  `mail_empleado` varchar(50) NOT NULL,
  `password_empleado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_empleados`
--

INSERT INTO `tbl_empleados` (`id_empleado_PK`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `foto`, `fecha_ingreso`, `id_puesto_FK`, `id_jefe_dpto_FK`, `CV`, `mail_empleado`, `password_empleado`) VALUES
(1, 'Alejandro', 'José', 'García', 'López', '1686756075_GarcíaLópez_AlejandroJosé_foto.jpg', '2021-10-28', 1, 1, '1686756075_GarcíaLópez_AlejandroJosé_cv.pdf', 'alejandro_desarrollo@gmail.com', 'alejandro'),
(2, 'María', 'Fernanda', 'Torres', 'Ruiz', '1686756203_TorresRuiz_MaríaFernanda_foto.jpg', '2020-07-29', 2, 1, '1686756203_TorresRuiz_MaríaFernanda_cv.pdf', 'maria_desarrollo@gmail.com', 'maria'),
(3, 'Carlos', 'Andrés', 'Rodríguez', 'Sánchez', '1686756464_RodríguezSánchez_CarlosAndrés_foto.jpg', '2021-09-26', 3, 1, '1686756464_RodríguezSánchez_CarlosAndrés_cv.pdf', 'carlos_desarrollo@gmail.com', 'carlos'),
(4, 'Laura', 'Victoria', 'López', 'Martínez', '1686756580_LópezMartínez_LauraVictoria_foto.jpg', '2021-09-21', 4, 2, '1686756580_LópezMartínez_LauraVictoria_cv.pdf', 'laura_diseño@gmail.com', 'laura'),
(5, 'Juan', 'Manuel', 'González', 'Herrera', '1686756654_GonzálezHerrera_JuanManuel_foto.jpg', '2019-07-27', 5, 2, '1686756654_GonzálezHerrera_JuanManuel_cv.pdf', 'juan_diseño@gmail.com', 'juan'),
(6, 'Sofía', 'Isabel', 'Pérez', 'Gómez', '1686756715_PérezGómez_SofíaIsabel_foto.jpg', '2020-04-05', 6, 2, '1686756715_PérezGómez_SofíaIsabel_cv.pdf', 'sofia_diseño@gmail.com', 'sofia'),
(7, 'Andrés', 'Antonio', 'Martín', 'Hernández', '1686756972_MartínHernández_AndrésAntonio_foto.jpg', '2019-09-08', 7, 3, '1686756972_MartínHernández_AndrésAntonio_cv.pdf', 'andres_maketing@gmail.com', 'andres'),
(8, 'David', 'Alejandro', 'Silva', 'García', '1686757042_SilvaGarcía_DavidAlejandro_foto.jpg', '2021-04-18', 8, 3, '1686757042_SilvaGarcía_DavidAlejandro_cv.pdf', 'david_maketing@gmail.com', 'david'),
(9, 'Adrián', 'Alonso', 'Mendoza', 'Vargas', '1686757102_MendozaVargas_AdriánAlonso_foto.jpg', '2019-05-14', 9, 3, '1686757102_MendozaVargas_AdriánAlonso_cv.pdf', 'adrian_marketing@gmail.com', 'adrian'),
(24, 'aaa', 'aaa', 'bbb', 'bbb', '1707323243_bbbbbb_aaaaaa_foto.jpg', '2023-11-02', 1, 1, '1707258265_ccc ccc_bbbbbb_cv.pdf', 'test@gamil.com', 'test');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_jefes_dptos`
--

CREATE TABLE `tbl_jefes_dptos` (
  `id_jefe_dpto_PK` int(11) NOT NULL,
  `nombre_dpto` varchar(40) NOT NULL,
  `primer_nombre` varchar(20) NOT NULL,
  `segundo_nombre` varchar(20) DEFAULT NULL,
  `primer_apellido` varchar(20) NOT NULL,
  `segundo_apellido` varchar(20) NOT NULL,
  `foto` varchar(60) NOT NULL,
  `mail_dpto` varchar(50) NOT NULL,
  `password_dpto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_jefes_dptos`
--

INSERT INTO `tbl_jefes_dptos` (`id_jefe_dpto_PK`, `nombre_dpto`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `foto`, `mail_dpto`, `password_dpto`) VALUES
(1, 'Departamento de Desarrollo', 'Juan', 'Carlos ', 'González', 'Ruiz', 'JuanCarlos_GonzalezRuiz_foto.jpg', 'dpto_desarrollo@gmail.com', 'desarrollo'),
(2, 'Departamento de Diseño', 'Laura', 'María', 'Martínez', 'Pérez', 'LauraMaria_MartinezPerez_foto.jpg', 'dpto_diseño@gmail.com', 'diseño'),
(3, 'Departamento de Marketing y Ventas', 'Luis', 'Alejandro', 'Sánchez', 'López', 'LuisAlejandro_SanchezLopez_foto.jpg', 'dpto_marketing@gmail.com', 'marketing');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_puestos`
--

CREATE TABLE `tbl_puestos` (
  `id_puesto_PK` int(11) NOT NULL,
  `nombre_puesto` varchar(50) NOT NULL,
  `id_jefe_dpto_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_puestos`
--

INSERT INTO `tbl_puestos` (`id_puesto_PK`, `nombre_puesto`, `id_jefe_dpto_FK`) VALUES
(1, 'Desarrollador Web Front-end', 1),
(2, 'Desarrollador Web Back-end', 1),
(3, 'Especialista en Experiancia de Usuario (UX)', 1),
(4, 'Diseñador Gráfico', 2),
(5, 'Diseñador de Interfaz de Usuario (UI)', 2),
(6, 'Ilustrador Web', 2),
(7, 'Especialista en Marketing Digital', 3),
(8, 'Analista SEO', 3),
(9, 'Gestor de RRSS', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tareas`
--

CREATE TABLE `tbl_tareas` (
  `id_tarea_PK` int(11) NOT NULL,
  `nombre_tarea` varchar(255) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  `estado_tarea` int(11) NOT NULL,
  `id_empleado_FK` int(11) NOT NULL,
  `id_jefe_dpto_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_tareas`
--

INSERT INTO `tbl_tareas` (`id_tarea_PK`, `nombre_tarea`, `fecha_inicio`, `fecha_entrega`, `estado_tarea`, `id_empleado_FK`, `id_jefe_dpto_FK`) VALUES
(1, 'Desarrollar y mantener la interfaz de usuario de sitios web y aplicaciones', '2023-02-25', '2023-11-28', 2, 1, 1),
(2, 'Optimizar la velocidad y el rendimiento de la interfaz de usuario', '2023-01-30', '2023-12-31', 0, 1, 1),
(3, 'Colaborar con el equipo de diseño para implementar el diseño visual', '2023-01-31', '2023-12-31', 1, 1, 1),
(4, 'Desarrollar y mantener la lógica y funcionalidad del servidor y la base de datos', '2023-01-31', '2023-12-31', 2, 2, 1),
(5, 'Implementar la seguridad y autenticación de usuarios en la aplicación.', '2023-02-27', '2023-12-31', 0, 2, 1),
(6, 'Optimizar el rendimiento y la escalabilidad del backend', '2023-03-26', '2023-12-01', 1, 2, 1),
(7, 'Realizar investigación de usuarios y análisis de requisitos', '2023-03-31', '2023-10-31', 0, 3, 1),
(8, 'Diseñar wireframes, prototipos y flujos de interacción para mejorar la usabilidad y la experiencia de usuario.', '2023-03-31', '2023-12-31', 0, 3, 1),
(9, 'Realizar pruebas de usabilidad y recopilar feedback de los usuarios', '2023-03-30', '2023-12-01', 1, 3, 1),
(10, 'Crear diseños visuales atractivos y efectivos para su uso en sitios web', '2023-01-28', '2023-12-31', 2, 4, 2),
(11, 'Desarrollar la identidad visual de una marca, incluyendo logotipos, paletas de colores y tipografías.', '2023-01-31', '2023-12-31', 1, 4, 2),
(12, 'Colaborar con el equipo de desarrollo para asegurar que el diseño se implemente correctamente en la interfaz de usuario.', '2023-01-31', '2023-12-31', 1, 4, 2),
(13, 'Diseñar interfaces de usuario intuitivas y atractivas para sitios web y aplicaciones.', '2023-01-31', '2022-12-01', 2, 5, 2),
(14, 'Crear wireframes y prototipos interactivos para visualizar y probar el diseño.', '2023-01-31', '2023-12-31', 0, 5, 2),
(15, 'Trabajar en estrecha colaboración con el equipo de desarrollo para garantizar la implementación adecuada del diseño en la interfaz de usuario.', '2023-01-31', '2023-12-31', 0, 5, 2),
(16, 'Crear ilustraciones y gráficos personalizados para su uso en sitios web y aplicaciones.', '2023-01-31', '2023-12-31', 1, 6, 2),
(17, 'Desarrollar ilustraciones que se ajusten al estilo visual y la identidad de la marca.', '2023-01-31', '2023-12-31', 1, 6, 2),
(18, 'Colaborar con el equipo de diseño para integrar las ilustraciones en la interfaz de usuario y mejorar la estética del sitio o la aplicación.', '2023-01-31', '2023-12-31', 1, 6, 2),
(19, 'Desarrollar estrategias de marketing digital para promover productos o servicios en línea.', '2023-01-31', '2023-12-31', 0, 7, 3),
(20, 'Gestionar campañas publicitarias en plataformas digitales, como redes sociales y motores de búsqueda.', '2023-01-31', '2023-12-31', 1, 7, 3),
(21, 'Analizar datos y métricas para evaluar el rendimiento de las campañas y realizar ajustes para mejorar los resultados.', '2023-03-31', '2023-12-31', 2, 7, 3),
(22, 'Realizar análisis de palabras clave y optimizar el contenido de sitios web para mejorar su visibilidad en los motores de búsqueda.', '2023-03-31', '2023-12-31', 1, 8, 3),
(23, 'Realizar auditorías de sitios web para identificar oportunidades de mejora en términos de SEO.', '2023-03-31', '2024-01-01', 1, 8, 3),
(24, 'Monitorizar y analizar métricas SEO para evaluar el rendimiento y proponer estrategias de mejora.', '2023-01-30', '2023-12-31', 2, 8, 3),
(25, 'Crear y planificar contenido relevante y atractivo para las redes sociales de una empresa o marca.', '2023-01-31', '2023-12-31', 1, 9, 3),
(26, 'Gestionar y monitorear las cuentas de redes sociales, interactuando con los seguidores y respondiendo a comentarios y consultas.', '2023-03-31', '2023-12-31', 1, 9, 3),
(27, 'Analizar métricas y resultados en redes sociales para evaluar el rendimiento y realizar ajustes en la estrategia de gestión de redes sociales.', '2023-01-31', '2023-12-31', 2, 9, 3),
(28, 'testupdate', '2022-10-29', '2022-09-28', 2, 24, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_empleados`
--
ALTER TABLE `tbl_empleados`
  ADD PRIMARY KEY (`id_empleado_PK`),
  ADD UNIQUE KEY `foto_unique` (`foto`),
  ADD UNIQUE KEY `CV_unique` (`CV`),
  ADD UNIQUE KEY `mail_empleado_unique` (`mail_empleado`),
  ADD UNIQUE KEY `password_empleado_unique` (`password_empleado`),
  ADD KEY `id_puesto_FK` (`id_puesto_FK`),
  ADD KEY `id_jefe_dpto_FK` (`id_jefe_dpto_FK`);

--
-- Indices de la tabla `tbl_jefes_dptos`
--
ALTER TABLE `tbl_jefes_dptos`
  ADD PRIMARY KEY (`id_jefe_dpto_PK`),
  ADD UNIQUE KEY `nombre_dpto_unique` (`nombre_dpto`),
  ADD UNIQUE KEY `foto_unique` (`foto`),
  ADD UNIQUE KEY `mail_dpto_unique` (`mail_dpto`),
  ADD UNIQUE KEY `password_dpto_unique` (`password_dpto`);

--
-- Indices de la tabla `tbl_puestos`
--
ALTER TABLE `tbl_puestos`
  ADD PRIMARY KEY (`id_puesto_PK`),
  ADD UNIQUE KEY `nombre_puesto_unique` (`nombre_puesto`),
  ADD KEY `id_jefe_dpto_FK` (`id_jefe_dpto_FK`);

--
-- Indices de la tabla `tbl_tareas`
--
ALTER TABLE `tbl_tareas`
  ADD PRIMARY KEY (`id_tarea_PK`),
  ADD UNIQUE KEY `nombre_tarea_unique` (`nombre_tarea`),
  ADD KEY `id_empleado_FK` (`id_empleado_FK`),
  ADD KEY `id_jefe_dpto_FK_FK` (`id_jefe_dpto_FK`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_empleados`
--
ALTER TABLE `tbl_empleados`
  MODIFY `id_empleado_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tbl_jefes_dptos`
--
ALTER TABLE `tbl_jefes_dptos`
  MODIFY `id_jefe_dpto_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_puestos`
--
ALTER TABLE `tbl_puestos`
  MODIFY `id_puesto_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tbl_tareas`
--
ALTER TABLE `tbl_tareas`
  MODIFY `id_tarea_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_empleados`
--
ALTER TABLE `tbl_empleados`
  ADD CONSTRAINT `tbl_empleados_ibfk_1` FOREIGN KEY (`id_puesto_FK`) REFERENCES `tbl_puestos` (`id_puesto_PK`),
  ADD CONSTRAINT `tbl_empleados_ibfk_2` FOREIGN KEY (`id_jefe_dpto_FK`) REFERENCES `tbl_jefes_dptos` (`id_jefe_dpto_PK`);

--
-- Filtros para la tabla `tbl_puestos`
--
ALTER TABLE `tbl_puestos`
  ADD CONSTRAINT `id_jefe_dpto_FK` FOREIGN KEY (`id_jefe_dpto_FK`) REFERENCES `tbl_jefes_dptos` (`id_jefe_dpto_PK`);

--
-- Filtros para la tabla `tbl_tareas`
--
ALTER TABLE `tbl_tareas`
  ADD CONSTRAINT `id_jefe_dpto_FK_FK` FOREIGN KEY (`id_jefe_dpto_FK`) REFERENCES `tbl_jefes_dptos` (`id_jefe_dpto_PK`),
  ADD CONSTRAINT `tbl_tareas_ibfk_1` FOREIGN KEY (`id_empleado_FK`) REFERENCES `tbl_empleados` (`id_empleado_PK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
