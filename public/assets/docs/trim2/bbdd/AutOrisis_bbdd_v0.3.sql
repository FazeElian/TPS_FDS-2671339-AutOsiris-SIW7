-- MySQL Script generated by MySQL Workbench
-- Tue Oct 31 14:39:58 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema autosiris_bbdd
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `autosiris_bbdd` ;

-- -----------------------------------------------------
-- Schema autosiris_bbdd
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `autosiris_bbdd` DEFAULT CHARACTER SET utf8 ;
USE `autosiris_bbdd` ;

-- -----------------------------------------------------
-- Table `autosiris_bbdd`.`CATEGORIAS_PRODUCTOS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `autosiris_bbdd`.`CATEGORIAS_PRODUCTOS` ;

CREATE TABLE IF NOT EXISTS `autosiris_bbdd`.`CATEGORIAS_PRODUCTOS` (
  `idCategoriaProductos` INT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `descripcion` VARCHAR(100) NOT NULL,
  `fecha_creacion` DATETIME NOT NULL,
  `fecha_ultima_actualizacion` DATETIME NOT NULL,
  PRIMARY KEY (`idCategoriaProductos`),
  UNIQUE INDEX `fecha_creacion_UNIQUE` (`fecha_creacion` ASC)
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `autosiris_bbdd`.`PRODUCTOS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `autosiris_bbdd`.`PRODUCTOS` ;

CREATE TABLE IF NOT EXISTS `autosiris_bbdd`.`PRODUCTOS` (
  `idProducto` INT NULL AUTO_INCREMENT,
  `CATEGORIAS_PRODUCTOS_id` INT NOT NULL,
  `codigo` VARCHAR(30) NOT NULL,
  `nombre` VARCHAR(50) NOT NULL,
  `descripcion` VARCHAR(200) NOT NULL,
  `imagen` BLOB NOT NULL,
  `precio` DECIMAL NOT NULL,
  `fechaCreacion` DATETIME NOT NULL,
  `fechaUltimaActualizacion` DATETIME NOT NULL,
  PRIMARY KEY (`idProducto`),
  INDEX `fk_PRODUCTOS_CATEGORIAS_PRODUCTOS_idx` (`CATEGORIAS_PRODUCTOS_id` ASC),
  UNIQUE INDEX `fecha_creacion_UNIQUE` (`fechaCreacion` ASC),
  CONSTRAINT `fk_PRODUCTOS_CATEGORIAS_PRODUCTOS`
    FOREIGN KEY (`CATEGORIAS_PRODUCTOS_id`)
    REFERENCES `autosiris_bbdd`.`CATEGORIAS_PRODUCTOS` (`idCategoriaProductos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `autosiris_bbdd`.`USUARIOS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `autosiris_bbdd`.`USUARIOS` ;

CREATE TABLE IF NOT EXISTS `autosiris_bbdd`.`USUARIOS` (
  `idUsuario` INT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `correo` VARCHAR(100) NOT NULL,
  `contraseña` VARCHAR(30) NOT NULL,
  `fechaCreacion` DATETIME NOT NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `autosiris_bbdd`.`VENTAS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `autosiris_bbdd`.`VENTAS` ;

CREATE TABLE IF NOT EXISTS `autosiris_bbdd`.`VENTAS` (
  `idVenta` INT NULL AUTO_INCREMENT,
  `fecha` DATE NOT NULL,
  `total` DECIMAL NOT NULL,
  `fechaCreacion` DATETIME NOT NULL,
  `fechaUltimaActualizacion` DATETIME NOT NULL,
  PRIMARY KEY (`idVenta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `autosiris_bbdd`.`VENTAS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `autosiris_bbdd`.`VENTAS` ;

CREATE TABLE IF NOT EXISTS `autosiris_bbdd`.`VENTAS` (
  `idVenta` INT NULL AUTO_INCREMENT,
  `fecha` DATE NOT NULL,
  `total` DECIMAL NOT NULL,
  `fechaCreacion` DATETIME NOT NULL,
  `fechaUltimaActualizacion` DATETIME NOT NULL,
  PRIMARY KEY (`idVenta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `autosiris_bbdd`.`DETALLE_VENTA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `autosiris_bbdd`.`DETALLE_VENTA` ;

CREATE TABLE IF NOT EXISTS `autosiris_bbdd`.`DETALLE_VENTA` (
  `idDetalleVenta` INT NULL AUTO_INCREMENT,
  `VENTAS_idVenta` INT NOT NULL,
  `PRODUCTOS_id` INT NOT NULL,
  `cantidadProducto` VARCHAR(45) NOT NULL,
  `precioProducto` DECIMAL NOT NULL,
  INDEX `fk_DETALLE_VENTA_PRODUCTOS1_idx` (`PRODUCTOS_id` ASC),
  PRIMARY KEY (`idDetalleVenta`),
  INDEX `fk_DETALLE_VENTA_VENTAS1_idx` (`VENTAS_idVenta` ASC),
  CONSTRAINT `fk_DETALLE_VENTA_PRODUCTOS1`
    FOREIGN KEY (`PRODUCTOS_id`)
    REFERENCES `autosiris_bbdd`.`PRODUCTOS` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_DETALLE_VENTA_VENTAS1`
    FOREIGN KEY (`VENTAS_idVenta`)
    REFERENCES `autosiris_bbdd`.`VENTAS` (`idVenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `autosiris_bbdd`.`INVENTARIOS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `autosiris_bbdd`.`INVENTARIOS` ;

CREATE TABLE IF NOT EXISTS `autosiris_bbdd`.`INVENTARIOS` (
  `idInventario` INT NULL AUTO_INCREMENT,
  `PRODUCTOS_id` INT NOT NULL,
  `entradasProducto` INT NOT NULL,
  `salidasProducto` INT NOT NULL,
  `stockProducto` INT NOT NULL,
  `fechaCreacion` DATETIME NOT NULL,
  `fechaUltimaActualizacion` DATETIME NOT NULL,
  PRIMARY KEY (`idInventario`),
  INDEX `fk_INVENTARIOS_PRODUCTOS2_idx` (`PRODUCTOS_id` ASC),
  CONSTRAINT `fk_INVENTARIOS_PRODUCTOS2`
    FOREIGN KEY (`PRODUCTOS_id`)
    REFERENCES `autosiris_bbdd`.`PRODUCTOS` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `autosiris_bbdd`.`CLIENTES`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `autosiris_bbdd`.`CLIENTES` ;

CREATE TABLE IF NOT EXISTS `autosiris_bbdd`.`CLIENTES` (
  `idCliente` INT NOT NULL,
  `nombre` VARCHAR(50) NOT NULL,
  `descripcion` VARCHAR(100) NOT NULL,
  `fechaCreacion` DATETIME NOT NULL,
  `fechaUltimaActualizacion` DATETIME NOT NULL,
  PRIMARY KEY (`idCliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `autosiris_bbdd`.`FACTURAS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `autosiris_bbdd`.`FACTURAS` ;

CREATE TABLE IF NOT EXISTS `autosiris_bbdd`.`FACTURAS` (
  `idFactura` INT NULL AUTO_INCREMENT,
  `CLIENTES_idCliente` INT NOT NULL,
  `fecha` DATE NOT NULL,
  `total` DECIMAL NOT NULL,
  `fechaCreacion` DATETIME NOT NULL,
  `fechaUltimaActualizacion` DATETIME NOT NULL,
  PRIMARY KEY (`idFactura`),
  INDEX `fk_FACTURAS_CLIENTES1_idx` (`CLIENTES_idCliente` ASC),
  CONSTRAINT `fk_FACTURAS_CLIENTES1`
    FOREIGN KEY (`CLIENTES_idCliente`)
    REFERENCES `autosiris_bbdd`.`CLIENTES` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `autosiris_bbdd`.`DETALLE_FACTURA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `autosiris_bbdd`.`DETALLE_FACTURA` ;

CREATE TABLE IF NOT EXISTS `autosiris_bbdd`.`DETALLE_FACTURA` (
  `idDetalleFactura` INT NULL AUTO_INCREMENT,
  `FACTURAS_idFactura` INT NOT NULL,
  `PRODUCTOS_idProducto` INT NOT NULL,
  `cantidadProducto` INT NOT NULL,
  `precioProducto` DECIMAL NOT NULL,
  PRIMARY KEY (`idDetalleFactura`),
  INDEX `fk_DETALLE_FACTURA_PRODUCTOS1_idx` (`PRODUCTOS_idProducto` ASC),
  INDEX `fk_DETALLE_FACTURA_FACTURAS1_idx` (`FACTURAS_idFactura` ASC),
  CONSTRAINT `fk_DETALLE_FACTURA_PRODUCTOS1`
    FOREIGN KEY (`PRODUCTOS_idProducto`)
    REFERENCES `autosiris_bbdd`.`PRODUCTOS` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_DETALLE_FACTURA_FACTURAS1`
    FOREIGN KEY (`FACTURAS_idFactura`)
    REFERENCES `autosiris_bbdd`.`FACTURAS` (`idFactura`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
