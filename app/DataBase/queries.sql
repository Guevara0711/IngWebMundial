CREATE DATABASE  IF NOT EXISTS `ingweb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ingweb`;

UNLOCK TABLES;

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `roles` WRITE;

INSERT INTO `roles` VALUES (1, 'admin', 'Administrador');
INSERT INTO `roles` VALUES (2, 'user', 'Usuario');

UNLOCK TABLES;

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id_users` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `rol_id` int,
  PRIMARY KEY (`id_users`),
  CONSTRAINT FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'guevara07','12345612','Pedro','Castillo','pedro@live.com','1');
INSERT INTO `users` VALUES (2,'samuel00','12345612','Samuel','Nuñez','samuel@gmail.com','2');
INSERT INTO `users` VALUES (3,'roberto14','291402','Roberto','Cortez','robertito@gmail.com','1');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

CREATE TABLE `clasificacion` (
  `idClasificacion` int(11) NOT NULL,
  `idGrupo` int(5) NOT NULL,
  `idEquipo` int(5) DEFAULT NULL,
  `Puntos` int(5) DEFAULT NULL,
  `JJ` int(5) DEFAULT NULL,
  `JG` int(5) DEFAULT NULL,
  `JE` int(5) DEFAULT NULL,
  `JP` int(5) DEFAULT NULL,
  `GA` int(5) DEFAULT NULL,
  `GC` int(5) DEFAULT NULL,
  `DIF` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `clasificacion` WRITE;



UNLOCK TABLES;


CREATE TABLE `equipos` (
  `idEquipos` int(11) NOT NULL,
  `NombreEquipo` varchar(45) DEFAULT NULL,
  `idGrupo` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `equipos` WRITE;

INSERT INTO `equipos` (`idEquipos`, `NombreEquipo`, `idGrupo`) VALUES
(1, 'Qatar', 1),
(2, 'Ecuador', 1),
(3, 'Senegal', 1),
(4, 'Países Bajos', 1),
(5, 'Inglaterra', 2),
(6, 'Irán', 2),
(7, 'Estados Unidos', 2),
(8, 'Gales', 2),
(9, 'Argentina', 3),
(10, 'Arabia Saudita', 3),
(11, 'México', 3),
(12, 'Polonia', 3),
(13, 'Francia', 4),
(14, 'Australia', 4),
(15, 'Dinamarca', 4),
(16, 'Túnez', 4),
(17, 'España', 5),
(18, 'Costa Rica', 5),
(19, 'Alemania', 5),
(20, 'Japón', 5),
(21, 'Bélgica', 6),
(22, 'Canadá', 6),
(23, 'Marruecos', 6),
(24, 'Croacia', 6),
(25, 'Brasil', 7),
(26, 'Serbia', 7),
(27, 'Suiza', 7),
(28, 'Camerún', 7),
(29, 'Portugal', 8),
(30, 'Ghana', 8),
(31, 'Uruguay', 8),
(32, 'Corea del Sur', 8);

UNLOCK TABLES;

CREATE TABLE `estadios` (
  `idEstadios` int(11) NOT NULL,
  `NombreEstadio` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `estadios` WRITE;

INSERT INTO `estadios` (`idEstadios`, `NombreEstadio`) VALUES
(1, 'Estadio Al Bayt'),
(2, 'Estadio Internacional Jalifa'),
(3, 'Estadio Al Thumama'),
(4, 'Ahmed bin Ali Stadium'),
(5, 'Estadio Lusail'),
(6, 'Education City Stadium'),
(7, 'Stadium 974 - Ras Abu Aboud'),
(8, 'Al Janoub Stadium');

UNLOCK TABLES;

CREATE TABLE `grupos` (
  `idGrupos` int(11) NOT NULL,
  `NombreGrupo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `grupos` WRITE;

INSERT INTO `grupos` (`idGrupos`, `NombreGrupo`) VALUES
(1, 'Grupo A'),
(2, 'Grupo B'),
(3, 'Grupo C'),
(4, 'Grupo D'),
(5, 'Grupo E'),
(6, 'Grupo F'),
(7, 'Grupo G'),
(8, 'Grupo H');

UNLOCK TABLES;

CREATE TABLE `jugadores` (
  `idJugadores` int(11) NOT NULL,
  `idEquipo` int(5) DEFAULT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `resultados` (
  `idPartido` int(10) NOT NULL,
  `idEquipo1` int(3) NOT NULL,
  `idEquipo2` int(3) NOT NULL,
  `golesEquipo1` int(3) NOT NULL,
  `golesEquipo2` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `Estadio` int(5) NOT NULL,
  `hora` time(5) NOT NULL,
  `Grupo` int(5) NOT NULL,
  `Finalizado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `resultados` WRITE;

INSERT INTO `resultados` (`idPartido`, `idEquipo1`, `idEquipo2`, `golesEquipo1`, `golesEquipo2`, `fecha`, `Estadio`, `hora`, `Grupo`, `Finalizado`) VALUES
(2, 1, 2, 0, 1, '2022-11-20', 1, '17:00:00.00000', 1, NULL),
(4, 3, 4, 0, 0, '2022-11-20', 2, '17:00:00.00000', 1, NULL);

UNLOCK TABLES;

ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`idClasificacion`),
  ADD KEY `FK_idEquipo` (`idEquipo`),
  ADD KEY `FK_idGrupo` (`idGrupo`);


ALTER TABLE `equipos`
  ADD PRIMARY KEY (`idEquipos`),
  ADD KEY `FK_EquipoidGrupo` (`idGrupo`);

ALTER TABLE `estadios`
  ADD PRIMARY KEY (`idEstadios`);

ALTER TABLE `grupos`
  ADD PRIMARY KEY (`idGrupos`);

ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`idJugadores`),
  ADD KEY `FK_JugadorIDEquipo` (`idEquipo`);

ALTER TABLE `resultados`
  ADD PRIMARY KEY (`idPartido`),
  ADD KEY `FK_ResultIDEquipo1` (`idEquipo1`),
  ADD KEY `FK_ResultIDEquipo2` (`idEquipo2`),
  ADD KEY `FK_ResultIdEstadio` (`Estadio`),
  ADD KEY `FK_ResultGrupo` (`Grupo`);

ALTER TABLE `clasificacion`
  MODIFY `idClasificacion` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `estadios`
  MODIFY `idEstadios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `grupos`
  MODIFY `idGrupos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `resultados`
  MODIFY `idPartido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `clasificacion`
  ADD CONSTRAINT `FK_idEquipo` FOREIGN KEY (`idEquipo`) REFERENCES `equipos` (`idEquipos`),
  ADD CONSTRAINT `FK_idGrupo` FOREIGN KEY (`idGrupo`) REFERENCES `grupos` (`idGrupos`);

ALTER TABLE `equipos`
  ADD CONSTRAINT `FK_EquipoidGrupo` FOREIGN KEY (`idGrupo`) REFERENCES `grupos` (`idGrupos`);

ALTER TABLE `jugadores`
  ADD CONSTRAINT `FK_JugadorIDEquipo` FOREIGN KEY (`idEquipo`) REFERENCES `equipos` (`idEquipos`);

ALTER TABLE `resultados`
  ADD CONSTRAINT `FK_ResultGrupo` FOREIGN KEY (`Grupo`) REFERENCES `grupos` (`idGrupos`),
  ADD CONSTRAINT `FK_ResultIDEquipo1` FOREIGN KEY (`idEquipo1`) REFERENCES `equipos` (`idEquipos`),
  ADD CONSTRAINT `FK_ResultIDEquipo2` FOREIGN KEY (`idEquipo2`) REFERENCES `equipos` (`idEquipos`),
  ADD CONSTRAINT `FK_ResultIdEstadio` FOREIGN KEY (`Estadio`) REFERENCES `estadios` (`idEstadios`);
COMMIT;





