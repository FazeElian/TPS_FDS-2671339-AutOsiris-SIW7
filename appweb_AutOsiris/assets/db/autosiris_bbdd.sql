-- -----------------------------------------------------
-- Creación Base de datos
-- -----------------------------------------------------
CREATE DATABASE autosiris_bbdd ;
USE autosiris_bbdd ;

-- -----------------------------------------------------
-- Table CATEGORIAS
-- -----------------------------------------------------

CREATE TABLE CATEGORIAS (
  idCategoria INT NULL AUTO_INCREMENT,
  nombreCategoria VARCHAR(45) NOT NULL,
  cantidadProductos INT NOT NULL,
  PRIMARY KEY (idCategoria))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table ROL
-- -----------------------------------------------------
CREATE TABLE ROL (
  idRol INT NULL AUTO_INCREMENT,
  nombreRol VARCHAR(45) NOT NULL,
  descripcion VARCHAR(100) NOT NULL,
  PRIMARY KEY (idRol))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table USUARIO
-- -----------------------------------------------------

CREATE TABLE USUARIO (
  idUsuario INT NULL AUTO_INCREMENT,
  nombre VARCHAR(45) NOT NULL,
  apellido VARCHAR(45) NOT NULL,
  telefono VARCHAR(45) NOT NULL,
  correo VARCHAR(45) NOT NULL,
  usuario VARCHAR(45) NOT NULL,
  contraseña VARCHAR(45) NOT NULL,
  ROL_idRol INT NOT NULL,
  PRIMARY KEY (idUsuario),
  INDEX fk_USUARIO_ROL1_idx (ROL_idRol ASC),
  CONSTRAINT fk_USUARIO_ROL1
    FOREIGN KEY (ROL_idRol)
    REFERENCES ROL (idRol)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table CLIENTE
-- -----------------------------------------------------

CREATE TABLE CLIENTE (
  idCliente INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(45) NOT NULL,
  apellido VARCHAR(45) NOT NULL,
  telefono INT NOT NULL,
  correo VARCHAR(45) NOT NULL,
  contraseña VARCHAR(45) NOT NULL,
  PRIMARY KEY (idCliente))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table FACTURA
-- -----------------------------------------------------

CREATE TABLE FACTURA (
  idFactura INT NULL AUTO_INCREMENT,
  nombreFactura VARCHAR(45) NOT NULL,
  fecha DATETIME NOT NULL,
  CLIENTE_idCliente INT NOT NULL,
  USUARIO_idUsuario INT NOT NULL,
  PRIMARY KEY (idFactura),
  INDEX fk_FACTURA_CLIENTE1_idx (CLIENTE_idCliente ASC),
  INDEX fk_FACTURA_USUARIO1_idx (USUARIO_idUsuario ASC),
  CONSTRAINT fk_FACTURA_CLIENTE1
    FOREIGN KEY (CLIENTE_idCliente)
    REFERENCES CLIENTE (idCliente)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_FACTURA_USUARIO1
    FOREIGN KEY (USUARIO_idUsuario)
    REFERENCES USUARIO (idUsuario)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table PRODUCTOS
-- -----------------------------------------------------

CREATE TABLE PRODUCTOS (
  idProducto INT NULL AUTO_INCREMENT,
  codigoProducto VARCHAR(20) NOT NULL,
  precioProducto FLOAT NOT NULL,
  nombreProducto VARCHAR(45) NOT NULL,
  descripcionProducto VARCHAR(100) NOT NULL,
  imagenProducto BLOB NOT NULL,
  CATEGORIAS_idCategoria INT NOT NULL,
  PRIMARY KEY (idProducto),
  INDEX fk_PRODUCTOS_CATEGORIAS1_idx (CATEGORIAS_idCategoria ASC),
  CONSTRAINT fk_PRODUCTOS_CATEGORIAS1
    FOREIGN KEY (CATEGORIAS_idCategoria)
    REFERENCES CATEGORIAS (idCategoria)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table DETALLE_FACTURA
-- -----------------------------------------------------

CREATE TABLE DETALLE_FACTURA (
  idDetalleFactura INT NULL AUTO_INCREMENT,
  FACTURA_idFactura INT NOT NULL,
  cantidadProducto INT NOT NULL,
  PRODUCTOS_idProducto INT NOT NULL,
  INDEX fk_DETALLE_FACTURA_FACTURA1_idx (FACTURA_idFactura ASC),
  PRIMARY KEY (idDetalleFactura),
  INDEX fk_DETALLE_FACTURA_PRODUCTOS1_idx (PRODUCTOS_idProducto ASC),
  CONSTRAINT fk_DETALLE_FACTURA_FACTURA1
    FOREIGN KEY (FACTURA_idFactura)
    REFERENCES FACTURA (idFactura)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_DETALLE_FACTURA_PRODUCTOS1
    FOREIGN KEY (PRODUCTOS_idProducto)
    REFERENCES PRODUCTOS (idProducto)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table VENTA
-- -----------------------------------------------------

CREATE TABLE VENTA (
  idVenta INT NULL AUTO_INCREMENT,
  fechaCompra VARCHAR(45) NOT NULL,
  PRIMARY KEY (idVenta))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table DETALLE_VENTA
-- -----------------------------------------------------

CREATE TABLE DETALLE_VENTA (
  idDetalleVenta INT NOT NULL AUTO_INCREMENT,
  cantidadProducto INT NOT NULL,
  VENTA_idVenta INT NOT NULL,
  PRODUCTOS_idProducto INT NOT NULL,
  USUARIO_idUsuario INT NOT NULL,
  PRIMARY KEY (idDetalleVenta),
  INDEX fk_DETALLE_VENTA_VENTA1_idx (VENTA_idVenta ASC),
  INDEX fk_DETALLE_VENTA_PRODUCTOS1_idx (PRODUCTOS_idProducto ASC),
  INDEX fk_DETALLE_VENTA_USUARIO1_idx (USUARIO_idUsuario ASC),
  CONSTRAINT fk_DETALLE_VENTA_VENTA1
    FOREIGN KEY (VENTA_idVenta)
    REFERENCES VENTA (idVenta)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_DETALLE_VENTA_PRODUCTOS1
    FOREIGN KEY (PRODUCTOS_idProducto)
    REFERENCES PRODUCTOS (idProducto)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_DETALLE_VENTA_USUARIO1
    FOREIGN KEY (USUARIO_idUsuario)
    REFERENCES USUARIO (idUsuario)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table STOCK
-- -----------------------------------------------------
CREATE TABLE STOCK( 
  idStock INT NOT NULL AUTO_INCREMENT,
  entradaProducto INT NOT NULL,
  salidaProducto INT NOT NULL,

  PRIMARY KEY(idStock)
);