# DROP DATABASE SISWEB_BBDD01;
-- -----------------------------------------------------
-- Estructura SISWEB_BBDD
-- -----------------------------------------------------
CREATE SCHEMA SISWEB_BBDD01 DEFAULT CHARACTER SET utf8 ;
USE SISWEB_BBDD01;

-- -----------------------------------------------------
-- Tabla CREDENTIALS
-- -----------------------------------------------------
CREATE TABLE CREDENTIALS (
  codigo_user INT NOT NULL,
  pass_user VARCHAR(50) NOT NULL,
  PRIMARY KEY (codigo_user)
) ENGINE = InnoDB;

INSERT INTO CREDENTIALS VALUES 
(7318924, "12345678"),
(8632542, "87654321");