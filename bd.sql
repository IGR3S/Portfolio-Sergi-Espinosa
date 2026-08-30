DROP DATABASE IF EXISTS portfolio_sergi;

CREATE DATABASE portfolio_sergi
  DEFAULT CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE portfolio_sergi;

CREATE TABLE proyectos (
  id_proyecto INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  tipo VARCHAR(100) NOT NULL,
  texto TEXT NOT NULL,
  imagen VARCHAR(255) NOT NULL,
  orden_visual INT NOT NULL DEFAULT 0
) ENGINE=InnoDB;

CREATE TABLE tecnologias (
  id_tecnologia INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL UNIQUE
) ENGINE=InnoDB;

CREATE TABLE proyecto_tecnologia (
  id_proyecto INT NOT NULL,
  id_tecnologia INT NOT NULL,
  PRIMARY KEY (id_proyecto, id_tecnologia),

  CONSTRAINT fk_proyecto_tecnologia_proyecto
    FOREIGN KEY (id_proyecto) REFERENCES proyectos(id_proyecto)
    ON DELETE CASCADE,

  CONSTRAINT fk_proyecto_tecnologia_tecnologia
    FOREIGN KEY (id_tecnologia) REFERENCES tecnologias(id_tecnologia)
    ON DELETE CASCADE
) ENGINE=InnoDB;

INSERT INTO tecnologias (nombre) VALUES
('HTML'),
('CSS'),
('PHP'),
('JavaScript'),
('Shopify');
