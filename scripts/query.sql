CREATE DATABASE WebTest;
USE  WebTest; 

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

INSERT INTO Universidades (nombre) VALUES ('UNA');
INSERT INTO Universidades (nombre) VALUES ('TEC');
INSERT INTO Universidades (nombre) VALUES ('UCR');

INSERT INTO Estudiantes (nombre, edad, universidad) VALUES ('Pedro', 22, 1);
INSERT INTO Estudiantes (nombre, edad, universidad) VALUES ('Maria', 29, 3);
INSERT INTO Estudiantes (nombre, edad, universidad) VALUES ('Julio', 35, 2);
INSERT INTO Estudiantes (nombre, edad, universidad) VALUES ('Karla', 19, 3);



-- 3- MySQL/PHP Data retrieval (30% : 5,5,20)

-- Create a query to find out which student is the oldest.
select nombre, edad
from Estudiantes
where edad = (select max(edad) from Estudiantes);


-- Create a query to find which students are from Universidad "UCR".
select Estudiantes.nombre AS Estudiante, Universidades.nombre AS Universidad 
from Estudiantes 
inner join Universidades on Estudiantes.universidad = Universidades.id 
where Universidades.nombre = "UCR";



