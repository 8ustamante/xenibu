CREATE DATABASE Apuestas;

USE Apuestas;

CREATE TABLE Usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    correo VARCHAR(255) NOT NULL,
    nombre_usuario VARCHAR(255) NOT NULL,
    contraseña VARCHAR(255) NOT NULL,
    dinero DECIMAL(10,2) NOT NULL,
    total_apuestas INT DEFAULT 0,
    ranking INT DEFAULT 0,
    beneficio DECIMAL(10,2) DEFAULT 0.00,
    roi FLOAT DEFAULT 0.0,
    progresion FLOAT DEFAULT 0.0,
    tipo_cuenta ENUM('free', 'vip') DEFAULT 'free'
);

CREATE TABLE Apuestas (
    id_apuesta INT AUTO_INCREMENT,
    id_evento INT,
    nombre VARCHAR(255),
    fecha DATETIME,
    cuota DECIMAL(10,2),
    valor DECIMAL(10,2),
    tipo_apuesta VARCHAR(255),
    estado ENUM('pendiente', 'cancelado', 'ganada', 'rembolsado', 'perdida', 'mitad ganada', 'mitad perdida'),
    PRIMARY KEY (id_apuesta, id_evento)
);

DELIMITER //
CREATE TRIGGER actualizar_usuario AFTER INSERT ON Apuestas
FOR EACH ROW
BEGIN
    IF NEW.estado NOT IN ('pendiente', 'cancelado') THEN
        UPDATE Usuarios
        SET total_apuestas = total_apuestas + 1,
            beneficio = beneficio + (NEW.valor * NEW.cuota - NEW.valor),
            roi = (beneficio / (total_apuestas * valor)) * 100,
            progresion = (beneficio / dinero) * 100
        WHERE id_usuario = NEW.id_usuario;
    END IF;
END;//
DELIMITER ;
