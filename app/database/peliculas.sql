CREATE DATABASE examen_peliculas;
USE examen_peliculas;

CREATE TABLE peliculas (
    pelicula_id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150),
    director VARCHAR(100),
    anio INT,
    clasificacion VARCHAR(10)
);
