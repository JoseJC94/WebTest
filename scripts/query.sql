CREATE DATABASE WebTest;

CREATE TABLE Estudiantes (
                             id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                             nombre VARCHAR(30) NULL,
                             edad INT(3) NULL,
                             universidad INT(2) NOT NULL
);

CREATE TABLE Universidades (
                               id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                               nombre VARCHAR(30) NOT NULL
);

INSERT INTO Estudiantes (nombre, edad, universidad) VALUES ('Pedro', 22, 'UNA');
INSERT INTO Estudiantes (nombre, edad, universidad) VALUES ('Maria', 29, 'UCR');
INSERT INTO Estudiantes (nombre, edad, universidad) VALUES ('Julio', 35, 'TEC');
INSERT INTO Estudiantes (nombre, edad, universidad) VALUES ('Karla', 19, 'UCR');