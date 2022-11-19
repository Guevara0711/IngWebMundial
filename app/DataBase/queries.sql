
CREATE DATABASE Mundial;

USE Mundial;

CREATE TABLE usuarios (
id_usuario INT NOT NULL AUTO_INCREMENT,
nombre VARCHAR(50) NOT NULL,
correo VARCHAR(50) NOT NULL,
contraseña VARCHAR(50) NOT NULL,
rol VARCHAR(50) NOT NULL,
PRIMARY KEY (id_usuario)
);


INSERT INTO usuarios (nombre, correo, contraseña, rol) VALUES ('Samuel', 'Samuel@live.com', '1234', 'admin');




