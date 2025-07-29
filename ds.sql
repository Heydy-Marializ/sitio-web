CREATE DATABASE desarrollo_social;
USE desarrollo_social;

CREATE TABLE beneficiarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    dni VARCHAR(8),
    direccion VARCHAR(150),
    telefono VARCHAR(15),
    programa_id INT,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE programas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    descripcion TEXT
);

CREATE TABLE solicitudes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    email VARCHAR(100),
    mensaje TEXT,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50),
    clave VARCHAR(100)
);
INSERT INTO programas (nombre) VALUES 
('Programa de Asistencia Alimentaria'),
('Programa de Desarrollo Infantil'),
('Programa de Apoyo a la Mujer'),
('Programa para Personas con Discapacidad'),
('Programa de Adulto Mayor');

ALTER TABLE beneficiarios ADD programa VARCHAR(100) NOT NULL;
