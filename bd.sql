DROP DATABASE IF EXISTS portfolio_sergi;
DROP USER IF EXISTS 'admin'@'%';

CREATE DATABASE portfolio_sergi
  DEFAULT CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE portfolio_sergi;

CREATE TABLE proyectos (
  id_proyecto INT AUTO_INCREMENT PRIMARY KEY,
  nombre_proyecto VARCHAR(100) NOT NULL,
) ENGINE=InnoDB;

CREATE TABLE tecnologias (
  id_tecnologia INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL UNIQUE
) ENGINE=InnoDB;

INSERT INTO tecnologias (nombre) VALUES
('wordpress_elementor'),
('html_css'),
('js');

CREATE TABLE proyecto_tecnologia (
  id_proyecto INT NOT NULL,
  id_tecnologia INT NOT NULL,
  valor BOOLEAN DEFAULT FALSE,
  PRIMARY KEY (id_proyecto, id_tecnologia),
  FOREIGN KEY (id_proyecto) REFERENCES proyectos(id_proyecto),
  FOREIGN KEY (id_tecnologia) REFERENCES tecnologias(id_tecnologia)
) ENGINE=InnoDB;

INSERT INTO proyectos (nombre_proyecto, telefono_usuario)
VALUES ('Proyecto de prueba', '600000000');

INSERT INTO proyecto_tecnologia (id_proyecto, id_tecnologia, valor)
SELECT 1, id_tecnologia, TRUE
FROM tecnologias;

CREATE USER 'admin'@'%' IDENTIFIED BY 'seb241003';
GRANT ALL PRIVILEGES ON portfolio_sergi.* TO 'admin'@'%';
