-- MySQL Script generated by MySQL Workbench
-- Thu Dec  1 01:05:59 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Club-Bentin
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `Club-Bentin` ;

-- -----------------------------------------------------
-- Schema Club-Bentin
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Club-Bentin` DEFAULT CHARACTER SET utf8 ;
USE `Club-Bentin` ;

-- -----------------------------------------------------
-- Table `Club-Bentin`.`Alumnos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Club-Bentin`.`Alumnos` ;

CREATE TABLE IF NOT EXISTS `Club-Bentin`.`Alumnos` (
  `ID_Alumnos` INT NOT NULL,
  `Nacimiento_Alumno` DATE NOT NULL,
  `Teléfono_Alumno` VARCHAR(9) NULL,
  `Nombres_Alumno` VARCHAR(45) NULL,
  `ApllidoM_Alumno` VARCHAR(45) NULL,
  `ApellidoP_Alumno` VARCHAR(45) NULL,
  `PadresFK` VARCHAR(45) NULL,
  PRIMARY KEY (`ID_Alumnos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Club-Bentin`.`Padres`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Club-Bentin`.`Padres` ;

CREATE TABLE IF NOT EXISTS `Club-Bentin`.`Padres` (
  `ID_Padres` INT NOT NULL,
  `Nombres_Padres` VARCHAR(45) NULL,
  `ApellidoM_Padres` VARCHAR(45) NULL,
  `ApellidoP_Padres` VARCHAR(45) NULL,
  PRIMARY KEY (`ID_Padres`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Club-Bentin`.`Productos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Club-Bentin`.`Productos` ;

CREATE TABLE IF NOT EXISTS `Club-Bentin`.`Productos` (
  `ID_Productos` INT NOT NULL,
  `Nombre_Productos` VARCHAR(25) NULL,
  `Categoría FK` VARCHAR(45) NULL,
  `Precio_Productos` INT NULL,
  `Stock_Productos` INT NULL,
  PRIMARY KEY (`ID_Productos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Club-Bentin`.`Categorías`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Club-Bentin`.`Categorías` ;

CREATE TABLE IF NOT EXISTS `Club-Bentin`.`Categorías` (
  `ID_Categorias` INT NOT NULL,
  `Tipo_Categorías` VARCHAR(45) NULL,
  PRIMARY KEY (`ID_Categorias`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Club-Bentin`.`Recibo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Club-Bentin`.`Recibo` ;

CREATE TABLE IF NOT EXISTS `Club-Bentin`.`Recibo` (
  `ID_Recibo` INT NOT NULL,
  `Pago_Recibo` FLOAT NULL,
  `Mes_Recibo` INT NULL,
  PRIMARY KEY (`ID_Recibo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Club-Bentin`.`Inscripciones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Club-Bentin`.`Inscripciones` ;

CREATE TABLE IF NOT EXISTS `Club-Bentin`.`Inscripciones` (
  `ID_inscripcion` INT NOT NULL,
  `Meses_inscripcion` INT NULL,
  `MesInicio_inscripcion` INT NULL,
  `Costo_Inscripción` VARCHAR(45) NULL,
  `PagoMensual_inscripcion` FLOAT NULL,
  PRIMARY KEY (`ID_inscripcion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Club-Bentin`.`Curso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Club-Bentin`.`Curso` ;

CREATE TABLE IF NOT EXISTS `Club-Bentin`.`Curso` (
  `ID_Curso` INT NOT NULL,
  PRIMARY KEY (`ID_Curso`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Club-Bentin`.`Usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Club-Bentin`.`Usuarios` ;

CREATE TABLE IF NOT EXISTS `Club-Bentin`.`Usuarios` (
  `ID_Usuarios` INT NOT NULL,
  `Nombre_Usuarios` VARCHAR(50) NOT NULL,
  `ApellidoM_Usuarios` VARCHAR(30) NOT NULL,
  `ApellidoP_Usuarios` VARCHAR(30) NOT NULL,
  `Nick_Usuarios` VARCHAR(20) NOT NULL,
  `Contraseña_Usuarios` VARCHAR(15) NOT NULL,
  `DNI_Usuarios` VARCHAR(45) NULL,
  `Email_Usuarios` VARCHAR(45) NULL,
  `Telefono_Usuarios` VARCHAR(9) NULL,
  PRIMARY KEY (`ID_Usuarios`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
