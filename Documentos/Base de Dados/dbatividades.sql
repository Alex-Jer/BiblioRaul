CREATE DATABASE dbatividades;

USE dbatividades;

CREATE TABLE user (
  id int AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  PASSWORD varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE outros_espectadores (
  id int AUTO_INCREMENT,
  descricao varchar(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE LOCAL (
  id int AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  espaco int,
  PRIMARY KEY (id)
);

CREATE TABLE recurso (
  id int AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  quantidade int,
  PRIMARY KEY (id)
);

CREATE TABLE professor (
  id int AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE turma (
  id int AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE atividade (
  id int AUTO_INCREMENT,
  user_id int NOT NULL,
  local_id int NOT NULL,
  inicio datetime NOT NULL,
  fim datetime,
  descricao varchar(255) NOT NULL,
  notas varchar(255),
  numero_alunos int,
  FOREIGN KEY (local_id) REFERENCES LOCAL (id),
  FOREIGN KEY (user_id) REFERENCES USER (id),
  PRIMARY KEY (id)
);

CREATE TABLE recursos_necessarios (
  recurso_id int,
  atividade_id int,
  quantidade int,
  FOREIGN KEY (recurso_id) REFERENCES recurso (id),
  FOREIGN KEY (atividade_id) REFERENCES atividade (id),
  PRIMARY KEY (recurso_id, atividade_id)
);

CREATE TABLE professor_atividade (
  professor_id int,
  atividade_id int,
  FOREIGN KEY (professor_id) REFERENCES professor (id),
  FOREIGN KEY (atividade_id) REFERENCES atividade (id),
  PRIMARY KEY (professor_id, atividade_id)
);

CREATE TABLE turma_atividade (
  turma_id int,
  atividade_id int,
  FOREIGN KEY (turma_id) REFERENCES turma (id),
  FOREIGN KEY (atividade_id) REFERENCES atividade (id),
  PRIMARY KEY (turma_id, atividade_id)
);

CREATE TABLE outros_espectadores_atividade (
  outros_espectadores_id int,
  atividade_id int,
  FOREIGN KEY (outros_espectadores_id) REFERENCES outros_espectadores (id),
  FOREIGN KEY (atividade_id) REFERENCES atividade (id),
  PRIMARY KEY (outros_espectadores_id, atividade_id)
);