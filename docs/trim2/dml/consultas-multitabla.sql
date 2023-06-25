/* ************************************************************************************* */
/* ---------------------------------------- DML ---------------------------------------- */
/* ---------------------------- DATA MANIPULATION LANGUAGE ----------------------------- */
/* ------------------------- LENGUAJE DE MANIPULACIÓN DE DATOS ------------------------- */
/* -------------------------------- MULTITABLA / UNIÓN --------------------------------- */
/* ------------------------------------------------------------------------------------- */
/* ************************************************************************************* */
/* ------------------------------------------------------------------------------------- */
/* 1. CONSULTAS DE ACCIÓN [Inicio]                                                       */
/* 1.1. Crear una Tabla con Otra : ... CREATE TABLE _ SELECT _ FROM _ WHERE _ = _        */
/* 1.2. Insertar Datos Anexados : .... INSERT INTO _ SELECT _ FROM _                     */
/* 2. CONSULTAS DE SELECCIÓN                                                             */
/* 2.1. Unión Externa : .............. UNION, UNION ALL                                  */
/* 2.1.1. UNION : .................... SELECT _ FROM _ UNION SELECT _ FROM _             */
/* 2.1.2. UNION ALL : ................ SELECT _ FROM _ UNION ALL SELECT _ FROM _         */
/* 2.2. Unión Interna : .............. INNER JOIN, LEFT JOIN, RIGHT JOIN                 */
/* 2.2.1. INNER JOIN : ............... SELECT _ FROM _ INNER JOIN _ ON _._ = _._         */
/* 2.2.1.1. Con Repeticiones : ....... INNER JOIN                                        */
/* 2.2.1.2. Sin Repeticiones : ....... DISTINCT                                          */
/* 2.2.1.3. Condicionada : ........... WHERE, OPERADORES, ORDER BY                       */
/* 2.2.2. LEFT JOIN : ................ SELECT _ FROM _ LEFT JOIN _ ON _._ = _._          */
/* 2.2.2. RIGHT JOIN : ............... SELECT _ FROM _ RIGHT JOIN _ ON _._ = _._         */
/* 2.3. Subconsultas : ............... IN, NOT IN                                        */
/* 2.3.1. Escalonada : ............... SELECT _ FROM _ WHERE _ IN (SELECT _ FROM _ )     */
/* 2.3.2. Lista : .................... SELECT _ FROM _ WHERE _ IN (SELECT _ FROM _ )     */
/* 2.3.2. Correlacionada : ........... SELECT _ FROM _ WHERE _ IN (SELECT _ FROM _ )     */
/* 3. CONSULTAS DE ACCIÓN [Final]                                                        */
/* ------------------------------------------------------------------------------------- */
/* BIBLIOGRAFÍA                                                                          */
/* ------------------------------------------------------------------------------------- */
/* ************************************************************************************* */
/* EN CONSOLA: XAMPP / SHELL / cd mysql/bin / mysql -h localhost -u root -p / ENTER      */
/* ************************************************************************************* */


/* ************************************************************************************* */
/* ------------------------------ 1. CONSULTAS DE ACCIÓN ------------------------------- */
/* -------------------------------------- INICIO --------------------------------------- */
/* ************************************************************************************* */

-- ------------------------------------------------------------------------------------- --
-- 1.1. Crear una Tabla a partir de Otra. ---------------------------------------------- --
--      CREATE TABLE __ SELECT __ FROM __ WHERE __ = __ : ------------------------------ --
-- ------------------------------------------------------------------------------------- --
CREATE TABLE PEDIDOS_BOGOTA SELECT * FROM PEDIDOS
WHERE ciudad_pedido = 'Bogotá';

-- -------------------------------------------
DELETE FROM PEDIDOS 
WHERE ciudad_pedido = 'Bogotá';

-- ------------------------------------------------------------------------------------- --
-- 1.2. Datos Anexados. ---------------------------------------------------------------- --
--      INSERT INTO __ SELECT __ FROM __ : --------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
INSERT INTO PEDIDOS SELECT * FROM PEDIDOS_BOGOTA;
DROP TABLE PEDIDOS_BOGOTA;


/* ************************************************************************************* */
/* ----------------------------- 2. CONSULTAS DE SELECCIÓN ----------------------------- */
/* -------------------------- EXTERNA, INTERNA Y SUBCONSULTAS -------------------------- */
/* ************************************************************************************* */

-- ------------------------------------------------------------------------------------- --
-- 2.1. Unión Externa. ----------------------------------------------------------------- --
--      UNION, UNION ALL : ------------------------------------------------------------- --
-- ------------------------------------------------------------------------------------- --

-- ------------------------------------------------------------------------------------- --
-- 2.1.1. UNION. ----------------------------------------------------------------------- --
--        SELECT __ FROM __ UNION SELECT __ FROM __ : ---------------------------------- --
-- ------------------------------------------------------------------------------------- --
SELECT * FROM PRODUCTOS UNION 
SELECT * FROM PRODUCTOS_NUEVOS;

SELECT * FROM PRODUCTOS WHERE codigo_categoria = 2 UNION 
SELECT * FROM PRODUCTOS_NUEVOS WHERE codCat = 2;

SELECT * FROM PRODUCTOS WHERE precio_producto > 5000 UNION 
SELECT * FROM PRODUCTOS_NUEVOS WHERE codCat = 4 AND artPrec > 5000;

SELECT codigo_categoria, nombre_producto, precio_producto 
FROM PRODUCTOS WHERE precio_producto > 5000 UNION 
SELECT codCat, artNom, artPrec 
FROM PRODUCTOS_NUEVOS WHERE codCat = 4 AND artPrec > 5000;

-- ------------------------------------------------------------------------------------- --
-- 2.1.2. UNION ALL. ------------------------------------------------------------------- --
--        SELECT __ FROM __ UNION ALL SELECT __ FROM __ : ------------------------------ --
-- ------------------------------------------------------------------------------------- --
SELECT * FROM PRODUCTOS UNION ALL
SELECT * FROM PRODUCTOS_NUEVOS;


-- ------------------------------------------------------------------------------------- --
-- 2.2. Unión Interna. ----------------------------------------------------------------- --
--      INNER JOIN, LEFT JOIN, RIGHT JOIN : -------------------------------------------- --
-- ------------------------------------------------------------------------------------- --

-- ------------------------------------------------------------------------------------- --
-- 2.2.1. INNER JOIN. ------------------------------------------------------------------ --
--        SELECT __ FROM __ INNER JOIN __ ON __.__ = __.__ : --------------------------- --
-- ------------------------------------------------------------------------------------- --
SELECT * FROM CLIENTES INNER JOIN PEDIDOS
ON clientes.codigo_customer = pedidos.codigo_customer;

SELECT * FROM CREDENCIALES 
INNER JOIN CLIENTES
ON credenciales.codigo_cred = clientes.codigo_customer
INNER JOIN PEDIDOS
ON clientes.codigo_customer = pedidos.codigo_customer;

SELECT * FROM USUARIOS
INNER JOIN CREDENCIALES
ON usuarios.codigo_user = credenciales.codigo_cred 
INNER JOIN CLIENTES
ON credenciales.codigo_cred = clientes.codigo_customer
INNER JOIN PEDIDOS
ON clientes.codigo_customer = pedidos.codigo_customer;

SELECT * FROM USUARIOS 
INNER JOIN CREDENCIALES
ON usuarios.codigo_user = credenciales.codigo_cred
INNER JOIN PEDIDOS
ON credenciales.codigo_cred = pedidos.codigo_customer;

-- ------------------------------------------------------------------------------------- --
-- 2.2.1.1. Con repeticiones. ---------------------------------------------------------- --
--          SELECT __ FROM __ INNER JOIN __ ON __.__ = __.__ : ------------------------- --
-- ------------------------------------------------------------------------------------- --
## Consultar los Usuarios
SELECT R.codigo_rol, nombre_rol, codigo_user, nombres_user, apellidos_user, correo_user
FROM ROLES AS R
INNER JOIN USUARIOS AS U
ON R.codigo_rol = U.codigo_rol;

-- ------------------------------------------------------------------------------------- --
## Consultar todos los Stakeholders
SELECT codigo_pedido, codigo_user, nombres_user, apellidos_user, correo_user,
identificacion_cred, fecha_pedido, ciudad_pedido, total_pr_pedido, estado_pedido
FROM USUARIOS 
INNER JOIN CREDENCIALES
ON usuarios.codigo_user = credenciales.codigo_cred
INNER JOIN PEDIDOS
ON credenciales.codigo_cred = pedidos.codigo_customer;

-- ------------------------------------------------------------------------------------- --
## Consultar
SELECT codigo_pedido, codigo_user, nombres_user, apellidos_user, correo_user,
identificacion_cred, fecha_pedido, ciudad_pedido, total_pr_pedido, estado_pedido
FROM USUARIOS 
INNER JOIN CREDENCIALES
ON usuarios.codigo_user = credenciales.codigo_cred
INNER JOIN PEDIDOS
ON credenciales.codigo_cred = pedidos.codigo_customer;

-- ------------------------------------------------------------------------------------- --
-- 2.2.1.2. Sin repeticiones. ---------------------------------------------------------- --
--          SELECT DISTINCT __ FROM __ INNER JOIN __ ON __.__ = __.__ : ---------------- --
-- ------------------------------------------------------------------------------------- --
SELECT DISTINCT codigo_user
FROM USUARIOS 
INNER JOIN CREDENCIALES
ON usuarios.codigo_user = credenciales.codigo_cred
INNER JOIN PEDIDOS
ON credenciales.codigo_cred = pedidos.codigo_customer;


-- ------------------------------------------------------------------------------------- --
-- 2.2.1.2. Condicionada. -------------------------------------------------------------- --
--          WHERE, OPERADORES, ORDER BY : ---------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
SELECT codigo_pedido, codigo_user, nombres_user, apellidos_user, correo_user,
identificacion_cred, fecha_pedido, ciudad_pedido, total_pr_pedido, estado_pedido
FROM USUARIOS 
INNER JOIN CREDENCIALES
ON usuarios.codigo_user = credenciales.codigo_cred
INNER JOIN PEDIDOS
ON credenciales.codigo_cred = pedidos.codigo_customer
WHERE estado_pedido = "entregado" OR estado_pedido = "enviado"
ORDER BY total_pr_pedido DESC;

SELECT codigo_pedido, codigo_user, nombres_user, apellidos_user, correo_user,
identificacion_cred, fecha_pedido, ciudad_pedido, total_pr_pedido, estado_pedido
FROM USUARIOS 
INNER JOIN CREDENCIALES
ON usuarios.codigo_user = credenciales.codigo_cred
INNER JOIN PEDIDOS
ON credenciales.codigo_cred = pedidos.codigo_customer
WHERE ciudad_pedido = "Medellín" AND estado_pedido = "entregado"
ORDER BY total_pr_pedido DESC;

SELECT pedidos.codigo_pedido, codigo_customer, productos.codigo_producto, 
nombre_producto, precio_producto, cantidad_productos, 
(precio_producto * cantidad_productos) AS total_parcial,
ROUND((precio_producto * cantidad_productos) * 0.19, 2) AS iva,
(precio_producto * cantidad_productos) + 
ROUND((precio_producto * cantidad_productos) * 0.19, 2) AS total,
total_pr_pedido AS total_pagar
FROM PEDIDOS
INNER JOIN LISTA_PRODUCTOS_PEDIDOS
ON pedidos.codigo_pedido = LISTA_PRODUCTOS_PEDIDOS.codigo_pedido
INNER JOIN PRODUCTOS
ON LISTA_PRODUCTOS_PEDIDOS.codigo_producto = productos.codigo_producto
WHERE pedidos.codigo_pedido = 'pedido-6';

-- ------------------------------------------------------------------------------------- --
-- 2.2.2. LEFT JOIN. ------------------------------------------------------------------- --
--        SELECT __ FROM __ LEFT JOIN __ ON __.__ = __.__ : ---------------------------- --
-- ------------------------------------------------------------------------------------- --

SELECT codigo_pedido, codigo_user, nombres_user, apellidos_user, correo_user,
identificacion_cred, fecha_pedido, ciudad_pedido, total_pr_pedido, estado_pedido
FROM USUARIOS
INNER JOIN CREDENCIALES
ON usuarios.codigo_user = credenciales.codigo_cred 
INNER JOIN CLIENTES
ON credenciales.codigo_cred = clientes.codigo_customer
LEFT JOIN PEDIDOS
ON clientes.codigo_customer = pedidos.codigo_customer;

SELECT codigo_pedido, codigo_user, nombres_user, 
apellidos_user, correo_user, identificacion_cred
FROM USUARIOS
INNER JOIN CREDENCIALES
ON usuarios.codigo_user = credenciales.codigo_cred 
INNER JOIN CLIENTES
ON credenciales.codigo_cred = clientes.codigo_customer
LEFT JOIN PEDIDOS
ON clientes.codigo_customer = pedidos.codigo_customer
WHERE codigo_pedido IS NULL;

-- ------------------------------------------------------------------------------------- --
-- 2.2.3. RIGHT JOIN. ------------------------------------------------------------------ --
--        SELECT __ FROM __ RIGHT JOIN __ ON __.__ = __.__ : --------------------------- --
-- ------------------------------------------------------------------------------------- --
SELECT * FROM CLIENTES
RIGHT JOIN PEDIDOS
ON clientes.codigo_customer = pedidos.codigo_customer;

-- NOTA: Esta consulta no Funciona, ya que cada pedido tiene asociado un cliente. No 
--       puede existir pedidos sin clientes
-- ------------------------------------------------------------------------------------- --

-- ------------------------------------------------------------------------------------- --
-- 2.3. Subconsultas. ------------------------------------------------------------------ --
--      IN, NOT IN, ANY, ALL : --------------------------------------------------------- --
-- ------------------------------------------------------------------------------------- --

-- ------------------------------------------------------------------------------------- --
-- 2.3.1. Escalonada. ------------------------------------------------------------------ --
--        SELECT __ FROM __ WHERE __ IN (SELECT __ FROM __ WHERE __ ) : ---------------- --
-- ------------------------------------------------------------------------------------- --

SELECT nombre_producto, precio_producto 
FROM PRODUCTOS 
INNER JOIN LISTA_PRODUCTOS 
ON productos.codigo_producto = lista_productos.codigo_producto
WHERE cantidad_productos > 3;

SELECT nombre_producto, precio_producto 
FROM PRODUCTOS 
WHERE codigo_producto IN 
(SELECT codigo_producto FROM LISTA_PRODUCTOS WHERE cantidad_productos > 3);

SELECT nombre_producto, precio_producto 
FROM PRODUCTOS 
WHERE codigo_producto NOT IN 
(SELECT codigo_producto FROM LISTA_PRODUCTOS WHERE cantidad_productos > 3);

SELECT nombres_user, apellidos_user, correo_user 
FROM USUARIOS
WHERE codigo_user IN
(SELECT codigo_cred FROM CREDENCIALES WHERE codigo_cred LIKE '%customer%');

-- ------------------------------------------------------------------------------------- --
-- 2.3.2. Lista. ----------------------------------------------------------------------- --
--        SELECT __ FROM __ WHERE __ IN (SELECT __ FROM __ WHERE __ ) : ---------------- --
-- ------------------------------------------------------------------------------------- --

-- ------------------------------------------------------------------------------------- --
-- 2.3.3. Correlacionada. -------------------------------------------------------------- --
--        SELECT __ FROM __ WHERE __ IN (SELECT __ FROM __ WHERE __ ) : ---------------- --
-- ------------------------------------------------------------------------------------- --


/* ************************************************************************************* */
/* ------------------------------ 3. CONSULTAS DE ACCIÓN ------------------------------- */
/* --------------------------------------- FINAL --------------------------------------- */
/* ************************************************************************************* */

-- ------------------------------------------------------------------------------------- --
-- 3.1. Eliminar Datos de una Tabla Relacionada. --------------------------------------- --
--       : ----------------------------------------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
DELETE CLIENTES FROM CLIENTES LEFT JOIN PEDIDOS 
ON clientes.codigo_customer = pedidos.codigo_customer
WHERE pedidos.codigo_customer IS NULL;


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