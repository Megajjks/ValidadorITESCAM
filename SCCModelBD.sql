--
-- ER/Studio 8.0 SQL Code Generation
-- Company :      Itescam
-- Project :      ModeloBD-IngSoft.DM1
-- Author :       Zona
--
-- Date Created : Thursday, April 11, 2019 16:41:06
-- Target DBMS : MySQL 5.x
--






-- 
-- TABLE: Contenido 
--

CREATE TABLE Contenido(
    id_Contenido            INT    AUTO_INCREMENT,
    Matricula_Estudiante    INT    NOT NULL,
    Matricula_Maestro       INT,
    id_Valoracion           INT,
    id_Unidad               INT,
    id_Materia              INT,
    PRIMARY KEY (id_Contenido, Matricula_Estudiante)
)ENGINE=MYISAM
;



-- 
-- TABLE: Criterios_Evaluacion 
--

CREATE TABLE Criterios_Evaluacion(
    id_Valoracion    INT    AUTO_INCREMENT,
    Original         INT,
    Comprensible     INT,
    Actual           INT,
    Tiempo           INT,
    Creativo         INT,
    Completo         INT,
    PRIMARY KEY (id_Valoracion)
)ENGINE=MYISAM
;



-- 
-- TABLE: Estudiante 
--

CREATE TABLE Estudiante(
    Matricula_Estudiante    INT            AUTO_INCREMENT,
    Nombre                  VARCHAR(30),
    Apellido                VARCHAR(30),
    Carrera                 VARCHAR(30),
    Semestre                INT,
    Parcial                 INT,
    Grupo                   CHAR(1),
    Password                VARCHAR(20),
    PRIMARY KEY (Matricula_Estudiante)
)ENGINE=MYISAM
;



-- 
-- TABLE: Maestro 
--

CREATE TABLE Maestro(
    Matricula_Maestro    INT            AUTO_INCREMENT,
    Nombre               VARCHAR(50),
    Apellido             VARCHAR(50),
    Password             VARCHAR(20),
    PRIMARY KEY (Matricula_Maestro)
)ENGINE=MYISAM
;



-- 
-- TABLE: Materia 
--

CREATE TABLE Materia(
    id_Materia    INT            AUTO_INCREMENT,
    Nombre        VARCHAR(30),
    Contenido     VARCHAR(30),
    Carrera       VARCHAR(30),
    PRIMARY KEY (id_Materia)
)ENGINE=MYISAM
;



-- 
-- TABLE: Unidad 
--

CREATE TABLE Unidad(
    id_Unidad    INT            AUTO_INCREMENT,
    Titulo       VARCHAR(30),
    SubUnidad    VARCHAR(30),
    PRIMARY KEY (id_Unidad)
)ENGINE=MYISAM
;



-- 
-- INDEX: Ref41 
--

CREATE INDEX Ref41 ON Contenido(Matricula_Estudiante)
;
-- 
-- INDEX: Ref62 
--

CREATE INDEX Ref62 ON Contenido(id_Valoracion)
;
-- 
-- INDEX: Ref53 
--

CREATE INDEX Ref53 ON Contenido(id_Unidad)
;
-- 
-- INDEX: Ref24 
--

CREATE INDEX Ref24 ON Contenido(id_Materia)
;
-- 
-- TABLE: Contenido 
--

ALTER TABLE Contenido ADD CONSTRAINT RefEstudiante12 
    FOREIGN KEY (Matricula_Estudiante)
    REFERENCES Estudiante(Matricula_Estudiante)
;

ALTER TABLE Contenido ADD CONSTRAINT RefCriterios_Evaluacion22 
    FOREIGN KEY (id_Valoracion)
    REFERENCES Criterios_Evaluacion(id_Valoracion)
;

ALTER TABLE Contenido ADD CONSTRAINT RefUnidad32 
    FOREIGN KEY (id_Unidad)
    REFERENCES Unidad(id_Unidad)
;

ALTER TABLE Contenido ADD CONSTRAINT RefMateria42 
    FOREIGN KEY (id_Materia)
    REFERENCES Materia(id_Materia)
;

ALTER TABLE Contenido ADD CONSTRAINT RefMaestro62 
    FOREIGN KEY (Matricula_Maestro)
    REFERENCES Maestro(Matricula_Maestro)
;


