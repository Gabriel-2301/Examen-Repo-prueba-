
CREATE TABLE peliculas (
    pelicula_id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150),
    director VARCHAR(100),
    anio INT,
    clasificacion VARCHAR(10)
);

INSERT INTO peliculas (titulo, director, anio, clasificacion) VALUES
('El Padrino', 'Francis Ford Coppola', 1972, 'R'),
('Forrest Gump', 'Robert Zemeckis', 1994, 'PG-13'),
('Inception', 'Christopher Nolan', 2010, 'PG-13'),
('Titanic', 'James Cameron', 1997, 'PG-13'),
('Matrix', 'Lana Wachowski', 1999, 'R'),
('Gladiador', 'Ridley Scott', 2000, 'R'),
('El Rey León', 'Roger Allers', 1994, 'G'),
('Jurassic Park', 'Steven Spielberg', 1993, 'PG-13'),
('Avatar', 'James Cameron', 2009, 'PG-13'),
('La La Land', 'Damien Chazelle', 2016, 'PG-13'),
('El Señor de los Anillos', 'Peter Jackson', 2001, 'PG-13'),
('Pulp Fiction', 'Quentin Tarantino', 1994, 'R'),
('Toy Story', 'John Lasseter', 1995, 'G'),
('Interstellar', 'Christopher Nolan', 2014, 'PG-13'),
('Los Increíbles', 'Brad Bird', 2004, 'PG'),
('El Club de la Pelea', 'David Fincher', 1999, 'R'),
('Coco', 'Lee Unkrich', 2017, 'PG'),
('Avengers: Endgame', 'Anthony y Joe Russo', 2019, 'PG-13'),
('El Gran Gatsby', 'Baz Luhrmann', 2013, 'PG-13'),
('Spirited Away', 'Hayao Miyazaki', 2001, 'PG');

