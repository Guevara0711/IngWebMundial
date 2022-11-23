CREATE DATABASE IngWebMundial_db;

USE IngWebMundial_db;

CREATE TABLE usuarios (
  id_usuario INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(50) NOT NULL,
  correo VARCHAR(50) NOT NULL,
  contrasena VARCHAR(50) NOT NULL,
  rol VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_usuario)
);

INSERT INTO
  usuarios (nombre, correo, contrasena, rol)
VALUES
  ('Samuel', 'samuel@live.com', '1234', 'admin');