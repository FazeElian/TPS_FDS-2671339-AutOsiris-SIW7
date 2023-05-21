/* ************************************************************************************* */
/* ---------------------------------------- DDL ---------------------------------------- */
/* ----------------------------- DATA DEFINITION LANGUAGE ------------------------------ */
/* -------------------------- LENGUAJE DE DEFINICIÓN DE DATOS -------------------------- */
/* ------------------------------------------------------------------------------------- */
/* ************************************************************************************* */
/* ------------------------------------------------------------------------------------- */
/* 01. Mostrar BBDDs : .................... SHOW DATABASES                               */
/* 02. Usar BBDD : ........................ USE __                                       */
/* 03. Eliminar BBDD : .................... DROP DATABASE __                             */
/* 04. Mostrar Tablas : ................... SHOW TABLES __.                              */
/* 05. Mostar Columnas : .................. SHOW COLUMNS FROM __ . DESCRIBE __           */
/* 06. Agregar Columna : .................. ALTER TABLE __ ADD __ __                     */
/* 07. Renombrar Columna : ................ ALTER TABLE __ CHANGE __ __                  */
/* 08. Eliminar Columna : ................. ALTER TABLE __ DROP __                       */
/* 09. Agregar Valor x Defecto Columna : .. ALTER TABLE __ ALTER __ SET DEFAULT __       */
/* 10. Eliminar Valor x Defecto Columna : . ALTER TABLE __ ALTER __ DROP DEFAULT         */
/* 11. Mostrar Creación Tabla : ........... SHOW CREATE TABLE __                         */
/* 12. Eliminar Restricción : ............. ALTER TABLE __ DROP CONSTRAINT __            */
/* 13. Eliminar Índice : .................. ALTER TABLE __ DROP INDEX __                 */
/* 14. Eliminar Llave Primaria : .......... ALTER TABLE __ DROP PRIMARY KEY              */
/* 15. Limpiar Registros : ................ TRUNCATE __                                  */
/* 16. Eliminar Tabla : ................... DROP TABLE __                                */
/* 17. Crear Tabla : ...................... CREATE TABLE __ ( __ , __ )                  */
/* 18. Renombrar Tabla : .................. RENAME TABLE __ TO __                        */
/* 19. Crear Llave Primaria : ............. ALTER TABLE __ ADD PRIMARY KEY ( __ )        */
/* 20. Crear Índice Campo : ............... CREATE INDEX __ ON __ ( __ )                 */
/* 21. Crear Índice Multicampo : .......... CREATE INDEX _ ON _ ( __ , __ )              */
/* 22. Crear Índice Único : ............... CREATE UNIQUE INDEX __ ON __ ( __ )          */
/* 23. Crear Restricción : ................ ALTER TABLE __ ADD CONSTRAINT __             */
/*     FOREIGN KEY ( __ ) REFERENCES __ ( __ ) ON DELETE CASCADE ON UPDATE CASCADE       */
/* ------------------------------------------------------------------------------------- */
/* BIBLIOGRAFÍA                                                                          */
/* ------------------------------------------------------------------------------------- */
/* ************************************************************************************* */
/* EN CONSOLA: XAMPP / SHELL / cd mysql/bin / mysql -h localhost -u root -p / ENTER      */
/* ************************************************************************************* */

-- ------------------------------------------------------------------------------------- --
-- 01. Mostrar BBDDs. ------------------------------------------------------------------ --
--     SHOW DATABASES : ---------------------------------------------------------------- -- 
-- ------------------------------------------------------------------------------------- --
SHOW DATABASES;

-- ------------------------------------------------------------------------------------- --
-- 02. Usar BBDD. ---------------------------------------------------------------------- --
--     USE __ : ------------------------------------------------------------------------ --
-- ------------------------------------------------------------------------------------- --
USE BBDD_INVENTARIO;

-- ------------------------------------------------------------------------------------- --
-- 03. Eliminar BBDD. ------------------------------------------------------------------ --
--     DROP DATABASE __ : -------------------------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
DROP DATABASE BBDD_INVENTARIO;

-- ------------------------------------------------------------------------------------- --
-- 04. Mostrar Tablas. ----------------------------------------------------------------- --
--     SHOW TABLES __ : ---------------------------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
SHOW TABLES;

-- ------------------------------------------------------------------------------------- --
-- 05. Mostar Columnas. ---------------------------------------------------------------- --
--     SHOW COLUMNS FROM __ . DESCRIBE __ : -------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
SHOW COLUMNS FROM USUARIOS;
DESCRIBE USUARIOS;

-- ------------------------------------------------------------------------------------- --
-- 06. Agregar Columna. ---------------------------------------------------------------- --
--     ALTER TABLE __ ADD __ __ : ------------------------------------------------------ --
-- ------------------------------------------------------------------------------------- --
ALTER TABLE USUARIOS ADD direccion_user DATE;

-- ------------------------------------------------------------------------------------- --
-- 07. Renombrar Columna. -------------------------------------------------------------- --
--     ALTER TABLE __ CHANGE __ __ : --------------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
ALTER TABLE USUARIOS CHANGE direccion_user user_direccion VARCHAR(100);

-- ------------------------------------------------------------------------------------- --
-- 08. Eliminar Columna. --------------------------------------------------------------- --
--     ALTER TABLE __ DROP __ : -------------------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
ALTER TABLE USUARIOS DROP user_direccion;

-- ------------------------------------------------------------------------------------- --
-- 09. Agregar Valor x Defecto Columna. ------------------------------------------------ --
--     ALTER TABLE __ ALTER __ SET DEFAULT __ :	---------------------------------------- --
-- ------------------------------------------------------------------------------------- --
ALTER TABLE USUARIOS ALTER codigo_rol SET DEFAULT 2;

-- ------------------------------------------------------------------------------------- --
-- 10. Eliminar Valor x Defecto Columna. ----------------------------------------------- --
--     ALTER TABLE __ ALTER __ DROP DEFAULT : ------------------------------------------ --
-- ------------------------------------------------------------------------------------- --
ALTER TABLE USUARIOS ALTER codigo_rol DROP DEFAULT;

-- ------------------------------------------------------------------------------------- --
-- 11. Mostrar Creación Tabla. --------------------------------------------------------- --
--     SHOW CREATE TABLE __ : ---------------------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
SHOW CREATE TABLE USUARIOS;
SHOW CREATE TABLE CREDENCIALES;
SHOW CREATE TABLE MENSAJES;

-- ------------------------------------------------------------------------------------- --
-- 12. Eliminar Restricción. ----------------------------------------------------------- --
--     ALTER TABLE __ DROP CONSTRAINT __ : --------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
ALTER TABLE USUARIOS DROP CONSTRAINT fk_usuario_rol;
ALTER TABLE MENSAJES DROP CONSTRAINT fk_mensaje_usuario;
ALTER TABLE CREDENCIALES DROP CONSTRAINT chk_evitarPersona;
ALTER TABLE CREDENCIALES DROP CONSTRAINT fk_credencial_usuario;
ALTER TABLE CLIENTES DROP CONSTRAINT chk_soloCliente;
ALTER TABLE CLIENTES DROP CONSTRAINT fk_cliente_credencial;
ALTER TABLE VENDEDORES DROP CONSTRAINT chk_soloVendedor;
ALTER TABLE VENDEDORES DROP CONSTRAINT fk_vendedor_credencial;

-- ------------------------------------------------------------------------------------- --
-- 13. Eliminar Índice. ---------------------------------------------------------------- --
--     ALTER TABLE __ DROP INDEX __ : -------------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
ALTER TABLE USUARIOS DROP INDEX ind_usuario_rol;
ALTER TABLE USUARIOS DROP INDEX uq_correo_user;
ALTER TABLE CREDENCIALES DROP INDEX ind_codigo_cred_identificacion_cred;
ALTER TABLE CREDENCIALES DROP INDEX ind_credencial_usuario;
ALTER TABLE CREDENCIALES DROP INDEX uq_identificacion_cred;

-- ------------------------------------------------------------------------------------- --
-- 14. Eliminar Llave Primaria. -------------------------------------------------------- --
--     ALTER TABLE __ DROP PRIMARY KEY : ----------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
ALTER TABLE USUARIOS DROP PRIMARY KEY;
ALTER TABLE CREDENCIALES DROP PRIMARY KEY;

-- ------------------------------------------------------------------------------------- --
-- 15. Limpiar Registros. -------------------------------------------------------------- --
--     TRUNCATE __ : ------------------------------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
TRUNCATE USUARIOS;

-- ------------------------------------------------------------------------------------- --
-- 16. Eliminar Tabla. ----------------------------------------------------------------- --
--     DROP TABLE __ : ----------------------------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
DROP TABLE USUARIOS;

-- ------------------------------------------------------------------------------------- --
-- 17. Crear Tabla. -------------------------------------------------------------------- --
--     CREATE TABLE __ ( __ , __ ) : --------------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
CREATE TABLE USUARIOS (  
  codigo_rol INT NOT NULL,
  codigo_user VARCHAR(10) NOT NULL,
  nombres_user VARCHAR(50) NOT NULL,
  apellidos_user VARCHAR(50) NOT NULL,
  correo_user VARCHAR(100) NOT NULL
);

-- ------------------------------------------------------------------------------------- --
-- 18. Renombrar Tabla. ---------------------------------------------------------------- --
--     RENAME TABLE __ TO __ : --------------------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
RENAME TABLE USUARIOS TO PERSONAS;
RENAME TABLE PERSONAS TO USUARIOS;

-- ------------------------------------------------------------------------------------- --
-- 19. Crear Llave Primaria. ----------------------------------------------------------- --
--     ALTER TABLE __ ADD PRIMARY KEY ( __ ) : ----------------------------------------- --
-- ------------------------------------------------------------------------------------- --
ALTER TABLE USUARIOS ADD PRIMARY KEY (codigo_user);
ALTER TABLE CREDENCIALES ADD PRIMARY KEY (codigo_cred);

-- ------------------------------------------------------------------------------------- --
-- 20. Crear Índice Campo. ------------------------------------------------------------- --
--     CREATE INDEX __ ON __ ( __ ) :  ------------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
CREATE INDEX ind_usuario_rol ON USUARIOS (codigo_rol);
CREATE INDEX ind_credencial_usuario ON CREDENCIALES (codigo_cred);

-- ------------------------------------------------------------------------------------- --
-- 21. Crear Índice Multicampo. -------------------------------------------------------- --
--     CREATE INDEX _ ON _ ( __ , __ ) : ----------------------------------------------- -- 
-- ------------------------------------------------------------------------------------- --
CREATE INDEX ind_codigo_cred_identificacion_cred
ON CREDENCIALES (codigo_cred, identificacion_cred);

-- ------------------------------------------------------------------------------------- --
-- 22. Crear Índice Único. ------------------------------------------------------------- --
--     CREATE UNIQUE INDEX __ ON __ ( __ ) : ------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
CREATE UNIQUE INDEX uq_correo_user ON USUARIOS (correo_user);
CREATE UNIQUE INDEX uq_identificacion_cred ON CREDENCIALES (identificacion_cred);

-- ------------------------------------------------------------------------------------- --
-- 23. Crear Restricción. -------------------------------------------------------------- --
--     ALTER TABLE __ ADD CONSTRAINT __ FOREIGN KEY ( __ ) REFERENCES __ ( __ ) -------- --
--     ON DELETE CASCADE ON UPDATE CASCADE : ------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
ALTER TABLE USUARIOS ADD 
CONSTRAINT fk_usuario_rol 
	FOREIGN KEY (codigo_rol)
	REFERENCES ROLES (codigo_rol)
	ON DELETE CASCADE
	ON UPDATE CASCADE;
ALTER TABLE MENSAJES ADD 
CONSTRAINT fk_mensaje_usuario 
	FOREIGN KEY (codigo_user)
	REFERENCES USUARIOS (codigo_user)
	ON DELETE CASCADE
	ON UPDATE CASCADE;
ALTER TABLE CREDENCIALES ADD 
CONSTRAINT chk_evitarPersona 
	CHECK (codigo_cred NOT LIKE '%person%');
ALTER TABLE CREDENCIALES ADD 
CONSTRAINT fk_credencial_usuario 
	FOREIGN KEY (codigo_cred)
	REFERENCES USUARIOS (codigo_user)
	ON DELETE CASCADE
	ON UPDATE CASCADE;
ALTER TABLE CLIENTES ADD
CONSTRAINT chk_soloCliente 
  CHECK (codigo_customer LIKE '%customer%'),
ALTER TABLE CLIENTES ADD 
CONSTRAINT fk_cliente_credencial 
	FOREIGN KEY (codigo_customer)
	REFERENCES CREDENCIALES (codigo_cred)
	ON DELETE CASCADE
	ON UPDATE CASCADE;
ALTER TABLE VENDEDORES ADD
CONSTRAINT chk_soloVendedor 
  CHECK (codigo_seller LIKE '%seller%'),
ALTER TABLE VENDEDORES ADD 
CONSTRAINT fk_vendedor_credencial 
	FOREIGN KEY (codigo_seller)
	REFERENCES CREDENCIALES (codigo_cred)
	ON DELETE CASCADE
	ON UPDATE CASCADE;
	

/* ************************************************************************************* */
/* ------------------------------------------------------------------------------------- */
/* ----------------------------------- BIBLIOGRAFÍA ------------------------------------ */
/* ------------------------------------------------------------------------------------- */
/* ************************************************************************************* */

-- ------------------------------------------------------------------------------------- --
-- Tutoriales de Programación ya. (s.f.). MySQL ya. Recuperado el 15 de Mayo de 2022,    --
--      de https://www.tutorialesprogramacionya.com/mysqlya/                             --
-- ------------------------------------------------------------------------------------- --
-- Pildoras Informáticas. (16 de Julio de 2015). Curso SQL.                              --
--      Recuperado el 16 de Abril de 2022, de [Archivo de Vídeo]                         --
--      https://www.youtube.com/playlist?list=PLU8oAlHdN5Bmx-LChV4K3MbHrpZKefNwn         --
--      página web                                                                       --
-- ------------------------------------------------------------------------------------- --