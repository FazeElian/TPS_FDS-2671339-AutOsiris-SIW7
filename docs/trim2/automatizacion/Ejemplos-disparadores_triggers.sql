/* ************************************************************************************* */
/* ------------------------------ AUTOMATIZACIÓN DE BBDD ------------------------------- */
/* ---------------------------- VIEWS, TRIGGERS, PROCEDURES ---------------------------- */
/* ----------------- VISTAS, DISPARADORES, PROCEDIMIENTOS ALMACENADOS ------------------ */
/* ------------------------------------------------------------------------------------- */
/* ************************************************************************************* */
/* ------------------------------------------------------------------------------------- */
/* 1. VIEWS                                                                              */
/* 1.1. Crear Vista : ........... CREATE VIEW _ AS SELECT _ FROM _ WHERE _               */
/* 1.2. Usar Vista : ............ SELECT _ FROM _                                        */
/* 1.3. Modificar Vista : ....... ALTER VIEW _ AS SELECT _ FROM _ WHERE _                */
/* 1.4. Eliminar Vista : ........ DROP VIEW _                                            */
/* 2. TRIGGERS                                                                           */
/* 2.1. Trigger Insertar : ...... CREATE TRIGGER _ BEFORE/AFTER INSERT ON _ BEGIN/END    */
/* 2.2. Trigger Actualizar : .... CREATE TRIGGER _ BEFORE/AFTER UPDATE ON _ BEGIN/END    */
/* 2.3. Trigger Eliminar : ...... CREATE TRIGGER _ BEFORE/AFTER DELETE ON _ BEGIN/END    */
/* 2.4. Eliminar Trigger : ...... DROP TRIGGER _                                         */
/* 3. PROCEDURES                                                                         */
/* 3.1. Crear Procedure : ....... DELIMITER, CREATE PROCEDURE _ BEFORE/AFTER, BEGIN/END  */
/* 3.2. Usar Procedure  : ....... CALL _                                                 */
/* 3.3. Eliminar Procedure : .... DROP PROCEDURE _                                       */
/* 4. TRIGGERS Y PROCEDURES                                                              */
/* 4.1. Crear Usuario: .......... DELIMITER, CREATE PROCEDURE _ BEFORE/AFTER, BEGIN/END  */
/* ------------------------------------------------------------------------------------- */
/* BIBLIOGRAFÍA                                                                          */
/* ------------------------------------------------------------------------------------- */
/* ************************************************************************************* */
/* EN CONSOLA: XAMPP / SHELL / cd mysql/bin / mysql -h localhost -u root -p / ENTER      */
/* ************************************************************************************* */


/* ************************************************************************************* */
/* ------------------------------------------------------------------------------------- */
/* ------------------------------------- 1. VIEWS -------------------------------------- */
/* --------------------------------------- VISTAS -------------------------------------- */
/* ------------------------------------------------------------------------------------- */
/* ************************************************************************************* */

-- ------------------------------------------------------------------------------------- --
-- 1.1. Crear Vista. ------------------------------------------------------------------- --
--      CREATE VIEW _ AS SELECT _ FROM _ WHERE _ : ------------------------------------- --
-- ------------------------------------------------------------------------------------- --
## Consultar los Usuarios
CREATE VIEW VW_USUARIOS AS
SELECT 
	R.codigo_rol, 
	nombre_rol, 
    codigo_user, 
    nombres_user, 
    apellidos_user, 
    correo_user
FROM ROLES AS R
INNER JOIN USUARIOS AS U
ON R.codigo_rol = U.codigo_rol;

-- ------------------------------------------------------------------------------------- --
## Consultar Usuario Registrado
CREATE VIEW VW_CREDENTIAL AS
SELECT 
	R.codigo_rol,
    nombre_rol,
    codigo_user,
    nombres_user,
    apellidos_user,
    correo_user,
    foto_cred,
    identificacion_cred,
    fecha_ingreso_cred,
    pass_cred,
    estado_cred
FROM ROLES AS R
INNER JOIN USUARIOS AS U
ON R.codigo_rol = U.codigo_rol
INNER JOIN CREDENCIALES AS C
ON U.codigo_user = C.codigo_cred;


-- ------------------------------------------------------------------------------------- --
CREATE VIEW VW_INVENTARIO_STOCK AS
SELECT 
nombre_categoria AS categoria,
PRODUCTOS.codigo_producto AS codigo,
nombre_producto AS nombre,
stock_productos AS stock,
precio_producto AS precio_venta,
stock_productos * precio_producto AS subtotal_stock
FROM CATEGORIAS
INNER JOIN PRODUCTOS
ON CATEGORIAS.codigo_categoria = PRODUCTOS.codigo_categoria
GROUP BY PRODUCTOS.codigo_producto
ORDER BY CATEGORIAS.nombre_categoria ASC;

-- ------------------------------------------------------------------------------------- --
CREATE VIEW VW_INVENTARIO_VENTAS AS
SELECT 
nombre_categoria AS categoria,
PRODUCTOS.codigo_producto AS codigo,
nombre_producto AS nombre,
IFNULL(SUM(cantidad_productos),0) AS cant_venta,
precio_producto AS precio_venta,
IFNULL(SUM(cantidad_productos),0) * precio_producto AS subtotal_ventas
FROM CATEGORIAS
INNER JOIN PRODUCTOS
ON CATEGORIAS.codigo_categoria = PRODUCTOS.codigo_categoria
LEFT JOIN LISTA_PRODUCTOS_PEDIDOS
ON PRODUCTOS.codigo_producto = LISTA_PRODUCTOS_PEDIDOS.codigo_producto
GROUP BY PRODUCTOS.codigo_producto
ORDER BY PRODUCTOS.codigo_producto;

-- ------------------------------------------------------------------------------------- --
CREATE VIEW VW_INVENTARIO_COMPRAS AS
SELECT 
nombre_categoria AS categoria,
PRODUCTOS.codigo_producto AS codigo,
nombre_producto AS nombre,
IFNULL(SUM(cantidad_productos_compra),0) AS cant_compra,
IFNULL(precio_producto_compra,0) AS precio_compra,
IFNULL(SUM(cantidad_productos_compra) * precio_producto_compra,0) AS subtotal_compras
FROM CATEGORIAS
INNER JOIN PRODUCTOS
ON CATEGORIAS.codigo_categoria = PRODUCTOS.codigo_categoria
LEFT JOIN LISTA_PRODUCTOS_COMPRADOS
ON PRODUCTOS.codigo_producto = LISTA_PRODUCTOS_COMPRADOS.codigo_producto
GROUP BY PRODUCTOS.codigo_producto
ORDER BY PRODUCTOS.codigo_producto;

-- ------------------------------------------------------------------------------------- --
CREATE VIEW VW_INVENTARIO_PARCIAL AS
SELECT STOCK.categoria, STOCK.codigo, STOCK.nombre, STOCK.stock, STOCK.precio_venta,
STOCK.subtotal_stock, VENTAS.cant_venta, VENTAS.subtotal_ventas, COMPRAS.cant_compra,
COMPRAS.precio_compra, COMPRAS.subtotal_compras,
(STOCK.subtotal_stock + VENTAS.subtotal_ventas) - COMPRAS.subtotal_compras AS gan_bruta,
VENTAS.subtotal_ventas - COMPRAS.subtotal_compras AS gan_neta
FROM VW_INVENTARIO_STOCK AS STOCK
LEFT JOIN VW_INVENTARIO_VENTAS AS VENTAS
ON STOCK.codigo = VENTAS.codigo
LEFT JOIN VW_INVENTARIO_COMPRAS AS COMPRAS
ON STOCK.codigo = COMPRAS.codigo
ORDER BY STOCK.codigo;

-- ------------------------------------------------------------------------------------- --
CREATE VIEW VW_TOTALES AS
SELECT 
SUM(subtotal_stock) AS total_stock,
SUM(subtotal_ventas) AS total_ventas,
SUM(subtotal_compras) AS total_compras,
SUM(gan_bruta) AS total_gan_bruta,
SUM(gan_neta) AS total_gan_neta
FROM VW_INVENTARIO_PARCIAL;

-- ------------------------------------------------------------------------------------- --
CREATE VIEW VW_TOTALES_INVENTARIO AS
SELECT SUM(subtotal_stock) AS total_stock
FROM VW_INVENTARIO;

CREATE VIEW VW_PRODUCTOS_MERCADO AS 
SELECT nombre_categoria, nombre_producto, precio_producto 
FROM CATEGORIAS 
INNER JOIN PRODUCTOS
ON categorias.codigo_categoria = productos.codigo_categoria
WHERE categorias.codigo_categoria = 1;

-- ------------------------------------------------------------------------------------- --
CREATE VIEW VW_PRODUCTOS_ALIMENTOS
(categoria, nombre, precio) AS
SELECT nombre_categoria, nombre_producto, precio_producto
FROM CATEGORIAS 
INNER JOIN PRODUCTOS
ON categorias.codigo_categoria = productos.codigo_categoria
WHERE categorias.codigo_categoria = 4;

-- ------------------------------------------------------------------------------------- --
CREATE VIEW VW_PRODUCTOS_BEBIDAS AS
SELECT 
	C.nombre_categoria AS categoria, 
	P.nombre_producto AS producto, 
	P.precio_producto AS precio
FROM CATEGORIAS AS C
INNER JOIN PRODUCTOS AS P
ON C.codigo_categoria = P.codigo_categoria
WHERE C.codigo_categoria = 3;

UPDATE productos SET 
	precio_producto = precio_producto + 200 
WHERE nombre_producto = 'Tomate';

-- ------------------------------------------------------------------------------------- --
-- 1.2. Usar Vista. -------------------------------------------------------------------- --
--      SELECT _ FROM _ : -------------------------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
SELECT * FROM VW_CREDENTIAL;
SELECT * FROM VW_USUARIOS;
SELECT * FROM VW_INVENTARIO_STOCK;
SELECT * FROM VW_INVENTARIO_VENTAS;
SELECT * FROM VW_INVENTARIO_COMPRAS;
SELECT * FROM VW_INVENTARIO_PARCIAL;
SELECT * FROM VW_TOTALES;
SELECT * FROM VW_PRODUCTOS_MERCADO;
SELECT * FROM VW_PRODUCTOS_ALIMENTOS;
SELECT * FROM VW_PRODUCTOS_BEBIDAS;

-- ------------------------------------------------------------------------------------- --
-- 1.3. Modificar Vista. --------------------------------------------------------------- --
--      ALTER VIEW _ AS SELECT _ FROM _ WHERE _ : -------------------------------------- --
-- ------------------------------------------------------------------------------------- --
ALTER VIEW VW_PRODUCTOS_ALIMENTOS
(categoria, nombre, precio) AS
SELECT nombre_categoria, nombre_producto, precio_producto
FROM CATEGORIAS 
INNER JOIN PRODUCTOS
ON categorias.codigo_categoria = productos.codigo_categoria
WHERE categorias.codigo_categoria = 2;

-- ------------------------------------------------------------------------------------- --
-- 1.4. Eliminar Vista. ---------------------------------------------------------------- --
--      DROP VIEW : -------------------------------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
DROP VIEW VW_CREDENTIAL;
DROP VIEW VW_USUARIOS;
DROP VIEW VW_INVENTARIO_STOCK;
DROP VIEW VW_INVENTARIO_VENTAS;
DROP VIEW VW_INVENTARIO_COMPRAS;
DROP VIEW VW_INVENTARIO_PARCIAL;
DROP VIEW VW_TOTALES;
DROP VIEW VW_PRODUCTOS_MERCADO;
DROP VIEW VW_PRODUCTOS_ALIMENTOS;
DROP VIEW VW_PRODUCTOS_BEBIDAS;


/* ************************************************************************************* */
/* ------------------------------------ 2. TRIGGERS ------------------------------------ */
/* ------------------------------------ DISPARADORES ----------------------------------- */
/* ************************************************************************************* */

-- ------------------------------------------------------------------------------------- --
-- 2.1. Trigger Insertar. -------------------------------------------------------------- --
--      CREATE TRIGGER _ BEFORE/AFTER INSERT ON _ BEGIN/END : -------------------------- --
-- ------------------------------------------------------------------------------------- --

-- -------------------------------------------------------------------------------------
## AFTER/INSERT Después de Insertar administrador - Insertar credenciales
DELIMITER $$
CREATE TRIGGER total_pedido_ai
BEFORE UPDATE ON productos FOR EACH ROW
BEGIN
	IF (NEW.precio < 0) THEN
		SET NEW.precio = OLD.precio;
	ELSEIF (NEW.precio > 1000) THEN
		SET NEW.precio = OLD.precio;
	END IF;
END;$$
DELIMITER ;
-- -------------------------------------------------------------------------------------
## Actualizar el precio de un artículo (normal)
-- -------------------------------------------------------------------------------------
UPDATE productos SET precio = 15 WHERE codigo_articulo = 1;
-- -------------------------------------------------------------------------------------
## Actualizar el precio de un artículo (Si sobrepasa los 1000 -> Triger)
-- -------------------------------------------------------------------------------------
UPDATE productos SET precio = 8500 WHERE codigo_articulo = 1;
-- -------------------------------------------------------------------------------------
## Actualizar el precio de un artículo (Si es negativo -> Triger)
-- -------------------------------------------------------------------------------------
UPDATE productos SET precio = -85 WHERE codigo_articulo = 1;


-- -------------------------------------------------------------------------------------
## Lista Productos comprados
DROP TRIGGER lista_compra_stock_bi

DELIMITER $$
CREATE TRIGGER lista_compra_stock_bi
	BEFORE INSERT ON LISTA_PRODUCTOS_COMPRADOS
	FOR EACH ROW
BEGIN
	UPDATE PRODUCTOS SET
	stock_productos = PRODUCTOS.stock_productos + NEW.cantidad_productos_compra
	WHERE NEW.codigo_producto = PRODUCTOS.codigo_producto;
END;$$
DELIMITER ;

-- ------------------------------------------------------------------------------------- --
DROP TRIGGER lista_pedido_stock_bi;

DELIMITER $$
CREATE TRIGGER lista_pedido_stock_bi
	BEFORE INSERT ON LISTA_PRODUCTOS_PEDIDOS
	FOR EACH ROW
BEGIN
	UPDATE PRODUCTOS SET
	stock_productos = PRODUCTOS.stock_productos - NEW.cantidad_productos
	WHERE NEW.codigo_producto = PRODUCTOS.codigo_producto;
END;$$
DELIMITER ;

-- ------------------------------------------------------------------------------------- --
DROP TRIGGER total_pedido_ai;

DELIMITER $$
CREATE TRIGGER total_pedido_ai
	AFTER INSERT ON LISTA_PRODUCTOS_PEDIDOS
	FOR EACH ROW
BEGIN
	DECLARE precio DECIMAL(10,2);
	SELECT
		SUM(prod.precio_producto * lp.cantidad_productos) INTO precio
	FROM PEDIDOS AS ped
	INNER JOIN LISTA_PRODUCTOS_PEDIDOS AS lp
	ON ped.codigo_pedido = lp.codigo_pedido
	INNER JOIN PRODUCTOS AS prod
	ON lp.codigo_producto = prod.codigo_producto
	WHERE NEW.codigo_pedido = lp.codigo_pedido;	
	UPDATE PEDIDOS SET
	total_pl_pedido = precio,
	iva_pedido = precio * 0.19,
	total_pr_pedido = total_pl_pedido + iva_pedido
	WHERE NEW.codigo_pedido = PEDIDOS.codigo_pedido;
END;$$
DELIMITER ;

-- ------------------------------------------------------------------------------------- --
CREATE TABLE REG_PRODUCTOS (
  codigo_categoria INT NOT NULL,
  codigo_producto VARCHAR(10) NOT NULL,
  nombre_producto VARCHAR(50) NOT NULL,
  precio_producto DECIMAL(10,2) NOT NULL,
  unidad_producto DECIMAL(5,2) NOT NULL,
  medida_producto VARCHAR(20) NOT NULL,
  stock_productos INT NOT NULL,
  insertado DATETIME
);

DELIMITER $$
CREATE TRIGGER productos_ai 
	AFTER INSERT ON productos
	FOR EACH ROW 
BEGIN
	INSERT INTO REG_PRODUCTOS VALUES 
	(NEW.codigo_categoria, NEW.codigo_producto, NEW.nombre_producto, NEW.precio_producto,
	 NEW.unidad_producto, NEW.medida_producto, NEW.stock_productos, NOW());
END;$$
DELIMITER ;

INSERT INTO PRODUCTOS VALUES 
(1, 'prod-13', 'Yuca', 1200.55, 1.00, 'libra', 5);

-- -------------------------------------------------------------------------------------
## Crear el trigger con condicional

DELIMITER $$
CREATE TRIGGER revisa_precio_bu 
BEFORE UPDATE ON productos FOR EACH ROW
BEGIN
	IF (NEW.precio < 0) THEN
		SET NEW.precio = OLD.precio;
	ELSEIF (NEW.precio > 1000) THEN
		SET NEW.precio = OLD.precio;
	END IF;
END;$$
DELIMITER ;
-- -------------------------------------------------------------------------------------
## Actualizar el precio de un artículo (normal)
-- -------------------------------------------------------------------------------------
UPDATE productos SET precio = 15 WHERE codigo_articulo = 1;
-- -------------------------------------------------------------------------------------
## Actualizar el precio de un artículo (Si sobrepasa los 1000 -> Triger)
-- -------------------------------------------------------------------------------------
UPDATE productos SET precio = 8500 WHERE codigo_articulo = 1;
-- -------------------------------------------------------------------------------------
## Actualizar el precio de un artículo (Si es negativo -> Triger)
-- -------------------------------------------------------------------------------------
UPDATE productos SET precio = -85 WHERE codigo_articulo = 1;

-- -------------------------------------------------------------------------------------
-- ACTUALIZAR REGISTRO DE PRODUCTOS Y UTILIZAR TRIGGER PARA ALMACENAR EN TABLA PROD_ACT  
-- -------------------------------------------------------------------------------------
## Crear una tabla para almacenar registro 'productos_actualizados'
-- -------------------------------------------------------------------------------------
CREATE TABLE productos_actualizados (
	 anterior_codigo_articulo INT(11),
	 anterior_seccion VARCHAR(50),
	 anterior_nombre_articulo VARCHAR(100),
	 anterior_precio DECIMAL(10,2),
	 anterior_fecha DATE,  
	 anterior_importado TINYINT(1),
	 anterior_pais_origen VARCHAR(50),
	 nuevo_codigo_articulo INT(11),
	 nuevo_seccion VARCHAR(50),
	 nuevo_nombre_articulo VARCHAR(100),
	 nuevo_precio DECIMAL(10,2),
	 nuevo_fecha DATE,  
	 nuevo_importado TINYINT(1),
	 nuevo_pais_origen VARCHAR(50),
	 usuario VARCHAR(15),
	 f_modif DATE
);
-- -------------------------------------------------------------------------------------
## Crear un Trigger: (BEFORE)
-- -------------------------------------------------------------------------------------
CREATE TRIGGER actualiza_productos_bu BEFORE UPDATE ON productos
FOR EACH ROW INSERT INTO productos_actualizados (
	anterior_codigo_articulo, anterior_seccion, anterior_nombre_articulo, anterior_precio,
	anterior_fecha, anterior_importado, anterior_pais_origen, nuevo_codigo_articulo,
	nuevo_seccion, nuevo_nombre_articulo, nuevo_precio, nuevo_fecha, nuevo_importado,
	nuevo_pais_origen, usuario, f_modif
) VALUES (
	OLD.codigo_articulo, OLD.seccion, OLD.nombre_articulo, OLD.precio, OLD.fecha,
	OLD.importado, OLD.pais_origen,
	NEW.codigo_articulo, NEW.seccion, NEW.nombre_articulo, NEW.precio, NEW.fecha,
	NEW.importado, NEW.pais_origen, 
	CURRENT_USER(), NOW()
);
-- -------------------------------------------------------------------------------------
## UPDATE: Actualizar el precio (30.20 a 50.20) de serrucho y comprobar
-- -------------------------------------------------------------------------------------
UPDATE productos SET 
precio = precio + 20 
WHERE codigo_articulo = 6;
-- -------------------------------------------------------------------------------------
-- ELIMINAR UN REGISTRO DE PRODUCTOS Y UTILIZAR TRIGGER PARA ALMACENAR EN TABLA PROD_ACT
-- -------------------------------------------------------------------------------------
## Crear una tabla para almacenar registro 'productos_eliminados'
-- -------------------------------------------------------------------------------------
CREATE TABLE productos_eliminados (
	 codigo_articulo INT(11),
	 seccion VARCHAR(50),
	 nombre_articulo VARCHAR(100),
	 precio DECIMAL(10,2),
	 fecha DATE,  
	 importado TINYINT(1),
	 pais_origen VARCHAR(50),
	 usuario VARCHAR(15),
	 f_modif DATE
);
-- -------------------------------------------------------------------------------------
## Crear un Trigger: (BEFORE)
-- -------------------------------------------------------------------------------------
CREATE TRIGGER elimina_productos_ad AFTER DELETE ON productos
FOR EACH ROW INSERT INTO productos_eliminados (
	codigo_articulo, seccion, nombre_articulo, precio, fecha, importado, pais_origen
) VALUES (
	OLD.codigo_articulo, OLD.seccion, OLD.nombre_articulo, OLD.precio, OLD.fecha,
	OLD.importado, OLD.pais_origen
);
-- -------------------------------------------------------------------------------------
## DELETE: Eliminar un Registro de la Tabla productos y comprobar
-- -------------------------------------------------------------------------------------
DELETE FROM productos WHERE codigo_articulo = 40;
-- -------------------------------------------------------------------------------------
##  ELIMINAR UN TRIGER
-- -------------------------------------------------------------------------------------
DROP TRIGGER productos_ai;
-- -------------------------------------------------------------------------------------
-- MODIFICAR UN TRIGGER
-- -------------------------------------------------------------------------------------
## Agregar dos campos más a la tabla elimina_productos
-- -------------------------------------------------------------------------------------
ALTER TABLE productos_eliminados ADD COLUMN (
	usuario VARCHAR(50), f_modif DATETIME
); 
-- -------------------------------------------------------------------------------------
## Modificar el Trigger elimina_productos_ad de acuerdo a los campos agregados
-- -------------------------------------------------------------------------------------
DROP TRIGGER IF EXISTS elimina_productos_ad;
CREATE TRIGGER elimina_productos_ad AFTER DELETE ON productos
FOR EACH ROW INSERT INTO productos_eliminados (
	codigo_articulo, seccion, nombre_articulo, precio, fecha, importado, pais_origen,
    usuario, f_modif
) VALUES (
	OLD.codigo_articulo, OLD.seccion, OLD.nombre_articulo, OLD.precio, OLD.fecha,
	OLD.importado, OLD.pais_origen, CURRENT_USER(), NOW()
);
-- -------------------------------------------------------------------------------------
## DELETE: Eliminar un Registro de la Tabla productos y comprobar
-- -------------------------------------------------------------------------------------
DELETE FROM productos WHERE codigo_articulo = 39;
-- -------------------------------------------------------------------------------------
-- TRIGGER QUE IMPIDA ACTUALIZACIÓN DE UN PRECIO SINO CUMPLE UNA CONDICIÓN
-- -------------------------------------------------------------------------------------
## Crear el trigger con condicional
-- -------------------------------------------------------------------------------------
DELIMITER $$
CREATE TRIGGER revisa_precio_bu 
BEFORE UPDATE ON productos 
FOR EACH ROW
BEGIN
	IF (NEW.precio < 0) THEN
		SET NEW.precio = OLD.precio;
	ELSEIF (NEW.precio > 1000) THEN
		SET NEW.precio = OLD.precio;
	END IF;
END;$$
DELIMITER ;
-- -------------------------------------------------------------------------------------
## Actualizar el precio de un artículo (normal)
-- -------------------------------------------------------------------------------------
UPDATE productos SET precio = 15 WHERE codigo_articulo = 1;
-- -------------------------------------------------------------------------------------
## Actualizar el precio de un artículo (Si sobrepasa los 1000 -> Triger)
-- -------------------------------------------------------------------------------------
UPDATE productos SET precio = 8500 WHERE codigo_articulo = 1;
-- -------------------------------------------------------------------------------------
## Actualizar el precio de un artículo (Si es negativo -> Triger)
-- -------------------------------------------------------------------------------------
UPDATE productos SET precio = -85 WHERE codigo_articulo = 1;
-- -------------------------------------------------------------------------------------


/* ************************************************************************************* */
/* ----------------------------------- 3. PROCEDURES ----------------------------------- */
/* ------------------------------ PROCEDIMIENTOS ALMACENADOS --------------------------- */
/* ************************************************************************************* */

-- ------------------------------------------------------------------------------------- --
-- 3.1. Crear un Procedure. ------------------------------------------------------------ --
--      DELIMITER, CREATE PROCEDURE _ BEFORE/AFTER, BEGIN/END : ------------------------ --
-- ------------------------------------------------------------------------------------- --

-- ------------------------------------------------------------------------------------- --
## Crear Usuario
DELIMITER $$
CREATE PROCEDURE pa_registrar_usuario(
	IN p_codigo_rol INT(11),
	IN p_codigo_user VARCHAR(10),
	IN p_nombres_user VARCHAR(50),
	IN p_apellidos_user VARCHAR(50),
	IN p_correo_user VARCHAR(50)
)
BEGIN
	INSERT INTO USUARIOS VALUES	
	(p_codigo_rol, p_codigo_user, p_nombres_user, p_apellidos_user, p_correo_user);
END;$$
DELIMITER ;

-- ------------------------------------------------------------------------------------- --
## Pedidos Entregados
DELIMITER $$
CREATE PROCEDURE pa_pedidos_entregados()
BEGIN
	SELECT * FROM PEDIDOS	
	WHERE estado_pedido = 'entregado';
END;$$
DELIMITER ;

-- ------------------------------------------------------------------------------------- --
DELIMITER $$
CREATE PROCEDURE pa_pedidos_entregados_param(
	IN p_estado_pedido VARCHAR(30)
)
BEGIN
	SELECT * FROM PEDIDOS	
	WHERE estado_pedido = p_estado_pedido;
END;$$
DELIMITER ;

-- ------------------------------------------------------------------------------------- --
DELIMITER $$
CREATE PROCEDURE pa_actualizar_usuario(
	IN p_codigo_rol INT(11),
	IN p_codigo_user VARCHAR(10),
	IN p_nombres_user VARCHAR(50),
	IN p_apellidos_user VARCHAR(50),
	IN p_correo_user VARCHAR(50)
)
BEGIN
	UPDATE USUARIOS SET	
		codigo_rol = p_codigo_rol, 
		codigo_user = p_codigo_user, 
		nombres_user = p_nombres_user, 
		apellidos_user = p_apellidos_user, 
		correo_user = p_correo_user
	WHERE codigo_user = p_codigo_user;
END;$$
DELIMITER ;

-- ------------------------------------------------------------------------------------- --
DROP PROCEDURE pa_prueba_pedido;

DELIMITER $$
CREATE PROCEDURE pa_prueba_pedido(
	IN p_codigo_pedido VARCHAR(10)
)
BEGIN
	declare precio DECIMAL(10,2);
	SELECT
		SUM(prod.precio_producto * lp.cantidad_productos) into precio
	FROM PEDIDOS AS ped
	INNER JOIN LISTA_PRODUCTOS_PEDIDOS AS lp
	ON ped.codigo_pedido = lp.codigo_pedido
	INNER JOIN PRODUCTOS AS prod
	ON lp.codigo_producto = prod.codigo_producto
	WHERE ped.codigo_pedido = p_codigo_pedido;	
	UPDATE PEDIDOS SET
	total_pl_pedido = precio,
	iva_pedido = precio * 0.19,
	total_pr_pedido = total_pl_pedido + iva_pedido	
	WHERE codigo_pedido = p_codigo_pedido;	
END;$$
DELIMITER ;

CALL pa_prueba_pedido('pedido-5');

-- -------------------------------------------------------------------------------------
## Crear el Procedimiento Almacenado muestra_clientes()
-- -------------------------------------------------------------------------------------
CREATE PROCEDURE muestra_clientes()
SELECT * FROM clientes WHERE poblacion = 'MADRID';
-- -------------------------------------------------------------------------------------
## Llamar el Procedimiento Almacenado muestra_clientes()
-- -------------------------------------------------------------------------------------
CALL muestra_clientes();
-- -------------------------------------------------------------------------------------
-- PROCEDIMIENTO ALMACENADO QUE ACTUALICE EL PRECIO DE UN ARTÍCULO (CON PARÁMETROS) 
-- -------------------------------------------------------------------------------------
## Crear el Procedimiento Almacenado muestra_clientes()
-- -------------------------------------------------------------------------------------
CREATE PROCEDURE actualiza_productos(n_precio DECIMAL(10,2), codigo INT(11))
UPDATE productos SET precio = n_precio
WHERE codigo_articulo = codigo;
-- -------------------------------------------------------------------------------------
## Llamar el Procedimiento Almacenado muestra_clientes()
-- -------------------------------------------------------------------------------------
CALL actualiza_productos(60, 21);
-- -------------------------------------------------------------------------------------
-- PROCEDIMIENTO ALMACENADO CALCULE LA EDAD EN FUNCIÓN DEL NACIMIENTO
-- -------------------------------------------------------------------------------------
## Crear el Procedimiento Almacenado calcula_edad()
-- -------------------------------------------------------------------------------------
DELIMITER $$
CREATE PROCEDURE calcula_edad(agno_nacimiento INT(11))
BEGIN
	DECLARE agno_actual INT DEFAULT 2021;
	DECLARE edad INT;
	SET edad = agno_actual - agno_nacimiento;
	SELECT edad;
END;$$
DELIMITER ;


-- -------------------------------------------------------------------------------------

-- ------------------------------------------------------------------------------------- --
-- 3.2. Usar un Procedure. ------------------------------------------------------------- --
--      CALL _ : ----------------------------------------------------------------------- --
-- ------------------------------------------------------------------------------------- --

-- ------------------------------------------------------------------------------------- --
## Registrar Usuario
CALL pa_registrar_usuario
(2, 'person-1', 'Ezequiel', 'Pantoja', 'ezequiel@gmail.com');
CALL pa_registrar_usuario
(2, 'person-2', 'Camilo', 'Céspedes', 'camilo@gmail.com');
-- ------------------------------------------------------------------------------------- --
## XXXXXXX
CALL pa_pedidos_entregados();

-- ------------------------------------------------------------------------------------- --
## XXXXXXX
CALL pa_pedidos_entregados_param('enviado');

-- ------------------------------------------------------------------------------------- --
## Calcular Edad
CALL calcula_edad(1983);

-- ------------------------------------------------------------------------------------- --
-- 4.3. Eliminar un Procedure. --------------------------------------------------------- --
--      DROP PROCEDURE _ : ------------------------------------------------------------- --
-- ------------------------------------------------------------------------------------- --
DROP PROCEDURE pa_pedidos_entregados;
DROP PROCEDURE pa_pedidos_entregados_param;
DROP PROCEDURE pa_registrar_usuario;


/* ************************************************************************************* */
/* ----------------------------------- 4. TRIGGERS Y ----------------------------------- */
/* ------------------------------------- PROCEDURES ------------------------------------ */
/* ************************************************************************************* */

-- ------------------------------------------------------------------------------------- --

## Registrar Administrador
DELIMITER $$
CREATE PROCEDURE pa_registrar_admin(
	IN p_codigo_rol INT(11),
	IN p_codigo_user VARCHAR(10),
	IN p_nombres_user VARCHAR(50),
	IN p_apellidos_user VARCHAR(50),
	IN p_correo_user VARCHAR(50),
    IN p_foto_cred BLOB,
    IN p_identificacion_cred VARCHAR(30),
    IN p_fecha_ingreso_cred DATE,
    IN p_pass_cred VARCHAR(150),
    IN p_estado_cred TINYINT
)
BEGIN
	INSERT INTO USUARIOS VALUES	
	(p_codigo_rol, p_codigo_user, p_nombres_user, p_apellidos_user, p_correo_user);
    INSERT INTO CREDENCIALES VALUES	
	(p_codigo_user, p_foto_cred, p_identificacion_cred, p_fecha_ingreso_cred, p_pass_cred, p_estado_cred);
END;$$
DELIMITER ;

-- ------------------------------------------------------------------------------------- --
CALL pa_registrar_admin
(1, 'admin-1', 'Albeiro', 'Ramos', 'profealbeiro2020@gmail.com', '../../img/usuario.png', 123456, "2022-06-11", sha1('12345'), 1);

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