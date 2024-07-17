CREATE DATABASE encuesta_profesor;
USE encuesta_profesor;

CREATE TABLE profesores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

CREATE TABLE criterios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR(255) NOT NULL
);

CREATE TABLE respuestas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    profesor_id INT NOT NULL,
    criterio_id INT NOT NULL,
    respuesta INT NOT NULL,
    comentario TEXT,
    FOREIGN KEY (profesor_id) REFERENCES profesores(id) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (criterio_id) REFERENCES criterios(id) ON UPDATE CASCADE ON DELETE CASCADE
);
