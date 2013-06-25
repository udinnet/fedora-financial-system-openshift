SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `ffs` ;
CREATE SCHEMA IF NOT EXISTS `ffs` DEFAULT CHARACTER SET utf8 ;
USE `ffs` ;

-- -----------------------------------------------------
-- Table `ffs`.`acos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ffs`.`acos` ;

CREATE  TABLE IF NOT EXISTS `ffs`.`acos` (
  `id` INT(10) NOT NULL AUTO_INCREMENT ,
  `parent_id` INT(10) NULL DEFAULT NULL ,
  `model` VARCHAR(255) NULL DEFAULT NULL ,
  `foreign_key` INT(10) NULL DEFAULT NULL ,
  `alias` VARCHAR(255) NULL DEFAULT NULL ,
  `lft` INT(10) NULL DEFAULT NULL ,
  `rght` INT(10) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 35
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ffs`.`groups`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ffs`.`groups` ;

CREATE  TABLE IF NOT EXISTS `ffs`.`groups` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(100) NOT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ffs`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ffs`.`users` ;

CREATE  TABLE IF NOT EXISTS `ffs`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(255) NOT NULL ,
  `email` VARCHAR(255) NOT NULL ,
  `group_id` INT(11) NOT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `username` (`username` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ffs`.`aros`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ffs`.`aros` ;

CREATE  TABLE IF NOT EXISTS `ffs`.`aros` (
  `id` INT(10) NOT NULL AUTO_INCREMENT ,
  `parent_id` INT(10) NULL DEFAULT NULL ,
  `model` VARCHAR(255) NULL DEFAULT NULL ,
  `foreign_key` INT(10) NULL DEFAULT NULL ,
  `alias` VARCHAR(255) NULL DEFAULT NULL ,
  `lft` INT(10) NULL DEFAULT NULL ,
  `rght` INT(10) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ffs`.`aros_acos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ffs`.`aros_acos` ;

CREATE  TABLE IF NOT EXISTS `ffs`.`aros_acos` (
  `id` INT(10) NOT NULL AUTO_INCREMENT ,
  `aro_id` INT(10) NOT NULL ,
  `aco_id` INT(10) NOT NULL ,
  `_create` VARCHAR(2) NOT NULL DEFAULT '0' ,
  `_read` VARCHAR(2) NOT NULL DEFAULT '0' ,
  `_update` VARCHAR(2) NOT NULL DEFAULT '0' ,
  `_delete` VARCHAR(2) NOT NULL DEFAULT '0' ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `ARO_ACO_KEY` (`aro_id` ASC, `aco_id` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ffs`.`accounts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ffs`.`accounts` ;

CREATE  TABLE IF NOT EXISTS `ffs`.`accounts` (
  `id` INT(11) NOT NULL ,
  `name` VARCHAR(255) NOT NULL ,
  `bring_fwd` TINYINT(1) NULL ,
  `description` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ffs`.`states`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ffs`.`states` ;

CREATE  TABLE IF NOT EXISTS `ffs`.`states` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
  `description` TEXT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ffs`.`region`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ffs`.`region` ;

CREATE  TABLE IF NOT EXISTS `ffs`.`region` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
  `short_name` VARCHAR(10) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ffs`.`tickets`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ffs`.`tickets` ;

CREATE  TABLE IF NOT EXISTS `ffs`.`tickets` (
  `id` INT(20) NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(255) NOT NULL ,
  `keywords` VARCHAR(255) NOT NULL ,
  `description` TEXT NOT NULL ,
  `created` DATETIME NOT NULL ,
  `modified` DATETIME NOT NULL ,
  `user_id` INT(11) NOT NULL ,
  `state_id` INT(11) NOT NULL ,
  `region_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ffs`.`ticket_fields`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ffs`.`ticket_fields` ;

CREATE  TABLE IF NOT EXISTS `ffs`.`ticket_fields` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ffs`.`transactions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ffs`.`transactions` ;

CREATE  TABLE IF NOT EXISTS `ffs`.`transactions` (
  `id` INT(30) NOT NULL AUTO_INCREMENT ,
  `amount` DECIMAL(15,2) NOT NULL ,
  `type` CHAR(1) NOT NULL ,
  `time` DATETIME NOT NULL ,
  `account_id` INT(11) NOT NULL ,
  `ticket_id` INT(20) NOT NULL ,
  `ticket_field_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ffs`.`tickets_ticket_fields`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ffs`.`tickets_ticket_fields` ;

CREATE  TABLE IF NOT EXISTS `ffs`.`tickets_ticket_fields` (
  `id` INT(20) NOT NULL ,
  `ticket_id` INT(20) NOT NULL ,
  `ticket_field_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ffs`.`rules`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ffs`.`rules` ;

CREATE  TABLE IF NOT EXISTS `ffs`.`rules` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `cr_account_id` INT(11) NOT NULL ,
  `dr_account_id` INT(11) NOT NULL ,
  `current_state_id` INT(11) NOT NULL ,
  `next_state_id` INT(11) NOT NULL ,
  `ticket_field_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

USE `ffs` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
